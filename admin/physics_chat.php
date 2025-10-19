
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius Ai - الفيزياء</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
            --bg-gradient-blue1: linear-gradient(
                to bottom right,
                hsl(43, 100%, 60%) 0%,
                hsla(43, 100%, 60%, 0) 50%
            );
            --bg-gradient-blue2: linear-gradient(
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
            --text-gradient-blue: linear-gradient(
                to right,
                hsl(43, 100%, 60%),
                hsl(43, 100%, 70%)
            );

            --jet: hsl(0, 0%, 22%);
            --onyx: hsl(240, 1%, 17%);
            --eerie-black1: hsl(240, 2%, 13%);
            --eerie-black2: hsl(240, 2%, 12%);
            --smoky-black: hsl(0, 0%, 7%);
            --white1: hsl(0, 0%, 100%);
            --white2: hsl(0, 0%, 98%);
            --blue-electric: hsl(43, 100%, 60%);
            --blue-cobalt: hsl(43, 100%, 70%);
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
            
            --primary-color: var(--gold-crayola);
            --secondary-color: var(--blue-cobalt);
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
            padding: 15px;
            text-align: center;
            box-shadow: var(--shadow1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            z-index: 1;
            border-bottom: 1px solid var(--jet);
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
            background: var(--text-gradient-blue);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: var(--fw600);
        }

        .header-actions {
            display: flex;
            gap: 10px;
        }

        .header-button {
            background: var(--border-gradient-onyx);
            border: none;
            color: var(--blue-electric);
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
            color: var(--blue-cobalt);
        }

        .bot-message .message-icon {
            color: var(--blue-electric);
        }

        .message-content {
            flex: 1;
        }

        .message-image {
            max-width: 100%;
            border-radius: 8px;
            margin-top: 8px;
            box-shadow: var(--shadow1);
        }

        .audio-player {
            margin-top: 8px;
            width: 100%;
            height: 30px;
            border-radius: 15px;
            background: var(--border-gradient-onyx);
            overflow: hidden;
        }

        .typing-cursor {
            display: inline-block;
            width: 8px;
            height: 16px;
            background: var(--text-gradient-blue);
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
            background: var(--text-gradient-blue);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .welcome-text {
            font-size: var(--fs4);
            font-weight: var(--fw500);
        }

        .welcome-subtext {
            font-size: var(--fs6);
            opacity: 0.9;
            font-weight: var(--fw300);
        }

        .physics-suggestions {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 8px;
            margin-top: 15px;
        }

        .physics-suggestion {
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
        }

        .physics-suggestion:hover {
            background: var(--bg-gradient-blue2);
            color: var(--white2);
            transform: translateY(-2px);
        }

        .physics-suggestion i {
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
            background: var(--text-gradient-blue);
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
            z-index: 1;
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
            box-shadow: 0 0 0 2px var(--blue-electric);
        }

        input {
            flex: 1;
            padding: 10px 5px;
            border: none;
            outline: none;
            font-size: var(--fs6);
            background: transparent;
            color: var(--white2);
        }

        input::placeholder {
            color: var(--light-gray70);
        }

        .action-buttons {
            display: flex;
            margin-left: 5px;
            gap: 8px;
        }

        .action-button {
            background: var(--border-gradient-onyx);
            border: none;
            color: var(--blue-electric);
            width: 42px;
            height: 42px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition1);
            font-size: 1.1rem;
            position: relative;
            z-index: 1;
        }

        .action-button::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .action-button:hover {
            transform: scale(1.1);
            background: var(--bg-gradient-blue2);
            color: var(--white2);
        }

        #sendButton {
            background: var(--border-gradient-onyx);
            color: var(--blue-electric);
            border: none;
            border-radius: 50%;
            width: 42px;
            height: 42px;
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
            transform: scale(1.1);
            background: var(--bg-gradient-blue2);
            color: var(--white2);
        }

        .character-count {
            position: absolute;
            bottom: -20px;
            left: 15px;
            font-size: var(--fs8);
            color: var(--light-gray70);
        }

        /* Physics keyboard styles */
        .physics-keyboard {
            display: none;
            position: fixed;
            bottom: 70px;
            right: 0;
            left: 0;
            background: var(--bg-gradient-jet);
            border-top: 1px solid var(--jet);
            padding: 10px;
            z-index: 999;
            box-shadow: var(--shadow5);
        }

        .physics-keyboard.open {
            display: block;
        }

        .keyboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .keyboard-title {
            font-size: var(--fs6);
            font-weight: var(--fw600);
            color: var(--blue-electric);
        }

        .close-keyboard {
            background: none;
            border: none;
            color: var(--blue-electric);
            font-size: 1.2rem;
            cursor: pointer;
        }

        .keyboard-categories {
            display: flex;
            overflow-x: auto;
            margin-bottom: 10px;
            padding-bottom: 5px;
            scrollbar-width: thin;
            scrollbar-color: var(--blue-electric) transparent;
        }

        .keyboard-categories::-webkit-scrollbar {
            height: 6px;
        }

        .keyboard-categories::-webkit-scrollbar-thumb {
            background: var(--text-gradient-blue);
            border-radius: 3px;
        }

        .category-btn {
            background: var(--border-gradient-onyx);
            color: var(--light-gray);
            border: none;
            padding: 8px 15px;
            border-radius: 20px;
            margin: 0 5px;
            cursor: pointer;
            white-space: nowrap;
            transition: var(--transition1);
            font-size: var(--fs7);
        }

        .category-btn.active {
            background: var(--text-gradient-blue);
            color: var(--smoky-black);
            font-weight: var(--fw600);
        }

        .keyboard-symbols {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(45px, 1fr));
            gap: 8px;
            max-height: 150px;
            overflow-y: auto;
            scrollbar-width: thin;
            scrollbar-color: var(--blue-electric) transparent;
            padding: 5px;
        }

        .keyboard-symbols::-webkit-scrollbar {
            width: 6px;
        }

        .keyboard-symbols::-webkit-scrollbar-thumb {
            background: var(--text-gradient-blue);
            border-radius: 3px;
        }

        .symbol-btn {
            background: var(--border-gradient-onyx);
            color: var(--white2);
            border: none;
            border-radius: 8px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition1);
            font-size: var(--fs5);
            position: relative;
            z-index: 1;
        }

        .symbol-btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .symbol-btn:hover {
            transform: translateY(-2px);
            background: var(--bg-gradient-blue2);
            color: var(--white2);
        }

        .symbol-btn.special {
            background: var(--bg-gradient-blue2);
            color: var(--smoky-black);
            font-weight: var(--fw600);
        }

        /* Recording indicator */
        .recording-indicator {
            display: none;
            align-items: center;
            background: var(--bittersweet-shimmer);
            color: white;
            padding: 8px 12px;
            border-radius: 20px;
            font-size: var(--fs7);
            margin-left: 10px;
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.6; }
            100% { opacity: 1; }
        }

        .recording-dot {
            width: 10px;
            height: 10px;
            background: white;
            border-radius: 50%;
            margin-left: 5px;
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

        @media (max-width: 768px) {
            .message {
                max-width: 90%;
                padding: 10px 12px;
                font-size: var(--fs7);
            }
            
            .logo-container h1 {
                font-size: var(--fs4);
            }
            
            .input-wrapper {
                padding: 4px 12px;
            }
            
            input {
                padding: 8px 5px;
                font-size: var(--fs7);
            }
            
            .action-button {
                width: 38px;
                height: 38px;
                font-size: 1rem;
            }
            
            #sendButton {
                width: 38px;
                height: 38px;
            }
            
            .typing-indicator {
                max-width: 30%;
                padding: 10px 12px;
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
            
            .physics-keyboard {
                bottom: 60px;
            }
            
            .symbol-btn {
                height: 40px;
                font-size: var(--fs6);
            }
            
            .header-button {
                width: 35px;
                height: 35px;
                font-size: 1rem;
            }
        }
        
        @media (max-width: 480px) {
            header {
                padding: 12px;
            }
            
            .logo-container h1 {
                font-size: var(--fs5);
            }
            
            .chat-container {
                padding: 10px;
            }
            
            .message {
                max-width: 95%;
            }
            
            .input-container {
                padding: 10px;
                flex-wrap: wrap;
            }
            

            .action-buttons {
                order: 2;
                margin-left: 0;
                margin-top: 15px;
                margin-bottom: 25px;
                width: 100%;
                justify-content: center;
            }            
            .input-wrapper {
                order: 1;
                width: 100%;
            }
            
            #sendButton {
                order: 2;
                margin-top: 10px;
            }
            
            .recording-indicator {
                order: 4;
                width: 100%;
                justify-content: center;
                margin-left: 0;
                margin-top: 10px;
            }
            
            .action-button {
                width: 36px;
                height: 36px;
            }
            
            #sendButton {
                width: 36px;
                height: 36px;
            }
            
            .physics-keyboard {
                bottom: 110px;
            }
            
            .keyboard-symbols {
                grid-template-columns: repeat(auto-fill, minmax(40px, 1fr));
            }
            
            .symbol-btn {
                height: 38px;
                font-size: var(--fs7);
            }
            
            .physics-suggestion {
                padding: 6px 12px;
                font-size: var(--fs8);
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-actions">
            <button class="header-button" id="historyButton">
                <i class="fas fa-history"></i>
            </button>
        </div>
        <div class="logo-container">
            <h1>Genius Ai - الفيزياء</h1>
        </div>
        <div class="header-actions">
            <button class="header-button" id="languageToggle">
                <i class="fas fa-language"></i>
            </button>
        </div>
    </header>
    
    <div class="chat-container" id="chatContainer">
        <!-- سيتم إضافة الرسالة الترحيبية تلقائياً عند تحميل الصفحة -->
    </div>
    
    <!-- Physics Keyboard -->
    <div class="physics-keyboard" id="physicsKeyboard">
        <div class="keyboard-header">
            <div class="keyboard-title">لوحة الرموز الفيزيائية</div>
            <button class="close-keyboard" id="closeKeyboard">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="keyboard-categories" id="keyboardCategories">
            <button class="category-btn active" data-category="basic">أساسي</button>
            <button class="category-btn" data-category="mechanics">ميكانيكا</button>
            <button class="category-btn" data-category="electricity">كهرباء</button>
            <button class="category-btn" data-category="thermodynamics">ديناميكا حرارية</button>
            <button class="category-btn" data-category="waves">موجات</button>
            <button class="category-btn" data-category="units">وحدات قياس</button>
            <button class="category-btn" data-category="greek">أحرف يونانية</button>
        </div>
        <div class="keyboard-symbols" id="keyboardSymbols">
            <!-- Symbols will be populated by JavaScript -->
        </div>
    </div>
    
    <div class="input-container">
        <div class="input-wrapper">
            <input type="text" id="userInput" placeholder="اطرح سؤالك الفيزيائي هنا..." maxlength="500" />
            <div class="character-count"><span id="charCount">0</span>/500</div>
                    <button id="sendButton" title="إرسال">
            <i class="fas fa-paper-plane"></i>
        </button>

        </div>
        <div class="action-buttons">
            <button class="action-button" id="physicsButton" title="لوحة الفيزياء">
                <i class="fas fa-atom"></i>
            </button>
            <button class="action-button" id="recordButton" title="تسجيل صوتي">
                <i class="fas fa-microphone"></i>
            </button>
        </div>
        <div class="recording-indicator" id="recordingIndicator">
            <i class="fas fa-circle"></i>
            <span>جاري التسجيل</span>
        </div>
    </div>
    
    <footer>
        تم التطوير بواسطة Genius Ai 2023 - متخصص في الفيزياء
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chatContainer = document.getElementById('chatContainer');
            const userInput = document.getElementById('userInput');
            const sendButton = document.getElementById('sendButton');
            const physicsButton = document.getElementById('physicsButton');
            const recordButton = document.getElementById('recordButton');
            const recordingIndicator = document.getElementById('recordingIndicator');
            const languageToggle = document.getElementById('languageToggle');
            const charCount = document.getElementById('charCount');
            const historyButton = document.getElementById('historyButton');
            const physicsKeyboard = document.getElementById('physicsKeyboard');
            const closeKeyboard = document.getElementById('closeKeyboard');
            const keyboardCategories = document.getElementById('keyboardCategories');
            const keyboardSymbols = document.getElementById('keyboardSymbols');
            
            let isEnglish = false;
            let isTypingEffectActive = false;
            let isRecording = false;
            let mediaRecorder;
            let audioChunks = [];
            let chatHistory = JSON.parse(localStorage.getItem('geniusAiChatHistory')) || [];
            const API_KEY = "AIzaSyCutSzU31szCinRW_YDI9JgXnkB6idA0tU";
            
            // تعريف الرموز الفيزيائية لكل فئة
            const physicsSymbols = {
                basic: [
                    '0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
                    '.', ',', '(', ')', '[', ']', '{', '}', '+', '-'
                ],
                mechanics: [
                    'F', 'm', 'a', 'v', 's', 't', 'p', 'J', 'W', 'P',
                    'α', 'ω', 'θ', 'τ', 'μ', 'ρ', 'g', 'π', '≈', '≠'
                ],
                electricity: [
                    'Q', 'I', 'V', 'R', 'C', 'L', 'E', 'B', 'Φ', 'ε',
                    'λ', 'σ', 'ρ', 'Ω', 'μ', '∇', '∂', '∫', '∑', '∏'
                ],
                thermodynamics: [
                    'T', 'Q', 'W', 'U', 'H', 'S', 'P', 'V', 'k', 'c',
                    'Δ', '°', '∞', '∝', '≡', '≈', '∂', '∫', '√', '∛'
                ],
                waves: [
                    'λ', 'f', 'ν', 'A', 'ω', 'k', 'c', 'ψ', 'φ', 'π',
                    '∫', '∂', '∇', '≈', '∝', '∞', '∑', '√', '∠', '°'
                ],
                units: [
                    'm', 'kg', 's', 'A', 'K', 'mol', 'cd', 'N', 'J', 'W',
                    'Pa', 'Hz', 'C', 'V', 'Ω', 'T', 'H', 'lm', 'lx', 'Bq'
                ],
                greek: [
                    'α', 'β', 'γ', 'δ', 'ε', 'ζ', 'η', 'θ', 'ι', 'κ',
                    'λ', 'μ', 'ν', 'ξ', 'ο', 'π', 'ρ', 'σ', 'τ', 'ω'
                ]
            };
            
            // إظهار الرسالة الترحيبية المطلوبة عند تحميل الصفحة
            function showWelcomeMessage() {
                const welcomeMessage = "أهلاً بك! أنا Genius Ai، مساعدك المتخصص في الفيزياء. يمكنني مساعدتك في:\n\n• شرح قوانين الفيزياء\n• حل المسائل الفيزيائية\n• الميكانيكا والحركة\n• الكهرباء والمغناطيسية\n• الديناميكا الحرارية\n• البصريات والموجات\n\nما هو السؤال الفيزيائي الذي تريد المساعدة فيه؟";
                
                const messageElement = addMessage('', false);
                typeMessage(welcomeMessage, messageElement, 20);
            }
            
            // تهيئة لوحة المفاتيح الفيزيائية
            function initPhysicsKeyboard() {
                // إضافة مستمعي الأحداث لأزرار الفئات
                const categoryButtons = keyboardCategories.querySelectorAll('.category-btn');
                categoryButtons.forEach(btn => {
                    btn.addEventListener('click', function() {
                        categoryButtons.forEach(b => b.classList.remove('active'));
                        this.classList.add('active');
                        showSymbols(this.dataset.category);
                    });
                });
                
                // عرض الرموز الأساسية أولاً
                showSymbols('basic');
                
                // إضافة مستمع الحدث لإغلاق لوحة المفاتيح
                closeKeyboard.addEventListener('click', function() {
                    physicsKeyboard.classList.remove('open');
                    physicsButton.style.background = 'var(--border-gradient-onyx)';
                    physicsButton.style.color = 'var(--blue-electric)';
                });
            }
            
            // عرض الرموز للفئة المحددة
            function showSymbols(category) {
                keyboardSymbols.innerHTML = '';
                
                physicsSymbols[category].forEach(symbol => {
                    const symbolBtn = document.createElement('button');
                    symbolBtn.classList.add('symbol-btn');
                    
                    // تمييز الرموز الخاصة بخلفية مختلفة
                    if (['F', 'm', 'a', 'Q', 'I', 'V', 'T', 'λ', 'f', 'Δ'].includes(symbol)) {
                        symbolBtn.classList.add('special');
                    }
                    
                    symbolBtn.textContent = symbol;
                    symbolBtn.addEventListener('click', () => {
                        userInput.value += symbol;
                        userInput.focus();
                    });
                    keyboardSymbols.appendChild(symbolBtn);
                });
            }
            
            // تبديل عرض لوحة المفاتيح الفيزيائية
            function togglePhysicsKeyboard() {
                physicsKeyboard.classList.toggle('open');
                
                if (physicsKeyboard.classList.contains('open')) {
                    physicsButton.style.background = 'var(--bg-gradient-blue2)';
                    physicsButton.style.color = 'var(--white2)';
                } else {
                    physicsButton.style.background = 'var(--border-gradient-onyx)';
                    physicsButton.style.color = 'var(--blue-electric)';
                }
            }
            
            // تحديث عداد الأحرف
            userInput.addEventListener('input', function() {
                charCount.textContent = userInput.value.length;
            });
            
            // إضافة رسالة إلى الدردشة
            function addMessage(message, isUser = false, imageUrl = null, audioUrl = null) {
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
                
                // إضافة الصورة إذا كانت موجودة
                if (imageUrl) {
                    const imgElement = document.createElement('img');
                    imgElement.src = imageUrl;
                    imgElement.classList.add('message-image');
                    contentDiv.appendChild(imgElement);
                }
                
                // إضافة مشغل الصوت إذا كان موجودًا
                if (audioUrl) {
                    const audioElement = document.createElement('audio');
                    audioElement.src = audioUrl;
                    audioElement.controls = true;
                    audioElement.classList.add('audio-player');
                    contentDiv.appendChild(audioElement);
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
            
            // بدء التسجيل الصوتي
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
                        const audioUrl = URL.createObjectURL(audioBlob);
                        
                        // إضافة الرسالة مع التسجيل الصوتي
                        addMessage(isEnglish ? 'Voice message' : 'رسالة صوتية', true, null, audioUrl);
                        
                        // محاكاة استجابة الذكاء الاصطناعي
                        const typingIndicator = showTypingIndicator();
                        
                        setTimeout(() => {
                            hideTypingIndicator(typingIndicator);
                            const messageElement = addMessage('', false);
                            const response = isEnglish 
                                ? "I've received your voice message. How can I help you with this physics problem?" 
                                : "لقد تلقيت رسالتك الصوتية. كيف يمكنني مساعدتك في هذه المسألة الفيزيائية؟";
                            typeMessage(response, messageElement, 20);
                            
                            // حفظ المحادثة في السجل
                            saveToHistory(isEnglish ? '[Voice message]' : '[رسالة صوتية]', response, Date.now());
                        }, 2000);
                    };
                    
                    mediaRecorder.start();
                    isRecording = true;
                    recordButton.innerHTML = '<i class="fas fa-stop"></i>';
                    recordButton.style.color = 'var(--bittersweet-shimmer)';
                    recordingIndicator.style.display = 'flex';
                } catch (error) {
                    console.error('Error accessing microphone:', error);
                    alert(isEnglish ? 'Microphone access denied' : 'تم رفض الوصول إلى الميكروفون');
                }
            }
            
            // إيقاف التسجيل الصوتي
            function stopRecording() {
                if (mediaRecorder && isRecording) {
                    mediaRecorder.stop();
                    isRecording = false;
                    recordButton.innerHTML = '<i class="fas fa-microphone"></i>';
                    recordButton.style.color = '';
                    recordingIndicator.style.display = 'none';
                    
                    // إيقاف جميع tracks في الstream
                    mediaRecorder.stream.getTracks().forEach(track => track.stop());
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
                
                localStorage.setItem('geniusAiChatHistory', JSON.stringify(chatHistory));
            }
            
            // استدعاء API Gemini للحصول على إجابة
            async function getGeminiResponse(prompt) {
                try {
                    const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent?key=${API_KEY}`;
                    
                    // تحديد التعليمات للذكاء الاصطناعي مع التركيز على الفيزياء فقط
                    const instructions = isEnglish ? 
                        "You are a physics specialist assistant called Genius Ai. You must follow these rules strictly:\n\n" +
                        "1. Only answer physics-related questions\n" +
                        "2. Provide clear, detailed physics explanations\n" +
                        "3. If asked about non-physics topics, politely redirect to physics content\n" +
                        "4. Use physics examples and formulas\n" +
                        "5. Answer in English\n\n" +
                        "Physics question: " + prompt
                        :
                        "أنت مساعد متخصص في الفيزياء يسمى Genius Ai. يجب عليك اتباع هذه القواعد بدقة:\n\n" +
                        "1. أجب فقط على الأسئلة المتعلقة بالفيزياء\n" +
                        "2. قدم شرحًا فيزيائيًا واضحًا ومفصلاً\n" +
                        "3. إذا سُئلت عن مواضيع غير فيزيائية، فوجّه الحديث بلطف إلى المحتوى الفيزيائي\n" +
                        "4. استخدم أمثلة وصيغ فيزيائية\n" +
                        "5. أجب باللغة العربية\n\n" +
                        "سؤال فيزيائي: " + prompt;
                    
                    const response = await fetch(apiUrl, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            contents: [{
                                parts: [{
                                    text: instructions
                                }]
                            }],
                            generationConfig: {
                                temperature: 0.3,
                                topK: 40,
                                topP: 0.8,
                                maxOutputTokens: 1024
                            }
                        })
                    });
                    
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    
                    const data = await response.json();
                    
                    if (data.candidates && data.candidates[0] && data.candidates[0].content) {
                        return data.candidates[0].content.parts[0].text;
                    } else {
                        throw new Error("Invalid response format from API");
                    }
                } catch (error) {
                    console.error("Error calling Gemini API:", error);
                    // استخدام الردود الاحتياطية في حالة فشل API
                    return getFallbackResponse(prompt);
                }
            }
            
            // الردود الاحتياطية في حالة فشل API
            function getFallbackResponse(query) {
                const lang = isEnglish ? 'en' : 'ar';
                
                return lang === 'ar' 
                    ? 'أهلاً بك! أنا Genius Ai، مساعدك المتخصص في الفيزياء. يمكنني مساعدتك في:\n\n• شرح قوانين الفيزياء\n• حل المسائل الفيزيائية\n• الميكانيكا وال الحركة\n• الكهرباء والمغناطيسية\n• الديناميكا الحرارية\n• البصريات والموجات\n\nما هو السؤال الفيزيائي الذي تريد المساعدة فيه؟'
                    : 'Welcome! I am Genius Ai, your physics specialist assistant. I can help you with:\n\n• Explaining physics laws\n• Solving physics problems\n• Mechanics and motion\n• Electricity and magnetism\n• Thermodynamics\n• Optics and waves\n\nWhat physics question can I help you with?';
            }
            
            // إرسال رسالة
            async function sendMessage() {
                const message = userInput.value.trim();
                if (message && !isTypingEffectActive) {
                    addMessage(message, true);
                    userInput.value = '';
                    charCount.textContent = '0';
                    
                    // إغلاق لوحة المفاتيح الفيزيائية إذا كانت مفتوحة
                    if (physicsKeyboard.classList.contains('open')) {
                        togglePhysicsKeyboard();
                    }
                    
                    const typingIndicator = showTypingIndicator();
                    
                    try {
                        const response = await getGeminiResponse(message);
                        hideTypingIndicator(typingIndicator);
                        const messageElement = addMessage('', false);
                        await typeMessage(response, messageElement, 20);
                        
                        // حفظ المحادثة في السجل
                        saveToHistory(message, response, Date.now());
                    } catch (error) {
                        hideTypingIndicator(typingIndicator);
                        const messageElement = addMessage('', false);
                        const errorMessage = isEnglish 
                            ? "I'm sorry, I encountered an error while processing your request. Please try again." 
                            : "عذرًا، حدث خطأ أثناء معالجة طلبك. يرجى المحاولة مرة أخرى.";
                        await typeMessage(errorMessage, messageElement, 20);
                    }
                }
            }
            
            // تبديل اللغة
            function toggleLanguage() {
                isEnglish = !isEnglish;
                
                if (isEnglish) {
                    document.documentElement.setAttribute('lang', 'en');
                    document.documentElement.setAttribute('dir', 'ltr');
                    document.querySelector('title').textContent = 'Genius Ai - Physics';
                    document.querySelector('h1').textContent = 'Genius Ai - Physics';
                    userInput.placeholder = 'Type your physics question here...';
                    document.querySelector('footer').textContent = 'Developed by Genius Ai 2023 - Physics Specialist';
                } else {
                    document.documentElement.setAttribute('lang', 'ar');
                    document.documentElement.setAttribute('dir', 'rtl');
                    document.querySelector('title').textContent = 'Genius Ai - الفيزياء';
                    document.querySelector('h1').textContent = 'Genius Ai - الفيزياء';
                    userInput.placeholder = 'اطرح سؤالك الفيزيائي هنا...';
                    document.querySelector('footer').textContent = 'تم التطوير بواسطة Genius Ai 2023 - متخصص في الفيزياء';
                }
                
                // إعادة تحميل الصفحة للحفاظ على الاتساق
                location.reload();
            }
            
            // إضافة مستمعي الأحداث
            sendButton.addEventListener('click', sendMessage);
            
            userInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    sendMessage();
                }
            });
            
            physicsButton.addEventListener('click', togglePhysicsKeyboard);
            
            recordButton.addEventListener('click', function() {
                if (isRecording) {
                    stopRecording();
                } else {
                    startRecording();
                }
            });
            
            languageToggle.addEventListener('click', toggleLanguage);
            
            historyButton.addEventListener('click', function() {
                alert(isEnglish ? 'Chat history feature will be implemented soon' : 'سيتم تطوير ميزة سجل المحادثات قريبًا');
            });
            
            // إغلاق لوحة المفاتيح عند النقر خارجها
            document.addEventListener('click', function(e) {
                if (physicsKeyboard.classList.contains('open') && 
                    !physicsKeyboard.contains(e.target) && 
                    e.target !== physicsButton) {
                    togglePhysicsKeyboard();
                }
            });
            
            // تهيئة التطبيق عند التحميل
            showWelcomeMessage();
            initPhysicsKeyboard();
        });
    </script>
</body>
</html>