
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Language Genius | مساعدك لتعلم اللغات</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            /* الألوان الأساسية */
            --primary-color: hsl(45, 100%, 72%); /* اللون الذهبي الأساسي */
            --primary-color-dark: hsl(35, 100%, 68%); /* درجه أغمق من الذهبي */
            --secondary-color: hsl(240, 2%, 13%);
            --background-color: hsl(0, 0%, 7%);
            --text-color: hsl(0, 0%, 84%);
            --text-color-light: hsla(0, 0%, 84%, 0.7);
            --card-color: hsl(240, 2%, 12%);
            --border-color: hsl(0, 0%, 22%);
            --error-color: hsl(0, 43%, 51%);
            --success-color: hsl(120, 100%, 40%);

            /* التدرجات */
            --bg-gradient-primary: linear-gradient(to bottom right, var(--primary-color) 0%, var(--primary-color-dark) 100%);
            --bg-gradient-card: linear-gradient(to bottom right, hsla(240, 1%, 18%, 0.251) 3%, hsla(240, 2%, 11%, 0) 100%), var(--card-color);
            --bg-gradient-header: linear-gradient(to right, var(--card-color), var(--background-color));
            --text-gradient-primary: linear-gradient(to right, var(--primary-color), var(--primary-color-dark));

            /* الخطوط */
            --ff-tajawal: "Tajawal", sans-serif;

            /* أحجام الخطوط */
            --fs1: 24px;
            --fs2: 18px;
            --fs3: 17px;
            --fs4: 16px;
            --fs5: 15px;
            --fs6: 14px;
            --fs7: 13px;
            --fs8: 12px;

            /* أوزان الخطوط */
            --fw300: 300;
            --fw400: 400;
            --fw500: 500;
            --fw600: 600;
            --fw700: 700;

            /* الظلال */
            --shadow1: -4px 8px 24px hsla(0, 0%, 0%, 0.25);
            --shadow2: 0px 16px 30px hsla(0, 0%, 0%, 0.25);
            --shadow3: 0px 16px 40px hsla(0, 0%, 0%, 0.25);
            --shadow4: 0px 25px 50px hsla(0, 0%, 0%, 0.15);
            --shadow5: 0px 24px 80px hsla(0, 0%, 0%, 0.25);

            /* التحولات */
            --transition1: 0.25s ease;
            --transition2: 0.5s ease-in-out;
            
            /* الزوايا */
            --radius: 14px;
            --radius-sm: 8px;
            --radius-md: 10px;
        }

        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            height: 100%;
            overflow-x: hidden;
        }

        body {
            font-family: var(--ff-tajawal);
            color: var(--text-color);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            transition: var(--transition2);
            position: relative;
            background: var(--background-color);
        }

        /* خلفية متحركة */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .bg-circle {
            position: absolute;
            border-radius: 50%;
            background: radial-gradient(circle, hsla(210, 100%, 56%, 0.1) 0%, transparent 70%);
            animation: float 15s infinite ease-in-out;
        }

        .bg-circle:nth-child(1) {
            width: 300px;
            height: 300px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .bg-circle:nth-child(2) {
            width: 200px;
            height: 200px;
            top: 60%;
            left: 70%;
            animation-delay: 3s;
        }

        .bg-circle:nth-child(3) {
            width: 400px;
            height: 400px;
            top: 30%;
            left: 50%;
            animation-delay: 6s;
        }

        .bg-circle:nth-child(4) {
            width: 250px;
            height: 250px;
            top: 80%;
            left: 20%;
            animation-delay: 9s;
        }

        .bg-circle:nth-child(5) {
            width: 350px;
            height: 350px;
            top: 10%;
            left: 80%;
            animation-delay: 12s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) translateX(0);
            }
            25% {
                transform: translateY(-20px) translateX(10px);
            }
            50% {
                transform: translateY(10px) translateX(-20px);
            }
            75% {
                transform: translateY(-10px) translateX(20px);
            }
        }

        /* الهيدر الجديد */
        .header {
            display: flex;
            height: 70px;
            background: var(--bg-gradient-header);
            border-bottom: 1px solid var(--border-color);
            box-shadow: var(--shadow1);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            padding: 0 20px;
            align-items: center;
            justify-content: space-between;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .header-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--card-color);
            border: none;
            color: var(--primary-color);
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition1);
            box-shadow: var(--shadow1);
        }

        .header-btn:hover {
            background: var(--primary-color);
            color: var(--background-color);
            transform: translateY(-2px);
        }

        .chat-header {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .chat-title {
            font-weight: var(--fw600);
            font-size: var(--fs4);
            color: var(--text-color);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .chat-title i {
            color: var(--primary-color);
            font-size: 18px;
        }

        /* القائمة الجانبية المحدثة */
        .sidebar {
            width: 350px;
            height: calc(100vh - 70px);
            background: var(--card-color);
            border-left: 1px solid var(--border-color);
            position: fixed;
            top: 70px;
            right: -350px;
            transition: var(--transition2);
            overflow-y: auto;
            z-index: 90;
            -webkit-overflow-scrolling: touch;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .sidebar.open {
            right: 0;
        }

        .sidebar-content {
            padding: 20px;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .new-chat-btn {
            width: 100%;
            padding: 12px;
            border-radius: var(--radius-sm);
            background: var(--bg-gradient-primary);
            color: var(--background-color);
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: var(--fs5);
            font-weight: var(--fw600);
            box-shadow: var(--shadow2);
            transition: var(--transition1);
            margin-bottom: 20px;
            gap: 10px;
        }

        .new-chat-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow3);
        }

        .tabs {
            display: flex;
            margin-bottom: 15px;
            border-bottom: 1px solid var(--border-color);
        }

        .tab {
            padding: 10px 16px;
            cursor: pointer;
            font-size: var(--fs6);
            color: var(--text-color-light);
            border-bottom: 2px solid transparent;
            transition: var(--transition1);
            flex: 1;
            text-align: center;
        }

        .tab.active {
            color: var(--primary-color);
            border-bottom: 2px solid var(--primary-color);
            font-weight: var(--fw500);
        }

        .tab-content {
            display: none;
            flex-grow: 1;
            overflow: hidden;
            flex-direction: column;
        }

        .tab-content.active {
            display: flex;
        }

        .history-title {
            font-size: var(--fs6);
            color: var(--text-color-light);
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 0;
            border-bottom: 1px solid var(--border-color);
        }

        .history-scroll {
            flex-grow: 1;
            overflow-y: auto;
            padding-right: 5px;
            margin-right: -5px;
            max-height: 300px;
            -webkit-overflow-scrolling: touch;
        }

        .history-item {
            padding: 12px 16px;
            border-radius: var(--radius-sm);
            margin: 6px 0;
            cursor: pointer;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: var(--fs6);
            transition: var(--transition1);
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--text-color-light);
            position: relative;
        }

        .history-item::before {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            width: 3px;
            background: var(--primary-color);
            border-radius: 3px;
            opacity: 0;
            transition: var(--transition1);
        }

        .history-item:hover {
            background: hsla(240, 1%, 18%, 0.3);
            color: var(--primary-color);
        }

        .history-item.active {
            background: hsla(240, 1%, 18%, 0.5);
            color: var(--primary-color);
            font-weight: var(--fw500);
        }

        .history-item.active::before {
            opacity: 1;
        }

        .course-item {
            padding: 12px 16px;
            border-radius: var(--radius-sm);
            margin: 6px 0;
            cursor: pointer;
            font-size: var(--fs6);
            transition: var(--transition1);
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--text-color);
            border: 1px solid var(--border-color);
            background: var(--card-color);
        }

        .course-item:hover {
            border-color: var(--primary-color);
        }

        .course-icon {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            background: var(--card-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            flex-shrink: 0;
        }

        .course-info {
            flex-grow: 1;
            min-width: 0;
        }

        .course-title {
            font-weight: var(--fw500);
            margin-bottom: 4px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .course-progress {
            height: 4px;
            background: var(--card-color);
            border-radius: 2px;
            margin-top: 6px;
            overflow: hidden;
        }

        .course-progress-fill {
            height: 100%;
            background: var(--text-gradient-primary);
            border-radius: 2px;
            width: 30%;
        }

        /* شريط التقدم المحسن */
        .progress-container {
            padding: 15px 0;
            border-top: 1px solid var(--border-color);
            margin-top: 15px;
        }

        .progress-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            align-items: center;
        }

        .progress-title {
            font-size: var(--fs6);
            color: var(--text-color-light);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .progress-percent {
            color: var(--primary-color);
            font-weight: var(--fw600);
            font-size: var(--fs6);
        }

        .progress-bar {
            height: 6px;
            background: var(--card-color);
            border-radius: 3px;
            overflow: hidden;
            margin-bottom: 6px;
        }

        .progress-fill {
            height: 100%;
            background: var(--text-gradient-primary);
            width: 30%;
            border-radius: 3px;
            transition: width 0.6s ease;
            position: relative;
            overflow: hidden;
        }

        .progress-fill::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: linear-gradient(
                to right,
                rgba(255, 255, 255, 0.1) 0%,
                rgba(255, 255, 255, 0.4) 50%,
                rgba(255, 255, 255, 0.1) 100%
            );
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .progress-days {
            font-size: var(--fs7);
            color: var(--text-color-light);
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        /* منطقة المحادثة الرئيسية المحسنة */
        .main {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            height: calc(100vh - 70px);
            margin-top: 70px;
            background: transparent;
            position: relative;
            overflow: hidden;
        }

        .chat-container {
            flex-grow: 1;
            overflow-y: auto;
            padding: 20px;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
            padding-bottom: 100px; /* مساحة لمنطقة الإدخال */
        }

        .messages-container {
            max-width: 800px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 100%;
        }

        .message {
            display: flex;
            gap: 16px;
            animation: fadeIn 0.4s ease-out forwards;
            opacity: 0;
            transform: translateY(10px);
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .message-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--bg-gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--background-color);
            font-weight: bold;
            flex-shrink: 0;
            margin-top: 4px;
        }

        .user-avatar {
            background: var(--card-color);
            color: var(--primary-color);
        }

        .message-content {
            flex-grow: 1;
            min-width: 0;
        }

        .message-role {
            font-weight: var(--fw600);
            margin-bottom: 8px;
            color: var(--primary-color);
            font-size: var(--fs6);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .message-text {
            line-height: 1.7;
            padding: 16px;
            border-radius: var(--radius-md);
            background: var(--card-color);
            color: var(--text-color);
            font-size: var(--fs6);
            font-weight: var(--fw400);
            white-space: pre-wrap;
            word-break: break-word;
            border: 1px solid var(--border-color);
            box-shadow: var(--shadow1);
        }

        .user-message .message-text {
            background: var(--card-color);
            border-color: var(--primary-color);
        }

        .assistant-message .message-text {
            background: var(--card-color);
            border-color: var(--border-color);
        }

        .welcome-message {
            background: var(--card-color);
            border-color: var(--primary-color) !important;
            color: var(--primary-color) !important;
            font-weight: var(--fw500) !important;
            border-left: 4px solid var(--primary-color);
        }

        .message-time {
            font-size: var(--fs7);
            color: var(--text-color-light);
            margin-top: 8px;
            text-align: left;
            padding-right: 10px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* منطقة الإدخال المحسنة */
        .input-container {
            padding: 16px 20px;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            border-top: 1px solid var(--border-color);
            box-shadow: var(--shadow1);
            z-index: 10;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .input-wrapper {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            width: 100%;
        }

        .input-box {
            display: flex;
            border-radius: var(--radius);
            background: var(--card-color);
            box-shadow: var(--shadow2);
            border: 1px solid var(--border-color);
            transition: var(--transition1);
            overflow: hidden;
        }

        .input-box:focus-within {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px hsla(210, 100%, 56%, 0.1);
        }

        .text-input {
            flex-grow: 1;
            background: transparent;
            border: none;
            color: var(--text-color);
            padding: 16px;
            font-size: var(--fs6);
            font-weight: var(--fw400);
            resize: none;
            height: 60px;
            outline: none;
            line-height: 1.5;
            min-height: 60px;
            max-height: 200px;
        }

        .text-input::placeholder {
            color: var(--text-color-light);
        }

        .input-actions {
            display: flex;
            align-items: flex-end;
            padding: 8px;
        }

        .voice-call-btn, .send-btn {
            background: transparent;
            border: none;
            color: var(--text-color-light);
            cursor: pointer;
            font-size: 20px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition1);
        }

        .voice-call-btn {
            background: var(--card-color);
            color: var(--primary-color);
        }

        .send-btn {
            color: var(--primary-color);
            background: hsla(210, 100%, 56%, 0.1);
        }

        .voice-call-btn:hover, .send-btn:hover {
            color: var(--primary-color);
            background: hsla(210, 100%, 56%, 0.2);
        }

        .voice-call-btn.active {
            color: var(--error-color);
            animation: pulse 1.5s infinite;
            background: hsla(0, 43%, 51%, 0.1);
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .typing-indicator {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 16px;
            opacity: 0;
            transition: var(--transition1);
            color: var(--text-color-light);
            font-size: var(--fs6);
        }

        .typing-indicator.active {
            opacity: 1;
        }

        .typing-dot {
            width: 8px;
            height: 8px;
            background: var(--primary-color);
            border-radius: 50%;
            animation: typingAnimation 1.4s infinite ease-in-out;
        }

        .typing-dot:nth-child(1) { animation-delay: 0s; }
        .typing-dot:nth-child(2) { animation-delay: 0.2s; }
        .typing-dot:nth-child(3) { animation-delay: 0.4s; }

        @keyframes typingAnimation {
            0%, 60%, 100% { transform: translateY(0); }
            30% { transform: translateY(-5px); }
        }

        /* نافذة المكالمة الصوتية */
        .call-modal {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: hsla(0, 0%, 0%, 0.8);
            z-index: 2000;
            justify-content: center;
            align-items: center;
        }

        .call-content {
            background: var(--card-color);
            border-radius: var(--radius);
            width: 90%;
            max-width: 400px;
            padding: 24px;
            box-shadow: var(--shadow5);
            animation: modalFadeIn 0.3s ease-out;
            border: 1px solid var(--border-color);
            position: relative;
            text-align: center;
        }

        .call-header {
            margin-bottom: 20px;
        }

        .call-title {
            font-size: var(--fs4);
            font-weight: var(--fw600);
            color: var(--text-color);
            margin-bottom: 8px;
        }

        .call-status {
            font-size: var(--fs6);
            color: var(--text-color-light);
        }

        .call-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: var(--bg-gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 40px;
            color: var(--background-color);
        }

        .call-actions {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .call-action {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            cursor: pointer;
            transition: var(--transition1);
        }

        .call-end {
            background: var(--error-color);
            color: white;
        }

        .call-mute {
            background: var(--card-color);
            color: var(--text-color);
        }

        .call-mute.active {
            color: var(--error-color);
        }

        .close-call {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--card-color);
            border: none;
            font-size: 20px;
            color: var(--primary-color);
            cursor: pointer;
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* فقاعات اللغات */
        .language-bubble {
            display: inline-block;
            padding: 4px 10px;
            background: var(--primary-color);
            color: var(--background-color);
            border-radius: 20px;
            font-size: var(--fs7);
            margin: 2px;
            font-weight: var(--fw500);
        }
        
        .translation-container {
            margin-top: 10px;
            padding: 10px;
            background: hsla(210, 100%, 56%, 0.1);
            border-radius: var(--radius-sm);
            border-right: 3px solid var(--primary-color);
        }
        
        .translation-title {
            font-weight: var(--fw600);
            color: var(--primary-color);
            margin-bottom: 5px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* شريط التمرير المخصص */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        ::-webkit-scrollbar-track {
            background: var(--card-color);
            border-radius: 6px;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 6px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-color-dark);
        }

        /* التكيف مع الشاشات الصغيرة */
        @media (max-width: 992px) {
            .sidebar {
                width: 100%;
                right: -100%;
            }
            
            .sidebar.open {
                right: 0;
            }

            .chat-container {
                padding: 16px;
                padding-bottom: 120px; /* مساحة أكبر لمنطقة الإدخال في الهواتف */
            }

            .input-container {
                padding: 12px 16px;
            }
        }

        @media (max-width: 768px) {
            .message {
                gap: 12px;
            }

            .message-avatar {
                width: 36px;
                height: 36px;
                font-size: 14px;
            }

            .message-text {
                padding: 12px;
                font-size: var(--fs7);
            }

            .text-input {
                padding: 12px;
                font-size: var(--fs7);
                min-height: 50px;
                height: 50px;
            }
            
            .new-chat-btn {
                font-size: var(--fs6);
                padding: 10px;
            }
            
            .header {
                padding: 0 10px;
            }
            
            .header-btn {
                width: 36px;
                height: 36px;
                font-size: 16px;
            }
            
            .chat-title {
                font-size: var(--fs5);
            }
        }

        @media (max-width: 480px) {
            .message {
                gap: 10px;
            }
            
            .message-text {
                padding: 10px;
                font-size: var(--fs8);
                line-height: 1.6;
            }
            
            .message-role {
                font-size: var(--fs7);
            }
            
            .message-time {
                font-size: var(--fs8);
            }
            
            .text-input {
                min-height: 45px;
                height: 45px;
            }
            
            .input-actions button {
                width: 36px;
                height: 36px;
                font-size: 18px;
            }
            
            .chat-container {
                padding-bottom: 110px;
            }
        }

        /* منع التكبير عند التركيز على حقول الإدخال في iOS */
        @media screen and (max-width: 767px) {
            input,
            textarea {
                font-size: 16px !important;
            }
        }

        /* تحسينات للوضع الأفقي في الهواتف */
        @media screen and (max-height: 500px) and (orientation: landscape) {
            .header {
                height: 50px;
            }
            
            .sidebar {
                height: calc(100vh - 50px);
                top: 50px;
            }
            
            .main {
                height: calc(100vh - 50px);
                margin-top: 50px;
            }
            
            .chat-container {
                padding-bottom: 90px;
            }
            
            .input-container {
                padding: 8px 12px;
            }
            
            .text-input {
                min-height: 40px;
                height: 40px;
            }
        }
    </style>
</head>
<body>
    <!-- خلفية متحركة -->
    <div class="bg-animation">
        <div class="bg-circle"></div>
        <div class="bg-circle"></div>
        <div class="bg-circle"></div>
        <div class="bg-circle"></div>
        <div class="bg-circle"></div>
    </div>

    <!-- الهيدر الجديد -->
    <header class="header">
        <div class="header-actions">
            <button class="header-btn" id="backBtn">
                <i class="fas fa-arrow-right"></i>
            </button>
            <button class="header-btn" id="menuBtn">
                <i class="fas fa-language"></i>
            </button>
            <button class="header-btn" id="newChatBtn">
                <i class="fas fa-plus"></i>
            </button>
            <button class="header-btn" id="themeBtn">
                <i class="fas fa-palette"></i>
            </button>
        </div>
        
        <div class="chat-header">
            <div class="chat-title">
                <i class="fas fa-comment-dots"></i>
                <span id="chatTitle">Language Genius</span>
            </div>
        </div>
    </header>
    
    <!-- القائمة الجانبية المحدثة -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-content">
            <button class="new-chat-btn" id="sidebarNewChatBtn">
                <i class="fas fa-plus"></i> محادثة جديدة
            </button>
            
            <div class="tabs">
                <div class="tab active" data-tab="history">
                    <i class="fas fa-comments"></i> المحادثات
                </div>
                <div class="tab" data-tab="courses">
                    <i class="fas fa-graduation-cap"></i> الدورات
                </div>
                <div class="tab" data-tab="tests">
                    <i class="fas fa-clipboard-check"></i> الاختبارات
                </div>
            </div>
            
            <div class="tab-content active" id="history-tab">
                <div class="history-title">
                    <i class="fas fa-history"></i> المحادثات السابقة
                </div>
                <div class="history-scroll" id="history">
                    <!-- سيتم ملء هذا القسم بالمحادثات السابقة -->
                </div>
            </div>
            
            <div class="tab-content" id="courses-tab">
                <div class="history-title">
                    <i class="fas fa-book-open"></i> دوراتي التعليمية
                </div>
                <div class="history-scroll" id="courses-list">
                    <!-- قائمة الدورات -->
                    <div class="course-item">
                        <div class="course-icon">
                            <i class="fas fa-language"></i>
                        </div>
                        <div class="course-info">
                            <div class="course-title">الإنجليزية للمبتدئين</div>
                            <div class="course-progress">
                                <div class="course-progress-fill" style="width: 45%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="course-item">
                        <div class="course-icon">
                            <i class="fas fa-language"></i>
                        </div>
                        <div class="course-info">
                            <div class="course-title">الفرنسية الأساسية</div>
                            <div class="course-progress">
                                <div class="course-progress-fill" style="width: 20%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="course-item">
                        <div class="course-icon">
                            <i class="fas fa-language"></i>
                        </div>
                        <div class="course-info">
                            <div class="course-title">الألمانية المتوسطة</div>
                            <div class="course-progress">
                                <div class="course-progress-fill" style="width: 70%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="course-item">
                        <div class="course-icon">
                            <i class="fas fa-language"></i>
                        </div>
                        <div class="course-info">
                            <div class="course-title">الإسبانية السريعة</div>
                            <div class="course-progress">
                                <div class="course-progress-fill" style="width: 10%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <button class="new-chat-btn" id="goToCoursesBtn" style="margin-top: 20px;">
                        <i class="fas fa-external-link-alt"></i> تصفح جميع الدورات
                    </button>
                </div>
            </div>
            
            <div class="tab-content" id="tests-tab">
                <div class="history-title">
                    <i class="fas fa-clipboard-list"></i> الاختبارات المتاحة
                </div>
                <div class="history-scroll" id="tests-list">
                    <!-- قائمة الاختبارات -->
                    <div class="course-item">
                        <div class="course-icon">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <div class="course-info">
                            <div class="course-title">اختبار المفردات الإنجليزية</div>
                            <div class="course-progress">
                                <div class="course-progress-fill" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="course-item">
                        <div class="course-icon">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <div class="course-info">
                            <div class="course-title">اختبار القواعد الفرنسية</div>
                            <div class="course-progress">
                                <div class="course-progress-fill" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="course-item">
                        <div class="course-icon">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <div class="course-info">
                            <div class="course-title">اختبار النطق الألماني</div>
                            <div class="course-progress">
                                <div class="course-progress-fill" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="course-item">
                        <div class="course-icon">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <div class="course-info">
                            <div class="course-title">اختبار المحادثة الإسبانية</div>
                            <div class="course-progress">
                                <div class="course-progress-fill" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <button class="new-chat-btn" id="goToTestsBtn" style="margin-top: 20px;">
                        <i class="fas fa-external-link-alt"></i> تصفح جميع الاختبارات
                    </button>
                </div>
            </div>
            
            <div class="progress-container">
                <div class="progress-header">
                    <div class="progress-title">
                        <i class="fas fa-chart-line"></i> تقدم الكورس الحالي
                    </div>
                    <div class="progress-percent" id="progressPercent">30%</div>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" id="progressFill"></div>
                </div>
                <div class="progress-days">
                    <i class="fas fa-calendar-alt"></i>
                    <span id="courseDuration">3 أيام متبقية</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- منطقة المحادثة الرئيسية المحدثة -->
    <div class="main">
        <div class="chat-container" id="chatContainer">
            <div class="messages-container" id="messagesContainer">
                <!-- الرسائل ستظهر هنا -->
                <div class="message assistant-message">
                    <div class="message-avatar">
                        <i class="fas fa-language"></i>
                    </div>
                    <div class="message-content">
                        <div class="message-role">
                            <i class="fas fa-language"></i>
                            Language Genius
                        </div>
                        <div class="message-text welcome-message">
                            مساعدك اللغوى لتعلم اللغات. كيف يمكنني مساعدك اليوم؟
                        </div>
                        <div class="message-time">
                            <i class="far fa-clock"></i>
                            <span>اليوم، 10:30 ص</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- منطقة إدخال الرسائل المحسنة -->
        <div class="input-container">
            <div class="input-wrapper">
                <div class="typing-indicator" id="typingIndicator">
                    <div class="typing-dot"></div>
                    <div class="typing-dot"></div>
                    <div class="typing-dot"></div>
                    <span>يكتب...</span>
                </div>
                <div class="input-box">
                    <div class="input-actions">
                        <button class="voice-call-btn" id="voiceCallBtn" title="ممارسة النطق">
                            <i class="fas fa-microphone"></i>
                        </button>
                    </div>
                    <textarea class="text-input" id="textInput" placeholder="اكتب رسالتك هنا أو اسأل عن ترجمة جملة..." rows="1"></textarea>
                    <div class="input-actions">
                        <button class="send-btn" id="sendBtn" title="إرسال">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- نافذة المكالمة الصوتية -->
    <div class="call-modal" id="callModal">
        <div class="call-content">
            <button class="close-call" id="closeCall">
                <i class="fas fa-times"></i>
            </button>
            <div class="call-header">
                <div class="call-title">ممارسة النطق</div>
                <div class="call-status" id="callStatus">جاري التحضير...</div>
            </div>
            <div class="call-avatar">
                <i class="fas fa-language"></i>
            </div>
            <div class="call-actions">
                <button class="call-action call-mute" id="muteCall">
                    <i class="fas fa-microphone"></i>
                </button>
                <button class="call-action call-end" id="endCall">
                    <i class="fas fa-phone-slash"></i>
                </button>
            </div>
        </div>
    </div>
    
    <script>
        // عناصر DOM
        const sidebar = document.getElementById('sidebar');
        const menuBtn = document.getElementById('menuBtn');
        const newChatBtn = document.getElementById('newChatBtn');
        const sidebarNewChatBtn = document.getElementById('sidebarNewChatBtn');
        const themeBtn = document.getElementById('themeBtn');
        const historyContainer = document.getElementById('history');
        const messagesContainer = document.getElementById('messagesContainer');
        const chatTitle = document.getElementById('chatTitle');
        const textInput = document.getElementById('textInput');
        const sendBtn = document.getElementById('sendBtn');
        const voiceCallBtn = document.getElementById('voiceCallBtn');
        const typingIndicator = document.getElementById('typingIndicator');
        const progressFill = document.getElementById('progressFill');
        const progressPercent = document.getElementById('progressPercent');
        const courseDuration = document.getElementById('courseDuration');
        const tabs = document.querySelectorAll('.tab');
        const tabContents = document.querySelectorAll('.tab-content');
        const callModal = document.getElementById('callModal');
        const closeCall = document.getElementById('closeCall');
        const muteCall = document.getElementById('muteCall');
        const endCall = document.getElementById('endCall');
        const callStatus = document.getElementById('callStatus');
        const goToCoursesBtn = document.getElementById('goToCoursesBtn');
        const goToTestsBtn = document.getElementById('goToTestsBtn');
        
        // حالة التطبيق
        let currentChatId = Date.now().toString();
        let chats = {};
        let isCalling = false;
        let isMuted = false;
        let isTyping = false;
        let currentLanguage = 'الإنجليزية';
        
        // أنظمة الألوان
        const colorThemes = [
            {
                name: "الأزرق",
                primary: "hsl(210, 100%, 56%)",
                primaryDark: "hsl(210, 100%, 46%)",
                secondary: "hsl(240, 2%, 13%)",
                background: "hsl(0, 0%, 7%)",
                text: "hsl(0, 0%, 84%)",
                textLight: "hsla(0, 0%, 84%, 0.7)",
                card: "hsl(240, 2%, 12%)",
                border: "hsl(0, 0%, 22%)"
            },
            {
                name: "الأخضر",
                primary: "hsl(120, 100%, 40%)",
                primaryDark: "hsl(120, 100%, 35%)",
                secondary: "hsl(240, 2%, 13%)",
                background: "hsl(0, 0%, 7%)",
                text: "hsl(0, 0%, 84%)",
                textLight: "hsla(0, 0%, 84%, 0.7)",
                card: "hsl(240, 2%, 12%)",
                border: "hsl(0, 0%, 22%)"
            },
            {
                name: "البنفسجي",
                primary: "hsl(270, 100%, 60%)",
                primaryDark: "hsl(270, 100%, 50%)",
                secondary: "hsl(240, 2%, 13%)",
                background: "hsl(0, 0%, 7%)",
                text: "hsl(0, 0%, 84%)",
                textLight: "hsla(0, 0%, 84%, 0.7)",
                card: "hsl(240, 2%, 12%)",
                border: "hsl(0, 0%, 22%)"
            },
            {
                name: "الذهبي",
                primary: "hsl(45, 100%, 72%)",
                primaryDark: "hsl(35, 100%, 68%)",
                secondary: "hsl(240, 2%, 13%)",
                background: "hsl(0, 0%, 7%)",
                text: "hsl(0, 0%, 84%)",
                textLight: "hsla(0, 0%, 84%, 0.7)",
                card: "hsl(240, 2%, 12%)",
                border: "hsl(0, 0%, 22%)"
            }
        ];
        
        let currentThemeIndex = 0;
        
        // تحميل المحادثات من localStorage عند البدء
        function loadChats() {
            const savedChats = localStorage.getItem('languageGeniusChats');
            if (savedChats) {
                chats = JSON.parse(savedChats);
                renderHistory();
                
                // تحميل المحادثة الأخيرة إذا وجدت
                if (Object.keys(chats).length > 0) {
                    const lastChatId = localStorage.getItem('lastChatId');
                    if (lastChatId && chats[lastChatId]) {
                        loadChat(lastChatId);
                    } else {
                        const firstChatId = Object.keys(chats)[0];
                        loadChat(firstChatId);
                    }
                }
            } else {
                // محادثة افتراضية إذا لم يكن هناك محادثات محفوظة
                chats[currentChatId] = {
                    title: "Language Genius",
                    messages: [
                        {
                            role: "assistant",
                            content: "مساعدك اللغوى لتعلم اللغات. كيف يمكنني مساعدك اليوم؟",
                            timestamp: new Date().toISOString(),
                            language: "الإنجليزية"
                        }
                    ]
                };
                saveChats();
                renderHistory();
            }
            
            // تحميل السمة المفضلة
            const savedTheme = localStorage.getItem('languageGeniusTheme');
            if (savedTheme) {
                currentThemeIndex = parseInt(savedTheme);
                applyTheme(colorThemes[currentThemeIndex]);
            }
            
            updateProgress();
        }
        
        // حفظ المحادثات في localStorage
        function saveChats() {
            localStorage.setItem('languageGeniusChats', JSON.stringify(chats));
            localStorage.setItem('lastChatId', currentChatId);
        }
        
        // تطبيق السمة المحددة
        function applyTheme(theme) {
            document.documentElement.style.setProperty('--primary-color', theme.primary);
            document.documentElement.style.setProperty('--primary-color-dark', theme.primaryDark);
            document.documentElement.style.setProperty('--text-gradient-primary', `linear-gradient(to right, ${theme.primary}, ${theme.primaryDark})`);
            document.documentElement.style.setProperty('--bg-gradient-primary', `linear-gradient(to bottom right, ${theme.primary} 0%, ${theme.primaryDark} 100%)`);
        }
        
        // تغيير السمة
        function changeTheme() {
            currentThemeIndex = (currentThemeIndex + 1) % colorThemes.length;
            applyTheme(colorThemes[currentThemeIndex]);
            localStorage.setItem('languageGeniusTheme', currentThemeIndex.toString());
        }
        
        // عرض تاريخ المحادثات في القائمة الجانبية
        function renderHistory() {
            historyContainer.innerHTML = '';
            
            Object.entries(chats).forEach(([id, chat]) => {
                const historyItem = document.createElement('div');
                historyItem.className = `history-item ${id === currentChatId ? 'active' : ''}`;
                historyItem.innerHTML = `
                    <i class="fas fa-comment${id === currentChatId ? '-dots' : '-alt'}"></i>
                    <span>${chat.title}</span>
                    ${chat.language ? `<span class="language-bubble" style="font-size: 10px; padding: 2px 6px;">${chat.language}</span>` : ''}
                `;
                historyItem.onclick = () => loadChat(id);
                historyContainer.appendChild(historyItem);
            });
        }
        
        // تحميل محادثة محددة
        function loadChat(chatId) {
            currentChatId = chatId;
            const chat = chats[chatId];
            
            // تحديث عنوان المحادثة
            chatTitle.textContent = chat.title;
            currentLanguage = chat.language || 'الإنجليزية';
            
            // تحديث واجهة المحادثة
            messagesContainer.innerHTML = '';
            chat.messages.forEach(message => {
                addMessageToChat(message.role, message.content, message.timestamp, message.language);
            });
            
            // تحديث القائمة الجانبية
            renderHistory();
            saveChats();
            
            // التمرير إلى الأسفل
            scrollToBottom();
        }
        
        // إنشاء محادثة جديدة
        function newChat() {
            currentChatId = Date.now().toString();
            chats[currentChatId] = {
                title: "Language Genius",
                language: currentLanguage,
                messages: [
                    {
                        role: "assistant",
                        content: `مساعدك اللغوى لتعلم اللغات. كيف يمكنني مساعدك في تعلم ${currentLanguage}؟`,
                        timestamp: new Date().toISOString(),
                        language: currentLanguage
                    }
                ]
            };
            
            saveChats();
            loadChat(currentChatId);
        }
        
        // إضافة رسالة إلى المحادثة الحالية
        function addMessageToChat(role, content, timestamp = null, language = null) {
            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${role === 'user' ? 'user-message' : 'assistant-message'}`;
            
            const avatarDiv = document.createElement('div');
            avatarDiv.className = `message-avatar ${role === 'user' ? 'user-avatar' : ''}`;
            avatarDiv.innerHTML = role === 'user' ? '<i class="fas fa-user"></i>' : '<i class="fas fa-language"></i>';
            
            const contentDiv = document.createElement('div');
            contentDiv.className = 'message-content';
            
            const roleDiv = document.createElement('div');
            roleDiv.className = 'message-role';
            roleDiv.innerHTML = role === 'user' ? 
                '<i class="fas fa-user"></i> أنت' : 
                '<i class="fas fa-language"></i> Language Genius';
            
            const textDiv = document.createElement('div');
            textDiv.className = 'message-text';
            textDiv.textContent = content;
            
            // إضافة كلاس خاص للرسالة الترحيبية الأولى
            if (role === 'assistant' && messagesContainer.children.length === 0) {
                textDiv.classList.add('welcome-message');
            }
            
            // إضافة الترجمة إذا كانت موجودة
            if (language && role === 'assistant' && content.includes('ترجمة')) {
                const translationDiv = document.createElement('div');
                translationDiv.className = 'translation-container';
                translationDiv.innerHTML = `
                    <div class="translation-title">
                        <i class="fas fa-exchange-alt"></i>
                        <span>الترجمة:</span>
                    </div>
                    <div>${generateTranslation(content)}</div>
                `;
                textDiv.appendChild(translationDiv);
            }
            
            const timeDiv = document.createElement('div');
            timeDiv.className = 'message-time';
            timeDiv.innerHTML = `<i class="far fa-clock"></i> <span>${formatTimestamp(timestamp || new Date().toISOString())}</span>`;
            
            contentDiv.appendChild(roleDiv);
            contentDiv.appendChild(textDiv);
            contentDiv.appendChild(timeDiv);
            messageDiv.appendChild(avatarDiv);
            messageDiv.appendChild(contentDiv);
            
            messagesContainer.appendChild(messageDiv);
            
            scrollToBottom();
        }
        
        // توليد ترجمة عشوائية
        function generateTranslation(text) {
            const phrases = {
                'الإنجليزية': {
                    'مرحباً': 'Hello',
                    'كيف حالك؟': 'How are you?',
                    'شكراً': 'Thank you',
                    'أنا أتعلم اللغة الإنجليزية': 'I am learning English',
                    'ما معنى هذه الكلمة؟': 'What does this word mean?'
                },
                'الفرنسية': {
                    'مرحباً': 'Bonjour',
                    'كيف حالك؟': 'Comment ça va?',
                    'شكراً': 'Merci',
                    'أنا أتعلم اللغة الفرنسية': "J'apprends le français",
                    'ما معنى هذه الكلمة؟': 'Que signifie ce mot?'
                },
                'الألمانية': {
                    'مرحباً': 'Hallo',
                    'كيف حالك؟': 'Wie geht es dir?',
                    'شكراً': 'Danke',
                    'أنا أتعلم اللغة الألمانية': 'Ich lerne Deutsch',
                    'ما معنى هذه الكلمة؟': 'Was bedeutet dieses Wort?'
                },
                'الإسبانية': {
                    'مرحباً': 'Hola',
                    'كيف حالك؟': '¿Cómo estás?',
                    'شكراً': 'Gracias',
                    'أنا أتعلم اللغة الإسبانية': 'Estoy aprendiendo español',
                    'ما معنى هذه الكلمة؟': '¿Qué significa esta palabra?'
                }
            };
            
            for (const [phrase, translation] of Object.entries(phrases[currentLanguage] || phrases['الإنجليزية'])) {
                if (text.includes(phrase)) {
                    return translation;
                }
            }
            
            return "This is a sample translation for: " + text.substring(0, 20) + "...";
        }
        
        // تنسيق التاريخ والوقت
        function formatTimestamp(isoString) {
            const date = new Date(isoString);
            const now = new Date();
            
            if (date.toDateString() === now.toDateString()) {
                return `اليوم، ${date.toLocaleTimeString('ar-EG', { hour: '2-digit', minute: '2-digit' })}`;
            } else {
                const options = { weekday: 'long', hour: '2-digit', minute: '2-digit' };
                return date.toLocaleDateString('ar-EG', options);
            }
        }
        
        // إرسال رسالة
        function sendMessage() {
            const message = textInput.value.trim();
            if (message === '') return;
            
            // إضافة رسالة المستخدم
            addMessageToChat('user', message);
            chats[currentChatId].messages.push({ 
                role: 'user', 
                content: message,
                timestamp: new Date().toISOString(),
                language: currentLanguage
            });
            
            // مسح حقل الإدخال
            textInput.value = '';
            adjustTextareaHeight();
            
            // عرض مؤشر الكتابة
            showTypingIndicator();
            
            // إظهار رد المساعد بعد تأخير
            setTimeout(() => {
                hideTypingIndicator();
                const response = generateAIResponse(message);
                addMessageToChat('assistant', response, null, currentLanguage);
                chats[currentChatId].messages.push({ 
                    role: 'assistant', 
                    content: response,
                    timestamp: new Date().toISOString(),
                    language: currentLanguage
                });
                saveChats();
                scrollToBottom();
            }, 1500 + Math.random() * 2000); // تأخير عشوائي بين 1.5-3.5 ثانية
            
            saveChats();
        }
        
        // توليد رد المساعد لتعلم اللغات
        function generateAIResponse(message) {
            // إجابات متعلقة بتعلم اللغات
            const languageResponses = [
                `في اللغة ${currentLanguage}، ${getLanguageFact(currentLanguage)}`,
                `لتحسين ${currentLanguage} لديك، جرب هذه النصائح:\n- ${getLanguageTips(currentLanguage)}\n- استمع إلى نصوص صوتية\n- كرر الجمل بصوت عالٍ`,
                `ترجمة الجملة إلى ${currentLanguage}:\n"${message}" => "${generateTranslation(message)}"`,
                `هذا سؤال ممتاز عن ${currentLanguage}! إليك الشرح:\n${getLanguageExplanation(currentLanguage, message)}`,
                `في قواعد اللغة ${currentLanguage}:\n${getGrammarRule(currentLanguage)}`
            ];
            
            // إجابات عامة
            const generalResponses = [
                `أنا أفهم أنك تريد تعلم ${currentLanguage}. هل يمكنك توضيح طلبك أكثر؟`,
                `هذا سؤال مثير عن ${currentLanguage}! إليك ما أعرفه...`,
                `شكراً لسؤالك عن ${currentLanguage}. إليك المعلومات التي وجدتها...`,
                `أنا هنا لمساعدتك في تعلم ${currentLanguage}. هل تريد مزيد من التفاصيل؟`,
                `هذا يعتمد على عدة عوامل في ${currentLanguage}. دعني أشرح لك...`
            ];
            
            // تحديد نوع السؤال
            const isTranslationRequest = message.includes('ترجمة') || message.includes('ما معنى') || message.includes('كيف تقول');
            const isGrammarQuestion = message.includes('قاعدة') || message.includes('نحو') || message.includes('لماذا');
            
            if (isTranslationRequest) {
                return `ترجمة "${message}" إلى ${currentLanguage} هي:\n"${generateTranslation(message)}"`;
            } else if (isGrammarQuestion) {
                return `في قواعد ${currentLanguage}:\n${getGrammarRule(currentLanguage, message)}`;
            } else {
                return languageResponses[Math.floor(Math.random() * languageResponses.length)];
            }
        }
        
        // حقائق عن اللغات
        function getLanguageFact(language) {
            const facts = {
                'الإنجليزية': 'الأفعال لا تتغير حسب الجنس، وهناك أدوات تعريف (the) ونكرة (a/an).',
                'الفرنسية': 'الأسماء لها أجناس (مذكر/مؤنث) وتتغير الصفات حسب الجنس والعدد.',
                'الألمانية': 'هناك ثلاثة أجناس للنصوص (مذكر/مؤنث/محايد) وأربع حالات إعرابية.',
                'الإسبانية': 'اللغة تحتوي على أفعال متعددة الأوجه وتستخدم أدوات تعريف محددة.',
                'الإيطالية': 'معظم الكلمات تنتهي بحروف علة والنطق سهل نسبياً.'
            };
            return facts[language] || 'هذه لغة رائجة ولها قواعدها الخاصة التي تستحق التعلم.';
        }
        
        // نصائح لتعلم اللغات
        function getLanguageTips(language) {
            const tips = {
                'الإنجليزية': [
                    'شاهد أفلاماً ومسلسلات بدون ترجمة',
                    'استخدم تطبيقات التبادل اللغوي',
                    'احفظ 10 كلمات جديدة يومياً'
                ],
                'الفرنسية': [
                    'استمع إلى الأغاني الفرنسية وحاول كتابة الكلمات',
                    'اقرأ قصصاً قصيرة للأطفال',
                    'تدرب على النطق الصحيح للحروف الصامتة'
                ],
                'الألمانية': [
                    'تعلم جنس الكلمة مع حفظها',
                    'تدرب على تصريف الأفعال الشاذة',
                    'استخدم البطاقات التعليمية للحالات الإعرابية'
                ],
                'الإسبانية': [
                    'احفظ الأفعال الشائعة وتصريفاتها',
                    'تدرب على لفظ الحرف "r" الإسباني',
                    'اقرأ الصحف الإسبانية اليومية'
                ]
            };
            
            const langTips = tips[language] || [
                'استمع إلى اللغة يومياً',
                'تحدث مع متحدثين أصليين',
                'لا تخشى ارتكاب الأخطاء'
            ];
            
            return langTips[Math.floor(Math.random() * langTips.length)];
        }
        
        // شرح القواعد
        function getGrammarRule(language, question = '') {
            const rules = {
                'الإنجليزية': {
                    'default': 'زمن المضارع البسيط (Present Simple) يستخدم للعادات والحقائق العامة. مثال: "I eat breakfast at 7 AM".',
                    'لماذا': 'في الإنجليزية، ترتيب الكلمات في الجملة مهم جداً (فعل-فاعل-مفعول به).',
                    'كيف': 'للسؤال في الإنجليزية، نقدم الفعل المساعد قبل الفاعل. مثال: "Do you like coffee?"'
                },
                'الفرنسية': {
                    'default': 'الأدوات التعريفية في الفرنسية هي (le للمذكر، la للمؤنث، les للجمع).',
                    'لماذا': 'الصفات في الفرنسية تتطابق مع الاسم في الجنس والعدد. مثال: "une petite maison" (بيت صغير مؤنث).',
                    'كيف': 'للسؤال في الفرنسية يمكن استخدام "Est-ce que" أو قلب الفعل والفاعل. مثال: "Parlez-vous français?"'
                },
                'الألمانية': {
                    'default': 'هناك أربع حالات إعرابية في الألمانية: Nominativ, Akkusativ, Dativ, Genitiv.',
                    'لماذا': 'أدوات التعريف في الألمانية تتغير حسب الحالة الإعرابية والجنس. مثال: "der" (مذكر) تصبح "den" في حالة المفعول به.',
                    'كيف': 'الجملة الألمانية الأساسية تتبع ترتيب: الفاعل-الفعل-المفعول به في الزمن الحاضر.'
                }
            };
            
            const langRules = rules[language] || {
                'default': `قواعد ${language} تشمل العديد من القواعد النحوية والصرفية التي تختلف عن العربية.`,
                'لماذا': `في ${language}، هناك قواعد خاصة بالنحو والصرف تحتاج إلى فهمها جيداً.`,
                'كيف': `لتعلم ${language}، ابدأ بالحوارات البسيطة ثم تدرج إلى القواعد المعقدة.`
            };
            
            if (question.includes('لماذا')) return langRules['لماذا'] || langRules['default'];
            if (question.includes('كيف')) return langRules['كيف'] || langRules['default'];
            return langRules['default'];
        }
        
        // بدء/إيقاف ممارسة النطق
        function toggleCall() {
            if (!isCalling) {
                callModal.style.display = 'flex';
                voiceCallBtn.classList.add('active');
                isCalling = true;
                callStatus.textContent = "جاهز لممارسة النطق";
                
                // إضافة رسالة للمساعد
                setTimeout(() => {
                    addMessageToChat('assistant', `لنبدأ ممارسة النطق باللغة ${currentLanguage}. قل الجمل التالية بعدي:`);
                    chats[currentChatId].messages.push({ 
                        role: 'assistant', 
                        content: `لنبدأ ممارسة النطق باللغة ${currentLanguage}. قل الجمل التالية بعدي:`,
                        timestamp: new Date().toISOString(),
                        language: currentLanguage
                    });
                    saveChats();
                    
                    // إضافة جمل للممارسة
                    setTimeout(() => {
                        const practiceSentences = getPracticeSentences(currentLanguage);
                        addMessageToChat('assistant', practiceSentences);
                        chats[currentChatId].messages.push({ 
                            role: 'assistant', 
                            content: practiceSentences,
                            timestamp: new Date().toISOString(),
                            language: currentLanguage
                        });
                        saveChats();
                    }, 1000);
                }, 500);
            } else {
                endCallHandler();
            }
        }
        
        // جمل للممارسة
        function getPracticeSentences(language) {
            const sentences = {
                'الإنجليزية': [
                    "Hello, how are you?",
                    "My name is...",
                    "I am learning English",
                    "Thank you very much",
                    "Where is the nearest hotel?"
                ],
                'الفرنسية': [
                    "Bonjour, comment ça va?",
                    "Je m'appelle...",
                    "Je suis étudiant",
                    "Merci beaucoup",
                    "Où est la tour Eiffel?"
                ],
                'الألمانية': [
                    "Hallo, wie geht's?",
                    "Ich heiße...",
                    "Ich lerne Deutsch",
                    "Vielen Dank",
                    "Wo ist der Bahnhof?"
                ],
                'الإسبانية': [
                    "Hola, ¿cómo estás?",
                    "Me llamo...",
                    "Estoy aprendiendo español",
                    "Muchas gracias",
                    "¿Dónde está el baño?"
                ]
            };
            
            const langSentences = sentences[language] || [
                "مرحباً، كيف حالك؟",
                "أنا أتعلم هذه اللغة",
                "شكراً لك",
                "أين المحطة؟",
                "كم الساعة الآن؟"
            ];
            
            return "جمل للممارسة:\n" + langSentences.map((s, i) => `${i+1}. ${s}`).join('\n');
        }
        
        // إغلاق ممارسة النطق
        function endCallHandler() {
            callModal.style.display = 'none';
            voiceCallBtn.classList.remove('active');
            isCalling = false;
            isMuted = false;
            muteCall.innerHTML = '<i class="fas fa-microphone"></i>';
            muteCall.classList.remove('active');
            callStatus.textContent = "جاري التحضير...";
            
            // إضافة رسالة عن انتهاء الممارسة
            addMessageToChat('assistant', 'انتهت جلسة ممارسة النطق. هل تريد الاستمرار في تعلم ' + currentLanguage + '؟');
            chats[currentChatId].messages.push({ 
                role: 'assistant', 
                content: 'انتهت جلسة ممارسة النطق. هل تريد الاستمرار في تعلم ' + currentLanguage + '؟',
                timestamp: new Date().toISOString(),
                language: currentLanguage
            });
            saveChats();
        }
        
        // كتم/إلغاء كتم الميكروفون
        function toggleMute() {
            isMuted = !isMuted;
            if (isMuted) {
                muteCall.innerHTML = '<i class="fas fa-microphone-slash"></i>';
                muteCall.classList.add('active');
                callStatus.textContent = "الميكروفون مكتوم";
            } else {
                muteCall.innerHTML = '<i class="fas fa-microphone"></i>';
                muteCall.classList.remove('active');
                callStatus.textContent = "تم تفعيل الميكروفون";
            }
        }
        
        // تحديث شريط التقدم
        function updateProgress() {
            // حساب التقدم بشكل عشوائي للتوضيح
            const progress = Math.min(Math.floor(Math.random() * 100), 100);
            progressFill.style.width = `${progress}%`;
            progressPercent.textContent = `${progress}%`;
            
            const remainingDays = Math.floor(Math.random() * 10);
            courseDuration.innerHTML = `<i class="fas fa-calendar-alt"></i> <span>${
                remainingDays > 0 ? `${remainingDays} أيام متبقية` : "الكورس منتهي اليوم!"
            }</span>`;
        }
        
        // التمرير إلى آخر رسالة
        function scrollToBottom() {
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }
        
        // ضبط ارتفاع حقل النص تلقائياً
        function adjustTextareaHeight() {
            textInput.style.height = 'auto';
            textInput.style.height = `${Math.min(textInput.scrollHeight, 200)}px`;
        }
        
        // تبديل بين تبويبات القائمة الجانبية
        function switchTab(tabId) {
            tabs.forEach(tab => {
                if (tab.dataset.tab === tabId) {
                    tab.classList.add('active');
                } else {
                    tab.classList.remove('active');
                }
            });
            
            tabContents.forEach(content => {
                if (content.id === `${tabId}-tab`) {
                    content.classList.add('active');
                } else {
                    content.classList.remove('active');
                }
            });
        }
        
        // عرض مؤشر الكتابة
        function showTypingIndicator() {
            typingIndicator.classList.add('active');
            scrollToBottom();
        }
        
        // إخفاء مؤشر الكتابة
        function hideTypingIndicator() {
            typingIndicator.classList.remove('active');
        }
        
        // أحداث DOM
        menuBtn.addEventListener('click', () => {
            sidebar.classList.toggle('open');
        });
        
        newChatBtn.addEventListener('click', newChat);
        sidebarNewChatBtn.addEventListener('click', newChat);
        sendBtn.addEventListener('click', sendMessage);
        voiceCallBtn.addEventListener('click', toggleCall);
        themeBtn.addEventListener('click', changeTheme);
        
        // أحداث ممارسة النطق
        closeCall.addEventListener('click', endCallHandler);
        endCall.addEventListener('click', endCallHandler);
        muteCall.addEventListener('click', toggleMute);
        
        // أحداث التبويبات
        tabs.forEach(tab => {
            tab.addEventListener('click', () => switchTab(tab.dataset.tab));
        });
        
        goToCoursesBtn.addEventListener('click', () => {
            switchTab('courses');
        });
        
        goToTestsBtn.addEventListener('click', () => {
            switchTab('tests');
        });
        
        textInput.addEventListener('input', adjustTextareaHeight);
        textInput.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                sendMessage();
            }
        });
        
        // إغلاق القائمة الجانبية عند النقر خارجها (للأجهزة الصغيرة)
        document.addEventListener('click', (e) => {
            if (window.innerWidth <= 992) {
                if (!sidebar.contains(e.target) && e.target !== menuBtn && !e.target.closest('.header-actions')) {
                    sidebar.classList.remove('open');
                }
            }
        });
        
        // تحسينات للوحة المفاتيح على الهواتف
        window.addEventListener('resize', function() {
            if (window.innerWidth <= 768) {
                // عند فتح لوحة المفاتيح، التمرير إلى الأسفل
                setTimeout(scrollToBottom, 300);
            }
        });
        // عناصر DOM
const backBtn = document.getElementById('backBtn');

// أحداث DOM
backBtn.addEventListener('click', () => {
    window.history.back();
});
        // تحميل المحادثات عند البدء
        window.addEventListener('DOMContentLoaded', loadChats);
    </script>
</body>
</html>