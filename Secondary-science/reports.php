<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظام الإدارة الأكاديمية - تقارير الأداء</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
</head>
<body>
    <div class="main-content">
        <div class="top-navbar">
            <div class="user-menu">
                <div class="notification-icon">
                    <i class="fas fa-bell"></i>
                    <span class="badge">3</span>
                </div>
                <div class="user-info">
                    <img src="https://via.placeholder.com/40" alt="صورة المستخدم">
                    <span>أحمد محمد</span>
                </div>
            </div>
        </div>

        <div class="page-content">
            <h1 class="page-title"><i class="fas fa-chart-line"></i> تقارير الأداء</h1>
            
            <div class="stats-cards">
                <div class="stat-card">
                    <div class="icon">
                        <i class="fas fa-square-root-alt"></i>
                    </div>
                    <h3>85%</h3>
                    <p>الرياضيات</p>
                </div>
                <div class="stat-card">
                    <div class="icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3>78%</h3>
                    <p>اللغة العربية</p>
                </div>
                <div class="stat-card">
                    <div class="icon">
                        <i class="fas fa-atom"></i>
                    </div>
                    <h3>65%</h3>
                    <p>العلوم</p>
                </div>
                <div class="stat-card">
                    <div class="icon">
                        <i class="fas fa-globe-africa"></i>
                    </div>
                    <h3>92%</h3>
                    <p>الجغرافيا</p>
                </div>
                <div class="stat-card">
                    <div class="icon">
                        <i class="fas fa-history"></i>
                    </div>
                    <h3>88%</h3>
                    <p>التاريخ</p>
                </div>
                <div class="stat-card">
                    <div class="icon">
                        <i class="fas fa-language"></i>
                    </div>
                    <h3>82%</h3>
                    <p>اللغة الإنجليزية</p>
                </div>
            </div>

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
                
                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 20px; margin-bottom: 20px;">
                    <!-- بطاقة المعدل العام -->
                    <div style="background: white; padding: 20px; border-radius: var(--border-radius); box-shadow: var(--box-shadow); text-align: center;">
                        <h4 style="margin-bottom: 15px;">المعدل العام</h4>
                        <div class="progress-ring">
                            <svg width="150" height="150" viewBox="0 0 36 36">
                                <circle cx="18" cy="18" r="16" fill="none" stroke="#eee" stroke-width="3"></circle>
                                <circle cx="18" cy="18" r="16" fill="none" stroke="var(--primary-color)" stroke-width="3" 
                                        stroke-dasharray="100 100" stroke-dashoffset="calc(100 - 85)" stroke-linecap="round"></circle>
                            </svg>
                            <div class="progress-text">85%</div>
                        </div>
                        <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px;">
                            <i class="fas fa-arrow-up" style="color: var(--success-color); margin-left: 5px;"></i>
                            <span style="color: var(--success-color);">+5% عن الشهر الماضي</span>
                        </div>
                    </div>
                    
                    <!-- تقدم المواد -->
                    <div style="background: white; padding: 20px; border-radius: var(--border-radius); box-shadow: var(--box-shadow);">
                        <h4 style="margin-bottom: 20px;">تقدم المواد الدراسية</h4>
                        <div style="margin-bottom: 15px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                                <span>الرياضيات</span>
                                <span>85% (ممتاز)</span>
                            </div>
                            <div style="height: 10px; background: linear-gradient(90deg, var(--primary-color) 85%, #f0f0f0 0%); border-radius: 5px;"></div>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                                <span>اللغة العربية</span>
                                <span>78% (جيد جداً)</span>
                            </div>
                            <div style="height: 10px; background: linear-gradient(90deg, var(--success-color) 78%, #f0f0f0 0%); border-radius: 5px;"></div>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                                <span>العلوم</span>
                                <span>65% (جيد)</span>
                            </div>
                            <div style="height: 10px; background: linear-gradient(90deg, var(--warning-color) 65%, #f0f0f0 0%); border-radius: 5px;"></div>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                                <span>الجغرافيا</span>
                                <span>92% (ممتاز)</span>
                            </div>
                            <div style="height: 10px; background: linear-gradient(90deg, #9C27B0 92%, #f0f0f0 0%); border-radius: 5px;"></div>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                                <span>التاريخ</span>
                                <span>88% (ممتاز)</span>
                            </div>
                            <div style="height: 10px; background: linear-gradient(90deg, #4CAF50 88%, #f0f0f0 0%); border-radius: 5px;"></div>
                        </div>
                        <div>
                            <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                                <span>اللغة الإنجليزية</span>
                                <span>82% (جيد جداً)</span>
                            </div>
                            <div style="height: 10px; background: linear-gradient(90deg, #FF9800 82%, #f0f0f0 0%); border-radius: 5px;"></div>
                        </div>
                    </div>
                </div>
                
                <!-- الرسوم البيانية -->
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                    <div style="background: white; padding: 20px; border-radius: var(--border-radius); box-shadow: var(--box-shadow);">
                        <h4 style="margin-bottom: 20px;">التقدم الشهري</h4>
                        <div style="height: 250px; display: flex; align-items: center; justify-content: center; background: #f9f9f9; border-radius: 8px;">
                            <canvas id="monthlyProgressChart"></canvas>
                        </div>
                    </div>
                    <div style="background: white; padding: 20px; border-radius: var(--border-radius); box-shadow: var(--box-shadow);">
                        <h4 style="margin-bottom: 20px;">مقارنة مع المتوسط العام</h4>
                        <div style="height: 250px; display: flex; align-items: center; justify-content: center; background: #f9f9f9; border-radius: 8px;">
                            <canvas id="comparisonChart"></canvas>
                        </div>
                    </div>
                </div>
                
                <!-- نقاط القوة والضعف -->
                <div style="background: white; padding: 25px; border-radius: var(--border-radius); box-shadow: var(--box-shadow); margin-bottom: 20px;">
                    <h4 style="margin-bottom: 20px;">تحليل الأداء</h4>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                        <div>
                            <h5 style="color: var(--success-color); margin-bottom: 15px; display: flex; align-items: center;">
                                <i class="fas fa-thumbs-up" style="margin-left: 8px;"></i> نقاط القوة
                            </h5>
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
                        <div>
                            <h5 style="color: var(--danger-color); margin-bottom: 15px; display: flex; align-items: center;">
                                <i class="fas fa-exclamation-triangle" style="margin-left: 8px;"></i> نقاط تحتاج تحسين
                            </h5>
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
                <div style="background: white; padding: 25px; border-radius: var(--border-radius); box-shadow: var(--box-shadow);">
                    <h4 style="margin-bottom: 20px; display: flex; align-items: center;">
                        <i class="fas fa-lightbulb" style="color: var(--warning-color); margin-left: 8px;"></i> توصيات لتحسين الأداء
                    </h4>
                    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 15px;">
                        <div class="recommendation-card" style="background: #FFF8E1; border-right-color: var(--warning-color);">
                            <h5>التركيز على دروس الفيزياء</h5>
                            <p>نوصي بحضور 3 حصص إضافية في الفيزياء خلال الشهر القادم</p>
                        </div>
                        <div class="recommendation-card" style="background: #E3F2FD; border-right-color: var(--primary-color);">
                            <h5>ممارسة التعبير الكتابي</h5>
                            <p>كتابة موضوع تعبير أسبوعي مع مراجعة من المدرس</p>
                        </div>
                        <div class="recommendation-card" style="background: #F3E5F5; border-right-color: #9C27B0;">
                            <h5>حل المسائل اللفظية</h5>
                            <p>حل 5 مسائل لفظية يومياً مع التركيز على فهم السؤال</p>
                        </div>
                        <div class="recommendation-card" style="background: #E8F5E9; border-right-color: #4CAF50;">
                            <h5>تحسين المحادثة الإنجليزية</h5>
                            <p>ممارسة المحادثة لمدة 30 دقيقة يومياً مع زملاء الدراسة</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-section">
                <div class="section-header">
                    <h3>تفاصيل الاختبارات حسب المادة</h3>
                    <select class="form-control" style="width: 200px; display: inline-block;">
                        <option>جميع المواد</option>
                        <option>الرياضيات</option>
                        <option>اللغة العربية</option>
                        <option>العلوم</option>
                        <option>الجغرافيا</option>
                        <option>التاريخ</option>
                        <option>اللغة الإنجليزية</option>
                    </select>
                </div>
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
                            <td><span class="badge" style="background: rgba(67, 97, 238, 0.1); color: var(--primary-color);">الرياضيات</span></td>
                            <td>15/06/2023</td>
                            <td><span style="color: var(--success-color); font-weight: 600;">92%</span></td>
                            <td>
                                <button class="btn btn-primary btn-sm" onclick="showReport('اختبار الرياضيات النهائي', 50, 46, 4, '92%')">عرض النتائج</button>
                            </td>
                        </tr>
                        <tr>
                            <td>اختبار اللغة العربية</td>
                            <td><span class="badge" style="background: rgba(76, 201, 240, 0.1); color: var(--success-color);">اللغة العربية</span></td>
                            <td>10/06/2023</td>
                            <td><span style="color: var(--success-color); font-weight: 600;">88%</span></td>
                            <td>
                                <button class="btn btn-primary btn-sm" onclick="showReport('اختبار اللغة العربية', 40, 35, 5, '88%')">عرض النتائج</button>
                            </td>
                        </tr>
                        <tr>
                            <td>اختبار العلوم الشهري</td>
                            <td><span class="badge" style="background: rgba(248, 150, 30, 0.1); color: var(--warning-color);">العلوم</span></td>
                            <td>05/06/2023</td>
                            <td><span style="color: var(--warning-color); font-weight: 600;">76%</span></td>
                            <td>
                                <button class="btn btn-primary btn-sm" onclick="showReport('اختبار العلوم الشهري', 30, 23, 7, '76%')">عرض النتائج</button>
                            </td>
                        </tr>
                        <tr>
                            <td>اختبار الجغرافيا</td>
                            <td><span class="badge" style="background: rgba(156, 39, 176, 0.1); color: #9C27B0;">الجغرافيا</span></td>
                            <td>03/06/2023</td>
                            <td><span style="color: #9C27B0; font-weight: 600;">92%</span></td>
                            <td>
                                <button class="btn btn-primary btn-sm" onclick="showReport('اختبار الجغرافيا', 25, 23, 2, '92%')">عرض النتائج</button>
                            </td>
                        </tr>
                        <tr>
                            <td>اختبار التاريخ</td>
                            <td><span class="badge" style="background: rgba(76, 175, 80, 0.1); color: #4CAF50;">التاريخ</span></td>
                            <td>01/06/2023</td>
                            <td><span style="color: #4CAF50; font-weight: 600;">88%</span></td>
                            <td>
                                <button class="btn btn-primary btn-sm" onclick="showReport('اختبار التاريخ', 20, 18, 2, '88%')">عرض النتائج</button>
                            </td>
                        </tr>
                        <tr>
                            <td>اختبار اللغة الإنجليزية</td>
                            <td><span class="badge" style="background: rgba(255, 152, 0, 0.1); color: #FF9800;">اللغة الإنجليزية</span></td>
                            <td>28/05/2023</td>
                            <td><span style="color: #FF9800; font-weight: 600;">82%</span></td>
                            <td>
                                <button class="btn btn-primary btn-sm" onclick="showReport('اختبار اللغة الإنجليزية', 30, 25, 5, '82%')">عرض النتائج</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal for displaying the report -->
    <div id="reportModal" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; border-radius: var(--border-radius); box-shadow: var(--box-shadow); z-index: 1000;">
        <h3 id="modalExamName"></h3>
        <p><strong>عدد الأسئلة الكلية:</strong> <span id="totalQuestions"></span></p>
        <p><strong>عدد الإجابات الصحيحة:</strong> <span id="correctAnswers"></span></p>
        <p><strong>عدد الإجابات الخاطئة:</strong> <span id="incorrectAnswers"></span></p>
        <p><strong>درجة الامتحان:</strong> <span id="examGrade"></span></p>
        <button class="btn btn-danger" onclick="closeReport()">إغلاق</button>
    </div>
    <div id="modalOverlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 999;" onclick="closeReport()"></div>

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
            const monthlyCtx = document.createElement('canvas');
            monthlyCtx.id = 'monthlyProgressChart';
            document.querySelector('#monthlyProgressChart').replaceWith(monthlyCtx);
            
            const monthlyChart = new Chart(monthlyCtx, {
                type: 'line',
                data: {
                    labels: ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو'],
                    datasets: [{
                        label: 'المعدل الشهري',
                        data: [65, 70, 72, 78, 80, 85],
                        borderColor: 'var(--primary-color)',
                        backgroundColor: 'rgba(67, 97, 238, 0.1)',
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                            rtl: true
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: false,
                            min: 50,
                            max: 100
                        }
                    }
                }
            });

            // رسم بياني للمقارنة
            const comparisonCtx = document.createElement('canvas');
            comparisonCtx.id = 'comparisonChart';
            document.querySelector('#comparisonChart').replaceWith(comparisonCtx);
            
            const comparisonChart = new Chart(comparisonCtx, {
                type: 'bar',
                data: {
                    labels: ['الرياضيات', 'اللغة العربية', 'العلوم', 'الجغرافيا', 'التاريخ', 'الإنجليزية'],
                    datasets: [
                        {
                            label: 'أنت',
                            data: [85, 78, 65, 92, 88, 82],
                            backgroundColor: [
                                'var(--primary-color)',
                                'var(--success-color)',
                                'var(--warning-color)',
                                '#9C27B0',
                                '#4CAF50',
                                '#FF9800'
                            ]
                        },
                        {
                            label: 'متوسط الفصل',
                            data: [75, 72, 70, 85, 80, 75],
                            backgroundColor: 'var(--gray-color)'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                            rtl: true
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100
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