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

// التحقق من وجود المعرف والنوع
if (!isset($_GET['id']) || !isset($_GET['type'])) {
    header("Location: manage_members.php");
    exit();
}

$member_id = $_GET['id'];
$member_type = $_GET['type'];

// جلب بيانات العضو
try {
    if ($member_type === 'admin') {
        $stmt = $pdo->prepare("SELECT * FROM admins WHERE id = ?");
        $stmt->execute([$member_id]);
        $member_data = $stmt->fetch(PDO::FETCH_ASSOC);
        $table_name = 'admins';
    } else {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$member_id]);
        $member_data = $stmt->fetch(PDO::FETCH_ASSOC);
        $table_name = 'users';
    }

    if (!$member_data) {
        header("Location: manage_members.php");
        exit();
    }
} catch (PDOException $e) {
    $error_message = "حدث خطأ في جلب البيانات: " . $e->getMessage();
}

// معالجة تحديث البيانات
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $status = $_POST['status'] ?? '';
    $educationalStage = $_POST['educationalStage'] ?? '';
    $academicYear = $_POST['academicYear'] ?? '';
    $points = $_POST['points'] ?? '';
    
    // التحقق من الحقول المطلوبة
    if (!empty($name) && !empty($email)) {
        try {
            if ($member_type === 'admin') {
                $stmt = $pdo->prepare("
                    UPDATE admins 
                    SET full_name = ?, email = ?, phone = ?
                    WHERE id = ?
                ");
                $stmt->execute([$name, $email, $phone, $member_id]);
            } else {
                // الحفاظ على قيمة النقاط الحالية إذا لم يتم إدخال قيمة جديدة
                if ($points === '') {
                    $points = $member_data['points'] ?? 0;
                }
                
                $stmt = $pdo->prepare("
                    UPDATE users 
                    SET name = ?, email = ?, phone = ?, status = ?, 
                        educationalStage = ?, academicYear = ?, points = ?
                    WHERE id = ?
                ");
                $stmt->execute([$name, $email, $phone, $status, $educationalStage, $academicYear, $points, $member_id]);
            }
            
            $success_message = "تم تحديث بيانات العضو بنجاح!";
            
            // إعادة جلب البيانات المحدثة
            if ($member_type === 'admin') {
                $stmt = $pdo->prepare("SELECT * FROM admins WHERE id = ?");
                $stmt->execute([$member_id]);
                $member_data = $stmt->fetch(PDO::FETCH_ASSOC);
            } else {
                $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
                $stmt->execute([$member_id]);
                $member_data = $stmt->fetch(PDO::FETCH_ASSOC);
            }
            
        } catch (PDOException $e) {
            $error_message = "حدث خطأ أثناء التحديث: " . $e->getMessage();
        }
    } else {
        $error_message = "الاسم والبريد الإلكتروني حقلان مطلوبان!";
    }
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
    <title>تعديل العضو - نظام الإدارة</title>
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
            max-width: 1200px;
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

        /* Edit Form */
        .edit-section {
            background: var(--gradient-card);
            border-radius: var(--radius-xl);
            padding: 2.5rem;
            box-shadow: var(--shadow-xl);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            margin-bottom: 2rem;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

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

        .form-select {
            width: 100%;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-md);
            padding: 1rem 1.25rem;
            color: var(--light);
            font-size: 1rem;
            transition: var(--transition);
            cursor: pointer;
        }

        .form-select:focus {
            outline: none;
            border-color: var(--primary);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.1);
        }

        .form-select option {
            background: var(--dark);
            color: var(--light);
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 1rem;
            justify-content: flex-end;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .btn {
            padding: 1rem 2rem;
            border: none;
            border-radius: var(--radius-lg);
            font-weight: 700;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            font-size: 1rem;
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: var(--darker);
            box-shadow: var(--shadow-md);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: var(--light);
            border: 2px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }

        .btn-secondary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
            border-color: rgba(255, 215, 0, 0.3);
            background: rgba(255, 255, 255, 0.15);
        }

        /* Member Info Card */
        .info-card {
            background: var(--gradient-card);
            border-radius: var(--radius-xl);
            padding: 2rem;
            box-shadow: var(--shadow-lg);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            margin-bottom: 2rem;
        }

        .info-header {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .member-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--primary);
        }

        .member-info h3 {
            font-size: 1.5rem;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .member-info p {
            color: var(--gray);
            margin-bottom: 0.25rem;
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

        /* Points Badge */
        .points-badge {
            background: linear-gradient(135deg, #FFD700, #FFA500);
            color: #000;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .header {
                padding: 1rem;
            }
            
            .main-content {
                padding: 1rem;
            }
            
            .nav-links {
                display: none;
            }
            
            .content-title {
                font-size: 2rem;
            }
            
            .edit-section {
                padding: 1.5rem;
            }
            
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
            
            .info-header {
                flex-direction: column;
                text-align: center;
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
                        <i class="fas fa-user-edit"></i>
                    </div>
                    <div class="logo-text">
                        <span class="logo-title">تعديل العضو</span>
                        <span class="logo-subtitle">نظام إدارة الأعضاء</span>
                    </div>
                </div>
                
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
                <h1 class="content-title">تعديل بيانات العضو 🛠️</h1>
                <p class="content-subtitle">تحديث معلومات <?php echo $member_type === 'admin' ? 'المشرف' : 'الطالب'; ?> في النظام</p>
            </div>

            <!-- Member Info Card -->
            <div class="info-card fade-in">
                <div class="info-header">
                    <img src="<?php echo !empty($member_data['profile_image']) ? $member_data['profile_image'] : '../../assets/default-avatar.png'; ?>" 
                         class="member-avatar" alt="صورة العضو">
                    <div class="member-info">
                        <h3>
                            <?php echo htmlspecialchars($member_type === 'admin' ? $member_data['full_name'] : $member_data['name']); ?>
                            <span class="badge <?php echo $member_type === 'admin' ? 'badge-admin' : 'badge-student'; ?>">
                                <?php echo $member_type === 'admin' ? 'مشرف' : 'طالب'; ?>
                            </span>
                        </h3>
                        <p><i class="fas fa-envelope me-2"></i><?php echo htmlspecialchars($member_data['email']); ?></p>
                        <p><i class="fas fa-phone me-2"></i><?php echo !empty($member_data['phone']) ? htmlspecialchars($member_data['phone']) : 'لم يتم إضافة رقم هاتف'; ?></p>
                        <?php if ($member_type === 'student'): ?>
                            <p><i class="fas fa-graduation-cap me-2"></i>
                                <?php echo getGradeText($member_data['educationalStage'], $member_data['academicYear']); ?>
                            </p>
                            <p><i class="fas fa-star me-2"></i>
                                <span class="points-badge">
                                    <i class="fas fa-coins"></i>
                                    <?php echo !empty($member_data['points']) ? $member_data['points'] . ' نقطة' : '0 نقطة'; ?>
                                </span>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Edit Form -->
            <div class="edit-section fade-in">
                <h3 class="section-title">
                    <i class="fas fa-edit"></i>
                    معلومات <?php echo $member_type === 'admin' ? 'المشرف' : 'الطالب'; ?>
                </h3>

                <form method="POST">
                    <div class="form-grid">
                        <!-- الاسم -->
                        <div class="input-group">
                            <label class="input-label">الاسم الكامل</label>
                            <input type="text" class="form-input" name="name" 
                                   value="<?php echo htmlspecialchars($member_type === 'admin' ? $member_data['full_name'] : $member_data['name']); ?>" 
                                   required>
                        </div>

                        <!-- البريد الإلكتروني -->
                        <div class="input-group">
                            <label class="input-label">البريد الإلكتروني</label>
                            <input type="email" class="form-input" name="email" 
                                   value="<?php echo htmlspecialchars($member_data['email']); ?>" 
                                   required>
                        </div>

                        <!-- الهاتف -->
                        <div class="input-group">
                            <label class="input-label">رقم الهاتف</label>
                            <input type="tel" class="form-input" name="phone" 
                                   value="<?php echo !empty($member_data['phone']) ? htmlspecialchars($member_data['phone']) : ''; ?>" 
                                   placeholder="أدخل رقم الهاتف">
                        </div>

                        <?php if ($member_type === 'student'): ?>
                            <!-- الحالة -->
                            <div class="input-group">
                                <label class="input-label">حالة الحساب</label>
                                <select class="form-select" name="status" required>
                                    <option value="active" <?php echo $member_data['status'] === 'active' ? 'selected' : ''; ?>>نشط</option>
                                    <option value="inactive" <?php echo $member_data['status'] === 'inactive' ? 'selected' : ''; ?>>غير نشط</option>
                                    <option value="banned" <?php echo $member_data['status'] === 'banned' ? 'selected' : ''; ?>>محظور</option>
                                </select>
                            </div>

                            <!-- المستوى الدراسي -->
                            <div class="input-group">
                                <label class="input-label">المستوى الدراسي</label>
                                <select class="form-select" name="educationalStage">
                                    <option value="">اختر المستوى الدراسي</option>
                                    <option value="primary" <?php echo $member_data['educationalStage'] === 'primary' ? 'selected' : ''; ?>>ابتدائي</option>
                                    <option value="preparatory" <?php echo $member_data['educationalStage'] === 'preparatory' ? 'selected' : ''; ?>>إعدادي</option>
                                    <option value="Secondary" <?php echo $member_data['educationalStage'] === 'Secondary' ? 'selected' : ''; ?>>ثانوي</option>
                                </select>
                            </div>

                            <!-- السنة الدراسية -->
                            <div class="input-group">
                                <label class="input-label">السنة الدراسية</label>
                                <select class="form-select" name="academicYear">
                                    <option value="">اختر السنة الدراسية</option>
                                    <option value="1" <?php echo $member_data['academicYear'] === '1' ? 'selected' : ''; ?>>الأولى</option>
                                    <option value="Secondary-science" <?php echo $member_data['academicYear'] === 'Secondary-science' ? 'selected' : ''; ?>>علمي علوم</option>
                                    <option value="Secondary-Literature" <?php echo $member_data['academicYear'] === 'Secondary-Literature' ? 'selected' : ''; ?>>علمي أدبي</option>
                                </select>
                            </div>

                            <!-- النقاط -->
                            <div class="input-group">
                                <label class="input-label">النقاط</label>
                                <input type="number" class="form-input" name="points" 
                                       value="<?php echo !empty($member_data['points']) ? $member_data['points'] : '0'; ?>" 
                                       placeholder="أدخل عدد النقاط" min="0" step="1">
                                <small style="color: var(--gray); margin-top: 0.5rem; display: block;">
                                    <i class="fas fa-info-circle"></i> اترك الحقل فارغاً للحفاظ على النقاط الحالية
                                </small>
                            </div>

                        <?php endif; ?>
                    </div>

                    <!-- Action Buttons -->
                    <div class="action-buttons">
                        <a href="manage_members.php" class="btn btn-secondary">
                            <i class="fas fa-arrow-right"></i>
                            العودة للقائمة
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i>
                            حفظ التعديلات
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script>
        // إخفاء رسائل التنبيه تلقائياً بعد 5 ثواني
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                alert.style.display = 'none';
            });
        }, 5000);

        // إضافة تحسينات للتفاعل
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('.form-input, .form-select');
            
            inputs.forEach(input => {
                // إضافة تأثير عند التركيز
                input.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'translateY(-2px)';
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'translateY(0)';
                });
            });

            // منع إدخال قيم سالبة في حقل النقاط
            const pointsInput = document.querySelector('input[name="points"]');
            if (pointsInput) {
                pointsInput.addEventListener('input', function() {
                    if (this.value < 0) {
                        this.value = 0;
                    }
                });
            }
        });
    </script>
</body>
</html>