<?php
header('Content-Type: application/json');
require_once '../../connect/connect.php';

session_start();

// التحقق من CSRF Token
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    echo json_encode(['success' => false, 'error' => 'رمز التحقق غير صالح']);
    exit();
}

if (!isset($_SESSION['user'])) {
    echo json_encode(['success' => false, 'error' => 'يجب تسجيل الدخول أولاً']);
    exit();
}

$response = ['success' => false, 'error' => ''];

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('الطريقة غير مسموح بها');
    }

    $userId = $_SESSION['user']['id'];
    $content = trim($_POST['content'] ?? '');
    $audienceType = $_POST['audience_type'] ?? 'public';

    // التحقق من المحتوى
    if (empty($content)) {
        throw new Exception('محتوى المنشور مطلوب');
    }

    if (strlen($content) > 1000) {
        throw new Exception('المحتوى يجب أن يكون أقل من 1000 حرف');
    }

    // بدء المعاملة
    $pdo->beginTransaction();

    // إدخال المنشور
    $stmt = $pdo->prepare("INSERT INTO posts (user_id, content, audience_type, created_at) 
                          VALUES (?, ?, ?, NOW())");
    $stmt->execute([$userId, $content, $audienceType]);
    $postId = $pdo->lastInsertId();

    // معالجة الملفات المرفقة إن وجدت
    if (!empty($_FILES['media']['name'])) {
        $file = $_FILES['media'];
        $uploadDir = '../../uploads/';
        
        // إنشاء المجلد إذا لم يكن موجوداً
        if (!is_dir($uploadDir)) {
            if (!mkdir($uploadDir, 0755, true)) {
                throw new Exception('تعذر إنشاء مجلد التحميل');
            }
        }

        // التحقق من حجم الملف
        $maxFileSize = 5 * 1024 * 1024; // 5MB
        if ($file['size'] > $maxFileSize) {
            throw new Exception('حجم الملف كبير جداً (الحد الأقصى 5MB)');
        }

        // التحقق من نوع الملف
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'video/mp4', 'application/pdf'];
        if (!in_array($file['type'], $allowedTypes)) {
            throw new Exception('نوع الملف غير مسموح به');
        }

        // توليد اسم فريد للملف
        $fileName = uniqid() . '_' . basename($file['name']);
        $filePath = $uploadDir . $fileName;

        if (!move_uploaded_file($file['tmp_name'], $filePath)) {
            throw new Exception('فشل في رفع الملف');
        }

        // تحديد نوع الملف
        $fileType = strpos($file['type'], 'image/') === 0 ? 'image' : 
                   (strpos($file['type'], 'video/') === 0 ? 'video' : 'file');

        // إدخال معلومات الملف في قاعدة البيانات
        $stmt = $pdo->prepare("INSERT INTO media (user_id, post_id, file_path, file_name, file_type, created_at)
                              VALUES (?, ?, ?, ?, ?, NOW())");
        $stmt->execute([$userId, $postId, $filePath, $fileName, $fileType]);
        $mediaId = $pdo->lastInsertId();

        // ربط الملف بالمنشور
        $stmt = $pdo->prepare("UPDATE posts SET media_id = ? WHERE id = ?");
        $stmt->execute([$mediaId, $postId]);
    }

    // تأكيد المعاملة
    $pdo->commit();
    
    $response['success'] = true;
    $response['message'] = 'تم نشر المنشور بنجاح';

} catch (PDOException $e) {
    $pdo->rollBack();
    $response['error'] = 'خطأ في قاعدة البيانات: ' . $e->getMessage();
    error_log("Database Error: " . $e->getMessage());
} catch (Exception $e) {
    $response['error'] = $e->getMessage();
    error_log("Error: " . $e->getMessage());
}

echo json_encode($response);
?>