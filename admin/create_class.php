
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius Ai - تدريب الذكاء الاصطناعي</title>
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
            padding: 15px;
            text-align: center;
            box-shadow: var(--shadow1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            z-index: 2;
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
            background: var(--text-gradient-gold);
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
        }

        .message-image {
            max-width: 100%;
            max-height: 300px;
            border-radius: 8px;
            margin-top: 8px;
            box-shadow: var(--shadow1);
            object-fit: contain;
        }

        .uploaded-image {
            max-width: 100%;
            max-height: 200px;
            border-radius: 8px;
            margin-top: 8px;
            box-shadow: var(--shadow1);
            object-fit: contain;
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
        }

        .welcome-subtext {
            font-size: var(--fs6);
            opacity: 0.9;
            font-weight: var(--fw300);
        }

        .math-suggestions {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 8px;
            margin-top: 15px;
        }

        .math-suggestion {
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

        .math-suggestion:hover {
            background: var(--bg-gradient-gold2);
            color: var(--white2);
            transform: translateY(-2px);
        }

        .math-suggestion i {
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
            margin: 0 8px;
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
            color: var(--gold-crayola);
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
            background: var(--bg-gradient-gold2);
            color: var(--white2);
        }

        #sendButton {
            background: var(--border-gradient-onyx);
            color: var(--gold-crayola);
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

        /* Link input panel styles */
        .link-input-panel {
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

        .link-input-panel.open {
            display: block;
        }

        .panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .panel-title {
            font-size: var(--fs6);
            font-weight: var(--fw600);
            color: var(--gold-crayola);
        }

        .close-panel {
            background: none;
            border: none;
            color: var(--gold-crayola);
            font-size: 1.2rem;
            cursor: pointer;
        }

        .panel-content {
            display: grid;
            gap: 10px;
        }

        .link-input {
            width: 100%;
            padding: 12px 15px;
            border-radius: 20px;
            background: var(--bg-gradient-jet);
            border: 1px solid var(--jet);
            color: var(--white2);
            font-size: var(--fs6);
            outline: none;
            transition: var(--transition1);
        }

        .link-input:focus {
            box-shadow: 0 0 0 2px var(--gold-crayola);
        }

        .file-upload-btn {
            background: var(--border-gradient-onyx);
            color: var(--gold-crayola);
            border: none;
            padding: 12px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-size: var(--fs6);
            transition: var(--transition1);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            position: relative;
            z-index: 1;
            width: 100%;
            justify-content: center;
        }
        
        .file-upload-btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }
        
        .file-upload-btn:hover {
            background: var(--bg-gradient-gold2);
            color: var(--white2);
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

        footer {
            text-align: center;
            padding: 10px;
            background: var(--border-gradient-onyx);
            font-size: 12px;
            color: var(--light-gray70);
            border-top: 1px solid var(--jet);
            z-index: 1;
        }

        /* File upload modal */
        .file-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1001;
            justify-content: center;
            align-items: center;
        }

        .file-modal.open {
            display: flex;
        }

        .file-modal-content {
            background: var(--bg-gradient-jet);
            padding: 25px;
            border-radius: 14px;
            width: 90%;
            max-width: 400px;
            box-shadow: var(--shadow5);
            position: relative;
            text-align: center;
        }

        .file-modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .file-modal-title {
            font-size: var(--fs4);
            font-weight: var(--fw600);
            color: var(--gold-crayola);
        }

        .close-file-modal {
            background: none;
            border: none;
            color: var(--gold-crayola);
            font-size: 1.2rem;
            cursor: pointer;
        }

        .file-preview {
            width: 100%;
            max-height: 200px;
            border-radius: 8px;
            margin-bottom: 20px;
            object-fit: contain;
            display: none;
        }

        .file-upload-label {
            background: var(--border-gradient-onyx);
            color: var(--gold-crayola);
            border: none;
            padding: 12px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-size: var(--fs6);
            transition: var(--transition1);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            position: relative;
            z-index: 1;
        }

        .file-upload-label::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .file-upload-label:hover {
            background: var(--bg-gradient-gold2);
            color: var(--white2);
        }

        .file-modal-actions {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }

        .send-file-btn {
            background: var(--text-gradient-gold);
            color: var(--smoky-black);
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-size: var(--fs6);
            font-weight: var(--fw600);
            transition: var(--transition1);
        }

        .send-file-btn:hover {
            transform: scale(1.05);
        }

        .cancel-file-btn {
            background: var(--border-gradient-onyx);
            color: var(--light-gray);
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-size: var(--fs6);
            transition: var(--transition1);
            position: relative;
            z-index: 1;
        }

        .cancel-file-btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .cancel-file-btn:hover {
            color: var(--white2);
        }

        .file-name {
            text-align: center;
            margin: 10px 0;
            font-size: var(--fs7);
            color: var(--light-gray);
            word-break: break-all;
        }

        /* Training progress bar */
        .training-progress {
            width: 100%;
            background: var(--bg-gradient-jet);
            height: 8px;
            border-radius: 4px;
            margin: 15px 0;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            background: var(--text-gradient-gold);
            border-radius: 4px;
            width: 0%;
            transition: width 0.5s ease;
        }

        .progress-text {
            text-align: center;
            font-size: var(--fs7);
            color: var(--light-gray);
        }

        /* YouTube video preview */
        .video-preview {
            width: 100%;
            max-height: 200px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: none;
        }

        /* تحسينات للاستجابة */
        @media (max-width: 1200px) {
            .logo-container h1 {
                font-size: var(--fs4);
            }
        }

        @media (max-width: 992px) {
            .logo-container h1 {
                font-size: var(--fs5);
            }
            
            .header-button {
                width: 36px;
                height: 36px;
                font-size: 1rem;
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
        }

        @media (max-width: 768px) {
            header {
                padding: 12px;
            }
            
            .logo-container h1 {
                font-size: var(--fs6);
                margin: 0 8px;
            }
            
            .header-button {
                width: 34px;
                height: 34px;
                font-size: 0.9rem;
            }
            
            .message {
                max-width: 90%;
                padding: 10px 12px;
                font-size: var(--fs7);
            }
            
            .input-wrapper {
                padding: 4px 12px;
                margin: 0 6px;
            }
            
            input {
                padding: 8px 5px;
                font-size: var(--fs7);
            }
            
            .action-button {
                width: 36px;
                height: 36px;
                font-size: 1rem;
            }
            
            #sendButton {
                width: 36px;
                height: 36px;
                font-size: 0.9rem;
            }
            
            .math-suggestion {
                padding: 6px 12px;
                font-size: var(--fs8);
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
            
            .sidebar {
                width: 85%;
                right: -85%;
            }
            
            .link-input-panel {
                bottom: 60px;
            }
        }
        
        @media (max-width: 576px) {
            header {
                padding: 10px;
            }
            
            .logo-container h1 {
                font-size: var(--fs7);
            }
            
            .header-button {
                width: 32px;
                height: 32px;
                font-size: 0.85rem;
            }
            
            .chat-container {
                padding: 10px;
            }
            
            .message {
                max-width: 95%;
                padding: 8px 10px;
                font-size: var(--fs8);
                gap: 6px;
            }
            
            .message-icon {
                font-size: 14px;
            }
            
            .message-content {
                font-size: 1em;
                line-height: 1.6;
            }
            
            .input-container {
                padding: 10px;
                flex-wrap: wrap;
            }
            
            .input-wrapper {
                padding: 3px 10px;
                margin: 0 4px;
                order: 1;
                width: 100%;
            }
            
            input {
                padding: 6px 4px;
                font-size: var(--fs8);
            }
            
            .action-buttons {
                order: 2;
                margin-left: 0;
                margin-top: 8px;
                width: 100%;
                justify-content: center;
            }
            
            #sendButton {
                width: 34px;
                height: 34px;
                font-size: 0.85rem;
                margin-right: 0;
                margin-top: 8px;
                order: 3;
            }
            
            .recording-indicator {
                order: 4;
                width: 100%;
                justify-content: center;
                margin-left: 0;
                margin-top: 8px;
            }
            
            .welcome-message {
                padding: 15px;
            }
            
            .welcome-icon {
                font-size: 1.8rem;
            }
            
            .welcome-text {
                font-size: var(--fs6);
            }
            
            .welcome-subtext {
                font-size: var(--fs8);
            }
            
            .math-suggestion {
                padding: 5px 10px;
                font-size: var(--fs8);
            }
            
            .math-suggestions {
                gap: 6px;
            }
            
            .character-count {
                left: 10px;
                font-size: var(--fs8);
            }
            
            .link-input-panel {
                bottom: 100px;
                padding: 8px;
            }
            
            footer {
                padding: 8px;
                font-size: 11px;
            }
        }
        
        @media (max-width: 380px) {
            .logo-container h1 {
                font-size: var(--fs8);
            }
            
            .header-button {
                width: 30px;
                height: 30px;
                font-size: 0.8rem;
            }
            
            .action-button {
                width: 32px;
                height: 32px;
                font-size: 0.9rem;
            }
            
            #sendButton {
                width: 32px;
                height: 32px;
                font-size: 0.8rem;
            }
            
            .math-suggestions {
                flex-direction: column;
                width: 100%;
            }
            
            .math-suggestion {
                width: 100%;
                justify-content: center;
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
            <h1>Genius Ai - تدريب الذكاء الاصطناعي</h1>
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
                    <i class="fas fa-brain"></i>
                </div>
                <div class="welcome-text">مرحبًا بك في منصة تدريب الذكاء الاصطناعي!</div>
                <div class="welcome-subtext">النموذج جاهز للتدريب، يمكنك رفع ملفات التدريب أو إدخال رابط مجموعة البيانات</div>
                <div class="math-suggestions">
                    <div class="math-suggestion" data-query="كيف يمكنني تحميل مجموعة بيانات للتدريب؟">
                        <i class="fas fa-database"></i>
                        تحميل مجموعة بيانات
                    </div>
                    <div class="math-suggestion" data-query="ما هي أفضل صيغ الملفات للتدريب؟">
                        <i class="fas fa-file"></i>
                        صيغ الملفات المدعومة
                    </div>
                    <div class="math-suggestion" data-query="كيف أبدأ عملية تدريب النموذج؟">
                        <i class="fas fa-play-circle"></i>
                        بدء التدريب
                    </div>
                    <div class="math-suggestion" data-query="ما هي معايير تقييم أداء النموذج؟">
                        <i class="fas fa-chart-line"></i>
                        تقييم الأداء
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Sidebar for chat history -->
        <div class="sidebar" id="historySidebar">
            <div class="sidebar-header">
                <h2 class="sidebar-title">سجل التدريبات</h2>
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
    
    <!-- Link Input Panel -->
    <div class="link-input-panel" id="linkInputPanel">
        <div class="panel-header">
            <div class="panel-title">إدخال رابط مجموعة البيانات</div>
            <button class="close-panel" id="closeLinkPanel">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="panel-content">
            <input type="text" class="link-input" id="datasetLink" placeholder="https://www.youtube.com/watch?v=..." dir="ltr">
            <button class="file-upload-btn" id="submitLinkBtn">
                <i class="fas fa-link"></i>
                إرسال الرابط
            </button>
        </div>
    </div>
    
    <!-- File Upload Modal -->
    <div class="file-modal" id="fileUploadModal">
        <div class="file-modal-content">
            <div class="file-modal-header">
                <h3 class="file-modal-title">رفع ملف التدريب</h3>
                <button class="close-file-modal" id="closeFileModal">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div style="text-align: center; margin: 15px 0;">
                <i class="fas fa-file-video" style="font-size: 3rem; color: var(--gold-crayola);"></i>
            </div>
            <input type="file" id="fileUpload" accept=".csv,.json,.txt,.xlsx,.mp4,.avi,.mov" style="display: none;">
            <label for="fileUpload" class="file-upload-label">
                <i class="fas fa-upload"></i>
                اختر ملف
            </label>
            <div id="fileName" class="file-name"></div>
            
            <div class="training-progress" id="trainingProgress" style="display: none;">
                <div class="progress-bar" id="progressBar"></div>
            </div>
            <div class="progress-text" id="progressText" style="display: none;">جاري المعالجة: <span id="progressPercent">0</span>%</div>
            
            <div class="file-modal-actions">
                <button class="send-file-btn" id="sendFileBtn">بدء التدريب</button>
                <button class="cancel-file-btn" id="cancelFileBtn">إلغاء</button>
            </div>
        </div>
    </div>
    
    <div class="input-container">
        <div class="input-wrapper">
            <input type="text" id="userInput" placeholder="اكتب استفسارك حول التدريب هنا..." maxlength="500" />
            <div class="character-count"><span id="charCount">0</span>/500</div>
        </div>
        <div class="action-buttons">
            <button class="action-button" id="fileButton" title="رفع ملف">
                <i class="fas fa-file-upload"></i>
            </button>
            <button class="action-button" id="linkButton" title="إدخال رابط">
                <i class="fab fa-youtube"></i>
            </button>
            <button class="action-button" id="imageButton" title="رفع صورة">
                <i class="fas fa-image"></i>
            </button>
            <button class="action-button" id="trainButton" title="بدء التدريب">
                <i class="fas fa-play"></i>
            </button>
        </div>
        <button id="sendButton" title="إرسال">
            <i class="fas fa-paper-plane"></i>
        </button>
    </div>
    
    <footer>
        تم التطوير بواسطة Genius Ai 2023 - منصة تدريب الذكاء الاصطناعي
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // العناصر الأساسية
            const chatContainer = document.getElementById('chatContainer');
            const userInput = document.getElementById('userInput');
            const sendButton = document.getElementById('sendButton');
            const fileButton = document.getElementById('fileButton');
            const linkButton = document.getElementById('linkButton');
            const imageButton = document.getElementById('imageButton');
            const trainButton = document.getElementById('trainButton');
            const clearChatButton = document.getElementById('clearChatButton');
            const welcomeMessage = document.getElementById('welcomeMessage');
            const charCount = document.getElementById('charCount');
            const historyButton = document.getElementById('historyButton');
            const historySidebar = document.getElementById('historySidebar');
            const closeHistory = document.getElementById('closeHistory');
            const historyList = document.getElementById('historyList');
            const linkInputPanel = document.getElementById('linkInputPanel');
            const closeLinkPanel = document.getElementById('closeLinkPanel');
            const datasetLink = document.getElementById('datasetLink');
            const submitLinkBtn = document.getElementById('submitLinkBtn');
            const mathSuggestions = document.querySelectorAll('.math-suggestion');
            const overlay = document.getElementById('overlay');
            const fileUploadModal = document.getElementById('fileUploadModal');
            const fileUpload = document.getElementById('fileUpload');
            const fileName = document.getElementById('fileName');
            const closeFileModal = document.getElementById('closeFileModal');
            const sendFileBtn = document.getElementById('sendFileBtn');
            const cancelFileBtn = document.getElementById('cancelFileBtn');
            const trainingProgress = document.getElementById('trainingProgress');
            const progressBar = document.getElementById('progressBar');
            const progressText = document.getElementById('progressText');
            const progressPercent = document.getElementById('progressPercent');
            
            let isTypingEffectActive = false;
            let chatHistory = JSON.parse(localStorage.getItem('geniusAiChatHistory')) || [];
            let uploadedFile = null;
            
            // تحديث عداد الأحرف
            userInput.addEventListener('input', function() {
                charCount.textContent = userInput.value.length;
            });
            
            // إضافة رسالة إلى الدردشة
            function addMessage(message, isUser = false, fileInfo = null, link = null) {
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
                
                // إضافة معلومات الملف إذا كانت موجودة
                if (fileInfo) {
                    const fileElement = document.createElement('div');
                    fileElement.style.marginTop = '8px';
                    fileElement.style.padding = '8px';
                    fileElement.style.background = 'var(--bg-gradient-jet)';
                    fileElement.style.borderRadius = '8px';
                    fileElement.style.fontSize = 'var(--fs7)';
                    fileElement.innerHTML = `<i class="fas fa-file"></i> ${fileInfo.name} (${formatFileSize(fileInfo.size)})`;
                    contentDiv.appendChild(fileElement);
                }
                
                // إضافة الرابط إذا كان موجودًا
                if (link) {
                    const linkElement = document.createElement('div');
                    linkElement.style.marginTop = '8px';
                    linkElement.style.padding = '8px';
                    linkElement.style.background = 'var(--bg-gradient-jet)';
                    linkElement.style.borderRadius = '8px';
                    linkElement.style.fontSize = 'var(--fs7)';
                    linkElement.innerHTML = `<i class="fab fa-youtube" style="color: red;"></i> <a href="${link}" target="_blank" style="color: var(--gold-crayola);">${link}</a>`;
                    contentDiv.appendChild(linkElement);
                }
                
                // إضافة العناصر إلى الرسالة
                messageDiv.appendChild(iconDiv);
                messageDiv.appendChild(contentDiv);
                
                chatContainer.appendChild(messageDiv);
                chatContainer.scrollTop = chatContainer.scrollHeight;
                
                return contentDiv;
            }
            
            // تنسيق حجم الملف
            function formatFileSize(bytes) {
                if (bytes === 0) return '0 Bytes';
                const k = 1024;
                const sizes = ['Bytes', 'KB', 'MB', 'GB'];
                const i = Math.floor(Math.log(bytes) / Math.log(k));
                return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
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
            
            // محاكاة شريط التقدم
            function simulateProgress() {
                trainingProgress.style.display = 'block';
                progressText.style.display = 'block';
                
                let progress = 0;
                const interval = setInterval(() => {
                    progress += Math.random() * 5;
                    if (progress >= 100) {
                        progress = 100;
                        clearInterval(interval);
                        
                        // بعد اكتمال التقدم، إخفاء العناصر بعد ثانية
                        setTimeout(() => {
                            trainingProgress.style.display = 'none';
                            progressText.style.display = 'none';
                        }, 1000);
                    }
                    
                    progressBar.style.width = progress + '%';
                    progressPercent.textContent = Math.round(progress);
                }, 200);
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
                        document.querySelectorAll('.math-suggestion').forEach(suggestion => {
                            suggestion.addEventListener('click', function() {
                                userInput.value = this.getAttribute('data-query');
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
            
            // الردود المتخصصة في تدريب الذكاء الاصطناعي
            function getAIResponse(query) {
                const lowerQuery = query.toLowerCase();
                
                if (lowerQuery.includes('تحميل') || lowerQuery.includes('ملف') || lowerQuery.includes('بيانات')) {
                    return 'لتحميل مجموعة بيانات للتدريب:\n\n1. يمكنك استخدام زر "رفع ملف" لتحميل ملف من جهازك\n2. يمكنك استخدام زر "إدخال رابط" لإدخال رابط لمجموعة بيانات عبر الإنترنت\n3. صيغ الملفات المدعومة: CSV, JSON, TXT, XLSX, MP4, AVI, MOV\n4. تأكد من أن البيانات منظمة بشكل صحيح ومناسبة لنموذج الذكاء الاصطناعي';
                }
                else if (lowerQuery.includes('صيغ') || lowerQuery.includes('مدعوم')) {
                    return 'صيغ الملفات المدعومة للتدريب:\n\n• CSV (قيم مفصولة بفواصل) - للأعداد الكبيرة من البيانات المنظمة\n• JSON (JavaScript Object Notation) - للبيانات ذات الهيكل المعقد\n• TXT (نص عادي) - للبيانات النصية غير المنظمة\n• XLSX (Excel) - للبيانات المجدولة\n• MP4, AVI, MOV - لفيديوهات التدريب\n\nيجب أن تكون البيانات نظيفة ومنظمة بشكل صحيح للحصول على أفضل نتائج التدريب.';
                }
                else if (lowerQuery.includes('بدء') || lowerQuery.includes('تدريب')) {
                    return 'لبدء عملية تدريب النموذج:\n\n1. تأكد من تحميل مجموعة بيانات مناسبة\n2. اضغط على زر "بدء التدريب"\n3. حدد معاملات التدريب (معدل التعلم، عدد الحقب، حجم الدفعة)\n4. ابدأ عملية التدريب وسيتم عرض التقدم\n5. بعد الانتهاء، سيتم تقييم أداء النموذج وعرض النتائج\n\nيمكنك حفظ النموذج المدرب لاستخدامه لاحقًا في الاستدلال.';
                }
                else if (lowerQuery.includes('تقييم') || lowerQuery.includes('أداء')) {
                    return 'معايير تقييم أداء النموذج:\n\n• الدقة (Accuracy) - نسبة التوقعات الصحيحة\n• الخسارة (Loss) - قياس الخطأ في التوقعات\n• الدقة والاستدعاء (Precision & Recall) - للتوزيعات غير المتوازنة\n• F1-Score - متوسط توافقي بين الدقة والاستدعاء\n• AUC-ROC - لأداء التصنيف الثنائي\n\nيختلف المعيار المناسب حسب نوع المشكلة (تصنيف، انحدار، تجميع، إلخ).';
                }
                else if (lowerQuery.includes('يوتيوب') || lowerQuery.includes('youtube')) {
                    return 'يمكنك استخدام رابط يوتيوب للتدريب عن طريق:\n\n1. الضغط على أيقونة اليوتيوب بجانب مربع الكتابة\n2. إدخال رابط الفيديو من يوتيوب\n3. الضغط على إرسال الرابط\n4. سيقوم النموذج بمعالجة الفيديو واستخراج البيانات للتدريب\n\nيمكن للذكاء الاصطناعي تحليل محتوى الفيديو واستخدامه كبيانات تدريب.';
                }
                else {
                    return 'أهلاً بك! أنا مساعدك المتخصص في تدريب نماذج الذكاء الاصطناعي. يمكنني مساعدتك في:\n\n• تحميل مجموعات البيانات للتدريب\n• معالجة البيانات وتحضيرها\n• تدريب نماذج التعلم الآلي\n• تقييم أداء النماذج\n• ضبط المعاملات وتحسين النماذج\n• تفسير نتائج النماذج\n\nما هو الاستفسار الذي تحتاج المساعدة فيه؟';
                }
            }
            
            // إرسال رسالة
            async function sendMessage() {
                const message = userInput.value.trim();
                if (message && !isTypingEffectActive) {
                    addMessage(message, true);
                    userInput.value = '';
                    charCount.textContent = '0';
                    
                    // إغلاق لوحة إدخال الروابط إذا كانت مفتوحة
                    if (linkInputPanel.classList.contains('open')) {
                        toggleLinkPanel();
                    }
                    
                    const typingIndicator = showTypingIndicator();
                    
                    try {
                        // استخدام الردود المحلية المتخصصة
                        setTimeout(() => {
                            const response = getAIResponse(message);
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
            
            // إرسال ملف
            function sendFile() {
                if (uploadedFile) {
                    addMessage('تم رفع ملف للتدريب', true, { name: uploadedFile.name, size: uploadedFile.size });
                    
                    // محاكاة استجابة الذكاء الاصطناعي
                    const typingIndicator = showTypingIndicator();
                    
                    setTimeout(() => {
                        hideTypingIndicator(typingIndicator);
                        const messageElement = addMessage('', false);
                        const response = `تم استلام ملف ${uploadedFile.name} بنجاح. يمكننا الآن بدء عملية التدريب. هل تريد ضبط معاملات التدريب أم استخدام الإعدادات الافتراضية؟`;
                        typeMessage(response, messageElement, 20);
                        
                        // حفظ المحادثة في السجل
                        saveToHistory(`[رفع ملف: ${uploadedFile.name}]`, response, Date.now());
                    }, 1500);
                    
                    // إغلاق نافذة الملف
                    closeFileModalHandler();
                }
            }
            
            // إرسال رابط
            function sendLink() {
                const link = datasetLink.value.trim();
                if (link) {
                    addMessage('تم إدخال رابط يوتيوب للتدريب', true, null, link);
                    
                    // إغلاق لوحة الروابط
                    toggleLinkPanel();
                    datasetLink.value = '';
                    
                    // محاكاة استجابة الذكاء الاصطناعي
                    const typingIndicator = showTypingIndicator();
                    
                    setTimeout(() => {
                        hideTypingIndicator(typingIndicator);
                        const messageElement = addMessage('', false);
                        const response = `تم استلام رابط يوتيوب بنجاح. جاري معالجة الفيديو واستخراج البيانات للتدريب...`;
                        typeMessage(response, messageElement, 20);
                        
                        // محاكاة معالجة الفيديو
                        setTimeout(() => {
                            const followUpMessage = addMessage('', false);
                            typeMessage('تم تحليل الفيديو بنجاح واستخراج البيانات. يمكننا الآن بدء عملية التدريب. هل تريد ضبط معاملات التدريب أم استخدام الإعدادات الافتراضية؟', followUpMessage, 20);
                            
                            // حفظ المحادثة في السجل
                            saveToHistory(`[رابط يوتيوب: ${link}]`, response + ' ' + 'تم تحليل الفيديو بنجاح واستخراج البيانات. يمكننا الآن بدء عملية التدريب.', Date.now());
                        }, 2000);
                    }, 1500);
                }
            }
            
            // بدء التدريب
            function startTraining() {
                addMessage('بدء عملية تدريب النموذج', true);
                
                // محاكاة استجابة الذكاء الاصطناعي
                const typingIndicator = showTypingIndicator();
                
                setTimeout(() => {
                    hideTypingIndicator(typingIndicator);
                    const messageElement = addMessage('', false);
                    const response = "بدء عملية التدريب باستخدام الإعدادات الافتراضية...";
                    typeMessage(response, messageElement, 20);
                    
                    // محاكاة عملية التدريب
                    setTimeout(() => {
                        const progressMessage = addMessage('', false);
                        typeMessage('جاري تدريب النموذج، المرحلة 1/5: معالجة البيانات الأولية...', progressMessage, 20);
                        
                        // محاكاة مراحل التدريب
                        const stages = [
                            'المرحلة 2/5: استخراج الخصائص...',
                            'المرحلة 3/5: تدريب النموذج الأولي...',
                            'المرحلة 4/5: تحسين المعاملات...',
                            'المرحلة 5/5: تقييم النموذج...'
                        ];
                        
                        let stageIndex = 0;
                        const stageInterval = setInterval(() => {
                            if (stageIndex < stages.length) {
                                const stageMessage = addMessage('', false);
                                typeMessage(stages[stageIndex], stageMessage, 20);
                                stageIndex++;
                            } else {
                                clearInterval(stageInterval);
                                
                                // عرض النتائج النهائية
                                setTimeout(() => {
                                    const resultsMessage = addMessage('', false);
                                    const results = "اكتمل التدريب بنجاح!\n\nنتائج الأداء:\n• الدقة: 92.3%\n• الخسارة: 0.15\n• F1-Score: 0.91\n\nالنموذج جاهز للاستخدام. هل تريد حفظه أو اختباره على بيانات جديدة؟";
                                    typeMessage(results, resultsMessage, 20);
                                    
                                    // حفظ المحادثة في السجل
                                    saveToHistory('[بدء التدريب]', response + ' ' + stages.join(' ') + ' ' + results, Date.now());
                                }, 1000);
                            }
                        }, 2000);
                    }, 1500);
                }, 1500);
            }
            
            // مسح الدردشة
            function clearChat() {
                chatContainer.innerHTML = '';
                const welcomeMsg = welcomeMessage.cloneNode(true);
                chatContainer.appendChild(welcomeMsg);
                
                // إعادة إضافة مستمعي الأحداث للاقتراحات
                document.querySelectorAll('.math-suggestion').forEach(suggestion => {
                    suggestion.addEventListener('click', function() {
                        userInput.value = this.getAttribute('data-query');
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
            
            // فتح وإغلاق لوحة الروابط
            function toggleLinkPanel() {
                linkInputPanel.classList.toggle('open');
                
                if (linkInputPanel.classList.contains('open')) {
                    linkButton.style.background = 'var(--bg-gradient-gold2)';
                    linkButton.style.color = 'var(--white2)';
                    datasetLink.focus();
                } else {
                    linkButton.style.background = 'var(--border-gradient-onyx)';
                    linkButton.style.color = 'var(--gold-crayola)';
                    datasetLink.value = '';
                }
            }
            
            // فتح نافذة رفع الملفات
            function openFileModal() {
                fileUploadModal.classList.add('open');
                overlay.classList.add('active');
            }
            
            // إغلاق نافذة رفع الملفات
            function closeFileModalHandler() {
                fileUploadModal.classList.remove('open');
                overlay.classList.remove('active');
                fileName.textContent = '';
                fileUpload.value = '';
                uploadedFile = null;
                trainingProgress.style.display = 'none';
                progressText.style.display = 'none';
                progressBar.style.width = '0%';
            }
            
            // فتح نافذة رفع الصور
            function openImageModal() {
                // تغيير نوع الملف المقبول للصور فقط
                fileUpload.accept = "image/*";
                fileUploadModal.classList.add('open');
                overlay.classList.add('active');
            }
            
            // إضافة مستمعي الأحداث
            sendButton.addEventListener('click', sendMessage);
            
            userInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    sendMessage();
                }
            });
            
            fileButton.addEventListener('click', openFileModal);
            
            linkButton.addEventListener('click', toggleLinkPanel);
            
            imageButton.addEventListener('click', openImageModal);
            
            trainButton.addEventListener('click', startTraining);
            
            clearChatButton.addEventListener('click', clearChat);
            
            historyButton.addEventListener('click', toggleHistorySidebar);
            
            closeHistory.addEventListener('click', toggleHistorySidebar);
            
            closeLinkPanel.addEventListener('click', toggleLinkPanel);
            
            submitLinkBtn.addEventListener('click', sendLink);
            
            overlay.addEventListener('click', function() {
                if (historySidebar.classList.contains('open')) {
                    toggleHistorySidebar();
                }
                if (fileUploadModal.classList.contains('open')) {
                    closeFileModalHandler();
                }
                if (linkInputPanel.classList.contains('open')) {
                    toggleLinkPanel();
                }
            });
            
            closeFileModal.addEventListener('click', closeFileModalHandler);
            
            cancelFileBtn.addEventListener('click', closeFileModalHandler);
            
            sendFileBtn.addEventListener('click', function() {
                simulateProgress();
                setTimeout(sendFile, 3000);
            });
            
            fileUpload.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    uploadedFile = file;
                    fileName.textContent = file.name + ' (' + formatFileSize(file.size) + ')';
                    
                    // إذا كان الملف صورة، عرض معاينة
                    if (file.type.startsWith('image/')) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const preview = document.createElement('img');
                            preview.src = e.target.result;
                            preview.classList.add('file-preview');
                            preview.style.display = 'block';
                            preview.style.maxHeight = '150px';
                            preview.style.margin = '10px auto';
                            
                            const existingPreview = document.querySelector('.file-preview');
                            if (existingPreview) {
                                existingPreview.remove();
                            }
                            
                            fileUploadModal.querySelector('.file-modal-content').insertBefore(preview, fileName);
                        };
                        reader.readAsDataURL(file);
                    }
                }
            });
            
            // إضافة مستمعي الأحداث للاقتراحات
            mathSuggestions.forEach(suggestion => {
                suggestion.addEventListener('click', function() {
                    userInput.value = this.getAttribute('data-query');
                    sendMessage();
                });
            });
            
            // إغلاق لوحة الروابط عند النقر خارجها
            document.addEventListener('click', function(e) {
                if (linkInputPanel.classList.contains('open') && 
                    !linkInputPanel.contains(e.target) && 
                    e.target !== linkButton) {
                    toggleLinkPanel();
                }
            });
            
            // تهيئة التطبيق عند التحميل
            updateHistorySidebar();
        });
    </script>
</body>
</html>