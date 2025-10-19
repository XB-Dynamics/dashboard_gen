<?php
require_once 'connect/connect.php';

// دالة لفحص وتحديث نقاط المستخدمين
function checkAndUpdatePoints($pdo) {
    // الحصول على جميع المستخدمين الذين لديهم نقاط
    $query = "SELECT id, points, points_last_updated, points_expiry_date FROM users WHERE points > 0";
    $stmt = $pdo->query($query);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($users as $user) {
        // إذا كان تاريخ الانتهاء موجودًا وانتهت المدة
        if ($user['points_expiry_date'] && strtotime($user['points_expiry_date']) < time()) {
            // تسجيل النقاط المنتهية في السجل
            $historyQuery = "INSERT INTO user_points_history 
                            (user_id, points_added, points_remaining, added_date, expiry_date, is_expired) 
                            VALUES (:user_id, :points_added, 0, :added_date, :expiry_date, 1)";
            $historyStmt = $pdo->prepare($historyQuery);
            $historyStmt->execute([
                ':user_id' => $user['id'],
                ':points_added' => $user['points'],
                ':added_date' => $user['points_last_updated'],
                ':expiry_date' => $user['points_expiry_date']
            ]);
            
            // تصفير نقاط المستخدم
            $updateQuery = "UPDATE users SET points = 0, points_last_updated = NULL, points_expiry_date = NULL WHERE id = :user_id";
            $updateStmt = $pdo->prepare($updateQuery);
            $updateStmt->execute([':user_id' => $user['id']]);
        }
    }
}

// تشغيل الدالة عند الطلب
checkAndUpdatePoints($pdo);
echo "تم فحص وتحديث نقاط جميع المستخدمين";
?>