<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once '../../connect/connect.php';

// جلب بيانات المسؤول من الجلسة
if (!isset($_SESSION["admin"]) || !$_SESSION["admin"]) {
    header("Location: ../../index.php");
    exit();
}

$admin_id = $_SESSION["user_id"];

// جلب بيانات المسؤول من قاعدة البيانات
$admin_query = "SELECT * FROM admins WHERE id = :id";
$admin_stmt = $pdo->prepare($admin_query);
$admin_stmt->bindParam(':id', $admin_id, PDO::PARAM_INT);
$admin_stmt->execute();
$admin_data = $admin_stmt->fetch(PDO::FETCH_ASSOC);

if (!$admin_data) {
    die("لم يتم العثور على بيانات المسؤول!");
}

// معالجة رفع الصورة
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['profile_image'])) {
    $uploadDir = '../../uploads/profile/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    
    $fileName = 'admin_' . $admin_id . '_' . time() . '.' . pathinfo($_FILES['profile_image']['name'], PATHINFO_EXTENSION);
    $targetFile = $uploadDir . $fileName;
    
    if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $targetFile)) {
        // تحديث قاعدة البيانات بالصورة الجديدة
        $update_query = "UPDATE admins SET profile_image = :image WHERE id = :id";
        $update_stmt = $pdo->prepare($update_query);
        $update_stmt->bindParam(':image', $fileName);
        $update_stmt->bindParam(':id', $admin_id);
        $update_stmt->execute();
        
        // تحديث بيانات الجلسة
        $_SESSION['profile_image'] = $fileName;
        $admin_data['profile_image'] = $fileName;
        
        header("Location: index.php?success=1");
        exit();
    } else {
        $upload_error = "حدث خطأ أثناء رفع الصورة";
    }
}
// استعلامات لجلب عدد الطلاب في كل مرحلة
$stages = [
    'الابتدائية' => "Primary",
    'الثانويه' => "Secondary",
    'الثانوي الأدبي' => "Secondary-Literature",
    'الثانوي العلمي' => "Secondary-science"
];

$stats = [];
foreach ($stages as $name => $stage) {
    $sql = "SELECT COUNT(*) as count FROM users WHERE educationalStage = :stage";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':stage', $stage);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $stats[$name] = $result['count'];
}

// حساب إجمالي طلاب الثانوي
$secondary_total = $stats['الثانوي الأدبي'] + $stats['الثانوي العلمي'];
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظام التعليم الذكي</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        :root {
          --bg-gradient-onyx: linear-gradient(
            to bottom right,
            hsl(240, 1%, 25%) 3%,
            hsl(0, 0%, 19%) 97%
          );
          --bg-gradient-jet: linear-gradient(
              to bottom right,
              hsla(240, 1%, 18%, 0.251) 3%,
              hsla(240, 2%, 11%, 0) 100%
            ),
            hsl(240, 2%, 13%);
          --bg-gradient-yellow1: linear-gradient(
            to bottom right,
            hsl(45, 100%, 71%) 0%,
            hsla(36, 100%, 69%, 0) 50%
          );
          --bg-gradient-yellow2: linear-gradient(
              135deg,
              hsla(45, 100%, 71%, 0.251) 0%,
              hsla(35, 100%, 68%, 0) 59.86%
            ),
            hsl(240, 2%, 13%);
          --border-gradient-onyx: linear-gradient(
            to bottom right,
            hsl(0, 0%, 25%) 0%,
            hsla(0, 0%, 25%, 0) 50%
          );
          --text-gradient-yellow: linear-gradient(
            to right,
            hsl(45, 100%, 72%),
            hsl(35, 100%, 68%)
          );

          --jet: hsl(0, 0%, 22%);
          --onyx: hsl(240, 1%, 17%);
          --eerie-black1: hsl(240, 2%, 13%);
          --eerie-black2: hsl(240, 2%, 12%);
          --smoky-black: hsl(0, 0%, 7%);
          --white1: hsl(0, 0%, 100%);
          --white2: hsl(0, 0%, 98%);
          --orange-yellow-crayola: hsl(45, 100%, 72%);
          --vegas-gold: hsl(45, 54%, 58%);
          --light-gray: hsl(0, 0%, 84%);
          --light-gray70: hsla(0, 0%, 84%, 0.7);
          --bittersweet-shimmer: hsl(0, 43%, 51%);

          --ff-poppins: "Poppins", sans-serif;

          --fs1: 24px;
          --fs2: 18px;
          --fs3: 17px;
          --fs4: 16px;
          --fs5: 15px;
          --fs6: 14px;
          --fs7: 13px;
          --fs8: 12px;

          --fw300: 300;
          --fw400: 400;
          --fw500: 500;
          --fw600: 600;

          --shadow1: -4px 8px 24px hsla(0, 0%, 0%, 0.25);
          --shadow2: 0px 16px 30px hsla(0, 0%, 0%, 0.25);
          --shadow3: 0px 16px 40px hsla(0, 0%, 0%, 0.25);
          --shadow4: 0px 25px 50px hsla(0, 0%, 0%, 0.15);
          --shadow5: 0px 24px 80px hsla(0, 0%, 0%, 0.25);

          --transition1: 0.25s ease;
          --transition2: 0.5s ease-in-out;
        }

        *,
        *::before,
        *::after {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }

        a {
          text-decoration: none;
        }

        li {
          list-style: none;
        }

        img,
        ion-icon,
        a,
        button,
        time,
        span {
          display: block;
        }

        button {
          font: inherit;
          background: none;
          border: none;
          text-align: left;
          cursor: pointer;
        }

        input,
        textarea {
          display: block;
          width: 100%;
          background: none;
          font: inherit;
        }

        ::selection {
          background: var(--orange-yellow-crayola);
          color: var(--smoky-black);
        }

        :focus {
          outline-color: var(--orange-yellow-crayola);
        }

        html {
          font-family: var(--ff-poppins);
        }

        body {
          background: var(--smoky-black);
        }

        main {
          margin: 15px 12px;
          margin-bottom: 75px;
          min-width: 259px;
        }

        .sidebar,
        article {
          background: var(--eerie-black2);
          border: 1px solid var(--jet);
          border-radius: 20px;
          box-shadow: var(--shadow1);
          z-index: 1;
          padding: 15px;
        }

        .sidebar.active {
          max-height: 405px;
        }

        .separator {
          width: 100%;
          height: 1px;
          background: var(--jet);
          margin: 16px 0;
        }

        .icon-box {
          position: relative;
          background: var(--border-gradient-onyx);
          width: 30px;
          height: 30px;
          border-radius: 8px;
          display: flex;
          justify-content: center;
          align-items: center;
          font-size: 16px;
          color: var(--orange-yellow-crayola);
          box-shadow: var(--shadow1);
          z-index: 1;
        }

        .icon-box::before {
          content: "";
          position: absolute;
          inset: 1px;
          background: var(--eerie-black1);
          border-radius: inherit;
          z-index: -1;
        }

        .icon-box ion-icon {
          --ionicon-stroke-width: 35px;
        }

        article {
          display: none;
        }

        article.active {
          display: block;
          animation: fade 0.5s ease backwards;
        }

        @keyframes fade {
          0% {
            opacity: 0;
          }
          100% {
            opacity: 1;
          }
        }

        .h2,
        .h3,
        .h4,
        .h5 {
          color: var(--white2);
          text-transform: capitalize;
        }

        .h2 {
          font-size: var(--fs1);
        }
        .h3 {
          font-size: var(--fs2);
        }
        .h4 {
          font-size: var(--fs4);
        }
        .h5 {
          font-size: var(--fs7);
          font-weight: var(--fw500);
        }

        .article-title {
          position: relative;
          padding-bottom: 7px;
        }

        .article-title::after {
          content: "";
          position: absolute;
          bottom: 0;
          left: 0;
          width: 30px;
          height: 3px;
          background: var(--text-gradient-yellow);
          border-radius: 3px;
        }

        .has-scrollbar::-webkit-scrollbar {
          width: 5px;
          height: 5px;
        }

        .has-scrollbar::-webkit-scrollbar-track {
          background: var(--onyx);
          border-radius: 5px;
        }

        .has-scrollbar::-webkit-scrollbar-thumb {
          background: var(--orange-yellow-crayola);
          border-radius: 5px;
        }

        .has-scrollbar::-webkit-scrollbar-button {
          width: 20px;
        }

        .content-card {
          position: relative;
          background: var(--border-gradient-onyx);
          padding: 15px;
          padding-top: 45px;
          border-radius: 14px;
          box-shadow: var(--shadow2);
          cursor: pointer;
          z-index: 1;
        }

        .content-card::before {
          content: "";
          position: absolute;
          inset: 1px;
          background: var(--bg-gradient-jet);
          border-radius: inherit;
          z-index: -1;
        }

        /* Header styles */
        .header {
            padding: 12px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--jet);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .header h1 {
            font-size: var(--fs2);
            font-weight: var(--fw600);
            color: var(--white2);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .header h1 span {
            background: var(--text-gradient-yellow);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: var(--fw600);
        }
        
        .header h1 i {
            color: var(--orange-yellow-crayola);
            font-size: 20px;
        }
        
        .header-controls {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        /* Social icons - تم التعديل هنا */
        .social-icons {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .social-icon {
            cursor: pointer;
            position: relative;
            font-size: 14px;
            color: var(--white2);
            background: var(--border-gradient-onyx);
            width: 34px;
            height: 34px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition1);
            z-index: 1;
            box-shadow: var(--shadow1);
        }
        
        .social-icon::before {
            content: "";
            position: absolute;
            inset: 1px;
            border-radius: inherit;
            background: var(--bg-gradient-jet);
            z-index: -1;
        }
        
        .social-icon:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow3);
        }
        
        .camera-icon {
            color: var(--orange-yellow-crayola);
            font-size: 16px;
        }
        
        .social-g-icon {
            color: var(--orange-yellow-crayola);
            font-weight: bold;
            font-family: var(--ff-poppins);
            font-size: 16px;
        }
        
        .profile-icon {
            color: var(--orange-yellow-crayola);
            font-size: 16px;
        }
        
        .social-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--bittersweet-shimmer);
            color: var(--white1);
            border-radius: 50%;
            width: 16px;
            height: 16px;
            font-size: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        
        /* Logout button */
        .logout-btn {
            background: var(--border-gradient-onyx);
            color: var(--bittersweet-shimmer);
            padding: 6px 12px;
            border-radius: 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
            font-weight: var(--fw500);
            font-size: var(--fs8);
            transition: var(--transition1);
            z-index: 1;
            position: relative;
        }
        
        .logout-btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            border-radius: inherit;
            background: var(--bg-gradient-jet);
            z-index: -1;
            transition: var(--transition1);
        }
        
        .logout-btn:hover {
            background: var(--bg-gradient-yellow1);
            color: var(--smoky-black);
        }
        .logout-btn:hover::before {
            background: var(--bg-gradient-yellow2);
        }
        
        /* Profile section */
        .profile-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background: var(--border-gradient-onyx);
            margin: 20px;
            border-radius: 10px;
            border: 1px solid var(--jet);
            position: relative;
            z-index: 1;
        }
        
        .profile-section::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }
        
        .profile-picture {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--orange-yellow-crayola);
            margin-bottom: 15px;
            cursor: pointer;
            transition: var(--transition1);
        }
        
        .profile-picture:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px hsla(45, 100%, 72%, 0.5);
        }
        
        .profile-name {
            font-size: var(--fs3);
            font-weight: var(--fw600);
            margin-bottom: 5px;
            color: var(--white2);
        }
        
        .profile-class {
            color: var(--light-gray70);
            font-size: var(--fs6);
        }
        
        .upload-btn {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background: var(--border-gradient-onyx);
            color: var(--orange-yellow-crayola);
            padding: 8px 15px;
            border-radius: 20px;
            font-size: var(--fs8);
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
            font-weight: var(--fw500);
            transition: var(--transition1);
            z-index: 1;
        }
        
        .upload-btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            border-radius: inherit;
            background: var(--bg-gradient-jet);
            z-index: -1;
            transition: var(--transition1);
        }
        
        .upload-btn:hover {
            background: var(--bg-gradient-yellow1);
            color: var(--smoky-black);
        }
        .upload-btn:hover::before {
            background: var(--bg-gradient-yellow2);
        }
        
        /* Info container */
        .info-container {
            padding: 0 20px 20px;
        }
        
        .info-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            margin-bottom: 15px;
            border-radius: 12px;
            transition: var(--transition1);
            position: relative;
            overflow: hidden;
            background: var(--border-gradient-onyx);
            border: 1px solid var(--jet);
            z-index: 1;
        }
        
        .info-item::before {
            content: '';
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }
        
        .info-item:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow3);
        }
        
        /* Card types */
        .name-card {
            border-right: 4px solid var(--orange-yellow-crayola);
        }
        
        .phone-card {
            border-right: 4px solid var(--vegas-gold);
        }
        
        .email-card {
            border-right: 4px solid var(--light-gray);
        }
        
        .supervisor-card {
            border-right: 4px solid var(--bittersweet-shimmer);
        }
        
        .info-content {
            display: flex;
            flex-direction: column;
            flex: 1;
            position: relative;
            z-index: 1;
        }
        
        .info-label-container {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 5px;
        }
        
        .info-label {
            color: var(--light-gray70);
            font-size: var(--fs7);
        }
        
        .info-value-container {
            position: relative;
        }
        
        .info-value {
            color: var(--white2);
            font-weight: var(--fw500);
            font-size: var(--fs6);
            background-color: transparent;
            border: none;
            width: 100%;
            padding: 5px 0;
            position: relative;
            z-index: 2;
        }
        
        .value-decoration {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 0;
            height: 2px;
            background: var(--text-gradient-yellow);
            transition: width var(--transition1);
        }
        
        .info-value:focus ~ .value-decoration {
            width: 100%;
        }
        
        .edit-btn {
            background: transparent;
            border: none;
            color: var(--orange-yellow-crayola);
            font-size: 16px;
            cursor: pointer;
            padding: 5px;
            margin-right: 10px;
            transition: var(--transition1);
            position: relative;
            z-index: 1;
        }
        
        .edit-btn:hover {
            transform: scale(1.1);
            color: var(--vegas-gold);
        }
        
        /* Dashboard container */
        .dashboard-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            gap: 15px;
            padding: 0 20px 20px;
        }
        
        .stat-card {
            background: var(--border-gradient-onyx);
            border-radius: 10px;
            padding: 15px;
            box-shadow: var(--shadow2);
            transition: var(--transition1);
            border: 1px solid var(--jet);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .stat-card::before {
            content: '';
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow3);
            border-color: var(--orange-yellow-crayola);
        }
        
        .stat-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--text-gradient-yellow);
        }
        
        .stat-card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .stat-card-title {
            color: var(--light-gray70);
            font-size: var(--fs7);
            font-weight: var(--fw400);
        }
        
        .stat-card-icon {
            width: 36px;
            height: 36px;
            background: var(--border-gradient-onyx);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--orange-yellow-crayola);
            font-size: 14px;
            z-index: 1;
            position: relative;
        }
        
        .stat-card-icon::before {
            content: "";
            position: absolute;
            inset: 1px;
            border-radius: inherit;
            background: var(--bg-gradient-jet);
            z-index: -1;
        }
        
        .stat-card-value {
            font-size: 22px;
            font-weight: var(--fw600);
            color: var(--white2);
            margin-bottom: 5px;
        }
        
        .stat-card-details {
            font-size: var(--fs8);
            color: var(--light-gray70);
        }
        
        /* Footer social */
        .footer-social {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 15px;
            background: var(--eerie-black2);
            border-top: 1px solid var(--jet);
        }
        
        .footer-social-icon {
            font-size: 22px;
            cursor: pointer;
            transition: var(--transition1);
        }
        
        .footer-social-icon:hover {
            transform: translateY(-5px) scale(1.1);
        }
        
        .facebook-icon {
            color: #1877F2;
        }
        
        .twitter-icon {
            color: #1DA1F2;
        }
        
        .linkedin-icon {
            color: #0A66C2;
        }
        
        .whatsapp-icon {
            color: #25D366;
        }
        
        /* Footer copyright */
        .footer-copyright {
            text-align: center;
            padding: 12px;
            background: var(--eerie-black2);
            color: var(--light-gray70);
            font-size: var(--fs8);
            border-top: 1px solid var(--jet);
        }
        
        /* Education section */
        .education-section {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
            background: var(--border-gradient-onyx);
            padding: 10px;
            border-radius: 8px;
            border: 1px solid var(--orange-yellow-crayola);
            cursor: pointer;
            transition: var(--transition1);
            z-index: 90;
            width: 120px;
            box-shadow: var(--shadow2);
        }
        
        .education-section::before {
            content: "";
            position: absolute;
            inset: 1px;
            border-radius: inherit;
            background: var(--bg-gradient-jet);
            z-index: -1;
        }
        
        .education-section:hover {
            background: var(--bg-gradient-yellow1);
            transform: translateY(-3px);
        }
        .education-section:hover::before {
            background: var(--bg-gradient-yellow2);
        }
        
        .education-icon {
            color: var(--orange-yellow-crayola);
            font-size: 20px;
            background: var(--border-gradient-onyx);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1;
            position: relative;
        }
        
        .education-icon::before {
            content: "";
            position: absolute;
            inset: 1px;
            border-radius: inherit;
            background: var(--bg-gradient-jet);
            z-index: -1;
        }
        
        .education-text {
            font-size: var(--fs8);
            font-weight: var(--fw500);
            text-align: center;
            color: var(--white2);
        }
        
        .education-subtext {
            font-size: 10px;
            color: var(--light-gray70);
            text-align: center;
        }
        
        /* Systems section */
        .systems-section {
            padding: 20px;
            display: none;
        }
        
        .systems-section.active {
            display: block;
            animation: fade 0.5s ease;
        }
        
        .main-icon {
            width: 120px;
            height: 120px;
            background: var(--bg-gradient-yellow1);
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--smoky-black);
            font-size: 3rem;
            cursor: pointer;
            box-shadow: var(--shadow4);
            transition: var(--transition2);
            margin: 30px auto;
            position: relative;
            z-index: 10;
            border: 2px solid transparent;
            background-clip: padding-box;
            border-image: var(--border-gradient-onyx) 1;
        }
        
        .main-icon:hover {
            transform: scale(1.05) rotate(5deg);
            box-shadow: var(--shadow5);
        }
        
        .main-title {
            font-size: 2rem;
            margin-bottom: 15px;
            color: var(--white2);
            font-weight: var(--fw600);
            text-align: center;
        }
        
        .main-desc {
            font-size: 1.1rem;
            color: var(--light-gray70);
            max-width: 600px;
            margin: 0 auto 40px;
            font-weight: var(--fw300);
            text-align: center;
        }
        
        .systems-container {
            width: 100%;
            display: none;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        
        .systems-container.active {
            display: flex;
        }
        
        .system-card {
            width: 280px;
            background: var(--border-gradient-onyx);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow4);
            transition: var(--transition1);
            cursor: pointer;
            opacity: 0;
            transform: translateY(20px);
            border: 1px solid hsla(0, 0%, 100%, 0.1);
            z-index: 1;
            position: relative;
        }
        
        .system-card::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }
        
        .system-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow5);
        }
        
        .system-card.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        .system-header {
            padding: 20px;
            color: var(--white1);
            text-align: center;
            position: relative;
            border-bottom: 1px solid hsla(0, 0%, 100%, 0.1);
        }
        
        .soon-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: var(--bg-gradient-yellow1);
            color: var(--smoky-black);
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: bold;
            box-shadow: var(--shadow2);
        }
        
        .system-1 .system-header {
            background: linear-gradient(135deg, var(--onyx), var(--eerie-black1));
        }
        
        .system-2 .system-header {
            background: linear-gradient(135deg, var(--jet), var(--onyx));
        }
        
        .system-3 .system-header {
            background: linear-gradient(135deg, var(--eerie-black1), var(--jet));
        }
        
        .system-4 .system-header {
            background: linear-gradient(135deg, var(--smoky-black), var(--eerie-black1));
        }
        
        .system-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 15px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            backdrop-filter: blur(5px);
        }
        
        .system-title {
            font-size: 1.3rem;
            margin-bottom: 5px;
            font-weight: var(--fw600);
        }
        
        .system-desc {
            font-size: 0.9rem;
            opacity: 0.9;
            font-weight: var(--fw300);
        }
        
        .system-body {
            padding: 20px;
            color: var(--light-gray);
            line-height: 1.7;
        }
        
        .system-stats {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }
        
        .stat {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 0.8rem;
            color: var(--light-gray70);
        }
        
        .system-1 .stat i {
            color: var(--orange-yellow-crayola);
        }
        
        .system-2 .stat i {
            color: var(--vegas-gold);
        }
        
        .system-3 .stat i {
            color: var(--light-gray);
        }
        
        .system-4 .stat i {
            color: var(--bittersweet-shimmer);
        }
        
        .time-left {
            background-color: rgba(248, 150, 30, 0.1);
            padding: 8px;
            border-radius: 8px;
            margin-top: 10px;
            text-align: center;
            font-size: 0.85rem;
            color: var(--orange-yellow-crayola);
            font-weight: bold;
            border: 1px solid rgba(248, 150, 30, 0.2);
        }
        
        .system-link {
            display: block;
            text-align: center;
            padding: 12px;
            background: linear-gradient(135deg, var(--onyx), var(--eerie-black1));
            color: var(--white1);
            text-decoration: none;
            font-weight: var(--fw500);
            transition: var(--transition1);
            border-top: 1px solid hsla(0, 0%, 100%, 0.1);
        }
        
        .soon-link {
            background: var(--bg-gradient-yellow1) !important;
            color: var(--smoky-black) !important;
            cursor: not-allowed;
        }
        
        .system-1 .system-link {
            background: linear-gradient(135deg, var(--onyx), var(--eerie-black1));
        }
        
        .system-2 .system-link {
            background: linear-gradient(135deg, var(--jet), var(--onyx));
        }
        
        .system-3 .system-link {
            background: linear-gradient(135deg, var(--eerie-black1), var(--jet));
        }
        
        .system-4 .system-link {
            background: linear-gradient(135deg, var(--smoky-black), var(--eerie-black1));
        }
        
        .system-link:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }
        
        /* Animation effects */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes cardHover {
            0% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
            100% { transform: translateY(-3px); }
        }
        
        .stat-card:hover {
            animation: cardHover 0.3s ease forwards;
        }
        
        /* Responsive design */
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                gap: 12px;
                padding: 12px;
            }
            
            .header-controls {
                width: 100%;
                justify-content: space-between;
            }
            
            .social-icons {
                gap: 8px;
            }
            
            .social-icon {
                width: 30px;
                height: 30px;
                font-size: 14px;
            }
            
            .logout-btn {
                padding: 5px 10px;
                font-size: 11px;
            }
            
            .profile-picture {
                width: 100px;
                height: 100px;
            }
            
            .upload-btn {
                position: static;
                margin-top: 10px;
                font-size: 11px;
                padding: 6px 12px;
            }
            
            .dashboard-container {
                grid-template-columns: 1fr;
            }
            
            .education-section {
                width: 100px;
                right: 10px;
                bottom: 10px;
            }
            
            .education-icon {
                width: 36px;
                height: 36px;
                font-size: 18px;
            }
            
            .education-text {
                font-size: 11px;
            }
            
            .education-subtext {
                font-size: 9px;
            }
            
            .system-card {
                width: 100%;
                max-width: 350px;
            }
        }
        
        /* RTL specific styles */
        [dir="rtl"] {
            text-align: right;
        }
        
        [dir="rtl"] .stat-card-header {
            flex-direction: row-reverse;
        }
                /* إضافة ستايل لصندوق تحميل الصورة */
        .upload-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 10000;
            justify-content: center;
            align-items: center;
        }
        
        .upload-content {
            background: var(--bg-gradient-jet);
            padding: 30px;
            border-radius: 20px;
            width: 90%;
            max-width: 500px;
            border: 1px solid var(--jet);
            box-shadow: var(--shadow5);
        }
        
        .upload-title {
            color: var(--orange-yellow-crayola);
            margin-bottom: 20px;
            text-align: center;
            font-size: 1.5rem;
        }
        
        .upload-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .file-input-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
            width: 100%;
        }
        
        .file-input-wrapper input[type=file] {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }
        
        .file-input-label {
            display: block;
            padding: 15px;
            background: var(--border-gradient-onyx);
            border-radius: 10px;
            text-align: center;
            color: var(--light-gray70);
            cursor: pointer;
            border: 1px dashed var(--jet);
            transition: var(--transition1);
        }
        
        .file-input-label:hover {
            background: var(--bg-gradient-yellow1);
            color: var(--smoky-black);
        }
        
        .preview-container {
            display: none;
            margin: 20px 0;
            text-align: center;
        }
        
        .image-preview {
            max-width: 100%;
            max-height: 300px;
            border-radius: 10px;
            border: 1px solid var(--jet);
        }
        
        .upload-buttons {
            display: flex;
            gap: 10px;
            justify-content: center;
        }
        
        .upload-btn, .cancel-btn {
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: var(--fw500);
            transition: var(--transition1);
        }
        
        .upload-btn {
            background: var(--bg-gradient-yellow1);
            color: var(--smoky-black);
        }
        
        .cancel-btn {
            background: var(--border-gradient-onyx);
            color: var(--bittersweet-shimmer);
        }
        
        .upload-btn:hover, .cancel-btn:hover {
            transform: translateY(-3px);
        }
                .admin-controls {
            position: relative;
        }
        
        .admin-select {
            background: var(--border-gradient-onyx);
            color: var(--white2);
            border: 1px solid var(--jet);
            padding: 8px 15px;
            border-radius: 20px;
            font-size: var(--fs7);
            cursor: pointer;
            transition: var(--transition1);
            min-width: 150px;
            text-align: center;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            position: relative;
            z-index: 1;
        }
        
        .admin-select::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }
        
        .admin-select:hover {
            border-color: var(--orange-yellow-crayola);
            box-shadow: 0 0 10px rgba(255, 193, 7, 0.3);
        }
        
        .admin-select:focus {
            outline: none;
            border-color: var(--orange-yellow-crayola);
        }
        
        .admin-select option {
            background: var(--eerie-black1);
            color: var(--white2);
            padding: 10px;
        }
        
        /* تحسين تخطيط عناصر التحكم */
        .header-controls {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        @media (max-width: 768px) {
            .header-controls {
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
            }
            
            .admin-select {
                min-width: 120px;
                font-size: var(--fs8);
                padding: 6px 12px;
            }
        }
        /* أنماط عناصر التحكم في الهيدر */
.header-controls {
    display: flex;
    align-items: center;
    gap: 15px;
}

.admin-controls {
    position: relative;
}

.admin-select {
    background: var(--border-gradient-onyx);
    color: var(--white2);
    border: 1px solid var(--jet);
    padding: 8px 15px;
    border-radius: 20px;
    font-size: var(--fs7);
    cursor: pointer;
    transition: var(--transition1);
    min-width: 150px;
    text-align: center;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    position: relative;
    z-index: 1;
}

.admin-select::before {
    content: "";
    position: absolute;
    inset: 1px;
    background: var(--bg-gradient-jet);
    border-radius: inherit;
    z-index: -1;
}

.admin-select:hover {
    border-color: var(--orange-yellow-crayola);
    box-shadow: 0 0 10px rgba(255, 193, 7, 0.3);
}

.admin-select:focus {
    outline: none;
    border-color: var(--orange-yellow-crayola);
}

.admin-select option {
    background: var(--eerie-black1);
    color: var(--white2);
    padding: 10px;
}

@media (max-width: 768px) {
    .header-controls {
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
    }
    
    .admin-select {
        min-width: 120px;
        font-size: var(--fs8);
        padding: 6px 12px;
    }
}


    </style>
</head>
<body>
    <!-- شريط العنوان العلوي المحدث -->
        <?php include 'header.php'; ?>

<div class="header">
    <h1><i class="fas fa-user-graduate"></i> نظام التعليم <span>الذكي</span></h1>

    <div class="header-controls">
        <!-- السيليكت الجديد -->
        <div class="admin-controls">
            <select class="admin-select" onchange="handleAdminAction(this.value)">
                <option value=""> الأعضاء</option>
                <option value="add_member">إضافة عضو جديد</option>
                <option value="manage_members">إدارة الأعضاء</option>
            </select>
        </div>

        <!-- زر تسجيل الخروج -->
        <button class="logout-btn" onclick="logout()">
            <i class="fas fa-sign-out-alt"></i> تسجيل الخروج
        </button>
    </div>
</div>    <!-- لوحة تحكم المسؤول -->
    <div id="dashboard" class="container active">
        <!-- قسم البروفايل -->
        <div class="profile-section">
            <?php
            // تحديد مسار الصورة
            $profile_image = '';
            if (!empty($admin_data['profile_image'])) {
                $profile_image = '../../uploads/profile/' . $admin_data['profile_image'];
            } else {
                $profile_image = 'https://via.placeholder.com/120?text=صورة+المسؤول';
            }
            ?>
            <img src="<?php echo $profile_image; ?>" alt="صورة المسؤول" class="profile-picture" id="profile-picture">
            <h2 class="profile-name"><?php echo $admin_data['full_name']; ?></h2>
            <p class="profile-class">المسؤول</p>
            <button class="upload-btn" onclick="openUploadModal()">
                <i class="fas fa-camera"></i> تغيير الصورة
            </button>
        </div>
    <!-- صندوق تحميل الصورة -->
    <div class="upload-modal" id="upload-modal">
        <div class="upload-content">
            <h2 class="upload-title">تغيير صورة البروفايل</h2>
            <form id="upload-form" class="upload-form" method="POST" enctype="multipart/form-data">
                <div class="file-input-wrapper">
                    <label class="file-input-label" for="profile-image-input">
                        <i class="fas fa-cloud-upload-alt"></i> اختر صورة
                    </label>
                    <input type="file" id="profile-image-input" name="profile_image" accept="image/*">
                </div>
                
                <div class="preview-container" id="preview-container">
                    <img src="" alt="معاينة الصورة" class="image-preview" id="image-preview">
                </div>
                
                <div class="upload-buttons">
                    <button type="button" class="cancel-btn" onclick="closeUploadModal()">
                        <i class="fas fa-times"></i> إلغاء
                    </button>
                    <button type="submit" class="upload-btn" id="upload-submit" disabled>
                        <i class="fas fa-upload"></i> رفع الصورة
                    </button>
                </div>
            </form>
        </div>
    </div>

        <!-- معلومات المسؤول المحسنة -->
        <div class="info-container">
            <!-- بطاقة الاسم -->
            <div class="info-item name-card">
                <div class="info-content">
                    <div class="info-label-container">
                        <i class="fas fa-id-card"></i>
                        <span class="info-label">الاسم الكامل</span>
                    </div>
                    <div class="info-value-container">
                        <input type="text" name="name" class="info-value" value="<?php echo $admin_data['full_name']; ?>" id="full-name" readonly>
                        <div class="value-decoration"></div>
                    </div>
                </div>
                <button class="edit-btn" onclick="editField('full-name')">
                    <i class="fas fa-pencil-alt"></i>
                </button>
            </div>
            
            <!-- بطاقة الهاتف -->
            <div class="info-item phone-card">
                <div class="info-content">
                    <div class="info-label-container">
                        <i class="fas fa-phone-alt"></i>
                        <span class="info-label">رقم التليفون</span>
                    </div>
                    <div class="info-value-container">
                        <input type="tel" class="info-value" value="<?php echo $admin_data['phone']; ?>" id="phone-number" readonly>
                        <div class="value-decoration"></div>
                    </div>
                </div>
                <button class="edit-btn" onclick="editField('phone-number')">
                    <i class="fas fa-pencil-alt"></i>
                </button>
            </div>
            
            <!-- بطاقة البريد الإلكتروني -->
            <div class="info-item email-card">
                <div class="info-content">
                    <div class="info-label-container">
                        <i class="fas fa-envelope"></i>
                        <span class="info-label">البريد الإلكتروني</span>
                    </div>
                    <div class="info-value-container">
                        <input type="email" class="info-value" value="<?php echo $admin_data['email']; ?>" id="email" readonly>
                        <div class="value-decoration"></div>
                    </div>
                </div>
                <button class="edit-btn" onclick="editField('email')">
                    <i class="fas fa-pencil-alt"></i>
                </button>
            </div>
            
            <!-- بطاقة الدور -->
            <div class="info-item supervisor-card">
                <div class="info-content">
                    <div class="info-label-container">
                        <i class="fas fa-user-shield"></i>
                        <span class="info-label">الدور</span>
                    </div>
                    <div class="info-value-container">
                        <input type="text" class="info-value" value="المسؤول" id="role" readonly>
                        <div class="value-decoration"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- لوحة الإحصائيات -->
        <div class="dashboard-container">
            <?php
            $icons = [
                'الابتدائية' => 'fa-child',
              'الثانويه' => 'fa-child',

                'الثانوي الأدبي' => 'fa-book',
                'الثانوي العلمي' => 'fa-flask',
                'الثانوي (إجمالي)' => 'fa-user-tie'
            ];
            
            // عرض إحصاءات كل مرحلة
            foreach ($stats as $name => $count): 
            ?>
            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-card-title">المرحلة <?= $name ?></div>
                    <div class="stat-card-icon">
                        <i class="fas <?= $icons[$name] ?>"></i>
                    </div>
                </div>
                <div class="stat-card-value"><?= number_format($count) ?></div>
                <div class="stat-card-details">طالب وطالبة</div>
            </div>
            <?php endforeach; ?>
            
            <!-- عرض إجمالي طلاب الثانوي -->
            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-card-title">الثانوي (إجمالي)</div>
                    <div class="stat-card-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                </div>
                <div class="stat-card-value"><?= number_format($secondary_total) ?></div>
                <div class="stat-card-details">طالب وطالبة</div>
            </div>
            
            <!-- إجمالي جميع الطلاب -->
            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-card-title">الإجمالي الكلي</div>
                    <div class="stat-card-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                <div class="stat-card-value"><?= number_format(array_sum($stats)) ?></div>
                <div class="stat-card-details">طالب وطالبة</div>
            </div>
        </div>
    </div>
    
        
    </div>
    

    <!-- أنظمة التعليم التفاعلية -->
    <div id="systems" class="systems-section">
        <div class="main-icon" id="main-icon">
            <i class="fas fa-graduation-cap"></i>
        </div>
        
        <h1 class="main-title">أنظمة التعليم التفاعلية</h1>
        <p class="main-desc">انقر على الأيقون أعلاه لعرض الأنظمة التعليمية المتاحة</p>
        
        <div class="systems-container" id="systems-container">
            <div class="system-card system-1" data-system="system-1">
                <div class="system-header">
                    <div class="system-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h2 class="system-title">النظام التعليمي</h2>
                    <p class="system-desc">منصة تعليمية متكاملة</p>
                </div>
                <div class="system-body">
                    <p>نظام متكامل يوفر بيئة تعليمية تفاعلية تحتوي على دروس، اختبارات، ومتابعة للتحصيل العلمي.</p>
                    <div class="system-stats">
                        <div class="stat">
                            <i class="fas fa-users"></i>
                            <span>12,345 مستخدم</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-book"></i>
                            <span>245 دورة</span>
                        </div>
                    </div>
                </div>
                <a href="#" class="system-link">الدخول للنظام</a>
            </div>
            
            <div class="system-card system-2" data-system="system-2">
                <div class="system-header">
                    <div class="system-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h2 class="system-title">النظام البرمجي</h2>
                    <p class="system-desc">تعلم البرمجة بطريقة تفاعلية</p>
                </div>
                <div class="system-body">
                    <p>منصة لتعليم البرمجة بمختلف لغاتها مع تمارين تفاعلية وتصحيح آلي للكود المقدم من الطلاب.</p>
                    <div class="system-stats">
                        <div class="stat">
                            <i class="fas fa-users"></i>
                            <span>8,765 مستخدم</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-laptop-code"></i>
                            <span>15 لغة برمجة</span>
                        </div>
                    </div>
                </div>
                <a href="#" class="system-link">الدخول للنظام</a>
            </div>
            
            <div class="system-card system-3" data-system="system-3">
                <div class="system-header">
                    <div class="soon-badge">قريباً</div>
                    <div class="system-icon">
                        <i class="fas fa-language"></i>
                    </div>
                    <h2 class="system-title">نظام اللغات</h2>
                    <p class="system-desc">تعلّم اللغات بسهولة</p>
                </div>
                <div class="system-body">
                    <p>منصة متخصصة في تعليم اللغات الأجنبية مع تمارين نطق، محادثات تفاعلية، وقواعد اللغة.</p>
                    <div class="system-stats">
                        <div class="stat">
                            <i class="fas fa-users"></i>
                            <span>قيد التطوير</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-globe"></i>
                            <span>8 لغات</span>
                        </div>
                    </div>
                    <div class="time-left">المتبقي للإطلاق: شهرين</div>
                </div>
                <a href="#" class="system-link soon-link">قريباً</a>
            </div>
            
            <div class="system-card system-4" data-system="system-4">
                <div class="system-header">
                    <div class="soon-badge">قريباً</div>
                    <div class="system-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h2 class="system-title">نظام الحساب الذهني</h2>
                    <p class="system-desc">تطوير المهارات الحسابية</p>
                </div>
                <div class="system-body">
                    <p>برنامج متخصص لتنمية مهارات الحساب الذهني والرياضيات بطريقة ممتعة وتفاعلية.</p>
                    <div class="system-stats">
                        <div class="stat">
                            <i class="fas fa-users"></i>
                            <span>قيد التطوير</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-calculator"></i>
                            <span>12 مستوى</span>
                        </div>
                    </div>
                    <div class="time-left">المتبقي للإطلاق: 45 يوم</div>
                </div>
                <a href="#" class="system-link soon-link">قريباً</a>
            </div>
        </div>
    </div>

    <!-- وسائل التواصل الاجتماعي في الأسفل -->
    <div class="footer-social">
        <i class="fab fa-facebook-f footer-social-icon facebook-icon" onclick="openFacebook()"></i>
        <i class="fab fa-instagram footer-social-icon instagram-icon" onclick="openInstagram()"></i>
        <i class="fab fa-twitter footer-social-icon twitter-icon" onclick="openTwitter()"></i>
        <i class="fab fa-linkedin-in footer-social-icon linkedin-icon" onclick="openLinkedIn()"></i>
        <i class="fab fa-whatsapp footer-social-icon whatsapp-icon" onclick="openWhatsApp()"></i>
    </div>

    <!-- حقوق النشر -->
    <div class="footer-copyright">
        تم التطوير بواسطة Genius Ai 2025 &copy; جميع الحقوق محفوظة
    </div>


    <script>
        // فتح الكاميرا
        function openCamera() {
            showNotification('جاري فتح الكاميرا...');
            setTimeout(() => {
                alert('كاميرا الطالب: يمكنك الآن مشاركة صورتك مع المعلم');
            }, 1000);
        }

        // فتح السوشيال ميديا
        function openSocialPage(platform, pageTitle) {
            showNotification(`جاري فتح ${pageTitle}...`);
            setTimeout(() => {
                window.location.href = `social-media.php?platform=${platform}`;
            }, 1000);
        }

        // فتح الملف الشخصي
        function openProfile() {
            showNotification('جاري فتح الملف الشخصي...');
            setTimeout(() => {
                alert('الملف الشخصي: يمكنك تعديل معلوماتك الشخصية هنا');
            }, 1000);
        }

        // فتح الفيسبوك
        function openFacebook() {
            showNotification('جاري فتح صفحة المدرسة على الفيسبوك...');
            setTimeout(() => {
                alert('صفحة المدرسة على الفيسبوك: يمكنك متابعة آخر أخبار المدرسة هنا');
            }, 1000);
        }

        // فتح تويتر
        function openTwitter() {
            showNotification('جاري فتح صفحة المدرسة على تويتر...');
            setTimeout(() => {
                alert('صفحة المدرسة على تويتر: يمكنك متابعة آخر التغريدات هنا');
            }, 1000);
        }

        // فتح لينكد إن
        function openLinkedIn() {
            showNotification('جاري فتح صفحة المدرسة على لينكد إن...');
            setTimeout(() => {
                alert('صفحة المدرسة على لينكد إن: يمكنك التواصل مع الخريجين هنا');
            }, 1000);
        }

        // فتح واتساب
        function openWhatsApp() {
            showNotification('جاري فتح محادثة واتساب مع الإدارة...');
            setTimeout(() => {
                alert('واتساب المدرسة: يمكنك التواصل مع الإدارة عبر واتساب');
            }, 1000);
        }

        // فتح نافذة تحميل الصورة
        function openUploadModal() {
            document.getElementById('upload-modal').style.display = 'flex';
        }
        
        // إغلاق نافذة تحميل الصورة
        function closeUploadModal() {
            document.getElementById('upload-modal').style.display = 'none';
            document.getElementById('preview-container').style.display = 'none';
            document.getElementById('profile-image-input').value = '';
            document.getElementById('upload-submit').disabled = true;
        }
        
        // معاينة الصورة قبل الرفع
        document.getElementById('profile-image-input').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    const preview = document.getElementById('image-preview');
                    preview.src = event.target.result;
                    document.getElementById('preview-container').style.display = 'block';
                    document.getElementById('upload-submit').disabled = false;
                };
                reader.readAsDataURL(file);
            }
        });
        
        // تسجيل الخروج
        function logout() {
            if(confirm('هل أنت متأكد من تسجيل الخروج؟')) {
                showNotification('جاري تسجيل الخروج...');
                setTimeout(() => {
                    window.location.href = 'logout.php';
                }, 1000);
            }
        }

        // التعليم
        function openEducation() {
            showNotification('جاري تحميل نظام التعليم...');
            setTimeout(() => {
                alert('مرحباً بك في نظام التعليم. كيف يمكننا مساعدتك اليوم؟');
            }, 1000);
        }

        // رفع صورة البروفايل
        function uploadPhoto() {
            showNotification('جاري فتح خيارات رفع الصورة...');
            setTimeout(() => {
                const input = document.createElement('input');
                input.type = 'file';
                input.accept = 'image/*';
                input.onchange = (e) => {
                    const file = e.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = (event) => {
                            document.getElementById('profile-picture').src = event.target.result;
                            showNotification('تم تحديث صورة البروفايل بنجاح');
                        };
                        reader.readAsDataURL(file);
                    }
                };
                input.click();
            }, 500);
        }

        // تعديل الحقول
        function editField(fieldId) {
            const field = document.getElementById(fieldId);
            if (field.readOnly) {
                field.readOnly = false;
                field.style.backgroundColor = 'var(--eerie-black1)';
                field.style.borderBottom = '1px solid var(--orange-yellow-crayola)';
                field.focus();
            } else {
                field.readOnly = true;
                field.style.backgroundColor = 'transparent';
                field.style.borderBottom = 'none';
                showNotification('تم حفظ التغييرات بنجاح');
            }
        }

        // عرض إشعارات
        function showNotification(message) {
            const notification = document.createElement('div');
            notification.style.position = 'fixed';
            notification.style.bottom = '20px';
            notification.style.right = '20px';
            notification.style.background = 'var(--bg-gradient-yellow1)';
            notification.style.color = 'var(--smoky-black)';
            notification.style.padding = '12px 20px';
            notification.style.borderRadius = '8px';
            notification.style.boxShadow = 'var(--shadow3)';
            notification.style.zIndex = '1000';
            notification.style.fontWeight = 'var(--fw600)';
            notification.style.animation = 'fadeIn 0.3s ease-out';
            notification.textContent = message;
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.animation = 'fadeIn 0.3s ease-out reverse forwards';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);
        }

        // عرض لوحة التحكم
        function showDashboard() {
            document.getElementById('dashboard').classList.add('active');
            document.getElementById('systems').classList.remove('active');
        }

        // عرض أنظمة التعليم
        function showSystems() {
            document.getElementById('dashboard').classList.remove('active');
            document.getElementById('systems').classList.add('active');
            
            // تفعيل أنظمة التعليم
            const systemsContainer = document.getElementById('systems-container');
            const systemCards = document.querySelectorAll('.system-card');
            
            systemsContainer.classList.add('active');
            
            // تفعيل كل بطاقة نظام مع تأخير متدرج
            systemCards.forEach((card, index) => {
                setTimeout(() => {
                    card.classList.add('active');
                }, index * 200);
            });
        }

        // تأثيرات عند التحميل
                document.addEventListener('DOMContentLoaded', () => {
            <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                showNotification('تم تحديث صورة البروفايل بنجاح');
            <?php endif; ?>
            
            <?php if (isset($upload_error)): ?>
                showNotification('<?php echo $upload_error; ?>');
            <?php endif; ?>
        });
// التعامل مع إجراءات إدارة الأعضاء
function handleAdminAction(action) {
    switch(action) {
        case 'add_member':
            addNewMember();
            break;
        case 'manage_members':
            manageMembers();
            break;
        case 'view_reports':
            viewMemberReports();
            break;
        default:
            // لا تفعل شيئاً إذا كان الخيار الافتراضي
            break;
    }
    
    // إعادة تعيين القائمة المنسدلة
    setTimeout(() => {
        document.querySelector('.admin-select').value = '';
    }, 100);
}

// إضافة عضو جديد
function addNewMember() {
    showNotification('جاري فتح نموذج إضافة عضو جديد...');
    setTimeout(() => {
        // توجيه إلى صفحة إدارة الأعضاء
        window.location.href = 'add_member.php';
    }, 1000);
}

// إدارة الأعضاء
function manageMembers() {
    showNotification('جاري فتح صفحة إدارة الأعضاء...');
    setTimeout(() => {
        // توجيه إلى صفحة إدارة الأعضاء
        window.location.href = 'manage_members.php';
    }, 1000);
}

    </script>
</body>
</html>