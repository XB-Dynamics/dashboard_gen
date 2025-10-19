
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius AI - الفصل الذكي</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap");

        :root {
          --primary-color: hsl(45, 100%, 72%);
          --primary-color-light: hsl(45, 100%, 80%);
          --primary-color-dark: hsl(45, 54%, 58%);
          --secondary-color: hsl(210, 100%, 56%);
          --secondary-color-light: hsl(210, 100%, 70%);
          --secondary-color-dark: hsl(210, 100%, 40%);
          --accent-color: hsl(0, 43%, 51%);
          --dark-color: hsl(0, 0%, 7%);
          --light-color: hsl(0, 0%, 98%);
          --border-color: hsl(0, 0%, 22%);
          --text-color: hsl(0, 0%, 84%);
          --text-light: hsla(0, 0%, 84%, 0.7);
          
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
          --bg-gradient-primary1: linear-gradient(
            to bottom right,
            var(--primary-color) 0%,
            hsla(36, 100%, 69%, 0) 50%
          );
          --bg-gradient-primary2: linear-gradient(
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
          --text-gradient-primary: linear-gradient(
            to right,
            var(--primary-color),
            var(--primary-color-dark)
          );

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

          --shadow1: -4px 8px 24px hsla(0, 0%, 0%, 0.25);
          --shadow2: 0px 16px 30px hsla(0, 0%, 0%, 0.25);
          --shadow3: 0px 16px 40px hsla(0, 0%, 0%, 0.25);
          --shadow4: 0px 25px 50px hsla(0, 0%, 0%, 0.15);
          --shadow5: 0px 24px 80px hsla(0, 0%, 0%, 0.25);

          --transition1: 0.25s ease;
          --transition2: 0.5s ease-in-out;
          
          --sidebar-width: 80px;
          --sidebar-expanded: 320px;
        }

        /* Theme Colors */
        .theme-gold {
          --primary-color: hsl(45, 100%, 72%);
          --primary-color-light: hsl(45, 100%, 80%);
          --primary-color-dark: hsl(45, 54%, 58%);
        }
        
        .theme-blue {
          --primary-color: hsl(210, 100%, 56%);
          --primary-color-light: hsl(210, 100%, 70%);
          --primary-color-dark: hsl(210, 100%, 40%);
        }
        
        .theme-green {
          --primary-color: hsl(120, 61%, 50%);
          --primary-color-light: hsl(120, 61%, 65%);
          --primary-color-dark: hsl(120, 61%, 40%);
        }
        
        .theme-purple {
          --primary-color: hsl(270, 50%, 60%);
          --primary-color-light: hsl(270, 50%, 75%);
          --primary-color-dark: hsl(270, 50%, 45%);
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
          background: var(--primary-color);
          color: var(--dark-color);
        }

        :focus {
          outline-color: var(--primary-color);
        }

        html {
          font-family: var(--ff-tajawal);
        }

        body {
          background: var(--dark-color);
          color: var(--text-color);
          height: 100vh;
          display: flex;
          flex-direction: column;
          overflow: hidden;
        }

        .header {
            background: var(--border-gradient-onyx);
            padding: 12px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: var(--shadow1);
            z-index: 10;
            position: relative;
        }

        .header::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            z-index: -1;
        }

        .logo {
            font-weight: var(--fw600);
            font-size: var(--fs2);
            color: var(--primary-color);
            display: flex;
            align-items: center;
        }

        .logo i {
            margin-left: 8px;
            color: var(--primary-color-dark);
        }

        .meeting-info {
            display: flex;
            align-items: center;
        }

        .meeting-time {
            background: var(--border-gradient-onyx);
            color: var(--text-color);
            padding: 6px 12px;
            border-radius: 18px;
            font-size: var(--fs6);
            margin-left: 12px;
            position: relative;
        }

        .meeting-time::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .theme-toggle {
            background: var(--border-gradient-onyx);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            margin-right: 12px;
            position: relative;
            transition: var(--transition1);
        }

        .theme-toggle::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .theme-toggle:hover {
            transform: rotate(30deg);
        }

        .theme-toggle i {
            color: var(--text-color);
            font-size: 16px;
        }

        .main-container {
            display: flex;
            flex: 1;
            overflow: hidden;
            position: relative;
        }

        .video-main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--border-gradient-onyx);
            position: relative;
            overflow: hidden;
            transition: margin-left 0.3s;
        }

        .video-main::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            z-index: -1;
        }

        .teacher-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .video-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: var(--text-color);
        }

        .video-placeholder i {
            font-size: 72px;
            margin-bottom: 16px;
            color: var(--primary-color-dark);
        }

        .video-placeholder p {
            font-size: var(--fs2);
            color: var(--text-light);
        }

        .my-video {
            position: absolute;
            bottom: 20px;
            right: 20px;
            width: 180px;
            height: 120px;
            border-radius: 8px;
            border: 2px solid var(--text-color);
            box-shadow: var(--shadow1);
            background: var(--border-gradient-onyx);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 5;
        }

        .my-video::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .my-video i {
            color: var(--text-light);
            font-size: 36px;
        }

        /* Modern Sidebar - Right Side */
        .sidebar-icons {
            position: fixed;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 10;
            background: var(--border-gradient-onyx);
            padding: 15px 10px;
            border-radius: 30px;
            box-shadow: var(--shadow1);
        }

        .sidebar-icons::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .sidebar-icons.collapsed {
            gap: 0;
        }

        .sidebar-icons.collapsed .sidebar-icon {
            margin-bottom: -15px;
            transform: scale(0.9);
            opacity: 0.8;
        }

        .sidebar-icons.collapsed .sidebar-icon:hover {
            transform: scale(1);
            opacity: 1;
        }

        .sidebar-icon {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: var(--border-gradient-onyx);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: var(--shadow1);
            transition: all 0.3s;
            position: relative;
        }

        .sidebar-icon::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .sidebar-icon:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow2);
        }

        .sidebar-icon.active {
            background: var(--bg-gradient-primary1);
            color: var(--dark-color);
        }

        .sidebar-icon.active::before {
            background: var(--bg-gradient-primary2);
        }

        .sidebar-icon i {
            font-size: 20px;
            color: var(--text-color);
        }

        .sidebar-icon.active i {
            color: var(--dark-color);
        }

        .sidebar-badge {
            position: absolute;
            top: -5px;
            left: -5px;
            background: var(--accent-color);
            color: var(--light-color);
            width: 20px;
            height: 20px;
            border-radius: 50%;
            font-size: 11px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .toggle-sidebar {
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: var(--bg-gradient-primary1);
            color: var(--dark-color);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            z-index: 5;
            box-shadow: var(--shadow1);
        }

        .toggle-sidebar::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-primary2);
            border-radius: inherit;
            z-index: -1;
        }

        /* Sidebar Content - Full Screen */
        .sidebar-content {
            position: fixed;
            top: 0;
            right: -100%;
            width: 100%;
            height: 100%;
            background: var(--border-gradient-onyx);
            z-index: 20;
            transition: right 0.3s ease;
            display: flex;
            flex-direction: column;
            box-shadow: var(--shadow5);
        }

        .sidebar-content::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            z-index: -1;
        }

        .sidebar-content.active {
            right: 0;
        }

        .sidebar-header {
            padding: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--border-color);
        }

        .sidebar-title {
            font-weight: var(--fw600);
            font-size: var(--fs2);
            display: flex;
            align-items: center;
            color: var(--text-color);
        }

        .sidebar-title i {
            margin-left: 8px;
            color: var(--primary-color);
        }

        .close-sidebar {
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: var(--text-light);
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            transition: var(--transition1);
        }

        .close-sidebar:hover {
            color: var(--text-color);
            background: hsla(0, 0%, 100%, 0.1);
        }

        .back-to-main {
            position: absolute;
            top: 16px;
            left: 16px;
            background: var(--bg-gradient-primary1);
            color: var(--dark-color);
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            z-index: 5;
            box-shadow: var(--shadow1);
            transition: var(--transition1);
        }

        .back-to-main::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-primary2);
            border-radius: inherit;
            z-index: -1;
        }

        .back-to-main:hover {
            transform: translateX(-3px);
        }

        .tab-content {
            flex: 1;
            overflow-y: auto;
            display: none;
            flex-direction: column;
            padding: 16px;
        }

        .tab-content.active {
            display: flex;
        }

        /* Chat Styles */
        .chat-messages {
            flex: 1;
            overflow-y: auto;
            padding-bottom: 16px;
        }

        .message {
            margin-bottom: 16px;
            display: flex;
            flex-direction: column;
        }

        .message-header {
            display: flex;
            align-items: center;
            margin-bottom: 6px;
        }

        .message-user {
            font-weight: var(--fw500);
            font-size: var(--fs6);
            color: var(--text-color);
        }

        .message-ai {
            color: var(--primary-color);
        }

        .message-time {
            font-size: 11px;
            color: var(--text-light);
            margin-right: 8px;
        }

        .message-content {
            padding: 10px 14px;
            border-radius: 18px;
            max-width: 85%;
            font-size: var(--fs6);
            line-height: 1.4;
            position: relative;
        }

        .ai-message {
            align-items: flex-start;
        }

        .ai-message .message-content {
            background: var(--border-gradient-onyx);
            border-top-right-radius: 4px;
            color: var(--text-color);
        }

        .ai-message .message-content::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .user-message {
            align-items: flex-end;
        }

        .user-message .message-content {
            background: var(--bg-gradient-primary1);
            color: var(--dark-color);
            border-top-left-radius: 4px;
        }

        .user-message .message-content::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-primary2);
            border-radius: inherit;
            z-index: -1;
        }

        .chat-input-container {
            padding: 12px 16px;
            border-top: 1px solid var(--border-color);
            display: flex;
            align-items: center;
        }

        .chat-input {
            flex: 1;
            padding: 10px 14px;
            border: 1px solid var(--border-color);
            border-radius: 24px;
            outline: none;
            font-size: var(--fs6);
            transition: border 0.2s;
            color: var(--text-color);
            background: var(--bg-gradient-jet);
        }

        .chat-input:focus {
            border-color: var(--primary-color);
        }

        .send-btn {
            background: var(--bg-gradient-primary1);
            color: var(--dark-color);
            border: none;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            margin-right: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: var(--transition1);
            position: relative;
        }

        .send-btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-primary2);
            border-radius: inherit;
            z-index: -1;
        }

        .send-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow2);
        }

        /* Explanation Styles */
        .explanation-container {
            flex: 1;
            overflow-y: auto;
            padding: 16px;
        }

        .explanation-section {
            margin-bottom: 25px;
        }

        .explanation-title {
            font-weight: var(--fw600);
            font-size: var(--fs2);
            color: var(--primary-color);
            margin-bottom: 15px;
            padding-bottom: 7px;
            border-bottom: 2px solid var(--primary-color);
            display: flex;
            align-items: center;
        }

        .explanation-title i {
            margin-left: 10px;
        }

        .law-container {
            background: var(--border-gradient-onyx);
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            border-right: 3px solid var(--primary-color);
            position: relative;
        }

        .law-container::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .law-title {
            font-weight: var(--fw600);
            margin-bottom: 10px;
            color: var(--primary-color);
        }

        .law-formula {
            background: var(--border-gradient-onyx);
            padding: 12px;
            border-radius: 6px;
            font-family: 'Courier New', monospace;
            font-size: 16px;
            margin-bottom: 10px;
            border: 1px solid var(--border-color);
            direction: ltr;
            text-align: center;
            color: var(--text-color);
            position: relative;
        }

        .law-formula::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .law-explanation {
            font-size: var(--fs6);
            line-height: 1.6;
            margin-bottom: 10px;
            color: var(--text-color);
        }

        .example-container {
            background: var(--border-gradient-onyx);
            border-radius: 8px;
            padding: 15px;
            margin-top: 15px;
            position: relative;
        }

        .example-container::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .example-title {
            font-weight: var(--fw600);
            margin-bottom: 10px;
            color: var(--primary-color);
        }

        .example-content {
            font-size: var(--fs6);
            line-height: 1.6;
            color: var(--text-color);
        }

        .example-solution {
            background: var(--border-gradient-onyx);
            padding: 10px;
            border-radius: 6px;
            margin-top: 10px;
            font-family: 'Courier New', monospace;
            border: 1px dashed var(--primary-color);
            color: var(--text-color);
            position: relative;
        }

        .example-solution::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        /* Notes Styles */
        .notes-container {
            flex: 1;
            overflow-y: auto;
            padding: 16px;
        }

        .note-section {
            margin-bottom: 20px;
        }

        .note-title {
            font-weight: var(--fw600);
            margin-bottom: 12px;
            color: var(--primary-color);
            display: flex;
            align-items: center;
        }

        .note-title i {
            margin-left: 8px;
        }

        .note-content {
            background: var(--border-gradient-onyx);
            padding: 14px;
            border-radius: 8px;
            border-right: 3px solid var(--primary-color);
            position: relative;
        }

        .note-content::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .note-item {
            margin-bottom: 10px;
            padding-right: 16px;
            position: relative;
            font-size: var(--fs6);
            line-height: 1.5;
            color: var(--text-color);
        }

        .note-item:before {
            content: '';
            position: absolute;
            right: 0;
            top: 8px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--primary-color);
        }

        .note-item strong {
            color: var(--primary-color);
        }

        /* Test Styles - Improved Responsive Design */
        .test-container {
            flex: 1;
            overflow-y: auto;
            padding: 16px;
            display: flex;
            flex-direction: column;
        }

        .test-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--primary-color);
        }

        .test-title {
            font-weight: var(--fw600);
            font-size: var(--fs2);
            color: var(--primary-color);
            display: flex;
            align-items: center;
        }

        .test-title i {
            margin-left: 10px;
        }

        .test-progress {
            font-size: var(--fs6);
            color: var(--text-light);
        }

        .questions-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .question-card {
            background: var(--border-gradient-onyx);
            border-radius: 12px;
            padding: 20px;
            box-shadow: var(--shadow1);
            position: relative;
            transition: var(--transition1);
            border-right: 3px solid var(--primary-color);
        }

        .question-card::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .question-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow2);
        }

        .question-number {
            display: inline-block;
            width: 30px;
            height: 30px;
            background: var(--bg-gradient-primary1);
            color: var(--dark-color);
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            font-weight: var(--fw600);
            margin-left: 10px;
            position: relative;
        }

        .question-number::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-primary2);
            border-radius: inherit;
            z-index: -1;
        }

        .question-text {
            font-weight: var(--fw500);
            margin: 15px 0;
            color: var(--text-color);
            font-size: var(--fs4);
            line-height: 1.5;
        }

        .options-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .option {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition1);
            position: relative;
            border: 1px solid var(--border-color);
        }

        .option:hover {
            background: var(--border-gradient-onyx);
        }

        .option:hover::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .option input[type="radio"] {
            appearance: none;
            -webkit-appearance: none;
            width: 18px;
            height: 18px;
            border: 2px solid var(--text-light);
            border-radius: 50%;
            margin-left: 12px;
            cursor: pointer;
            position: relative;
            transition: var(--transition1);
        }

        .option input[type="radio"]:checked {
            border-color: var(--primary-color);
        }

        .option input[type="radio"]:checked::after {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 10px;
            height: 10px;
            background: var(--primary-color);
            border-radius: 50%;
        }

        .option label {
            color: var(--text-color);
            cursor: pointer;
            flex: 1;
            font-size: var(--fs5);
        }

        /* Essay question style */
        .essay-question {
            margin-top: 15px;
        }

        .essay-textarea {
            width: 100%;
            min-height: 120px;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid var(--border-color);
            background: var(--bg-gradient-jet);
            color: var(--text-color);
            font-family: var(--ff-tajawal);
            font-size: var(--fs5);
            resize: vertical;
        }

        .essay-textarea:focus {
            border-color: var(--primary-color);
            outline: none;
        }

        /* True/False question style */
        .true-false-options {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .true-false-btn {
            flex: 1;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid var(--border-color);
            background: var(--bg-gradient-jet);
            color: var(--text-color);
            text-align: center;
            cursor: pointer;
            transition: var(--transition1);
            position: relative;
        }

        .true-false-btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .true-false-btn.selected {
            background: var(--bg-gradient-primary1);
            color: var(--dark-color);
            border-color: var(--primary-color);
        }

        .true-false-btn.selected::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-primary2);
            border-radius: inherit;
            z-index: -1;
        }

        .test-navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid var(--border-color);
        }

        .nav-btn {
            background: var(--border-gradient-onyx);
            color: var(--text-color);
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: var(--fw500);
            transition: var(--transition1);
            position: relative;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .nav-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow2);
        }

        .nav-btn.next {
            background: var(--bg-gradient-primary1);
            color: var(--dark-color);
        }

        .nav-btn.next::before {
            background: var(--bg-gradient-primary2);
        }

        .submit-btn {
            background: var(--bg-gradient-primary1);
            color: var(--dark-color);
            border: none;
            padding: 12px 24px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: var(--fw600);
            margin: 30px auto 0;
            transition: var(--transition1);
            position: relative;
            display: block;
            width: fit-content;
        }

        .submit-btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-primary2);
            border-radius: inherit;
            z-index: -1;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow3);
        }

        /* Test Results */
        .results-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            text-align: center;
        }

        .results-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--bg-gradient-primary1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            position: relative;
        }

        .results-icon::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-primary2);
            border-radius: inherit;
            z-index: -1;
        }

        .results-icon i {
            font-size: 36px;
            color: var(--dark-color);
        }

        .results-score {
            font-size: 36px;
            font-weight: var(--fw700);
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .results-message {
            font-size: var(--fs3);
            color: var(--text-color);
            margin-bottom: 20px;
            max-width: 500px;
        }

        .results-details {
            width: 100%;
            max-width: 500px;
            margin-top: 20px;
        }

        .result-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid var(--border-color);
        }

        .result-question {
            color: var(--text-color);
        }

        .result-status {
            font-weight: var(--fw600);
        }

        .result-correct {
            color: var(--primary-color);
        }

        .result-wrong {
            color: var(--accent-color);
        }

        /* AI Summary */
        .ai-summary {
            background: var(--border-gradient-onyx);
            border-radius: 8px;
            padding: 14px;
            margin-top: 16px;
            border-right: 3px solid var(--primary-color);
            position: relative;
        }

        .ai-summary::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .ai-summary-title {
            font-weight: var(--fw600);
            margin-bottom: 8px;
            color: var(--primary-color);
            display: flex;
            align-items: center;
        }

        .ai-summary-title i {
            margin-left: 8px;
        }

        .ai-summary-content {
            font-size: var(--fs6);
            line-height: 1.5;
            color: var(--text-color);
        }

        /* Controls */
        .controls {
            background: var(--border-gradient-onyx);
            padding: 12px 24px;
            display: flex;
            justify-content: center;
            gap: 16px;
            box-shadow: var(--shadow1);
            z-index: 5;
            position: relative;
        }

        .controls::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            z-index: -1;
        }

        .control-btn {
            background: var(--border-gradient-onyx);
            border: none;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: var(--transition1);
            position: relative;
            color: var(--text-color);
        }

        .control-btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .control-btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow2);
        }

        .control-btn.active {
            background: var(--bg-gradient-primary1);
            color: var(--dark-color);
        }

        .control-btn.active::before {
            background: var(--bg-gradient-primary2);
        }

        .control-btn i {
            font-size: 18px;
        }

        .control-btn.end-call {
            background: var(--accent-color);
            color: var(--light-color);
        }

        .control-btn.end-call:hover {
            background: var(--accent-color);
            opacity: 0.9;
        }

        /* Animation for button click */
        @keyframes clickAnimation {
            0% { transform: scale(1); }
            50% { transform: scale(0.9); }
            100% { transform: scale(1); }
        }

        .click-animation {
            animation: clickAnimation 0.3s ease;
        }

        /* Hand raise notification - Updated to center */
        .hand-notification {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: var(--bg-gradient-primary1);
            color: var(--dark-color);
            padding: 15px 25px;
            border-radius: 30px;
            box-shadow: var(--shadow3);
            display: flex;
            align-items: center;
            gap: 10px;
            z-index: 100;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .hand-notification.show {
            opacity: 1;
        }

        /* Overlay for sidebar */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: hsla(0, 0%, 5%, 0.8);
            z-index: 15;
            display: none;
        }

        .overlay.active {
            display: block;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .sidebar-content {
                max-width: 100%;
            }

            .my-video {
                width: 150px;
                height: 100px;
            }
        }

        @media (max-width: 768px) {
            .header {
                padding: 10px 16px;
            }

            .controls {
                padding: 10px 16px;
                gap: 10px;
            }

            .control-btn {
                width: 42px;
                height: 42px;
            }

            .my-video {
                width: 120px;
                height: 80px;
                bottom: 10px;
                right: 10px;
            }

            .sidebar-icons {
                right: 10px;
                gap: 10px;
                padding: 10px 8px;
            }

            .sidebar-icon {
                width: 48px;
                height: 48px;
            }

            .question-card {
                padding: 15px;
            }

            .option {
                padding: 10px 12px;
            }
        }

        @media (max-width: 576px) {
            .my-video {
                width: 100px;
                height: 70px;
            }

            .sidebar-icons {
                flex-direction: row;
                top: auto;
                bottom: 80px;
                right: 50%;
                transform: translateX(50%);
                background: var(--border-gradient-onyx);
                padding: 8px 15px;
                border-radius: 30px;
                gap: 8px;
            }

            .sidebar-icons::before {
                inset: 1px;
                background: var(--bg-gradient-jet);
            }

            .sidebar-icons.collapsed {
                flex-direction: column;
                gap: 0;
            }

            .sidebar-icon {
                width: 42px;
                height: 42px;
            }

            .toggle-sidebar {
                display: none;
            }

            .back-to-main {
                top: 10px;
                left: 10px;
                width: 36px;
                height: 36px;
            }

            .test-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .question-text {
                font-size: var(--fs5);
            }

            .option label {
                font-size: var(--fs6);
            }

            .test-navigation {
                flex-direction: column;
                gap: 10px;
            }

            .nav-btn {
                width: 100%;
                justify-content: center;
            }

            /* Adjust controls for mobile */
            .controls {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                padding: 10px;
                justify-content: space-around;
                gap: 5px;
            }

            .control-btn {
                width: 40px;
                height: 40px;
                margin: 0;
            }

            /* Adjust video container for mobile */
            .video-main {
                margin-bottom: 60px;
            }
        }

        @media (min-width: 992px) {
            .sidebar-content {
                max-width: 450px;
            }
        }
    </style>
</head>
<body class="theme-gold">
    <div class="header">
        <div class="logo">
            <i class="fas fa-brain"></i>
            <span>Genius AI</span>
        </div>
        <div class="meeting-info">
            <div class="meeting-time" id="meeting-time">00:00:00</div>
            <div class="participants-count">
                <i class="fas fa-user-friends"></i>
                <span id="participants-count">1</span>
            </div>
        </div>
    </div>
    
    <div class="main-container">
        <div class="video-main" id="video-main">
            <div class="video-placeholder">
                <i class="fas fa-chalkboard-teacher"></i>
                <p>جاري تحميل بث المعلم...</p>
            </div>
            
            <div class="my-video" id="my-video">
                <i class="fas fa-user"></i>
            </div>
        </div>
        
        <!-- Sidebar Icons - Right Side -->
        <div class="sidebar-icons" id="sidebar-icons">
            <div class="toggle-sidebar" id="toggle-sidebar">
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="sidebar-icon active" id="chat-icon" title="الدردشة">
                <i class="fas fa-comment-dots"></i>
                <span class="sidebar-badge" id="chat-badge">3</span>
            </div>
            <div class="sidebar-icon" id="explanation-icon" title="شرح الدروس">
                <i class="fas fa-lightbulb"></i>
            </div>
            <div class="sidebar-icon" id="notes-icon" title="الملاحظات">
                <i class="fas fa-clipboard-list"></i>
            </div>
            <div class="sidebar-icon" id="test-icon" title="الاختبارات">
                <i class="fas fa-question-circle"></i>
            </div>
        </div>
        
        <!-- Sidebar Content - Full Screen -->
        <div class="sidebar-content" id="sidebar-content">
            <button class="back-to-main" id="back-to-main" title="العودة للشاشة الرئيسية">
                <i class="fas fa-arrow-left"></i>
            </button>
            
            <div class="sidebar-header">
                <div class="sidebar-title" id="sidebar-title">
                    <i class="fas fa-comment-dots"></i>
                    <span>الدردشة</span>
                </div>
                <button class="close-sidebar" id="close-sidebar">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <div class="tab-content active" id="chat-tab">
                <div class="chat-messages" id="chat-messages">
                    <div class="message ai-message">
                        <div class="message-header">
                            <span class="message-time">12:45</span>
                            <span class="message-user message-ai">Genius AI</span>
                        </div>
                        <div class="message-content">
                            مرحبًا بك في نظام Genius AI! أنا هنا لمساعدتك في فهم الدروس وحل الأسئلة.
                        </div>
                    </div>
                    <div class="message ai-message">
                        <div class="message-header">
                            <span class="message-time">12:46</span>
                            <span class="message-user message-ai">Genius AI</span>
                        </div>
                        <div class="message-content">
                            يمكنك استخدام أيقونة "شرح الدروس" للحصول على تفاصيل القوانين والأمثلة.
                        </div>
                    </div>
                    <div class="message ai-message">
                        <div class="message-header">
                            <span class="message-time">12:50</span>
                            <span class="message-user message-ai">Genius AI</span>
                        </div>
                        <div class="message-content">
                            جرب أيقونة "الاختبارات" لفحص فهمك للدرس الحالي.
                        </div>
                    </div>
                </div>
                
                <div class="ai-summary">
                    <div class="ai-summary-title">
                        <i class="fas fa-info-circle"></i>
                        <span>ملخص الدرس الحالي</span>
                    </div>
                    <div class="ai-summary-content" id="current-explanation">
                        يتم الآن شرح موضوع المعادلات التربيعية. يمكنك الانتقال إلى قسم "شرح الدروس" لمشاهدة التفاصيل الكاملة.
                    </div>
                </div>
                
                <div class="chat-input-container">
                    <input type="text" class="chat-input" id="chat-input" placeholder="اكتب سؤالك هنا...">
                    <button class="send-btn" id="send-btn">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>
            
            <div class="tab-content" id="explanation-tab">
                <div class="explanation-container">
                    <div class="explanation-section">
                        <div class="explanation-title">
                            <i class="fas fa-square-root-alt"></i>
                            <span>المعادلات التربيعية</span>
                        </div>
                        
                        <div class="law-container">
                            <div class="law-title">الصيغة العامة:</div>
                            <div class="law-formula">ax² + bx + c = 0</div>
                            <div class="law-explanation">
                                حيث:
                                <ul style="margin-right: 20px; margin-top: 8px;">
                                    <li>a, b, c أعداد حقيقية و a ≠ 0</li>
                                    <li>x هو المتغير المجهول</li>
                                    <li>أعلى أس للمتغير x هو 2</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="law-container">
                            <div class="law-title">القانون العام:</div>
                            <div class="law-formula">x = [-b ± √(b² - 4ac)] / 2a</div>
                            <div class="law-explanation">
                                يستخدم هذا القانون لإيجاد حلول المعادلة التربيعية. الجزء تحت الجذر (b² - 4ac) يسمى "المميز" ويحدد نوع الحلول:
                                <ul style="margin-right: 20px; margin-top: 8px;">
                                    <li>إذا كان المميز > 0: يوجد حلان حقيقيان مختلفان</li>
                                    <li>إذا كان المميز = 0: يوجد حل حقيقي واحد مكرر</li>
                                    <li>إذا كان المميز < 0: لا يوجد حلول حقيقية (ولكن يوجد حلول مركبة)</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="example-container">
                            <div class="example-title">
                                <i class="fas fa-tasks"></i>
                                <span>مثال تطبيقي</span>
                            </div>
                            <div class="example-content">
                                حل المعادلة: x² - 5x + 6 = 0
                            </div>
                            <div class="example-solution">
                                الحل:
                                <br>a = 1, b = -5, c = 6
                                <br>المميز = b² - 4ac = (-5)² - 4(1)(6) = 25 - 24 = 1
                                <br>الحلول:
                                <br>x = [5 ± √1] / 2
                                <br>x₁ = (5 + 1)/2 = 3
                                <br>x₂ = (5 - 1)/2 = 2
                            </div>
                        </div>
                    </div>
                    
                    <div class="explanation-section">
                        <div class="explanation-title">
                            <i class="fas fa-shapes"></i>
                            <span>طريقة إكمال المربع</span>
                        </div>
                        
                        <div class="law-container">
                            <div class="law-title">الخطوات:</div>
                            <div class="law-explanation">
                                <ol style="margin-right: 20px;">
                                    <li>تأكد من أن معامل x² هو 1 (إذا لم يكن كذلك، اقسم جميع الحدود على a)</li>
                                    <li>انقل الحد الثابت إلى الجانب الآخر</li>
                                    <li>أكمل المربع بإضافة (b/2)² إلى كلا الجانبين</li>
                                    <li>اكتب الجانب الأيسر كمربع كامل</li>
                                    <li>خذ الجذر التربيعي لكلا الجانبين</li>
                                    <li>حل من أجل x</li>
                                </ol>
                            </div>
                        </div>
                        
                        <div class="example-container">
                            <div class="example-title">
                                <i class="fas fa-tasks"></i>
                                <span>مثال تطبيقي</span>
                            </div>
                            <div class="example-content">
                                حل المعادلة: x² + 6x + 5 = 0 بإكمال المربع
                            </div>
                            <div class="example-solution">
                                الحل:
                                <br>1. x² + 6x = -5
                                <br>2. (6/2)² = 9 → أضف 9 للطرفين
                                <br>3. x² + 6x + 9 = 4
                                <br>4. (x + 3)² = 4
                                <br>5. x + 3 = ±2
                                <br>6. الحلول: x = -1 أو x = -5
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-content" id="notes-tab">
                <div class="notes-container">
                    <div class="note-section">
                        <div class="note-title">
                            <i class="fas fa-book"></i>
                            <span>ملخص الدرس الحالي</span>
                        </div>
                        <div class="note-content">
                            <div class="note-item">
                                <strong>المعادلات التربيعية:</strong> هي معادلات من الدرجة الثانية تأخذ الصيغة العامة ax² + bx + c = 0
                            </div>
                            <div class="note-item">
                                <strong>حل المعادلة:</strong> يمكن استخدام القانون العام x = [-b ± √(b² - 4ac)] / 2a
                            </div>
                            <div class="note-item">
                                <strong>المميز:</strong> هو القيمة b² - 4ac التي تحدد نوع وعدد الحلول
                            </div>
                            <div class="note-item">
                                <strong>إكمال المربع:</strong> طريقة بديلة لحل المعادلات التربيعية
                            </div>
                        </div>
                    </div>
                    
                    <div class="note-section">
                        <div class="note-title">
                            <i class="fas fa-question-circle"></i>
                            <span>أسئلة وأجوبة</span>
                        </div>
                        <div class="note-content">
                            <div class="note-item">
                                <strong>س:</strong> كيف نحدد إذا كانت المعادلة لها حلول حقيقية؟
                                <strong>ج:</strong> إذا كان المميز ≥ 0 فهناك حلول حقيقية
                            </div>
                            <div class="note-item">
                                <strong>س:</strong> ماذا يعني مميز سالب؟
                                <strong>ج:</strong> يعني أن المعادلة ليس لها حلول حقيقية ولكن لها حلول مركبة
                            </div>
                        </div>
                    </div>
                    
                    <div class="note-section">
                        <div class="note-title">
                            <i class="fas fa-tasks"></i>
                            <span>أمثلة محلولة</span>
                        </div>
                        <div class="note-content">
                            <div class="note-item">
                                <strong>مثال 1:</strong> x² - 5x + 6 = 0 → الحل: x = 2 أو x = 3
                            </div>
                            <div class="note-item">
                                <strong>مثال 2:</strong> 2x² + 4x + 2 = 0 → الحل: x = -1 (جذر مكرر)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-content" id="test-tab">
                <div class="test-container">
                    <div class="test-header">
                        <div class="test-title">
                            <i class="fas fa-question-circle"></i>
                            <span>اختبار المعادلات التربيعية</span>
                        </div>
                        <div class="test-progress">السؤال 1 من 5</div>
                    </div>
                    
                    <div class="questions-container" id="questions-container">
                        <!-- Questions will be rendered here by JavaScript -->
                    </div>
                    
                    <div class="test-navigation">
                        <button class="nav-btn" id="prev-btn">
                            <i class="fas fa-arrow-right"></i>
                            السابق
                        </button>
                        <button class="nav-btn next" id="next-btn">
                            التالي
                            <i class="fas fa-arrow-left"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Hand raise notification - Updated to center -->
        <div class="hand-notification" id="hand-notification">
            <i class="fas fa-hand-paper"></i>
            <span>تم رفع يدك بنجاح</span>
        </div>
        
        <!-- Overlay -->
        <div class="overlay" id="overlay"></div>
    </div>
    
    <div class="controls">
        <button class="control-btn active" id="mic-btn" title="ميكروفون">
            <i class="fas fa-microphone"></i>
        </button>
        <button class="control-btn" id="camera-btn" title="كاميرا">
            <i class="fas fa-video"></i>
        </button>
        <button class="control-btn" id="screen-btn" title="مشاركة الشاشة">
            <i class="fas fa-desktop"></i>
        </button>
        <button class="control-btn" id="hand-btn" title="رفع اليد">
            <i class="fas fa-hand-paper"></i>
        </button>
        <button class="control-btn end-call" id="end-call-btn" title="إنهاء المكالمة">
            <i class="fas fa-phone-slash"></i>
        </button>
    </div>

    <script>
        // Initialize the app
        document.addEventListener('DOMContentLoaded', function() {
            // Set participants count
            document.getElementById('participants-count').textContent = 1;
            
            // Chat functionality
            const chatInput = document.getElementById('chat-input');
            const sendBtn = document.getElementById('send-btn');
            const chatMessages = document.getElementById('chat-messages');
            
            function sendMessage() {
                const message = chatInput.value.trim();
                if (message) {
                    // Get current time
                    const now = new Date();
                    const timeString = now.getHours() + ':' + (now.getMinutes() < 10 ? '0' : '') + now.getMinutes();
                    
                    // Add user message
                    const userMessage = document.createElement('div');
                    userMessage.className = 'message user-message';
                    userMessage.innerHTML = `
                        <div class="message-header">
                            <span class="message-time">${timeString}</span>
                            <span class="message-user">أنت</span>
                        </div>
                        <div class="message-content">${message}</div>
                    `;
                    chatMessages.appendChild(userMessage);
                    
                    // Clear input
                    chatInput.value = '';
                    
                    // Scroll to bottom
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                    
                    // Simulate AI response after a delay
                    setTimeout(() => {
                        const aiResponses = [
                            "هذا سؤال ممتاز! حسب ما يتم شرحه الآن، الجواب هو...",
                            "شكرًا لسؤالك. بناءً على الدرس الحالي، يمكن القول أن...",
                            "لقد قمت بتحليل سؤالك ووجدت أن الإجابة مرتبطة بما يشرحه الأستاذ الآن وهو...",
                            "حسب المعلومات المتوفرة لدي من الشرح الحالي...",
                            "هذا السؤال يتعلق مباشرة بالنقطة التي يتم شرحها الآن. الإجابة هي..."
                        ];
                        
                        const randomResponse = aiResponses[Math.floor(Math.random() * aiResponses.length)];
                        
                        // Get current time for AI response
                        const aiNow = new Date();
                        const aiTimeString = aiNow.getHours() + ':' + (aiNow.getMinutes() < 10 ? '0' : '') + aiNow.getMinutes();
                        
                        const aiMessage = document.createElement('div');
                        aiMessage.className = 'message ai-message';
                        aiMessage.innerHTML = `
                            <div class="message-header">
                                <span class="message-time">${aiTimeString}</span>
                                <span class="message-user message-ai">Genius AI</span>
                            </div>
                            <div class="message-content">${randomResponse}</div>
                        `;
                        chatMessages.appendChild(aiMessage);
                        
                        // Update chat badge
                        updateChatBadge();
                        
                        // Scroll to bottom
                        chatMessages.scrollTop = chatMessages.scrollHeight;
                    }, 1000 + Math.random() * 2000);
                }
            }
            
            function updateChatBadge() {
                const badge = document.getElementById('chat-badge');
                const currentCount = parseInt(badge.textContent) || 0;
                badge.textContent = currentCount + 1;
                badge.style.display = 'flex';
            }
            
            sendBtn.addEventListener('click', sendMessage);
            
            chatInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    sendMessage();
                }
            });
            
            // Meeting timer
            let seconds = 0;
            setInterval(function() {
                seconds++;
                const hours = Math.floor(seconds / 3600);
                const minutes = Math.floor((seconds % 3600) / 60);
                const secs = seconds % 60;
                document.getElementById('meeting-time').textContent = 
                    `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
            }, 1000);
            
            // Sidebar functionality
            const sidebarIcons = {
                chat: document.getElementById('chat-icon'),
                explanation: document.getElementById('explanation-icon'),
                notes: document.getElementById('notes-icon'),
                test: document.getElementById('test-icon')
            };
            
            const sidebarContent = document.getElementById('sidebar-content');
            const overlay = document.getElementById('overlay');
            const closeSidebar = document.getElementById('close-sidebar');
            const backToMain = document.getElementById('back-to-main');
            const sidebarTitle = document.getElementById('sidebar-title');
            const tabContents = {
                chat: document.getElementById('chat-tab'),
                explanation: document.getElementById('explanation-tab'),
                notes: document.getElementById('notes-tab'),
                test: document.getElementById('test-tab')
            };
            
            const toggleSidebarBtn = document.getElementById('toggle-sidebar');
            const sidebarIconsContainer = document.getElementById('sidebar-icons');
            
            // Toggle sidebar icons collapse/expand
            toggleSidebarBtn.addEventListener('click', function() {
                sidebarIconsContainer.classList.toggle('collapsed');
                const icon = this.querySelector('i');
                icon.classList.toggle('fa-chevron-down');
                icon.classList.toggle('fa-chevron-up');
            });
            
            function openSidebar(tab) {
                // Set active icon
                Object.values(sidebarIcons).forEach(icon => icon.classList.remove('active'));
                sidebarIcons[tab].classList.add('active');
                
                // Update sidebar title
                const titles = {
                    chat: { icon: 'fa-comment-dots', text: 'الدردشة' },
                    explanation: { icon: 'fa-lightbulb', text: 'شرح الدروس' },
                    notes: { icon: 'fa-clipboard-list', text: 'الملاحظات' },
                    test: { icon: 'fa-question-circle', text: 'الاختبارات' }
                };
                
                sidebarTitle.innerHTML = `
                    <i class="fas ${titles[tab].icon}"></i>
                    <span>${titles[tab].text}</span>
                `;
                
                // Show correct tab content
                Object.values(tabContents).forEach(content => content.classList.remove('active'));
                tabContents[tab].classList.add('active');
                
                // Show sidebar and overlay
                sidebarContent.classList.add('active');
                overlay.classList.add('active');
                
                // Clear chat badge if opening chat
                if (tab === 'chat') {
                    document.getElementById('chat-badge').style.display = 'none';
                }
            }
            
            function closeSidebarFunc() {
                sidebarContent.classList.remove('active');
                overlay.classList.remove('active');
            }
            
            // Event listeners for sidebar icons
            sidebarIcons.chat.addEventListener('click', () => {
                openSidebar('chat');
                animateIcon(sidebarIcons.chat);
            });
            
            sidebarIcons.explanation.addEventListener('click', () => {
                openSidebar('explanation');
                animateIcon(sidebarIcons.explanation);
            });
            
            sidebarIcons.notes.addEventListener('click', () => {
                openSidebar('notes');
                animateIcon(sidebarIcons.notes);
            });
            
            sidebarIcons.test.addEventListener('click', () => {
                openSidebar('test');
                animateIcon(sidebarIcons.test);
            });
            
            closeSidebar.addEventListener('click', closeSidebarFunc);
            backToMain.addEventListener('click', closeSidebarFunc);
            overlay.addEventListener('click', closeSidebarFunc);
            
            // Animation function for icons
            function animateIcon(icon) {
                icon.classList.add('click-animation');
                setTimeout(() => {
                    icon.classList.remove('click-animation');
                }, 300);
            }
            
            // Control buttons functionality
            const micBtn = document.getElementById('mic-btn');
            const cameraBtn = document.getElementById('camera-btn');
            const screenBtn = document.getElementById('screen-btn');
            const handBtn = document.getElementById('hand-btn');
            const endCallBtn = document.getElementById('end-call-btn');
            const myVideo = document.getElementById('my-video');
            const handNotification = document.getElementById('hand-notification');
            
            // Toggle microphone
            micBtn.addEventListener('click', function() {
                this.classList.toggle('active');
                const icon = this.querySelector('i');
                icon.classList.toggle('fa-microphone');
                icon.classList.toggle('fa-microphone-slash');
                animateIcon(this);
            });
            
            // Toggle camera
            cameraBtn.addEventListener('click', function() {
                this.classList.toggle('active');
                const icon = this.querySelector('i');
                icon.classList.toggle('fa-video');
                icon.classList.toggle('fa-video-slash');
                animateIcon(this);
                
                if (this.classList.contains('active')) {
                    // Simulate camera on
                    myVideo.innerHTML = '<video autoplay muted playsinline></video>';
                    // In a real app, you would use getUserMedia here
                    // navigator.mediaDevices.getUserMedia({ video: true })
                    //     .then(stream => {
                    //         myVideo.querySelector('video').srcObject = stream;
                    //     });
                } else {
                    // Simulate camera off
                    myVideo.innerHTML = '<i class="fas fa-user"></i>';
                }
            });
            
            // Screen sharing
            screenBtn.addEventListener('click', function() {
                animateIcon(this);
                // In a real app, you would use getDisplayMedia here
                // navigator.mediaDevices.getDisplayMedia({ video: true })
                //     .then(stream => {
                //         // Handle screen sharing stream
                //     });
            });
            
            // Raise hand - Updated to show in center and disappear completely
            handBtn.addEventListener('click', function() {
                animateIcon(this);
                
                // Show notification in center
                handNotification.classList.add('show');
                
                // Hide after 3 seconds
                setTimeout(() => {
                    handNotification.classList.remove('show');
                }, 3000);
            });
            
            // End call
            endCallBtn.addEventListener('click', function() {
                animateIcon(this);
                if (confirm('هل تريد إنهاء المكالمة؟')) {
                    // In a real app, you would close all media streams and disconnect
                    window.close(); // Just for demo
                }
            });

            // Test functionality
            const testQuestions = [
                {
                    type: "mcq",
                    question: "ما هي حلول المعادلة التربيعية x² - 9 = 0؟",
                    options: [
                        "x = 3 فقط",
                        "x = -3 فقط",
                        "x = 3 أو x = -3",
                        "لا يوجد حلول حقيقية"
                    ],
                    correctAnswer: 2
                },
                {
                    type: "true_false",
                    question: "إذا كانت المعادلة التربيعية لها مميز يساوي صفر، فهذا يعني أن لها حلان حقيقيان مختلفان.",
                    correctAnswer: false
                },
                {
                    type: "essay",
                    question: "اشرح خطوات حل المعادلة التربيعية باستخدام طريقة إكمال المربع."
                },
                {
                    type: "mcq",
                    question: "ما هي حلول المعادلة x² + 4x + 4 = 0؟",
                    options: [
                        "x = 2",
                        "x = -2",
                        "x = 2 أو x = -2",
                        "x = 0"
                    ],
                    correctAnswer: 1
                },
                {
                    type: "true_false",
                    question: "المعادلة التربيعية x² + 1 = 0 ليس لها حلول حقيقية.",
                    correctAnswer: true
                }
            ];

            let currentQuestion = 0;
            const questionsContainer = document.getElementById('questions-container');
            const testProgress = document.querySelector('.test-progress');
            const nextBtn = document.getElementById('next-btn');
            const prevBtn = document.getElementById('prev-btn');

            function renderQuestion(index) {
                const question = testQuestions[index];
                let questionHTML = '';
                
                questionHTML += `
                    <div class="question-card">
                        <div class="question-number">${index + 1}</div>
                        <div class="question-text">
                            ${question.question}
                        </div>
                `;
                
                if (question.type === "mcq") {
                    questionHTML += `
                        <div class="options-container">
                            ${question.options.map((option, i) => `
                                <div class="option">
                                    <input type="radio" name="q${index}" id="q${index}a${i}" 
                                        ${localStorage.getItem(`q${index}`) === i.toString() ? 'checked' : ''}>
                                    <label for="q${index}a${i}">${option}</label>
                                </div>
                            `).join('')}
                        </div>
                    `;
                } else if (question.type === "true_false") {
                    const savedAnswer = localStorage.getItem(`q${index}`);
                    questionHTML += `
                        <div class="true-false-options">
                            <div class="true-false-btn ${savedAnswer === 'true' ? 'selected' : ''}" 
                                onclick="selectTrueFalse(${index}, true)">
                                صح
                            </div>
                            <div class="true-false-btn ${savedAnswer === 'false' ? 'selected' : ''}" 
                                onclick="selectTrueFalse(${index}, false)">
                                خطأ
                            </div>
                        </div>
                    `;
                } else if (question.type === "essay") {
                    const savedAnswer = localStorage.getItem(`q${index}`) || '';
                    questionHTML += `
                        <div class="essay-question">
                            <textarea class="essay-textarea" id="essay-${index}" 
                                placeholder="اكتب إجابتك هنا...">${savedAnswer}</textarea>
                        </div>
                    `;
                }
                
                questionHTML += `</div>`;
                questionsContainer.innerHTML = questionHTML;

                testProgress.textContent = `السؤال ${index + 1} من ${testQuestions.length}`;

                // Update navigation buttons
                prevBtn.style.visibility = index === 0 ? 'hidden' : 'visible';
                nextBtn.innerHTML = index === testQuestions.length - 1 ? 
                    'إنهاء الاختبار <i class="fas fa-check"></i>' : 
                    'التالي <i class="fas fa-arrow-left"></i>';
            }

            // Global function for true/false selection
            window.selectTrueFalse = function(questionIndex, value) {
                const buttons = document.querySelectorAll(`.true-false-btn`);
                buttons.forEach(btn => btn.classList.remove('selected'));
                
                const selectedBtn = document.querySelector(`.true-false-btn:nth-child(${value ? 1 : 2})`);
                selectedBtn.classList.add('selected');
                
                localStorage.setItem(`q${questionIndex}`, value.toString());
            };

            function saveAnswer(questionIndex) {
                const question = testQuestions[questionIndex];
                
                if (question.type === "mcq") {
                    const selectedOption = document.querySelector(`input[name="q${questionIndex}"]:checked`);
                    if (selectedOption) {
                        const optionIndex = selectedOption.id.replace(`q${questionIndex}a`, '');
                        localStorage.setItem(`q${questionIndex}`, optionIndex);
                    }
                } else if (question.type === "essay") {
                    const answer = document.getElementById(`essay-${questionIndex}`).value;
                    localStorage.setItem(`q${questionIndex}`, answer);
                }
            }

            nextBtn.addEventListener('click', () => {
                saveAnswer(currentQuestion);
                
                if (currentQuestion < testQuestions.length - 1) {
                    currentQuestion++;
                    renderQuestion(currentQuestion);
                } else {
                    // Submit test
                    let score = 0;
                    for (let i = 0; i < testQuestions.length; i++) {
                        const question = testQuestions[i];
                        const savedAnswer = localStorage.getItem(`q${i}`);
                        
                        if (question.type === "mcq" && savedAnswer && parseInt(savedAnswer) === question.correctAnswer) {
                            score++;
                        } else if (question.type === "true_false" && savedAnswer && savedAnswer === question.correctAnswer.toString()) {
                            score++;
                        }
                        // Essay questions are not scored automatically
                    }
                    
                    // Show results
                    questionsContainer.innerHTML = `
                        <div class="results-container">
                            <div class="results-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <div class="results-score">${score}/${testQuestions.length - 1 /* exclude essay */}</div>
                            <div class="results-message">
                                ${score === testQuestions.length - 1 ? 'ممتاز! لقد أجبت على جميع الأسئلة بشكل صحيح' : 
                                score > (testQuestions.length - 1) / 2 ? 'جيد جدًا! لكن هناك بعض الأخطاء تحتاج إلى مراجعة' : 
                                'يحتاج إلى تحسين، راجع الدرس وحاول مرة أخرى'}
                            </div>
                            <div class="results-details">
                                ${testQuestions.map((q, i) => {
                                    if (q.type === "essay") return '';
                                    
                                    const savedAnswer = localStorage.getItem(`q${i}`);
                                    let isCorrect = false;
                                    
                                    if (q.type === "mcq") {
                                        isCorrect = savedAnswer && parseInt(savedAnswer) === q.correctAnswer;
                                    } else if (q.type === "true_false") {
                                        isCorrect = savedAnswer && savedAnswer === q.correctAnswer.toString();
                                    }
                                    
                                    return `
                                        <div class="result-item">
                                            <span class="result-question">السؤال ${i + 1}</span>
                                            <span class="result-status ${isCorrect ? 'result-correct' : 'result-wrong'}">
                                                ${isCorrect ? 'إجابة صحيحة' : 'إجابة خاطئة'}
                                            </span>
                                        </div>
                                    `;
                                }).join('')}
                            </div>
                            <button class="submit-btn" id="retry-test">
                                <i class="fas fa-redo"></i> إعادة الاختبار
                            </button>
                        </div>
                    `;

                    document.getElementById('retry-test').addEventListener('click', () => {
                        currentQuestion = 0;
                        renderQuestion(currentQuestion);
                    });
                }
            });

            prevBtn.addEventListener('click', () => {
                if (currentQuestion > 0) {
                    saveAnswer(currentQuestion);
                    currentQuestion--;
                    renderQuestion(currentQuestion);
                }
            });

            // Initialize first question
            renderQuestion(currentQuestion);
        });
    </script>
</body>
</html>