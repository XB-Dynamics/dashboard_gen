
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius AI - نظام التعليم الذكي</title>
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
            --text-gradient-green: linear-gradient(to right, hsl(120, 100%, 40%), hsl(90, 100%, 40%));
            --text-gradient-red: linear-gradient(to right, hsl(0, 100%, 60%), hsl(20, 100%, 60%));
            
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
            --bittersweet-shimmer: hsl(0, 43%, 51%);

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
            min-height: 100vh;
            text-align: right;
            direction: rtl;
            display: flex;
            flex-direction: column;
            position: relative;
        }
.back-btn {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background: var(--text-gradient-gold);
    color: black;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    transition: var(--transition1);
    box-shadow: var(--shadow3);
    position: relative;
}

.back-btn:hover {
    transform: translateY(-2px) scale(1.05);
    box-shadow: var(--shadow4);
}

.back-btn:active {
    transform: translateY(0) scale(0.95);
}

.back-btn::after {
    content: "الرجوع للخلف";
    position: absolute;
    top: 100%;
    right: 50%;
    transform: translateX(50%);
    background: var(--border-gradient-onyx);
    color: var(--white2);
    padding: 8px 12px;
    border-radius: 8px;
    font-size: 0.8rem;
    white-space: nowrap;
    opacity: 0;
    visibility: hidden;
    transition: var(--transition1);
    margin-top: 10px;
    z-index: 1000;
}

.back-btn:hover::after {
    opacity: 1;
    visibility: visible;
}

/* تحسينات للشاشات الصغيرة */
@media (max-width: 767px) {
    .header-controls {
        gap: 10px;
    }
    
    .back-btn {
        width: 40px;
        height: 40px;
        font-size: 1.1rem;
    }
    
    .back-btn::after {
        font-size: 0.7rem;
        padding: 6px 10px;
    }
}

        /* الهيدر مع قائمة الحصص في الأعلى */
        .header {
            background: var(--bg-gradient-jet);
            box-shadow: var(--shadow2);
            z-index: 100;
            position: sticky;
            top: 0;
        }

        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            border-bottom: 1px solid var(--jet);
        }

        .main-title {
            font-size: 1.8rem;
            background: var(--text-gradient-gold);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: var(--fw800);
            letter-spacing: -0.5px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .subtitle {
            color: var(--light-gray);
            font-size: 0.9rem;
            text-align: center;
            padding: 10px 20px;
            background: rgba(0, 0, 0, 0.2);
        }

        /* قائمة الحصص - محسنة وفي الأعلى */
        .lessons-menu {
            position: relative;
        }

        .lessons-btn {
            background: var(--text-gradient-gold);
            color: black;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            font-weight: var(--fw600);
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: var(--transition1);
            box-shadow: var(--shadow3);
            font-size: 0.9rem;
        }

        .lessons-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow4);
        }

        .lessons-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            width: 100%;
            max-width: 350px;
            max-height: 400px;
            background: var(--bg-gradient-jet);
            border-radius: 10px;
            box-shadow: var(--shadow5);
            margin-top: 10px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: var(--transition1);
            z-index: 200;
            border: 1px solid var(--jet);
            overflow: hidden;
        }

        .lessons-dropdown.open {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-header {
            padding: 15px;
            border-bottom: 1px solid var(--jet);
            background: rgba(0, 0, 0, 0.2);
        }

        .search-container {
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-input {
            width: 100%;
            padding: 10px 40px 10px 15px;
            border-radius: 24px;
            border: 1px solid var(--jet);
            background: rgba(0, 0, 0, 0.3);
            color: var(--white2);
            font-size: 0.9rem;
            transition: var(--transition1);
        }

        .search-input:focus {
            outline: none;
            border-color: var(--gold);
            box-shadow: 0 0 0 2px rgba(255, 215, 0, 0.2);
        }

        .search-icon {
            position: absolute;
            left: 15px;
            color: var(--light-gray);
        }

        .lessons-list {
            max-height: 300px;
            overflow-y: auto;
            padding: 10px 0;
        }

        .lesson-item {
            padding: 12px 15px;
            border-bottom: 1px solid var(--jet);
            cursor: pointer;
            transition: var(--transition1);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .lesson-item:last-child {
            border-bottom: none;
        }

        .lesson-item:hover {
            background: rgba(255, 215, 0, 0.1);
        }

        .lesson-item.active {
            background: rgba(255, 215, 0, 0.2);
            border-right: 3px solid var(--gold);
        }

        .lesson-icon {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: var(--text-gradient-gold);
            display: flex;
            align-items: center;
            justify-content: center;
            color: black;
            font-size: 0.9rem;
            flex-shrink: 0;
        }

        .lesson-info {
            flex: 1;
            min-width: 0;
        }

        .lesson-title {
            font-weight: var(--fw600);
            margin-bottom: 3px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .lesson-subject {
            font-size: 0.8rem;
            color: var(--light-gray70);
        }

        .no-results {
            padding: 20px;
            text-align: center;
            color: var(--light-gray70);
            font-style: italic;
        }

        /* منطقة المحتوى الرئيسية */
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 0;
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }

        /* منطقة الفيديو - تأخذ المساحة كاملة */
        .video-container {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            background: var(--bg-gradient-jet);
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.3s ease;
        }

        .video-container.fullscreen {
            padding: 10px;
        }

        .video-wrapper {
            width: 100%;
            max-width: 900px;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow3);
            transition: all 0.3s ease;
            position: relative;
        }

        .video-wrapper.fullscreen {
            max-width: 100%;
            height: 90vh;
        }

        .video-placeholder {
            width: 100%;
            height: 300px;
            background: linear-gradient(135deg, #1a1a1a, #2a2a2a);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: var(--light-gray);
            position: relative;
        }

        .video-wrapper.fullscreen .video-placeholder {
            height: 100%;
        }

        .video-placeholder i {
            font-size: 3rem;
            margin-bottom: 15px;
            color: var(--gold);
        }

        .video-placeholder p {
            font-size: 1.1rem;
            text-align: center;
            max-width: 80%;
        }

        .video-player {
            width: 100%;
            height: 300px;
            border: none;
        }

        .video-wrapper.fullscreen .video-player {
            height: 100%;
        }

        .video-controls {
            position: absolute;
            top: 15px;
            left: 15px;
            display: flex;
            gap: 10px;
            z-index: 10;
        }

        .video-control-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition1);
            border: none;
        }

        .video-control-btn:hover {
            background: rgba(0, 0, 0, 0.9);
            transform: scale(1.1);
        }

        .controls {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            padding: 15px;
            background: var(--bg-gradient-jet);
            border-top: 1px solid var(--jet);
        }

        .control-btn {
            padding: 12px 25px;
            border-radius: 50px;
            border: none;
            cursor: pointer;
            font-weight: var(--fw600);
            display: flex;
            align-items: center;
            gap: 8px;
            transition: var(--transition1);
        }

        .start-btn {
            background: var(--text-gradient-gold);
            color: black;
        }

        .control-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow2);
        }

        /* الأيقونات الجانبية - وضعها في الأسفل */
        .side-icons {
            position: fixed;
            bottom: 20px;
            right: 50%;
            transform: translateX(50%);
            display: flex;
            gap: 15px;
            z-index: 90;
            background: rgba(0, 0, 0, 0.7);
            padding: 10px 15px;
            border-radius: 50px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .icon-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--text-gradient-gold);
            color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            cursor: pointer;
            transition: var(--transition1);
            box-shadow: var(--shadow3);
            position: relative;
        }

        .icon-btn:hover {
            transform: scale(1.1) translateY(-5px);
            box-shadow: var(--shadow4);
        }

        .icon-btn::after {
            content: attr(data-tooltip);
            position: absolute;
            right: 50%;
            bottom: 100%;
            transform: translateX(50%);
            background: var(--border-gradient-onyx);
            padding: 8px 15px;
            border-radius: 8px;
            font-size: 0.9rem;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition1);
            margin-bottom: 10px;
        }

        .icon-btn:hover::after {
            opacity: 1;
            visibility: visible;
        }

        /* اللوحة الجانبية */
        .side-panel {
            position: fixed;
            top: 0;
            right: 0;
            width: 0;
            height: 100%;
            background: var(--bg-gradient-jet);
            z-index: 200;
            overflow-y: auto;
            transition: var(--transition2);
            box-shadow: var(--shadow4);
        }

        .side-panel.open {
            width: 100%;
            max-width: 400px;
        }

        .panel-header {
            padding: 20px;
            background: var(--border-gradient-onyx);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--jet);
        }

        .panel-title {
            font-size: 1.3rem;
            font-weight: var(--fw700);
            background: var(--text-gradient-gold);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .close-panel {
            background: none;
            border: none;
            color: var(--light-gray);
            font-size: 1.5rem;
            cursor: pointer;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition1);
        }

        .close-panel:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .panel-body {
            padding: 20px;
            line-height: 1.7;
            height: calc(100% - 80px);
            display: flex;
            flex-direction: column;
        }

        /* منطقة الشرح في اللوحة الجانبية */
        .lesson-container {
            flex: 1;
            overflow-y: auto;
            padding: 10px;
            margin-bottom: 15px;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            max-height: 100%;
        }

        .lesson-content {
            line-height: 1.8;
        }

        .lesson-content h2 {
            color: var(--gold);
            margin-bottom: 20px;
            border-bottom: 2px solid var(--gold);
            padding-bottom: 10px;
            font-size: 1.4rem;
        }

        .lesson-content h3 {
            color: var(--gold);
            margin: 25px 0 15px 0;
            font-size: 1.2rem;
        }

        .lesson-content ul {
            margin-right: 20px;
            margin-bottom: 25px;
        }

        .lesson-content li {
            margin-bottom: 12px;
        }

        .lesson-content strong {
            color: var(--gold);
        }

        /* شات جي بي تي محسن */
        .chat-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .chat-messages {
            flex: 1;
            overflow-y: auto;
            padding: 10px;
            margin-bottom: 15px;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            max-height: 400px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .message {
            padding: 12px 15px;
            border-radius: 18px;
            max-width: 85%;
            animation: fadeIn 0.3s ease;
            position: relative;
            box-shadow: var(--shadow1);
        }

        .message.user {
            background: var(--text-gradient-gold);
            color: black;
            margin-right: auto;
            margin-left: 0;
            border-bottom-right-radius: 5px;
        }

        .message.ai {
            background: rgba(255, 255, 255, 0.1);
            margin-left: auto;
            margin-right: 0;
            border-bottom-left-radius: 5px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .message-content {
            margin: 0;
        }

        .message-time {
            font-size: 0.7rem;
            opacity: 0.7;
            margin-top: 5px;
            text-align: left;
        }

        .chat-input-container {
            display: flex;
            gap: 10px;
            align-items: center;
            position: relative;
        }

        .chat-input {
            flex: 1;
            padding: 12px 18px;
            border-radius: 24px;
            border: 1px solid var(--jet);
            background: rgba(0, 0, 0, 0.2);
            color: var(--white2);
            font-size: 1rem;
            transition: var(--transition1);
        }

        .chat-input:focus {
            outline: none;
            border-color: var(--gold);
            box-shadow: 0 0 0 2px rgba(255, 215, 0, 0.2);
        }

        .send-button {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            border: none;
            background: var(--text-gradient-gold);
            color: black;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            transition: var(--transition1);
        }

        .send-button:hover {
            transform: scale(1.05);
        }

        /* تأثيرات الحركة */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .typing-cursor {
            display: inline-block;
            width: 2px;
            height: 1.2em;
            background-color: var(--gold);
            margin-left: 2px;
            animation: blink 1s infinite;
            vertical-align: middle;
        }
        
        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }

        /* تصميم متجاوب */
        @media (min-width: 768px) {
            .header-top {
                padding: 20px;
            }
            
            .main-title {
                font-size: 2.2rem;
            }
            
            .side-icons {
                top: 50%;
                right: 20px;
                bottom: auto;
                transform: translateY(-50%);
                flex-direction: column;
                background: transparent;
                padding: 0;
                border: none;
                backdrop-filter: none;
            }
            
            .icon-btn::after {
                right: 70px;
                bottom: 50%;
                transform: translateY(50%);
                margin-bottom: 0;
            }
            
            .video-placeholder, .video-player {
                height: 400px;
            }
            
            .video-placeholder i {
                font-size: 4rem;
            }
        }

        @media (min-width: 992px) {
            .video-container {
                padding: 30px;
            }
            
            .video-wrapper {
                max-width: 1000px;
            }
            
            .video-placeholder, .video-player {
                height: 450px;
            }
        }

        @media (max-width: 767px) {
            .header-top {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            .main-title {
                font-size: 1.8rem;
                justify-content: center;
            }
            
            .lessons-dropdown {
                right: 50%;
                transform: translateX(50%) translateY(-10px);
            }
            
            .lessons-dropdown.open {
                transform: translateX(50%) translateY(0);
            }
            
            .video-container {
                padding: 15px;
            }
            
            .controls {
                padding: 10px;
            }
            
            .control-btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
            
            .side-panel.open {
                width: 100%;
                max-width: none;
            }
        }

        @media (max-width: 576px) {
            .header-top {
                padding: 15px;
            }
            
            .main-title {
                font-size: 1.6rem;
            }
            
            .subtitle {
                font-size: 0.9rem;
            }
            
            .video-placeholder, .video-player {
                height: 250px;
            }
            
            .video-placeholder i {
                font-size: 2.5rem;
            }
            
            .video-placeholder p {
                font-size: 1rem;
            }
            
            .side-icons {
                bottom: 15px;
                gap: 10px;
            }
            
            .icon-btn {
                width: 45px;
                height: 45px;
                font-size: 1.1rem;
            }
            
            .panel-header {
                padding: 15px;
            }
            
            .panel-body {
                padding: 15px;
            }
        }

        @media (max-width: 380px) {
            .side-icons {
                flex-wrap: wrap;
                justify-content: center;
                width: 90%;
            }
            
            .icon-btn {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }
            
            .video-placeholder, .video-player {
                height: 200px;
            }
            
            .lesson-item {
                padding: 10px 12px;
                font-size: 0.9rem;
            }
        }

        /* تحسينات إضافية للشات */
        .chat-media-buttons {
            display: flex;
            gap: 10px;
            margin-top: 10px;
            justify-content: center;
        }

        .media-btn {
            padding: 8px 12px;
            border-radius: 24px;
            border: none;
            background: var(--border-gradient-onyx);
            color: var(--white2);
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.8rem;
            transition: var(--transition1);
            box-shadow: var(--shadow1);
        }

        .media-btn:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }

        .media-btn i {
            font-size: 1rem;
            color: var(--gold);
        }

        .hidden {
            display: none;
        }

        /* تحسينات الشات الجديدة */
        .chat-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--jet);
        }

        .chat-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--text-gradient-gold);
            display: flex;
            align-items: center;
            justify-content: center;
            color: black;
            font-size: 1.2rem;
        }

        .chat-status {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 0.8rem;
            color: var(--light-gray70);
        }

        .status-indicator {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--gold);
        }

        .typing-indicator {
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 10px 15px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 18px;
            width: fit-content;
            margin: 5px 0 5px auto;
        }

        .typing-dot {
            width: 6px;
            height: 6px;
            background: var(--gold);
            border-radius: 50%;
            animation: pulse 1.5s infinite ease-in-out;
        }

        .typing-dot:nth-child(2) {
            animation-delay: 0.2s;
        }

        .typing-dot:nth-child(3) {
            animation-delay: 0.4s;
        }

        @keyframes pulse {
            0%, 100% { opacity: 0.4; transform: scale(0.8); }
            50% { opacity: 1; transform: scale(1.2); }
        }

        /* تصميم جديد للرسائل */
        .message-bubble {
            position: relative;
            padding: 12px 16px;
            border-radius: 18px;
            max-width: 80%;
            margin-bottom: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .user-bubble {
            background: var(--text-gradient-gold);
            color: black;
            margin-left: auto;
            margin-right: 0;
            border-bottom-right-radius: 4px;
        }

        .ai-bubble {
            background: rgba(255, 255, 255, 0.1);
            margin-right: auto;
            margin-left: 0;
            border-bottom-left-radius: 4px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .message-sender {
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 5px;
            opacity: 0.8;
        }

        .message-text {
            margin: 0;
            line-height: 1.5;
        }

        .message-time {
            font-size: 0.7rem;
            opacity: 0.6;
            margin-top: 5px;
            text-align: left;
        }
    </style>
</head>
<body>
    <!-- الهيدر مع قائمة الحصص في الأعلى -->
    <div class="header">
        <div class="header-top">
                    <button class="back-btn" id="back-btn" title="الرجوع للخلف">
            <i class="fas fa-arrow-right"></i>
        </button>

            <h1 class="main-title"><i class="fas fa-brain"></i> Genius AI</h1>
            
            <!-- قائمة الحصص - محسنة وفي الأعلى -->
            <div class="lessons-menu">
                <button class="lessons-btn" id="lessons-btn">
                    <i class="fas fa-book-open"></i> قائمة الحصص
                </button>
                <div class="lessons-dropdown" id="lessons-dropdown">
                    <div class="dropdown-header">
                        <div class="search-container">
                            <input type="text" class="search-input" id="lesson-search" placeholder="ابحث عن الحصة...">
                            <i class="fas fa-search search-icon"></i>
                        </div>
                    </div>
                    <div class="lessons-list" id="lessons-list">
                        <div class="lesson-item active" data-lesson="history">
                            <div class="lesson-icon"><i class="fas fa-landmark"></i></div>
                            <div class="lesson-info">
                                <div class="lesson-title">الحضارة المصرية</div>
                                <div class="lesson-subject">مادة التاريخ</div>
                            </div>
                        </div>
                        <div class="lesson-item" data-lesson="math">
                            <div class="lesson-icon"><i class="fas fa-calculator"></i></div>
                            <div class="lesson-info">
                                <div class="lesson-title">الجبر والهندسة</div>
                                <div class="lesson-subject">مادة الرياضيات</div>
                            </div>
                        </div>
                        <div class="lesson-item" data-lesson="science">
                            <div class="lesson-icon"><i class="fas fa-atom"></i></div>
                            <div class="lesson-info">
                                <div class="lesson-title">الفيزياء الحديثة</div>
                                <div class="lesson-subject">مادة العلوم</div>
                            </div>
                        </div>
                        <div class="lesson-item" data-lesson="arabic">
                            <div class="lesson-icon"><i class="fas fa-language"></i></div>
                            <div class="lesson-info">
                                <div class="lesson-title">النحو والصرف</div>
                                <div class="lesson-subject">مادة اللغة العربية</div>
                            </div>
                        </div>
                        <div class="lesson-item" data-lesson="english">
                            <div class="lesson-icon"><i class="fas fa-globe"></i></div>
                            <div class="lesson-info">
                                <div class="lesson-title">قواعد اللغة الإنجليزية</div>
                                <div class="lesson-subject">مادة الإنجليزية</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="subtitle">نظام التعليم الذكي التفاعلي</p>
    </div>

    <!-- منطقة المحتوى الرئيسية -->
    <div class="main-content">
        <!-- منطقة الفيديو - تأخذ المساحة كاملة -->
        <div class="video-container" id="video-container">
            <div class="video-wrapper" id="video-wrapper">
                <div class="video-controls">
                    <button class="video-control-btn" id="fullscreen-btn" title="تكبير/تصغير">
                        <i class="fas fa-expand"></i>
                    </button>
                </div>
                <div class="video-placeholder" id="video-placeholder">
                    <i class="fab fa-youtube"></i>
                    <p>سيبدأ الفيديو عند الضغط على زر التشغيل</p>
                </div>
                <iframe class="video-player hidden" id="video-player" 
                        src="https://www.youtube.com/embed/6Lrq5cLbV-s?enablejsapi=1" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                </iframe>
            </div>
        </div>
        
        <!-- عناصر التحكم -->
        <div class="controls">
            <button class="control-btn start-btn" id="start-btn">
                <i class="fas fa-play"></i> تشغيل الفيديو
            </button>
        </div>
    </div>

    <!-- الأيقونات الجانبية - في الأسفل للجوال، في الجانب الأيمن للديسكتوب -->
    <div class="side-icons">
        <div class="icon-btn" id="lesson-icon" data-tooltip="الشرح الكامل">
            <i class="fas fa-file-alt"></i>
        </div>
        <div class="icon-btn" id="summary-icon" data-tooltip="الملخصات">
            <i class="fas fa-book"></i>
        </div>
        <div class="icon-btn" id="chat-icon" data-tooltip="Genius AI">
            <i class="fas fa-comments"></i>
        </div>
    </div>

    <!-- اللوحة الجانبية -->
    <div class="side-panel" id="side-panel">
        <div class="panel-header">
            <div class="panel-title" id="panel-title">عنوان اللوحة</div>
            <button class="close-panel" id="close-panel">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <div class="panel-body" id="panel-body">
            <!-- محتوى اللوحة سيتم إضافته ديناميكيًا -->
        </div>
    </div>

    <script>
        // قاعدة معرفة بالأسئلة والأجوبة المتعلقة بالحضارة المصرية
       // بيانات الحصص (من غير summaryText)
   
   
       const lessonsData = {
        "history": {
            title: "الحضارة المصرية",
            subject: "مادة التاريخ",
            videoUrl: "https://www.youtube.com/embed/6Lrq5cLbV-s",
            lessonText: `
                <h2>الحضارة المصرية القديمة</h2>
                <p>تعد الحضارة المصرية القديمة واحدة من أقدم وأعظم الحضارات في التاريخ، حيث نشأت على ضفاف نهر النيل الذي منحها الخصوبة والازدهار.</p>
                <h3>الفترات التاريخية الرئيسية:</h3>
                <ul>
                    <li><strong>العصر العتيق (3100-2686 ق.م):</strong> بداية توحيد مصر على يد الملك مينا.</li>
                    <li><strong>الدولة القديمة (2686-2181 ق.م):</strong> عصر بناة الأهرامات وأشهرها أهرامات الجيزة.</li>
                    <li><strong>الدولة الوسطى (2055-1650 ق.م):</strong> فترة ازدهار فني وأدبي، وتوسع تجاري.</li>
                    <li><strong>الدولة الحديثة (1550-1069 ق.م):</strong> عصر الإمبراطورية المصرية وملوك مثل تحتمس الثالث ورمسيس الثاني.</li>
                </ul>
                <h3>إنجازات الحضارة المصرية:</h3>
                <ul>
                    <li><strong>الهندسة المعمارية:</strong> الأهرامات، المعابد، المسلات.</li>
                    <li><strong>العلوم:</strong> التقويم المصري، الطب، التحنيط.</li>
                    <li><strong>الكتابة:</strong> اختراع الكتابة الهيروغليفية.</li>
                    <li><strong>الفن:</strong> النحت، الرسم، المجوهرات.</li>
                </ul>
            `
        },
        "math": {
            title: "الجبر والهندسة",
            subject: "مادة الرياضيات",
            videoUrl: "https://www.youtube.com/embed/dQw4w9WgXcQ",
            lessonText: "<p>محتوى درس الجبر والهندسة سيظهر هنا...</p>"
        },
        "science": {
            title: "الفيزياء الحديثة",
            subject: "مادة العلوم",
            videoUrl: "https://www.youtube.com/embed/dQw4w9WgXcQ",
            lessonText: "<p>محتوى درس الفيزياء الحديثة سيظهر هنا...</p>"
        },
        "arabic": {
            title: "النحو والصرف",
            subject: "مادة اللغة العربية",
            videoUrl: "https://www.youtube.com/embed/dQw4w9WgXcQ",
            lessonText: "<p>محتوى درس النحو والصرف سيظهر هنا...</p>"
        },
        "english": {
            title: "قواعد اللغة الإنجليزية",
            subject: "مادة الإنجليزية",
            videoUrl: "https://www.youtube.com/embed/dQw4w9WgXcQ",
            lessonText: "<p>محتوى درس قواعد اللغة الإنجليزية سيظهر هنا...</p>"
        }
    };

        // بيانات الحصص
   
      

        // عناصر واجهة المستخدم
        const videoContainer = document.getElementById('video-container');
        const videoWrapper = document.getElementById('video-wrapper');
        const videoPlaceholder = document.getElementById('video-placeholder');
        const videoPlayer = document.getElementById('video-player');
        const fullscreenBtn = document.getElementById('fullscreen-btn');
        const startBtn = document.getElementById('start-btn');
        const lessonsBtn = document.getElementById('lessons-btn');
        const lessonsDropdown = document.getElementById('lessons-dropdown');
        const lessonItems = document.querySelectorAll('.lesson-item');
        const lessonSearch = document.getElementById('lesson-search');
        const lessonsList = document.getElementById('lessons-list');
        
        // عناصر الأيقونات واللوحة الجانبية
        const lessonIcon = document.getElementById('lesson-icon');
        const summaryIcon = document.getElementById('summary-icon');
        const chatIcon = document.getElementById('chat-icon');
        const sidePanel = document.getElementById('side-panel');
        const closePanelBtn = document.getElementById('close-panel');
        const panelTitle = document.getElementById('panel-title');
        const panelBody = document.getElementById('panel-body');

        let currentPanel = null;
        let isVideoPlaying = false;
        let isFullscreen = false;
        let currentImageFile = null;
        let currentLesson = 'history';

        // تبديل قائمة الحصص
        function toggleLessonsDropdown() {
            lessonsDropdown.classList.toggle('open');
            if (lessonsDropdown.classList.contains('open')) {
                lessonSearch.focus();
            }
        }

        // البحث في قائمة الحصص
        function filterLessons() {
            const searchTerm = lessonSearch.value.toLowerCase();
            const allLessonItems = lessonsList.querySelectorAll('.lesson-item');
            let hasResults = false;
            
            allLessonItems.forEach(item => {
                const title = item.querySelector('.lesson-title').textContent.toLowerCase();
                const subject = item.querySelector('.lesson-subject').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || subject.includes(searchTerm)) {
                    item.style.display = 'flex';
                    hasResults = true;
                } else {
                    item.style.display = 'none';
                }
            });
            
            // إظهار رسالة إذا لم توجد نتائج
            let noResultsMsg = lessonsList.querySelector('.no-results');
            if (!hasResults) {
                if (!noResultsMsg) {
                    noResultsMsg = document.createElement('div');
                    noResultsMsg.className = 'no-results';
                    noResultsMsg.textContent = 'لم يتم العثور على حصص تطابق البحث';
                    lessonsList.appendChild(noResultsMsg);
                }
            } else if (noResultsMsg) {
                noResultsMsg.remove();
            }
        }

        // تغيير الحصة الحالية
        function changeLesson(lessonId) {
            currentLesson = lessonId;
            const lessonData = lessonsData[lessonId];
            
            // تحديث واجهة الحصة
            document.querySelector('.lesson-item.active').classList.remove('active');
            document.querySelector(`.lesson-item[data-lesson="${lessonId}"]`).classList.add('active');
            
            // تحديث الفيديو
            videoPlayer.src = lessonData.videoUrl + "?enablejsapi=1";
            videoPlaceholder.classList.remove('hidden');
            videoPlayer.classList.add('hidden');
            isVideoPlaying = false;
            startBtn.innerHTML = '<i class="fas fa-play"></i> تشغيل الفيديو';
            
            // إغلاق القائمة
            lessonsDropdown.classList.remove('open');
        }

        // تشغيل الفيديو
        function startVideo() {
            if (isVideoPlaying) return;
            
            isVideoPlaying = true;
            startBtn.innerHTML = '<i class="fas fa-play"></i> تشغيل الفيديو';
            
            videoPlaceholder.classList.add('hidden');
            videoPlayer.classList.remove('hidden');
            
            // إضافة معلمة التشغيل التلقائي للفيديو
            videoPlayer.src += "&autoplay=1";
        }

        // التحكم في وضع الشاشة الكاملة
        function toggleFullscreen() {
            isFullscreen = !isFullscreen;
            
            if (isFullscreen) {
                videoContainer.classList.add('fullscreen');
                videoWrapper.classList.add('fullscreen');
                fullscreenBtn.innerHTML = '<i class="fas fa-compress"></i>';
            } else {
                videoContainer.classList.remove('fullscreen');
                videoWrapper.classList.remove('fullscreen');
                fullscreenBtn.innerHTML = '<i class="fas fa-expand"></i>';
            }
        }

        // فتح لوحة الشرح الكامل
       
       /*
        function openLessonPanel() {
            currentPanel = 'lesson';
            const lessonData = lessonsData[currentLesson];
            panelTitle.textContent = `الشرح الكامل - ${lessonData.title}`;
            
            const lessonHTML = `
                <div class="lesson-container">
                    <div class="lesson-content">
                        ${lessonData.lessonText}
                    </div>
                </div>
            `;
            
            panelBody.innerHTML = lessonHTML;
            sidePanel.classList.add('open');
        }
*/
async function fetchLastScript() {
    const res = await fetch("../../proxies/studying_project/get_last_script.php");
    return await res.json();
}

async function extractMainPoints(inputText) {
    const response = await fetch("../../proxies/studying_project/extract_main_points.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ input_text: inputText })
    });
    return await response.json();
}

async function openLessonPanel() {
    currentPanel = 'lesson';
    const lessonData = lessonsData[currentLesson];
    panelTitle.textContent = `النقاط الرئيسية - ${lessonData.title}`;

    panelBody.innerHTML = `
        <div class="lesson-container">
            <div class="lesson-content">
                <p>⏳ جاري استخراج النقاط الرئيسية...</p>
            </div>
        </div>
    `;
try {
   // const res = await extractMainPoints(lessonData.lessonText);

    const last = await fetchLastScript();
const res = await extractMainPoints(last.script_content || "");

    let points = [];
    if (Array.isArray(res.main_points)) {
        points = res.main_points;
    } else if (typeof res.main_points === "string") {
        // لو رجع String هنقسمه لسطور
        points = res.main_points.split(/\n|\.|\-|\•/).map(p => p.trim()).filter(p => p.length > 0);
    }

    if (points.length > 0) {
        const listHTML = points.map(p => `<li>${p}</li>`).join("");
        panelBody.innerHTML = `
            <div class="lesson-container">
                <div class="lesson-content">
                    <h3>📑 النقاط الرئيسية:</h3>
                    <ul>${listHTML}</ul>
                </div>
            </div>`;
    } else {
        panelBody.innerHTML = "<p>⚠️ لم يتم العثور على نقاط رئيسية</p>";
    }
} catch (err) {
    panelBody.innerHTML = `<p style="color:red;">❌ خطأ: ${err.message}</p>`;
}


    sidePanel.classList.add('open');
}

/*
  function openLessonPanel() {
        currentPanel = 'lesson';
        const lessonData = lessonsData[currentLesson];
        panelTitle.textContent = `الشرح الكامل - ${lessonData.title}`;

        panelBody.innerHTML = `
            <div class="lesson-container">
                <div class="lesson-content">
                    ${lessonData.lessonText}
                </div>
            </div>
        `;
        sidePanel.classList.add('open');
    }
        // فتح لوحة الملخص كصفحة واحدة
   
   /*
        function openSummaryPanel() {
            currentPanel = 'summary';
            const lessonData = lessonsData[currentLesson];
            panelTitle.textContent = `ملخص - ${lessonData.title}`;
            
            const summaryHTML = `
                <div class="lesson-container">
                    <div class="lesson-content">
                        ${lessonData.summaryText}
                    </div>
                </div>
            `;
            
            panelBody.innerHTML = summaryHTML;
            sidePanel.classList.add('open');
        }
*/


// فتح لوحة الملخص عبر Summarize API

// نخزن الـ video_id اللي راجع بعد التدريب (مثلاً من startTraining)
let currentVideoId = null;
async function openSummaryPanel() {
    currentPanel = 'summary';
    const lessonData = lessonsData[currentLesson];
    panelTitle.textContent = `ملخص - ${lessonData.title}`;

    panelBody.innerHTML = `
        <div class="lesson-container">
            <div class="lesson-content">
                <p>⏳ جاري إنشاء الملخص باستخدام Genius AI...</p>
            </div>
        </div>
    `;

    try {
        const response = await fetch("../../proxies/studying_project/summarize.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "accept": "application/json"
            },
       
            body: JSON.stringify(
    currentVideoId ? { video_id: currentVideoId } : {}
)

        });

        const data = await response.json();

        if (response.ok && data.summary) {
            panelBody.innerHTML = `
                <div class="lesson-container">
                    <div class="lesson-content">
                        <h3>📘 الملخص:</h3>
                        <p style="white-space: pre-line;">${data.summary}</p>
                    </div>
                </div>
            `;
        } else {
            throw new Error(data.error || "فشل في إنشاء الملخص");
        }
    } catch (err) {
        panelBody.innerHTML = `
            <div class="lesson-container">
                <div class="lesson-content">
                    <p style="color:red;">❌ حدث خطأ: ${err.message}</p>
                </div>
            </div>
        `;
    }

    sidePanel.classList.add('open');
}

// عناصر واجهة المستخدم - إضافة زر الرجوع
const backBtn = document.getElementById('back-btn');

// دالة الرجوع للخلف
function goBack() {
    // استخدام window.history للرجوع خطوة للوراء
    if (window.history.length > 1) {
        window.history.back();
    } else {
        // إذا لم تكن هناك صفحة سابقة، التوجيه للصفحة الرئيسية
        window.location.href = '../../index.php'; // أو الصفحة التي تريدها
    }
    
    // إضافة تأثير بصري عند النقر
    backBtn.style.transform = 'scale(0.9)';
    setTimeout(() => {
        backBtn.style.transform = 'scale(1)';
    }, 150);
}

// حدث زر الرجوع
backBtn.addEventListener('click', goBack);
        // البحث عن إجابة من قاعدة المعرفة
    /*
        function findAnswer(question) {
            const normalizedQuestion = question.toLowerCase().replace(/[؟?]/g, '');
            
            for (const keyword in knowledgeBase) {
                if (normalizedQuestion.includes(keyword.toLowerCase())) {
                    const answers = knowledgeBase[keyword];
                    return answers[Math.floor(Math.random() * answers.length)];
                }
            }
            
            return "أحتاج إلى مزيد من المعلومات للإجابة على سؤالك. هل يمكنك توضيح ما تريد معرفته عن الحضارة المصرية القديمة؟";
        }
*/
        // إنشاء رد ذكي بناءً على السؤال
    /*
        function generateSmartResponse(question, hasImage = false) {
            const answer = findAnswer(question);
            
            let formattedAnswer = answer;
            
            if (hasImage) {
                formattedAnswer = "شكراً لك على مشاركة الصورة! " + formattedAnswer;
            }
            
            return formattedAnswer;
        }
*/
        // فتح لوحة الشات المتقدم
      /*
        function openChatPanel() {
            currentPanel = 'chat';
            const lessonData = lessonsData[currentLesson];
            panelTitle.textContent = `Genius AI - ${lessonData.title}`;
            
            const chatHTML = `
            <div class="chat-container">
                <div class="chat-header">
                    <div class="chat-avatar">
                        <i class="fas fa-robot"></i>
                    </div>
                    <div>
                        <h3 style="color: var(--gold); margin: 0;">Genius AI</h3>
                        <div class="chat-status">
                            <span class="status-indicator"></span>
                            <span>متصل الآن</span>
                        </div>
                    </div>
                </div>
                
                <div class="chat-messages" id="chat-messages">
                    <div class="message-bubble ai-bubble">
                        <div class="message-sender">Genius AI</div>
                        <p class="message-text">مرحباً! أنا مساعد Genius AI. يمكنك إرسال أسئلة أو حتى صور متعلقة بـ${lessonData.title} وسأحاول مساعدتك.</p>
                        <div class="message-time">${getCurrentTime()}</div>
                    </div>
                </div>
                
                <div class="chat-input-container">
                    <input type="text" class="chat-input" id="chat-input" placeholder="اكتب سؤالك هنا...">
                    <button class="send-button" id="send-message">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>
            `;
            
            panelBody.innerHTML = chatHTML;
            sidePanel.classList.add('open');
            
            // تهيئة أحداث الشات
            setTimeout(() => {
                const chatInput = document.getElementById('chat-input');
                const sendButton = document.getElementById('send-message');
                const chatMessages = document.getElementById('chat-messages');
                
                // إرسال الرسالة
                function sendMessage() {
                    const message = chatInput.value.trim();
                    
                    if (message === '') return;
                    
                    // إنشاء رسالة المستخدم
                    const userMessage = document.createElement('div');
                    userMessage.className = 'message-bubble user-bubble';
                    userMessage.innerHTML = `
                        <div class="message-sender">أنت</div>
                        <p class="message-text">${message}</p>
                        <div class="message-time">${getCurrentTime()}</div>
                    `;
                    chatMessages.appendChild(userMessage);
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                    
                    // إرسال رد AI
                    sendAIResponse(message, false);
                    
                    // مسح الحقول
                    chatInput.value = '';
                }
                
                // إرسال رد AI
                function sendAIResponse(message, hasImage) {
                    // إظهار مؤشر الكتابة
                    const typingIndicator = document.createElement('div');
                    typingIndicator.className = 'typing-indicator';
                    typingIndicator.innerHTML = `
                        <span>يكتب</span>
                        <div class="typing-dot"></div>
                        <div class="typing-dot"></div>
                        <div class="typing-dot"></div>
                    `;
                    chatMessages.appendChild(typingIndicator);
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                    
                    setTimeout(() => {
                        // إخفاء مؤشر الكتابة
                        typingIndicator.remove();
                        
                        // توليد رد ذكي بناءً على السؤال
                        const aiResponse = generateSmartResponse(message, hasImage);
                        
                        const aiMessage = document.createElement('div');
                        aiMessage.className = 'message-bubble ai-bubble';
                        aiMessage.innerHTML = `
                            <div class="message-sender">Genius AI</div>
                            <p class="message-text">${aiResponse}</p>
                            <div class="message-time">${getCurrentTime()}</div>
                        `;
                        chatMessages.appendChild(aiMessage);
                        
                        chatMessages.scrollTop = chatMessages.scrollHeight;
                    }, 1500 + Math.random() * 1000);
                }
                
                sendButton.addEventListener('click', sendMessage);
                chatInput.addEventListener('keypress', (e) => {
                    if (e.key === 'Enter') {
                        sendMessage();
                    }
                });
            }, 100);
        }
*/

async function fetchLastScript() {
    const res = await fetch("../../proxies/studying_project/get_last_script.php");
    return await res.json();
}

async function chatWithAI(question) {
    const last = await fetchLastScript();
    const response = await fetch("../../proxies/studying_project/chat.php", {
        method: "POST",
        headers: { "Content-Type": "application/json", 
                 "accept": "application/json", 

        },
        body: JSON.stringify({
            input_text: last.script_content || "",
            question
        })
    });
    return await response.json();
}
function openChatPanel() {
    currentPanel = 'chat';
    const lessonData = lessonsData[currentLesson];
    panelTitle.textContent = `Genius AI - ${lessonData.title}`;

    panelBody.innerHTML = `
        <div class="chat-container">
            <div class="chat-header">
                <div class="chat-avatar">
                    <i class="fas fa-robot"></i>
                </div>
                <div>
                    <h3 style="color: var(--gold); margin: 0;">Genius AI</h3>
                    <div class="chat-status">
                        <span class="status-indicator"></span>
                        <span>متصل الآن</span>
                    </div>
                </div>
            </div>
            
            <div class="chat-messages" id="chat-messages">
                <div class="message-bubble ai-bubble">
                    <div class="message-sender">Genius AI</div>
                    <p class="message-text">مرحباً! أنا مساعد Genius AI. اسألني أي سؤال حول ${lessonData.title}.</p>
                    <div class="message-time">${getCurrentTime()}</div>
                </div>
            </div>
            
            <div class="chat-input-container">
                <input type="text" class="chat-input" id="chat-input" placeholder="اكتب سؤالك هنا...">
                <button class="send-button" id="send-message">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
    `;

    sidePanel.classList.add('open');

    const chatInput = document.getElementById('chat-input');
    const sendButton = document.getElementById('send-message');
    const chatMessages = document.getElementById('chat-messages');

    // إرسال الرسالة
    async function sendMessage() {
        const msg = chatInput.value.trim();
        if (!msg) return;

        // فقاعة المستخدم
        const userMessage = document.createElement('div');
        userMessage.className = 'message-bubble user-bubble';
        userMessage.innerHTML = `
            <div class="message-sender">أنت</div>
            <p class="message-text">${msg}</p>
            <div class="message-time">${getCurrentTime()}</div>
        `;
        chatMessages.appendChild(userMessage);
        chatInput.value = "";
        chatMessages.scrollTop = chatMessages.scrollHeight;

        // مؤشر الكتابة
        const typing = document.createElement('div');
        typing.className = 'typing-indicator';
        typing.innerHTML = `
            <span>يكتب</span>
            <div class="typing-dot"></div>
            <div class="typing-dot"></div>
            <div class="typing-dot"></div>
        `;
        chatMessages.appendChild(typing);
        chatMessages.scrollTop = chatMessages.scrollHeight;

        try {
            const res = await chatWithAI(msg);

            typing.remove();

            // فقاعة الرد من AI
            const aiMessage = document.createElement('div');
            aiMessage.className = 'message-bubble ai-bubble';
            aiMessage.innerHTML = `
                <div class="message-sender">Genius AI</div>
                <p class="message-text">${res.answer || "⚠️ لم أتمكن من توليد رد"}</p>
                <div class="message-time">${getCurrentTime()}</div>
            `;
            chatMessages.appendChild(aiMessage);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        } catch (err) {
            typing.remove();
            chatMessages.innerHTML += `<div class="ai-bubble">❌ حصل خطأ</div>`;
        }
    }

    sendButton.addEventListener('click', sendMessage);
    chatInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') sendMessage();
    });
}

        // الحصول على الوقت الحالي
        function getCurrentTime() {
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            return `${hours}:${minutes}`;
        }

        // إغلاق اللوحة الجانبية
        function closeSidePanel() {
            sidePanel.classList.remove('open');
            currentPanel = null;
        }

        // أحداث الأزرار
        startBtn.addEventListener('click', startVideo);
        fullscreenBtn.addEventListener('click', toggleFullscreen);
        lessonsBtn.addEventListener('click', toggleLessonsDropdown);

        // أحداث البحث في قائمة الحصص
        lessonSearch.addEventListener('input', filterLessons);

        // أحداث عناصر الحصص
        lessonItems.forEach(item => {
            item.addEventListener('click', () => {
                const lessonId = item.getAttribute('data-lesson');
                changeLesson(lessonId);
            });
        });

        // أحداث الأيقونات الجانبية
        lessonIcon.addEventListener('click', () => {
            if (currentPanel === 'lesson') {
                closeSidePanel();
            } else {
                openLessonPanel();
            }
        });

        summaryIcon.addEventListener('click', () => {
            if (currentPanel === 'summary') {
                closeSidePanel();
            } else {
                openSummaryPanel();
            }
        });

        chatIcon.addEventListener('click', () => {
            if (currentPanel === 'chat') {
                closeSidePanel();
            } else {
                openChatPanel();
            }
        });

        closePanelBtn.addEventListener('click', closeSidePanel);

        // إغلاق القائمة عند النقر خارجها
        document.addEventListener('click', (e) => {
            if (!lessonsBtn.contains(e.target) && !lessonsDropdown.contains(e.target)) {
                lessonsDropdown.classList.remove('open');
            }
            
            if (sidePanel.classList.contains('open') && 
                !sidePanel.contains(e.target) && 
                !lessonIcon.contains(e.target) &&
                !summaryIcon.contains(e.target) &&
                !chatIcon.contains(e.target)) {
                closeSidePanel();
            }
        });

        // دالة تجيب آخر فيديو من الـ DB
async function fetchLastVideo() {
    const res = await fetch("../../proxies/studying_project/get_last_video.php");
    return await res.json();
}
async function fetchLastVideo() {
    const res = await fetch("../../proxies/studying_project/get_last_video.php");
    return await res.json(); // بيرجع { video_url: "..." }
}

function convertToEmbed(url) {
    if (typeof url === "string" && url.includes("watch?v=")) {
        return url.replace("watch?v=", "embed/");
    }
    return url;
}

document.getElementById("start-btn").addEventListener("click", async () => {
    try {
        const last = await fetchLastVideo();
        if (last.video_url) {
            const embedUrl = convertToEmbed(last.video_url);
            const videoPlayer = document.getElementById("video-player");
            videoPlayer.src = embedUrl + "?enablejsapi=1&autoplay=1";
            videoPlayer.classList.remove("hidden");
            document.getElementById("video-placeholder").classList.add("hidden");
            isVideoPlaying = true;
        } else {
            alert("⚠️ لا يوجد فيديو محفوظ في قاعدة البيانات");
        }
    } catch (err) {
        alert("❌ خطأ في تحميل الفيديو: " + err.message);
    }
});

// تشغيل الفيديو
async function startVideo() {
    if (isVideoPlaying) return;

    try {
        const last = await fetchLastVideo();
        if (last.video_url) {
            videoPlayer.src = last.video_url + "?enablejsapi=1&autoplay=1";
            videoPlaceholder.classList.add('hidden');
            videoPlayer.classList.remove('hidden');
            isVideoPlaying = true;
            startBtn.innerHTML = '<i class="fas fa-play"></i> جاري التشغيل...';
        } else {
            alert("⚠️ لا يوجد فيديو مرفوع");
        }
    } catch (err) {
        alert("❌ خطأ في تحميل الفيديو: " + err.message);
    }
}

        // تهيئة الصفحة الأولى
       document.addEventListener("DOMContentLoaded", () => {
 
});

    </script>
</body>
</html>