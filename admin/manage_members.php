<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once '../../connect/connect.php';

// جلب بيانات المسؤول من الجلسة
if (!isset($_SESSION["admin"]) || !$_SESSION["admin"]) {
    header("Location: ../../index.php");
    exit();
}

$admin_id = $_SESSION["user_id"];

// جلب بيانات المسؤول من قاعدة البيانات
$admin_query = "SELECT * FROM admins WHERE id = :id";
$admin_stmt = $pdo->prepare($admin_query);
$admin_stmt->bindParam(':id', $admin_id, PDO::PARAM_INT);
$admin_stmt->execute();
$admin_data = $admin_stmt->fetch(PDO::FETCH_ASSOC);

if (!$admin_data) {
    die("لم يتم العثور على بيانات المسؤول!");
}

// معالجة إضافة النقاط
if (isset($_POST['points_amount']) && isset($_POST['user_id'])) {
    $points_amount = intval($_POST['points_amount']);
    $user_id = intval($_POST['user_id']);
    
    try {
        // بدء transaction
        $pdo->beginTransaction();
        
        // 1. تحديث النقاط في جدول users
        $update_points_stmt = $pdo->prepare("
            UPDATE users 
            SET points = COALESCE(points, 0) + ?, 
                points_last_updated = NOW() 
            WHERE id = ?
        ");
        $update_points_stmt->execute([$points_amount, $user_id]);
        
        // 2. إضافة السجل في جدول user_points_history (بدون عمود reason)
        $expiry_date = date('Y-m-d H:i:s', strtotime('+1 month'));
        $history_stmt = $pdo->prepare("
            INSERT INTO user_points_history 
            (user_id, points_added, points_remaining, added_date, expiry_date, is_expired) 
            VALUES (?, ?, ?, NOW(), ?, 0)
        ");
        $history_stmt->execute([$user_id, $points_amount, $points_amount, $expiry_date]);
        
        // تأكيد transaction
        $pdo->commit();
        
        $success_message = "تم إضافة {$points_amount} نقطة للطالب بنجاح!";
        
    } catch (PDOException $e) {
        // تراجع عن transaction في حالة الخطأ
        $pdo->rollBack();
        $error_message = "حدث خطأ أثناء إضافة النقاط: " . $e->getMessage();
    }
}

// معالجة حذف العضو
if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    $type = $_GET['type'];
    
    try {
        if ($type === 'admin') {
            // منع حذف المسؤول الحالي
            if ($id == $admin_id) {
                $error_message = "لا يمكن حذف حسابك الشخصي!";
            } else {
                $stmt = $pdo->prepare("DELETE FROM admins WHERE id = ?");
                $stmt->execute([$id]);
                $success_message = "تم حذف المشرف بنجاح!";
            }
        } else if ($type === 'student') {
            $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
            $stmt->execute([$id]);
            $success_message = "تم حذف الطالب بنجاح!";
        }
    } catch (PDOException $e) {
        $error_message = "حدث خطأ أثناء الحذف: " . $e->getMessage();
    }
}

// معالجة تحديث حالة العضو
if (isset($_POST['update_status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];
    $type = $_POST['type'];
    
    try {
        if ($type === 'student') {
            $stmt = $pdo->prepare("UPDATE users SET status = ? WHERE id = ?");
            $stmt->execute([$status, $id]);
            $success_message = "تم تحديث حالة الطالب بنجاح!";
        }
    } catch (PDOException $e) {
        $error_message = "حدث خطأ أثناء التحديث: " . $e->getMessage();
    }
}

// البحث والتصفية
$search = $_GET['search'] ?? '';
$role_filter = $_GET['role'] ?? '';
$status_filter = $_GET['status'] ?? '';

// بناء استعلام البحث
$where_conditions = [];
$params = [];

if (!empty($search)) {
    $where_conditions[] = "(u.name LIKE ? OR u.email LIKE ? OR a.full_name LIKE ? OR a.email LIKE ?)";
    $search_term = "%$search%";
    $params = array_merge($params, [$search_term, $search_term, $search_term, $search_term]);
}

if (!empty($role_filter)) {
    if ($role_filter === 'admin') {
        $where_conditions[] = "a.id IS NOT NULL";
    } else {
        $where_conditions[] = "u.type = ?";
        $params[] = $role_filter;
    }
}

if (!empty($status_filter)) {
    $where_conditions[] = "u.status = ?";
    $params[] = $status_filter;
}

// جلب بيانات الأعضاء مع البحث
$query = "
    SELECT 
        'student' as type,
        u.id,
        u.name as full_name,
        u.email,
        u.phone,
        u.date as created_at,
        u.status,
        u.educationalStage,
        u.academicYear,
        u.points,
        NULL as profile_image
    FROM users u
    WHERE 1=1
    " . (!empty($where_conditions) ? " AND " . implode(" AND ", $where_conditions) : "") . "
    
    UNION ALL
    
    SELECT 
        'admin' as type,
        a.id,
        a.full_name,
        a.email,
        a.phone,
        a.created_at,
        'active' as status,
        NULL as educationalStage,
        NULL as academicYear,
        NULL as points,
        a.profile_image
    FROM admins a
    WHERE 1=1
    " . (!empty($search) ? " AND (a.full_name LIKE ? OR a.email LIKE ?)" : "") . "
    ORDER BY created_at DESC
";

// إضافة معاملات البحث للمشرفين
if (!empty($search)) {
    $search_term = "%$search%";
    $params = array_merge($params, [$search_term, $search_term]);
}

try {
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
    $members = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $error_message = "حدث خطأ في جلب البيانات: " . $e->getMessage();
    $members = [];
}

// دالة مساعدة لتحويل المستوى الدراسي إلى نص
function getGradeText($stage, $year) {
    if (empty($stage)) return '-';
    
    switch($stage) {
        case 'primary':
            return 'طالب ابتدائي';
        case 'preparatory':
            return 'طالب إعدادي';
        case 'Secondary':
            if ($year === '1') return 'طالب أولى ثانوي';
            if ($year === 'Secondary-science') return 'طالب علمي علوم';
            if ($year === 'Secondary-Literature') return 'طالب علمي أدبي';
            return 'طالب ثانوي';
        default:
            return 'غير محدد';
    }
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الأعضاء - نظام الإدارة</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;600;700;800&display=swap');

        :root {
            --primary: hsl(43, 74%, 49%);
            --primary-light: hsl(43, 74%, 59%);
            --primary-dark: hsl(43, 74%, 39%);
            --dark: hsl(240, 2%, 13%);
            --darker: hsl(0, 0%, 7%);
            --light: hsl(0, 0%, 98%);
            --gray: hsl(0, 0%, 84%);
            --gray-light: hsla(0, 0%, 84%, 0.7);
            
            --gradient-primary: linear-gradient(135deg, hsl(43, 74%, 49%), hsl(33, 74%, 49%));
            --gradient-dark: linear-gradient(135deg, hsl(240, 2%, 13%), hsl(240, 2%, 8%));
            --gradient-card: linear-gradient(135deg, hsla(240, 1%, 18%, 0.8), hsla(240, 2%, 11%, 0.9));
            
            --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.1);
            --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.15);
            --shadow-lg: 0 8px 32px rgba(0, 0, 0, 0.2);
            --shadow-xl: 0 16px 48px rgba(0, 0, 0, 0.25);
            
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
            --radius-xl: 20px;
            --radius-full: 50%;
            
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --transition-slow: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Tajawal', sans-serif;
        }

        body {
            background: var(--darker);
            color: var(--light);
            line-height: 1.6;
            min-height: 100vh;
            padding: 0;
            overflow-x: hidden;
        }

        /* Layout */
        .app-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header */
        .header {
            background: var(--gradient-dark);
            padding: 1rem 2rem;
            box-shadow: var(--shadow-lg);
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 3px solid var(--primary);
        }

        .header-content {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logo-icon {
            width: 50px;
            height: 50px;
            background: var(--gradient-primary);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow-md);
        }

        .logo-icon i {
            color: var(--darker);
            font-size: 1.5rem;
        }

        .logo-text {
            display: flex;
            flex-direction: column;
        }

        .logo-title {
            font-size: 1.5rem;
            font-weight: 800;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            line-height: 1.2;
        }

        .logo-subtitle {
            font-size: 0.875rem;
            color: var(--gray);
            font-weight: 400;
        }

        .nav-links {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .nav-link {
            color: var(--light);
            text-decoration: none;
            padding: 0.75rem 1.5rem;
            border-radius: var(--radius-md);
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 500;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            color: var(--primary);
        }

        .nav-link.active {
            background: var(--gradient-primary);
            color: var(--darker);
            box-shadow: var(--shadow-md);
        }

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 2rem;
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
        }

        .content-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .content-title {
            font-size: 2.5rem;
            font-weight: 800;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .content-subtitle {
            font-size: 1.125rem;
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Statistics Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: var(--gradient-card);
            border-radius: var(--radius-xl);
            padding: 1.5rem;
            box-shadow: var(--shadow-lg);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            transition: var(--transition);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        .stat-header {
            display: flex;
            justify-content: between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            background: var(--gradient-primary);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--darker);
            font-size: 1.25rem;
        }

        .stat-content h3 {
            font-size: 2rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .stat-content p {
            color: var(--gray);
            font-size: 0.9rem;
        }

        /* Search and Filter */
        .search-section {
            background: var(--gradient-card);
            border-radius: var(--radius-xl);
            padding: 2rem;
            box-shadow: var(--shadow-lg);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            margin-bottom: 2rem;
        }

        .search-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr auto;
            gap: 1rem;
            align-items: end;
        }

        .search-box {
            position: relative;
        }

        .search-input {
            width: 100%;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-md);
            padding: 1rem 3rem 1rem 1.25rem;
            color: var(--light);
            font-size: 1rem;
            transition: var(--transition);
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.1);
        }

        .search-icon {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
        }

        .filter-select {
            width: 100%;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-md);
            padding: 1rem 1.25rem;
            color: var(--light);
            font-size: 1rem;
            transition: var(--transition);
        }

        .filter-select:focus {
            outline: none;
            border-color: var(--primary);
            background: rgba(255, 255, 255, 0.08);
        }

        .search-btn {
            background: var(--gradient-primary);
            color: var(--darker);
            border: none;
            border-radius: var(--radius-md);
            padding: 1rem 2rem;
            font-weight: 700;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: var(--shadow-md);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .search-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        /* Members Table */
        .members-section {
            background: var(--gradient-card);
            border-radius: var(--radius-xl);
            padding: 2rem;
            box-shadow: var(--shadow-xl);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

        .section-header {
            display: flex;
            justify-content: between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .add-btn {
            background: var(--gradient-primary);
            color: var(--darker);
            border: none;
            border-radius: var(--radius-md);
            padding: 0.75rem 1.5rem;
            font-weight: 700;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: var(--shadow-md);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
        }

        .add-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
            color: var(--darker);
        }

        .members-table {
            width: 100%;
            border-collapse: collapse;
            background: rgba(255, 255, 255, 0.05);
            border-radius: var(--radius-md);
            overflow: hidden;
        }

        .members-table th {
            background: rgba(255, 215, 0, 0.1);
            color: var(--primary);
            padding: 1.25rem 1rem;
            text-align: right;
            font-weight: 600;
            border-bottom: 2px solid rgba(255, 255, 255, 0.1);
        }

        .members-table td {
            padding: 1.25rem 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            color: var(--gray);
        }

        .members-table tr:last-child td {
            border-bottom: none;
        }

        .members-table tr:hover {
            background: rgba(255, 255, 255, 0.03);
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .badge {
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 600;
            display: inline-block;
        }

        .badge-admin {
            background: rgba(255, 215, 0, 0.2);
            color: var(--primary);
        }

        .badge-student {
            background: rgba(76, 175, 80, 0.2);
            color: #4CAF50;
        }

        .badge-grade {
            background: rgba(33, 150, 243, 0.2);
            color: #2196F3;
        }

        .badge-points {
            background: rgba(156, 39, 176, 0.2);
            color: #9C27B0;
        }

        .badge-you {
            background: rgba(3, 169, 244, 0.2);
            color: #03A9F4;
        }

        .status-select {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-sm);
            padding: 0.5rem;
            color: var(--light);
            font-size: 0.875rem;
            min-width: 120px;
        }

        .action-buttons {
            display: flex;
            gap: 0.5rem;
        }

        .btn-action {
            padding: 0.5rem;
            border: none;
            border-radius: var(--radius-sm);
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
        }

        .btn-edit {
            background: rgba(33, 150, 243, 0.2);
            color: #2196F3;
        }

        .btn-edit:hover {
            background: rgba(33, 150, 243, 0.3);
        }

        .btn-delete {
            background: rgba(244, 67, 54, 0.2);
            color: #f44336;
        }

        .btn-delete:hover {
            background: rgba(244, 67, 54, 0.3);
        }

        .btn-points {
            background: rgba(156, 39, 176, 0.2);
            color: #9C27B0;
        }

        .btn-points:hover {
            background: rgba(156, 39, 176, 0.3);
        }

        /* Alert Messages */
        .alert {
            padding: 1rem 1.5rem;
            border-radius: var(--radius-md);
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            animation: fadeIn 0.5s ease-in-out;
        }

        .alert-success {
            background: rgba(76, 175, 80, 0.2);
            color: #4CAF50;
            border: 1px solid rgba(76, 175, 80, 0.3);
        }

        .alert-error {
            background: rgba(244, 67, 54, 0.2);
            color: #f44336;
            border: 1px solid rgba(244, 67, 54, 0.3);
        }

        .alert i {
            font-size: 1.25rem;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 3rem 2rem;
            color: var(--gray);
        }

        .empty-state i {
            font-size: 4rem;
            margin-bottom: 1rem;
            opacity: 0.5;
        }

        /* مودال إضافة النقاط */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 1000;
            backdrop-filter: blur(5px);
        }

        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: var(--gradient-card);
            border-radius: var(--radius-xl);
            width: 90%;
            max-width: 500px;
            box-shadow: var(--shadow-xl);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .modal-header {
            padding: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-title {
            color: var(--primary);
            font-size: 1.25rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .modal-close {
            background: none;
            border: none;
            color: var(--gray);
            font-size: 1.25rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .modal-close:hover {
            color: var(--primary);
        }

        .modal-body {
            padding: 1.5rem;
        }

        .modal-footer {
            padding: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            gap: 1rem;
            justify-content: flex-end;
        }

        .user-info {
            background: rgba(255, 255, 255, 0.05);
            padding: 1rem;
            border-radius: var(--radius-md);
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .user-info strong {
            color: var(--primary);
        }

        .info-note {
            background: rgba(3, 169, 244, 0.1);
            border: 1px solid rgba(3, 169, 244, 0.2);
            border-radius: var(--radius-md);
            padding: 1rem;
            margin-top: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #03A9F4;
            font-size: 0.875rem;
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: var(--darker);
            border: none;
            border-radius: var(--radius-md);
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: var(--light);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: var(--radius-md);
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .back-btn {
            background: var(--gradient-dark);
            color: var(--light);
            border: 2px solid var(--primary);
            border-radius: var(--radius-md);
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: var(--shadow-md);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
        }

        .back-btn:hover {
            background: var(--gradient-primary);
            color: var(--darker);
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .header-controls {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .search-grid {
                grid-template-columns: 1fr;
            }
            
            .nav-links {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .header {
                padding: 1rem;
            }
            
            .main-content {
                padding: 1rem;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .content-title {
                font-size: 2rem;
            }
            
            .members-table {
                display: block;
                overflow-x: auto;
            }
            
            .section-header {
                flex-direction: column;
                gap: 1rem;
                align-items: stretch;
            }
            
            .header-controls {
                flex-wrap: wrap;
                justify-content: center;
                gap: 0.5rem;
            }
            
            .back-btn {
                padding: 0.5rem 1rem;
                font-size: 0.875rem;
            }
        }

        /* Animation Classes */
        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="app-container">
        <!-- Header -->
        <header class="header">
            <div class="header-content">
                <div class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="logo-text">
                        <span class="logo-title">إدارة الأعضاء</span>
                        <span class="logo-subtitle">نظام إدارة الأعضاء</span>
                    </div>
                </div>
                
                <nav class="nav-links">
                    <button class="back-btn" onclick="goBack()">
                        <i class="fas fa-arrow-right"></i>
                        الرجوع للخلف
                    </button>

                    <a href="manage_members.php" class="nav-link active">
                        <i class="fas fa-users"></i>
                        إدارة الأعضاء
                    </a>
                </nav>
            </div>
        </header>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Alert Messages -->
            <?php if (isset($success_message)): ?>
                <div class="alert alert-success fade-in">
                    <i class="fas fa-check-circle"></i>
                    <?php echo $success_message; ?>
                </div>
            <?php endif; ?>

            <?php if (isset($error_message)): ?>
                <div class="alert alert-error fade-in">
                    <i class="fas fa-exclamation-circle"></i>
                    <?php echo $error_message; ?>
                </div>
            <?php endif; ?>

            <!-- Content Header -->
            <div class="content-header fade-in">
                <h1 class="content-title">إدارة الأعضاء 🚀</h1>
                <p class="content-subtitle">إدارة جميع المشرفين والطلاب في النظام مع إمكانية البحث والتصفية</p>
            </div>

            <!-- Statistics Cards -->
            <div class="stats-grid fade-in">
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="stat-content">
                        <h3><?php echo count($members); ?></h3>
                        <p>إجمالي الأعضاء</p>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-icon">
                            <i class="fas fa-crown"></i>
                        </div>
                    </div>
                    <div class="stat-content">
                        <h3><?php echo count(array_filter($members, function($m) { return $m['type'] === 'admin'; })); ?></h3>
                        <p>المشرفين</p>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                    </div>
                    <div class="stat-content">
                        <h3><?php echo count(array_filter($members, function($m) { 
                            return $m['type'] === 'student' && $m['status'] === 'active'; 
                        })); ?></h3>
                        <p>الطلاب النشطين</p>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                    </div>
                    <div class="stat-content">
                        <h3><?php echo count(array_filter($members, function($m) { 
                            return $m['type'] === 'student' && $m['status'] === 'inactive'; 
                        })); ?></h3>
                        <p>بانتظار التفعيل</p>
                    </div>
                </div>
            </div>

            <!-- Search and Filter -->
            <div class="search-section fade-in">
                <form method="GET" class="search-grid">
                    <div class="search-box">
                        <input type="text" class="search-input" name="search" placeholder="ابحث بالاسم أو البريد الإلكتروني..." value="<?php echo htmlspecialchars($search); ?>">
                        <i class="fas fa-search search-icon"></i>
                    </div>
                    
                    <select class="filter-select" name="role">
                        <option value="">جميع الأدوار</option>
                        <option value="admin" <?php echo $role_filter === 'admin' ? 'selected' : ''; ?>>مشرفين</option>
                        <option value="student" <?php echo $role_filter === 'student' ? 'selected' : ''; ?>>طلاب</option>
                    </select>
                    
                    <select class="filter-select" name="status">
                        <option value="">جميع الحالات</option>
                        <option value="active" <?php echo $status_filter === 'active' ? 'selected' : ''; ?>>نشط</option>
                        <option value="inactive" <?php echo $status_filter === 'inactive' ? 'selected' : ''; ?>>غير نشط</option>
                        <option value="banned" <?php echo $status_filter === 'banned' ? 'selected' : ''; ?>>محظور</option>
                    </select>
                    
                    <button type="submit" class="search-btn">
                        <i class="fas fa-filter"></i>
                        تصفية
                    </button>
                </form>
            </div>

            <!-- Members Table -->
            <div class="members-section fade-in">
                <div class="section-header">
                    <h3 class="section-title">
                        <i class="fas fa-list"></i>
                        قائمة الأعضاء
                    </h3>
                    <a href="add_member.php" class="add-btn">
                        <i class="fas fa-user-plus"></i>
                        إضافة عضو جديد
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="members-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>البريد الإلكتروني</th>
                                <th>الهاتف</th>
                                <th>الدور</th>
                                <th>المستوى الدراسي</th>
                                <th>النقاط</th>
                                <th>الحالة</th>
                                <th>تاريخ الإضافة</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($members)): ?>
                                <tr>
                                    <td colspan="11">
                                        <div class="empty-state">
                                            <i class="fas fa-users"></i>
                                            <p>لا توجد أعضاء لعرضها</p>
                                        </div>
                                    </td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($members as $index => $member): ?>
                                    <tr>
                                        <td><?php echo $index + 1; ?></td>
                                        <td>
                                            <strong><?php echo htmlspecialchars($member['full_name']); ?></strong>
                                            <?php if ($member['type'] === 'admin' && $member['id'] == $admin_id): ?>
                                                <span class="badge badge-you">أنت</span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo htmlspecialchars($member['email']); ?></td>
                                        <td><?php echo !empty($member['phone']) ? htmlspecialchars($member['phone']) : '-'; ?></td>
                                        <td>
                                            <span class="badge <?php echo $member['type'] === 'admin' ? 'badge-admin' : 'badge-student'; ?>">
                                                <?php echo $member['type'] === 'admin' ? 'مشرف' : 'طالب'; ?>
                                            </span>
                                        </td>
                                        <td>
                                            <?php if ($member['type'] === 'student'): ?>
                                                <span class="badge badge-grade">
                                                    <?php echo getGradeText($member['educationalStage'], $member['academicYear']); ?>
                                                </span>
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if ($member['type'] === 'student' && !empty($member['points'])): ?>
                                                <span class="badge badge-points">
                                                    <i class="fas fa-star me-1"></i>
                                                    <?php echo $member['points']; ?>
                                                </span>
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if ($member['type'] === 'student'): ?>
                                                <form method="POST" class="d-inline">
                                                    <input type="hidden" name="id" value="<?php echo $member['id']; ?>">
                                                    <input type="hidden" name="type" value="student">
                                                    <select name="status" class="status-select" onchange="this.form.submit()">
                                                        <option value="active" <?php echo $member['status'] === 'active' ? 'selected' : ''; ?>>نشط</option>
                                                        <option value="inactive" <?php echo $member['status'] === 'inactive' ? 'selected' : ''; ?>>غير نشط</option>
                                                        <option value="banned" <?php echo $member['status'] === 'banned' ? 'selected' : ''; ?>>محظور</option>
                                                    </select>
                                                </form>
                                            <?php else: ?>
                                                <span class="badge badge-student">نشط</span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo date('Y-m-d', strtotime($member['created_at'])); ?></td>
                                        <td>
                                            <div class="action-buttons">
                                                <?php if ($member['type'] === 'student'): ?>
                                                    <button class="btn-action btn-points" 
                                                            title="إضافة نقاط"
                                                            onclick="openAddPointsModal(<?php echo $member['id']; ?>, '<?php echo htmlspecialchars($member['full_name']); ?>')">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                <?php endif; ?>

                                                <a href="edit_member.php?type=<?php echo $member['type']; ?>&id=<?php echo $member['id']; ?>" 
                                                   class="btn-action btn-edit" title="تعديل">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <?php if ($member['type'] === 'admin' && $member['id'] != $admin_id): ?>
                                                    <a href="?delete=1&type=admin&id=<?php echo $member['id']; ?>" 
                                                       class="btn-action btn-delete" 
                                                       title="حذف"
                                                       onclick="return confirm('هل أنت متأكد من حذف هذا المشرف؟')">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                <?php elseif ($member['type'] === 'student'): ?>
                                                    <a href="?delete=1&type=student&id=<?php echo $member['id']; ?>" 
                                                       class="btn-action btn-delete" 
                                                       title="حذف"
                                                       onclick="return confirm('هل أنت متأكد من حذف هذا الطالب؟')">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <!-- مودال إضافة النقاط -->
    <div id="pointsModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">
                    <i class="fas fa-plus-circle"></i>
                    إضافة نقاط للطالب
                </h3>
                <button class="modal-close" onclick="closePointsModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <form id="pointsForm" method="POST">
                <input type="hidden" id="points_user_id" name="user_id">
                
                <div class="modal-body">
                    <div class="user-info">
                        <strong>الطالب:</strong>
                        <span id="points_user_name"></span>
                    </div>
                    
                    <div class="input-group">
                        <label class="input-label">عدد النقاط</label>
                        <input type="number" 
                               class="form-input" 
                               id="points_amount" 
                               name="points_amount" 
                               min="1" 
                               max="1000000" 
                               value="10"
                               required>
                    </div>
                    
                    <div class="info-note">
                        <i class="fas fa-info-circle"></i>
                        <span>سيتم إضافة النقاط إلى رصيد الطالب وتنتهي صلاحيتها بعد شهر من الإضافة.</span>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn-secondary" onclick="closePointsModal()">
                        <i class="fas fa-times"></i>
                        إلغاء
                    </button>
                    <button type="submit" class="btn-primary">
                        <i class="fas fa-check"></i>
                        إضافة النقاط
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // إخفاء رسائل التنبيه تلقائياً بعد 5 ثواني
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                alert.style.display = 'none';
            });
        }, 5000);

        function goBack() {
            // التحقق إذا كان هناك صفحة سابقة في التاريخ
            if (document.referrer && document.referrer !== window.location.href) {
                window.history.back();
            } else {
                // إذا لم تكن هناك صفحة سابقة، التوجيه للوحة التحكم
                window.location.href = 'index.php';
            }
        }

        // فتح مودال إضافة النقاط
        function openAddPointsModal(userId, userName) {
            document.getElementById('points_user_id').value = userId;
            document.getElementById('points_user_name').textContent = userName;
            document.getElementById('pointsModal').style.display = 'block';
        }

        // إغلاق مودال إضافة النقاط
        function closePointsModal() {
            document.getElementById('pointsModal').style.display = 'none';
            document.getElementById('pointsForm').reset();
        }

        // إغلاق المودال عند النقر خارج المحتوى
        window.addEventListener('click', function(event) {
            const modal = document.getElementById('pointsModal');
            if (event.target === modal) {
                closePointsModal();
            }
        });
    </script>
</body>
</html>