<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius Ai - مساعد النحو والبلاغة</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
        @import url('https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&display=swap');

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
            --bg-gradient-gold1: linear-gradient(
                to bottom right,
                hsl(43, 100%, 60%) 0%,
                hsla(43, 100%, 60%, 0.3) 50%
            );
            --bg-gradient-gold2: linear-gradient(
                135deg,
                hsla(43, 100%, 60%, 0.251) 0%,
                hsla(43, 100%, 60%, 0) 59.86%
                ),
                hsl(240, 2%, 13%);
            --border-gradient-onyx: linear-gradient(
                to bottom right,
                hsl(0, 0%, 25%) 0%,
                hsla(0, 0%, 25%, 0) 50%
            );
            --text-gradient-gold: linear-gradient(
                to right,
                hsl(43, 100%, 60%),
                hsl(38, 100%, 50%)
            );

            --jet: hsl(0, 0%, 22%);
            --onyx: hsl(240, 1%, 17%);
            --eerie-black1: hsl(240, 2%, 13%);
            --eerie-black2: hsl(240, 2%, 12%);
            --smoky-black: hsl(0, 0%, 7%);
            --white1: hsl(0, 0%, 100%);
            --white2: hsl(0, 0%, 98%);
            --gold-crayola: hsl(43, 100%, 60%);
            --vegas-gold: hsl(43, 80%, 50%);
            --light-gray: hsl(0, 0%, 84%);
            --light-gray70: hsla(0, 0%, 84%, 0.7);
            --bittersweet-shimmer: hsl(0, 43%, 51%);

            --ff-poppins: "Poppins", sans-serif;
            --ff-amiri: "Amiri", serif;

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
            
            --primary-color: var(--gold-crayola);
            --secondary-color: var(--vegas-gold);
            --background-color: var(--smoky-black);
            --user-chat-color: var(--onyx);
            --bot-chat-color: var(--eerie-black1);
            --text-color: var(--white2);
            --input-background: var(--jet);
            --border-color: var(--jet);
        }

        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--ff-poppins);
        }

        body {
            background: var(--smoky-black);
            color: var(--text-color);
            height: 100vh;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        header {
            background: var(--border-gradient-onyx);
            color: var(--white2);
            padding: 12px 15px;
            text-align: center;
            box-shadow: var(--shadow1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            z-index: 2;
            border-bottom: 1px solid var(--jet);
            min-height: 60px;
        }

        .logo-container {
            display: flex;
            align-items: center;
            flex: 1;
            justify-content: center;
        }

        .logo-container h1 {
            margin: 0 10px;
            font-size: var(--fs2);
            background: var(--text-gradient-gold);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: var(--fw600);
        }

        .header-actions {
            display: flex;
            gap: 8px;
        }

        .header-button {
            background: var(--border-gradient-onyx);
            border: none;
            color: var(--gold-crayola);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition1);
            font-size: 1.2rem;
            position: relative;
            z-index: 1;
        }

        .header-button::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .header-button:hover {
            transform: rotate(15deg);
            color: var(--white2);
            background: var(--bg-gradient-gold2);
        }

        .main-container {
            display: flex;
            flex: 1;
            overflow: hidden;
            position: relative;
        }

        .chat-container {
            flex: 1;
            overflow-y: auto;
            padding: 15px;
            display: flex;
            flex-direction: column;
            gap: 12px;
            background: var(--bg-gradient-jet);
            position: relative;
            z-index: 1;
            transition: all var(--transition2);
        }

        .message {
            max-width: 85%;
            padding: 12px 15px;
            border-radius: 18px;
            line-height: 1.5;
            position: relative;
            animation: fadeIn 0.3s ease-in-out;
            font-size: var(--fs6);
            display: flex;
            align-items: flex-start;
            gap: 8px;
            box-shadow: var(--shadow1);
        }

        .message-icon {
            font-size: 16px;
            margin-top: 2px;
            flex-shrink: 0;
        }

        .user-message .message-icon {
            color: var(--vegas-gold);
        }

        .bot-message .message-icon {
            color: var(--gold-crayola);
        }

        .message-content {
            flex: 1;
            font-family: var(--ff-amiri);
            font-size: 1.1em;
            line-height: 1.8;
        }

        .message-image {
            max-width: 100%;
            border-radius: 8px;
            margin-top: 8px;
            box-shadow: var(--shadow1);
        }

        .typing-cursor {
            display: inline-block;
            width: 8px;
            height: 16px;
            background: var(--text-gradient-gold);
            animation: blink 1s infinite;
            margin-left: 2px;
            vertical-align: middle;
        }

        @keyframes blink {
            0%, 50% { opacity: 1; }
            51%, 100% { opacity: 0; }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .user-message {
            background: var(--border-gradient-onyx);
            align-self: flex-end;
            border-bottom-right-radius: 5px;
            position: relative;
            z-index: 1;
        }

        .user-message::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .bot-message {
            background: var(--border-gradient-onyx);
            align-self: flex-start;
            border-bottom-left-radius: 5px;
            position: relative;
            z-index: 1;
        }

        .bot-message::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .welcome-message {
            text-align: center;
            background: var(--border-gradient-onyx);
            color: var(--white2);
            padding: 20px;
            border-radius: 14px;
            margin: 10px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            position: relative;
            z-index: 1;
        }

        .welcome-message::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .welcome-icon {
            font-size: 2.5rem;
            margin-bottom: 5px;
            background: var(--text-gradient-gold);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .welcome-text {
            font-size: var(--fs4);
            font-weight: var(--fw500);
            font-family: var(--ff-amiri);
        }

        .welcome-subtext {
            font-size: var(--fs6);
            opacity: 0.9;
            font-weight: var(--fw300);
            font-family: var(--ff-amiri);
        }

        .welcome-suggestions {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 8px;
            margin-top: 15px;
        }

        .welcome-suggestion {
            background: var(--bg-gradient-jet);
            color: var(--light-gray);
            padding: 8px 14px;
            border-radius: 16px;
            cursor: pointer;
            font-size: var(--fs7);
            transition: var(--transition1);
            white-space: nowrap;
            display: flex;
            align-items: center;
            gap: 6px;
            border: 1px solid var(--jet);
            font-family: var(--ff-amiri);
        }

        .welcome-suggestion:hover {
            background: var(--bg-gradient-gold2);
            color: var(--white2);
            transform: translateY(-2px);
        }

        .welcome-suggestion i {
            font-size: 0.9rem;
        }

        .typing-indicator {
            display: flex;
            background: var(--border-gradient-onyx);
            align-self: flex-start;
            border-bottom-left-radius: 5px;
            padding: 12px 15px;
            box-shadow: var(--shadow1);
            max-width: 25%;
            margin-bottom: 10px;
            gap: 8px;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .typing-indicator::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .typing-indicator span {
            height: 8px;
            width: 8px;
            background: var(--text-gradient-gold);
            display: block;
            border-radius: 50%;
            opacity: 0.6;
        }

        .typing-indicator span:nth-of-type(1) {
            animation: typing 1s infinite;
        }

        .typing-indicator span:nth-of-type(2) {
            animation: typing 1s 0.33s infinite;
        }

        .typing-indicator span:nth-of-type(3) {
            animation: typing 1s 0.66s infinite;
        }

        @keyframes typing {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-5px);
            }
        }

        .input-container {
            display: flex;
            padding: 12px;
            background: var(--border-gradient-onyx);
            border-top: 1px solid var(--jet);
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .input-wrapper {
            display: flex;
            flex: 1;
            background: var(--bg-gradient-jet);
            border: 1px solid var(--jet);
            border-radius: 24px;
            padding: 5px 15px;
            align-items: center;
            transition: var(--transition1);
            position: relative;
        }

        .input-wrapper:focus-within {
            box-shadow: 0 0 0 2px var(--gold-crayola);
        }

        input {
            flex: 1;
            padding: 10px 5px;
            border: none;
            outline: none;
            font-size: var(--fs6);
            background: transparent;
            color: var(--white2);
            font-family: var(--ff-amiri);
        }

        input::placeholder {
            color: var(--light-gray70);
        }

        .action-buttons {
            display: flex;
            margin-left: 5px;
        }

        .action-button {
            background: none;
            border: none;
            color: var(--gold-crayola);
            font-size: 1.1rem;
            cursor: pointer;
            margin: 0 3px;
            padding: 8px;
            border-radius: 50%;
            transition: var(--transition1);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .action-button:hover {
            background: hsla(43, 100%, 60%, 0.1);
            transform: scale(1.1);
        }

        #sendButton {
            background: var(--border-gradient-onyx);
            color: var(--gold-crayola);
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            cursor: pointer;
            transition: var(--transition1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 5px;
            position: relative;
            z-index: 1;
        }

        #sendButton::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        #sendButton:hover {
            transform: scale(1.05);
            background: var(--bg-gradient-gold2);
            color: var(--white2);
        }

        .character-count {
            position: absolute;
            bottom: -20px;
            left: 15px;
            font-size: var(--fs8);
            color: var(--light-gray70);
        }

        /* Sidebar styles */
        .sidebar {
            position: fixed;
            top: 0;
            right: -300px;
            width: 300px;
            height: 100%;
            background: var(--bg-gradient-jet);
            border-left: 1px solid var(--jet);
            z-index: 1000;
            transition: var(--transition2);
            padding: 20px;
            overflow-y: auto;
            box-shadow: var(--shadow5);
        }

        .sidebar.open {
            right: 0;
        }

        .sidebar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--jet);
        }

        .sidebar-title {
            font-size: var(--fs3);
            font-weight: var(--fw600);
            background: var(--text-gradient-gold);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-family: var(--ff-amiri);
        }

        .close-sidebar {
            background: none;
            border: none;
            color: var(--gold-crayola);
            font-size: 1.2rem;
            cursor: pointer;
            transition: var(--transition1);
        }

        .close-sidebar:hover {
            transform: rotate(90deg);
            color: var(--white2);
        }

        .history-list {
            list-style: none;
        }

        .history-item {
            padding: 10px;
            margin-bottom: 10px;
            background: var(--border-gradient-onyx);
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition1);
            position: relative;
            z-index: 1;
        }

        .history-item::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .history-item:hover {
            transform: translateX(-5px);
            background: var(--bg-gradient-gold2);
        }

        .history-query {
            font-size: var(--fs6);
            margin-bottom: 5px;
            font-family: var(--ff-amiri);
        }

        .history-date {
            font-size: var(--fs8);
            color: var(--light-gray70);
        }

        .no-history {
            text-align: center;
            padding: 20px;
            color: var(--light-gray70);
            font-size: var(--fs6);
        }

        /* Overlay for sidebar */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            display: none;
        }

        .overlay.active {
            display: block;
        }

        /* Recording Modal */
        .recording-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1001;
            justify-content: center;
            align-items: center;
        }

        .recording-modal.open {
            display: flex;
        }

        .recording-content {
            background: var(--bg-gradient-jet);
            padding: 30px;
            border-radius: 14px;
            width: 90%;
            max-width: 300px;
            box-shadow: var(--shadow5);
            position: relative;
            text-align: center;
        }

        .recording-icon {
            font-size: 3rem;
            color: var(--bittersweet-shimmer);
            margin-bottom: 15px;
            animation: pulse 1s infinite;
        }

        .recording-text {
            font-size: var(--fs5);
            margin-bottom: 20px;
            font-family: var(--ff-amiri);
        }

        .recording-timer {
            font-size: var(--fs3);
            font-weight: var(--fw600);
            margin-bottom: 20px;
        }

        .recording-actions {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .stop-recording {
            background: var(--bittersweet-shimmer);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-size: var(--fs6);
            transition: var(--transition1);
        }

        .stop-recording:hover {
            transform: scale(1.05);
        }

        /* Input action buttons */
        .input-actions {
            display: flex;
            align-items: center;
            margin-left: 10px;
        }

        .input-action-button {
            background: var(--border-gradient-onyx);
            border: none;
            color: var(--gold-crayola);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition1);
            font-size: 1rem;
            position: relative;
            z-index: 1;
            margin: 0 5px;
        }

        .input-action-button::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .input-action-button:hover {
            transform: scale(1.05);
            background: var(--bg-gradient-gold2);
            color: var(--white2);
        }

        /* Recording animation */
        .recording {
            animation: pulse 1.5s infinite;
            color: var(--bittersweet-shimmer) !important;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        footer {
            text-align: center;
            padding: 10px;
            background: var(--border-gradient-onyx);
            font-size: 12px;
            color: var(--light-gray70);
            border-top: 1px solid var(--jet);
            z-index: 1;
        }

        /* Mobile-specific styles */
        .mobile-input-container {
            display: none;
            position: fixed;
            bottom: 35px;
            left: 0;
            right: 0;
            background: var(--border-gradient-onyx);
            padding: 10px;
            z-index: 10;
            border-top: 1px solid var(--jet);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .message {
                max-width: 90%;
            }
            
            .welcome-suggestion {
                padding: 7px 12px;
                font-size: var(--fs8);
            }
        }

        @media (max-width: 768px) {
            header {
                padding: 10px 12px;
            }
            
            .logo-container h1 {
                font-size: var(--fs4);
                margin: 0 5px;
            }
            
            .header-button {
                width: 36px;
                height: 36px;
                font-size: 1rem;
            }
            
            .chat-container {
                padding: 12px;
                padding-bottom: 80px; /* مساحة للأزرار في الأسفل */
            }
            
            .message {
                max-width: 90%;
                padding: 10px 12px;
                font-size: var(--fs7);
            }
            
            .input-container {
                display: none; /* إخفاء شريط الإدخال الأصلي */
            }
            
            .mobile-input-container {
                display: flex; /* إظهار شريط الإدخال المخصص للجوال */
                align-items: center;
            }
            
            .mobile-input-wrapper {
                display: flex;
                flex: 1;
                background: var(--bg-gradient-jet);
                border: 1px solid var(--jet);
                border-radius: 24px;
                padding: 4px 12px;
                align-items: center;
                transition: var(--transition1);
                position: relative;
            }
            
            .mobile-input-wrapper:focus-within {
                box-shadow: 0 0 0 2px var(--gold-crayola);
            }
            
            .mobile-input-wrapper input {
                flex: 1;
                padding: 8px 5px;
                border: none;
                outline: none;
                font-size: var(--fs7);
                background: transparent;
                color: var(--white2);
                font-family: var(--ff-amiri);
            }
            
            .mobile-send-button {
                background: var(--border-gradient-onyx);
                color: var(--gold-crayola);
                border: none;
                border-radius: 50%;
                width: 36px;
                height: 36px;
                cursor: pointer;
                transition: var(--transition1);
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 5px;
                position: relative;
                z-index: 1;
                margin-left: 8px;
            }
            
            .mobile-send-button::before {
                content: "";
                position: absolute;
                inset: 1px;
                background: var(--bg-gradient-jet);
                border-radius: inherit;
                z-index: -1;
            }
            
            .mobile-send-button:hover {
                transform: scale(1.05);
                background: var(--bg-gradient-gold2);
                color: var(--white2);
            }
            
            .mobile-action-button {
                background: var(--border-gradient-onyx);
                border: none;
                color: var(--gold-crayola);
                width: 36px;
                height: 36px;
                border-radius: 50%;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: var(--transition1);
                font-size: 0.9rem;
                position: relative;
                z-index: 1;
                margin-left: 8px;
            }
            
            .mobile-action-button::before {
                content: "";
                position: absolute;
                inset: 1px;
                background: var(--bg-gradient-jet);
                border-radius: inherit;
                z-index: -1;
            }
            
            .mobile-action-button:hover {
                transform: scale(1.05);
                background: var(--bg-gradient-gold2);
                color: var(--white2);
            }
            
            .welcome-icon {
                font-size: 2rem;
            }
            
            .welcome-text {
                font-size: var(--fs5);
            }
            
            .welcome-subtext {
                font-size: var(--fs7);
            }
            
            .welcome-suggestions {
                gap: 6px;
            }
            
            .welcome-suggestion {
                padding: 6px 10px;
                font-size: var(--fs8);
            }
            
            .typing-indicator {
                max-width: 30%;
                padding: 10px 12px;
            }
            
            .sidebar {
                width: 85%;
                right: -85%;
            }
        }
        
        @media (max-width: 480px) {
            header {
                padding: 8px 10px;
            }
            
            .logo-container h1 {
                font-size: var(--fs5);
            }
            
            .chat-container {
                padding: 10px;
                padding-bottom: 70px;
            }
            
            .message {
                max-width: 95%;
                padding: 8px 10px;
                font-size: var(--fs7);
            }
            
            .message-content {
                font-size: 1em;
            }
            
            .welcome-message {
                padding: 15px;
            }
            
            .welcome-suggestions {
                flex-direction: column;
                align-items: center;
            }
            
            .welcome-suggestion {
                width: 100%;
                text-align: center;
                justify-content: center;
            }
            
            .mobile-input-container {
                padding: 8px;
            }
            
            .mobile-input-wrapper {
                padding: 3px 10px;
            }
            
            .mobile-input-wrapper input {
                font-size: var(--fs7);
                padding: 6px 3px;
            }
            
            .mobile-send-button,
            .mobile-action-button {
                width: 32px;
                height: 32px;
                font-size: 0.8rem;
            }
            
            .header-button {
                width: 32px;
                height: 32px;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 360px) {
            .logo-container h1 {
                font-size: var(--fs6);
            }
            
            .header-button {
                width: 30px;
                height: 30px;
                font-size: 0.8rem;
            }
            
            .welcome-text {
                font-size: var(--fs6);
            }
            
            .welcome-subtext {
                font-size: var(--fs8);
            }
        }

        /* تحسينات للوضع الأفقي على الجوال */
        @media (max-height: 500px) and (orientation: landscape) {
            header {
                padding: 8px 10px;
                min-height: 50px;
            }
            
            .chat-container {
                padding-bottom: 60px;
            }
            
            .message {
                padding: 6px 8px;
            }
            
            .welcome-message {
                padding: 10px;
                margin: 5px 0;
            }
            
            .welcome-icon {
                font-size: 1.5rem;
                margin-bottom: 3px;
            }
            
            .welcome-text {
                font-size: var(--fs6);
            }
            
            .welcome-subtext {
                font-size: var(--fs8);
            }
            
            .welcome-suggestions {
                margin-top: 8px;
                gap: 4px;
            }
            
            .welcome-suggestion {
                padding: 4px 8px;
                font-size: var(--fs8);
            }
        }
    </style>
</head>
<body>
    <div class="overlay" id="overlay"></div>
    
    <header>
        <div class="header-actions">
            <button class="header-button" id="historyButton">
                <i class="fas fa-history"></i>
            </button>
        </div>
        <div class="logo-container">
            <h1>Genius Ai - مساعد النحو والبلاغة</h1>
        </div>
        <div class="header-actions">
            <button class="header-button" id="clearChatButton">
                <i class="fas fa-trash"></i>
            </button>
        </div>
    </header>
    
    <div class="main-container">
        <div class="chat-container" id="chatContainer">
            <div class="welcome-message" id="welcomeMessage">
                <div class="welcome-icon">
                    <i class="fas fa-language"></i>
                </div>
                <div class="welcome-text">مرحبًا بك في مساعد النحو والبلاغة!</div>
                <div class="welcome-subtext">اسألني أي سؤال في النحو أو البلاغة العربية</div>
                <div class="welcome-suggestions">
                    <div class="welcome-suggestion" data-query="ما هو الفاعل ونائب الفاعل؟">
                        <i class="fas fa-book"></i>
                        الفاعل ونائب الفاعل
                    </div>
                    <div class="welcome-suggestion" data-query="اشرح أنواع الخبر في الجملة الاسمية">
                        <i class="fas fa-pen"></i>
                        أنواع الخبر
                    </div>
                    <div class="welcome-suggestion" data-query="ما هو الاستعارة المكنية؟">
                        <i class="fas fa-feather"></i>
                        الاستعارة المكنية
                    </div>
                    <div class="welcome-suggestion" data-query="ما الفرق بين كان وأخواتها وإن وأخواتها؟">
                        <i class="fas fa-star"></i>
                        كان وإن وأخواتها
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sidebar" id="historySidebar">
            <div class="sidebar-header">
                <h2 class="sidebar-title">سجل المحادثات</h2>
                <button class="close-sidebar" id="closeHistory">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="sidebar-content">
                <ul class="history-list" id="historyList">
                    <!-- History items will be added here dynamically -->
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Input container for desktop -->
    <div class="input-container">
        <div class="input-wrapper">
            <input type="text" id="userInput" placeholder="اطرح سؤالك في النحو أو البلاغة هنا..." maxlength="500" />
            <div class="character-count"><span id="charCount">0</span>/500</div>
            <button class="input-action-button" id="sendButton">
                <i class="fas fa-paper-plane"></i>
            </button>
        </div>
        <div class="input-actions">
            <button class="input-action-button" id="recordButton">
                <i class="fas fa-microphone"></i>
            </button>
        </div>
    </div>
    
    <!-- Mobile input container -->
    <div class="mobile-input-container">
        <div class="mobile-input-wrapper">
            <input type="text" id="mobileUserInput" placeholder="اكتب سؤالك هنا..." maxlength="500" />
        </div>
        <button class="mobile-action-button" id="mobileRecordButton">
            <i class="fas fa-microphone"></i>
        </button>
        <button class="mobile-send-button" id="mobileSendButton">
            <i class="fas fa-paper-plane"></i>
        </button>
    </div>
    
    <!-- Recording Modal -->
    <div class="recording-modal" id="recordingModal">
        <div class="recording-content">
            <div class="recording-icon">
                <i class="fas fa-microphone"></i>
            </div>
            <div class="recording-text">جاري التسجيل... تحدث الآن</div>
            <div class="recording-timer" id="recordingTimer">00:00</div>
            <div class="recording-actions">
                <button class="stop-recording" id="stopRecording">إيقاف التسجيل</button>
            </div>
        </div>
    </div>

    <footer>
        تم التطوير بواسطة Genius Ai 2023 - متخصص في النحو والبلاغة العربية
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chatContainer = document.getElementById('chatContainer');
            const userInput = document.getElementById('userInput');
            const mobileUserInput = document.getElementById('mobileUserInput');
            const sendButton = document.getElementById('sendButton');
            const mobileSendButton = document.getElementById('mobileSendButton');
            const welcomeSuggestions = document.querySelectorAll('.welcome-suggestion');
            const clearChatButton = document.getElementById('clearChatButton');
            const welcomeMessage = document.getElementById('welcomeMessage');
            const charCount = document.getElementById('charCount');
            const historyButton = document.getElementById('historyButton');
            const historySidebar = document.getElementById('historySidebar');
            const closeHistory = document.getElementById('closeHistory');
            const historyList = document.getElementById('historyList');
            const recordButton = document.getElementById('recordButton');
            const mobileRecordButton = document.getElementById('mobileRecordButton');
            const recordingModal = document.getElementById('recordingModal');
            const stopRecording = document.getElementById('stopRecording');
            const recordingTimer = document.getElementById('recordingTimer');
            const overlay = document.getElementById('overlay');
            
            let isTypingEffectActive = false;
            let chatHistory = JSON.parse(localStorage.getItem('nahwChatHistory')) || [];
            let mediaRecorder = null;
            let audioChunks = [];
            let recordingStartTime = null;
            let timerInterval = null;
            
            // تحديث عداد الأحرف
            function updateCharCount(inputElement, countElement) {
                countElement.textContent = inputElement.value.length;
            }
            
            userInput.addEventListener('input', function() {
                updateCharCount(userInput, charCount);
            });
            
            mobileUserInput.addEventListener('input', function() {
                // تحديث عداد الأحرف للإصدار الجوال إذا لزم الأمر
            });
            
            // إضافة رسالة إلى الدردشة
            function addMessage(message, isUser = false) {
                const messageDiv = document.createElement('div');
                messageDiv.classList.add('message');
                messageDiv.classList.add(isUser ? 'user-message' : 'bot-message');
                
                // إضافة الأيقونة المناسبة
                const iconDiv = document.createElement('div');
                iconDiv.classList.add('message-icon');
                iconDiv.innerHTML = isUser ? '<i class="fas fa-user"></i>' : '<i class="fas fa-robot"></i>';
                
                // محتوى الرسالة
                const contentDiv = document.createElement('div');
                contentDiv.classList.add('message-content');
                
                // معالجة الأسطر الجديدة
                const messageWithBreaks = message.replace(/\n/g, '<br>');
                
                if (isUser) {
                    contentDiv.innerHTML = messageWithBreaks;
                } else {
                    // للرسائل الآتية من البوت، نضيف مؤشر الكتابة
                    contentDiv.innerHTML = messageWithBreaks + '<span class="typing-cursor"></span>';
                }
                
                // إضافة العناصر إلى الرسالة
                messageDiv.appendChild(iconDiv);
                messageDiv.appendChild(contentDiv);
                
                chatContainer.appendChild(messageDiv);
                chatContainer.scrollTop = chatContainer.scrollHeight;
                
                return contentDiv;
            }
            
            // تأثير الكتابة الحية
            function typeMessage(message, element, speed = 30) {
                return new Promise((resolve) => {
                    isTypingEffectActive = true;
                    let i = 0;
                    const text = message.replace(/\n/g, '<br>');
                    element.innerHTML = '';
                    
                    function type() {
                        if (i < text.length) {
                            // إذا كان الحرف الحالي هو بداية علامة <br>
                            if (text.substr(i, 4) === '<br>') {
                                element.innerHTML += '<br>';
                                i += 4;
                            } else {
                                element.innerHTML += text.charAt(i);
                                i++;
                            }
                            chatContainer.scrollTop = chatContainer.scrollHeight;
                            setTimeout(type, speed);
                        } else {
                            // إزالة مؤشر الكتابة بعد الانتهاء
                            const cursor = element.querySelector('.typing-cursor');
                            if (cursor) {
                                cursor.remove();
                            }
                            isTypingEffectActive = false;
                            resolve();
                        }
                    }
                    
                    type();
                });
            }
            
            // محاكاة الكتابة
            function showTypingIndicator() {
                const typingDiv = document.createElement('div');
                typingDiv.classList.add('typing-indicator');
                
                const iconDiv = document.createElement('div');
                iconDiv.classList.add('message-icon');
                iconDiv.innerHTML = '<i class="fas fa-robot"></i>';
                
                typingDiv.appendChild(iconDiv);
                
                for (let i = 0; i < 3; i++) {
                    const dot = document.createElement('span');
                    typingDiv.appendChild(dot);
                }
                
                chatContainer.appendChild(typingDiv);
                chatContainer.scrollTop = chatContainer.scrollHeight;
                return typingDiv;
            }
            
            function hideTypingIndicator(typingIndicator) {
                if (typingIndicator) {
                    typingIndicator.remove();
                }
            }
            
            // حفظ المحادثة في السجل
            function saveToHistory(query, response, timestamp) {
                chatHistory.unshift({
                    query,
                    response,
                    timestamp
                });
                
                // حفظ فقط آخر 50 محادثة
                if (chatHistory.length > 50) {
                    chatHistory.pop();
                }
                
                localStorage.setItem('nahwChatHistory', JSON.stringify(chatHistory));
                updateHistorySidebar();
            }
            
            // تحديث الشريط الجانبي للسجل
            function updateHistorySidebar() {
                historyList.innerHTML = '';
                
                if (chatHistory.length === 0) {
                    const noHistory = document.createElement('div');
                    noHistory.classList.add('no-history');
                    noHistory.textContent = 'لا يوجد سجل محادثات حتى الآن';
                    historyList.appendChild(noHistory);
                    return;
                }
                
                chatHistory.forEach((item, index) => {
                    const historyItem = document.createElement('li');
                    historyItem.classList.add('history-item');
                    
                    const queryDiv = document.createElement('div');
                    queryDiv.classList.add('history-query');
                    queryDiv.textContent = item.query.length > 50 ? item.query.substring(0, 50) + '...' : item.query;
                    
                    const dateDiv = document.createElement('div');
                    dateDiv.classList.add('history-date');
                    dateDiv.textContent = new Date(item.timestamp).toLocaleString();
                    
                    historyItem.appendChild(queryDiv);
                    historyItem.appendChild(dateDiv);
                    
                    historyItem.addEventListener('click', () => {
                        // عرض المحادثة المحددة
                        chatContainer.innerHTML = '';
                        const welcomeMsg = welcomeMessage.cloneNode(true);
                        chatContainer.appendChild(welcomeMsg);
                        
                        addMessage(item.query, true);
                        const messageElement = addMessage('', false);
                        typeMessage(item.response, messageElement, 5);
                        
                        // إعادة إضافة مستمعي الأحداث للاقتراحات
                        document.querySelectorAll('.welcome-suggestion').forEach(suggestion => {
                            suggestion.addEventListener('click', function() {
                                userInput.value = this.getAttribute('data-query');
                                mobileUserInput.value = this.getAttribute('data-query');
                                sendMessage();
                            });
                        });
                        
                        // إغلاق الشريط الجانبي
                        historySidebar.classList.remove('open');
                        overlay.classList.remove('active');
                    });
                    
                    historyList.appendChild(historyItem);
                });
            }
            
            // الردود المتخصصة في النحو والبلاغة
            function getNahwResponse(query) {
                const lowerQuery = query.toLowerCase();
                
                // الكشف إذا كان السؤال خارج نطاق النحو والبلاغة
                const isNahwQuestion = (
                    lowerQuery.includes('نحو') ||
                    lowerQuery.includes('بلاغة') ||
                    lowerQuery.includes('قواعد') ||
                    lowerQuery.includes('إعراب') ||
                    lowerQuery.includes('فعل') ||
                    lowerQuery.includes('اسم') ||
                    lowerQuery.includes('حرف') ||
                    lowerQuery.includes('جملة') ||
                    lowerQuery.includes('شعر') ||
                    lowerQuery.includes('بيان') ||
                    lowerQuery.includes('بديع') ||
                    lowerQuery.includes('معاني') ||
                    lowerQuery.includes('استعارة') ||
                    lowerQuery.includes('كناية') ||
                    lowerQuery.includes('تشبih') ||
                    lowerQuery.includes('فاعل') ||
                    lowerQuery.includes('مفعول') ||
                    lowerQuery.includes('مبتدأ') ||
                    lowerQuery.includes('خبر') ||
                    lowerQuery.includes('جار') ||
                    lowerQuery.includes('جر') ||
                    lowerQuery.includes('نصب') ||
                    lowerQuery.includes('رفع') ||
                    lowerQuery.includes('جزم')
                );
                
                if (!isNahwQuestion) {
                    return 'أنا متخصص فقط في النحو والبلاغة العربية. للأسف لا أستطيع الإجابة على أسئلة خارج هذا النطاق. كيف يمكنني مساعدتك في قواعد اللغة العربية أو البلاغة اليوم؟';
                }
                
                if (lowerQuery.includes('فاعل') || lowerQuery.includes('نائب')) {
                    return 'الفاعل هو اسم مرفوع يأتي بعد فعل مبني للمعلوم، يدل على من فعل الفعل أو اتصف به.\n\nأما نائب الفاعل فهو اسم مرفوع يأتي بعد فعل مبني للمجهول، يحل محل الفاعل عندما يُحذف.\n\nمثال على الفاعل: "كتبَ الطالبُ الدرسَ".\nمثال على نائب الفاعل: "كُتِبَ الدرسُ" (أصله: كتب الطالب الدرس).';
                }
                else if (lowerQuery.includes('خبر') || lowerQuery.includes('جملة اسمية')) {
                    return 'الخبر في الجملة الاسمية هو الجزء الذي يتم به المعنى مع المبتدأ، وهو أنواع:\n\n1. الخبر المفرد: ما ليس جملة ولا شبه جملة، مثل: "الطالبُ مجتهدٌ"\n2. الخبر الجملة: إما جملة فعلية أو اسمية، مثل: "الطالب يذاكرُ دروسه"\n3. الخبر شبه الجملة: إما جار ومجرور أو ظرف، مثل: "الكتابُ على الطاولة"\n\nويطابق الخبر المبتدأ في التذكير والتأنيث والإفراد والتثنية والجمع.';
                }
                else if (lowerQuery.includes('استعارة')) {
                    return 'الاستعارة هي تشبيه حذف أحد طرفيه (المشبه أو المشبه به)، وهي أنواع:\n\n1. الاستعارة التصريحية: ما صرح فيها بالمشبه به وحذف المشبه، مثل: "رأيت أسداً يحارب" (المشبه به: الأسد، المشبه: المحارب)\n\n2. الاستعارة المكنية: ما حذف فيها المشبه به ورمز له بشيء من لوازمه، مثل: "حدثني التربُ عن ماجدٍ" (المشبه به: الإنسان، المشبه: الترب)\n\nوالاستعارة من أهم أساليب البلاغة العربية وتضيف جمالاً وقوة للتعبير.';
                }
                else if (lowerQuery.includes('كان') || lowerQuery.includes('إن')) {
                    return 'كان وأخواتها (أفعال ناقصة) تدخل على الجملة الاسمية فترفع المبتدأ ويسمى اسمها، وتنصب الخبر ويسمى خبرها، مثل: "كان الطالبُ مجتهداً".\n\nأما إن وأخواتها (حروف ناسخة) فتدخل على الجملة الاسمية فتنصب المبتدأ ويسمى اسمها، وترفع الخبر ويسمى خبرها، مثل: "إن الطالبَ مجتهدٌ".\n\nمن أخوات كان: أصبح، أضحى، ظل، بات، صار، ليس، ما زال، ما انفك، ما فتئ، ما برح، ما دام.\n\nمن أخوات إن: أن، كأن، لكن، ليت، لعل.';
                }
                else if (lowerQuery.includes('جار') || lowerQuery.includes('جر')) {
                    return 'الجار والمجرور هو تركيب يتكون من حرف جر واسم مجرور، مثل: "ذهبتُ إلى المدرسةِ".\n\nحروف الجر هي: من، إلى، عن، على، في، الباء، الكاف، اللام، الواو، التاء، رُب، مُذ، مُنذ، خلا، عدا، حاشا.\n\nالاسم المجرور يكون:\n- مجروراً بالكسرة إذا كان مفرداً أو جمع تكسير، مثل: "خرجت من البيتِ"، "تحدثت إلى المعلمينَ"\n- مجروراً بالياء إذا كان مثنى أو جمع مذكر سالم، مثل: "مررت بالطالبينِ"، "سلمت على المعلمينَ"\n- مجروراً بالفتحة إذا كان ممنوعاً من الصرف، مثل: "سافرت إلى أحمدَ"';
                }
                else {
                    return 'أهلاً بك! أنا مساعدك المتخصص في النحو والبلاغة العربية. يمكنني مساعدتك في:\n\n• شرح قواعد النحو والصرف\n• تفسير أساليب البلاغة والبيان\n• تحليل الجمل وإعرابها\n• شرح المحسنات البديعية\n• الإجابة على استفساراتك في اللغة العربية\n\nما هو السؤال النحوي أو البلاغي الذي تريد clarification عنه اليوم؟';
                }
            }
            
            // إرسال رسالة
            async function sendMessage() {
                let message = userInput.value.trim();
                if (!message) {
                    message = mobileUserInput.value.trim();
                }
                
                if (message && !isTypingEffectActive) {
                    addMessage(message, true);
                    userInput.value = '';
                    mobileUserInput.value = '';
                    charCount.textContent = '0';
                    
                    const typingIndicator = showTypingIndicator();
                    
                    try {
                        // استخدام الردود المحلية المتخصصة بدلاً من API
                        setTimeout(() => {
                            const response = getNahwResponse(message);
                            hideTypingIndicator(typingIndicator);
                            const messageElement = addMessage('', false);
                            typeMessage(response, messageElement, 20);
                            
                            // حفظ المحادثة في السجل
                            saveToHistory(message, response, Date.now());
                        }, 1500);
                    } catch (error) {
                        hideTypingIndicator(typingIndicator);
                        const messageElement = addMessage('', false);
                        const errorMessage = "عذرًا، حدث خطأ أثناء معالجة طلبك. يرجى المحاولة مرة أخرى.";
                        typeMessage(errorMessage, messageElement, 20);
                    }
                }
            }
            
            // بدء التسجيل
            async function startRecording() {
                try {
                    const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
                    mediaRecorder = new MediaRecorder(stream);
                    audioChunks = [];
                    
                    mediaRecorder.ondataavailable = (event) => {
                        audioChunks.push(event.data);
                    };
                    
                    mediaRecorder.onstop = () => {
                        const audioBlob = new Blob(audioChunks, { type: 'audio/wav' });
                        
                        // هنا يمكنك إرسال audioBlob إلى خدمة التعرف على الكلام
                        // لمثالنا، سنستخدم نصًا افتراضيًا
                        const recordedText = "هذا نص تم إنشاؤه من التسجيل الصوتي حول النحو العربي";
                        
                        userInput.value = recordedText;
                        mobileUserInput.value = recordedText;
                        charCount.textContent = recordedText.length;
                        
                        // إغلاق نافذة التسجيل
                        recordingModal.classList.remove('open');
                        recordButton.classList.remove('recording');
                        mobileRecordButton.classList.remove('recording');
                        
                        // إرسال الرسالة تلقائيًا
                        sendMessage();
                    };
                    
                    mediaRecorder.start();
                    recordingStartTime = new Date();
                    
                    // بدء عداد الوقت
                    let seconds = 0;
                    timerInterval = setInterval(() => {
                        seconds++;
                        const minutes = Math.floor(seconds / 60);
                        const remainingSeconds = seconds % 60;
                        recordingTimer.textContent = `${minutes.toString().padStart(2, '0')}:${remainingSeconds.toString().padStart(2, '0')}`;
                    }, 1000);
                    
                    // عرض نافذة التسجيل
                    recordingModal.classList.add('open');
                    recordButton.classList.add('recording');
                    mobileRecordButton.classList.add('recording');
                    
                } catch (error) {
                    console.error("Error accessing microphone:", error);
                    alert("تعذر الوصول إلى الميكروفون. يرجى التأكد من منح الإذن.");
                }
            }
            
            // إيقاف التسجيل
            function stopRecordingHandler() {
                if (mediaRecorder && mediaRecorder.state !== 'inactive') {
                    mediaRecorder.stop();
                    mediaRecorder.stream.getTracks().forEach(track => track.stop());
                    clearInterval(timerInterval);
                }
            }
            
            // مسح الدردشة
            function clearChat() {
                chatContainer.innerHTML = '';
                const welcomeMsg = welcomeMessage.cloneNode(true);
                chatContainer.appendChild(welcomeMsg);
                
                // إعادة إضافة مستمعي الأحداث للاقتراحات
                document.querySelectorAll('.welcome-suggestion').forEach(suggestion => {
                    suggestion.addEventListener('click', function() {
                        userInput.value = this.getAttribute('data-query');
                        mobileUserInput.value = this.getAttribute('data-query');
                        sendMessage();
                    });
                });
            }
            
            // فتح وإغلاق القائمة الجانبية
            function toggleHistorySidebar() {
                historySidebar.classList.toggle('open');
                overlay.classList.toggle('active');
                
                if (historySidebar.classList.contains('open')) {
                    updateHistorySidebar();
                }
            }
            
            // إضافة مستمعي الأحداث
            sendButton.addEventListener('click', sendMessage);
            mobileSendButton.addEventListener('click', sendMessage);
            
            userInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    sendMessage();
                }
            });
            
            mobileUserInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    sendMessage();
                }
            });
            
            welcomeSuggestions.forEach(suggestion => {
                suggestion.addEventListener('click', function() {
                    userInput.value = this.getAttribute('data-query');
                    mobileUserInput.value = this.getAttribute('data-query');
                    sendMessage();
                });
            });
            
            clearChatButton.addEventListener('click', clearChat);
            
            historyButton.addEventListener('click', toggleHistorySidebar);
            
            closeHistory.addEventListener('click', toggleHistorySidebar);
            
            overlay.addEventListener('click', toggleHistorySidebar);
            
            recordButton.addEventListener('click', startRecording);
            mobileRecordButton.addEventListener('click', startRecording);
            
            stopRecording.addEventListener('click', stopRecordingHandler);
            
            // تهيئة السجل عند التحميل
            updateHistorySidebar();
        });
    </script>
</body>
</html>