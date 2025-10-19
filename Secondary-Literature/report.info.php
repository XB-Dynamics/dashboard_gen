
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظام الإدارة الأكاديمية - تقارير الأداء</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap");

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
          --accent-green: #4CAF50;
          --accent-orange: #FF9800;
          --accent-purple: #9C27B0;
          --accent-teal: #00BCD4;
          --accent-yellow: #FFEB3B;

          --ff-poppins: "Tajawal", sans-serif;

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
        }

        *,
        *::before,
        *::after {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }

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

        html {
          font-family: var(--ff-poppins);
        }

        body {
          background: var(--smoky-black);
          color: var(--light-gray);
          font-family: var(--ff-poppins);
          line-height: 1.6;
        }

        /* شريط العنوان العلوي */
        .header {
          background: var(--bg-gradient-onyx);
          padding: 12px 20px;
          display: flex;
          justify-content: space-between;
          align-items: center;
          border-bottom: 1px solid var(--jet);
          position: sticky;
          top: 0;
          z-index: 100;
        }

        .header h1 {
          font-size: 18px;
          font-weight: var(--fw600);
          color: var(--white2);
          display: flex;
          align-items: center;
          gap: 8px;
        }

        .header h1 i {
          color: var(--orange-yellow-crayola);
          font-size: 16px;
        }

        .header-controls {
          display: flex;
          align-items: center;
          gap: 10px;
        }

        .user-menu {
          display: flex;
          align-items: center;
          gap: 10px;
        }

        .notification-icon {
          position: relative;
          color: var(--light-gray70);
          cursor: pointer;
          font-size: 16px;
        }

        .badge {
          position: absolute;
          top: -5px;
          right: -5px;
          background: var(--bittersweet-shimmer);
          color: white;
          border-radius: 50%;
          width: 16px;
          height: 16px;
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 10px;
        }

        .user-info {
          display: flex;
          align-items: center;
          gap: 8px;
          font-size: 14px;
        }

        .user-info img {
          width: 32px;
          height: 32px;
          border-radius: 50%;
          border: 2px solid var(--orange-yellow-crayola);
        }

        /* محتوى الصفحة */
        .content-container {
          padding: 15px;
          max-width: 1200px;
          margin: 0 auto;
        }

        .page-title {
          font-size: 20px;
          margin-bottom: 20px;
          color: var(--white2);
          display: flex;
          align-items: center;
          gap: 8px;
        }

        /* بطاقات الإحصائيات */
        .stats-cards {
          display: grid;
          grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
          gap: 12px;
          margin-bottom: 20px;
        }

        .stat-card {
          background: var(--bg-gradient-jet);
          border-radius: 10px;
          padding: 15px;
          border: 1px solid var(--jet);
          box-shadow: var(--shadow1);
          transition: var(--transition1);
          position: relative;
          overflow: hidden;
        }

        .stat-card:hover {
          transform: translateY(-3px);
          box-shadow: var(--shadow2);
        }

        .stat-card::before {
          content: '';
          position: absolute;
          top: 0;
          right: 0;
          width: 100%;
          height: 3px;
          background: var(--orange-yellow-crayola);
        }

        .stat-card .icon {
          width: 40px;
          height: 40px;
          border-radius: 8px;
          display: flex;
          align-items: center;
          justify-content: center;
          margin-bottom: 10px;
          color: white;
          font-size: 16px;
          background: var(--text-gradient-yellow);
        }

        .stat-card h3 {
          font-size: 18px;
          margin-bottom: 5px;
          color: var(--white2);
        }

        .stat-card p {
          color: var(--light-gray70);
          font-size: 12px;
        }

        /* أقسام المحتوى */
        .content-section {
          background: var(--bg-gradient-jet);
          border-radius: 10px;
          padding: 15px;
          border: 1px solid var(--jet);
          box-shadow: var(--shadow1);
          margin-bottom: 20px;
          transition: var(--transition1);
        }

        .content-section:hover {
          box-shadow: var(--shadow2);
        }

        .section-header {
          display: flex;
          justify-content: space-between;
          align-items: center;
          flex-wrap: wrap;
          gap: 10px;
          margin-bottom: 15px;
          padding-bottom: 10px;
          border-bottom: 1px solid var(--jet);
        }

        .section-header h3 {
          font-size: 16px;
          color: var(--white2);
          font-weight: var(--fw600);
          display: flex;
          align-items: center;
          gap: 8px;
        }

        /* التقدم الدراسي */
        .progress-container {
          display: grid;
          grid-template-columns: 1fr;
          gap: 20px;
          margin-bottom: 20px;
        }

        @media (min-width: 768px) {
          .progress-container {
            grid-template-columns: 300px 1fr;
          }
        }

        .progress-card {
          background: var(--eerie-black1);
          border-radius: 10px;
          padding: 20px;
          text-align: center;
        }

        .progress-card h4 {
          margin-bottom: 15px;
          color: var(--white2);
        }

        .progress-ring {
          position: relative;
          width: 120px;
          height: 120px;
          margin: 0 auto 15px;
        }

        .progress-text {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          font-size: 24px;
          font-weight: bold;
          color: var(--white2);
        }

        .progress-improvement {
          display: flex;
          align-items: center;
          justify-content: center;
          gap: 5px;
          color: var(--accent-green);
          font-size: 14px;
        }

        /* تقدم المواد */
        .subject-progress {
          background: var(--eerie-black1);
          border-radius: 10px;
          padding: 20px;
        }

        .subject-progress h4 {
          margin-bottom: 15px;
          color: var(--white2);
        }

        .subject-progress-item {
          margin-bottom: 15px;
        }

        .subject-progress-header {
          display: flex;
          justify-content: space-between;
          margin-bottom: 5px;
          font-size: 14px;
        }

        .subject-progress-bar {
          height: 8px;
          background: var(--jet);
          border-radius: 4px;
          overflow: hidden;
        }

        .subject-progress-fill {
          height: 100%;
          border-radius: 4px;
        }

        /* الرسوم البيانية */
        .charts-container {
          display: grid;
          grid-template-columns: 1fr;
          gap: 20px;
          margin-bottom: 20px;
        }

        @media (min-width: 768px) {
          .charts-container {
            grid-template-columns: 1fr 1fr;
          }
        }

        .chart-card {
          background: var(--eerie-black1);
          border-radius: 10px;
          padding: 15px;
        }

        .chart-card h4 {
          margin-bottom: 15px;
          color: var(--white2);
        }

        .chart-placeholder {
          position: relative;
          height: 200px;
          width: 100%;
        }

        /* تحليل الأداء */
        .performance-analysis {
          background: var(--eerie-black1);
          border-radius: 10px;
          padding: 20px;
          margin-bottom: 20px;
        }

        .performance-analysis h4 {
          margin-bottom: 15px;
          color: var(--white2);
        }

        .analysis-grid {
          display: grid;
          grid-template-columns: 1fr;
          gap: 20px;
        }

        @media (min-width: 768px) {
          .analysis-grid {
            grid-template-columns: 1fr 1fr;
          }
        }

        .strengths-section, .weaknesses-section {
          background: var(--eerie-black2);
          border-radius: 8px;
          padding: 15px;
        }

        .strengths-section h5, .weaknesses-section h5 {
          margin-bottom: 10px;
          color: var(--white2);
          display: flex;
          align-items: center;
          gap: 8px;
        }

        .strength-item, .weakness-item {
          padding: 8px 0;
          border-bottom: 1px solid var(--jet);
          display: flex;
          align-items: center;
          gap: 8px;
          font-size: 14px;
        }

        .strength-item:last-child, .weakness-item:last-child {
          border-bottom: none;
        }

        .strength-item i {
          color: var(--accent-green);
        }

        .weakness-item i {
          color: var(--bittersweet-shimmer);
        }

        /* التوصيات */
        .recommendations-container {
          margin-bottom: 20px;
        }

        .recommendations-container h4 {
          margin-bottom: 15px;
          color: var(--white2);
          display: flex;
          align-items: center;
          gap: 8px;
        }

        .recommendations-grid {
          display: grid;
          grid-template-columns: 1fr;
          gap: 15px;
        }

        @media (min-width: 768px) {
          .recommendations-grid {
            grid-template-columns: repeat(2, 1fr);
          }
        }

        @media (min-width: 992px) {
          .recommendations-grid {
            grid-template-columns: repeat(4, 1fr);
          }
        }

        .recommendation-card {
          background: var(--eerie-black1);
          border-radius: 8px;
          padding: 15px;
          border-right: 4px solid;
          transition: var(--transition1);
        }

        .recommendation-card:hover {
          transform: translateY(-5px);
          box-shadow: var(--shadow3);
        }

        .recommendation-card h5 {
          margin-bottom: 8px;
          color: var(--white2);
        }

        .recommendation-card p {
          font-size: 13px;
          color: var(--light-gray70);
        }

        /* شارات اللغات البرمجية */
        .programming-badges {
          display: flex;
          flex-wrap: wrap;
          gap: 15px;
          margin-bottom: 20px;
        }

        .badge-item {
          background: var(--eerie-black1);
          border-radius: 8px;
          padding: 15px;
          text-align: center;
          flex: 1;
          min-width: 100px;
        }

        .badge-icon {
          width: 50px;
          height: 50px;
          border-radius: 50%;
          display: flex;
          align-items: center;
          justify-content: center;
          margin: 0 auto 10px;
          font-size: 24px;
          color: white;
        }

        .badge-icon.html {
          background: #E34F26;
        }
        .badge-icon.css {
          background: #1572B6;
        }
        .badge-icon.js {
          background: #F7DF1E;
          color: #000;
        }
        .badge-icon.python {
          background: #3776AB;
        }
        .badge-icon.java {
          background: #007396;
        }

        .badge-item span {
          display: block;
        }

        .badge-item span:last-child {
          font-weight: bold;
          color: var(--white2);
          margin-top: 5px;
        }

        /* جدول البيانات */
        .table-container {
          overflow-x: auto;
          -webkit-overflow-scrolling: touch;
          margin-bottom: 15px;
          border-radius: 8px;
          background: var(--eerie-black1);
        }

        .data-table {
          width: 100%;
          min-width: 600px;
          border-collapse: collapse;
          font-size: var(--fs6);
        }

        .data-table th {
          background: var(--bg-gradient-onyx);
          color: var(--white2);
          padding: 12px 15px;
          text-align: right;
          font-weight: var(--fw600);
          border-bottom: 1px solid var(--jet);
        }

        .data-table td {
          padding: 10px 15px;
          text-align: right;
          color: var(--light-gray70);
          border-bottom: 1px solid var(--jet);
        }

        .data-table tr:last-child td {
          border-bottom: none;
        }

        .data-table tr:hover {
          background: hsla(45, 100%, 72%, 0.1);
        }

        /* الأزرار */
        .btn {
          padding: 8px 15px;
          border-radius: 6px;
          cursor: pointer;
          transition: var(--transition1);
          font-weight: var(--fw500);
          display: inline-flex;
          align-items: center;
          gap: 6px;
          font-size: var(--fs6);
          border: none;
        }

        .btn i {
          font-size: 12px;
        }

        .btn-sm {
          padding: 6px 12px;
          font-size: var(--fs7);
        }

        .btn-primary {
          background: var(--text-gradient-yellow);
          color: var(--smoky-black);
        }

        .btn-primary:hover {
          background: var(--orange-yellow-crayola);
          color: var(--smoky-black);
        }

        .btn-success {
          background: var(--accent-green);
          color: var(--smoky-black);
        }

        .btn-success:hover {
          background: #388E3C;
          color: var(--white2);
        }

        .btn-danger {
          background: var(--bittersweet-shimmer);
          color: var(--white2);
        }

        .btn-danger:hover {
          background: #D32F2F;
        }

        .btn-outline {
          background: transparent;
          border: 1px solid var(--light-gray70);
          color: var(--light-gray70);
        }

        .btn-outline:hover {
          border-color: var(--white2);
          color: var(--white2);
        }

        /* زر الريسبونس الجديد */
        .response-btn {
          margin-top: 20px;
          background: var(--text-gradient-yellow);
          color: var(--smoky-black);
          padding: 12px 20px;
          border-radius: 6px;
          text-align: center;
          display: block;
          width: 100%;
          font-weight: var(--fw600);
          transition: var(--transition1);
          border: none;
          cursor: pointer;
          font-family: inherit;
        }

        .response-btn:hover {
          background: var(--orange-yellow-crayola);
          transform: translateY(-2px);
          box-shadow: var(--shadow2);
        }

        .response-btn i {
          margin-left: 8px;
        }

        /* نافذة النتائج المنبثقة */
        .modal {
          display: none;
          position: fixed;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          background: var(--eerie-black1);
          border: 1px solid var(--jet);
          border-radius: 10px;
          padding: 20px;
          z-index: 1000;
          width: 90%;
          max-width: 500px;
          box-shadow: var(--shadow5);
        }

        .modal h3 {
          margin-bottom: 15px;
          color: var(--white2);
          border-bottom: 1px solid var(--jet);
          padding-bottom: 10px;
        }

        .modal p {
          margin-bottom: 10px;
          display: flex;
          justify-content: space-between;
        }

        .modal p strong {
          color: var(--white2);
        }

        .modal-overlay {
          display: none;
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 0, 0.7);
          z-index: 999;
        }

        /* عناصر تحكم النموذج */
        .form-control {
          background: var(--eerie-black2);
          border: 1px solid var(--jet);
          border-radius: 6px;
          padding: 8px 12px;
          color: var(--white2);
          font-family: inherit;
          width: 100%;
        }

        .form-control:focus {
          border-color: var(--orange-yellow-crayola);
          outline: none;
        }

        /* تأثيرات للرسوم البيانية */
        canvas {
          width: 100% !important;
          height: auto !important;
        }

        /* تعديلات للواجهة العربية */
        html[dir="rtl"] {
          direction: rtl;
        }

        /* تحسينات للهواتف */
        @media (max-width: 767px) {
          .stats-cards {
            grid-template-columns: repeat(2, 1fr);
          }
          
          .section-header {
            flex-direction: column;
            align-items: flex-start;
          }
          
          .badge-item {
            min-width: calc(50% - 8px);
          }
        }

        @media (max-width: 480px) {
          .header h1 {
            font-size: 16px;
          }
          
          .user-info span {
            display: none;
          }
          
          .stats-cards {
            grid-template-columns: 1fr;
          }
        }
                /* زر الرجوع إلى الخلف */
.back-button-container {
    margin-left: 15px;
}

        .back-btn {
            background: var(--bg-gradient-jet);
            border: 1px solid var(--jet);
            color: var(--orange-yellow-crayola);
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
        }
        
        .back-btn:hover::before {
            background: var(--bg-gradient-yellow2);
        }
        
        .back-btn i {
            transition: var(--transition1);
        }
        
        .back-btn:hover i {
            transform: translateX(3px);
        }
        
        @media (max-width: 768px) {
            .back-btn {
                width: 100%;
                justify-content: center;
                margin-bottom: 10px;
            }
        }

    </style>
</head>
<body>
    <div class="header">
    <a href="index.php" class="btn btn-outline back-btn">
        <i class="fas fa-arrow-right"></i> العودة إلى الخلف
    </a>
    </div>
        <?php include 'header.php'; ?>


    <!-- محتوى الصفحة -->
    <div class="content-container">
        <h1 class="page-title"><i class="fas fa-chart-pie"></i> تقارير الأداء الأكاديمي</h1>
        
        <!-- بطاقات الإحصائيات -->
        <div class="stats-cards">
            <div class="stat-card">
                <div class="icon">
                    <i class="fas fa-square-root-alt"></i>
                </div>
                <h3>0%</h3>
                <p>الرياضيات</p>
            </div>
            <div class="stat-card">
                <div class="icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <h3>0%</h3>
                <p>اللغة العربية</p>
            </div>
            <div class="stat-card">
                <div class="icon">
                    <i class="fas fa-atom"></i>
                </div>
                <h3>0%</h3>
                <p>العلوم</p>
            </div>
            <div class="stat-card">
                <div class="icon">
                    <i class="fas fa-globe-africa"></i>
                </div>
                <h3>0%</h3>
                <p>الجغرافيا</p>
            </div>
            <div class="stat-card">
                <div class="icon">
                    <i class="fas fa-history"></i>
                </div>
                <h3>0%</h3>
                <p>التاريخ</p>
            </div>
            <div class="stat-card">
                <div class="icon">
                    <i class="fas fa-language"></i>
                </div>
                <h3>0%</h3>
                <p>اللغة الإنجليزية</p>
            </div>
        </div>

        <!-- ملخص الأداء الشامل -->
        <div class="content-section">
            <div class="section-header">
                <h3>ملخص الأداء الشامل</h3>
                <div>
                    <button class="btn btn-primary" style="margin-left: 10px;">
                        <i class="fas fa-download"></i> تصدير PDF
                    </button>
                    <button class="btn btn-success">
                        <i class="fas fa-share-alt"></i> مشاركة
                    </button>
                </div>
            </div>
            
            <!-- التقدم الدراسي -->
            <div class="progress-container">
                <!-- المعدل العام -->
                <div class="progress-card">
                    <h4>المعدل العام</h4>
                    <div class="progress-ring">
                        <svg width="120" height="120" viewBox="0 0 36 36">
                            <circle cx="18" cy="18" r="16" fill="none" stroke="#333" stroke-width="3"></circle>
                            <circle cx="18" cy="18" r="16" fill="none" stroke="var(--orange-yellow-crayola)" stroke-width="3" 
                                    stroke-dasharray="100 100" stroke-dashoffset="calc(100 - 85)" stroke-linecap="round"></circle>
                        </svg>
                        <div class="progress-text">0%</div>
                    </div>
                    <div class="progress-improvement">
                        <i class="fas fa-arrow-up"></i>
                        <span>+5% عن الشهر الماضي</span>
                    </div>
                </div>
                
                <!-- تقدم المواد -->
                <div class="subject-progress">
                    <h4>تقدم المواد الدراسية</h4>
                    <div class="subject-progress-item">
                        <div class="subject-progress-header">
                            <span>الرياضيات</span>
                            <span>0</span>
                        </div>
                        <div class="subject-progress-bar">
                            <div class="subject-progress-fill" style="width: 85%; background: var(--text-gradient-yellow);"></div>
                        </div>
                    </div>
                    <div class="subject-progress-item">
                        <div class="subject-progress-header">
                            <span>اللغة العربية</span>
                            <span>0</span>
                        </div>
                        <div class="subject-progress-bar">
                            <div class="subject-progress-fill" style="width: 78%; background: var(--accent-green);"></div>
                        </div>
                    </div>
                    <div class="subject-progress-item">
                        <div class="subject-progress-header">
                            <span>العلوم</span>
                            <span>0</span>
                        </div>
                        <div class="subject-progress-bar">
                            <div class="subject-progress-fill" style="width: 65%; background: var(--accent-orange);"></div>
                        </div>
                    </div>
                    <div class="subject-progress-item">
                        <div class="subject-progress-header">
                            <span>الجغرافيا</span>
                            <span>0</span>
                        </div>
                        <div class="subject-progress-bar">
                            <div class="subject-progress-fill" style="width: 92%; background: var(--accent-purple);"></div>
                        </div>
                    </div>
                    <div class="subject-progress-item">
                        <div class="subject-progress-header">
                            <span>التاريخ</span>
                            <span>0</span>
                        </div>
                        <div class="subject-progress-bar">
                            <div class="subject-progress-fill" style="width: 88%; background: var(--accent-teal);"></div>
                        </div>
                    </div>
                    <div class="subject-progress-item">
                        <div class="subject-progress-header">
                            <span>اللغة الإنجليزية</span>
                            <span>0</span>
                        </div>
                        <div class="subject-progress-bar">
                            <div class="subject-progress-fill" style="width: 82%; background: var(--accent-yellow);"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- الرسوم البيانية -->
            <div class="charts-container">
                <div class="chart-card">
                    <h4>التقدم الشهري</h4>
                    <div class="chart-placeholder">
                        <canvas id="monthlyProgressChart"></canvas>
                    </div>
                </div>
                <div class="chart-card">
                    <h4>مقارنة مع المتوسط العام</h4>
                    <div class="chart-placeholder">
                        <canvas id="comparisonChart"></canvas>
                    </div>
                </div>
            </div>
            
            <!-- نقاط القوة والضعف -->
            <div class="performance-analysis">
                <h4>تحليل الأداء</h4>
                <div class="analysis-grid">
                    <div class="strengths-section">
                        <h5><i class="fas fa-thumbs-up"></i> نقاط القوة</h5>
                        <div class="strength-item">
                            <i class="fas fa-check-circle"></i> الجبر والهندسة في الرياضيات
                        </div>
                        <div class="strength-item">
                            <i class="fas fa-check-circle"></i> القواعد النحوية في اللغة العربية
                        </div>
                        <div class="strength-item">
                            <i class="fas fa-check-circle"></i> التاريخ الإسلامي
                        </div>
                        <div class="strength-item">
                            <i class="fas fa-check-circle"></i> الجغرافيا السياسية
                        </div>
                    </div>
                    <div class="weaknesses-section">
                        <h5><i class="fas fa-exclamation-triangle"></i> نقاط تحتاج تحسين</h5>
                        <div class="weakness-item">
                            <i class="fas fa-exclamation-circle"></i> الفيزياء في العلوم
                        </div>
                        <div class="weakness-item">
                            <i class="fas fa-exclamation-circle"></i> التعبير الكتابي في اللغة العربية
                        </div>
                        <div class="weakness-item">
                            <i class="fas fa-exclamation-circle"></i> حل المسائل اللفظية في الرياضيات
                        </div>
                        <div class="weakness-item">
                            <i class="fas fa-exclamation-circle"></i> المحادثة في اللغة الإنجليزية
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- التوصيات -->
            <div class="recommendations-container">
                <h4><i class="fas fa-lightbulb"></i> توصيات لتحسين الأداء</h4>
                <div class="recommendations-grid">
                    <div class="recommendation-card" style="border-right-color: var(--orange-yellow-crayola);">
                        <h5>التركيز على دروس الفيزياء</h5>
                        <p>نوصي بحضور 3 حصص إضافية في الفيزياء خلال الشهر القادم</p>
                    </div>
                    <div class="recommendation-card" style="border-right-color: var(--accent-green);">
                        <h5>ممارسة التعبير الكتابي</h5>
                        <p>كتابة موضوع تعبير أسبوعي مع مراجعة من المدرس</p>
                    </div>
                    <div class="recommendation-card" style="border-right-color: var(--accent-purple);">
                        <h5>حل المسائل اللفظية</h5>
                        <p>حل 5 مسائل لفظية يومياً مع التركيز على فهم السؤال</p>
                    </div>
                    <div class="recommendation-card" style="border-right-color: var(--accent-orange);">
                        <h5>تحسين المحادثة الإنجليزية</h5>
                        <p>ممارسة المحادثة لمدة 30 دقيقة يومياً مع زملاء الدراسة</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- قسم اللغة البرمجية -->
        <div class="content-section">
            <div class="section-header">
                <h3><i class="fas fa-code"></i> تقرير اللغة البرمجية</h3>
            </div>

            <!-- شارات اللغات البرمجية -->
            <div class="programming-badges">
                <div class="badge-item">
                    <div class="badge-icon html">
                        <i class="fab fa-html5"></i>
                    </div>
                    <span>HTML</span>
                    <span>0%</span>
                </div>
                <div class="badge-item">
                    <div class="badge-icon css">
                        <i class="fab fa-css3-alt"></i>
                    </div>
                    <span>CSS</span>
                    <span>0%</span>
                </div>
                <div class="badge-item">
                    <div class="badge-icon js">
                        <i class="fab fa-js"></i>
                    </div>
                    <span>JavaScript</span>
                    <span>0%</span>
                </div>
                <div class="badge-item">
                    <div class="badge-icon python">
                        <i class="fab fa-python"></i>
                    </div>
                    <span>Python</span>
                    <span>0%</span>
                </div>
                <div class="badge-item">
                    <div class="badge-icon java">
                        <i class="fab fa-java"></i>
                    </div>
                    <span>Java</span>
                    <span>0%</span>
                </div>
            </div>

            <!-- الدورات المنهية -->
            <div class="section-header">
                <h4><i class="fas fa-graduation-cap"></i> الدورات المنهية</h4>
            </div>
            <div class="table-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>اسم الدورة</th>
                            <th>اللغة</th>
                            <th>تاريخ الإنجاز</th>
                            <th>النسبة</th>
                            <th>الحالة</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>أساسيات تطوير الويب</td>
                            <td><span class="lang-badge" style="background-color: rgba(227, 79, 38, 0.1); color: #E34F26;">HTML/CSS</span></td>
                            <td>15/05/2023</td>
                            <td><span style="color: var(--accent-green); font-weight: 600;">0%</span></td>
                            <td><span style="color: var(--accent-green);">منتهية</span></td>
                        </tr>
                        <tr>
                            <td>JavaScript للمبتدئين</td>
                            <td><span class="lang-badge" style="background-color: rgba(247, 223, 30, 0.1); color: #F7DF1E;">JavaScript</span></td>
                            <td>10/06/2023</td>
                            <td><span style="color: var(--accent-green); font-weight: 600;">0%</span></td>
                            <td><span style="color: var(--accent-green);">منتهية</span></td>
                        </tr>
                        <tr>
                            <td>برمجة Python الأساسية</td>
                            <td><span class="lang-badge" style="background-color: rgba(55, 118, 171, 0.1); color: #3776AB;">Python</span></td>
                            <td>05/06/2023</td>
                            <td><span style="color: var(--accent-orange); font-weight: 600;">0%</span></td>
                            <td><span style="color: var(--accent-orange);">في التقدم</span></td>
                        </tr>
                        <tr>
                            <td>أساسيات Java</td>
                            <td><span class="lang-badge" style="background-color: rgba(0, 115, 150, 0.1); color: #007396;">Java</span></td>
                            <td>03/06/2023</td>
                            <td><span style="color: var(--accent-orange); font-weight: 600;">0%</span></td>
                            <td><span style="color: var(--accent-orange);">في التقدم</span></td>
                        </tr>
                        <tr>
                            <td>تطوير واجهات المستخدم</td>
                            <td><span class="lang-badge" style="background-color: rgba(21, 114, 182, 0.1); color: #1572B6;">CSS</span></td>
                            <td>01/06/2023</td>
                            <td><span style="color: var(--accent-green); font-weight: 600;">0%</span></td>
                            <td><span style="color: var(--accent-green);">منتهية</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>


        <!-- تفاصيل الاختبارات -->
        <div class="content-section">
            <div class="section-header">
                <h3>تفاصيل الاختبارات حسب المادة</h3>
                <select class="form-control">
                    <option>جميع المواد</option>
                    <option>الرياضيات</option>
                    <option>اللغة العربية</option>
                    <option>العلوم</option>
                    <option>الجغرافيا</option>
                    <option>التاريخ</option>
                    <option>اللغة الإنجليزية</option>
                </select>
            </div>
            <div class="table-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>اسم الاختبار</th>
                            <th>المادة</th>
                            <th>التاريخ</th>
                            <th>النتيجة</th>
                            <th>التفاصيل</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>اختبار الرياضيات النهائي</td>
                            <td><span class="lang-badge" style="background-color: rgba(33, 150, 243, 0.1); color: var(--orange-yellow-crayola);">الرياضيات</span></td>
                            <td>15/06/2023</td>
                            <td><span style="color: var(--accent-green); font-weight: 600;">0%</span></td>
                            <td>
                                <button class="btn btn-primary btn-sm" onclick="showReport('اختبار الرياضيات النهائي', 50, 46, 4, '92%')">عرض النتائج</button>
                            </td>
                        </tr>
                        <tr>
                            <td>اختبار اللغة العربية</td>
                            <td><span class="lang-badge" style="background-color: rgba(76, 175, 80, 0.1); color: var(--accent-green);">اللغة العربية</span></td>
                            <td>10/06/2023</td>
                            <td><span style="color: var(--accent-green); font-weight: 600;">0%</span></td>
                            <td>
                                <button class="btn btn-primary btn-sm" onclick="showReport('اختبار اللغة العربية', 40, 35, 5, '88%')">عرض النتائج</button>
                            </td>
                        </tr>
                        <tr>
                            <td>اختبار العلوم الشهري</td>
                            <td><span class="lang-badge" style="background-color: rgba(255, 152, 0, 0.1); color: var(--accent-orange);">العلوم</span></td>
                            <td>05/06/2023</td>
                            <td><span style="color: var(--accent-orange); font-weight: 600;">0%</span></td>
                            <td>
                                <button class="btn btn-primary btn-sm" onclick="showReport('اختبار العلوم الشهري', 30, 23, 7, '76%')">عرض النتائج</button>
                            </td>
                        </tr>
                        <tr>
                            <td>اختبار الجغرافيا</td>
                            <td><span class="lang-badge" style="background-color: rgba(156, 39, 176, 0.1); color: var(--accent-purple);">الجغرافيا</span></td>
                            <td>03/06/2023</td>
                            <td><span style="color: var(--accent-purple); font-weight: 600;">0%</span></td>
                            <td>
                                <button class="btn btn-primary btn-sm" onclick="showReport('اختبار الجغرافيا', 25, 23, 2, '92%')">عرض النتائج</button>
                            </td>
                        </tr>
                        <tr>
                            <td>اختبار التاريخ</td>
                            <td><span class="lang-badge" style="background-color: rgba(76, 201, 240, 0.1); color: var(--accent-teal);">التاريخ</span></td>
                            <td>01/06/2023</td>
                            <td><span style="color: var(--accent-teal); font-weight: 600;">0%</span></td>
                            <td>
                                <button class="btn btn-primary btn-sm" onclick="showReport('اختبار التاريخ', 20, 18, 2, '88%')">عرض النتائج</button>
                            </td>
                        </tr>
                        <tr>
                            <td>اختبار اللغة الإنجليزية</td>
                            <td><span class="lang-badge" style="background-color: rgba(255, 235, 59, 0.1); color: var(--accent-yellow);">اللغة الإنجليزية</span></td>
                            <td>28/05/2023</td>
                            <td><span style="color: var(--accent-yellow); font-weight: 600;">0%</span></td>
                            <td>
                                <button class="btn btn-primary btn-sm" onclick="showReport('اختبار اللغة الإنجليزية', 30, 25, 5, '82%')">عرض النتائج</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- نافذة النتائج المنبثقة -->
    <div id="reportModal" class="modal">
        <h3 id="modalExamName"></h3>
        <p><strong>عدد الأسئلة الكلية:</strong> <span id="totalQuestions"></span></p>
        <p><strong>عدد الإجابات الصحيحة:</strong> <span id="correctAnswers"></span></p>
        <p><strong>عدد الإجابات الخاطئة:</strong> <span id="incorrectAnswers"></span></p>
        <p><strong>درجة الامتحان:</strong> <span id="examGrade"></span></p>
        <button class="btn btn-danger" onclick="closeReport()">إغلاق</button>
    </div>
    <div id="modalOverlay" class="modal-overlay"></div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // عند تحميل الصفحة، عرض لوحة التحكم كصفحة افتراضية
        window.addEventListener('load', function() {
            // تهيئة الرسوم البيانية
            initCharts();
        });

        // تهيئة الرسوم البيانية
        function initCharts() {
            // رسم بياني للتقدم الشهري
            const monthlyCtx = document.getElementById('monthlyProgressChart').getContext('2d');
            const monthlyChart = new Chart(monthlyCtx, {
                type: 'line',
                data: {
                    labels: ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو'],
                    datasets: [{
                        label: 'المعدل الشهري',
                        data: [65, 70, 72, 78, 80, 85],
                        borderColor: 'var(--orange-yellow-crayola)',
                        backgroundColor: 'rgba(255, 193, 7, 0.1)',
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                            rtl: true,
                            labels: {
                                color: 'var(--white2)'
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: false,
                            min: 50,
                            max: 100,
                            grid: {
                                color: 'var(--jet)'
                            },
                            ticks: {
                                color: 'var(--light-gray70)'
                            }
                        },
                        x: {
                            grid: {
                                color: 'var(--jet)'
                            },
                            ticks: {
                                color: 'var(--light-gray70)'
                            }
                        }
                    }
                }
            });

            // رسم بياني للمقارنة
            const comparisonCtx = document.getElementById('comparisonChart').getContext('2d');
            const comparisonChart = new Chart(comparisonCtx, {
                type: 'bar',
                data: {
                    labels: ['الرياضيات', 'اللغة العربية', 'العلوم', 'الجغرافيا', 'التاريخ', 'الإنجليزية'],
                    datasets: [
                        {
                            label: 'أنت',
                            data: [85, 78, 65, 92, 88, 82],
                            backgroundColor: [
                                'var(--orange-yellow-crayola)',
                                'var(--accent-green)',
                                'var(--accent-orange)',
                                'var(--accent-purple)',
                                'var(--accent-teal)',
                                'var(--accent-yellow)'
                            ]
                        },
                        {
                            label: 'متوسط الفصل',
                            data: [75, 72, 70, 85, 80, 75],
                            backgroundColor: 'var(--light-gray70)'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                            rtl: true,
                            labels: {
                                color: 'var(--white2)'
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100,
                            grid: {
                                color: 'var(--jet)'
                            },
                            ticks: {
                                color: 'var(--light-gray70)'
                            }
                        },
                        x: {
                            grid: {
                                color: 'var(--jet)'
                            },
                            ticks: {
                                color: 'var(--light-gray70)'
                            }
                        }
                    }
                }
            });

            // رسم بياني لتقدم اللغات البرمجية
            const programmingCtx = document.getElementById('programmingProgressChart').getContext('2d');
            const programmingChart = new Chart(programmingCtx, {
                type: 'radar',
                data: {
                    labels: ['HTML', 'CSS', 'JavaScript', 'Python', 'Java'],
                    datasets: [{
                        label: 'مستوى الإتقان',
                        data: [95, 90, 80, 75, 60],
                        backgroundColor: 'rgba(255, 193, 7, 0.2)',
                        borderColor: 'var(--orange-yellow-crayola)',
                        pointBackgroundColor: 'var(--orange-yellow-crayola)',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: 'var(--orange-yellow-crayola)'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        r: {
                            angleLines: {
                                color: 'var(--jet)'
                            },
                            grid: {
                                color: 'var(--jet)'
                            },
                            suggestedMin: 0,
                            suggestedMax: 100,
                            ticks: {
                                color: 'var(--light-gray70)',
                                backdropColor: 'transparent'
                            },
                            pointLabels: {
                                color: 'var(--white2)'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            labels: {
                                color: 'var(--white2)'
                            }
                        }
                    }
                }
            });

            // رسم بياني لساعات البرمجة الأسبوعية
            const hoursCtx = document.getElementById('programmingHoursChart').getContext('2d');
            const hoursChart = new Chart(hoursCtx, {
                type: 'bar',
                data: {
                    labels: ['الأحد', 'الإثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'],
                    datasets: [{
                        label: 'ساعات البرمجة',
                        data: [3, 5, 4, 6, 5, 2, 4],
                        backgroundColor: [
                            'rgba(227, 79, 38, 0.7)',
                            'rgba(21, 114, 182, 0.7)',
                            'rgba(247, 223, 30, 0.7)',
                            'rgba(55, 118, 171, 0.7)',
                            'rgba(0, 115, 150, 0.7)',
                            'rgba(227, 79, 38, 0.7)',
                            'rgba(21, 114, 182, 0.7)'
                        ],
                        borderColor: [
                            '#E34F26',
                            '#1572B6',
                            '#F7DF1E',
                            '#3776AB',
                            '#007396',
                            '#E34F26',
                            '#1572B6'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'var(--jet)'
                            },
                            ticks: {
                                color: 'var(--light-gray70)'
                            }
                        },
                        x: {
                            grid: {
                                color: 'var(--jet)'
                            },
                            ticks: {
                                color: 'var(--light-gray70)'
                            }
                        }
                    }
                }
            });
        }

        function showReport(examName, totalQuestions, correctAnswers, incorrectAnswers, examGrade) {
            document.getElementById('modalExamName').textContent = examName;
            document.getElementById('totalQuestions').textContent = totalQuestions;
            document.getElementById('correctAnswers').textContent = correctAnswers;
            document.getElementById('incorrectAnswers').textContent = incorrectAnswers;
            document.getElementById('examGrade').textContent = examGrade;

            document.getElementById('reportModal').style.display = 'block';
            document.getElementById('modalOverlay').style.display = 'block';
        }

        function closeReport() {
            document.getElementById('reportModal').style.display = 'none';
            document.getElementById('modalOverlay').style.display = 'none';
        }
    </script>
</body>
</html>