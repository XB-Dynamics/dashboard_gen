<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تجديد العضوية</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/main.css">

</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-id-card"></i> تجديد العضوية</h1>
            <p>قم بتجديد عضويةك للاستمرار في الاستفادة من جميع المزايا</p>
        </div>

        <div class="expiry-notice">
            <i class="fas fa-exclamation-triangle"></i>
            <div class="expiry-notice-content">
                <h3>تنتهي عضويةك قريباً!</h3>
                <p>تنتهي صلاحية عضويةك الحالية في 30 يونيو 2023</p>
            </div>
        </div>

        <div class="membership-status">
            <div class="status-header">
                <h3>حالة العضوية الحالية</h3>
                <span class="status-tag">تنتهي خلال 30 يوم</span>
            </div>
            <div class="status-details">
                <div class="detail-item">
                    <p>نوع العضوية</p>
                    <p>العضوية الذهبية</p>
                </div>
                <div class="detail-item">
                    <p>تاريخ البدء</p>
                    <p>01 يناير 2023</p>
                </div>
                <div class="detail-item">
                    <p>تاريخ الانتهاء</p>
                    <p>30 يونيو 2023</p>
                </div>
                <div class="detail-item">
                    <p>الحالة</p>
                    <p style="color: var(--success-color);">نشطة</p>
                </div>
            </div>
        </div>

        <div class="plan-card">
            <h3>تجديد العضوية السنوية</h3>
            <div class="plan-price">900 ج.م <span>لسنة كاملة</span></div>
            <ul class="plan-features">
                <li>وصول غير محدود لجميع الاختبارات</li>
                <li>خصم 30% على حصص المدرسين</li>
                <li>أولوية في حجز الاختبارات</li>
                <li>تقارير أداء مفصلة</li>
                <li>جلسات إرشاد أكاديمي</li>
                <li>دعم فني على مدار الساعة</li>
            </ul>
            <button id="renewBtn" class="btn btn-primary">
                <i class="fas fa-sync-alt"></i> تجديد العضوية الآن
            </button>
        </div>

        <div id="paymentSection" class="payment-section">
            <h2><i class="fas fa-credit-card"></i> إتمام عملية الدفع</h2>
            
            <div class="form-group">
                <label>الباقة المختارة</label>
                <input type="text" class="form-control" value="تجديد العضوية السنوية (900 ج.م)" readonly>
            </div>
            
            <h3 style="margin: 15px 0;">اختر طريقة الدفع</h3>
            <div class="payment-methods">
                <div class="payment-method visa selected" onclick="selectPaymentMethod(this, 'visa')">
                    <i class="fab fa-cc-visa"></i>
                    <p>فيزا</p>
                </div>
                <div class="payment-method mastercard" onclick="selectPaymentMethod(this, 'mastercard')">
                    <i class="fab fa-cc-mastercard"></i>
                    <p>ماستركارد</p>
                </div>
                <div class="payment-method mada" onclick="selectPaymentMethod(this, 'mada')">
                    <i class="fas fa-credit-card"></i>
                    <p>مدى</p>
                </div>
                <div class="payment-method fawry" onclick="selectPaymentMethod(this, 'fawry')">
                    <i class="fas fa-money-bill-wave"></i>
                    <p>فوري</p>
                </div>
                <div class="payment-method instapay" onclick="selectPaymentMethod(this, 'instapay')">
                    <i class="fas fa-wallet"></i>
                    <p>انستابي</p>
                </div>
                <div class="payment-method vodafone" onclick="selectPaymentMethod(this, 'vodafone')">
                    <i class="fas fa-mobile-alt"></i>
                    <p>فودافون كاش</p>
                </div>
            </div>
            
            <div id="cardPaymentForm">
                <div class="form-group">
                    <label>اسم صاحب البطاقة</label>
                    <input type="text" class="form-control" placeholder="الاسم كما هو مدون على البطاقة">
                </div>
                
                <div class="form-group">
                    <label>رقم البطاقة</label>
                    <input type="text" class="form-control" placeholder="1234 5678 9012 3456">
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                    <div class="form-group">
                        <label>تاريخ الانتهاء</label>
                        <input type="text" class="form-control" placeholder="MM/YY">
                    </div>
                    <div class="form-group">
                        <label>رمز الأمان (CVV)</label>
                        <input type="text" class="form-control" placeholder="123">
                    </div>
                </div>
            </div>
            
            <div id="fawryPaymentForm" style="display: none;">
                <div class="form-group">
                    <label>رقم الهاتف</label>
                    <input type="tel" class="form-control" placeholder="أدخل رقم هاتفك المحمول">
                </div>
                <p style="color: #666; text-align: center; margin: 15px 0;">
                    ستصلك رسالة SMS تحتوي على كود الدفع عبر فوري
                </p>
            </div>
            
            <div id="walletPaymentForm" style="display: none;">
                <div class="form-group">
                    <label>رقم المحفظة</label>
                    <input type="tel" class="form-control" placeholder="أدخل رقم محفظتك الإلكترونية">
                </div>
            </div>
            
            <button class="btn btn-primary btn-submit">
                <i class="fas fa-lock"></i> تأكيد الدفع وتجديد العضوية
            </button>
            
            <p style="text-align: center; margin-top: 20px; color: #666;">
                <i class="fas fa-lock"></i> جميع عمليات الدفع آمنة ومشفرة
            </p>
        </div>
    </div>

    <script>
        // اختيار طريقة الدفع
        let selectedPaymentMethod = 'visa';
        
        function selectPaymentMethod(element, method) {
            document.querySelectorAll('.payment-method').forEach(el => {
                el.classList.remove('selected');
            });
            element.classList.add('selected');
            selectedPaymentMethod = method;
            
            // إظهار/إخفاء نماذج الدفع حسب الاختيار
            document.getElementById('cardPaymentForm').style.display = 'none';
            document.getElementById('fawryPaymentForm').style.display = 'none';
            document.getElementById('walletPaymentForm').style.display = 'none';
            
            if (method === 'visa' || method === 'mastercard' || method === 'mada') {
                document.getElementById('cardPaymentForm').style.display = 'block';
            } else if (method === 'fawry') {
                document.getElementById('fawryPaymentForm').style.display = 'block';
            } else {
                document.getElementById('walletPaymentForm').style.display = 'block';
            }
        }

        // عرض قسم الدفع عند النقر على تجديد العضوية
        document.getElementById('renewBtn').addEventListener('click', function() {
            document.getElementById('paymentSection').style.display = 'block';
            window.scrollTo({
                top: document.getElementById('paymentSection').offsetTop - 20,
                behavior: 'smooth'
            });
        });

        // تأكيد الدفع
        document.querySelector('.btn-submit').addEventListener('click', function() {
            const packageName = "تجديد العضوية السنوية";
            const amount = "900 ج.م";
            const method = selectedPaymentMethod;
            
            let methodName = "";
            switch(method) {
                case 'visa': methodName = "فيزا"; break;
                case 'mastercard': methodName = "ماستركارد"; break;
                case 'mada': methodName = "مدى"; break;
                case 'fawry': methodName = "فوري"; break;
                case 'instapay': methodName = "انستابي"; break;
                case 'vodafone': methodName = "فودافون كاش"; break;
            }
            
            alert(`تم تأكيد طلبك:\n\nالباقة: ${packageName}\nالمبلغ: ${amount}\nطريقة الدفع: ${methodName}\n\nسيتم تجديد عضويةك فور اكتمال عملية الدفع`);
            
            // هنا يمكنك إضافة تحويل إلى صفحة التأكيد أو إرسال البيانات إلى الخادم
        });
    </script>
</body>
</html>