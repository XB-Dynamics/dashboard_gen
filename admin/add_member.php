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

// معالجة إرسال النموذج
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $role = $_POST['role'] ?? '';
    $grade = $_POST['grade'] ?? '';
    
    // التحقق من الحقول المطلوبة
    if (!empty($name) && !empty($email) && !empty($password) && !empty($phone) && !empty($role)) {
        
        // التحقق من صحة البريد الإلكتروني
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_message = "صيغة البريد الإلكتروني غير صحيحة!";
        } 
        // التحقق من صحة رقم التليفون (يحتوي على أرقام فقط وطول معقول)
        elseif (!preg_match('/^[0-9]{10,15}$/', $phone)) {
            $error_message = "رقم التليفون يجب أن يحتوي على أرقام فقط وبين 10 إلى 15 رقم!";
        }
        else {
            try {
                // التحقق من وجود البريد الإلكتروني مسبقاً
                $check_email_stmt = $pdo->prepare("
                    SELECT email FROM users WHERE email = ? 
                    UNION ALL 
                    SELECT email FROM admins WHERE email = ?
                ");
                $check_email_stmt->execute([$email, $email]);
                $existing_email = $check_email_stmt->fetch(PDO::FETCH_ASSOC);
                
                if ($existing_email) {
                    $error_message = "البريد الإلكتروني مسجل مسبقاً! يرجى استخدام بريد إلكتروني آخر.";
                } else {
                    if ($role === 'admin') {
                        // إضافة أدمن في جدول admins
                        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                        $stmt = $pdo->prepare("INSERT INTO admins (full_name, email, password, phone, created_at) VALUES (?, ?, ?, ?, NOW())");
                        $stmt->execute([$name, $email, $hashed_password, $phone]);
                        
                    } else if ($role === 'student') {
                        // إضافة طالب في جدول users
                        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                        
                        // تحويل المستوى الدراسي إلى التنسيق المناسب
                        $educationalStage = '';
                        $academicYear = '';
                        
                        switch($grade) {
                            case 'primary':
                                $educationalStage = 'primary';
                                $academicYear = '1';
                                break;
                            case 'preparatory':
                                $educationalStage = 'preparatory';
                                $academicYear = '1';
                                break;
                            case 'Secondary':
                                $educationalStage = 'Secondary';
                                $academicYear = '1';
                                break;
                            case 'Secondary-science':
                                $educationalStage = 'Secondary';
                                $academicYear = 'Secondary-science';
                                break;
                            case 'Secondary-Literature':
                                $educationalStage = 'Secondary';
                                $academicYear = 'Secondary-Literature';
                                break;
                        }
                        
                        $stmt = $pdo->prepare("INSERT INTO users (name, email, password, phone, country, date, type, educationalStage, academicYear, status) VALUES (?, ?, ?, ?, ?, NOW(), ?, ?, ?, ?)");
                        $country = ''; // يمكنك إضافة حقل للدولة في النموذج إذا أردت
                        $type = 'student';
                        $status = 'active';
                        $stmt->execute([$name, $email, $hashed_password, $phone, $country, $type, $educationalStage, $academicYear, $status]);
                    }
                    
                    $success_message = "تم إضافة العضو بنجاح!";
                }
                
            } catch (PDOException $e) {
                $error_message = "حدث خطأ أثناء إضافة العضو: " . $e->getMessage();
            }
        }
    } else {
        $error_message = "جميع الحقول مطلوبة! يرجى ملء جميع البيانات.";
    }
}

// جلب بيانات الأعضاء لعرضها
try {
    $users_result = $pdo->query("SELECT * FROM users ORDER BY date DESC");
    $admins_result = $pdo->query("SELECT * FROM admins ORDER BY created_at DESC");
} catch (PDOException $e) {
    $error_message = "حدث خطأ في جلب البيانات: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظام إدارة الأعضاء</title>
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
            max-width: 1200px;
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

        .points-btn {
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
        }

        .points-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .content-wrapper {
            max-width: 800px;
            width: 100%;
            margin: 0 auto;
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

        /* Member Form */
        .member-form {
            background: var(--gradient-card);
            border-radius: var(--radius-xl);
            padding: 2.5rem;
            box-shadow: var(--shadow-xl);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

        .form-section {
            margin-bottom: 2rem;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .section-title i {
            font-size: 1.25rem;
        }

        /* Input Groups */
        .input-group {
            margin-bottom: 1.5rem;
        }

        .input-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--light);
            font-size: 0.95rem;
        }

        .form-input {
            width: 100%;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-md);
            padding: 1rem 1.25rem;
            color: var(--light);
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.1);
        }

        .form-input::placeholder {
            color: var(--gray-light);
        }

        /* تحسين مظهر حقل التليفون */
        .form-input[type="tel"] {
            direction: ltr;
            text-align: right;
        }

        /* Dropdown Styles */
        .dropdown-container {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .dropdown-header {
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-md);
            padding: 1rem 1.25rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: var(--transition);
        }

        .dropdown-header:hover {
            border-color: rgba(255, 215, 0, 0.3);
            background: rgba(255, 255, 255, 0.08);
        }

        .dropdown-header.active {
            border-color: var(--primary);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.1);
        }

        .dropdown-title {
            font-weight: 500;
            color: var(--light);
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .dropdown-icon {
            color: var(--gray);
            transition: var(--transition);
        }

        .dropdown-header.active .dropdown-icon {
            transform: rotate(180deg);
            color: var(--primary);
        }

        .dropdown-list {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: var(--dark);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 0 0 var(--radius-md) var(--radius-md);
            margin-top: -2px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            z-index: 10;
            box-shadow: var(--shadow-lg);
        }

        .dropdown-list.active {
            max-height: 300px;
            overflow-y: auto;
        }

        .dropdown-item {
            padding: 1rem 1.25rem;
            cursor: pointer;
            transition: var(--transition);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .dropdown-item:last-child {
            border-bottom: none;
        }

        .dropdown-item:hover {
            background: rgba(255, 215, 0, 0.1);
            color: var(--primary);
        }

        .dropdown-item.selected {
            background: rgba(255, 215, 0, 0.15);
            color: var(--primary);
            font-weight: 600;
        }

        .item-icon {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-sm);
            font-size: 0.875rem;
        }

        /* Submit Button */
        .submit-section {
            text-align: center;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .submit-btn {
            background: var(--gradient-primary);
            color: var(--darker);
            border: none;
            border-radius: var(--radius-lg);
            padding: 1.25rem 3rem;
            font-size: 1.125rem;
            font-weight: 700;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: var(--shadow-lg);
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            position: relative;
            overflow: hidden;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-xl);
        }

        .submit-btn:active {
            transform: translateY(-1px);
        }

        .submit-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .submit-btn:hover::before {
            left: 100%;
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

        /* Members Table Section */
        .members-section {
            background: var(--gradient-card);
            border-radius: var(--radius-xl);
            padding: 2.5rem;
            box-shadow: var(--shadow-xl);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            display: none;
        }

        .members-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1.5rem;
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

        .role-badge {
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 600;
            display: inline-block;
        }

        .role-admin {
            background: rgba(255, 215, 0, 0.2);
            color: var(--primary);
        }

        .role-student {
            background: rgba(76, 175, 80, 0.2);
            color: #4CAF50;
        }

        .grade-badge {
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 600;
            background: rgba(33, 150, 243, 0.2);
            color: #2196F3;
            display: inline-block;
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

        /* Buttons */
        .action-btn {
            background: var(--gradient-primary);
            color: var(--darker);
            border: none;
            border-radius: var(--radius-md);
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: var(--shadow-md);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .secondary-btn {
            background: var(--gradient-dark);
            color: var(--light);
            border: 2px solid var(--primary);
        }

        .secondary-btn:hover {
            background: var(--gradient-primary);
            color: var(--darker);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header {
                padding: 1rem;
            }
            
            .header-content {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }
            
            .logo {
                justify-content: center;
            }
            
            .main-content {
                padding: 1rem;
            }
            
            .content-title {
                font-size: 2rem;
            }
            
            .content-subtitle {
                font-size: 1rem;
            }
            
            .member-form {
                padding: 1.5rem;
            }
            
            .section-title {
                font-size: 1.25rem;
            }
            
            .submit-btn {
                width: 100%;
                justify-content: center;
            }
            
            .members-section {
                padding: 1.5rem;
            }
            
            .members-table {
                display: block;
                overflow-x: auto;
            }
            
            .header-controls {
                flex-wrap: wrap;
                justify-content: center;
                gap: 0.5rem;
            }
            
            .back-btn, .action-btn {
                padding: 0.5rem 1rem;
                font-size: 0.875rem;
            }

            /* إخفاء عمود التليفون في الشاشات الصغيرة */
            .members-table th:nth-child(3),
            .members-table td:nth-child(3) {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .logo-title {
                font-size: 1.25rem;
            }
            
            .logo-subtitle {
                display: none;
            }
            
            .content-title {
                font-size: 1.75rem;
            }
            
            .member-form {
                padding: 1rem;
            }
            
            .form-input, .dropdown-header {
                padding: 0.875rem 1rem;
            }
            
            .points-btn {
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
                        <span class="logo-title">إضافة عضو</span>
                        <span class="logo-subtitle">نظام إدارة الأعضاء</span>
                    </div>
                </div>
                <div class="header-controls">
                    <button class="back-btn" onclick="goBack()">
                        <i class="fas fa-arrow-right"></i>
                        الرجوع للخلف
                    </button>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="main-content">
            <div class="content-wrapper">
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

                <!-- Welcome Section -->
                <div id="welcome-section" class="fade-in">
                    <div class="content-header">
                        <h1 class="content-title">إضافة عضو جديد 🚀</h1>
                        <p class="content-subtitle">أضف معلومات العضو الجديد مع تحديد الدور والمستوى الدراسي</p>
                    </div>

                    <!-- Member Form -->
                    <form class="member-form fade-in" method="POST" action="">
                        <div class="form-section">
                            <h3 class="section-title"><i class="fas fa-user-plus"></i> معلومات العضو الأساسية</h3>
                            
                            <!-- Name Input -->
                            <div class="input-group">
                                <label class="input-label">اسم العضو</label>
                                <input type="text" class="form-input" id="member-name" name="name" placeholder="أدخل الاسم الكامل" required>
                            </div>

                            <!-- Email Input -->
                            <div class="input-group">
                                <label class="input-label">البريد الإلكتروني</label>
                                <input type="email" class="form-input" id="member-email" name="email" placeholder="example@email.com" required>
                            </div>
                            <!-- Phone Input -->
                            <div class="input-group">
                                <label class="input-label">رقم التليفون</label>
                                <input type="tel" class="form-input" id="member-phone" name="phone" placeholder="أدخل رقم التليفون" required>
                            </div>

                            <!-- Password Input -->
                            <div class="input-group">
                                <label class="input-label">كلمة المرور</label>
                                <input type="password" class="form-input" id="member-password" name="password" placeholder="أدخل كلمة المرور" required>
                            </div>


                            <!-- Role Dropdown -->
                            <div class="input-group">
                                <label class="input-label">دور العضو</label>
                                <div class="dropdown-container">
                                    <div class="dropdown-header" id="role-dropdown">
                                        <span class="dropdown-title">
                                            <i class="fas fa-user-tag item-icon"></i>
                                            اختر دور العضو
                                        </span>
                                        <i class="fas fa-chevron-down dropdown-icon"></i>
                                    </div>
                                    <div class="dropdown-list" id="role-list">
                                        <div class="dropdown-item" data-value="admin">
                                            <i class="fas fa-crown item-icon"></i>
                                            أدمن
                                        </div>
                                        <div class="dropdown-item" data-value="student">
                                            <i class="fas fa-user-graduate item-icon"></i>
                                            طالب
                                        </div>
                                    </div>
                                    <input type="hidden" id="role-input" name="role" required>
                                </div>
                            </div>

                            <!-- Grade Dropdown (Visible only for students) -->
                            <div class="input-group" id="grade-section" style="display: none;">
                                <label class="input-label">المستوى الدراسي</label>
                                <div class="dropdown-container">
                                    <div class="dropdown-header" id="grade-dropdown">
                                        <span class="dropdown-title">
                                            <i class="fas fa-graduation-cap item-icon"></i>
                                            اختر المستوى الدراسي
                                        </span>
                                        <i class="fas fa-chevron-down dropdown-icon"></i>
                                    </div>
                                    <div class="dropdown-list" id="grade-list">
                                        <div class="dropdown-item" data-value="primary">
                                            <i class="fas fa-child item-icon"></i>
                                            طالب ابتدائي
                                        </div>
                                        <div class="dropdown-item" data-value="preparatory">
                                            <i class="fas fa-user item-icon"></i>
                                            طالب إعدادي
                                        </div>
                                        <div class="dropdown-item" data-value="Secondary">
                                            <i class="fas fa-user-graduate item-icon"></i>
                                            طالب أولى ثانوي
                                        </div>
                                        <div class="dropdown-item" data-value="Secondary-science">
                                            <i class="fas fa-flask item-icon"></i>
                                            طالب علمي علوم
                                        </div>
                                        <div class="dropdown-item" data-value="Secondary-Literature">
                                            <i class="fas fa-book item-icon"></i>
                                            طالب علمي أدبي
                                        </div>
                                    </div>
                                    <input type="hidden" id="grade-input" name="grade">
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="submit-section">
                            <button type="submit" class="submit-btn" id="submit-btn" disabled>
                                <i class="fas fa-save"></i>
                                إضافة العضو
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Members Table Section -->
                <div class="members-section" id="members-section">
                    <h3 class="section-title"><i class="fas fa-users"></i> قائمة الأعضاء</h3>
                    
                    <!-- Users Table -->
                    <h4 style="color: var(--primary); margin: 2rem 0 1rem 0;">الطلاب</h4>
                    <table class="members-table">
                        <thead>
                            <tr>
                                <th>الاسم</th>
                                <th>البريد الإلكتروني</th>
                                <th>التليفون</th>
                                <th>المستوى الدراسي</th>
                                <th>تاريخ الإضافة</th>
                                <th>الحالة</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($users_result) && $users_result): ?>
                                <?php while($user = $users_result->fetch(PDO::FETCH_ASSOC)): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($user['name']); ?></td>
                                        <td><?php echo htmlspecialchars($user['email']); ?></td>
                                        <td><?php echo htmlspecialchars($user['phone'] ?? '-'); ?></td>
                                        <td>
                                            <?php if (!empty($user['educationalStage'])): ?>
                                                <span class="grade-badge">
                                                    <?php 
                                                    $stage = $user['educationalStage'];
                                                    $year = $user['academicYear'];
                                                    echo getGradeText($stage, $year);
                                                    ?>
                                                </span>
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo htmlspecialchars($user['date']); ?></td>
                                        <td>
                                            <span class="role-badge role-student">
                                                <?php echo htmlspecialchars($user['status']); ?>
                                            </span>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" style="text-align: center; color: var(--gray);">
                                        لا توجد طلاب مضافة حتى الآن
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                    <!-- Admins Table -->
                    <h4 style="color: var(--primary); margin: 2rem 0 1rem 0;">المشرفين</h4>
                    <table class="members-table">
                        <thead>
                            <tr>
                                <th>الاسم</th>
                                <th>البريد الإلكتروني</th>
                                <th>التليفون</th>
                                <th>تاريخ الإضافة</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($admins_result) && $admins_result): ?>
                                <?php while($admin = $admins_result->fetch(PDO::FETCH_ASSOC)): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($admin['full_name']); ?></td>
                                        <td><?php echo htmlspecialchars($admin['email']); ?></td>
                                        <td><?php echo htmlspecialchars($admin['phone'] ?? '-'); ?></td>
                                        <td><?php echo htmlspecialchars($admin['created_at']); ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4" style="text-align: center; color: var(--gray);">
                                        لا توجد مشرفين مضافة حتى الآن
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                    <div class="submit-section">
                        <button class="action-btn secondary-btn" id="back-to-form">
                            <i class="fas fa-arrow-right"></i>
                            العودة إلى إضافة الأعضاء
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // DOM Elements
        const welcomeSection = document.getElementById('welcome-section');
        const membersSection = document.getElementById('members-section');

        // Form elements
        const memberName = document.getElementById('member-name');
        const memberEmail = document.getElementById('member-email');
        const memberPassword = document.getElementById('member-password');
        const memberPhone = document.getElementById('member-phone');
        const roleDropdown = document.getElementById('role-dropdown');
        const roleList = document.getElementById('role-list');
        const roleInput = document.getElementById('role-input');
        const gradeSection = document.getElementById('grade-section');
        const gradeDropdown = document.getElementById('grade-dropdown');
        const gradeList = document.getElementById('grade-list');
        const gradeInput = document.getElementById('grade-input');
        const submitBtn = document.getElementById('submit-btn');

        // Navigation buttons
        const backToFormBtn = document.getElementById('back-to-form');

        // Selected options
        let selectedRole = null;
        let selectedGrade = null;

        // تهيئة التطبيق
        function initializeApp() {
            setupEventListeners();
            
            // إظهار رسائل التنبيه لفترة محدودة
            setTimeout(() => {
                const alerts = document.querySelectorAll('.alert');
                alerts.forEach(alert => {
                    alert.style.display = 'none';
                });
            }, 5000);
        }

        // إعداد مستمعي الأحداث
        function setupEventListeners() {
            // Role dropdown
            roleDropdown.addEventListener('click', function() {
                toggleDropdown(this, roleList);
            });

            // Grade dropdown
            gradeDropdown.addEventListener('click', function() {
                toggleDropdown(this, gradeList);
            });

            // Role selection
            roleList.addEventListener('click', function(e) {
                const item = e.target.closest('.dropdown-item');
                if (item) {
                    const value = item.getAttribute('data-value');
                    const text = item.textContent;
                    const icon = item.querySelector('i').className;
                    
                    // Update dropdown header
                    roleDropdown.querySelector('.dropdown-title').innerHTML = `<i class="${icon}"></i>${text}`;
                    roleDropdown.classList.remove('active');
                    roleList.classList.remove('active');
                    
                    // Remove selected class from all items
                    roleList.querySelectorAll('.dropdown-item').forEach(i => i.classList.remove('selected'));
                    
                    // Add selected class to clicked item
                    item.classList.add('selected');
                    
                    // Store selected role
                    selectedRole = value;
                    roleInput.value = value;
                    
                    // Show/hide grade section based on role
                    if (value === 'student') {
                        gradeSection.style.display = 'block';
                    } else {
                        gradeSection.style.display = 'none';
                        selectedGrade = null;
                        gradeInput.value = '';
                        gradeDropdown.querySelector('.dropdown-title').innerHTML = '<i class="fas fa-graduation-cap item-icon"></i>اختر المستوى الدراسي';
                        gradeList.querySelectorAll('.dropdown-item').forEach(i => i.classList.remove('selected'));
                    }
                    
                    // Enable submit button if all required fields are filled
                    checkSubmitButton();
                }
            });

            // Grade selection
            gradeList.addEventListener('click', function(e) {
                const item = e.target.closest('.dropdown-item');
                if (item) {
                    const value = item.getAttribute('data-value');
                    const text = item.textContent;
                    const icon = item.querySelector('i').className;
                    
                    // Update dropdown header
                    gradeDropdown.querySelector('.dropdown-title').innerHTML = `<i class="${icon}"></i>${text}`;
                    gradeDropdown.classList.remove('active');
                    gradeList.classList.remove('active');
                    
                    // Remove selected class from all items
                    gradeList.querySelectorAll('.dropdown-item').forEach(i => i.classList.remove('selected'));
                    
                    // Add selected class to clicked item
                    item.classList.add('selected');
                    
                    // Store selected grade
                    selectedGrade = value;
                    gradeInput.value = value;
                    
                    // Enable submit button if all required fields are filled
                    checkSubmitButton();
                }
            });

            // Form input validation
            memberName.addEventListener('input', checkSubmitButton);
            memberEmail.addEventListener('input', checkSubmitButton);
            memberPassword.addEventListener('input', checkSubmitButton);
            memberPhone.addEventListener('input', checkSubmitButton);

            // Navigation
            backToFormBtn.addEventListener('click', showForm);
        }

        // تبديل القائمة المنسدلة
        function toggleDropdown(dropdown, list) {
            const isActive = dropdown.classList.contains('active');
            
            // إغلاق جميع القوائم المنسدلة
            document.querySelectorAll('.dropdown-header').forEach(d => d.classList.remove('active'));
            document.querySelectorAll('.dropdown-list').forEach(l => l.classList.remove('active'));
            
            // تبديل القائمة الحالية إذا لم تكن نشطة
            if (!isActive) {
                dropdown.classList.add('active');
                list.classList.add('active');
            }
        }

        // التحقق من زر الإرسال
        function checkSubmitButton() {
            const nameValid = memberName.value.trim() !== '';
            const emailValid = memberEmail.value.trim() !== '';
            const passwordValid = memberPassword.value.trim() !== '';
            const phoneValid = memberPhone.value.trim() !== '';
            const roleValid = selectedRole !== null;
            
            let gradeValid = true;
            if (selectedRole === 'student') {
                gradeValid = selectedGrade !== null;
            }
            
            if (nameValid && emailValid && passwordValid && phoneValid && roleValid && gradeValid) {
                submitBtn.disabled = false;
            } else {
                submitBtn.disabled = true;
            }
        }

        // إظهار نموذج الإضافة
        function showForm() {
            membersSection.style.display = 'none';
            welcomeSection.style.display = 'block';
        }

        // إغلاق القوائم المنسدلة عند النقر خارجها
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.dropdown-container')) {
                document.querySelectorAll('.dropdown-header').forEach(d => d.classList.remove('active'));
                document.querySelectorAll('.dropdown-list').forEach(l => l.classList.remove('active'));
            }
        });

        function goBack() {
            // التحقق إذا كان هناك صفحة سابقة في التاريخ
            if (document.referrer && document.referrer !== window.location.href) {
                window.history.back();
            } else {
                // إذا لم تكن هناك صفحة سابقة، التوجيه للوحة التحكم
                window.location.href = 'index.php';
            }
        }

        // بدء التطبيق عند تحميل الصفحة
        document.addEventListener('DOMContentLoaded', initializeApp);
    </script>
</body>
</html>

<?php
// دالة مساعدة لتحويل المستوى الدراسي إلى نص
function getGradeText($stage, $year) {
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