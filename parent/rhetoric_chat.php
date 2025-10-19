
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>بلاغة AI - مساعد النحو والبلاغة المتخصص</title>
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
          height: 100%;
        }

        body {
          background: var(--smoky-black);
          font-family: 'Tajawal', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
          min-height: 100%;
          position: relative;
        }

        /* القائمة الجانبية بتصميم زجاجي */
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
            right: 0;
            transform: translateX(100%);
        }

        .sidebar.open {
            transform: translateX(0);
        }

        .sidebar-header {
            padding: 18px;
            background: var(--onyx);
            border-bottom: 1px solid var(--jet);
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
            color: var(--light-gray70);
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
            background: linear-gradient(90deg, transparent, hsla(0, 0%, 100%, 0.1), transparent);
            transition: 0.5s;
        }

        .history-item:hover {
            background: hsla(0, 0%, 100%, 0.05);
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
            color: var(--white2);
        }

        .history-item-date {
            font-size: var(--fs7);
            color: var(--light-gray70);
            margin-top: 6px;
        }

        .main-content {
            flex: 1;
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
            height: 100%;
        }

        .chat-header {
            background: var(--bg-gradient-onyx);
            color: var(--white1);
            padding: 18px 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: var(--shadow2);
            position: sticky;
            top: 0;
            z-index: 5;
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

        /* منطقة الرسائل مع تأثيرات التمرير */
        .chat-messages {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 18px;
            scrollbar-width: thin;
            scrollbar-color: var(--vegas-gold) var(--onyx);
            scroll-behavior: smooth;
        }

        .chat-messages::-webkit-scrollbar {
            width: 8px;
        }

        .chat-messages::-webkit-scrollbar-track {
            background: var(--onyx);
            border-radius: 10px;
        }

        .chat-messages::-webkit-scrollbar-thumb {
            background-color: var(--vegas-gold);
            border-radius: 10px;
            background-image: var(--text-gradient-yellow);
        }

        /* رسائل المستخدم والذكاء الاصطناعي مع تأثيرات */
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
            background: var(--bg-gradient-yellow1);
            color: var(--smoky-black);
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
            color: var(--light-gray);
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
            background-color: var(--orange-yellow-crayola);
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

        /* تأثير التفكير العميق */
        .deep-thinking {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
            padding: 18px;
            background: var(--onyx);
            border-radius: 18px;
            margin: 10px 0;
            border: 1px dashed var(--jet);
            animation: pulseBackground 3s infinite;
        }

        @keyframes pulseBackground {
            0%, 100% { background-color: var(--onyx); }
            50% { background-color: var(--eerie-black1); }
        }

        .deep-thinking i {
            font-size: 28px;
            color: var(--orange-yellow-crayola);
            animation: pulse 2s infinite, float 3s ease-in-out infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); opacity: 0.7; }
            50% { transform: scale(1.1); opacity: 1; }
            100% { transform: scale(1); opacity: 0.7; }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }

        .deep-thinking p {
            font-size: var(--fs5);
            color: var(--light-gray70);
            text-align: center;
        }

        /* منطقة الإدخال بتصميم زجاجي */
        .chat-input {
            display: flex;
            padding: 18px;
            background: var(--eerie-black2);
            border-top: 1px solid var(--jet);
            gap: 12px;
            position: sticky;
            bottom: 0;
            flex-wrap: wrap;
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
            background: var(--onyx);
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
            border-color: var(--orange-yellow-crayola);
            box-shadow: 0 0 0 3px hsla(45, 100%, 71%, 0.3);
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
            background: var(--onyx);
            border-radius: 18px;
            cursor: pointer;
            transition: all 0.3s;
            color: var(--light-gray70);
        }

        .file-label:hover {
            background: var(--jet);
            transform: translateY(-2px);
            color: var(--white1);
        }

        /* أزرار بألوان متدرجة وتأثيرات */
        .send-btn {
            background: var(--text-gradient-yellow);
            color: var(--smoky-black);
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
            box-shadow: var(--shadow3);
        }

        .send-btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow4);
        }

        .deep-think-btn {
            background: var(--bg-gradient-yellow1);
            color: var(--smoky-black);
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
            box-shadow: var(--shadow3);
        }

        .deep-think-btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow4);
        }

        .voice-btn {
            background: var(--bg-gradient-onyx);
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
            box-shadow: var(--shadow3);
        }

        .voice-btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow4);
            background: var(--bg-gradient-yellow1);
            color: var(--smoky-black);
        }

        /* طبقة التعتيم */
        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: hsla(0, 0%, 0%, 0.6);
            z-index: 50;
            transition: opacity 0.4s;
            backdrop-filter: blur(3px);
            -webkit-backdrop-filter: blur(3px);
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

        .voice-message-indicator {
            display: flex;
            align-items: center;
            gap: 6px;
            color: var(--orange-yellow-crayola);
            font-size: var(--fs7);
            margin-top: 8px;
            animation: pulse 2s infinite;
        }

        .image-preview {
            max-width: 100%;
            max-height: 200px;
            border-radius: 12px;
            margin-top: 12px;
            border: 1px solid var(--jet);
            box-shadow: var(--shadow2);
            transition: transform 0.3s;
        }

        .image-preview:hover {
            transform: scale(1.02);
        }

        /* تأثيرات للهواتف */
        @media (max-width: 768px) {
            .sidebar {
                width: 85%;
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

            .voice-btn, .deep-think-btn {
                flex: 1;
                min-width: 60px;
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

            .file-label, .send-btn, .deep-think-btn, .voice-btn {
                height: 50px;
                border-radius: 15px;
            }
            
            /* تحسينات لوحة المفاتيح على الهواتف */
            @media (max-height: 600px) {
                .chat-input {
                    position: fixed;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    padding: 10px;
                    background: var(--eerie-black2);
                    border-top: 1px solid var(--jet);
                }
                
                .chat-messages {
                    padding-bottom: 120px;
                }
            }
        }
        
        /* تحسينات خاصة بالوحة المفاتيح */
        .keyboard-open .chat-input {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 10px;
            background: var(--eerie-black2);
            border-top: 1px solid var(--jet);
        }
        
        .keyboard-open .chat-messages {
            padding-bottom: 150px;
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

        /* تعديلات للهواتف المحمولة */
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
    
    <div class="main-content">
        <div class="chat-container">
            <div class="chat-header">
                <button class="menu-btn" id="menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
                <h2>
                    <i class="fas fa-language"></i>
                    بلاغة AI - مساعد النحو والبلاغة المتخصص
                </h2>
                                <button class="back-btn" id="backButton"><i> رجوع</i></button>

                <div style="width: 40px;"></div> <!-- عنصر فارغ للمحاذاة -->
            </div>
            
            <div class="chat-messages" id="chat-messages">
                <!-- الرسائل ستظهر هنا -->
            </div>
            
            <div class="chat-input" id="chat-input">
                <div class="input-group">
                    <textarea id="message-input" placeholder="اكتب سؤالك هنا عن النحو أو البلاغة..."></textarea>
                    <button id="send-btn" class="send-btn" title="إرسال">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
                
                <div class="action-buttons">
                    <label for="file-input" class="file-label" title="رفع صورة">
                        <i class="fas fa-image"></i>
                    </label>
                    <input type="file" id="file-input" class="file-input" accept="image/*">
                    <button id="voice-btn" class="voice-btn" title="إرسال صوتي">
                        <i class="fas fa-microphone"></i>
                    </button>
                    <button id="deep-think-btn" class="deep-think-btn" title="تحليل بلاغي">
                        <i class="fas fa-brain"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // API Key for Gemini
        const API_KEY = 'AIzaSyDotKDQDsxhD_mtWgZttJ-UDJDLUuLXEQc';
        const MODEL_NAME = 'gemini-2.0-flash';
        
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
        const chatInput = document.getElementById('chat-input');
        
        // Variables
        let recognition;
        let chatHistory = [];
        let isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
        
        // Initialize the app
        function init() {
            loadChatHistory();
            setupEventListeners();
            setupKeyboardHandling();
            
            // Initial greeting message with animation
            setTimeout(() => {
                const greeting = "مرحباً! أنا مساعدك الذكي المتخصص في النحو والبلاغة العربية فقط من شركة بلاغة AI. يمكنك طرح أي سؤال في:\n- قواعد اللغة العربية (الإعراب والبناء)\n- علوم البلاغة (المعاني، البيان، البديع)\n- تحليل النصوص الأدبية\n- الأساليب اللغوية والصور البيانية\nسأساعدك بتحليل دقيق مع ذكر الأمثلة والشواهد.";
                addMessage(greeting, false, true);
            }, 800);
        }
        
        // Handle keyboard visibility changes
        function setupKeyboardHandling() {
            if (!isMobile) return;
            
            let initialViewportHeight = window.innerHeight;
            
            window.addEventListener('resize', () => {
                if (window.innerHeight < initialViewportHeight) {
                    // Keyboard is shown
                    document.body.classList.add('keyboard-open');
                    scrollToBottom();
                } else {
                    // Keyboard is hidden
                    document.body.classList.remove('keyboard-open');
                }
            });
        }
        
        // Load chat history from localStorage
        function loadChatHistory() {
            const savedHistory = localStorage.getItem('balaghaAIHistory');
            if (savedHistory) {
                chatHistory = JSON.parse(savedHistory);
                renderHistoryList();
            }
        }
        
        // Save chat history to localStorage
        function saveChatHistory() {
            localStorage.setItem('balaghaAIHistory', JSON.stringify(chatHistory));
        }
        
        // Render history list in sidebar
        function renderHistoryList() {
            historyList.innerHTML = '';
            
            if (chatHistory.length === 0) {
                historyList.innerHTML = '<div style="padding: 15px; color: var(--light-gray70); text-align: center;">لا توجد محادثات سابقة</div>';
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
            setTimeout(() => {
                chatMessages.scrollTo({
                    top: chatMessages.scrollHeight,
                    behavior: 'smooth'
                });
            }, 100);
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
                <i class="fas fa-book-open"></i>
                <p>جاري التحليل النحوي والبلاغي بعمق...</p>
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
        
        // Process image with Gemini for text analysis
        async function processImage(imageFile, question = '') {
            const reader = new FileReader();
            
            return new Promise((resolve) => {
                reader.onload = async (e) => {
                    const imageBase64 = e.target.result.split(',')[1];
                    
                    const payload = {
                        contents: [
                            {
                                parts: [
                                    {
                                        text: question || "قم بتحليل النص العربي في هذه الصورة من الناحية النحوية والبلاغية. اذكر الأخطاء النحوية إن وجدت، وحلل الأساليب البلاغية."
                                    },
                                    {
                                        inline_data: {
                                            mime_type: imageFile.type,
                                            data: imageBase64
                                        }
                                    }
                                ]
                            }
                        ]
                    };
                    
                    try {
                        const response = await fetch(`https://generativelanguage.googleapis.com/v1beta/models/${MODEL_NAME}:generateContent?key=${API_KEY}`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify(payload)
                        });
                        
                        const data = await response.json();
                        
                        if (data.candidates && data.candidates[0].content.parts[0].text) {
                            // Limit response to ~70 tokens (approximately 70 words in Arabic)
                            const responseText = data.candidates[0].content.parts[0].text;
                            const limitedResponse = responseText.split(' ').slice(0, 70).join(' ');
                            resolve(limitedResponse);
                        } else {
                            resolve("عذرًا، لم أتمكن من تحليل النص في الصورة. يرجى التأكد من أنها تحتوي على نص عربي واضح.");
                        }
                    } catch (error) {
                        console.error('Error processing image:', error);
                        resolve("حدث خطأ أثناء تحليل النص في الصورة. يرجى المحاولة مرة أخرى.");
                    }
                };
                
                reader.readAsDataURL(imageFile);
            });
        }
        
        // Send text message to Gemini for Arabic language questions
        async function sendTextMessage(message) {
            // Handle non-Arabic questions immediately
            const specialResponse = handleSpecialQuestions(message);
            if (specialResponse) {
                return specialResponse;
            }
            
            const payload = {
                contents: [
                    {
                        parts: [
                            {
                                text: "أنت مساعد ذكاء اصطناعي متخصص في النحو والبلاغة العربية فقط من شركة بلاغة AI. يجب أن تجيب على الأسئلة بدقة علمية في مجال اللغة العربية فقط (النحو، الصرف، البلاغة). لا تجب عن أسئلة في الرياضيات، العلوم، أو أي مجال آخر. إذا سُئلت عن مجال آخر، قل: 'عذرًا، أنا متخصص في النحو والبلاغة العربية فقط. يمكنني مساعدتك في أي سؤال عن الإعراب، الأساليب البلاغية، تحليل النصوص الأدبية، أو أي موضوع لغوي عربي.' استخدم المصطلحات اللغوية بدقة مع ذكر الأمثلة. إذا سُئلت عن هويتك، قل: 'أنا مساعد لغوي من بلاغة AI، متخصص في تحليل النصوص العربية.' يجب أن تكون الإجابة قصيرة (لا تتجاوز 70 كلمة). السؤال اللغوي: " + message
                            }
                        ]
                    }
                ]
            };
            
            try {
                const response = await fetch(`https://generativelanguage.googleapis.com/v1beta/models/${MODEL_NAME}:generateContent?key=${API_KEY}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(payload)
                });
                
                const data = await response.json();
                
                if (data.candidates && data.candidates[0].content.parts[0].text) {
                    // Limit response to ~70 tokens (approximately 70 words in Arabic)
                    const responseText = data.candidates[0].content.parts[0].text;
                    const limitedResponse = responseText.split(' ').slice(0, 70).join(' ');
                    return limitedResponse;
                } else {
                    return "عذرًا، لم أتمكن من معالجة سؤالك اللغوي. يرجى التأكد من أنه يتعلق بالنحو أو البلاغة العربية فقط.";
                }
            } catch (error) {
                console.error('Error sending message:', error);
                return "حدث خطأ أثناء معالجة سؤالك اللغوي. يرجى المحاولة مرة أخرى.";
            }
        }
        
        // Handle special questions
        function handleSpecialQuestions(question) {
            const lowerQuestion = question.toLowerCase();
            
            // ردود على أسئلة غير لغوية
            if (lowerQuestion.includes('رياضيات') || lowerQuestion.includes('حساب') || lowerQuestion.includes('جبر') || 
                lowerQuestion.includes('هندسة') || lowerQuestion.includes('تكامل') || lowerQuestion.includes('تفاضل') ||
                lowerQuestion.includes('فيزياء') || lowerQuestion.includes('كيمياء') || lowerQuestion.includes('علوم') ||
                lowerQuestion.includes('تاريخ') || lowerQuestion.includes('جغرافيا') || lowerQuestion.includes('أحياء')) {
                return "عذرًا، أنا متخصص في النحو والبلاغة العربية فقط من شركة بلاغة AI. لا يمكنني الإجابة على أسئلة خارج مجال اللغة العربية. يمكنك طرح أي سؤال عن الإعراب، الأساليب البلاغية، أو تحليل النصوص وسأسعد بمساعدتك.";
            }
            
            // أسئلة عن الهوية
            if (lowerQuestion.includes('من أنت') || lowerQuestion.includes('من صنعك') || 
                lowerQuestion.includes('من قام بتدريبك') || lowerQuestion.includes('ما مصدر معلوماتك') ||
                lowerQuestion.includes('هل تستخدم جوجل') || lowerQuestion.includes('هل تستخدم openai') ||
                lowerQuestion.includes('api') || lowerQuestion.includes('مصادر خارجية')) {
                return "أنا مساعد لغوي متخصص من شركة بلاغة AI. تم تدريبي على تحليل النصوص العربية من الناحية النحوية والبلاغية فقط. لا أعتمد على أي واجهات برمجية خارجية. أنا نموذج مستقل تم تطويره خصيصاً للغة العربية.";
            }
            
            return null;
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
                    
                    const userMessage = addMessage("صورة تحتوي على نص للتحليل:", true);
                    userMessage.appendChild(imgPreview);
                };
                reader.readAsDataURL(file);
            }
            
            // Clear input with animation
            messageInput.style.transition = 'all 0.3s ease';
            messageInput.value = '';
            messageInput.style.height = 'auto';
            fileInput.value = '';
            
            // Show typing indicator
            const typingIndicator = showTypingIndicator();
            
            // Process message
            let response;
            if (file) {
                response = await processImage(file, message);
            } else {
                response = await sendTextMessage(message);
            }
            
            // Remove typing indicator and show response with delay
            setTimeout(() => {
                chatMessages.removeChild(typingIndicator);
                addMessage(response);
            }, 1000);
        }
        
        // Handle deep think with extended animations for language analysis
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
                    
                    const userMessage = addMessage("صورة للتحليل اللغوي المتعمق:", true);
                    userMessage.appendChild(imgPreview);
                };
                reader.readAsDataURL(file);
            }
            
            // Clear input
            messageInput.value = '';
            messageInput.style.height = 'auto';
            fileInput.value = '';
            
            // Show extended thinking indicator
            const thinkingIndicator = showDeepThinkingIndicator();
            
            // Process message with longer delay for deep language analysis
            setTimeout(async () => {
                let response;
                if (file) {
                    response = await processImage(file, message + " (قم بتحليل هذا النص العربي بعمق من الناحية النحوية والبلاغية مع ذكر التفاصيل والأمثلة)");
                } else {
                    response = await sendTextMessage(message + " (قم بتحليل هذا السؤال اللغوي بعمق مع ذكر التفاصيل والأمثلة والشواهد)");
                }
                
                // Remove thinking indicator and show response
                chatMessages.removeChild(thinkingIndicator);
                addMessage(response);
            }, 10000); // 10 seconds delay for deep language analysis
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
                    listeningIndicator.innerHTML = '<i class="fas fa-microphone"></i> جاري الاستماع إلى سؤالك اللغوي...';
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
                    errorMessage.textContent = 'حدث خطأ في التعرف على سؤالك اللغوي. يرجى المحاولة مرة أخرى.';
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
            voiceBtn.style.background = 'linear-gradient(to right, #9b59b6, #8e44ad)';
            voiceBtn.style.boxShadow = '0 4px 15px rgba(155, 89, 182, 0.3)';
            messageInput.placeholder = "اكتب سؤالك هنا عن النحو أو البلاغة...";
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
            
            // Close sidebar button with animation
            closeSidebar.addEventListener('click', toggleSidebar);
            
            // Overlay click to close sidebar
            overlay.addEventListener('click', function() {
                if (sidebar.classList.contains('open')) {
                    toggleSidebar();
                }
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
                fileLabel.style.boxShadow = '0 6px 15px rgba(0, 0, 0, 0.2)';
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
                    const greeting = "مرحباً! أنا مساعدك الذكي المتخصص في النحو والبلاغة العربية فقط من شركة بلاغة AI. يمكنك طرح أي سؤال في:\n- قواعد اللغة العربية (الإعراب والبناء)\n- علوم البلاغة (المعاني، البيان، البديع)\n- تحليل النصوص الأدبية\n- الأساليب اللغوية والصور البيانية\nسأساعدك بتحليل دقيق مع ذكر الأمثلة والشواهد.";
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