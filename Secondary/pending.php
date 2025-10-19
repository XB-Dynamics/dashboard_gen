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

// دالة لتسجيل زيارة صفحة الانتظار
function logPendingVisit($userId, $invoiceId = '', $paymentMethod = '') {
    $logFile = __DIR__ . '/payment_pending_log.txt';
    $timestamp = date('Y-m-d H:i:s');
    $logMessage = "[$timestamp] المستخدم $userId زار صفحة الانتظار";
    
    if ($invoiceId) {
        $logMessage .= " - الفاتورة: $invoiceId";
    }
    if ($paymentMethod) {
        $logMessage .= " - طريقة الدفع: $paymentMethod";
    }
    
    $logMessage .= "\n";
    file_put_contents($logFile, $logMessage, FILE_APPEND | LOCK_EX);
}

// تسجيل الزيارة
logPendingVisit($userId, $invoiceId, $paymentMethod);

// معلومات طريقة الدفع
$paymentMethodsInfo = [
    'fawry' => [
        'name' => 'فوري',
        'time' => '٢٤-٤٨ ساعة',
        'instructions' => 'احتفظ برقم المرجع الخاص بالمعاملة للمتابعة',
        'icon' => 'fas fa-mobile-alt'
    ],
    'aman' => [
        'name' => 'أمان',
        'time' => '٢-٦ ساعات',
        'instructions' => 'ستصلك رسالة تأكيد على هاتفك',
        'icon' => 'fas fa-shield-alt'
    ],
    'masary' => [
        'name' => 'مصاري',
        'time' => '١-٤ ساعات',
        'instructions' => 'يمكنك المتابعة من خلال تطبيق مصاري',
        'icon' => 'fas fa-wallet'
    ],
    'bank' => [
        'name' => 'التحويل البنكي',
        'time' => '٢٤-٧٢ ساعة',
        'instructions' => 'احتفظ بصورة إيصال التحويل',
        'icon' => 'fas fa-university'
    ],
    'default' => [
        'name' => 'الدفع',
        'time' => '٢٤ ساعة',
        'instructions' => 'جاري معالجة طلبك، سيتم التأكيد قريباً',
        'icon' => 'fas fa-clock'
    ]
];

$currentMethod = $paymentMethodsInfo[strtolower($paymentMethod)] ?? $paymentMethodsInfo['default'];
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جاري المعالجة - Genius AI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            --warning: #FF9800;
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
        
        .pending-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 25px;
            padding: 50px 40px;
            text-align: center;
            max-width: 700px;
            width: 100%;
            border: 1px solid rgba(255, 167, 38, 0.3);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
            position: relative;
            overflow: hidden;
        }
        
        .pending-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, 
                #FFA726, 
                #2196F3, 
                #FFD93D, 
                #4CAF50);
            background-size: 200% 100%;
            animation: gradientShift 3s ease infinite;
        }
        
        .pending-icon {
            font-size: 5rem;
            color: var(--warning);
            margin-bottom: 20px;
            animation: pulse 2s infinite;
            position: relative;
        }
        
        .loading-spinner {
            width: 80px;
            height: 80px;
            border: 5px solid rgba(255, 167, 38, 0.3);
            border-top: 5px solid var(--warning);
            border-radius: 50%;
            animation: spin 1.5s linear infinite;
            margin: 0 auto 30px;
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            background: linear-gradient(45deg, var(--warning), var(--accent));
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
        
        .payment-method-card {
            background: linear-gradient(135deg, rgba(255, 167, 38, 0.2), rgba(33, 150, 243, 0.2));
            border: 1px solid rgba(255, 167, 38, 0.3);
            border-radius: 15px;
            padding: 25px;
            margin: 25px 0;
            position: relative;
            overflow: hidden;
        }
        
        .payment-method-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            animation: shimmer 3s infinite;
        }
        
        .method-icon {
            font-size: 3rem;
            color: var(--warning);
            margin-bottom: 15px;
        }
        
        .method-name {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--accent);
        }
        
        .processing-time {
            background: rgba(255, 167, 38, 0.3);
            padding: 8px 15px;
            border-radius: 20px;
            display: inline-block;
            margin: 10px 0;
            font-weight: 600;
        }
        
        .instructions {
            background: rgba(255, 255, 255, 0.05);
            padding: 15px;
            border-radius: 10px;
            margin: 15px 0;
            border-right: 3px solid var(--warning);
        }
        
        .progress-container {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 15px;
            margin: 25px 0;
        }
        
        .progress-steps {
            display: flex;
            justify-content: space-between;
            position: relative;
            margin-bottom: 20px;
        }
        
        .progress-steps::before {
            content: '';
            position: absolute;
            top: 15px;
            left: 10%;
            right: 10%;
            height: 3px;
            background: rgba(255, 255, 255, 0.2);
            z-index: 1;
        }
        
        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 2;
        }
        
        .step-icon {
            width: 30px;
            height: 30px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 5px;
            transition: all 0.3s ease;
        }
        
        .step.active .step-icon {
            background: var(--warning);
            transform: scale(1.2);
        }
        
        .step-text {
            font-size: 0.9rem;
            text-align: center;
        }
        
        .status-updates {
            text-align: right;
            margin: 25px 0;
        }
        
        .update-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 12px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }
        
        .update-item:last-child {
            border-bottom: none;
        }
        
        .update-item.active {
            opacity: 1;
            color: var(--accent);
        }
        
        .update-item i {
            color: var(--warning);
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
            background: linear-gradient(135deg, var(--warning), var(--secondary));
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
            border-left: 3px solid var(--warning);
        }
        
        .timer {
            font-size: 1rem;
            color: var(--accent);
            margin-top: 20px;
            font-weight: 600;
        }
        
        .auto-refresh {
            font-size: 0.9rem;
            color: var(--gray);
            margin-top: 10px;
        }
        
        /* Animations */
        @keyframes gradientShift {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.1); opacity: 0.8; }
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
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
            .pending-container {
                padding: 30px 20px;
                margin: 20px;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .pending-icon {
                font-size: 4rem;
            }
            
            .loading-spinner {
                width: 60px;
                height: 60px;
            }
            
            .progress-steps {
                flex-direction: column;
                gap: 20px;
            }
            
            .progress-steps::before {
                display: none;
            }
            
            .step {
                flex-direction: row;
                gap: 15px;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .btn {
                min-width: auto;
                width: 100%;
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
    <div class="pending-container">
        <div class="loading-spinner"></div>
        
        <div class="pending-icon floating">
            <i class="fas fa-clock"></i>
        </div>
        
        <h1>جاري معالجة طلبك ⏳</h1>
        <p class="subtitle">طلب الدفع قيد المراجعة والتأكيد</p>
        
        <div class="message">
            عزيزي <strong><?php echo htmlspecialchars($userName); ?></strong>، 
            نعمل حالياً على تأكيد عملية الدفع الخاصة بك. هذه العملية قد تستغرق بعض الوقت حسب طريقة الدفع المستخدمة.
        </div>
        
        <div class="payment-method-card">
            <div class="method-icon">
                <i class="<?php echo $currentMethod['icon']; ?>"></i>
            </div>
            <div class="method-name"><?php echo $currentMethod['name']; ?></div>
            <div class="processing-time">
                ⏱️ المدة المتوقعة: <?php echo $currentMethod['time']; ?>
            </div>
            <div class="instructions">
                <i class="fas fa-info-circle"></i>
                <?php echo $currentMethod['instructions']; ?>
            </div>
        </div>
        
        <div class="progress-container">
            <div class="progress-steps">
                <div class="step active">
                    <div class="step-icon">
                        <i class="fas fa-cart-plus"></i>
                    </div>
                    <div class="step-text">بدء الطلب</div>
                </div>
                <div class="step active">
                    <div class="step-icon">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <div class="step-text">إتمام الدفع</div>
                </div>
                <div class="step">
                    <div class="step-icon">
                        <i class="fas fa-cog"></i>
                    </div>
                    <div class="step-text">جاري المعالجة</div>
                </div>
                <div class="step">
                    <div class="step-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="step-text">التأكيد النهائي</div>
                </div>
            </div>
        </div>
        
        <div class="status-updates">
            <h4><i class="fas fa-sync-alt"></i> تحديثات الحالة:</h4>
            <div class="update-item active">
                <i class="fas fa-check-circle"></i>
                <span>تم استلام طلب الدفع بنجاح</span>
                <small>الآن</small>
            </div>
            <div class="update-item">
                <i class="fas fa-clock"></i>
                <span>جاري التحقق من طريقة الدفع</span>
                <small>قريباً</small>
            </div>
            <div class="update-item">
                <i class="fas fa-clock"></i>
                <span>انتظار تأكيد العملية من البنك</span>
                <small>خلال <?php echo explode('-', $currentMethod['time'])[0]; ?> ساعات</small>
            </div>
            <div class="update-item">
                <i class="fas fa-clock"></i>
                <span>تفعيل الاشتراك وإضافة النقاط</span>
                <small>بعد التأكيد</small>
            </div>
        </div>
        
        <div class="contact-info">
            <h4><i class="fas fa-headset"></i> الدعم الفني</h4>
            <p>إذا استغرقت العملية أكثر من الوقت المتوقع، لا تتردد في التواصل مع دعمنا:</p>
            <div style="margin-top: 10px;">
                <i class="fas fa-envelope"></i> support@geniusaipro.online<br>
                <i class="fas fa-phone"></i> 0123456789
            </div>
        </div>
        
        <div class="action-buttons">
            <button onclick="checkPaymentStatus()" class="btn btn-primary">
                <i class="fas fa-sync"></i>
                تحديث الحالة
            </button>
            
            <a href="../dashboard.php" class="btn btn-secondary">
                <i class="fas fa-home"></i>
                العودة للرئيسية
            </a>
            
            <a href="mailto:support@geniusaipro.online" class="btn btn-secondary">
                <i class="fas fa-question-circle"></i>
                التواصل مع الدعم
            </a>
        </div>
        
        <div class="timer">
            <i class="fas fa-redo"></i>
            سيتم التحديث التلقائي خلال <span id="countdown">30</span> ثانية
        </div>
        
        <div class="auto-refresh">
            <i class="fas fa-info-circle"></i>
            الصفحة ستقوم بالتحديث التلقائي لمتابعة حالة الدفع
        </div>
    </div>

    <script>
        // متغيرات التتبع
        let checkCount = 0;
        const maxChecks = 180; // 90 دقيقة (30 ثانية × 180 = 90 دقيقة)
        
        // تحديث حالة الدفع
        function checkPaymentStatus() {
            checkCount++;
            
            // محاكاة التحقق من حالة الدفع (في الواقع سيكون اتصال API)
            simulateStatusCheck();
            
            // تحديث الواجهة
            updateProgress();
            
            if (checkCount >= maxChecks) {
                clearInterval(refreshInterval);
                showTimeoutMessage();
            }
        }
        
        // محاكاة التحقق من الحالة
        function simulateStatusCheck() {
            const statusElement = document.querySelector('.status-updates');
            const updates = statusElement.querySelectorAll('.update-item');
            
            // محاكاة تقدم العملية
            if (checkCount === 3) {
                updates[1].classList.add('active');
                updates[1].querySelector('i').className = 'fas fa-check-circle';
            }
            
            if (checkCount === 6) {
                updates[2].classList.add('active');
                updates[2].querySelector('i').className = 'fas fa-check-circle';
            }
            
            // إضافة رسالة تحديث ديناميكية
            addStatusMessage(`تم التحقق من الحالة (${checkCount}/${maxChecks})`);
        }
        
        // تحديث شريط التقدم
        function updateProgress() {
            const steps = document.querySelectorAll('.step');
            const progress = Math.min((checkCount / 6) * 100, 75); // 75% كحد أقصى في الانتظار
            
            if (checkCount >= 3) {
                steps[2].classList.add('active');
            }
        }
        
        // إضافة رسالة حالة
        function addStatusMessage(message) {
            const statusElement = document.querySelector('.status-updates');
            const newUpdate = document.createElement('div');
            newUpdate.className = 'update-item';
            newUpdate.innerHTML = `
                <i class="fas fa-info-circle"></i>
                <span>${message}</span>
                <small>${new Date().toLocaleTimeString()}</small>
            `;
            statusElement.appendChild(newUpdate);
            
            // Scroll to bottom
            newUpdate.scrollIntoView({ behavior: 'smooth' });
        }
        
        // عرض رسالة انتهاء الوقت
        function showTimeoutMessage() {
            const message = document.createElement('div');
            message.className = 'contact-info';
            message.style.background = 'rgba(255, 152, 0, 0.2)';
            message.style.borderLeftColor = '#FF9800';
            message.innerHTML = `
                <h4><i class="fas fa-exclamation-triangle"></i> ملاحظة مهمة</h4>
                <p>إذا استغرقت العملية أكثر من 90 دقيقة، يرجى التواصل مع الدعم الفني للتأكد من حالة طلبك.</p>
            `;
            document.querySelector('.pending-container').insertBefore(message, document.querySelector('.action-buttons'));
        }
        
        // العد التنازلي للتحديث التلقائي
        function startCountdown() {
            let countdown = 30;
            const countdownElement = document.getElementById('countdown');
            
            const countdownInterval = setInterval(() => {
                countdown--;
                countdownElement.textContent = countdown;
                
                if (countdown <= 0) {
                    countdown = 30;
                    checkPaymentStatus();
                }
            }, 1000);
            
            return countdownInterval;
        }
        
        // بدء التحديث التلقائي
        let refreshInterval = startCountdown();
        
        // تحديث يدوي عند النقر على الزر
        window.checkPaymentStatus = checkPaymentStatus;
        
        // بدء الفحوصات عند تحميل الصفحة
        document.addEventListener('DOMContentLoaded', function() {
            checkPaymentStatus(); // فحص أولي
            
            // إضافة تأثيرات للعناصر
            const elements = document.querySelectorAll('.pending-container > *');
            elements.forEach((element, index) => {
                element.style.animation = `slideIn 0.5s ease ${index * 0.1}s both`;
            });
        });
        
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>
</html>