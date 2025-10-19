
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius AI - إنشاء الشروحات التعليمية</title>
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
            padding-bottom: 120px;
        }

        /* نماذج الشروحات */
        .explanation-models-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
        }

        .explanation-model-card {
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

        .explanation-model-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow4);
        }

        .explanation-model-card.active {
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

        .secondary-btn {
            background: rgba(255, 255, 255, 0.1);
            color: var(--white2);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .model-btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow3);
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
            box-shadow: var(--shadow4);
            font-size: 1.2rem;
            min-width: 200px;
            justify-content: center;
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
            padding: 5 px 10px;
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

        .create-btn {
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
        .my-explanations-model-bg {
            background: var(--text-gradient-blue);
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

        /* نماذج الإدخال */
        .input-group {
            margin-bottom: 20px;
        }

        .input-label {
            display: block;
            margin-bottom: 8px;
            color: var(--light-gray);
            font-weight: var(--fw600);
        }

        .input-field, .input-select, .input-textarea {
            width: 100%;
            padding: 15px;
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid var(--jet);
            color: var(--white2);
            font-size: 1rem;
            transition: var(--transition1);
        }

        .input-textarea {
            min-height: 120px;
            resize: vertical;
        }

        .input-field:focus, .input-select:focus, .input-textarea:focus {
            outline: none;
            border-color: var(--gold);
            box-shadow: 0 0 0 2px rgba(255, 215, 0, 0.2);
        }

        /* شريط التقدم */
        .progress-container {
            width: 100%;
            background-color: rgba(255, 255, 255, 0.1);
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
            color: var(--light-gray);
            font-size: 0.9rem;
        }

        /* رسالة النجاح */
        .success-message {
            background: rgba(0, 255, 0, 0.1);
            border: 1px solid rgba(0, 255, 0, 0.3);
            color: #90EE90;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-top: 20px;
            display: none;
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
            
            .explanation-models-container {
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            }
        }

        @media (max-width: 992px) {
            .side-panel.open {
                width: 70%;
            }
            
            .explanation-models-container {
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
            
            .create-btn {
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
            
            .explanation-models-container {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .explanation-model-card {
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
            
            .explanation-model-card {
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
            
            .create-btn {
                padding: 14px 25px;
                font-size: 1.1rem;
                min-width: 200px;
            }
        }

        @media (max-width: 380px) {
            .explanation-model-card {
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
            
            .create-btn {
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
        <p class="subtitle">نظام إنشاء الشروحات التعليمية المتخصصة</p>
    </div>

    <!-- منطقة المحتوى الرئيسية -->
    <div class="main-content">
        <div class="explanation-models-container">
            <!-- نموذج شروحاتي -->
            <div class="explanation-model-card" data-model="my-explanations">
                <div class="icon-frame">
                    <div class="model-icon my-explanations-model-bg">
                        <i class="fas fa-book-open"></i>
                    </div>
                </div>
                <div class="model-title">شروحاتي</div>
                <div class="model-specialization">إدارة الشروحات الخاصة بي</div>
                <div class="model-description">
                    الوصول إلى الشروحات التي قمت بإنشائها وإدارتها وتعديلها
                </div>
                <div class="model-actions">
                    <button class="model-btn primary-btn" onclick="window.location.href='enter-explanation.php'">
                        <i class="fas fa-door-open"></i> دخول إلى الشروحات
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- أزرار في أسفل الشاشة -->
    <div class="bottom-buttons">
        <button class="bottom-btn create-btn" onclick="window.location.href='create-explanation.php'">
            <i class="fas fa-graduation-cap"></i> إنشاء شرح <span style="font-size: 0.8em; margin-right: 5px;">AI</span>
        </button>
    </div>

    <!-- اللوحة الجانبية -->
    <div class="side-panel" id="side-panel">
        <div class="panel-header">
            <div class="panel-title" id="panel-title">إنشاء شرح جديد</div>
            <button class="close-panel" id="close-panel">
                <i class="fas fa-times"></i>
            </button>
            <?php include 'header.php'; ?>

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

        // فتح لوحة إنشاء الشرح
        function openCreatePanel(subject) {
            let subjectName = "عام";
            let subjectIcon = "fa-graduation-cap";
            
            panelTitle.textContent = `إنشاء شرح ${subjectName}`;
            
            const createHTML = `
                <div style="line-height: 1.8;">
                    <h3 style="color: var(--gold); margin-bottom: 20px;">إنشاء شرح ${subjectName}</h3>
                    
                    <div style="background: rgba(255,255,255,0.05); padding: 20px; border-radius: 10px; margin-bottom: 20px;">
                        <p style="margin-bottom: 15px;">يمكنك إنشاء شرح متخصص في ${subjectName} باستخدام الذكاء الاصطناعي.</p>
                        
                        <div class="input-group">
                            <label class="input-label" for="explanation-title">عنوان الشرح:</label>
                            <input type="text" id="explanation-title" class="input-field" placeholder="مثال: شرح ${subjectName} للصف الأول الثانوي" />
                        </div>
                        
                        <div class="input-group">
                            <label class="input-label" for="explanation-topic">الموضوع:</label>
                            <input type="text" id="explanation-topic" class="input-field" placeholder="مثال: قوانين نيوتن للحركة" />
                        </div>
                        
                        <div class="input-group">
                            <label class="input-label" for="explanation-level">المستوى التعليمي:</label>
                            <select id="explanation-level" class="input-select">
                                <option value="elementary">ابتدائي</option>
                                <option value="middle" selected>إعدادي</option>
                                <option value="high">ثانوي</option>
                                <option value="university">جامعي</option>
                            </select>
                        </div>
                        
                        <div class="input-group">
                            <label class="input-label" for="explanation-duration">المدة المتوقعة (دقائق):</label>
                            <input type="number" id="explanation-duration" class="input-field" placeholder="30" value="30" min="5" max="180" />
                        </div>
                        
                        <div class="input-group">
                            <label class="input-label" for="explanation-details">تفاصيل إضافية:</label>
                            <textarea id="explanation-details" class="input-textarea" placeholder="أدخل أي تفاصيل إضافية تريد تضمينها في الشرح..."></textarea>
                        </div>
                        
                        <button class="model-btn primary-btn" style="width: 100%; margin-top: 10px;" onclick="startCreating()">
                            <i class="fas fa-play"></i> بدء الإنشاء
                        </button>
                    </div>
                    
                    <!-- شريط التقدم -->
                    <div class="progress-container" id="progress-container">
                        <div class="progress-bar" id="progress-bar"></div>
                        <div class="progress-text" id="progress-text">جاري إنشاء الشرح...</div>
                    </div>
                    
                    <!-- رسالة النجاح -->
                    <div class="success-message" id="success-message">
                        <i class="fas fa-check-circle" style="font-size: 2rem; margin-bottom: 10px;"></i>
                        <h4 style="margin-bottom: 10px;">لقد تم إنشاء الشرح بنجاح!</h4>
                        <p>يمكنك الآن عرض الشرح الذي تم إنشاؤه.</p>
                    </div>
                    
                    <div style="background: rgba(255,215,0,0.1); padding: 15px; border-radius: 10px; border: 1px solid rgba(255,215,0,0.3);">
                        <h4 style="color: var(--gold); margin-bottom: 10px;">معلومات الإنشاء</h4>
                        <ul style="margin-right: 15px;">
                            <li>سيستغرق الإنشاء من 2-4 دقائق حسب طول الشرح</li>
                            <li>يمكنك متابعة تقدم الإنشاء في الوقت الفعلي</li>
                            <li>سيتم حفظ الشرح المنشأ تلقائياً في حسابك</li>
                        </ul>
                    </div>
                </div>
            `;
            
            panelBody.innerHTML = createHTML;
            sidePanel.classList.add('open');
            
            // إعادة تعيين العناصر
            document.getElementById('progress-container').style.display = 'none';
            document.getElementById('success-message').style.display = 'none';
        }

        // فتح صفحة شروحاتي
        function openMyExplanations() {
            panelTitle.textContent = "شروحاتي";
            
            const myExplanationsHTML = `
                <div style="line-height: 1.8;">
                    <h3 style="color: var(--gold); margin-bottom: 20px;">شروحاتي</h3>
                    
                    <div style="background: rgba(255,255,255,0.05); padding: 20px; border-radius: 10px; margin-bottom: 20px;">
                        <p style="margin-bottom: 15px;">هنا يمكنك إدارة جميع الشروحات التي قمت بإنشائها.</p>
                        
                        <div style="display: grid; gap: 15px; margin-top: 20px;">
                            <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 10px; border-left: 4px solid var(--gold);">
                                <h4 style="color: var(--gold); margin-bottom: 5px;">شرح الرياضيات - التفاضل والتكامل</h4>
                                <p style="font-size: 0.9rem; color: var(--light-gray70);">مستوى: ثانوي - المدة: 45 دقيقة</p>
                                <div style="display: flex; gap: 10px; margin-top: 10px;">
                                    <button class="model-btn secondary-btn" style="padding: 8px 15px; font-size: 0.9rem;">
                                        <i class="fas fa-eye"></i> عرض
                                    </button>
                                    <button class="model-btn secondary-btn" style="padding: 8px 15px; font-size: 0.9rem;">
                                        <i class="fas fa-edit"></i> تعديل
                                    </button>
                                    <button class="model-btn secondary-btn" style="padding: 8px 15px; font-size: 0.9rem;">
                                        <i class="fas fa-trash"></i> حذف
                                    </button>
                                </div>
                            </div>
                            
                            <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 10px; border-left: 4px solid var(--blue);">
                                <h4 style="color: var(--blue); margin-bottom: 5px;">شرح الكيمياء - التفاعلات الكيميائية</h4>
                                <p style="font-size: 0.9rem; color: var(--light-gray70);">مستوى: إعدادي - المدة: 30 دقيقة</p>
                                <div style="display: flex; gap: 10px; margin-top: 10px;">
                                    <button class="model-btn secondary-btn" style="padding: 8px 15px; font-size: 0.9rem;">
                                        <i class="fas fa-eye"></i> عرض
                                    </button>
                                    <button class="model-btn secondary-btn" style="padding: 8px 15px; font-size: 0.9rem;">
                                        <i class="fas fa-edit"></i> تعديل
                                    </button>
                                    <button class="model-btn secondary-btn" style="padding: 8px 15px; font-size: 0.9rem;">
                                        <i class="fas fa-trash"></i> حذف
                                    </button>
                                </div>
                            </div>
                            
                            <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 10px; border-left: 4px solid var(--green);">
                                <h4 style="color: var(--green); margin-bottom: 5px;">شرح الأحياء - الخلية والوراثة</h4>
                                <p style="font-size: 0.9rem; color: var(--light-gray70);">مستوى: ثانوي - المدة: 60 دقيقة</p>
                                <div style="display: flex; gap: 10px; margin-top: 10px;">
                                    <button class="model-btn secondary-btn" style="padding: 8px 15px; font-size: 0.9rem;">
                                        <i class="fas fa-eye"></i> عرض
                                    </button>
                                    <button class="model-btn secondary-btn" style="padding: 8px 15px; font-size: 0.9rem;">
                                        <i class="fas fa-edit"></i> تعديل
                                    </button>
                                    <button class="model-btn secondary-btn" style="padding: 8px 15px; font-size: 0.9rem;">
                                        <i class="fas fa-trash"></i> حذف
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <button class="model-btn primary-btn" style="width: 100%; margin-top: 20px;" onclick="openCreatePanel('general')">
                            <i class="fas fa-plus"></i> إنشاء شرح جديد
                        </button>
                    </div>
                </div>
            `;
            
            panelBody.innerHTML = myExplanationsHTML;
            sidePanel.classList.add('open');
        }

        // بدء عملية إنشاء الشرح
        function startCreating() {
            const explanationTitle = document.getElementById('explanation-title').value;
            const explanationTopic = document.getElementById('explanation-topic').value;
            const explanationLevel = document.getElementById('explanation-level').value;
            const explanationDuration = document.getElementById('explanation-duration').value;
            const explanationDetails = document.getElementById('explanation-details').value;
            
            // التحقق من صحة البيانات
            if (!explanationTitle) {
                alert('يرجى إدخال عنوان للشرح');
                return;
            }
            
            if (!explanationTopic) {
                alert('يرجى إدخال موضوع الشرح');
                return;
            }
            
            if (!explanationDuration || explanationDuration < 5 || explanationDuration > 180) {
                alert('يرجى إدخال مدة شرح صحيحة (بين 5 و 180 دقيقة)');
                return;
            }
            
            // إظهار شريط التقدم
            const progressContainer = document.getElementById('progress-container');
            const progressBar = document.getElementById('progress-bar');
            const progressText = document.getElementById('progress-text');
            
            progressContainer.style.display = 'block';
            progressBar.style.width = '0%';
            progressText.textContent = 'جاري إنشاء الشرح...';
            
            // محاكاة عملية الإنشاء
            let progress = 0;
            const interval = setInterval(() => {
                progress += Math.random() * 10;
                if (progress > 100) progress = 100;
                
                progressBar.style.width = progress + '%';
                
                if (progress < 30) {
                    progressText.textContent = 'جاري تحليل الموضوع...';
                } else if (progress < 60) {
                    progressText.textContent = 'جاري إنشاء المحتوى التعليمي...';
                } else if (progress < 90) {
                    progressText.textContent = 'جاري إضافة الأمثلة والتوضيحات...';
                } else {
                    progressText.textContent = 'جاري حفظ الشرح...';
                }
                
                if (progress === 100) {
                    clearInterval(interval);
                    setTimeout(() => {
                        // إظهار رسالة النجاح
                        progressContainer.style.display = 'none';
                        document.getElementById('success-message').style.display = 'block';
                    }, 500);
                }
            }, 300);
        }

        // إغلاق اللوحة الجانبية
        function closeSidePanel() {
            sidePanel.classList.remove('open');
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
        window.openCreatePanel = openCreatePanel;
        window.startCreating = startCreating;
        window.openMyExplanations = openMyExplanations;

        // تهيئة الصفحة
        document.addEventListener('DOMContentLoaded', () => {
            // لا يوجد محتوى للتهيئة هنا
        });
    </script>
</body>
</html>