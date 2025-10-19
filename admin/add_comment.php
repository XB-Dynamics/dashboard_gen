<?php
session_start();
require_once '../../connect/connect.php';

if (!isset($_SESSION['user'])) {
    header('HTTP/1.1 401 Unauthorized');
    echo json_encode(['error' => 'يجب تسجيل الدخول أولاً']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP/1.1 405 Method Not Allowed');
    echo json_encode(['error' => 'طريقة غير مسموحة']);
    exit();
}

if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    header('HTTP/1.1 403 Forbidden');
    echo json_encode(['error' => 'رمز CSRF غير صالح أو منتهي الصلاحية']);
    exit();
}

$postId = isset($_POST['post_id']) ? (int)$_POST['post_id'] : 0;
$content = isset($_POST['content']) ? trim($_POST['content']) : '';
$userId = $_SESSION['user']['id'];

if ($postId <= 0) {
    header('HTTP/1.1 400 Bad Request');
    echo json_encode(['error' => 'معرف المنشور غير صالح']);
    exit();
}

if (empty($content)) {
    header('HTTP/1.1 400 Bad Request');
    echo json_encode(['error' => 'محتوى التعليق لا يمكن أن يكون فارغاً']);
    exit();
}

try {
    $pdo->beginTransaction();

    $stmt = $pdo->prepare("
        INSERT INTO comments (post_id, user_id, content, created_at)
        VALUES (:post_id, :user_id, :content, NOW())
    ");
    $stmt->execute([
        ':post_id' => $postId,
        ':user_id' => $userId,
        ':content' => $content
    ]);
    $commentId = $pdo->lastInsertId();

    $stmt = $pdo->prepare("
        UPDATE posts SET comment_count = comment_count + 1 
        WHERE id = :post_id
    ");
    $stmt->execute([':post_id' => $postId]);

    $stmt = $pdo->prepare("
        SELECT c.*, u.full_name AS author_name, u.profile_picture AS author_img
        FROM comments c
        JOIN users u ON c.user_id = u.id
        WHERE c.id = :comment_id
    ");
    $stmt->execute([':comment_id' => $commentId]);
    $comment = $stmt->fetch(PDO::FETCH_ASSOC);

    function time_elapsed_string($datetime) {
        $now = new DateTime();
        $postDate = new DateTime($datetime);
        $interval = $now->diff($postDate);
        
        if ($interval->y >= 1) return "منذ {$interval->y} سنة";
        if ($interval->m >= 1) return "منذ {$interval->m} شهر";
        if ($interval->d >= 1) return "منذ {$interval->d} يوم";
        if ($interval->h >= 1) return "منذ {$interval->h} ساعة";
        if ($interval->i >= 1) return "منذ {$interval->i} دقيقة";
        return "الآن";
    }
    
    $comment['time_ago'] = time_elapsed_string($comment['created_at']);
    $comment['like_count'] = 0;
    $comment['is_liked'] = false;

    $pdo->commit();

    echo json_encode([
        'success' => true, 
        'comment' => $comment,
        'csrf_token' => bin2hex(random_bytes(32))
    ]);
    
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

} catch (Exception $e) {
    if ($pdo->inTransaction()) $pdo->rollBack();
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode(['error' => $e->getMessage()]);
}