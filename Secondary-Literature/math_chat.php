
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Math Chat | شات الذكاء الاصطناعي للرياضيات</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800&display=swap');

        :root {
            --bg-gradient-onyx: linear-gradient(to bottom right, hsl(240, 1%, 25%) 3%, hsl(0, 0%, 19%) 97%);
            --bg-gradient-jet: linear-gradient(to bottom right, hsla(240, 1%, 18%, 0.251) 3%, hsla(240, 2%, 11%, 0) 100%), hsl(240, 2%, 13%);
            --bg-gradient-gold1: linear-gradient(to bottom right, hsl(43, 74%, 49%) 0%, hsla(43, 74%, 49%, 0) 50%);
            --bg-gradient-gold2: linear-gradient(135deg, hsla(43, 74%, 49%, 0.251) 0%, hsla(43, 74%, 49%, 0) 59.86%), hsl(240, 2%, 13%);
            --border-gradient-onyx: linear-gradient(to bottom right, hsl(0, 0%, 25%) 0%, hsla(0, 0%, 25%, 0) 50%);
            --text-gradient-gold: linear-gradient(to right, hsl(43, 74%, 49%), hsl(33, 74%, 49%));
            --text-gradient-yellow: linear-gradient(to right, hsl(53, 74%, 49%), hsl(43, 74%, 49%));
            
            --jet: hsl(0, 0%, 22%);
            --onyx: hsl(240, 1%, 17%);
            --eerie-black1: hsl(240, 2%, 13%);
            --eerie-black2: hsl(240, 2%, 12%);
            --smoky-black: hsl(0, 0%, 7%);
            --white1: hsl(0, 0%, 100%);
            --white2: hsl(0, 0%, 98%);
            --gold: hsl(43, 74%, 49%);
            --light-gold: hsl(43, 74%, 59%);
            --yellow: hsl(53, 74%, 49%);
            --light-yellow: hsl(53, 74%, 59%);
            --light-gray: hsl(0, 0%, 84%);
            --light-gray70: hsla(0, 0%, 84%, 0.7);

            --ff-tajawal: "Tajawal", sans-serif;

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
            font-family: var(--ff-tajawal);
        }

        body {
            background: var(--smoky-black);
            color: var(--white2);
            line-height: 1.6;
            text-align: right;
            direction: rtl;
            height: 100vh;
            display: flex;
            flex-direction: column;
            overflow: hidden;
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
            min-height: 60px;
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
            min-width: 0;
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
        }

        .logo-subtitle {
            font-size: 11px;
            color: var(--light-gray);
            font-weight: var(--fw400);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
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
            flex-direction: column;
            height: calc(100vh - 60px);
            position: relative;
            overflow: hidden;
            flex: 1;
        }

        /* Chat Container */
        .chat-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
            background: var(--border-gradient-onyx);
            min-height: 0;
        }

        .chat-header {
            padding: 12px 16px;
            background: var(--bg-gradient-jet);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-shrink: 0;
            min-height: 60px;
        }

        .chat-contact-info {
            display: flex;
            align-items: center;
            gap: 12px;
            min-width: 0;
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
            min-width: 0;
        }

        .chat-contact-name {
            font-weight: var(--fw600);
            font-size: 14px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .chat-contact-status {
            font-size: 11px;
            color: var(--light-gray70);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
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
        }

        .user-message .message-content {
            background: var(--text-gradient-gold);
            color: var(--smoky-black);
            border-bottom-right-radius: 6px;
            box-shadow: var(--shadow2);
            font-weight: var(--fw600);
        }

        .ai-message .message-content {
            background: var(--bg-gradient-jet);
            color: var(--white2);
            border-bottom-left-radius: 6px;
            box-shadow: var(--shadow1);
        }

        .message-time {
            font-size: 10px;
            color: var(--light-gray70);
            margin-top: 4px;
            font-weight: var(--fw400);
            display: flex;
            align-items: center;
            gap: 3px;
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
            font-size: 12px;
            color: var(--yellow);
            margin-top: 6px;
            text-align: center;
            font-weight: var(--fw600);
            background: rgba(255, 215, 0, 0.1);
            padding: 5px 8px;
            border-radius: 6px;
            border-right: 2px solid var(--yellow);
        }

        /* Chat Input */
        .chat-input-container {
            padding: 12px 16px;
            background: var(--bg-gradient-jet);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            gap: 10px;
            position: relative;
            z-index: 10;
            flex-shrink: 0;
            min-height: 70px;
        }

        .input-wrapper {
            flex: 1;
            display: flex;
            align-items: center;
            background: var(--smoky-black);
            border-radius: 20px;
            padding: 6px 12px;
            transition: var(--transition2);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: var(--shadow1);
            position: relative;
            min-height: 46px;
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
            padding-left: 40px;
            min-height: 32px;
        }

        .chat-input::placeholder {
            color: var(--light-gray70);
            opacity: 0.6;
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
            font-size: 12px;
            margin-bottom: 8px;
            outline: none;
            min-height: 36px;
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
            font-size: 12px;
            color: var(--light-gray70);
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

        /* شريط الرموز المحددة */
        .selected-symbols-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: var(--bg-gradient-jet);
            border-bottom: 2px solid var(--jet);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
            z-index: 1001;
            padding: 15px;
            display: none;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            max-height: 120px;
            overflow-y: auto;
        }

        .selected-symbols-bar.active {
            display: flex;
        }

        .equation-preview {
            flex-grow: 1;
            font-size: 1.5rem;
            padding: 10px 15px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 8px;
            border: 1px solid var(--jet);
            min-height: 50px;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 5px;
            direction: ltr;
            text-align: left;
        }

        .insert-btn {
            background: var(--text-gradient-gold);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition1);
            font-weight: bold;
            margin-left: 10px;
        }

        .insert-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 215, 0, 0.3);
        }

        .clear-btn {
            background: rgba(255, 0, 0, 0.2);
            color: var(--light-gray);
            border: 1px solid rgba(255, 0, 0, 0.3);
            padding: 12px 15px;
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition1);
        }

        .clear-btn:hover {
            background: rgba(255, 0, 0, 0.3);
            transform: translateY(-2px);
        }

        .backspace-btn {
            background: rgba(255, 215, 0, 0.2);
            color: var(--light-gray);
            border: 1px solid rgba(255, 215, 0, 0.3);
            padding: 12px 15px;
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition1);
        }

        .backspace-btn:hover {
            background: rgba(255, 215, 0, 0.3);
            transform: translateY(-2px);
        }

        /* لوحة مفاتيح الرياضيات */
        .math-keyboard-btn {
            position: fixed;
            bottom: 30px;
            left: 30px;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: var(--text-gradient-gold);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            cursor: pointer;
            box-shadow: var(--shadow3);
            z-index: 1000;
            transition: var(--transition1);
            border: 2px solid var(--jet);
            animation: pulse 2s infinite, float 3s ease-in-out infinite;
        }

        .math-keyboard-btn:hover {
            transform: scale(1.1);
            box-shadow: var(--shadow4);
            animation: none;
        }

        .math-keyboard {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--bg-gradient-jet);
            border-top: 2px solid var(--jet);
            box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.5);
            z-index: 999;
            transform: translateY(100%);
            transition: transform 0.4s ease-in-out;
            padding: 20px;
            max-height: 80vh;
            overflow-y: auto;
        }

        .math-keyboard.active {
            transform: translateY(0);
        }

        .keyboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--jet);
        }

        .keyboard-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--gold);
        }

        .keyboard-close {
            background: none;
            border: none;
            color: var(--light-gray);
            font-size: 1.5rem;
            cursor: pointer;
            transition: var(--transition1);
        }

        .keyboard-close:hover {
            color: var(--gold);
            transform: rotate(90deg);
        }

        .keyboard-categories {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
            flex-wrap: nowrap;
            overflow-x: auto;
            padding-bottom: 10px;
            scrollbar-width: thin;
            scrollbar-color: var(--gold) var(--jet);
            direction: ltr;
        }

        .keyboard-categories::-webkit-scrollbar {
            height: 8px;
        }

        .keyboard-categories::-webkit-scrollbar-track {
            background: var(--jet);
            border-radius: 10px;
        }

        .keyboard-categories::-webkit-scrollbar-thumb {
            background: var(--gold);
            border-radius: 10px;
        }

        .category-btn {
            padding: 10px 20px;
            border-radius: 20px;
            border: 1px solid var(--jet);
            background: rgba(255, 255, 255, 0.05);
            color: var(--light-gray);
            cursor: pointer;
            transition: var(--transition1);
            font-size: 0.9rem;
            white-space: nowrap;
            display: flex;
            align-items: center;
            gap: 8px;
            animation: fadeIn 0.5s ease-out;
        }

        .category-btn.active {
            background: var(--text-gradient-yellow);
            color: white;
            border-color: transparent;
            box-shadow: 0 4px 10px rgba(255, 215, 0, 0.3);
        }

        .category-btn:hover:not(.active) {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        .keyboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(65px, 1fr));
            gap: 10px;
            margin-bottom: 15px;
        }

        .keyboard-btn {
            padding: 12px 5px;
            border-radius: 10px;
            border: 1px solid var(--jet);
            background: rgba(255, 255, 255, 0.05);
            color: var(--light-gray);
            cursor: pointer;
            transition: var(--transition1);
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 55px;
            animation: slideIn 0.3s ease-out;
            word-break: break-word;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .keyboard-btn:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .keyboard-btn.special {
            background: rgba(255, 215, 0, 0.1);
            border-color: var(--yellow);
        }

        .keyboard-btn.large {
            grid-column: span 2;
        }

        .keyboard-btn.xlarge {
            grid-column: span 3;
        }

        .keyboard-btn.xxlarge {
            grid-column: span 4;
        }

        .keyboard-description {
            margin-top: 15px;
            padding: 15px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            font-size: 0.9rem;
            color: var(--light-gray70);
            border: 1px solid var(--jet);
            animation: fadeIn 0.5s ease-out;
            line-height: 1.5;
        }

        /* تأثيرات الحركة */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(255, 215, 0, 0.7); }
            70% { transform: scale(1.05); box-shadow: 0 0 0 10px rgba(255, 215, 0, 0); }
            100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(255, 215, 0, 0); }
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        @keyframes slideIn {
            from { 
                opacity: 0; 
                transform: translateY(20px) scale(0.9); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0) scale(1); 
            }
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
            padding: 10px;
        }

        .modal-content {
            background: var(--bg-gradient-jet);
            border-radius: 20px;
            max-width: 400px;
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
        }

        .form-input, .form-textarea {
            width: 100%;
            padding: 10px 12px;
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            background: var(--smoky-black);
            font-size: 14px;
            color: var(--white2);
            transition: var(--transition1);
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
                font-size: 10px;
            }
            
            .header-btn {
                width: 32px;
                height: 32px;
            }
            
            .header-btn i {
                font-size: 14px;
            }
            
            .new-chat-btn {
                padding: 5px 8px;
                font-size: 11px;
            }
            
            .new-chat-btn span {
                display: none;
            }
            
            .chat-header {
                padding: 10px 12px;
                min-height: 50px;
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
                font-size: 10px;
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
                border-radius: 16px;
            }
            
            .message-time {
                font-size: 9px;
            }
            
            .message-image {
                max-width: 200px;
            }
            
            .chat-input-container {
                padding: 10px 12px;
                min-height: 60px;
            }
            
            .input-wrapper {
                padding: 5px 10px;
                min-height: 40px;
                border-radius: 18px;
            }
            
            .chat-input {
                padding: 6px 8px;
                font-size: 13px;
                padding-left: 36px;
            }
            
            .input-actions {
                left: 8px;
                gap: 4px;
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
            
            .math-keyboard-btn {
                bottom: 20px;
                left: 20px;
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
            
            .keyboard-grid {
                grid-template-columns: repeat(auto-fill, minmax(55px, 1fr));
            }
            
            .keyboard-btn {
                padding: 10px 5px;
                min-height: 50px;
                font-size: 1rem;
            }
            
            .selected-symbols-bar {
                padding: 10px;
            }
            
            .equation-preview {
                font-size: 1.3rem;
                padding: 8px 12px;
            }
            
            .insert-btn, .clear-btn, .backspace-btn {
                padding: 10px 15px;
            }
        }

        @media (max-width: 576px) {
            .math-keyboard {
                padding: 15px;
            }
            
            .keyboard-categories {
                gap: 5px;
            }
            
            .category-btn {
                padding: 8px 15px;
                font-size: 0.8rem;
            }
            
            .keyboard-grid {
                grid-template-columns: repeat(auto-fill, minmax(50px, 1fr));
                gap: 8px;
            }
            
            .keyboard-btn {
                padding: 8px 3px;
                min-height: 45px;
                font-size: 0.9rem;
            }
            
            .selected-symbols-bar {
                max-height: 100px;
            }
            
            .equation-preview {
                font-size: 1.1rem;
                padding: 6px 10px;
            }
            
            .insert-btn, .clear-btn, .backspace-btn {
                padding: 8px 12px;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 400px) {
            .keyboard-grid {
                grid-template-columns: repeat(auto-fill, minmax(45px, 1fr));
                gap: 6px;
            }
            
            .keyboard-btn {
                padding: 6px 2px;
                min-height: 40px;
                font-size: 0.85rem;
            }
            
            .keyboard-title {
                font-size: 1.2rem;
            }
            
            .selected-symbols-bar {
                gap: 5px;
            }
            
            .equation-preview {
                font-size: 1rem;
                padding: 5px 8px;
            }
            
            .insert-btn, .clear-btn, .backspace-btn {
                padding: 6px 10px;
                font-size: 0.8rem;
            }
        }

        @media (max-height: 600px) {
            .header {
                height: 50px;
                min-height: 50px;
            }
            
            .main-container {
                height: calc(100vh - 50px);
            }
            
            .chat-header {
                min-height: 45px;
                padding: 8px 12px;
            }
            
            .chat-messages {
                padding: 10px 12px;
            }
            
            .chat-input-container {
                min-height: 55px;
                padding: 8px 12px;
            }
            
            .math-keyboard {
                max-height: 60vh;
            }
        }
    </style>
</head>
<body>
    <!-- شريط الرموز المحددة -->
    <div class="selected-symbols-bar" id="selected-symbols-bar">
        <div class="equation-preview" id="equation-preview">
            <!-- سيتم عرض الرموز المحددة هنا -->
        </div>
        <button class="backspace-btn" id="backspace-btn" title="حذف آخر رمز">
            <i class="fas fa-backspace"></i>
        </button>
        <button class="clear-btn" id="clear-btn">مسح الكل</button>
        <button class="insert-btn" id="insert-btn">إدراج المعادلة</button>
    </div>

    <div class="header">
        <div class="header-container">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-square-root-alt"></i>
                </div>
                <div class="logo-text">
                    <span class="logo-title">شات الرياضيات الذكي</span>
                    <span class="logo-subtitle">AI Math Chat</span>
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
                        <div class="chat-contact-name" id="chat-contact-name">مساعد الرياضيات الذكي</div>
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
                        مرحباً بك في شات الذكاء الاصطناعي للرياضيات! 🧮<br>
                        أنا مساعدك المتخصص في الرياضيات. يمكنني مساعدتك في فهم المفاهيم الرياضية، 
                        حل المسائل، تحليل الصور المتعلقة بالرياضيات، والإجابة على أسئلتك.
                    </div>
                    <div class="message-time">
                        <i class="far fa-clock"></i> الآن
                    </div>
                </div>
            </div>
            
            <div class="chat-input-container">
                <div class="input-wrapper">
                    <input type="text" class="chat-input" id="message-input" placeholder="اكتب سؤالك الرياضي هنا..." autofocus>
                    <div class="input-actions">
                        <button class="input-btn" id="math-keyboard-btn" title="لوحة مفاتيح الرياضيات">
                            <i class="fas fa-square-root-alt"></i>
                        </button>
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

    <!-- لوحة مفاتيح الرياضيات -->
    <div class="math-keyboard" id="math-keyboard">
        <div class="keyboard-header">
            <h3 class="keyboard-title">لوحة مفاتيح الرياضيات الشاملة</h3>
            <button class="keyboard-close" id="keyboard-close">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <div class="keyboard-categories" id="keyboard-categories">
            <!-- سيتم إضافة الأقسام هنا ديناميكياً -->
        </div>
        
        <div class="keyboard-grid" id="keyboard-grid">
            <!-- سيتم إضافة الرموز هنا ديناميكياً -->
        </div>
        
        <div class="keyboard-description" id="keyboard-description">
            اختر رمزاً أو معادلة لرؤية وصفها هنا. استخدم الأزرار الخاصة للتحكم بالنص.
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
                    <h4 style="color: var(--gold); margin-bottom: 10px;">مساعد الرياضيات الذكي</h4>
                    <p style="margin-bottom: 15px;">
                        أنا مساعد ذكي متخصص في مجال الرياضيات. يمكنني مساعدتك في فهم المفاهيم الرياضية، 
                        حل المسائل، تحليل الصور المتعلقة بالرياضيات، والإجابة على أسئلتك.
                    </p>
                    <h4 style="color: var(--gold); margin-bottom: 10px;">الميزات المتاحة:</h4>
                    <ul style="margin-right: 15px;">
                        <li>شرح المفاهيم الرياضية الأساسية والمتقدمة</li>
                        <li>حل المعادلات والمسائل الرياضية</li>
                        <li>تحليل الصور المتعلقة بالرياضيات (رسوم بيانية، أشكال هندسية، إلخ)</li>
                        <li>تفسير النظريات الرياضية وإثباتها</li>
                        <li>الإجابة على أسئلة الرياضيات العامة</li>
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
        const mathKeyboardBtn = document.getElementById('math-keyboard-btn');
        const mathKeyboard = document.getElementById('math-keyboard');
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
        const keyboardClose = document.getElementById('keyboard-close');
        const keyboardCategories = document.getElementById('keyboard-categories');
        const keyboardGrid = document.getElementById('keyboard-grid');
        const keyboardDescription = document.getElementById('keyboard-description');
        const selectedSymbolsBar = document.getElementById('selected-symbols-bar');
        const equationPreview = document.getElementById('equation-preview');
        const insertBtn = document.getElementById('insert-btn');
        const clearBtn = document.getElementById('clear-btn');
        const backspaceBtn = document.getElementById('backspace-btn');

        // Math responses
        const mathResponses = [
            "هذا سؤال ممتاز! دعني أوضح لك ذلك...",
            "سأشرح لك هذا المفهوم الرياضي بالتفصيل...",
            "هذه مسألة رياضية رائعة، إليك الحل...",
            "دعني أقدم لك تفسيراً شاملاً لهذه النظرية الرياضية...",
            "هذا مفهوم أساسي في الرياضيات، سأشرحه لك بطريقة مبسطة...",
            "لتحليل هذه المسألة، نحتاج إلى تطبيق المبادئ الرياضية التالية...",
            "هذا السؤال يتعلق بفرع مهم من فروع الرياضيات، دعني أوضح...",
            "بناءً على الصورة التي رفعتها، يمكنني تحليل المحتوى الرياضي كالتالي..."
        ];

        // Current selected image
        let currentSelectedImage = null;

        // بيانات لوحة مفاتيح الرياضيات
        const mathCategories = [
            {
                id: "algebra",
                name: "جبر",
                icon: "𝑥"
            },
            {
                id: "geometry",
                name: "هندسة",
                icon: "△"
            },
            {
                id: "trigonometry",
                name: "مثلثات",
                icon: "θ"
            },
            {
                id: "calculus",
                name: "تفاضل وتكامل",
                icon: "∫"
            },
            {
                id: "statistics",
                name: "إحصاء",
                icon: "σ"
            },
            {
                id: "sets",
                name: "نظرية المجموعات",
                icon: "∈"
            },
            {
                id: "logic",
                name: "منطق رياضي",
                icon: "∧"
            },
            {
                id: "arrows",
                name: "أسهم",
                icon: "→"
            },
            {
                id: "operators",
                name: "معاملات",
                icon: "±"
            },
            {
                id: "constants",
                name: "ثوابت رياضية",
                icon: "π"
            },
            {
                id: "equations",
                name: "معادلات شائعة",
                icon: "="
            },
            {
                id: "matrices",
                name: "مصفوفات",
                icon: "[ ]"
            }
        ];

        const mathSymbols = {
            algebra: [
                { symbol: "𝑥", name: "متغير", description: "متغير جبري" },
                { symbol: "𝑦", name: "متغير", description: "متغير جبري" },
                { symbol: "𝑧", name: "متغير", description: "متغير جبري" },
                { symbol: "𝑎", name: "ثابت", description: "ثابت جبري" },
                { symbol: "𝑏", name: "ثابت", description: "ثابت جبري" },
                { symbol: "𝑐", name: "ثابت", description: "ثابت جبري" },
                { symbol: "𝑛", name: "عدد صحيح", description: "عدد صحيح" },
                { symbol: "𝑚", name: "عدد صحيح", description: "عدد صحيح" },
                { symbol: "𝑘", name: "ثابت", description: "ثابت رياضي" },
                { symbol: "𝑓(𝑥)", name: "دالة", description: "دالة في المتغير 𝑥" },
                { symbol: "𝑔(𝑥)", name: "دالة", description: "دالة في المتغير 𝑥" },
                { symbol: "ℎ(𝑥)", name: "دالة", description: "دالة في المتغير 𝑥" },
                { symbol: "𝑝(𝑥)", name: "كثير حدود", description: "كثير حدود في 𝑥" },
                { symbol: "𝑞(𝑥)", name: "كثير حدود", description: "كثير حدود في 𝑥" },
                { symbol: "𝑟(𝑥)", name: "دالة كسرية", description: "دالة كسرية في 𝑥" },
                { symbol: "𝑥²", name: "مربع", description: "𝑥 تربيع" },
                { symbol: "𝑥³", name: "مكعب", description: "𝑥 تكعيب" },
                { symbol: "𝑥ⁿ", name: "أس", description: "𝑥 مرفوع للقوة 𝑛" },
                { symbol: "√𝑥", name: "جذر تربيعي", description: "الجذر التربيعي لـ 𝑥" },
                { symbol: "∛𝑥", name: "جذر تكعيبي", description: "الجذر التكعيبي لـ 𝑥" },
                { symbol: "∜𝑥", name: "جذر رابع", description: "الجذر الرابع لـ 𝑥" },
                { symbol: "|𝑥|", name: "قيمة مطلقة", description: "القيمة المطلقة لـ 𝑥" },
                { symbol: "⌊𝑥⌋", name: "أكبر عدد صحيح", description: "أكبر عدد صحيح ≤ 𝑥" },
                { symbol: "⌈𝑥⌉", name: "أصغر عدد صحيح", description: "أصغر عدد صحيح ≥ 𝑥" },
                { symbol: "𝑥!", name: "عاملي", description: "عاملي 𝑥" }
            ],
            geometry: [
                { symbol: "△", name: "مثلث", description: "مثلث" },
                { symbol: "□", name: "مربع", description: "مربع أو مستطيل" },
                { symbol: "○", name: "دائرة", description: "دائرة" },
                { symbol: "∠", name: "زاوية", description: "زاوية" },
                { symbol: "∥", name: "توازي", description: "خطوط متوازية" },
                { symbol: "⊥", name: "تعامد", description: "خطوط متعامدة" },
                { symbol: "≅", name: "تطابق", description: "أشكال متطابقة" },
                { symbol: "∼", name: "تشابه", description: "أشكال متشابهة" },
                { symbol: "π", name: "باي", description: "نسبة محيط الدائرة إلى قطرها" },
                { symbol: "°", name: "درجة", description: "درجة زاوية" },
                { symbol: "′", name: "دقيقة", description: "دقيقة قوسية" },
                { symbol: "″", name: "ثانية", description: "ثانية قوسية" },
                { symbol: "∴", name: "لذلك", description: "لذلك أو إذن" },
                { symbol: "∵", name: "لأن", description: "لأن أو بما أن" },
                { symbol: "∝", name: "تناسب", description: "يتناسب مع" },
                { symbol: "𝐴", name: "مساحة", description: "مساحة الشكل" },
                { symbol: "𝑃", name: "محيط", description: "محيط الشكل" },
                { symbol: "𝑉", name: "حجم", description: "حجم المجسم" },
                { symbol: "𝑆", name: "مساحة سطح", description: "مساحة سطح المجسم" },
                { symbol: "𝑟", name: "نصف قطر", description: "نصف قطر الدائرة" },
                { symbol: "𝑑", name: "قطر", description: "قطر الدائرة" },
                { symbol: "ℎ", name: "ارتفاع", description: "ارتفاع الشكل" },
                { symbol: "𝑙", name: "طول", description: "طول الشكل" },
                { symbol: "𝑤", name: "عرض", description: "عرض الشكل" },
                { symbol: "𝑏", name: "قاعدة", description: "قاعدة الشكل" }
            ],
            trigonometry: [
                { symbol: "θ", name: "ثيتا", description: "زاوية" },
                { symbol: "φ", name: "فاي", description: "زاوية" },
                { symbol: "α", name: "ألفا", description: "زاوية" },
                { symbol: "β", name: "بيتا", description: "زاوية" },
                { symbol: "γ", name: "جاما", description: "زاوية" },
                { symbol: "sin", name: "جيب", description: "جيب الزاوية" },
                { symbol: "cos", name: "جيب تمام", description: "جيب تمام الزاوية" },
                { symbol: "tan", name: "ظل", description: "ظل الزاوية" },
                { symbol: "cot", name: "ظل تمام", description: "ظل تمام الزاوية" },
                { symbol: "sec", name: "قاطع", description: "قاطع الزاوية" },
                { symbol: "csc", name: "قاطع تمام", description: "قاطع تمام الزاوية" },
                { symbol: "sin⁻¹", name: "جيب معكوس", description: "الجيب العكسي" },
                { symbol: "cos⁻¹", name: "جيب تمام معكوس", description: "جيب التمام العكسي" },
                { symbol: "tan⁻¹", name: "ظل معكوس", description: "الظل العكسي" },
                { symbol: "sinh", name: "جيب زائدي", description: "جيب الزاوية الزائدية" },
                { symbol: "cosh", name: "جيب تمام زائدي", description: "جيب تمام الزاوية الزائدية" },
                { symbol: "tanh", name: "ظل زائدي", description: "ظل الزاوية الزائدية" },
                { symbol: "π", name: "باي", description: "ثابت باي (≈ 3.14159)" },
                { symbol: "τ", name: "تاو", description: "ثابت تاو (2π)" },
                { symbol: "°", name: "درجة", description: "درجة زاوية" },
                { symbol: "rad", name: "راديان", description: "راديان" },
                { symbol: "grad", name: "غراد", description: "غراد" }
            ],
            calculus: [
                { symbol: "∫", name: "تكامل", description: "رمز التكامل" },
                { symbol: "∬", name: "تكامل مزدوج", description: "تكامل مزدوج" },
                { symbol: "∭", name: "تكامل ثلاثي", description: "تكامل ثلاثي" },
                { symbol: "∮", name: "تكامل خطي", description: "تكامل على مسار مغلق" },
                { symbol: "𝑑", name: "تفاضل", description: "رمز التفاضل" },
                { symbol: "∂", name: "مشتقة جزئية", description: "مشتقة جزئية" },
                { symbol: "𝑑𝑦/𝑑𝑥", name: "مشتقة", description: "مشتقة 𝑦 بالنسبة لـ 𝑥" },
                { symbol: "𝑓′(𝑥)", name: "مشتقة", description: "مشتقة الدالة 𝑓" },
                { symbol: "𝑓″(𝑥)", name: "مشتقة ثانية", description: "المشتقة الثانية للدالة 𝑓" },
                { symbol: "𝑓‴(𝑥)", name: "مشتقة ثالثة", description: "المشتقة الثالثة للدالة 𝑓" },
                { symbol: "𝑓⁽ⁿ⁾(𝑥)", name: "مشتقة نونية", description: "المشتقة النونية للدالة 𝑓" },
                { symbol: "lim", name: "نهاية", description: "نهاية الدالة" },
                { symbol: "lim┬(𝑥→𝑎)", name: "نهاية عند 𝑎", description: "نهاية الدالة عندما 𝑥 تؤول إلى 𝑎" },
                { symbol: "∑", name: "مجموع", description: "رمز المجموع" },
                { symbol: "∏", name: "حاصل ضرب", description: "رمز حاصل الضرب" },
                { symbol: "∇", name: "نابلا", description: "عامل التفاضل المتجهي" },
                { symbol: "∆", name: "دلتا", description: "فرق أو تغير" },
                { symbol: "∞", name: "لانهاية", description: "لانهاية" },
                { symbol: "→", name: "يؤول إلى", description: "يؤول إلى أو يقترب من" }
            ],
            statistics: [
                { symbol: "𝑥̄", name: "متوسط", description: "المتوسط الحسابي" },
                { symbol: "μ", name: "متوسط مجتمع", description: "متوسط المجتمع" },
                { symbol: "σ", name: "انحراف معياري", description: "الانحراف المعياري" },
                { symbol: "σ²", name: "تباين", description: "التباين" },
                { symbol: "𝑠", name: "انحراف معياري عينة", description: "الانحراف المعياري للعينة" },
                { symbol: "𝑠²", name: "تباين عينة", description: "تباين العينة" },
                { symbol: "ρ", name: "معامل ارتباط", description: "معامل الارتباط" },
                { symbol: "𝑟", name: "معامل ارتباط عينة", description: "معامل ارتباط العينة" },
                { symbol: "𝑃(𝐴)", name: "احتمال", description: "احتمال وقوع الحدث 𝐴" },
                { symbol: "𝐸(𝑋)", name: "القيمة المتوقعة", description: "القيمة المتوقعة للمتغير العشوائي 𝑋" },
                { symbol: "𝑉(𝑋)", name: "تباين", description: "تباين المتغير العشوائي 𝑋" },
                { symbol: "∼", name: "توزيع", description: "يتبع توزيعاً" },
                { symbol: "𝑁(μ,σ²)", name: "توزيع طبيعي", description: "التوزيع الطبيعي" },
                { symbol: "𝐵(𝑛,𝑝)", name: "توزيع ثنائي", description: "التوزيع الثنائي" },
                { symbol: "𝑃(λ)", name: "توزيع بواسون", description: "توزيع بواسون" },
                { symbol: "χ²", name: "توزيع كاي مربع", description: "توزيع كاي مربع" },
                { symbol: "𝑡", name: "توزيع t", description: "توزيع t للطالب" },
                { symbol: "𝐹", name: "توزيع F", description: "توزيع F" },
                { symbol: "𝐻₀", name: "فرضية العدم", description: "فرضية العدم" },
                { symbol: "𝐻₁", name: "فرضية بديلة", description: "الفرضية البديلة" },
                { symbol: "𝛼", name: "مستوى الدلالة", description: "مستوى الدلالة الإحصائية" },
                { symbol: "𝑝", name: "قيمة p", description: "قيمة الاحتمال في الاختبار الإحصائي" }
            ],
            sets: [
                { symbol: "∈", name: "ينتمي", description: "ينتمي إلى مجموعة" },
                { symbol: "∉", name: "لا ينتمي", description: "لا ينتمي إلى مجموعة" },
                { symbol: "⊂", name: "مجموعة جزئية", description: "مجموعة جزئية من" },
                { symbol: "⊆", name: "مجموعة جزئية أو تساوي", description: "مجموعة جزئية من أو تساوي" },
                { symbol: "⊄", name: "ليست مجموعة جزئية", description: "ليست مجموعة جزئية من" },
                { symbol: "⊃", name: "مجموعة شاملة", description: "مجموعة شاملة لـ" },
                { symbol: "⊇", name: "مجموعة شاملة أو تساوي", description: "مجموعة شاملة لـ أو تساوي" },
                { symbol: "∪", name: "اتحاد", description: "اتحاد مجموعتين" },
                { symbol: "∩", name: "تقاطع", description: "تقاطع مجموعتين" },
                { symbol: "∖", name: "فرق", description: "فرق بين مجموعتين" },
                { symbol: "∆", name: "فرق متماثل", description: "الفرق المتماثل بين مجموعتين" },
                { symbol: "∅", name: "مجموعة خالية", description: "المجموعة الخالية" },
                { symbol: "ℕ", name: "الأعداد الطبيعية", description: "مجموعة الأعداد الطبيعية" },
                { symbol: "ℤ", name: "الأعداد الصحيحة", description: "مجموعة الأعداد الصحيحة" },
                { symbol: "ℚ", name: "الأعداد النسبية", description: "مجموعة الأعداد النسبية" },
                { symbol: "ℝ", name: "الأعداد الحقيقية", description: "مجموعة الأعداد الحقيقية" },
                { symbol: "ℂ", name: "الأعداد المركبة", description: "مجموعة الأعداد المركبة" },
                { symbol: "|𝐴|", name: "عدد العناصر", description: "عدد عناصر المجموعة 𝐴" },
                { symbol: "𝑃(𝐴)", name: "مجموعة القوى", description: "مجموعة كل المجموعات الجزئية من 𝐴" },
                { symbol: "𝐴×𝐵", name: "جداء ديكارتي", description: "الجداء الديكارتي للمجموعتين 𝐴 و 𝐵" }
            ],
            logic: [
                { symbol: "∧", name: "و", description: "العامل المنطقي و" },
                { symbol: "∨", name: "أو", description: "العامل المنطقي أو" },
                { symbol: "¬", name: "لا", description: "النفي المنطقي" },
                { symbol: "→", name: "يستلزم", description: "الاستلزام المنطقي" },
                { symbol: "↔", name: "إذا وفقط إذا", description: "التكافؤ المنطقي" },
                { symbol: "∀", name: "لكل", description: "لكل عنصر" },
                { symbol: "∃", name: "يوجد", description: "يوجد على الأقل عنصر واحد" },
                { symbol: "∄", name: "لا يوجد", description: "لا يوجد أي عنصر" },
                { symbol: "∃!", name: "يوجد وحيد", description: "يوجد عنصر واحد فقط" },
                { symbol: "∴", name: "لذلك", description: "لذلك أو إذن" },
                { symbol: "∵", name: "لأن", description: "لأن أو بما أن" },
                { symbol: "⊤", name: "صحيح", description: "القيمة المنطقية صحيح" },
                { symbol: "⊥", name: "خطأ", description: "القيمة المنطقية خطأ" },
                { symbol: "≡", name: "مكافئ", description: "التكافؤ المنطقي" },
                { symbol: "⊢", name: "يستنتج", description: "يستنتج أو يثبت" },
                { symbol: "⊨", name: "ينتج", description: "ينتج منطقياً" }
            ],
            arrows: [
                { symbol: "→", name: "يسار إلى يمين", description: "سهم من اليسار إلى اليمين" },
                { symbol: "←", name: "يمين إلى يسار", description: "سهم من اليمين إلى اليسار" },
                { symbol: "↑", name: "أسفل إلى أعلى", description: "سهم من الأسفل إلى الأعلى" },
                { symbol: "↓", name: "أعلى إلى أسفل", description: "سهم من الأعلى إلى الأسفل" },
                { symbol: "↔", name: "يسار-يمين", description: "سهم في الاتجاهين" },
                { symbol: "↕", name: "أعلى-أسفل", description: "سهم في الاتجاهين عمودياً" },
                { symbol: "⇒", name: "يستلزم", description: "يستلزم منطقياً" },
                { symbol: "⇐", name: "ينتج عن", description: "ينتج عن منطقياً" },
                { symbol: "⇔", name: "يكافئ", description: "يكافئ منطقياً" },
                { symbol: "⟶", name: "يسار إلى يمين طويل", description: "سهم طويل من اليسار إلى اليمين" },
                { symbol: "⟵", name: "يمين إلى يسار طويل", description: "سهم طويل من اليمين إلى اليسار" },
                { symbol: "⟷", name: "يسار-يمين طويل", description: "سهم طويل في الاتجاهين" },
                { symbol: "↦", name: "يعين", description: "يعين أو ينتج" },
                { symbol: "↣", name: "حقنة", description: "دالة حقنة" },
                { symbol: "↠", name: "غامرة", description: "دالة غامرة" },
                { symbol: "⇀", name: "يسار إلى يمين متقطع", description: "سهم متقطع من اليسار إلى اليمين" },
                { symbol: "↼", name: "يمين إلى يسار متقطع", description: "سهم متقطع من اليمين إلى اليسار" },
                { symbol: "⇌", name: "اتزان", description: "اتزان كيميائي أو فيزيائي" }
            ],
            operators: [
                { symbol: "+", name: "جمع", description: "عملية الجمع" },
                { symbol: "−", name: "طرح", description: "عملية الطرح" },
                { symbol: "×", name: "ضرب", description: "عملية الضرب" },
                { symbol: "÷", name: "قسمة", description: "عملية القسمة" },
                { symbol: "±", name: "زائد ناقص", description: "زائد أو ناقص" },
                { symbol: "∓", name: "ناقص زائد", description: "ناقص أو زائد" },
                { symbol: "=", name: "يساوي", description: "يساوي" },
                { symbol: "≠", name: "لا يساوي", description: "لا يساوي" },
                { symbol: "≈", name: "يساوي تقريباً", description: "يساوي تقريباً" },
                { symbol: "≡", name: "مطابق", description: "مطابق أو مكافئ" },
                { symbol: "≢", name: "غير مطابق", description: "غير مطابق" },
                { symbol: "<", name: "أصغر من", description: "أصغر من" },
                { symbol: ">", name: "أكبر من", description: "أكبر من" },
                { symbol: "≤", name: "أصغر أو يساوي", description: "أصغر من أو يساوي" },
                { symbol: "≥", name: "أكبر أو يساوي", description: "أكبر من أو يساوي" },
                { symbol: "≪", name: "أصغر بكثير", description: "أصغر بكثير من" },
                { symbol: "≫", name: "أكبر بكثير", description: "أكبر بكثير من" },
                { symbol: "∝", name: "يتناسب مع", description: "يتناسب مع" },
                { symbol: "∞", name: "لانهاية", description: "لانهاية" },
                { symbol: "∆", name: "تغير", description: "فرق أو تغير" },
                { symbol: "∇", name: "نابلا", description: "عامل التفاضل المتجهي" },
                { symbol: "∂", name: "مشتقة جزئية", description: "مشتقة جزئية" },
                { symbol: "∫", name: "تكامل", description: "تكامل" },
                { symbol: "∮", name: "تكامل خطي", description: "تكامل على مسار مغلق" },
                { symbol: "∑", name: "مجموع", description: "مجموع" },
                { symbol: "∏", name: "حاصل ضرب", description: "حاصل ضرب" }
            ],
            constants: [
                { symbol: "π", name: "باي", description: "نسبة محيط الدائرة إلى قطرها (≈ 3.14159)" },
                { symbol: "𝑒", name: "عدد أويلر", description: "أساس اللوغاريتم الطبيعي (≈ 2.71828)" },
                { symbol: "𝑖", name: "وحدة تخيلية", description: "الجذر التربيعي لـ -1" },
                { symbol: "∞", name: "لانهاية", description: "لانهاية" },
                { symbol: "γ", name: "ثابت أويلر-ماسكيروني", description: "ثابت أويلر-ماسكيروني (≈ 0.57721)" },
                { symbol: "φ", name: "النسبة الذهبية", description: "النسبة الذهبية (≈ 1.61803)" },
                { symbol: "τ", name: "ثابت تاو", description: "ثابت تاو (2π)" },
                { symbol: "ℏ", name: "ثابت بلانك المخفض", description: "ثابت بلانك المخفض" },
                { symbol: "𝑐", name: "سرعة الضوء", description: "سرعة الضوء في الفراغ" },
                { symbol: "𝐺", name: "ثابت الجذب العام", description: "ثابت الجذب العام" },
                { symbol: "𝑔", name: "تسارع الجاذبية", description: "تسارع الجاذبية الأرضية" },
                { symbol: "𝑘", name: "ثابت بولتزمان", description: "ثابت بولتزمان" },
                { symbol: "𝑅", name: "ثابت الغازات", description: "ثابت الغازات العام" },
                { symbol: "𝑁ₐ", name: "عدد أفوجادرو", description: "عدد أفوجادرو" },
                { symbol: "ε₀", name: "سماحية الفراغ", description: "ثابت السماحية الكهربائية للفراغ" },
                { symbol: "μ₀", name: "نفاذية الفراغ", description: "ثابت النفاذية المغناطيسية للفراغ" }
            ],
            equations: [
                { symbol: "𝑎²+𝑏²=𝑐²", name: "نظرية فيثاغورس", description: "في المثلث القائم، مربع الوتر يساوي مجموع مربعي الضلعين الآخرين" },
                { symbol: "𝑒^(𝑖π)+1=0", name: "متطابقة أويلر", description: "متطابقة أويلر الشهيرة" },
                { symbol: "𝐹=𝑚𝑎", name: "قانون نيوتن الثاني", description: "القوة تساوي الكتلة في التسارع" },
                { symbol: "𝐸=𝑚𝑐²", name: "معادلة آينشتاين", description: "تكافؤ الكتلة والطاقة" },
                { symbol: "𝑑=𝑣𝑡", name: "المسافة والسرعة", description: "المسافة تساوي السرعة في الزمن" },
                { symbol: "𝐴=π𝑟²", name: "مساحة الدائرة", description: "مساحة الدائرة تساوي باي في مربع نصف القطر" },
                { symbol: "𝑉=𝐼𝑅", name: "قانون أوم", description: "الجهد يساوي التيار في المقاومة" },
                { symbol: "𝑃=𝑉𝐼", name: "القدرة الكهربائية", description: "القدرة تساوي الجهد في التيار" },
                { symbol: "𝑆=𝑢𝑡+½𝑎𝑡²", name: "حركة مستقيمة", description: "الإزاحة في الحركة المتسارعة" },
                { symbol: "𝑣=𝑢+𝑎𝑡", name: "السرعة النهائية", description: "السرعة النهائية في الحركة المتسارعة" },
                { symbol: "𝑣²=𝑢²+2𝑎𝑠", name: "معادلة الحركة", description: "علاقة بين السرعة والإزاحة" },
                { symbol: "𝐹=𝐺(𝑚₁𝑚₂)/𝑟²", name: "قانون الجذب العام", description: "قانون الجذب العام لنيوتن" },
                { symbol: "𝑃𝑉=𝑛𝑅𝑇", name: "قانون الغازات المثالية", description: "قانون الغازات المثالية" },
                { symbol: "𝐸=ℎ𝑓", name: "طاقة الفوتون", description: "طاقة الفوتون في ميكانيكا الكم" },
                { symbol: "λ=ℎ/𝑝", name: "علاقة دي برولي", description: "الطول الموجي للجسيمات في ميكانيكا الكم" }
            ],
            matrices: [
                { symbol: "[ ]", name: "مصفوفة", description: "مصفوفة" },
                { symbol: "𝐴", name: "مصفوفة", description: "مصفوفة 𝐴" },
                { symbol: "𝐵", name: "مصفوفة", description: "مصفوفة 𝐵" },
                { symbol: "𝐶", name: "مصفوفة", description: "مصفوفة 𝐶" },
                { symbol: "𝐼", name: "مصفوفة وحدة", description: "المصفوفة الوحدة" },
                { symbol: "𝐴ᵀ", name: "منقول المصفوفة", description: "منقول المصفوفة 𝐴" },
                { symbol: "𝐴⁻¹", name: "معكوس المصفوفة", description: "معكوس المصفوفة 𝐴" },
                { symbol: "det(𝐴)", name: "محدد المصفوفة", description: "محدد المصفوفة 𝐴" },
                { symbol: "tr(𝐴)", name: "أثر المصفوفة", description: "أثر المصفوفة 𝐴" },
                { symbol: "rank(𝐴)", name: "رتبة المصفوفة", description: "رتبة المصفوفة 𝐴" },
                { symbol: "𝐴𝐵", name: "جداء المصفوفات", description: "جداء المصفوفتين 𝐴 و 𝐵" },
                { symbol: "𝐴⊗𝐵", name: "جداء كرونكر", description: "جداء كرونكر للمصفوفتين 𝐴 و 𝐵" },
                { symbol: "𝐴⊕𝐵", name: "مجموع مباشر", description: "المجموع المباشر للمصفوفتين 𝐴 و 𝐵" },
                { symbol: "𝐴⁺", name: "معكوس مور-بنروز", description: "معكوس مور-بنروز للمصفوفة 𝐴" },
                { symbol: "‖𝐴‖", name: "قاعدة المصفوفة", description: "قاعدة المصفوفة 𝐴" },
                { symbol: "𝐴≥0", name: "مصفوفة موجبة", description: "المصفوفة 𝐴 موجبة" },
                { symbol: "𝐴>0", name: "مصفوفة موجبة قطعاً", description: "المصفوفة 𝐴 موجبة قطعاً" }
            ]
        };

        // المتغيرات الحالية
        let currentCategory = "algebra";
        let selectedSymbols = [];

        // Initialize the app
        function initApp() {
            // Initialize math keyboard
            initMathKeyboard();
            
            // Ensure the chat is scrolled to bottom on load
            setTimeout(() => {
                scrollToBottom();
            }, 100);
        }

        // Initialize math keyboard
        function initMathKeyboard() {
            // إضافة الأقسام
            keyboardCategories.innerHTML = '';
            
            mathCategories.forEach(category => {
                const categoryBtn = document.createElement('button');
                categoryBtn.className = 'category-btn';
                categoryBtn.dataset.id = category.id;
                categoryBtn.innerHTML = `<span>${category.icon}</span> ${category.name}`;
                
                if (category.id === currentCategory) {
                    categoryBtn.classList.add('active');
                }
                
                categoryBtn.addEventListener('click', () => {
                    selectCategory(category.id);
                });
                
                keyboardCategories.appendChild(categoryBtn);
            });
            
            // تحميل الرموز للقسم الحالي
            loadCategorySymbols(currentCategory);
        }

        // اختيار قسم في لوحة المفاتيح
        function selectCategory(categoryId) {
            currentCategory = categoryId;
            
            // تحديث الأزرار النشطة
            document.querySelectorAll('.category-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            
            const activeBtn = document.querySelector(`.category-btn[data-id="${categoryId}"]`);
            if (activeBtn) {
                activeBtn.classList.add('active');
            }
            
            // تحميل الرموز
            loadCategorySymbols(categoryId);
        }

        // تحميل رموز القسم
        function loadCategorySymbols(categoryId) {
            keyboardGrid.innerHTML = '';
            
            const symbols = mathSymbols[categoryId];
            
            if (symbols) {
                symbols.forEach(symbol => {
                    const symbolBtn = document.createElement('button');
                    symbolBtn.className = 'keyboard-btn';
                    symbolBtn.textContent = symbol.symbol;
                    symbolBtn.title = symbol.name;
                    
                    symbolBtn.addEventListener('click', () => {
                        keyboardDescription.textContent = `${symbol.name}: ${symbol.description}`;
                        addSymbolToBar(symbol);
                    });
                    
                    symbolBtn.addEventListener('mouseenter', () => {
                        keyboardDescription.textContent = `${symbol.name}: ${symbol.description}`;
                    });
                    
                    keyboardGrid.appendChild(symbolBtn);
                });
            }
            
            // إضافة أزرار خاصة
            const specialButtons = [
                { symbol: "إغلاق", name: "إغلاق", class: "special xlarge", action: () => toggleKeyboard() }
            ];
            
            specialButtons.forEach(btn => {
                const specialBtn = document.createElement('button');
                specialBtn.className = `keyboard-btn ${btn.class}`;
                specialBtn.textContent = btn.symbol;
                specialBtn.title = btn.name;
                
                specialBtn.addEventListener('click', btn.action);
                
                keyboardGrid.appendChild(specialBtn);
            });
        }

        // إضافة رمز إلى شريط الرموز المحددة
        function addSymbolToBar(symbol) {
            selectedSymbols.push(symbol);
            updateEquationPreview();
            showSelectedSymbolsBar();
        }

        // تحديث عرض المعادلة
        function updateEquationPreview() {
            equationPreview.textContent = selectedSymbols.map(s => s.symbol).join(' ');
        }

        // إظهار شريط الرموز المحددة
        function showSelectedSymbolsBar() {
            selectedSymbolsBar.classList.add('active');
        }

        // إخفاء شريط الرموز المحددة
        function hideSelectedSymbolsBar() {
            selectedSymbolsBar.classList.remove('active');
        }

        // إدراج الرموز في حقل الإدخال
        function insertSymbols() {
            if (selectedSymbols.length === 0) return;
            
            const symbolsText = selectedSymbols.map(s => s.symbol).join(' ');
            
            // إدراج النص في حقل الإدخال
            const currentValue = messageInput.value;
            const cursorPosition = messageInput.selectionStart;
            
            messageInput.value = currentValue.substring(0, cursorPosition) + 
                                symbolsText + 
                                currentValue.substring(cursorPosition);
            
            // مسح الرموز بعد الإدراج
            clearSelectedSymbols();
            
            // إعادة التركيز على حقل الإدخال
            messageInput.focus();
        }

        // مسح آخر رمز
        function backspaceSymbol() {
            if (selectedSymbols.length > 0) {
                selectedSymbols.pop();
                updateEquationPreview();
                
                if (selectedSymbols.length === 0) {
                    hideSelectedSymbolsBar();
                }
            }
        }

        // مسح جميع الرموز المحددة
        function clearSelectedSymbols() {
            selectedSymbols = [];
            updateEquationPreview();
            hideSelectedSymbolsBar();
        }

        // فتح/إغلاق لوحة المفاتيح
        function toggleKeyboard() {
            mathKeyboard.classList.toggle('active');
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
                const randomResponse = mathResponses[Math.floor(Math.random() * mathResponses.length)];
                const fullResponse = `${randomResponse}\n\nهذا مجرد نموذج للاستجابة. في التطبيق الحقيقي، سأقوم بتحليل سؤالك وإعطائك إجابة دقيقة ومفصلة بناءً على تخصصي في الرياضيات.`;
                
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
                    "مرحباً بك في شات الذكاء الاصطناعي للرياضيات! 🧮\n" +
                    "أنا مساعدك المتخصص في الرياضيات. يمكنني مساعدتك في فهم المفاهيم الرياضية، " +
                    "حل المسائل، تحليل الصور المتعلقة بالرياضيات، والإجابة على أسئلتك.", 
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
                    `بناءً على الصورة والوصف "${caption}" الذي رفعته، يمكنني تحليل المحتوى الرياضي كالتالي:\n\nهذا مجرد نموذج للاستجابة. في التطبيق الحقيقي، سأقوم بتحليل الصورة باستخدام تقنيات الرؤية الحاسوبية وتقديم تحليل مفصل للمحتوى الرياضي الموجود فيها.` :
                    "بناءً على الصورة التي رفعتها، يمكنني تحليل المحتوى الرياضي كالتالي:\n\nهذا مجرد نموذج للاستجابة. في التطبيق الحقيقي، سأقوم بتحليل الصورة باستخدام تقنيات الرؤية الحاسوبية وتقديم تحليل مفصل للمحتوى الرياضي الموجود فيها.";
                
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
        
        // Math keyboard button
        mathKeyboardBtn.addEventListener('click', toggleKeyboard);
        
        // Keyboard close button
        keyboardClose.addEventListener('click', toggleKeyboard);
        
        // Selected symbols bar buttons
        insertBtn.addEventListener('click', insertSymbols);
        clearBtn.addEventListener('click', clearSelectedSymbols);
        backspaceBtn.addEventListener('click', backspaceSymbol);
        
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
        
        // Initialize the app
        initApp();
    </script>
</body>
</html>