
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Science Chat | شات الذكاء الاصطناعي للعلوم</title>
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
            --text-gradient-blue: linear-gradient(to right, hsl(210, 100%, 50%), hsl(190, 100%, 50%));
            
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
            color: var(--blue);
            margin-top: 6px;
            text-align: center;
            font-weight: var(--fw600);
            background: rgba(30, 144, 255, 0.1);
            padding: 5px 8px;
            border-radius: 6px;
            border-right: 2px solid var(--blue);
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

        /* لوحة مفاتيح العلوم */
        .science-keyboard-container {
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

        .science-keyboard-container.active {
            display: flex;
        }

        .science-keyboard {
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
            scrollbar-color: var(--blue) var(--jet);
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
            background: var(--blue);
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
            background: var(--text-gradient-blue);
            color: white;
            border-color: transparent;
            box-shadow: 0 4px 10px rgba(0, 100, 255, 0.3);
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
            background: rgba(0, 100, 255, 0.1);
            border-color: rgba(0, 100, 255, 0.3);
        }

        .control-btn.space:hover {
            background: rgba(0, 100, 255, 0.2);
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
            
            .science-keyboard {
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
            
            .science-keyboard {
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
                    <i class="fas fa-microscope"></i>
                </div>
                <div class="logo-text">
                    <span class="logo-title">شات العلوم الذكي</span>
                    <span class="logo-subtitle">AI Science Chat</span>
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
                        <div class="chat-contact-name" id="chat-contact-name">مساعد العلوم الذكي</div>
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
                        مرحباً بك في شات الذكاء الاصطناعي للعلوم! 🔬<br>
                        أنا مساعدك المتخصص في العلوم العامة. يمكنني مساعدتك في فهم المفاهيم العلمية، 
                        حل المسائل في الفيزياء والكيمياء والأحياء، تحليل الصور المتعلقة بالعلوم، والإجابة على أسئلتك.
                    </div>
                    <div class="message-time">
                        <i class="far fa-clock"></i> الآن
                    </div>
                </div>
            </div>
            
            <div class="chat-input-container">
                <div class="input-wrapper">
                    <input type="text" class="chat-input" id="message-input" placeholder="اكتب سؤالك العلمي هنا..." autofocus>
                    <div class="input-actions">
                        <button class="input-btn" id="science-keyboard-btn" title="لوحة مفاتيح العلوم">
                            <i class="fas fa-atom"></i>
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

    <!-- لوحة مفاتيح العلوم -->
    <div class="science-keyboard-container" id="science-keyboard-container">
        <div class="science-keyboard">
            <div class="keyboard-header">
                <h3 class="keyboard-title">لوحة مفاتيح العلوم المتكاملة</h3>
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
                    <h4 style="color: var(--gold); margin-bottom: 10px;">مساعد العلوم الذكي</h4>
                    <p style="margin-bottom: 15px;">
                        أنا مساعد ذكي متخصص في مجال العلوم العامة. يمكنني مساعدتك في فهم المفاهيم العلمية، 
                        حل المسائل في الفيزياء والكيمياء والأحياء، تحليل الصور المتعلقة بالعلوم، والإجابة على أسئلتك.
                    </p>
                    <h4 style="color: var(--gold); margin-bottom: 10px;">الميزات المتاحة:</h4>
                    <ul style="margin-right: 15px;">
                        <li>شرح المفاهيم العلمية الأساسية والمتقدمة</li>
                        <li>حل المسائل في الفيزياء والكيمياء والأحياء</li>
                        <li>تحليل الصور المتعلقة بالعلوم (تجارب، رسوم بيانية، إلخ)</li>
                        <li>تفسير الظواهر الطبيعية وآلياتها</li>
                        <li>الإجابة على أسئلة العلوم العامة</li>
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
        const scienceKeyboardBtn = document.getElementById('science-keyboard-btn');
        const scienceKeyboardContainer = document.getElementById('science-keyboard-container');
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

        // Science responses
        const scienceResponses = [
            "هذا سؤال ممتاز! دعني أوضح لك ذلك...",
            "سأشرح لك هذا المفهوم العلمي بالتفصيل...",
            "هذه مسألة علمية رائعة، إليك الحل...",
            "دعني أقدم لك تفسيراً شاملاً لهذه الظاهرة العلمية...",
            "هذا مفهوم أساسي في العلوم، سأشرحه لك بطريقة مبسطة...",
            "لتحليل هذه المسألة، نحتاج إلى تطبيق المبادئ العلمية التالية...",
            "هذا السؤال يتعلق بفرع مهم من فروع العلوم، دعني أوضح...",
            "بناءً على الصورة التي رفعتها، يمكنني تحليل المحتوى العلمي كالتالي..."
        ];

        // Current selected image
        let currentSelectedImage = null;

        // بيانات لوحة مفاتيح العلوم الكاملة
        const scienceCategories = [
            {
                id: "physics",
                name: "فيزياء",
                icon: "⚛️"
            },
            {
                id: "chemistry",
                name: "كيمياء",
                icon: "🧪"
            },
            {
                id: "biology",
                name: "أحياء",
                icon: "🧬"
            },
            {
                id: "math",
                name: "رياضيات",
                icon: "π"
            },
            {
                id: "astronomy",
                name: "فلك",
                icon: "🌌"
            },
            {
                id: "units",
                name: "وحدات قياس",
                icon: "📏"
            },
            {
                id: "formulas",
                name: "معادلات شائعة",
                icon: "E=mc²"
            },
            {
                id: "symbols",
                name: "رموز علمية",
                icon: "🔬"
            },
            {
                id: "elements",
                name: "عناصر",
                icon: "H"
            },
            {
                id: "arrows",
                name: "أسهم",
                icon: "→"
            }
        ];

        const scienceSymbols = {
            physics: [
                { symbol: "F", name: "قوة", description: "القوة في الفيزياء" },
                { symbol: "m", name: "كتلة", description: "الكتلة" },
                { symbol: "a", name: "تسارع", description: "التسارع" },
                { symbol: "v", name: "سرعة", description: "السرعة" },
                { symbol: "t", name: "زمن", description: "الزمن" },
                { symbol: "E", name: "طاقة", description: "الطاقة" },
                { symbol: "P", name: "قدرة", description: "القدرة" },
                { symbol: "W", name: "شغل", description: "الشغل" },
                { symbol: "ρ", name: "كثافة", description: "الكثافة" },
                { symbol: "λ", name: "طول موجة", description: "طول الموجة" },
                { symbol: "μ", name: "معامل احتكاك", description: "معامل الاحتكاك" },
                { symbol: "θ", name: "زاوية", description: "الزاوية" },
                { symbol: "ω", name: "سرعة زاوية", description: "السرعة الزاوية" },
                { symbol: "α", name: "تسارع زاوي", description: "التسارع الزاوي" },
                { symbol: "τ", name: "عزم الدوران", description: "عزم الدوران" },
                { symbol: "I", name: "عطالة", description: "العطالة" },
                { symbol: "p", name: "زخم", description: "الزخم" },
                { symbol: "h", name: "ثابت بلانك", description: "ثابت بلانك" },
                { symbol: "c", name: "سرعة الضوء", description: "سرعة الضوء في الفراغ" },
                { symbol: "g", name: "تسارع الجاذبية", description: "تسارع الجاذبية الأرضية" }
            ],
            chemistry: [
                { symbol: "H", name: "هيدروجين", description: "العدد الذري: 1" },
                { symbol: "O", name: "أكسجين", description: "العدد الذري: 8" },
                { symbol: "C", name: "كربون", description: "العدد الذري: 6" },
                { symbol: "N", name: "نيتروجين", description: "العدد الذري: 7" },
                { symbol: "Na", name: "صوديوم", description: "العدد الذري: 11" },
                { symbol: "Cl", name: "كلور", description: "العدد الذري: 17" },
                { symbol: "Fe", name: "حديد", description: "العدد الذري: 26" },
                { symbol: "Cu", name: "نحاس", description: "العدد الذري: 29" },
                { symbol: "Ag", name: "فضة", description: "العدد الذري: 47" },
                { symbol: "Au", name: "ذهب", description: "العدد الذري: 79" },
                { symbol: "H₂O", name: "ماء", description: "الصيغة الكيميائية للماء" },
                { symbol: "CO₂", name: "ثاني أكسيد الكربون", description: "الصيغة الكيميائية لثاني أكسيد الكربون" },
                { symbol: "CH₄", name: "ميثان", description: "الصيغة الكيميائية للميثان" },
                { symbol: "NaCl", name: "ملح الطعام", description: "الصيغة الكيميائية لكلوريد الصوديوم" },
                { symbol: "C₆H₁₂O₆", name: "جلوكوز", description: "الصيغة الكيميائية للجلوكوز" },
                { symbol: "→", name: "ينتج", description: "سهم التفاعل العادي" },
                { symbol: "⇌", name: "توازن", description: "سهم التوازن الكيميائي" },
                { symbol: "↑", name: "غاز", description: "رمز خروج غاز" },
                { symbol: "↓", name: "راسب", description: "رمز تكون راسب" },
                { symbol: "Δ", name: "حرارة", description: "رمز التسخين" }
            ],
            biology: [
                { symbol: "DNA", name: "حمض نووي ريبوزي منقوص الأكسجين", description: "المادة الوراثية" },
                { symbol: "RNA", name: "حمض نووي ريبوزي", description: "الحمض النووي الريبوزي" },
                { symbol: "ATP", name: "أدينوسين ثلاثي الفوسفات", description: "عملة الطاقة في الخلية" },
                { symbol: "pH", name: "درجة الحموضة", description: "مقياس الحموضة والقاعدية" },
                { symbol: "O₂", name: "أكسجين", description: "غاز الأكسجين" },
                { symbol: "CO₂", name: "ثاني أكسيد الكربون", description: "غاز ثاني أكسيد الكربون" },
                { symbol: "H₂O", name: "ماء", description: "الماء" },
                { symbol: "C₆H₁₂O₆", name: "جلوكوز", description: "سكر الجلوكوز" },
                { symbol: "→", name: "ينتج", description: "سهم التفاعل" },
                { symbol: "♀", name: "أنثى", description: "رمز الأنثى" },
                { symbol: "♂", name: "ذكر", description: "رمز الذكر" },
                { symbol: "µ", name: "ميكرو", description: "بادئة الميكرو (10^-6)" },
                { symbol: "n", name: "نانو", description: "بادئة النانو (10^-9)" },
                { symbol: "°C", name: "درجة مئوية", description: "درجة الحرارة المئوية" },
                { symbol: "µg", name: "ميكروجرام", description: "ميكروجرام" },
                { symbol: "mg", name: "مليجرام", description: "مليجرام" },
                { symbol: "g", name: "جرام", description: "جرام" },
                { symbol: "kg", name: "كيلوجرام", description: "كيلوجرام" },
                { symbol: "L", name: "لتر", description: "لتر" },
                { symbol: "mL", name: "مليلتر", description: "مليلتر" }
            ],
            math: [
                { symbol: "π", name: "باي", description: "النسبة بين محيط الدائرة وقطرها" },
                { symbol: "∞", name: "لانهاية", description: "اللانهاية" },
                { symbol: "√", name: "جذر تربيعي", description: "الجذر التربيعي" },
                { symbol: "∛", name: "جذر تكعيبي", description: "الجذر التكعيبي" },
                { symbol: "∑", name: "مجموع", description: "رمز المجموع" },
                { symbol: "∫", name: "تكامل", description: "رمز التكامل" },
                { symbol: "∂", name: "مشتق جزئي", description: "المشتق الجزئي" },
                { symbol: "∆", name: "دلتا", description: "رمز التغير" },
                { symbol: "θ", name: "ثيتا", description: "زاوية في الرياضيات" },
                { symbol: "α", name: "ألفا", description: "زاوية أو معامل" },
                { symbol: "β", name: "بيتا", description: "زاوية أو معامل" },
                { symbol: "γ", name: "جاما", description: "زاوية أو معامل" },
                { symbol: "μ", name: "مو", description: "متوسط أو معامل احتكاك" },
                { symbol: "σ", name: "سيجما", description: "انحراف معياري" },
                { symbol: "λ", name: "لامدا", description: "قيمة ذاتية أو طول موجة" },
                { symbol: "≈", name: "يساوي تقريباً", description: "يساوي تقريباً" },
                { symbol: "≠", name: "لا يساوي", description: "لا يساوي" },
                { symbol: "≤", name: "أصغر أو يساوي", description: "أصغر من أو يساوي" },
                { symbol: "≥", name: "أكبر أو يساوي", description: "أكبر من أو يساوي" },
                { symbol: "±", name: "زائد ناقص", description: "زائد أو ناقص" }
            ],
            astronomy: [
                { symbol: "☉", name: "شمس", description: "رمز الشمس" },
                { symbol: "☿", name: "عطارد", description: "رمز كوكب عطارد" },
                { symbol: "♀", name: "زهرة", description: "رمز كوكب الزهرة" },
                { symbol: "♁", name: "أرض", description: "رمز كوكب الأرض" },
                { symbol: "♂", name: "مريخ", description: "رمز كوكب المريخ" },
                { symbol: "♃", name: "مشتري", description: "رمز كوكب المشتري" },
                { symbol: "♄", name: "زحل", description: "رمز كوكب زحل" },
                { symbol: "♅", name: "أورانوس", description: "رمز كوكب أورانوس" },
                { symbol: "♆", name: "نبتون", description: "رمز كوكب نبتون" },
                { symbol: "♇", name: "بلوتو", description: "رمز كوكب بلوتو" },
                { symbol: "☾", name: "قمر", description: "رمز القمر" },
                { symbol: "☄", name: "مذنب", description: "رمز المذنب" },
                { symbol: "★", name: "نجم", description: "رمز النجم" },
                { symbol: "☆", name: "نجم", description: "رمز النجم" },
                { symbol: "🌌", name: "مجرة", description: "رمز المجرة" },
                { symbol: "☀️", name: "شمس", description: "رمز الشمس" },
                { symbol: "🌙", name: "قمر", description: "رمز القمر" },
                { symbol: "⭐", name: "نجم", description: "رمز النجم" },
                { symbol: "🌟", name: "نجم متلألئ", description: "رمز النجم المتلألئ" },
                { symbol: "🌠", name: "نجم ساقط", description: "رمز النجم الساقط" }
            ],
            units: [
                { symbol: "m", name: "متر", description: "وحدة قياس الطول" },
                { symbol: "s", name: "ثانية", description: "وحدة قياس الزمن" },
                { symbol: "kg", name: "كيلوجرام", description: "وحدة قياس الكتلة" },
                { symbol: "A", name: "أمبير", description: "وحدة قياس التيار الكهربائي" },
                { symbol: "K", name: "كلفن", description: "وحدة قياس درجة الحرارة" },
                { symbol: "mol", name: "مول", description: "وحدة قياس كمية المادة" },
                { symbol: "cd", name: "كانديلا", description: "وحدة قياس شدة الإضاءة" },
                { symbol: "N", name: "نيوتن", description: "وحدة قياس القوة" },
                { symbol: "J", name: "جول", description: "وحدة قياس الطاقة" },
                { symbol: "W", name: "واط", description: "وحدة قياس القدرة" },
                { symbol: "Pa", name: "باسكال", description: "وحدة قياس الضغط" },
                { symbol: "Hz", name: "هيرتز", description: "وحدة قياس التردد" },
                { symbol: "C", name: "كولوم", description: "وحدة قياس الشحنة الكهربائية" },
                { symbol: "V", name: "فولت", description: "وحدة قياس الجهد الكهربائي" },
                { symbol: "Ω", name: "أوم", description: "وحدة قياس المقاومة الكهربائية" },
                { symbol: "°C", name: "درجة مئوية", description: "وحدة قياس درجة الحرارة المئوية" },
                { symbol: "°F", name: "درجة فهرنهايت", description: "وحدة قياس درجة الحرارة الفهرنهايت" },
                { symbol: "L", name: "لتر", description: "وحدة قياس الحجم" },
                { symbol: "g", name: "جرام", description: "وحدة قياس الكتلة" },
                { symbol: "h", name: "ساعة", description: "وحدة قياس الزمن" }
            ],
            formulas: [
                { symbol: "E=mc²", name: "الطاقة والكتلة", description: "معادلة آينشتاين الشهيرة" },
                { symbol: "F=ma", name: "قانون نيوتن الثاني", description: "القوة تساوي الكتلة في التسارع" },
                { symbol: "a²+b²=c²", name: "نظرية فيثاغورس", description: "في المثلث القائم الزاوية" },
                { symbol: "PV=nRT", name: "قانون الغازات المثالية", description: "قانون الغازات المثالية" },
                { symbol: "V=IR", name: "قانون أوم", description: "الجهد يساوي التيار في المقاومة" },
                { symbol: "λ=v/f", name: "الطول الموجي", description: "الطول الموجي يساوي السرعة على التردد" },
                { symbol: "P=VI", name: "القدرة الكهربائية", description: "القدرة تساوي الجهد في التيار" },
                { symbol: "F=G(m₁m₂)/r²", name: "قانون الجذب العام", description: "قانون نيوتن للجذب العام" },
                { symbol: "K=½mv²", name: "الطاقة الحركية", description: "الطاقة الحركية تساوي نصف الكتلة في مربع السرعة" },
                { symbol: "U=mgh", name: "الطاقة الكامنة", description: "الطاقة الكامنة تساوي الكتلة في الجاذبية في الارتفاع" },
                { symbol: "Q=mcΔT", name: "الحرارة النوعية", description: "كمية الحرارة تساوي الكتلة في الحرارة النوعية في فرق درجة الحرارة" },
                { symbol: "v=u+at", name: "السرعة النهائية", description: "السرعة النهائية تساوي السرعة الابتدائية زائد التسارع في الزمن" },
                { symbol: "s=ut+½at²", name: "الإزاحة", description: "الإزاحة تساوي السرعة الابتدائية في الزمن زائد نصف التسارع في مربع الزمن" },
                { symbol: "v²=u²+2as", name: "معادلة الحركة", description: "مربع السرعة النهائية يساوي مربع السرعة الابتدائية زائد 2 في التسارع في الإزاحة" },
                { symbol: "P=F/A", name: "الضغط", description: "الضغط يساوي القوة على المساحة" },
                { symbol: "ρ=m/V", name: "الكثافة", description: "الكثافة تساوي الكتلة على الحجم" },
                { symbol: "n=c/v", name: "معامل الانكسار", description: "معامل الانكسار يساوي سرعة الضوء في الفراغ على سرعته في المادة" },
                { symbol: "1/f=1/u+1/v", name: "عدسة رقيقة", description: "معادلة العدسة الرقيقة" },
                { symbol: "T=2π√(l/g)", name: "البندول البسيط", description: "زمن الذبذبة للبندول البسيط" },
                { symbol: "f=1/T", name: "التردد", description: "التردد يساوي 1 على الزمن الدوري" }
            ],
            symbols: [
                { symbol: "⚗️", name: "كيمياء", description: "رمز الكيمياء" },
                { symbol: "🧪", name: "تجربة", description: "رمز التجارب العلمية" },
                { symbol: "🧬", name: "DNA", description: "رمز الحمض النووي" },
                { symbol: "🔬", name: "ميكروسكوب", description: "رمز الميكروسكوب" },
                { symbol: "🔭", name: "تلسكوب", description: "رمز التلسكوب" },
                { symbol: "⚛️", name: "ذرة", description: "رمز الذرة" },
                { symbol: "🌡️", name: "ترمومتر", description: "رمز الترمومتر" },
                { symbol: "🧫", name: "طبق بتري", description: "رمز طبق بتري" },
                { symbol: "🧴", name: "قارورة", description: "رمز القارورة" },
                { symbol: "⚖️", name: "ميزان", description: "رمز الميزان" },
                { symbol: "🧲", name: "مغناطيس", description: "رمز المغناطيس" },
                { symbol: "🔋", name: "بطارية", description: "رمز البطارية" },
                { symbol: "💡", name: "لمبة", description: "رمز اللمبة" },
                { symbol: "📡", name: "ساتل", description: "رمز الساتل" },
                { symbol: "🧩", name: "لغز", description: "رمز اللغز العلمي" },
                { symbol: "🔍", name: "بحث", description: "رمز البحث العلمي" },
                { symbol: "📊", name: "رسم بياني", description: "رمز الرسم البياني" },
                { symbol: "📈", name: "مخطط", description: "رمز المخطط" },
                { symbol: "📉", name: "انخفاض", description: "رمز الانخفاض" },
                { symbol: "🧮", name: "عداد", description: "رمز العداد" }
            ],
            elements: [
                { symbol: "H", name: "هيدروجين", description: "العدد الذري: 1، أخف العناصر" },
                { symbol: "He", name: "هيليوم", description: "العدد الذري: 2، غاز نبيل" },
                { symbol: "Li", name: "ليثيوم", description: "العدد الذري: 3، فلز قلوي" },
                { symbol: "Be", name: "بيريليوم", description: "العدد الذري: 4، فلز قلوي ترابي" },
                { symbol: "B", name: "بورون", description: "العدد الذري: 5، شبه فلز" },
                { symbol: "C", name: "كربون", description: "العدد الذري: 6، أساس الكيمياء العضوية" },
                { symbol: "N", name: "نيتروجين", description: "العدد الذري: 7، يشكل 78% من الهواء" },
                { symbol: "O", name: "أكسجين", description: "العدد الذري: 8، ضروري للتنفس" },
                { symbol: "F", name: "فلور", description: "العدد الذري: 9، أكثر العناصر كهروسالبية" },
                { symbol: "Ne", name: "نيون", description: "العدد الذري: 10، غاز نبيل" },
                { symbol: "Na", name: "صوديوم", description: "العدد الذري: 11، فلز قلوي" },
                { symbol: "Mg", name: "مغنيسيوم", description: "العدد الذري: 12، فلز قلوي ترابي" },
                { symbol: "Al", name: "ألومنيوم", description: "العدد الذري: 13، فلز خفيف" },
                { symbol: "Si", name: "سيليكون", description: "العدد الذري: 14، شبه فلز" },
                { symbol: "P", name: "فوسفور", description: "العدد الذري: 15، لا فلز" },
                { symbol: "S", name: "كبريت", description: "العدد الذري: 16، لا فلز أصفر" },
                { symbol: "Cl", name: "كلور", description: "العدد الذري: 17، هالوجين" },
                { symbol: "K", name: "بوتاسيوم", description: "العدد الذري: 19، فلز قلوي" },
                { symbol: "Ca", name: "كالسيوم", description: "العدد الذري: 20، فلز قلوي ترابي" },
                { symbol: "Fe", name: "حديد", description: "العدد الذري: 26، فلز انتقالي" }
            ],
            arrows: [
                { symbol: "→", name: "ينتج", description: "سهم التفاعل العادي" },
                { symbol: "⇌", name: "توازن", description: "سهم التوازن الكيميائي" },
                { symbol: "⇄", name: "توازن", description: "سهم التوازن الكيميائي" },
                { symbol: "↔", name: "تفاعل عكوس", description: "سهم التفاعل العكوس" },
                { symbol: "↑", name: "غاز", description: "سهم خروج الغاز" },
                { symbol: "↓", name: "راسب", description: "سهم تكون الراسب" },
                { symbol: "⟶", name: "تفاعل طويل", description: "سهم التفاعل الطويل" },
                { symbol: "⇢", name: "تفاعل", description: "سهم التفاعل" },
                { symbol: "↣", name: "ينتج", description: "سهم الناتج" },
                { symbol: "⇒", name: "يستلزم", description: "سهم الاستلزام" },
                { symbol: "⇔", name: "تكافؤ", description: "سهم التكافؤ" },
                { symbol: "⟺", name: "إذا وفقط إذا", description: "سهم التكافؤ المنطقي" },
                { symbol: "↦", name: "يعين", description: "سهم التعيين" },
                { symbol: "↠", name: "يحول إلى", description: "سهم التحويل" },
                { symbol: "↪", name: "يشير إلى", description: "سهم الإشارة" },
                { symbol: "↩", name: "يعود إلى", description: "سهم العودة" },
                { symbol: "↷", name: "يدور", description: "سهم الدوران" },
                { symbol: "↶", name: "يدور عكسياً", description: "سهم الدوران العكسي" },
                { symbol: "↻", name: "يدور", description: "سهم الدوران" },
                { symbol: "↺", name: "يدور عكسياً", description: "سهم الدوران العكسي" }
            ]
        };

        // Initialize the app
        function initApp() {
            // Initialize science keyboard
            initScienceKeyboard();
            
            // Ensure the chat is scrolled to bottom on load
            setTimeout(() => {
                scrollToBottom();
            }, 100);
        }

        // Initialize science keyboard
        function initScienceKeyboard() {
            // Create category buttons
            scienceCategories.forEach(category => {
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
            if (scienceCategories.length > 0) {
                const firstCategoryBtn = document.querySelector('.category-btn');
                firstCategoryBtn.classList.add('active');
                loadCategorySymbols(scienceCategories[0].id);
            }
        }

        // Load symbols for a category
        function loadCategorySymbols(categoryId) {
            // Clear current symbols
            keyboardGrid.innerHTML = '';
            
            // Get symbols for this category
            const symbols = scienceSymbols[categoryId];
            
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

        // Toggle science keyboard
        function toggleScienceKeyboard() {
            scienceKeyboardContainer.classList.toggle('active');
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
                const randomResponse = scienceResponses[Math.floor(Math.random() * scienceResponses.length)];
                const fullResponse = `${randomResponse}\n\nهذا مجرد نموذج للاستجابة. في التطبيق الحقيقي، سأقوم بتحليل سؤالك وإعطائك إجابة دقيقة ومفصلة بناءً على تخصصي في العلوم.`;
                
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
                    "مرحباً بك في شات الذكاء الاصطناعي للعلوم! 🔬\n" +
                    "أنا مساعدك المتخصص في العلوم العامة. يمكنني مساعدتك في فهم المفاهيم العلمية، " +
                    "حل المسائل في الفيزياء والكيمياء والأحياء، تحليل الصور المتعلقة بالعلوم، والإجابة على أسئلتك.", 
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
                    `بناءً على الصورة والوصف "${caption}" الذي رفعته، يمكنني تحليل المحتوى العلمي كالتالي:\n\nهذا مجرد نموذج للاستجابة. في التطبيق الحقيقي، سأقوم بتحليل الصورة باستخدام تقنيات الرؤية الحاسوبية وتقديم تحليل مفصل للمحتوى العلمي الموجود فيها.` :
                    "بناءً على الصورة التي رفعتها، يمكنني تحليل المحتوى العلمي كالتالي:\n\nهذا مجرد نموذج للاستجابة. في التطبيق الحقيقي، سأقوم بتحليل الصورة باستخدام تقنيات الرؤية الحاسوبية وتقديم تحليل مفصل للمحتوى العلمي الموجود فيها.";
                
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
        
        // Science keyboard button
        scienceKeyboardBtn.addEventListener('click', toggleScienceKeyboard);
        
        // Keyboard close button
        keyboardClose.addEventListener('click', toggleScienceKeyboard);
        
        // Keyboard control buttons
        keyboardBackspace.addEventListener('click', handleBackspace);
        keyboardSpace.addEventListener('click', handleSpace);
        
        // Close keyboard when clicking on background
        scienceKeyboardContainer.addEventListener('click', (e) => {
            if (e.target === scienceKeyboardContainer) {
                toggleScienceKeyboard();
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