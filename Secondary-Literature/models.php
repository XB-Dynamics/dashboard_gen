
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius AI - تدريب النماذج المتخصصة</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800&display=swap');
        
        :root {
            --bg-gradient-onyx: linear-gradient(to bottom right, hsl(240, 1%, 25%) 3%, hsl(0, 0%, 19%) 97%);
            --bg-gradient-jet: linear-gradient(to bottom right, hsla(240, 1%, 18%, 0.251) 3%, hsla(240, 2%, 11%, 0) 100%), hsl(240, 2%, 13%);
            --bg-gradient-gold1: linear-gradient(to bottom right, hsl(43, 74%, 49%) 0%, hsla(43, 74%, 49%, 0) 50%);
            --bg-gradient-gold2: linear-gradient(135deg, hsla(43, 74%, 49%, 0.251) 0%, hsla(43, 74%, 49%, 0) 59.86%), hsl(240, 2%, 13%);
            --border-gradient-onyx: linear-gradient(to bottom right, hsl(0, 0%, 25%) 0%, hsla(0, 0%, 25%, 0) 50%);
            --text-gradient-gold: linear-gradient(to right, hsl(43, 74%, 49%), hsl(33, 74%, 49%));
            --text-gradient-blue: linear-gradient(to right, hsl(210, 100%, 50%), hsl(190, 100%, 50%));
            --text-gradient-purple: linear-gradient(to right, hsl(270, 100%, 50%), hsl(250, 100%, 60%));
            --text-gradient-orange: linear-gradient(to right, hsl(30, 100%, 50%), hsl(20, 100%, 50%));
            --text-gradient-pink: linear-gradient(to right, hsl(330, 100%, 60%), hsl(320, 100%, 60%));
            --text-gradient-green: linear-gradient(to right, hsl(120, 100%, 40%), hsl(90, 100%, 40%));
            
            --jet: hsl(0, 0%, 22%);
            --onyx: hsl(240, 1%, 17%);
            --eerie-black1: hsl(240, 2%, 13%);
            --eerie-black2: hsl(240, 2%, 12%);
            --smoky-black: hsl(0, 0%, 7%);
            --white1: hsl(0, 0%, 100%);
            --white2: hsl(0, 0%, 98%);
            --gold: hsl(43, 74%, 49%);
            --light-gold: hsl(43, 74%, 59%);
            --light-gray: hsl(0, 0%, 84%);
            --light-gray70: hsla(0, 0%, 84%, 0.7);
            --bittersweet-shimmer: hsl(0, 43%, 51%);
            --blue: hsl(210, 100%, 50%);
            --purple: hsl(270, 100%, 50%);
            --orange: hsl(30, 100%, 50%);
            --pink: hsl(330, 100%, 60%);
            --green: hsl(120, 100%, 40%);

            --ff-tajawal: "Tajawal", sans-serif;

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
            font-family: var(--ff-tajawal);
        }

        body {
            background: var(--smoky-black);
            color: var(--white2);
            line-height: 1.6;
            min-height: 100vh;
            text-align: right;
            direction: rtl;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        /* الهيدر */
        .header {
            text-align: center;
            padding: 20px;
            position: relative;
            background: var(--bg-gradient-jet);
            box-shadow: var(--shadow2);
            z-index: 100;
        }

        .main-title {
            font-size: 2.5rem;
            margin-bottom: 10px;
            background: var(--text-gradient-gold);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: var(--fw800);
            letter-spacing: -0.5px;
        }

        .subtitle {
            color: var(--light-gray);
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        /* منطقة المحتوى الرئيسية */
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 30px;
            position: relative;
            z-index: 1;
            overflow-y: auto;
            padding-bottom: 120px; /* مساحة للأزرار في الأسفل */
        }

        /* نماذج الذكاء الاصطناعي */
        .ai-models-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
        }

        .ai-model-card {
            background: var(--border-gradient-onyx);
            border-radius: 20px;
            padding: 30px;
            cursor: pointer;
            transition: var(--transition1);
            border: 3px solid transparent;
            position: relative;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            box-shadow: var(--shadow3);
        }

        .ai-model-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow4);
        }

        .ai-model-card.active {
            border-color: var(--gold);
        }

        .icon-frame {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            position: relative;
            background: var(--text-gradient-gold);
            padding: 5px;
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.5);
        }

        .model-icon {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: white;
            box-shadow: var(--shadow2);
        }

        .model-title {
            font-size: 1.8rem;
            font-weight: var(--fw800);
            margin-bottom: 15px;
            text-align: center;
            background: var(--text-gradient-gold);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .model-specialization {
            font-size: 1.1rem;
            color: var(--light-gray);
            text-align: center;
            margin-bottom: 20px;
            font-weight: var(--fw600);
        }

        .model-description {
            font-size: 1rem;
            color: var(--light-gray70);
            line-height: 1.7;
            margin-bottom: 20px;
            flex-grow: 1;
            text-align: center;
        }

        .model-actions {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }

        .model-btn {
            padding: 15px 25px;
            border-radius: 30px;
            border: none;
            cursor: pointer;
            font-weight: var(--fw600);
            display: flex;
            align-items: center;
            gap: 10px;
            transition: var(--transition1);
            flex: 1;
            justify-content: center;
            font-size: 1.1rem;
            box-shadow: var(--shadow2);
        }

        .primary-btn {
            background: var(--text-gradient-gold);
            color: black;
        }

        .chat-btn {
            background: var(--text-gradient-pink);
            color: white;
        }

        .secondary-btn {
            background: rgba(255, 255, 255, 0.1);
            color: var(--white2);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .model-btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow3);
        }
                /* شريط التنقل السفلي المحدث */
        .bottom-navbar {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: var(--bg-gradient-onyx);
            display: flex;
            justify-content: space-around;
            padding: 12px 0;
            border-top: 1px solid var(--jet);
            z-index: 100;
        }

        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: var(--light-gray70);
            transition: var(--transition);
            padding: 5px 10px;
            border-radius: var(--border-radius);
            flex: 1;
            max-width: 20%;
        }

        .nav-item.active, .nav-item:hover {
            color: var(--primary-color);
            background-color: hsla(0, 0%, 100%, 0.1);
        }

        .nav-icon {
            font-size: 22px;
            margin-bottom: 5px;
        }

        .nav-label {
            font-size: var(--fs7);
            font-weight: var(--fw500);
        }


        /* أزرار في أسفل الشاشة */
        .bottom-buttons {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            z-index: 90;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .bottom-btn {
            padding: 18px 35px;
            border-radius: 30px;
            border: none;
            cursor: pointer;
            font-weight: var(--fw700);
            display: flex;
            align-items: center;
            gap: 12px;
            transition: var(--transition1);
            font-size: 1.2rem;
            min-width: 200px;
            justify-content: center;
        }

        .chat-btn {
            background: var(--text-gradient-blue);
            color: white;
        }

        .train-btn {
            background: var(--text-gradient-gold);
            color: black;
            padding: 20px 40px;
            font-size: 1.3rem;
            min-width: 250px;
        }

        .bottom-btn:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow5);
        }

        /* ألوان النماذج المختلفة */
        .my-model-bg {
            background: var(--text-gradient-gold);
        }

        .physics-model-bg {
            background: var(--text-gradient-blue);
        }

        .chemistry-model-bg {
            background: var(--text-gradient-purple);
        }

        .math-model-bg {
            background: var(--text-gradient-orange);
        }

        .grammar-model-bg {
            background: var(--text-gradient-pink);
        }

        /* اللوحة الجانبية */
        .side-panel {
            position: fixed;
            top: 0;
            right: 0;
            width: 0;
            height: 100%;
            background: var(--bg-gradient-jet);
            z-index: 200;
            overflow-y: auto;
            transition: var(--transition2);
            box-shadow: var(--shadow4);
        }

        .side-panel.open {
            width: 40%;
        }

        .panel-header {
            padding: 20px;
            background: var(--border-gradient-onyx);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--jet);
        }

        .panel-title {
            font-size: 1.5rem;
            font-weight: var(--fw700);
            background: var(--text-gradient-gold);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .close-panel {
            background: none;
            border: none;
            color: var(--light-gray);
            font-size: 1.5rem;
            cursor: pointer;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition1);
        }

        .close-panel:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .panel-body {
            padding: 20px;
            line-height: 1.7;
            height: calc(100% - 80px);
            display: flex;
            flex-direction: column;
        }

        /* منطقة رفع الملفات */
        .upload-area {
            border: 2px dashed var(--gold);
            border-radius: 15px;
            padding: 40px 20px;
            text-align: center;
            margin: 20px 0;
            cursor: pointer;
            transition: var(--transition1);
            background: rgba(255, 215, 0, 0.05);
        }

        .upload-area:hover {
            background: rgba(255, 215, 0, 0.1);
            border-color: var(--light-gold);
        }

        .upload-icon {
            font-size: 3rem;
            color: var(--gold);
            margin-bottom: 15px;
        }

        .upload-text {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .upload-subtext {
            color: var(--light-gray70);
            font-size: 0.9rem;
        }

        .file-input {
            display: none;
        }

        /* شريط التقدم */
        .progress-container {
            width: 100%;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            margin: 20px 0;
            overflow: hidden;
            display: none;
        }

        .progress-bar {
            height: 10px;
            background: var(--text-gradient-gold);
            width: 0%;
            transition: width 0.3s ease;
        }

        .progress-text {
            text-align: center;
            margin-top: 10px;
            font-size: 0.9rem;
            color: var(--light-gray);
        }

        /* زر الرجوع */
        .back-btn {
            background: rgba(255, 255, 255, 0.1);
            color: var(--white2);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
            transition: var(--transition1);
        }

        .back-btn:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        /* رسالة النجاح */
        .success-message {
            background: rgba(0, 255, 0, 0.1);
            border: 1px solid rgba(0, 255, 0, 0.3);
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            margin: 20px 0;
            display: none;
        }

        .success-icon {
            font-size: 3rem;
            color: var(--green);
            margin-bottom: 15px;
        }

        /* تأثيرات الحركة */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* تصميم متجاوب */
        @media (max-width: 1200px) {
            .side-panel.open {
                width: 50%;
            }
            
            .ai-models-container {
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            }
        }

        @media (max-width: 992px) {
            .side-panel.open {
                width: 70%;
            }
            
            .ai-models-container {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
            
            .model-title {
                font-size: 1.6rem;
            }
            
            .icon-frame {
                width: 90px;
                height: 90px;
            }
            
            .model-icon {
                width: 80px;
                height: 80px;
                font-size: 2rem;
            }
            
            .bottom-btn {
                padding: 15px 25px;
                font-size: 1.1rem;
                min-width: 180px;
            }
            
            .train-btn {
                padding: 18px 30px;
                font-size: 1.2rem;
                min-width: 220px;
            }
        }

        @media (max-width: 768px) {
            .main-title {
                font-size: 1.8rem;
            }
            
            .main-content {
                padding: 20px;
            }
            
            .ai-models-container {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .ai-model-card {
                padding: 25px;
            }
            
            .side-panel.open {
                width: 85%;
            }
            
            .model-actions {
                flex-direction: column;
            }
            
            .bottom-buttons {
                flex-direction: column;
                gap: 15px;
                padding: 15px;
            }
            
            .bottom-btn {
                width: 100%;
                max-width: 300px;
                margin: 0 auto;
            }
        }

        @media (max-width: 576px) {
            .header {
                padding: 15px;
            }
            
            .main-title {
                font-size: 1.6rem;
            }
            
            .subtitle {
                font-size: 1rem;
            }
            
            .main-content {
                padding: 15px;
            }
            
            .ai-model-card {
                padding: 20px;
            }
            
            .model-title {
                font-size: 1.4rem;
            }
            
            .icon-frame {
                width: 80px;
                height: 80px;
            }
            
            .model-icon {
                width: 70px;
                height: 70px;
                font-size: 1.8rem;
            }
            
            .side-panel.open {
                width: 100%;
            }
            
            .panel-header {
                padding: 15px;
            }
            
            .panel-body {
                padding: 15px;
            }
            
            .model-btn {
                padding: 12px 20px;
                font-size: 1rem;
            }
            
            .bottom-btn {
                padding: 12px 20px;
                font-size: 1rem;
                min-width: 160px;
            }
            
            .train-btn {
                padding: 14px 25px;
                font-size: 1.1rem;
                min-width: 200px;
            }
        }

        @media (max-width: 380px) {
            .ai-model-card {
                padding: 15px;
            }
            
            .model-title {
                font-size: 1.3rem;
            }
            
            .icon-frame {
                width: 70px;
                height: 70px;
            }
            
            .model-icon {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
            
            .bottom-btn {
                padding: 10px 15px;
                font-size: 0.9rem;
                min-width: 140px;
            }
            
            .train-btn {
                padding: 12px 20px;
                font-size: 1rem;
                min-width: 180px;
            }
        }
    </style>
</head>
<body>
    <!-- الهيدر -->
    <div class="header">
        <h1 class="main-title">Genius AI <i class="fas fa-brain" style="color: var(--gold);"></i></h1>
        <p class="subtitle">نظام تدريب النماذج المتخصصة</p>
    </div>

    <!-- منطقة المحتوى الرئيسية -->
    <div class="main-content">
        <div class="ai-models-container">
            <!-- نموذجي - النموذج العام -->
            <div class="ai-model-card" data-model="my-model">
                <div class="icon-frame">
                    <div class="model-icon my-model-bg">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <div class="model-title">نماذجي</div>
                <div class="model-specialization">النموذج الشخصي المتكامل</div>
                <div class="model-description">
                    قم بتدريب النموذج الخاص بك أو استخدام الموديلات التي سبق أن دربتها
                </div>
                <div class="model-actions">
                    <a class="model-btn chat-btn" href="studies_chat.php">
                        <i class="fas fa-comments"></i> الذهاب للمحادثة
                    </a>
                </div>
            </div>


            <!-- نموذج الرياضيات -->
            <div class="ai-model-card" data-model="math">
                <div class="icon-frame">
                    <div class="model-icon math-model-bg">
                        <i class="fas fa-calculator"></i>
                    </div>
                </div>
                <div class="model-title">نموذج الرياضيات</div>
                <div class="model-specialization">متخصص في مسائل الرياضيات</div>
                <div class="model-actions">
                    <a class="model-btn chat-btn" href="math_chat.php">
                        <i class="fas fa-comments"></i> الذهاب للمحادثة
                    </a>
                </div>
            </div>

            <!-- نموذج النحو والبلاغة -->
            <div class="ai-model-card" data-model="grammar">
                <div class="icon-frame">
                    <div class="model-icon grammar-model-bg">
                        <i class="fas fa-language"></i>
                    </div>
                </div>
                <div class="model-title">نموذج النحو والبلاغة</div>
                <div class="model-specialization">متخصص في النحو والبلاغة</div>
                <div class="model-actions">
                    <a class="model-btn chat-btn" href="rhetoric_chat.php">
                        <i class="fas fa-comments"></i> الذهاب للمحادثة
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- أزرار في أسفل الشاشة -->
    <div class="bottom-buttons">
        <button class="bottom-btn train-btn" onclick="window.location.href='create_models-pdf.php'">
            <i class="fas fa-graduation-cap"></i> تدريب موديل
        </button>
            <?php include 'header.php'; ?>

    </div>

    <!-- اللوحة الجانبية -->
    <div class="side-panel" id="side-panel">
        <div class="panel-header">
            <div class="panel-title" id="panel-title">تدريب الموديل</div>
            <button class="close-panel" id="close-panel">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <div class="panel-body" id="panel-body">
            <!-- محتوى اللوحة سيتم إضافته ديناميكيًا -->
        </div>
    </div>

    <script>
        // عناصر واجهة المستخدم
        const sidePanel = document.getElementById('side-panel');
        const closePanelBtn = document.getElementById('close-panel');
        const panelTitle = document.getElementById('panel-title');
        const panelBody = document.getElementById('panel-body');

        let currentModel = 'general';

        // فتح لوحة تدريب الموديل
        function openTrainingPanel(model) {
            currentModel = model;
            const modelName = getModelName(model);
            panelTitle.textContent = `تدريب ${modelName}`;
            
            const trainingHTML = `
                <button class="back-btn" onclick="showMainTrainingPanel()">
                    <i class="fas fa-arrow-right"></i> رجوع
                </button>
                
                <h3 style="color: var(--gold); margin-bottom: 20px;">تدريب ${modelName}</h3>
                
                <div class="upload-area" id="upload-area">
                    <div class="upload-icon">
                        <i class="fas fa-file-pdf"></i>
                    </div>
                    <div class="upload-text">انقر لرفع ملف PDF</div>
                    <div class="upload-subtext">أو اسحب الملف وأفلته هنا</div>
                    <input type="file" class="file-input" id="file-input" accept=".pdf">
                </div>
                
                <div class="progress-container" id="progress-container">
                    <div class="progress-bar" id="progress-bar"></div>
                    <div class="progress-text" id="progress-text">0%</div>
                </div>
                
                <div class="success-message" id="success-message">
                    <div class="success-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3 style="color: var(--green); margin-bottom: 10px;">تم تدريب النموذج بنجاح!</h3>
                    <p>تم تدريب ${modelName} بنجاح باستخدام الملف المرفوع.</p>
                </div>
                
                <div style="background: rgba(255,215,0,0.1); padding: 15px; border-radius: 10px; border: 1px solid rgba(255,215,0,0.3); margin-top: 20px;">
                    <h4 style="color: var(--gold); margin-bottom: 10px;">معلومات التدريب</h4>
                    <ul style="margin-right: 15px;">
                        <li>يمكنك رفع ملف PDF واحد أو أكثر</li>
                        <li>سيتم معالجة الملفات وتحليل محتواها</li>
                        <li>سيتم تدريب النموذج على المعلومات المستخرجة</li>
                        <li>قد تستغرق العملية من 2-5 دقائق حسب حجم الملفات</li>
                    </ul>
                </div>
            `;
            
            panelBody.innerHTML = trainingHTML;
            sidePanel.classList.add('open');
            
            // تهيئة أحداث رفع الملفات
            setTimeout(() => {
                initFileUpload();
            }, 100);
        }

        // إظهار لوحة التدريب الرئيسية
        function showMainTrainingPanel() {
            panelTitle.textContent = "تدريب الموديل";
            
            const trainingHTML = `
                <div style="line-height: 1.8;">
                    <h3 style="color: var(--gold); margin-bottom: 20px;">تدريب الموديل الشخصي</h3>
                    
                    <div style="background: rgba(255,255,255,0.05); padding: 20px; border-radius: 10px; margin-bottom: 20px;">
                        <p style="margin-bottom: 15px;">يمكنك تدريب الموديل الشخصي الخاص بك ليتناسب مع احتياجاتك الخاصة.</p>
                        
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 20px;">
                            <div style="background: rgba(255,255,255,0.1); padding: 15px; border-radius: 8px;">
                                <h4 style="color: var(--gold); margin-bottom: 10px;">رفع ملفات التدريب</h4>
                                <p style="font-size: 0.9rem;">ارفع ملفات PDF تحتوي على المواد التي تريد تدريب الموديل عليها</p>
                                <button class="model-btn secondary-btn" style="margin-top: 10px; width: 100%;" onclick="openTrainingPanel('general')">
                                    <i class="fas fa-upload"></i> رفع ملف PDF
                                </button>
                            </div>
                            
                            <div style="background: rgba(255,255,255,0.1); padding: 15px; border-radius: 8px;">
                                <h4 style="color: var(--gold); margin-bottom: 10px;">إدخال يدوي</h4>
                                <p style="font-size: 0.9rem;">أدخل المعلومات يدوياً لتدريب الموديل على مواضيع محددة</p>
                                <button class="model-btn secondary-btn" style="margin-top: 10px; width: 100%;" onclick="openManualInput()">
                                    <i class="fas fa-keyboard"></i> إدخال يدوي
                                </button>
                            </div>
                        </div>
                        
                        <div style="background: rgba(255,255,255,0.1); padding: 15px; border-radius: 8px; margin-bottom: 15px;">
                            <h4 style="color: var(--gold); margin-bottom: 10px;">الموديلات المدربة مسبقاً</h4>
                            <p style="font-size: 0.9rem;">اختر من الموديلات التي سبق أن دربتها:</p>
                            <select style="width: 100%; padding: 10px; border-radius: 5px; background: rgba(0,0,0,0.3); color: white; border: 1px solid var(--jet); margin-top: 10px;" id="pre-trained-models">
                                <option>-- اختر موديل مدرب مسبقًا --</option>
                                <option>موديل الرياضيات المتقدمة</option>
                                <option>موديل النحو المتخصص</option>
                            </select>
                        </div>
                        
                        <button class="model-btn primary-btn" style="width: 100%; margin-top: 10px;" onclick="startTraining()">
                            <i class="fas fa-play"></i> بدء التدريب
                        </button>
                    </div>
                    
                    <div style="background: rgba(255,215,0,0.1); padding: 15px; border-radius: 10px; border: 1px solid rgba(255,215,0,0.3);">
                        <h4 style="color: var(--gold); margin-bottom: 10px;">معلومات التدريب</h4>
                        <ul style="margin-right: 15px;">
                            <li>سيستغرق التدريب من 5-10 دقائق حسب حجم البيانات</li>
                            <li>يمكنك متابعة تقدم التدريب في الوقت الفعلي</li>
                            <li>سيتم حفظ الموديل المدرب تلقائياً في حسابك</li>
                        </ul>
                    </div>
                </div>
            `;
            
            panelBody.innerHTML = trainingHTML;
        }

        // تهيئة رفع الملفات
        function initFileUpload() {
            const uploadArea = document.getElementById('upload-area');
            const fileInput = document.getElementById('file-input');
            const progressContainer = document.getElementById('progress-container');
            const progressBar = document.getElementById('progress-bar');
            const progressText = document.getElementById('progress-text');
            const successMessage = document.getElementById('success-message');
            
            // النقر على منطقة الرفع
            uploadArea.addEventListener('click', () => {
                fileInput.click();
            });
            
            // تغيير الملف
            fileInput.addEventListener('change', (e) => {
                if (e.target.files.length > 0) {
                    const file = e.target.files[0];
                    if (file.type === 'application/pdf') {
                        simulateFileUpload(file);
                    } else {
                        alert('يرجى اختيار ملف PDF فقط');
                    }
                }
            });
            
            // سحب وإفلات الملفات
            uploadArea.addEventListener('dragover', (e) => {
                e.preventDefault();
                uploadArea.style.background = 'rgba(255, 215, 0, 0.15)';
            });
            
            uploadArea.addEventListener('dragleave', () => {
                uploadArea.style.background = 'rgba(255, 215, 0, 0.05)';
            });
            
            uploadArea.addEventListener('drop', (e) => {
                e.preventDefault();
                uploadArea.style.background = 'rgba(255, 215, 0, 0.05)';
                
                if (e.dataTransfer.files.length > 0) {
                    const file = e.dataTransfer.files[0];
                    if (file.type === 'application/pdf') {
                        simulateFileUpload(file);
                    } else {
                        alert('يرجى اختيار ملف PDF فقط');
                    }
                }
            });
            
            // محاكاة رفع الملف
            function simulateFileUpload(file) {
                // إخفاء منطقة الرفع وإظهار شريط التقدم
                uploadArea.style.display = 'none';
                progressContainer.style.display = 'block';
                
                // محاكاة التقدم
                let progress = 0;
                const interval = setInterval(() => {
                    progress += Math.random() * 10;
                    if (progress >= 100) {
                        progress = 100;
                        clearInterval(interval);
                        
                        // إكمال الرفع
                        setTimeout(() => {
                            progressContainer.style.display = 'none';
                            successMessage.style.display = 'block';
                            
                            // إظهار زر جديد لرفع ملف آخر
                            const newUploadButton = document.createElement('button');
                            newUploadButton.className = 'model-btn primary-btn';
                            newUploadButton.style.width = '100%';
                            newUploadButton.style.marginTop = '20px';
                            newUploadButton.innerHTML = '<i class="fas fa-plus"></i> رفع ملف آخر';
                            newUploadButton.onclick = () => {
                                successMessage.style.display = 'none';
                                uploadArea.style.display = 'block';
                                fileInput.value = '';
                            };
                            
                            panelBody.appendChild(newUploadButton);
                        }, 1000);
                    }
                    
                    // تحديث شريط التقدم
                    progressBar.style.width = `${progress}%`;
                    progressText.textContent = `${Math.round(progress)}%`;
                }, 200);
            }
        }

        // الحصول على اسم النموذج
        function getModelName(model) {
            const names = {
                "general": "النموذج العام",
                "my-model": "نماذجي",
                "math": "نموذج الرياضيات",
                "grammar": "نموذج النحو والبلاغة"
            };
            return names[model] || "النموذج";
        }

        // وظائف مساعدة للتدريب
        function openManualInput() {
            alert("سيتم فتح نافذة للإدخال اليدوي. هذه الميزة قيد التطوير.");
        }

        function startTraining() {
            const select = document.getElementById('pre-trained-models');
            if (select && select.value !== "-- اختر موديل مدرب مسبقًا --") {
                alert(`سيبدأ تدريب الموديل: ${select.value}`);
            } else {
                alert("سيبدأ تدريب الموديل الشخصي الخاص بك");
            }
            
            // إغلاق اللوحة بعد بدء التدريب
            setTimeout(() => {
                closeSidePanel();
            }, 2000);
        }

        // إغلاق اللوحة الجانبية
        function closeSidePanel() {
            sidePanel.classList.remove('open');
            currentModel = null;
        }

        // أحداث الأزرار
        closePanelBtn.addEventListener('click', closeSidePanel);

        // إغلاق اللوحة عند النقر خارجها
        document.addEventListener('click', (e) => {
            if (sidePanel.classList.contains('open') && !sidePanel.contains(e.target)) {
                closeSidePanel();
            }
        });

        // جعل الدوال متاحة عالمياً للاستخدام في الأحداث
        window.openTrainingPanel = openTrainingPanel;
        window.showMainTrainingPanel = showMainTrainingPanel;
        window.openManualInput = openManualInput;
        window.startTraining = startTraining;

        // تهيئة الصفحة
        document.addEventListener('DOMContentLoaded', () => {
            // لا يوجد محتوى للتهيئة هنا
        });
    </script>
</body>
</html>