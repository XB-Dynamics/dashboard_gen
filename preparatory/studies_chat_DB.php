
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius Ai - أداة تعليمية</title>
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
                hsla(43, 100%, 60%, 0) 50%
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
                hsl(43, 100%, 70%)
            );

            --jet: hsl(0, 0%, 22%);
            --onyx: hsl(240, 1%, 17%);
            --eerie-black1: hsl(240, 2%, 13%);
            --eerie-black2: hsl(240, 2%, 12%);
            --smoky-black: hsl(0, 0%, 7%);
            --white1: hsl(0, 0%, 100%);
            --white2: hsl(0, 0%, 98%);
            --gold-crayola: hsl(43, 100%, 60%);
            --light-gold: hsl(43, 100%, 70%);
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
            --secondary-color: var(--light-gold);
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
            z-index: 10;
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
            color: var(--light-gold);
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

        .history-sidebar {
            width: 300px;
            background: var(--bg-gradient-jet);
            border-left: 1px solid var(--jet);
            padding: 15px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            transform: translateX(100%);
            transition: transform var(--transition2);
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            z-index: 5;
            box-shadow: var(--shadow2);
        }

        .history-sidebar.open {
            transform: translateX(0);
        }

        .history-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--jet);
        }

        .history-title {
            font-size: var(--fs4);
            font-weight: var(--fw600);
            background: var(--text-gradient-gold);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .close-history {
            background: none;
            border: none;
            color: var(--light-gray);
            cursor: pointer;
            font-size: 1.2rem;
            transition: var(--transition1);
        }

        .close-history:hover {
            color: var(--gold-crayola);
        }

        .history-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .history-item {
            background: var(--border-gradient-onyx);
            padding: 12px;
            border-radius: 10px;
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
            transform: translateY(-2px);
            box-shadow: var(--shadow1);
        }

        .history-query {
            font-size: var(--fs6);
            font-weight: var(--fw500);
            margin-bottom: 5px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .history-date {
            font-size: var(--fs8);
            color: var(--light-gray70);
        }

        .clear-history {
            margin-top: 20px;
            padding: 10px;
            background: var(--border-gradient-onyx);
            border: none;
            border-radius: 8px;
            color: var(--light-gray);
            cursor: pointer;
            transition: var(--transition1);
            position: relative;
            z-index: 1;
        }

        .clear-history::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .clear-history:hover {
            color: var(--bittersweet-shimmer);
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
            color: var(--light-gold);
        }

        .bot-message .message-icon {
            color: var(--gold-crayola);
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

        /* Chemistry keyboard styles */
        .chemistry-keyboard {
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

        .chemistry-keyboard.open {
            display: block;
        }

        .keyboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            padding-bottom: 8px;
            border-bottom: 1px solid var(--jet);
        }

        .keyboard-title {
            font-size: var(--fs6);
            color: var(--gold-crayola);
            font-weight: var(--fw500);
        }

        .close-keyboard {
            background: none;
            border: none;
            color: var(--light-gray);
            cursor: pointer;
            font-size: 1.2rem;
            transition: var(--transition1);
        }

        .close-keyboard:hover {
            color: var(--gold-crayola);
        }

        .keyboard-categories {
            display: flex;
            overflow-x: auto;
            margin-bottom: 10px;
            padding-bottom: 5px;
            scrollbar-width: thin;
            scrollbar-color: var(--gold-crayola) transparent;
        }

        .keyboard-categories::-webkit-scrollbar {
            height: 6px;
        }

        .keyboard-categories::-webkit-scrollbar-thumb {
            background: var(--text-gradient-gold);
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
        }

        .category-btn.active {
            background: var(--text-gradient-gold);
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
            scrollbar-color: var(--gold-crayola) transparent;
            padding: 5px;
        }

        .keyboard-symbols::-webkit-scrollbar {
            width: 6px;
        }

        .keyboard-symbols::-webkit-scrollbar-thumb {
            background: var(--text-gradient-gold);
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
            background: var(--bg-gradient-gold2);
            color: var(--white2);
        }

        .symbol-btn.special {
            font-weight: var(--fw600);
            background: var(--bg-gradient-gold2);
            color: var(--smoky-black);
        }

        /* Preview area for keyboard input */
        .keyboard-preview {
            background: var(--border-gradient-onyx);
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 10px;
            min-height: 40px;
            display: flex;
            align-items: center;
            font-size: var(--fs5);
            position: relative;
            z-index: 1;
        }

        .keyboard-preview::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .preview-text {
            flex: 1;
            word-break: break-all;
        }

        .clear-preview {
            background: none;
            border: none;
            color: var(--light-gray);
            cursor: pointer;
            margin-left: 10px;
            transition: var(--transition1);
        }

        .clear-preview:hover {
            color: var(--bittersweet-shimmer);
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

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 4;
        }

        .overlay.active {
            display: block;
        }

        /* Image upload modal */
        .image-modal {
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

        .image-modal.open {
            display: flex;
        }

        .modal-content {
            background: var(--bg-gradient-jet);
            padding: 20px;
            border-radius: 14px;
            width: 90%;
            max-width: 400px;
            box-shadow: var(--shadow5);
            position: relative;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .modal-title {
            font-size: var(--fs4);
            font-weight: var(--fw600);
        }

        .close-modal {
            background: none;
            border: none;
            color: var(--gold-crayola);
            font-size: 1.2rem;
            cursor: pointer;
        }

        .upload-area {
            border: 2px dashed var(--jet);
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            margin-bottom: 15px;
            cursor: pointer;
            transition: var(--transition1);
        }

        .upload-area:hover {
            border-color: var(--gold-crayola);
        }

        .upload-icon {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: var(--gold-crayola);
        }

        .upload-text {
            font-size: var(--fs6);
            margin-bottom: 10px;
        }

        .upload-hint {
            font-size: var(--fs8);
            color: var(--light-gray70);
        }

        #imageInput {
            display: none;
        }

        .image-preview {
            display: none;
            max-width: 100%;
            max-height: 200px;
            margin: 0 auto 15px;
            border-radius: 8px;
        }

        .modal-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .modal-button {
            padding: 8px 16px;
            border-radius: 20px;
            border: none;
            cursor: pointer;
            font-size: var(--fs6);
            transition: var(--transition1);
        }

        .cancel-button {
            background: var(--border-gradient-onyx);
            color: var(--white2);
        }

        .upload-button {
            background: var(--text-gradient-gold);
            color: var(--smoky-black);
            font-weight: var(--fw600);
        }

        .modal-button:hover {
            transform: translateY(-2px);
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
            
            .welcome-suggestion {
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
            
            .chemistry-keyboard {
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
            
            .keyboard-symbols {
                grid-template-columns: repeat(auto-fill, minmax(40px, 1fr));
            }
            
            .history-sidebar {
                width: 85%;
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
            
            .chemistry-keyboard {
                bottom: 110px;
            }
            
            .keyboard-symbols {
                grid-template-columns: repeat(auto-fill, minmax(35px, 1fr));
            }
            
            .symbol-btn {
                height: 35px;
                font-size: var(--fs7);
            }
        }
    </style>
</head>

<body>
<!--
    <header>
        <div class="files-sidebar" id="filesSidebar">
    <div class="files-header">
        <div class="files-title">📂 الملفات المرفوعة</div>
        <button class="close-files" id="closeFiles">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div class="files-list" id="filesList">
        -- يتم ملؤها بالـ JS -
    </div>
</div>
    -->
        <div class="header-actions">
            <button class="header-button" id="historyButton">
                <i class="fas fa-history"></i>
            </button>

          

        </div>
        <div class="logo-container">
            <h1>Genius Ai - أداة تعليمية</h1>
        </div>
        <div class="header-actions">
            <button class="header-button" id="languageToggle">
                <i class="fas fa-language"></i>
            </button>
        </div>
    </header>
    
    <div class="main-container">
        <div class="chat-container" id="chatContainer">
            <div class="welcome-message" id="welcomeMessage">
                <div class="welcome-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="welcome-text">مرحبًا بك في Genius Ai!</div>
                <div class="welcome-subtext">شخص ما يكتب حالياً...</div>
                <div class="welcome-suggestions">
                    <div class="welcome-suggestion" data-query="ما هي أفضل طرق المذاكرة؟">
                        <i class="fas fa-brain"></i>
                        طرق المذاكرة الفعالة
                    </div>
                    <div class="welcome-suggestion" data-query="كيف يمكنني تحسين تركيزي؟">
                        <i class="fas fa-bullseye"></i>
                        تحسين التركيز
                    </div>
                    <div class="welcome-suggestion" data-query="اشرح لي نظرية فيثاغورس">
                        <i class="fas fa-square-root-alt"></i>
                        نظرية فيثاغورس
                    </div>
                    <div class="welcome-suggestion" data-query="ما هي قواعد اللغة العربية الأساسية؟">
                        <i class="fas fa-book"></i>
                        قواعد اللغة العربية
                    </div>
                </div>
            </div>
        </div>
        
        <div class="overlay" id="overlay"></div>
        
        <div class="history-sidebar" id="historySidebar">
            <div class="history-header">
                <div class="history-title">سجل المحادثات</div>
                <button class="close-history" id="closeHistory">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="history-list" id="historyList">
                <!-- سيتم ملء سجل المحادثات بواسطة JavaScript -->
            </div>
            <button class="clear-history" id="clearHistory">مسح السجل</button>
        </div>
    </div>
    
    <!-- Chemistry Keyboard -->
    <div class="chemistry-keyboard" id="chemistryKeyboard">
        <div class="keyboard-header">
            <div class="keyboard-title">لوحة الرموز التعليمية</div>
            <button class="close-keyboard" id="closeKeyboard">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <div class="keyboard-preview">
            <div class="preview-text" id="previewText"></div>
            <button class="clear-preview" id="clearPreview">
                <i class="fas fa-trash"></i>
            </button>
        </div>
        
        <div class="keyboard-categories" id="keyboardCategories">
            <button class="category-btn active" data-category="math">رياضيات</button>
            <button class="category-btn" data-category="science">علوم</button>
            <button class="category-btn" data-category="symbols">رموز</button>
            <button class="category-btn" data-category="arrows">أسهم</button>
            <button class="category-btn" data-category="greek">أحرف يونانية</button>
        </div>
        <div class="keyboard-symbols" id="keyboardSymbols">
            <!-- Symbols will be populated by JavaScript -->
        </div>
    </div>
    
    <div class="input-container">
        <div class="input-wrapper">
            <input type="text" id="userInput" placeholder="اطرح سؤالك التعليمي هنا..." maxlength="500" />
            <div class="character-count"><span id="charCount">0</span>/500</div>
                    <button id="sendButton" title="إرسال">
            <i class="fas fa-paper-plane"></i>
        </button>

        </div>
        <div class="action-buttons">
            <button class="action-button" id="keyboardButton" title="لوحة المفاتيح">
                <i class="fas fa-keyboard"></i>
            </button>
            <button class="action-button" id="recordButton" title="تسجيل صوتي">
                <i class="fas fa-microphone"></i>
            </button>
            <button class="action-button" id="imageButton" title="إرسال صورة">
                <i class="fas fa-image"></i>
            </button>
        </div>
        <div class="recording-indicator" id="recordingIndicator">
            <i class="fas fa-circle"></i>
            <span>جاري التسجيل</span>
        </div>
    </div>
    
    <!-- Image Upload Modal -->
    <div class="image-modal" id="imageModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">رفع صورة</h3>
                <button class="close-modal" id="closeModal">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="upload-area" id="uploadArea">
                <div class="upload-icon">
                    <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <div class="upload-text">انقر أو اسحب الصورة هنا</div>
                <div class="upload-hint">يدعم الصور بصيغة JPG, PNG, GIF</div>
                <input type="file" id="imageInput" accept="image/*">
            </div>
            <img id="imagePreview" class="image-preview" alt="معاينة الصورة">
            <div class="modal-actions">
                <button class="modal-button cancel-button" id="cancelUpload">إلغاء</button>
                <button class="modal-button upload-button" id="confirmUpload">رفع</button>
            </div>
        </div>
    </div>
    
    <footer>
        تم التطوير بواسطة Genius Ai 2023
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chatContainer = document.getElementById('chatContainer');
            const userInput = document.getElementById('userInput');
            const sendButton = document.getElementById('sendButton');
            const welcomeSuggestions = document.querySelectorAll('.welcome-suggestion');
            const languageToggle = document.getElementById('languageToggle');
            const welcomeMessage = document.getElementById('welcomeMessage');
            const charCount = document.getElementById('charCount');
            const historyButton = document.getElementById('historyButton');
            const historySidebar = document.getElementById('historySidebar');
            const closeHistory = document.getElementById('closeHistory');
            const historyList = document.getElementById('historyList');
            const clearHistory = document.getElementById('clearHistory');
            const overlay = document.getElementById('overlay');
            const keyboardButton = document.getElementById('keyboardButton');
            const chemistryKeyboard = document.getElementById('chemistryKeyboard');
            const closeKeyboard = document.getElementById('closeKeyboard');
            const keyboardCategories = document.getElementById('keyboardCategories');
            const keyboardSymbols = document.getElementById('keyboardSymbols');
            const previewText = document.getElementById('previewText');
            const clearPreview = document.getElementById('clearPreview');
            const recordButton = document.getElementById('recordButton');
            const recordingIndicator = document.getElementById('recordingIndicator');
            const imageButton = document.getElementById('imageButton');
            const imageModal = document.getElementById('imageModal');
            const closeModal = document.getElementById('closeModal');
            const uploadArea = document.getElementById('uploadArea');
            const imageInput = document.getElementById('imageInput');
            const imagePreview = document.getElementById('imagePreview');
            const cancelUpload = document.getElementById('cancelUpload');
            const confirmUpload = document.getElementById('confirmUpload');
            
            let isEnglish = false;
            let isTypingEffectActive = false;
            let isRecording = false;
            let mediaRecorder;
            let audioChunks = [];
            let chatHistory = JSON.parse(localStorage.getItem('geniusAiChatHistory')) || [];
            const API_KEY = "AIzaSyCutSzU31szCinRW_YDI9JgXnkB6idA0tU";
            
            // تعريف الرموز التعليمية لكل فئة
            const educationSymbols = {
                math: [
                    '+', '-', '×', '÷', '=', '≠', '≈', '±', '√', '∞',
                    '∫', '∑', '∏', '∂', '∆', '∇', '∈', '∉', '∀', '∃',
                    '∴', '∵', '∶', '∷', '∝', '≅', '≡', '≤', '≥', '≪',
                    '≫', '≺', '≻', '⊂', '⊃', '⊆', '⊇', '∪', '∩', '∅',
                    '∠', '⊥', '∥', '°', 'π', 'θ', 'α', 'β', 'γ', 'δ'
                ],
                science: [
                    'H', 'He', 'Li', 'Be', 'B', 'C', 'N', 'O', 'F', 'Ne',
                    'Na', 'Mg', 'Al', 'Si', 'P', 'S', 'Cl', 'Ar', 'K', 'Ca',
                    'Fe', 'Cu', 'Zn', 'Ag', 'Au', 'Hg', 'Pb', 'U', 'Pt', 'Br',
                    'H₂O', 'CO₂', 'NH₃', 'CH₄', 'HCl', 'H₂SO₄', 'NaOH', 'NaCl', 'C₆H₁₂O₆', 'CaCO₃'
                ],
                symbols: [
                    '→', '←', '↑', '↓', '↔', '↣', '⇒', '⇔', '⇌', '⇋',
                    '↽', '⇀', '↼', '⇁', '⇀', '↽', '↼', '⇁', '⇄', '⇅',
                    '■', '□', '▲', '△', '●', '○', '★', '☆', '◆', '◇',
                    '†', '‡', '•', '‣', '⁃', '◦', '☑', '✓', '✔', '✗'
                ],
                arrows: [
                    '→', '←', '↑', '↓', '↔', '↕', '↖', '↗', '↘', '↙',
                    '↚', '↛', '↜', '↝', '↞', '↟', '↠', '↡', '↢', '↣',
                    '↤', '↥', '↦', '↧', '↨', '↩', '↪', '↫', '↬', '↭',
                    '↮', '↯', '↰', '↱', '↲', '↳', '↴', '↵', '↶', '↷'
                ],
                greek: [
                    'α', 'β', 'γ', 'δ', 'ε', 'ζ', 'η', 'θ', 'ι', 'κ',
                    'λ', 'μ', 'ν', 'ξ', 'ο', 'π', 'ρ', 'σ', 'τ', 'υ',
                    'φ', 'χ', 'ψ', 'ω', 'Α', 'Β', 'Γ', 'Δ', 'Ε', 'Ζ',
                    'Η', 'Θ', 'Ι', 'Κ', 'Λ', 'Μ', 'Ν', 'Ξ', 'Ο', 'Π'
                ]
            };
            
            // تهيئة لوحة المفاتيح التعليمية
            function initEducationKeyboard() {
                // إضافة مستمعي الأحداث لأزرار الفئات
                const categoryButtons = keyboardCategories.querySelectorAll('.category-btn');
                categoryButtons.forEach(btn => {
                    btn.addEventListener('click', function() {
                        categoryButtons.forEach(b => b.classList.remove('active'));
                        this.classList.add('active');
                        showSymbols(this.dataset.category);
                    });
                });
                
                // إضافة حدث لإغلاق لوحة المفاتيح
                closeKeyboard.addEventListener('click', toggleEducationKeyboard);
                
                // إضافة حدث لمسح معاينة الكتابة
                clearPreview.addEventListener('click', function() {
                    previewText.textContent = '';
                });
                
                // عرض الرموز الرياضية أولاً
                showSymbols('math');
            }
            
            // عرض الرموز للفئة المحددة
            function showSymbols(category) {
                keyboardSymbols.innerHTML = '';
                
                educationSymbols[category].forEach(symbol => {
                    const symbolBtn = document.createElement('button');
                    symbolBtn.classList.add('symbol-btn');
                    
                    // تمييز الرموز الخاصة بخلفية مختلفة
                    if (['+', '-', '×', '÷', '=', '√', 'π', 'H₂O', 'CO₂', '→'].includes(symbol)) {
                        symbolBtn.classList.add('special');
                    }
                    
                    symbolBtn.textContent = symbol;
                    symbolBtn.addEventListener('click', () => {
                        previewText.textContent += symbol;
                    });
                    keyboardSymbols.appendChild(symbolBtn);
                });
                
                // إضافة زر الإدخال
                const insertBtn = document.createElement('button');
                insertBtn.classList.add('symbol-btn');
                insertBtn.classList.add('special');
                insertBtn.innerHTML = '<i class="fas fa-arrow-left"></i>';
                insertBtn.title = 'إدراج في حقل الإدخال';
                insertBtn.addEventListener('click', function() {
                    userInput.value += previewText.textContent;
                    userInput.focus();
                    previewText.textContent = '';
                });
                keyboardSymbols.appendChild(insertBtn);
            }
            
            // تبديل عرض لوحة المفاتيح التعليمية
            function toggleEducationKeyboard() {
                chemistryKeyboard.classList.toggle('open');
                
                if (chemistryKeyboard.classList.contains('open')) {
                    keyboardButton.style.background = 'var(--bg-gradient-gold2)';
                    keyboardButton.style.color = 'var(--white2)';
                    previewText.textContent = '';
                } else {
                    keyboardButton.style.background = 'var(--border-gradient-onyx)';
                    keyboardButton.style.color = 'var(--gold-crayola)';
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
                                ? "I've received your voice message. How can I help you with this educational problem?" 
                                : "لقد تلقيت رسالتك الصوتية. كيف يمكنني مساعدتك في هذه المسألة التعليمية؟";
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
                updateHistoryUI();
            }
            
            // تحديث واجهة سجل المحادثات
            function updateHistoryUI() {
                historyList.innerHTML = '';
                
                if (chatHistory.length === 0) {
                    const emptyMessage = document.createElement('div');
                    emptyMessage.classList.add('history-item');
                    emptyMessage.textContent = isEnglish ? 'No history yet' : 'لا يوجد سجل محادثات بعد';
                    historyList.appendChild(emptyMessage);
                    return;
                }
                
                chatHistory.forEach((item, index) => {
                    const historyItem = document.createElement('div');
                    historyItem.classList.add('history-item');
                    
                    const queryDiv = document.createElement('div');
                    queryDiv.classList.add('history-query');
                    queryDiv.textContent = item.query;
                    
                    const dateDiv = document.createElement('div');
                    dateDiv.classList.add('history-date');
                    dateDiv.textContent = formatDate(item.timestamp);
                    
                    historyItem.appendChild(queryDiv);
                    historyItem.appendChild(dateDiv);
                    
                    historyItem.addEventListener('click', () => {
                        loadHistoryItem(index);
                        toggleHistorySidebar();
                    });
                    
                    historyList.appendChild(historyItem);
                });
            }
            
            // new code 

            const filesButton = document.getElementById('filesButton');
const filesSidebar = document.getElementById('filesSidebar');
const closeFiles = document.getElementById('closeFiles');
const filesList = document.getElementById('filesList');

// 🟢 المتغير اللي يخزن الملف الحالي
let currentIndexPath = localStorage.getItem("currentIndexPath") || "faiss_index";

// فتح/إغلاق قائمة الملفات
filesButton.addEventListener('click', () => {
    filesSidebar.classList.add('open');
    overlay.classList.add('active');
    loadFiles();
});

closeFiles.addEventListener('click', () => {
    filesSidebar.classList.remove('open');
    overlay.classList.remove('active');
});

overlay.addEventListener('click', () => {
    filesSidebar.classList.remove('open');
});

// جلب الملفات من السيرفر
async function loadFiles() {
    try {
        const res = await fetch("../../data/get_files.php");
        const files = await res.json();
        filesList.innerHTML = "";

        if (!files.length) {
            filesList.innerHTML = "<p style='padding:10px;'>🚫 لا توجد ملفات</p>";
            return;
        }

        files.forEach(file => {
            const div = document.createElement("div");
            div.classList.add("file-item");
            div.innerHTML = `
                <strong>${file.file_name}</strong><br>
                <small>${(file.file_size/1024).toFixed(2)} KB</small><br>
                <button class="use-file" data-index="${file.index_path}">استخدام</button>
            `;
            filesList.appendChild(div);
        });

        // لما يضغط على زر استخدام
        document.querySelectorAll(".use-file").forEach(btn => {

         
      

btn.addEventListener("click", (e) => {
    const selectedFile = files.find(f => f.index_path === e.target.dataset.index);

    currentIndexPath = e.target.dataset.index;
    localStorage.setItem("currentIndexPath", currentIndexPath);

    const msgElement = addMessage('', false);
    typeMessage("📂 تم اختيار الملف: " + (selectedFile?.file_name || "غير معروف"), msgElement, 20);

    filesSidebar.classList.remove('open');
    overlay.classList.remove('active');
});

        });
    } catch (err) {
        filesList.innerHTML = "<p>⚠️ خطأ في تحميل الملفات</p>";
        console.error(err);
    }
}


            //new code
            // تحميل عنصر من السجل
            function loadHistoryItem(index) {
                const item = chatHistory[index];
                chatContainer.innerHTML = '';
                
                // إضافة رسالة المستخدم
                addMessage(item.query, true);
                
                // إضافة رسالة البوت
                const messageElement = addMessage('', false);
                typeMessage(item.response, messageElement, 5);
            }
            
            // تنسيق التاريخ
            function formatDate(timestamp) {
                const date = new Date(timestamp);
                const now = new Date();
                const diffTime = Math.abs(now - date);
                const diffDays = Math.floor(diffTime / (1000 * 60 * 60 * 24));
                
                if (diffDays === 0) {
                    return isEnglish ? 'Today' : 'اليوم';
                } else if (diffDays === 1) {
                    return isEnglish ? 'Yesterday' : 'أمس';
                } else if (diffDays < 7) {
                    return isEnglish ? `${diffDays} days ago` : `منذ ${diffDays} أيام`;
                } else {
                    return date.toLocaleDateString(isEnglish ? 'en-US' : 'ar-SA');
                }
            }
            
            // تبديل عرض القائمة الجانبية للسجل
            function toggleHistorySidebar() {
                historySidebar.classList.toggle('open');
                overlay.classList.toggle('active');
                
                if (historySidebar.classList.contains('open')) {
                    updateHistoryUI();
                }
            }
            
            // رفع صورة
            function handleImageUpload() {
                const input = document.createElement('input');
                input.type = 'file';
                input.accept = 'image/*';
                
                input.onchange = function(e) {
                    const file = e.target.files[0];
                    if (!file) return;
                    
                    if (!file.type.match('image.*')) {
                        alert(isEnglish ? 'Please select an image file' : 'يرجى اختيار ملف صورة');
                        return;
                    }
                    
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        imagePreview.src = e.target.result;
                        imagePreview.style.display = 'block';
                    };
                    reader.readAsDataURL(file);
                };
                
                input.click();
            }
            
            function confirmImageUpload() {
                if (imagePreview.src) {
                    addMessage(isEnglish ? 'Image uploaded for analysis' : 'تم رفع الصورة للتحليل', true, imagePreview.src);
                    
                    // إغلاق النافذة وإعادة تعيينها
                    closeImageModal();
                    
                    // محاكاة استجابة الذكاء الاصطناعي للصورة
                    setTimeout(() => {
                        const typingIndicator = showTypingIndicator();
                        
                        setTimeout(() => {
                            hideTypingIndicator(typingIndicator);
                            const messageElement = addMessage('', false);
                            const response = isEnglish 
                                ? "I've analyzed your image. This appears to be an educational diagram. How can I help you understand it better?" 
                                : "لقد قمت بتحليل صورتك. يبدو أن هذا رسم توضيحي تعليمي. كيف يمكنني مساعدتك في فهمه بشكل أفضل؟";
                            typeMessage(response, messageElement, 20);
                            
                            // حفظ المحادثة في السجل
                            saveToHistory(isEnglish ? '[Image analysis request]' : '[طلب تحليل صورة]', response, Date.now());
                        }, 2000);
                    }, 1000);
                }
            }
            
            function closeImageModal() {
                imageModal.classList.remove('open');
                imagePreview.src = '';
                imagePreview.style.display = 'none';
                imageInput.value = '';
            }
            
            // استدعاء API Gemini للحصول على إجابة
      /*
      
            async function getGeminiResponse(prompt) {
                try {
                    const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent?key=${API_KEY}`;
                    
                    // تحديد التعليمات للذكاء الاصطناعي
                    const instructions = isEnglish ? 
                        "You are an educational assistant called Genius Ai. You must follow these rules strictly:\n\n" +
                        "1. Only answer educational questions related to science, math, languages, history, and learning techniques\n" +
                        "2. Provide clear, detailed explanations suitable for students\n" +
                        "3. If asked about non-educational topics, politely redirect to educational content\n" +
                        "4. Use examples and analogies to make concepts easier to understand\n" +
                        "5. Answer in English\n\n" +
                        "User question: " + prompt
                        :
                        "أنت مساعد تعليمي يسمى Genius Ai. يجب عليك اتباع هذه القواعد بدقة:\n\n" +
                        "1. أجب فقط على الأسئلة التعليمية المتعلقة بالعلوم، الرياضيات، اللغات، التاريخ، وتقنيات التعلم\n" +
                        "2. قدم شرحًا واضحًا ومفصلاً مناسبًا للطلاب\n" +
                        "3. إذا سُئلت عن مواضيع غير تعليمية، فوجّه الحديث بلطف إلى المحتوى التعليمي\n" +
                        "4. استخدم الأمثلة والقياسات لجعل المفاهيم أسهل للفهم\n" +
                        "5. أجب باللغة العربية\n\n" +
                        "سؤال المستخدم: " + prompt;
                    
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
            */
            // الردود الاحتياطية في حالة فشل API
            function getFallbackResponse(query) {
                const lowerQuery = query.toLowerCase();
                const lang = isEnglish ? 'en' : 'ar';
                
                // الكشف إذا كان السؤال خارج نطاق التعليمي
                const isEducationalQuestion = (
                    lowerQuery.includes('تعلم') ||
                    lowerQuery.includes('درس') ||
                    lowerQuery.includes('مدرسة') ||
                    lowerQuery.includes('جامعة') ||
                    lowerQuery.includes('طالب') ||
                    lowerQuery.includes('مذاكرة') ||
                    lowerQuery.includes('علم') ||
                    lowerQuery.includes('رياضيات') ||
                    lowerQuery.includes('تاريخ') ||
                    lowerQuery.includes('جغرافيا') ||
                    lowerQuery.includes('كيمياء') ||
                    lowerQuery.includes('فيزياء') ||
                    lowerQuery.includes('أحياء') ||
                    lowerQuery.includes('لغة') ||
                    lowerQuery.includes('قواعد') ||
                    lowerQuery.includes('learn') ||
                    lowerQuery.includes('study') ||
                    lowerQuery.includes('school') ||
                    lowerQuery.includes('university') ||
                    lowerQuery.includes('student') ||
                    lowerQuery.includes('math') ||
                    lowerQuery.includes('science') ||
                    lowerQuery.includes('history') ||
                    lowerQuery.includes('geography') ||
                    lowerQuery.includes('chemistry') ||
                    lowerQuery.includes('physics') ||
                    lowerQuery.includes('biology') ||
                    lowerQuery.includes('language') ||
                    lowerQuery.includes('grammar')
                );
                
                if (!isEducationalQuestion) {
                    return lang === 'ar' 
                        ? 'أنا متخصص فقط في المواضيع التعليمية. للأسف لا أستطيع الإجابة على أسئلة خارج هذا النطاق. كيف يمكنني مساعدتك في موضوع تعليمي اليوم؟'
                        : "I'm sorry, I can only answer educational questions. How can I help you with an educational topic today?";
                }
                
                if (lowerQuery.includes('مذاكرة') || lowerQuery.includes('دراسة') || lowerQuery.includes('study')) {
                    return lang === 'ar' 
                        ? 'إليك بعض النصائح للمذاكرة الفعالة:\n\n• خذ فترات راحة منتظمة (تقنية بومودورو: 25 دقيقة دراسة + 5 دقائق راحة)\n• استخدم الخرائط الذهنية لتنظيم المعلومات\n• علّم ما تعلمته لشخص آخر\n• أنشئ اختبارات تدريبية لنفسك\n• استخدم التكرار المتباعد لتعزيز الذاكرة طويلة المدى\n• ابحث عن بيئة دراسة هادئة وخالية من المشتتات\n• حدد أهدافًا واضحة لكل جلسة دراسة'
                        : 'Here are some tips for effective studying:\n\n• Take regular breaks (Pomodoro technique: 25 minutes study + 5 minutes break)\n• Use mind maps to organize information\n• Teach what you learned to someone else\n• Create practice tests for yourself\n• Use spaced repetition to enhance long-term memory\n• Find a quiet study environment free from distractions\n• Set clear goals for each study session';
                }
                else if (lowerQuery.includes('تركيز') || lowerQuery.includes('focus')) {
                    return lang === 'ar' 
                        ? 'لتحسين التركيز:\n\n• تجنب تعدد المهام وركز على شيء واحد في كل مرة\n• استخدم تقنيات التأمل والتنفس العميق\n• احصل على قسط كافٍ من النوم ليلاً\n• مارس التمارين الرياضية بانتظام\n• قلل من استخدام الهاتف والتقنيات المشتتة\n• استخدم سماعات عازلة للضوضاء إذا لزم الأمر\n• قسم المهام الكبيرة إلى مهام صغيرة يسهل إدارتها'
                        : 'To improve focus:\n\n• Avoid multitasking and focus on one thing at a time\n• Use meditation and deep breathing techniques\n• Get enough sleep at night\n• Exercise regularly\n• Reduce phone and distracting technology use\n• Use noise-cancelling headphones if necessary\n• Break large tasks into smaller, manageable ones';
                }
                else if (lowerQuery.includes('فيثاغورس') || lowerQuery.includes('pythagoras')) {
                    return lang === 'ar' 
                        ? 'نظرية فيثاغورس تنص على أنه في المثلث القائم الزاوية، مربع طول الوتر يساوي مجموع مربعي طولي الضلعين الآخرين.\n\nالصيغة الرياضية: c² = a² + b²\nحيث:\n- c هو طول الوتر\n- a و b هما طولا الضلعين الآخرين\n\nمثال: إذا كان طول الضلع الأول 3 سم والثاني 4 سم، فإن طول الوتر = √(3² + 4²) = √(9 + 16) = √25 = 5 سم'
                        : 'The Pythagorean theorem states that in a right-angled triangle, the square of the hypotenuse is equal to the sum of the squares of the other two sides.\n\nMathematical formula: c² = a² + b²\nWhere:\n- c is the length of the hypotenuse\n- a and b are the lengths of the other two sides\n\nExample: If one side is 3 cm and the other is 4 cm, then the hypotenuse = √(3² + 4²) = √(9 + 16) = √25 = 5 cm';
                }
                else if (lowerQuery.includes('عربية') || lowerQuery.includes('arabic')) {
                    return lang === 'ar' 
                        ? 'من القواعد الأساسية في اللغة العربية:\n\n• الجملة تتكون من مبتدأ وخبر أو فعل وفاعل\n• الأسماء تُرفع وتُنصب وتُجر حسب موقعها في الجملة\n• الفعل الماضي يُبني على الفتح، والمضارع يُرفع إذا لم يسبقه ناصب أو جازم\n• أنواع الجمع: جمع المذكر السالم، جمع المؤنث السالم، وجمع التكسير\n• الإعراب: الرفع بالضمة، النصب بالفتحة، الجر بالكسرة\n• الأدوات التي تنصب الفعل المضارع: أن، لن، كي، حتى، لام التعليل\n• الأدوات التي تجزم الفعل المضارع: لم، لام الأمر، لا الناهية'
                        : 'Basic rules of Arabic grammar:\n\n• Sentences consist of subject and predicate or verb and subject\n• Nouns are declined according to their position in the sentence (nominative, accusative, genitive)\n• Past tense verbs are fixed, while present tense verbs change based on preceding particles\n• Types of plurals: sound masculine plural, sound feminine plural, and broken plural\n• Case endings: nominative with damma, accusative with fatha, genitive with kasra\n• Particles that make the present tense verb accusative: an, lan, kay, hatta, lam of purpose\n• Particles that make the present tense verb jussive: lam, lam of command, la of prohibition';
                }
                else {
                    return lang === 'ar' 
                        ? 'أهلاً بك! أنا Genius Ai، مساعدك التعليمي. يمكنني مساعدتك في:\n\n• شرح المفاهيم العلمية والرياضية\n• تقديم نصائح للدراسة والتعلم الفعال\n• مساعدتك في فهم القواعد اللغوية\n• شرح النظريات والأحداث التاريخية\n• الإجابة على استفساراتك التعليمية\n\nما هو الموضوع الذي تريد التعلم عنه اليوم؟'
                        : 'Welcome! I am Genius Ai, your educational assistant. I can help you with:\n\n• Explaining scientific and mathematical concepts\n• Providing study and learning tips\n• Helping you understand language rules\n• Explaining theories and historical events\n• Answering your educational inquiries\n\nWhat topic would you like to learn about today?';
                }
            }
            
            // إرسال رسالة
         async function sendMessage() {
    const message = userInput.value.trim();
    if (message && !isTypingEffectActive) {
        addMessage(message, true);
        userInput.value = '';
        charCount.textContent = '0';

        const typingIndicator = showTypingIndicator();

        try {
            // 🟢 هنا نضيف index_path مع الرسالة
          /*  const payload = {
                query: message,
                index_path: currentIndexPath
            };
            */
const payload = {
    question: message,      // بدل query بخليها question
    index_path: currentIndexPath,
        prev_question: ""   // ✅ لازم تبقى string حتى لو فاضية

};

            const res = await fetch("../../proxies/chatpdf/ask.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify(payload)
            });

const data = await res.json();
console.log("🔍 API Response:", data);   // <-- أضف السطر ده


            hideTypingIndicator(typingIndicator);
            const messageElement = addMessage('', false);
            await typeMessage(data.answer || "⚠️ لم يتم الحصول على رد", messageElement, 20);

            saveToHistory(message, data.answer, Date.now());
        } catch (error) {
            hideTypingIndicator(typingIndicator);
            const messageElement = addMessage('', false);
            await typeMessage("⚠️ خطأ أثناء معالجة الطلب", messageElement, 20);
        }
    }
}

            
            // تبديل اللغة
            function toggleLanguage() {
                isEnglish = !isEnglish;
                
                if (isEnglish) {
                    document.documentElement.setAttribute('lang', 'en');
                    document.documentElement.setAttribute('dir', 'ltr');
                    document.querySelector('title').textContent = 'Genius Ai - Educational Tool';
                    document.querySelector('h1').textContent = 'Genius Ai - Educational Tool';
                    userInput.placeholder = 'Type your educational question here...';
                    document.querySelector('footer').textContent = 'Developed by Genius Ai 2023';
                } else {
                    document.documentElement.setAttribute('lang', 'ar');
                    document.documentElement.setAttribute('dir', 'rtl');
                    document.querySelector('title').textContent = 'Genius Ai - أداة تعليمية';
                    document.querySelector('h1').textContent = 'Genius Ai - أداة تعليمية';
                    userInput.placeholder = 'اطرح سؤالك التعليمي هنا...';
                    document.querySelector('footer').textContent = 'تم التطوير بواسطة Genius Ai 2023';
                }
                
                updateWelcomeMessage();
                updateHistoryUI();
            }
            
            // تحديث رسالة الترحيب عند تغيير اللغة
            function updateWelcomeMessage() {
                const welcomeIcon = welcomeMessage.querySelector('.welcome-icon');
                const welcomeText = welcomeMessage.querySelector('.welcome-text');
                const welcomeSubtext = welcomeMessage.querySelector('.welcome-subtext');
                const welcomeSuggestions = welcomeMessage.querySelectorAll('.welcome-suggestion');
                
                if (isEnglish) {
                    welcomeText.textContent = "Welcome to Genius Ai!";
                    welcomeSubtext.textContent = "Someone is typing...";
                    
                    // تحديث اقتراحات الترحيب
                    welcomeSuggestions[0].innerHTML = '<i class="fas fa-brain"></i>Effective study methods';
                    welcomeSuggestions[0].setAttribute('data-query', 'What are the best study methods?');
                    welcomeSuggestions[1].innerHTML = '<i class="fas fa-bullseye"></i>Improve focus';
                    welcomeSuggestions[1].setAttribute('data-query', 'How can I improve my focus?');
                    welcomeSuggestions[2].innerHTML = '<i class="fas fa-square-root-alt"></i>Pythagorean theorem';
                    welcomeSuggestions[2].setAttribute('data-query', 'Explain the Pythagorean theorem');
                    welcomeSuggestions[3].innerHTML = '<i class="fas fa-book"></i>Arabic grammar rules';
                    welcomeSuggestions[3].setAttribute('data-query', 'What are the basic Arabic grammar rules?');
                } else {
                    welcomeText.textContent = "مرحبًا بك في Genius Ai!";
                    welcomeSubtext.textContent = "شخص ما يكتب حالياً...";
                    
                    // تحديث اقتراحات الترحيب
                    welcomeSuggestions[0].innerHTML = '<i class="fas fa-brain"></i>طرق المذاكرة الفعالة';
                    welcomeSuggestions[0].setAttribute('data-query', 'ما هي أفضل طرق المذاكرة؟');
                    welcomeSuggestions[1].innerHTML = '<i class="fas fa-bullseye"></i>تحسين التركيز';
                    welcomeSuggestions[1].setAttribute('data-query', 'كيف يمكنني تحسين تركيزي؟');
                    welcomeSuggestions[2].innerHTML = '<i class="fas fa-square-root-alt"></i>نظرية فيثاغورس';
                    welcomeSuggestions[2].setAttribute('data-query', 'اشرح لي نظرية فيثاغورس');
                    welcomeSuggestions[3].innerHTML = '<i class="fas fa-book"></i>قواعد اللغة العربية';
                    welcomeSuggestions[3].setAttribute('data-query', 'ما هي قواعد اللغة العربية الأساسية؟');
                }
            }
            
            // إضافة مستمعي الأحداث
            sendButton.addEventListener('click', sendMessage);
            
            userInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    sendMessage();
                }
            });
            
            welcomeSuggestions.forEach(suggestion => {
                suggestion.addEventListener('click', function() {
                    userInput.value = this.getAttribute('data-query');
                    sendMessage();
                });
            });
            
            keyboardButton.addEventListener('click', toggleEducationKeyboard);
            
            recordButton.addEventListener('click', function() {
                if (isRecording) {
                    stopRecording();
                } else {
                    startRecording();
                }
            });
            
            imageButton.addEventListener('click', function() {
                imageModal.classList.add('open');
            });
            
            languageToggle.addEventListener('click', toggleLanguage);
            
            historyButton.addEventListener('click', toggleHistorySidebar);
            
            closeHistory.addEventListener('click', toggleHistorySidebar);
            
            overlay.addEventListener('click', toggleHistorySidebar);
            
            clearHistory.addEventListener('click', function() {
                if (confirm(isEnglish ? 'Are you sure you want to clear all chat history?' : 'هل أنت متأكد من أنك تريد مسح سجل المحادثات بالكامل؟')) {
                    chatHistory = [];
                    localStorage.removeItem('geniusAiChatHistory');
                    updateHistoryUI();
                }
            });
            
            closeModal.addEventListener('click', function() {
                imageModal.classList.remove('open');
            });
            
            cancelUpload.addEventListener('click', function() {
                imageModal.classList.remove('open');
            });
            
            uploadArea.addEventListener('click', function() {
                imageInput.click();
            });
            
            imageInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (!file) return;
                
                if (!file.type.match('image.*')) {
                    alert(isEnglish ? 'Please select an image file' : 'يرجى اختيار ملف صورة');
                    return;
                }
                
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            });
            
            confirmUpload.addEventListener('click', confirmImageUpload);
            
            // إغلاق لوحة المفاتيح عند النقر خارجها
            document.addEventListener('click', function(e) {
                if (chemistryKeyboard.classList.contains('open') && 
                    !chemistryKeyboard.contains(e.target) && 
                    e.target !== keyboardButton && 
                    !e.target.closest('.symbol-btn')) {
                    toggleEducationKeyboard();
                }
            });
            
            // تهيئة التطبيق عند التحميل
            updateWelcomeMessage();
            initEducationKeyboard();
            updateHistoryUI();
        });
    </script>
</body>
</html>