
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius AI - إنشاء الامتحانات</title>
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

        /* نماذج الامتحانات */
        .exam-models-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
        }

        .exam-model-card {
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

        .exam-model-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow4);
        }

        .exam-model-card.active {
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
        .my-exams-model-bg {
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

        .input-field, .input-select {
            width: 100%;
            padding: 15px;
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid var(--jet);
            color: var(--white2);
            font-size: 1rem;
            transition: var(--transition1);
        }

        .input-field:focus, .input-select:focus {
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
            
            .exam-models-container {
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            }
        }

        @media (max-width: 992px) {
            .side-panel.open {
                width: 70%;
            }
            
            .exam-models-container {
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
            
            .exam-models-container {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .exam-model-card {
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
            
            .exam-model-card {
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
            .exam-model-card {
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
        <p class="subtitle">نظام إنشاء الامتحانات المتخصصة</p>
    </div>
 <!-- منطقة المحتوى الرئيسية -->
<div class="main-content">
  <div class="exam-models-container" id="examsGrid">
    <!-- الامتحانات هتتعمل Inject هنا بالـ JavaScript -->
  </div>
</div>

<!-- أزرار في أسفل الشاشة -->
<div class="bottom-buttons">
  <button class="bottom-btn create-btn" onclick="window.location.href='tests.php'">
    <i class="fas fa-graduation-cap"></i> إنشاء امتحان 
    <span style="font-size: 0.8em; margin-right: 5px;">AI</span>
  </button>
  <?php include 'header.php'; ?>
</div>

    <!-- اللوحة الجانبية -->
    <div class="side-panel" id="side-panel">
        <div class="panel-header">
            <div class="panel-title" id="panel-title">إنشاء امتحان جديد</div>
            <button class="close-panel" id="close-panel">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <div class="panel-body" id="panel-body">
            <!-- محتوى اللوحة سيتم إضافته ديناميكيًا -->
        </div>
    </div>



<script>
let allExams = [];

// ========== Render Exams ==========
function renderExams(exams) {
  const grid = document.getElementById('examsGrid');
  grid.innerHTML = '';

  if (exams.length === 0) {
    grid.innerHTML = '<p style="text-align:center;">لا توجد امتحانات</p>';
    return;
  }

  exams.forEach(exam => {
    // اختيار أيقونة حسب النوع
    let icon = "fa-clipboard";
    if (exam.source_type === "pdf") icon = "fa-file-pdf";
    if (exam.source_type === "voice") icon = "fa-microphone";

    const card = document.createElement('div');
    card.className = 'exam-model-card';
    card.innerHTML = `
      <div class="icon-frame">
        <div class="model-icon my-exams-model-bg">
          <i class="fas ${icon}"></i>
        </div>
      </div>
      <div class="model-title">${exam.title}</div>
      <div class="model-specialization">${exam.index_name || "امتحان مرفوع"}</div>
      <div class="model-description">${exam.description || ""}</div>
      <div class="model-actions">
        <a href="create_test.php?index=${exam.index_name}" class="model-btn primary-btn">
          <i class="fas fa-door-open"></i> دخول إلى الامتحان
        </a>
     

      </div>
    `;
    grid.appendChild(card);
  });
  
}

// ========== Load Exams ==========
async function loadExams() {
  try {
    const res = await fetch("../../data/quiz_list.php");
    const data = await res.json();

    if (data.error) {
      document.getElementById('examsGrid').innerHTML = "<p>خطأ في تحميل الامتحانات</p>";
      return;
    }

    allExams = data;
    renderExams(allExams);
  } catch (err) {
    console.error(err);
    document.getElementById('examsGrid').innerHTML = "<p>تعذر الاتصال بالسيرفر</p>";
  }
}

window.addEventListener('load', loadExams);
</script>

</body>
</html>