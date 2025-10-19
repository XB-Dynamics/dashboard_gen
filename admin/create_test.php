<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>امتحان تاريخ - جميع أنواع الأسئلة</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">
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
            --bg-gradient-gold1: linear-gradient(
                to bottom right,
                hsl(43, 100%, 60%) 0%,
                hsla(43, 100%, 60%, 0.3) 50%
            );
            --bg-gradient-gold2: linear-gradient(
                135deg,
                hsla(43, 100%, 60%, 0.251) 0%,
                hsla(43, 100%, 60%, 0) 59.86%
                ),
                hsl(240, 2%, 13%);
            --border-gradient-onyx: linear-gradient(
                to bottom right,
                hsl(0, 0%, 25%) 0%,
                hsla(0, 0%, 25%, 0) 50%
            );
            --text-gradient-gold: linear-gradient(
                to right,
                hsl(43, 100%, 60%),
                hsl(38, 100%, 50%)
            );

            --jet: hsl(0, 0%, 22%);
            --onyx: hsl(240, 1%, 17%);
            --eerie-black1: hsl(240, 2%, 13%);
            --eerie-black2: hsl(240, 2%, 12%);
            --smoky-black: hsl(0, 0%, 7%);
            --white1: hsl(0, 0%, 100%);
            --white2: hsl(0, 0%, 98%);
            --gold-crayola: hsl(43, 100%, 60%);
            --vegas-gold: hsl(43, 80%, 50%);
            --light-gray: hsl(0, 0%, 84%);
            --light-gray70: hsla(0, 0%, 84%, 0.7);
            --bittersweet-shimmer: hsl(0, 43%, 51%);
            --success-color: #27ae60;
            --warning-color: #f39c12;
            --danger-color: #e74c3c;

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
            
            --border-radius: 8px;
        }

        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--ff-poppins);
        }

        body {
            background: var(--smoky-black);
            color: var(--light-gray);
            padding: 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
            background-color: var(--eerie-black1);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow2);
            position: relative;
        }

        .page-content {
            padding: 20px;
        }

        .page-title {
            margin-bottom: 15px;
            color: var(--white2);
            display: flex;
            align-items: center;
            font-size: var(--fs1);
            font-weight: var(--fw600);
        }

        .page-title i {
            margin-left: 10px;
            background: var(--text-gradient-gold);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .content-section {
            background: var(--border-gradient-onyx);
            border-radius: var(--border-radius);
            padding: 20px;
            margin-bottom: 20px;
            position: relative;
        }

        .content-section::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .quiz-info {
            display: grid;
            grid-template-columns: 1fr;
            gap: 15px;
            margin-bottom: 20px;
        }

        @media (min-width: 768px) {
            .quiz-info {
                grid-template-columns: 1fr 1fr 1fr;
            }
        }

        .info-item {
            background: var(--eerie-black1);
            padding: 15px;
            border-radius: var(--border-radius);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            transition: var(--transition1);
            box-shadow: var(--shadow1);
        }

        .info-item:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow3);
        }

        .info-item i {
            font-size: 24px;
            color: var(--gold-crayola);
            margin-bottom: 10px;
        }

        .info-item .label {
            font-size: var(--fs6);
            color: var(--light-gray70);
            margin-bottom: 5px;
        }

        .info-item .value {
            font-size: var(--fs4);
            font-weight: var(--fw600);
            color: var(--white2);
        }

        .timer-container {
            position: sticky;
            top: 10px;
            z-index: 50;
            margin-bottom: 20px;
        }

        .timer {
            background: var(--border-gradient-onyx);
            border-radius: var(--border-radius);
            padding: 15px;
            text-align: center;
            font-size: var(--fs3);
            font-weight: var(--fw600);
            color: var(--gold-crayola);
            box-shadow: var(--shadow2);
            transition: var(--transition1);
        }

        .timer::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .timer.warning {
            color: var(--warning-color);
        }

        .timer.danger {
            color: var(--danger-color);
            animation: pulse 1s infinite;
        }

        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.5; }
            100% { opacity: 1; }
        }

        .question-container {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--jet);
            transition: var(--transition1);
        }

        .question-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .question-number {
            font-size: var(--fs4);
            font-weight: var(--fw600);
            color: var(--gold-crayola);
            background: var(--border-gradient-onyx);
            padding: 5px 15px;
            border-radius: 20px;
            position: relative;
        }

        .question-number::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .question-type {
            font-size: var(--fs6);
            color: var(--light-gray70);
            background: var(--onyx);
            padding: 3px 10px;
            border-radius: 15px;
        }

        .question-text {
            font-size: var(--fs4);
            font-weight: var(--fw500);
            color: var(--white2);
            margin-bottom: 20px;
            line-height: 1.6;
            padding: 10px;
            background: var(--eerie-black2);
            border-radius: var(--border-radius);
        }

        /* أنماط أسئلة الاختيار من متعدد */
        .mcq-options {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
        }

        .mcq-option {
            padding: 12px 15px;
            background: var(--eerie-black1);
            border: 1px solid var(--jet);
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition1);
            display: flex;
            align-items: center;
        }

        .mcq-option:hover {
            border-color: var(--gold-crayola);
            transform: translateX(-5px);
        }

        .mcq-option.selected {
            border-color: var(--gold-crayola);
            background: var(--bg-gradient-gold2);
        }

        .mcq-option input {
            margin-left: 10px;
            width: auto;
        }

        /* أنماط أسئلة الصح والخطأ */
        .truefalse-options {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .truefalse-btn {
            padding: 15px;
            text-align: center;
            border-radius: var(--border-radius);
            border: 1px solid var(--jet);
            background: var(--eerie-black1);
            cursor: pointer;
            transition: var(--transition1);
            font-weight: var(--fw500);
        }

        .truefalse-btn:hover {
            border-color: var(--gold-crayola);
            transform: translateY(-3px);
        }

        .truefalse-btn.selected-true {
            border-color: var(--success-color);
            background: rgba(39, 174, 96, 0.1);
        }

        .truefalse-btn.selected-false {
            border-color: var(--danger-color);
            background: rgba(231, 76, 60, 0.1);
        }

        /* أنماط الأسئلة المقالية */
        .essay-answer {
            width: 100%;
            min-height: 150px;
            padding: 15px;
            background: var(--eerie-black1);
            border: 1px solid var(--jet);
            border-radius: var(--border-radius);
            color: var(--light-gray);
            resize: vertical;
            transition: var(--transition1);
        }

        .essay-answer:focus {
            border-color: var(--gold-crayola);
            outline: none;
            box-shadow: 0 0 0 2px rgba(195, 155, 40, 0.2);
        }

        /* أزرار التنقل */
        .navigation-buttons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 30px;
        }

        .btn {
            padding: 12px 20px;
            border-radius: var(--border-radius);
            border: none;
            cursor: pointer;
            font-weight: var(--fw500);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition1);
            font-size: var(--fs6);
        }

        .btn i {
            margin-left: 8px;
        }

        .btn-primary {
            background: var(--gold-crayola);
            color: var(--smoky-black);
        }

        .btn-primary:hover {
            background: var(--vegas-gold);
            transform: translateY(-2px);
            box-shadow: var(--shadow3);
        }

        .btn-outline {
            background: transparent;
            border: 1px solid var(--jet);
            color: var(--light-gray);
        }

        .btn-outline:hover {
            background: var(--eerie-black1);
            transform: translateY(-2px);
            box-shadow: var(--shadow3);
        }

        .btn-success {
            background: var(--success-color);
            color: white;
            width: 100%;
            margin-top: 20px;
            padding: 15px;
            font-size: var(--fs4);
        }

        .btn-success:hover {
            background: #219653;
            transform: translateY(-2px);
            box-shadow: var(--shadow3);
        }

        /* نتائج الامتحان */
        .results-container {
            display: none;
            text-align: center;
            padding: 30px;
        }

        .results-score {
            font-size: 48px;
            font-weight: var(--fw700);
            color: var(--gold-crayola);
            margin: 20px 0;
            background: var(--text-gradient-gold);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .results-feedback {
            font-size: var(--fs3);
            margin-bottom: 30px;
            color: var(--white2);
        }

        .results-details {
            display: grid;
            grid-template-columns: 1fr;
            gap: 15px;
            margin-bottom: 30px;
        }

        @media (min-width: 768px) {
            .results-details {
                grid-template-columns: 1fr 1fr 1fr;
            }
        }

        .result-item {
            background: var(--border-gradient-onyx);
            padding: 20px;
            border-radius: var(--border-radius);
            position: relative;
        }

        .result-item::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .result-item i {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .result-item.correct i {
            color: var(--success-color);
        }

        .result-item.incorrect i {
            color: var(--danger-color);
        }

        .result-item.score i {
            color: var(--gold-crayola);
        }

        .progress-bar {
            height: 10px;
            background: var(--onyx);
            border-radius: 5px;
            overflow: hidden;
            margin: 20px 0;
        }

        .progress-fill {
            height: 100%;
            background: var(--text-gradient-gold);
            border-radius: 5px;
            transition: width 1s ease-in-out;
        }

        /* Back to top button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            left: 30px;
            width: 50px;
            height: 50px;
            background: var(--border-gradient-onyx);
            color: var(--gold-crayola);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition1);
            z-index: 100;
            box-shadow: var(--shadow2);
            opacity: 0;
            visibility: hidden;
        }

        .back-to-top::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            transform: translateY(-5px);
            background: var(--bg-gradient-gold2);
            color: var(--white2);
        }

        /* أنماط شريط التقدم */
        .progress-container {
            position: sticky;
            top: 0;
            z-index: 100;
            background: var(--eerie-black1);
            padding: 10px 0;
            margin-bottom: 20px;
        }

        .progress-bar-horizontal {
            height: 8px;
            background: var(--onyx);
            border-radius: 4px;
            overflow: hidden;
        }

        .progress-fill-horizontal {
            height: 100%;
            background: var(--text-gradient-gold);
            border-radius: 4px;
            transition: width 0.3s ease;
        }

        .progress-text {
            text-align: center;
            font-size: var(--fs6);
            color: var(--light-gray70);
            margin-top: 5px;
        }

        /* أنماط التنبيهات */
        .alert {
            padding: 15px;
            border-radius: var(--border-radius);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .alert i {
            margin-left: 10px;
            font-size: 20px;
        }

        .alert-warning {
            background: rgba(243, 156, 18, 0.1);
            border-left: 4px solid var(--warning-color);
            color: var(--warning-color);
        }

        /* أنماط الصفحة الرئيسية */
        .exam-intro {
            text-align: center;
            padding: 30px 0;
        }

        .exam-icon {
            font-size: 60px;
            color: var(--gold-crayola);
            margin-bottom: 20px;
        }

        .exam-description {
            font-size: var(--fs4);
            color: var(--light-gray);
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .start-exam-btn {
            padding: 15px 40px;
            font-size: var(--fs3);
            margin: 20px 0;
        }

        /* أنماط الاستجابة للشاشات المختلفة */
        @media (max-width: 768px) {
            .question-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
            
            .truefalse-options {
                grid-template-columns: 1fr;
            }
            
            .navigation-buttons {
                grid-template-columns: 1fr;
            }
            
            .content-section {
                padding: 15px;
            }
            
            .quiz-info {
                grid-template-columns: 1fr;
            }
        }

        /* تأثيرات للعناصر عند الظهور */
        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .slide-in {
            animation: slideIn 0.5s ease-in-out;
        }

        @keyframes slideIn {
            from { transform: translateX(-30px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        /* زر الرجوع إلى الخلف - تم التعديل */
        .back-button-container {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 100;
        }

        .back-btn {
            background: var(--bg-gradient-jet);
            border: 1px solid var(--jet);
            color: var(--gold-crayola);
            padding: 8px 15px;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: var(--fs6);
            font-weight: var(--fw500);
            transition: var(--transition1);
            box-shadow: var(--shadow1);
            position: relative;
            z-index: 1;
            text-decoration: none;
        }
        
        .back-btn::before {
            content: '';
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: 50px;
            z-index: -1;
            transition: var(--transition1);
        }
        
        .back-btn:hover {
            color: var(--white2);
            transform: translateX(-3px);
            text-decoration: none;
        }
        
        .back-btn:hover::before {
            background: var(--bg-gradient-gold2);
        }
        
        .back-btn i {
            transition: var(--transition1);
        }
        
        .back-btn:hover i {
            transform: translateX(-3px);
        }
        
        /* تعديلات للشاشات الصغيرة */
        @media (max-width: 768px) {
            .back-button-container {
                position: relative;
                top: 0;
                left: 0;
                margin: 0 0 15px 0;
                text-align: right;
                padding: 0 15px;
            }
            
            .back-btn {
                width: auto;
                justify-content: center;
                margin-bottom: 10px;
            }
            
            .page-content {
                padding: 15px;
            }
            
            .page-title {
                font-size: var(--fs2);
                text-align: center;
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .back-button-container {
                text-align: center;
            }
            
            .back-btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="main-content">
        <!-- زر الرجوع إلى الخلف في الجهة المقابلة (اليسار) -->
        <div class="back-button-container">
            <a href="index.php" class="back-btn">
                <i class="fas fa-arrow-left"></i> العودة إلى الخلف
            </a>
        </div>

        <div class="page-content">
            <h1 class="page-title"><i class="fas fa-history"></i> امتحان التاريخ - جميع أنواع الأسئلة</h1>
            
            <div class="content-section">
                <div class="quiz-info">
                    <div class="info-item">
                        <i class="fas fa-question-circle"></i>
                        <div class="label">عدد الأسئلة</div>
                        <div class="value">10 أسئلة</div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-stopwatch"></i>
                        <div class="label">مدة الامتحان</div>
                        <div class="value">60 دقيقة</div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-star"></i>
                        <div class="label">الدرجة الكلية</div>
                        <div class="value">100 درجة</div>
                    </div>
                </div>
                
                <div class="progress-container">
                    <div class="progress-bar-horizontal">
                        <div class="progress-fill-horizontal" id="progressBar" style="width: 10%;"></div>
                    </div>
                    <div class="progress-text">إكمال الامتحان: <span id="progressText">10%</span></div>
                </div>
                
                <div class="timer-container">
                    <div class="timer" id="examTimer">
                        <i class="fas fa-clock"></i> الوقت المتبقي: <span id="time">60:00</span>
                    </div>
                </div>
                
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-circle"></i>
                    <span>يجب إكمال جميع الأسئلة قبل انتهاء الوقت المحدد</span>
                </div>
                
                <form id="historyExamForm">
                    <!-- سؤال اختيار من متعدد -->
                    <div class="question-container fade-in">
                        <div class="question-header">
                            <div class="question-number">سؤال 1</div>
                            <div class="question-type">اختيار من متعدد</div>
                        </div>
                        <div class="question-text">
                            متى وقعت معركة حطين التي انتصر فيها صلاح الدين الأيوبي على الصليبيين؟
                        </div>
                        <div class="mcq-options">
                            <label class="mcq-option">
                                <input type="radio" name="q1" value="a">
                                1187 م
                            </label>
                            <label class="mcq-option">
                                <input type="radio" name="q1" value="b">
                                1191 م
                            </label>
                            <label class="mcq-option">
                                <input type="radio" name="q1" value="c">
                                1176 م
                            </label>
                            <label class="mcq-option">
                                <input type="radio" name="q1" value="d">
                                1189 م
                            </label>
                        </div>
                    </div>
                    
                    <!-- سؤال صح/خطأ -->
                    <div class="question-container fade-in">
                        <div class="question-header">
                            <div class="question-number">سؤال 2</div>
                            <div class="question-type">صح أو خطأ</div>
                        </div>
                        <div class="question-text">
                            تأسست الدولة العباسية بعد سقوط الدولة الأموية مباشرة.
                        </div>
                        <div class="truefalse-options">
                            <div class="truefalse-btn" data-value="true">صح</div>
                            <div class="truefalse-btn" data-value="false">خطأ</div>
                            <input type="hidden" name="q2" id="q2" value="">
                        </div>
                    </div>
                    
                    <!-- سؤال مقالي -->
                    <div class="question-container fade-in">
                        <div class="question-header">
                            <div class="question-number">سؤال 3</div>
                            <div class="question-type">مقالي</div>
                        </div>
                        <div class="question-text">
                            اشرح باختصار أسباب سقوط الدولة العثمانية.
                        </div>
                        <textarea class="essay-answer" name="q3" placeholder="اكتب إجابتك هنا..."></textarea>
                    </div>
                    
                    <!-- سؤال اختيار من متعدد -->
                    <div class="question-container fade-in">
                        <div class="question-header">
                            <div class="question-number">سؤال 4</div>
                            <div class="question-type">اختيار من متعدد</div>
                        </div>
                        <div class="question-text">
                            من هو الخليفة العباسي الذي أسس مدينة بغداد؟
                        </div>
                        <div class="mcq-options">
                            <label class="mcq-option">
                                <input type="radio" name="q4" value="a">
                                هارون الرشيد
                            </label>
                            <label class="mcq-option">
                                <input type="radio" name="q4" value="b">
                                أبو جعفر المنصور
                            </label>
                            <label class="mcq-option">
                                <input type="radio" name="q4" value="c">
                                المعتصم بالله
                            </label>
                            <label class="mcq-option">
                                <input type="radio" name="q4" value="d">
                                المأمون
                            </label>
                        </div>
                    </div>
                    
                    <!-- سؤال صح/خطأ -->
                    <div class="question-container fade-in">
                        <div class="question-header">
                            <div class="question-number">سؤال 5</div>
                            <div class="question-type">صح أو خطأ</div>
                        </div>
                        <div class="question-text">
                            قامت الدولة الفاطمية في المغرب قبل انتقالها إلى مصر.
                        </div>
                        <div class="truefalse-options">
                            <div class="truefalse-btn" data-value="true">صح</div>
                            <div class="truefalse-btn" data-value="false">خطأ</div>
                            <input type="hidden" name="q5" id="q5" value="">
                        </div>
                    </div>
                    
                    <!-- سؤال مقالي -->
                    <div class="question-container fade-in">
                        <div class="question-header">
                            <div class="question-number">سؤال 6</div>
                            <div class="question-type">مقالي</div>
                        </div>
                        <div class="question-text">
                            ما هي أهم إنجازات الخليفة عمر بن عبد العزيز خلال فترة خلافته؟
                        </div>
                        <textarea class="essay-answer" name="q6" placeholder="اكتب إجابتك هنا..."></textarea>
                    </div>
                    
                    <!-- سؤال اختيار من متعدد -->
                    <div class="question-container fade-in">
                        <div class="question-header">
                            <div class="question-number">سؤال 7</div>
                            <div class="question-type">اختيار من متعدد</div>
                        </div>
                        <div class="question-text">
                            في أي عام سقطت غرناطة، آخر معاقل المسلمين في الأندلس?
                        </div>
                        <div class="mcq-options">
                            <label class="mcq-option">
                                <input type="radio" name="q7" value="a">
                                1492 م
                            </label>
                            <label class="mcq-option">
                                <input type="radio" name="q7" value="b">
                                1485 م
                            </label>
                            <label class="mcq-option">
                                <input type="radio" name="q7" value="c">
                                1501 م
                            </label>
                            <label class="mcq-option">
                                <input type="radio" name="q7" value="d">
                                1479 م
                            </label>
                        </div>
                    </div>
                    
                    <!-- سؤال صح/خطأ -->
                    <div class="question-container fade-in">
                        <div class="question-header">
                            <div class="question-number">سؤال 8</div>
                            <div class="question-type">صح أو خطأ</div>
                        </div>
                        <div class="question-text">
                            كانت معركة اليرموك بين المسلمين والفرس.
                        </div>
                        <div class="truefalse-options">
                            <div class="truefalse-btn" data-value="true">صح</div>
                            <div class="truefalse-btn" data-value="false">خطأ</div>
                            <input type="hidden" name="q8" id="q8" value="">
                        </div>
                    </div>
                    
                    <!-- سؤال مقالي -->
                    <div class="question-container fade-in">
                        <div class="question-header">
                            <div class="question-number">سؤال 9</div>
                            <div class="question-type">مقالي</div>
                        </div>
                        <div class="question-text">
                        ناقش تأثير الحروب الصليبية على العالم الإسلامي وأوروبا.
                        </div>
                        <textarea class="essay-answer" name="q9" placeholder="اكتب إجابتك هنا..."></textarea>
                    </div>
                    
                    <!-- سؤال اختيار من متعدد -->
                    <div class="question-container fade-in">
                        <div class="question-header">
                            <div class="question-number">سؤال 10</div>
                            <div class="question-type">اختيار من متعدد</div>
                        </div>
                        <div class="question-text">
                            من كان قائد المسلمين في معركة القادسية؟
                        </div>
                        <div class="mcq-options">
                            <label class="mcq-option">
                                <input type="radio" name="q10" value="a">
                                خالد بن الوليد
                            </label>
                            <label class="mcq-option">
                                <input type="radio" name="q10" value="b">
                                سعد بن أبي وقاص
                            </label>
                            <label class="mcq-option">
                                <input type="radio" name="q10" value="c">
                                عمرو بن العاص
                            </label>
                            <label class="mcq-option">
                                <input type="radio" name="q10" value="d">
                                أبو عبيدة بن الجراح
                            </label>
                        </div>
                    </div>
                    
                    <div class="navigation-buttons">
                        <button type="button" class="btn btn-outline" id="prevBtn">
                            <i class="fas fa-arrow-right"></i> السابق
                        </button>
                        <button type="button" class="btn btn-primary" id="nextBtn">
                            التالي <i class="fas fa-arrow-left"></i>
                        </button>
                    </div>
                    
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-check"></i> إنهاء الامتحان
                    </button>
                </form>
                
                <!-- نتائج الامتحان -->
                <div class="results-container" id="resultsContainer">
                    <div class="exam-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h2>نتيجة امتحان التاريخ</h2>
                    
                    <div class="results-score" id="finalScore">80%</div>
                    
                    <div class="results-feedback" id="resultsFeedback">
                        أداء جيد! لديك معرفة جيدة بتاريخ العالم الإسلامي.
                    </div>
                    
                    <div class="progress-bar">
                        <div class="progress-fill" id="scoreProgress" style="width: 80%;"></div>
                    </div>
                    
                    <div class="results-details">
                        <div class="result-item correct">
                            <i class="fas fa-check-circle"></i>
                            <div class="label">الإجابات الصحيحة</div>
                            <div class="value" id="correctAnswers">8</div>
                        </div>
                        
                        <div class="result-item incorrect">
                            <i class="fas fa-times-circle"></i>
                            <div class="label">الإجابات الخاطئة</div>
                            <div class="value" id="incorrectAnswers">2</div>
                        </div>
                        
                        <div class="result-item score">
                            <i class="fas fa-star"></i>
                            <div class="label">الدرجة النهائية</div>
                            <div class="value" id="totalScore">80/100</div>
                        </div>
                    </div>
                    
                    <button type="button" class="btn btn-primary" id="reviewBtn">
                        <i class="fas fa-redo"></i> مراجعة الإجابات
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to top button -->
    <div class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </div>

    <script>
        // تنفيذ المؤقت
        const examTimer = document.getElementById('examTimer');
        const timeDisplay = document.getElementById('time');
        let timeLeft = 60 * 60; // 60 دقيقة بالثواني
        let timerInterval;

        function startTimer() {
            clearInterval(timerInterval);
            timerInterval = setInterval(updateTimer, 1000);
        }

        function updateTimer() {
            if (timeLeft <= 0) {
                clearInterval(timerInterval);
                submitExam();
                return;
            }

            timeLeft--;

            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;

            timeDisplay.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

            // تغيير لون المؤقت عند الاقتراب من النهاية
            if (timeLeft <= 300) { // 5 دقائق
                examTimer.classList.add('danger');
            } else if (timeLeft <= 900) { // 15 دقيقة
                examTimer.classList.add('warning');
            }
        }

        // إدارة التنقل بين الأسئلة
        const questions = document.querySelectorAll('.question-container');
        let currentQuestion = 0;

        function showQuestion(index) {
            questions.forEach((q, i) => {
                q.style.display = i === index ? 'block' : 'none';
            });

            document.getElementById('prevBtn').disabled = index === 0;
            document.getElementById('nextBtn').disabled = index === questions.length - 1;
            
            // تحديث شريط التقدم
            updateProgressBar();
        }

        document.getElementById('nextBtn').addEventListener('click', () => {
            if (currentQuestion < questions.length - 1) {
                currentQuestion++;
                showQuestion(currentQuestion);
                window.scrollTo(0, 0);
            }
        });

        document.getElementById('prevBtn').addEventListener('click', () => {
            if (currentQuestion > 0) {
                currentQuestion--;
                showQuestion(currentQuestion);
                window.scrollTo(0, 0);
            }
        });

        // تحديث شريط التقدم
        function updateProgressBar() {
            const progress = ((currentQuestion + 1) / questions.length) * 100;
            document.getElementById('progressBar').style.width = `${progress}%`;
            document.getElementById('progressText').textContent = `${Math.round(progress)}%`;
        }

        // إدارة أسئلة الصح والخطأ
        const trueFalseButtons = document.querySelectorAll('.truefalse-btn');
        trueFalseButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const parent = btn.closest('.question-container');
                const hiddenInput = parent.querySelector('input[type="hidden"]');
                
                // إزالة التحديد من جميع الأزرار في هذه المجموعة
                parent.querySelectorAll('.truefalse-btn').forEach(b => {
                    b.classList.remove('selected-true', 'selected-false');
                });
                
                // تطبيق التحديد على الزر المناسب
                if (btn.dataset.value === 'true') {
                    btn.classList.add('selected-true');
                } else {
                    btn.classList.add('selected-false');
                }
                
                // تحديث القيمة المخفية
                hiddenInput.value = btn.dataset.value;
            });
        });

        // إرسال الامتحان وعرض النتائج
        document.getElementById('historyExamForm').addEventListener('submit', function(e) {
            e.preventDefault();
            submitExam();
        });

        function submitExam() {
            clearInterval(timerInterval);
            
            // حساب النتيجة (هنا يتم حسابها عشوائياً لأغراض العرض)
            const correctAnswers = Math.floor(Math.random() * 5) + 6; // بين 6 و10
            const incorrectAnswers = 10 - correctAnswers;
            const score = correctAnswers * 10;
            const percentage = (score / 100) * 100;
            
            // عرض النتائج
            document.getElementById('historyExamForm').style.display = 'none';
            document.getElementById('resultsContainer').style.display = 'block';
            
            // تحديث بيانات النتائج
            document.getElementById('correctAnswers').textContent = correctAnswers;
            document.getElementById('incorrectAnswers').textContent = incorrectAnswers;
            document.getElementById('totalScore').textContent = `${score}/100`;
            document.getElementById('finalScore').textContent = `${percentage}%`;
            document.getElementById('scoreProgress').style.width = `${percentage}%`;
            
            // تحديد التعليق المناسب بناء على النتيجة
            let feedback = '';
            if (percentage >= 90) {
                feedback = 'ممتاز! لديك معرفة رائعة بتاريخ العالم الإسلامي.';
            } else if (percentage >= 70) {
                feedback = 'جيد جداً! لديك فهم قوي للأحداث التاريخية الرئيسية.';
            } else if (percentage >= 50) {
                feedback = 'مستوى مقبول، ولكن تحتاج إلى مراجعة بعض الأحداث التاريخية.';
            } else {
                feedback = 'يجب عليك دراسة التاريخ بشكل أكثر لتحسين معرفتك.';
            }
            document.getElementById('resultsFeedback').textContent = feedback;
            
            window.scrollTo(0, 0);
        }

        // زر مراجعة الإجابات
        document.getElementById('reviewBtn').addEventListener('click', () => {
            document.getElementById('resultsContainer').style.display = 'none';
            document.getElementById('historyExamForm').style.display = 'block';
            currentQuestion = 0;
            showQuestion(currentQuestion);
            window.scrollTo(0, 0);
        });

        // Back to top button
        const backToTopButton = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('show');
            } else {
                backToTopButton.classList.remove('show');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // تهيئة الصفحة
        showQuestion(currentQuestion);
        startTimer();
    </script>
</body>
</html>