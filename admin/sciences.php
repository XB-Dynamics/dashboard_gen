
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius Ai - مساعد العلوم للطلاب</title>
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
            --bg-gradient-green1: linear-gradient(
                to bottom right,
                hsl(120, 60%, 50%) 0%,
                hsla(120, 60%, 50%, 0.3) 50%
            );
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
            --text-gradient-green: linear-gradient(
                to right,
                hsl(120, 60%, 50%),
                hsl(120, 80%, 40%)
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
            --green-science: hsl(120, 60%, 50%);
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
            --science-color: var(--green-science);
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
            box-shadow: var(--shadow1);
            transform: translateX(100%);
            opacity: 0;
            transition: all var(--transition2);
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 10;
        }

        .history-sidebar.open {
            transform: translateX(0);
            opacity: 1;
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
            flex: 1;
            overflow-y: auto;
        }

        .history-item {
            padding: 12px;
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
            transform: translateY(-2px);
            box-shadow: var(--shadow2);
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
            background: var(--border-gradient-onyx);
            color: var(--light-gray);
            border: none;
            padding: 10px;
            border-radius: 8px;
            margin-top: 15px;
            cursor: pointer;
            transition: var(--transition1);
            position: relative;
            z-index: 1;
            text-align: center;
            font-size: var(--fs7);
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

        /* Science keyboard styles */
        .science-keyboard {
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

        .science-keyboard.open {
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

        .symbol-btn.science {
            font-weight: var(--fw600);
            background: var(--bg-gradient-green1);
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

        /* Overlay for when sidebar is open */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 5;
            display: none;
        }

        .overlay.active {
            display: block;
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
            
            .science-keyboard {
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
            
            .science-keyboard {
                bottom: 110px;
            }
            
            .keyboard-symbols {
                grid-template-columns: repeat(auto-fill, minmax(35px, 1fr));
            }
            
            .symbol-btn {
                height: 35px;
                font-size: var(--fs7);
            }
            
            .history-sidebar {
                width: 90%;
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
            <h1>Genius Ai - مساعد العلوم</h1>
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
                    <i class="fas fa-flask"></i>
                </div>
                <div class="welcome-text">مرحباً بك في مساعد العلوم الذكي!</div>
                <div class="welcome-subtext">أنا هنا لمساعدتك في فهم العلوم للصفوف الابتدائية والإعدادية. يمكنك طرح أي سؤال في العلوم وسأبذل جهدي لمساعدتك!</div>
            </div>
        </div>
        
        <div class="history-sidebar" id="historySidebar">
            <div class="history-header">
                <div class="history-title">سجل المحادثات</div>
                <button class="close-history" id="closeHistory">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="history-list" id="historyList">
                <!-- سيتم ملء سجل المحادثات هنا -->
            </div>
            <button class="clear-history" id="clearHistory">
                <i class="fas fa-trash"></i> مسح السجل
            </button>
        </div>
    </div>
    
    <!-- Science Keyboard -->
    <div class="science-keyboard" id="scienceKeyboard">
        <div class="keyboard-header">
            <div class="keyboard-title">لوحة الرموز والمصطلحات العلمية</div>
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
            <button class="category-btn active" data-category="basic">أساسي</button>
            <button class="category-btn" data-category="physics">فيزياء</button>
            <button class="category-btn" data-category="chemistry">كيمياء</button>
            <button class="category-btn" data-category="biology">أحياء</button>
            <button class="category-btn" data-category="earth">علوم الأرض</button>
            <button class="category-btn" data-category="units">وحدات قياس</button>
            <button class="category-btn" data-category="elements">عناصر</button>
        </div>
        <div class="keyboard-symbols" id="keyboardSymbols">
            <!-- Symbols will be populated by JavaScript -->
        </div>
    </div>
    
    <div class="input-container">
        <div class="input-wrapper">
            <input type="text" id="userInput" placeholder="اطرح سؤال العلوم هنا..." maxlength="500" />
            <div class="character-count"><span id="charCount">0</span>/500</div>
                    <button id="sendButton" title="إرسال">
            <i class="fas fa-paper-plane"></i>
        </button>

        </div>
        <div class="action-buttons">
            <button class="action-button" id="scienceButton" title="لوحة العلوم">
                <i class="fas fa-flask"></i>
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
    
    <footer>
        تم التطوير بواسطة Genius Ai 2023 - مساعد العلوم الذكي
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chatContainer = document.getElementById('chatContainer');
            const userInput = document.getElementById('userInput');
            const sendButton = document.getElementById('sendButton');
            const scienceButton = document.getElementById('scienceButton');
            const recordButton = document.getElementById('recordButton');
            const imageButton = document.getElementById('imageButton');
            const recordingIndicator = document.getElementById('recordingIndicator');
            const languageToggle = document.getElementById('languageToggle');
            const welcomeMessage = document.getElementById('welcomeMessage');
            const charCount = document.getElementById('charCount');
            const historyButton = document.getElementById('historyButton');
            const historySidebar = document.getElementById('historySidebar');
            const closeHistory = document.getElementById('closeHistory');
            const historyList = document.getElementById('historyList');
            const clearHistory = document.getElementById('clearHistory');
            const overlay = document.getElementById('overlay');
            const scienceKeyboard = document.getElementById('scienceKeyboard');
            const keyboardCategories = document.getElementById('keyboardCategories');
            const keyboardSymbols = document.getElementById('keyboardSymbols');
            const closeKeyboard = document.getElementById('closeKeyboard');
            const previewText = document.getElementById('previewText');
            const clearPreview = document.getElementById('clearPreview');
            
            let isEnglish = false;
            let isTypingEffectActive = false;
            let isRecording = false;
            let mediaRecorder;
            let audioChunks = [];
            let chatHistory = JSON.parse(localStorage.getItem('geniusAiChatHistory')) || [];
            const API_KEY = "AIzaSyCutSzU31szCinRW_YDI9JgXnkB6idA0tU";
            
            // تعريف الرموز والمصطلحات العلمية لكل فئة
            const scienceSymbols = {
                basic: [
                    '°', '℃', '℉', '%', '±', '≈', '∆', '→', '←', '↑',
                    '↓', '∞', 'μ', 'θ', 'α', 'β', 'γ', 'π', 'ρ', 'σ'
                ],
                physics: [
                    'F', 'm', 'a', 'v', 's', 't', 'P', 'W', 'E', 'p',
                    'λ', 'ν', 'c', 'h', 'I', 'V', 'R', 'Q', 'ω', 'τ'
                ],
                chemistry: [
                    'H₂O', 'CO₂', 'O₂', 'NaCl', 'H₂SO₄', 'C₆H₁₂O₆', 'pH', 
                    '→', '⇌', '↑', '↓', '∆H', 'NaOH', 'HCl', 'CH₄', 'NH₃'
                ],
                biology: [
                    'DNA', 'RNA', 'ATP', 'CO₂', 'O₂', 'H₂O', '♀', '♂', 
                    '→', '⇌', 'µ', '℃', 'pH', 'Ω', 'χ', 'λ'
                ],
                earth: [
                    '☀', '☁', '☂', '☃', '♁', '🌍', '🌎', '🌏', '🌕', '🌑',
                    '→', '⇌', '∆', '℃', '°', 'µ', '≈', '±', '%', 'ρ'
                ],
                units: [
                    'm', 'cm', 'mm', 'km', 'g', 'kg', 'mg', 's', 'min', 'h',
                    'L', 'mL', '℃', '℉', 'K', 'N', 'J', 'W', 'A', 'V'
                ],
                elements: [
                    'H', 'He', 'Li', 'Be', 'B', 'C', 'N', 'O', 'F', 'Ne',
                    'Na', 'Mg', 'Al', 'Si', 'P', 'S', 'Cl', 'Ar', 'K', 'Ca'
                ]
            };
            
            // تهيئة لوحة المفاتيح العلمية
            function initScienceKeyboard() {
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
                closeKeyboard.addEventListener('click', toggleScienceKeyboard);
                
                // إضافة حدث لمسح معاينة الكتابة
                clearPreview.addEventListener('click', function() {
                    previewText.textContent = '';
                });
                
                // عرض الرموز الأساسية أولاً
                showSymbols('basic');
            }
            
            // عرض الرموز للفئة المحددة
            function showSymbols(category) {
                keyboardSymbols.innerHTML = '';
                
                scienceSymbols[category].forEach(symbol => {
                    const symbolBtn = document.createElement('button');
                    symbolBtn.classList.add('symbol-btn');
                    
                    // تمييز الرموز الخاصة بخلفية مختلفة
                    if (['DNA', 'H₂O', 'CO₂', 'O₂', '℃', 'pH', '→', '⇌'].includes(symbol)) {
                        symbolBtn.classList.add('science');
                    }
                    
                    symbolBtn.textContent = symbol;
                    symbolBtn.addEventListener('click', () => {
                        previewText.textContent += ' ' + symbol;
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
            
            // تبديل عرض لوحة المفاتيح العلمية
            function toggleScienceKeyboard() {
                scienceKeyboard.classList.toggle('open');
                
                if (scienceKeyboard.classList.contains('open')) {
                    scienceButton.style.background = 'var(--bg-gradient-gold2)';
                    scienceButton.style.color = 'var(--white2)';
                    previewText.textContent = '';
                } else {
                    scienceButton.style.background = 'var(--border-gradient-onyx)';
                    scienceButton.style.color = 'var(--gold-crayola)';
                }
            }
            
            // إظهار رسالة ترحيبية تفاعلية
            function showWelcomeMessage() {
                const welcomeTexts = [
                    "مرحبًا بك في مساعد العلوم الذكي!",
                    "أهلاً! كيف يمكنني مساعدتك في العلوم اليوم؟",
                    "مساء الخير! مستعد لاستكشاف عالم العلوم؟",
                    "أهلًا بك! ما هو الموضوع العلمي الذي تريد معرفة المزيد عنه؟"
                ];
                
                const scienceTips = [
                    "يمكنني مساعدتك في الفيزياء، الكيمياء، الأحياء، وعلوم الأرض",
                    "لا تتردد في طرح أي سؤال في العلوم، مهما كان صعباً",
                    "يمكنك استخدام لوحة الرموز العلمية لإدخال المصطلحات بسهولة",
                    "أساعدك في فهم المفاهيم العلمية خطوة بخطوة"
                ];
                
                const randomWelcome = welcomeTexts[Math.floor(Math.random() * welcomeTexts.length)];
                const randomTip = scienceTips[Math.floor(Math.random() * scienceTips.length)];
                
                const welcomeDiv = document.createElement('div');
                welcomeDiv.classList.add('welcome-message');
                
                welcomeDiv.innerHTML = `
                    <div class="welcome-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <div class="welcome-text">${randomWelcome}</div>
                    <div class="welcome-subtext">${randomTip}</div>
                `;
                
                chatContainer.innerHTML = '';
                chatContainer.appendChild(welcomeDiv);
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
                                ? "I've received your voice message. How can I help you with this science question?" 
                                : "لقد تلقيت رسالتك الصوتية. كيف يمكنني مساعدتك في هذا السؤال العلمي؟";
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
                updateHistorySidebar();
            }
            
            // تحديث القائمة الجانبية للسجل
            function updateHistorySidebar() {
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
                    historyItem.dataset.index = index;
                    
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
            
            // تحميل عنصر من السجل
            function loadHistoryItem(index) {
                if (index >= 0 && index < chatHistory.length) {
                    const item = chatHistory[index];
                    chatContainer.innerHTML = '';
                    
                    // إضافة رسالة المستخدم
                    addMessage(item.query, true);
                    
                    // إضافة رسالة البوت
                    const messageElement = addMessage('', false);
                    typeMessage(item.response, messageElement, 20);
                }
            }
            
            // مسح السجل
            function clearChatHistory() {
                if (confirm(isEnglish ? 'Are you sure you want to clear all chat history?' : 'هل أنت متأكد من أنك تريد مسح سجل المحادثات بالكامل؟')) {
                    chatHistory = [];
                    localStorage.removeItem('geniusAiChatHistory');
                    updateHistorySidebar();
                }
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
            
            // تبديل القائمة الجانبية للسجل
            function toggleHistorySidebar() {
                historySidebar.classList.toggle('open');
                overlay.classList.toggle('active');
                
                if (historySidebar.classList.contains('open')) {
                    updateHistorySidebar();
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
                        addMessage(isEnglish ? 'Image uploaded' : 'تم رفع الصورة', true, e.target.result);
                        
                        // محاكاة استجابة الذكاء الاصطناعي للصورة
                        setTimeout(() => {
                            const typingIndicator = showTypingIndicator();
                            
                            setTimeout(() => {
                                hideTypingIndicator(typingIndicator);
                                const messageElement = addMessage('', false);
                                const response = isEnglish 
                                    ? "I've received your image. How can I help you with this science question?" 
                                    : "لقد تلقيت صورتك. كيف يمكنني مساعدتك في هذا السؤال العلمي؟";
                                typeMessage(response, messageElement, 20);
                                
                                // حفظ المحادثة في السجل
                                saveToHistory(isEnglish ? '[Image upload]' : '[رفع صورة]', response, Date.now());
                            }, 2000);
                        }, 1000);
                    };
                    reader.readAsDataURL(file);
                };
                
                input.click();
            }
            
            // استدعاء API Gemini للحصول على إجابة
            async function getGeminiResponse(prompt) {
                try {
                    const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent?key=${API_KEY}`;
                    
                    // تحديد التعليمات للذكاء الاصطناعي مع التركيز على العلوم
                    const instructions = isEnglish ? 
                        "You are a science educational assistant called Genius Ai for elementary and middle school students. You must follow these rules strictly:\n\n" +
                        "1. Only answer science-related questions (physics, chemistry, biology, earth science, etc.)\n" +
                        "2. Provide clear, step-by-step explanations for science concepts\n" +
                        "3. Use simple language suitable for elementary and middle school students\n" +
                        "4. If asked about non-science topics, politely redirect to science content\n" +
                        "5. Use examples and visual explanations to make concepts easier to understand\n" +
                        "6. Answer in English\n\n" +
                        "User question: " + prompt
                        :
                        "أنت مساعد تعليمي في العلوم يسمى Genius Ai للطلاب في المرحلتين الابتدائية والإعدادية. يجب عليك اتباع هذه القواعد بدقة:\n\n" +
                        "1. أجب فقط على الأسئلة المتعلقة بالعلوم (فيزياء، كيمياء، أحياء، علوم الأرض، إلخ)\n" +
                        "2. قدم شرحًا واضحًا خطوة بخطوة للمفاهيم العلمية\n" +
                        "3. استخدم لغة بسيطة مناسبة لطلاب المرحلتين الابتدائية والإعدادية\n" +
                        "4. إذا سُئلت عن مواضيع غير علمية، فوجّه الحديث بلطف إلى المحتوى العلمي\n" +
                        "5. استخدم الأمثلة والشرح المرئي لجعل المفاهيم أسهل للفهم\n" +
                        "6. أجب باللغة العربية\n\n" +
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
            
            // الردود الاحتياطية في حالة فشل API
            function getFallbackResponse(query) {
                const scienceResponses = isEnglish ? [
                    "Hello! I'm Genius Ai, your science assistant. I can help you with:\n\n• Physics concepts and experiments\n• Chemistry reactions and elements\n• Biology and living organisms\n• Earth science and environment\n• Step-by-step explanations\n\nWhat science topic would you like help with today?",
                    "Welcome to your science tutoring assistant! I specialize in explaining scientific concepts for elementary and middle school students. How can I help you with science today?",
                    "I'm here to help you understand science better. Feel free to ask any science-related question!"
                ] : [
                    "أهلاً! أنا Genius Ai، مساعدك في العلوم. يمكنني مساعدتك في:\n\n• مفاهيم وتجارب الفيزياء\n• تفاعلات وعناصر الكيمياء\n• الأحياء والكائنات الحية\n• علوم الأرض والبيئة\n• شرح المفاهيم خطوة بخطوة\n\nما هو الموضوع العلمي الذي تريد المساعدة فيه اليوم؟",
                    "مرحباً بك في مساعدك للعلوم! أنا متخصص في شرح المفاهيم العلمية لطلاب المرحلتين الابتدائية والإعدادية. كيف يمكنني مساعدتك في العلوم اليوم؟",
                    "أنا هنا لمساعدتك على فهم العلوم بشكل أفضل. لا تتردد في طرح أي سؤال متعلق بالعلوم!"
                ];
                
                return scienceResponses[Math.floor(Math.random() * scienceResponses.length)];
            }
            
            // إرسال رسالة
            async function sendMessage() {
                const message = userInput.value.trim();
                if (message && !isTypingEffectActive) {
                    addMessage(message, true);
                    userInput.value = '';
                    charCount.textContent = '0';
                    
                    // إغلاق لوحة المفاتيح العلمية إذا كانت مفتوحة
                    if (scienceKeyboard.classList.contains('open')) {
                        toggleScienceKeyboard();
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
                            ? "I'm sorry, I encountered an error while processing your science question. Please try again." 
                            : "عذرًا، حدث خطأ أثناء معالجة سؤالك العلمي. يرجى المحاولة مرة أخرى.";
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
                    document.querySelector('title').textContent = 'Genius Ai - Science Assistant';
                    document.querySelector('h1').textContent = 'Genius Ai - Science Assistant';
                    userInput.placeholder = 'Type your science question here...';
                    document.querySelector('footer').textContent = 'Developed by Genius Ai 2023 - Science Assistant';
                } else {
                    document.documentElement.setAttribute('lang', 'ar');
                    document.documentElement.setAttribute('dir', 'rtl');
                    document.querySelector('title').textContent = 'Genius Ai - مساعد العلوم';
                    document.querySelector('h1').textContent = 'Genius Ai - مساعد العلوم';
                    userInput.placeholder = 'اطرح سؤال العلوم هنا...';
                    document.querySelector('footer').textContent = 'تم التطوير بواسطة Genius Ai 2023 - مساعد العلوم الذكي';
                }
                
                showWelcomeMessage();
                updateHistorySidebar();
            }
            
            // إضافة مستمعي الأحداث
            sendButton.addEventListener('click', sendMessage);
            
            userInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    sendMessage();
                }
            });
            
            scienceButton.addEventListener('click', toggleScienceKeyboard);
            
            recordButton.addEventListener('click', function() {
                if (isRecording) {
                    stopRecording();
                } else {
                    startRecording();
                }
            });
            
            imageButton.addEventListener('click', handleImageUpload);
            
            languageToggle.addEventListener('click', toggleLanguage);
            
            historyButton.addEventListener('click', toggleHistorySidebar);
            
            closeHistory.addEventListener('click', toggleHistorySidebar);
            
            overlay.addEventListener('click', toggleHistorySidebar);
            
            clearHistory.addEventListener('click', clearChatHistory);
            
            // إغلاق لوحة المفاتيح عند النقر خارجها
            document.addEventListener('click', function(e) {
                if (scienceKeyboard.classList.contains('open') && 
                    !scienceKeyboard.contains(e.target) && 
                    e.target !== scienceButton && 
                    !e.target.closest('.symbol-btn')) {
                    toggleScienceKeyboard();
                }
            });
            
            // تهيئة التطبيق عند التحميل
            showWelcomeMessage();
            initScienceKeyboard();
        });
    </script>
</body>
</html>