
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أيقونات اللغات الأجنبية حسب المستوى</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
          
          /* ألوان المستويات */
          --beginner: var(--orange-yellow-crayola);
          --intermediate: #3a0ca3;
          --advanced: #f72585;
          --business: #4cc9f0;
          --academic: #4895ef;
          --travel: #7209b7;
          --kids: #f8961e;
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
          color: var(--light-gray);
          font-family: var(--ff-poppins);
          line-height: 1.6;
          direction: rtl;
        }

        .container {
          max-width: 1200px;
          margin: 0 auto;
          padding: 0 15px;
        }

        header {
          background: var(--bg-gradient-onyx);
          color: var(--white2);
          padding: 25px 0;
          text-align: center;
          position: relative;
          overflow: hidden;
          margin-bottom: 20px;
          border-bottom: 1px solid var(--jet);
        }

        header h1 {
          font-size: var(--fs1);
          margin-bottom: 10px;
          text-transform: capitalize;
          background: var(--text-gradient-yellow);
          -webkit-background-clip: text;
          background-clip: text;
          color: transparent;
        }

        header p {
          font-size: var(--fs4);
          opacity: 0.9;
          max-width: 100%;
          margin: 0 auto;
          padding: 0 10px;
        }

        .filters {
          display: flex;
          justify-content: center;
          flex-wrap: wrap;
          gap: 10px;
          margin: 20px 0;
          padding: 0 5px;
          overflow-x: auto;
          white-space: nowrap;
          -webkit-overflow-scrolling: touch;
          scrollbar-width: none;
          padding-bottom: 10px;
        }

        .filters::-webkit-scrollbar {
          display: none;
        }

        .filter-btn {
          padding: 10px 18px;
          border-radius: 50px;
          border: none;
          background: var(--border-gradient-onyx);
          color: var(--light-gray);
          cursor: pointer;
          font-weight: var(--fw500);
          transition: var(--transition1);
          box-shadow: var(--shadow1);
          display: flex;
          align-items: center;
          gap: 8px;
          font-size: var(--fs6);
          flex-shrink: 0;
          position: relative;
          z-index: 1;
        }

        .filter-btn::before {
          content: "";
          position: absolute;
          inset: 1px;
          background: var(--bg-gradient-jet);
          border-radius: inherit;
          z-index: -1;
          transition: var(--transition1);
        }

        .filter-btn:hover {
          transform: translateY(-3px);
          box-shadow: var(--shadow2);
        }

        .filter-btn.active {
          color: var(--white2);
          transform: translateY(-3px);
          box-shadow: var(--shadow3);
        }

        .filter-btn.beginner.active {
          background: var(--text-gradient-yellow);
        }
        
        .filter-btn.intermediate.active {
          background: var(--intermediate);
        }
        
        .filter-btn.advanced.active {
          background: var(--advanced);
        }
        
        .filter-btn.business.active {
          background: var(--business);
        }
        
        .filter-btn.academic.active {
          background: var(--academic);
        }
        
        .filter-btn.travel.active {
          background: var(--travel);
        }
        
        .filter-btn.kids.active {
          background: var(--kids);
        }
        
        .filter-btn.all.active {
          background: linear-gradient(45deg, var(--beginner), var(--intermediate), var(--advanced), var(--business), var(--academic), var(--travel), var(--kids));
          color: var(--white2);
        }

        .languages-container {
          display: flex;
          flex-direction: column;
          gap: 25px;
          margin: 30px 0;
        }

        .language-category {
          background: var(--eerie-black2);
          border: 1px solid var(--jet);
          border-radius: 16px;
          overflow: hidden;
          box-shadow: var(--shadow2);
          transition: var(--transition2);
        }

        .language-category:hover {
          transform: translateY(-5px);
          box-shadow: var(--shadow3);
        }

        .category-header {
          padding: 16px;
          display: flex;
          align-items: center;
          gap: 12px;
          color: var(--white2);
          background: var(--bg-gradient-onyx);
          border-bottom: 1px solid var(--jet);
        }

        .category-header.beginner {
          background: linear-gradient(135deg, var(--beginner), #5a7af8);
        }
        
        .category-header.intermediate {
          background: linear-gradient(135deg, var(--intermediate), #5e35b1);
        }
        
        .category-header.advanced {
          background: linear-gradient(135deg, var(--advanced), #ff5d9e);
        }
        
        .category-header.business {
          background: linear-gradient(135deg, var(--business), #56cfe1);
        }
        
        .category-header.academic {
          background: linear-gradient(135deg, var(--academic), #5d9cec);
        }
        
        .category-header.travel {
          background: linear-gradient(135deg, var(--travel), #9c4dff);
        }
        
        .category-header.kids {
          background: linear-gradient(135deg, var(--kids), #ffaa4d);
        }

        .category-icon {
          width: 42px;
          height: 42px;
          display: flex;
          align-items: center;
          justify-content: center;
          background-color: rgba(255, 255, 255, 0.2);
          border-radius: 10px;
          font-size: 1.2rem;
        }

        .category-title {
          font-size: var(--fs2);
          font-weight: var(--fw600);
          text-transform: capitalize;
        }

        .category-desc {
          font-size: var(--fs6);
          opacity: 0.9;
          font-weight: var(--fw300);
        }

        .languages-grid {
          display: grid;
          grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
          gap: 16px;
          padding: 16px;
        }

        .language-card {
          position: relative;
          background: var(--border-gradient-onyx);
          border-radius: 12px;
          overflow: hidden;
          box-shadow: var(--shadow1);
          transition: var(--transition2);
          border: 1px solid var(--jet);
          display: flex;
          flex-direction: column;
          cursor: pointer;
          z-index: 1;
        }

        .language-card::before {
          content: "";
          position: absolute;
          inset: 1px;
          background: var(--bg-gradient-jet);
          border-radius: inherit;
          z-index: -1;
        }

        .language-card:hover {
          transform: translateY(-5px);
          box-shadow: var(--shadow3);
        }

        .language-card.beginner:hover {
          border-color: var(--beginner);
        }
        
        .language-card.intermediate:hover {
          border-color: var(--intermediate);
        }
        
        .language-card.advanced:hover {
          border-color: var(--advanced);
        }
        
        .language-card.business:hover {
          border-color: var(--business);
        }
        
        .language-card.academic:hover {
          border-color: var(--academic);
        }
        
        .language-card.travel:hover {
          border-color: var(--travel);
        }
        
        .language-card.kids:hover {
          border-color: var(--kids);
        }

        .language-top {
          display: flex;
          align-items: center;
          padding: 16px;
          gap: 12px;
          border-bottom: 1px solid var(--jet);
        }

        .language-icon {
          width: 50px;
          height: 50px;
          display: flex;
          align-items: center;
          justify-content: center;
          border-radius: 12px;
          font-size: 1.8rem;
          background: var(--border-gradient-onyx);
          position: relative;
          z-index: 1;
        }

        .language-icon::before {
          content: "";
          position: absolute;
          inset: 1px;
          background: var(--bg-gradient-jet);
          border-radius: inherit;
          z-index: -1;
        }

        .beginner .language-icon {
          color: var(--beginner);
        }
        
        .intermediate .language-icon {
          color: var(--intermediate);
        }
        
        .advanced .language-icon {
          color: var(--advanced);
        }
        
        .business .language-icon {
          color: var(--business);
        }
        
        .academic .language-icon {
          color: var(--academic);
        }
        
        .travel .language-icon {
          color: var(--travel);
        }
        
        .kids .language-icon {
          color: var(--kids);
        }

        .language-name {
          font-size: var(--fs3);
          font-weight: var(--fw600);
          margin-bottom: 4px;
          color: var(--white2);
        }

        .language-year {
          font-size: var(--fs6);
          color: var(--light-gray70);
          font-weight: var(--fw300);
        }

        .language-desc {
          padding: 16px;
          color: var(--light-gray);
          line-height: 1.6;
          flex-grow: 1;
          font-size: var(--fs6);
          font-weight: var(--fw300);
        }

        .language-footer {
          display: flex;
          flex-direction: column;
          padding: 12px 16px;
          background: var(--bg-gradient-onyx);
          border-top: 1px solid var(--jet);
          gap: 8px;
        }

        .language-stats {
          display: flex;
          justify-content: space-between;
          align-items: center;
          flex-wrap: wrap;
          gap: 8px;
        }

        .stat {
          display: flex;
          align-items: center;
          gap: 5px;
          font-size: var(--fs7);
          color: var(--light-gray70);
          font-weight: var(--fw300);
        }

        .stat i {
          font-size: 0.8rem;
        }

        .beginner .stat i {
          color: var(--beginner);
        }
        
        .intermediate .stat i {
          color: var(--intermediate);
        }
        
        .advanced .stat i {
          color: var(--advanced);
        }
        
        .business .stat i {
          color: var(--business);
        }
        
        .academic .stat i {
          color: var(--academic);
        }
        
        .travel .stat i {
          color: var(--travel);
        }
        
        .kids .stat i {
          color: var(--kids);
        }

        .language-popularity {
          display: flex;
          align-items: center;
          gap: 5px;
          font-size: var(--fs7);
          color: var(--light-gray70);
          font-weight: var(--fw300);
        }

        .stars {
          color: var(--orange-yellow-crayola);
          font-size: 0.9rem;
        }

        .language-link {
          color: var(--white2);
          background: var(--text-gradient-yellow);
          padding: 8px 12px;
          border-radius: 50px;
          text-decoration: none;
          font-size: var(--fs7);
          transition: var(--transition1);
          text-align: center;
          margin-top: 5px;
          font-weight: var(--fw500);
          box-shadow: var(--shadow1);
        }

        .beginner .language-link {
          background: var(--text-gradient-yellow);
        }
        
        .intermediate .language-link {
          background: var(--intermediate);
        }
        
        .advanced .language-link {
          background: var(--advanced);
        }
        
        .business .language-link {
          background: var(--business);
        }
        
        .academic .language-link {
          background: var(--academic);
        }
        
        .travel .language-link {
          background: var(--travel);
        }
        
        .kids .language-link {
          background: var(--kids);
        }

        .language-link:hover {
          transform: translateY(-2px);
          box-shadow: var(--shadow2);
        }

        .no-results {
          text-align: center;
          padding: 40px 20px;
          color: var(--light-gray70);
          font-size: var(--fs4);
          grid-column: 1 / -1;
        }

        .no-results i {
          font-size: 2.5rem;
          margin-bottom: 15px;
          color: var(--light-gray70);
        }

        /* أنماط النافذة المنبثقة */
        .modal {
          display: none;
          position: fixed;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: rgba(0, 0, 0, 0.7);
          z-index: 1000;
          justify-content: center;
          align-items: center;
          padding: 15px;
          overflow-y: auto;
          -webkit-overflow-scrolling: touch;
        }

        .modal-content {
          background: var(--bg-gradient-jet);
          border: 1px solid var(--jet);
          border-radius: 16px;
          max-width: 100%;
          width: 100%;
          max-height: 90vh;
          overflow-y: auto;
          box-shadow: var(--shadow5);
          animation: modalFadeIn 0.3s;
          margin: 20px 0;
          position: relative;
          z-index: 1;
        }

        @keyframes modalFadeIn {
          from { opacity: 0; transform: translateY(20px); }
          to { opacity: 1; transform: translateY(0); }
        }

        .modal-header {
          padding: 20px;
          color: var(--white2);
          text-align: center;
          position: relative;
          background: var(--bg-gradient-onyx);
          border-bottom: 1px solid var(--jet);
        }

        .modal-header.beginner {
          background: linear-gradient(135deg, var(--beginner), #5a7af8);
        }
        
        .modal-header.intermediate {
          background: linear-gradient(135deg, var(--intermediate), #5e35b1);
        }
        
        .modal-header.advanced {
          background: linear-gradient(135deg, var(--advanced), #ff5d9e);
        }
        
        .modal-header.business {
          background: linear-gradient(135deg, var(--business), #56cfe1);
        }
        
        .modal-header.academic {
          background: linear-gradient(135deg, var(--academic), #5d9cec);
        }
        
        .modal-header.travel {
          background: linear-gradient(135deg, var(--travel), #9c4dff);
        }
        
        .modal-header.kids {
          background: linear-gradient(135deg, var(--kids), #ffaa4d);
        }

        .modal-icon {
          width: 60px;
          height: 60px;
          margin: 0 auto 12px;
          display: flex;
          align-items: center;
          justify-content: center;
          background-color: rgba(255, 255, 255, 0.2);
          border-radius: 14px;
          font-size: 1.8rem;
        }

        .modal-header h2 {
          font-size: var(--fs2);
          margin-bottom: 5px;
          font-weight: var(--fw600);
        }

        .modal-header p {
          opacity: 0.9;
          font-size: var(--fs6);
          font-weight: var(--fw300);
        }

        .close-modal {
          position: absolute;
          top: 12px;
          left: 16px;
          font-size: 1.5rem;
          cursor: pointer;
          transition: var(--transition1);
          background: rgba(0, 0, 0, 0.2);
          width: 32px;
          height: 32px;
          border-radius: 50%;
          display: flex;
          align-items: center;
          justify-content: center;
          color: var(--white2);
        }

        .close-modal:hover {
          transform: rotate(90deg);
          background: rgba(0, 0, 0, 0.3);
        }

        .modal-body {
          padding: 20px;
        }

        .modal-stats {
          display: flex;
          justify-content: space-around;
          gap: 15px;
          margin-bottom: 15px;
          flex-wrap: wrap;
        }

        .modal-stats .stat {
          font-size: var(--fs6);
          gap: 6px;
          flex-direction: column;
          align-items: center;
          text-align: center;
          min-width: 80px;
        }

        .modal-stats .stat i {
          font-size: 1rem;
          background: rgba(0, 0, 0, 0.05);
          width: 32px;
          height: 32px;
          border-radius: 50%;
          display: flex;
          align-items: center;
          justify-content: center;
          color: var(--light-gray);
        }

        .modal-desc {
          line-height: 1.7;
          margin-bottom: 15px;
          color: var(--light-gray);
          font-size: var(--fs6);
          font-weight: var(--fw300);
        }

        .modal-highlights {
          background: var(--bg-gradient-onyx);
          padding: 16px;
          border-radius: 10px;
          margin-top: 15px;
          border: 1px solid var(--jet);
        }

        .modal-highlights h3 {
          margin-bottom: 12px;
          color: var(--white2);
          font-size: var(--fs4);
          font-weight: var(--fw600);
        }

        .modal-highlights ul {
          padding-right: 16px;
          color: var(--light-gray);
        }

        .modal-highlights li {
          margin-bottom: 8px;
          line-height: 1.6;
          font-size: var(--fs6);
          font-weight: var(--fw300);
          position: relative;
        }

        .modal-highlights li:before {
          content: "";
          position: absolute;
          right: -12px;
          top: 8px;
          width: 6px;
          height: 6px;
          border-radius: 50%;
          background: var(--beginner);
        }

        .beginner .modal-highlights li:before {
          background: var(--beginner);
        }
        
        .intermediate .modal-highlights li:before {
          background: var(--intermediate);
        }
        
        .advanced .modal-highlights li:before {
          background: var(--advanced);
        }
        
        .business .modal-highlights li:before {
          background: var(--business);
        }
        
        .academic .modal-highlights li:before {
          background: var(--academic);
        }
        
        .travel .modal-highlights li:before {
          background: var(--travel);
        }
        
        .kids .modal-highlights li:before {
          background: var(--kids);
        }

        .modal-footer {
          padding: 16px;
          text-align: center;
          border-top: 1px solid var(--jet);
          background: var(--bg-gradient-onyx);
        }

        .modal-link {
          display: inline-block;
          padding: 10px 24px;
          background: var(--text-gradient-yellow);
          color: var(--white2);
          text-decoration: none;
          border-radius: 50px;
          font-weight: var(--fw600);
          transition: var(--transition1);
          font-size: var(--fs6);
          box-shadow: var(--shadow1);
        }

        .modal-link.beginner {
          background: var(--text-gradient-yellow);
        }
        
        .modal-link.intermediate {
          background: var(--intermediate);
        }
        
        .modal-link.advanced {
          background: var(--advanced);
        }
        
        .modal-link.business {
          background: var(--business);
        }
        
        .modal-link.academic {
          background: var(--academic);
        }
        
        .modal-link.travel {
          background: var(--travel);
        }
        
        .modal-link.kids {
          background: var(--kids);
        }

        .modal-link:hover {
          transform: translateY(-3px);
          box-shadow: var(--shadow2);
        }

        footer {
          text-align: center;
          padding: 30px 20px;
          background: var(--bg-gradient-onyx);
          color: var(--white2);
          margin-top: 40px;
          border-top: 1px solid var(--jet);
        }

        footer p {
          margin: 8px 0;
          font-size: var(--fs6);
          font-weight: var(--fw300);
        }

        .social-icons {
          display: flex;
          justify-content: center;
          gap: 15px;
          margin: 15px 0;
        }

        .social-icons a {
          color: var(--white2);
          font-size: 1.2rem;
          transition: var(--transition1);
        }

        .social-icons a:hover {
          transform: translateY(-3px);
          color: var(--orange-yellow-crayola);
        }

        /* تحسينات للشاشات الصغيرة جداً */
        @media (max-width: 400px) {
          .languages-grid {
              grid-template-columns: 1fr;
          }
          
          .filter-btn {
              padding: 8px 14px;
              font-size: var(--fs7);
          }
          
          .language-top {
              flex-direction: column;
              text-align: center;
          }
          
          .language-icon {
              margin-bottom: 10px;
          }
          
          .modal-stats .stat {
              min-width: 70px;
              font-size: var(--fs7);
          }
          
          .modal-stats .stat i {
              width: 28px;
              height: 28px;
              font-size: 0.9rem;
          }
        }
        
        /* تحسينات للشاشات المتوسطة */
        @media (min-width: 768px) {
          header {
              padding: 30px 0;
          }
          
          header h1 {
              font-size: var(--fs1);
          }
          
          header p {
              font-size: var(--fs4);
          }
          
          .filter-btn {
              padding: 10px 20px;
              font-size: var(--fs5);
          }
          
          .modal-content {
              max-width: 600px;
          }
        }
        
        /* تحسينات للشاشات الكبيرة */
        @media (min-width: 992px) {
          header {
              padding: 40px 0;
              margin-bottom: 30px;
          }
          
          header h1 {
              font-size: 2.5rem;
          }
          
          header p {
              font-size: 1.2rem;
          }
          
          .languages-grid {
              grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
          }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <h1>أيقونات اللغات الأجنبية</h1>
            <p>تصفح اللغات الأجنبية حسب المستوى واختر ما يناسب احتياجاتك</p>
        </div>
    </header>
    
    <div class="container">
        <div class="filters">
            <button class="filter-btn all active" data-filter="all">
                <i class="fas fa-globe"></i> الكل
            </button>
            <button class="filter-btn beginner" data-filter="beginner">
                <i class="fas fa-baby"></i> المبتدئين
            </button>
            <button class="filter-btn intermediate" data-filter="intermediate">
                <i class="fas fa-user-graduate"></i> المتوسطين
            </button>
            <button class="filter-btn advanced" data-filter="advanced">
                <i class="fas fa-user-tie"></i> المتقدمين
            </button>
            <button class="filter-btn business" data-filter="business">
                <i class="fas fa-briefcase"></i> الأعمال
            </button>
            <button class="filter-btn academic" data-filter="academic">
                <i class="fas fa-graduation-cap"></i> الأكاديمي
            </button>
            <button class="filter-btn travel" data-filter="travel">
                <i class="fas fa-plane"></i> السفر
            </button>
            <button class="filter-btn kids" data-filter="kids">
                <i class="fas fa-child"></i> الأطفال
            </button>
        </div>
        
        <div class="languages-container" id="languages-container">
            <!-- Beginner Languages -->
            <div class="language-category beginner" data-category="beginner">
                <div class="category-header beginner">
                    <div class="category-icon">
                        <i class="fas fa-baby"></i>
                    </div>
                    <div>
                        <div class="category-title">مستوى المبتدئين</div>
                        <div class="category-desc">دورات تعلم أساسيات اللغات للمبتدئين</div>
                    </div>
                </div>
                <div class="languages-grid">
                    <div class="language-card beginner" data-categories="beginner">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div>
                                <div class="language-name">الإنجليزية للمبتدئين</div>
                                <div class="language-year">من المستوى A1</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            دورة شاملة لتعلم أساسيات اللغة الإنجليزية من الصفر. تغطي المفردات الأساسية، القواعد البسيطة، والمحادثات اليومية.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>5,245 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>315 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★★</span>
                                <span>شعبية عالية</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card beginner" data-categories="beginner">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div>
                                <div class="language-name">الفرنسية للمبتدئين</div>
                                <div class="language-year">من المستوى A1</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            تعلم الفرنسية من الصفر مع التركيز على النطق الصحيح والمفردات الأساسية. تشمل الدورة مواقف حياتية يومية.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>2,876 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>189 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★☆</span>
                                <span>شعبية كبيرة</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card beginner" data-categories="beginner">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div>
                                <div class="language-name">الألمانية للمبتدئين</div>
                                <div class="language-year">من المستوى A1</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            دورة مصممة خصيصاً للناطقين بالعربية لتعلم الألمانية من الصفر. تشمل القواعد الأساسية والمحادثات البسيطة.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>3,765 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>242 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★★</span>
                                <span>في تزايد</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card beginner" data-categories="beginner">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div>
                                <div class="language-name">الإسبانية للمبتدئين</div>
                                <div class="language-year">من المستوى A1</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            تعلم الإسبانية بسهولة مع التركيز على المحادثات اليومية. الدورة تشمل المفردات الأساسية والقواعد البسيطة.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>2,432 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>187 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★☆</span>
                                <span>شعبية كبيرة</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Intermediate Languages -->
            <div class="language-category intermediate" data-category="intermediate">
                <div class="category-header intermediate">
                    <div class="category-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div>
                        <div class="category-title">مستوى المتوسطين</div>
                        <div class="category-desc">دورات لتطوير المهارات اللغوية للمتوسطين</div>
                    </div>
                </div>
                <div class="languages-grid">
                    <div class="language-card intermediate" data-categories="intermediate">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div>
                                <div class="language-name">الإنجليزية المتوسطة</div>
                                <div class="language-year">المستوى B1-B2</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            تطوير مهارات المحادثة والاستماع والقراءة للمستوى المتوسط. تشمل مواقف أكثر تعقيداً وقواعد متقدمة.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>4,321 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>298 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★☆</span>
                                <span>شعبية كبيرة</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card intermediate" data-categories="intermediate">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div>
                                <div class="language-name">الفرنسية المتوسطة</div>
                                <div class="language-year">المستوى B1-B2</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            تطوير الطلاقة في الفرنسية مع التركيز على القواعد المتوسطة والمحادثات الأكثر تعقيداً. تشمل مواقف العمل والسفر.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>1,654 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>176 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★☆</span>
                                <span>شعبية</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card intermediate" data-categories="intermediate">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div>
                                <div class="language-name">الألمانية المتوسطة</div>
                                <div class="language-year">المستوى B1-B2</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            تطوير مهارات اللغة الألمانية للمستوى المتوسط. تشمل قواعد أكثر تعقيداً ومفردات متخصصة في مجالات مختلفة.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>1,987 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>154 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★☆☆</span>
                                <span>شعبية متوسطة</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Advanced Languages -->
            <div class="language-category advanced" data-category="advanced">
                <div class="category-header advanced">
                    <div class="category-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div>
                        <div class="category-title">مستوى المتقدمين</div>
                        <div class="category-desc">دورات للوصول إلى الطلاقة في اللغة</div>
                    </div>
                </div>
                <div class="languages-grid">
                    <div class="language-card advanced" data-categories="advanced">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div>
                                <div class="language-name">الإنجليزية المتقدمة</div>
                                <div class="language-year">المستوى C1-C2</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            دورة متقدمة لتحقيق الطلاقة في الإنجليزية. تشمل المحادثات المعقدة، المفردات الأكاديمية، وفهم اللهجات المختلفة.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>2,789 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>232 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★★</span>
                                <span>للطلاب الجادين</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card advanced" data-categories="advanced">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div>
                                <div class="language-name">الفرنسية المتقدمة</div>
                                <div class="language-year">المستوى C1-C2</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            تحقيق الطلاقة في الفرنسية مع التركيز على الأدب الفرنسي، المحادثات المعقدة، والفهم العميق للثقافة الفرنسية.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>876 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>143 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★☆</span>
                                <span>متخصصة</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Business Languages -->
            <div class="language-category business" data-category="business">
                <div class="category-header business">
                    <div class="category-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div>
                        <div class="category-title">لغة الأعمال</div>
                        <div class="category-desc">دورات متخصصة في لغة الأعمال والتجارة</div>
                    </div>
                </div>
                <div class="languages-grid">
                    <div class="language-card business" data-categories="business">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div>
                                <div class="language-name">إنجليزية الأعمال</div>
                                <div class="language-year">للمحترفين</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            تعلم لغة الأعمال الإنجليزية بما في ذلك المفردات التجارية، كتابة الإيميلات الرسمية، وإجراء المحادثات الهاتفية.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>3,345 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>287 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★★</span>
                                <span>للحياة المهنية</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card business" data-categories="business">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div>
                                <div class="language-name">فرنسية الأعمال</div>
                                <div class="language-year">للمحترفين</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            تعلم لغة الأعمال الفرنسية بما في ذلك المفردات التجارية، كتابة التقارير، وإجراء العروض التقديمية.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>1,265 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>132 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★☆</span>
                                <span>للشركات</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card business" data-categories="business">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div>
                                <div class="language-name">صينية الأعمال</div>
                                <div class="language-year">للمحترفين</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            تعلم أساسيات لغة الأعمال الصينية مع التركيز على المفردات التجارية وآداب التعامل في العالم الصيني.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>1,543 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>132 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★☆☆</span>
                                <span>للتجارة</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Academic Languages -->
            <div class="language-category academic" data-category="academic">
                <div class="category-header academic">
                    <div class="category-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div>
                        <div class="category-title">لغة أكاديمية</div>
                        <div class="category-desc">دورات للدراسة الأكاديمية والبحث العلمي</div>
                    </div>
                </div>
                <div class="languages-grid">
                    <div class="language-card academic" data-categories="academic">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div>
                                <div class="language-name">الإنجليزية الأكاديمية</div>
                                <div class="language-year">للبحث العلمي</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            تعلم الإنجليزية الأكاديمية لكتابة الأبحاث والمقالات العلمية. تشمل قواعد الكتابة الأكاديمية والمفردات المتخصصة.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>2,678 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>276 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★★</span>
                                <span>للطلاب والباحثين</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card academic" data-categories="academic">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div>
                                <div class="language-name">الإنجليزية للطب</div>
                                <div class="language-year">للكادر الطبي</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            تعلم الإنجليزية الطبية بما في ذلك المصطلحات الطبية، كتابة التقارير الطبية، والتواصل مع المرضى الأجانب.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>1,845 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>187 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★☆</span>
                                <span>للأطباء</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card academic" data-categories="academic">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div>
                                <div class="language-name">الإنجليزية للهندسة</div>
                                <div class="language-year">للمهندسين</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            تعلم الإنجليزية الهندسية بما في ذلك المصطلحات الفنية، قراءة المخططات، وكتابة التقارير الفنية.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>1,267 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>143 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★☆</span>
                                <span>للمهندسين</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Travel Languages -->
            <div class="language-category travel" data-category="travel">
                <div class="category-header travel">
                    <div class="category-icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <div>
                        <div class="category-title">لغة السفر</div>
                        <div class="category-desc">دورات للتواصل أثناء السفر والسياحة</div>
                    </div>
                </div>
                <div class="languages-grid">
                    <div class="language-card travel" data-categories="travel">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div>
                                <div class="language-name">الإنجليزية للسفر</div>
                                <div class="language-year">للمسافرين</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            تعلم العبارات الأساسية للتواصل أثناء السفر. تشمل المطار، الفندق، المطاعم، التسوق، والمواقف الطارئة.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>3,456 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>254 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★★</span>
                                <span>للمسافرين</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card travel" data-categories="travel">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div>
                                <div class="language-name">الفرنسية للسفر</div>
                                <div class="language-year">للمسافرين</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            تعلم العبارات الأساسية للتواصل أثناء السفر إلى الدول الناطقة بالفرنسية. تشمل المواقف اليومية الشائعة.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>1,987 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>198 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★☆</span>
                                <span>لزيارة فرنسا</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card travel" data-categories="travel">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div>
                                <div class="language-name">الإسبانية للسفر</div>
                                <div class="language-year">للمسافرين</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            تعلم العبارات الأساسية للتواصل أثناء السفر إلى الدول الناطقة بالإسبانية. تشمل المواقف اليومية الشائعة.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>1,576 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>143 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★☆☆</span>
                                <span>لأمريكا اللاتينية</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Kids Languages -->
            <div class="language-category kids" data-category="kids">
                <div class="category-header kids">
                    <div class="category-icon">
                        <i class="fas fa-child"></i>
                    </div>
                    <div>
                        <div class="category-title">لغة للأطفال</div>
                        <div class="category-desc">دورات تعليمية ممتعة للأطفال</div>
                    </div>
                </div>
                <div class="languages-grid">
                    <div class="language-card kids" data-categories="kids">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div>
                                <div class="language-name">الإنجليزية للأطفال</div>
                                <div class="language-year">من 5-12 سنة</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            دورة ممتعة لتعليم الأطفال الإنجليزية من خلال الأغاني، القصص، والألعاب التفاعلية. منهج مصمم خصيصاً للأطفال.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>3,210 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>234 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★☆</span>
                                <span>للأطفال</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card kids" data-categories="kids">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div>
                                <div class="language-name">الفرنسية للأطفال</div>
                                <div class="language-year">من 5-12 سنة</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            دورة ممتعة لتعليم الأطفال الفرنسية من خلال الأنشطة التفاعلية. تشمل المفردات الأساسية والعبارات البسيطة.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>1,345 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>187 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★☆☆</span>
                                <span>للأطفال</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- نافذة التقرير المصغر -->
    <div id="language-modal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <div class="modal-header beginner" id="modal-header">
                <div class="modal-icon" id="modal-icon"></div>
                <h2 id="modal-title">الإنجليزية للمبتدئين</h2>
                <p id="modal-year">من المستوى A1</p>
            </div>
            <div class="modal-body">
                <div class="modal-stats">
                    <div class="stat">
                        <i class="fas fa-users"></i>
                        <span id="modal-students">5,245 طالب ملتحق</span>
                    </div>
                    <div class="stat">
                        <i class="fas fa-star-half-alt"></i>
                        <span id="modal-reviews">315 تقييم</span>
                    </div>
                    <div class="stat">
                        <i class="fas fa-chart-line"></i>
                        <span id="modal-trend">شعبية عالية</span>
                    </div>
                </div>
                <div class="modal-desc" id="modal-desc">
                    دورة شاملة لتعلم أساسيات اللغة الإنجليزية من الصفر. تغطي المفردات الأساسية، القواعد البسيطة، والمحادثات اليومية.
                </div>
                <div class="modal-highlights">
                    <h3>أبرز ميزات الدورة:</h3>
                    <ul id="modal-highlights">
                        <li>تعلم المفردات الأساسية للتواصل اليومي</li>
                        <li>فهم القواعد البسيطة للغة الإنجليزية</li>
                        <li>ممارسة المحادثات الشائعة في الحياة اليومية</li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <a href="lang-chat-ai.php" class="modal-link beginner" id="modal-link">الذهاب لدورة التعلم</a>
            </div>
        </div>
    </div>
        <?php include 'header.php'; ?>

    <footer>
        <div class="container">
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <p>مكتبة اللغات الأجنبية</p>
            <p>© 2023 جميع الحقوق محفوظة</p>
            <p>صمم لمساعدة المتعلمين على اختيار الدورات المناسبة</p>
        </div>
    </footer>
    
    <script>
        // بيانات النقاط البارزة لكل لغة
        const highlightsData = {
            "الإنجليزية للمبتدئين": [
                "تعلم المفردات الأساسية للتواصل اليومي",
                "فهم القواعد البسيطة للغة الإنجليزية",
                "ممارسة المحادثات الشائعة في الحياة اليومية"
            ],
            "الفرنسية للمبتدئين": [
                "تعلم النطق الصحيح للفرنسية",
                "المفردات الأساسية للمبتدئين",
                "مواقف حياتية يومية بالفرنسية"
            ],
            "الألمانية للمبتدئين": [
                "أساسيات اللغة الألمانية للناطقين بالعربية",
                "القواعد الأساسية للمبتدئين",
                "المحادثات البسيطة في الحياة اليومية"
            ],
            "الإسبانية للمبتدئين": [
                "تعلم الإسبانية من خلال المحادثات اليومية",
                "المفردات الأساسية للمبتدئين",
                "القواعد البسيطة للغة الإسبانية"
            ],
            "الإنجليزية المتوسطة": [
                "تطوير مهارات المحادثة والاستماع",
                "قراءة نصوص أكثر تعقيداً",
                "فهم القواعد المتوسطة للغة الإنجليزية"
            ],
            "الفرنسية المتوسطة": [
                "تحسين الطلاقة في المحادثة الفرنسية",
                "تعلم القواعد المتوسطة للغة الفرنسية",
                "مواقف العمل والسفر بالفرنسية"
            ],
            "الألمانية المتوسطة": [
                "تطوير مهارات اللغة الألمانية للمستوى المتوسط",
                "قواعد أكثر تعقيداً للغة الألمانية",
                "مفردات متخصصة في مجالات مختلفة"
            ],
            "الإنجليزية المتقدمة": [
                "تحقيق الطلاقة في الإنجليزية",
                "المحادثات المعقدة والمناقشات",
                "فهم اللهجات المختلفة للغة الإنجليزية"
            ],
            "الفرنسية المتقدمة": [
                "الوصول إلى الطلاقة في الفرنسية",
                "دراسة الأدب الفرنسي",
                "الفهم العميق للثقافة الفرنسية"
            ],
            "إنجليزية الأعمال": [
                "المفردات التجارية الإنجليزية",
                "كتابة الإيميلات الرسمية",
                "إجراء المحادثات الهاتفية في العمل"
            ],
            "فرنسية الأعمال": [
                "المفردات التجارية الفرنسية",
                "كتابة التقارير بالفرنسية",
                "إجراء العروض التقديمية بالفرنسية"
            ],
            "صينية الأعمال": [
                "أساسيات لغة الأعمال الصينية",
                "المفردات التجارية الصينية",
                "آداب التعامل في العالم الصيني"
            ],
            "الإنجليزية الأكاديمية": [
                "كتابة الأبحاث والمقالات العلمية",
                "قواعد الكتابة الأكاديمية",
                "المفردات المتخصصة للبحث العلمي"
            ],
            "الإنجليزية للطب": [
                "المصطلحات الطبية الإنجليزية",
                "كتابة التقارير الطبية",
                "التواصل مع المرضى الأجانب"
            ],
            "الإنجليزية للهندسة": [
                "المصطلحات الفنية الهندسية",
                "قراءة المخططات الهندسية",
                "كتابة التقارير الفنية"
            ],
            "الإنجليزية للسفر": [
                "العبارات الأساسية للمسافرين",
                "مواقف المطار والفنادق",
                "التسوق والمواقف الطارئة"
            ],
            "الفرنسية للسفر": [
                "العبارات الأساسية للمسافرين",
                "مواقف الحياة اليومية",
                "التسوق والمطاعم"
            ],
            "الإسبانية للسفر": [
                "العبارات الأساسية للمسافرين",
                "مواقف الحياة اليومية",
                "التسوق والمطاعم"
            ],
            "الإنجليزية للأطفال": [
                "تعليم من خلال الأغاني والقصص",
                "الألعاب التفاعلية التعليمية",
                "منهج مصمم خصيصاً للأطفال"
            ],
            "الفرنسية للأطفال": [
                "الأنشطة التفاعلية التعليمية",
                "المفردات الأساسية للأطفال",
                "العبارات البسيطة للصغار"
            ]
        };

        // فلترة اللغات حسب التصنيف
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // إزالة التنشيط من جميع الأزرار
                document.querySelectorAll('.filter-btn').forEach(b => {
                    b.classList.remove('active');
                });
                
                // تنشيط الزر الحالي
                this.classList.add('active');
                
                const filter = this.getAttribute('data-filter');
                const languageCategories = document.querySelectorAll('.language-category');
                let visibleCategories = 0;
                
                languageCategories.forEach(category => {
                    const categoryType = category.getAttribute('data-category');
                    
                    if (filter === 'all' || categoryType === filter) {
                        category.style.display = 'block';
                        visibleCategories++;
                    } else {
                        category.style.display = 'none';
                    }
                });
                
                // عرض رسالة إذا لم توجد نتائج
                const noResults = document.getElementById('no-results');
                if (visibleCategories === 0) {
                    if (!noResults) {
                        const container = document.getElementById('languages-container');
                        const message = document.createElement('div');
                        message.className = 'no-results';
                        message.id = 'no-results';
                        message.innerHTML = `
                            <i class="fas fa-search"></i>
                            <p>لا توجد دورات في هذا التصنيف</p>
                            <small>جرب تصنيفاً آخر أو تحقق من التصنيفات الأخرى</small>
                        `;
                        container.appendChild(message);
                    }
                } else if (noResults) {
                    noResults.remove();
                }
            });
        });
        
        // دالة لعرض النافذة المنبثقة
        function showLanguageModal(card) {
            const modal = document.getElementById('language-modal');
            const title = card.querySelector('.language-name').textContent;
            const year = card.querySelector('.language-year').textContent;
            const icon = card.querySelector('.language-icon').innerHTML;
            const desc = card.querySelector('.language-desc').textContent;
            const students = card.querySelector('.stat:nth-child(1) span').textContent;
            const reviews = card.querySelector('.stat:nth-child(2) span').textContent;
            const category = card.classList.contains('beginner') ? 'beginner' :
                            card.classList.contains('intermediate') ? 'intermediate' :
                            card.classList.contains('advanced') ? 'advanced' :
                            card.classList.contains('business') ? 'business' :
                            card.classList.contains('academic') ? 'academic' :
                            card.classList.contains('travel') ? 'travel' : 'kids';
            
            // تعبئة البيانات في النافذة المنبثقة
            document.getElementById('modal-title').textContent = title;
            document.getElementById('modal-year').textContent = year;
            document.getElementById('modal-icon').innerHTML = icon;
            document.getElementById('modal-desc').textContent = desc;
            document.getElementById('modal-students').textContent = students;
            document.getElementById('modal-reviews').textContent = reviews;
            
            // تحديد اتجاه التوجه حسب عدد الطلاب
            const studentsCount = parseInt(students.replace(/,/g, '').split(' ')[0]);
            const trendElement = document.getElementById('modal-trend');
            
            if (studentsCount > 5000) {
                trendElement.textContent = 'شعبية كبيرة';
            } else if (studentsCount > 2000) {
                trendElement.textContent = 'في تزايد';
            } else {
                trendElement.textContent = 'ناشئة';
            }
            
            // تغيير الألوان حسب التصنيف
            const modalHeader = document.getElementById('modal-header');
            modalHeader.className = 'modal-header';
            modalHeader.classList.add(category);
            
            const modalLink = document.getElementById('modal-link');
            modalLink.className = 'modal-link';
            modalLink.classList.add(category);
            
            // إضافة النقاط البارزة حسب اللغة
            const highlightsList = document.getElementById('modal-highlights');
            highlightsList.innerHTML = '';
            
            const highlights = highlightsData[title] || [
                'تعلم أساسيات اللغة',
                'تحسين مهارات المحادثة',
                'فهم الثقافة المرتبطة باللغة'
            ];
            
            highlights.forEach(highlight => {
                const li = document.createElement('li');
                li.textContent = highlight;
                highlightsList.appendChild(li);
            });
            
            // عرض النافذة المنبثقة
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
            
            // إغلاق النافذة عند النقر على الزر X
            document.querySelector('.close-modal').onclick = function() {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            };
            
            // إغلاق النافذة عند النقر خارج المحتوى
            modal.onclick = function(e) {
                if (e.target === modal) {
                    modal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
            };
        }

        // إضافة مستمع حدث لكل بطاقة لغة
        document.querySelectorAll('.language-card').forEach(card => {
            card.addEventListener('click', function() {
                showLanguageModal(this);
            });
        });

        // تأثيرات عند تحميل الصفحة
        window.addEventListener('load', function() {
            const languageCards = document.querySelectorAll('.language-card');
            languageCards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 50);
            });
        });
    </script>
</body>
</html>