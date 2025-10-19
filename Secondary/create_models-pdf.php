
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

        .upload-area.active {
            background: rgba(255, 215, 0, 0.15);
            border-color: var(--light-gold);
        }

        .upload-icon {
            font-size: 4rem;
            color: var(--gold);
            margin-bottom: 15px;
        }

        .upload-text {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .upload-subtext {
            color: var(--light-gray70);
            font-size: 1rem;
        }

        .file-input {
            display: none;
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

        /* معلومات الملف */
        .file-info {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 15px;
            margin: 20px 0;
            display: none;
        }

        .file-info-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: var(--gold);
        }

        .file-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
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
            
            .upload-icon {
                font-size: 3rem;
            }
            
            .upload-text {
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
            
            .upload-area {
                padding: 30px 15px;
            }
            
            .upload-icon {
                font-size: 2.5rem;
            }
            
            .upload-text {
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
        <p class="subtitle">تدريب النموذج باستخدام ملف PDF</p>
    </div>

    <!-- منطقة المحتوى الرئيسية -->
    <div class="main-content">
        <div class="training-card">
            <h2 class="card-title">تدريب النموذج</h2>
            <p class="card-subtitle">ارفع ملف PDF لتدريب النموذج على المحتوى الخاص بك</p>
            
            <div class="upload-area" id="upload-area">
                <div class="upload-icon">
                    <i class="fas fa-file-pdf"></i>
                </div>
                <div class="upload-text">انقر لرفع ملف PDF</div>
                <div class="upload-subtext">أو اسحب الملف وأفلته هنا (الحجم الأقصى: 10MB)</div>
                <input type="file" class="file-input" id="file-input" accept=".pdf">
            </div>
            
            <div class="file-info" id="file-info">
                <div class="file-info-title">معلومات الملف</div>
                <div class="file-details">
                    <span>اسم الملف:</span>
                    <span id="file-name">-</span>
                </div>
                <div class="file-details">
                    <span>حجم الملف:</span>
                    <span id="file-size">-</span>
                </div>
                <div class="file-details">
                    <span>نوع الملف:</span>
                    <span id="file-type">-</span>
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
                <p>تم تدريب النموذج بنجاح باستخدام الملف المرفوع. يمكنك الآن استخدام النموذج المدرب.</p>
                <button class="action-btn" onclick="resetPage()" style="margin-top: 20px;">
                    <i class="fas fa-redo"></i> تدريب نموذج جديد
                </button>
            </div>
        </div>
        
        <div style="background: rgba(255,215,0,0.1); padding: 20px; border-radius: 15px; border: 1px solid rgba(255,215,0,0.3);">
            <h3 style="color: var(--gold); margin-bottom: 15px;">معلومات حول التدريب</h3>
            <ul style="margin-right: 15px; line-height: 1.8;">
                <li>يقوم النموذج بتحليل محتوى ملف PDF واستخراج المعلومات الهامة</li>
                <li>يتم تدريب النموذج على فهم السياق والمفاهيم الأساسية في المستند</li>
                <li>قد تستغرق عملية التدريب من 1-3 دقائق حسب حجم الملف</li>
                <li>بعد التدريب، سيكون النموذج قادراً على الإجابة على أسئلة متعلقة بمحتوى المستند</li>
                <li>يمكنك رفع أكثر من ملف لتدريب النموذج على مواضيع متعددة</li>
            </ul>
        </div>
    </div>
<script>
const uploadArea = document.getElementById('upload-area');
const fileInput = document.getElementById('file-input');
const fileInfo = document.getElementById('file-info');
const fileName = document.getElementById('file-name');
const fileSize = document.getElementById('file-size');
const fileType = document.getElementById('file-type');
const progressContainer = document.getElementById('progress-container');
const progressBar = document.getElementById('progress-bar');
const progressText = document.getElementById('progress-text');
const trainBtn = document.getElementById('train-btn');
const successMessage = document.getElementById('success-message');

let selectedFile = null;

// تهيئة رفع الملفات
function initFileUpload() {
  uploadArea.addEventListener('click', () => fileInput.click());

  fileInput.addEventListener('change', (e) => {
    if (e.target.files.length > 0) {
      handleFileSelection(e.target.files[0]);
    }
  });

  uploadArea.addEventListener('dragover', (e) => {
    e.preventDefault();
    uploadArea.classList.add('active');
  });

  uploadArea.addEventListener('dragleave', () => {
    uploadArea.classList.remove('active');
  });

  uploadArea.addEventListener('drop', (e) => {
    e.preventDefault();
    uploadArea.classList.remove('active');
    if (e.dataTransfer.files.length > 0) {
      handleFileSelection(e.dataTransfer.files[0]);
    }
  });
}

// معالجة اختيار الملف
function handleFileSelection(file) {
  if (file.type !== 'application/pdf') {
    alert('يرجى اختيار ملف PDF فقط');
    return;
  }

  const maxSize = 10 * 1024 * 1024;
  if (file.size > maxSize) {
    alert('حجم الملف كبير جداً. الحد الأقصى 10MB');
    return;
  }

  selectedFile = file;
  updateFileInfo(file);
  fileInfo.style.display = 'block';
  trainBtn.disabled = false;

  uploadArea.querySelector('.upload-text').textContent = 'تم اختيار الملف بنجاح';
  uploadArea.querySelector('.upload-subtext').textContent = 'انقر على زر التدريب لبدء العملية';
  uploadArea.style.background = 'rgba(0, 255, 0, 0.1)';
  uploadArea.style.borderColor = 'var(--green)';
}

function updateFileInfo(file) {
  fileName.textContent = file.name;
  fileSize.textContent = formatFileSize(file.size);
  fileType.textContent = 'PDF';
}

function formatFileSize(bytes) {
  if (bytes === 0) return '0 Bytes';
  const k = 1024;
  const sizes = ['Bytes', 'KB', 'MB', 'GB'];
  const i = Math.floor(Math.log(bytes) / Math.log(k));
  return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
}

// بدء عملية التدريب (رفع الملف)
function startTraining() {
  if (!selectedFile) return;

  trainBtn.style.display = 'none';
  progressContainer.style.display = 'block';

  uploadFile(selectedFile);
}

// رفع الملف للـ Proxy API
function uploadFile(file) {
  const formData = new FormData();
  formData.append("file", file);

  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../../proxies/chatpdf/uploadpdf.php", true);

  xhr.upload.addEventListener("progress", (e) => {
    if (e.lengthComputable) {
      const percent = (e.loaded / e.total) * 100;
      updateProgress(percent);
    }
  });

  xhr.onload = () => {
    if (xhr.status === 200) {
      const res = JSON.parse(xhr.responseText);
      if (res.message) {
        completeTraining(res.message);
      } else {
        alert("❌ خطأ: " + (res.error || "لم يتم رفع الملف"));
      }
    } else {
      alert("❌ فشل الاتصال بالسيرفر");
    }
  };

  xhr.onerror = () => {
    alert("⚠️ خطأ في الاتصال بالسيرفر");
  };

  xhr.send(formData);
}

function updateProgress(progress) {
  progressBar.style.width = `${progress}%`;
  progressText.textContent = `${Math.round(progress)}% - جاري رفع الملف...`;
}

function completeTraining(msg = "تم تدريب النموذج بنجاح!") {
  progressContainer.style.display = 'none';
  successMessage.style.display = 'block';
  successMessage.querySelector(".success-title").textContent = msg;
  successMessage.style.animation = 'fadeIn 0.5s ease';
}

function resetPage() {
  selectedFile = null;
  fileInput.value = '';
  fileInfo.style.display = 'none';
  progressContainer.style.display = 'none';
  successMessage.style.display = 'none';
  trainBtn.style.display = 'block';
  trainBtn.disabled = true;

  uploadArea.querySelector('.upload-text').textContent = 'انقر لرفع ملف PDF';
  uploadArea.querySelector('.upload-subtext').textContent = 'أو اسحب الملف وأفلته هنا (الحجم الأقصى: 10MB)';
  uploadArea.style.background = 'rgba(255, 215, 0, 0.05)';
  uploadArea.style.borderColor = 'var(--gold)';

  progressBar.style.width = '0%';
  progressText.textContent = '0%';
}

document.addEventListener('DOMContentLoaded', () => {
  initFileUpload();
  trainBtn.addEventListener('click', startTraining);
});
</script>

</body>
</html>