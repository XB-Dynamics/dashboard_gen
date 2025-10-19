<?php
session_start();
// التحقق من أن المستخدم مسجل الدخول
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: ../../index.php");
    exit();
}

// جلب بيانات المستخدم من الجلسة
$userName = $_SESSION["user_name"] ?? "مستخدم";
$educationalStage = $_SESSION["educationalStage"] ?? "غير محدد";
$points = $_SESSION["points"] ?? 0;

// جلب بيانات إضافية من قاعدة البيانات إذا لزم الأمر
require_once '../../connect/connect.php';

// استعلام للحصول على بيانات المستخدم الإضافية
$userId = $_SESSION['user_id'] ?? 0;
$userEmail = $_SESSION['user_email'] ?? '';
$userPhone = $_SESSION['user_phone'] ?? '';

// إذا كانت البيانات ناقصة، جلبها من قاعدة البيانات
if (empty($userEmail) || empty($userPhone)) {
    if ($userId > 0) {
        $stmt = $pdo->prepare("SELECT email, phone FROM users WHERE id = ?");
        $stmt->execute([$userId]);
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($userData) {
            $userEmail = $userData['email'] ?? 'user@geniusaipro.online';
            $userPhone = $userData['phone'] ?? '01000000000';
            $_SESSION['user_email'] = $userEmail;
            $_SESSION['user_phone'] = $userPhone;
        }
    }
}

// التحقق من النقاط وتوجيه المستخدم إذا كان لديه نقاط
if ($points > 0) {
    // إذا كان المستخدم لديه نقاط، قم بتوجيهه إلى index.php
    header("Location: index.php");
    exit();
}

// إذا كانت البيانات لا تزال ناقصة، استخدم قيم افتراضية
$userFirstName = explode(' ', $userName)[0] ?? 'مستخدم';
$userLastName = count(explode(' ', $userName)) > 1 ? explode(' ', $userName)[1] : 'GeniusAI';
$userEmail = $userEmail ?: 'user@geniusaipro.online';
$userPhone = $userPhone ?: '01000000000';
$userAddress = $_SESSION['user_address'] ?? 'عنوان المستخدم';
$userId = $_SESSION['user_id'] ?? '0';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius AI - نظام Quiz Maker المتكامل</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* إضافة شريط المعلومات في الأعلى */
        .user-info-bar {
            background: var(--bg-gradient-jet);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--jet);
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow2);
        }
        
        .user-details {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .user-name {
            font-weight: var(--fw600);
            color: var(--orange-yellow-crayola);
        }
        
        .user-stage {
            background: var(--text-gradient-blue);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: var(--fw600);
        }
        
        .logout-btn {
            background: var(--text-gradient-red);
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 50px;
            cursor: pointer;
            font-weight: var(--fw600);
            transition: var(--transition1);
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }
        
        .logout-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow3);
        }
        
        /* باقي الأنماط الأصلية */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800&display=swap');

        :root {
            --bg-gradient-onyx: linear-gradient(
            to bottom right,
            hsl(240, 1%, 25%) 3%,
            hsl(0, 0%, 19%) 97%
            );
            --bg-gradient-jet: linear-gradient(
                to bottom right,
                hsla(240, 1%, 18%, 0.251) 3%,
                hsla(240, 2%, 11%, 0) 100%
                ),
                hsl(240, 2%, 13%);
            --bg-gradient-yellow1: linear-gradient(
                to bottom right,
                hsl(45, 100%, 71%) 0%,
                hsla(36, 100%, 69%, 0) 50%
            );
            --bg-gradient-yellow2: linear-gradient(
                135deg,
                hsla(45, 100%, 71%, 0.251) 0%,
                hsla(35, 100%, 68%, 0) 59.86%
                ),
                hsl(240, 2%, 13%);
            --border-gradient-onyx: linear-gradient(
                to bottom right,
                hsl(0, 0%, 25%) 0%,
                hsla(0, 0%, 25%, 0) 50%
            );
            --text-gradient-yellow: linear-gradient(
                to right,
                hsl(45, 100%, 72%),
                hsl(35, 100%, 68%)
            );
            --text-gradient-blue: linear-gradient(
                to right,
                hsl(210, 100%, 60%),
                hsl(190, 100%, 60%)
            );
            --text-gradient-green: linear-gradient(
                to right,
                hsl(120, 100%, 40%),
                hsl(90, 100%, 40%)
            );
            --text-gradient-red: linear-gradient(
                to right,
                hsl(0, 100%, 60%),
                hsl(20, 100%, 60%)
            );
            --text-gradient-purple: linear-gradient(
                to right,
                hsl(270, 100%, 60%),
                hsl(290, 100%, 60%)
            );
            --text-gradient-orange: linear-gradient(
                to right,
                hsl(30, 100%, 60%),
                hsl(50, 100%, 60%)
            );

            --jet: hsl(0, 0%, 22%);
            --onyx: hsl(240, 1%, 17%);
            --eerie-black1: hsl(240, 2%, 13%);
            --eerie-black2: hsl(240, 2%, 12%);
            --smoky-black: hsl(0, 0%, 7%);
            --white1: hsl(0, 0%, 100%);
            --white2: hsl(0, 0%, 98%);
            --orange-yellow-crayola: hsl(45, 100%, 72%);
            --vegas-gold: hsl(45, 54%, 58%);
            --light-gray: hsl(0, 0%, 84%);
            --light-gray70: hsla(0, 0%, 84%, 0.7);
            --bittersweet-shimmer: hsl(0, 43%, 51%);

            --ff-poppins: "Poppins", "Tajawal", sans-serif;

            --fs1: 24px;
            --fs2: 18px;
            --fs3: 17px;
            --fs4: 16px;
            --fs5: 15px;
            --fs6: 14px;
            --fs7: 13px;
            --fs8: 12px;

            --fw300: 300;
            --fw400: 400;
            --fw500: 500;
            --fw600: 600;
            --fw700: 700;
            --fw800: 800;

            --shadow1: -4px 8px 24px hsla(0, 0%, 0%, 0.25);
            --shadow2: 0px 16px 30px hsla(0, 0%, 0%, 0.25);
            --shadow3: 0px 16px 40px hsla(0, 0%, 0%, 0.25);
            --shadow4: 0px 25px 50px hsla(0, 0%, 0%, 0.15);
            --shadow5: 0px 24px 80px hsla(0, 0%, 0%, 0.25);

            --transition1: 0.25s ease;
            --transition2: 0.5s ease-in-out;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--ff-poppins);
        }

        body {
            background: var(--smoky-black);
            color: var(--white2);
            line-height: 1.6;
            min-height: 100vh;
            padding: 0;
            text-align: right;
            direction: rtl;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .main-title {
            font-size: 2.8rem;
            margin-bottom: 10px;
            background: var(--text-gradient-yellow);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: var(--fw800);
        }

        .subtitle {
            color: var(--light-gray);
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .points-badge {
            display: inline-block;
            background: var(--text-gradient-yellow);
            color: var(--smoky-black);
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 1.5rem;
            font-weight: var(--fw800);
            margin: 20px 0;
            box-shadow: var(--shadow3);
            animation: pulse 2s infinite;
        }

        .tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .tab {
            padding: 12px 25px;
            background: var(--border-gradient-onyx);
            border-radius: 12px;
            cursor: pointer;
            transition: var(--transition1);
            font-weight: var(--fw600);
        }

        .tab.active {
            background: var(--text-gradient-yellow);
            color: var(--smoky-black);
        }

        .tab:hover:not(.active) {
            background: var(--bg-gradient-yellow2);
        }

        .content-section {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .content-section.active {
            display: block;
        }

        .card {
            background: var(--border-gradient-onyx);
            border-radius: 20px;
            box-shadow: var(--shadow5);
            padding: 30px;
            text-align: right;
            position: relative;
            overflow: hidden;
            z-index: 1;
            margin-bottom: 30px;
        }

        .card::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .card-title {
            font-size: 1.8rem;
            margin-bottom: 20px;
            font-weight: var(--fw700);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quiz-maker .card-title { background: var(--text-gradient-yellow); -webkit-background-clip: text; background-clip: text; color: transparent; }
        .train-models .card-title { background: var(--text-gradient-blue); -webkit-background-clip: text; background-clip: text; color: transparent; }
        .explanations .card-title { background: var(--text-gradient-green); -webkit-background-clip: text; background-clip: text; color: transparent; }
        .ready-models .card-title { background: var(--text-gradient-purple); -webkit-background-clip: text; background-clip: text; color: transparent; }
        .reports .card-title { background: var(--text-gradient-red); -webkit-background-clip: text; background-clip: text; color: transparent; }
        .invitations .card-title { background: var(--text-gradient-blue); -webkit-background-clip: text; background-clip: text; color: transparent; }

        .feature-list {
            list-style: none;
            margin: 20px 0;
        }

        .feature-item {
            padding: 15px 0;
            display: block;
            border-bottom: 1px dashed var(--jet);
            color: var(--text-color);
            transition: var(--transition1);
        }

        .feature-item:last-child {
            border-bottom: none;
        }

        .feature-content {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .feature-item i {
            font-size: 1.3rem;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: var(--transition1);
            flex-shrink: 0;
        }

        .quiz-maker .feature-item i { background: rgba(255, 193, 7, 0.1); color: var(--orange-yellow-crayola); }
        .train-models .feature-item i { background: rgba(60, 140, 255, 0.1); color: hsl(210, 100%, 65%); }
        .explanations .feature-item i { background: rgba(60, 220, 60, 0.1); color: hsl(120, 100%, 60%); }
        .ready-models .feature-item i { background: rgba(180, 60, 255, 0.1); color: hsl(270, 100%, 70%); }
        .reports .feature-item i { background: rgba(255, 60, 60, 0.1); color: hsl(0, 100%, 70%); }
        .invitations .feature-item i { background: rgba(60, 180, 255, 0.1); color: hsl(200, 100%, 65%); }

        .feature-text {
            flex: 1;
            font-size: var(--fs5);
        }

        .badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 12px;
            font-size: var(--fs7);
            margin-right: 8px;
            font-weight: var(--fw600);
        }

        .quiz-maker .badge { background: var(--text-gradient-yellow); color: var(--smoky-black); }
        .train-models .badge { background: var(--text-gradient-blue); color: white; }
        .explanations .badge { background: var(--text-gradient-green); color: white; }
        .ready-models .badge { background: var(--text-gradient-purple); color: white; }
        .reports .badge { background: var(--text-gradient-red); color: white; }
        .invitations .badge { background: var(--text-gradient-blue); color: white; }

        .model-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .model-card {
            background: var(--border-gradient-onyx);
            border-radius: 15px;
            padding: 20px;
            transition: var(--transition1);
        }

        .model-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow3);
        }

        .model-title {
            font-size: 1.2rem;
            margin-bottom: 15px;
            font-weight: var(--fw600);
        }

        .model-details {
            color: var(--light-gray);
            font-size: var(--fs6);
        }

        .model-details ul {
            padding: 10px 20px;
        }

        .model-details li {
            margin-bottom: 8px;
        }

        .btn-subscribe {
            display: block;
            width: 100%;
            padding: 18px;
            background: var(--text-gradient-yellow);
            color: var(--smoky-black);
            border: none;
            border-radius: 50px;
            font-weight: var(--fw700);
            font-size: 1.2rem;
            cursor: pointer;
            transition: var(--transition1);
            margin-top: 30px;
            box-shadow: var(--shadow3);
            position: relative;
            overflow: hidden;
            z-index: 1;
            text-decoration: none;
            text-align: center;
        }

        .btn-subscribe::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.1));
            opacity: 0;
            transition: var(--transition1);
            z-index: -1;
        }

        .btn-subscribe:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow4);
        }

        .btn-subscribe:hover::before {
            opacity: 1;
        }

        /* تأثيرات إضافية */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
           100% { transform: scale(1); }
        }

        .card {
            animation: fadeIn 0.6s ease;
        }

        /* تحسينات التجاوب */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            
            .main-title {
                font-size: 2.2rem;
            }
            
            .points-badge {
                font-size: 1.2rem;
                padding: 8px 16px;
            }
            
            .tabs {
                flex-direction: column;
                gap: 5px;
            }
            
            .tab {
                padding: 10px 15px;
                text-align: center;
            }
            
            .user-info-bar {
                padding: 10px 15px;
                flex-direction: column;
                gap: 10px;
            }
            
            .user-details {
                flex-direction: column;
                gap: 10px;
            }
        }

        @media (max-width: 480px) {
            .main-title {
                font-size: 1.8rem;
            }
            
            .subtitle {
                font-size: 1rem;
            }
            
            .card {
                padding: 20px 15px;
            }
            
            .btn-subscribe {
                padding: 15px;
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <!-- شريط معلومات المستخدم -->
    <div class="user-info-bar">
        <div class="user-details">
            <div class="user-name">
                <i class="fas fa-user"></i> <?php echo htmlspecialchars($userName); ?>
            </div>
            <div class="user-stage">
                <i class="fas fa-graduation-cap"></i> <?php echo htmlspecialchars($educationalStage); ?>
            </div>
        </div>
        <a href="logout.php" class="logout-btn">
            <i class="fas fa-sign-out-alt"></i> تسجيل الخروج
        </a>
    </div>

    <div class="container">
        <div class="header">
            <h1 class="main-title">Genius AI</h1>
            <p class="subtitle">أنشئ اختبارات مخصصة، درّب نماذج ذكية، واحصل على تقارير تحليلية مفصلة</p>
            <div class="points-badge">
                <i class="fas fa-coins"></i> رصيدك: <?php echo $points; ?> نقطة
            </div>
        </div>

        <div class="tabs">
            <div class="tab active" data-target="quiz-maker">Quiz Maker</div>
            <div class="tab" data-target="train-models">Train Models</div>
            <div class="tab" data-target="explanations">Explanations</div>
            <div class="tab" data-target="ready-models">Ready Models</div>
            <div class="tab" data-target="reports">Reports</div>
            <div class="tab" data-target="invitations">Invitations</div>
        </div>

        <div class="content-section quiz-maker active">
            <div class="card quiz-maker">
                <h2 class="card-title"><i class="fas fa-question-circle"></i> Quiz Maker</h2>
                <p>أداة متكاملة لإنشاء اختبارات مخصصة بسهولة وسرعة مع خيارات متعددة</p>
                
                <ul class="feature-list">
                    <li class="feature-item">
                        <div class="feature-content">
                            <i class="fas fa-check"></i>
                            <div class="feature-text">
                                <span class="badge">Multiple Choice</span>
                                <span>إنشاء أسئلة اختيارية مع إجابات متعددة</span>
                            </div>
                        </div>
                    </li>
                    
                    <li class="feature-item">
                        <div class="feature-content">
                            <i class="fas fa-check-double"></i>
                            <div class="feature-text">
                                <span class="badge">True/False</span>
                                <span>إنشاء أسئلة صح/خطأ مع تصحيح تلقائي</span>
                            </div>
                        </div>
                    </li>
                    
                    <li class="feature-item">
                        <div class="feature-content">
                            <i class="fas fa-pen"></i>
                            <div class="feature-text">
                                <span class="badge">Short Answer</span>
                                <span>أسئلة الإجابات القصيرة مع تقييم ذكي</span>
                            </div>
                        </div>
                    </li>
                    
                    <li class="feature-item">
                        <div class="feature-content">
                            <i class="fas fa-cogs"></i>
                            <div class="feature-text">
                                <span class="badge">Auto Generator</span>
                                <span>مولد أسئلة تلقائي من المحتوى المقدم</span>
                            </div>
                        </div>
                    </li>
                    
                    <li class="feature-item">
                        <div class="feature-content">
                            <i class="fas fa-link"></i>
                            <div class="feature-text">
                                <span class="badge">Sharing</span>
                                <span>مشاركة الامتحان برابط مباشر مع الآخرين</span>
                            </div>
                        </div>
                    </li>
                    
                    <li class="feature-item">
                        <div class="feature-content">
                            <i class="fas fa-clock"></i>
                            <div class="feature-text">
                                <span class="badge">Time Settings</span>
                                <span>ضبط زمن الامتحان وعدد المحاولات المسموحة</span>
                            </div>
                        </div>
                    </li>
                    
                    <li class="feature-item">
                        <div class="feature-content">
                            <i class="fas fa-chart-bar"></i>
                            <div class="feature-text">
                                <span class="badge">Auto Grading</span>
                                <span>توليد درجات تلقائيًا مع تقارير أداء مفصلة</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="content-section train-models">
            <div class="card train-models">
                <h2 class="card-title"><i class="fas fa-robot"></i> Train Models</h2>
                <p>درّب نماذج ذكية خاصة بك باستخدام محتواك الخاص بطرق متعددة</p>
                
                <ul class="feature-list">
                    <li class="feature-item">
                        <div class="feature-content">
                            <i class="fas fa-file-pdf"></i>
                            <div class="feature-text">
                                <span class="badge">PDF Upload</span>
                                <span>رفع ملفات PDF لتدريب النموذج على محتواها</span>
                            </div>
                        </div>
                    </li>
                    
                    <li class="feature-item">
                        <div class="feature-content">
                            <i class="fab fa-youtube"></i>
                            <div class="feature-text">
                                <span class="badge">YouTube Link</span>
                                <span>إدخال رابط فيديو YouTube لاستخدام محتواه في التدريب</span>
                            </div>
                        </div>
                    </li>
                    
                    <li class="feature-item">
                        <div class="feature-content">
                            <i class="fas fa-sliders-h"></i>
                            <div class="feature-text">
                                <span class="badge">Advanced Settings</span>
                                <span>تحكم كامل في إعدادات التدريب ومستوى التفاصيل</span>
                            </div>
                        </div>
                    </li>
                    
                    <li class="feature-item">
                        <div class="feature-content">
                            <i class="fas fa-code-branch"></i>
                            <div class="feature-text">
                                <span class="badge">Version Control</span>
                                <span>حفظ إصدارات متعددة من النموذج المدرب</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="content-section explanations">
            <div class="card explanations">
                <h2 class="card-title"><i class="fas fa-chalkboard-teacher"></i> Explanations</h2>
                <p>احصل على شروحات مبسطة ومنظمة من أي نوع من المحتوى</p>
                
                <ul class="feature-list">
                    <li class="feature-item">
                        <div class="feature-content">
                            <i class="fas fa-file-alt"></i>
                            <div class="feature-text">
                                <span class="badge">Smart Generation</span>
                                <span>توليد شروحات ذكية من أي مصدر (نص/فيديو/ملف)</span>
                            </div>
                        </div>
                    </li>
                    
                    <li class="feature-item">
                        <div class="feature-content">
                            <i class="fas fa-slideshare"></i>
                            <div class="feature-text">
                                <span class="badge">Slide Export</span>
                                <span>تصدير الشرح كعرض تقديمي جاهز للاستخدام</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="content-section ready-models">
            <div class="card ready-models">
                <h2 class="card-title"><i class="fas fa-cubes"></i> Ready Models</h2>
                <p>استخدم نماذجنا الجاهزة المصممة خصيصًا لكل مادة ونوع محتوى</p>
                
                <div class="model-grid">
                    <div class="model-card">
                        <h3 class="model-title">Math Equations</h3>
                        <div class="model-details">
                            <p>حل معادلات رياضية مع شرح خطوات الحل والرسم البياني</p>
                            <ul>
                                <li>يحل معادلات جبرية وهندسية</li>
                                <li>يرسم الرسوم البيانية للدوال</li>
                                <li>يشرح خطوات الحل بالتفصيل</li>
                                <li>يدعم الإدخال النصي والصور للمعادلات</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="model-card">
                        <h3 class="model-title">Grammar Corrector</h3>
                        <div class="model-details">
                            <p>تحليل الجمل النحوية وتصحيح الأخطاء الإعرابية</p>
                            <ul>
                                <li>يصحح الأخطاء النحوية في النصوص</li>
                                <li>يقدم شرحاً مفصلاً للإعراب</li>
                                <li>يحلل الجمل ويحدد أنواعها</li>
                                <li>يدعم الإدخال النصي والصوتي</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="model-card">
                        <h3 class="model-title">Rhetoric Analysis</h3>
                        <div class="model-details">
                            <p>شرح الاستعارات والتشبيهات والصور البلاغية في النصوص</p>
                            <ul>
                                <li>يحلل المحسنات البديعية في النصوص</li>
                                <li>يشرح الصور البيانية والاستعارات</li>
                                <li>يحدد عناصر الجمال الأدبي</li>
                                <li>يقيم الأساليب البلاغية المستخدمة</li>
                            </ul>
                        </div>
                    </div>

                    <div class="model-card">
                        <h3 class="model-title">Science Problems</h3>
                        <div class="model-details">
                            <p>حل مسائل العلوم المختلفة مع شرح المفاهيم العلمية</p>
                            <ul>
                                <li>يحل مسائل الفيزياء مع شرح القوانين</li>
                                <li>يشرح التفاعلات الكيميائية وتحليل النتائج</li>
                                <li>يحلل الظواهر البيولوجية والعمليات الحيوية</li>
                                <li>يدعم الإدخال النصي والصور للمسائل</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section reports">
            <div class="card reports">
                <h2 class="card-title"><i class="fas fa-chart-line"></i> Reports</h2>
                <p>تقارير مفصلة عن الأداء والتقدم مع تحليلات متقدمة</p>
                
                <ul class="feature-list">
                    <li class="feature-item">
                        <div class="feature-content">
                            <i class="fas fa-chart-bar"></i>
                            <div class="feature-text">
                                <span class="badge">Detailed Reports</span>
                                <span>تقارير درجات تفصيلية لكل امتحان ومقارنة عبر الزمن</span>
                            </div>
                        </div>
                    </li>
                    
                    <li class="feature-item">
                        <div class="feature-content">
                            <i class="fas fa-balance-scale"></i>
                            <div class="feature-text">
                                <span class="badge">Strength Analysis</span>
                                <span>تحليل نقاط القوة والضعف واقتراح مواد تدريبية مخصصة</span>
                            </div>
                        </div>
                    </li>
                    
                    <li class="feature-item">
                        <div class="feature-content">
                            <i class="fas fa-history"></i>
                            <div class="feature-text">
                                <span class="badge">Progress Tracking</span>
                                <span>سجل تقدم زمني وتقارير سلوكية عن أداء الطالب</span>
                            </div>
                        </div>
                    </li>
                    
                    <li class="feature-item">
                        <div class="feature-content">
                            <i class="fas fa-download"></i>
                            <div class="feature-text">
                                <span class="badge">Export</span>
                                <span>تصدير النتائج بصيغ CSV وPDF للاحتفاظ بها</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="content-section invitations">
            <div class="card invitations">
                <h2 class="card-title"><i class="fas fa-user-friends"></i> Invitations</h2>
                <p>ادعُ أصدقاءك للمشاركة في الامتحانات والمراجعة الجماعية</p>
                
                <ul class="feature-list">
                    <li class="feature-item">
                        <div class="feature-content">
                            <i class="fas fa-users"></i>
                            <div class="feature-text">
                                <span class="badge">Group Sharing</span>
                                <span>دعوة حتى 3 أصدقاء لاستخدام نفس الامتحان</span>
                            </div>
                        </div>
                    </li>
                    
                    <li class="feature-item">
                        <div class="feature-content">
                            <i class="fas fa-user-shield"></i>
                            <div class="feature-text">
                                <span class="badge">Permission Control</span>
                                <span>صلاحيات مختلفة: حل الامتحان، رؤية النتائج، أو المراجعة</span>
                            </div>
                        </div>
                    </li>
                    
                    <li class="feature-item">
                        <div class="feature-content">
                            <i class="fas fa-link"></i>
                            <div class="feature-text">
                                <span class="badge">Easy Sharing</span>
                                <span>مشاركة سهلة برابط أو رمز دعوة</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <a href="payment_page.php" class="btn-subscribe" id="subscribeBtn">
            <i class="fas fa-crown"></i> الاشتراك مقابل 60 جنيه مصرى
        </a>
    </div>

    <script>
        // تبديل المحتوى عند النقر على التبويبات
        document.addEventListener('DOMContentLoaded', function() {
            var tabs = document.querySelectorAll('.tab');
            
            tabs.forEach(function(tab) {
                tab.addEventListener('click', function() {
                    // إزالة النشاط من جميع التبويبات
                    document.querySelectorAll('.tab').forEach(function(t) {
                        t.classList.remove('active');
                    });
                    
                    // إضافة النشاط للتبويب المختار
                    tab.classList.add('active');
                    
                    // إخفاء جميع الأقسام
                    document.querySelectorAll('.content-section').forEach(function(section) {
                        section.classList.remove('active');
                    });
                    
                    // إظهار القسم المختار
                    var target = tab.getAttribute('data-target');
                    var targetSection = document.querySelector('.content-section.' + target);
                    if (targetSection) {
                        targetSection.classList.add('active');
                    }
                });
            });

            // تأثيرات عند التمرير
            var observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };
            
            var scrollObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.style.animation = 'fadeIn 1s ease forwards';
                    }
                });
            }, observerOptions);
            
            var cards = document.querySelectorAll('.card, .model-card');
            if (cards) {
                cards.forEach(function(el) {
                    scrollObserver.observe(el);
                });
            }
        });
    </script>
</body>
</html>