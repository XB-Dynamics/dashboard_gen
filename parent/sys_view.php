
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أنظمة التعليم التفاعلية</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

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

            --ff-poppins: "Poppins", sans-serif;

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

            --shadow1: -4px 8px 24px hsla(0, 0%, 0%, 0.25);
            --shadow2: 0px 16px 30px hsla(0, 0%, 0%, 0.25);
            --shadow3: 0px 16px 40px hsla(0, 0%, 0%, 0.25);
            --shadow4: 0px 25px 50px hsla(0, 0%, 0%, 0.15);
            --shadow5: 0px 24px 80px hsla(0, 0%, 0%, 0.25);

            --transition1: 0.25s ease;
            --transition2: 0.5s ease-in-out;

            --main-color: #4361ee;
            --system-1: #3a0ca3;
            --system-2: #f72585;
            --system-3: #4cc9f0;
            --system-4: #7209b7;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --soon: #f8961e;
        }

        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        img,
        ion-icon,
        a,
        button,
        time,
        span {
            display: block;
        }

        button {
            font: inherit;
            background: none;
            border: none;
            text-align: left;
            cursor: pointer;
        }

        input,
        textarea {
            display: block;
            width: 100%;
            background: none;
            font: inherit;
        }

        ::selection {
            background: var(--orange-yellow-crayola);
            color: var(--smoky-black);
        }

        :focus {
            outline-color: var(--orange-yellow-crayola);
        }

        body {
            background: var(--smoky-black);
            color: var(--light-gray);
            font-family: var(--ff-poppins);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            text-align: center;
            position: relative;
        }

        .main-icon {
            width: 120px;
            height: 120px;
            background: var(--bg-gradient-onyx);
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--orange-yellow-crayola);
            font-size: 3rem;
            cursor: pointer;
            box-shadow: var(--shadow2);
            transition: var(--transition2);
            margin-bottom: 30px;
            position: relative;
            z-index: 10;
            border: 1px solid var(--jet);
        }

        .main-icon::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .main-icon:hover {
            transform: scale(1.05) rotate(5deg);
            box-shadow: var(--shadow3);
        }

        .main-title {
            font-size: var(--fs1);
            margin-bottom: 15px;
            color: var(--white2);
            font-weight: var(--fw600);
        }

        .main-desc {
            font-size: var(--fs4);
            color: var(--light-gray70);
            max-width: 600px;
            margin-bottom: 40px;
            font-weight: var(--fw300);
        }

        .systems-container {
            width: 100%;
            display: none;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .system-card {
            width: 280px;
            background: var(--eerie-black2);
            border: 1px solid var(--jet);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow2);
            transition: var(--transition1);
            cursor: pointer;
            opacity: 0;
            transform: translateY(20px);
            position: relative;
            z-index: 1;
        }

        .system-card::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .system-card.active {
            opacity: 1;
            transform: translateY(0);
        }

        .system-header {
            padding: 20px;
            color: var(--white2);
            text-align: center;
            position: relative;
            background: var(--bg-gradient-onyx);
        }

        .soon-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: var(--soon);
            color: white;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: var(--fs8);
            font-weight: var(--fw500);
            box-shadow: var(--shadow1);
        }

        .system-1 .system-header {
            background: linear-gradient(135deg, var(--system-1), #5e35b1);
        }

        .system-2 .system-header {
            background: linear-gradient(135deg, var(--system-2), #ff5d9e);
        }

        .system-3 .system-header {
            background: linear-gradient(135deg, var(--system-3), #56cfe1);
        }

        .system-4 .system-header {
            background: linear-gradient(135deg, var(--system-4), #9c4dff);
        }

        .system-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 15px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
        }

        .system-title {
            font-size: var(--fs2);
            margin-bottom: 5px;
            font-weight: var(--fw500);
        }

        .system-desc {
            font-size: var(--fs6);
            opacity: 0.9;
            font-weight: var(--fw300);
        }

        .system-body {
            padding: 20px;
            color: var(--light-gray70);
            line-height: 1.7;
        }

        .system-stats {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .stat {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: var(--fs7);
            color: var(--light-gray70);
        }

        .system-1 .stat i {
            color: var(--system-1);
        }

        .system-2 .stat i {
            color: var(--system-2);
        }

        .system-3 .stat i {
            color: var(--system-3);
        }

        .system-4 .stat i {
            color: var(--system-4);
        }

        .time-left {
            background-color: rgba(248, 150, 30, 0.1);
            padding: 8px;
            border-radius: 8px;
            margin-top: 10px;
            text-align: center;
            font-size: var(--fs7);
            color: var(--soon);
            font-weight: var(--fw500);
        }

        .system-link {
            display: block;
            text-align: center;
            padding: 12px;
            background: var(--bg-gradient-onyx);
            color: var(--white2);
            text-decoration: none;
            font-weight: var(--fw500);
            transition: var(--transition1);
            position: relative;
            z-index: 1;
        }

        .system-link::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
            transition: var(--transition1);
        }

        .soon-link {
            background: var(--bg-gradient-onyx) !important;
            cursor: not-allowed;
        }

        .system-1 .system-link:hover::before {
            background: linear-gradient(135deg, var(--system-1), #5e35b1);
        }

        .system-2 .system-link:hover::before {
            background: linear-gradient(135deg, var(--system-2), #ff5d9e);
        }

        .system-3 .system-link:hover::before {
            background: linear-gradient(135deg, var(--system-3), #56cfe1);
        }

        .system-4 .system-link:hover::before {
            background: linear-gradient(135deg, var(--system-4), #9c4dff);
        }

        .system-link:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow3);
        }

        .copyright {
            position: absolute;
            bottom: 20px;
            color: var(--light-gray70);
            font-size: var(--fs7);
            width: 100%;
            text-align: center;
            padding-top: 20px;
        }

        @media (max-width: 768px) {
            .system-card {
                width: 100%;
                max-width: 350px;
            }
            
            .copyright {
                position: relative;
                bottom: auto;
                margin-top: 30px;
            }
        }

        @media (min-width: 580px) {
            :root {
                --fs1: 32px;
                --fs2: 24px;
            }
            
            .main-icon {
                width: 150px;
                height: 150px;
                font-size: 4rem;
            }
            
            .main-title {
                font-size: var(--fs1);
            }
            
            .main-desc {
                font-size: var(--fs4);
            }
        }

        @media (min-width: 1024px) {
            .system-card {
                width: 300px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="main-icon" id="main-icon">
            <i class="fas fa-graduation-cap"></i>
        </div>
        
        <h1 class="main-title">أنظمة التعليم التفاعلية</h1>
        <p class="main-desc">انقر على الأيقون أعلاه لعرض الأنظمة التعليمية المتاحة</p>
        
        <div class="systems-container" id="systems-container">
            <div class="system-card system-1" data-system="system-1">
                <div class="system-header">
                    <div class="system-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h2 class="system-title">النظام التعليمي</h2>
                    <p class="system-desc">منصة تعليمية متكاملة</p>
                </div>
                <div class="system-body">
                    <p>نظام متكامل يوفر بيئة تعليمية تفاعلية تحتوي على دروس، اختبارات، ومتابعة للتحصيل العلمي.</p>
                    <div class="system-stats">
                        <div class="stat">
                            <i class="fas fa-users"></i>
                            <span>12,345 مستخدم</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-book"></i>
                            <span>245 دورة</span>
                        </div>
                    </div>
                </div>
                <a href="system.php" class="system-link">الدخول للنظام</a>
            </div>
            
            <div class="system-card system-2" data-system="system-2">
                <div class="system-header">
                    <div class="system-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h2 class="system-title">النظام البرمجي</h2>
                    <p class="system-desc">تعلم البرمجة بطريقة تفاعلية</p>
                </div>
                <div class="system-body">
                    <p>منصة لتعليم البرمجة بمختلف لغاتها مع تمارين تفاعلية وتصحيح آلي للكود المقدم من الطلاب.</p>
                    <div class="system-stats">
                        <div class="stat">
                            <i class="fas fa-users"></i>
                            <span>8,765 مستخدم</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-laptop-code"></i>
                            <span>15 لغة برمجة</span>
                        </div>
                    </div>
                </div>
                <a href="course_view.php" class="system-link">الدخول للنظام</a>
            </div>
            
            <div class="system-card system-3" data-system="system-3">
                <div class="system-header">
                    <div class="soon-badge">قريباً</div>
                    <div class="system-icon">
                        <i class="fas fa-language"></i>
                    </div>
                    <h2 class="system-title">نظام اللغات</h2>
                    <p class="system-desc">تعلّم اللغات بسهولة</p>
                </div>
                <div class="system-body">
                    <p>منصة متخصصة في تعليم اللغات الأجنبية مع تمارين نطق، محادثات تفاعلية، وقواعد اللغة.</p>
                    <div class="system-stats">
                        <div class="stat">
                            <i class="fas fa-users"></i>
                            <span>قيد التطوير</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-globe"></i>
                            <span>8 لغات</span>
                        </div>
                    </div>
                    <div class="time-left">المتبقي للإطلاق: شهرين</div>
                </div>
                <a href="#" class="system-link soon-link">قريباً</a>
            </div>
            
            <div class="system-card system-4" data-system="system-4">
                <div class="system-header">
                    <div class="soon-badge">قريباً</div>
                    <div class="system-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h2 class="system-title">نظام الحساب الذهني</h2>
                    <p class="system-desc">تطوير المهارات الحسابية</p>
                </div>
                <div class="system-body">
                    <p>برنامج متخصص لتنمية مهارات الحساب الذهني والرياضيات بطريقة ممتعة وتفاعلية.</p>
                    <div class="system-stats">
                        <div class="stat">
                            <i class="fas fa-users"></i>
                            <span>قيد التطوير</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-calculator"></i>
                            <span>12 مستوى</span>
                        </div>
                    </div>
                    <div class="time-left">المتبقي للإطلاق: 45 يوم</div>
                </div>
                <a href="#" class="system-link soon-link">قريباً</a>
            </div>
        </div>
        
        <div class="copyright">
            جميع الحقوق محفوظة &copy; بواسطة Genius AI 2025
        </div>
    </div>
    
    <script>
        document.getElementById('main-icon').addEventListener('click', function() {
            const systemsContainer = document.getElementById('systems-container');
            const systemCards = document.querySelectorAll('.system-card');
            
            systemsContainer.style.display = "flex";
            
            this.style.display = 'none';
            document.querySelector('.main-title').style.display = 'none';
            document.querySelector('.main-desc').style.display = 'none';
            
            systemCards.forEach((card, index) => {
                setTimeout(() => {
                    card.classList.add('active');
                }, index * 200);
            });
        });
    </script>
</body>
</html>