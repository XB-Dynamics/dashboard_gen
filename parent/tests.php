<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الاختبارات وسجل النتائج</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/main.css">

</head>
<body>
    <div class="tests-container">
        <h1 class="page-title"><i class="fas fa-clipboard-list"></i> الاختبارات وسجل النتائج</h1>
        
        <!-- تبويبات أنواع الاختبارات وسجل النتائج -->
        <div class="tests-tabs">
            <div class="test-tab active" data-tab="monthly">
                <i class="fas fa-calendar-alt"></i> الاختبارات الشهرية
                <span class="badge">3</span>
            </div>
            <div class="test-tab" data-tab="general">
                <i class="fas fa-clipboard-check"></i> الاختبارات العامة
                <span class="badge">5</span>
            </div>
            <div class="test-tab" data-tab="personal">
                <i class="fas fa-user-edit"></i> الاختبارات الشخصية
            </div>
            <div class="test-tab" data-tab="results">
                <i class="fas fa-poll"></i> سجل النتائج
            </div>
        </div>
        
        <!-- فلترة الاختبارات -->
        <div class="filters-container" id="tests-filters">
            <div class="filter-group">
                <label>المادة</label>
                <select id="subjectFilter">
                    <option value="all">جميع المواد</option>
                    <option value="math">الرياضيات</option>
                    <option value="arabic">اللغة العربية</option>
                    <option value="science">العلوم</option>
                </select>
            </div>
            <div class="filter-group">
                <label>الحالة</label>
                <select id="statusFilter">
                    <option value="all">جميع الحالات</option>
                    <option value="upcoming">قادمة</option>
                    <option value="completed">مكتملة</option>
                    <option value="inprogress">قيد التقدم</option>
                </select>
            </div>
            <div class="filter-group">
                <label>تاريخ البدء</label>
                <input type="date" id="dateFilter">
            </div>
            <div class="filter-group">
                <button class="btn btn-primary" style="margin-top: 23px;">
                    <i class="fas fa-filter"></i> تصفية
                </button>
            </div>
        </div>
        
        <!-- فلترة سجل النتائج -->
        <div class="filters-container" id="results-filters" style="display: none;">
            <div class="filter-group">
                <label>المادة</label>
                <select id="resultsSubjectFilter">
                    <option value="all">جميع المواد</option>
                    <option value="math">الرياضيات</option>
                    <option value="arabic">اللغة العربية</option>
                    <option value="science">العلوم</option>
                </select>
            </div>
            <div class="filter-group">
                <label>الفترة</label>
                <select id="resultsPeriodFilter">
                    <option value="all">جميع الفترات</option>
                    <option value="last-month">آخر شهر</option>
                    <option value="last-3months">آخر 3 أشهر</option>
                    <option value="last-year">آخر سنة</option>
                </select>
            </div>
            <div class="filter-group">
                <label>ترتيب النتائج</label>
                <select id="resultsSortFilter">
                    <option value="newest">الأحدث أولاً</option>
                    <option value="oldest">الأقدم أولاً</option>
                    <option value="highest">الأعلى درجة</option>
                    <option value="lowest">الأقل درجة</option>
                </select>
            </div>
            <div class="filter-group">
                <button class="btn btn-primary" style="margin-top: 23px;">
                    <i class="fas fa-filter"></i> تصفية النتائج
                </button>
            </div>
        </div>
        
        <!-- محتوى الاختبارات الشهرية -->
        <div class="test-content active" id="monthly-tests">
            <!-- اختبار 1 -->
            <div class="test-card monthly">
                <span class="test-status status-upcoming">قادم</span>
                <div class="test-header">
                    <div>
                        <h3 class="test-title">اختبار الرياضيات الشهري - يونيو</h3>
                        <span class="test-subject">الرياضيات</span>
                    </div>
                    <div>
                        <span style="color: var(--gray-color); font-size: 0.9rem;">20/06/2023</span>
                    </div>
                </div>
                <p class="test-description">اختبار شهري يشمل جميع دروس الرياضيات للوحدة الثالثة (الجبر والهندسة) للصف الثالث الثانوي.</p>
                <div class="test-meta">
                    <div class="test-meta-item">
                        <i class="fas fa-clock"></i>
                        <span>60 دقيقة</span>
                    </div>
                    <div class="test-meta-item">
                        <i class="fas fa-question-circle"></i>
                        <span>30 سؤال</span>
                    </div>
                    <div class="test-meta-item">
                        <i class="fas fa-calendar-alt"></i>
                        <span>20 يونيو 2023 - 10:00 ص</span>
                    </div>
                </div>
                <button class="btn btn-primary">
                    <i class="fas fa-info-circle"></i> التفاصيل
                </button>
            </div>
            
            <!-- اختبار 2 -->
            <div class="test-card monthly">
                <span class="test-status status-completed">مكتمل</span>
                <div class="test-header">
                    <div>
                        <h3 class="test-title">اختبار اللغة العربية الشهري - مايو</h3>
                        <span class="test-subject">اللغة العربية</span>
                    </div>
                    <div>
                        <span style="color: var(--gray-color); font-size: 0.9rem;">15/05/2023</span>
                    </div>
                </div>
                <p class="test-description">اختبار شهري في النحو والأدب للصف الثالث الثانوي، يشمل دروس النحو من الوحدة الثانية.</p>
                <div class="test-meta">
                    <div class="test-meta-item">
                        <i class="fas fa-clock"></i>
                        <span>45 دقيقة</span>
                    </div>
                    <div class="test-meta-item">
                        <i class="fas fa-question-circle"></i>
                        <span>25 سؤال</span>
                    </div>
                    <div class="test-meta-item">
                        <i class="fas fa-percentage"></i>
                        <span>النتيجة: 85%</span>
                    </div>
                </div>
                <button class="btn btn-outline">
                    <i class="fas fa-chart-bar"></i> عرض النتائج
                </button>
            </div>
        </div>
        
        <!-- محتوى الاختبارات العامة -->
        <div class="test-content" id="general-tests">
            <!-- اختبار 1 -->
            <div class="test-card general">
                <span class="test-status status-upcoming">متاح</span>
                <div class="test-header">
                    <div>
                        <h3 class="test-title">اختبار تجريبي شامل - الرياضيات</h3>
                        <span class="test-subject">الرياضيات</span>
                    </div>
                    <div>
                        <span style="color: var(--gray-color); font-size: 0.9rem;">غير محدد</span>
                    </div>
                </div>
                <p class="test-description">اختبار تجريبي شامل لجميع فصول الرياضيات للصف الثالث الثانوي، يشمل جميع الوحدات الدراسية.</p>
                <div class="test-meta">
                    <div class="test-meta-item">
                        <i class="fas fa-clock"></i>
                        <span>120 دقيقة</span>
                    </div>
                    <div class="test-meta-item">
                        <i class="fas fa-question-circle"></i>
                        <span>50 سؤال</span>
                    </div>
                    <div class="test-meta-item">
                        <i class="fas fa-star"></i>
                        <span>مستوى: متقدم</span>
                    </div>
                </div>
                <button class="btn btn-success">
                    <i class="fas fa-play"></i> بدء الاختبار
                </button>
            </div>
            
            <!-- اختبار 2 -->
            <div class="test-card general">
                <span class="test-status status-completed">مكتمل</span>
                <div class="test-header">
                    <div>
                        <h3 class="test-title">اختبار القواعد النحوية</h3>
                        <span class="test-subject">اللغة العربية</span>
                    </div>
                    <div>
                        <span style="color: var(--gray-color); font-size: 0.9rem;">10/06/2023</span>
                    </div>
                </div>
                <p class="test-description">اختبار شامل لقواعد اللغة العربية للصف الثالث الثانوي، يشمل النحو والصرف.</p>
                <div class="test-meta">
                    <div class="test-meta-item">
                        <i class="fas fa-clock"></i>
                        <span>90 دقيقة</span>
                    </div>
                    <div class="test-meta-item">
                        <i class="fas fa-question-circle"></i>
                        <span>40 سؤال</span>
                    </div>
                    <div class="test-meta-item">
                        <i class="fas fa-percentage"></i>
                        <span>النتيجة: 78%</span>
                    </div>
                </div>
                <button class="btn btn-outline">
                    <i class="fas fa-chart-bar"></i> عرض النتائج
                </button>
            </div>
        </div>
        
        <!-- محتوى الاختبارات الشخصية -->
        <div class="test-content" id="personal-tests">
            <!-- اختبار 1 -->
            <div class="test-card personal">
                <span class="test-status status-inprogress">قيد التقدم</span>
                <div class="test-header">
                    <div>
                        <h3 class="test-title">اختبار المتابعة الشخصية - الرياضيات</h3>
                        <span class="test-subject">الرياضيات</span>
                    </div>
                    <div>
                        <span style="color: var(--gray-color); font-size: 0.9rem;">15/06/2023</span>
                    </div>
                </div>
                <p class="test-description">اختبار شخصي تم إنشاؤه بناءً على نقاط الضعف في الاختبارات السابقة، يركز على الجبر وحل المعادلات.</p>
                <div class="test-meta">
                    <div class="test-meta-item">
                        <i class="fas fa-clock"></i>
                        <span>45 دقيقة</span>
                    </div>
                    <div class="test-meta-item">
                        <i class="fas fa-question-circle"></i>
                        <span>20 سؤال</span>
                    </div>
                    <div class="test-meta-item">
                        <i class="fas fa-check-circle"></i>
                        <span>8/20 مكتمل</span>
                    </div>
                </div>
                <button class="btn btn-accent">
                    <i class="fas fa-play"></i> استكمال الاختبار
                </button>
            </div>
            
            <!-- اختبار 2 -->
            <div class="test-card personal">
                <span class="test-status status-completed">مكتمل</span>
                <div class="test-header">
                    <div>
                        <h3 class="test-title">اختبار تحسين الأداء - العلوم</h3>
                        <span class="test-subject">العلوم</span>
                    </div>
                    <div>
                        <span style="color: var(--gray-color); font-size: 0.9rem;">05/06/2023</span>
                    </div>
                </div>
                <p class="test-description">اختبار شخصي تم إنشاؤه بناءً على توصيات المعلم لتحسين الأداء في مادة العلوم.</p>
                <div class="test-meta">
                    <div class="test-meta-item">
                        <i class="fas fa-clock"></i>
                        <span>30 دقيقة</span>
                    </div>
                    <div class="test-meta-item">
                        <i class="fas fa-question-circle"></i>
                        <span>15 سؤال</span>
                    </div>
                    <div class="test-meta-item">
                        <i class="fas fa-percentage"></i>
                        <span>النتيجة: 92%</span>
                    </div>
                </div>
                <button class="btn btn-outline">
                    <i class="fas fa-chart-bar"></i> عرض النتائج
                </button>
            </div>
        </div>
        
        <!-- محتوى سجل النتائج -->
        <div class="test-content" id="results-tests">
            <div class="test-card">
                <h3 style="margin-bottom: 20px; color: var(--dark-color);">سجل نتائج الاختبارات</h3>
                
                <table class="results-table">
                    <thead>
                        <tr>
                            <th>اسم الاختبار</th>
                            <th>المادة</th>
                            <th>التاريخ</th>
                            <th>الدرجة</th>
                            <th>التقييم</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>اختبار الرياضيات الشهري - يونيو</td>
                            <td>الرياضيات</td>
                            <td>20/06/2023</td>
                            <td>85%</td>
                            <td><span class="result-grade grade-excellent">ممتاز</span></td>
                            <td><button class="result-details-btn"><i class="fas fa-eye"></i> التفاصيل</button></td>
                        </tr>
                        <tr>
                            <td>اختبار اللغة العربية الشهري - مايو</td>
                            <td>اللغة العربية</td>
                            <td>15/05/2023</td>
                            <td>78%</td>
                            <td><span class="result-grade grade-good">جيد جداً</span></td>
                            <td><button class="result-details-btn"><i class="fas fa-eye"></i> التفاصيل</button></td>
                        </tr>
                        <tr>
                            <td>اختبار تحسين الأداء - العلوم</td>
                            <td>العلوم</td>
                            <td>05/06/2023</td>
                            <td>92%</td>
                            <td><span class="result-grade grade-excellent">ممتاز</span></td>
                            <td><button class="result-details-btn"><i class="fas fa-eye"></i> التفاصيل</button></td>
                        </tr>
                        <tr>
                            <td>اختبار القواعد النحوية</td>
                            <td>اللغة العربية</td>
                            <td>10/06/2023</td>
                            <td>65%</td>
                            <td><span class="result-grade grade-average">متوسط</span></td>
                            <td><button class="result-details-btn"><i class="fas fa-eye"></i> التفاصيل</button></td>
                        </tr>
                        <tr>
                            <td>اختبار تجريبي شامل - الرياضيات</td>
                            <td>الرياضيات</td>
                            <td>22/05/2023</td>
                            <td>58%</td>
                            <td><span class="result-grade grade-poor">ضعيف</span></td>
                            <td><button class="result-details-btn"><i class="fas fa-eye"></i> التفاصيل</button></td>
                        </tr>
                    </tbody>
                </table>
                
                <div style="display: flex; justify-content: space-between; margin-top: 20px;">
                    <div>
                        <span style="color: var(--gray-color); font-size: 0.9rem;">إجمالي الاختبارات: 5</span>
                    </div>
                    <div>
                        <span style="color: var(--gray-color); font-size: 0.9rem;">متوسط الدرجات: 75.6%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sub-report Modal -->
    <div id="subReportModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
        <div style="background: white; padding: 25px; border-radius: var(--border-radius); width: 90%; max-width: 600px; box-shadow: var(--box-shadow); position: relative; text-align: center;">
            <button id="closeSubReport" style="position: absolute; top: 10px; right: 10px; background: transparent; border: none; font-size: 1.5rem; cursor: pointer; color: var(--danger-color);">&times;</button>
            <h3 id="subReportTitle" style="margin-bottom: 20px; color: var(--primary-color); font-size: 1.5rem; font-weight: 700;">تفاصيل الاختبار</h3>
            <p id="subReportDetails" style="color: var(--dark-color); font-size: 1rem; line-height: 1.8; margin-bottom: 20px;"></p>
            <ul id="subReportStats" style="list-style: none; padding: 0; margin: 20px 0; text-align: left; font-size: 0.95rem; color: var(--gray-color);">
                <!-- Dynamic content -->
            </ul>
            <p id="subReportRecommendations" style="color: var(--success-color); font-size: 1rem; font-weight: 600; margin-top: 20px;"></p>
            <button id="closeSubReportFooter" style="margin-top: 20px; padding: 10px 20px; background: var(--primary-color); color: white; border: none; border-radius: var(--border-radius); cursor: pointer; font-size: 0.9rem;">إغلاق</button>
        </div>
    </div>

    <script>
        // تبديل تبويبات الاختبارات وسجل النتائج
        document.querySelectorAll('.test-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                // إزالة النشط من جميع التبويبات
                document.querySelectorAll('.test-tab').forEach(t => {
                    t.classList.remove('active');
                });
                
                // إضافة النشط للتبويب الحالي
                this.classList.add('active');
                
                // إخفاء جميع محتويات الاختبارات
                document.querySelectorAll('.test-content').forEach(content => {
                    content.classList.remove('active');
                });
                
                // عرض محتوى التبويب المحدد
                const tabId = this.getAttribute('data-tab');
                document.getElementById(`${tabId}-tests`).classList.add('active');
                
                // إظهار أو إخفاء فلاتر البحث حسب التبويب
                if (tabId === 'results') {
                    document.getElementById('tests-filters').style.display = 'none';
                    document.getElementById('results-filters').style.display = 'flex';
                } else {
                    document.getElementById('tests-filters').style.display = 'flex';
                    document.getElementById('results-filters').style.display = 'none';
                }
            });
        });

        // فلترة الاختبارات (وظيفة افتراضية)
        document.querySelector('#tests-filters .btn-primary').addEventListener('click', function() {
            const subject = document.getElementById('subjectFilter').value;
            const status = document.getElementById('statusFilter').value;
            const date = document.getElementById('dateFilter').value;
            
            // هنا يمكنك إضافة كود لفلترة الاختبارات حسب المعايير المحددة
            alert(`تم تطبيق الفلترة:\nالمادة: ${subject}\nالحالة: ${status}\nالتاريخ: ${date || 'غير محدد'}`);
        });

        // فلترة سجل النتائج (وظيفة افتراضية)
        document.querySelector('#results-filters .btn-primary').addEventListener('click', function() {
            const subject = document.getElementById('resultsSubjectFilter').value;
            const period = document.getElementById('resultsPeriodFilter').value;
            const sort = document.getElementById('resultsSortFilter').value;
            
            // هنا يمكنك إضافة كود لفلترة النتائج حسب المعايير المحددة
            alert(`تم تطبيق الفلترة:\nالمادة: ${subject}\nالفترة: ${period}\nالترتيب: ${sort}`);
        });

        // عرض تفاصيل النتيجة عند النقر على زر التفاصيل
        document.querySelectorAll('.result-details-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const testRow = this.closest('tr');
                const testName = testRow.querySelector('td:nth-child(1)').textContent;
                const subject = testRow.querySelector('td:nth-child(2)').textContent;
                const date = testRow.querySelector('td:nth-child(3)').textContent;
                const grade = testRow.querySelector('td:nth-child(4)').textContent;

                // Populate modal content
                document.getElementById('subReportTitle').textContent = `تفاصيل اختبار: ${testName}`;
                document.getElementById('subReportDetails').innerHTML = `
                    <strong>المادة:</strong> ${subject}<br>
                    <strong>التاريخ:</strong> ${date}<br>
                    <strong>الدرجة:</strong> ${grade}
                `;
                document.getElementById('subReportStats').innerHTML = `
                    <li><strong>عدد الأسئلة:</strong> 30</li>
                    <li><strong>الإجابات الصحيحة:</strong> 25</li>
                    <li><strong>الإجابات الخاطئة:</strong> 5</li>
                    <li><strong>النسبة المئوية:</strong> ${grade}</li>
                `;
                document.getElementById('subReportRecommendations').textContent = 'نصيحة: ركز على تحسين مهاراتك في الأسئلة المتعلقة بالجبر والهندسة.';

                // Show modal
                document.getElementById('subReportModal').style.display = 'flex';
            });
        });

        // Close sub-report modal
        document.getElementById('closeSubReport').addEventListener('click', function() {
            document.getElementById('subReportModal').style.display = 'none';
        });

        document.getElementById('closeSubReportFooter').addEventListener('click', function() {
            document.getElementById('subReportModal').style.display = 'none';
        });

        // Close modal when clicking outside the modal content
        document.getElementById('subReportModal').addEventListener('click', function(e) {
            if (e.target === this) {
                this.style.display = 'none';
            }
        });

        // تحديث زر بدء الاختبار بناءً على تاريخ الاختبار
        document.querySelectorAll('.test-card.monthly').forEach(card => {
            const testDate = new Date(card.querySelector('.test-header span').textContent.trim());
            const currentDate = new Date();
            const button = card.querySelector('.btn');

            if (testDate > currentDate) {
                button.innerHTML = '<i class="fas fa-lock"></i> بدء الاختبار';
                button.style.backgroundColor = 'black';
                button.style.color = 'white';
                button.style.cursor = 'not-allowed';
                button.disabled = true;
            } else {
                button.innerHTML = '<i class="fas fa-play"></i> بدء الاختبار';
                button.classList.remove('btn-primary');
                button.classList.add('btn-success');
                button.style.cursor = 'pointer';
                button.disabled = false;
            }
        });
    </script>
</body>
</html>