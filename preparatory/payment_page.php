<?php
session_start();
// التحقق من أن المستخدم مسجل الدخول
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: ../../index.php");
    exit();
}

// جلب بيانات المستخدم من الجلسة
$userName = $_SESSION["user_name"] ?? "مستخدم";
$educationalStage = $_SESSION["educationalStage"] ?? "غير محدد";
$points = $_SESSION["points"] ?? 0;

// جلب بيانات إضافية من قاعدة البيانات إذا لزم الأمر
require_once '../../connect/connect.php';

// استعلام للحصول على بيانات المستخدم الإضافية
$userId = $_SESSION['user_id'] ?? 0;
$userEmail = $_SESSION['user_email'] ?? '';
$userPhone = $_SESSION['user_phone'] ?? '';

// إذا كانت البيانات ناقصة، جلبها من قاعدة البيانات
if (empty($userEmail) || empty($userPhone)) {
    if ($userId > 0) {
        $stmt = $pdo->prepare("SELECT email, phone FROM users WHERE id = ?");
        $stmt->execute([$userId]);
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($userData) {
            $userEmail = $userData['email'] ?? 'user@geniusaipro.online';
            $userPhone = $userData['phone'] ?? '01000000000';
            $_SESSION['user_email'] = $userEmail;
            $_SESSION['user_phone'] = $userPhone;
        }
    }
}

// إذا كانت البيانات لا تزال ناقصة، استخدم قيم افتراضية
$userFirstName = explode(' ', $userName)[0] ?? 'مستخدم';
$userLastName = count(explode(' ', $userName)) > 1 ? explode(' ', $userName)[1] : 'GeniusAI';
$userEmail = $userEmail ?: 'user@geniusaipro.online';
$userPhone = $userPhone ?: '01000000000';
$userAddress = $_SESSION['user_address'] ?? 'عنوان المستخدم';
$userId = $_SESSION['user_id'] ?? '0';

// توليد مفتاح التجزئة لـ Fawaterak
function generateFawaterakHashKey() {
    $secretKey = "c807d980efffb9f3a56a028eaa429cfd00b95e4560f488aeb7";
    $providerKey = "FAWATERAK.16353";
    $domain = "https://geniusaipro.online";
    
    $queryParam = "Domain=" . $domain . "&ProviderKey=" . $providerKey;
    $hash = hash_hmac('sha256', $queryParam, $secretKey, false);
    
    return $hash;
}

$fawaterakHashKey = generateFawaterakHashKey();
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دفع الاشتراك - Genius AI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Tajawal', sans-serif;
        }
        
        :root {
            --primary: #FFA726;
            --secondary: #2196F3;
            --accent: #FFD93D;
            --dark: #1a1a1a;
            --darker: #0f0f0f;
            --light: #ffffff;
            --gray: #666;
            --light-gray: #f5f5f5;
            --border: #e0e0e0;
        }
        
        body {
            background: linear-gradient(135deg, var(--darker) 0%, var(--dark) 100%);
            color: var(--dark);
            min-height: 100vh;
            padding: 0;
            line-height: 1.6;
        }
        
        .user-info-bar {
            background: rgba(255, 255, 255, 0.1);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }
        
        .user-details {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .user-name {
            font-weight: 600;
            color: #FFD93D;
        }
        
        .back-btn {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }
        
        .back-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }
        
        .payment-container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
        }
        
        .payment-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .payment-title {
            font-size: 2.5rem;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #FFD93D, #FFA726);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: 800;
        }
        
        .payment-subtitle {
            color: var(--light);
            font-size: 1.2rem;
        }
        
        .payment-layout {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }
        
        .order-summary {
            background: #ffffff;
            border-radius: 20px;
            padding: 30px;
            border: 1px solid var(--border);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            color: #333;
            order: 1;
        }
        
        .order-title {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #FFA726;
            border-bottom: 2px solid var(--light-gray);
            padding-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .order-title i {
            font-size: 1.3rem;
        }
        
        .order-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }
        
        .order-item {
            display: flex;
            justify-content: space-between;
            padding: 15px 0;
            border-bottom: 1px solid var(--light-gray);
            color: #555;
        }
        
        .order-item:last-child {
            border-bottom: none;
        }
        
        .order-total {
            font-size: 1.3rem;
            font-weight: 700;
            color: #FFA726;
            background-color: var(--light-gray);
            padding: 15px;
            border-radius: 10px;
            margin-top: 10px;
        }
        
        .features-list {
            margin-top: 30px;
        }
        
        .features-list h3 {
            color: #FFA726;
            margin-bottom: 15px;
            font-size: 1.2rem;
            border-bottom: 1px solid var(--light-gray);
            padding-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
        }
        
        .feature-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px;
            color: #555;
            background: var(--light-gray);
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        
        .feature-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .feature-item i {
            color: #4CAF50;
            font-size: 1.1rem;
        }
        
        .payment-methods {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 30px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            order: 2;
        }
        
        .methods-title {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #FFD93D;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        #fawaterkDivId {
            min-height: 400px;
            background: rgba(255, 255, 255, 0.02);
            border-radius: 15px;
            border: 1px solid rgba(255, 193, 7, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        
        .fawaterak-loading {
            text-align: center;
            color: var(--light);
            z-index: 2;
            position: relative;
            padding: 30px;
        }
        
        .fawaterak-loading i {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: #FFD93D;
            animation: bounce 2s infinite;
        }
        
        .security-badge {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
            padding: 15px;
            background: rgba(76, 175, 80, 0.1);
            border-radius: 10px;
            border: 1px solid rgba(76, 175, 80, 0.3);
            color: #4CAF50;
        }
        
        /* أنماط جديدة للتحكم في إطار Fawaterak */
        .fawaterak-iframe-container {
            width: 100%;
            height: 500px;
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }
        
        .fawaterak-iframe {
            width: 100%;
            height: 100%;
            border: none;
            background: white;
        }
        
        .payment-success {
            text-align: center;
            padding: 40px;
            background: rgba(76, 175, 80, 0.1);
            border-radius: 15px;
            border: 1px solid rgba(76, 175, 80, 0.3);
        }
        
        .payment-success i {
            font-size: 4rem;
            color: #4CAF50;
            margin-bottom: 20px;
        }
        
        .payment-failed {
            text-align: center;
            padding: 40px;
            background: rgba(244, 67, 54, 0.1);
            border-radius: 15px;
            border: 1px solid rgba(244, 67, 54, 0.3);
        }
        
        .payment-failed i {
            font-size: 4rem;
            color: #F44336;
            margin-bottom: 20px;
        }
        
        .payment-pending {
            text-align: center;
            padding: 40px;
            background: rgba(255, 152, 0, 0.1);
            border-radius: 15px;
            border: 1px solid rgba(255, 152, 0, 0.3);
        }
        
        .payment-pending i {
            font-size: 4rem;
            color: #FF9800;
            margin-bottom: 20px;
        }
        
        .action-btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-top: 20px;
            text-decoration: none;
            display: inline-block;
        }
        
        .action-btn:hover {
            background: var(--accent);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 167, 38, 0.4);
        }
        
        /* تصميم متجاوب */
        @media (min-width: 992px) {
            .payment-layout {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 30px;
                align-items: start;
            }
            
            .order-summary {
                order: 1;
            }
            
            .payment-methods {
                order: 2;
            }
        }
        
        @media (max-width: 768px) {
            .payment-container {
                padding: 15px;
                margin: 15px auto;
            }
            
            .payment-title {
                font-size: 2rem;
            }
            
            .payment-subtitle {
                font-size: 1rem;
            }
            
            .order-summary, .payment-methods {
                padding: 20px;
            }
            
            .order-details, .features-grid {
                grid-template-columns: 1fr;
            }
            
            .user-info-bar {
                padding: 12px 15px;
                flex-direction: column;
                gap: 15px;
            }
            
            .user-details {
                justify-content: center;
            }
        }
        
        @media (max-width: 480px) {
            .payment-title {
                font-size: 1.7rem;
            }
            
            .order-title, .methods-title {
                font-size: 1.3rem;
            }
            
            .order-summary, .payment-methods {
                padding: 15px;
                border-radius: 15px;
            }
            
            .feature-item {
                padding: 10px;
            }
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }
        
        /* تحسينات إضافية للشاشات الكبيرة */
        @media (min-width: 1400px) {
            .payment-container {
                max-width: 1300px;
            }
        }
    </style>
</head>
<body>
    <!-- شريط معلومات المستخدم -->
    <div class="user-info-bar">
        <div class="user-details">
            <div class="user-name">
                <i class="fas fa-user"></i> <?php echo htmlspecialchars($userName); ?>
            </div>
        </div>
        <a href="index.php" class="back-btn">
            <i class="fas fa-arrow-right"></i> العودة
        </a>
    </div>

    <div class="payment-container">
        <div class="payment-header">
            <h1 class="payment-title">تفعيل الاشتراك</h1>
            <p class="payment-subtitle">اكمل عملية الدفع لتفعيل حسابك المميز في Genius AI</p>
        </div>
        
        <div class="payment-layout">
            <div class="order-summary">
                <h2 class="order-title">
                    <i class="fas fa-receipt"></i>
                    ملخص الطلب
                </h2>
                
                <div class="order-details">
                    <div class="order-item">
                        <span>الاشتراك الشهري</span>
                        <span>70 جنيه مصرى</span>
                    </div>
                    
                    <div class="order-item">
                        <span>مدة الاشتراك</span>
                        <span>شهر واحد</span>
                    </div>
                    
                    <div class="order-item order-total">
                        <span>المبلغ الإجمالي</span>
                        <span>70 جنيه مصرى</span>
                    </div>
                </div>
                
                <div class="features-list">
                    <h3>
                        <i class="fas fa-star"></i>
                        المزايا المشمولة:
                    </h3>
                    <div class="features-grid">
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>وصول غير محدود لجميع الميزات</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>إنشاء عدد غير محدود من الاختبارات</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>نماذج الذكاء الاصطناعي المتقدمة</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>تقارير تحليلية مفصلة</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>دعوة الأصدقاء والحصول على مكافآت</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>دعم فني سريع ومميز</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="payment-methods">
                <h2 class="methods-title">
                    <i class="fas fa-credit-card"></i>
                    اختر طريقة الدفع
                </h2>
                
                <div id="fawaterkDivId">
                    <div class="fawaterak-loading">
                        <i class="fas fa-spinner fa-spin"></i>
                        <p>جاري تحميل طرق الدفع الآمنة...</p>
                        <div class="security-badge">
                            <i class="fas fa-shield-alt"></i>
                            <span>معاملات آمنة ومشفرة</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- تضمين مكتبة Fawaterak -->
    <script src="https://app.fawaterk.com/fawaterkPlugin/fawaterkPlugin.min.js"></script>
    
    <script>
        // تعريف pluginConfig كمتغير عالمي
        window.pluginConfig = {
            envType: "live",
            hashKey: "<?php echo $fawaterakHashKey; ?>",
            style: {
                listing: "horizontal"
            },
            version: "0",
            requestBody: {
                "cartTotal": "70.00",
                "currency": "EGP",
                "customer": {
                    "first_name": "<?php echo htmlspecialchars($userFirstName); ?>",
                    "last_name": "<?php echo htmlspecialchars($userLastName); ?>",
                    "email": "<?php echo htmlspecialchars($userEmail); ?>",
                    "phone": "<?php echo htmlspecialchars($userPhone); ?>",
                    "address": "<?php echo htmlspecialchars($userAddress); ?>"
                },
                "redirectionUrls": {
                    "successUrl": "https://geniusaipro.online/dashboard/primary/success.php",
                    "failUrl": "https://geniusaipro.online/dashboard/primary/failed.php", 
                    "pendingUrl": "https://geniusaipro.online/dashboard/primary/pending.php"
                },
                "cartItems": [{
                    "name": "اشتراك Genius AI - شهر واحد",
                    "price": "70.00",
                    "quantity": "1"
                }],
                "payLoad": {
                    "user_id": "<?php echo $userId; ?>",
                    "subscription_type": "monthly",
                    "product": "genius_ai_subscription"
                }
            }
        };

        // تهيئة Fawaterak عند تحميل الصفحة
        document.addEventListener('DOMContentLoaded', function() {
            initializeFawaterakPayment();
        });

        function initializeFawaterakPayment() {
            var fawaterkContainer = document.getElementById('fawaterkDivId');
            if (!fawaterkContainer) {
                showFawaterakError('عنصر الدفع غير موجود');
                return;
            }

            function checkFawaterkLoaded(callback) {
                var attempts = 0;
                var maxAttempts = 50;
                
                var checkInterval = setInterval(function() {
                    attempts++;
                    if (typeof window.fawaterkCheckout === 'function') {
                        clearInterval(checkInterval);
                        callback(true);
                    } else if (attempts >= maxAttempts) {
                        clearInterval(checkInterval);
                        callback(false);
                    }
                }, 100);
            }

            checkFawaterkLoaded(function(isLoaded) {
                if (isLoaded) {
                    try {
                        fawaterkContainer.innerHTML = '<div id="fawaterkPaymentContainer"></div>';
                        
                        setTimeout(function() {
                            if (typeof window.fawaterkCheckout === 'function') {
                                if (validateFawaterakData()) {
                                    // تهيئة Fawaterak مع خيارات لمنع النوافذ المنبثقة
                                    window.fawaterkCheckout(window.pluginConfig);
                                    
                                    // مراقبة التغييرات في DOM لاكتشاف إطار Fawaterak
                                    monitorFawaterakIframe();
                                    
                                    var loadingElement = document.querySelector('.fawaterak-loading');
                                    if (loadingElement) {
                                        loadingElement.style.display = 'none';
                                    }
                                } else {
                                    showFawaterakError('بيانات العميل غير مكتملة');
                                }
                            }
                        }, 500);
                        
                    } catch (error) {
                        showFawaterakError('حدث خطأ تقني: ' + error.message);
                    }
                } else {
                    showFawaterakError('لم يتم تحميل مكتبة الدفع');
                }
            });
        }

        // مراقبة إطار Fawaterak لاكتشافه وتعديله
        function monitorFawaterakIframe() {
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    mutation.addedNodes.forEach(function(node) {
                        if (node.nodeType === 1) {
                            // البحث عن iframe
                            if (node.tagName === 'IFRAME') {
                                integrateFawaterakIframe(node);
                            }
                            
                            // البحث عن iframe داخل العناصر المضافة
                            if (node.querySelectorAll) {
                                const iframes = node.querySelectorAll('iframe');
                                iframes.forEach(integrateFawaterakIframe);
                            }
                        }
                    });
                });
            });
            
            observer.observe(document.body, {
                childList: true,
                subtree: true
            });
            
            // أيضًا التحقق من الإطارات الموجودة بالفعل
            setTimeout(function() {
                const existingIframes = document.querySelectorAll('iframe');
                existingIframes.forEach(integrateFawaterakIframe);
            }, 1000);
        }

        // دمج إطار Fawaterak في الصفحة
        function integrateFawaterakIframe(iframe) {
            if (iframe.src && iframe.src.includes('fawaterk')) {
                console.log('تم اكتشاف إطار Fawaterak:', iframe);
                
                // إضافة فئة للتحكم في التنسيق
                iframe.classList.add('fawaterak-iframe');
                
                // تغليف الإطار في حاوية للتحكم بشكل أفضل
                const container = document.createElement('div');
                container.className = 'fawaterak-iframe-container';
                
                iframe.parentNode.insertBefore(container, iframe);
                container.appendChild(iframe);
                
                // منع فتح النوافذ المنبثقة
                overrideWindowOpen();
                
                // مراقبة التنقل داخل الإطار
                monitorIframeNavigation(iframe);
            }
        }

        // مراقبة التنقل داخل إطار Fawaterak
        function monitorIframeNavigation(iframe) {
            // لا يمكننا الوصول مباشرة إلى محتوى الإطار بسبب سياسة CORS
            // لكن يمكننا محاولة اكتشاف التغييرات في src
            let lastSrc = iframe.src;
            
            const checkSrc = setInterval(function() {
                if (iframe.src !== lastSrc) {
                    console.log('تم تغيير عنوان الإطار:', iframe.src);
                    lastSrc = iframe.src;
                    
                    // إذا كان الرابط يشير إلى صفحة نتائج، توجيه الصفحة الرئيسية
                    if (iframe.src.includes('success') || iframe.src.includes('fail') || iframe.src.includes('pending')) {
                        handlePaymentResult(iframe.src);
                        clearInterval(checkSrc);
                    }
                }
            }, 500);
        }

        // معالجة نتيجة الدفع
        function handlePaymentResult(resultUrl) {
            const fawaterkContainer = document.getElementById('fawaterkDivId');
            
            if (resultUrl.includes('success')) {
                fawaterkContainer.innerHTML = `
                    <div class="payment-success">
                        <i class="fas fa-check-circle"></i>
                        <h3>تم الدفع بنجاح!</h3>
                        <p>تم تفعيل اشتراكك بنجاح. يمكنك الآن الاستفادة من جميع مزايا Genius AI.</p>
                        <a href="dashboard.php" class="action-btn">العودة للرئيسية</a>
                    </div>
                `;
            } else if (resultUrl.includes('fail')) {
                fawaterkContainer.innerHTML = `
                    <div class="payment-failed">
                        <i class="fas fa-times-circle"></i>
                        <h3>فشل عملية الدفع</h3>
                        <p>عذراً، لم تتم عملية الدفع بنجاح. يرجى المحاولة مرة أخرى.</p>
                        <button onclick="window.location.reload()" class="action-btn">إعادة المحاولة</button>
                    </div>
                `;
            } else if (resultUrl.includes('pending')) {
                fawaterkContainer.innerHTML = `
                    <div class="payment-pending">
                        <i class="fas fa-clock"></i>
                        <h3>قيد المعالجة</h3>
                        <p>عملية الدفع قيد المراجعة والمعالجة. سيتم تفعيل اشتراكك قريباً.</p>
                        <a href="dashboard.php" class="action-btn">العودة للرئيسية</a>
                    </div>
                `;
            }
        }

        // تجاوز window.open لمنع النوافذ المنبثقة
        function overrideWindowOpen() {
            const originalWindowOpen = window.open;
            
            window.open = function(url, name, specs, replace) {
                console.log('تم اعتراض window.open:', url);
                
                // إذا كان الرابط من Fawaterak، افتحه في نفس الإطار
                if (url && url.includes('fawaterk')) {
                    // يمكننا توجيه المستخدم إلى الصفحة المناسبة بناءً على الرابط
                    if (url.includes('success')) {
                        handlePaymentResult(url);
                    } else if (url.includes('fail')) {
                        handlePaymentResult(url);
                    } else if (url.includes('pending')) {
                        handlePaymentResult(url);
                    }
                    return null;
                }
                
                // السماح بفتح النوافذ الأخرى بشكل طبيعي
                return originalWindowOpen.call(this, url, name, specs, replace);
            };
        }

        function validateFawaterakData() {
            var config = window.pluginConfig;
            if (!config || !config.requestBody || !config.requestBody.customer) {
                return false;
            }
            
            var customer = config.requestBody.customer;
            return customer.first_name && customer.phone && customer.email;
        }

        function showFawaterakError(message) {
            var fawaterkDiv = document.getElementById('fawaterkDivId');
            if (fawaterkDiv) {
                fawaterkDiv.innerHTML = 
                    '<div style="text-align: center; padding: 30px; color: #ff6b6b;">' +
                    '<i class="fas fa-exclamation-triangle" style="font-size: 3rem; margin-bottom: 15px;"></i>' +
                    '<h4 style="margin-bottom: 10px;">عذراً، حدث خطأ</h4>' +
                    '<p style="margin-bottom: 20px; line-height: 1.5;">' + message + '</p>' +
                    '<button onclick="window.location.reload()" style="padding: 10px 20px; background: #ff6b6b; color: white; border: none; border-radius: 5px; cursor: pointer;">إعادة تحميل</button>' +
                    '</div>';
            }
        }
    </script>
</body>
</html>