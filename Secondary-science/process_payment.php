<?php
session_start();
require_once '../../connect/connect/connect.php';

// التحقق من أن المستخدم مسجل الدخول
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: ../../index.php");
    exit();
}

// جلب بيانات المستخدم من الجلسة
$userName = $_SESSION["user_name"] ?? "مستخدم";
$userId = $_SESSION['user_id'] ?? 0;

// معالجة بيانات الدفع
$paymentMethod = $_POST['payment_method'] ?? '';
$amount = $_POST['amount'] ?? '5.00';
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

// بيانات Fawaterak
$fawaterakHashKey = generateFawaterakHashKey();

function generateFawaterakHashKey() {
    $secretKey = "c807d980efffb9f3a56a028eaa429cfd00b95e4560f488aeb7";
    $providerKey = "FAWATERAK.16353";
    $domain = "https://geniusaipro.online";
    
    $queryParam = "Domain=" . $domain . "&ProviderKey=" . $providerKey;
    return hash_hmac('sha256', $queryParam, $secretKey, false);
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>معالجة الدفع - Genius AI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Tajawal', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 100%);
            color: #ffffff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .processing-container {
            text-align: center;
            max-width: 500px;
            width: 100%;
        }
        
        .loading-spinner {
            width: 80px;
            height: 80px;
            border: 5px solid rgba(255, 217, 61, 0.3);
            border-top: 5px solid #FFD93D;
            border-radius: 50%;
            animation: spin 1.5s linear infinite;
            margin: 0 auto 30px;
        }
        
        .processing-text {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #FFD93D;
        }
        
        .processing-subtext {
            color: #666;
            margin-bottom: 30px;
        }
        
        .error-container {
            text-align: center;
            padding: 30px;
            color: #ff6b6b;
        }
        
        .error-icon {
            font-size: 3rem;
            margin-bottom: 15px;
        }
        
        .error-title {
            margin-bottom: 10px;
            color: #ff6b6b;
        }
        
        .retry-btn {
            padding: 12px 24px;
            background: #ff6b6b;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 20px;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="processing-container">
        <div class="loading-spinner"></div>
        <div class="processing-text">جاري تحويلك إلى بوابة الدفع...</div>
        <div class="processing-subtext">سيتم توجيهك إلى صفحة الدفع خلال ثوانٍ</div>
    </div>
    
    <div id="fawaterkDivId" style="display: none;"></div>

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
                "cartTotal": "5.00",
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
                    "price": "5.00",
                    "quantity": "1"
                }],
                "payLoad": {
                    "user_id": "<?php echo $userId; ?>",
                    "subscription_type": "monthly",
                    "product": "genius_ai_subscription",
                    "payment_method": "<?php echo $paymentMethod; ?>"
                }
            }
        };

        // طباعة البيانات للتdebug
        console.log('بيانات العميل:', {
            first_name: "<?php echo $userFirstName; ?>",
            last_name: "<?php echo $userLastName; ?>",
            email: "<?php echo $userEmail; ?>",
            phone: "<?php echo $userPhone; ?>",
            address: "<?php echo $userAddress; ?>"
        });

        // تهيئة Fawaterak عند تحميل الصفحة
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                // إنشاء نموذج لإرسال البيانات
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = 'https://app.fawaterk.com/api/v2/invoice/initiate';
                form.target = '_blank'; // فتح في نافذة جديدة
                
                // إضافة البيانات للنموذج
                Object.keys(paymentData).forEach(key => {
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = key;
                    input.value = typeof paymentData[key] === 'object' 
                        ? JSON.stringify(paymentData[key]) 
                        : paymentData[key];
                    form.appendChild(input);
                });
                
                // إرسال النموذج
                document.body.appendChild(form);
                form.submit();
                
                // توجيه المستخدم بعد فترة
                setTimeout(function() {
                    window.location.href = 'pending.php?payment_method=<?php echo $paymentMethod; ?>';
                }, 3000);
                
            }, 2000);
        });
    </script>
</body>
</html>