<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius AI - مساعد الرياضيات المتخصص</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

          --primary-blue: #3498db;
          --secondary-blue: #2980b9;
          --accent-green: #2ecc71;
          --dark-green: #27ae60;
          --medium-gray: #bdc3c7;
          --dark-gray: #555;
          --error-red: #e74c3c;
          --purple-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
          --blue-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
          --green-gradient: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
          --math-gradient: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
          --glass-effect: rgba(255, 255, 255, 0.1);
          --glass-border: rgba(255, 255, 255, 0.2);
          --glass-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
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
          min-height: 100vh;
          color: var(--light-gray);
          overflow: hidden;
          font-family: 'Tajawal', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* القائمة الجانبية */
        .sidebar {
            width: 320px;
            background: var(--eerie-black2);
            border: 1px solid var(--jet);
            border-radius: 20px;
            box-shadow: var(--shadow1);
            height: 100vh;
            overflow-y: auto;
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 100;
            position: fixed;
            top: 0;
            right: -320px;
            padding: 15px;
        }

        .sidebar.open {
            transform: translateX(-320px);
        }

        .sidebar-header {
            padding: 18px;
            background: rgba(0, 0, 0, 0.25);
            border-bottom: 1px solid var(--glass-border);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .sidebar-title {
            font-size: var(--fs2);
            font-weight: var(--fw600);
            background: var(--text-gradient-yellow);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .close-sidebar {
            background: none;
            border: none;
            color: var(--medium-gray);
            font-size: 1.3rem;
            cursor: pointer;
            transition: transform 0.3s, color 0.3s;
        }

        .close-sidebar:hover {
            color: var(--white1);
            transform: rotate(90deg);
        }

        .history-item {
            padding: 14px 18px;
            border-bottom: 1px solid var(--jet);
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .history-item::before {
            content: '';
            position: absolute;
            top: 0;
            right: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
            transition: 0.5s;
        }

        .history-item:hover {
            background: rgba(255, 255, 255, 0.05);
        }

        .history-item:hover::before {
            right: 100%;
        }

        .history-item-question {
            font-weight: var(--fw500);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: var(--fs5);
        }

        .history-item-date {
            font-size: var(--fs7);
            color: var(--medium-gray);
            margin-top: 6px;
        }

        .main-content {
            display: flex;
            flex-direction: column;
            height: 100vh;
            width: 100%;
        }

        /* تصميم الشات الرئيسي */
        .chat-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            background: var(--eerie-black2);
            border: 1px solid var(--jet);
            border-radius: 20px;
            box-shadow: var(--shadow1);
            height: 100%;
            margin: 15px;
            overflow: hidden;
        }

        .chat-header {
            background: var(--math-gradient);
            color: var(--white1);
            padding: 18px 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: var(--shadow1);
            position: sticky;
            top: 0;
            z-index: 5;
            border-radius: 20px 20px 0 0;
        }

        .chat-header h2 {
            font-size: var(--fs2);
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: var(--fw600);
        }

        .menu-btn {
            background: none;
            border: none;
            color: var(--white1);
            font-size: 1.3rem;
            cursor: pointer;
            transition: transform 0.3s;
            padding: 5px;
        }

        .menu-btn:hover {
            transform: scale(1.1);
        }

        /* منطقة الرسائل */
        .chat-messages {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 18px;
            scrollbar-width: thin;
            scrollbar-color: var(--primary-blue) var(--secondary-dark);
            scroll-behavior: smooth;
        }

        .chat-messages::-webkit-scrollbar {
            width: 5px;
        }

        .chat-messages::-webkit-scrollbar-track {
            background: var(--onyx);
            border-radius: 5px;
        }

        .chat-messages::-webkit-scrollbar-thumb {
            background: var(--orange-yellow-crayola);
            border-radius: 5px;
        }

        /* رسائل المستخدم والذكاء الاصطناعي */
        .message {
            max-width: 85%;
            padding: 14px 18px;
            border-radius: 18px;
            position: relative;
            line-height: 1.6;
            word-break: break-word;
            animation: fadeInUp 0.4s ease-out;
            box-shadow: var(--shadow1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .message:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow2);
        }

        .user-message {
            align-self: flex-end;
            background: var(--blue-gradient);
            color: var(--white1);
            margin-left: 15%;
            border-top-right-radius: 4px;
            animation-delay: 0.1s;
        }

        .ai-message {
            align-self: flex-start;
            background: var(--bg-gradient-jet);
            border: 1px solid var(--jet);
            margin-right: 15%;
            border-top-left-radius: 4px;
        }

        /* تأثيرات الكتابة */
        .typing-animation {
            display: inline-flex;
            gap: 6px;
            align-items: center;
            padding: 6px 0;
        }

        .typing-animation span {
            display: inline-block;
            width: 10px;
            height: 10px;
            background-color: var(--primary-blue);
            border-radius: 50%;
            animation: bounce 1.4s infinite ease-in-out;
        }

        .typing-animation span:nth-child(2) {
            animation-delay: 0.2s;
        }

        .typing-animation span:nth-child(3) {
            animation-delay: 0.4s;
        }

        @keyframes bounce {
            0%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
        }

        /* منطقة الإدخال */
        .chat-input {
            display: flex;
            padding: 18px;
            background: var(--eerie-black1);
            border-top: 1px solid var(--jet);
            gap: 12px;
            position: sticky;
            bottom: 0;
            flex-direction: column;
            border-radius: 0 0 20px 20px;
        }

        .input-group {
            flex: 1;
            display: flex;
            gap: 12px;
            width: 100%;
        }

        .chat-input textarea {
            flex: 1;
            padding: 14px 18px;
            background: var(--bg-gradient-jet);
            border: 1px solid var(--jet);
            border-radius: 18px;
            resize: none;
            color: var(--light-gray);
            font-size: var(--fs5);
            transition: all 0.3s;
            min-height: 50px;
            max-height: 150px;
        }

        .chat-input textarea:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.3);
        }

        .file-input {
            display: none;
        }

        .file-label {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 54px;
            height: 54px;
            background: var(--border-gradient-onyx);
            border-radius: 18px;
            cursor: pointer;
            transition: all 0.3s;
            position: relative;
            z-index: 1;
        }

        .file-label::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .file-label:hover {
            background: var(--bg-gradient-yellow1);
            transform: translateY(-2px);
        }

        /* أزرار */
        .send-btn {
            position: relative;
            background: var(--border-gradient-onyx);
            color: var(--orange-yellow-crayola);
            border: none;
            border-radius: 18px;
            padding: 0 22px;
            cursor: pointer;
            font-size: var(--fs5);
            font-weight: var(--fw600);
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            height: 54px;
            box-shadow: var(--shadow1);
            z-index: 1;
        }

        .send-btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
            transition: var(--transition1);
        }

        .send-btn:hover {
            background: var(--bg-gradient-yellow1);
            transform: translateY(-3px);
            box-shadow: var(--shadow2);
        }
        
        .send-btn:hover::before {
            background: var(--bg-gradient-yellow2);
        }

        .deep-think-btn {
            position: relative;
            background: var(--border-gradient-onyx);
            color: var(--orange-yellow-crayola);
            border: none;
            border-radius: 18px;
            padding: 0 18px;
            cursor: pointer;
            font-size: var(--fs5);
            font-weight: var(--fw600);
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            height: 54px;
            box-shadow: var(--shadow1);
            z-index: 1;
        }

        .deep-think-btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
            transition: var(--transition1);
        }

        .deep-think-btn:hover {
            background: var(--bg-gradient-yellow1);
            transform: translateY(-3px);
            box-shadow: var(--shadow2);
        }
        
        .deep-think-btn:hover::before {
            background: var(--bg-gradient-yellow2);
        }

        .voice-btn {
            position: relative;
            background: var(--border-gradient-onyx);
            color: var(--orange-yellow-crayola);
            border: none;
            border-radius: 18px;
            padding: 0 18px;
            cursor: pointer;
            font-size: var(--fs5);
            font-weight: var(--fw600);
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            height: 54px;
            box-shadow: var(--shadow1);
            z-index: 1;
        }

        .voice-btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
            transition: var(--transition1);
        }

        .voice-btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow2);
        }

        .keyboard-btn {
            position: relative;
            background: var(--border-gradient-onyx);
            color: var(--orange-yellow-crayola);
            border: none;
            border-radius: 18px;
            padding: 0 18px;
            cursor: pointer;
            font-size: var(--fs5);
            font-weight: var(--fw600);
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            height: 54px;
            box-shadow: var(--shadow1);
            z-index: 1;
        }

        .keyboard-btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
            transition: var(--transition1);
        }
        
        .keyboard-btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow2);
        }

        .symbol-keyboard {
            position: fixed;
            bottom: 100px;
            right: 20px;
            width: calc(100% - 40px);
            max-width: 600px;
            background: var(--eerie-black2);
            border: 1px solid var(--jet);
            border-radius: 18px;
            padding: 15px;
            box-shadow: var(--shadow5);
            z-index: 200;
            transform: translateY(150%);
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .symbol-keyboard.open {
            transform: translateY(0);
        }

        .keyboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--jet);
        }

        .keyboard-title {
            font-size: var(--fs3);
            font-weight: var(--fw600);
            color: var(--white2);
        }

        .close-keyboard {
            background: none;
            border: none;
            color: var(--medium-gray);
            font-size: 1.3rem;
            cursor: pointer;
        }

        .keyboard-tabs {
            display: flex;
            gap: 5px;
            margin-bottom: 15px;
            overflow-x: auto;
            padding-bottom: 5px;
        }

        .keyboard-tab {
            padding: 8px 15px;
            background: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 12px;
            color: var(--light-gray);
            cursor: pointer;
            transition: all 0.3s;
            font-size: var(--fs6);
            white-space: nowrap;
        }

        .keyboard-tab.active {
            background: var(--math-gradient);
            color: var(--white1);
        }

        .keyboard-tab:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .keyboard-section {
            display: none;
            grid-template-columns: repeat(auto-fill, minmax(50px, 1fr));
            gap: 10px;
        }

        .keyboard-section.active {
            display: grid;
        }

        .symbol-btn {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid var(--jet);
            border-radius: 12px;
            padding: 12px 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
            font-size: 18px;
            color: var(--light-gray);
        }

        .symbol-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .symbol-btn.subscript {
            font-size: 14px;
            vertical-align: sub;
        }

        .symbol-btn.superscript {
            font-size: 14px;
            vertical-align: super;
        }

        .symbol-btn.active {
            background: var(--primary-blue);
            color: var(--white1);
            transform: scale(0.95);
        }

        .image-preview {
            max-width: 100%;
            max-height: 200px;
            border-radius: 12px;
            margin-top: 12px;
            border: 1px solid var(--jet);
            box-shadow: var(--shadow1);
            transition: transform 0.3s;
        }

        .image-preview:hover {
            transform: scale(1.02);
        }

        .voice-message-indicator {
            display: flex;
            align-items: center;
            gap: 6px;
            color: var(--accent-green);
            font-size: var(--fs7);
            margin-top: 8px;
            animation: pulse 2s infinite;
        }

        /* طبقة التعتيم */
        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 50;
            transition: opacity 0.4s;
        }

        .action-buttons {
            display: flex;
            gap: 12px;
            width: 100%;
            margin-top: 12px;
        }

        .action-buttons button {
            flex: 1;
        }

        .keyboard-preview {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 10px;
            margin-top: 10px;
            text-align: center;
            font-size: 20px;
            min-height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px dashed var(--jet);
        }

        /* تأثيرات للهواتف */
        @media (max-width: 768px) {
            .sidebar {
                width: 85%;
                right: -85%;
            }
            
            .sidebar.open {
                transform: translateX(-85%);
            }
            
            .message {
                max-width: 90%;
            }
            
            .user-message {
                margin-left: 10%;
            }
            
            .ai-message {
                margin-right: 10%;
            }
            
            .chat-input {
                flex-wrap: wrap;
            }
            
            .voice-btn, .deep-think-btn, .keyboard-btn {
                flex: 1;
                min-width: 60px;
            }
            
            .symbol-keyboard {
                width: calc(100% - 20px);
                right: 10px;
                bottom: 90px;
            }
            
            .keyboard-section {
                grid-template-columns: repeat(auto-fill, minmax(40px, 1fr));
                gap: 8px;
            }
            
            .symbol-btn {
                padding: 8px 3px;
                font-size: 16px;
            }
        }
        
        @media (max-width: 576px) {
            .chat-header {
                padding: 15px;
            }
            
            .chat-header h2 {
                font-size: var(--fs3);
            }
            
            .chat-messages {
                padding: 15px;
            }
            
            .message {
                padding: 12px 15px;
                font-size: var(--fs6);
                max-width: 95%;
            }
            
            .chat-input {
                padding: 15px;
            }
            
            .chat-input textarea {
                padding: 12px 15px;
                font-size: var(--fs6);
            }
            
            .file-label, .send-btn, .deep-think-btn, .voice-btn, .keyboard-btn {
                height: 50px;
                border-radius: 15px;
            }
            
            .keyboard-tabs {
                overflow-x: auto;
                padding-bottom: 5px;
            }
            
            .keyboard-tab {
                font-size: var(--fs7);
                padding: 6px 12px;
            }
            
            .symbol-btn {
                padding: 8px 3px;
                font-size: 16px;
            }
            
            .symbol-keyboard {
                bottom: 80px;
            }
        }
                                .back-btn {
            position: absolute;
            left: 20px;
            top: 20px;
            display: flex;
            align-items: center;
            padding: 10px 15px;
            background: var(--eerie-black1);
            border: 1px solid var(--jet);
            border-radius: var(--border-radius);
            color: var(--light-gray);
            cursor: pointer;
            transition: all 0.3s;
            font-size: var(--fs6);
            z-index: 10;
        }
        
        .back-btn:hover {
            background: var(--onyx);
            color: var(--orange-yellow-crayola);
            border-color: var(--orange-yellow-crayola);
        }
        
        .back-btn i {
            margin-right: 5px;
        }

        @media (max-width: 768px) {
            .back-btn {
                left: 10px;
                top: 15px;
                padding: 8px 12px;
                font-size: var(--fs7);
            }
        }

        @media (max-width: 576px) {
            .back-btn {
                left: 5px;
                top: 10px;
                padding: 6px 10px;
                font-size: var(--fs8);
            }
        }

    </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-title">سجل المحادثات</div>
            <button class="close-sidebar" id="close-sidebar">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div id="history-list">
            <!-- سجل المحادثات سيظهر هنا -->
        </div>
    </div>
    
    <div id="overlay"></div>
    
    <div class="symbol-keyboard" id="symbol-keyboard">
        <div class="keyboard-header">
            <div class="keyboard-title">لوحة الرموز الرياضية</div>
            <button class="close-keyboard" id="close-keyboard">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="keyboard-tabs">
            <button class="keyboard-tab active" data-tab="algebra">الجبر</button>
            <button class="keyboard-tab" data-tab="geometry">الهندسة</button>
            <button class="keyboard-tab" data-tab="formats">التنسيق</button>
            <button class="keyboard-tab" data-tab="tools">أدوات</button>
        </div>
        <div class="keyboard-section active" id="algebra-section">
            <!-- رموز الجبر -->
            <button class="symbol-btn">x</button>
            <button class="symbol-btn">y</button>
            <button class="symbol-btn">z</button>
            <button class="symbol-btn">a</button>
            <button class="symbol-btn">b</button>
            <button class="symbol-btn">c</button>
            <button class="symbol-btn">+</button>
            <button class="symbol-btn">-</button>
            <button class="symbol-btn">×</button>
            <button class="symbol-btn">÷</button>
            <button class="symbol-btn">=</button>
            <button class="symbol-btn">≠</button>
            <button class="symbol-btn">≈</button>
            <button class="symbol-btn">≡</button>
            <button class="symbol-btn">≤</button>
            <button class="symbol-btn">≥</button>
            <button class="symbol-btn">( )</button>
            <button class="symbol-btn">[ ]</button>
            <button class="symbol-btn">{ }</button>
            <button class="symbol-btn">√</button>
            <button class="symbol-btn">∛</button>
            <button class="symbol-btn">∜</button>
            <button class="symbol-btn">^</button>
            <button class="symbol-btn">²</button>
            <button class="symbol-btn">³</button>
            <button class="symbol-btn">ⁿ</button>
            <button class="symbol-btn">∑</button>
            <button class="symbol-btn">∏</button>
        </div>
        <div class="keyboard-section" id="geometry-section">
            <!-- رموز الهندسة -->
            <button class="symbol-btn">π</button>
            <button class="symbol-btn">θ</button>
            <button class="symbol-btn">φ</button>
            <button class="symbol-btn">∠</button>
            <button class="symbol-btn">∡</button>
            <button class="symbol-btn">∢</button>
            <button class="symbol-btn">△</button>
            <button class="symbol-btn">▽</button>
            <button class="symbol-btn">□</button>
            <button class="symbol-btn">◇</button>
            <button class="symbol-btn">○</button>
            <button class="symbol-btn">⊥</button>
            <button class="symbol-btn">∥</button>
            <button class="symbol-btn">∦</button>
            <button class="symbol-btn">≅</button>
            <button class="symbol-btn">∼</button>
            <button class="symbol-btn">∽</button>
            <button class="symbol-btn">≃</button>
            <button class="symbol-btn">≅</button>
            <button class="symbol-btn">≈</button>
            <button class="symbol-btn">≡</button>
            <button class="symbol-btn">∝</button>
            <button class="symbol-btn">∞</button>
            <button class="symbol-btn">∂</button>
            <button class="symbol-btn">∇</button>
            <button class="symbol-btn">∫</button>
            <button class="symbol-btn">∮</button>
        </div>
        <div class="keyboard-section" id="formats-section">
            <!-- تنسيق المعادلات -->
            <button class="symbol-btn subscript">سفلية</button>
            <button class="symbol-btn superscript">علوية</button>
            <button class="symbol-btn">( )</button>
            <button class="symbol-btn">[ ]</button>
            <button class="symbol-btn">{ }</button>
            <button class="symbol-btn">⟨ ⟩</button>
            <button class="symbol-btn">| |</button>
            <button class="symbol-btn">‖ ‖</button>
            <button class="symbol-btn">/</button>
            <button class="symbol-btn">\</button>
            <button class="symbol-btn">_</button>
            <button class="symbol-btn">^</button>
            <button class="symbol-btn">*</button>
            <button class="symbol-btn">·</button>
            <button class="symbol-btn">•</button>
            <button class="symbol-btn">∘</button>
            <button class="symbol-btn">⊗</button>
            <button class="symbol-btn">⊕</button>
            <button class="symbol-btn">⊙</button>
            <button class="symbol-btn">⊖</button>
            <button class="symbol-btn">⊘</button>
            <button class="symbol-btn">⊚</button>
            <button class="symbol-btn">⊛</button>
            <button class="symbol-btn">⊜</button>
            <button class="symbol-btn">⊝</button>
            <button class="symbol-btn">⊞</button>
        </div>
        <div class="keyboard-section" id="tools-section">
            <!-- أدوات مساعدة -->
            <button class="symbol-btn">sin</button>
            <button class="symbol-btn">cos</button>
            <button class="symbol-btn">tan</button>
            <button class="symbol-btn">log</button>
            <button class="symbol-btn">ln</button>
            <button class="symbol-btn">exp</button>
            <button class="symbol-btn">lim</button>
            <button class="symbol-btn">∆</button>
            <button class="symbol-btn">∇</button>
            <button class="symbol-btn">±</button>
            <button class="symbol-btn">∓</button>
            <button class="symbol-btn">×</button>
            <button class="symbol-btn">÷</button>
            <button class="symbol-btn">≤</button>
            <button class="symbol-btn">≥</button>
            <button class="symbol-btn">≠</button>
            <button class="symbol-btn">≈</button>
            <button class="symbol-btn">≡</button>
            <button class="symbol-btn">∞</button>
            <button class="symbol-btn">∂</button>
            <button class="symbol-btn">∫</button>
            <button class="symbol-btn">∑</button>
            <button class="symbol-btn">∏</button>
            <button class="symbol-btn">√</button>
            <button class="symbol-btn">∝</button>
            <button class="symbol-btn">∴</button>
        </div>
        <div class="keyboard-preview" id="keyboard-preview">
            <!-- المعاينة ستظهر هنا -->
        </div>
    </div>
    
    <div class="main-content">
        <div class="chat-container">
            <div class="chat-header">
                <button class="menu-btn" id="menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
                <h2>
                    <i class="fas fa-square-root-alt"></i>
                    Genius AI - مساعد الرياضيات المتخصص
                </h2>
                                <button class="back-btn" id="backButton"><i> رجوع</i></button>

                <div style="width: 40px;"></div> <!-- عنصر فارغ للمحاذاة -->
            </div>
            
            <div class="chat-messages" id="chat-messages">
                <!-- الرسائل ستظهر هنا -->
            </div>
            
            <div class="chat-input">
                <div class="input-group">
                    <textarea id="message-input" placeholder="اكتب سؤالك هنا عن الرياضيات..."></textarea>
                    <button id="send-btn" class="send-btn" title="إرسال">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
                
                <div class="action-buttons">
                    <label for="file-input" class="file-label" title="رفع صورة">
                        <i class="fas fa-image"></i>
                    </label>
                    <input type="file" id="file-input" class="file-input" accept="image/*">
                    <button id="keyboard-btn" class="keyboard-btn" title="لوحة الرموز">
                        <i class="fas fa-keyboard"></i>
                    </button>
                    <button id="voice-btn" class="voice-btn" title="إرسال صوتي">
                        <i class="fas fa-microphone"></i>
                    </button>
                    <button id="deep-think-btn" class="deep-think-btn" title="تفكير عميق">
                        <i class="fas fa-brain"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // DOM Elements
        const chatMessages = document.getElementById('chat-messages');
        const messageInput = document.getElementById('message-input');
        const sendBtn = document.getElementById('send-btn');
        const fileInput = document.getElementById('file-input');
        const deepThinkBtn = document.getElementById('deep-think-btn');
        const voiceBtn = document.getElementById('voice-btn');
        const menuBtn = document.getElementById('menu-btn');
        const sidebar = document.getElementById('sidebar');
        const closeSidebar = document.getElementById('close-sidebar');
        const historyList = document.getElementById('history-list');
        const overlay = document.getElementById('overlay');
        const keyboardBtn = document.getElementById('keyboard-btn');
        const symbolKeyboard = document.getElementById('symbol-keyboard');
        const closeKeyboard = document.getElementById('close-keyboard');
        const keyboardTabs = document.querySelectorAll('.keyboard-tab');
        const keyboardSections = document.querySelectorAll('.keyboard-section');
        const symbolBtns = document.querySelectorAll('.symbol-btn');
        const keyboardPreview = document.getElementById('keyboard-preview');
        
        // Variables
        let recognition;
        let chatHistory = [];
        let isSubscript = false;
        let isSuperscript = false;
        let lastPressedSymbol = '';
        
        // Initialize the app
        function init() {
            loadChatHistory();
            setupEventListeners();
            
            // Initial greeting message with animation
            setTimeout(() => {
                const greeting = "مرحباً! أنا مساعدك الذكي المتخصص في الرياضيات فقط من شركة Genius AI. يمكنك طرح أي سؤال في الرياضيات وسأساعدك في حله بدقة علمية. لدي معرفة متخصصة في: \n- الجبر والمعادلات \n- الهندسة والقياس \n- التفاضل والتكامل \n- الإحصاء والاحتمالات \n- الرياضيات المتقطعة";
                addMessage(greeting, false, true);
            }, 800);
        }
        
        // Load chat history from localStorage
        function loadChatHistory() {
            const savedHistory = localStorage.getItem('mathGeniusHistory');
            if (savedHistory) {
                chatHistory = JSON.parse(savedHistory);
                renderHistoryList();
            }
        }
        
        // Save chat history to localStorage
        function saveChatHistory() {
            localStorage.setItem('mathGeniusHistory', JSON.stringify(chatHistory));
        }
        
        // Render history list in sidebar
        function renderHistoryList() {
            historyList.innerHTML = '';
            
            if (chatHistory.length === 0) {
                historyList.innerHTML = '<div style="padding: 15px; color: var(--medium-gray); text-align: center;">لا توجد محادثات سابقة</div>';
                return;
            }
            
            chatHistory.forEach((chat, index) => {
                const historyItem = document.createElement('div');
                historyItem.className = 'history-item';
                historyItem.innerHTML = `
                    <div class="history-item-question">${chat.question || 'رسالة صوتية'}</div>
                    <div class="history-item-date">${new Date(chat.timestamp).toLocaleString('ar-EG')}</div>
                `;
                
                historyItem.addEventListener('click', () => {
                    loadChatFromHistory(index);
                });
                
                historyList.appendChild(historyItem);
            });
        }
        
        // Load chat from history
        function loadChatFromHistory(index) {
            chatMessages.innerHTML = '';
            const chat = chatHistory[index];
            
            chat.messages.forEach((msg, i) => {
                setTimeout(() => {
                    addMessage(msg.content, msg.isUser, false);
                }, i * 150);
            });
            
            toggleSidebar();
        }
        
        // Add message to chat with animation
        function addMessage(content, isUser = false, isInitial = false) {
            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${isUser ? 'user-message' : 'ai-message'}`;
            
            if (typeof content === 'string') {
                messageDiv.textContent = content;
            } else {
                messageDiv.appendChild(content);
            }
            
            chatMessages.appendChild(messageDiv);
            scrollToBottom();
            
            // Save to history if it's not initial message
            if (!isInitial && isUser) {
                saveCurrentChat(content);
            }
            
            return messageDiv;
        }
        
        // Scroll to bottom of chat smoothly
        function scrollToBottom() {
            chatMessages.scrollTo({
                top: chatMessages.scrollHeight,
                behavior: 'smooth'
            });
        }
        
        // Save current chat to history
        function saveCurrentChat(question) {
            const messages = Array.from(chatMessages.children)
                .filter(el => el.classList.contains('message'))
                .map(el => ({
                    content: el.textContent.trim(),
                    isUser: el.classList.contains('user-message')
                }));
            
            // Check if this question already exists in history
            const existingIndex = chatHistory.findIndex(chat => chat.question === question);
            
            if (existingIndex >= 0) {
                // Update existing entry
                chatHistory[existingIndex] = {
                    question,
                    messages,
                    timestamp: Date.now()
                };
            } else {
                // Add new entry
                chatHistory.unshift({
                    question,
                    messages,
                    timestamp: Date.now()
                });
                
                // Keep only last 50 chats
                if (chatHistory.length > 50) {
                    chatHistory.pop();
                }
            }
            
            saveChatHistory();
            renderHistoryList();
        }
        
        // Show typing indicator with animation
        function showTypingIndicator() {
            const typingDiv = document.createElement('div');
            typingDiv.className = 'message ai-message';
            
            const typingContent = document.createElement('div');
            typingContent.className = 'typing-animation';
            typingContent.innerHTML = '<span></span><span></span><span></span>';
            
            typingDiv.appendChild(typingContent);
            chatMessages.appendChild(typingDiv);
            scrollToBottom();
            
            return typingDiv;
        }
        
        // Show deep thinking indicator with animation
        function showDeepThinkingIndicator() {
            const thinkingDiv = document.createElement('div');
            thinkingDiv.className = 'message ai-message';
            
            const deepThinking = document.createElement('div');
            deepThinking.className = 'deep-thinking';
            deepThinking.innerHTML = `
                <i class="fas fa-calculator"></i>
                <p>جاري حل المسألة الرياضية بعمق...</p>
                <div class="typing-animation">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            `;
            
            thinkingDiv.appendChild(deepThinking);
            chatMessages.appendChild(thinkingDiv);
            scrollToBottom();
            
            return thinkingDiv;
        }
        
        // Handle math questions locally without API
        function handleMathQuestion(message) {
            // Simple math responses without API
            const mathResponses = {
                "ما هو 2+2": "2 + 2 = 4",
                "ما هو 5 × 5": "5 × 5 = 25",
                "ما هو الجذر التربيعي لـ 16": "الجذر التربيعي لـ 16 هو 4",
                "ما هو محيط الدائرة": "محيط الدائرة = 2 × π × نصف القطر",
                "ما هو قانون فيثاغورس": "في المثلث القائم: مربع الوتر = مربع الضلع الأول + مربع الضلع الثاني",
                "ما هو المشتق": "المشتق هو معدل تغير الدالة بالنسبة لمتغيرها",
                "ما هو التكامل": "التكامل هو العملية العكسية للتفاضل ويستخدم لإيجاد المساحة تحت المنحنى",
                "ما هي المعادلة التربيعية": "المعادلة التربيعية هي: ax² + bx + c = 0",
                "كيف أحسب مساحة المثلث": "مساحة المثلث = (القاعدة × الارتفاع) / 2",
                "ما هو اللوغاريتم": "اللوغاريتم هو الأس الذي يجب أن يرفع إليه عدد معين (الأساس) للحصول على عدد آخر"
            };
            
            // Check if question exists in predefined responses
            for (const [question, answer] of Object.entries(mathResponses)) {
                if (message.includes(question)) {
                    return answer;
                }
            }
            
            // Default response for unknown questions
            return "أنا مساعد رياضيات متخصص. يمكنك طرح أسئلة مثل:\n- ما هو 2+2؟\n- ما هو قانون فيثاغورس؟\n- كيف أحسب مساحة المثلث؟\n- ما هو المشتق؟\n- ما هو التكامل؟";
        }
        
        // Handle send message with animations
        async function handleSend() {
            const message = messageInput.value.trim();
            const file = fileInput.files[0];
            
            if (!message && !file) return;
            
            // Add user message with animation
            if (message) {
                addMessage(message, true);
            }
            
            // Add image preview if file is uploaded
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    const imgPreview = document.createElement('img');
                    imgPreview.src = e.target.result;
                    imgPreview.className = 'image-preview';
                    
                    const userMessage = addMessage("صورة للتحليل الرياضي:", true);
                    userMessage.appendChild(imgPreview);
                };
                reader.readAsDataURL(file);
            }
            
            // Clear input with animation
            messageInput.style.transition = 'all 0.3s ease';
            messageInput.value = '';
            messageInput.style.height = 'auto';
            fileInput.value = '';
            keyboardPreview.textContent = '';
            
            // Show typing indicator
            const typingIndicator = showTypingIndicator();
            
            // Process message
            let response;
            if (file) {
                response = "عذرًا، لا يمكنني تحليل الصور حاليًا. يرجى كتابة السؤال الرياضي بدلاً من ذلك.";
            } else {
                response = handleMathQuestion(message);
            }
            
            // Remove typing indicator and show response with delay
            setTimeout(() => {
                chatMessages.removeChild(typingIndicator);
                addMessage(response);
            }, 1000);
        }
        
        // Handle deep think with extended animations for math analysis
        async function handleDeepThink() {
            const message = messageInput.value.trim();
            const file = fileInput.files[0];
            
            if (!message && !file) return;
            
            // Add user message
            if (message) {
                addMessage(message, true);
            }
            
            // Add image preview if file is uploaded
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    const imgPreview = document.createElement('img');
                    imgPreview.src = e.target.result;
                    imgPreview.className = 'image-preview';
                    
                    const userMessage = addMessage("صورة للتحليل الرياضي المتعمق:", true);
                    userMessage.appendChild(imgPreview);
                };
                reader.readAsDataURL(file);
            }
            
            // Clear input
            messageInput.value = '';
            messageInput.style.height = 'auto';
            fileInput.value = '';
            keyboardPreview.textContent = '';
            
            // Show extended thinking indicator
            const thinkingIndicator = showDeepThinkingIndicator();
            
            // Process message with longer delay for deep math analysis
            setTimeout(() => {
                let response;
                if (file) {
                    response = "عذرًا، لا يمكنني تحليل الصور حاليًا. يرجى كتابة السؤال الرياضي بدلاً من ذلك.";
                } else {
                    response = handleMathQuestion(message) + "\n\n(هذه إجابة محاكاة للتفكير العميق)";
                }
                
                // Remove thinking indicator and show response
                chatMessages.removeChild(thinkingIndicator);
                addMessage(response);
            }, 3000); // 3 seconds delay for deep math thinking
        }
        
        // Handle voice input with visual feedback
        function handleVoiceInput() {
            if ('webkitSpeechRecognition' in window) {
                recognition = new webkitSpeechRecognition();
                recognition.lang = 'ar-SA';
                recognition.interimResults = false;
                
                recognition.onstart = function() {
                    // Visual feedback
                    voiceBtn.innerHTML = '<i class="fas fa-microphone-slash"></i>';
                    voiceBtn.style.background = 'linear-gradient(to right, #e74c3c, #c0392b)';
                    voiceBtn.style.boxShadow = '0 0 15px rgba(231, 76, 60, 0.5)';
                    messageInput.placeholder = "جاري الاستماع...";
                    
                    // Add voice listening animation
                    const listeningIndicator = document.createElement('div');
                    listeningIndicator.className = 'voice-message-indicator';
                    listeningIndicator.innerHTML = '<i class="fas fa-microphone"></i> جاري الاستماع إلى سؤالك الرياضي...';
                    chatMessages.appendChild(listeningIndicator);
                    scrollToBottom();
                };
                
                recognition.onresult = function(event) {
                    const transcript = event.results[0][0].transcript;
                    messageInput.value = transcript;
                    handleSend();
                };
                
                recognition.onerror = function(event) {
                    console.error('حدث خطأ في التعرف على الصوت:', event.error);
                    resetVoiceButton();
                    
                    // Show error message
                    const errorMessage = document.createElement('div');
                    errorMessage.className = 'message ai-message';
                    errorMessage.textContent = 'حدث خطأ في التعرف على سؤالك الرياضي. يرجى المحاولة مرة أخرى.';
                    chatMessages.appendChild(errorMessage);
                    scrollToBottom();
                };
                
                recognition.onend = function() {
                    resetVoiceButton();
                };
                
                recognition.start();
            } else {
                alert('ميزة التعرف على الصوت غير مدعومة في متصفحك');
            }
        }
        
        // Reset voice button to initial state
        function resetVoiceButton() {
            voiceBtn.innerHTML = '<i class="fas fa-microphone"></i>';
            voiceBtn.style.background = 'var(--border-gradient-onyx)';
            voiceBtn.style.boxShadow = 'var(--shadow1)';
            messageInput.placeholder = "اكتب سؤالك هنا عن الرياضيات...";
        }
        
        // Toggle sidebar with smooth animation
        function toggleSidebar() {
            sidebar.classList.toggle('open');
            
            if (sidebar.classList.contains('open')) {
                overlay.style.display = 'block';
                setTimeout(() => {
                    overlay.style.opacity = '1';
                }, 10);
            } else {
                overlay.style.opacity = '0';
                setTimeout(() => {
                    overlay.style.display = 'none';
                }, 300);
            }
        }
        
        // Toggle symbol keyboard
        function toggleKeyboard() {
            symbolKeyboard.classList.toggle('open');
            
            if (symbolKeyboard.classList.contains('open')) {
                overlay.style.display = 'block';
                overlay.style.opacity = '1';
            } else {
                overlay.style.opacity = '0';
                setTimeout(() => {
                    overlay.style.display = 'none';
                }, 300);
            }
        }
        
        // Switch between keyboard tabs
        function switchTab(tabName) {
            keyboardTabs.forEach(tab => {
                if (tab.dataset.tab === tabName) {
                    tab.classList.add('active');
                } else {
                    tab.classList.remove('active');
                }
            });
            
            keyboardSections.forEach(section => {
                if (section.id === `${tabName}-section`) {
                    section.classList.add('active');
                } else {
                    section.classList.remove('active');
                }
            });
        }
        
        // Insert symbol at cursor position with visual feedback
        function insertSymbol(symbol) {
            const startPos = messageInput.selectionStart;
            const endPos = messageInput.selectionEnd;
            const currentValue = messageInput.value;
            
            // Add visual feedback for button press
            const activeBtn = event.target;
            activeBtn.classList.add('active');
            setTimeout(() => {
                activeBtn.classList.remove('active');
            }, 200);
            
            // Update keyboard preview
            lastPressedSymbol = symbol;
            keyboardPreview.textContent = `تم إدخال: ${symbol}`;
            setTimeout(() => {
                keyboardPreview.textContent = '';
            }, 2000);
            
            let newValue;
            if (symbol === 'سفلية') {
                isSubscript = !isSubscript;
                isSuperscript = false;
                return;
            } else if (symbol === 'علوية') {
                isSuperscript = !isSuperscript;
                isSubscript = false;
                return;
            } else if (isSubscript) {
                newValue = currentValue.substring(0, startPos) + '₍' + symbol + '₎' + currentValue.substring(endPos);
                isSubscript = false;
            } else if (isSuperscript) {
                newValue = currentValue.substring(0, startPos) + '⁽' + symbol + '⁾' + currentValue.substring(endPos);
                isSuperscript = false;
            } else {
                newValue = currentValue.substring(0, startPos) + symbol + currentValue.substring(endPos);
            }
            
            messageInput.value = newValue;
            messageInput.focus();
            messageInput.selectionStart = startPos + symbol.length;
            messageInput.selectionEnd = startPos + symbol.length;
        }
        
        // Setup event listeners with animations
        function setupEventListeners() {
            // Send button with animation
            sendBtn.addEventListener('click', function() {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                    handleSend();
                }, 150);
            });
            
            // Deep think button with animation
            deepThinkBtn.addEventListener('click', function() {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                    handleDeepThink();
                }, 150);
            });
            
            // Voice button with animation
            voiceBtn.addEventListener('click', function() {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                    handleVoiceInput();
                }, 150);
            });
            
            // Menu button with animation
            menuBtn.addEventListener('click', function() {
                this.style.transform = 'scale(0.9)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                    toggleSidebar();
                }, 150);
            });
            
            // Keyboard button with animation
            keyboardBtn.addEventListener('click', function() {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                    toggleKeyboard();
                }, 150);
            });
            
            // Close sidebar button with animation
            closeSidebar.addEventListener('click', toggleSidebar);
            
            // Close keyboard button
            closeKeyboard.addEventListener('click', toggleKeyboard);
            
            // Overlay click to close sidebar and keyboard
            overlay.addEventListener('click', function() {
                if (sidebar.classList.contains('open')) {
                    toggleSidebar();
                }
                if (symbolKeyboard.classList.contains('open')) {
                    toggleKeyboard();
                }
            });
            
            // Keyboard tabs switching
            keyboardTabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    switchTab(tab.dataset.tab);
                });
            });
            
            // Symbol buttons with visual feedback
            symbolBtns.forEach(btn => {
                btn.addEventListener('mousedown', (e) => {
                    e.preventDefault(); // Prevent focus loss
                    btn.classList.add('active');
                });
                
                btn.addEventListener('mouseup', () => {
                    btn.classList.remove('active');
                });
                
                btn.addEventListener('mouseleave', () => {
                    btn.classList.remove('active');
                });
                
                btn.addEventListener('click', (e) => {
                    insertSymbol(btn.textContent);
                });
            });
            
            // Enter key to send message
            messageInput.addEventListener('keypress', (e) => {
                if (e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    sendBtn.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        sendBtn.style.transform = 'scale(1)';
                        handleSend();
                    }, 150);
                }
            });
            
            // Auto-resize textarea as user types
            messageInput.addEventListener('input', function() {
                this.style.height = 'auto';
                this.style.height = (this.scrollHeight) + 'px';
            });
            
            // File input hover effect
            const fileLabel = document.querySelector('.file-label');
            fileLabel.addEventListener('mouseenter', () => {
                fileLabel.style.transform = 'translateY(-3px)';
                fileLabel.style.boxShadow = 'var(--shadow2)';
            });
            
            fileLabel.addEventListener('mouseleave', () => {
                fileLabel.style.transform = 'translateY(0)';
                fileLabel.style.boxShadow = 'none';
            });
        }
        
        // Initialize the app with animation
        document.addEventListener('DOMContentLoaded', function() {
            // Add fade-in animation to the whole app
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease-in';
            
            setTimeout(() => {
                document.body.style.opacity = '1';
                loadChatHistory();
                setupEventListeners();
                
                // Initial greeting message with delay
                setTimeout(() => {
                    const greeting = "مرحباً! أنا مساعدك الذكي المتخصص في الرياضيات فقط من شركة Genius AI. يمكنك طرح أي سؤال في الرياضيات وسأساعدك في حله بدقة علمية. لدي معرفة متخصصة في: \n- الجبر والمعادلات \n- الهندسة والقياس \n- التفاضل والتكامل \n- الإحصاء والاحتمالات \n- الرياضيات المتقطعة";
                    addMessage(greeting, false, true);
                }, 800);
            }, 100);
        });
                                document.getElementById('backButton').addEventListener('click', function() {
            window.location.href = 'models.php';
        });

    </script>
</body>
</html>