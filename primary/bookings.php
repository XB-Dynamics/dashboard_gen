<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظام الإدارة الأكاديمية - الحجوزات</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
</head>
<body>
    <!-- شريط التنقل العلوي -->
    <div class="top-navbar">
        <div class="user-menu">
            <div class="user-info">
                <img src="https://via.placeholder.com/40" alt="صورة المستخدم">
                <span>أحمد محمد - الصف الثالث الثانوي</span>
            </div>
        </div>
        
        <div class="notification-menu">
            <div class="notification-icon" onclick="toggleNotifications()">
                <i class="fas fa-bell"></i>
                <div class="notification-badge">3</div>
            </div>
            <div class="notification-dropdown" id="notificationDropdown">
                <div class="notification-header">
                    <span>الإشعارات</span>
                    <span style="color: var(--primary-color); font-size: 0.8rem;">تحديد الكل كمقروء</span>
                </div>
                <div class="notification-item unread">
                    <div class="notification-title">حجز جديد مع الأستاذ محمد</div>
                    <div class="notification-time">منذ ساعتين</div>
                </div>
                <div class="notification-item unread">
                    <div class="notification-title">اختبار الرياضيات غداً</div>
                    <div class="notification-time">منذ 5 ساعات</div>
                </div>
                <div class="notification-item">
                    <div class="notification-title">تم تأكيد حجز الكتاب</div>
                    <div class="notification-time">منذ يومين</div>
                </div>
                <div class="notification-item">
                    <div class="notification-title">إشعار نظامي</div>
                    <div class="notification-time">منذ أسبوع</div>
                </div>
                <div class="notification-footer">
                    عرض جميع الإشعارات
                </div>
            </div>
        </div>
    </div>

    <!-- محتوى الصفحة -->
    <div class="page-content">
        <h1 class="page-title"><i class="fas fa-calendar-check"></i> الحجوزات</h1>
        
        <!-- إحصائيات سريعة -->
        <div class="stats-cards">
            <div class="stat-card">
                <div class="icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <h3>5</h3>
                <p>حجوزات نشطة</p>
            </div>
            <div class="stat-card">
                <div class="icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>3</h3>
                <p>حجوزات قادمة</p>
            </div>
            <div class="stat-card">
                <div class="icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3>12</h3>
                <p>حجوزات مكتملة</p>
            </div>
            <div class="stat-card">
                <div class="icon">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
                <h3>750 ج.م</h3>
                <p>إجمالي المصروفات</p>
            </div>
        </div>

        <!-- التبويبات الرئيسية -->
        <div class="main-tabs">
            <div class="main-tab active" data-tab="teachers">
                <i class="fas fa-chalkboard-teacher"></i>
                <span>المدرسين</span>
            </div>
            <div class="main-tab" data-tab="books">
                <i class="fas fa-book"></i>
                <span>الكتب</span>
            </div>
            <div class="main-tab" data-tab="tests">
                <i class="fas fa-clipboard-list"></i>
                <span>الاختبارات</span>
            </div>
        </div>

        <!-- محتوى تبويب المدرسين -->
        <div class="tab-content active" id="teachers">
            <div class="content-section">
                <div class="section-header">
                    <h2 class="section-title"><i class="fas fa-chalkboard-teacher"></i> قائمة المدرسين</h2>
                    <div class="section-date" id="teachersDate"></div>
                </div>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px;">
                    <!-- بطاقة مدرس 1 -->
                    <div class="teacher-card">
                        <div class="teacher-header">
                            <img src="https://via.placeholder.com/80" alt="صورة المدرس" class="teacher-avatar">
                            <div class="teacher-info">
                                <h4>الأستاذ محمد أحمد</h4>
                                <div class="teacher-rating">
                                    <span class="rating-text">4.7</span>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="teacher-subject">
                                    <i class="fas fa-book" style="margin-left: 5px;"></i> الرياضيات - الصف الثالث الثانوي
                                </div>
                            </div>
                        </div>
                        <p class="teacher-bio">مدرس رياضيات بخبرة 10 سنوات في تدريس المناهج الثانوية. متخصص في الجبر والهندسة وحل المسائل المعقدة. حاصل على ماجستير في الرياضيات التطبيقية.</p>
                        
                        <div class="teacher-meta">
                            <div class="teacher-meta-item">
                                <i class="fas fa-calendar-alt"></i>
                                <span id="teacher1Date"></span>
                            </div>
                            <div class="teacher-meta-item">
                                <i class="fas fa-clock"></i>
                                <span>05:00 مساءً</span>
                            </div>
                        </div>
                        
                        <div class="teacher-meta">
                            <div class="teacher-meta-item">
                                <i class="fas fa-users"></i>
                                <span>المقاعد المتاحة:</span>
                            </div>
                            <div class="teacher-seats">3 مقاعد</div>
                        </div>
                        
                        <div class="teacher-footer">
                            <div class="teacher-price">
                                <i class="fas fa-money-bill-wave" style="margin-left: 5px;"></i> 150 ج.م
                            </div>
                            <button class="btn btn-primary" onclick="showBookingModal('الأستاذ محمد أحمد', 'الرياضيات', 150, 'teacher')">
                                <i class="fas fa-calendar-plus"></i> حجز
                            </button>
                        </div>
                    </div>
                    
                    <!-- بطاقة مدرس 2 -->
                    <div class="teacher-card">
                        <div class="teacher-header">
                            <img src="https://via.placeholder.com/80" alt="صورة المدرس" class="teacher-avatar">
                            <div class="teacher-info">
                                <h4>الأستاذة سارة خالد</h4>
                                <div class="teacher-rating">
                                    <span class="rating-text">5.0</span>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="teacher-subject">
                                    <i class="fas fa-book" style="margin-left: 5px;"></i> اللغة العربية - الصف الثالث الثانوي
                                </div>
                            </div>
                        </div>
                        <p class="teacher-bio">مدرسة لغة عربية متخصصة في النحو والصرف للمراحل الثانوية. تساعد الطلاب على تحسين التعبير الكتابي والتحليل الأدبي. حاصلة على دكتوراه في اللغة العربية.</p>
                        
                        <div class="teacher-meta">
                            <div class="teacher-meta-item">
                                <i class="fas fa-calendar-alt"></i>
                                <span id="teacher2Date"></span>
                            </div>
                            <div class="teacher-meta-item">
                                <i class="fas fa-clock"></i>
                                <span>04:30 مساءً</span>
                            </div>
                        </div>
                        
                        <div class="teacher-meta">
                            <div class="teacher-meta-item">
                                <i class="fas fa-users"></i>
                                <span>المقاعد المتاحة:</span>
                            </div>
                            <div class="teacher-seats">5 مقاعد</div>
                        </div>
                        
                        <div class="teacher-footer">
                            <div class="teacher-price">
                                <i class="fas fa-money-bill-wave" style="margin-left: 5px;"></i> 120 ج.م
                            </div>
                            <button class="btn btn-primary" onclick="showBookingModal('الأستاذة سارة خالد', 'اللغة العربية', 120, 'teacher')">
                                <i class="fas fa-calendar-plus"></i> حجز
                            </button>
                        </div>
                    </div>
                    
                    <!-- بطاقة مدرس 3 -->
                    <div class="teacher-card">
                        <div class="teacher-header">
                            <img src="https://via.placeholder.com/80" alt="صورة المدرس" class="teacher-avatar">
                            <div class="teacher-info">
                                <h4>الأستاذ علي محمود</h4>
                                <div class="teacher-rating">
                                    <span class="rating-text">4.5</span>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="teacher-subject">
                                    <i class="fas fa-atom" style="margin-left: 5px;"></i> العلوم - الصف الثالث الثانوي
                                </div>
                            </div>
                        </div>
                        <p class="teacher-bio">مدرس علوم متخصص في الفيزياء والكيمياء للمراحل الثانوية. يقدم شرحاً مبسطاً للمفاهيم العلمية المعقدة. حاصل على ماجستير في الفيزياء النووية.</p>
                        
                        <div class="teacher-meta">
                            <div class="teacher-meta-item">
                                <i class="fas fa-calendar-alt"></i>
                                <span id="teacher3Date"></span>
                            </div>
                            <div class="teacher-meta-item">
                                <i class="fas fa-clock"></i>
                                <span>06:00 مساءً</span>
                            </div>
                        </div>
                        
                        <div class="teacher-meta">
                            <div class="teacher-meta-item">
                                <i class="fas fa-users"></i>
                                <span>المقاعد المتاحة:</span>
                            </div>
                            <div class="teacher-seats">2 مقاعد</div>
                        </div>
                        
                        <div class="teacher-footer">
                            <div class="teacher-price">
                                <i class="fas fa-money-bill-wave" style="margin-left: 5px;"></i> 130 ج.م
                            </div>
                            <button class="btn btn-primary" onclick="showBookingModal('الأستاذ علي محمود', 'العلوم', 130, 'teacher')">
                                <i class="fas fa-calendar-plus"></i> حجز
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- محتوى تبويب الكتب -->
        <div class="tab-content" id="books" style="display: none;">
            <div class="content-section">
                <div class="section-header">
                    <h2 class="section-title"><i class="fas fa-book"></i> الكتب المتاحة</h2>
                    <div class="section-date" id="booksDate"></div>
                </div>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px;">
                    <!-- بطاقة كتاب 1 -->
                    <div class="book-card">
                        <div class="book-cover">
                            <i class="fas fa-square-root-alt"></i>
                        </div>
                        <div class="book-details">
                            <h4 class="book-title">الرياضيات للصف الثالث الثانوي</h4>
                            <p class="book-author">تأليف: د. أحمد فتحي</p>
                            <p class="book-description">المنهج الجديد 2023 مع حلول جميع التمارين والمسائل بطريقة مبسطة وسهلة الفهم.</p>
                            
                            <div class="book-meta">
                                <div class="book-meta-item">
                                    <i class="fas fa-box-open"></i>
                                    <span>النسخ المتاحة:</span>
                                </div>
                                <div class="book-stock">15 نسخة</div>
                            </div>
                            
                            <div class="book-footer">
                                <div class="book-price">120 ج.م</div>
                                <button class="btn btn-success" onclick="showBookingModal('الرياضيات للصف الثالث الثانوي', 'كتاب', 120, 'book')">
                                    <i class="fas fa-shopping-cart"></i> طلب
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- بطاقة كتاب 2 -->
                    <div class="book-card">
                        <div class="book-cover">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <div class="book-details">
                            <h4 class="book-title">قواعد اللغة العربية</h4>
                            <p class="book-author">تأليف: د. سعاد عبد الرحيم</p>
                            <p class="book-description">شرح مبسط مع تمارين وتطبيقات عملية لقواعد النحو والصرف للمرحلة الثانوية.</p>
                            
                            <div class="book-meta">
                                <div class="book-meta-item">
                                    <i class="fas fa-box-open"></i>
                                    <span>النسخ المتاحة:</span>
                                </div>
                                <div class="book-stock">8 نسخ</div>
                            </div>
                            
                            <div class="book-footer">
                                <div class="book-price">90 ج.م</div>
                                <button class="btn btn-success" onclick="showBookingModal('قواعد اللغة العربية', 'كتاب', 90, 'book')">
                                    <i class="fas fa-shopping-cart"></i> طلب
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- بطاقة كتاب 3 -->
                    <div class="book-card">
                        <div class="book-cover">
                            <i class="fas fa-atom"></i>
                        </div>
                        <div class="book-details">
                            <h4 class="book-title">العلوم الحديثة</h4>
                            <p class="book-author">تأليف: د. محمد السيد</p>
                            <p class="book-description">أحدث التطورات في الفيزياء والكيمياء مع شرح مفصل للتجارب العملية والنظريات.</p>
                            
                            <div class="book-meta">
                                <div class="book-meta-item">
                                    <i class="fas fa-box-open"></i>
                                    <span>النسخ المتاحة:</span>
                                </div>
                                <div class="book-stock">12 نسخة</div>
                            </div>
                            
                            <div class="book-footer">
                                <div class="book-price">150 ج.م</div>
                                <button class="btn btn-success" onclick="showBookingModal('العلوم الحديثة', 'كتاب', 150, 'book')">
                                    <i class="fas fa-shopping-cart"></i> طلب
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- محتوى تبويب الاختبارات -->
        <div class="tab-content" id="tests" style="display: none;">
            <div class="content-section">
                <div class="section-header">
                    <h2 class="section-title"><i class="fas fa-clipboard-list"></i> الاختبارات المتاحة</h2>
                    <div class="section-date" id="testsDate"></div>
                </div>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px;">
                    <!-- بطاقة اختبار 1 -->
                    <div class="test-card">
                        <div class="test-header">
                            <h4 class="test-title">اختبار تشخيصي</h4>
                            <span class="test-subject">الرياضيات</span>
                        </div>
                        <p class="test-description">اختبار لتقييم المستوى الحالي في مادة الرياضيات للصف الثالث الثانوي. يشمل جميع فصول المنهج.</p>
                        <div class="test-meta">
                            <i class="fas fa-calendar-alt"></i> <span id="test1Date"></span>
                            <i class="fas fa-clock" style="margin-right: 15px;"></i> <span>10:00 صباحاً</span>
                        </div>
                        <div class="test-meta">
                            <i class="fas fa-users"></i> <span>المقاعد المتاحة:</span>
                            <span class="test-seats">5 مقاعد</span>
                        </div>
                        <div class="test-footer">
                            <div class="test-meta">
                                <i class="fas fa-money-bill-wave"></i> <span>50 ج.م</span>
                            </div>
                            <button class="btn btn-primary" onclick="showBookingModal('اختبار تشخيصي - الرياضيات', 'اختبار', 50, 'test')">
                                <i class="fas fa-calendar-plus"></i> حجز
                            </button>
                        </div>
                    </div>
                    
                    <!-- بطاقة اختبار 2 -->
                    <div class="test-card">
                        <div class="test-header">
                            <h4 class="test-title">اختبار تدريبي</h4>
                            <span class="test-subject" style="background: rgba(76, 201, 240, 0.1); color: var(--success-color);">اللغة العربية</span>
                        </div>
                        <p class="test-description">اختبار تدريبي لامتحان نهاية العام في اللغة العربية للصف الثالث الثانوي. يشمل النصوص والقواعد.</p>
                        <div class="test-meta">
                            <i class="fas fa-calendar-alt"></i> <span id="test2Date"></span>
                            <i class="fas fa-clock" style="margin-right: 15px;"></i> <span>11:30 صباحاً</span>
                        </div>
                        <div class="test-meta">
                            <i class="fas fa-users"></i> <span>المقاعد المتاحة:</span>
                            <span class="test-seats">7 مقاعد</span>
                        </div>
                        <div class="test-footer">
                            <div class="test-meta">
                                <i class="fas fa-money-bill-wave"></i> <span>50 ج.م</span>
                            </div>
                            <button class="btn btn-primary" onclick="showBookingModal('اختبار تدريبي - اللغة العربية', 'اختبار', 50, 'test')">
                                <i class="fas fa-calendar-plus"></i> حجز
                            </button>
                        </div>
                    </div>
                    
                    <!-- بطاقة اختبار 3 -->
                    <div class="test-card">
                        <div class="test-header">
                            <h4 class="test-title">اختبار نهائي</h4>
                            <span class="test-subject" style="background: rgba(248, 150, 30, 0.1); color: var(--warning-color);">العلوم</span>
                        </div>
                        <p class="test-description">اختبار شامل لجميع فصول العلوم للصف الثالث الثانوي. يشمل الفيزياء والكيمياء والأحياء.</p>
                        <div class="test-meta">
                            <i class="fas fa-calendar-alt"></i> <span id="test3Date"></span>
                            <i class="fas fa-clock" style="margin-right: 15px;"></i> <span>09:00 صباحاً</span>
                        </div>
                        <div class="test-meta">
                            <i class="fas fa-users"></i> <span>المقاعد المتاحة:</span>
                            <span class="test-seats">3 مقاعد</span>
                        </div>
                        <div class="test-footer">
                            <div class="test-meta">
                                <i class="fas fa-money-bill-wave"></i> <span>60 ج.م</span>
                            </div>
                            <button class="btn btn-primary" onclick="showBookingModal('اختبار نهائي - العلوم', 'اختبار', 60, 'test')">
                                <i class="fas fa-calendar-plus"></i> حجز
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- نافذة حجز المدرس/الكتاب/الاختبار -->
    <div class="modal-overlay" id="bookingModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modalTitle">حجز جديد</h3>
                <button class="modal-close" onclick="closeBookingModal()">&times;</button>
            </div>
            
            <div class="order-summary">
                <h4>ملخص الطلب</h4>
                <div class="order-item">
                    <span id="orderItemName">اسم العنصر</span>
                    <span id="orderItemPrice">0 ج.م</span>
                </div>
                <div class="order-item">
                    <span>نوع الخدمة:</span>
                    <span id="orderItemType">نوع الخدمة</span>
                </div>
                <div class="order-total">
                    <span>الإجمالي:</span>
                    <span id="orderTotal">0 ج.م</span>
                </div>
            </div>
            
            <div class="form-group">
                <label>طريقة الدفع</label>
                <div class="payment-methods">
                    <div class="payment-method" onclick="selectPaymentMethod('visa', this)">
                        <i class="fab fa-cc-visa"></i>
                        <span>فيزا</span>
                    </div>
                    <div class="payment-method" onclick="selectPaymentMethod('mastercard', this)">
                        <i class="fab fa-cc-mastercard"></i>
                        <span>ماستركارد</span>
                    </div>
                    <div class="payment-method" onclick="selectPaymentMethod('aman', this)">
                        <img src="https://via.placeholder.com/40x20?text=أمان" alt="أمان">
                        <span>أمان</span>
                    </div>
                    <div class="payment-method" onclick="selectPaymentMethod('fawry', this)">
                        <img src="https://via.placeholder.com/40x20?text=فوري" alt="فوري">
                        <span>فوري</span>
                    </div>
                    <div class="payment-method" onclick="selectPaymentMethod('electronic-wallet', this)">
                        <i class="fas fa-wallet"></i>
                        <span>محفظة إلكترونية</span>
                    </div>
                </div>
            </div>
            
            <!-- تفاصيل الدفع لفيزا/ماستركارد -->
            <div class="payment-details" id="visaMasterDetails">
                <div class="form-group">
                    <label>رقم البطاقة</label>
                    <input type="text" class="form-control" placeholder="1234 5678 9012 3456" maxlength="19">
                </div>
                <div class="form-group">
                    <label>تاريخ الانتهاء</label>
                    <input type="text" class="form-control" placeholder="MM/YY" maxlength="5">
                </div>
                <div class="form-group">
                    <label>CVV</label>
                    <input type="text" class="form-control" placeholder="123" maxlength="3">
                </div>
                <div class="form-group">
                    <label>اسم حامل البطاقة</label>
                    <input type="text" class="form-control" placeholder="اسم حامل البطاقة">
                </div>
            </div>
            
            <!-- تفاصيل الدفع لأمان -->
            <div class="payment-details" id="amanDetails">
                <div class="form-group">
                    <label>رقم الهاتف المسجل في أمان</label>
                    <input type="text" class="form-control" placeholder="01XXXXXXXXX">
                </div>
            </div>
            
            <!-- تفاصيل الدفع لفوري -->
            <div class="payment-details" id="fawryDetails">
                <div class="form-group">
                    <label>اختر نقطة دفع فوري</label>
                    <select class="form-control">
                        <option>فوري باي</option>
                        <option>محلات البقالة</option>
                        <option>الصيدليات</option>
                        <option>مراكز الخدمة</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>رقم الهاتف</label>
                    <input type="text" class="form-control" placeholder="01XXXXXXXXX">
                </div>
            </div>
            
            <!-- تفاصيل الدفع للمحفظة الإلكترونية -->
            <div class="payment-details" id="electronicWalletDetails">
                <div class="form-group">
                    <label>اختر المحفظة الإلكترونية</label>
                    <select class="form-control">
                        <option>فودافون كاش</option>
                        <option>اورانج موني</option>
                        <option>اتصالات فليكس</option>
                        <option>وي</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>رقم المحفظة</label>
                    <input type="text" class="form-control" placeholder="01XXXXXXXXX">
                </div>
            </div>
            
            <button class="btn btn-success" style="width: 100%; margin-top: 20px;" onclick="confirmPayment()">
                <i class="fas fa-check" style="margin-left: 8px;"></i> تأكيد الدفع
            </button>
        </div>
    </div>

    <script>
        // دالة لتحويل التاريخ إلى تنسيق عربي
        function getArabicDate() {
            const now = new Date();
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            return now.toLocaleDateString('ar-EG', options);
        }

        // دالة لإضافة أيام إلى التاريخ الحالي
        function addDaysToCurrentDate(days) {
            const now = new Date();
            now.setDate(now.getDate() + days);
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            return now.toLocaleDateString('ar-EG', options);
        }

        // تعيين التواريخ عند تحميل الصفحة
        document.addEventListener('DOMContentLoaded', function() {
            const arabicDate = getArabicDate();
            
            // تواريخ الأقسام
            document.getElementById('teachersDate').textContent = arabicDate;
            document.getElementById('booksDate').textContent = arabicDate;
            document.getElementById('testsDate').textContent = arabicDate;
            
            // تواريخ المدرسين
            document.getElementById('teacher1Date').textContent = addDaysToCurrentDate(2);
            document.getElementById('teacher2Date').textContent = addDaysToCurrentDate(3);
            document.getElementById('teacher3Date').textContent = addDaysToCurrentDate(4);
            
            // تواريخ الاختبارات
            document.getElementById('test1Date').textContent = addDaysToCurrentDate(5);
            document.getElementById('test2Date').textContent = addDaysToCurrentDate(6);
            document.getElementById('test3Date').textContent = addDaysToCurrentDate(7);
        });

        // تبديل التبويبات الرئيسية
        document.querySelectorAll('.main-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                const tabId = this.getAttribute('data-tab');
                
                // إزالة النشط من جميع التبويبات
                document.querySelectorAll('.main-tab').forEach(t => {
                    t.classList.remove('active');
                });
                
                // إضافة النشط للتبويب الحالي
                this.classList.add('active');
                
                // إخفاء جميع محتويات التبويبات
                document.querySelectorAll('.tab-content').forEach(content => {
                    content.style.display = 'none';
                });
                
                // عرض محتوى التبويب المحدد
                document.getElementById(tabId).style.display = 'block';
            });
        });

        // عرض/إخفاء قائمة الإشعارات
        function toggleNotifications() {
            const dropdown = document.getElementById('notificationDropdown');
            dropdown.classList.toggle('show');
        }

        // إغلاق قائمة الإشعارات عند النقر خارجها
        document.addEventListener('click', function(e) {
            const dropdown = document.getElementById('notificationDropdown');
            const icon = document.querySelector('.notification-icon');
            
            if (dropdown.classList.contains('show') && e.target !== icon && !icon.contains(e.target) && e.target !== dropdown && !dropdown.contains(e.target)) {
                dropdown.classList.remove('show');
            }
        });

        // متغيرات لحفظ حالة الحجز الحالي
        let currentBooking = {
            name: '',
            type: '',
            price: 0,
            category: ''
        };
        let selectedPaymentMethod = '';

        // عرض نافذة الحجز
        function showBookingModal(name, type, price, category) {
            currentBooking = { name, type, price, category };
            selectedPaymentMethod = '';
            
            // تحديث معلومات الطلب
            document.getElementById('modalTitle').textContent = `حجز ${type}: ${name}`;
            document.getElementById('orderItemName').textContent = name;
            document.getElementById('orderItemType').textContent = type;
            document.getElementById('orderItemPrice').textContent = `${price} ج.م`;
            document.getElementById('orderTotal').textContent = `${price} ج.م`;
            
            // إخفاء جميع تفاصيل الدفع
            document.querySelectorAll('.payment-details').forEach(details => {
                details.style.display = 'none';
            });
            
            // إزالة التحديد من طرق الدفع
            document.querySelectorAll('.payment-method').forEach(method => {
                method.classList.remove('active');
            });
            
            // عرض نافذة الحجز
            document.getElementById('bookingModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }
        
        // إغلاق نافذة الحجز
        function closeBookingModal() {
            document.getElementById('bookingModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }
        
        // اختيار طريقة الدفع
        function selectPaymentMethod(method, element) {
            selectedPaymentMethod = method;
            
            // إزالة التحديد من جميع الطرق
            document.querySelectorAll('.payment-method').forEach(m => {
                m.classList.remove('active');
            });
            
            // إضافة التحديد للطريقة المختارة
            element.classList.add('active');
            
            // إخفاء جميع تفاصيل الدفع
            document.querySelectorAll('.payment-details').forEach(details => {
                details.style.display = 'none';
            });
            
            // عرض تفاصيل الدفع المختارة
            if (method === 'visa' || method === 'mastercard') {
                document.getElementById('visaMasterDetails').style.display = 'block';
            } else if (method === 'aman') {
                document.getElementById('amanDetails').style.display = 'block';
            } else if (method === 'fawry') {
                document.getElementById('fawryDetails').style.display = 'block';
            } else if (method === 'electronic-wallet') {
                document.getElementById('electronicWalletDetails').style.display = 'block';
            }
        }
        
        // تأكيد الدفع
        function confirmPayment() {
            if (!selectedPaymentMethod) {
                alert('الرجاء اختيار طريقة الدفع');
                return;
            }
            
            let paymentDetails = '';
            if (selectedPaymentMethod === 'visa' || selectedPaymentMethod === 'mastercard') {
                paymentDetails = 'بطاقة ' + (selectedPaymentMethod === 'visa' ? 'فيزا' : 'ماستركارد');
            } else if (selectedPaymentMethod === 'aman') {
                paymentDetails = 'خدمة أمان';
            } else if (selectedPaymentMethod === 'fawry') {
                paymentDetails = 'فوري';
            } else if (selectedPaymentMethod === 'electronic-wallet') {
                paymentDetails = 'محفظة إلكترونية';
            }
            
            alert(`تم تأكيد الحجز بنجاح!\n\n${currentBooking.type}: ${currentBooking.name}\nالسعر: ${currentBooking.price} ج.م\nطريقة الدفع: ${paymentDetails}`);
            closeBookingModal();
        }

        // إغلاق النوافذ عند النقر خارجها
        document.addEventListener('click', function(e) {
            if (e.target === document.getElementById('bookingModal')) {
                closeBookingModal();
            }
        });
    </script>
</body>
</html>