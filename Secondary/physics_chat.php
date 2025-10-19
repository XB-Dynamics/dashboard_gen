
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Physics Chat | شات الذكاء الاصطناعي للفيزياء</title>
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

        /* لوحة مفاتيح الفيزياء */
        .physics-keyboard-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 1000;
            display: none;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        .physics-keyboard-container.active {
            display: flex;
        }

        .physics-keyboard {
            width: 100%;
            max-width: 500px;
            max-height: 70vh;
            background: var(--bg-gradient-jet);
            border-radius: 16px;
            box-shadow: var(--shadow5);
            border: 2px solid var(--jet);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .keyboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px;
            border-bottom: 1px solid var(--jet);
            background: var(--border-gradient-onyx);
            flex-shrink: 0;
        }

        .keyboard-title {
            font-size: 16px;
            font-weight: 700;
            color: var(--gold);
        }

        .keyboard-close {
            background: none;
            border: none;
            color: var(--light-gray);
            font-size: 18px;
            cursor: pointer;
            transition: var(--transition1);
        }

        .keyboard-close:hover {
            color: var(--gold);
            transform: rotate(90deg);
        }

        .keyboard-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            min-height: 0;
        }

        .keyboard-categories {
            display: flex;
            gap: 8px;
            padding: 12px 16px;
            flex-wrap: nowrap;
            overflow-x: auto;
            border-bottom: 1px solid var(--jet);
            scrollbar-width: thin;
            scrollbar-color: var(--gold) var(--jet);
            direction: ltr;
            flex-shrink: 0;
        }

        .keyboard-categories::-webkit-scrollbar {
            height: 6px;
        }

        .keyboard-categories::-webkit-scrollbar-track {
            background: var(--jet);
            border-radius: 8px;
        }

        .keyboard-categories::-webkit-scrollbar-thumb {
            background: var(--gold);
            border-radius: 8px;
        }

        .category-btn {
            padding: 8px 16px;
            border-radius: 16px;
            border: 1px solid var(--jet);
            background: rgba(255, 255, 255, 0.05);
            color: var(--light-gray);
            cursor: pointer;
            transition: var(--transition1);
            font-size: 12px;
            white-space: nowrap;
            display: flex;
            align-items: center;
            gap: 6px;
            flex-shrink: 0;
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
            flex: 1;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(60px, 1fr));
            gap: 8px;
            padding: 16px;
            overflow-y: auto;
            min-height: 0;
        }

        .keyboard-btn {
            padding: 10px 4px;
            border-radius: 8px;
            border: 1px solid var(--jet);
            background: rgba(255, 255, 255, 0.05);
            color: var(--light-gray);
            cursor: pointer;
            transition: var(--transition1);
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 45px;
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
            border-color: var(--gold);
        }

        .keyboard-controls {
            display: flex;
            gap: 8px;
            padding: 12px 16px;
            border-top: 1px solid var(--jet);
            background: var(--border-gradient-onyx);
            flex-shrink: 0;
        }

        .control-btn {
            padding: 10px 16px;
            border-radius: 8px;
            border: 1px solid var(--jet);
            background: rgba(255, 255, 255, 0.05);
            color: var(--light-gray);
            cursor: pointer;
            transition: var(--transition1);
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            flex: 1;
        }

        .control-btn:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        .control-btn.backspace {
            background: rgba(255, 0, 0, 0.1);
            border-color: rgba(255, 0, 0, 0.3);
        }

        .control-btn.backspace:hover {
            background: rgba(255, 0, 0, 0.2);
        }

        .control-btn.space {
            background: rgba(255, 215, 0, 0.1);
            border-color: rgba(255, 215, 0, 0.3);
        }

        .control-btn.space:hover {
            background: rgba(255, 215, 0, 0.2);
        }

        .keyboard-description {
            padding: 12px 16px;
            background: rgba(0, 0, 0, 0.3);
            font-size: 12px;
            color: var(--light-gray70);
            border-top: 1px solid var(--jet);
            line-height: 1.4;
            flex-shrink: 0;
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
            
            .physics-keyboard {
                max-height: 65vh;
            }
            
            .keyboard-grid {
                grid-template-columns: repeat(auto-fill, minmax(50px, 1fr));
                gap: 6px;
                padding: 12px;
            }
            
            .keyboard-btn {
                padding: 8px 3px;
                min-height: 40px;
                font-size: 12px;
            }
            
            .category-btn {
                padding: 6px 12px;
                font-size: 11px;
            }
            
            .control-btn {
                padding: 8px 12px;
                font-size: 12px;
            }
        }

        @media (max-width: 360px) {
            .header {
                padding: 0 8px;
            }
            
            .logo {
                gap: 6px;
            }
            
            .logo-icon {
                width: 28px;
                height: 28px;
            }
            
            .logo-title {
                font-size: 12px;
            }
            
            .header-actions {
                gap: 4px;
            }
            
            .header-btn {
                width: 28px;
                height: 28px;
            }
            
            .new-chat-btn {
                width: 28px;
                height: 28px;
                padding: 0;
                border-radius: 50%;
            }
            
            .chat-header {
                padding: 8px;
            }
            
            .chat-contact-info {
                gap: 8px;
            }
            
            .chat-contact-avatar {
                width: 32px;
                height: 32px;
            }
            
            .keyboard-grid {
                grid-template-columns: repeat(auto-fill, minmax(45px, 1fr));
            }
            
            .keyboard-btn {
                min-height: 35px;
                font-size: 11px;
            }
        }

        /* تحسينات للأجهزة الصغيرة جداً */
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
            
            .physics-keyboard {
                max-height: 60vh;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="header-container">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-atom"></i>
                </div>
                <div class="logo-text">
                    <span class="logo-title">شات الفيزياء الذكي</span>
                    <span class="logo-subtitle">AI Physics Chat</span>
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
                        <div class="chat-contact-name" id="chat-contact-name">مساعد الفيزياء الذكي</div>
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
                        مرحباً بك في شات الذكاء الاصطناعي للفيزياء! ⚛️<br>
                        أنا مساعدك المتخصص في الفيزياء. يمكنني مساعدتك في فهم المفاهيم الفيزيائية، 
                        حل المسائل، تحليل الصور المتعلقة بالفيزياء، والإجابة على أسئلتك.
                    </div>
                    <div class="message-time">
                        <i class="far fa-clock"></i> الآن
                    </div>
                </div>
            </div>
            
            <div class="chat-input-container">
                <div class="input-wrapper">
                    <input type="text" class="chat-input" id="message-input" placeholder="اكتب سؤالك الفيزيائي هنا..." autofocus>
                    <div class="input-actions">
                        <button class="input-btn" id="physics-keyboard-btn" title="لوحة مفاتيح الفيزياء">
                            <i class="fas fa-rocket"></i>
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

    <!-- لوحة مفاتيح الفيزياء -->
    <div class="physics-keyboard-container" id="physics-keyboard-container">
        <div class="physics-keyboard">
            <div class="keyboard-header">
                <h3 class="keyboard-title">لوحة مفاتيح الفيزياء المتكاملة</h3>
                <button class="keyboard-close" id="keyboard-close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <div class="keyboard-content">
                <div class="keyboard-categories" id="keyboard-categories">
                    <!-- سيتم إضافة الأقسام هنا ديناميكياً -->
                </div>
                
                <div class="keyboard-grid" id="keyboard-grid">
                    <!-- سيتم إضافة الرموز هنا ديناميكياً -->
                </div>
            </div>
            
            <div class="keyboard-controls">
                <button class="control-btn backspace" id="keyboard-backspace">
                    <i class="fas fa-backspace"></i>
                    مسح
                </button>
                <button class="control-btn space" id="keyboard-space">
                    <i class="fas fa-minus"></i>
                    مسافة
                </button>
            </div>
            
            <div class="keyboard-description" id="keyboard-description">
                اختر رمزاً أو معادلة لرؤية وصفها هنا. استخدم الأزرار الخاصة للتحكم بالنص.
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
                    <h4 style="color: var(--gold); margin-bottom: 10px;">مساعد الفيزياء الذكي</h4>
                    <p style="margin-bottom: 15px;">
                        أنا مساعد ذكي متخصص في مجال الفيزياء. يمكنني مساعدتك في فهم المفاهيم الفيزيائية، 
                        حل المسائل، تحليل الصور المتعلقة بالفيزياء، والإجابة على أسئلتك.
                    </p>
                    <h4 style="color: var(--gold); margin-bottom: 10px;">الميزات المتاحة:</h4>
                    <ul style="margin-right: 15px;">
                        <li>شرح المفاهيم الفيزيائية الأساسية والمتقدمة</li>
                        <li>حل المعادلات والمسائل الفيزيائية</li>
                        <li>تحليل الصور المتعلقة بالفيزياء (دوائر، مجالات، إلخ)</li>
                        <li>تفسير الظواهر الفيزيائية وآلياتها</li>
                        <li>الإجابة على أسئلة الفيزياء العامة</li>
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
        const physicsKeyboardBtn = document.getElementById('physics-keyboard-btn');
        const physicsKeyboardContainer = document.getElementById('physics-keyboard-container');
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
        const keyboardBackspace = document.getElementById('keyboard-backspace');
        const keyboardSpace = document.getElementById('keyboard-space');

        // Physics responses
        const physicsResponses = [
            "هذا سؤال ممتاز! دعني أوضح لك ذلك...",
            "سأشرح لك هذا المفهوم الفيزيائي بالتفصيل...",
            "هذه مسألة فيزيائية رائعة، إليك الحل...",
            "دعني أقدم لك تفسيراً شاملاً لهذه الظاهرة الفيزيائية...",
            "هذا مفهوم أساسي في الفيزياء، سأشرحه لك بطريقة مبسطة...",
            "لتحليل هذه المسألة، نحتاج إلى تطبيق المبادئ الفيزيائية التالية...",
            "هذا السؤال يتعلق بفرع مهم من فروع الفيزياء، دعني أوضح...",
            "بناءً على الصورة التي رفعتها، يمكنني تحليل المحتوى الفيزيائي كالتالي..."
        ];

        // Current selected image
        let currentSelectedImage = null;

        // بيانات لوحة مفاتيح الفيزياء الكاملة والموسعة
        const physicsCategories = [
            {
                id: "mechanics",
                name: "الميكانيكا",
                icon: "⚙️"
            },
            {
                id: "electricity",
                name: "الكهرباء",
                icon: "⚡"
            },
            {
                id: "magnetism",
                name: "المغناطيسية",
                icon: "🧲"
            },
            {
                id: "thermodynamics",
                name: "الديناميكا الحرارية",
                icon: "🌡️"
            },
            {
                id: "optics",
                name: "البصريات",
                icon: "🔍"
            },
            {
                id: "quantum",
                name: "ميكانيكا الكم",
                icon: "⚛️"
            },
            {
                id: "relativity",
                name: "النسبية",
                icon: "🕰️"
            },
            {
                id: "waves",
                name: "الموجات",
                icon: "🌊"
            },
            {
                id: "particles",
                name: "الجسيمات",
                icon: "e⁻"
            },
            {
                id: "constants",
                name: "ثوابت فيزيائية",
                icon: "π"
            },
            {
                id: "astrophysics",
                name: "فيزياء فلكية",
                icon: "🌌"
            },
            {
                id: "nuclear",
                name: "فيزياء نووية",
                icon: "☢️"
            }
        ];

        const physicsSymbols = {
            mechanics: [
                { symbol: "F", name: "قوة", description: "القوة - وحدة القياس: نيوتن (N)" },
                { symbol: "m", name: "كتلة", description: "الكتلة - وحدة القياس: كيلوجرام (kg)" },
                { symbol: "a", name: "تسارع", description: "التسارع - وحدة القياس: م/ث²" },
                { symbol: "v", name: "سرعة", description: "السرعة - وحدة القياس: م/ث" },
                { symbol: "p", name: "زخم", description: "الزخم - وحدة القياس: كجم.م/ث" },
                { symbol: "g", name: "تسارع الجاذبية", description: "تسارع الجاذبية الأرضية ≈ 9.8 م/ث²" },
                { symbol: "W", name: "شغل", description: "الشغل - وحدة القياس: جول (J)" },
                { symbol: "P", name: "طاقة وضع", description: "طاقة الوضع - وحدة القياس: جول (J)" },
                { symbol: "K", name: "طاقة حركية", description: "الطاقة الحركية - وحدة القياس: جول (J)" },
                { symbol: "τ", name: "عزم الدوران", description: "عزم الدوران - وحدة القياس: نيوتن.م" },
                { symbol: "I", name: "عطالة", description: "العطالة - وحدة القياس: كجم.م²" },
                { symbol: "ω", name: "سرعة زاوية", description: "السرعة الزاوية - وحدة القياس: راديان/ث" },
                { symbol: "α", name: "تسارع زاوي", description: "التسارع الزاوي - وحدة القياس: راديان/ث²" },
                { symbol: "F = ma", name: "قانون نيوتن الثاني", description: "القوة = الكتلة × التسارع" },
                { symbol: "p = mv", name: "الزخم", description: "الزخم = الكتلة × السرعة" },
                { symbol: "W = F⋅d", name: "الشغل", description: "الشغل = القوة × المسافة" },
                { symbol: "P = mgh", name: "طاقة وضع", description: "طاقة الوضع = الكتلة × الجاذبية × الارتفاع" },
                { symbol: "K = ½mv²", name: "طاقة حركية", description: "الطاقة الحركية = نصف الكتلة × مربع السرعة" }
            ],
            electricity: [
                { symbol: "Q", name: "شحنة", description: "الشحنة الكهربائية - وحدة القياس: كولوم (C)" },
                { symbol: "I", name: "تيار", description: "شدة التيار - وحدة القياس: أمبير (A)" },
                { symbol: "V", name: "جهد", description: "الجهد الكهربائي - وحدة القياس: فولت (V)" },
                { symbol: "R", name: "مقاومة", description: "المقاومة الكهربائية - وحدة القياس: أوم (Ω)" },
                { symbol: "C", name: "سعة", description: "السعة الكهربائية - وحدة القياس: فاراد (F)" },
                { symbol: "E", name: "مجال كهربائي", description: "المجال الكهربائي - وحدة القياس: فولت/م" },
                { symbol: "ρ", name: "مقاومية", description: "المقاومية النوعية - وحدة القياس: أوم.م" },
                { symbol: "P", name: "استطاعة", description: "الاستطاعة الكهربائية - وحدة القياس: واط (W)" },
                { symbol: "V = IR", name: "قانون أوم", description: "الجهد = التيار × المقاومة" },
                { symbol: "P = IV", name: "استطاعة كهربائية", description: "الاستطاعة = التيار × الجهد" },
                { symbol: "C = Q/V", name: "السعة", description: "السعة = الشحنة ÷ الجهد" },
                { symbol: "F = kQ₁Q₂/r²", name: "قانون كولوم", description: "قوة التجاذب/التنافر بين شحنتين" },
                { symbol: "E = kQ/r²", name: "مجال كهربائي", description: "المجال الكهربائي لشحنة نقطية" },
                { symbol: "U = ½CV²", name: "طاقة مكثف", description: "طاقة المكثف = نصف السعة × مربع الجهد" }
            ],
            magnetism: [
                { symbol: "B", name: "مجال مغناطيسي", description: "المجال المغناطيسي - وحدة القياس: تسلا (T)" },
                { symbol: "H", name: "شدة المجال المغناطيسي", description: "شدة المجال المغناطيسي - وحدة القياس: أمبير/م" },
                { symbol: "Φ", name: "فيض مغناطيسي", description: "الفيض المغناطيسي - وحدة القياس: ويبر (Wb)" },
                { symbol: "μ", name: "نفاذية", description: "النفاذية المغناطيسية - وحدة القياس: هنري/م" },
                { symbol: "F = qvB", name: "قوة لورنتز", description: "قوة لورنتز على شحنة متحركة" },
                { symbol: "F = BIL", name: "قوة على موصل", description: "قوة على موصل يحمل تياراً" },
                { symbol: "B = μ₀I/2πr", name: "قانون بيوت سافار", description: "مجال مغناطيسي حول سلك مستقيم" },
                { symbol: "Φ = BA", name: "فيض مغناطيسي", description: "الفيض المغناطيسي = المجال × المساحة" },
                { symbol: "ε = -dΦ/dt", name: "قانون فاراداي", description: "القوة الدافعة الكهربائية المستحثة" }
            ],
            thermodynamics: [
                { symbol: "T", name: "حرارة", description: "درجة الحرارة - وحدة القياس: كلفن (K)" },
                { symbol: "Q", name: "حرارة", description: "كمية الحرارة - وحدة القياس: جول (J)" },
                { symbol: "S", name: "إنتروبيا", description: "الإنتروبيا - وحدة القياس: جول/كلفن" },
                { symbol: "U", name: "طاقة داخلية", description: "الطاقة الداخلية - وحدة القياس: جول (J)" },
                { symbol: "H", name: "إنثالبي", description: "الإنثالبي - وحدة القياس: جول (J)" },
                { symbol: "P", name: "ضغط", description: "الضغط - وحدة القياس: باسكال (Pa)" },
                { symbol: "V", name: "حجم", description: "الحجم - وحدة القياس: متر مكعب (m³)" },
                { symbol: "n", name: "عدد المولات", description: "عدد المولات - وحدة القياس: مول" },
                { symbol: "R", name: "ثابت الغازات", description: "ثابت الغازات العام ≈ 8.314 جول/مول.كلفن" },
                { symbol: "k", name: "ثابت بولتزمان", description: "ثابت بولتزمان ≈ 1.38×10⁻²³ جول/كلفن" },
                { symbol: "PV = nRT", name: "قانون الغازات المثالية", description: "قانون الغازات المثالية" },
                { symbol: "ΔU = Q - W", name: "القانون الأول", description: "القانون الأول للديناميكا الحرارية" },
                { symbol: "ΔS ≥ 0", name: "القانون الثاني", description: "القانون الثاني للديناميكا الحرارية" },
                { symbol: "W = PΔV", name: "شغل التمدد", description: "شغل تمدد الغاز" },
                { symbol: "η = 1 - T₂/T₁", name: "كفاءة كارنو", description: "كفاءة دورة كارنو" }
            ],
            optics: [
                { symbol: "f", name: "بعد بؤري", description: "البعد البؤري - وحدة القياس: متر (m)" },
                { symbol: "λ", name: "طول موجة", description: "طول الموجة - وحدة القياس: متر (m)" },
                { symbol: "ν", name: "تردد", description: "التردد - وحدة القياس: هرتز (Hz)" },
                { symbol: "c", name: "سرعة الضوء", description: "سرعة الضوء في الفراغ ≈ 3×10⁸ م/ث" },
                { symbol: "n", name: "معامل انكسار", description: "معامل الانكسار - بدون وحدة" },
                { symbol: "θ", name: "زاوية", description: "الزاوية - وحدة القياس: راديان أو درجة" },
                { symbol: "1/f = 1/p + 1/q", name: "معادلة العدسات", description: "معادلة العدسات الرقيقة" },
                { symbol: "n₁sinθ₁ = n₂sinθ₂", name: "قانون سنيل", description: "قانون الانكسار (قانون سنيل)" },
                { symbol: "E = hν", name: "طاقة الفوتون", description: "طاقة الفوتون = ثابت بلانك × التردد" },
                { symbol: "d sinθ = mλ", name: "حيود الشق", description: "حيود الشق المفرد" },
                { symbol: "I = I₀cos²θ", name: "قانون مالوس", description: "شدة الضوء المستقطب" }
            ],
            quantum: [
                { symbol: "ψ", name: "دالة موجية", description: "الدالة الموجية في ميكانيكا الكم" },
                { symbol: "ħ", name: "ثابت بلانك المخفض", description: "ثابت بلانك المخفض ≈ 1.055×10⁻³⁴ جول.ث" },
                { symbol: "H", name: "هاملتوني", description: "المؤثر الهاملتوني في ميكانيكا الكم" },
                { symbol: "ΔxΔp ≥ ħ/2", name: "مبدأ الريبة", description: "مبدأ الريبة لهايزنبرغ" },
                { symbol: "E = ħω", name: "طاقة الكم", description: "طاقة الكم للفوتون" },
                { symbol: "Ψ(x,t)", name: "دالة الموجة", description: "دالة الموجة في ميكانيكا الكم" },
                { symbol: "Ĥψ = Eψ", name: "معادلة شرودنغر", description: "معادلة شرودنغر المستقلة عن الزمن" },
                { symbol: "⟨A⟩ = ⟨ψ|A|ψ⟩", name: "القيمة المتوقعة", description: "القيمة المتوقعة للمؤثر" },
                { symbol: "[x,p] = iħ", name: "علاقة التبادل", description: "علاقة التبادل للموقع والزخم" }
            ],
            relativity: [
                { symbol: "γ", name: "معامل لورنتز", description: "معامل لورنتز في النسبية الخاصة" },
                { symbol: "β", name: "السرعة النسبية", description: "السرعة النسبية = v/c" },
                { symbol: "c", name: "سرعة الضوء", description: "سرعة الضوء في الفراغ ≈ 3×10⁸ م/ث" },
                { symbol: "G", name: "ثابت الجاذبية", description: "ثابت الجاذبية العام ≈ 6.674×10⁻¹¹ نيوتن.م²/كجم²" },
                { symbol: "E = mc²", name: "تكافؤ الكتلة والطاقة", description: "معادلة آينشتاين الشهيرة" },
                { symbol: "γ = 1/√(1-β²)", name: "معامل لورنتز", description: "معامل لورنتز في النسبية الخاصة" },
                { symbol: "Δt = γΔt₀", name: "تمدد الزمن", description: "تمدد الزمن في النسبية الخاصة" },
                { symbol: "L = L₀/γ", name: "انكماش الطول", description: "انكماش الطول في النسبية الخاصة" },
                { symbol: "Gμν = 8πGTμν", name: "معادلة آينشتاين", description: "معادلة آينشتاين للمجال" }
            ],
            waves: [
                { symbol: "A", name: "سعة", description: "سعة الموجة - وحدة القياس: متر (m)" },
                { symbol: "λ", name: "طول موجة", description: "طول الموجة - وحدة القياس: متر (m)" },
                { symbol: "ν", name: "تردد", description: "التردد - وحدة القياس: هرتز (Hz)" },
                { symbol: "T", name: "زمن دوري", description: "الزمن الدوري - وحدة القياس: ثانية (s)" },
                { symbol: "k", name: "عدد موجي", description: "العدد الموجي - وحدة القياس: راديان/م" },
                { symbol: "ω", name: "تردد زاوي", description: "التردد الزاوي - وحدة القياس: راديان/ث" },
                { symbol: "v = λν", name: "سرعة الموجة", description: "سرعة الموجة = الطول الموجي × التردد" },
                { symbol: "ω = 2πν", name: "التردد الزاوي", description: "التردد الزاوي = 2π × التردد" },
                { symbol: "k = 2π/λ", name: "العدد الموجي", description: "العدد الموجي = 2π ÷ الطول الموجي" },
                { symbol: "y = A sin(kx - ωt)", name: "موجة جيبية", description: "معادلة الموجة الجيبية" }
            ],
            particles: [
                { symbol: "e⁻", name: "إلكترون", description: "جسيم سالب الشحنة - كتلة: 9.11×10⁻³¹ كجم" },
                { symbol: "p⁺", name: "بروتون", description: "جسيم موجب الشحنة - كتلة: 1.67×10⁻²⁷ كجم" },
                { symbol: "n⁰", name: "نيوترون", description: "جسيم متعادل الشحنة - كتلة: 1.67×10⁻²⁷ كجم" },
                { symbol: "γ", name: "فوتون", description: "جسيم الضوء - كتلة: 0" },
                { symbol: "ν", name: "نيوترينو", description: "جسيم متعادل صغير الكتلة" },
                { symbol: "π", name: "بيون", description: "ميزون بيون" },
                { symbol: "μ", name: "ميون", description: "جسيم ميون" },
                { symbol: "τ", name: "تاو", description: "جسيم تاو" },
                { symbol: "W⁺", name: "بوزون W", description: "بوزون W موجب" },
                { symbol: "Z⁰", name: "بوزون Z", description: "بوزون Z متعادل" },
                { symbol: "H", name: "هيجز", description: "بوزون هيجز" }
            ],
            constants: [
                { symbol: "c", name: "سرعة الضوء", description: "سرعة الضوء في الفراغ ≈ 3×10⁸ م/ث" },
                { symbol: "G", name: "ثابت الجاذبية", description: "ثابت الجاذبية العام ≈ 6.674×10⁻¹¹ نيوتن.م²/كجم²" },
                { symbol: "h", name: "ثابت بلانك", description: "ثابت بلانك ≈ 6.626×10⁻³⁴ جول.ث" },
                { symbol: "ħ", name: "ثابت بلانك المخفض", description: "ثابت بلانك المخفض ≈ 1.055×10⁻³⁴ جول.ث" },
                { symbol: "k", name: "ثابت بولتزمان", description: "ثابت بولتزمان ≈ 1.38×10⁻²³ جول/كلفن" },
                { symbol: "R", name: "ثابت الغازات", description: "ثابت الغازات العام ≈ 8.314 جول/مول.كلفن" },
                { symbol: "Nₐ", name: "عدد أفوجادرو", description: "عدد أفوجادرو ≈ 6.022×10²³ مول⁻¹" },
                { symbol: "ε₀", name: "ثابت السماحية", description: "ثابت السماحية الكهربائية ≈ 8.854×10⁻¹² فاراد/م" },
                { symbol: "μ₀", name: "ثابت النفاذية", description: "ثابت النفاذية المغناطيسية ≈ 4π×10⁻⁷ هنري/م" },
                { symbol: "e", name: "شحنة الإلكترون", description: "شحنة الإلكترون ≈ 1.602×10⁻¹⁹ كولوم" },
                { symbol: "mₑ", name: "كتلة الإلكترون", description: "كتلة الإلكترون ≈ 9.11×10⁻³¹ كجم" },
                { symbol: "mₚ", name: "كتلة البروتون", description: "كتلة البروتون ≈ 1.67×10⁻²⁷ كجم" },
                { symbol: "α", name: "ثابت البناء الدقيق", description: "ثابت البناء الدقيق ≈ 1/137" }
            ],
            astrophysics: [
                { symbol: "M", name: "كتلة نجم", description: "كتلة النجم - وحدة القياس: كيلوجرام" },
                { symbol: "L", name: "لمعان", description: "اللمعان - وحدة القياس: واط" },
                { symbol: "R", name: "نصف قطر", description: "نصف قطر النجم - وحدة القياس: متر" },
                { symbol: "T", name: "حرارة سطح", description: "حرارة سطح النجم - وحدة القياس: كلفن" },
                { symbol: "z", name: "انزياح أحمر", description: "الانزياح الأحمر الكوني" },
                { symbol: "H₀", name: "ثابت هابل", description: "ثابت هابل ≈ 70 كم/ث/ميجا فرسخ" },
                { symbol: "d", name: "مسافة", description: "المسافة في الفلك - وحدة القياس: فرسخ فلكي" },
                { symbol: "M = -2.5 log(L/L₀)", name: "قدر ظاهري", description: "القدر الظاهري للنجم" },
                { symbol: "L = 4πR²σT⁴", name: "لمعان نجم", description: "لمعان النجم حسب قانون ستيفان" }
            ],
            nuclear: [
                { symbol: "A", name: "عدد كتلي", description: "العدد الكتلي للنواة" },
                { symbol: "Z", name: "عدد ذري", description: "العدد الذري (عدد البروتونات)" },
                { symbol: "N", name: "عدد نيوترونات", description: "عدد النيوترونات في النواة" },
                { symbol: "E", name: "طاقة ربط", description: "طاقة الربط النووي - وحدة القياس: إلكترون فولت" },
                { symbol: "λ", name: "ثابت التحلل", description: "ثابت التحلل الإشعاعي" },
                { symbol: "T½", name: "عمر النصف", description: "عمر النصف للنظير المشع" },
                { symbol: "σ", name: "مقطع تصادم", description: "مقطع التصادم النووي - وحدة القياس: بارن" },
                { symbol: "E = Δmc²", name: "طاقة الربط", description: "طاقة الربط النووي = فرق الكتلة × مربع سرعة الضوء" },
                { symbol: "N = N₀e^(-λt)", name: "قانون التحلل", description: "قانون التحلل الإشعاعي" }
            ]
        };

        // Initialize the app
        function initApp() {
            // Initialize physics keyboard
            initPhysicsKeyboard();
            
            // Ensure the chat is scrolled to bottom on load
            setTimeout(() => {
                scrollToBottom();
            }, 100);
        }

        // Initialize physics keyboard
        function initPhysicsKeyboard() {
            // Create category buttons
            physicsCategories.forEach(category => {
                const categoryBtn = document.createElement('button');
                categoryBtn.className = 'category-btn';
                categoryBtn.innerHTML = `${category.icon} ${category.name}`;
                categoryBtn.dataset.category = category.id;
                
                categoryBtn.addEventListener('click', () => {
                    // Remove active class from all buttons
                    document.querySelectorAll('.category-btn').forEach(btn => {
                        btn.classList.remove('active');
                    });
                    
                    // Add active class to clicked button
                    categoryBtn.classList.add('active');
                    
                    // Load symbols for this category
                    loadCategorySymbols(category.id);
                });
                
                keyboardCategories.appendChild(categoryBtn);
            });
            
            // Activate first category by default
            if (physicsCategories.length > 0) {
                const firstCategoryBtn = document.querySelector('.category-btn');
                firstCategoryBtn.classList.add('active');
                loadCategorySymbols(physicsCategories[0].id);
            }
        }

        // Load symbols for a category
        function loadCategorySymbols(categoryId) {
            // Clear current symbols
            keyboardGrid.innerHTML = '';
            
            // Get symbols for this category
            const symbols = physicsSymbols[categoryId];
            
            if (symbols) {
                symbols.forEach(symbol => {
                    const symbolBtn = document.createElement('button');
                    symbolBtn.className = 'keyboard-btn';
                    symbolBtn.textContent = symbol.symbol;
                    symbolBtn.title = symbol.name;
                    
                    symbolBtn.addEventListener('click', () => {
                        // Insert symbol into message input
                        insertSymbol(symbol.symbol);
                        
                        // Update description
                        keyboardDescription.textContent = `${symbol.name}: ${symbol.description}`;
                    });
                    
                    symbolBtn.addEventListener('mouseenter', () => {
                        // Update description on hover
                        keyboardDescription.textContent = `${symbol.name}: ${symbol.description}`;
                    });
                    
                    keyboardGrid.appendChild(symbolBtn);
                });
            }
        }

        // Insert symbol into message input
        function insertSymbol(symbol) {
            const currentValue = messageInput.value;
            const cursorPosition = messageInput.selectionStart;
            
            messageInput.value = currentValue.substring(0, cursorPosition) + 
                                symbol + 
                                currentValue.substring(cursorPosition);
            
            // Set cursor position after inserted symbol
            messageInput.selectionStart = messageInput.selectionEnd = cursorPosition + symbol.length;
            
            // Focus back to input
            messageInput.focus();
        }

        // Handle backspace
        function handleBackspace() {
            const currentValue = messageInput.value;
            const cursorPosition = messageInput.selectionStart;
            
            if (cursorPosition > 0) {
                messageInput.value = currentValue.substring(0, cursorPosition - 1) + 
                                    currentValue.substring(cursorPosition);
                messageInput.selectionStart = messageInput.selectionEnd = cursorPosition - 1;
            }
            
            // Focus back to input
            messageInput.focus();
        }

        // Handle space
        function handleSpace() {
            insertSymbol(' ');
        }

        // Toggle physics keyboard
        function togglePhysicsKeyboard() {
            physicsKeyboardContainer.classList.toggle('active');
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
                const randomResponse = physicsResponses[Math.floor(Math.random() * physicsResponses.length)];
                const fullResponse = `${randomResponse}\n\nهذا مجرد نموذج للاستجابة. في التطبيق الحقيقي، سأقوم بتحليل سؤالك وإعطائك إجابة دقيقة ومفصلة بناءً على تخصصي في الفيزياء.`;
                
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
                    "مرحباً بك في شات الذكاء الاصطناعي للفيزياء! ⚛️\n" +
                    "أنا مساعدك المتخصص في الفيزياء. يمكنني مساعدتك في فهم المفاهيم الفيزيائية، " +
                    "حل المسائل، تحليل الصور المتعلقة بالفيزياء، والإجابة على أسئلتك.", 
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
                    `بناءً على الصورة والوصف "${caption}" الذي رفعته، يمكنني تحليل المحتوى الفيزيائي كالتالي:\n\nهذا مجرد نموذج للاستجابة. في التطبيق الحقيقي، سأقوم بتحليل الصورة باستخدام تقنيات الرؤية الحاسوبية وتقديم تحليل مفصل للمحتوى الفيزيائي الموجود فيها.` :
                    "بناءً على الصورة التي رفعتها، يمكنني تحليل المحتوى الفيزيائي كالتالي:\n\nهذا مجرد نموذج للاستجابة. في التطبيق الحقيقي، سأقوم بتحليل الصورة باستخدام تقنيات الرؤية الحاسوبية وتقديم تحليل مفصل للمحتوى الفيزيائي الموجود فيها.";
                
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
        
        // Physics keyboard button
        physicsKeyboardBtn.addEventListener('click', togglePhysicsKeyboard);
        
        // Keyboard close button
        keyboardClose.addEventListener('click', togglePhysicsKeyboard);
        
        // Keyboard control buttons
        keyboardBackspace.addEventListener('click', handleBackspace);
        keyboardSpace.addEventListener('click', handleSpace);
        
        // Close keyboard when clicking on background
        physicsKeyboardContainer.addEventListener('click', (e) => {
            if (e.target === physicsKeyboardContainer) {
                togglePhysicsKeyboard();
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
        
        // Initialize the app
        initApp();
    </script>
</body>
</html>