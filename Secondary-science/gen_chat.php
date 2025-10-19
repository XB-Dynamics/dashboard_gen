<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>العباقرة ذكاء اصطناعي</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
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
            --border-gradient-onyx: linear-gradient(
                to bottom right,
                hsl(0, 0%, 25%) 0%,
                hsla(0, 0%, 25%, 0) 50%
            );

            --jet: hsl(0, 0%, 22%);
            --onyx: hsl(240, 1%, 17%);
            --eerie-black1: hsl(240, 2%, 13%);
            --smoky-black: hsl(0, 0%, 7%);
            --white1: hsl(0, 0%, 100%);
            --white2: hsl(0, 0%, 98%);
            --orange-yellow-crayola: hsl(45, 100%, 72%);
            --vegas-gold: hsl(45, 54%, 58%);
            --light-gray: hsl(0, 0%, 84%);
            --light-gray70: hsla(0, 0%, 84%, 0.7);

            --ff-tajawal: 'Tajawal', sans-serif;

            --fs1: 24px;
            --fs2: 18px;
            --fs4: 16px;
            --fs5: 15px;
            --fs7: 13px;

            --fw500: 500;
            --fw600: 600;

            --shadow2: 0px 16px 30px hsla(0, 0%, 0%, 0.25);
            --shadow3: 0px 16px 40px hsla(0, 0%, 0%, 0.25);

            --transition: 0.25s ease;
            --transition2: 0.5s ease-in-out;
            
            --primary-color: var(--orange-yellow-crayola);
            --secondary-color: var(--vegas-gold);
            --teacher-color-3: hsl(35, 100%, 60%);
            --border-radius: 12px;
            
            /* ألوان النسخة البرتقالية */
            --orange-primary-color: hsl(30, 100%, 50%);
            --orange-secondary-color: hsl(30, 80%, 60%);
            --orange-teacher-color-3: hsl(30, 90%, 70%);
            
            /* ألوان النسخة الخضراء */
            --green-primary-color: hsl(120, 100%, 30%);
            --green-secondary-color: hsl(120, 80%, 40%);
            --green-teacher-color-3: hsl(120, 90%, 50%);
            
            /* ألوان النسخة الزهرية */
            --pink-primary-color: hsl(330, 100%, 50%);
            --pink-secondary-color: hsl(330, 80%, 60%);
            --pink-teacher-color-3: hsl(330, 90%, 70%);
            
            /* ألوان النسخة البنفسجية */
            --purple-primary-color: hsl(270, 100%, 50%);
            --purple-secondary-color: hsl(270, 80%, 60%);
            --purple-teacher-color-3: hsl(270, 90%, 70%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--ff-tajawal);
            background: var(--smoky-black);
            color: var(--light-gray);
            min-height: 100vh;
            transition: var(--transition2);
        }

        .container {
            display: flex;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            gap: 20px;
            min-height: 100vh;
        }

        .main-content {
            flex: 1;
            padding-bottom: 20px;
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
        }

        .board-container::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .board-header {
            background: var(--bg-gradient-onyx);
            color: var(--white2);
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--jet);
        }

        .board-title {
            font-size: 28px;
            font-weight: var(--fw600);
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--primary-color);
        }

        /* منطقة المحادثة */
        .chat-container {
            display: flex;
            flex-direction: column;
            height: calc(100vh - 180px);
            padding: 20px;
            overflow-y: auto;
        }

        .message {
            max-width: 80%;
            margin-bottom: 15px;
            padding: 12px 16px;
            border-radius: var(--border-radius);
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .bot-message {
            align-self: flex-start;
            background: var(--bg-gradient-onyx);
            border: 1px solid var(--jet);
        }

        .user-message {
            align-self: flex-end;
            background: linear-gradient(to right, var(--primary-color), var(--teacher-color-3));
            color: var(--smoky-black);
            font-weight: var(--fw500);
        }

        .message-time {
            font-size: var(--fs7);
            color: var(--light-gray70);
            margin-top: 5px;
            text-align: right;
        }

        .user-message .message-time {
            color: rgba(0, 0, 0, 0.7);
        }

        /* منطقة إدخال الرسائل */
        .input-area {
            padding: 15px;
            background: var(--bg-gradient-onyx);
            border-top: 1px solid var(--jet);
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .message-input {
            flex: 1;
            padding: 12px 15px;
            background: var(--bg-gradient-jet);
            border: 1px solid var(--jet);
            border-radius: var(--border-radius);
            color: var(--light-gray);
            font-family: var(--ff-tajawal);
            font-size: var(--fs4);
            resize: none;
            min-height: 50px;
            max-height: 120px;
        }

        .message-input:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        .send-btn, .upload-btn, .record-btn, .back-btn {
            background: linear-gradient(to right, var(--primary-color), var(--teacher-color-3));
            color: var(--smoky-black);
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .send-btn:hover, .upload-btn:hover, .record-btn:hover, .back-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .upload-btn {
            position: relative;
            overflow: hidden;
        }

        .upload-btn input {
            position: absolute;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        /* الصور المرفوعة */
        .uploaded-image {
            max-width: 200px;
            max-height: 200px;
            border-radius: var(--border-radius);
            margin-top: 10px;
            border: 1px solid var(--jet);
        }

        /* زر التحكم في الثيم */
        .theme-btn, .language-btn {
            background: none;
            border: none;
            color: var(--primary-color);
            font-size: 24px;
            cursor: pointer;
            transition: var(--transition);
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .theme-btn:hover, .language-btn:hover {
            transform: scale(1.1);
        }

        /* حقوق النشر */
        .footer-section {
            text-align: center;
            padding: 10px;
            background: var(--bg-gradient-onyx);
            color: var(--light-gray70);
            font-size: var(--fs7);
            border-top: 1px solid var(--jet);
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .developer-info {
            font-size: var(--fs7);
            color: var(--primary-color);
        }

        /* ثيمات الألوان */
        body.theme-orange {
            --primary-color: var(--orange-primary-color);
            --secondary-color: var(--orange-secondary-color);
            --teacher-color-3: var(--orange-teacher-color-3);
        }

        body.theme-green {
            --primary-color: var(--green-primary-color);
            --secondary-color: var(--green-secondary-color);
            --teacher-color-3: var(--green-teacher-color-3);
        }

        body.theme-pink {
            --primary-color: var(--pink-primary-color);
            --secondary-color: var(--pink-secondary-color);
            --teacher-color-3: var(--pink-teacher-color-3);
        }

        body.theme-purple {
            --primary-color: var(--purple-primary-color);
            --secondary-color: var(--purple-secondary-color);
            --teacher-color-3: var(--purple-teacher-color-3);
        }

        /* إعدادات اللغة الإنجليزية */
        body[dir="ltr"] {
            direction: ltr;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body[dir="ltr"] .message-time {
            text-align: left;
        }

        /* نافذة رفع الملفات */
        .upload-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .upload-modal-content {
            background: var(--bg-gradient-jet);
            border-radius: var(--border-radius);
            padding: 20px;
            width: 90%;
            max-width: 500px;
            box-shadow: var(--shadow3);
            border: 1px solid var(--jet);
        }

        .upload-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .upload-title {
            font-size: var(--fs2);
            color: var(--primary-color);
        }

        .close-btn {
            background: none;
            border: none;
            color: var(--light-gray);
            font-size: 24px;
            cursor: pointer;
        }

        .upload-options {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }

        .upload-option {
            background: var(--bg-gradient-onyx);
            border: 1px solid var(--jet);
            border-radius: var(--border-radius);
            padding: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .upload-option:hover {
            border-color: var(--primary-color);
            transform: translateY(-3px);
        }

        .upload-option i {
            font-size: 28px;
            margin-bottom: 10px;
            color: var(--primary-color);
        }

        .upload-option span {
            font-size: var(--fs5);
        }

        .upload-form {
            display: none;
        }

        .upload-form.active {
            display: block;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: var(--fs5);
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            background: var(--bg-gradient-onyx);
            border: 1px solid var(--jet);
            border-radius: var(--border-radius);
            color: var(--light-gray);
            font-family: var(--ff-tajawal);
        }

        .form-group textarea {
            min-height: 80px;
            resize: vertical;
        }

        .submit-btn {
            background: linear-gradient(to right, var(--primary-color), var(--teacher-color-3));
            color: var(--smoky-black);
            border: none;
            border-radius: var(--border-radius);
            padding: 10px 20px;
            font-weight: var(--fw600);
            cursor: pointer;
            transition: var(--transition);
            width: 100%;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        /* إضافة أنماط جديدة لتحسين تجربة iOS */
        .ios-file-input {
            position: fixed;
            top: -1000px;
            left: -1000px;
            opacity: 0;
        }

        .ios-upload-btn {
            display: inline-block;
            padding: 10px 15px;
            background: var(--primary-color);
            color: var(--smoky-black);
            border-radius: var(--border-radius);
            margin-top: 10px;
            cursor: pointer;
            text-align: center;
        }

        /* تأثيرات الكتابة */
        @keyframes blinkCursor {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }

        .typing-cursor {
            display: inline-block;
            width: 8px;
            height: 16px;
            background: var(--primary-color);
            margin-right: 2px;
            animation: blinkCursor 0.7s infinite;
            vertical-align: middle;
        }

        /* تحسينات للهواتف */
        @media (max-width: 768px) {
            .board-header {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            .chat-container {
                height: calc(100vh - 160px);
                padding: 15px;
            }
            
            .container {
                padding-left: 15px;
                padding-right: 15px;
            }
            
            .message {
                max-width: 90%;
            }
            
            .upload-options {
                grid-template-columns: 1fr;
            }

            /* تحسينات خاصة للفون */
            .input-area {
                padding: 10px;
            }

            .send-btn, .upload-btn, .record-btn, .back-btn {
                width: 45px;
                height: 45px;
            }

            .ios-upload-btn {
                padding: 8px 12px;
                font-size: var(--fs7);
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="main-content">
            <div class="board-container">
                <div class="board-header">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <button class="back-btn" id="backBtn" title="الرجوع / Back">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                        <h1 class="board-title">
                            <i class="fas fa-robot"></i> 
                            <span data-ar="العباقرة" data-en="Genius AI">العباقرة</span>
                        </h1>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <button class="language-btn" id="languageBtn" title="تغيير اللغة / Change Language">
                            <i class="fas fa-language"></i>
                        </button>
                        <button class="theme-btn" id="themeBtn" title="تغيير الثيم / Change Theme">
                            <i class="fas fa-palette"></i>
                        </button>
                    </div>
                </div>
                
                <!-- منطقة المحادثة -->
                <div class="chat-container" id="chatContainer">
                    <!-- المحادثات ستضاف هنا بالجافاسكريبت -->
                </div>
                
                <!-- منطقة إدخال الرسائل -->
                <div class="input-area">
                    <button class="record-btn" id="recordBtn" title="تسجيل صوتي / Voice Record">
                        <i class="fas fa-microphone"></i>
                    </button>
                    <textarea class="message-input" id="messageInput" data-ar-placeholder="اكتب رسالتك هنا..." data-en-placeholder="Type your message here..."></textarea>
                    <button class="upload-btn" id="uploadBtn" title="رفع صورة / Upload Image">
                        <i class="fas fa-image"></i>
                        <input type="file" id="fileInput" style="display: none;" accept="image/*">
                    </button>
                    <button class="send-btn" id="sendBtn" title="إرسال / Send">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- حقوق النشر -->
    <div class="footer-section">
        <div class="copyright">
            <span data-ar="العباقرة © 2025" data-en="Genius AI © 2025">العباقرة © 2025</span>
        </div>
        <div class="developer-info">
            <span data-ar="تم التطوير بواسطة GeniusAI" data-en="Developed by GeniusAI">تم التطوير بواسطة GeniusAI</span>
        </div>
    </div>

    <script>
        // متغيرات التحكم
        let currentTheme = 'default';
        let currentLanguage = 'ar'; // 'ar' أو 'en'
        const welcomeMessages = {
            ar: 'كيف يمكنني مساعدتك اليوم؟',
            en: 'How can I help you today?'
        };
        const responseMessages = {
            ar: 'جاري معالجة طلبك...',
            en: 'Processing your request...'
        };
        const completionMessages = {
            ar: 'تم الانتهاء من طلبك: ',
            en: 'Request completed: '
        };
        const fileResponses = {
            ar: 'تم استلام صورتك وسيتم معالجتها...',
            en: 'Your image has been received and will be processed...'
        };

        // تخزين الملفات المرفوعة
        let uploadedFiles = [];

        // عناصر DOM
        const themeBtn = document.getElementById('themeBtn');
        const languageBtn = document.getElementById('languageBtn');
        const backBtn = document.getElementById('backBtn');
        const chatContainer = document.getElementById('chatContainer');
        const messageInput = document.getElementById('messageInput');
        const sendBtn = document.getElementById('sendBtn');
        const uploadBtn = document.getElementById('uploadBtn');
        const recordBtn = document.getElementById('recordBtn');
        const fileInput = document.getElementById('fileInput');
        const boardTitle = document.querySelector('.board-title span');
        const copyright = document.querySelector('.copyright span');
        const developerInfo = document.querySelector('.developer-info span');
        const allTextElements = document.querySelectorAll('[data-ar], [data-en]');

        // دالة لكتابة النص حرفاً حرفاً مع تأثير الكتابة
        function typeWriter(text, element, speed, callback) {
            let i = 0;
            element.innerHTML = '<span class="typing-cursor"></span>';
            const typingInterval = setInterval(() => {
                if (i < text.length) {
                    element.innerHTML = element.innerHTML.replace('<span class="typing-cursor"></span>', '');
                    element.innerHTML += text.charAt(i) + '<span class="typing-cursor"></span>';
                    i++;
                    chatContainer.scrollTop = chatContainer.scrollHeight;
                } else {
                    clearInterval(typingInterval);
                    element.innerHTML = element.innerHTML.replace('<span class="typing-cursor"></span>', '');
                    if (callback) callback();
                }
            }, speed);
        }

        // إضافة رسالة إلى المحادثة
        function addMessage(text, isUser) {
            const messageDiv = document.createElement('div');
            messageDiv.className = isUser ? 'user-message message' : 'bot-message message';
            
            const now = new Date();
            const timeString = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            
            messageDiv.innerHTML = `
                <div>${text}</div>
                <div class="message-time">${timeString}</div>
            `;
            
            chatContainer.appendChild(messageDiv);
            chatContainer.scrollTop = chatContainer.scrollHeight;
        }

        // إضافة صورة إلى المحادثة
        function addImage(imageData, caption, isUser) {
            const messageDiv = document.createElement('div');
            messageDiv.className = isUser ? 'user-message message' : 'bot-message message';
            
            const now = new Date();
            const timeString = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            
            messageDiv.innerHTML = `
                ${caption ? `<div style="margin-bottom: 10px;">${caption}</div>` : ''}
                <img src="${imageData}" class="uploaded-image" alt="${caption || (currentLanguage === 'ar' ? 'صورة مرفوعة' : 'Uploaded image')}">
                <div class="message-time">${timeString}</div>
            `;
            
            chatContainer.appendChild(messageDiv);
            chatContainer.scrollTop = chatContainer.scrollHeight;
            
            // إضافة الصورة إلى قائمة الملفات المرفوعة
            if (isUser) {
                const fileId = Date.now();
                uploadedFiles.push({
                    id: fileId,
                    type: 'image',
                    data: imageData,
                    caption: caption,
                    date: new Date()
                });
                
                // إرسال رسالة معالجة الصورة
                setTimeout(() => {
                    addMessage(fileResponses[currentLanguage], false);
                    
                    // إرسال رسالة اكتمال المعالجة بعد 3 ثواني
                    setTimeout(() => {
                        const resultName = caption || (currentLanguage === 'ar' ? 'نتيجة الصورة' : 'Image result');
                        addMessage(completionMessages[currentLanguage] + resultName, false);
                    }, 3000);
                }, 1500);
            }
        }

        // معالجة إرسال الرسالة
        function handleSendMessage() {
            const message = messageInput.value.trim();
            if (message) {
                addMessage(message, true);
                messageInput.value = '';
                
                // إرسال رسالة المعالجة
                setTimeout(() => {
                    addMessage(responseMessages[currentLanguage], false);
                    
                    // إرسال رسالة اكتمال المعالجة بعد 3 ثواني
                    setTimeout(() => {
                        const resultName = message.length > 20 ? message.substring(0, 20) + '...' : message;
                        addMessage(completionMessages[currentLanguage] + resultName, false);
                    }, 3000);
                }, 1500);
            }
        }

        // معالجة رفع الصورة
        function handleImageUpload(event) {
            const file = event.target.files[0];
            if (!file) return;
            
            if (!file.type.startsWith('image/')) {
                alert(currentLanguage === 'ar' ? 'الرجاء اختيار ملف صورة فقط' : 'Please select an image file only');
                return;
            }
            
            const reader = new FileReader();
            reader.onload = function(e) {
                addImage(e.target.result, file.name, true);
            };
            
            reader.readAsDataURL(file);
        }

        // تغيير الثيم
        function changeTheme() {
            const themes = ['default', 'orange', 'green', 'pink', 'purple'];
            const currentIndex = themes.indexOf(currentTheme);
            const nextIndex = (currentIndex + 1) % themes.length;
            currentTheme = themes[nextIndex];
            
            applyTheme(currentTheme);
        }

        // تطبيق الثيم المحدد
        function applyTheme(theme) {
            document.body.className = '';
            if (theme !== 'default') {
                document.body.classList.add(`theme-${theme}`);
            }
        }

        // تغيير اللغة
        function toggleLanguage() {
            currentLanguage = currentLanguage === 'ar' ? 'en' : 'ar';
            applyLanguage(currentLanguage);
            
            // تحديث رسالة الترحيب إذا كانت معروضة
            const welcomeText = document.getElementById('welcomeText');
            if (welcomeText) {
                welcomeText.innerHTML = '<span class="typing-cursor"></span>';
                typeWriter(welcomeMessages[currentLanguage], welcomeText, 30);
            }
        }

        // تطبيق اللغة المحددة
        function applyLanguage(lang) {
            // تغيير اتجاه الصفحة
            document.body.setAttribute('dir', lang === 'ar' ? 'rtl' : 'ltr');
            document.documentElement.lang = lang;
            
            // تحديث نص العناصر
            allTextElements.forEach(el => {
                if (el.hasAttribute(`data-${lang}`)) {
                    el.textContent = el.getAttribute(`data-${lang}`);
                }
            });
            
            // تحديث نصوص العناصر الأخرى
            messageInput.placeholder = messageInput.getAttribute(`data-${lang}-placeholder`);
            
            // تحديث عناوين الأزرار
            themeBtn.title = lang === 'ar' ? 'تغيير الثيم' : 'Change Theme';
            languageBtn.title = lang === 'ar' ? 'تغيير اللغة / Change Language' : 'Change Language / تغيير اللغة';
            backBtn.title = lang === 'ar' ? 'الرجوع' : 'Back';
            sendBtn.title = lang === 'ar' ? 'إرسال' : 'Send';
            uploadBtn.title = lang === 'ar' ? 'رفع صورة' : 'Upload Image';
            recordBtn.title = lang === 'ar' ? 'تسجيل صوتي' : 'Voice Record';
            
            // تحديث عنوان الصفحة
            document.title = lang === 'ar' ? 'العباقرة' : 'Genius AI';
            
            // تغيير اتجاه زر الرجوع حسب اللغة
            backBtn.innerHTML = lang === 'ar' ? '<i class="fas fa-arrow-right"></i>' : '<i class="fas fa-arrow-left"></i>';
        }

        // حدث زر الرجوع
backBtn.addEventListener('click', function() {
    window.history.back();
});

        // أحداث الأزرار
        themeBtn.addEventListener('click', changeTheme);
        languageBtn.addEventListener('click', toggleLanguage);
        sendBtn.addEventListener('click', handleSendMessage);
        uploadBtn.addEventListener('click', () => fileInput.click());
        fileInput.addEventListener('change', handleImageUpload);
        recordBtn.addEventListener('click', () => {
            alert(currentLanguage === 'ar' ? 'ميزة التسجيل الصوتي قريباً!' : 'Voice recording feature coming soon!');
        });

        // إرسال الرسالة عند الضغط على Enter
        messageInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                handleSendMessage();
            }
        });

        // تهيئة الصفحة عند التحميل
        window.addEventListener('load', () => {
            // إنشاء عنصر رسالة البوت
            const welcomeMessageDiv = document.createElement('div');
            welcomeMessageDiv.className = 'bot-message message';
            
            // إضافة وقت الرسالة
            const now = new Date();
            const timeString = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            welcomeMessageDiv.innerHTML = `<div class="message-time">${timeString}</div><div id="welcomeText"></div>`;
            
            // إضافة الرسالة إلى المحادثة
            chatContainer.appendChild(welcomeMessageDiv);
            chatContainer.scrollTop = chatContainer.scrollHeight;
            
            // بدء تأثير الكتابة
            const welcomeText = document.getElementById('welcomeText');
            typeWriter(welcomeMessages[currentLanguage], welcomeText, 30);
        });
    </script>
</body>
</html>