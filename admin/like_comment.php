<?php
session_start();
require_once '../../connect/connect.php';

// التحقق من وجود المستخدم
if (!isset($_SESSION['user'])) {
    header('HTTP/1.1 401 Unauthorized');
    echo json_encode(['error' => 'يجب تسجيل الدخول أولاً']);
    exit();
}

// التحقق من الطريقة
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP/1.1 405 Method Not Allowed');
    echo json_encode(['error' => 'طريقة غير مسموحة']);
    exit();
}

// قراءة البيانات المرسلة
$data = json_decode(file_get_contents('php://input'), true);

// التحقق من وجود البيانات المطلوبة
if (!isset($data['comment_id']) || !isset($data['action'])) {
    header('HTTP/1.1 400 Bad Request');
    echo json_encode(['error' => 'بيانات ناقصة']);
    exit();
}

$commentId = (int)$data['comment_id'];
$action = $data['action']; // 'like' or 'unlike'
$userId = $_SESSION['user']['id'];

try {
    if ($action === 'like') {
        // التحقق من عدم الإعجاب مسبقاً
        $stmt = $pdo->prepare("SELECT id FROM comment_likes WHERE user_id = :user_id AND comment_id = :comment_id");
        $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $stmt->bindParam(':comment_id', $commentId, PDO::PARAM_INT);
        $stmt->execute();
        
        if ($stmt->rowCount() === 0) {
            // إضافة الإعجاب
            $stmt = $pdo->prepare("
                INSERT INTO comment_likes (user_id, comment_id, created_at)
                VALUES (:user_id, :comment_id, NOW())
            ");
            $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
            $stmt->bindParam(':comment_id', $commentId, PDO::PARAM_INT);
            $stmt->execute();

            // تحديث عدد الإعجابات
            $stmt = $pdo->prepare("
                UPDATE comments SET like_count = like_count + 1 WHERE id = :comment_id
            ");
            $stmt->bindParam(':comment_id', $commentId, PDO::PARAM_INT);
            $stmt->execute();
        }
    } elseif ($action === 'unlike') {
        // إزالة الإعجاب
        $stmt = $pdo->prepare("
            DELETE FROM comment_likes WHERE user_id = :user_id AND comment_id = :comment_id
        ");
        $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $stmt->bindParam(':comment_id', $commentId, PDO::PARAM_INT);
        $stmt->execute();

        // تحديث عدد الإعجابات
        $stmt = $pdo->prepare("
            UPDATE comments SET like_count = GREATEST(0, like_count - 1) WHERE id = :comment_id
        ");
        $stmt->bindParam(':comment_id', $commentId, PDO::PARAM_INT);
        $stmt->execute();
    }

    // جلب عدد الإعجابات الجديد
    $stmt = $pdo->prepare("SELECT like_count FROM comments WHERE id = :comment_id");
    $stmt->bindParam(':comment_id', $commentId, PDO::PARAM_INT);
    $stmt->execute();
    $likeCount = $stmt->fetchColumn();

    // إرجاع النتيجة
    echo json_encode(['success' => true, 'like_count' => $likeCount]);

} catch (PDOException $e) {
    error_log("Database error: " . $e->getMessage());
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode(['error' => 'حدث خطأ أثناء معالجة الإعجاب']);
}
?>