
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius AI - تدريب النموذج</title>
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
            max-width: 800px;
            margin: 0 auto;
            width: 100%;
        }

        /* بطاقة التدريب */
        .training-card {
            background: var(--border-gradient-onyx);
            border-radius: 20px;
            padding: 40px;
            box-shadow: var(--shadow3);
            margin-bottom: 30px;
        }

        .card-title {
            font-size: 2rem;
            font-weight: var(--fw800);
            margin-bottom: 10px;
            background: var(--text-gradient-gold);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-align: center;
        }

        .card-subtitle {
            color: var(--light-gray);
            font-size: 1.2rem;
            text-align: center;
            margin-bottom: 30px;
        }

        /* منطقة إدخال الرابط */
        .url-input-area {
            border: 2px dashed var(--gold);
            border-radius: 15px;
            padding: 40px 20px;
            text-align: center;
            margin: 20px 0;
            background: rgba(255, 215, 0, 0.05);
        }

        .url-input-area.active {
            background: rgba(255, 215, 0, 0.15);
            border-color: var(--light-gold);
        }

        .url-icon {
            font-size: 4rem;
            color: var(--gold);
            margin-bottom: 15px;
        }

        .url-text {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .url-subtext {
            color: var(--light-gray70);
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .url-input {
            width: 100%;
            max-width: 500px;
            padding: 15px;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            background: rgba(0, 0, 0, 0.3);
            color: var(--white2);
            font-size: 1rem;
            margin: 0 auto;
            display: block;
            text-align: right;
        }

        .url-input:focus {
            outline: none;
            border-color: var(--gold);
            box-shadow: 0 0 0 2px rgba(255, 215, 0, 0.2);
        }

        /* معلومات الفيديو */
        .video-info {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 15px;
            margin: 20px 0;
            display: none;
        }

        .video-info-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: var(--gold);
        }

        .video-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .video-thumbnail {
            width: 100%;
            max-width: 300px;
            border-radius: 10px;
            margin: 15px auto;
            display: block;
        }

        /* شريط التقدم */
        .progress-container {
            width: 100%;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            margin: 30px 0;
            overflow: hidden;
            display: none;
        }

        .progress-bar {
            height: 15px;
            background: var(--text-gradient-gold);
            width: 0%;
            transition: width 0.3s ease;
            border-radius: 10px;
        }

        .progress-text {
            text-align: center;
            margin-top: 10px;
            font-size: 1rem;
            color: var(--light-gray);
        }

        /* زر الرجوع */
        .back-btn {
            background: rgba(255, 255, 255, 0.1);
            color: var(--white2);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 12px 25px;
            border-radius: 25px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
            transition: var(--transition1);
            text-decoration: none;
        }

        .back-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(-5px);
        }

        /* رسالة النجاح */
        .success-message {
            background: rgba(0, 255, 0, 0.1);
            border: 1px solid rgba(0, 255, 0, 0.3);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            margin: 30px 0;
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .success-icon {
            font-size: 4rem;
            color: var(--green);
            margin-bottom: 20px;
        }

        .success-title {
            font-size: 1.8rem;
            color: var(--green);
            margin-bottom: 15px;
        }

        /* زر الإجراء */
        .action-btn {
            background: var(--text-gradient-gold);
            color: black;
            border: none;
            padding: 15px 30px;
            border-radius: 30px;
            cursor: pointer;
            font-weight: var(--fw700);
            display: flex;
            align-items: center;
            gap: 10px;
            transition: var(--transition1);
            font-size: 1.2rem;
            margin: 20px auto;
            box-shadow: var(--shadow3);
        }

        .action-btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow4);
        }

        .action-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
            box-shadow: var(--shadow2);
        }

        /* تأثيرات الحركة */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        /* تصميم متجاوب */
        @media (max-width: 768px) {
            .main-title {
                font-size: 1.8rem;
            }
            
            .main-content {
                padding: 20px;
            }
            
            .training-card {
                padding: 25px;
            }
            
            .card-title {
                font-size: 1.6rem;
            }
            
            .url-icon {
                font-size: 3rem;
            }
            
            .url-text {
                font-size: 1.3rem;
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
            
            .training-card {
                padding: 20px;
            }
            
            .card-title {
                font-size: 1.4rem;
            }
            
            .url-input-area {
                padding: 30px 15px;
            }
            
            .url-icon {
                font-size: 2.5rem;
            }
            
            .url-text {
                font-size: 1.2rem;
            }
            
            .action-btn {
                padding: 12px 25px;
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <!-- الهيدر -->
    <div class="header">
        <a href="javascript:history.back()" class="back-btn">
            <i class="fas fa-arrow-right"></i> رجوع
        </a>
        <h1 class="main-title">Genius AI <i class="fas fa-brain" style="color: var(--gold);"></i></h1>
        <p class="subtitle">تدريب النموذج باستخدام فيديو يوتيوب</p>
    </div>

    <!-- منطقة المحتوى الرئيسية -->
    <div class="main-content">
        <div class="training-card">
            <h2 class="card-title">تدريب النموذج</h2>
            <p class="card-subtitle">أدخل رابط فيديو يوتيوب لتدريب النموذج على المحتوى الخاص بك</p>
            
            <div class="url-input-area" id="url-input-area">
                <div class="url-icon">
                    <i class="fab fa-youtube"></i>
                </div>
                <div class="url-text">أدخل رابط فيديو يوتيوب</div>
                <div class="url-subtext">الصق رابط الفيديو في الحقل أدناه</div>
                <input type="url" class="url-input" id="url-input" placeholder="https://www.youtube.com/watch?v=..." autocomplete="off">
            </div>
            
            <div class="video-info" id="video-info">
                <div class="video-info-title">معلومات الفيديو</div>
                <img class="video-thumbnail" id="video-thumbnail" src="" alt="صورة الفيديو">
                <div class="video-details">
                    <span>عنوان الفيديو:</span>
                    <span id="video-title">-</span>
                </div>
                <div class="video-details">
                    <span>مدة الفيديو:</span>
                    <span id="video-duration">-</span>
                </div>
                <div class="video-details">
                    <span>القناة:</span>
                    <span id="video-channel">-</span>
                </div>
            </div>
            
            <div class="progress-container" id="progress-container">
                <div class="progress-bar" id="progress-bar"></div>
                <div class="progress-text" id="progress-text">0%</div>
            </div>
            
            <button class="action-btn" id="train-btn" disabled>
                <i class="fas fa-graduation-cap"></i> بدء تدريب النموذج
            </button>
            
            <div class="success-message" id="success-message">
                <div class="success-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3 class="success-title">تم تدريب النموذج بنجاح!</h3>
                <p>تم تدريب النموذج بنجاح باستخدام محتوى الفيديو. يمكنك الآن استخدام النموذج المدرب.</p>
                <button class="action-btn" onclick="resetPage()" style="margin-top: 20px;">
                    <i class="fas fa-redo"></i> تدريب نموذج جديد
                </button>
            </div>
        </div>
        
        <div style="background: rgba(255,215,0,0.1); padding: 20px; border-radius: 15px; border: 1px solid rgba(255,215,0,0.3);">
            <h3 style="color: var(--gold); margin-bottom: 15px;">معلومات حول التدريب</h3>
            <ul style="margin-right: 15px; line-height: 1.8;">
                <li>يقوم النموذج بتحليل محتوى الفيديو واستخراج المعلومات الهامة</li>
                <li>يتم تدريب النموذج على فهم السياق والمفاهيم الأساسية في الفيديو</li>
                <li>قد تستغرق عملية التدريب من 2-5 دقائق حسب طول الفيديو</li>
                <li>بعد التدريب، سيكون النموذج قادراً على الإجابة على أسئلة متعلقة بمحتوى الفيديو</li>
                <li>يمكنك استخدام أكثر من فيديو لتدريب النموذج على مواضيع متعددة</li>
            </ul>
        </div>
    </div>

    <script>
        // عناصر واجهة المستخدم
        const urlInputArea = document.getElementById('url-input-area');
        const urlInput = document.getElementById('url-input');
        const videoInfo = document.getElementById('video-info');
        const videoThumbnail = document.getElementById('video-thumbnail');
        const videoTitle = document.getElementById('video-title');
        const videoDuration = document.getElementById('video-duration');
        const videoChannel = document.getElementById('video-channel');
        const progressContainer = document.getElementById('progress-container');
        const progressBar = document.getElementById('progress-bar');
        const progressText = document.getElementById('progress-text');
        const trainBtn = document.getElementById('train-btn');
        const successMessage = document.getElementById('success-message');
        
        let youtubeUrl = null;

        // تهيئة إدخال الرابط
        function initUrlInput() {
            // التركيز على حقل الإدخال عند النقر على المنطقة
            urlInputArea.addEventListener('click', () => {
                urlInput.focus();
            });
            
            // تغيير الرابط
            urlInput.addEventListener('input', () => {
                validateUrl(urlInput.value);
            });
            
            // عند الضغط على Enter
            urlInput.addEventListener('keypress', (e) => {
                if (e.key === 'Enter') {
                    validateUrl(urlInput.value);
                }
            });
        }
        
        // التحقق من صحة الرابط
        function validateUrl(url) {
            // نمط رابط يوتيوب
            const youtubeRegex = /^(https?:\/\/)?(www\.)?(youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]{11})(\S*)?$/;
            
            if (youtubeRegex.test(url)) {
                // استخراج معرف الفيديو
                const videoId = extractVideoId(url);
                
                if (videoId) {
                    youtubeUrl = url;
                    
                    // تحديث واجهة المستخدم
                    updateVideoInfo(videoId);
                    videoInfo.style.display = 'block';
                    trainBtn.disabled = false;
                    
                    // تغيير مظهر منطقة الإدخال
                    urlInputArea.classList.add('active');
                    urlInputArea.querySelector('.url-text').textContent = 'تم إدخال الرابط بنجاح';
                    urlInputArea.querySelector('.url-subtext').textContent = 'انقر على زر التدريب لبدء العملية';
                }
            } else if (url.length > 0) {
                // رابط غير صالح
                urlInputArea.style.background = 'rgba(255, 0, 0, 0.1)';
                urlInputArea.style.borderColor = 'var(--bittersweet-shimmer)';
                urlInputArea.querySelector('.url-text').textContent = 'رابط يوتيوب غير صالح';
                urlInputArea.querySelector('.url-subtext').textContent = 'يرجى إدخال رابط يوتيوب صحيح';
                
                // إخفاء معلومات الفيديو وتعطيل زر التدريب
                videoInfo.style.display = 'none';
                trainBtn.disabled = true;
            } else {
                // إعادة تعيين المنطقة
                resetUrlArea();
            }
        }
        
        // استخراج معرف الفيديو من الرابط
        function extractVideoId(url) {
            const regex = /(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/;
            const match = url.match(regex);
            return match ? match[1] : null;
        }
        
        // تحديث معلومات الفيديو (محاكاة)
        function updateVideoInfo(videoId) {
            // في التطبيق الحقيقي، ستحتاج إلى استخدام YouTube API
            // هنا نقوم بمحاكاة البيانات
            videoThumbnail.src = `https://img.youtube.com/vi/${videoId}/hqdefault.jpg`;
            videoTitle.textContent = 'فيديو تدريبي - محتوى تعليمي';
            videoDuration.textContent = '15:30';
            videoChannel.textContent = 'قناة تعليمية';
            
            // تغيير مظهر منطقة الإدخال
            urlInputArea.style.background = 'rgba(0, 255, 0, 0.1)';
            urlInputArea.style.borderColor = 'var(--green)';
        }
        
        // إعادة تعيين منطقة الرابط
        function resetUrlArea() {
            urlInputArea.classList.remove('active');
            urlInputArea.style.background = 'rgba(255, 215, 0, 0.05)';
            urlInputArea.style.borderColor = 'var(--gold)';
            urlInputArea.querySelector('.url-text').textContent = 'أدخل رابط فيديو يوتيوب';
            urlInputArea.querySelector('.url-subtext').textContent = 'الصق رابط الفيديو في الحقل أدناه';
        }
        
        // بدء عملية التدريب
    
    /*
        function startTraining() {
            if (!youtubeUrl) return;
            
            // إخفاء زر التدريب وإظهار شريط التقدم
            trainBtn.style.display = 'none';
            progressContainer.style.display = 'block';
            
            // محاكاة عملية التدريب
            simulateTrainingProcess();
        }
        */
// بدء عملية التدريب
// بدء عملية التدريب
async function startTraining() {
    if (!youtubeUrl) return;

    // إخفاء زر التدريب وإظهار شريط التقدم
    trainBtn.style.display = 'none';
    progressContainer.style.display = 'block';
    updateProgress(5);

    try {
        // استدعاء API Gateway Proxy
        const response = await fetch("../../proxies/studying_project/getting_script_from_video.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
            },
            body: JSON.stringify({
                input_link: youtubeUrl,
                language: "en" // تقدر تخليها ديناميكية
            })
        });

        let data;
        try {
            data = await response.json();
        } catch (e) {
            throw new Error("Response was not valid JSON");
        }
if (response.ok && data.status === "success") {
    currentVideoId = data.id; 
    
    updateProgress(90);

    setTimeout(() => {
        completeTraining();

        const scriptBox = document.createElement("div");
        scriptBox.style.marginTop = "20px";
        scriptBox.style.padding = "15px";
        scriptBox.style.border = "1px solid #ccc";
        scriptBox.style.borderRadius = "10px";
        scriptBox.style.background = "#f9f9f9";
      /*  scriptBox.innerHTML = `
            <h3>📜 النص المستخرج:</h3>
            <p style="white-space: pre-line; color: black;">${data.script_content || "لم يتم العثور على نص."}</p>
        `;
        */
        successMessage.appendChild(scriptBox);
    }, 1000);

} else {
    throw new Error(data.error || "فشل في استخراج النص");
}



    } catch (err) {
        progressContainer.style.display = "none";
        alert("حدث خطأ: " + err.message);
        trainBtn.style.display = "block";
    }
}



        // محاكاة عملية التدريب
        function simulateTrainingProcess() {
            let progress = 0;
            
            const interval = setInterval(() => {
                // زيادة التقدم بشكل عشوائي
                progress += Math.random() * 8;
                
                if (progress >= 100) {
                    progress = 100;
                    clearInterval(interval);
                    
                    // اكتمال التدريب
                    setTimeout(completeTraining, 800);
                }
                
                // تحديث شريط التقدم
                updateProgress(progress);
            }, 300);
        }
        
        // تحديث شريط التقدم
        function updateProgress(progress) {
            progressBar.style.width = `${progress}%`;
            progressText.textContent = `${Math.round(progress)}%`;
            
            // تغيير النص بناءً على مرحلة التقدم
            if (progress < 20) {
                progressText.textContent += ' - جاري تحميل الفيديو...';
            } else if (progress < 40) {
                progressText.textContent += ' - جاري استخراج الصوت...';
            } else if (progress < 60) {
                progressText.textContent += ' - جاري تحويل الصوت إلى نص...';
            } else if (progress < 80) {
                progressText.textContent += ' - جاري معالجة المحتوى...';
            } else if (progress < 95) {
                progressText.textContent += ' - جاري تدريب النموذج...';
            } else {
                progressText.textContent += ' - جاري الانتهاء...';
            }
        }
        
        // اكتمال التدريب
        function completeTraining() {
            // إخفاء شريط التقدم وإظهار رسالة النجاح
            progressContainer.style.display = 'none';
            successMessage.style.display = 'block';
            
            // تأثير بصرى
            successMessage.style.animation = 'fadeIn 0.5s ease';
        }
        
        // إعادة تعيين الصفحة
        function resetPage() {
            // إعادة تعيين جميع العناصر
            youtubeUrl = null;
            urlInput.value = '';
            videoInfo.style.display = 'none';
            progressContainer.style.display = 'none';
            successMessage.style.display = 'none';
            trainBtn.style.display = 'block';
            trainBtn.disabled = true;
            
            // إعادة تعيين منطقة الإدخال
            resetUrlArea();
            
            // إعادة تعيين شريط التقدم
            progressBar.style.width = '0%';
            progressText.textContent = '0%';
        }
        
        // تهيئة الصفحة
        document.addEventListener('DOMContentLoaded', () => {
            initUrlInput();
            
            // إضافة حدث النقر على زر التدريب
            trainBtn.addEventListener('click', startTraining);
        });
    </script>

    

</body>
</html>