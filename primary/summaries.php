
<!DOCTYPE html>
<html lang="ar" dir="rtl" id="htmlElement">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منصة الملخصات التعليمية</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="header.css">

    <style>
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
            --ff-tajawal: 'Tajawal', sans-serif;

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
            
            --primary-color: var(--orange-yellow-crayola);
            --secondary-color: var(--vegas-gold);
            --accent-color: var(--light-gray);
            --danger-color: var(--bittersweet-shimmer);
            --success-color: hsl(120, 100%, 70%);
            --light-color: var(--white2);
            --dark-color: var(--smoky-black);
            --border-radius: 12px;
            --box-shadow: var(--shadow2);
            --transition: var(--transition1);
            --teacher-color-1: var(--orange-yellow-crayola);
            --teacher-color-2: var(--vegas-gold);
            --teacher-color-3: hsl(35, 100%, 60%);
            
            /* ألوان النسخة الإنجليزية */
            --en-primary-color: hsl(210, 100%, 50%);
            --en-secondary-color: hsl(210, 80%, 60%);
            --en-accent-color: hsl(0, 0%, 90%);
            --en-teacher-color-1: hsl(210, 100%, 50%);
            --en-teacher-color-2: hsl(210, 80%, 60%);
            --en-teacher-color-3: hsl(210, 90%, 70%);
            
            /* ألوان النسخة البرتقالية */
            --orange-primary-color: hsl(30, 100%, 50%);
            --orange-secondary-color: hsl(30, 80%, 60%);
            --orange-accent-color: hsl(0, 0%, 90%);
            --orange-teacher-color-1: hsl(30, 100%, 50%);
            --orange-teacher-color-2: hsl(30, 80%, 60%);
            --orange-teacher-color-3: hsl(30, 90%, 70%);
            
            /* ألوان النسخة الخضراء */
            --green-primary-color: hsl(120, 100%, 30%);
            --green-secondary-color: hsl(120, 80%, 40%);
            --green-accent-color: hsl(0, 0%, 90%);
            --green-teacher-color-1: hsl(120, 100%, 30%);
            --green-teacher-color-2: hsl(120, 80%, 40%);
            --green-teacher-color-3: hsl(120, 90%, 50%);
            
            /* ألوان النسخة الزهرية */
            --pink-primary-color: hsl(330, 100%, 50%);
            --pink-secondary-color: hsl(330, 80%, 60%);
            --pink-accent-color: hsl(0, 0%, 90%);
            --pink-teacher-color-1: hsl(330, 100%, 50%);
            --pink-teacher-color-2: hsl(330, 80%, 60%);
            --pink-teacher-color-3: hsl(330, 90%, 70%);
            
            /* ألوان النسخة البنفسجية */
            --purple-primary-color: hsl(270, 100%, 50%);
            --purple-secondary-color: hsl(270, 80%, 60%);
            --purple-accent-color: hsl(0, 0%, 90%);
            --purple-teacher-color-1: hsl(270, 100%, 50%);
            --purple-teacher-color-2: hsl(270, 80%, 60%);
            --purple-teacher-color-3: hsl(270, 90%, 70%);
        }

        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--ff-tajawal);
            background: var(--smoky-black);
            color: var(--light-gray);
            margin: 0;
            padding: 0;
            min-height: 100vh;
            transition: var(--transition2);
        }

        .container {
            display: flex;
            flex: 1;
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
            gap: 20px;
            min-height: calc(100vh - 80px);
            justify-content: center;
        }

        .main-content {
            flex: 1;
            padding-bottom: 80px;
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
        }

        .board-container {
            background: var(--border-gradient-onyx);
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
            z-index: 1;
            transition: var(--transition2);
            margin-bottom: 20px;
            margin: 0 auto;
        }

        .board-container::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
            transition: var(--transition2);
        }

        .board-header {
            background: var(--bg-gradient-onyx);
            color: var(--white2);
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 1px solid var(--jet);
            transition: var(--transition2);
            text-align: center;
        }

        .board-title {
            font-size: 28px;
            font-weight: var(--fw600);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--primary-color);
            transition: var(--transition2);
        }

        /* شريط التصفية المحدث */
        .filter-bar {
            display: flex;
            gap: 10px;
            padding: 15px 20px;
            background: var(--border-gradient-onyx);
            border-bottom: 1px solid var(--jet);
            flex-wrap: wrap;
            justify-content: center;
        }

        .filter-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
            min-width: 150px;
            flex: 1;
        }

        .filter-label {
            font-size: var(--fs5);
            color: var(--light-gray70);
            text-align: center;
        }

        .filter-select {
            padding: 10px 15px;
            background: var(--bg-gradient-jet);
            border: 1px solid var(--jet);
            border-radius: var(--border-radius);
            color: var(--light-gray);
            font-family: var(--ff-tajawal);
            font-size: var(--fs5);
            cursor: pointer;
            transition: var(--transition);
            text-align: center;
        }

        .filter-select:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        /* شبكة عرض الحصص */
        .classes-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 25px;
            padding: 25px;
            justify-items: center;
        }

        .class-card {
            background: var(--border-gradient-onyx);
            border-radius: var(--border-radius);
            padding: 20px;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
            min-height: 220px;
            border: 1px solid var(--jet);
            width: 100%;
            max-width: 350px;
        }

        .class-card::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .class-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow3);
            border-color: var(--primary-color);
        }

        .class-icon {
            font-size: 36px;
            margin-bottom: 15px;
            color: var(--primary-color);
            transition: var(--transition);
            align-self: center;
        }

        .class-title {
            font-weight: var(--fw600);
            margin-bottom: 10px;
            font-size: var(--fs2);
            color: var(--white2);
            text-align: center;
            line-height: 1.4;
        }

        .class-description {
            font-size: var(--fs5);
            color: var(--light-gray70);
            text-align: center;
            margin-bottom: 15px;
            line-height: 1.5;
        }

        .class-duration {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            font-size: var(--fs6);
            color: var(--light-gray);
            margin-top: auto;
        }

        .class-duration i {
            color: var(--primary-color);
        }

        .class-actions {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .class-action-btn {
            padding: 10px 25px;
            border-radius: 50px;
            font-size: var(--fs5);
            font-weight: var(--fw600);
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            transition: var(--transition);
            background: linear-gradient(
                to right,
                var(--primary-color),
                var(--teacher-color-3)
            );
            color: var(--smoky-black);
        }

        .class-action-btn:hover {
            background: linear-gradient(
                to right,
                var(--teacher-color-3),
                var(--primary-color)
            );
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }


        /* أيقونة الدعم الفني في الزاوية */
        .support-icon {
            position: fixed;
            bottom: 70px;
            right: 20px;
            width: 50px;
            height: 50px;
            background: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
            color: var(--smoky-black);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 101;
            border: 2px solid var(--teacher-color-2);
        }

        .support-icon:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
            background: var(--teacher-color-3);
        }

        /* نافذة الدعم الفني */
        .support-window {
            position: fixed;
            bottom: 130px;
            right: 20px;
            width: 300px;
            background: var(--bg-gradient-jet);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow3);
            border: 1px solid var(--jet);
            z-index: 1000;
            transform: translateY(20px);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            padding: 15px;
        }

        .support-window.active {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }

        .support-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--jet);
        }

        .support-title {
            font-size: var(--fs3);
            font-weight: var(--fw600);
            color: var(--primary-color);
        }

        .support-close {
            background: none;
            border: none;
            color: var(--light-gray70);
            font-size: 20px;
            cursor: pointer;
            transition: var(--transition1);
        }

        .support-close:hover {
            color: var(--danger-color);
        }

        .support-body {
            margin-bottom: 15px;
        }

        .support-text {
            font-size: var(--fs5);
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .support-actions {
            display: flex;
            gap: 10px;
        }

        .support-btn {
            flex: 1;
            padding: 8px;
            border-radius: var(--border-radius);
            border: none;
            font-family: var(--ff-tajawal);
            font-weight: var(--fw500);
            cursor: pointer;
            transition: var(--transition1);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }

        .support-btn.primary {
            background: var(--primary-color);
            color: var(--smoky-black);
        }

        .support-btn.secondary {
            background: var(--jet);
            color: var(--light-gray);
        }

        .support-btn:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        /* أزرار التحكم في اللغة والثيم */
        .header-controls {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .header-btn {
            background: none;
            border: none;
            color: var(--primary-color);
            font-size: 24px;
            cursor: pointer;
            transition: var(--transition1);
            padding: 5px;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header-btn:hover {
            background-color: hsla(0, 0%, 100%, 0.1);
            transform: scale(1.1);
        }

        /* صندوق البحث */
        .search-box {
            position: relative;
            margin: 20px;
        }

        .search-input {
            width: 100%;
            padding: 12px 45px 12px 15px;
            background: var(--border-gradient-onyx);
            border: none;
            border-radius: var(--border-radius);
            color: var(--light-gray);
            font-family: var(--ff-tajawal);
            font-size: var(--fs4);
            position: relative;
            z-index: 1;
        }

        .search-input::placeholder {
            color: var(--light-gray70);
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        .search-input::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-color);
            font-size: 18px;
        }

        /* ثيمات الألوان */
        body.theme-en {
            --primary-color: var(--en-primary-color);
            --secondary-color: var(--en-secondary-color);
            --accent-color: var(--en-accent-color);
            --teacher-color-1: var(--en-teacher-color-1);
            --teacher-color-2: var(--en-teacher-color-2);
            --teacher-color-3: var(--en-teacher-color-3);
            --text-gradient-yellow: linear-gradient(
                to right,
                var(--en-primary-color),
                var(--en-secondary-color)
            );
        }

        body.theme-orange {
            --primary-color: var(--orange-primary-color);
            --secondary-color: var(--orange-secondary-color);
            --accent-color: var(--orange-accent-color);
            --teacher-color-1: var(--orange-teacher-color-1);
            --teacher-color-2: var(--orange-teacher-color-2);
            --teacher-color-3: var(--orange-teacher-color-3);
            --text-gradient-yellow: linear-gradient(
                to right,
                var(--orange-primary-color),
                var(--orange-secondary-color)
            );
        }

        body.theme-green {
            --primary-color: var(--green-primary-color);
            --secondary-color: var(--green-secondary-color);
            --accent-color: var(--green-accent-color);
            --teacher-color-1: var(--green-teacher-color-1);
            --teacher-color-2: var(--green-teacher-color-2);
            --teacher-color-3: var(--green-teacher-color-3);
            --text-gradient-yellow: linear-gradient(
                to right,
                var(--green-primary-color),
                var(--green-secondary-color)
            );
        }

        body.theme-pink {
            --primary-color: var(--pink-primary-color);
            --secondary-color: var(--pink-secondary-color);
            --accent-color: var(--pink-accent-color);
            --teacher-color-1: var(--pink-teacher-color-1);
            --teacher-color-2: var(--pink-teacher-color-2);
            --teacher-color-3: var(--pink-teacher-color-3);
            --text-gradient-yellow: linear-gradient(
                to right,
                var(--pink-primary-color),
                var(--pink-secondary-color)
            );
        }

        body.theme-purple {
            --primary-color: var(--purple-primary-color);
            --secondary-color: var(--purple-secondary-color);
            --accent-color: var(--purple-accent-color);
            --teacher-color-1: var(--purple-teacher-color-1);
            --teacher-color-2: var(--purple-teacher-color-2);
            --teacher-color-3: var(--purple-teacher-color-3);
            --text-gradient-yellow: linear-gradient(
                to right,
                var(--purple-primary-color),
                var(--purple-secondary-color)
            );
        }

        /* حقوق النشر وروابط السوشيال ميديا */
        .footer-section {
            text-align: center;
            padding: 20px;
            background: var(--bg-gradient-onyx);
            color: var(--light-gray70);
            font-size: var(--fs7);
            border-top: 1px solid var(--jet);
        }

        .copyright {
            margin-bottom: 5px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 10px;
        }

        .social-link {
            color: var(--light-gray);
            font-size: 20px;
            transition: var(--transition1);
        }

        .social-link:hover {
            color: var(--primary-color);
            transform: translateY(-3px);
        }

        .developer {
            font-size: var(--fs7);
            color: var(--light-gray70);
        }

        @media (max-width: 768px) {
            .board-header {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            .classes-grid {
                grid-template-columns: 1fr;
                gap: 15px;
                padding: 15px;
            }
            
            .container {
                padding: 10px;
            }
            
            .class-card {
                max-width: 100%;
            }
            
            .support-window {
                width: 280px;
                right: 10px;
                bottom: 120px;
            }
            
            .support-icon {
                width: 45px;
                height: 45px;
                font-size: 18px;
                bottom: 65px;
                right: 15px;
            }
        }
        .support-icon {
    position: fixed;
    bottom: 90px;
    right: 20px;
    width: 50px;
    height: 50px;
    background: var(--primary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    font-weight: bold;
    color: var(--smoky-black);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    cursor: pointer;
    transition: all 0.3s ease;
    z-index: 101;
    border: 2px solid var(--teacher-color-2);
    text-decoration: none; /* لإزالة الخط التحتي للرابط */
}

.support-icon:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
    background: var(--teacher-color-3);
}
    </style>
</head>
<body>
    <div class="container">
        <div class="main-content">
            <div class="board-container">
                <div class="board-header">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <h1 class="board-title">
                            <i class="fas fa-chalkboard-teacher"></i> 
                            <span id="mainTitle">الملخصات التعليمية</span>
                        </h1>
                        <div class="header-controls">
                            <button class="header-btn" id="themeBtn" title="تغيير الثيم">
                                <i class="fas fa-palette"></i>
                            </button>
                            <button class="header-btn" id="languageBtn" title="تغيير اللغة">
                                <i class="fas fa-language"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- شريط التصفية -->
                <div class="filter-bar">
                    <div class="filter-group">
                        <span class="filter-label" id="filterSubjectLabel">المادة الدراسية</span>
                        <select class="filter-select" id="subjectFilter">
                            <option value="all">الكل</option>
                            <option value="physics">الفيزياء</option>
                            <option value="chemistry">الكيمياء</option>
                            <option value="math">الرياضيات</option>
                            <option value="arabic">النحو والبلاغة</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <span class="filter-label" id="filterDateLabel">تاريخ الملخص</span>
                        <select class="filter-select" id="dateFilter">
                            <option value="all">الكل</option>
                            <option value="today">اليوم</option>
                            <option value="upcoming">القادمة</option>
                        </select>
                    </div>
                </div>
                
                <!-- صندوق البحث -->
                <div class="search-box">
                    <input type="text" class="search-input" id="searchInput" placeholder="ابحث في الملخصات...">
                    <i class="fas fa-search search-icon"></i>
                </div>
                
                <!-- شبكة عرض الحصص -->
                <div class="classes-grid" id="classesGrid">
                    <!-- سيتم ملئها بالجافاسكريبت -->
                </div>
            </div>
        </div>
    </div>

    <!-- حقوق النشر وروابط السوشيال ميديا -->
    <div class="footer-section">
        <div class="social-links">
            <a href="https://www.facebook.com/" class="social-link" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/" class="social-link" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://twitter.com/" class="social-link" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
        </div>
        <div class="copyright">
            تم التطوير بواسطة Genius Ai 2025
        </div>
    </div>

    <!-- شريط التنقل السفلي -->
<?php include 'header.php'; ?>
    <!-- نافذة الدعم الفني -->

    <script>
        // بيانات الحصص
        const classesData = [
            {
                id: 1,
                title: "ملخص الفيزياء - الحركة الدائرية",
                icon: "fa-atom",
                subject: "physics",
                description: "شرح مفصل لقوانين الحركة الدائرية وتطبيقاتها العملية",
                duration: "45 دقيقة",
                date: "اليوم 3:00 مساءً"
            },
            {
                id: 2,
                title: "ملخص الكيمياء - التفاعلات الكيميائية",
                icon: "fa-flask",
                subject: "chemistry",
                description: "أنواع التفاعلات الكيميائية وكيفية موازنة المعادلات",
                duration: "60 دقيقة",
                date: "غداً 10:00 صباحاً"
            },
            {
                id: 3,
                title: "ملخص الرياضيات - التفاضل والتكامل",
                icon: "fa-square-root-alt",
                subject: "math",
                description: "أساسيات التفاضل والتكامل مع حل تمارين تطبيقية",
                duration: "90 دقيقة",
                date: "بعد غد 4:30 مساءً"
            },
        ];

        // متغيرات التحكم
        let currentTheme = 'default';
        let currentLanguage = 'ar';

        // عناصر DOM
        const themeBtn = document.getElementById('themeBtn');
        const languageBtn = document.getElementById('languageBtn');
        const mainTitle = document.getElementById('mainTitle');
        const htmlElement = document.getElementById('htmlElement');
        const searchInput = document.getElementById('searchInput');
        const classesGrid = document.getElementById('classesGrid');
        const subjectFilter = document.getElementById('subjectFilter');
        const dateFilter = document.getElementById('dateFilter');
        const chatText = document.getElementById('chatText');
        const emailText = document.getElementById('emailText');
        const navExams = document.getElementById('navExams');
        const navModules = document.getElementById('navModules');
        const navClasses = document.getElementById('navClasses');
        const navCoding = document.getElementById('navCoding');
        const navLogout = document.getElementById('navLogout');

        // عرض الحصص في الشبكة
        function renderClasses(classes) {
            classesGrid.innerHTML = '';
            
            classes.forEach(classItem => {
                const classCard = document.createElement('div');
                classCard.className = 'class-card';
                
                classCard.innerHTML = `
                    <i class="fas ${classItem.icon} class-icon"></i>
                    <div class="class-title">${classItem.title}</div>
                    <div class="class-description">${classItem.description}</div>
                    <div class="class-duration">
                        <i class="fas fa-clock"></i>
                        <span>${classItem.duration} - ${classItem.date}</span>
                    </div>
                    <div class="class-actions">
                        <a href="#" class="class-action-btn">
                            <i class="fas fa-door-open"></i>
                            <span>${currentLanguage === 'ar' ? 'الدخول إلى الحصة' : 'Enter Class'}</span>
                        </a>
                    </div>
                `;
                
                classCard.addEventListener('click', () => {
                    const message = currentLanguage === 'ar' 
                        ? `سيتم الدخول إلى الحصة: ${classItem.title}` 
                        : `You will enter the class: ${classItem.title}`;
                    alert(message);
                });
                
                classesGrid.appendChild(classCard);
            });
        }

        // تصفية الحصص
        function filterClasses() {
            const subject = subjectFilter.value;
            const date = dateFilter.value;
            const searchTerm = searchInput.value.toLowerCase();
            
            let filteredClasses = [...classesData];
            
            // تصفية حسب المادة
            if (subject !== 'all') {
                filteredClasses = filteredClasses.filter(classItem => classItem.subject === subject);
            }
            
            // تصفية حسب التاريخ
            if (date === 'today') {
                filteredClasses = filteredClasses.filter(classItem => classItem.date.includes('اليوم'));
            } else if (date === 'upcoming') {
                filteredClasses = filteredClasses.filter(classItem => !classItem.date.includes('اليوم'));
            }
            
            // تصفية حسب البحث
            if (searchTerm) {
                filteredClasses = filteredClasses.filter(classItem => 
                    classItem.title.toLowerCase().includes(searchTerm) || 
                    classItem.description.toLowerCase().includes(searchTerm) ||
                    classItem.subject.toLowerCase().includes(searchTerm)
                );
            }
            
            renderClasses(filteredClasses);
        }

        // تغيير الثيم
        function changeTheme() {
            const themes = ['default', 'en', 'orange', 'green', 'pink', 'purple'];
            const currentIndex = themes.indexOf(currentTheme);
            const nextIndex = (currentIndex + 1) % themes.length;
            currentTheme = themes[nextIndex];
            
            applyTheme(currentTheme);
        }

        // تطبيق الثيم المحدد
        function applyTheme(theme) {
            document.body.className = '';
            
            if (theme === 'en') {
                document.body.classList.add('theme-en');
            } else if (theme === 'orange') {
                document.body.classList.add('theme-orange');
            } else if (theme === 'green') {
                document.body.classList.add('theme-green');
            } else if (theme === 'pink') {
                document.body.classList.add('theme-pink');
            } else if (theme === 'purple') {
                document.body.classList.add('theme-purple');
            }
        }

        // تغيير اللغة
        function toggleLanguage() {
            currentLanguage = currentLanguage === 'ar' ? 'en' : 'ar';
            
            if (currentLanguage === 'en') {
                // تطبيق النسخة الإنجليزية
                document.getElementById('htmlElement').setAttribute('lang', 'en');
                document.getElementById('htmlElement').setAttribute('dir', 'ltr');
                mainTitle.textContent = 'Educational Classes';
                searchInput.placeholder = 'Search classes...';
                document.getElementById('filterSubjectLabel').textContent = 'Subject';
                document.getElementById('filterDateLabel').textContent = 'Class Date';
                navExams.textContent = 'Exams';
                navModules.textContent = 'Models';
                navClasses.textContent = 'Classes';
                navCoding.textContent = 'Coding';
                navLogout.textContent = 'Logout';
                themeBtn.title = 'Change theme';
                languageBtn.title = 'Change language';
                
                // تحديث نافذة الدعم الفني
                supportTitle.textContent = 'Technical Support';
                supportText.textContent = 'Welcome to technical support. How can we help you today?';
                chatText.textContent = 'Chat';
                emailText.textContent = 'Email';
                

                // تحديث خيارات الفلتر
                document.querySelector('#subjectFilter option[value="all"]').textContent = 'All';
                document.querySelector('#subjectFilter option[value="physics"]').textContent = 'Physics';
                document.querySelector('#subjectFilter option[value="chemistry"]').textContent = 'Chemistry';
                document.querySelector('#subjectFilter option[value="math"]').textContent = 'Math';
                document.querySelector('#subjectFilter option[value="arabic"]').textContent = 'Arabic Grammar';
                document.querySelector('#dateFilter option[value="all"]').textContent = 'All';
                document.querySelector('#dateFilter option[value="today"]').textContent = 'Today';
                document.querySelector('#dateFilter option[value="upcoming"]').textContent = 'Upcoming';
            } else {
                // تطبيق النسخة العربية
                document.getElementById('htmlElement').setAttribute('lang', 'ar');
                document.getElementById('htmlElement').setAttribute('dir', 'rtl');
                mainTitle.textContent = 'الحصص التعليمية';
                searchInput.placeholder = 'ابحث في الحصص...';
                document.getElementById('filterSubjectLabel').textContent = 'المادة الدراسية';
                document.getElementById('filterDateLabel').textContent = 'تاريخ الحصة';
                navExams.textContent = 'الاختبارات';
                navModules.textContent = 'الموديلات';
                navClasses.textContent = 'حصصي';
                navCoding.textContent = 'الكودنج';
                navLogout.textContent = 'تسجيل الخروج';
                themeBtn.title = 'تغيير الثيم';
                languageBtn.title = 'تغيير اللغة';
                
                // تحديث نافذة الدعم الفني
                supportTitle.textContent = 'الدعم الفني';
                supportText.textContent = 'مرحباً بك في خدمة الدعم الفني. كيف يمكننا مساعدتك اليوم؟';
                chatText.textContent = 'محادثة';
                emailText.textContent = 'بريد';
                

                // تحديث خيارات الفلتر
                document.querySelector('#subjectFilter option[value="all"]').textContent = 'الكل';
                document.querySelector('#subjectFilter option[value="physics"]').textContent = 'الفيزياء';
                document.querySelector('#subjectFilter option[value="chemistry"]').textContent = 'الكيمياء';
                document.querySelector('#subjectFilter option[value="math"]').textContent = 'الرياضيات';
                document.querySelector('#subjectFilter option[value="arabic"]').textContent = 'النحو والبلاغة';
                document.querySelector('#dateFilter option[value="all"]').textContent = 'الكل';
                document.querySelector('#dateFilter option[value="today"]').textContent = 'اليوم';
                document.querySelector('#dateFilter option[value="upcoming"]').textContent = 'القادمة';
            }
            
            // إعادة تصفية وعرض الحصص لتحديث النصوص
            filterClasses();
        }

        // التحكم في نافذة الدعم الفني
        themeBtn.addEventListener('click', changeTheme);
        languageBtn.addEventListener('click', toggleLanguage);
        searchInput.addEventListener('input', filterClasses);
        subjectFilter.addEventListener('change', filterClasses);
        dateFilter.addEventListener('change', filterClasses);

        // تهيئة الصفحة عند التحميل
        window.addEventListener('load', () => {
            applyTheme(currentTheme);
            filterClasses();
        });
    </script>
</body>
</html>