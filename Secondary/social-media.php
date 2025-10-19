<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// تحسينات الأمان
header('X-Frame-Options: DENY');
header('X-Content-Type-Options: nosniff');
header('X-XSS-Protection: 1; mode=block');
header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
header('Referrer-Policy: strict-origin-when-cross-origin');

session_start([
    'cookie_httponly' => true,
    'cookie_secure' => true,
    'use_strict_mode' => true,
    'cookie_samesite' => 'Lax'
]);

if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

require_once '../../connect/connect.php';

// التحقق من تسجيل الدخول
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: ../../login.php");
    exit();
}

// جلب بيانات المستخدم من الجلسة
$currentUser = [
    'id' => $_SESSION["user_id"],
    'username' => $_SESSION["user_name"],
    'full_name' => $_SESSION["user_name"],
    'email' => $_SESSION["email"],
    'phone' => $_SESSION["phone"] ?? null,
    'is_admin' => $_SESSION["admin"] ?? false,
    'educationalStage' => $_SESSION["educationalStage"] ?? null,
    'profile_picture' => 'default_profile.jpg' // يمكنك تعديل هذا حسب نظامك
];

// إذا كان مسؤولاً، جلب بيانات إضافية من قاعدة البيانات
if ($currentUser['is_admin']) {
    $admin_query = "SELECT * FROM admins WHERE id = :id";
    $admin_stmt = $pdo->prepare($admin_query);
    $admin_stmt->bindParam(':id', $currentUser['id'], PDO::PARAM_INT);
    $admin_stmt->execute();
    $admin_data = $admin_stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($admin_data) {
        $currentUser = array_merge($currentUser, $admin_data);
    }
}

// Pagination
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 10;
$offset = ($page - 1) * $limit;

// جلب المنشورات من قاعدة البيانات
try {
    $stmt = $pdo->prepare("SELECT p.*, u.full_name as author_name, u.profile_picture as author_img 
                          FROM posts p 
                          JOIN users u ON p.user_id = u.id 
                          WHERE p.status = 'published' AND p.deleted_at IS NULL
                          ORDER BY p.is_pinned DESC, p.created_at DESC
                          LIMIT :limit OFFSET :offset");
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // جلب العدد الكلي للمنشورات
    $totalStmt = $pdo->query("SELECT COUNT(*) FROM posts WHERE status = 'published' AND deleted_at IS NULL");
    $totalPosts = $totalStmt->fetchColumn();
    $totalPages = ceil($totalPosts / $limit);
    
    // جلب الإعجابات لكل منشور للمستخدم الحالي
    $userLikes = [];
    if (!empty($posts)) {
        $postIds = array_column($posts, 'id');
        $placeholders = rtrim(str_repeat('?,', count($postIds)), ',');
        
        $stmt = $pdo->prepare("SELECT post_id FROM likes WHERE user_id = ? AND post_id IN ($placeholders)");
        $stmt->execute(array_merge([$currentUser['id']], $postIds));
        $userLikes = $stmt->fetchAll(PDO::FETCH_COLUMN);
    }
} catch (PDOException $e) {
    error_log("Database error: " . $e->getMessage());
    $posts = [];
    $error = "حدث خطأ في جلب المنشورات";
}

// دالة حساب الوقت المنقضي
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

// معالجة إنشاء منشور جديد
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_post'])) {
    header('Content-Type: application/json');
    
    try {
        // التحقق من رمز CSRF
        if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            throw new Exception('رمز CSRF غير صالح أو منتهي الصلاحية');
        }
        
        $content = trim($_POST['content'] ?? '');
        $audienceType = $_POST['audience_type'] ?? 'public';
        $userId = $currentUser['id'];
        
        // التحقق من وجود محتوى أو مرفق
        $fileProvided = isset($_FILES['media']) && $_FILES['media']['error'] === UPLOAD_ERR_OK;
        if (empty($content) && !$fileProvided) {
            throw new Exception('يجب إدخال محتوى أو رفع مرفق');
        }
        
        // بدء المعاملة
        $pdo->beginTransaction();

        // 1. إدخال المنشور بدون media_id (NULL)
        $stmt = $pdo->prepare("INSERT INTO posts (user_id, content, audience_type, created_at, updated_at) 
                              VALUES (?, ?, ?, NOW(), NOW())");
        $stmt->execute([$userId, $content, $audienceType]);
        $postId = $pdo->lastInsertId();
        
        $mediaId = null;
        if ($fileProvided) {
            $file = $_FILES['media'];
            $maxFileSize = 5 * 1024 * 1024; // 5MB
            $allowedTypes = [
                'image/jpeg' => 'image',
                'image/png' => 'image',
                'image/gif' => 'image',
                'video/mp4' => 'video',
                'video/quicktime' => 'video',
                'video/webm' => 'video',
                'audio/mpeg' => 'audio',
                'audio/wav' => 'audio',
                'application/pdf' => 'document',
                'application/msword' => 'document',
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => 'document'
            ];
            
            if (!is_uploaded_file($file['tmp_name'])) {
                throw new Exception('فشل في تحميل الملف');
            }
            
            if ($file['size'] > $maxFileSize) {
                throw new Exception('حجم الملف كبير جداً (الحد الأقصى 5MB)');
            }
            
            $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
            $mimeType = finfo_file($fileInfo, $file['tmp_name']);
            finfo_close($fileInfo);
            
            if (!array_key_exists($mimeType, $allowedTypes)) {
                throw new Exception('نوع الملف غير مسموح به: ' . $mimeType);
            }
            
            $uploadDir = '../uploads/media/';
            if (!file_exists($uploadDir)) {
                if (!mkdir($uploadDir, 0777, true)) {
                    throw new Exception('لا يمكن إنشاء مجلد التحميل');
                }
            }
            
            $fileExt = pathinfo($file['name'], PATHINFO_EXTENSION);
            $fileName = uniqid() . '.' . $fileExt;
            $filePath = $uploadDir . $fileName;
            
            if (!move_uploaded_file($file['tmp_name'], $filePath)) {
                throw new Exception('فشل في حفظ الملف');
            }
            
            $fileType = $allowedTypes[$mimeType];
            
            $stmt = $pdo->prepare("INSERT INTO media (user_id, post_id, file_name, file_path, file_type, file_size, mime_type, created_at) 
                          VALUES (?, ?, ?, ?, ?, ?, ?, NOW())");
            $stmt->execute([
                $userId,
                $postId,
                $file['name'],
                $filePath,
                $fileType,
                $file['size'],
                $mimeType
            ]);
            $mediaId = $pdo->lastInsertId();
            
            $updateStmt = $pdo->prepare("UPDATE posts SET media_id = ? WHERE id = ?");
            $updateStmt->execute([$mediaId, $postId]);
        }
        
        $pdo->commit();
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        
        echo json_encode([
            'success' => 'تم نشر المنشور بنجاح',
            'post_id' => $postId
        ]);
        exit();
        
    } catch (Exception $e) {
        if (isset($pdo) && $pdo->inTransaction()) {
            $pdo->rollBack();
        }
        error_log("Post creation error: " . $e->getMessage());
        http_response_code(400);
        echo json_encode(['error' => $e->getMessage()]);
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Genius Social - منصة التواصل الاجتماعي للتعليم">
    <meta name="theme-color" content="#4361ee">
    <title>Genius Social - نظام التواصل الاجتماعي</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="social-media.css">
        <style>
                    /* أزرار التحكم في اللغة والثيم */
        .header-controls {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .header-btn {
            background: none;
            border: none;
            color: var(--primary-color);
            font-size: 24px;
            cursor: pointer;
            transition: var(--transition1);
            padding: 5px;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header-btn:hover {
            background-color: hsla(0, 0%, 100%, 0.1);
            transform: scale(1.1);
        }

        </style>

</head>
<body>
    
        <!-- شريط التنقل السفلي المحدث -->
    <?php include 'header.php'; ?>

    <div class="container">
        <!-- Left Sidebar -->
        <div class="sidebar">
            <div class="logo">
                <i class="fas fa-brain"></i>
                <h1>Genius Social</h1>
            </div>
            
            <button class="post-btn" id="newPostBtn">
                <i class="fas fa-plus"></i>
                <span>نشر جديد</span>
            </button>
            
            <div class="user-profile">
                <img src="<?= htmlspecialchars($currentUser['profile_picture']) ?>" alt="صورة المستخدم" loading="lazy">
                <div class="user-info">
                    <h4><?= htmlspecialchars($currentUser['username']) ?></h4>
                    <p>@<?= htmlspecialchars(str_replace(' ', '', strtolower($currentUser['full_name']))) ?></p>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h2>Genius Social</h2>
                <div class="header-actions">
                    <div class="icon-btn">
                        <i class="fas fa-bell"></i>
                    </div>
                </div>
            </div>
            
            <!-- Create Post -->
            <div class="create-post" id="createPostSection">
                <form class="post-form" id="createPostForm" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
                    <input type="hidden" name="create_post" value="1">
                    <img src="<?= htmlspecialchars($currentUser['profile_picture']) ?>" alt="صورة المستخدم" loading="lazy">
                    <div class="post-input">
                        <textarea placeholder="ماذا تريد مشاركته اليوم؟" id="postText" name="content" maxlength="1000"></textarea>
                        
                        <div class="audience-selector">
                            <div class="audience-btn" id="audienceBtn">
                                <span>عام</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="audience-dropdown" id="audienceDropdown">
                                <div class="audience-option active" data-audience="public">
                                    <i class="fas fa-globe"></i>
                                    <span>عام</span>
                                </div>
                                <div class="audience-option" data-audience="school">
                                    <i class="fas fa-school"></i>
                                    <span>المدرسة فقط</span>
                                </div>
                                <div class="audience-option" data-audience="grade">
                                    <i class="fas fa-users"></i>
                                    <span>الصف الدراسي</span>
                                </div>
                                <div class="audience-option" data-audience="class">
                                    <i class="fas fa-user-friends"></i>
                                    <span>الفصل فقط</span>
                                </div>
                            </div>
                            <input type="hidden" name="audience_type" id="audienceType" value="public">
                        </div>
                        
                        <div class="media-preview" id="mediaPreview"></div>
                        <div class="char-counter" id="charCounter">0/1000</div>
                    </div>
                </form>
                
                <div class="post-options">
                    <div class="post-media">
                        <label class="media-btn">
                            <i class="fas fa-image"></i>
                            <input type="file" id="photoInput" name="media" accept="image/*" style="display: none;">
                        </label>
                        <label class="media-btn">
                            <i class="fas fa-video"></i>
                            <input type="file" id="videoInput" name="media" accept="video/*" style="display: none;">
                        </label>
                        <label class="media-btn">
                            <i class="fas fa-file"></i>
                            <input type="file" id="fileInput" name="media" accept=".pdf,.doc,.docx" style="display: none;">
                        </label>
                        <div class="media-btn" id="recordBtn">
                            <i class="fas fa-microphone"></i>
                        </div>
                    </div>
                    <button type="button" class="post-submit" id="postSubmit" disabled>نشر</button>
                </div>
            </div>
            
            <!-- Posts Feed -->
            <div class="posts-feed" id="postsFeed">
                <?php if (!empty($posts)): ?>
                    <?php foreach ($posts as $post): 
                        $isLiked = in_array($post['id'], $userLikes);
                    ?>
                        <div class="post" data-id="<?= $post['id'] ?>">
                            <div class="post-header">
                                <img src="<?= htmlspecialchars($post['author_img']) ?>" alt="صورة المؤلف" class="post-author-img" loading="lazy">
                                <div class="post-author-info">
                                    <div class="post-author-name"><?= htmlspecialchars($post['author_name']) ?></div>
                                    <div class="post-author-username">@<?= htmlspecialchars(str_replace(' ', '', strtolower($post['author_name']))) ?></div>
                                    <div class="post-audience">
                                        <?php 
                                        $audienceText = '';
                                        $audienceIcon = '';
                                        switch($post['audience_type']) {
                                            case 'public':
                                                $audienceText = 'عام';
                                                $audienceIcon = '<i class="fas fa-globe"></i>';
                                                break;
                                            case 'school':
                                                $audienceText = 'المدرسة فقط';
                                                $audienceIcon = '<i class="fas fa-school"></i>';
                                                break;
                                            case 'grade':
                                                $audienceText = 'الصف الدراسي';
                                                $audienceIcon = '<i class="fas fa-users"></i>';
                                                break;
                                            case 'class':
                                                $audienceText = 'الفصل فقط';
                                                $audienceIcon = '<i class="fas fa-user-friends"></i>';
                                                break;
                                        }
                                        echo $audienceText . ' ' . $audienceIcon;
                                        ?>
                                    </div>
                                </div>
                                <div class="post-time"><?= time_elapsed_string($post['created_at']) ?></div>
                            </div>
                            <div class="post-content">
                                <div class="post-text"><?= nl2br(htmlspecialchars($post['content'])) ?></div>
                                <?php if (!empty($post['media_id'])): 
                                    $mediaStmt = $pdo->prepare("SELECT * FROM media WHERE id = ?");
                                    $mediaStmt->execute([$post['media_id']]);
                                    $media = $mediaStmt->fetch();
                                    if ($media): ?>
                                        <div class="post-media-content">
                                            <?php if ($media['file_type'] === 'image'): ?>
                                                <img src="<?= htmlspecialchars($media['file_path']) ?>" alt="صورة المنشور" loading="lazy">
                                            <?php elseif ($media['file_type'] === 'video'): ?>
                                                <video controls preload="metadata">
                                                    <source src="<?= htmlspecialchars($media['file_path']) ?>" type="<?= htmlspecialchars($media['mime_type']) ?>">
                                                    متصفحك لا يدعم تشغيل الفيديو
                                                </video>
                                            <?php elseif ($media['file_type'] === 'audio'): ?>
                                                <audio controls preload="metadata">
                                                    <source src="<?= htmlspecialchars($media['file_path']) ?>" type="<?= htmlspecialchars($media['mime_type']) ?>">
                                                    متصفحك لا يدعم تشغيل الصوت
                                                </audio>
                                            <?php else: ?>
                                                <div class="file-preview">
                                                    <i class="fas fa-file"></i>
                                                    <span><?= htmlspecialchars($media['file_name']) ?></span>
                                                    <a href="<?= htmlspecialchars($media['file_path']) ?>" download class="download-btn">
                                                        <i class="fas fa-download"></i> تحميل
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <div class="post-actions">
                                <div class="post-action <?= $isLiked ? 'liked' : '' ?>" data-action="like" data-post-id="<?= $post['id'] ?>">
                                    <i class="fas fa-heart"></i>
                                    <span><?= $post['like_count'] ?></span>
                                </div>
                                <div class="post-action" data-action="comment" data-post-id="<?= $post['id'] ?>">
                                    <i class="fas fa-comment"></i>
                                    <span><?= $post['comment_count'] ?></span>
                                </div>
                                <div class="post-action" data-action="share">
                                    <i class="fas fa-share"></i>
                                    <span><?= $post['share_count'] ?></span>
                                </div>
                            </div>
                            
                            <!-- نظام التعليقات الجديد -->
                            <div class="comment-section" id="commentSection-<?= $post['id'] ?>">
                                <div class="comments-list" id="commentsContainer-<?= $post['id'] ?>">
                                    <!-- سيتم تحميل التعليقات هنا عبر JavaScript -->
                                </div>
                                
                                <div class="reply-form">
                                    <img src="<?= htmlspecialchars($currentUser['profile_picture']) ?>" alt="صورة المستخدم" class="comment-author-img" loading="lazy">
                                    <div class="reply-input">
                                        <textarea placeholder="اكتب تعليقاً..." id="commentText-<?= $post['id'] ?>"></textarea>
                                        <div class="reply-media-options">
                                            <div class="reply-media-btn">
                                                <i class="fas fa-image"></i>
                                                <input type="file" class="reply-media-input" data-post-id="<?= $post['id'] ?>" accept="image/*">
                                            </div>
                                            <div class="reply-media-btn">
                                                <i class="fas fa-video"></i>
                                                <input type="file" class="reply-media-input" data-post-id="<?= $post['id'] ?>" accept="video/*">
                                            </div>
                                            <div class="reply-media-btn">
                                                <i class="fas fa-file"></i>
                                                <input type="file" class="reply-media-input" data-post-id="<?= $post['id'] ?>" accept=".pdf,.doc,.docx">
                                            </div>
                                            <div class="reply-media-btn reply-record-btn" data-post-id="<?= $post['id'] ?>">
                                                <i class="fas fa-microphone"></i>
                                            </div>
                                        </div>
                                        <div class="reply-media-preview" id="replyMediaPreview-<?= $post['id'] ?>"></div>
                                        <button class="reply-submit" id="commentSubmit-<?= $post['id'] ?>">
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <?php if ($post['comment_count'] > 0): ?>
                                <a class="show-comments" data-post-id="<?= $post['id'] ?>" data-comment-count="<?= $post['comment_count'] ?>">
                                    عرض التعليقات (<?= $post['comment_count'] ?>)
                                </a>
                            <?php else: ?>
                                <a class="show-comments" data-post-id="<?= $post['id'] ?>" data-comment-count="0">
                                    اضافة تعليق
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                    
                    <!-- Pagination -->
                    <div class="pagination">
                        <?php if ($page > 1): ?>
                            <a href="?page=<?= $page - 1 ?>" class="page-link">السابق</a>
                        <?php endif; ?>
                        
                        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                            <a href="?page=<?= $i ?>" class="page-link <?= $i == $page ? 'active' : '' ?>"><?= $i ?></a>
                        <?php endfor; ?>
                        
                        <?php if ($page < $totalPages): ?>
                            <a href="?page=<?= $page + 1 ?>" class="page-link">التالي</a>
                        <?php endif; ?>
                    </div>
                <?php else: ?>
                    <div class="no-posts">
                        <i class="fas fa-newspaper"></i>
                        <p>لا توجد منشورات لعرضها</p>
                    </div>
                <?php endif; ?>
            </div>
            
            <div class="loading-spinner" id="loadingSpinner"></div>
        </div>
        
        <!-- Right Sidebar -->
        <div class="right-sidebar">
            <div class="search-box">
                <input type="text" placeholder="بحث في Genius Social">
                <i class="fas fa-search"></i>
            </div>
        </div>
    </div>
    
    <!-- Bottom Navigation -->
    <div class="bottom-nav">

    </div>
    
    <!-- Post Modal -->
    <div class="modal" id="postModal">
        <div class="modal-content">
            <div class="modal-body" id="modalBody">
                <!-- محتوى المنشور سيتم تحميله هنا -->
            </div>
        </div>
    </div>

    <script>
        // دالة للتنقل بين الصفحات
        function navigateTo(pageUrl) {
            document.querySelectorAll('.bottom-nav-item').forEach(item => {
                item.classList.remove('active');
            });
            event.currentTarget.classList.add('active');
            window.location.href = pageUrl;
        }

        // تحديد العنصر النشط بناءً على الصفحة الحالية
        document.addEventListener('DOMContentLoaded', function() {
            const currentPage = window.location.pathname.split('/').pop();
            const activeItem = document.querySelector(`.bottom-nav-item[data-page="${currentPage.replace('.php', '')}"]`);
            
            if (activeItem) {
                document.querySelectorAll('.bottom-nav-item').forEach(item => {
                    item.classList.remove('active');
                });
                activeItem.classList.add('active');
            }
            
            // عرض رسالة نجاح إذا تم إنشاء منشور جديد
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('success')) {
                showNotification('تم نشر المنشور بنجاح!', 'success');
            }
        });

        // DOM Elements
        const postText = document.getElementById('postText');
        const photoInput = document.getElementById('photoInput');
        const videoInput = document.getElementById('videoInput');
        const fileInput = document.getElementById('fileInput');
        const recordBtn = document.getElementById('recordBtn');
        const mediaPreview = document.getElementById('mediaPreview');
        const postSubmit = document.getElementById('postSubmit');
        const audienceBtn = document.getElementById('audienceBtn');
        const audienceDropdown = document.getElementById('audienceDropdown');
        const audienceOptions = document.querySelectorAll('.audience-option');
        const audienceType = document.getElementById('audienceType');
        const createPostForm = document.getElementById('createPostForm');
        const charCounter = document.getElementById('charCounter');
        const loadingSpinner = document.getElementById('loadingSpinner');
        const newPostBtn = document.getElementById('newPostBtn');
        const createPostSection = document.getElementById('createPostSection');

        // Current State
        let currentAudience = 'public';
        let currentMedia = {
            type: null,
            file: null
        };
        let isRecording = false;
        let mediaRecorder;
        let audioChunks = [];
        let isLoading = false;
        let currentPage = <?= $page ?>;
        let totalPages = <?= $totalPages ?>;

        // Initialize
        setupEventListeners();
        updateCharCounter(); // تحديث العداد عند التحميل
        togglePostSubmit(); // تحديث حالة زر النشر

        function setupEventListeners() {
            // Post creation
            if (postText) {
                postText.addEventListener('input', togglePostSubmit);
                postText.addEventListener('input', updateCharCounter);
            }
            
            if (photoInput) {
                photoInput.addEventListener('change', handleImageUpload);
            }
            
            if (videoInput) {
                videoInput.addEventListener('change', handleVideoUpload);
            }
            
            if (fileInput) {
                fileInput.addEventListener('change', handleFileUpload);
            }
            
            if (recordBtn) {
                recordBtn.addEventListener('click', toggleRecording);
            }
            
            if (audienceBtn) {
                audienceBtn.addEventListener('click', toggleAudienceDropdown);
            }
            
            if (audienceOptions) {
                audienceOptions.forEach(option => {
                    option.addEventListener('click', () => {
                        selectAudience(option);
                    });
                });
            }
            
            document.addEventListener('click', (e) => {
                if (audienceBtn && !audienceBtn.contains(e.target) && 
                    audienceDropdown && !audienceDropdown.contains(e.target)) {
                    audienceDropdown.classList.remove('active');
                }
            });
            
            if (newPostBtn) {
                newPostBtn.addEventListener('click', () => {
                    createPostSection.scrollIntoView({ behavior: 'smooth' });
                    postText.focus();
                });
            }
            
            if (postSubmit) {
                postSubmit.addEventListener('click', function(e) {
                    e.preventDefault();
                    createPostForm.dispatchEvent(new Event('submit'));
                });
            }
            
            if (createPostForm) {
                createPostForm.addEventListener('submit', async function(e) {
                    e.preventDefault();
                    
                    const originalBtnText = postSubmit.innerHTML;
                    postSubmit.disabled = true;
                    postSubmit.innerHTML = '<i class="fas fa-spinner fa-spin"></i> جاري النشر...';
                    
                    try {
                        const formData = new FormData(createPostForm);
                        
                        if (currentMedia.file) {
                            let fileName = 'file';
                            
                            if (currentMedia.type === 'audio') {
                                fileName = 'recording.wav';
                            } else if (currentMedia.file.name) {
                                fileName = currentMedia.file.name;
                            }
                            
                            formData.append('media', currentMedia.file, fileName);
                        }
                        
                        const response = await fetch('social-media.php', {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'Accept': 'application/json'
                            }
                        });
                        
                        if (!response.ok) {
                            const errorData = await response.json().catch(() => ({}));
                            throw new Error(errorData.error || 'حدث خطأ غير متوقع');
                        }
                        
                        const data = await response.json();
                        
                        if (data.error) {
                            throw new Error(data.error);
                        }
                        
                        showNotification(data.success || 'تم نشر المنشور بنجاح', 'success');
                        
                        createPostForm.reset();
                        mediaPreview.innerHTML = '';
                        currentMedia = { type: null, file: null };
                        togglePostSubmit();
                        updateCharCounter();
                        
                        setTimeout(() => {
                            window.location.reload();
                        }, 1500);
                        
                    } catch (error) {
                        console.error('Error:', error);
                        showNotification(error.message || 'حدث خطأ أثناء حفظ المنشور', 'error');
                    } finally {
                        postSubmit.disabled = false;
                        postSubmit.innerHTML = originalBtnText;
                    }
                });
            }

            window.addEventListener('scroll', loadMorePosts);
            
            setupLikeCommentListeners();
        }

        function togglePostSubmit() {
            if (!postSubmit) return;
            
            const hasContent = postText && postText.value.trim() !== '';
            const hasMedia = currentMedia.file !== null;
            postSubmit.disabled = !(hasContent || hasMedia);
        }

        function updateCharCounter() {
            if (!charCounter) return;
            
            const length = postText ? postText.value.length : 0;
            charCounter.textContent = `${length}/1000`;
            if (length > 900) {
                charCounter.classList.add('error');
                charCounter.classList.remove('warning');
            } else if (length > 800) {
                charCounter.classList.add('warning');
                charCounter.classList.remove('error');
            } else {
                charCounter.classList.remove('warning', 'error');
            }
        }

        function handleImageUpload(e) {
            const file = e.target.files[0];
            if (!file) return;
            
            const maxFileSize = 5 * 1024 * 1024;
            if (file.size > maxFileSize) {
                showNotification('حجم الملف كبير جداً (الحد الأقصى 5MB)', 'error');
                e.target.value = '';
                return;
            }
            
            currentMedia = {
                type: 'image',
                file: file
            };
            
            const reader = new FileReader();
            reader.onload = function(event) {
                mediaPreview.innerHTML = `
                    <img src="${event.target.result}" alt="صورة المنشور" loading="lazy">
                    <div class="remove-media" id="removeMedia">
                        <i class="fas fa-times"></i>
                    </div>
                `;
                
                const removeBtn = document.getElementById('removeMedia');
                if (removeBtn) {
                    removeBtn.addEventListener('click', removeMedia);
                }
                togglePostSubmit();
            };
            reader.readAsDataURL(file);
        }

        function handleVideoUpload(e) {
            const file = e.target.files[0];
            if (!file) return;
            
            const maxFileSize = 5 * 1024 * 1024;
            if (file.size > maxFileSize) {
                showNotification('حجم الملف كبير جداً (الحد الأقصى 5MB)', 'error');
                e.target.value = '';
                return;
            }
            
            currentMedia = {
                type: 'video',
                file: file
            };
            
            const reader = new FileReader();
            reader.onload = function(event) {
                mediaPreview.innerHTML = `
                    <video controls preload="metadata">
                        <source src="${event.target.result}" type="${file.type}">
                        متصفحك لا يدعم تشغيل الفيديو
                    </video>
                    <div class="remove-media" id="removeMedia">
                        <i class="fas fa-times"></i>
                    </div>
                `;
                
                const removeBtn = document.getElementById('removeMedia');
                if (removeBtn) {
                    removeBtn.addEventListener('click', removeMedia);
                }
                togglePostSubmit();
            };
            reader.readAsDataURL(file);
        }

        function handleFileUpload(e) {
            const file = e.target.files[0];
            if (!file) return;
            
            const maxFileSize = 5 * 1024 * 1024;
            if (file.size > maxFileSize) {
                showNotification('حجم الملف كبير جداً (الحد الأقصى 5MB)', 'error');
                e.target.value = '';
                return;
            }
            
            currentMedia = {
                type: 'file',
                file: file
            };
            
            mediaPreview.innerHTML = `
                <div class="file-preview">
                    <i class="fas fa-file"></i>
                    <span>${file.name}</span>
                </div>
                <div class="remove-media" id="removeMedia">
                    <i class="fas fa-times"></i>
                </div>
            `;
            
            const removeBtn = document.getElementById('removeMedia');
            if (removeBtn) {
                removeBtn.addEventListener('click', removeMedia);
            }
            togglePostSubmit();
        }

        async function toggleRecording() {
            if (!isRecording) {
                try {
                    const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
                    mediaRecorder = new MediaRecorder(stream);
                    audioChunks = [];
                    
                    mediaRecorder.ondataavailable = (e) => {
                        audioChunks.push(e.data);
                    };
                    
                    mediaRecorder.onstop = () => {
                        const audioBlob = new Blob(audioChunks, { type: 'audio/wav' });
                        currentMedia = {
                            type: 'audio',
                            file: audioBlob
                        };
                        
                        mediaPreview.innerHTML = `
                            <audio controls preload="metadata">
                                <source src="${URL.createObjectURL(audioBlob)}" type="audio/wav">
                                متصفحك لا يدعم تشغيل الصوت
                            </audio>
                            <div class="remove-media" id="removeMedia">
                                <i class="fas fa-times"></i>
                            </div>
                        `;
                        
                        const removeBtn = document.getElementById('removeMedia');
                        if (removeBtn) {
                            removeBtn.addEventListener('click', removeMedia);
                        }
                        togglePostSubmit();
                    };
                    
                    mediaRecorder.start();
                    isRecording = true;
                    recordBtn.innerHTML = '<i class="fas fa-stop"></i>';
                    
                    mediaPreview.innerHTML = `
                        <div class="voice-recorder">
                            <div class="record-btn">
                                <i class="fas fa-stop"></i>
                            </div>
                            <div class="recording-time">00:00</div>
                            <div class="recording-wave"></div>
                        </div>
                        <div class="remove-media" id="removeMedia">
                            <i class="fas fa-times"></i>
                        </div>
                    `;
                    
                    const removeBtn = document.getElementById('removeMedia');
                    if (removeBtn) {
                        removeBtn.addEventListener('click', () => {
                            mediaRecorder.stop();
                            isRecording = false;
                            recordBtn.innerHTML = '<i class="fas fa-microphone"></i>';
                            mediaPreview.innerHTML = '';
                            currentMedia = { type: null, file: null };
                        });
                    }
                    
                } catch (error) {
                    console.error('Error accessing microphone:', error);
                    showNotification('تعذر الوصول إلى الميكروفون. يرجى التحقق من الأذونات.', 'error');
                }
            } else {
                mediaRecorder.stop();
                isRecording = false;
                recordBtn.innerHTML = '<i class="fas fa-microphone"></i>';
            }
        }

        function removeMedia() {
            currentMedia = { type: null, file: null };
            mediaPreview.innerHTML = '';
            if (photoInput) photoInput.value = '';
            if (videoInput) videoInput.value = '';
            if (fileInput) fileInput.value = '';
            togglePostSubmit();
        }

        function toggleAudienceDropdown() {
            if (!audienceDropdown) return;
            audienceDropdown.classList.toggle('active');
        }

        function selectAudience(option) {
            if (!audienceType) return;
            
            currentAudience = option.getAttribute('data-audience');
            audienceType.value = currentAudience;
            
            audienceOptions.forEach(opt => opt.classList.remove('active'));
            option.classList.add('active');
            
            let audienceText = '';
            let audienceIcon = '';
            
            switch(currentAudience) {
                case 'public':
                    audienceText = 'عام';
                    audienceIcon = '<i class="fas fa-globe"></i>';
                    break;
                case 'school':
                    audienceText = 'المدرسة فقط';
                    audienceIcon = '<i class="fas fa-school"></i>';
                    break;
                case 'grade':
                    audienceText = 'الصف الدراسي';
                    audienceIcon = '<i class="fas fa-users"></i>';
                    break;
                case 'class':
                    audienceText = 'الفصل فقط';
                    audienceIcon = '<i class="fas fa-user-friends"></i>';
                    break;
            }
            
            if (audienceBtn) {
                audienceBtn.innerHTML = `${audienceText} ${audienceIcon}`;
            }
            if (audienceDropdown) {
                audienceDropdown.classList.remove('active');
            }
        }

        async function loadMorePosts() {
            if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 500 && 
                !isLoading && 
                currentPage < totalPages) {
                
                isLoading = true;
                currentPage++;
                if (loadingSpinner) loadingSpinner.style.display = 'block';
                
                try {
                    const response = await fetch(`load_posts.php?page=${currentPage}`);
                    const html = await response.text();
                    
                    if (html.trim() !== '') {
                        const tempDiv = document.createElement('div');
                        tempDiv.innerHTML = html;
                        
                        const newPosts = tempDiv.querySelectorAll('.post');
                        newPosts.forEach(post => {
                            document.getElementById('postsFeed').appendChild(post);
                        });
                        
                        const newPagination = tempDiv.querySelector('.pagination');
                        if (newPagination) {
                            document.querySelector('.pagination').remove();
                            document.getElementById('postsFeed').appendChild(newPagination);
                        }
                    }
                } catch (error) {
                    console.error('Error loading more posts:', error);
                    showNotification('حدث خطأ أثناء تحميل المنشورات الإضافية', 'error');
                } finally {
                    isLoading = false;
                    if (loadingSpinner) loadingSpinner.style.display = 'none';
                }
            }
        }

        function showNotification(message, type) {
            const notification = document.createElement('div');
            notification.className = `notification ${type}`;
            notification.innerHTML = `
                <i class="fas fa-${type === 'success' ? 'check' : 'exclamation'}-circle"></i>
                <span>${message}</span>
            `;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.classList.add('fade-out');
                setTimeout(() => notification.remove(), 500);
            }, 3000);
        }

        function setupLikeCommentListeners() {
            // الإعجاب بالمنشورات
            document.querySelectorAll('.post-action[data-action="like"]').forEach(button => {
                button.addEventListener('click', function() {
                    const postId = this.getAttribute('data-post-id');
                    const isLiked = this.classList.contains('liked');
                    const action = isLiked ? 'unlike' : 'like';
                    
                    const heartIcon = this.querySelector('i');
                    const countSpan = this.querySelector('span');
                    
                    if (isLiked) {
                        this.classList.remove('liked');
                        heartIcon.style.color = '';
                        countSpan.textContent = parseInt(countSpan.textContent) - 1;
                    } else {
                        this.classList.add('liked');
                        heartIcon.style.color = '#e0245e';
                        countSpan.textContent = parseInt(countSpan.textContent) + 1;
                    }
                    
                    fetch('like.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            post_id: postId,
                            action: action
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.error) {
                            showNotification(data.error, 'error');
                            if (isLiked) {
                                this.classList.add('liked');
                                heartIcon.style.color = '#e0245e';
                                countSpan.textContent = parseInt(countSpan.textContent) + 1;
                            } else {
                                this.classList.remove('liked');
                                heartIcon.style.color = '';
                                countSpan.textContent = parseInt(countSpan.textContent) - 1;
                            }
                        } else if (data.success) {
                            countSpan.textContent = data.like_count;
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        showNotification('حدث خطأ أثناء معالجة طلبك', 'error');
                        if (isLiked) {
                            this.classList.add('liked');
                            heartIcon.style.color = '#e0245e';
                            countSpan.textContent = parseInt(countSpan.textContent) + 1;
                        } else {
                            this.classList.remove('liked');
                            heartIcon.style.color = '';
                            countSpan.textContent = parseInt(countSpan.textContent) - 1;
                        }
                    });
                });
            });
            
            // عرض/إخفاء التعليقات
            document.querySelectorAll('.show-comments').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const postId = this.getAttribute('data-post-id');
                    const commentSection = document.getElementById(`commentSection-${postId}`);
                    
                    if (commentSection.style.display === 'block') {
                        commentSection.style.display = 'none';
                        this.textContent = `عرض التعليقات (${this.getAttribute('data-comment-count')})`;
                    } else {
                        commentSection.style.display = 'block';
                        this.textContent = 'إخفاء التعليقات';
                        
                        const commentsContainer = document.getElementById(`commentsContainer-${postId}`);
                        if (commentsContainer.innerHTML.trim() === '') {
                            loadComments(postId);
                        }
                    }
                });
            });

            // التعليقات عند الضغط على زر التعليق
            document.querySelectorAll('.post-action[data-action="comment"]').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const postId = this.getAttribute('data-post-id');
                    const commentSection = document.getElementById(`commentSection-${postId}`);
                    
                    if (commentSection.style.display !== 'block') {
                        commentSection.style.display = 'block';
                        const showCommentsLink = document.querySelector(`.show-comments[data-post-id="${postId}"]`);
                        if (showCommentsLink) {
                            showCommentsLink.textContent = 'إخفاء التعليقات';
                        }
                    }
                    
                    const commentsContainer = document.getElementById(`commentsContainer-${postId}`);
                    if (commentsContainer.innerHTML.trim() === '') {
                        loadComments(postId);
                    }
                    
                    const commentInput = document.getElementById(`commentText-${postId}`);
                    if (commentInput) {
                        commentInput.focus();
                    }
                });
            });

            // إرسال التعليقات
            document.querySelectorAll('.reply-submit').forEach(button => {
                const postId = button.id.split('-')[1];
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    submitComment(postId);
                });
            });
            
            // إرسال التعليق بالضغط على Enter
            document.querySelectorAll('.reply-input textarea').forEach(input => {
                input.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        const postId = this.id.split('-')[1];
                        submitComment(postId);
                    }
                });
            });
            
            // تحميل المرفقات للردود
            document.querySelectorAll('.reply-media-input').forEach(input => {
                input.addEventListener('change', function(e) {
                    const postId = this.getAttribute('data-post-id');
                    const file = e.target.files[0];
                    if (!file) return;
                    
                    const preview = document.getElementById(`replyMediaPreview-${postId}`);
                    const reader = new FileReader();
                    
                    reader.onload = function(event) {
                        let mediaHTML = '';
                        if (file.type.startsWith('image')) {
                            mediaHTML = `<img src="${event.target.result}" alt="صورة الرد">`;
                        } else if (file.type.startsWith('video')) {
                            mediaHTML = `<video controls><source src="${event.target.result}" type="${file.type}"></video>`;
                        } else {
                            mediaHTML = `<div class="file-preview"><i class="fas fa-file"></i><span>${file.name}</span></div>`;
                        }
                        
                        preview.innerHTML = mediaHTML + `
                            <div class="remove-media" onclick="document.getElementById('replyMediaPreview-${postId}').innerHTML=''">
                                <i class="fas fa-times"></i>
                            </div>
                        `;
                    };
                    
                    reader.readAsDataURL(file);
                });
            });
            
            // تسجيل الصوت للردود
            document.querySelectorAll('.reply-record-btn').forEach(btn => {
                btn.addEventListener('click', async function() {
                    const postId = this.getAttribute('data-post-id');
                    const preview = document.getElementById(`replyMediaPreview-${postId}`);
                    
                    try {
                        const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
                        const mediaRecorder = new MediaRecorder(stream);
                        const audioChunks = [];
                        
                        mediaRecorder.ondataavailable = e => audioChunks.push(e.data);
                        mediaRecorder.onstop = () => {
                            const audioBlob = new Blob(audioChunks, { type: 'audio/wav' });
                            preview.innerHTML = `
                                <audio controls>
                                    <source src="${URL.createObjectURL(audioBlob)}" type="audio/wav">
                                    متصفحك لا يدعم تشغيل الصوت
                                </audio>
                                <div class="remove-media" onclick="document.getElementById('replyMediaPreview-${postId}').innerHTML=''">
                                    <i class="fas fa-times"></i>
                                </div>
                            `;
                        };
                        
                        mediaRecorder.start();
                        preview.innerHTML = `
                            <div class="voice-recorder">
                                <div class="record-btn">
                                    <i class="fas fa-stop"></i>
                                </div>
                                <div class="recording-time">00:00</div>
                                <div class="recording-wave"></div>
                            </div>
                            <div class="remove-media" onclick="mediaRecorder.stop(); document.getElementById('replyMediaPreview-${postId}').innerHTML=''">
                                <i class="fas fa-times"></i>
                            </div>
                        `;
                        
                    } catch (error) {
                        console.error('Error accessing microphone:', error);
                        showNotification('تعذر الوصول إلى الميكروفون. يرجى التحقق من الأذونات.', 'error');
                    }
                });
            });
        }
        
        function submitComment(postId) {
            const input = document.getElementById(`commentText-${postId}`);
            const button = document.getElementById(`commentSubmit-${postId}`);
            const commentText = input.value.trim();
            
            if (!commentText) {
                showNotification('يرجى كتابة تعليق', 'error');
                return;
            }
            
            button.disabled = true;
            button.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';

            const formData = new FormData();
            formData.append('post_id', postId);
            formData.append('content', commentText);
            formData.append('csrf_token', '<?= $_SESSION['csrf_token'] ?>');

            fetch('add_comment.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    showNotification(data.error, 'error');
                    return;
                }
                
                input.value = '';
                button.disabled = false;
                button.innerHTML = '<i class="fas fa-paper-plane"></i>';
                
                // Add new comment to UI
                const commentsContainer = document.getElementById(`commentsContainer-${postId}`);
                const newComment = document.createElement('div');
                newComment.className = 'comment';
                newComment.innerHTML = `
                    <div class="comment-header">
                        <img src="${data.comment.author_img}" class="comment-author-img">
                        <div class="comment-author-info">
                            <div class="comment-author-name">${data.comment.author_name}</div>
                            <div class="comment-time">${data.comment.time_ago}</div>
                        </div>
                    </div>
                    <div class="comment-text">${data.comment.content}</div>
                    <div class="comment-actions">
                        <div class="comment-action">
                            <i class="fas fa-heart"></i>
                            <span>0</span>
                        </div>
                    </div>
                `;
                commentsContainer.prepend(newComment);

                // Update comment count
                const commentCountElement = document.querySelector(`.post-action[data-action="comment"][data-post-id="${postId}"] span`);
                commentCountElement.textContent = parseInt(commentCountElement.textContent) + 1;
                
                showNotification('تم إضافة تعليقك بنجاح', 'success');
            })
            .catch(error => {
                console.error('Error:', error);
                showNotification('حدث خطأ أثناء إضافة التعليق', 'error');
                button.disabled = false;
                button.innerHTML = '<i class="fas fa-paper-plane"></i>';
            });
        }

        function loadComments(postId) {
            const commentsContainer = document.getElementById(`commentsContainer-${postId}`);
            commentsContainer.innerHTML = '<div class="loading-comments">جاري تحميل التعليقات...</div>';
            
            // محاكاة جلب التعليقات من الخادم
            setTimeout(() => {
                commentsContainer.innerHTML = '';
            }, 1000);
        }
    </script>
</body>
</html>