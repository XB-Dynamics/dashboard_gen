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
        
        <!--<div class="sub-icon" data-tooltip="الحصص" id="lessons-icon">-->
        <!--    <i class="fas fa-chalkboard-teacher"></i>-->
        <!--</div>-->
        <!--<div class="sub-icon" data-tooltip="الاختبارات" id="tests-icon">-->
        <!--    <i class="fas fa-clipboard-check"></i>-->
        <!--</div>-->
        <!--<div class="sub-icon" data-tooltip="الموديلات" id="models-icon">-->
        <!--    <i class="fas fa-cubes"></i>-->
        <!--</div>-->
        <!--<div class="sub-icon" data-tooltip="البرمجة" id="programming-icon">-->
        <!--    <i class="fas fa-code"></i>-->
        <!--</div>-->
        <!--<div class="sub-icon" data-tooltip="اللغات" id="languages-icon">-->
        <!--    <i class="fas fa-language"></i>-->
        <!--</div>-->
       <div class="sub-icon" data-tooltip="التواصل" id="G-icon"> 
            <i class="fa-solid fa-g"></i>
        </div>

        <!--<div class="sub-icon" data-tooltip="التقارير" id="fas fa-chart-bar">-->
        <!--    <i class="fas fa-chart-bar"></i>-->
        <!--</div>-->


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
            
            // // Sub icons functionality - direct navigation or actions
            // document.getElementById('lessons-icon').addEventListener('click', function() {
            //     window.location.href = 'system.php';
            // });
            
            // document.getElementById('tests-icon').addEventListener('click', function() {
            //     window.location.href = 'test.php';
            // });
            
            // document.getElementById('models-icon').addEventListener('click', function() {
            //     window.location.href = 'models.php';
            // });
            
            // document.getElementById('programming-icon').addEventListener('click', function() {
            //     window.location.href = 'course_view.php';
            // });
            
            // document.getElementById('languages-icon').addEventListener('click', function() {
            //     window.location.href = 'languages.php';
            // });
             document.getElementById('G-icon').addEventListener('click', function() {
                window.location.href = 'social-media.php';
            });

            // document.getElementById('fas fa-chart-bar').addEventListener('click', function() {
            //     window.location.href = 'reports.php';
            // });


            document.getElementById('profile-icon').addEventListener('click', function() {
                window.location.href = 'index.php';
            });
        });
    </script>
