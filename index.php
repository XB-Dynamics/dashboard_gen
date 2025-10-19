<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    try {
        include("../connect/connect.php");

        $stmt = $pdo->prepare("SELECT status, educationalStage FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row["status"] == 1) {
                $educationalStage = $row["educationalStage"];

                // حفظ المرحلة في السيشن
                $_SESSION['educationalStage'] = $educationalStage;

                switch ($educationalStage) {
                    case "primary":
                        header("Location: primary/index.php");
                        exit;

                    case "Secondary-Literature":
                        header("Location: Secondary-Literature/index.php");
                        exit;

                    case "Secondary-science":
                        header("Location: Secondary-science/index.php");
                        exit;

                    default:
                        // إذا المرحلة غير معروفة → يذهب إلى صفحة تسجيل العضوية
                        header("Location: ../Signup.php");
                        exit;
                }

            } elseif ($row["status"] == 0) {
                header("location: ../check-your-email/");
                exit;
            }
        } else {
            echo "المستخدم غير موجود.";
        }
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}
?>
