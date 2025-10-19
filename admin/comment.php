<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header('Content-Type: application/json');

session_start();
require_once '../../connect/connect.php';

// التحقق من تسجيل الدخول
if (!isset($_SESSION['user'])) {
    echo json_encode(['error' => 'يجب تسجيل الدخول أولاً']);
    exit();
}

$currentUser = $_SESSION['user'];
$userId = $currentUser['id'];

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!isset($input['post_id']) || empty(trim($input['content']))) {
            throw new Exception('بيانات غير صحيحة');
        }
        
        $postId = (int)$input['post_id'];
        $content = trim($input['content']);
        $parentId = isset($input['parent_id']) ? (int)$input['parent_id'] : null;
        
        // التحقق من وجود المنشور
        $stmt = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
        $stmt->execute([$postId]);
        $post = $stmt->fetch();
        
        if (!$post) {
            throw new Exception('المنشور غير موجود');
        }
        
        // إضافة التعليق
        $stmt = $pdo->prepare("INSERT INTO comments (post_id, user_id, parent_id, content, created_at) 
                              VALUES (?, ?, ?, ?, NOW())");
        $stmt->execute([$postId, $userId, $parentId, $content]);
        $commentId = $pdo->lastInsertId();
        
        // تحديث عدد التعليقات في المنشور
        $stmt = $pdo->prepare("UPDATE posts SET comment_count = comment_count + 1 WHERE id = ?");
        $stmt->execute([$postId]);
        
        // جلب معلومات المستخدم لاستخدامها في الرد
        $stmt = $pdo->prepare("SELECT u.full_name, u.profile_picture FROM users u WHERE u.id = ?");
        $stmt->execute([$userId]);
        $user = $stmt->fetch();
        
        echo json_encode([
            'success' => 'تم إضافة التعليق',
            'comment' => [
                'id' => $commentId,
                'content' => htmlspecialchars($content),
                'created_at' => 'الآن',
                'author_name' => htmlspecialchars($user['full_name']),
                'author_img' => htmlspecialchars($user['profile_picture']),
                'like_count' => 0
            ]
        ]);
    }
} catch (Exception $e) {
    http_response_code(400);
    echo json_encode(['error' => $e->getMessage()]);
}
?>