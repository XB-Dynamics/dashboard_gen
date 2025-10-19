<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius AI 2025 - نظام تقارير الطلاب</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap');

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
            --bg-gradient-gold1: linear-gradient(
                to bottom right,
                hsl(43, 100%, 60%) 0%,
                hsla(43, 100%, 60%, 0.3) 50%
            );
            --bg-gradient-gold2: linear-gradient(
                135deg,
                hsla(43, 100%, 60%, 0.251) 0%,
                hsla(43, 100%, 60%, 0) 59.86%
                ),
                hsl(240, 2%, 13%);
            --border-gradient-onyx: linear-gradient(
                to bottom right,
                hsl(0, 0%, 25%) 0%,
                hsla(0, 0%, 25%, 0) 50%
            );
            --text-gradient-gold: linear-gradient(
                to right,
                hsl(43, 100%, 60%),
                hsl(38, 100%, 50%)
            );

            --jet: hsl(0, 0%, 22%);
            --onyx: hsl(240, 1%, 17%);
            --eerie-black1: hsl(240, 2%, 13%);
            --eerie-black2: hsl(240, 2%, 12%);
            --smoky-black: hsl(0, 0%, 7%);
            --white1: hsl(0, 0%, 100%);
            --white2: hsl(0, 0%, 98%);
            --gold-crayola: hsl(43, 100%, 60%);
            --vegas-gold: hsl(43, 80%, 50%);
            --light-gray: hsl(0, 0%, 84%);
            --light-gray70: hsla(0, 0%, 84%, 0.7);
            --bittersweet-shimmer: hsl(0, 43%, 51%);

            --ff-poppins: "Poppins", sans-serif;
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

            --shadow1: -4px 8px极客 24px hsla(0, 0%, 0%, 0.25);
            --shadow2: 0px 16px 30px hsla(0, 0%, 0%, 0.25);
            --shadow3: 0px 16px 40px hsla(0, 0%, 0%, 极客 0.25);
            --shadow4: 0px 25px 50px hsla(0, 0%, 0%, 0.15);
            --shadow5: 0px 24px 80px hsla(0, 0%, 0%, 0.25);

            --transition1: 0.25s ease;
            --transition2: 0.5s ease-in-out;
            
            --primary-color: var(--gold-crayola);
            --secondary-color: var(--vegas-gold);
            --background极客-color: var(--smoky-black);
            --user-chat-color: var(--onyx);
            --bot-chat-color: var(--eerie-black1);
            --text-color: var(--white2);
            --input-background: var(--jet);
            --border-color: var(--jet);
        }

        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--ff-tajawal);
        }

        body {
            background: var(--smoky-black);
            color: var(--text-color);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        header {
            background: var(--border-gradient-onyx);
            color: var(--white2);
            padding: 15px;
            text-align: center;
            box-shadow: var(--shadow1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            z-index: 2;
            border-bottom: 1px solid var(--jet);
        }

        .logo-container {
            display: flex;
            align-items: center;
            flex: 1;
            justify-content: center;
        }

        .logo-container h1 {
            margin: 0 10px;
            font-size: var(--fs2);
            background: var(--text-gradient-gold);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: var(--fw600);
        }

        .header-actions {
            display: flex;
            gap: 10px;
        }

        .header-button {
            background: var(--border-gradient-onyx);
            border: none;
            color: var(--gold-crayola);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
          display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition1);
            font-size: 1.2rem;
            position: relative;
            z-index: 1;
        }

        .header-button::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .header-button:hover {
            transform: rotate(15deg);
            color: var(--white2);
            background: var(--bg-gradient-gold2);
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


        .main-container {
            display: flex;
            flex: 1;
            overflow: hidden;
            position: relative;
            padding: 20px;
        }

        .search-section {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: var(--bg-gradient-jet);
            border-radius: 14px;
            box-shadow: var(--shadow2);
        }

        .search-title {
            text-align: center;
            margin-bottom: 20px;
            font-size: var(--fs2);
            background: var(--text-gradient-gold);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: var(--fw600);
        }

        .search-form {
            display: flex;
            gap: 10px;
            margin-bottom: 30px;
        }

        .search-input {
            flex: 1;
            padding: 12px 15px;
            border: none;
            outline: none;
            background: var(--border-gradient-onyx);
            color: var(--white2);
            border-radius: 8px;
            font-size: var(--fs5);
            position: relative;
            z-index: 1;
        }

        .search-input::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .search-button {
            background: var(--border-gradient-onyx);
            border: none;
            color: var(--gold-crayola);
            padding: 0 20px;
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition1);
            font-weight: var(--fw500);
            position: relative;
            z-index: 1;
        }

        .search-button::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .search-button:hover {
            background: var(--bg-gradient-gold2);
            color: var(--white2);
        }

        .students-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .student-card {
            background: var(--border-gradient-onyx);
            border-radius: 12px;
            padding: 15px;
            text-align: center;
            transition: var(--transition1);
            cursor: pointer;
            position: relative;
            z-index: 1;
        }

        .student-card::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .student-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow3);
        }

        .student-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 15px;
            background: var(--text-gradient-gold);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: var(--smoky-black);
        }

        .student-name {
            font-size: var(--fs4);
            font-weight: var(--fw600);
            margin-bottom: 5px;
        }

        .student-id {
            font-size: var(--fs7);
            color: var(--light-gray70);
            margin-bottom: 10px;
        }

        .student-report-button {
            background: var(--border-gradient-onyx);
            border: none;
            color: var(--gold-crayola);
            padding: 8px 15px;
            border-radius: 20px;
            cursor: pointer;
            transition: var(--transition1);
            font-size: var(--fs7);
            position: relative;
            z-index: 1;
            margin-top: 10px;
            width: 100%;
        }

        .student-report-button::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .student-report-button:hover {
            background: var(--bg-gradient-gold2);
            color: var(--white2);
        }

        .no-results {
            text-align: center;
            padding: 40px;
            color: var(--light-gray70);
            font-size: var(--fs4);
        }

        footer {
            text-align: center;
            padding: 10px;
            background: var(--border-gradient-onyx);
            font-size: 12px;
            color: var(--light-gray70);
            border-top: 1px solid var(--jet);
            z-index: 1;
            margin-top: auto;
        }

        /* تحسينات للاستجابة */
        @media (max-width: 768px) {
            .main-container {
                padding: 15px;
            }
            
            .search-section {
                padding: 15px;
            }
            
            .search-form {
                flex-direction: column;
            }
            
            .students-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: 15px;
            }
        }

        @media (max-width: 576px) {
            .students-grid {
                grid-template-columns: 1fr;
            }
            
            header {
                padding: 10px;
            }
            
            .logo-container h1 {
                font-size: var(--fs4);
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo-container">
            <h1>Genius AI 2025 - نظام تقارير الطلاب</h1>
        </div>
    </header>
    <?php include 'header.php'; ?>

    <div class="main-container">
        <section class="search-section">
            <h2 class="search-title">البحث عن الطلاب</h2>
            <div class="search-form">
                <input type="text" class="search-input" placeholder="ابحث باسم الطالب أو الرقم التعريفي...">
                <button class="search-button">بحث</button>
            </div>
            
            <div class="students-grid">
                <!-- ستتم إضافة الطلاب ديناميكيًا باستخدام JavaScript -->
            </div>
        </section>
    </div>

    <footer>
        <p>© 2025 Genius AI - جميع الحقوق محفوظة</p>
    </footer>

    <script>
        // بيانات نموذجية للطلاب (يمكن استبدالها ببيانات حقيقية من قاعدة البيانات)
        const students = [
            { id: "2023001", name: "أحمد محمد" },
            { id: "2023002", name: "فاطمة عبد الله" },
            { id: "2023003", name: "يوسف محمود" },
            { id: "2023004", name: "سارة خالد" },
            { id: "2023005", name: "علي حسن" },
            { id: "2023006", name: "لمى إبراهيم" }
        ];

        // عناصر DOM
        const searchInput = document.querySelector('.search-input');
        const searchButton = document.querySelector('.search-button');
        const studentsGrid = document.querySelector('.students-grid');

        // دالة لفتح صفحة التقرير
        function viewReport(studentId) {
            // توجيه المستخدم إلى صفحة report.info.php مع معرّف الطالب
            window.location.href = `report.info.php?student_id=${studentId}`;
        }

        // عرض الطلاب في الشبكة
        function displayStudents(studentsArray) {
            studentsGrid.innerHTML = '';
            
            if (studentsArray.length === 0) {
                studentsGrid.innerHTML = '<div class="no-results">لا توجد نتائج للبحث</div>';
                return;
            }
            
            studentsArray.forEach(student => {
                const studentCard = document.createElement('div');
                studentCard.className = 'student-card';
                
                // الحرف الأول من الاسم للصورة الرمزية
                const firstLetter = student.name.charAt(0);
                
                studentCard.innerHTML = `
                    <div class="student-avatar">${firstLetter}</div>
                    <h3 class="student-name">${student.name}</h3>
                    <p class="student-id">${student.id}</p>
                    <button class="student-report-button" onclick="viewReport('${student.id}')">
                        <i class="fas fa-chart-bar"></i> عرض التقرير
                    </button>
                `;
                
                studentsGrid.appendChild(studentCard);
            });
        }

        // البحث عن الطلاب
        function searchStudents() {
            const searchTerm = searchInput.value.toLowerCase().trim();
            
            if (searchTerm === '') {
                displayStudents(students);
                return;
            }
            
            const filteredStudents = students.filter(student => 
                student.name.toLowerCase().includes(searchTerm) || 
                student.id.toLowerCase().includes(searchTerm)
            );
            
            displayStudents(filteredStudents);
        }

        // تهيئة الأحداث
        function initEvents() {
            // البحث عند النقر على زر البحث
            searchButton.addEventListener('click', searchStudents);
            
            // البحث أثناء الكتابة (بعد نصف ثانية من التوقف عن الكتابة)
            let searchTimeout;
            searchInput.addEventListener('input', function() {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(searchStudents, 500);
            });
        }
                // البحث عن الطلاب
        function searchStudents() {
            const searchTerm = searchInput.value.toLowerCase().trim();
            
            if (searchTerm === '') {
                displayStudents(students);
                return;
            }
            
            const filteredStudents = students.filter(student => 
                student.name.toLowerCase().includes(searchTerm) || 
                student.id.toLowerCase().includes(searchTerm)
            );
            
            displayStudents(filteredStudents);
        }

        // تهيئة الأحداث
        function initEvents() {
            // البحث عند النقر على زر البحث
            searchButton.addEventListener('click', searchStudents);
            
            // البحث أثناء الكتابة (بعد نصف ثانية من التوقف عن الكتابة)
            let searchTimeout;
            searchInput.addEventListener('input', function() {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(searchStudents, 500);
            });
            
            // إغلاق نموذج التقرير
            closeReportButton.addEventListener('click', closeReportModal);
            
            // إغلاق النموذج عند النقر خارج المحتوى
            reportModal.addEventListener('click', function(e) {
                if (e.target === reportModal) {
                    closeReportModal();
                }
            });
        }


        // تهيئة الصفحة
        function init() {
            displayStudents(students);
            initEvents();
            
            // جعل الدالة متاحة عالمياً للاستدعاء من الأزرار
            window.viewReport = viewReport;
        }

        // تشغيل التهيئة عند تحميل الصفحة
        document.addEventListener('DOMContentLoaded', init);
    </script>
</body>
</html>