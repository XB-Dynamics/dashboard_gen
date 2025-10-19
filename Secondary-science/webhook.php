<?php
// webhook.php
require_once '../../connect/connect/connect.php';

// إعدادات Fawaterak
$FAWATERAK_VENDOR_KEY = "c807d980efffb9f3a56a028eaa429cfd00b95e4560f488aeb7";

// دالة لتسجيل العمليات في ملف log
function logWebhook($message, $data = []) {
    $logFile = __DIR__ . '/webhook_log.txt';
    $timestamp = date('Y-m-d H:i:s');
    $logMessage = "[$timestamp] $message";
    
    if (!empty($data)) {
        $logMessage .= " - Data: " . json_encode($data);
    }
    
    $logMessage .= "\n";
    file_put_contents($logFile, $logMessage, FILE_APPEND | LOCK_EX);
}

// دالة لتوليد مفتاح التجزئة للتحقق
function generateWebhookHashKey($data, $type = 'paid') {
    global $FAWATERAK_VENDOR_KEY;
    
    if ($type === 'paid') {
        $queryParam = "InvoiceId=" . ($data['invoice_id'] ?? '') . 
                     "&InvoiceKey=" . ($data['invoice_key'] ?? '') . 
                     "&PaymentMethod=" . ($data['payment_method'] ?? '');
    } else {
        $queryParam = "referenceId=" . ($data['referenceId'] ?? '') . 
                     "&PaymentMethod=" . ($data['paymentMethod'] ?? '');
    }
    
    $hash = hash_hmac('sha256', $queryParam, $FAWATERAK_VENDOR_KEY, false);
    return $hash;
}

// دالة للتحقق من صحة التوقيع
function verifyWebhookSignature($receivedHash, $data, $type = 'paid') {
    $generatedHash = generateWebhookHashKey($data, $type);
    return hash_equals($receivedHash, $generatedHash);
}

// دالة لإضافة النقاط إلى المستخدم
function addPointsToUser($userId, $pointsToAdd = 250) {
    global $pdo;
    
    try {
        // 1. تحديث نقاط المستخدم في جدول users
        $updateUser = $pdo->prepare("
            UPDATE users 
            SET points = points + ?, 
                points_last_updated = NOW(),
                points_expiry_date = DATE_ADD(NOW(), INTERVAL 30 DAY),
                type = 'premium'
            WHERE id = ?
        ");
        $updateUser->execute([$pointsToAdd, $userId]);
        
        // 2. تسجيل العملية في جدول user_points_history
        $getCurrentPoints = $pdo->prepare("SELECT points FROM users WHERE id = ?");
        $getCurrentPoints->execute([$userId]);
        $currentPoints = $getCurrentPoints->fetchColumn();
        
        $insertHistory = $pdo->prepare("
            INSERT INTO user_points_history (
                user_id, 
                points_added, 
                points_remaining, 
                added_date, 
                expiry_date, 
                is_expired
            ) VALUES (?, ?, ?, NOW(), DATE_ADD(NOW(), INTERVAL 30 DAY), 0)
        ");
        $insertHistory->execute([$userId, $pointsToAdd, $currentPoints]);
        
        logWebhook("تم إضافة $pointsToAdd نقطة للمستخدم $userId، الرصيد الحالي: $currentPoints");
        return true;
        
    } catch (Exception $e) {
        logWebhook("خطأ في إضافة النقاط للمستخدم $userId: " . $e->getMessage());
        return false;
    }
}

// دالة لمعالجة الدفعات المدفوعة
function handlePaidInvoice($data) {
    global $pdo;
    
    logWebhook("معالجة فاتورة مدفوعة", $data);
    
    try {
        // التحقق من وجود الفاتورة في قاعدة البيانات
        $invoiceKey = $data['invoice_key'];
        $invoiceId = $data['invoice_id'];
        $paymentMethod = $data['payment_method'];
        $referenceNumber = $data['referenceNumber'] ?? null;
        $payload = $data['pay_load'] ?? null;
        
        // فك تشفير payload إذا كان موجوداً
        $payloadData = null;
        if ($payload && is_string($payload)) {
            $payloadData = json_decode($payload, true);
        }
        
        // الحصول على user_id من payload
        $userId = $payloadData['user_id'] ?? null;
        $subscriptionType = $payloadData['subscription_type'] ?? 'monthly';
        
        if (!$userId) {
            logWebhook("خطأ: user_id غير موجود في payload");
            return false;
        }
        
        // التحقق من أن المستخدم موجود
        $checkUser = $pdo->prepare("SELECT id, name FROM users WHERE id = ?");
        $checkUser->execute([$userId]);
        $user = $checkUser->fetch(PDO::FETCH_ASSOC);
        
        if (!$user) {
            logWebhook("خطأ: المستخدم غير موجود - ID: $userId");
            return false;
        }
        
        // بدء transaction
        $pdo->beginTransaction();
        
        // 1. إضافة 250 نقطة للمستخدم
        $pointsAdded = addPointsToUser($userId, 250);
        
        if (!$pointsAdded) {
            throw new Exception("فشل في إضافة النقاط");
        }
        
        // 2. تسجيل عملية الدفع (إذا كان لديك جدول payments)
        // يمكنك إنشاء جدول payments إذا لم يكن موجوداً
        
        // 3. تحديث نوع المستخدم إلى premium
        $updateUserType = $pdo->prepare("UPDATE users SET type = 'premium' WHERE id = ?");
        $updateUserType->execute([$userId]);
        
        $pdo->commit();
        
        // 4. إرسال إشعار للمستخدم
        sendNotificationToUser($userId, "تم تفعيل اشتراكك بنجاح! تم إضافة 250 نقطة إلى رصيدك.");
        
        logWebhook("تم معالجة الفاتورة بنجاح للمستخدم: " . $user['name'] . " (ID: $userId)");
        return true;
        
    } catch (Exception $e) {
        $pdo->rollBack();
        logWebhook("خطأ في معالجة الفاتورة: " . $e->getMessage());
        return false;
    }
}

// دالة لمعالجة الفواتير الملغاة
function handleExpiredTransaction($data) {
    global $pdo;
    
    logWebhook("معالجة معاملة منتهية", $data);
    
    try {
        $referenceId = $data['referenceId'];
        $transactionKey = $data['transactionKey'];
        $paymentMethod = $data['paymentMethod'];
        
        // هنا يمكنك إضافة أي معالجة للفواتير الملغاة إذا لزم الأمر
        logWebhook("معاملة منتهية: $referenceId - $paymentMethod");
        return true;
        
    } catch (Exception $e) {
        logWebhook("خطأ في معالجة المعاملة المنتهية: " . $e->getMessage());
        return false;
    }
}

// دالة لإرسال إشعار للمستخدم
function sendNotificationToUser($userId, $message) {
    // هنا يمكنك إضافة كود إرسال الإشعارات
    // مثل: إرسال بريد إلكتروني، إشعار داخل التطبيق، إلخ.
    logWebhook("إشعار للمستخدم $userId: $message");
}

// المعالجة الرئيسية للـ Webhook
function processWebhook() {
    // الحصول على البيانات المرسلة
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);
    
    if (!$data) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid JSON data']);
        logWebhook("بيانات JSON غير صالحة");
        return;
    }
    
    logWebhook("طلب Webhook مستلم", $data);
    
    // تحديد نوع الـ Webhook
    $webhookType = 'paid';
    if (isset($data['status']) && $data['status'] === 'EXPIRED') {
        $webhookType = 'expired';
    }
    
    // التحقق من التوقيع
    $receivedHash = $data['hashKey'] ?? '';
    
    if (!verifyWebhookSignature($receivedHash, $data, $webhookType)) {
        http_response_code(401);
        echo json_encode(['error' => 'Invalid signature']);
        logWebhook("توقيع غير صالح", ['received' => $receivedHash]);
        return;
    }
    
    // معالجة الـ Webhook حسب النوع
    $success = false;
    
    if ($webhookType === 'paid') {
        $success = handlePaidInvoice($data);
    } else {
        $success = handleExpiredTransaction($data);
    }
    
    if ($success) {
        http_response_code(200);
        echo json_encode([
            'status' => 'success', 
            'message' => 'Webhook processed successfully',
            'points_added' => 250
        ]);
        logWebhook("Webhook معالج بنجاح - تم إضافة 250 نقطة");
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Failed to process webhook']);
        logWebhook("فشل في معالجة Webhook");
    }
}

// تشغيل معالجة الـ Webhook
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // معالجة Webhook لطلبات POST فقط
    processWebhook();
} else {
    // عرض صفحة معلومات للطلبات GET
    displayWebhookInfo();
}

// دالة لعرض معلومات عن Webhook للطلبات GET
function displayWebhookInfo() {
    ?>
    <!DOCTYPE html>
    <html lang="ar" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fawaterk Webhook - Genius AI</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Tajawal', sans-serif;
            }
            
            body {
                background: linear-gradient(135deg, #1a1a1a, #2d2d2d);
                color: #fff;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
                padding: 20px;
            }
            
            .container {
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(10px);
                border-radius: 20px;
                padding: 40px;
                border: 1px solid rgba(255, 255, 255, 0.2);
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
                max-width: 600px;
                width: 100%;
            }
            
            .icon {
                font-size: 4rem;
                margin-bottom: 20px;
                color: #4CAF50;
            }
            
            h1 {
                font-size: 2.5rem;
                margin-bottom: 15px;
                background: linear-gradient(45deg, #4CAF50, #2196F3);
                -webkit-background-clip: text;
                background-clip: text;
                color: transparent;
            }
            
            .status {
                display: inline-block;
                padding: 10px 20px;
                background: rgba(76, 175, 80, 0.2);
                border-radius: 50px;
                margin: 20px 0;
                border: 1px solid #4CAF50;
            }
            
            .info {
                margin-top: 30px;
                padding: 20px;
                background: rgba(255, 255, 255, 0.05);
                border-radius: 10px;
                text-align: right;
            }
            
            .info h3 {
                color: #FFD93D;
                margin-bottom: 15px;
                text-align: center;
            }
            
            .feature {
                display: flex;
                align-items: center;
                gap: 15px;
                padding: 10px;
                margin: 10px 0;
                background: rgba(255, 255, 255, 0.05);
                border-radius: 10px;
            }
            
            .feature i {
                color: #4CAF50;
                font-size: 1.5rem;
            }
            
            .points-badge {
                background: linear-gradient(45deg, #FFD93D, #FF6B6B);
                padding: 15px;
                border-radius: 10px;
                margin: 20px 0;
                font-size: 1.2rem;
            }
            
            @media (max-width: 768px) {
                .container {
                    padding: 20px;
                }
                
                h1 {
                    font-size: 2rem;
                }
                
                .icon {
                    font-size: 3rem;
                }
            }
        </style>
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body>
        <div class="container">
            <i class="fas fa-webhook icon"></i>
            <h1>نظام Webhook - Genius AI</h1>
            <p>استقبال إشعارات الدفع التلقائية من Fawaterk</p>
            
            <div class="status">
                <i class="fas fa-check-circle"></i> النظام نشط وجاهز لاستقبال الدفعات
            </div>
            
            <div class="points-badge">
                <i class="fas fa-gift"></i> مكافأة الاشتراك: 250 نقطة
            </div>
            
            <div class="info">
                <h3><i class="fas fa-cogs"></i> آلية العمل</h3>
                
                <div class="feature">
                    <i class="fas fa-money-bill-wave"></i>
                    <div>
                        <strong>الدفع الناجح</strong>
                        <p>عند اكتمال العملية، يتم إضافة 250 نقطة تلقائياً</p>
                    </div>
                </div>
                
                <div class="feature">
                    <i class="fas fa-database"></i>
                    <div>
                        <strong>تسجيل النقاط</strong>
                        <p>يتم حفظ سجل النقاط في قاعدة البيانات</p>
                    </div>
                </div>
                
                <div class="feature">
                    <i class="fas fa-shield-alt"></i>
                    <div>
                        <strong>حماية وأمان</strong>
                        <p>جميع العمليات مؤمنة ومشفرة</p>
                    </div>
                </div>
                
                <div class="feature">
                    <i class="fas fa-history"></i>
                    <div>
                        <strong>سجل العمليات</strong>
                        <p>جميع العمليات مسجلة في ملفات السجلات</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
    <?php
}
?>