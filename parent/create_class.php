
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

        .send-btn, .upload-btn {
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

        .send-btn:hover, .upload-btn:hover {
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

        /* نافذة تقرير الملفات */
        .file-report-modal {
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

        .file-report-content {
            background: var(--bg-gradient-jet);
            border-radius: var(--border-radius);
            padding: 20px;
            width: 90%;
            max-width: 600px;
            box-shadow: var(--shadow3);
            border: 1px solid var(--jet);
            max-height: 80vh;
            overflow-y: auto;
        }

        .file-report-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .file-report-title {
            font-size: var(--fs2);
            color: var(--primary-color);
        }

        .file-report-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .file-report-item {
            background: var(--bg-gradient-onyx);
            border-radius: var(--border-radius);
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border: 1px solid var(--jet);
        }

        .file-info {
            display: flex;
            align-items: center;
            gap: 10px;
            flex: 1;
        }

        .file-icon {
            font-size: 24px;
            color: var(--primary-color);
        }

        .file-details {
            flex: 1;
            overflow: hidden;
        }

        .file-name {
            font-weight: var(--fw500);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .file-size {
            font-size: var(--fs7);
            color: var(--light-gray70);
        }

        .file-actions {
            display: flex;
            gap: 10px;
        }

        .file-action-btn {
            background: none;
            border: none;
            color: var(--light-gray);
            cursor: pointer;
            transition: var(--transition);
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .file-action-btn:hover {
            background-color: hsla(0, 0%, 100%, 0.1);
            color: var(--primary-color);
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

            .send-btn, .upload-btn {
                width: 45px;
                height: 45px;
            }

            .ios-upload-btn {
                padding: 8px 12px;
                font-size: var(--fs7);
            }
        }
        /* أنماط زر الرجوع */
.back-btn {
    background: none;
    border: none;
    color: var(--primary-color);
    font-size: 20px;
    cursor: pointer;
    transition: var(--transition);
    padding: 5px;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    left: 15px;
}

.back-btn:hover {
    background-color: hsla(0, 0%, 100%, 0.1);
    transform: scale(1.1);
}

.board-header {
    position: relative;
    padding-left: 60px; /* إضافة مساحة لزر الرجوع */
}
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="main-content">
            <div class="board-container">
                <div class="board-header">
                        <button class="back-btn" id="backBtn" title="الرجوع للصفحة السابقة">
        <i class="fas fa-arrow-right"></i>
    </button>

                    <div style="display: flex; align-items: center; gap: 15px;">
                        <h1 class="board-title">
                            <i class="fas fa-robot"></i> 
                            <span data-ar="العباقرة" data-en="Genius AI">العباقرة</span>
                        </h1>
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
                    <textarea class="message-input" id="messageInput" data-ar-placeholder="اكتب رسالتك هنا..." data-en-placeholder="Type your message here..."></textarea>
                    <button class="upload-btn" id="uploadBtn" title="رفع ملف / Upload File">
                        <i class="fas fa-paperclip"></i>
                        <input type="file" id="fileInput" style="display: none;" accept="image/*,video/*,.pdf">
                    </button>
                    <button class="send-btn" id="sendBtn" title="إرسال / Send">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- نافذة رفع الملفات -->
    <div class="upload-modal" id="uploadModal">
        <div class="upload-modal-content">
            <div class="upload-header">
                <h3 class="upload-title" data-ar="اختر نوع الملف" data-en="Select File Type">اختر نوع الملف</h3>
                <button class="close-btn" id="closeUploadModal">&times;</button>
            </div>
            
            <div class="upload-options">
                <div class="upload-option" data-type="image">
                    <i class="fas fa-image"></i>
                    <span data-ar="رفع صورة" data-en="Upload Image">رفع صورة</span>
                </div>
                <div class="upload-option" data-type="video">
                    <i class="fas fa-video"></i>
                    <span data-ar="رفع فيديو" data-en="Upload Video">رفع فيديو</span>
                </div>
                <div class="upload-option" data-type="pdf">
                    <i class="fas fa-file-pdf"></i>
                    <span data-ar="رفع ملف PDF" data-en="Upload PDF">رفع ملف PDF</span>
                </div>
                <div class="upload-option" data-type="video-url">
                    <i class="fas fa-copy"></i>
                    <span data-ar="نسخ رابط فيديو" data-en="Paste Video URL">نسخ رابط فيديو</span>
                </div>
            </div>
            
            <!-- نموذج رفع الصورة -->
            <div class="upload-form" id="imageForm">
                <div class="form-group">
                    <label for="imageFile" data-ar="اختر صورة" data-en="Select Image">اختر صورة</label>
                    <input type="file" id="imageFile" accept="image/*" class="ios-file-input">
                    <label for="imageFile" class="ios-upload-btn" data-ar="اختر صورة" data-en="Select Image">اختر صورة</label>
                </div>
                <div class="form-group">
                    <label for="imageCaption" data-ar="وصف الصورة (اختياري)" data-en="Image Caption (Optional)">وصف الصورة (اختياري)</label>
                    <textarea id="imageCaption" placeholder="اكتب وصفاً للصورة..."></textarea>
                </div>
                <button class="submit-btn" id="submitImage" data-ar="رفع الصورة" data-en="Upload Image">رفع الصورة</button>
            </div>
            
            <!-- نموذج رفع الفيديو -->
            <div class="upload-form" id="videoForm">
                <div class="form-group">
                    <label for="videoFile" data-ar="اختر فيديو" data-en="Select Video">اختر فيديو</label>
                    <input type="file" id="videoFile" accept="video/*" class="ios-file-input">
                    <label for="videoFile" class="ios-upload-btn" data-ar="اختر فيديو" data-en="Select Video">اختر فيديو</label>
                </div>
                <div class="form-group">
                    <label for="videoCaption" data-ar="وصف الفيديو (اختياري)" data-en="Video Caption (Optional)">وصف الفيديو (اختياري)</label>
                    <textarea id="videoCaption" placeholder="اكتب وصفاً للفيديو..."></textarea>
                </div>
                <button class="submit-btn" id="submitVideo" data-ar="رفع الفيديو" data-en="Upload Video">رفع الفيديو</button>
            </div>
            
            <!-- نموذج رفع PDF -->
            <div class="upload-form" id="pdfForm">
                <div class="form-group">
                    <label for="pdfFile" data-ar="اختر ملف PDF" data-en="Select PDF">اختر ملف PDF</label>
                    <input type="file" id="pdfFile" accept=".pdf" class="ios-file-input">
                    <label for="pdfFile" class="ios-upload-btn" data-ar="اختر ملف PDF" data-en="Select PDF">اختر ملف PDF</label>
                </div>
                <div class="form-group">
                    <label for="pdfCaption" data-ar="وصف الملف (اختياري)" data-en="File Caption (Optional)">وصف الملف (اختياري)</label>
                    <textarea id="pdfCaption" placeholder="اكتب وصفاً للملف..."></textarea>
                </div>
                <button class="submit-btn" id="submitPdf" data-ar="رفع الملف" data-en="Upload File">رفع الملف</button>
            </div>
            
            <!-- نموذج رابط الفيديو -->
            <div class="upload-form" id="videoUrlForm">
                <div class="form-group">
                    <label for="videoUrl" data-ar="رابط الفيديو (يوتيوب، فيميو، إلخ)" data-en="Video URL (YouTube, Vimeo, etc.)">رابط الفيديو (يوتيوب، فيميو، إلخ)</label>
                    <input type="url" id="videoUrl" placeholder="https://www.youtube.com/watch?v=...">
                </div>
                <div class="form-group">
                    <label for="videoUrlCaption" data-ar="وصف الفيديو (اختياري)" data-en="Video Caption (Optional)">وصف الفيديو (اختياري)</label>
                    <textarea id="videoUrlCaption" placeholder="اكتب وصفاً للفيديو..."></textarea>
                </div>
                <button class="submit-btn" id="submitVideoUrl" data-ar="إضافة الفيديو" data-en="Add Video">إضافة الفيديو</button>
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
            ar: 'هيا بنا لإنشاء الحصص الخاصة بك...',
            en: 'Let\'s create your lessons...'
        };
        const responseMessages = {
            ar: 'سيتم إنشاء الحصة الخاصة بك...',
            en: 'Your lesson will be created...'
        };
        const completionMessages = {
            ar: 'تم إنشاء الحصة: ',
            en: 'Lesson created: '
        };
        const fileResponses = {
            ar: 'تم استلام ملفك وسيتم إنشاء الحصة الخاصة بك...',
            en: 'Your file has been received and your lesson will be created...'
        };

        // تخزين الملفات المرفوعة
        let uploadedFiles = [];

        // عناصر DOM
        const themeBtn = document.getElementById('themeBtn');
        const languageBtn = document.getElementById('languageBtn');
        const chatContainer = document.getElementById('chatContainer');
        const messageInput = document.getElementById('messageInput');
        const sendBtn = document.getElementById('sendBtn');
        const uploadBtn = document.getElementById('uploadBtn');
        const fileInput = document.getElementById('fileInput');
        const uploadModal = document.getElementById('uploadModal');
        const closeUploadModal = document.getElementById('closeUploadModal');
        const uploadOptions = document.querySelectorAll('.upload-option');
        const uploadForms = document.querySelectorAll('.upload-form');
        const boardTitle = document.querySelector('.board-title span');
        const copyright = document.querySelector('.copyright span');
        const developerInfo = document.querySelector('.developer-info span');
        const allTextElements = document.querySelectorAll('[data-ar], [data-en]');
        const iosUploadBtns = document.querySelectorAll('.ios-upload-btn');

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

        // إضافة ملف إلى المحادثة
        function addFile(fileData, caption, fileType, isUser) {
            const messageDiv = document.createElement('div');
            messageDiv.className = isUser ? 'user-message message' : 'bot-message message';
            
            const now = new Date();
            const timeString = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            
            let fileContent = '';
            if (fileType === 'image') {
                fileContent = `<img src="${fileData}" class="uploaded-image" alt="${caption || (currentLanguage === 'ar' ? 'صورة مرفوعة' : 'Uploaded image')}">`;
            } else if (fileType === 'video') {
                fileContent = `
                    <video controls class="uploaded-image">
                        <source src="${fileData}" type="video/mp4">
                        ${currentLanguage === 'ar' ? 'متصفحك لا يدعم تشغيل الفيديو' : 'Your browser does not support the video tag'}
                    </video>
                `;
            } else if (fileType === 'pdf') {
                fileContent = `
                    <div style="padding: 10px; background: var(--bg-gradient-onyx); border-radius: var(--border-radius);">
                        <i class="fas fa-file-pdf" style="font-size: 24px; color: var(--primary-color);"></i>
                        <p style="margin-top: 5px;">${caption || (currentLanguage === 'ar' ? 'ملف PDF مرفق' : 'Attached PDF file')}</p>
                        <a href="${fileData}" target="_blank" style="color: var(--primary-color); text-decoration: none;">
                            ${currentLanguage === 'ar' ? 'عرض الملف' : 'View File'}
                        </a>
                    </div>
                `;
            } else if (fileType === 'video-url') {
                fileContent = `
                    <div style="padding: 10px; background: var(--bg-gradient-onyx); border-radius: var(--border-radius);">
                        <i class="fas fa-link" style="font-size: 24px; color: var(--primary-color);"></i>
                        <p style="margin-top: 5px;">${caption || (currentLanguage === 'ar' ? 'رابط فيديو' : 'Video link')}</p>
                        <a href="${fileData}" target="_blank" style="color: var(--primary-color); text-decoration: none;">
                            ${currentLanguage === 'ar' ? 'مشاهدة الفيديو' : 'Watch Video'}
                        </a>
                    </div>
                `;
            }
            
            messageDiv.innerHTML = `
                ${caption ? `<div style="margin-bottom: 10px;">${caption}</div>` : ''}
                ${fileContent}
                <div class="message-time">${timeString}</div>
            `;
            
            chatContainer.appendChild(messageDiv);
            chatContainer.scrollTop = chatContainer.scrollHeight;
            
            // إضافة الملف إلى قائمة الملفات المرفوعة
            if (isUser) {
                const fileId = Date.now();
                uploadedFiles.push({
                    id: fileId,
                    type: fileType,
                    data: fileData,
                    caption: caption,
                    date: new Date()
                });
                
                // إرسال رسالة إنشاء الحصة
                setTimeout(() => {
                    addMessage(responseMessages[currentLanguage], false);
                    
                    // إرسال رسالة اكتمال إنشاء الحصة بعد 3 ثواني
                    setTimeout(() => {
                        const lessonName = caption || (currentLanguage === 'ar' ? 'حصة جديدة' : 'New Lesson');
                        addMessage(completionMessages[currentLanguage] + lessonName, false);
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
                
                // إرسال رسالة إنشاء الحصة
                setTimeout(() => {
                    addMessage(responseMessages[currentLanguage], false);
                    
                    // إرسال رسالة اكتمال إنشاء الحصة بعد 3 ثواني
                    setTimeout(() => {
                        const lessonName = message.length > 20 ? message.substring(0, 20) + '...' : message;
                        addMessage(completionMessages[currentLanguage] + lessonName, false);
                    }, 3000);
                }, 1500);
            }
        }

        // فتح نافذة رفع الملفات
        function openUploadModal() {
            uploadModal.style.display = 'flex';
        }

        // إغلاق النوافذ المنبثقة
        function closeModal() {
            uploadModal.style.display = 'none';
            resetForms();
        }

        // إعادة تعيين النماذج
        function resetForms() {
            uploadForms.forEach(form => form.style.display = 'none');
            document.getElementById('imageFile').value = '';
            document.getElementById('imageCaption').value = '';
            document.getElementById('videoFile').value = '';
            document.getElementById('videoCaption').value = '';
            document.getElementById('pdfFile').value = '';
            document.getElementById('pdfCaption').value = '';
            document.getElementById('videoUrl').value = '';
            document.getElementById('videoUrlCaption').value = '';
        }

        // معالجة اختيار نوع الملف
        function handleFileTypeSelection(type) {
            uploadForms.forEach(form => form.style.display = 'none');
            document.getElementById(`${type}Form`).style.display = 'block';
        }

        // معالجة رفع الصورة
        function handleImageUpload() {
            const fileInput = document.getElementById('imageFile');
            const caption = document.getElementById('imageCaption').value;
            
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    addFile(e.target.result, caption, 'image', true);
                    closeModal();
                };
                
                reader.readAsDataURL(file);
            } else {
                alert(currentLanguage === 'ar' ? 'الرجاء اختيار صورة أولاً' : 'Please select an image first');
            }
        }

        // معالجة رفع الفيديو
        function handleVideoUpload() {
            const fileInput = document.getElementById('videoFile');
            const caption = document.getElementById('videoCaption').value;
            
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    addFile(e.target.result, caption, 'video', true);
                    closeModal();
                };
                
                reader.readAsDataURL(file);
            } else {
                alert(currentLanguage === 'ar' ? 'الرجاء اختيار فيديو أولاً' : 'Please select a video first');
            }
        }

        // معالجة رفع ملف PDF
        function handlePdfUpload() {
            const fileInput = document.getElementById('pdfFile');
            const caption = document.getElementById('pdfCaption').value;
            
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    addFile(e.target.result, caption, 'pdf', true);
                    closeModal();
                };
                
                reader.readAsDataURL(file);
            } else {
                alert(currentLanguage === 'ar' ? 'الرجاء اختيار ملف PDF أولاً' : 'Please select a PDF file first');
            }
        }

        // معالجة إضافة رابط فيديو
        function handleVideoUrl() {
            const urlInput = document.getElementById('videoUrl');
            const caption = document.getElementById('videoUrlCaption').value;
            const url = urlInput.value.trim();
            
            if (url) {
                addFile(url, caption, 'video-url', true);
                closeModal();
            } else {
                alert(currentLanguage === 'ar' ? 'الرجاء إدخال رابط الفيديو أولاً' : 'Please enter a video URL first');
            }
        }

        // معالجة رفع ملف مباشر من زر الرفع
        function handleDirectFileUpload(event) {
            const file = event.target.files[0];
            if (!file) return;
            
            const fileType = file.type.split('/')[0];
            const allowedTypes = ['image', 'video', 'application'];
            
            if (!allowedTypes.includes(fileType) && file.type !== 'application/pdf') {
                alert(currentLanguage === 'ar' ? 'نوع الملف غير مدعوم' : 'File type not supported');
                return;
            }
            
            const reader = new FileReader();
            reader.onload = function(e) {
                let type;
                if (fileType === 'image') type = 'image';
                else if (fileType === 'video') type = 'video';
                else if (file.type === 'application/pdf') type = 'pdf';
                
                addFile(e.target.result, file.name, type, true);
            };
            
            if (fileType === 'image' || fileType === 'video') {
                reader.readAsDataURL(file);
            } else if (file.type === 'application/pdf') {
                reader.readAsDataURL(file);
            }
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
            sendBtn.title = lang === 'ar' ? 'إرسال' : 'Send';
            uploadBtn.title = lang === 'ar' ? 'رفع ملف' : 'Upload File';
            
            // تحديث عنوان الصفحة
            document.title = lang === 'ar' ? 'العباقرة' : 'Genius AI';
        }

        // أحداث الأزرار
        themeBtn.addEventListener('click', changeTheme);
        languageBtn.addEventListener('click', toggleLanguage);
        sendBtn.addEventListener('click', handleSendMessage);
        uploadBtn.addEventListener('click', openUploadModal);
        fileInput.addEventListener('change', handleDirectFileUpload);
        closeUploadModal.addEventListener('click', closeModal);

        // أحداث خيارات رفع الملفات
        uploadOptions.forEach(option => {
            option.addEventListener('click', () => {
                handleFileTypeSelection(option.dataset.type);
            });
        });

        // أحداث إرسال النماذج
        document.getElementById('submitImage').addEventListener('click', handleImageUpload);
        document.getElementById('submitVideo').addEventListener('click', handleVideoUpload);
        document.getElementById('submitPdf').addEventListener('click', handlePdfUpload);
        document.getElementById('submitVideoUrl').addEventListener('click', handleVideoUrl);

        // إرسال الرسالة عند الضغط على Enter
        messageInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                handleSendMessage();
            }
        });

        // إغلاق النافذة عند النقر خارجها
        window.addEventListener('click', (e) => {
            if (e.target === uploadModal) {
                closeModal();
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
            
            // الكشف عن نظام iOS وإضافة تحسينات خاصة
            const isIOS = /iPad|iPhone|iPod/.test(navigator.userAgent) || 
                         (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1);
            
            if (isIOS) {
                // إضافة أزرار بديلة لرفع الملفات على iOS
                iosUploadBtns.forEach(btn => {
                    btn.style.display = 'inline-block';
                });
                
                // إخفاء حقول الإدخال الأصلية
                document.querySelectorAll('.ios-file-input').forEach(input => {
                    input.style.display = 'none';
                });
                
                // ربط الأزرار البديلة بحقول الإدخال
                document.querySelectorAll('.ios-upload-btn').forEach(btn => {
                    const forId = btn.getAttribute('for');
                    if (forId) {
                        btn.addEventListener('click', () => {
                            document.getElementById(forId).click();
                        });
                    }
                });
                
                // تحديث واجهة المستخدم عند اختيار ملف
                document.getElementById('imageFile').addEventListener('change', function() {
                    const captionInput = document.getElementById('imageCaption');
                    if (this.files.length > 0) {
                        captionInput.placeholder = currentLanguage === 'ar' ? 
                            'تم اختيار صورة، أضف وصفاً (اختياري)' : 
                            'Image selected, add caption (optional)';
                    }
                });
                
                document.getElementById('videoFile').addEventListener('change', function() {
                    const captionInput = document.getElementById('videoCaption');
                    if (this.files.length > 0) {
                        captionInput.placeholder = currentLanguage === 'ar' ? 
                            'تم اختيار فيديو، أضف وصفاً (اختياري)' : 
                            'Video selected, add caption (optional)';
                    }
                });
                
                document.getElementById('pdfFile').addEventListener('change', function() {
                    const captionInput = document.getElementById('pdfCaption');
                    if (this.files.length > 0) {
                        captionInput.placeholder = currentLanguage === 'ar' ? 
                            'تم اختيار ملف PDF، أضف وصفاً (اختياري)' : 
                            'PDF file selected, add caption (optional)';
                    }
                });
            }
        });
        // إضافة هذا الكود في نهاية قسم الجافاسكريبت
document.getElementById('backBtn').addEventListener('click', function() {
    window.history.back();
});
    </script>
</body>
</html>