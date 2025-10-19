<?php
session_start();
require_once '../../connect/connect.php';

// التحقق من أن المستخدم مسجل الدخول
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: ../../index.php");
    exit();
}

// جلب بيانات المستخدم من الجلسة
$userName = $_SESSION["user_name"] ?? "مستخدم";
$points = $_SESSION["points"] ?? 0;
$userId = $_SESSION['user_id'] ?? 0;

// محاولة الحصول على بيانات الفاتورة من URL إذا كانت موجودة
$invoiceId = $_GET['invoice_id'] ?? '';
$referenceNumber = $_GET['reference'] ?? '';
$paymentMethod = $_GET['payment_method'] ?? '';
$errorReason = $_GET['reason'] ?? 'غير معروف';

// دالة لتسجيل زيارة صفحة الفشل
function logFailedVisit($userId, $invoiceId = '', $paymentMethod = '', $errorReason = '') {
    $logFile = __DIR__ . '/payment_failed_log.txt';
    $timestamp = date('Y-m-d H:i:s');
    $logMessage = "[$timestamp] المستخدم $userId - فشل عملية الدفع";
    
    if ($invoiceId) {
        $logMessage .= " - الفاتورة: $invoiceId";
    }
    if ($paymentMethod) {
        $logMessage .= " - طريقة الدفع: $paymentMethod";
    }
    if ($errorReason) {
        $logMessage .= " - السبب: $errorReason";
    }
    
    $logMessage .= "\n";
    file_put_contents($logFile, $logMessage, FILE_APPEND | LOCK_EX);
}

// تسجيل الزيارة
logFailedVisit($userId, $invoiceId, $paymentMethod, $errorReason);

// معلومات طريقة الدفع
$paymentMethodsInfo = [
    'fawry' => [
        'name' => 'فوري',
        'icon' => 'fas fa-mobile-alt'
    ],
    'aman' => [
        'name' => 'أمان',
        'icon' => 'fas fa-shield-alt'
    ],
    'masary' => [
        'name' => 'مصاري',
        'icon' => 'fas fa-wallet'
    ],
    'bank' => [
        'name' => 'التحويل البنكي',
        'icon' => 'fas fa-university'
    ],
    'default' => [
        'name' => 'الدفع',
        'icon' => 'fas fa-credit-card'
    ]
];

$currentMethod = $paymentMethodsInfo[strtolower($paymentMethod)] ?? $paymentMethodsInfo['default'];

// أسباب الفشل المحتملة
$errorReasons = [
    'insufficient_funds' => 'رصيد غير كافي',
    'card_declined' => 'تم رفض البطاقة',
    'timeout' => 'انتهاء وقت الجلسة',
    'technical_error' => 'خطأ تقني',
    'invalid_data' => 'بيانات غير صحيحة',
    'cancelled' => 'تم الإلغاء',
    'default' => 'غير معروف'
];

$currentError = $errorReasons[$errorReason] ?? $errorReasons['default'];
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فشل عملية الدفع - Genius AI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Tajawal', sans-serif;
        }
        
        :root {
            --primary: #FF5252;
            --secondary: #F44336;
            --accent: #FF8A80;
            --dark: #1a1a1a;
            --darker: #0f0f0f;
            --light: #ffffff;
            --gray: #666;
            --error: #FF5252;
        }
        
        body {
            background: linear-gradient(135deg, var(--darker) 0%, var(--dark) 100%);
            color: var(--light);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            line-height: 1.6;
        }
        
        .failed-container {
            background: rgba(255, 82, 82, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 25px;
            padding: 50px 40px;
            text-align: center;
            max-width: 700px;
            width: 100%;
            border: 1px solid rgba(255, 82, 82, 0.3);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
            position: relative;
            overflow: hidden;
        }
        
        .failed-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, 
                #FF5252, 
                #F44336, 
                #FF8A80, 
                #E57373);
            background-size: 200% 100%;
            animation: gradientShift 3s ease infinite;
        }
        
        .failed-icon {
            font-size: 5rem;
            color: var(--error);
            margin-bottom: 20px;
            animation: shake 0.5s ease-in-out;
            position: relative;
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            background: linear-gradient(45deg, var(--error), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: 800;
        }
        
        .subtitle {
            font-size: 1.3rem;
            color: var(--accent);
            margin-bottom: 10px;
            opacity: 0.9;
        }
        
        .message {
            font-size: 1.1rem;
            margin-bottom: 30px;
            line-height: 1.8;
            opacity: 0.9;
        }
        
        .error-details {
            background: linear-gradient(135deg, rgba(255, 82, 82, 0.2), rgba(244, 67, 54, 0.2));
            border: 1px solid rgba(255, 82, 82, 0.3);
            border-radius: 15px;
            padding: 25px;
            margin: 25px 0;
            position: relative;
            overflow: hidden;
        }
        
        .error-details::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            animation: shimmer 3s infinite;
        }
        
        .error-icon {
            font-size: 3rem;
            color: var(--error);
            margin-bottom: 15px;
        }
        
        .error-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--accent);
        }
        
        .error-reason {
            background: rgba(255, 82, 82, 0.3);
            padding: 8px 15px;
            border-radius: 20px;
            display: inline-block;
            margin: 10px 0;
            font-weight: 600;
        }
        
        .suggestions {
            background: rgba(255, 255, 255, 0.05);
            padding: 15px;
            border-radius: 10px;
            margin: 15px 0;
            border-right: 3px solid var(--error);
            text-align: right;
        }
        
        .suggestions ul {
            list-style-type: none;
            padding-right: 20px;
        }
        
        .suggestions li {
            margin-bottom: 10px;
            position: relative;
        }
        
        .suggestions li::before {
            content: '•';
            color: var(--error);
            font-weight: bold;
            position: absolute;
            right: -15px;
        }
        
        .payment-method-info {
            background: rgba(255, 255, 255, 0.05);
            padding: 20px;
            border-radius: 15px;
            margin: 25px 0;
            border-left: 3px solid var(--error);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }
        
        .method-icon {
            font-size: 2rem;
            color: var(--error);
        }
        
        .action-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 30px;
        }
        
        .btn {
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            min-width: 180px;
            justify-content: center;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--error), var(--secondary));
            color: white;
        }
        
        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: var(--light);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }
        
        .contact-info {
            background: rgba(255, 255, 255, 0.05);
            padding: 20px;
            border-radius: 15px;
            margin: 25px 0;
            border-left: 3px solid var(--error);
        }
        
        .reference-info {
            background: rgba(255, 255, 255, 0.05);
            padding: 15px;
            border-radius: 10px;
            margin: 15px 0;
            font-family: monospace;
            font-size: 1.1rem;
            word-break: break-all;
        }
        
        /* Animations */
        @keyframes gradientShift {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }
        
        @keyframes shimmer {
            0% { transform: translateX(-100%) rotate(45deg); }
            100% { transform: translateX(100%) rotate(45deg); }
        }
        
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .failed-container {
                padding: 30px 20px;
                margin: 20px;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .failed-icon {
                font-size: 4rem;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .btn {
                min-width: auto;
                width: 100%;
            }
            
            .payment-method-info {
                flex-direction: column;
                text-align: center;
            }
        }
        
        /* Floating elements */
        .floating {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>
<body>
    <div class="failed-container">
        <div class="failed-icon floating">
            <i class="fas fa-times-circle"></i>
        </div>
        
        <h1>فشل عملية الدفع ❌</h1>
        <p class="subtitle">لم نتمكن من معالجة طلبك بنجاح</p>
        
        <div class="message">
            عزيزي <strong><?php echo htmlspecialchars($userName); ?></strong>، 
            نأسف لإبلاغك بأن عملية الدفع لم تكتمل بنجاح. يرجى مراجعة المعلومات أدناه ومحاولة الدفع مرة أخرى.
        </div>
        
        <div class="error-details">
            <div class="error-icon">
                <i class="fas fa-exclamation-triangle"></i>
            </div>
            <div class="error-title">تفاصيل الخطأ</div>
            <div class="error-reason">
                🚫 السبب: <?php echo $currentError; ?>
            </div>
            <?php if ($referenceNumber): ?>
            <div class="reference-info">
                <i class="fas fa-hashtag"></i> رقم المرجع: <?php echo htmlspecialchars($referenceNumber); ?>
            </div>
            <?php endif; ?>
        </div>
        
        <div class="suggestions">
            <h4><i class="fas fa-lightbulb"></i> اقتراحات لحل المشكلة:</h4>
            <ul>
                <li>تأكد من صحة بيانات الدفع المدخلة</li>
                <li>تحقق من رصيد الحساب أو البطاقة المستخدمة</li>
                <li>جرب استخدام طريقة دفع مختلفة</li>
                <li>اتصل بالدعم الفني إذا استمرت المشكلة</li>
            </ul>
        </div>
        
        <?php if ($paymentMethod): ?>
        <div class="payment-method-info">
            <div class="method-icon">
                <i class="<?php echo $currentMethod['icon']; ?>"></i>
            </div>
            <div>
                <strong>طريقة الدفع المستخدمة:</strong> <?php echo $currentMethod['name']; ?>
            </div>
        </div>
        <?php endif; ?>
        
        <div class="contact-info">
            <h4><i class="fas fa-headset"></i> الدعم الفني</h4>
            <p>إذا كنت تحتاج مساعدة أو لديك استفسار حول عملية الدفع، لا تتردد في التواصل مع دعمنا:</p>
            <div style="margin-top: 10px;">
                <i class="fas fa-envelope"></i> support@geniusaipro.online<br>
                <i class="fas fa-phone"></i> 0123456789
            </div>
        </div>
        
        <div class="action-buttons">

            <a href="index.php" class="btn btn-secondary">
                <i class="fas fa-home"></i>
                العودة للرئيسية
            </a>
            
        </div>
        
        <div class="auto-refresh" style="margin-top: 20px;">
            <i class="fas fa-info-circle"></i>
            لم يتم خصم أي مبلغ من حسابك. إذا تم خصم مبلغ، سيتم استرداده تلقائياً خلال 3-5 أيام عمل.
        </div>
    </div>

    <script>
        // إضافة تأثيرات للعناصر
        document.addEventListener('DOMContentLoaded', function() {
            const elements = document.querySelectorAll('.failed-container > *');
            elements.forEach((element, index) => {
                element.style.animation = `slideIn 0.5s ease ${index * 0.1}s both`;
            });
            
            // إضافة تأثير اهتزاز إضافي للأيقونة
            setTimeout(() => {
                document.querySelector('.failed-icon').style.animation = 'shake 0.5s ease-in-out, float 3s ease-in-out infinite';
            }, 1000);
        });
        
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>
</html>