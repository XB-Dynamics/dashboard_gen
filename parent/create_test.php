<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء امتحان جديد</title>
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
          
          --success-color: #27ae60;
          --warning-color: #f39c12;
          --danger-color: #e74c3c;
          
          --border-radius: 8px;
        }

        *,
        *::before,
        *::after {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }

        body {
          background: var(--smoky-black);
          color: var(--light-gray);
          padding: 20px;
          font-family: var(--ff-poppins);
        }

        .main-content {
            min-height: 100vh;
            background-color: var(--eerie-black1);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow2);
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
            color: var(--orange-yellow-crayola);
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

        .quiz-details-form h4 {
            margin-bottom: 15px;
            color: var(--white2);
            display: flex;
            align-items: center;
            font-size: var(--fs2);
        }

        .quiz-details-form h4 i {
            margin-left: 10px;
            color: var(--success-color);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-weight: var(--fw500);
            color: var(--white2);
            font-size: var(--fs6);
        }

        .form-control {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid var(--jet);
            border-radius: var(--border-radius);
            background: var(--eerie-black1);
            color: var(--light-gray);
            transition: var(--transition1);
            font-size: var(--fs6);
        }

        .form-control:focus {
            border-color: var(--orange-yellow-crayola);
            outline: none;
        }

        .exam-type-selector {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-bottom: 15px;
        }

        .exam-type-btn {
            padding: 10px 15px;
            border-radius: var(--border-radius);
            border: 2px solid var(--jet);
            background: var(--eerie-black1);
            cursor: pointer;
            transition: var(--transition1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: var(--fw500);
            position: relative;
            font-size: var(--fs6);
        }

        .exam-type-btn i {
            margin-left: 8px;
        }

        .exam-type-btn.active {
            border-color: var(--orange-yellow-crayola);
            color: var(--orange-yellow-crayola);
        }

        .grid-2 {
            display: grid;
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .grid-3 {
            display: grid;
            grid-template-columns: 1fr;
            gap: 15px;
        }

        @media (min-width: 768px) {
            .grid-2 {
                grid-template-columns: 1fr 1fr;
            }
            .grid-3 {
                grid-template-columns: 1fr 1fr 1fr;
            }
        }

        /* Dropdown Styles */
        .dropdown {
            position: relative;
            width: 100%;
            margin-bottom: 15px;
        }

        .dropdown-toggle {
            width: 100%;
            padding: 12px 15px;
            background: var(--eerie-black1);
            border: 1px solid var(--jet);
            border-radius: var(--border-radius);
            color: var(--light-gray);
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: var(--transition1);
            font-size: var(--fs6);
        }

        .dropdown-toggle:hover {
            border-color: var(--orange-yellow-crayola);
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: var(--eerie-black2);
            border: 1px solid var(--jet);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow2);
            z-index: 10;
            display: none;
            overflow: hidden;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-item {
            padding: 12px 15px;
            color: var(--light-gray);
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            transition: var(--transition1);
            font-size: var(--fs6);
        }

        .dropdown-item:hover {
            background: var(--onyx);
            color: var(--orange-yellow-crayola);
        }

        .dropdown-item i {
            margin-left: 10px;
            color: var(--orange-yellow-crayola);
        }

        /* Upload Options */
        .upload-options {
            display: none;
            margin-top: 15px;
        }

        .upload-options.active {
            display: block;
        }

        .file-upload {
            border: 2px dashed var(--jet);
            border-radius: var(--border-radius);
            padding: 20px;
            text-align: center;
            cursor: pointer;
            transition: var(--transition1);
        }

        .file-upload:hover {
            border-color: var(--orange-yellow-crayola);
        }

        .file-upload i {
            font-size: 2rem;
            color: var(--orange-yellow-crayola);
            margin-bottom: 10px;
        }

        .file-upload p {
            color: var(--light-gray70);
            margin-bottom: 10px;
            font-size: var(--fs6);
        }

        .file-upload input[type="file"] {
            display: none;
        }

        /* Quiz Preview */
        .quiz-preview {
            margin-top: 20px;
            border-left: 4px solid var(--orange-yellow-crayola);
        }

        .quiz-preview h4 {
            margin-bottom: 15px;
            color: var(--white2);
            font-size: var(--fs2);
            display: flex;
            align-items: center;
        }

        .quiz-preview h4 i {
            margin-left: 10px;
            color: var(--orange-yellow-crayola);
        }

        .quiz-meta {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .quiz-meta-item {
            background: var(--eerie-black1);
            padding: 10px;
            border-radius: var(--border-radius);
            display: flex;
            align-items: center;
            font-size: var(--fs6);
        }

        .quiz-meta-item i {
            margin-left: 8px;
            color: var(--orange-yellow-crayola);
        }

        /* Buttons */
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

        .btn-success {
            background: var(--success-color);
            color: white;
            width: 100%;
        }

        .btn-success:hover {
            background: #219653;
        }

        .btn-outline {
            background: transparent;
            border: 1px solid var(--jet);
            color: var(--light-gray);
        }

        .btn-outline:hover {
            background: var(--eerie-black1);
        }

        /* أنماط إضافية لخيارات التسجيل والرفع */
        .recording-options {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }
        
        .record-btn {
            padding: 10px 15px;
            background: var(--danger-color);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            display: flex;
            align-items: center;
            font-size: var(--fs6);
        }
        
        .record-btn i {
            margin-left: 8px;
        }
        
        .record-btn.recording {
            animation: pulse 1.5s infinite;
        }
        
        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.5; }
            100% { opacity: 1; }
        }
        
        .audio-player {
            width: 100%;
            margin-top: 15px;
            display: none;
        }
        
        .video-upload-options {
            display: grid;
            grid-template-columns: 1fr;
            gap: 15px;
            margin-top: 15px;
        }
        
        @media (min-width: 768px) {
            .video-upload-options {
                grid-template-columns: 1fr 1fr;
            }
        }
        
        .video-option {
            border: 2px dashed var(--jet);
            border-radius: var(--border-radius);
            padding: 20px;
            text-align: center;
            cursor: pointer;
            transition: var(--transition1);
        }
        
        .video-option:hover {
            border-color: var(--orange-yellow-crayola);
        }
        
        .video-option i {
            font-size: 2rem;
            color: var(--orange-yellow-crayola);
            margin-bottom: 10px;
        }

        video {
            width: 100%;
            border-radius: var(--border-radius);
        }

        /* Additional styles from the provided CSS */
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

        .has-scrollbar::-webkit-scrollbar {
          width: 5px;
          height: 5px;
        }

        .has-scrollbar::-webkit-scrollbar-track {
          background: var(--onyx);
          border-radius: 5px;
        }

        .has-scrollbar::-webkit-scrollbar-thumb {
          background: var(--orange-yellow-crayola);
          border-radius: 5px;
        }

        .has-scrollbar::-webkit-scrollbar-button {
          width: 20px;
        }

        .icon-box {
          position: relative;
          background: var(--border-gradient-onyx);
          width: 30px;
          height: 30px;
          border-radius: 8px;
          display: flex;
          justify-content: center;
          align-items: center;
          font-size: 16px;
          color: var(--orange-yellow-crayola);
          box-shadow: var(--shadow1);
          z-index: 1;
        }

        .icon-box::before {
          content: "";
          position: absolute;
          inset: 1px;
          background: var(--eerie-black1);
          border-radius: inherit;
          z-index: -1;
        }

        .icon-box ion-icon {
          --ionicon-stroke-width: 35px;
        }

        @keyframes fade {
          0% {
            opacity: 0;
          }
          100% {
            opacity: 1;
          }
        }

        @keyframes scaleUp {
          0% {
            transform: scale(0.5);
          }
          100% {
            transform: scale(1);
          }
        }
        
        /* زر الرجوع الجديد */
        .back-btn {
            display: inline-flex;
            align-items: center;
            padding: 8px 12px;
            background: var(--eerie-black1);
            border: 1px solid var(--jet);
            border-radius: var(--border-radius);
            color: var(--light-gray);
            cursor: pointer;
            transition: var(--transition1);
            margin-left: 15px;
            font-size: var(--fs6);
        }
        
        .back-btn:hover {
            background: var(--onyx);
            color: var(--orange-yellow-crayola);
            border-color: var(--orange-yellow-crayola);
        }
        
        .back-btn i {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="main-content">
        <div class="page-content">
            <h1 class="page-title">
                <i class="fas fa-plus-circle"></i> إنشاء امتحان جديد
                <button class="back-btn" id="backButton">
                    <i class="fas fa-arrow-right"></i> رجوع
                </button>
            </h1>
            
            <div class="content-section">
                <div class="quiz-details-form">
                    <h4><i class="fas fa-info-circle"></i> معلومات أساسية عن الامتحان</h4>
                    
                    <div class="form-group">
                        <label>عنوان الامتحان</label>
                        <input type="text" class="form-control" id="quizTitle" placeholder="أدخل عنوان الامتحان">
                    </div>
                    
                    <div class="form-group">
                        <label>وصف الامتحان</label>
                        <textarea class="form-control" rows="3" id="quizDesc" placeholder="أدخل وصفاً للامتحان"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>نوع الامتحان</label>
                        <div class="exam-type-selector">
                            <button class="exam-type-btn active" data-type="normal">
                                <i class="fas fa-file-alt"></i> عادي
                            </button>
                            <button class="exam-type-btn" data-type="monthly">
                                <i class="fas fa-calendar-alt"></i> شهري
                            </button>
                            <button class="exam-type-btn" data-type="yearly">
                                <i class="fas fa-calendar-check"></i> سنوي
                            </button>
                            <button class="exam-type-btn" data-type="personal">
                                <i class="fas fa-user"></i> شخصي
                            </button>
                        </div>
                    </div>
                    
                    <div class="grid-3">
                        <div class="form-group">
                            <label>عدد الأسئلة</label>
                            <select class="form-control" id="questionsCount">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>نوع الأسئلة</label>
                            <select class="form-control" id="questionsType">
                                <option value="mcq">اختيار من متعدد</option>
                                <option value="truefalse">صح أو خطأ</option>
                                <option value="essay">مقالي</option>
                                <option value="mixed">مختلط</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>الدرجة الكلية</label>
                            <input type="number" class="form-control" id="totalPoints" placeholder="100">
                        </div>
                    </div>
                    
                    <div class="grid-2">
                        <div class="form-group">
                            <label>وقت الامتحان (دقائق)</label>
                            <input type="number" class="form-control" id="duration" placeholder="60">
                        </div>
                    </div>
                </div>
                
                <div class="quiz-details-form">
                    <h4><i class="fas fa-file-upload"></i> طريقة إضافة الأسئلة</h4>
                    
                    <div class="dropdown">
                        <div class="dropdown-toggle" id="dropdownMenuButton">
                            <span>اختر طريقة إضافة الأسئلة</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        
                        <div class="dropdown-menu" id="dropdownMenu">
                            <div class="dropdown-item" data-option="text">
                                <span><i class="fas fa-keyboard"></i> إدخال نصي</span>
                                <i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="dropdown-item" data-option="record">
                                <span><i class="fas fa-microphone"></i> تسجيل صوتي</span>
                                <i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="dropdown-item" data-option="file">
                                <span><i class="fas fa-file-pdf"></i> رفع ملف</span>
                                <i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="dropdown-item" data-option="video">
                                <span><i class="fas fa-video"></i> رفع فيديو</span>
                                <i class="fas fa-chevron-left"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Text Input Option -->
                    <div class="upload-options" id="textInputOption">
                        <div class="form-group">
                            <label>نص الأسئلة</label>
                            <textarea class="form-control" rows="6" id="questionsText" placeholder="أدخل الأسئلة هنا..."></textarea>
                        </div>
                        <div class="form-group">
                            <label>تنسيق الأسئلة</label>
                            <select class="form-control" id="textFormat">
                                <option value="qna">سؤال وجواب (كل سؤال في سطر)</option>
                                <option value="json">JSON (هيكل بيانات منظم)</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Record Audio Option -->
                    <div class="upload-options" id="recordUploadOption">
                        <div class="form-group">
                            <label>تسجيل الأسئلة صوتياً</label>
                            <div class="recording-options">
                                <button class="record-btn" id="startRecord">
                                    <i class="fas fa-microphone"></i> بدء التسجيل
                                </button>
                                <button class="btn btn-outline" id="stopRecord" disabled>
                                    <i class="fas fa-stop"></i> إيقاف
                                </button>
                                <button class="btn btn-outline" id="playRecord" disabled>
                                    <i class="fas fa-play"></i> تشغيل
                                </button>
                            </div>
                            <audio controls class="audio-player" id="audioPlayer"></audio>
                        </div>
                    </div>
                    
                    <!-- File Upload Option -->
                    <div class="upload-options" id="fileUploadOption">
                        <div class="file-upload" id="fileUploadArea">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <p>اسحب وأسقط ملف الأسئلة هنا أو</p>
                            <button class="btn btn-outline">اختر ملف</button>
                            <input type="file" id="quizFile" accept=".pdf,.doc,.docx,.txt">
                        </div>
                        <p style="text-align: center; color: var(--light-gray70); font-size: 14px;">يدعم صيغ: PDF, DOC, DOCX, TXT</p>
                    </div>
                    
                    <!-- Video Upload Option -->
                    <div class="upload-options" id="videoUploadOption">
                        <div class="video-upload-options">
                            <div class="video-option" id="uploadVideoOption">
                                <i class="fas fa-video"></i>
                                <p>رفع فيديو من الجهاز</p>
                                <input type="file" id="videoFile" accept="video/*" style="display: none;">
                            </div>
                            <div class="video-option" id="pasteVideoUrl">
                                <i class="fas fa-link"></i>
                                <p>إدراج رابط فيديو</p>
                                <input type="text" id="videoUrl" placeholder="https://youtube.com/..." style="display: none; margin-top: 10px; width: 100%;" class="form-control">
                            </div>
                        </div>
                        <div id="videoPreview" style="margin-top: 15px; display: none;">
                            <video controls style="width: 100%; border-radius: var(--border-radius);"></video>
                        </div>
                    </div>
                </div>
                
                <div class="quiz-preview">
                    <h4><i class="fas fa-eye"></i> معاينة الامتحان</h4>
                    
                    <div class="quiz-meta">
                        <div class="quiz-meta-item">
                            <i class="fas fa-question-circle"></i>
                            <span id="previewQuestions">0 أسئلة</span>
                        </div>
                        <div class="quiz-meta-item">
                            <i class="fas fa-stopwatch"></i>
                            <span id="previewDuration">0 دقائق</span>
                        </div>
                        <div class="quiz-meta-item">
                            <i class="fas fa-star"></i>
                            <span id="previewTotal">0 درجة</span>
                        </div>
                        <div class="quiz-meta-item" id="previewType">
                            <i class="fas fa-tag"></i>
                            <span id="examTypeText">عادي</span>
                        </div>
                    </div>
                </div>
                
                <button class="btn btn-success" id="publishQuiz">
                    <i class="fas fa-check"></i> إنشاء الامتحان
                </button>
            </div>
        </div>
    </div>

    <script>
        // Dropdown Functionality
        const dropdownToggle = document.getElementById('dropdownMenuButton');
        const dropdownMenu = document.getElementById('dropdownMenu');
        const dropdownItems = document.querySelectorAll('.dropdown-item');
        
        dropdownToggle.addEventListener('click', function() {
            dropdownMenu.classList.toggle('show');
        });
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.dropdown')) {
                dropdownMenu.classList.remove('show');
            }
        });
        
        // Handle dropdown item selection
        dropdownItems.forEach(item => {
            item.addEventListener('click', function() {
                const option = this.getAttribute('data-option');
                
                // Update dropdown toggle text
                dropdownToggle.querySelector('span').textContent = this.querySelector('span').textContent;
                
                // Hide all upload options
                document.querySelectorAll('.upload-options').forEach(opt => {
                    opt.classList.remove('active');
                });
                
                // Show selected option
                document.getElementById(option + 'UploadOption').classList.add('active');
                
                // Close dropdown
                dropdownMenu.classList.remove('show');
            });
        });
        
        // File Upload
        document.getElementById('fileUploadArea').addEventListener('click', function() {
            document.getElementById('quizFile').click();
        });
        
        document.getElementById('quizFile').addEventListener('change', function(e) {
            if (e.target.files.length > 0) {
                document.querySelector('#fileUploadArea p').textContent = `تم اختيار الملف: ${e.target.files[0].name}`;
            }
        });
        
        // Exam Type Selection
        const examTypeBtns = document.querySelectorAll('.exam-type-btn');
        examTypeBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                examTypeBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                document.getElementById('examTypeText').textContent = this.textContent.trim();
            });
        });
        
        // Form Input Updates
        const formInputs = document.querySelectorAll('.form-control, select');
        formInputs.forEach(input => {
            input.addEventListener('change', updatePreview);
        });
        
        function updatePreview() {
            // Update questions count
            const questionsCount = document.getElementById('questionsCount').value;
            document.getElementById('previewQuestions').textContent = `${questionsCount} أسئلة`;
            
            // Update duration
            const duration = document.getElementById('duration').value;
            if (duration) {
                document.getElementById('previewDuration').textContent = `${duration} دقائق`;
            }
            
            // Update total points
            const totalPoints = document.getElementById('totalPoints').value;
            if (totalPoints) {
                document.getElementById('previewTotal').textContent = `${totalPoints} درجة`;
            }
        }
        
        // Publish Quiz
        document.getElementById('publishQuiz').addEventListener('click', function() {
            const quizTitle = document.getElementById('quizTitle').value;
            
            if (!quizTitle) {
                alert('الرجاء إدخال عنوان الامتحان');
                return;
            }
            
            alert(`تم إنشاء الامتحان "${quizTitle}" بنجاح`);
        });
        
        // تسجيل الصوت
        let mediaRecorder;
        let audioChunks = [];
        
        document.getElementById('startRecord').addEventListener('click', async function() {
            try {
                const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
                mediaRecorder = new MediaRecorder(stream);
                
                mediaRecorder.ondataavailable = function(e) {
                    audioChunks.push(e.data);
                };
                
                mediaRecorder.onstop = function() {
                    const audioBlob = new Blob(audioChunks, { type: 'audio/mp3' });
                    const audioUrl = URL.createObjectURL(audioBlob);
                    const audioPlayer = document.getElementById('audioPlayer');
                    audioPlayer.src = audioUrl;
                    audioPlayer.style.display = 'block';
                    
                    // تمكين أزرار التشغيل والإيقاف
                    document.getElementById('playRecord').disabled = false;
                    document.getElementById('stopRecord').disabled = true;
                    
                    // إيقاف التنبيه
                    this.classList.remove('recording');
                };
                
                audioChunks = [];
                mediaRecorder.start();
                
                // تغيير زر التسجيل ليعكس حالة التسجيل
                this.classList.add('recording');
                this.innerHTML = '<i class="fas fa-microphone"></i> جاري التسجيل...';
                
                // تمكين زر الإيقاف
                document.getElementById('stopRecord').disabled = false;
                
            } catch (error) {
                alert('خطأ في الوصول إلى الميكروفون: ' + error.message);
            }
        });
        
        document.getElementById('stopRecord').addEventListener('click', function() {
            if (mediaRecorder && mediaRecorder.state !== 'inactive') {
                mediaRecorder.stop();
                document.getElementById('startRecord').innerHTML = '<i class="fas fa-microphone"></i> بدء التسجيل';
            }
        });
        
        document.getElementById('playRecord').addEventListener('click', function() {
            const audioPlayer = document.getElementById('audioPlayer');
            audioPlayer.play();
        });
        
        // رفع الفيديو
        document.getElementById('uploadVideoOption').addEventListener('click', function() {
            document.getElementById('videoFile').click();
        });
        
        document.getElementById('videoFile').addEventListener('change', function(e) {
            if (e.target.files.length > 0) {
                const file = e.target.files[0];
                const videoPreview = document.getElementById('videoPreview');
                const videoElement = videoPreview.querySelector('video');
                
                videoElement.src = URL.createObjectURL(file);
                videoPreview.style.display = 'block';
                
                // إخفاء حقل الرابط إذا كان ظاهراً
                document.getElementById('videoUrl').style.display = 'none';
            }
        });
        
        document.getElementById('pasteVideoUrl').addEventListener('click', function() {
            const videoUrlInput = document.getElementById('videoUrl');
            videoUrlInput.style.display = videoUrlInput.style.display === 'none' ? 'block' : 'none';
            
            // إخفاء معاينة الفيديو إذا كانت ظاهرة
            document.getElementById('videoPreview').style.display = 'none';
        });
        
        document.getElementById('videoUrl').addEventListener('change', function(e) {
            if (e.target.value) {
                // هنا يمكنك إضافة تحقق من صحة الرابط
                console.log('تم إدخال رابط فيديو:', e.target.value);
            }
        });

        // Initialize preview
        updatePreview();
        
        // زر الرجوع
        document.getElementById('backButton').addEventListener('click', function() {
            // يمكنك تغيير هذا الرابط حسب الصفحة التي تريد الرجوع إليها
            window.location.href = 'test.php';
        });
    </script>
</body>
</html>