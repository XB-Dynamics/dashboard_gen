
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius chat</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --bg-gradient-onyx: linear-gradient(to bottom right, hsl(240, 1%, 25%) 3%, hsl(0, 0%, 19%) 97%);
            --bg-gradient-jet: linear-gradient(to bottom right, hsla(240, 1%, 18%, 0.251) 3%, hsla(240, 2%, 11%, 0) 100%), hsl(240, 2%, 13%);
            --bg-gradient-yellow1: linear-gradient(to bottom right, hsl(45, 100%, 71%) 0%, hsla(36, 100%, 69%, 0) 50%);
            --bg-gradient-yellow2: linear-gradient(135deg, hsla(45, 100%, 71%, 0.251) 0%, hsla(35, 100%, 68%, 0) 59.86%), hsl(240, 2%, 13%);
            --border-gradient-onyx: linear-gradient(to bottom right, hsl(0, 0%, 25%) 0%, hsla(0, 0%, 25%, 0) 50%);
            --text-gradient-yellow: linear-gradient(to right, hsl(45, 100%, 72%), hsl(35, 100%, 68%));

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
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--smoky-black);
            color: var(--light-gray);
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* شريط العنوان */
        .app-header {
            background: var(--bg-gradient-onyx);
            color: var(--white2);
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: var(--shadow1);
            position: relative;
            z-index: 10;
            border-bottom: 1px solid var(--jet);
        }

        .app-header h1 {
            font-size: 20px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 10px;
            background: var(--text-gradient-yellow);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .app-header h1 i {
            color: var(--orange-yellow-crayola);
        }

        .header-icons {
            display: flex;
            gap: 20px;
        }

        .header-icons i {
            font-size: 20px;
            cursor: pointer;
            color: var(--light-gray70);
            transition: all var(--transition1);
        }

        .header-icons i:hover {
            color: var(--orange-yellow-crayola);
        }

        /* المحتوى الرئيسي */
        .main-content {
            display: flex;
            flex: 1;
            overflow: hidden;
            background-color: var(--smoky-black);
        }

        /* قائمة الدردشات */
        .chats-list {
            width: 350px;
            background: var(--bg-gradient-jet);
            border: 1px solid var(--jet);
            border-radius: 0 20px 20px 0;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            transition: all var(--transition2);
            box-shadow: var(--shadow1);
        }

        /* شريط البحث */
        .search-bar {
            padding: 15px;
            background: var(--eerie-black1);
            border-bottom: 1px solid var(--jet);
            position: sticky;
            top: 0;
            z-index: 5;
        }

        .search-container {
            display: flex;
            align-items: center;
            background: var(--bg-gradient-jet);
            border-radius: 14px;
            padding: 8px 15px;
            border: 1px solid var(--jet);
            box-shadow: var(--shadow1);
        }

        .search-container i {
            color: var(--light-gray70);
            margin-left: 8px;
        }

        .search-container input {
            flex: 1;
            border: none;
            outline: none;
            padding: 8px 0;
            font-size: 14px;
            background: transparent;
            color: var(--white2);
            font-weight: 300;
        }

        .search-container input::placeholder {
            color: var(--light-gray70);
        }

        .search-results {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: var(--bg-gradient-jet);
            border-radius: 0 0 14px 14px;
            box-shadow: var(--shadow2);
            max-height: 300px;
            overflow-y: auto;
            display: none;
            z-index: 10;
            border: 1px solid var(--jet);
        }

        .search-results.active {
            display: block;
        }

        .search-result-item {
            padding: 12px 20px;
            cursor: pointer;
            transition: background-color var(--transition1);
            display: flex;
            align-items: center;
            color: var(--white2);
        }

        .search-result-item:hover {
            background: var(--bg-gradient-yellow2);
        }

        .search-result-item .chat-avatar {
            margin-left: 10px;
        }

        .search-result-item .chat-info {
            flex: 1;
        }

        .chat-item {
            display: flex;
            padding: 15px;
            border-bottom: 1px solid var(--jet);
            cursor: pointer;
            transition: all var(--transition1);
            position: relative;
            z-index: 1;
        }

        .chat-item::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .chat-item:hover {
            background: var(--bg-gradient-yellow2);
        }

        .chat-item.active {
            background: var(--bg-gradient-yellow2);
            box-shadow: var(--shadow1);
        }

        .chat-avatar {
            width: 50px;
            height: 50px;
            border-radius: 14px;
            background: var(--bg-gradient-onyx);
            color: var(--orange-yellow-crayola);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-left: 10px;
            font-weight: 600;
            box-shadow: var(--shadow1);
            position: relative;
            z-index: 1;
        }

        .chat-avatar::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--eerie-black1);
            border-radius: inherit;
            z-index: -1;
        }

        .chat-info {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: hidden;
        }

        .chat-name {
            font-weight: 500;
            margin-bottom: 5px;
            color: var(--white2);
        }

        .chat-last-message {
            font-size: 13px;
            color: var(--light-gray70);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-weight: 300;
        }

        .chat-time {
            font-size: 12px;
            color: var(--light-gray70);
            font-weight: 300;
        }

        /* منطقة الدردشة */
        .chat-area {
            flex: 1;
            display: flex;
            flex-direction: column;
            background: var(--bg-gradient-jet);
            position: relative;
            border: 1px solid var(--jet);
            border-radius: 20px 0 0 20px;
            box-shadow: var(--shadow1);
        }

        .chat-messages {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
        }

        .message {
            max-width: 70%;
            margin-bottom: 15px;
            padding: 12px 15px;
            border-radius: 14px;
            position: relative;
            word-wrap: break-word;
            animation: fadeIn 0.3s ease-out;
            position: relative;
            z-index: 1;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .message.sent {
            background: var(--bg-gradient-yellow1);
            color: var(--smoky-black);
            align-self: flex-end;
            border-bottom-right-radius: 0;
            box-shadow: var(--shadow1);
        }

        .message.sent::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-yellow2);
            border-radius: inherit;
            z-index: -1;
        }

        .message.received {
            background: var(--bg-gradient-jet);
            align-self: flex-start;
            border-bottom-left-radius: 0;
            border: 1px solid var(--jet);
            box-shadow: var(--shadow1);
        }

        .message.received::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--eerie-black1);
            border-radius: inherit;
            z-index: -1;
        }

        .message-time {
            font-size: 11px;
            color: var(--light-gray);
            margin-top: 5px;
            text-align: end;
            font-weight: 300;
        }

        .message.received .message-time {
            color: var(--light-gray70);
        }

        .message-image {
            max-width: 100%;
            max-height: 300px;
            border-radius: 14px;
            margin-top: 8px;
            cursor: pointer;
            transition: transform var(--transition1);
            border: 1px solid var(--jet);
        }

        .message-image:hover {
            transform: scale(1.02);
        }

        .message-video {
            max-width: 100%;
            max-height: 300px;
            border-radius: 14px;
            margin-top: 8px;
            background-color: var(--smoky-black);
            cursor: pointer;
            border: 1px solid var(--jet);
        }

        .message-file {
            display: flex;
            align-items: center;
            padding: 12px;
            background: var(--bg-gradient-jet);
            border-radius: 10px;
            margin-top: 8px;
            cursor: pointer;
            transition: all var(--transition1);
            position: relative;
            z-index: 1;
            border: 1px solid var(--jet);
        }

        .message-file::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--eerie-black1);
            border-radius: inherit;
            z-index: -1;
        }

        .message-file:hover {
            background: var(--bg-gradient-yellow2);
        }

        .message-file i {
            font-size: 24px;
            margin-left: 10px;
            color: var(--orange-yellow-crayola);
        }

        .message.received .message-file i {
            color: var(--orange-yellow-crayola);
        }

        .message-file-info {
            flex: 1;
        }

        .message-file-name {
            font-size: 14px;
            margin-bottom: 3px;
            color: var(--white2);
            font-weight: 400;
        }

        .message.received .message-file-name {
            color: var(--white2);
        }

        .message-file-size {
            font-size: 12px;
            color: var(--light-gray70);
            font-weight: 300;
        }

        .message.received .message-file-size {
            color: var(--light-gray70);
        }

        /* إدخال الرسالة - الجزء المحسن */
        .message-input-area {
            padding: 15px;
            background: var(--bg-gradient-jet);
            display: flex;
            align-items: center;
            gap: 10px;
            position: relative;
            border-top: 1px solid var(--jet);
            border-radius: 0 0 20px 0;
            flex-wrap: wrap;
        }

        .message-input-container {
            flex: 1;
            display: flex;
            align-items: center;
            gap: 10px;
            min-width: 0;
        }

        .message-input {
            flex: 1;
            padding: 12px 20px;
            border: none;
            border-radius: 14px;
            font-size: 15px;
            outline: none;
            background: var(--bg-gradient-jet);
            color: var(--white2);
            transition: all var(--transition1);
            border: 1px solid var(--jet);
            box-shadow: var(--shadow1);
            font-weight: 300;
            min-width: 0;
        }

        .message-input:focus {
            box-shadow: 0 0 0 2px var(--orange-yellow-crayola);
        }

        .action-button {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: var(--light-gray70);
            font-size: 18px;
            border: none;
            background: var(--bg-gradient-jet);
            transition: all var(--transition1);
            position: relative;
            z-index: 1;
            box-shadow: var(--shadow1);
            flex-shrink: 0;
        }

        .action-button::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--eerie-black1);
            border-radius: inherit;
            z-index: -1;
        }

        .action-button:hover {
            color: var(--orange-yellow-crayola);
            background: var(--bg-gradient-yellow2);
        }

        .action-button.primary {
            background: var(--bg-gradient-yellow1);
            color: var(--smoky-black);
            font-weight: 600;
        }

        .action-button.primary::before {
            background: var(--bg-gradient-yellow2);
        }

        .action-button.primary:hover {
            background: var(--bg-gradient-yellow1);
            box-shadow: var(--shadow3);
        }

        .attachment-menu {
            position: absolute;
            bottom: 70px;
            right: 10px;
            background: var(--bg-gradient-jet);
            border-radius: 14px;
            box-shadow: var(--shadow3);
            max-height: 300px;
            overflow-y: auto;
            display: none;
            z-index: 20;
            animation: fadeInUp 0.2s ease-out;
            border: 1px solid var(--jet);
            width: 200px;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .attachment-menu.active {
            display: block;
        }

        .attachment-item {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            cursor: pointer;
            border-radius: 10px;
            transition: all var(--transition1);
            color: var(--white2);
            position: relative;
            z-index: 1;
        }

        .attachment-item::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--eerie-black1);
            border-radius: inherit;
            z-index: -1;
        }

        .attachment-item:hover {
            background: var(--bg-gradient-yellow2);
        }

        .attachment-item i {
            margin-left: 10px;
            color: var(--orange-yellow-crayola);
            font-size: 20px;
        }

        .attachment-item span {
            font-size: 14px;
            font-weight: 300;
        }

        /* نافذة المكالمة */
        .call-window {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--smoky-black);
            z-index: 100;
            display: none;
            flex-direction: column;
        }

        .call-window.active {
            display: flex;
        }

        .call-video-container {
            flex: 1;
            position: relative;
            overflow: hidden;
        }

        .call-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .remote-video {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 120px;
            height: 160px;
            border-radius: 14px;
            overflow: hidden;
            background: var(--bg-gradient-jet);
            border: 2px solid var(--orange-yellow-crayola);
            z-index: 2;
            box-shadow: var(--shadow3);
        }

        .remote-video video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .call-controls {
            padding: 20px;
            display: flex;
            justify-content: center;
            gap: 30px;
            background: rgba(0, 0, 0, 0.5);
        }

        .call-control {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 24px;
            color: var(--white2);
            transition: all var(--transition1);
            background: var(--bg-gradient-jet);
            position: relative;
            z-index: 1;
            box-shadow: var(--shadow3);
        }

        .call-control::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--eerie-black1);
            border-radius: inherit;
            z-index: -1;
        }

        .call-control:hover {
            transform: scale(1.1);
            box-shadow: var(--shadow3);
        }

        .call-control.end-call {
            background: var(--bittersweet-shimmer);
        }

        .call-control.end-call::before {
            background: var(--bittersweet-shimmer);
        }

        .call-info {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: var(--white2);
            z-index: 1;
        }

        .call-info h2 {
            font-size: 24px;
            margin-bottom: 10px;
            background: var(--text-gradient-yellow);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .call-info p {
            font-size: 16px;
            color: var(--light-gray70);
            font-weight: 300;
        }

        /* نافذة إنشاء غرفة */
        .room-modal {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            z-index: 200;
            display: none;
            align-items: center;
            justify-content: center;
        }

        .room-modal.active {
            display: flex;
        }

        .room-modal-content {
            background: var(--bg-gradient-jet);
            width: 90%;
            max-width: 400px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow5);
            animation: fadeInUp 0.3s ease-out;
            border: 1px solid var(--jet);
            position: relative;
            z-index: 1;
        }

        .room-modal-content::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--eerie-black1);
            border-radius: inherit;
            z-index: -1;
        }

        .room-modal-header {
            background: var(--bg-gradient-yellow1);
            color: var(--smoky-black);
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid var(--jet);
        }

        .room-modal-header h2 {
            font-weight: 600;
        }

        .room-modal-body {
            padding: 20px;
        }

        .room-input {
            width: 100%;
            padding: 12px 20px;
            margin-bottom: 20px;
            border: 1px solid var(--jet);
            border-radius: 14px;
            font-size: 16px;
            background: var(--bg-gradient-jet);
            color: var(--white2);
            transition: all var(--transition1);
            box-shadow: var(--shadow1);
            font-weight: 300;
            position: relative;
            z-index: 1;
        }

        .room-input::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--eerie-black1);
            border-radius: inherit;
            z-index: -1;
        }

        .room-input:focus {
            border-color: var(--orange-yellow-crayola);
            box-shadow: 0 0 0 2px var(--orange-yellow-crayola);
        }

        .room-buttons {
            display: flex;
            gap: 15px;
        }

        .room-button {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 14px;
            font-size: 16px;
            cursor: pointer;
            transition: all var(--transition1);
            position: relative;
            z-index: 1;
            font-weight: 500;
            box-shadow: var(--shadow1);
        }

        .room-button::before {
            content: "";
            position: absolute;
            inset: 1px;
            border-radius: inherit;
            z-index: -1;
        }

        .room-button.primary {
            background: var(--bg-gradient-yellow1);
            color: var(--smoky-black);
        }

        .room-button.primary::before {
            background: var(--bg-gradient-yellow2);
        }

        .room-button.primary:hover {
            background: var(--bg-gradient-yellow1);
            box-shadow: var(--shadow3);
        }

        .room-button.secondary {
            background: var(--bg-gradient-jet);
            color: var(--white2);
            border: 1px solid var(--jet);
        }

        .room-button.secondary::before {
            background: var(--eerie-black1);
        }

        .room-button.secondary:hover {
            background: var(--bg-gradient-yellow2);
        }

        /* معاينة المرفقات */
        .attachment-preview {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.9);
            z-index: 300;
            display: none;
            align-items: center;
            justify-content: center;
        }

        .attachment-preview.active {
            display: flex;
            animation: fadeIn 0.3s ease-out;
        }

        .preview-content {
            max-width: 90%;
            max-height: 90%;
            position: relative;
        }

        .preview-content img, .preview-content video {
            max-width: 100%;
            max-height: 80vh;
            display: block;
            border-radius: 20px;
            box-shadow: var(--shadow5);
        }

        .close-preview {
            position: absolute;
            top: -40px;
            right: 0;
            color: var(--white2);
            font-size: 24px;
            cursor: pointer;
            background: var(--bittersweet-shimmer);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow3);
        }

        /* إيموجي بيكر - الجزء المحسن */
        .emoji-picker {
            position: absolute;
            bottom: 70px;
            left: 10px;
            right: 10px;
            background: var(--bg-gradient-jet);
            border-radius: 14px;
            box-shadow: var(--shadow3);
            padding: 15px;
            display: none;
            z-index: 20;
            animation: fadeInUp 0.2s ease-out;
            border: 1px solid var(--jet);
            max-height: 250px;
            overflow-y: auto;
            position: relative;
            z-index: 1;
            width: auto;
        }

        .emoji-picker::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--eerie-black1);
            border-radius: inherit;
            z-index: -1;
        }

        .emoji-picker.active {
            display: block;
        }

        .emoji-category {
            margin-bottom: 15px;
        }

        .emoji-category-title {
            font-size: 14px;
            color: var(--orange-yellow-crayola);
            margin-bottom: 10px;
            padding-bottom: 5px;
            border-bottom: 1px solid var(--jet);
            font-weight: 500;
        }

        .emoji-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(30px, 1fr));
            gap: 8px;
        }

        .emoji-item {
            font-size: 22px;
            cursor: pointer;
            text-align: center;
            padding: 5px;
            border-radius: 8px;
            transition: all var(--transition1);
        }

        .emoji-item:hover {
            background: var(--bg-gradient-yellow2);
            transform: scale(1.1);
        }

        /* رمز G للإرسال */
        .send-g-icon {
            font-weight: bold;
            font-size: 20px;
            color: var(--smoky-black);
        }

        /* التكيف مع الشاشات الصغيرة */
        @media (max-width: 768px) {
            .chats-list {
                width: 100%;
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                display: none;
                z-index: 5;
                border-radius: 0;
            }
            
            .chats-list.active {
                display: flex;
            }
            
            .chat-area {
                display: none;
                border-radius: 0;
            }
            
            .chat-area.active {
                display: flex;
            }
            
            .header-icons {
                gap: 15px;
            }

            .message-input-area {
                padding: 10px;
                gap: 8px;
            }
            
            .message-input-container {
                order: 2;
                width: 100%;
            }
            
            .attachment-buttons {
                order: 1;
                width: 100%;
                justify-content: space-between;
            }
            
            .action-button {
                width: 42px;
                height: 42px;
                font-size: 16px;
            }
            
            .message-input {
                padding: 10px 15px;
                font-size: 14px;
            }
            
            .emoji-picker {
                width: calc(100% - 20px);
                max-height: 200px;
                left: 10px;
                right: 10px;
            }
            
            .emoji-grid {
                grid-template-columns: repeat(8, 1fr);
            }
        }

        /* تأثيرات خاصة بالواجهة العربية */
        [dir="rtl"] {
            text-align: right;
        }

        /* تحسينات جديدة */
        .attachment-buttons {
            display: flex;
            gap: 10px;
        }

        .emoji-picker-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 10px;
            border-bottom: 1px solid var(--jet);
            margin-bottom: 15px;
        }

        .emoji-search {
            width: 100%;
            padding: 10px 15px;
            margin-bottom: 15px;
            background: var(--bg-gradient-jet);
            border: 1px solid var(--jet);
            border-radius: 14px;
            color: var(--white2);
            outline: none;
            font-weight: 300;
            box-shadow: var(--shadow1);
        }

        /* نافذة اختيار الأعضاء */
        .members-modal {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            z-index: 200;
            display: none;
            align-items: center;
            justify-content: center;
        }

        .members-modal.active {
            display: flex;
        }

        .members-modal-content {
            background: var(--bg-gradient-jet);
            width: 90%;
            max-width: 400px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow5);
            animation: fadeInUp 0.3s ease-out;
            border: 1px solid var(--jet);
            position: relative;
            z-index: 1;
        }

        .members-modal-content::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--eerie-black1);
            border-radius: inherit;
            z-index: -1;
        }

        .members-modal-header {
            background: var(--bg-gradient-yellow1);
            color: var(--smoky-black);
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid var(--jet);
        }

        .members-modal-header h2 {
            font-weight: 600;
        }

        .members-modal-body {
            padding: 20px;
            max-height: 400px;
            overflow-y: auto;
        }

        .members-search {
            width: 100%;
            padding: 12px 20px;
            margin-bottom: 20px;
            background: var(--bg-gradient-jet);
            border: 1px solid var(--jet);
            border-radius: 14px;
            color: var(--white2);
            outline: none;
            font-weight: 300;
            box-shadow: var(--shadow1);
        }

        .member-item {
            display: flex;
            align-items: center;
            padding: 12px;
            border-bottom: 1px solid var(--jet);
            cursor: pointer;
            transition: all var(--transition1);
            position: relative;
            z-index: 1;
        }

        .member-item::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--eerie-black1);
            border-radius: inherit;
            z-index: -1;
        }

        .member-item:hover {
            background: var(--bg-gradient-yellow2);
        }

        .member-avatar {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: var(--bg-gradient-onyx);
            color: var(--orange-yellow-crayola);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            margin-left: 10px;
            font-weight: 600;
            box-shadow: var(--shadow1);
            position: relative;
            z-index: 1;
        }

        .member-avatar::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--eerie-black1);
            border-radius: inherit;
            z-index: -1;
        }

        .member-info {
            flex: 1;
        }

        .member-name {
            font-weight: 500;
            color: var(--white2);
        }

        .member-id {
            font-size: 12px;
            color: var(--light-gray70);
            font-weight: 300;
        }

        .member-checkbox {
            width: 20px;
            height: 20px;
            border: 1px solid var(--jet);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 10px;
            transition: all var(--transition1);
            position: relative;
            z-index: 1;
        }

        .member-checkbox::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--eerie-black1);
            border-radius: inherit;
            z-index: -1;
        }

        .member-checkbox.checked {
            background: var(--bg-gradient-yellow1);
            border-color: var(--orange-yellow-crayola);
        }

        .member-checkbox.checked::before {
            background: var(--bg-gradient-yellow2);
        }

        .members-modal-footer {
            padding: 15px;
            display: flex;
            justify-content: flex-end;
            border-top: 1px solid var(--jet);
        }

        .members-button {
            padding: 12px 24px;
            border: none;
            border-radius: 14px;
            font-size: 16px;
            cursor: pointer;
            transition: all var(--transition1);
            background: var(--bg-gradient-yellow1);
            color: var(--smoky-black);
            font-weight: 500;
            box-shadow: var(--shadow1);
            position: relative;
            z-index: 1;
        }

        .members-button::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-yellow2);
            border-radius: inherit;
            z-index: -1;
        }

        .members-button:hover {
            background: var(--bg-gradient-yellow1);
            box-shadow: var(--shadow3);
        }
    </style>
</head>
<body>
    <!-- شريط العنوان -->
    <div class="app-header">
        <div class="header-icons">
            <i class="fas fa-bars" id="menu-toggle"></i>
            <i class="fas fa-search" id="search-toggle"></i>
        </div>
        <h1><i class="fas fa-video"></i> Genius chat</h1>
        <div class="header-icons">
            <i class="fas fa-video" id="start-video-call"></i>
            <i class="fas fa-phone" id="start-voice-call"></i>
            <i class="fas fa-users" id="select-members"></i>
        </div>
    </div>

    <!-- المحتوى الرئيسي -->
    <div class="main-content">
        <!-- قائمة الدردشات -->
        <div class="chats-list active" id="chats-list">
            <!-- شريط البحث -->
            <div class="search-bar">
                <div class="search-container">
                    <i class="fas fa-search"></i>
                    <input type="text" id="search-input" placeholder="ابحث عن دردشة...">
                    <div class="search-results" id="search-results">
                        <!-- نتائج البحث تظهر هنا -->
                    </div>
                </div>
            </div>
            
            <div class="chat-list-items" id="chat-list-items">
                <!-- سيتم إضافة الدردشات ديناميكيًا هنا -->
            </div>
        </div>

        <!-- منطقة الدردشة -->
        <div class="chat-area" id="chat-area">
            <div class="chat-messages" id="chat-messages">
                <!-- سيتم إضافة الرسائل ديناميكيًا هنا -->
            </div>
            
            <div class="message-input-area">
                <div class="attachment-buttons">
                    <button class="action-button" id="attachment-btn">
                        <i class="fas fa-paperclip"></i>
                        <div class="attachment-menu" id="attachment-menu">
                            <div class="attachment-item" id="attach-image">
                                <i class="fas fa-image"></i>
                                <span>صورة</span>
                                <input type="file" accept="image/*" id="image-upload" style="display: none;">
                            </div>
                            <div class="attachment-item" id="attach-video">
                                <i class="fas fa-video"></i>
                                <span>فيديو</span>
                                <input type="file" accept="video/*" id="video-upload" style="display: none;">
                            </div>
                            <div class="attachment-item" id="attach-file">
                                <i class="fas fa-file-alt"></i>
                                <span>ملف</span>
                                <input type="file" id="file-upload" style="display: none;">
                            </div>
                        </div>
                    </button>
                    <button class="action-button" id="emoji-btn">
                        <i class="far fa-smile"></i>
                        <div class="emoji-picker" id="emoji-picker">
                            <div class="emoji-picker-header">
                                <span>الإيموجي</span>
                                <i class="fas fa-times close-emoji"></i>
                            </div>
                            <input type="text" class="emoji-search" placeholder="ابحث عن إيموجي..." id="emoji-search">
                            <div class="emoji-category">
                                <div class="emoji-category-title">وجوه</div>
                                <div class="emoji-grid" id="faces-emojis">
                                    <!-- سيتم إضافة الإيموجي ديناميكيًا -->
                                </div>
                            </div>
                            <div class="emoji-category">
                                <div class="emoji-category-title">أيدي</div>
                                <div class="emoji-grid" id="hands-emojis">
                                    <!-- سيتم إضافة الإيموجي ديناميكيًا -->
                                </div>
                            </div>
                            <div class="emoji-category">
                                <div class="emoji-category-title">قلوب</div>
                                <div class="emoji-grid" id="hearts-emojis">
                                    <!-- سيتم إضافة الإيموجي ديناميكيًا -->
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="message-input-container">
                    <input type="text" class="message-input" placeholder="اكتب رسالة..." id="message-input">
                    <button class="action-button primary" id="send-message">
                        <span class="send-g-icon">G</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- نافذة المكالمة -->
    <div class="call-window" id="call-window">
        <div class="call-video-container">
            <video class="call-video" id="local-video" autoplay muted></video>
            <div class="remote-video">
                <video id="remote-video" autoplay></video>
            </div>
            <div class="call-info">
                <h2 id="call-contact-name">محمد أحمد</h2>
                <p id="call-status">يتم الاتصال...</p>
            </div>
        </div>
        
        <div class="call-controls">
            <div class="call-control toggle-audio" id="toggle-audio">
                <i class="fas fa-microphone"></i>
            </div>
            <div class="call-control toggle-video" id="toggle-video">
                <i class="fas fa-video"></i>
            </div>
            <div class="call-control end-call" id="end-call">
                <i class="fas fa-phone"></i>
            </div>
        </div>
    </div>

    <!-- نافذة إنشاء/الانضمام إلى غرفة -->
    <div class="room-modal" id="room-modal">
        <div class="room-modal-content">
            <div class="room-modal-header">
                <h2>بدء مكالمة تعليمية</h2>
            </div>
            <div class="room-modal-body">
                <input type="text" class="room-input" id="room-name-input" placeholder="اسم الدرس أو الموضوع">
                <div class="room-buttons">
                    <button class="room-button primary" id="create-room-btn">بدء الحصة</button>
                    <button class="room-button secondary" id="join-room-btn">الانضمام</button>
                </div>
            </div>
        </div>
    </div>

    <!-- معاينة المرفقات -->
    <div class="attachment-preview" id="attachment-preview">
        <div class="preview-content">
            <span class="close-preview" id="close-preview">
                <i class="fas fa-times"></i>
            </span>
            <img id="preview-image" style="display: none;">
            <video id="preview-video" controls style="display: none;"></video>
        </div>
    </div>

    <!-- نافذة اختيار الأعضاء -->
    <div class="members-modal" id="members-modal">
        <div class="members-modal-content">
            <div class="members-modal-header">
                <h2>اختيار الأعضاء</h2>
            </div>
            <div class="members-modal-body">
                <input type="text" class="members-search" placeholder="ابحث عن أعضاء..." id="members-search">
                <div class="members-list" id="members-list">
                    <!-- سيتم إضافة الأعضاء ديناميكيًا هنا -->
                </div>
            </div>
            <div class="members-modal-footer">
                <button class="members-button" id="confirm-members">تأكيد</button>
            </div>
        </div>
    </div>

    <script>
        // حالة التطبيق
        const state = {
            currentRoom: null,
            localStream: null,
            remoteStream: null,
            peerConnection: null,
            isInCall: false,
            isVideoOn: true,
            isAudioOn: true,
            isScreenSharing: false,
            currentUser: generateUserId(),
            currentChat: null,
            configuration: {
                iceServers: [
                    { urls: 'stun:stun.l.google.com:19302' },
                    { urls: 'stun:stun1.l.google.com:19302' },
                    { urls: 'stun:stun2.l.google.com:19302' }
                ]
            },
            chats: [
                { id: 'chat1', name: 'الصف الأول - الرياضيات', lastMessage: 'الواجب: حل المسائل من الصفحة 45', time: '10:30 ص', unread: 2 },
                { id: 'chat2', name: 'الصف الثاني - العلوم', lastMessage: 'الاختبار يوم الأحد القادم', time: 'أمس', unread: 0 },
                { id: 'chat3', name: 'مجموعة المدرسين', lastMessage: 'اجتماع غدًا الساعة 11', time: 'الثلاثاء', unread: 1 },
                { id: 'chat4', name: 'الصف الثالث - اللغة العربية', lastMessage: 'تم رفع الملخص على المنصة', time: 'الإثنين', unread: 0 },
                { id: 'chat5', name: 'الصف الرابع - التاريخ', lastMessage: 'شكرًا على المشاركة في النقاش', time: '12/05', unread: 0 }
            ],
            searchResults: [],
            emojis: {
                faces: ['😀', '😃', '😄', '😁', '😆', '😅', '😂', '🤣', '😊', '😇', '🙂', '🙃', '😉', '😌', '😍', '🥰', '😘', '😗', '😙', '😚', '😋', '😛', '😝', '😜', '🤪', '🤨', '🧐', '🤓', '😎', '🥸', '🤩', '🥳', '😏', '😒', '😞', '😔', '😟', '😕', '🙁', '☹️', '😣', '😖', '😫', '😩', '🥺', '😢', '😭', '😤', '😠', '😡', '🤬', '🤯', '😳', '🥵', '🥶', '😱', '😨', '😰', '😥', '😓', '🤗', '🤔', '🤭', '🤫', '🤥', '😶', '😐', '😑', '😬', '🙄', '😯', '😦', '😧', '😮', '😲', '🥱', '😴', '🤤', '😪', '😵', '🤐', '🥴', '🤢', '🤮', '🤧', '😷', '🤒', '🤕', '🤑', '🤠', '😈', '👿', '👹', '👺', '🤡', '💩', '👻', '💀', '☠️', '👽', '👾', '🤖', '🎃', '😺', '😸', '😹', '😻', '😼', '😽', '🙀', '😿', '😾'],
                hands: ['👋', '🤚', '🖐', '✋', '🖖', '👌', '🤌', '🤏', '✌️', '🤞', '🤟', '🤘', '🤙', '👈', '👉', '👆', '🖕', '👇', '☝️', '👍', '👎', '✊', '👊', '🤛', '🤜', '👏', '🙌', '👐', '🤲', '🤝', '🙏'],
                hearts: ['❤️', '🧡', '💛', '💚', '💙', '💜', '🖤', '🤍', '🤎', '💔', '❤️‍🔥', '❤️‍🩹', '❣️', '💕', '💞', '💓', '💗', '💖', '💘', '💝', '💟']
            },
            members: [
                { id: 'user1', name: 'أحمد محمد', avatar: 'أ' },
                { id: 'user2', name: 'محمد علي', avatar: 'م' },
                { id: 'user3', name: 'علي حسن', avatar: 'ع' },
                { id: 'user4', name: 'حسن محمود', avatar: 'ح' },
                { id: 'user5', name: 'محمود سعيد', avatar: 'م' },
                { id: 'user6', name: 'سعيد خالد', avatar: 'س' },
                { id: 'user7', name: 'خالد وليد', avatar: 'خ' },
                { id: 'user8', name: 'وليد عماد', avatar: 'و' }
            ],
            selectedMembers: []
        };

        // عناصر DOM
        const elements = {
            menuToggle: document.getElementById('menu-toggle'),
            searchToggle: document.getElementById('search-toggle'),
            chatsList: document.getElementById('chats-list'),
            chatListItems: document.getElementById('chat-list-items'),
            chatArea: document.getElementById('chat-area'),
            chatMessages: document.getElementById('chat-messages'),
            messageInput: document.getElementById('message-input'),
            sendMessageBtn: document.getElementById('send-message'),
            searchInput: document.getElementById('search-input'),
            searchResults: document.getElementById('search-results'),
            emojiBtn: document.getElementById('emoji-btn'),
            emojiPicker: document.getElementById('emoji-picker'),
            emojiSearch: document.getElementById('emoji-search'),
            closeEmoji: document.querySelector('.close-emoji'),
            facesEmojis: document.getElementById('faces-emojis'),
            handsEmojis: document.getElementById('hands-emojis'),
            heartsEmojis: document.getElementById('hearts-emojis'),
            attachmentBtn: document.getElementById('attachment-btn'),
            attachmentMenu: document.getElementById('attachment-menu'),
            attachImage: document.getElementById('attach-image'),
            imageUpload: document.getElementById('image-upload'),
            attachVideo: document.getElementById('attach-video'),
            videoUpload: document.getElementById('video-upload'),
            attachFile: document.getElementById('attach-file'),
            fileUpload: document.getElementById('file-upload'),
            startVideoCall: document.getElementById('start-video-call'),
            startVoiceCall: document.getElementById('start-voice-call'),
            selectMembers: document.getElementById('select-members'),
            callWindow: document.getElementById('call-window'),
            localVideo: document.getElementById('local-video'),
            remoteVideo: document.getElementById('remote-video'),
            toggleAudio: document.getElementById('toggle-audio'),
            toggleVideo: document.getElementById('toggle-video'),
            endCall: document.getElementById('end-call'),
            callStatus: document.getElementById('call-status'),
            callContactName: document.getElementById('call-contact-name'),
            roomModal: document.getElementById('room-modal'),
            roomNameInput: document.getElementById('room-name-input'),
            createRoomBtn: document.getElementById('create-room-btn'),
            joinRoomBtn: document.getElementById('join-room-btn'),
            attachmentPreview: document.getElementById('attachment-preview'),
            previewImage: document.getElementById('preview-image'),
            previewVideo: document.getElementById('preview-video'),
            closePreview: document.getElementById('close-preview'),
            membersModal: document.getElementById('members-modal'),
            membersSearch: document.getElementById('members-search'),
            membersList: document.getElementById('members-list'),
            confirmMembers: document.getElementById('confirm-members')
        };

        // تهيئة التطبيق
        function initApp() {
            setupEventListeners();
            loadChats();
            loadEmojis();
            loadMembers();
            
            // عرض رسالة ترحيبية
            addMessage('النظام', 'مرحبًا بك في نظام الدردشة التعليمية! يمكنك التواصل مع الطلاب والمدرسين هنا.', 'received');
        }

        // تحميل الإيموجي
        function loadEmojis() {
            // وجوه
            state.emojis.faces.forEach(emoji => {
                const emojiItem = document.createElement('div');
                emojiItem.className = 'emoji-item';
                emojiItem.textContent = emoji;
                emojiItem.addEventListener('click', () => insertEmoji(emoji));
                elements.facesEmojis.appendChild(emojiItem);
            });
            
            // أيدي
            state.emojis.hands.forEach(emoji => {
                const emojiItem = document.createElement('div');
                emojiItem.className = 'emoji-item';
                emojiItem.textContent = emoji;
                emojiItem.addEventListener('click', () => insertEmoji(emoji));
                elements.handsEmojis.appendChild(emojiItem);
            });
            
            // قلوب
            state.emojis.hearts.forEach(emoji => {
                const emojiItem = document.createElement('div');
                emojiItem.className = 'emoji-item';
                emojiItem.textContent = emoji;
                emojiItem.addEventListener('click', () => insertEmoji(emoji));
                elements.heartsEmojis.appendChild(emojiItem);
            });
        }

        // تحميل قائمة الأعضاء
        function loadMembers() {
            elements.membersList.innerHTML = '';
            
            state.members.forEach(member => {
                const memberItem = document.createElement('div');
                memberItem.className = 'member-item';
                memberItem.dataset.memberId = member.id;
                memberItem.innerHTML = `
                    <div class="member-avatar">${member.avatar}</div>
                    <div class="member-info">
                        <div class="member-name">${member.name}</div>
                        <div class="member-id">${member.id}</div>
                    </div>
                    <div class="member-checkbox"></div>
                `;
                
                memberItem.addEventListener('click', () => toggleMemberSelection(member.id));
                elements.membersList.appendChild(memberItem);
            });
        }

        // تبديل اختيار العضو
        function toggleMemberSelection(memberId) {
            const index = state.selectedMembers.indexOf(memberId);
            const memberItem = document.querySelector(`.member-item[data-member-id="${memberId}"]`);
            const checkbox = memberItem.querySelector('.member-checkbox');
            
            if (index === -1) {
                state.selectedMembers.push(memberId);
                checkbox.classList.add('checked');
                checkbox.innerHTML = '<i class="fas fa-check"></i>';
            } else {
                state.selectedMembers.splice(index, 1);
                checkbox.classList.remove('checked');
                checkbox.innerHTML = '';
            }
        }

        // إدراج إيموجي في حقل النص
        function insertEmoji(emoji) {
            const input = elements.messageInput;
            const startPos = input.selectionStart;
            const endPos = input.selectionEnd;
            
            input.value = input.value.substring(0, startPos) + emoji + input.value.substring(endPos);
            input.focus();
            input.selectionStart = startPos + emoji.length;
            input.selectionEnd = startPos + emoji.length;
            
            // إخفاء منتقي الإيموجي بعد الإدراج
            elements.emojiPicker.classList.remove('active');
        }

        // توليد معرف فريد للمستخدم
        function generateUserId() {
            return 'user-' + Math.random().toString(36).substr(2, 9);
        }

        // توليد معرف فريد للغرفة
        function generateRoomId() {
            return 'class-' + Math.random().toString(36).substr(2, 6).toUpperCase();
        }

        // تحميل الدردشات
        function loadChats() {
            elements.chatListItems.innerHTML = '';

            state.chats.forEach(chat => {
                const chatItem = document.createElement('div');
                chatItem.className = 'chat-item';
                chatItem.dataset.chatId = chat.id;
                chatItem.innerHTML = `
                    <div class="chat-avatar">${chat.name.charAt(0)}</div>
                    <div class="chat-info">
                        <div class="chat-name">${chat.name}</div>
                        <div class="chat-last-message">${chat.lastMessage}</div>
                    </div>
                    <div class="chat-time">${chat.time}</div>
                `;
                chatItem.addEventListener('click', () => openChat(chat.id, chat.name));
                elements.chatListItems.appendChild(chatItem);
            });
        }

        // فتح دردشة
        function openChat(chatId, chatName) {
            state.currentChat = chatId;
            
            // في تطبيق حقيقي، هنا يتم جلب الرسائل من الخادم
            elements.chatMessages.innerHTML = '';
            addMessage('النظام', `أنت الآن تتحدث في ${chatName}`, 'received');
            
            // تحديث عنوان المكالمة
            elements.callContactName.textContent = chatName;
            
            // عرض منطقة الدردشة وإخفاء القائمة على الأجهزة المحمولة
            if (window.innerWidth <= 768) {
                elements.chatsList.classList.remove('active');
                elements.chatArea.classList.add('active');
            }
        }

        // البحث عن دردشات
        function searchChats(query) {
            if (query.length < 1) {
                elements.searchResults.classList.remove('active');
                return;
            }
            
            state.searchResults = state.chats.filter(chat => 
                chat.name.includes(query) || chat.lastMessage.includes(query)
            );
            
            displaySearchResults();
        }

        // البحث عن أعضاء
        function searchMembers(query) {
            const members = document.querySelectorAll('.member-item');
            
            members.forEach(member => {
                const name = member.querySelector('.member-name').textContent;
                const id = member.querySelector('.member-id').textContent;
                
                if (name.includes(query) || id.includes(query)) {
                    member.style.display = 'flex';
                } else {
                    member.style.display = 'none';
                }
            });
        }

        // عرض نتائج البحث
        function displaySearchResults() {
            elements.searchResults.innerHTML = '';
            
            if (state.searchResults.length === 0) {
                const noResults = document.createElement('div');
                noResults.className = 'search-result-item';
                noResults.textContent = 'لا توجد نتائج';
                elements.searchResults.appendChild(noResults);
            } else {
                state.searchResults.forEach(chat => {
                    const resultItem = document.createElement('div');
                    resultItem.className = 'search-result-item';
                    resultItem.innerHTML = `
                        <div class="chat-avatar">${chat.name.charAt(0)}</div>
                        <div class="chat-info">
                            <div class="chat-name">${chat.name}</div>
                            <div class="chat-last-message">${chat.lastMessage}</div>
                        </div>
                    `;
                    resultItem.addEventListener('click', () => {
                        openChat(chat.id, chat.name);
                        elements.searchInput.value = '';
                        elements.searchResults.classList.remove('active');
                    });
                    elements.searchResults.appendChild(resultItem);
                });
            }
            
            elements.searchResults.classList.add('active');
        }

        // إضافة رسالة إلى الدردشة
        function addMessage(sender, text, type, file = null) {
            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${type}`;
            
            if (file) {
                if (file.type.startsWith('image/')) {
                    messageDiv.innerHTML = `
                        <div>${sender}</div>
                        <img src="${file.url}" class="message-image" alt="صورة" onclick="previewAttachment('${file.url}', 'image')">
                        <div class="message-time">${getCurrentTime()}</div>
                    `;
                } else if (file.type.startsWith('video/')) {
                    messageDiv.innerHTML = `
                        <div>${sender}</div>
                        <video class="message-video" onclick="previewAttachment('${file.url}', 'video')">
                            <source src="${file.url}" type="${file.type}">
                        </video>
                        <div class="message-time">${getCurrentTime()}</div>
                    `;
                } else {
                    messageDiv.innerHTML = `
                        <div>${sender}</div>
                        <div class="message-file" onclick="previewAttachment('${file.url}', 'file')">
                            <i class="fas fa-file-alt"></i>
                            <div class="message-file-info">
                                <div class="message-file-name">${file.name}</div>
                                <div class="message-file-size">${formatFileSize(file.size)}</div>
                            </div>
                        </div>
                        <div class="message-time">${getCurrentTime()}</div>
                    `;
                }
            } else {
                messageDiv.innerHTML = `
                    <div>${text}</div>
                    <div class="message-time">${getCurrentTime()}</div>
                `;
            }
            
            elements.chatMessages.appendChild(messageDiv);
            elements.chatMessages.scrollTop = elements.chatMessages.scrollHeight;
        }

        // معاينة المرفق
        function previewAttachment(url, type) {
            if (type === 'image') {
                elements.previewImage.src = url;
                elements.previewImage.style.display = 'block';
                elements.previewVideo.style.display = 'none';
            } else if (type === 'video') {
                elements.previewVideo.src = url;
                elements.previewVideo.style.display = 'block';
                elements.previewImage.style.display = 'none';
            }
            
            elements.attachmentPreview.classList.add('active');
        }

        // الحصول على الوقت الحالي بتنسيق مناسب
        function getCurrentTime() {
            const now = new Date();
            let hours = now.getHours();
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const ampm = hours >= 12 ? 'م' : 'ص';
            hours = hours % 12;
            hours = hours ? hours : 12; // الساعة 0 تصبح 12
            return `${hours}:${minutes} ${ampm}`;
        }

        // تنسيق حجم الملف
        function formatFileSize(bytes) {
            if (bytes === 0) return '0 بايت';
            const k = 1024;
            const sizes = ['بايت', 'كيلوبايت', 'ميجابايت', 'جيجابايت'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(1)) + ' ' + sizes[i];
        }

        // بدء مكالمة فيديو
        async function startVideoCall() {
            if (!state.currentChat) {
                alert('الرجاء تحديد دردشة أولاً');
                return;
            }
            
            elements.roomModal.classList.add('active');
            state.isVideoCall = true;
        }

        // بدء مكالمة صوتية
        async function startVoiceCall() {
            if (!state.currentChat) {
                alert('الرجاء تحديد دردشة أولاً');
                return;
            }
            
            elements.roomModal.classList.add('active');
            state.isVideoCall = false;
        }

        // بدء حصة تعليمية جديدة
        async function createRoom() {
            const roomName = elements.roomNameInput.value.trim() || `حصة ${generateRoomId()}`;
            state.currentRoom = generateRoomId();
            
            elements.roomModal.classList.remove('active');
            elements.callWindow.classList.add('active');
            elements.callStatus.textContent = 'جاري بدء الحصة...';
            
            try {
                // بدء تيار الوسائط
                state.localStream = await navigator.mediaDevices.getUserMedia({
                    video: state.isVideoCall,
                    audio: true
                });
                
                elements.localVideo.srcObject = state.localStream;
                
                if (!state.isVideoCall) {
                    elements.localVideo.style.display = 'none';
                    document.querySelector('.remote-video').style.display = 'none';
                }
                
                // هنا في تطبيق حقيقي، ستقوم بإرسال دعوة للطلاب عبر خادم الإشارة
                elements.callStatus.textContent = 'في انتظار انضمام الطلاب...';
                
                // لمحاكاة اتصال ناجح
                setTimeout(() => {
                    state.isInCall = true;
                    startCallTimer();
                    
                    // لمحاكاة تيار فيديو بعيد (لطالب واحد كمثال)
                    if (state.isVideoCall) {
                        state.remoteStream = new MediaStream();
                        elements.remoteVideo.srcObject = state.remoteStream;
                    }
                }, 2000);
                
            } catch (err) {
                console.error('Error starting call:', err);
                alert('حدث خطأ أثناء بدء الحصة. يرجى التحقق من أذونات الكاميرا والميكروفون.');
                endCurrentCall();
            }
        }

        // بدء مؤقت المكالمة
        function startCallTimer() {
            let seconds = 0;
            state.callTimer = setInterval(() => {
                seconds++;
                const minutes = Math.floor(seconds / 60);
                const remainingSeconds = seconds % 60;
                elements.callStatus.textContent = 
                    `مدة الحصة: ${minutes.toString().padStart(2, '0')}:${remainingSeconds.toString().padStart(2, '0')}`;
            }, 1000);
        }

        // الانضمام إلى حصة موجودة
        async function joinRoom() {
            const roomId = elements.roomNameInput.value.trim();
            if (!roomId) {
                alert('الرجاء إدخال معرف الحصة');
                return;
            }
            
            state.currentRoom = roomId;
            elements.roomModal.classList.remove('active');
            elements.callWindow.classList.add('active');
            elements.callStatus.textContent = 'جاري الانضمام إلى الحصة...';
            
            try {
                // بدء تيار الوسائط
                state.localStream = await navigator.mediaDevices.getUserMedia({
                    video: state.isVideoCall,
                    audio: true
                });
                
                elements.localVideo.srcObject = state.localStream;
                
                if (!state.isVideoCall) {
                    elements.localVideo.style.display = 'none';
                    document.querySelector('.remote-video').style.display = 'none';
                }
                
                // لمحاكاة اتصال ناجح
                setTimeout(() => {
                    state.isInCall = true;
                    startCallTimer();
                    
                    // لمحاكاة تيار فيديو بعيد (للمدرس)
                    if (state.isVideoCall) {
                        state.remoteStream = new MediaStream();
                        elements.remoteVideo.srcObject = state.remoteStream;
                    }
                }, 2000);
                
            } catch (err) {
                console.error('Error joining call:', err);
                alert('حدث خطأ أثناء الانضمام إلى الحصة. يرجى التحقق من أذونات الكاميرا والميكروفون.');
                endCurrentCall();
            }
        }

        // إنهاء المكالمة الحالية
        function endCurrentCall() {
            if (state.callTimer) {
                clearInterval(state.callTimer);
            }
            
            if (state.localStream) {
                state.localStream.getTracks().forEach(track => track.stop());
                state.localStream = null;
            }
            
            if (state.remoteStream) {
                state.remoteStream.getTracks().forEach(track => track.stop());
                state.remoteStream = null;
            }
            
            elements.callWindow.classList.remove('active');
            state.isInCall = false;
            state.currentRoom = null;
            
            // إعادة تعيين عناصر الفيديو
            elements.localVideo.srcObject = null;
            elements.remoteVideo.srcObject = null;
            elements.localVideo.style.display = '';
            document.querySelector('.remote-video').style.display = '';
        }

        // تبديل حالة الميكروفون
        function toggleAudio() {
            if (state.localStream) {
                const audioTrack = state.localStream.getAudioTracks()[0];
                if (audioTrack) {
                    audioTrack.enabled = !audioTrack.enabled;
                    state.isAudioOn = audioTrack.enabled;
                    elements.toggleAudio.innerHTML = state.isAudioOn ? 
                        '<i class="fas fa-microphone"></i>' : 
                        '<i class="fas fa-microphone-slash"></i>';
                    elements.toggleAudio.style.backgroundColor = state.isAudioOn ? 
                        'var(--eerie-black1)' : 'var(--bittersweet-shimmer)';
                }
            }
        }

        // تبديل حالة الكاميرا
        function toggleVideo() {
            if (state.localStream) {
                const videoTrack = state.localStream.getVideoTracks()[0];
                if (videoTrack) {
                    videoTrack.enabled = !videoTrack.enabled;
                    state.isVideoOn = videoTrack.enabled;
                    elements.toggleVideo.innerHTML = state.isVideoOn ? 
                        '<i class="fas fa-video"></i>' : 
                        '<i class="fas fa-video-slash"></i>';
                    elements.toggleVideo.style.backgroundColor = state.isVideoOn ? 
                        'var(--eerie-black1)' : 'var(--bittersweet-shimmer)';
                }
            }
        }

        // فتح نافذة اختيار الأعضاء
        function openMembersModal() {
            state.selectedMembers = [];
            const checkboxes = document.querySelectorAll('.member-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.classList.remove('checked');
                checkbox.innerHTML = '';
            });
            elements.membersModal.classList.add('active');
        }

        // تأكيد اختيار الأعضاء
        function confirmMembersSelection() {
            if (state.selectedMembers.length === 0) {
                alert('الرجاء اختيار عضو واحد على الأقل');
                return;
            }
            
            const selectedNames = state.members
                .filter(member => state.selectedMembers.includes(member.id))
                .map(member => member.name)
                .join('، ');
            
            addMessage('النظام', `تم اختيار الأعضاء: ${selectedNames}`, 'received');
            elements.membersModal.classList.remove('active');
        }

        // إعداد معالجي الأحداث
        function setupEventListeners() {
            // إرسال رسالة
            elements.sendMessageBtn.addEventListener('click', sendMessage);
            elements.messageInput.addEventListener('keypress', (e) => {
                if (e.key === 'Enter') sendMessage();
            });

            // البحث الفوري
            elements.searchInput.addEventListener('input', (e) => {
                searchChats(e.target.value);
            });

            // البحث عن الإيموجي
            elements.emojiSearch.addEventListener('input', (e) => {
                const query = e.target.value.toLowerCase();
                const emojiItems = document.querySelectorAll('.emoji-item');
                
                emojiItems.forEach(item => {
                    if (item.textContent.includes(query)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });

            // إغلاق منتقي الإيموجي
            elements.closeEmoji.addEventListener('click', () => {
                elements.emojiPicker.classList.remove('active');
            });

            // إظهار/إخفاء منتقي الإيموجي
            elements.emojiBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                elements.emojiPicker.classList.toggle('active');
                elements.attachmentMenu.classList.remove('active');
            });

            // إظهار/إخفاء قائمة المرفقات
            elements.attachmentBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                elements.attachmentMenu.classList.toggle('active');
                elements.emojiPicker.classList.remove('active');
            });

            // إخفاء القوائم عند النقر خارجها
            document.addEventListener('click', () => {
                elements.attachmentMenu.classList.remove('active');
                elements.emojiPicker.classList.remove('active');
            });

            // رفع صورة
            elements.attachImage.addEventListener('click', () => {
                elements.imageUpload.click();
            });

            elements.imageUpload.addEventListener('change', (e) => {
                if (e.target.files.length > 0) {
                    const file = e.target.files[0];
                    const fileUrl = URL.createObjectURL(file);
                    
                    addMessage('أنت', '', 'sent', {
                        name: file.name,
                        type: file.type,
                        size: file.size,
                        url: fileUrl
                    });
                    
                    e.target.value = '';
                }
            });

            // رفع فيديو
            elements.attachVideo.addEventListener('click', () => {
                elements.videoUpload.click();
            });

            elements.videoUpload.addEventListener('change', (e) => {
                if (e.target.files.length > 0) {
                    const file = e.target.files[0];
                    const fileUrl = URL.createObjectURL(file);
                    
                    addMessage('أنت', '', 'sent', {
                        name: file.name,
                        type: file.type,
                        size: file.size,
                        url: fileUrl
                    });
                    
                    e.target.value = '';
                }
            });

            // رفع ملف
            elements.attachFile.addEventListener('click', () => {
                elements.fileUpload.click();
            });

            elements.fileUpload.addEventListener('change', (e) => {
                if (e.target.files.length > 0) {
                    const file = e.target.files[0];
                    const fileUrl = URL.createObjectURL(file);
                    
                    addMessage('أنت', '', 'sent', {
                        name: file.name,
                        type: file.type,
                        size: file.size,
                        url: fileUrl
                    });
                    
                    e.target.value = '';
                }
            });

            // المكالمات
            elements.startVideoCall.addEventListener('click', startVideoCall);
            elements.startVoiceCall.addEventListener('click', startVoiceCall);
            elements.endCall.addEventListener('click', endCurrentCall);
            elements.toggleAudio.addEventListener('click', toggleAudio);
            elements.toggleVideo.addEventListener('click', toggleVideo);

            // إدارة الغرف
            elements.createRoomBtn.addEventListener('click', createRoom);
            elements.joinRoomBtn.addEventListener('click', joinRoom);

            // إغلاق نافذة الغرفة عند النقر خارجها
            elements.roomModal.addEventListener('click', (e) => {
                if (e.target === elements.roomModal) {
                    elements.roomModal.classList.remove('active');
                }
            });

            // اختيار الأعضاء
            elements.selectMembers.addEventListener('click', openMembersModal);
            elements.membersSearch.addEventListener('input', (e) => {
                searchMembers(e.target.value);
            });
            elements.confirmMembers.addEventListener('click', confirmMembersSelection);

            // إغلاق نافذة الأعضاء عند النقر خارجها
            elements.membersModal.addEventListener('click', (e) => {
                if (e.target === elements.membersModal) {
                    elements.membersModal.classList.remove('active');
                }
            });

            // تبديل القائمة/الدردشة على الأجهزة المحمولة
            elements.menuToggle.addEventListener('click', () => {
                elements.chatsList.classList.toggle('active');
                elements.chatArea.classList.toggle('active');
            });

            // إغلاق معاينة المرفق
            elements.closePreview.addEventListener('click', () => {
                elements.attachmentPreview.classList.remove('active');
                elements.previewImage.src = '';
                elements.previewVideo.src = '';
            });
        }

        // إرسال رسالة
        function sendMessage() {
            const message = elements.messageInput.value.trim();
            if (!message) return;
            
            addMessage('أنت', message, 'sent');
            elements.messageInput.value = '';
            
            // لمحاكاة رد تلقائي (في حالة دردشة جماعية)
            setTimeout(() => {
                const currentChat = state.chats.find(c => c.id === state.currentChat);
                if (currentChat) {
                    addMessage(currentChat.name, 
                        'شكرًا على مشاركتك!', 'received');
                }
            }, 1000);
        }

        // جعل دالة معاينة المرفقات متاحة عالمياً
        window.previewAttachment = previewAttachment;

        // بدء التطبيق عند تحميل الصفحة
        window.addEventListener('DOMContentLoaded', initApp);
    </script>
</body>
</html>