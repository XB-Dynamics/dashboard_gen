

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أيقونات لغات البرمجة حسب التخصص</title>
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
          
          /* ألوان التخصصات */
          --frontend: var(--orange-yellow-crayola);
          --backend: #3a0ca3;
          --ai: #f72585;
          --cyber: #4cc9f0;
          --data: #4895ef;
          --mobile: #7209b7;
          --game: #f8961e;
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
        /* أنماط الأيقونات الجديدة */
    .header-icons {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-bottom: 15px;
    }

    .header-icon {
        color: white;
        font-size: 1.3rem;
        cursor: pointer;
        transition: all 0.3s;
        background: rgba(255, 255, 255, 0.2);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .header-icon:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: scale(1.1);
    }

    .header-icon .tooltip {
        visibility: hidden;
        width: 120px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -60px;
        opacity: 0;
        transition: opacity 0.3s;
        font-size: 0.8rem;
    }

    .header-icon:hover .tooltip {
        visibility: visible;
        opacity: 1;
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

        .filter-btn.frontend.active {
          background: var(--text-gradient-yellow);
        }
        
        .filter-btn.backend.active {
          background: var(--backend);
        }
        
        .filter-btn.ai.active {
          background: var(--ai);
        }
        
        .filter-btn.cyber.active {
          background: var(--cyber);
        }
        
        .filter-btn.data.active {
          background: var(--data);
        }
        
        .filter-btn.mobile.active {
          background: var(--mobile);
        }
        
        .filter-btn.game.active {
          background: var(--game);
        }
        
        .filter-btn.all.active {
          background: linear-gradient(45deg, var(--frontend), var(--backend), var(--ai), var(--cyber), var(--data), var(--mobile), var(--game));
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

        .category-header.frontend {
          background: linear-gradient(135deg, var(--frontend), #5a7af8);
        }
        
        .category-header.backend {
          background: linear-gradient(135deg, var(--backend), #5e35b1);
        }
        
        .category-header.ai {
          background: linear-gradient(135deg, var(--ai), #ff5d9e);
        }
        
        .category-header.cyber {
          background: linear-gradient(135deg, var(--cyber), #56cfe1);
        }
        
        .category-header.data {
          background: linear-gradient(135deg, var(--data), #5d9cec);
        }
        
        .category-header.mobile {
          background: linear-gradient(135deg, var(--mobile), #9c4dff);
        }
        
        .category-header.game {
          background: linear-gradient(135deg, var(--game), #ffaa4d);
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

        .language-card.frontend:hover {
          border-color: var(--frontend);
        }
        
        .language-card.backend:hover {
          border-color: var(--backend);
        }
        
        .language-card.ai:hover {
          border-color: var(--ai);
        }
        
        .language-card.cyber:hover {
          border-color: var(--cyber);
        }
        
        .language-card.data:hover {
          border-color: var(--data);
        }
        
        .language-card.mobile:hover {
          border-color: var(--mobile);
        }
        
        .language-card.game:hover {
          border-color: var(--game);
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

        .frontend .language-icon {
          color: var(--frontend);
        }
        
        .backend .language-icon {
          color: var(--backend);
        }
        
        .ai .language-icon {
          color: var(--ai);
        }
        
        .cyber .language-icon {
          color: var(--cyber);
        }
        
        .data .language-icon {
          color: var(--data);
        }
        
        .mobile .language-icon {
          color: var(--mobile);
        }
        
        .game .language-icon {
          color: var(--game);
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

        .frontend .stat i {
          color: var(--frontend);
        }
        
        .backend .stat i {
          color: var(--backend);
        }
        
        .ai .stat i {
          color: var(--ai);
        }
        
        .cyber .stat i {
          color: var(--cyber);
        }
        
        .data .stat i {
          color: var(--data);
        }
        
        .mobile .stat i {
          color: var(--mobile);
        }
        
        .game .stat i {
          color: var(--game);
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

        .frontend .language-link {
          background: var(--text-gradient-yellow);
        }
        
        .backend .language-link {
          background: var(--backend);
        }
        
        .ai .language-link {
          background: var(--ai);
        }
        
        .cyber .language-link {
          background: var(--cyber);
        }
        
        .data .language-link {
          background: var(--data);
        }
        
        .mobile .language-link {
          background: var(--mobile);
        }
        
        .game .language-link {
          background: var(--game);
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

        .modal-header.frontend {
          background: linear-gradient(135deg, var(--frontend), #5a7af8);
        }
        
        .modal-header.backend {
          background: linear-gradient(135deg, var(--backend), #5e35b1);
        }
        
        .modal-header.ai {
          background: linear-gradient(135deg, var(--ai), #ff5d9e);
        }
        
        .modal-header.cyber {
          background: linear-gradient(135deg, var(--cyber), #56cfe1);
        }
        
        .modal-header.data {
          background: linear-gradient(135deg, var(--data), #5d9cec);
        }
        
        .modal-header.mobile {
          background: linear-gradient(135deg, var(--mobile), #9c4dff);
        }
        
        .modal-header.game {
          background: linear-gradient(135deg, var(--game), #ffaa4d);
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
          background: var(--frontend);
        }

        .frontend .modal-highlights li:before {
          background: var(--frontend);
        }
        
        .backend .modal-highlights li:before {
          background: var(--backend);
        }
        
        .ai .modal-highlights li:before {
          background: var(--ai);
        }
        
        .cyber .modal-highlights li:before {
          background: var(--cyber);
        }
        
        .data .modal-highlights li:before {
          background: var(--data);
        }
        
        .mobile .modal-highlights li:before {
          background: var(--mobile);
        }
        
        .game .modal-highlights li:before {
          background: var(--game);
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

        .modal-link.frontend {
          background: var(--text-gradient-yellow);
        }
        
        .modal-link.backend {
          background: var(--backend);
        }
        
        .modal-link.ai {
          background: var(--ai);
        }
        
        .modal-link.cyber {
          background: var(--cyber);
        }
        
        .modal-link.data {
          background: var(--data);
        }
        
        .modal-link.mobile {
          background: var(--mobile);
        }
        
        .modal-link.game {
          background: var(--game);
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
            <h1>البرمجيات</h1>

            <p>تصفح لغات البرمجة حسب التخصص واختر ما يناسب اهتماماتك</p>
        </div>
    </header>
    
    <div class="container">
        <div class="filters">
            <button class="filter-btn all active" data-filter="all">
                <i class="fas fa-globe"></i> الكل
            </button>
            <button class="filter-btn frontend" data-filter="frontend">
                <i class="fas fa-code"></i> Frontend
            </button>
            <button class="filter-btn backend" data-filter="backend">
                <i class="fas fa-server"></i> Backend
            </button>
            <button class="filter-btn ai" data-filter="ai">
                <i class="fas fa-brain"></i> الذكاء الاصطناعي
            </button>
            <button class="filter-btn cyber" data-filter="cyber">
                <i class="fas fa-shield-alt"></i> الأمن السيبراني
            </button>
            <button class="filter-btn data" data-filter="data">
                <i class="fas fa-chart-bar"></i> تحليل البيانات
            </button>
            <button class="filter-btn mobile" data-filter="mobile">
                <i class="fas fa-mobile-alt"></i> تطبيقات الموبايل
            </button>
            <button class="filter-btn game" data-filter="game">
                <i class="fas fa-gamepad"></i> تطوير الألعاب
            </button>
        </div>
        
        <div class="languages-container" id="languages-container">
            <!-- Frontend Languages -->
            <div class="language-category frontend" data-category="frontend">
                <div class="category-header frontend">
                    <div class="category-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <div>
                        <div class="category-title">تطوير الواجهات الأمامية</div>
                        <div class="category-desc">لغات ومكتبات لبناء واجهات المستخدم</div>
                    </div>
                </div>
                <div class="languages-grid">
                    <div class="language-card frontend" data-categories="frontend">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fab fa-html5"></i>
                            </div>
                            <div>
                                <div class="language-name">HTML</div>
                                <div class="language-year">منذ 1993</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            لغة ترميز النص التشعبي، العمود الفقري لبناء هيكل صفحات الويب. تستخدم لإنشاء المحتوى وهيكلة الصفحات.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>3,245 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>215 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★★</span>
                                <span>شعبية عالية</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card frontend" data-categories="frontend">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fab fa-css3-alt"></i>
                            </div>
                            <div>
                                <div class="language-name">CSS</div>
                                <div class="language-year">منذ 1996</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            لغة تنسيق صفحات الويب، تستخدم لتحديد المظهر والتصميم لعناصر HTML. تتحكم في الألوان، الخطوط، التخطيط والمزيد.
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
                                <span class="stars">★★★★★</span>
                                <span>شعبية عالية</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card frontend" data-categories="frontend">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fab fa-js-square"></i>
                            </div>
                            <div>
                                <div class="language-name">JavaScript</div>
                                <div class="language-year">منذ 1995</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            لغة برمجة لتطوير الويب التفاعلي. تسمح بإنشاء محتوى ديناميكي، تحريك العناصر، ومعالجة الأحداث في المتصفح.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>8,765 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>542 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★★</span>
                                <span>الأكثر شعبية</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card frontend" data-categories="frontend">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fab fa-react"></i>
                            </div>
                            <div>
                                <div class="language-name">React</div>
                                <div class="language-year">منذ 2013</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            مكتبة جافاسكريبت لبناء واجهات المستخدم. تمكنك من إنشاء مكونات قابلة لإعادة الاستخدام مع إدارة فعالة للحالة.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>5,432 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>387 تقييم</span>
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
            
            <!-- Backend Languages -->
            <div class="language-category backend" data-category="backend">
                <div class="category-header backend">
                    <div class="category-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <div>
                        <div class="category-title">تطوير الواجهات الخلفية</div>
                        <div class="category-desc">لغات برمجة الخوادم وقواعد البيانات</div>
                    </div>
                </div>
                <div class="languages-grid">
                    <div class="language-card backend" data-categories="backend">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fab fa-node-js"></i>
                            </div>
                            <div>
                                <div class="language-name">Node.js</div>
                                <div class="language-year">منذ 2009</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            بيئة تشغيل لجافاسكريبت على الخادم. تسمح ببناء تطبيقات خلفية سريعة وقابلة للتوسع باستخدام JavaScript.
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
                    
                    <div class="language-card backend" data-categories="backend">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fab fa-python"></i>
                            </div>
                            <div>
                                <div class="language-name">Python</div>
                                <div class="language-year">منذ 1991</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            لغة برمجة عالية المستوى سهلة التعلم. تستخدم في تطوير الويب (Django, Flask)، تحليل البيانات، والذكاء الاصطناعي.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>7,654 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>476 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★★</span>
                                <span>الأكثر شعبية</span>
                            </div>
                            <a href="course_det.php" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card backend" data-categories="backend">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fab fa-java"></i>
                            </div>
                            <div>
                                <div class="language-name">Java</div>
                                <div class="language-year">منذ 1995</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            لغة برمجة قوية تستخدم في تطبيقات المؤسسات، تطوير تطبيقات الأندرويد، وأنظمة كبيرة الحجم.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>3,987 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>254 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★☆</span>
                                <span>شعبية كبيرة</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card backend" data-categories="backend">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div>
                                <div class="language-name">C#</div>
                                <div class="language-year">منذ 2000</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            لغة برمجة من مايكروسوفت تستخدم في تطوير تطبيقات الويب (ASP.NET)، ألعاب (Unity)، وتطبيقات سطح المكتب.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>2,543 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>187 تقييم</span>
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
            
            <!-- AI Languages -->
            <div class="language-category ai" data-category="ai">
                <div class="category-header ai">
                    <div class="category-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <div>
                        <div class="category-title">الذكاء الاصطناعي</div>
                        <div class="category-desc">لغات التعلم الآلي والذكاء الاصطناعي</div>
                    </div>
                </div>
                <div class="languages-grid">
                    <div class="language-card ai" data-categories="ai">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fab fa-python"></i>
                            </div>
                            <div>
                                <div class="language-name">Python</div>
                                <div class="language-year">منذ 1991</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            اللغة الأساسية للذكاء الاصطناعي مع مكتبات مثل TensorFlow, PyTorch, Keras. سهلة التعلم مع إمكانيات قوية للتحليل.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>6,789 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>432 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★★</span>
                                <span>الأكثر استخداماً</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card ai" data-categories="ai">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-brain"></i>
                            </div>
                            <div>
                                <div class="language-name">R</div>
                                <div class="language-year">منذ 1993</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            لغة مخصصة للإحصاء وتحليل البيانات. تستخدم في البحث العلمي، التحليل الإحصائي، والتعلم الآلي.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>1,876 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>143 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★☆☆</span>
                                <span>شعبية متوسطة</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card ai" data-categories="ai">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-robot"></i>
                            </div>
                            <div>
                                <div class="language-name">Julia</div>
                                <div class="language-year">منذ 2012</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            لغة حديثة عالية الأداء للحوسبة العلمية. تجمع بين سرعة اللغات المنخفضة المستوى وسهولة اللغات العالية المستوى.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>987 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>76 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★☆☆☆</span>
                                <span>صاعدة</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Cyber Security Languages -->
            <div class="language-category cyber" data-category="cyber">
                <div class="category-header cyber">
                    <div class="category-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div>
                        <div class="category-title">الأمن السيبراني</div>
                        <div class="category-desc">لغات اختبار الاختراق وأمن المعلومات</div>
                    </div>
                </div>
                <div class="languages-grid">
                    <div class="language-card cyber" data-categories="cyber">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-terminal"></i>
                            </div>
                            <div>
                                <div class="language-name">Bash</div>
                                <div class="language-year">منذ 1989</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            لغة سطر الأوامر لنظام Linux/Unix. أساسية لأتمتة المهام، اختبار الاختراق، وإدارة الأنظمة.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>2,345 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>187 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★☆</span>
                                <span>أساسية</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card cyber" data-categories="cyber">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div>
                                <div class="language-name">C</div>
                                <div class="language-year">منذ 1972</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            لغة برمجة منخفضة المستوى لفهم كيفية عمل الذاكرة والأنظمة. أساسية لفهم الثغرات الأمنية.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>1,765 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>132 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★☆☆</span>
                                <span>مهمة</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card cyber" data-categories="cyber">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div>
                                <div class="language-name">Python</div>
                                <div class="language-year">منذ 1991</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            تستخدم في كتابة أدوات الأمن السيبراني واختبار الاختراق. تحتوي على مكتبات مثل Scapy, Requests, Socket.
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
                                <span class="stars">★★★★☆</span>
                                <span>شعبية</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Data Analysis Languages -->
            <div class="language-category data" data-category="data">
                <div class="category-header data">
                    <div class="category-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div>
                        <div class="category-title">تحليل البيانات</div>
                        <div class="category-desc">لغات معالجة وتحليل البيانات</div>
                    </div>
                </div>
                <div class="languages-grid">
                    <div class="language-card data" data-categories="data">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fab fa-python"></i>
                            </div>
                            <div>
                                <div class="language-name">Python</div>
                                <div class="language-year">منذ 1991</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            مع مكتبات مثل Pandas, NumPy, Matplotlib. تمكنك من تنظيف البيانات، التحليل، وعرض النتائج بسهولة.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>5,678 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>376 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★★</span>
                                <span>الأكثر استخداماً</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card data" data-categories="data">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div>
                                <div class="language-name">R</div>
                                <div class="language-year">منذ 1993</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            مصممة خصيصاً للإحصاء وتحليل البيانات. تحتوي على آلاف الحزم للتحليل الإحصائي المتقدم.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>2,345 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>187 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★☆</span>
                                <span>شعبية</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card data" data-categories="data">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-database"></i>
                            </div>
                            <div>
                                <div class="language-name">SQL</div>
                                <div class="language-year">منذ 1974</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            لغة استعلام قواعد البيانات. أساسية لاستخراج البيانات من قواعد البيانات العلائقية ومعالجتها.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>4,567 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>321 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★★</span>
                                <span>أساسية</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Mobile Languages -->
            <div class="language-category mobile" data-category="mobile">
                <div class="category-header mobile">
                    <div class="category-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div>
                        <div class="category-title">تطبيقات الموبايل</div>
                        <div class="category-desc">لغات تطوير تطبيقات الهواتف</div>
                    </div>
                </div>
                <div class="languages-grid">
                    <div class="language-card mobile" data-categories="mobile">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fab fa-swift"></i>
                            </div>
                            <div>
                                <div class="language-name">Swift</div>
                                <div class="language-year">منذ 2014</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            لغة آبل لتطوير تطبيقات iOS وmacOS. حديثة وسريعة مع تركيز على الأمان وأداء التطبيقات.
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
                                <span class="stars">★★★★☆</span>
                                <span>شعبية</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card mobile" data-categories="mobile">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fab fa-android"></i>
                            </div>
                            <div>
                                <div class="language-name">Kotlin</div>
                                <div class="language-year">منذ 2011</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            اللغة الرسمية لتطوير تطبيقات الأندرويد. أكثر حداثة من Java مع ميزات مثل null-safety وامتدادات الدوال.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>2,987 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>198 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★★☆</span>
                                <span>في تزايد</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card mobile" data-categories="mobile">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div>
                                <div class="language-name">Dart</div>
                                <div class="language-year">منذ 2011</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            لغة برمجة من جوجل تستخدم مع إطار عمل Flutter لبناء تطبيقات متعددة المنصات (iOS, Android, Web).
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>1,876 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>143 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★☆☆</span>
                                <span>صاعدة</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Game Development Languages -->
            <div class="language-category game" data-category="game">
                <div class="category-header game">
                    <div class="category-icon">
                        <i class="fas fa-gamepad"></i>
                    </div>
                    <div>
                        <div class="category-title">تطوير الألعاب</div>
                        <div class="category-desc">لغات برمجة الألعاب الإلكترونية</div>
                    </div>
                </div>
                <div class="languages-grid">
                    <div class="language-card game" data-categories="game">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-gamepad"></i>
                            </div>
                            <div>
                                <div class="language-name">C#</div>
                                <div class="language-year">منذ 2000</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            اللغة الأساسية لمحرك Unity الشهير لتطوير الألعاب. تستخدم لإنشاء ألعاب ثنائية وثلاثية الأبعاد.
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
                                <span>شعبية</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card game" data-categories="game">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fas fa-dice"></i>
                            </div>
                            <div>
                                <div class="language-name">C++</div>
                                <div class="language-year">منذ 1985</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            تستخدم في تطوير محركات الألعاب والألعاب عالية الأداء مثل Unreal Engine. تمنح تحكماً دقيقاً في الموارد.
                        </div>
                        <div class="language-footer">
                            <div class="language-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>2,345 طالب</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>187 تقييم</span>
                                </div>
                            </div>
                            <div class="language-popularity">
                                <span class="stars">★★★☆☆</span>
                                <span>متخصصة</span>
                            </div>
                            <a href="#" class="language-link">تعلم الآن</a>
                        </div>
                    </div>
                    
                    <div class="language-card game" data-categories="game">
                        <div class="language-top">
                            <div class="language-icon">
                                <i class="fab fa-python"></i>
                            </div>
                            <div>
                                <div class="language-name">Python</div>
                                <div class="language-year">منذ 1991</div>
                            </div>
                        </div>
                        <div class="language-desc">
                            تستخدم لبرمجة الألعاب البسيطة مع مكتبات مثل Pygame. مناسبة للمبتدئين في عالم تطوير الألعاب.
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
                                <span>للمبتدئين</span>
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
            <div class="modal-header frontend" id="modal-header">
                <div class="modal-icon" id="modal-icon"></div>
                <h2 id="modal-title">JavaScript</h2>
                <p id="modal-year">منذ 1995</p>
            </div>
            <div class="modal-body">
                <div class="modal-stats">
                    <div class="stat">
                        <i class="fas fa-users"></i>
                        <span id="modal-students">8,765 طالب ملتحق</span>
                    </div>
                    <div class="stat">
                        <i class="fas fa-star-half-alt"></i>
                        <span id="modal-reviews">542 تقييم</span>
                    </div>
                    <div class="stat">
                        <i class="fas fa-chart-line"></i>
                        <span id="modal-trend">في تزايد</span>
                    </div>
                </div>
                <div class="modal-desc" id="modal-desc">
                    لغة برمجة لتطوير الويب التفاعلي. تسمح بإنشاء محتوى ديناميكي، تحريك العناصر، ومعالجة الأحداث في المتصفح.
                </div>
                <div class="modal-highlights">
                    <h3>أبرز استخدامات اللغة:</h3>
                    <ul id="modal-highlights">
                        <li>تطوير واجهات المستخدم التفاعلية</li>
                        <li>بناء تطبيقات الويب أحادية الصفحة (SPA)</li>
                        <li>تطوير تطبيقات الخادم باستخدام Node.js</li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <a href="code-chat-ai.php" class="modal-link frontend" id="modal-link">الذهاب لدورة التعلم</a>
            </div>
        </div>
    </div>
        <style>

        :root {
          --bg-gradient-onyx: linear-gradient(
            to bottom right,
            hsl(240, 1%, 25%) 3%,
            hsl(0, 0%, 19%) 97%
          );

        /* Main Programming Icon */
        .main-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--border-gradient-onyx);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: var(--shadow1);
            z-index: 10;
            transition: var(--transition1);
        }

        .main-icon::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .main-icon i {
            font-size: 24px;
            color: var(--orange-yellow-crayola);
        }

        .main-icon:hover {
            transform: scale(1.1);
        }

        /* Sub Icons Container */
        .sub-icons {
            position: fixed;
            color: var(--orange-yellow-crayola);
            bottom: 120px;
            right: 20px;
            display: flex;
            flex-direction: column-reverse;
            gap: 15px;
            z-index: 9;
            opacity: 0;
            pointer-events: none;
            transition: var(--transition2);
        }

        .sub-icons.active {
            opacity: 1;
            pointer-events: auto;
        }

        /* Sub Icons */
        .sub-icon {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: var(--border-gradient-onyx);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: var(--shadow1);
            transition: var(--transition1);
            position: relative;
            transform: translateY(20px);
            opacity: 0;
        }

        .sub-icons.active .sub-icon {
            transform: translateY(0);
            opacity: 1;
        }

        .sub-icon:nth-child(1) { transition-delay: 0.1s; }
        .sub-icon:nth-child(2) { transition-delay: 0.2s; }
        .sub-icon:nth-child(3) { transition-delay: 0.3s; }
        .sub-icon:nth-child(4) { transition-delay: 0.4s; }
        .sub-icon:nth-child(5) { transition-delay: 0.5s; }
        .sub-icon:nth-child(6) { transition-delay: 0.6s; }

        .sub-icon::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .sub-icon:hover {
            transform: translateY(-5px) !important;
            box-shadow: var(--shadow2);
        }

        .sub-icon i {
            font-size: 18px;
            color: var(--text-color);
        }

        /* Tooltips */
        .sub-icon::after {
            content: attr(data-tooltip);
            position: absolute;
            right: 60px;
            background: var(--border-gradient-onyx);
            color: var(--text-color);
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 12px;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: var(--transition1);
        }

        .sub-icon:hover::after {
            opacity: 1;
            right: 65px;
        }

        /* Overlay */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: hsla(0, 0%, 0%, 0.5);
            z-index: 8;
            opacity: 0;
            pointer-events: none;
            transition: var(--transition1);
        }

        .overlay.active {
            opacity: 1;
            pointer-events: auto;
        }

        /* Content Section */
        .content {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            color: var(--text-color);
        }

        .content h1 {
            color: var(--primary-color);
            margin-bottom: 20px;
            font-size: 2rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .main-icon {
                width: 55px;
                height: 55px;
                bottom: 15px;
                right: 15px;
            }
            
            .sub-icons {
                bottom: 80px;
                right: 15px;
                gap: 10px;
            }
            
            .sub-icon {
                width: 45px;
                height: 45px;
            }
            
            .sub-icon::after {
                font-size: 11px;
                right: 50px;
            }
            
            .sub-icon:hover::after {
                right: 55px;
            }
        }

        @media (max-width: 576px) {
            .main-icon {
                width: 50px;
                height: 50px;
                bottom: 10px;
                right: 10px;
            }
            
            .sub-icons {
                bottom: 70px;
                right: 10px;
                gap: 8px;
            }
            
            .sub-icon {
                width: 40px;
                height: 40px;
            }
            
            .sub-icon i {
                font-size: 16px;
            }
            
            .sub-icon::after {
                right: 45px;
                font-size: 10px;
                padding: 4px 8px;
            }
            
            .sub-icon:hover::after {
                right: 50px;
            }
        }
    </style>
    <!-- Main Programming Icon -->
    <div class="main-icon" id="main-icon">
        <i class="fas fa-laptop-code"></i>
    </div>

    <!-- Sub Icons -->
    <div class="sub-icons" id="sub-icons">
        <div class="sub-icon" data-tooltip="الحصص" id="lessons-icon">
            <i class="fas fa-chalkboard-teacher"></i>
        </div>
        <div class="sub-icon" data-tooltip="الاختبارات" id="tests-icon">
            <i class="fas fa-clipboard-check"></i>
        </div>
        <div class="sub-icon" data-tooltip="الموديلات" id="models-icon">
            <i class="fas fa-cubes"></i>
        </div>
        <div class="sub-icon" data-tooltip="البرمجة" id="programming-icon">
            <i class="fas fa-code"></i>
        </div>
        <div class="sub-icon" data-tooltip="اللغات" id="languages-icon">
            <i class="fas fa-language"></i>
        </div>
       <div class="sub-icon" data-tooltip="التواصل" id="G-icon"> 
            <i class="fa-solid fa-g"></i>
        </div>

        <div class="sub-icon" data-tooltip="التقارير" id="fas fa-chart-bar">
            <i class="fas fa-chart-bar"></i>
        </div>


        <div class="sub-icon" data-tooltip="الرئيسيه" id="profile-icon">
            <i class="fas fa-user-tie"></i>
        </div>
    </div>

    <!-- Overlay -->
    <div class="overlay" id="overlay"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mainIcon = document.getElementById('main-icon');
            const subIcons = document.getElementById('sub-icons');
            const overlay = document.getElementById('overlay');
            
            // Toggle sub icons
            mainIcon.addEventListener('click', function(e) {
                e.stopPropagation();
                subIcons.classList.toggle('active');
                overlay.classList.toggle('active');
                
                // Rotate icon on click
                this.style.transform = subIcons.classList.contains('active') 
                    ? 'rotate(90deg) scale(1.1)'
                    : 'rotate(0) scale(1)';
            });
            
            // Close sub icons when clicking on overlay
            overlay.addEventListener('click', function() {
                subIcons.classList.remove('active');
                overlay.classList.remove('active');
                mainIcon.style.transform = 'rotate(0) scale(1)';
            });
            
            // Close sub icons when clicking anywhere else
            document.addEventListener('click', function(e) {
                if (!subIcons.contains(e.target) && e.target !== mainIcon) {
                    subIcons.classList.remove('active');
                    overlay.classList.remove('active');
                    mainIcon.style.transform = 'rotate(0) scale(1)';
                }
            });
            
            // Prevent closing when clicking on sub icons
            subIcons.addEventListener('click', function(e) {
                e.stopPropagation();
            });
            
            // Sub icons functionality - direct navigation or actions
            document.getElementById('lessons-icon').addEventListener('click', function() {
                window.location.href = 'system.php';
            });
            
            document.getElementById('tests-icon').addEventListener('click', function() {
                window.location.href = 'test.php';
            });
            
            document.getElementById('models-icon').addEventListener('click', function() {
                window.location.href = 'models.php';
            });
            
            document.getElementById('programming-icon').addEventListener('click', function() {
                window.location.href = 'course_view.php';
            });
            
            document.getElementById('languages-icon').addEventListener('click', function() {
                window.location.href = 'languages.php';
            });
             document.getElementById('G-icon').addEventListener('click', function() {
                window.location.href = 'social-media.php';
            });

            document.getElementById('fas fa-chart-bar').addEventListener('click', function() {
                window.location.href = 'report.info.php';
            });


            document.getElementById('profile-icon').addEventListener('click', function() {
                window.location.href = 'index.php';
            });
        });
    </script>

    <footer>
        <div class="container">
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <p>مكتبة لغات البرمجة</p>
            <p>© 2023 جميع الحقوق محفوظة</p>
            <p>صمم لمساعدة المبرمجين على اختيار اللغات المناسبة</p>
        </div>
    </footer>
    
    <script>
        // بيانات النقاط البارزة لكل لغة
        const highlightsData = {
            "html": [
                "هيكلة محتوى الويب",
                "أساسيات تطوير الويب",
                "التوافق مع جميع المتصفحات"
            ],
            "css": [
                "تنسيق صفحات الويب",
                "تصميم واجهات المستخدم",
                "إنشاء تأثيرات حركية"
            ],
            "javascript": [
                "تطوير واجهات المستخدم التفاعلية",
                "بناء تطبيقات الويب أحادية الصفحة (SPA)",
                "تطوير تطبيقات الخادم باستخدام Node.js"
            ],
            "react": [
                "بناء مكونات قابلة لإعادة الاستخدام",
                "إدارة حالة التطبيق بكفاءة",
                "تطوير واجهات مستخدم معقدة"
            ],
            "nodejs": [
                "بناء تطبيقات خادم سريعة",
                "إنشاء واجهات برمجة التطبيقات (APIs)",
                "التكامل مع قواعد البيانات"
            ],
            "python": [
                "تطوير الويب باستخدام Django أو Flask",
                "تحليل البيانات والتعلم الآلي",
                "أتمتة المهام المتكررة"
            ],
            "java": [
                "تطوير تطبيقات المؤسسات",
                "برمجة تطبيقات الأندرويد",
                "بناء أنظمة كبيرة الحجم"
            ],
            "c#": [
                "تطوير الألعاب باستخدام Unity",
                "بناء تطبيقات الويب باستخدام ASP.NET",
                "تطوير تطبيقات سطح المكتب"
            ],
            "r": [
                "التحليل الإحصائي المتقدم",
                "تصور البيانات",
                "البحث العلمي والتحليلات"
            ],
            "julia": [
                "الحوسبة العلمية عالية الأداء",
                "تحليل البيانات الكبيرة",
                "النمذجة الرياضية"
            ],
            "bash": [
                "أتمتة مهام النظام",
                "إدارة خوادم Linux/Unix",
                "اختبار الاختراق الأساسي"
            ],
            "c": [
                "فهم أنظمة التشغيل",
                "تحليل الثغرات الأمنية",
                "برمجة الأنظمة المدمجة"
            ],
            "swift": [
                "تطوير تطبيقات iOS و macOS",
                "بناء تطبيقات سريعة وآمنة",
                "التكامل مع أجهزة Apple"
            ],
            "kotlin": [
                "تطوير تطبيقات الأندرويد",
                "البرمجة متعددة المنصات",
                "كتابة كود أكثر أماناً مع null-safety"
            ],
            "dart": [
                "بناء تطبيقات متعددة المنصات مع Flutter",
                "تطوير تطبيقات ويب وعالية الأداء",
                "إنشاء واجهات مستخدم جذابة"
            ],
            "c++": [
                "تطوير محركات الألعاب",
                "برمجة الأنظمة عالية الأداء",
                "إنشاء تطبيقات قريبة من العتاد"
            ],
            "sql": [
                "استعلام قواعد البيانات",
                "تحليل البيانات المخزنة",
                "إدارة وهيكلة المعلومات"
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
                            <p>لا توجد لغات في هذا التصنيف</p>
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
            const category = card.classList.contains('frontend') ? 'frontend' :
                            card.classList.contains('backend') ? 'backend' :
                            card.classList.contains('ai') ? 'ai' :
                            card.classList.contains('cyber') ? 'cyber' :
                            card.classList.contains('data') ? 'data' :
                            card.classList.contains('mobile') ? 'mobile' : 'game';
            
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
            
            const languageKey = title.toLowerCase().replace(/[.#+\s]/g, '');
            const highlights = highlightsData[languageKey] || [
                'تطوير التطبيقات المختلفة',
                'حل المشكلات البرمجية',
                'بناء أنظمة فعالة'
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