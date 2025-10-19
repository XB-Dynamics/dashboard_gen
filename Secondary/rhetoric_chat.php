
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Arabic Grammar Chat | شات الذكاء الاصطناعي للنحو والبلاغة</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Almarai:wght@400;700;800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Reem+Kufi:wght@400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&display=swap');

        :root {
            --bg-gradient-onyx: linear-gradient(to bottom right, hsl(240, 1%, 25%) 3%, hsl(0, 0%, 19%) 97%);
            --bg-gradient-jet: linear-gradient(to bottom right, hsla(240, 1%, 18%, 0.251) 3%, hsla(240, 2%, 11%, 0) 100%), hsl(240, 2%, 13%);
            --bg-gradient-gold1: linear-gradient(to bottom right, hsl(43, 74%, 49%) 0%, hsla(43, 74%, 49%, 0) 50%);
            --bg-gradient-gold2: linear-gradient(135deg, hsla(43, 74%, 49%, 0.251) 0%, hsla(43, 74%, 49%, 0) 59.86%), hsl(240, 2%, 13%);
            --border-gradient-onyx: linear-gradient(to bottom right, hsl(0, 0%, 25%) 0%, hsla(0, 0%, 25%, 0) 50%);
            --text-gradient-gold: linear-gradient(to right, hsl(43, 74%, 49%), hsl(33, 74%, 49%));
            
            --jet: hsl(0, 0%, 22%);
            --onyx: hsl(240, 1%, 17%);
            --eerie-black1: hsl(240, 2%, 13%);
            --eerie-black2: hsl(240, 2%, 12%);
            --smoky-black: hsl(0, 0%, 7%);
            --white1: hsl(0, 0%, 100%);
            --white2: hsl(0, 0%, 98%);
            --gold: hsl(43, 74%, 49%);
            --light-gold: hsl(43, 74%, 59%);
            --light-gray: hsl(0, 0%, 84%);
            --light-gray70: hsla(0, 0%, 84%, 0.7);
            --blue: hsl(210, 100%, 60%);
            --light-blue: hsl(210, 100%, 70%);

            --ff-tajawal: "Tajawal", sans-serif;
            --ff-amiri: "Amiri", serif;
            --ff-almarai: "Almarai", sans-serif;
            --ff-reem-kufi: "Reem Kufi", sans-serif;
            --ff-el-messiri: "El Messiri", sans-serif;

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
            --fw700: 700;
            --fw800: 800;

            --shadow1: -4px 8px 24px hsla(0, 0%, 0%, 0.25);
            --shadow2: 0px 16px 30px hsla(0, 0%, 0%, 0.25);
            --shadow3: 0px 16px 40px hsla(0, 0%, 0%, 0.25);
            --shadow4: 0px 25px 50px hsla(0, 0%, 0%, 0.15);
            --shadow5: 0px 24px 80px hsla(0, 0%, 0%, 0.25);

            --transition1: 0.25s ease;
            --transition2: 0.5s ease-in-out;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--ff-almarai);
        }

        html, body {
            height: 100%;
            overflow: hidden;
        }

        body {
            background: var(--smoky-black);
            color: var(--white2);
            line-height: 1.6;
            text-align: right;
            direction: rtl;
            display: flex;
            flex-direction: column;
            font-family: var(--ff-almarai);
        }

        /* Header Styles */
        .header {
            background: var(--bg-gradient-jet);
            padding: 0 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--white2);
            box-shadow: var(--shadow3);
            position: sticky;
            top: 0;
            z-index: 100;
            height: 60px;
            border-bottom: 3px solid var(--gold);
            flex-shrink: 0;
        }

        .header-container {
            display: flex;
            align-items: center;
            width: 100%;
            margin: 0 auto;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            flex: 1;
        }

        .logo-icon {
            background: var(--bg-gradient-gold2);
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow1);
            border: 2px solid rgba(255, 215, 0, 0.3);
            flex-shrink: 0;
        }

        .logo-icon i {
            color: var(--gold);
            font-size: 16px;
        }

        .logo-text {
            display: flex;
            flex-direction: column;
            line-height: 1.3;
            overflow: hidden;
        }

        .logo-title {
            font-size: 16px;
            font-weight: var(--fw800);
            background: var(--text-gradient-gold);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-family: var(--ff-reem-kufi);
        }

        .logo-subtitle {
            font-size: 11px;
            color: var(--light-gray);
            font-weight: var(--fw400);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-family: var(--ff-tajawal);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-shrink: 0;
        }

        .header-btn {
            color: var(--light-gray);
            background: var(--bg-gradient-jet);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition2);
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow1);
            flex-shrink: 0;
        }

        .header-btn:hover {
            color: var(--gold);
            transform: translateY(-3px);
            box-shadow: var(--shadow2);
            border-color: rgba(255, 215, 0, 0.3);
        }

        .header-btn:active {
            transform: translateY(0);
        }

        .header-btn i {
            font-size: 16px;
        }

        .new-chat-btn {
            background: var(--text-gradient-gold);
            color: var(--smoky-black);
            border: none;
            border-radius: 12px;
            padding: 6px 12px;
            display: flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
            transition: var(--transition2);
            box-shadow: var(--shadow2);
            font-size: 12px;
            font-weight: var(--fw700);
            flex-shrink: 0;
            font-family: var(--ff-reem-kufi);
        }

        .new-chat-btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow4);
        }

        .new-chat-btn:active {
            transform: translateY(0);
        }

        /* Main Container */
        .main-container {
            display: flex;
            flex: 1;
            overflow: hidden;
            position: relative;
            height: calc(100vh - 60px);
        }

        /* Chat Container */
        .chat-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
            background: var(--border-gradient-onyx);
            height: 100%;
        }

        .chat-header {
            padding: 12px 16px;
            background: var(--bg-gradient-jet);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-shrink: 0;
        }

        .chat-contact-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .chat-contact-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--text-gradient-gold);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            color: var(--smoky-black);
            flex-shrink: 0;
        }

        .chat-contact-details {
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .chat-contact-name {
            font-weight: var(--fw600);
            font-size: 14px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-family: var(--ff-reem-kufi);
        }

        .chat-contact-status {
            font-size: 12px;
            color: var(--light-gray70);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-family: var(--ff-tajawal);
        }

        .chat-actions {
            display: flex;
            gap: 8px;
            flex-shrink: 0;
        }

        .chat-action-btn {
            background: none;
            border: none;
            color: var(--light-gray);
            font-size: 16px;
            cursor: pointer;
            transition: var(--transition1);
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .chat-action-btn:hover {
            background: rgba(255, 255, 255, 0.1);
            color: var(--gold);
        }

        .chat-messages {
            flex: 1;
            padding: 16px;
            overflow-y: auto;
            scroll-behavior: smooth;
            display: flex;
            flex-direction: column;
            gap: 12px;
            min-height: 0;
        }

        /* Message Styles */
        .message {
            display: flex;
            flex-direction: column;
            animation: fadeIn 0.4s ease-out;
            max-width: 90%;
            position: relative;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .message-user {
            align-items: flex-end;
            align-self: flex-end;
        }

        .message-ai {
            align-items: flex-start;
            align-self: flex-start;
        }

        .message-content {
            padding: 10px 14px;
            border-radius: 18px;
            position: relative;
            line-height: 1.5;
            font-size: 14px;
            transition: var(--transition1);
            word-break: break-word;
            box-shadow: var(--shadow1);
            border: 1px solid rgba(255, 255, 255, 0.1);
            font-family: var(--ff-el-messiri);
        }

        .user-message .message-content {
            background: var(--text-gradient-gold);
            color: var(--smoky-black);
            border-bottom-right-radius: 6px;
            box-shadow: var(--shadow2);
            font-weight: var(--fw600);
            font-family: var(--ff-el-messiri);
        }

        .ai-message .message-content {
            background: var(--bg-gradient-jet);
            color: var(--white2);
            border-bottom-left-radius: 6px;
            box-shadow: var(--shadow1);
            font-family: var(--ff-amiri);
        }

        .message-time {
            font-size: 10px;
            color: var(--light-gray70);
            margin-top: 4px;
            font-weight: var(--fw400);
            display: flex;
            align-items: center;
            gap: 4px;
            font-family: var(--ff-tajawal);
        }

        .message-time i {
            font-size: 9px;
        }

        .message-image {
            max-width: 250px;
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 6px;
            cursor: pointer;
            border: 2px solid rgba(255, 215, 0, 0.3);
        }

        .message-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .image-caption {
            font-size: 13px;
            color: var(--blue);
            margin-top: 6px;
            text-align: center;
            font-weight: var(--fw600);
            background: rgba(30, 144, 255, 0.1);
            padding: 5px 8px;
            border-radius: 6px;
            border-right: 2px solid var(--blue);
            font-family: var(--ff-tajawal);
        }

        /* Chat Input */
        .chat-input-container {
            padding: 12px 16px;
            background: var(--bg-gradient-jet);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            gap: 10px;
            position: sticky;
            bottom: 0;
            z-index: 10;
            flex-shrink: 0;
        }

        .input-wrapper {
            flex: 1;
            display: flex;
            align-items: center;
            background: var(--smoky-black);
            border-radius: 22px;
            padding: 6px 14px;
            transition: var(--transition2);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: var(--shadow1);
            position: relative;
            min-width: 0;
        }

        .input-wrapper:focus-within {
            border-color: var(--gold);
            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.1);
        }

        .chat-input {
            flex: 1;
            border: none;
            background: transparent;
            padding: 8px 10px;
            font-size: 14px;
            outline: none;
            direction: rtl;
            color: var(--white2);
            padding-right: 10px;
            padding-left: 42px;
            min-width: 0;
            font-family: var(--ff-el-messiri);
        }

        .chat-input::placeholder {
            color: var(--light-gray70);
            opacity: 0.6;
            font-family: var(--ff-el-missiri);
        }

        .input-actions {
            display: flex;
            gap: 6px;
            position: absolute;
            left: 10px;
        }

        .input-btn {
            background: none;
            border: none;
            cursor: pointer;
            color: var(--light-gray70);
            font-size: 16px;
            transition: var(--transition1);
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .input-btn:hover {
            color: var(--gold);
            background: rgba(255, 215, 0, 0.1);
        }

        .input-btn:active {
            transform: scale(0.95);
        }

        .send-button-inside {
            background: var(--text-gradient-gold);
            color: var(--smoky-black);
            border: none;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition2);
            box-shadow: var(--shadow2);
            font-weight: var(--fw700);
            margin-left: 6px;
            flex-shrink: 0;
        }

        .send-button-inside:hover {
            transform: scale(1.05);
            box-shadow: var(--shadow3);
        }

        .send-button-inside:active {
            transform: scale(0.98);
        }

        /* Image Preview */
        .image-preview-container {
            position: fixed;
            bottom: 80px;
            right: 16px;
            background: var(--bg-gradient-jet);
            border-radius: 12px;
            padding: 12px;
            box-shadow: var(--shadow4);
            border: 2px solid var(--gold);
            z-index: 100;
            max-width: 250px;
            display: none;
        }

        .image-preview-container.active {
            display: block;
            animation: slideUp 0.3s ease-out;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .preview-image {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 8px;
        }

        .preview-caption-input {
            width: 100%;
            padding: 6px 10px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            background: var(--smoky-black);
            color: var(--white2);
            font-size: 13px;
            margin-bottom: 8px;
            outline: none;
            font-family: var(--ff-el-messiri);
        }

        .preview-caption-input:focus {
            border-color: var(--gold);
        }

        .preview-actions {
            display: flex;
            gap: 6px;
            justify-content: flex-end;
        }

        .preview-btn {
            padding: 5px 10px;
            border: none;
            border-radius: 6px;
            font-size: 11px;
            cursor: pointer;
            transition: var(--transition1);
            font-family: var(--ff-tajawal);
        }

        .preview-send {
            background: var(--text-gradient-gold);
            color: var(--smoky-black);
            font-weight: var(--fw600);
        }

        .preview-cancel {
            background: var(--bg-gradient-jet);
            color: var(--white2);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .preview-btn:hover {
            transform: translateY(-2px);
        }

        /* Thinking Indicator */
        .thinking-indicator {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 14px;
            background: var(--bg-gradient-jet);
            border-radius: 18px;
            border-bottom-left-radius: 6px;
            box-shadow: var(--shadow1);
            border: 1px solid rgba(255, 255, 255, 0.1);
            max-width: 180px;
            margin-bottom: 12px;
        }

        .thinking-text {
            font-size: 13px;
            color: var(--light-gray70);
            font-family: var(--ff-tajawal);
        }

        .thinking-dots {
            display: flex;
            gap: 3px;
        }

        .thinking-dot {
            width: 5px;
            height: 5px;
            background-color: var(--gold);
            border-radius: 50%;
            animation: thinkingAnimation 1.5s infinite ease-in-out;
        }

        .thinking-dot:nth-child(1) {
            animation-delay: 0s;
        }

        .thinking-dot:nth-child(2) {
            animation-delay: 0.3s;
        }

        .thinking-dot:nth-child(3) {
            animation-delay: 0.6s;
        }

        @keyframes thinkingAnimation {
            0%, 60%, 100% { opacity: 0.3; }
            30% { opacity: 1; }
        }

        /* Modals */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.8);
            z-index: 1000;
            overflow-y: auto;
            padding: 15px;
        }

        .modal-content {
            background: var(--bg-gradient-jet);
            border-radius: 20px;
            max-width: 90%;
            margin: 20px auto;
            overflow: hidden;
            box-shadow: var(--shadow5);
            animation: modalFadeIn 0.3s ease-out;
            border: 2px solid rgba(255, 215, 0, 0.2);
        }

        @keyframes modalFadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .modal-header {
            padding: 16px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: var(--border-gradient-onyx);
        }

        .modal-title {
            font-size: 18px;
            font-weight: var(--fw800);
            color: var(--gold);
            font-family: var(--ff-reem-kufi);
        }

        .close-modal {
            background: none;
            border: none;
            font-size: 20px;
            color: var(--light-gray70);
            cursor: pointer;
            transition: var(--transition1);
        }

        .close-modal:hover {
            color: var(--gold);
            transform: rotate(90deg);
        }

        .modal-body {
            padding: 16px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .form-label {
            display: block;
            margin-bottom: 6px;
            font-weight: var(--fw600);
            color: var(--white2);
            font-family: var(--ff-tajawal);
        }

        .form-input, .form-textarea {
            width: 100%;
            padding: 10px 12px;
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            background: var(--smoky-black);
            font-size: 13px;
            color: var(--white2);
            transition: var(--transition1);
            font-family: var(--ff-el-messiri);
        }

        .form-textarea {
            min-height: 100px;
            resize: vertical;
        }

        .form-input:focus, .form-textarea:focus {
            outline: none;
            border-color: var(--gold);
            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.1);
        }

        .modal-footer {
            padding: 16px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            background: var(--border-gradient-onyx);
        }

        .modal-btn {
            padding: 8px 16px;
            border-radius: 12px;
            font-weight: var(--fw700);
            cursor: pointer;
            transition: var(--transition2);
            border: none;
            font-family: var(--ff-reem-kufi);
        }

        .primary-btn {
            background: var(--text-gradient-gold);
            color: var(--smoky-black);
        }

        .primary-btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow3);
        }

        .secondary-btn {
            background: var(--bg-gradient-jet);
            color: var(--white2);
            border: 2px solid rgba(255, 255, 255, 0.1);
        }

        .secondary-btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow2);
            border-color: rgba(255, 215, 0, 0.3);
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .header {
                padding: 0 12px;
                height: 56px;
            }
            
            .logo-icon {
                width: 32px;
                height: 32px;
            }
            
            .logo-title {
                font-size: 14px;
            }
            
            .logo-subtitle {
                display: none;
            }
            
            .header-btn {
                width: 32px;
                height: 32px;
            }
            
            .new-chat-btn span {
                display: none;
            }
            
            .new-chat-btn {
                width: 32px;
                height: 32px;
                padding: 0;
                justify-content: center;
                border-radius: 50%;
            }
            
            .chat-header {
                padding: 10px 12px;
            }
            
            .chat-contact-avatar {
                width: 36px;
                height: 36px;
                font-size: 14px;
            }
            
            .chat-contact-name {
                font-size: 13px;
            }
            
            .chat-contact-status {
                font-size: 11px;
            }
            
            .chat-action-btn {
                width: 32px;
                height: 32px;
                font-size: 14px;
            }
            
            .chat-messages {
                padding: 12px;
                gap: 10px;
            }
            
            .message {
                max-width: 95%;
            }
            
            .message-content {
                padding: 8px 12px;
                font-size: 13px;
            }
            
            .message-image {
                max-width: 200px;
            }
            
            .chat-input-container {
                padding: 10px 12px;
            }
            
            .input-wrapper {
                padding: 5px 10px;
            }
            
            .chat-input {
                padding-left: 38px;
                font-size: 13px;
            }
            
            .input-btn {
                width: 28px;
                height: 28px;
                font-size: 14px;
            }
            
            .send-button-inside {
                width: 28px;
                height: 28px;
                font-size: 12px;
            }
            
            .image-preview-container {
                right: 12px;
                max-width: 200px;
                bottom: 70px;
            }
        }

        @media (max-width: 360px) {
            .header {
                padding: 0 10px;
            }
            
            .logo-title {
                font-size: 13px;
            }
            
            .chat-messages {
                padding: 10px;
            }
            
            .message {
                max-width: 98%;
            }
            
            .message-content {
                font-size: 12px;
            }
            
            .message-image {
                max-width: 180px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="header-container">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-language"></i>
                </div>
                <div class="logo-text">
                    <span class="logo-title">شات النحو والبلاغة الذكي</span>
                    <span class="logo-subtitle">AI Arabic Grammar Chat</span>
                </div>
            </div>
            <div class="header-actions">
            <button class="header-btn" id="back-btn" title="الرجوع للخلف">
                <i class="fas fa-arrow-right"></i>
            </button>
                <button class="new-chat-btn" id="new-chat-btn">
                    <i class="fas fa-plus"></i>
                    <span>محادثة جديدة</span>
                </button>
            </div>
        </div>
    </div>

    <div class="main-container">
        <!-- Chat Container -->
        <div class="chat-container" id="chat-container">
            <div class="chat-header">
                <div class="chat-contact-info">
                    <div class="chat-contact-avatar" id="chat-contact-avatar">
                        <i class="fas fa-robot"></i>
                    </div>
                    <div class="chat-contact-details">
                        <div class="chat-contact-name" id="chat-contact-name">مساعد النحو والبلاغة الذكي</div>
                        <div class="chat-contact-status" id="chat-contact-status">متصل الآن</div>
                    </div>
                </div>
                <div class="chat-actions">
                    <button class="chat-action-btn" id="clear-chat-btn" title="مسح المحادثة">
                        <i class="fas fa-trash"></i>
                    </button>
                    <button class="chat-action-btn" id="info-btn" title="معلومات المساعد">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
            </div>
            <div class="chat-messages" id="chat-messages">
                <div class="message message-ai ai-message">
                    <div class="message-content">
                        مرحباً بك في شات الذكاء الاصطناعي للنحو والبلاغة! 📚<br>
                        أنا مساعدك المتخصص في قواعد اللغة العربية والبلاغة.
                    </div>
                    <div class="message-time">
                        <i class="far fa-clock"></i> الآن
                    </div>
                </div>
            </div>
            
            <div class="chat-input-container">
                <div class="input-wrapper">
                    <input type="text" class="chat-input" id="message-input" placeholder="اكتب سؤالك النحوي أو البلاغي هنا..." autofocus>
                    <div class="input-actions">
                        <button class="input-btn" id="image-upload-btn" title="رفع صورة">
                            <i class="fas fa-image"></i>
                        </button>
                        <button class="send-button-inside" id="send-btn" title="إرسال">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Preview Container -->
    <div class="image-preview-container" id="image-preview-container">
        <img class="preview-image" id="preview-image" src="" alt="معاينة الصورة">
        <input type="text" class="preview-caption-input" id="preview-caption-input" placeholder="أضف وصفاً للصورة (اختياري)">
        <div class="preview-actions">
            <button class="preview-btn preview-cancel" id="preview-cancel">إلغاء</button>
            <button class="preview-btn preview-send" id="preview-send">إرسال الصورة</button>
        </div>
    </div>

    <!-- Info Modal -->
    <div class="modal" id="info-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">معلومات المساعد</h3>
                <button class="close-modal" id="close-info-modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <h4 style="color: var(--gold); margin-bottom: 10px; font-family: var(--ff-reem-kufi);">مساعد النحو والبلاغة الذكي</h4>
                    <p style="margin-bottom: 15px; font-family: var(--ff-amiri);">
                        أنا مساعد ذكي متخصص في مجال النحو والصرف والبلاغة العربية. يمكنني مساعدتك في فهم قواعد اللغة العربية، 
                        تحليل النصوص الأدبية، شرح الأساليب البلاغية، والإجابة على أسئلتك المتعلقة باللغة العربية.
                    </p>
                    <h4 style="color: var(--gold); margin-bottom: 10px; font-family: var(--ff-reem-kufi);">الميزات المتاحة:</h4>
                    <ul style="margin-right: 15px; font-family: var(--ff-amiri);">
                        <li>شرح قواعد النحو والصرف</li>
                        <li>تحليل الأساليب البلاغية في النصوص</li>
                        <li>شرح علم المعاني والبيان والبديع</li>
                        <li>تحليل الصور النصية المتعلقة باللغة العربية</li>
                        <li>الإجابة على أسئلة النحو والإعراب</li>
                        <li>شرح الظواهر اللغوية والأسلوبية</li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button class="modal-btn primary-btn" id="close-info-btn">حسناً</button>
            </div>
        </div>
    </div>

    <script>
        // DOM Elements
        const messageInput = document.getElementById('message-input');
        const sendBtn = document.getElementById('send-btn');
        const chatMessages = document.getElementById('chat-messages');
        const imageUploadBtn = document.getElementById('image-upload-btn');
const backBtn = document.getElementById('back-btn');
        const newChatBtn = document.getElementById('new-chat-btn');
        const clearChatBtn = document.getElementById('clear-chat-btn');
        const infoBtn = document.getElementById('info-btn');
        const infoModal = document.getElementById('info-modal');
        const closeInfoModal = document.getElementById('close-info-modal');
        const closeInfoBtn = document.getElementById('close-info-btn');
        const imagePreviewContainer = document.getElementById('image-preview-container');
        const previewImage = document.getElementById('preview-image');
        const previewCaptionInput = document.getElementById('preview-caption-input');
        const previewSend = document.getElementById('preview-send');
        const previewCancel = document.getElementById('preview-cancel');

        // Grammar and rhetoric responses
        const grammarResponses = [
            "هذا سؤال ممتاز في النحو! دعني أوضح لك ذلك...",
            "سأشرح لك هذه القاعدة النحوية بالتفصيل...",
            "هذه مسألة بلاغية رائعة، إليك التحليل...",
            "دعني أقدم لك تفسيراً شاملاً لهذه الظاهرة اللغوية...",
            "هذا مفهوم أساسي في علم النحو، سأشرحه لك بطريقة مبسطة...",
            "لتحليل هذا النص، نحتاج إلى تطبيق قواعد البلاغة التالية...",
            "هذا السؤال يتعلق بفرع مهم من فروع اللغة العربية، دعني أوضح...",
            "بناءً على الصورة التي رفعتها، يمكنني تحليل المحتوى اللغوي كالتالي..."
        ];

        // Current selected image
        let currentSelectedImage = null;

        // Initialize the app
        function initApp() {
            // Focus on input when page loads
            messageInput.focus();
            
            // Adjust chat messages height on resize
            window.addEventListener('resize', adjustChatHeight);
            adjustChatHeight();
        }

        // Adjust chat height to fit screen
        function adjustChatHeight() {
            const headerHeight = document.querySelector('.header').offsetHeight;
            const chatHeaderHeight = document.querySelector('.chat-header').offsetHeight;
            const inputContainerHeight = document.querySelector('.chat-input-container').offsetHeight;
            
            const availableHeight = window.innerHeight - headerHeight - chatHeaderHeight - inputContainerHeight;
            
            chatMessages.style.maxHeight = availableHeight + 'px';
        }

        // Send message function
        function sendMessage() {
            const message = messageInput.value.trim();
            if (message === '') return;

            // Add user message
            addMessageToChat(message, 'user');

            // Clear input
            messageInput.value = '';
            messageInput.focus();

            // Show thinking indicator
            showThinkingIndicator();

            // Simulate AI response after a delay
            setTimeout(() => {
                // Remove thinking indicator
                removeThinkingIndicator();
                
                // Generate AI response
                const randomResponse = grammarResponses[Math.floor(Math.random() * grammarResponses.length)];
                const fullResponse = `${randomResponse}\n\nهذا مجرد نموذج للاستجابة. في التطبيق الحقيقي، سأقوم بتحليل سؤالك وإعطائك إجابة دقيقة ومفصلة بناءً على تخصصي في النحو والبلاغة العربية.`;
                
                addMessageToChat(fullResponse, 'ai');
            }, 2000 + Math.random() * 2000);
        }

        // Add message to chat
        function addMessageToChat(text, sender, time = null, scroll = true) {
            if (!time) {
                time = new Date().toLocaleTimeString('ar-EG', {hour: '2-digit', minute:'2-digit'});
            }
            
            const messageDiv = document.createElement('div');
            messageDiv.classList.add('message', `message-${sender}`, `${sender}-message`);
            
            const contentDiv = document.createElement('div');
            contentDiv.classList.add('message-content');
            contentDiv.textContent = text;
            
            const timeDiv = document.createElement('div');
            timeDiv.classList.add('message-time');
            timeDiv.innerHTML = `<i class="far fa-clock"></i> ${time}`;
            
            messageDiv.appendChild(contentDiv);
            messageDiv.appendChild(timeDiv);
            
            chatMessages.appendChild(messageDiv);
            
            if (scroll) {
                scrollToBottom();
            }
            
            return messageDiv;
        }

        // Add image message to chat
        function addImageMessage(imageUrl, caption, sender, time = null, scroll = true) {
            if (!time) {
                time = new Date().toLocaleTimeString('ar-EG', {hour: '2-digit', minute:'2-digit'});
            }
            
            const messageDiv = document.createElement('div');
            messageDiv.classList.add('message', `message-${sender}`, `${sender}-message`);
            
            const imageDiv = document.createElement('div');
            imageDiv.classList.add('message-image');
            
            const img = document.createElement('img');
            img.src = imageUrl;
            img.alt = caption || "صورة مرفوعة";
            
            imageDiv.appendChild(img);
            
            const captionDiv = document.createElement('div');
            captionDiv.classList.add('image-caption');
            captionDiv.textContent = caption || "صورة مرفوعة";
            
            const timeDiv = document.createElement('div');
            timeDiv.classList.add('message-time');
            timeDiv.innerHTML = `<i class="far fa-clock"></i> ${time}`;
            
            messageDiv.appendChild(imageDiv);
            messageDiv.appendChild(captionDiv);
            messageDiv.appendChild(timeDiv);
            
            chatMessages.appendChild(messageDiv);
            
            if (scroll) {
                scrollToBottom();
            }
            
            return messageDiv;
        }

        // Show thinking indicator
        function showThinkingIndicator() {
            const thinkingDiv = document.createElement('div');
            thinkingDiv.classList.add('thinking-indicator');
            thinkingDiv.id = 'thinking-indicator';
            
            thinkingDiv.innerHTML = `
                <div class="thinking-text">جاري التفكير</div>
                <div class="thinking-dots">
                    <div class="thinking-dot"></div>
                    <div class="thinking-dot"></div>
                    <div class="thinking-dot"></div>
                </div>
            `;
            
            chatMessages.appendChild(thinkingDiv);
            scrollToBottom();
        }

        // Remove thinking indicator
        function removeThinkingIndicator() {
            const thinkingIndicator = document.getElementById('thinking-indicator');
            if (thinkingIndicator) {
                thinkingIndicator.remove();
            }
        }

        // Scroll to bottom of chat
        function scrollToBottom() {
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        // Clear chat function
        function clearChat() {
            if (confirm("هل أنت متأكد من أنك تريد مسح المحادثة؟")) {
                chatMessages.innerHTML = '';
                
                // Add welcome message again
                addMessageToChat(
                    "مرحباً بك في شات الذكاء الاصطناعي للنحو والبلاغة! 📚\n" +
                    "أنا مساعدك المتخصص في قواعد اللغة العربية والبلاغة.", 
                    'ai'
                );
            }
        }

        // Handle image upload
        function handleImageUpload(file) {
            if (file) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    // Show image preview
                    currentSelectedImage = {
                        url: e.target.result,
                        file: file
                    };
                    
                    previewImage.src = e.target.result;
                    previewCaptionInput.value = "";
                    imagePreviewContainer.classList.add('active');
                };
                
                reader.readAsDataURL(file);
            }
        }

        // Send image with caption
        function sendImageWithCaption() {
            if (!currentSelectedImage) return;
            
            const caption = previewCaptionInput.value.trim();
            
            // Add image to chat
            addImageMessage(currentSelectedImage.url, caption, 'user');
            
            // Hide preview
            imagePreviewContainer.classList.remove('active');
            currentSelectedImage = null;
            
            // Show thinking indicator
            showThinkingIndicator();
            
            // Simulate AI response after a delay
            setTimeout(() => {
                // Remove thinking indicator
                removeThinkingIndicator();
                
                // Generate AI response for image
                const responseText = caption ? 
                    `بناءً على الصورة والوصف "${caption}" الذي رفعته، يمكنني تحليل المحتوى اللغوي كالتالي:\n\nهذا مجرد نموذج للاستجابة. في التطبيق الحقيقي، سأقوم بتحليل الصورة باستخدام تقنيات الرؤية الحاسوبية وتقديم تحليل مفصل للمحتوى اللغوي الموجود فيها.` :
                    "بناءً على الصورة التي رفعتها، يمكنني تحليل المحتوى اللغوي كالتالي:\n\nهذا مجرد نموذج للاستجابة. في التطبيق الحقيقي، سأقوم بتحليل الصورة باستخدام تقنيات الرؤية الحاسوبية وتقديم تحليل مفصل للمحتوى اللغوي الموجود فيها.";
                
                addMessageToChat(responseText, 'ai');
            }, 3000);
        }

        // Event Listeners
        sendBtn.addEventListener('click', sendMessage);
        
        messageInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });
        
        backBtn.addEventListener('click', goBack);

// دالة الرجوع المحسنة
function goBack() {
    // التحقق من وجود صفحات في السجل التاريخي
    if (window.history && window.history.length > 1) {
        // الرجوع خطوة واحدة للوراء
        window.history.back();
    } else {
        // إذا لم تكن هناك صفحات سابقة، الرجوع للصفحة الرئيسية
        window.location.href = '../../index.php';
    }
    
    // إضافة تأثير بصري
    backBtn.style.transform = 'scale(0.9)';
    setTimeout(() => {
        backBtn.style.transform = 'scale(1)';
    }, 150);
}
     

        // New chat button
        newChatBtn.addEventListener('click', clearChat);
        
        // Image upload button in input area
        imageUploadBtn.addEventListener('click', () => {
            const fileInput = document.createElement('input');
            fileInput.type = 'file';
            fileInput.accept = 'image/*';
            fileInput.addEventListener('change', (e) => {
                const file = e.target.files[0];
                handleImageUpload(file);
            });
            fileInput.click();
        });
        
        // Preview send button
        previewSend.addEventListener('click', sendImageWithCaption);
        
        // Preview cancel button
        previewCancel.addEventListener('click', () => {
            imagePreviewContainer.classList.remove('active');
            currentSelectedImage = null;
        });
        
        // Clear chat button
        clearChatBtn.addEventListener('click', clearChat);
        
        // Info button
        infoBtn.addEventListener('click', () => {
            infoModal.style.display = 'block';
        });
        
        // Close info modal
        closeInfoModal.addEventListener('click', () => {
            infoModal.style.display = 'none';
        });
        
        closeInfoBtn.addEventListener('click', () => {
            infoModal.style.display = 'none';
        });
        
        // Close modal when clicking outside
        window.addEventListener('click', (e) => {
            if (e.target === infoModal) {
                infoModal.style.display = 'none';
            }
        });
        
        // Initialize the app
        initApp();
    </script>
</body>
</html>