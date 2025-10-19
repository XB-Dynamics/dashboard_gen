<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رياضيات الأطفال الذهنية</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap');

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
          --bg-gradient-yellow1: linear-gradient(
            to bottom right,
            hsl(45, 100%, 71%) 0%,
            hsla(36, 100%, 69%, 0) 50%
          );
          --bg-gradient-yellow2: linear-gradient(
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
          --text-gradient-yellow: linear-gradient(
            to right,
            hsl(45, 100%, 72%),
            hsl(35, 100%, 68%)
          );

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
          --correct-color: #4CAF50;
          --wrong-color: #f44336;

          --ff-poppins: "Poppins", sans-serif;
          --ff-tajawal: 'Tajawal', sans-serif;

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
        }

        *,
        *::before,
        *::after {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }

        body {
          background: var(--smoky-black);
          min-height: 100vh;
          display: flex;
          justify-content: center;
          align-items: center;
          color: var(--white2);
          position: relative;
          overflow-x: hidden;
          font-family: var(--ff-tajawal);
        }

        .container {
          background: var(--eerie-black2);
          backdrop-filter: blur(10px);
          padding: 1.5rem;
          border-radius: 20px;
          box-shadow: var(--shadow5);
          width: 95%;
          max-width: 500px;
          border: 1px solid var(--jet);
          animation: fadeIn 1s ease;
          position: relative;
          z-index: 1;
          margin: 1rem;
          overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1 {
            text-align: center;
            color: var(--orange-yellow-crayola);
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            font-weight: var(--fw600);
        }

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 1rem;
        }

        .logo-icon {
            width: 50px;
            height: 50px;
            background: var(--text-gradient-yellow);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 10px;
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--smoky-black);
            box-shadow: var(--shadow1);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        #question-container {
            background: var(--border-gradient-onyx);
            padding: 1.5rem;
            border-radius: 14px;
            margin-bottom: 1.5rem;
            text-align: center;
            white-space: pre;
            font-family: 'Courier New', monospace;
            font-size: 1.2rem;
            overflow-x: auto;
            position: relative;
            z-index: 1;
        }

        #question-container::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        #current-question {
            font-size: 1.3rem;
            margin: 1rem 0;
            direction: ltr;
            display: inline-block;
            word-break: break-all;
            color: var(--white2);
        }

        .input-group {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        #answer-input {
            width: 100%;
            padding: 0.8rem;
            font-size: 1.1rem;
            border: none;
            border-radius: 14px;
            background: var(--border-gradient-onyx);
            color: var(--white2);
            text-align: center;
            border: 1px solid var(--jet);
            transition: var(--transition1);
            position: relative;
            z-index: 1;
        }

        #answer-input::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--eerie-black1);
            border-radius: inherit;
            z-index: -1;
        }

        #answer-input:focus {
            outline: none;
            border-color: var(--orange-yellow-crayola);
            box-shadow: 0 0 0 2px var(--orange-yellow-crayola);
        }

        .btn {
            padding: 0.8rem;
            font-size: 1rem;
            border: none;
            border-radius: 14px;
            background: var(--border-gradient-onyx);
            color: var(--orange-yellow-crayola);
            cursor: pointer;
            transition: var(--transition1);
            font-weight: var(--fw500);
            box-shadow: var(--shadow2);
            width: 100%;
            position: relative;
            z-index: 1;
        }

        .btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
            transition: var(--transition1);
        }

        .btn:hover {
            background: var(--bg-gradient-yellow1);
            transform: translateY(-2px);
            box-shadow: var(--shadow3);
        }

        .btn:hover::before {
            background: var(--bg-gradient-yellow2);
        }

        .btn:active {
            transform: translateY(0);
        }

        #timer {
            text-align: center;
            font-size: 1.2rem;
            margin-bottom: 1rem;
            color: var(--orange-yellow-crayola);
            font-weight: var(--fw600);
        }

        #question-number {
            color: var(--orange-yellow-crayola);
            font-size: 1rem;
            margin-bottom: 0.5rem;
            font-weight: var(--fw500);
        }

        #results {
            display: none;
            text-align: center;
            animation: scaleIn 0.5s ease;
        }

        @keyframes scaleIn {
            from {
                transform: scale(0.9);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        #score {
            font-size: 1.8rem;
            color: var(--orange-yellow-crayola);
            margin-bottom: 1.5rem;
            font-weight: var(--fw700);
        }

        .analysis-section {
            background: var(--border-gradient-onyx);
            padding: 1.5rem;
            border-radius: 14px;
            margin: 1rem 0;
            text-align: right;
            position: relative;
            z-index: 1;
        }

        .analysis-section::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .operations-analysis {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.8rem;
            margin-bottom: 1.5rem;
        }

        .operation-stat {
            background: var(--border-gradient-onyx);
            padding: 0.8rem;
            border-radius: 8px;
            text-align: center;
            font-size: 0.9rem;
            position: relative;
            z-index: 1;
        }

        .operation-stat::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .advice-section {
            background: var(--border-gradient-onyx);
            padding: 1.2rem;
            border-radius: 8px;
            margin-top: 1.5rem;
            position: relative;
            z-index: 1;
        }

        .advice-section::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .advice-section ul {
            list-style-type: none;
            padding: 0;
            text-align: right;
        }

        .advice-section li {
            margin: 0.8rem 0;
            padding-right: 1.2rem;
            position: relative;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .advice-section li:before {
            content: "•";
            color: var(--orange-yellow-crayola);
            position: absolute;
            right: 0;
            font-size: 1.2rem;
        }

        #start-screen {
            text-align: center;
            padding: 1rem;
        }

        .start-btn {
            font-size: 1.2rem;
            padding: 1rem;
            background: var(--border-gradient-onyx);
            margin: 1rem auto;
            transition: var(--transition1);
            position: relative;
            overflow: hidden;
            width: 100%;
            max-width: 250px;
        }

        .start-btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
            transition: var(--transition1);
        }

        .start-btn:hover {
            background: var(--bg-gradient-yellow1);
        }

        .start-btn:hover::before {
            background: var(--bg-gradient-yellow2);
        }

        .difficulty-buttons {
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
            margin-top: 1.5rem;
        }

        .difficulty-btn {
            padding: 0.8rem;
            border-radius: 8px;
            border: 1px solid var(--jet);
            background: var(--border-gradient-onyx);
            color: var(--light-gray);
            font-weight: var(--fw500);
            transition: var(--transition1);
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .difficulty-btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
            transition: var(--transition1);
        }

        .difficulty-btn:hover {
            background: var(--bg-gradient-yellow1);
        }

        .difficulty-btn:hover::before {
            background: var(--bg-gradient-yellow2);
        }

        .difficulty-btn.active {
            background: var(--text-gradient-yellow);
            color: var(--smoky-black);
            font-weight: var(--fw600);
            border-color: var(--orange-yellow-crayola);
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
        }

        .difficulty-btn.active::before {
            background: transparent;
        }

        .difficulty-btn i {
            font-size: 1.2rem;
            transition: var(--transition1);
        }

        .difficulty-btn.active i {
            color: var(--smoky-black);
            animation: bounce 0.5s;
        }

        .question-appear {
            animation: slideIn 0.5s ease;
        }

        @keyframes slideIn {
            from {
                transform: translateX(-20px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .floating-numbers {
            position: absolute;
            font-size: 1.5rem;
            color: var(--orange-yellow-crayola);
            opacity: 0.1;
            pointer-events: none;
            animation: float 10s linear infinite;
            z-index: -1;
        }

        @keyframes float {
            0% {
                transform: translate(0, 0) rotate(0deg);
                opacity: 0.1;
            }
            50% {
                opacity: 0.3;
            }
            100% {
                transform: translate(100px, -100px) rotate(360deg);
                opacity: 0.1;
            }
        }

        .progress-container {
            width: 100%;
            height: 8px;
            background: var(--border-gradient-onyx);
            border-radius: 4px;
            margin-bottom: 1rem;
            overflow: hidden;
            position: relative;
            z-index: 1;
        }

        .progress-container::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .progress-bar {
            height: 100%;
            background: var(--text-gradient-yellow);
            border-radius: 4px;
            transition: width 0.3s ease;
        }

        /* Feedback messages */
        .feedback-container {
            min-height: 100px;
            margin: 10px 0;
            position: relative;
            overflow: hidden;
        }

        .feedback-message {
            text-align: center;
            padding: 15px;
            border-radius: 10px;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            position: absolute;
            width: 100%;
            left: 0;
            top: 0;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease;
            z-index: 1;
        }

        .feedback-message.active {
            opacity: 1;
            transform: translateY(0);
        }

        .correct-feedback {
            background: rgba(76, 175, 80, 0.2);
            color: var(--correct-color);
            border: 1px solid var(--correct-color);
        }

        .wrong-feedback {
            background: rgba(244, 67, 54, 0.2);
            color: var(--wrong-color);
            border: 1px solid var(--wrong-color);
        }

        .feedback-icon {
            font-size: 1.5rem;
            animation: bounce 0.5s;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            40% {transform: translateY(-10px);}
            60% {transform: translateY(-5px);}
        }

        @keyframes shake {
            0%, 100% {transform: translateX(0);}
            10%, 30%, 50%, 70%, 90% {transform: translateX(-5px);}
            20%, 40%, 60%, 80% {transform: translateX(5px);}
        }

        .coin {
            position: absolute;
            width: 30px;
            height: 30px;
            background: var(--text-gradient-yellow);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            color: var(--smoky-black);
            font-size: 16px;
            animation: coinFly 1s forwards;
            z-index: 10;
            box-shadow: 0 2px 5px rgba(0,0,0,0.3);
        }

        @keyframes coinFly {
            0% {
                transform: translate(0, 0) scale(1);
                opacity: 1;
            }
            100% {
                transform: translate(var(--tx), var(--ty)) scale(0);
                opacity: 0;
            }
        }

        .coin-counter {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--border-gradient-onyx);
            padding: 8px 15px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 16px;
            z-index: 1;
            box-shadow: var(--shadow2);
        }

        .coin-counter::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .coin-icon {
            font-size: 18px;
            animation: pulse 1.5s infinite;
        }

        .star-counter {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--border-gradient-onyx);
            padding: 8px 15px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 16px;
            z-index: 1;
            box-shadow: var(--shadow2);
        }

        .star-counter::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .star-icon {
            color: var(--orange-yellow-crayola);
            animation: twinkle 0.5s infinite alternate;
        }

        @keyframes twinkle {
            from { transform: scale(1); }
            to { transform: scale(1.2); }
        }

        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background: var(--text-gradient-yellow);
            opacity: 0;
            z-index: 10;
        }

        /* Back button styles */
        .back-btn {
            position: absolute;
            top: 15px;
            background: var(--border-gradient-onyx);
            padding: 8px 15px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 16px;
            z-index: 1;
            box-shadow: var(--shadow2);
            cursor: pointer;
            transition: var(--transition1);
        }

        .back-btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
            transition: var(--transition1);
        }

        .back-btn:hover {
            background: var(--bg-gradient-yellow1);
        }

        .back-btn:hover::before {
            background: var(--bg-gradient-yellow2);
        }

        /* تأثيرات خاصة للهواتف */
        @media (max-width: 480px) {
            .container {
                padding: 1rem;
                border-radius: 12px;
            }

            h1 {
                font-size: 1.5rem;
                margin-bottom: 1rem;
            }

            #question-container {
                padding: 1rem;
            }

            #current-question {
                font-size: 1.1rem;
            }

            .operations-analysis {
                grid-template-columns: 1fr;
            }

            .logo-icon {
                width: 40px;
                height: 40px;
                font-size: 1.2rem;
            }

            .coin-counter, .star-counter, .back-btn {
                top: 10px;
                padding: 5px 10px;
                font-size: 14px;
            }
        }

        /* تعديلات للوضع الأفقي في الهواتف */
        @media (max-height: 500px) and (orientation: landscape) {
            .container {
                max-height: 90vh;
                overflow-y: auto;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
            <!-- زر الرجوع إلى الصفحة السابقة -->
        <div class="back-btn" onclick="window.history.back()">
            <i class="fas fa-arrow-left"></i>
            رجوع
        </div>

    <div class="container">
        <div class="coin-counter">
            <span id="coin-count">0</span>
            <i class="fas fa-coins coin-icon"></i>
        </div>
        
        <div class="star-counter">
            <span id="star-count">0</span>
            <i class="fas fa-star star-icon"></i>
        </div>
        

        <div class="logo">
            <div class="logo-icon">👶</div>
            <h1>رياضيات الأطفال الذهنية</h1>
        </div>
        
        <div id="start-screen">
            <p>اختر مستوى الصعوبة لبدء التحدي:</p>
            <div class="difficulty-buttons">
                <button class="difficulty-btn active" data-level="easy" onclick="mathGame.setDifficulty('easy')">
                    <i class="fas fa-baby"></i>
                    مبتدئ (١-٩)
                </button>
                <button class="difficulty-btn" data-level="medium" onclick="mathGame.setDifficulty('medium')">
                    <i class="fas fa-child"></i>
                    متوسط (١٠-٤٩)
                </button>
                <button class="difficulty-btn" data-level="hard" onclick="mathGame.setDifficulty('hard')">
                    <i class="fas fa-user-graduate"></i>
                    متقدم (٥٠-٩٩)
                </button>
            </div>
            <button class="btn start-btn" onclick="mathGame.startGame()">بدء اللعب</button>
        </div>
        
        <div id="game-screen" style="display: none;">
            <div class="progress-container">
                <div class="progress-bar" id="progress-bar" style="width: 0%"></div>
            </div>
            <div id="timer">الوقت المتبقي: <span>05:00</span></div>
            <div id="question-container">
                <div id="question-number">السؤال 1 من 10</div>
                <div id="current-question"></div>
            </div>
            <div class="feedback-container">
                <div class="feedback-message" id="feedback"></div>
            </div>
            <div class="input-group">
                <input type="number" id="answer-input" placeholder="أدخل إجابتك هنا" inputmode="numeric">
                <button class="btn" onclick="mathGame.checkAnswer()">تحقق</button>
            </div>
        </div>
        
        <div id="results" style="display: none;">
            <div id="score"></div>
            <div id="analysis"></div>
            <button class="btn" onclick="mathGame.startNewGame()">لعبة جديدة</button>
            <button class="btn" style="margin-top: 1rem; background: var(--border-gradient-onyx);" onclick="mathGame.showTips()">نصائح تعليمية</button>
        </div>
    </div>

    <audio id="correct-sound" src="https://assets.mixkit.co/sfx/preview/mixkit-correct-answer-tone-2870.mp3" preload="auto"></audio>
    <audio id="wrong-sound" src="https://assets.mixkit.co/sfx/preview/mixkit-wrong-answer-fail-notification-946.mp3" preload="auto"></audio>
    <audio id="coin-sound" src="https://assets.mixkit.co/sfx/preview/mixkit-coin-win-notification-271.mp3" preload="auto"></audio>
    <audio id="star-sound" src="https://assets.mixkit.co/sfx/preview/mixkit-achievement-bell-600.mp3" preload="auto"></audio>
    <audio id="applause-sound" src="https://assets.mixkit.co/sfx/preview/mixkit-winning-chimes-2015.mp3" preload="auto"></audio>

    <script>
        class MathGame {
            constructor() {
                this.questions = [];
                this.answers = [];
                this.userAnswers = [];
                this.currentQuestionIndex = 0;
                this.timeLimit = 5 * 60; // 5 minutes for 10 questions
                this.timer = null;
                this.difficulty = 'easy';
                this.operationStats = {
                    '+': { correct: 0, total: 0 },
                    '-': { correct: 0, total: 0 },
                    '*': { correct: 0, total: 0 }
                };
                this.coins = 0;
                this.stars = 0;
                this.correctMessages = [
                    {text: "إجابة صحيحة! أنت رائع!", emoji: "🌟", icon: "fas fa-check-circle"},
                    {text: "أحسنت! ذكاء خارق!", emoji: "🧠", icon: "fas fa-brain"},
                    {text: "برافو! هذه إجابة عبقرية!", emoji: "🏆", icon: "fas fa-trophy"},
                    {text: "ممتاز! أنت تتألق!", emoji: "✨", icon: "fas fa-star"},
                    {text: "إتقان تام! أنت محترف!", emoji: "👑", icon: "fas fa-crown"}
                ];
                this.wrongMessages = [
                    {text: "حاول مرة أخرى! يمكنك فعلها!", emoji: "🔄", icon: "fas fa-redo"},
                    {text: "ليس بعد! ركز وحاول مجدداً!", emoji: "🤔", icon: "fas fa-lightbulb"},
                    {text: "انتبه للتفاصيل! حاول مرة أخرى!", emoji: "🔍", icon: "fas fa-search"},
                    {text: "فكر بطريقة مختلفة! جرب مجدداً!", emoji: "🔄", icon: "fas fa-sync-alt"},
                    {text: "لا تستسلم! المحاولة القادمة ستكون أفضل!", emoji: "💪", icon: "fas fa-fist-raised"}
                ];
                this.setupEventListeners();
            }

            setDifficulty(level) {
                this.difficulty = level;
                document.querySelectorAll('.difficulty-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                const activeBtn = document.querySelector(`.difficulty-btn[data-level="${level}"]`);
                activeBtn.classList.add('active');
                
                // Play click sound
                const clickSound = new Audio('https://assets.mixkit.co/sfx/preview/mixkit-select-click-1109.mp3');
                clickSound.play();
                
                // Update time limit based on difficulty
                switch(level) {
                    case 'easy': this.timeLimit = 5 * 60; break;
                    case 'medium': this.timeLimit = 7 * 60; break;
                    case 'hard': this.timeLimit = 10 * 60; break;
                }
            }

            generateQuestion() {
                const operations = ['+', '-', '*'];
                let num1, num2, operation;
                
                // تحديد الأرقام بناءً على مستوى الصعوبة
                switch(this.difficulty) {
                    case 'easy':
                        num1 = Math.floor(Math.random() * 9) + 1;
                        num2 = Math.floor(Math.random() * 9) + 1;
                        operation = operations[Math.floor(Math.random() * 3)];
                        break;
                    case 'medium':
                        num1 = Math.floor(Math.random() * 40) + 10;
                        num2 = Math.floor(Math.random() * 40) + 10;
                        operation = operations[Math.floor(Math.random() * 3)];
                        break;
                    case 'hard':
                        num1 = Math.floor(Math.random() * 50) + 50;
                        num2 = Math.floor(Math.random() * 50) + 50;
                        operation = operations[Math.floor(Math.random() * 3)];
                        break;
                }

                // حساب الإجابة
                let answer;
                switch(operation) {
                    case '+': answer = num1 + num2; break;
                    case '-': 
                        // تجنب الأعداد السالبة للأطفال
                        if (num1 < num2) [num1, num2] = [num2, num1];
                        answer = num1 - num2; 
                        break;
                    case '*': 
                        // جعل الضرب أسهل للمبتدئين
                        if (this.difficulty === 'easy') {
                            num1 = Math.floor(Math.random() * 5) + 1;
                            num2 = Math.floor(Math.random() * 5) + 1;
                        }
                        answer = num1 * num2; 
                        break;
                }

                // تنسيق السؤال بطريقة جذابة للأطفال
                let questionDisplay = '';
                
                if (operation === '+' || operation === '-') {
                    questionDisplay = `${num1} ${operation} ${num2} = ?`;
                } else if (operation === '*') {
                    questionDisplay = `${num1} × ${num2} = ?`;
                }

                // تحديث إحصائيات العمليات
                this.operationStats[operation].total++;

                return { 
                    questionDisplay, 
                    answer, 
                    operation 
                };
            }

            displayCurrentQuestion() {
                const questionElement = document.getElementById('current-question');
                questionElement.className = 'question-appear';
                questionElement.textContent = this.questions[this.currentQuestionIndex].questionDisplay;
                document.getElementById('question-number').textContent = `السؤال ${this.currentQuestionIndex + 1} من ${this.questions.length}`;
                document.getElementById('answer-input').value = '';
                document.getElementById('answer-input').focus();
                document.getElementById('feedback').className = 'feedback-message';
                document.getElementById('feedback').innerHTML = '';
                
                // تحديث شريط التقدم
                const progress = (this.currentQuestionIndex / this.questions.length) * 100;
                document.getElementById('progress-bar').style.width = `${progress}%`;
            }

            startTimer() {
                let timeLeft = this.timeLimit;
                const timerDisplay = document.querySelector('#timer span');
                
                this.timer = setInterval(() => {
                    timeLeft--;
                    const minutes = Math.floor(timeLeft / 60);
                    const seconds = timeLeft % 60;
                    timerDisplay.textContent = `${minutes}:${seconds.toString().padStart(2, '0')}`;

                    if (timeLeft <= 0) {
                        this.endGame();
                    }
                }, 1000);
            }

            generateAllQuestions() {
                this.questions = [];
                this.answers = [];
                this.userAnswers = new Array(10).fill(null);
                
                for (let i = 0; i < 10; i++) {
                    const question = this.generateQuestion();
                    this.questions.push(question);
                    this.answers.push(question.answer);
                }
            }

            checkAnswer() {
                const input = document.getElementById('answer-input');
                const userAnswer = input.value.trim();
                const feedbackElement = document.getElementById('feedback');
                
                if (userAnswer === '') return;

                this.userAnswers[this.currentQuestionIndex] = parseFloat(userAnswer);
                const isCorrect = Math.abs(this.userAnswers[this.currentQuestionIndex] - this.answers[this.currentQuestionIndex]) < 0.01;
                
                if (isCorrect) {
                    const operation = this.questions[this.currentQuestionIndex].operation;
                    this.operationStats[operation].correct++;
                    
                    // Play correct sound
                    document.getElementById('correct-sound').play();
                    
                    // Show random correct message
                    const randomMessage = this.correctMessages[Math.floor(Math.random() * this.correctMessages.length)];
                    feedbackElement.innerHTML = `
                        <i class="${randomMessage.icon} feedback-icon"></i>
                        <span>${randomMessage.text} ${randomMessage.emoji}</span>
                    `;
                    feedbackElement.className = 'feedback-message correct-feedback active';
                    
                    // Add coins
                    this.addCoins(1);
                    
                    // Add star for every 3 correct answers
                    if (this.operationStats[operation].correct % 3 === 0) {
                        this.addStar();
                    }
                    
                    // Move to next question after delay
                    setTimeout(() => {
                        if (this.currentQuestionIndex < this.questions.length - 1) {
                            this.currentQuestionIndex++;
                            this.displayCurrentQuestion();
                        } else {
                            this.endGame();
                        }
                    }, 1500);
                } else {
                    // Play wrong sound
                    document.getElementById('wrong-sound').play();
                    
                    // Show random wrong message
                    const randomMessage = this.wrongMessages[Math.floor(Math.random() * this.wrongMessages.length)];
                    feedbackElement.innerHTML = `
                        <i class="${randomMessage.icon} feedback-icon"></i>
                        <span>${randomMessage.text} ${randomMessage.emoji}</span>
                    `;
                    feedbackElement.className = 'feedback-message wrong-feedback active';
                    
                    // Clear input and focus
                    input.value = '';
                    input.focus();
                    
                    // Hide feedback after delay
                    setTimeout(() => {
                        feedbackElement.className = 'feedback-message';
                    }, 2000);
                }
            }

            addCoins(amount) {
                this.coins += amount;
                document.getElementById('coin-count').textContent = this.coins;
                
                // Play coin sound
                document.getElementById('coin-sound').play();
                
                // Create flying coins animation
                this.createCoinsAnimation(amount);
            }

            addStar() {
                this.stars++;
                document.getElementById('star-count').textContent = this.stars;
                
                // Play star sound
                document.getElementById('star-sound').play();
                
                // Create star animation
                this.createStarAnimation();
            }

            createCoinsAnimation(count) {
                const container = document.querySelector('.container');
                const coinCounter = document.querySelector('.coin-counter');
                
                for (let i = 0; i < count; i++) {
                    const coin = document.createElement('div');
                    coin.className = 'coin';
                    coin.innerHTML = '<i class="fas fa-coins"></i>';
                    
                    // Random start position near the answer button
                    const startX = Math.random() * 100 + 150;
                    const startY = Math.random() * 50 + 300;
                    
                    // Target position (coin counter)
                    const targetRect = coinCounter.getBoundingClientRect();
                    const containerRect = container.getBoundingClientRect();
                    
                    const targetX = targetRect.left - containerRect.left + targetRect.width/2;
                    const targetY = targetRect.top - containerRect.top + targetRect.height/2;
                    
                    coin.style.left = `${startX}px`;
                    coin.style.top = `${startY}px`;
                    
                    // Set animation end point relative to start position
                    coin.style.setProperty('--tx', `${targetX - startX}px`);
                    coin.style.setProperty('--ty', `${targetY - startY}px`);
                    
                    container.appendChild(coin);
                    
                    // Remove coin after animation
                    setTimeout(() => {
                        coin.remove();
                    }, 1000);
                }
            }

            createStarAnimation() {
                const container = document.querySelector('.container');
                const starCounter = document.querySelector('.star-counter');
                
                const star = document.createElement('div');
                star.className = 'coin';
                star.innerHTML = '<i class="fas fa-star" style="color: var(--orange-yellow-crayola)"></i>';
                
                // Start position near the answer button
                const startX = Math.random() * 100 + 150;
                const startY = Math.random() * 50 + 300;
                
                // Target position (star counter)
                const targetRect = starCounter.getBoundingClientRect();
                const containerRect = container.getBoundingClientRect();
                
                const targetX = targetRect.left - containerRect.left + targetRect.width/2;
                const targetY = targetRect.top - containerRect.top + targetRect.height/2;
                
                star.style.left = `${startX}px`;
                star.style.top = `${startY}px`;
                
                // Set animation end point relative to start position
                star.style.setProperty('--tx', `${targetX - startX}px`);
                star.style.setProperty('--ty', `${targetY - startY}px`);
                
                container.appendChild(star);
                
                // Remove star after animation
                setTimeout(() => {
                    star.remove();
                }, 1000);
            }

            createConfetti() {
                const container = document.querySelector('.container');
                const colors = ['#f44336', '#e91e63', '#9c27b0', '#673ab7', '#3f51b5', '#2196f3', '#03a9f4', '#00bcd4', '#009688', '#4CAF50', '#8BC34A', '#CDDC39', '#FFEB3B', '#FFC107', '#FF9800', '#FF5722'];
                
                for (let i = 0; i < 50; i++) {
                    const confetti = document.createElement('div');
                    confetti.className = 'confetti';
                    confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                    confetti.style.left = `${Math.random() * 100}%`;
                    confetti.style.top = `${-10}px`;
                    confetti.style.transform = `rotate(${Math.random() * 360}deg)`;
                    
                    // Random shape
                    if (Math.random() > 0.5) {
                        confetti.style.borderRadius = '50%';
                    }
                    
                    // Random size
                    const size = Math.random() * 10 + 5;
                    confetti.style.width = `${size}px`;
                    confetti.style.height = `${size}px`;
                    
                    container.appendChild(confetti);
                    
                    // Animate
                    const animationDuration = Math.random() * 3 + 2;
                    confetti.style.animation = `confettiFall ${animationDuration}s linear forwards`;
                    
                    // Create keyframes dynamically
                    const keyframes = `
                        @keyframes confettiFall {
                            to {
                                transform: translate(${Math.random() * 200 - 100}px, ${window.innerHeight}px) rotate(${Math.random() * 360}deg);
                                opacity: 0;
                            }
                        }
                    `;
                    
                    const style = document.createElement('style');
                    style.innerHTML = keyframes;
                    document.head.appendChild(style);
                    
                    // Remove after animation
                    setTimeout(() => {
                        confetti.remove();
                        style.remove();
                    }, animationDuration * 1000);
                }
            }

            calculateScore() {
                const correctAnswers = this.userAnswers.filter((answer, index) => 
                    answer !== null && Math.abs(answer - this.answers[index]) < 0.01
                ).length;
                return Math.round((correctAnswers / this.questions.length) * 100);
            }

            generatePerformanceAnalysis() {
                const score = this.calculateScore();
                let analysis = '<div class="analysis-section">';
                
                // إضافة النتيجة الإجمالية
                analysis += `<h2>النتيجة النهائية: ${score}%</h2>`;
                analysis += `<p>${this.getScoreFeedback(score)}</p>`;
                analysis += `<p>لقد كسبت ${this.coins} <i class="fas fa-coins"></i> عملات و ${this.stars} <i class="fas fa-star"></i> نجوم!</p>`;
                
                // تحليل أداء كل عملية
                analysis += '<h3>أداء العمليات الحسابية:</h3>';
                analysis += '<div class="operations-analysis">';
                for (const [operation, stats] of Object.entries(this.operationStats)) {
                    if (stats.total > 0) {
                        const percentage = Math.round((stats.correct / stats.total) * 100);
                        analysis += `<div class="operation-stat">
                            <span style="font-weight:bold;">${this.getOperationName(operation)}</span><br>
                            ${percentage}% (${stats.correct}/${stats.total})
                        </div>`;
                    }
                }
                analysis += '</div>';

                // نصائح مخصصة بناءً على النتيجة
                analysis += '<div class="advice-section"><h3>نصائح لتحسين أدائك:</h3><ul>';
                
                if (score < 40) {
                    analysis += `
                        <li>تدرب على العد باستخدام الأصابع أو الأشياء</li>
                        <li>ابدأ بالجمع والطرح البسيط قبل الانتقال للضرب</li>
                        <li>استخدم الألعاب التعليمية لتحب الرياضيات</li>
                    `;
                } else if (score < 60) {
                    analysis += `
                        <li>حاول حل المسائل بطرق مختلفة لتعزيز الفهم</li>
                        <li>تدرب على تقدير النتائج قبل الحساب الدقيق</li>
                        <li>استخدم التكرار لتحسين السرعة والدقة</li>
                    `;
                } else if (score < 80) {
                    analysis += `
                        <li>ركز على تحسين سرعتك مع الحفاظ على الدقة</li>
                        <li>جرب حل المسائل بدون استخدام الورقة</li>
                        <li>اختبر نفسك بوقت أقل لتحسين الأداء</li>
                    `;
                } else {
                    analysis += `
                        <li>أنت ممتاز! جرب مستويات أصعب لتطوير مهاراتك</li>
                        <li>علم الآخرين لتعزيز فهمك</li>
                        <li>جرب حل مسائل رياضية معقدة</li>
                    `;
                }

                // نصائح خاصة بكل عملية
                for (const [operation, stats] of Object.entries(this.operationStats)) {
                    if (stats.total > 0 && stats.correct / stats.total < 0.6) {
                        analysis += this.getOperationAdvice(operation);
                    }
                }

                analysis += '</ul></div>';
                return analysis;
            }

            getScoreFeedback(score) {
                if (score >= 90) return "ممتاز! لديك مهارات حسابية رائعة.";
                if (score >= 70) return "جيد جداً! واصل التدريب لتحقيق الكمال.";
                if (score >= 50) return "ليس سيئاً! مع المزيد من التدريب ستتحسن كثيراً.";
                return "تحتاج إلى مزيد من التدريب. لا تستسلم!";
            }

            getOperationName(operation) {
                switch(operation) {
                    case '+': return 'الجمع';
                    case '-': return 'الطرح';
                    case '*': return 'الضرب';
                    default: return operation;
                }
            }

            getOperationAdvice(operation) {
                switch(operation) {
                    case '+':
                        return `
                            <li>للجمع السريع: جمع العشرات ثم الآحاد (مثلاً 23+45 = (20+40)+(3+5)=60+8=68)</li>
                            <li>استخدم التجزئة: 17+25 = (17+3)+22 = 20+22 = 42</li>
                        `;
                    case '-':
                        return `
                            <li>للطرح: اطرح من أقرب عشرة ثم أضف الباقي (مثلاً 53-28: 53-30=23 ثم 23+2=25)</li>
                            <li>استخدم طريقة العد التنازلي للفرق بين الأعداد</li>
                        `;
                    case '*':
                        return `
                            <li>للضرب في 5: اضرب في 10 ثم اقسم على 2 (7×5=70÷2=35)</li>
                            <li>للضرب في 9: اضرب في 10 ثم اطرح العدد (7×9=70-7=63)</li>
                            <li>للضرب في 2: اجمع العدد مع نفسه (7×2=7+7=14)</li>
                        `;
                    default:
                        return '';
                }
            }

            endGame() {
                clearInterval(this.timer);
                document.getElementById('game-screen').style.display = 'none';
                document.getElementById('results').style.display = 'block';
                
                const score = this.calculateScore();
                document.getElementById('score').textContent = `النتيجة: ${score}%`;
                document.getElementById('analysis').innerHTML = this.generatePerformanceAnalysis();
                
                // Play applause for good scores
                if (score >= 70) {
                    document.getElementById('applause-sound').play();
                    this.createConfetti();
                }
            }

            startNewGame() {
                this.currentQuestionIndex = 0;
                this.userAnswers = new Array(10).fill(null);
                Object.keys(this.operationStats).forEach(key => {
                    this.operationStats[key] = { correct: 0, total: 0 };
                });
                
                this.generateAllQuestions();
                document.getElementById('results').style.display = 'none';
                document.getElementById('game-screen').style.display = 'block';
                this.displayCurrentQuestion();
                this.startTimer();
            }

            startGame() {
                this.coins = 0;
                this.stars = 0;
                document.getElementById('coin-count').textContent = '0';
                document.getElementById('star-count').textContent = '0';
                document.getElementById('start-screen').style.display = 'none';
                this.startNewGame();
            }

            showTips() {
                const tips = `
                    <div class="analysis-section">
                        <h2>نصائح تعليمية للأطفال</h2>
                        <div class="advice-section">
                            <h3>طرق ممتعة لتعلم الرياضيات:</h3>
                            <ul>
                                <li>استخدام الألعاب التعليمية مثل المكعبات أو البطاقات</li>
                                <li>تحويل المسائل إلى قصص أو مواقف واقعية</li>
                                <li>استخدام الأغاني التعليمية لتعلم الجداول</li>
                                <li>الرسم والتلوين لتمثيل المسائل</li>
                            </ul>
                            
                            <h3>تمارين يومية بسيطة:</h3>
                            <ul>
                                <li>عد الألعاب أو الدرجات أثناء الصعود</li>
                                <li>حساب فاتورة المشتريات البسيطة</li>
                                <li>توزيع الحلوى أو الفواكه على أفراد الأسرة</li>
                                <li>مقارنة أسعار المنتجات في المتجر</li>
                            </ul>
                            
                            <h3>حيل ذهنية مفيدة:</h3>
                            <ul>
                                <li>الجمع بالعشرات: 7+8 = (7+3)+5 = 10+5 = 15</li>
                                <li>الضرب في 5: نصف العدد ثم أضف صفر (8×5=40 ← 8/2=4 ثم 40)</li>
                                <li>الضرب في 2: اجمع العدد مع نفسه (7×2=7+7=14)</li>
                                <li>الطرح بالاستكمال: 100-36: فكر كم تحتاج لتكمل 36 إلى 100 (4+60=64)</li>
                            </ul>
                            
                            <h3>أفكار لتشجيع الطفل:</h3>
                            <ul>
                                <li>نظام المكافآت الصغيرة لكل تحسن</li>
                                <li>التسجيل على لوحة الإنجازات</li>
                                <li>المنافسة اللطيفة بين الإخوة أو الأصدقاء</li>
                                <li>ربط الرياضيات بالهوايات المفضلة (الرياضة، الرسم، الطبخ)</li>
                            </ul>
                        </div>
                    </div>
                    <button class="btn" onclick="mathGame.hideTips()">العودة للنتائج</button>
                `;
                
                document.getElementById('analysis').innerHTML = tips;
                document.getElementById('score').style.display = 'none';
            }

            hideTips() {
                document.getElementById('analysis').innerHTML = this.generatePerformanceAnalysis();
                document.getElementById('score').style.display = 'block';
            }

            setupEventListeners() {
                document.getElementById('answer-input').addEventListener('keypress', (e) => {
                    if (e.key === 'Enter') {
                        this.checkAnswer();
                    }
                });
            }
        }

        let mathGame;
        document.addEventListener('DOMContentLoaded', () => {
            mathGame = new MathGame();
        });
    </script>
</body>
</html>