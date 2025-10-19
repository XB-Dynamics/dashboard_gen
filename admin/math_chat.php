

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius Ai - الرياضيات</title>
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
            /*transform: scale(1.1);*/
            background: var(--bg-gradient-gold2);
            color: var(--white2);
        }

        .action-button, #sendButton {
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
        .action-button::before, #sendButton::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .action-button:hover, #sendButton:hover {
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

        /* Math keyboard styles */
        .math-keyboard {
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

        .math-keyboard.open {
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
            color: var(--gold-crayola);
        }

        .close-keyboard {
            background: none;
            border: none;
            color: var(--gold-crayola);
            font-size: 1.2rem;
            cursor: pointer;
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
            font-size: var(--fs7);
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
            background: var(--bg-gradient-gold2);
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

        /* Image upload modal */
        .image-modal {
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

        .image-modal.open {
            display: flex;
        }

        .image-modal-content {
            background: var(--bg-gradient-jet);
            padding: 25px;
            border-radius: 14px;
            width: 90%;
            max-width: 400px;
            box-shadow: var(--shadow5);
            position: relative;
            text-align: center;
        }

        .image-modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .image-modal-title {
            font-size: var(--fs4);
            font-weight: var(--fw600);
            color: var(--gold-crayola);
        }

        .close-image-modal {
            background: none;
            border: none;
            color: var(--gold-crayola);
            font-size: 1.2rem;
            cursor: pointer;
        }

        .image-preview {
            width: 100%;
            max-height: 200px;
            border-radius: 8px;
            margin-bottom: 20px;
            object-fit: contain;
            display: none;
        }

        .image-upload-btn {
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

        .image-upload-btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .image-upload-btn:hover {
            background: var(--bg-gradient-gold2);
            color: var(--white2);
        }

        .image-modal-actions {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }

        .send-image-btn {
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

        .send-image-btn:hover {
            transform: scale(1.05);
        }

        .cancel-image-btn {
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

        .cancel-image-btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .cancel-image-btn:hover {
            color: var(--white2);
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
            
            .action-button, #sendButton {
                width: 38px;
                height: 38px;
                font-size: 1rem;
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
            
            .action-button, #sendButton {
                width: 36px;
                height: 36px;
                font-size: 1rem;
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
            
            .math-keyboard {
                bottom: 60px;
            }
            
            .symbol-btn {
                height: 40px;
                font-size: var(--fs6);
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
                margin-top: 15px;
                margin-bottom: 25px;

                width: 100%;
                justify-content: center;
            }
            
            .action-button, #sendButton {
                width: 34px;
                height: 34px;
                font-size: 0.9rem;
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
            
            .math-keyboard {
                bottom: 100px;
                padding: 8px;
            }
            
            .keyboard-symbols {
                grid-template-columns: repeat(auto-fill, minmax(40px, 1fr));
                gap: 6px;
            }
            
            .symbol-btn {
                height: 38px;
                font-size: var(--fs7);
            }
            
            .category-btn {
                padding: 6px 12px;
                font-size: var(--fs8);
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
            
            .action-button, #sendButton {
                width: 32px;
                height: 32px;
                font-size: 0.9rem;
            }
            
            .math-suggestions {
                flex-direction: column;
                width: 100%;
            }
            
            .math-suggestion {
                width: 100%;
                justify-content: center;
            }
            
            .keyboard-symbols {
                grid-template-columns: repeat(auto-fill, minmax(35px, 1fr));
            }
            
            .symbol-btn {
                height: 35px;
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
            <h1>Genius Ai - الرياضيات</h1>
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
                    <i class="fas fa-calculator"></i>
                </div>
                <div class="welcome-text">مرحبًا بك في مساعد الرياضيات الذكي!</div>
                <div class="welcome-subtext">أداة متخصصة في حل المسائل الرياضية وشرح المفاهيم الرياضية</div>
                <div class="math-suggestions">
                    <div class="math-suggestion" data-query="كيف أحل معادلة من الدرجة الثانية؟">
                        <i class="fas fa-superscript"></i>
                        معادلات تربيعية
                    </div>
                    <div class="math-suggestion" data-query="اشرح لي نظرية فيثاغورس">
                        <i class="fas fa-shapes"></i>
                        نظرية فيثاغورس
                    </div>
                    <div class="math-suggestion" data-query="ما هي أساسيات التفاضل والتكامل؟">
                        <i class="fas fa-integral"></i>
                        تفاضل وتكامل
                    </div>
                    <div class="math-suggestion" data-query="كيف أحسب المساحة والمحيط؟">
                        <i class="fas fa-ruler-combined"></i>
                        مساحة ومحيط
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Sidebar for chat history -->
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
    
    <!-- Math Keyboard -->
    <div class="math-keyboard" id="mathKeyboard">
        <div class="keyboard-header">
            <div class="keyboard-title">لوحة الرموز الرياضية</div>
            <button class="close-keyboard" id="closeKeyboard">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="keyboard-categories" id="keyboardCategories">
            <button class="category-btn active" data-category="basic">أساسي</button>
            <button class="category-btn" data-category="operations">عمليات</button>
            <button class="category-btn" data-category="algebra">جبر</button>
            <button class="category-btn" data-category="geometry">هندسة</button>
            <button class="category-btn" data-category="calculus">تفاضل وتكامل</button>
            <button class="category-btn" data-category="sets">مجموعات</button>
            <button class="category-btn" data-category="greek">أحرف يونانية</button>
        </div>
        <div class="keyboard-symbols" id="keyboardSymbols">
            <!-- Symbols will be populated by JavaScript -->
        </div>
    </div>
    
    <!-- Image Upload Modal -->
    <div class="image-modal" id="imageModal">
        <div class="image-modal-content">
            <div class="image-modal-header">
                <h3 class="image-modal-title">رفع صورة</h3>
                <button class="close-image-modal" id="closeImageModal">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <img id="imagePreview" class="image-preview" alt="معاينة الصورة">
            <input type="file" id="imageUpload" accept="image/*" style="display: none;">
            <label for="imageUpload" class="image-upload-btn">
                <i class="fas fa-image"></i>
                اختر صورة
            </label>
            <div class="image-modal-actions">
                <button class="send-image-btn" id="sendImageBtn">إرسال الصورة</button>
                <button class="cancel-image-btn" id="cancelImageBtn">إلغاء</button>
            </div>
        </div>
    </div>
    
    <div class="input-container">
        
        <div class="input-wrapper">
            <input type="text" id="userInput" placeholder="اطرح سؤالك الرياضي هنا..." maxlength="500" />
            <div class="character-count"><span id="charCount">0</span>/500</div>
            <button id="sendButton" title="إرسال">
                <i class="fas fa-paper-plane"></i>
            </button>

        </div>
        
        <div class="action-buttons">
            <button class="action-button" id="imageButton" title="رفع صورة">
                <i class="fas fa-image"></i>
            </button>
            <button class="action-button" id="mathButton" title="لوحة الرياضيات">
                <i class="fas fa-square-root-alt"></i>
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
        تم التطوير بواسطة Genius Ai 2023 - متخصص في الرياضيات
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chatContainer = document.getElementById('chatContainer');
            const userInput = document.getElementById('userInput');
            const sendButton = document.getElementById('sendButton');
            const imageButton = document.getElementById('imageButton');
            const mathButton = document.getElementById('mathButton');
            const recordButton = document.getElementById('recordButton');
            const recordingIndicator = document.getElementById('recordingIndicator');
            const clearChatButton = document.getElementById('clearChatButton');
            const welcomeMessage = document.getElementById('welcomeMessage');
            const charCount = document.getElementById('charCount');
            const historyButton = document.getElementById('historyButton');
            const historySidebar = document.getElementById('historySidebar');
            const closeHistory = document.getElementById('closeHistory');
            const historyList = document.getElementById('historyList');
            const mathKeyboard = document.getElementById('mathKeyboard');
            const closeKeyboard = document.getElementById('closeKeyboard');
            const keyboardCategories = document.getElementById('keyboardCategories');
            const keyboardSymbols = document.getElementById('keyboardSymbols');
            const mathSuggestions = document.querySelectorAll('.math-suggestion');
            const overlay = document.getElementById('overlay');
            const imageModal = document.getElementById('imageModal');
            const imageUpload = document.getElementById('imageUpload');
            const imagePreview = document.getElementById('imagePreview');
            const closeImageModal = document.getElementById('closeImageModal');
            const sendImageBtn = document.getElementById('sendImageBtn');
            const cancelImageBtn = document.getElementById('cancelImageBtn');
            
            let isTypingEffectActive = false;
            let isRecording = false;
            let mediaRecorder;
            let audioChunks = [];
            let chatHistory = JSON.parse(localStorage.getItem('geniusAiChatHistory')) || [];
            let uploadedImage = null;
            
            // تعريف الرموز الرياضية لكل فئة
            const mathSymbols = {
                basic: [
                    '0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
                    '.', ',', '(', ')', '[', ']', '{', '}', '+', '-'
                ],
                operations: [
                    '+', '-', '×', '÷', '=', '≠', '≈', '±', '·', '∗',
                    '>', '<', '≥', '≤', '≡', '≅', '∝', '∞', '∫', '∑'
                ],
                algebra: [
                    'x', 'y', 'z', 'a', 'b', 'c', 'f', 'g', 'h', 'n',
                    'x²', 'x³', 'xⁿ', '√', '∛', '∜', '∠', '∆', '∇', '∂'
                ],
                geometry: [
                    '°', 'π', 'θ', 'α', 'β', 'γ', 'δ', 'λ', 'μ', 'ω',
                    '∥', '∦', '⊥', '∟', '∠', '△', '□', '◯', '≅', '∼'
                ],
                calculus: [
                    '∫', '∬', '∭', '∮', '∯', '∰', '∂', '∇', '∆', 'd/dx',
                    'lim', '∑', '∏', '∐', '′', '″', '‴', '∞', '→', '↦'
                ],
                sets: [
                    '∈', '∉', '∋', '∌', '⊂', '⊃', '⊆', '⊇', '∪', '∩',
                    '∅', '∖', '∆', '⊕', '⊗', '⋃', '⋂', '⋀', '⋁', '¬'
                ],
                greek: [
                    'α', 'β', 'γ', 'δ', 'ε', 'ζ', 'η', 'θ', 'ι', 'κ',
                    'λ', 'μ', 'ν', 'ξ', 'ο', 'π', 'ρ', 'σ', 'τ', 'ω'
                ]
            };
            
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
                    imgElement.classList.add('uploaded-image');
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
            
            // تهيئة لوحة المفاتيح الرياضية
            function initMathKeyboard() {
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
                    mathKeyboard.classList.remove('open');
                    mathButton.style.background = 'var(--border-gradient-onyx)';
                    mathButton.style.color = 'var(--gold-crayola)';
                });
            }
            
            // عرض الرموز للفئة المحددة
            function showSymbols(category) {
                keyboardSymbols.innerHTML = '';
                
                mathSymbols[category].forEach(symbol => {
                    const symbolBtn = document.createElement('button');
                    symbolBtn.classList.add('symbol-btn');
                    
                    // تمييز الرموز الخاصة بخلفية مختلفة
                    if (['∫', '∑', '∏', '√', 'π', '∞', '∆', '∇', '∂', 'lim'].includes(symbol)) {
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
            
            // تبديل عرض لوحة المفاتيح الرياضية
            function toggleMathKeyboard() {
                mathKeyboard.classList.toggle('open');
                
                if (mathKeyboard.classList.contains('open')) {
                    mathButton.style.background = 'var(--bg-gradient-gold2)';
                    mathButton.style.color = 'var(--white2)';
                } else {
                    mathButton.style.background = 'var(--border-gradient-onyx)';
                    mathButton.style.color = 'var(--gold-crayola)';
                }
            }
            
            // فتح نافذة رفع الصور
            function openImageModal() {
                imageModal.classList.add('open');
                overlay.classList.add('active');
            }
            
            // إغلاق نافذة رفع الصور
            function closeImageModalHandler() {
                imageModal.classList.remove('open');
                overlay.classList.remove('active');
                imagePreview.style.display = 'none';
                imagePreview.src = '';
                imageUpload.value = '';
                uploadedImage = null;
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
                        addMessage('رسالة صوتية', true, null, audioUrl);
                        
                        // محاكاة استجابة الذكاء الاصطناعي
                        const typingIndicator = showTypingIndicator();
                        
                        setTimeout(() => {
                            hideTypingIndicator(typingIndicator);
                            const messageElement = addMessage('', false);
                            const response = "لقد تلقيت رسالتك الصوتية. كيف يمكنني مساعدتك في هذه المسألة الرياضية؟";
                            typeMessage(response, messageElement, 20);
                            
                            // حفظ المحادثة في السجل
                            saveToHistory('[رسالة صوتية]', response, Date.now());
                        }, 2000);
                    };
                    
                    mediaRecorder.start();
                    isRecording = true;
                    recordButton.innerHTML = '<i class="fas fa-stop"></i>';
                    recordButton.style.color = 'var(--bittersweet-shimmer)';
                    recordingIndicator.style.display = 'flex';
                } catch (error) {
                    console.error('Error accessing microphone:', error);
                    alert('تم رفض الوصول إلى الميكروفون');
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
            
            // الردود المتخصصة في الرياضيات
            function getMathResponse(query) {
                const lowerQuery = query.toLowerCase();
                
                // الكشف إذا كان السؤال خارج نطاق الرياضيات
                const isMathQuestion = (
                    lowerQuery.includes('رياض') ||
                    lowerQuery.includes('math') ||
                    lowerQuery.includes('حساب') ||
                    lowerQuery.includes('معادلة') ||
                    lowerQuery.includes('مسألة') ||
                    lowerQuery.includes('هندس') ||
                    lowerQuery.includes('جبر') ||
                    lowerQuery.includes('تفاضل') ||
                    lowerQuery.includes('تكامل') ||
                    lowerQuery.includes('احتمال') ||
                    lowerQuery.includes('إحصاء') ||
                    lowerQuery.includes('عدد') ||
                    lowerQuery.includes('رقم') ||
                    lowerQuery.includes('geometry') ||
                    lowerQuery.includes('algebra') ||
                    lowerQuery.includes('calculus') ||
                    lowerQuery.includes('equation') ||
                    lowerQuery.includes('problem')
                );
                
                if (!isMathQuestion) {
                    return 'أنا متخصص فقط في الرياضيات. للأسف لا أستطيع الإجابة على أسئلة خارج هذا النطاق. كيف يمكنني مساعدتك في مسألة رياضية اليوم؟';
                }
                
                if (lowerQuery.includes('معادلة') || lowerQuery.includes('درجة')) {
                    return 'لحل معادلة من الدرجة الثانية على الصورة ax² + bx + c = 0:\n\n1. حدد معاملات a و b و c\n2. احسب المميز: Δ = b² - 4ac\n3. إذا كان Δ > 0: يوجد حلان حقيقيان مختلفان\n   x = (-b ± √Δ) / 2a\n4. إذا كان Δ = 0: يوجد حل حقيقي واحد مكرر\n   x = -b / 2a\n5. إذا كان Δ < 0: يوجد حلان عقديان\n   x = (-b ± i√|Δ|) / 2a\n\nمثال: لحل x² - 5x + 6 = 0\nΔ = 25 - 24 = 1\nx = (5 ± 1)/2\nالحلول: x = 3 أو x = 2';
                }
                else if (lowerQuery.includes('فيثاغور') || lowerQuery.includes('وتر')) {
                    return 'نظرية فيثاغورس تنص على أنه في المثلث القائم الزاوية:\n\n"مربع طول الوتر يساوي مجموع مربعي طولي الضلعين الآخرين"\n\nالصيغة الرياضية: a² + b² = c²\nحيث:\n- c هو طول الوتر (الضلع المقابل للزاوية القائمة)\n- a و b هما طولا الضلعين الآخرين\n\nمثال: إذا كان طول الضلع الأول 3 والضلع الثاني 4، فإن:\nالوتر = √(3² + 4²) = √(9 + 16) = √25 = 5';
                }
                else if (lowerQuery.includes('تفاضل') || lowerQuery.includes('تكامل')) {
                    return 'التفاضل والتكامل ينقسم إلى قسمين رئيسيين:\n\n1. التفاضل: يهتم بمعدل التغير والاشتقاق\n   - مشتق الدالة f(x) يُرمز له بـ f\'(x) или df/dx\n   - قواعد الاشتقاق: القاعدة الثابتة، القاعدة الأسية، قاعدة السلسلة\n\n2. التكامل: يهتم بجمع القيم ومساحات تحت المنحنيات\n   - التكامل غير المحدود: ∫f(x)dx = F(x) + C\n   - التكامل المحدود: ∫[a,b]f(x)dx = F(b) - F(a)\n\nهذان الفرعان مرتبطان بنظرية الأساسية للتفاضل والتكامل.';
                }
                else if (lowerQuery.includes('مساحة') || lowerQuery.includes('محيط')) {
                    return 'المساحة والمحيط لأشهر الأشكال الهندسية:\n\n1. المربع:\n   - المحيط = 4 × طول الضلع\n   - المساحة = طول الضلع²\n\n2. المستطيل:\n   - المحيط = 2 × (الطول + العرض)\n   - المساحة = الطول × العرض\n\n3. الدائرة:\n   - المحيط = 2 × π × نصف القطر\n   - المساحة = π × نصف القطر²\n\n4. المثلث:\n   - المحيط = مجموع أطوال الأضلاع\n   - المساحة = ½ × القاعدة × الارتفاع';
                }
                else {
                    return 'أهلاً بك! أنا مساعدك المتخصص في الرياضيات. يمكنني مساعدتك في:\n\n• حل المعادلات الرياضية بأنواعها\n• شرح النظريات والقوانين الرياضية\n• مسائل الهندسة والجبر\n• التفاضل والتكامل\n• الإحصاء والاحتمالات\n• تحليل الدوال والرسوم البيانية\n\nما هو السؤال الرياضي الذي تريد المساعدة فيه؟';
                }
            }
            
            // إرسال رسالة
            async function sendMessage() {
                const message = userInput.value.trim();
                if (message && !isTypingEffectActive) {
                    addMessage(message, true);
                    userInput.value = '';
                    charCount.textContent = '0';
                    
                    // إغلاق لوحة المفاتيح الرياضية إذا كانت مفتوحة
                    if (mathKeyboard.classList.contains('open')) {
                        toggleMathKeyboard();
                    }
                    
                    const typingIndicator = showTypingIndicator();
                    
                    try {
                        // استخدام الردود المحلية المتخصصة بدلاً من API
                        setTimeout(() => {
                            const response = getMathResponse(message);
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
            
            // إرسال صورة
            function sendImage() {
                if (uploadedImage) {
                    addMessage('صورة مرفقة', true, uploadedImage);
                    
                    // محاكاة استجابة الذكاء الاصطناعي
                    const typingIndicator = showTypingIndicator();
                    
                    setTimeout(() => {
                        hideTypingIndicator(typingIndicator);
                        const messageElement = addMessage('', false);
                        const response = "شكرًا لك على مشاركة الصورة. يبدو أن هذه مسألة رياضية. هل تريد مساعدتي في حلها؟";
                        typeMessage(response, messageElement, 20);
                        
                        // حفظ المحادثة في السجل
                        saveToHistory('[صورة مرفقة]', response, Date.now());
                    }, 1500);
                    
                    // إغلاق نافذة الصورة
                    closeImageModalHandler();
                }
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
            
            // إضافة مستمعي الأحداث
            sendButton.addEventListener('click', sendMessage);
            
            userInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    sendMessage();
                }
            });
            
            imageButton.addEventListener('click', openImageModal);
            
            mathButton.addEventListener('click', toggleMathKeyboard);
            
            recordButton.addEventListener('click', function() {
                if (isRecording) {
                    stopRecording();
                } else {
                    startRecording();
                }
            });
            
            clearChatButton.addEventListener('click', clearChat);
            
            historyButton.addEventListener('click', toggleHistorySidebar);
            
            closeHistory.addEventListener('click', toggleHistorySidebar);
            
            overlay.addEventListener('click', function() {
                if (historySidebar.classList.contains('open')) {
                    toggleHistorySidebar();
                }
                if (imageModal.classList.contains('open')) {
                    closeImageModalHandler();
                }
            });
            
            closeImageModal.addEventListener('click', closeImageModalHandler);
            
            cancelImageBtn.addEventListener('click', closeImageModalHandler);
            
            sendImageBtn.addEventListener('click', sendImage);
            
            imageUpload.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        imagePreview.src = event.target.result;
                        imagePreview.style.display = 'block';
                        uploadedImage = event.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });
            
            // إضافة مستمعي الأحداث للاقتراحات الرياضية
            mathSuggestions.forEach(suggestion => {
                suggestion.addEventListener('click', function() {
                    userInput.value = this.getAttribute('data-query');
                    sendMessage();
                });
            });
            
            // إغلاق لوحة المفاتيح عند النقر خارجها
            document.addEventListener('click', function(e) {
                if (mathKeyboard.classList.contains('open') && 
                    !mathKeyboard.contains(e.target) && 
                    e.target !== mathButton) {
                    toggleMathKeyboard();
                }
            });
            
            // تهيئة التطبيق عند التحميل
            initMathKeyboard();
            updateHistorySidebar();
        });
    </script>
</body>
</html>