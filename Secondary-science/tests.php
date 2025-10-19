
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
            <a href="test.php" class="back-btn">
                <i class="fas fa-arrow-left"></i> العودة إلى الخلف
            </a>
        </div>

        <div class="page-content">
            <h1 class="page-title"><i class="fas fa-plus-circle"></i> إنشاء امتحان جديد</h1>
            
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
                <button id="backToTop" style="display:none;position:fixed;bottom:20px;right:20px;">
  ↑ للأعلى
</button>

                <button class="btn btn-success" id="publishQuiz">
                    <i class="fas fa-check"></i> إنشاء الامتحان
                </button>
                <button id="generateQuestionsBtn" style="margin-top:15px; display:none;">
  🎯 Generate Questions
</button>
<div id="generatedQuestions"></div>

<!--
<div class="form-group">
  <label>سؤال رياضي/فيزيائي مع رسم بياني</label>
  <input type="text" class="form-control" id="plotQuestion" placeholder="مثال: Plot the graph of y = x^2 - 4x + 4">
  <button id="plotBtn" class="btn btn-primary" style="margin-top:10px;">
    🖼️ توليد الرسم البياني
  </button>
</div>
      -->

<div id="plotResult" style="margin-top:15px;"></div>

            </div>

        </div>
    </div>
<script>

document.getElementById("plotBtn").addEventListener("click", async () => {
  const question = document.getElementById("plotQuestion").value.trim();
  if (!question) {
    alert("⚠️ أدخل سؤال أولاً");
    return;
  }

  try {
const res = await fetch("../../proxies/quiz/plot.php", {
  method: "POST",
  headers: { "Content-Type": "application/json" },
  body: JSON.stringify({ input_Q: question })
});
     

    if (!res.ok) throw new Error("HTTP " + res.status);

    // ✅ API يرجع صورة PNG مباشرة
    const blob = await res.blob();
    const url = URL.createObjectURL(blob);

    // عرض الصورة في الصفحة
    const img = document.createElement("img");
    img.src = url;
    img.style.maxWidth = "100%";
    img.style.border = "1px solid #ccc";
    img.style.borderRadius = "10px";

    const container = document.getElementById("plotResult");
    container.innerHTML = ""; // امسح القديم
    container.appendChild(img);

  } catch (err) {
    console.error("❌ Plot error:", err);
    alert("فشل توليد الرسم البياني: " + err.message);
  }
});

    </script>
    
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
        </script>
        
<script>
let currentVoiceIndex = null;
let mediaRecorder;
let audioChunks = [];

const startBtn = document.getElementById('startRecord');
const stopBtn = document.getElementById('stopRecord');
const playBtn = document.getElementById('playRecord');
const audioPlayer = document.getElementById('audioPlayer');

startBtn.addEventListener('click', async () => {
  try {
    const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
    mediaRecorder = new MediaRecorder(stream);
    audioChunks = [];

    mediaRecorder.ondataavailable = (e) => {
      if (e.data.size > 0) audioChunks.push(e.data);
    };

    mediaRecorder.onstop = () => {
      const audioBlob = new Blob(audioChunks, { type: 'audio/wav' });
      const audioUrl = URL.createObjectURL(audioBlob);
      audioPlayer.src = audioUrl;
      audioPlayer.style.display = "block";
      playBtn.disabled = false;

      // ⬅️ ارفع الصوت مباشرة للـ API
      uploadVoice(audioBlob);
    };

    mediaRecorder.start();
    startBtn.disabled = true;
    stopBtn.disabled = false;
    startBtn.innerHTML = "⏺️ جاري التسجيل...";
  } catch (err) {
    alert("خطأ في الميكروفون: " + err.message);
  }
});

stopBtn.addEventListener('click', () => {
  if (mediaRecorder && mediaRecorder.state !== 'inactive') {
    mediaRecorder.stop();
    startBtn.disabled = false;
    stopBtn.disabled = true;
    startBtn.innerHTML = "🎤 بدء التسجيل";
  }
});

playBtn.addEventListener('click', () => {
  audioPlayer.play();
});

async function uploadVoice(blob) {
  const formData = new FormData();
  formData.append("file", blob, "recorded_voice.wav");
  formData.append("index_name", "voice_index_" + Date.now());

  try {
const res = await fetch("../../proxies/quiz/voice.php", {
  method: "POST",
  body: formData
});


    const data = await res.json();
    console.log("📌 Voice script response:", data);

  
if (data.status === "success") {
  currentVoiceIndex = data.index_path?.split("/").pop() || data.index_name;
  document.getElementById("voiceIndexDisplay").textContent =
    "✅ Index saved: " + currentVoiceIndex;
  document.getElementById("generateQuestionsBtn").style.display = "inline-block";
} else {
  alert("❌ Error: " + (data.message || "Unknown error"));
}

     // document.getElementById("generateBtn").style.display = "inline-block";
   
  } catch (err) {
    console.error("Upload error:", err);
    alert("⚠️ فشل رفع التسجيل: " + err.message);
  }
}



// --- توليد الأسئلة من الـ index

async function generateQuestions() {
  if (!currentVoiceIndex) {
    alert("⚠️ لازم تسجل أو ترفع صوت الأول");
    return;
  }

  const payload = {
    index_name: currentVoiceIndex,
    subject: "Math", // تقدر تغيرها ديناميكياً
    num_questions: 5,
    question_type: "multiple_choice"
  };

  try {
    const res = await fetch("../../proxies/quiz_generate_questions.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(payload)
    });

    const data = await res.json();
    console.log("🎯 Generated questions:", data);

    const container = document.getElementById("generatedQuestions");
    container.innerHTML = "";

    if (data.quiz) {
      data.quiz.forEach((q, i) => {
        const div = document.createElement("div");
        div.className = "question-item";
        div.innerHTML = `
          <h3>س${i + 1}: ${q.question}</h3>
          <ul>
            ${q.options.map(opt => `<li>${opt}</li>`).join("")}
          </ul>
        `;
        container.appendChild(div);
      });
    } else {
      container.innerHTML = `<p style="color:red;">❌ فشل توليد الأسئلة: ${data.error || "غير معروف"}</p>`;
    }
  } catch (err) {
    console.error("❌ Error generating:", err);
    alert("خطأ أثناء توليد الأسئلة: " + err.message);
  }
}

// اربط الزرار
document.getElementById("generateQuestionsBtn")
  .addEventListener("click", generateQuestions);

</script>

                <script>
           
        
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
        
        /*
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
*/

// Paste video URL toggle
document.getElementById('pasteVideoUrl').addEventListener('click', function(e) {
    e.stopPropagation(); // prevent bubbling
    const videoUrlInput = document.getElementById('videoUrl');
    videoUrlInput.style.display = "block";  
    videoUrlInput.focus();
    document.getElementById('videoPreview').style.display = 'none';
});

// prevent dropdown close when focusing inside the input
document.getElementById("videoUrl").addEventListener("click", function(e) {
    e.stopPropagation();
});
// --- YouTube Link to Script ---
document.getElementById("videoUrl").addEventListener("change", async function(e) {
  let url = e.target.value.trim();
  if (!url) return;

  // normalize short links
  if (url.includes("youtu.be/")) {
    const id = url.split("youtu.be/")[1].split("?")[0];
    url = "https://www.youtube.com/watch?v=" + id;
  }

  const payload = {
    input_link: url,
    language: "en", // أو "ar" لو الفيديو بالعربي
    index_name: "yt_" + Date.now()
  };

  try {
    const res = await fetch("../../proxies/quiz_get_script.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(payload)
    });

    const data = await res.json();
    console.log("🎬 YouTube response:", data);

    if (data.status !== "success") {
      alert("فشل استخراج النص من الفيديو: " + (data.error || "Unknown error"));
      return;
    }

    currentIndexName = data.index_name;
    alert("✅ تم استخراج النص من الفيديو وحفظ الفهرس: " + currentIndexName);

    // عرض النص في المعاينة
    const preview = document.querySelector(".quiz-preview");
    const box = document.createElement("pre");
    box.style.marginTop = "12px";
    box.style.background = "rgba(255,255,255,0.05)";
    box.style.padding = "12px";
    box.style.borderRadius = "10px";
    box.textContent = data.script;
    preview.appendChild(box);

  } catch (err) {
    console.error("❌ YouTube error:", err);
    alert("خطأ في الاتصال: " + err.message);
  }
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

        // Initialize preview
        updatePreview();
    </script>


   <script>
 let currentIndexName = null; // هنخزن فيه index_name بعد الرفع

// --- رفع PDF ---
document.addEventListener("DOMContentLoaded", () => {
  const fileInput = document.getElementById("quizFile");

  if (!fileInput) {
    console.error("❌ عنصر quizFile مش موجود");
    return;
  }

  fileInput.addEventListener("change", async function (e) {
    if (e.target.files.length > 0) {
      const file = e.target.files[0];
      const formData = new FormData();
      formData.append("file", file);
      formData.append("index_name", "quiz_" + Date.now());

      try {
        const response = await fetch("../../proxies/quiz_upload_pdf.php", {
          method: "POST",
          body: formData
        });

        if (!response.ok) throw new Error("HTTP " + response.status);

        const result = await response.json();
        console.log("✅ Upload response:", result);

        // نحفظ اسم الفهرس (آخر جزء بعد faiss_indexes/)
        if (result.index_path) {
          currentIndexName = result.index_path.split("/").pop();

          // حفظه في DB
          const saveRes = await fetch("../../proxies/quiz/quiz_save.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({
              title: document.getElementById("quizTitle").value,
              description: document.getElementById("quizDesc").value,
              index_name: currentIndexName,
              source_type: "pdf"
            })
          });

          const saveResult = await saveRes.json();
          console.log("💾 Save result:", saveResult);

          alert("📂 الملف اترفع والفهرس اتسجل في قاعدة البيانات: " + currentIndexName);
        }
      } catch (err) {
        console.error("❌ Upload/Save error:", err);
        alert("⚠️ فشل رفع أو حفظ الملف: " + err.message);
      }
    }
  });
});


/*
async function generateQuestions() {
  if (!currentIndexName) {
    alert("⚠️ لازم ترفع ملف الأول قبل ما تولد أسئلة");
    return;
  }

  const count = parseInt(document.getElementById("questionsCount").value || "10", 10);
  const type = document.getElementById("questionsType").value;
  const quizTitle = document.getElementById("quizTitle").value;
  const quizDesc  = document.getElementById("quizDesc").value;

  const payload = {
    index_name: currentIndexName,
    subject: "History",
    num_questions: count,
    question_type: type === "mcq" ? "multiple_choice" : "multiple_choice"
  };

  try {
    const res = await fetch("../../proxies/quiz_generate_questions.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(payload)
    });

    if (!res.ok) throw new Error("HTTP " + res.status);

    const data = await res.json();
    console.log("📌 Questions:", data);

    if (!data.quiz) {
      alert("فشل توليد الأسئلة: " + (data.error || ""));
      return;
    }

    // --- حفظ الامتحان ---
    await fetch("../../proxies/quiz_save.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({
        title: quizTitle,
        description: quizDesc,
        index_name: currentIndexName
      })
    });

    // عرض المعاينة
    const preview = document.querySelector(".quiz-preview");
    const box = document.createElement("pre");
    box.style.marginTop = "12px";
    box.style.background = "rgba(255,255,255,0.05)";
    box.style.padding = "12px";
    box.style.borderRadius = "10px";
    box.textContent = JSON.stringify(data.quiz, null, 2);
    preview.appendChild(box);

    document.getElementById("previewQuestions").textContent = `${data.quiz.length} أسئلة`;

    alert("✅ تم توليد وحفظ الامتحان بنجاح");

    
  } catch (err) {
    console.error("❌ Generate error:", err);
    alert("فشل توليد الأسئلة: " + err.message);
  }
}
*/

// --- ربط الزر ---
async function saveQuiz(title, description, indexName) {
  try {
    const res = await fetch("../../data/quiz_save.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ title, description, index_name: indexName })
    });

    const result = await res.json();
    console.log("✅ Quiz saved:", result);
  } catch (err) {
    console.error("❌ Save quiz error:", err);
  }
}

// Example call inside your publish button:
document.getElementById("publishQuiz").addEventListener("click", async (e) => {
  e.preventDefault();
  console.log("[quiz] publish clicked");

  const quizTitle = document.getElementById("quizTitle").value;
  const quizDesc = document.getElementById("quizDesc").value;

  await generateQuestions(); // توليد الأسئلة
  if (currentIndexName) {
    await saveQuiz(quizTitle, quizDesc, currentIndexName);
  }
});


</script>

<script>
    function renderExams(exams) {
  examsGrid.innerHTML = "";

  exams.forEach(exam => {
    const card = document.createElement("div");
    card.className = "exam-card";
    card.innerHTML = `
      <i class="fas fa-file-alt exam-icon"></i>
      <div class="exam-title">${exam.title}</div>
      <div class="exam-description">${exam.description}</div>
      <div class="exam-date">
        <i class="fas fa-calendar-alt"></i>
        <span>${new Date(exam.createdAt).toLocaleDateString()}</span>
      </div>
      <div class="exam-actions">
        <a href="test.php?index=${exam.indexName}" class="exam-action-btn action-start">
          <i class="fas fa-play"></i>
        </a>
      </div>
    `;
    examsGrid.appendChild(card);
  });
}

</script>


<script>

    // --- YouTube Link to Script ---
document.getElementById("videoUrl").addEventListener("change", async function(e) {
  const url = e.target.value.trim();
  if (!url) return;

  const payload = {
    input_link: url,
    language: "en", // أو "ar" حسب الفيديو
    index_name: "yt_" + Date.now()
  };

  try {
    const res = await fetch("../../proxies/quiz_get_script.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(payload)
    });

    if (!res.ok) throw new Error("HTTP " + res.status);
    const data = await res.json();
    console.log("🎬 YouTube response:", data);

    if (data.status !== "success") {
      alert("فشل استخراج النص من الفيديو: " + (data.error || "Unknown error"));
      return;
    }

    // ✅ حفظ اسم الفهرس
    currentIndexName = data.index_name;

    alert("✅ تم استخراج النص من الفيديو وحفظ الفهرس: " + currentIndexName);

    // لو حابب تعرض النص
    const preview = document.querySelector(".quiz-preview");
    const box = document.createElement("pre");
    box.style.marginTop = "12px";
    box.style.background = "rgba(255,255,255,0.05)";
    box.style.padding = "12px";
    box.style.borderRadius = "10px";
    box.textContent = data.script;
    preview.appendChild(box);

  } catch (err) {
    console.error("❌ YouTube error:", err);
    alert("خطأ في الاتصال: " + err.message);
  }
});


let allExams = [];

async function loadExams() {
  const res = await fetch("../../data/quiz_list.php");
  allExams = await res.json();
  filterExams();
}

function renderExams(exams) {
  examsGrid.innerHTML = "";
  exams.forEach(exam => {
    const card = document.createElement("div");
    card.className = "exam-card";
    card.innerHTML = `
      <i class="fas fa-file-alt exam-icon"></i>
      <div class="exam-title">${exam.title}</div>
      <div class="exam-description">${exam.description}</div>
      <div class="exam-date">
        <i class="fas fa-calendar-alt"></i>
        <span>${new Date(exam.createdAt).toLocaleDateString()}</span>
      </div>
      <div class="exam-actions">
        <a href="test.php?index=${exam.indexName}" class="exam-action-btn action-start">
          <i class="fas fa-play"></i>
        </a>
      </div>
    `;
    examsGrid.appendChild(card);
  });
}

</script>


   <div class="questions-container" id="questionsContainer"></div>

<script>
const params = new URLSearchParams(window.location.search);
const indexName = params.get("index");
/*
async function loadQuestions() {
  if (!indexName) {
    document.getElementById("questionsContainer").innerHTML =
      `<p style="color:red;">⚠️ لا يوجد امتحان محدد. افتح من صفحة الاختبارات.</p>`;
    return;
  
  }
*/
  const payload = {
    index_name: indexName,
    subject: "History",
    num_questions: 10,
    question_type: "multiple_choice"
  };

  const res = await fetch("../../proxies/quiz_generate_questions.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(payload)
  });

  const data = await res.json();
  console.log("📌 Questions:", data);

  if (data.quiz) {
    renderQuestions(data.quiz);
  } else {
    document.getElementById("questionsContainer").innerHTML =
      `<p style="color:red;">فشل تحميل الأسئلة: ${data.error || "غير معروف"}</p>`;
  }
}


function renderQuestions(quiz) {
  const container = document.getElementById("questionsContainer");
  container.innerHTML = "";
  quiz.forEach((q, i) => {
    const div = document.createElement("div");
    div.className = "question-item";
    div.innerHTML = `
      <h3>س${i+1}: ${q.question}</h3>
      <ul>
        ${q.options.map(opt => `<li>${opt}</li>`).join("")}
      </ul>
    `;
    container.appendChild(div);
  });
}

loadQuestions();
</script>

<script>

// --- ربط input file ---


// مثال: زر علشان تستدعي التوليد بعد الرفع
// <button onclick="generateQuestionsFromVoice()">توليد الأسئلة</button>


</script>
<!--
<input type="file" id="voiceFileInput" accept="audio/*">

<div id="voiceIndexDisplay" style="margin-top:10px;color:lime;font-weight:bold;"></div>

<button id="generateBtn" style="margin-top:10px;display:none;">
  🎯 Generate Questions
</button>
-->

<div id="questionsContainer" style="margin-top:20px;"></div>

    <script>
        /*
let currentVoiceIndex = null;

async function uploadVoice(file) {
  const formData = new FormData();
  formData.append("file", file);
  formData.append("index_name", "voice_index_" + Date.now());

  try {
    const res = await fetch("https://quiz-maker-1-58cg.onrender.com/quiz/voice_script", {
      method: "POST",
      body: formData
    });

    const data = await res.json();
    console.log("Voice script response:", data);

    if (data.status === "success") {
      currentVoiceIndex = data.index_path?.split("/").pop() || data.index_name;

      document.getElementById("voiceIndexDisplay").textContent =
        "✅ Index saved: " + currentVoiceIndex;

      // أظهر زرار توليد الأسئلة
      document.getElementById("generateBtn").style.display = "inline-block";
    } else {
      alert("❌ Error: " + (data.message || "Unknown error"));
    }
  } catch (err) {
    console.error("Error uploading voice:", err);
    alert("خطأ أثناء رفع الصوت: " + err.message);
  }
}

// توليد الأسئلة من الـ index
async function generateQuestions() {
  if (!currentVoiceIndex) {
    alert("❌ لازم ترفع صوت الأول");
    return;
  }

  const payload = {
    index_name: currentVoiceIndex,
    subject: "Biology",
    num_questions: 5,
    question_type: "multiple_choice"
  };

  try {
    const res = await fetch("https://quiz-maker-1-58cg.onrender.com/quiz/generate_questions", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(payload)
    });

    const data = await res.json();
    console.log("Questions response:", data);

    if (data.quiz) {
      renderQuestions(data.quiz);
    } else {
      document.getElementById("questionsContainer").innerHTML =
        `<p style="color:red;">فشل تحميل الأسئلة: ${data.error || "غير معروف"}</p>`;
    }
  } catch (err) {
    console.error("Error generating questions:", err);
    alert("خطأ أثناء توليد الأسئلة: " + err.message);
  }
}
*/
// عرض الأسئلة
function renderQuestions(quiz) {
  const container = document.getElementById("questionsContainer");
  container.innerHTML = "";
  quiz.forEach((q, i) => {
    const div = document.createElement("div");
    div.className = "question-item";
    div.innerHTML = `
      <h3>س${i+1}: ${q.question}</h3>
      <ul>
        ${q.options.map(opt => `<li>${opt}</li>`).join("")}
      </ul>
    `;
    container.appendChild(div);
  });
}

// اربط الأحداث
document.getElementById("voiceFileInput").addEventListener("change", (e) => {
  if (e.target.files.length > 0) {
    uploadVoice(e.target.files[0]);
  }
});

document.getElementById("generateBtn").addEventListener("click", generateQuestions);
</script>

</body>
</html>