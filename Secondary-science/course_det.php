
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius AI - أساسيات بايثون</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
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
            --light-gray: hsl(0, 0%, 84%);
            --light-gray70: hsla(0, 0%, 84%, 0.7);

            --shadow1: -4px 8px 24px hsla(0, 0%, 0%, 0.25);
            --shadow2: 0px 16px 30px hsla(0, 0%, 0%, 0.25);
            --shadow3: 0px 16px 40px hsla(0, 0%, 0%, 0.25);

            --transition1: 0.25s ease;
            --transition2: 0.5s ease-in-out;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Tajawal', sans-serif;
        }

        body {
            background: var(--smoky-black);
            color: var(--light-gray);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .header {
            background: var(--bg-gradient-jet);
            padding: 20px;
            text-align: center;
            box-shadow: var(--shadow1);
            position: sticky;
            top: 0;
            z-index: 10;
            border-bottom: 1px solid var(--jet);
        }

        .header h1 {
            font-size: 1.5rem;
            color: var(--white1);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .header h1 i {
            color: var(--orange-yellow-crayola);
        }

        .courses-container {
            flex: 1;
            padding: 15px;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .lesson-card {
            background: var(--bg-gradient-jet);
            border: 1px solid var(--jet);
            border-radius: 12px;
            padding: 15px;
            display: flex;
            align-items: center;
            gap: 15px;
            transition: all 0.3s ease;
            box-shadow: var(--shadow1);
            position: relative;
            overflow: hidden;
            min-height: 80px;
        }

        .lesson-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
            transition: 0.5s;
        }

        .lesson-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow2);
        }

        .lesson-card:hover::before {
            right: 100%;
        }

        .lesson-number {
            width: 40px;
            height: 40px;
            background: var(--border-gradient-onyx);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: 600;
            color: var(--orange-yellow-crayola);
            flex-shrink: 0;
            position: relative;
            z-index: 1;
        }

        .lesson-number::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
        }

        .lesson-info {
            flex: 1;
        }

        .lesson-title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--white2);
            margin-bottom: 3px;
        }

        .lesson-desc {
            font-size: 0.8rem;
            color: var(--light-gray70);
            line-height: 1.4;
        }

        .play-btn {
            width: 40px;
            height: 40px;
            background: var(--border-gradient-onyx);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--orange-yellow-crayola);
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
            flex-shrink: 0;
            position: relative;
            z-index: 1;
        }

        .play-btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
            transition: var(--transition1);
        }

        .play-btn:hover {
            background: var(--bg-gradient-yellow1);
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(255, 193, 7, 0.3);
        }

        .play-btn:hover::before {
            background: var(--bg-gradient-yellow1);
        }
        
        .info-btn {
            width: 40px;
            height: 40px;
            background: var(--border-gradient-onyx);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--orange-yellow-crayola);
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
            flex-shrink: 0;
            position: relative;
            z-index: 1;
        }
        
        .info-btn::before {
            content: "";
            position: absolute;
            inset: 1px;
            background: var(--bg-gradient-jet);
            border-radius: inherit;
            z-index: -1;
            transition: var(--transition1);
        }
        
        .info-btn:hover {
            background: var(--bg-gradient-yellow1);
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(255, 193, 7, 0.3);
        }
        
        .info-btn:hover::before {
            background: var(--bg-gradient-yellow1);
        }

        .footer {
            text-align: center;
            padding: 15px;
            background: var(--eerie-black1);
            border-top: 1px solid var(--jet);
            font-size: 0.8rem;
            color: var(--light-gray70);
        }
        
        /* شرح الدرس */
        .lesson-explanation {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease;
            background: var(--eerie-black2);
            border-radius: 8px;
            margin-top: 10px;
            padding: 0 15px;
        }
        
        .lesson-explanation.active {
            max-height: 500px;
            padding: 15px;
            border: 1px solid var(--jet);
        }
        
        .explanation-title {
            color: var(--orange-yellow-crayola);
            font-size: 0.9rem;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .explanation-content {
            font-size: 0.85rem;
            line-height: 1.6;
        }
        
        .explanation-content ul {
            padding-right: 20px;
            margin: 8px 0;
        }
        
        .explanation-content li {
            margin-bottom: 5px;
        }
        
        .code-example {
            background: var(--smoky-black);
            padding: 10px;
            border-radius: 6px;
            font-family: monospace;
            font-size: 0.8rem;
            margin: 10px 0;
            overflow-x: auto;
        }
        
        .code-comment {
            color: #6a9955;
        }
        
        .code-keyword {
            color: #569cd6;
        }
        
        .code-string {
            color: #ce9178;
        }
        
        .code-function {
            color: #dcdcaa;
        }

        @media (min-width: 768px) {
            .header h1 {
                font-size: 1.8rem;
            }
            
            .courses-container {
                padding: 20px;
                gap: 15px;
            }
            
            .lesson-card {
                padding: 18px;
                min-height: 90px;
            }
            
            .lesson-number {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }
            
            .lesson-title {
                font-size: 1.1rem;
            }
            
            .lesson-desc {
                font-size: 0.85rem;
            }
            
            .play-btn, .info-btn {
                width: 45px;
                height: 45px;
                font-size: 18px;
            }
            
            .lesson-explanation {
                padding: 0 20px;
            }
            
            .lesson-explanation.active {
                padding: 20px;
            }
            
            .explanation-title {
                font-size: 1rem;
            }
            
            .explanation-content {
                font-size: 0.9rem;
            }
        }
        .back-btn {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    width: 40px;
    height: 40px;
    background: var(--border-gradient-onyx);
    border: none;
    border-radius: 50%;
    color: var(--orange-yellow-crayola);
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
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
    transform: translateY(-50%) scale(1.1);
    box-shadow: 0 0 15px rgba(255, 193, 7, 0.3);
}

.back-btn:hover::before {
    background: var(--bg-gradient-yellow1);
}

.header {
    position: relative; /* أضف هذه الخاصية ليتناسب مع الزر المطلق */
}
    </style>
</head>
<body>
<header class="header">
    <button class="back-btn" onclick="window.history.back()">
        <i class="fas fa-arrow-right"></i>
    </button>
    <h1>
        <i class="fab fa-python"></i>
        دروس أساسيات بايثون
    </h1>
</header>
    <main class="courses-container">
        <!-- الدرس 1 -->
        <div class="lesson-card">
            <div class="lesson-number">1</div>
            <div class="lesson-info">
                <h3 class="lesson-title">مقدمة إلى لغة بايثون</h3>
                <p class="lesson-desc">تعرف على لغة بايثون واستخداماتها وكيفية تثبيتها</p>
                
                <div class="lesson-explanation">
                    <h4 class="explanation-title"><i class="fas fa-info-circle"></i> شرح الدرس الأول</h4>
                    <div class="explanation-content">
                        <p>بايثون هي لغة برمجة عالية المستوى، سهلة التعلم وقوية. من مميزاتها:</p>
                        <ul>
                            <li>تركيب بسيط وسهل القراءة</li>
                            <li>مكتبات ضخمة لمختلف المجالات</li>
                            <li>تدعم البرمجة الكائنية والوظيفية</li>
                            <li>مجتمع دعم كبير</li>
                        </ul>
                        <p>استخدامات بايثون:</p>
                        <ul>
                            <li>تطوير الويب (Django, Flask)</li>
                            <li>علم البيانات والذكاء الاصطناعي</li>
                            <li>أتمتة المهام</li>
                            <li>تطوير الألعاب</li>
                        </ul>
                        <p>لتنزيل بايثون:</p>
                        <div class="code-example">
                            <span class="code-comment"># تثبيت بايثون من الموقع الرسمي</span><br>
                            https://www.python.org/downloads/
                        </div>
                    </div>
                </div>
            </div>
            <button class="play-btn">
                <i class="fas fa-play"></i>
            </button>
            <button class="info-btn">
                <i class="fas fa-info"></i>
            </button>
        </div>

        <!-- الدرس 2 -->
        <div class="lesson-card">
            <div class="lesson-number">2</div>
            <div class="lesson-info">
                <h3 class="lesson-title">تركيب بايثون والمحررات</h3>
                <p class="lesson-desc">كيفية تثبيت بايثون واختيار محرر الأكواد المناسب</p>
                
                <div class="lesson-explanation">
                    <h4 class="explanation-title"><i class="fas fa-info-circle"></i> شرح الدرس الثاني</h4>
                    <div class="explanation-content">
                        <p>خطوات تثبيت بايثون:</p>
                        <ol>
                            <li>تحميل المثبت من موقع python.org</li>
                            <li>تشغيل المثبت وتفعيل خيار "Add Python to PATH"</li>
                            <li>إكمال عملية التثبيت</li>
                            <li>التحقق من التثبيت بكتابة <code>python --version</code> في الطرفية</li>
                        </ol>
                        <p>أفضل محررات الأكواد:</p>
                        <ul>
                            <li>VS Code (خفيف وقوي)</li>
                            <li>PyCharm (مخصص لبايثون)</li>
                            <li>Sublime Text (سريع وبسيط)</li>
                            <li>Atom (مفتوح المصدر)</li>
                        </ul>
                        <p>لبدء كتابة كود بايثون:</p>
                        <div class="code-example">
                            <span class="code-comment"># افتح الطرفية واكتب:</span><br>
                            python
                        </div>
                    </div>
                </div>
            </div>
            <button class="play-btn">
                <i class="fas fa-play"></i>
            </button>
            <button class="info-btn">
                <i class="fas fa-info"></i>
            </button>
        </div>

        <!-- الدرس 3 -->
        <div class="lesson-card">
            <div class="lesson-number">3</div>
            <div class="lesson-info">
                <h3 class="lesson-title">أوامر الطباعة والإدخال</h3>
                <p class="lesson-desc">تعلم استخدام print() و input() للتفاعل مع المستخدم</p>
                
                <div class="lesson-explanation">
                    <h4 class="explanation-title"><i class="fas fa-info-circle"></i> شرح الدرس الثالث</h4>
                    <div class="explanation-content">
                        <p>دالة <code>print()</code> تستخدم لعرض النصوص والقيم:</p>
                        <div class="code-example">
                            <span class="code-keyword">print</span>(<span class="code-string">"مرحبا بالعالم!"</span>)<br>
                            <span class="code-comment"># يمكن طباعة عدة قيم</span><br>
                            <span class="code-keyword">print</span>(<span class="code-string">"الاسم:"</span>, <span class="code-string">"أحمد"</span>, <span class="code-string">"العمر:"</span>, 25)
                        </div>
                        <p>دالة <code>input()</code> تستخدم لأخذ مدخلات من المستخدم:</p>
                        <div class="code-example">
                            name = <span class="code-keyword">input</span>(<span class="code-string">"أدخل اسمك: "</span>)<br>
                            <span class="code-keyword">print</span>(<span class="code-string">"مرحبا"</span>, name)
                        </div>
                        <p>ملاحظات مهمة:</p>
                        <ul>
                            <li><code>input()</code> دائماً ترجع نصاً (string)</li>
                            <li>لتحويل المدخلات إلى أرقام نستخدم <code>int()</code> أو <code>float()</code></li>
                            <li>يمكن تنسيق النصوص باستخدام f-strings</li>
                        </ul>
                    </div>
                </div>
            </div>
            <button class="play-btn">
                <i class="fas fa-play"></i>
            </button>
            <button class="info-btn">
                <i class="fas fa-info"></i>
            </button>
        </div>

        <!-- الدرس 4 -->
        <div class="lesson-card">
            <div class="lesson-number">4</div>
            <div class="lesson-info">
                <h3 class="lesson-title">المتغيرات وأنواع البيانات</h3>
                <p class="lesson-desc">تعرف على المتغيرات وأنواع البيانات الأساسية في بايثون</p>
                
                <div class="lesson-explanation">
                    <h4 class="explanation-title"><i class="fas fa-info-circle"></i> شرح الدرس الرابع</h4>
                    <div class="explanation-content">
                        <p>المتغيرات في بايثون:</p>
                        <ul>
                            <li>لا تحتاج إلى تعريف مسبق لنوعها</li>
                            <li>تأخذ نوع البيانات تلقائياً</li>
                            <li>أسماء المتغيرات حساسة لحالة الأحرف</li>
                        </ul>
                        <p>أنواع البيانات الأساسية:</p>
                        <div class="code-example">
                            <span class="code-comment"># أعداد صحيحة</span><br>
                            age = 25<br><br>
                            
                            <span class="code-comment"># أعداد عشرية</span><br>
                            price = 99.99<br><br>
                            
                            <span class="code-comment"># نصوص</span><br>
                            name = "أحمد"<br><br>
                            
                            <span class="code-comment"># قيم منطقية</span><br>
                            is_active = True<br><br>
                            
                            <span class="code-comment"># معرفة نوع البيانات</span><br>
                            <span class="code-keyword">print</span>(<span class="code-function">type</span>(age))  <span class="code-comment"># &lt;class 'int'&gt;</span>
                        </div>
                        <p>تحويل أنواع البيانات:</p>
                        <div class="code-example">
                            <span class="code-comment"># تحويل النص إلى عدد</span><br>
                            num = <span class="code-function">int</span>("123")<br><br>
                            
                            <span class="code-comment"># تحويل العدد إلى نص</span><br>
                            text = <span class="code-function">str</span>(456)<br><br>
                            
                            <span class="code-comment"># تحويل إلى قيمة منطقية</span><br>
                            val = <span class="code-function">bool</span>(1)  <span class="code-comment"># True</span>
                        </div>
                    </div>
                </div>
            </div>
            <button class="play-btn">
                <i class="fas fa-play"></i>
            </button>
            <button class="info-btn">
                <i class="fas fa-info"></i>
            </button>
        </div>

        <!-- الدرس 5 -->
        <div class="lesson-card">
            <div class="lesson-number">5</div>
            <div class="lesson-info">
                <h3 class="lesson-title">العوامل الحسابية والمنطقية</h3>
                <p class="lesson-desc">استخدام العوامل الرياضية والمنطقية في بايثون</p>
                
                <div class="lesson-explanation">
                    <h4 class="explanation-title"><i class="fas fa-info-circle"></i> شرح الدرس الخامس</h4>
                    <div class="explanation-content">
                        <p>العوامل الحسابية:</p>
                        <div class="code-example">
                            <span class="code-comment"># الجمع (+)، الطرح (-)، الضرب (*)، القسمة (/)</span><br>
                            <span class="code-keyword">print</span>(10 + 5)  <span class="code-comment"># 15</span><br>
                            <span class="code-keyword">print</span>(10 - 5)  <span class="code-comment"># 5</span><br>
                            <span class="code-keyword">print</span>(10 * 5)  <span class="code-comment"># 50</span><br>
                            <span class="code-keyword">print</span>(10 / 5)  <span class="code-comment"># 2.0</span><br><br>
                            
                            <span class="code-comment"># القسمة الصحيحة (//)، باقي القسمة (%), الأس (**)</span><br>
                            <span class="code-keyword">print</span>(10 // 3)  <span class="code-comment"># 3</span><br>
                            <span class="code-keyword">print</span>(10 % 3)   <span class="code-comment"># 1</span><br>
                            <span class="code-keyword">print</span>(2 ** 3)   <span class="code-comment"># 8</span>
                        </div>
                        <p>العوامل المنطقية:</p>
                        <div class="code-example">
                            <span class="code-comment"># and, or, not</span><br>
                            x = True<br>
                            y = False<br>
                            <span class="code-keyword">print</span>(x <span class="code-keyword">and</span> y)  <span class="code-comment"># False</span><br>
                            <span class="code-keyword">print</span>(x <span class="code-keyword">or</span> y)   <span class="code-comment"># True</span><br>
                            <span class="code-keyword">print</span>(<span class="code-keyword">not</span> x)   <span class="code-comment"># False</span>
                        </div>
                        <p>عوامل المقارنة:</p>
                        <div class="code-example">
                            <span class="code-comment"># ==, !=, >, <, >=, <=</span><br>
                            a = 10<br>
                            b = 20<br>
                            <span class="code-keyword">print</span>(a == b)  <span class="code-comment"># False</span><br>
                            <span class="code-keyword">print</span>(a != b)  <span class="code-comment"># True</span><br>
                            <span class="code-keyword">print</span>(a < b)   <span class="code-comment"># True</span>
                        </div>
                    </div>
                </div>
            </div>
            <button class="play-btn">
                <i class="fas fa-play"></i>
            </button>
            <button class="info-btn">
                <i class="fas fa-info"></i>
            </button>
        </div>

        <!-- يمكنك إضافة بقية الدروس بنفس الطريقة -->
        <!-- الدرس 6 -->
        <div class="lesson-card">
            <div class="lesson-number">6</div>
            <div class="lesson-info">
                <h3 class="lesson-title">الجمل الشرطية if</h3>
                <p class="lesson-desc">كيفية اتخاذ القرارات في البرنامج باستخدام if</p>
                
                <div class="lesson-explanation">
                    <h4 class="explanation-title"><i class="fas fa-info-circle"></i> شرح الدرس السادس</h4>
                    <div class="explanation-content">
                        <p>الجمل الشرطية تسمح بتنفيذ كود معين بناءً على شرط:</p>
                        <div class="code-example">
                            <span class="code-keyword">if</span> condition:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-comment"># كود يتم تنفيذه إذا كان الشرط صحيحاً</span><br>
                            <span class="code-keyword">elif</span> another_condition:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-comment"># كود بديل إذا تحقق شرط آخر</span><br>
                            <span class="code-keyword">else</span>:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-comment"># كود يتم تنفيذه إذا لم يتحقق أي شرط</span>
                        </div>
                        <p>مثال عملي:</p>
                        <div class="code-example">
                            age = 18<br><br>
                            
                            <span class="code-keyword">if</span> age >= 18:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">"مسموح بالدخول"</span>)<br>
                            <span class="code-keyword">else</span>:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">"غير مسموح بالدخول"</span>)
                        </div>
                        <p>ملاحظات:</p>
                        <ul>
                            <li>المسافات البادئة (indentation) مهمة جداً في بايثون</li>
                            <li>يمكن استخدام عدة elif</li>
                            <li>يمكن وضع if داخل if آخر (شرط متداخل)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <button class="play-btn">
                <i class="fas fa-play"></i>
            </button>
            <button class="info-btn">
                <i class="fas fa-info"></i>
            </button>
        </div>

        <!-- الدرس 7 -->
        <div class="lesson-card">
            <div class="lesson-number">7</div>
            <div class="lesson-info">
                <h3 class="lesson-title">الحلقات التكرارية</h3>
                <p class="lesson-desc">استخدام while و for للتكرار في بايثون</p>
                
                <div class="lesson-explanation">
                    <h4 class="explanation-title"><i class="fas fa-info-circle"></i> شرح الدرس السابع</h4>
                    <div class="explanation-content">
                        <p>حلقة <code>while</code>:</p>
                        <div class="code-example">
                            <span class="code-comment"># تنفيذ الكود طالما الشرط صحيح</span><br>
                            count = 0<br>
                            <span class="code-keyword">while</span> count < 5:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(count)<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;count += 1
                        </div>
                        <p>حلقة <code>for</code>:</p>
                        <div class="code-example">
                            <span class="code-comment"># التكرار خلال عناصر متسلسلة</span><br>
                            <span class="code-keyword">for</span> i <span class="code-keyword">in</span> <span class="code-function">range</span>(5):<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(i)<br><br>
                            
                            <span class="code-comment"># التكرار خلال قائمة</span><br>
                            fruits = [<span class="code-string">"تفاح"</span>, <span class="code-string">"موز"</span>, <span class="code-string">"برتقال"</span>]<br>
                            <span class="code-keyword">for</span> fruit <span class="code-keyword">in</span> fruits:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(fruit)
                        </div>
                        <p>كلمات التحكم في الحلقات:</p>
                        <ul>
                            <li><code>break</code>: إيقاف الحلقة فوراً</li>
                            <li><code>continue</code>: تخطي التكرار الحالي</li>
                            <li><code>else</code>: تنفيذ كود بعد انتهاء الحلقة (إذا لم يتم إيقافها بbreak)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <button class="play-btn">
                <i class="fas fa-play"></i>
            </button>
            <button class="info-btn">
                <i class="fas fa-info"></i>
            </button>
        </div>

        <!-- الدرس 8 -->
        <div class="lesson-card">
            <div class="lesson-number">8</div>
            <div class="lesson-info">
                <h3 class="lesson-title">القوائم (Lists)</h3>
                <p class="lesson-desc">تعلم كيفية التعامل مع القوائم في بايثون</p>
                
                <div class="lesson-explanation">
                    <h4 class="explanation-title"><i class="fas fa-info-circle"></i> شرح الدرس الثامن</h4>
                    <div class="explanation-content">
                        <p>القوائم في بايثون:</p>
                        <ul>
                            <li>مجموعة مرتبة من العناصر</li>
                            <li>قابلة للتغيير (mutable)</li>
                            <li>تسمح بتكرار العناصر</li>
                            <li>يمكن أن تحتوي على أنواع بيانات مختلفة</li>
                        </ul>
                        <p>إنشاء قائمة:</p>
                        <div class="code-example">
                            my_list = [1, 2, 3, <span class="code-string">"أربعة"</span>, True]
                        </div>
                        <p>الوصول إلى العناصر:</p>
                        <div class="code-example">
                            <span class="code-comment"># الفهرسة تبدأ من الصفر</span><br>
                            <span class="code-keyword">print</span>(my_list[0])  <span class="code-comment"># 1</span><br>
                            <span class="code-keyword">print</span>(my_list[3])  <span class="code-comment"># "أربعة"</span><br><br>
                            
                            <span class="code-comment"># فهرسة سالبة للوصول من النهاية</span><br>
                            <span class="code-keyword">print</span>(my_list[-1])  <span class="code-comment"># True</span>
                        </div>
                        <p>تعديل القوائم:</p>
                        <div class="code-example">
                            <span class="code-comment"># إضافة عنصر</span><br>
                            my_list.append(<span class="code-string">"جديد"</span>)<br><br>
                            
                            <span class="code-comment"># إزالة عنصر</span><br>
                            my_list.remove(2)<br><br>
                            
                            <span class="code-comment"># تعديل عنصر</span><br>
                            my_list[1] = <span class="code-string">"معدل"</span>
                        </div>
                        <p>طرق أخرى:</p>
                        <div class="code-example">
                            <span class="code-comment"># طول القائمة</span><br>
                            length = <span class="code-function">len</span>(my_list)<br><br>
                            
                            <span class="code-comment"># فرز القائمة</span><br>
                            numbers = [5, 2, 8, 1]<br>
                            numbers.sort()  <span class="code-comment"># [1, 2, 5, 8]</span>
                        </div>
                    </div>
                </div>
            </div>
            <button class="play-btn">
                <i class="fas fa-play"></i>
            </button>
            <button class="info-btn">
                <i class="fas fa-info"></i>
            </button>
        </div>

        <!-- الدرس 9 -->
        <div class="lesson-card">
            <div class="lesson-number">9</div>
            <div class="lesson-info">
                <h3 class="lesson-title">القواميس (Dictionaries)</h3>
                <p class="lesson-desc">كيفية استخدام هياكل البيانات من نوع قاموس</p>
                
                <div class="lesson-explanation">
                    <h4 class="explanation-title"><i class="fas fa-info-circle"></i> شرح الدرس التاسع</h4>
                    <div class="explanation-content">
                        <p>القواميس في بايثون:</p>
                        <ul>
                            <li>تخزين البيانات على شكل أزواج مفتاح-قيمة</li>
                            <li>المفاتيح يجب أن تكون فريدة وغير قابلة للتغيير</li>
                            <li>القيم يمكن أن تكون من أي نوع</li>
                            <li>غير مرتبة (قبل بايثون 3.7)</li>
                        </ul>
                        <p>إنشاء قاموس:</p>
                        <div class="code-example">
                            person = {<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-string">"name"</span>: <span class="code-string">"أحمد"</span>,<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-string">"age"</span>: 25,<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-string">"city"</span>: <span class="code-string">"القاهرة"</span><br>
                            }
                        </div>
                        <p>الوصول إلى القيم:</p>
                        <div class="code-example">
                            <span class="code-keyword">print</span>(person[<span class="code-string">"name"</span>])  <span class="code-comment"># "أحمد"</span><br>
                            <span class="code-keyword">print</span>(person.get(<span class="code-string">"age"</span>))  <span class="code-comment"># 25</span>
                        </div>
                        <p>تعديل القواميس:</p>
                        <div class="code-example">
                            <span class="code-comment"># إضافة/تعديل عنصر</span><br>
                            person[<span class="code-string">"job"</span>] = <span class="code-string">"مبرمج"</span><br><br>
                            
                            <span class="code-comment"># إزالة عنصر</span><br>
                            <span class="code-keyword">del</span> person[<span class="code-string">"city"</span>]<br><br>
                            
                            <span class="code-comment"># الحصول على جميع المفاتيح أو القيم</span><br>
                            keys = person.keys()<br>
                            values = person.values()
                        </div>
                        <p>طرق أخرى:</p>
                        <div class="code-example">
                            <span class="code-comment"># التحقق من وجود مفتاح</span><br>
                            <span class="code-keyword">if</span> <span class="code-string">"age"</span> <span class="code-keyword">in</span> person:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">"المفتاح موجود"</span>)<br><br>
                            
                            <span class="code-comment"># دمج قواميس</span><br>
                            person.update({<span class="code-string">"hobby"</span>: <span class="code-string">"القراءة"</span>, <span class="code-string">"country"</span>: <span class="code-string">"مصر"</span>})
                        </div>
                    </div>
                </div>
            </div>
            <button class="play-btn">
                <i class="fas fa-play"></i>
            </button>
            <button class="info-btn">
                <i class="fas fa-info"></i>
            </button>
        </div>

        <!-- الدرس 10 -->
        <div class="lesson-card">
            <div class="lesson-number">10</div>
            <div class="lesson-info">
                <h3 class="lesson-title">المجموعات (Tuples)</h3>
                <p class="lesson-desc">الفرق بين القوائم والمجموعات وكيفية استخدامها</p>
                
                <div class="lesson-explanation">
                    <h4 class="explanation-title"><i class="fas fa-info-circle"></i> شرح الدرس العاشر</h4>
                    <div class="explanation-content">
                        <p>المجموعات (Tuples) في بايثون:</p>
                        <ul>
                            <li>مجموعة مرتبة من العناصر</li>
                            <li>غير قابلة للتغيير (immutable)</li>
                            <li>تسمح بتكرار العناصر</li>
                            <li>أسرع من القوائم في التكرار</li>
                        </ul>
                        <p>إنشاء مجموعة:</p>
                        <div class="code-example">
                            my_tuple = (1, 2, 3, <span class="code-string">"أربعة"</span>, True)
                        </div>
                        <p>الوصول إلى العناصر:</p>
                        <div class="code-example">
                            <span class="code-keyword">print</span>(my_tuple[0])  <span class="code-comment"># 1</span><br>
                            <span class="code-keyword">print</span>(my_tuple[-1]) <span class="code-comment"># True</span>
                        </div>
                        <p>خصائص المجموعات:</p>
                        <div class="code-example">
                            <span class="code-comment"># لا يمكن تعديل العناصر</span><br>
                            <span class="code-comment"># my_tuple[0] = 10 ← خطأ</span><br><br>
                            
                            <span class="code-comment"># يمكن حذف المجموعة كاملة</span><br>
                            <span class="code-keyword">del</span> my_tuple
                        </div>
                        <p>استخدامات المجموعات:</p>
                        <ul>
                            <li>تخزين بيانات ثابتة لا تتغير</li>
                            <li>استخدامها كأساس للقواميس (كمفاتيح)</li>
                            <li>إرجاع عدة قيم من الدوال</li>
                        </ul>
                        <p>الفرق بين القوائم والمجموعات:</p>
                        <div class="code-example">
                            <span class="code-comment"># القوائم: قابلة للتغيير، تستخدم الأقواس المربعة []</span><br>
                            <span class="code-comment"># المجموعات: غير قابلة للتغيير، تستخدم الأقواس العادية ()</span>
                        </div>
                    </div>
                </div>
            </div>
            <button class="play-btn">
                <i class="fas fa-play"></i>
            </button>
            <button class="info-btn">
                <i class="fas fa-info"></i>
            </button>
        </div>

        <!-- يمكنك متابعة إضافة الدروس المتبقية بنفس الطريقة -->
        <!-- الدرس 11 -->
        <div class="lesson-card">
            <div class="lesson-number">11</div>
            <div class="lesson-info">
                <h3 class="lesson-title">الدوال (Functions)</h3>
                <p class="lesson-desc">كيفية إنشاء واستدعاء الدوال في بايثون</p>
                
                <div class="lesson-explanation">
                    <h4 class="explanation-title"><i class="fas fa-info-circle"></i> شرح الدرس الحادي عشر</h4>
                    <div class="explanation-content">
                        <p>الدوال في بايثون:</p>
                        <ul>
                            <li>كتلة من الكود قابلة لإعادة الاستخدام</li>
                            <li>تساعد في تنظيم الكود</li>
                            <li>تقلل من التكرار</li>
                        </ul>
                        <p>إنشاء دالة:</p>
                        <div class="code-example">
                            <span class="code-keyword">def</span> <span class="code-function">greet</span>(name):<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">f"مرحبا {name}"</span>)<br><br>
                            
                            <span class="code-comment"># استدعاء الدالة</span><br>
                            greet(<span class="code-string">"أحمد"</span>)
                        </div>
                        <p>إرجاع قيم من الدوال:</p>
                        <div class="code-example">
                            <span class="code-keyword">def</span> <span class="code-function">add</span>(a, b):<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">return</span> a + b<br><br>
                            
                            result = add(5, 3)<br>
                            <span class="code-keyword">print</span>(result)  <span class="code-comment"># 8</span>
                        </div>
                        <p>المعاملات الافتراضية:</p>
                        <div class="code-example">
                            <span class="code-keyword">def</span> <span class="code-function">power</span>(base, exponent=2):<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">return</span> base ** exponent<br><br>
                            
                            <span class="code-keyword">print</span>(power(3))    <span class="code-comment"># 9 (3^2)</span><br>
                            <span class="code-keyword">print</span>(power(3, 3)) <span class="code-comment"># 27 (3^3)</span>
                        </div>
                    </div>
                </div>
            </div>
            <button class="play-btn">
                <i class="fas fa-play"></i>
            </button>
            <button class="info-btn">
                <i class="fas fa-info"></i>
            </button>
        </div>

        <!-- الدرس 12 -->
        <div class="lesson-card">
            <div class="lesson-number">12</div>
            <div class="lesson-info">
                <h3 class="lesson-title">الوحدات (Modules)</h3>
                <p class="lesson-desc">كيفية استخدام الوحدات الجاهزة وإنشاء وحدات خاصة</p>
                
                <div class="lesson-explanation">
                    <h4 class="explanation-title"><i class="fas fa-info-circle"></i> شرح الدرس الثاني عشر</h4>
                    <div class="explanation-content">
                        <p>الوحدات في بايثون:</p>
                        <ul>
                            <li>ملفات تحتوي على دوال ومتغيرات</li>
                            <li>تسمح بتنظيم الكود في ملفات متعددة</li>
                            <li>يمكن استيرادها واستخدامها في ملفات أخرى</li>
                        </ul>
                        <p>استيراد وحدة:</p>
                        <div class="code-example">
                            <span class="code-comment"># استيراد وحدة كاملة</span><br>
                            <span class="code-keyword">import</span> math<br><br>
                            
                            <span class="code-comment"># استخدام دوال الوحدة</span><br>
                            <span class="code-keyword">print</span>(math.sqrt(16))  <span class="code-comment"># 4.0</span>
                        </div>
                        <p>إنشاء وحدة خاصة:</p>
                        <div class="code-example">
                            <span class="code-comment"># في ملف mymodule.py</span><br>
                            <span class="code-keyword">def</span> <span class="code-function">say_hello</span>(name):<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">f"مرحبا {name}"</span>)<br><br>
                            
                            <span class="code-comment"># في ملف آخر</span><br>
                            <span class="code-keyword">import</span> mymodule<br>
                            mymodule.say_hello(<span class="code-string">"أحمد"</span>)
                        </div>
                        <p>وحدات بايثون الشائعة:</p>
                        <ul>
                            <li>math: دوال رياضية</li>
                            <li>random: توليد أرقام عشوائية</li>
                            <li>datetime: التعامل مع التاريخ والوقت</li>
                            <li>os: التفاعل مع نظام التشغيل</li>
                        </ul>
                    </div>
                </div>
            </div>
            <button class="play-btn">
                <i class="fas fa-play"></i>
            </button>
            <button class="info-btn">
                <i class="fas fa-info"></i>
            </button>
        </div>

        <!-- الدرس 13 -->
        <div class="lesson-card">
            <div class="lesson-number">13</div>
            <div class="lesson-info">
                <h3 class="lesson-title">التعامل مع الملفات</h3>
                <p class="lesson-desc">قراءة وكتابة الملفات النصية في بايثون</p>
                
                <div class="lesson-explanation">
                    <h4 class="explanation-title"><i class="fas fa-info-circle"></i> شرح الدرس الثالث عشر</h4>
                    <div class="explanation-content">
                        <p>فتح الملفات في بايثون:</p>
                        <div class="code-example">
                            <span class="code-comment"># فتح ملف للقراءة</span><br>
                            file = <span class="code-function">open</span>(<span class="code-string">"example.txt"</span>, <span class="code-string">"r"</span>)<br>
                            content = file.read()<br>
                            file.close()<br><br>
                            
                            <span class="code-comment"># أو باستخدام with (يغلق الملف تلقائياً)</span><br>
                            <span class="code-keyword">with</span> <span class="code-function">open</span>(<span class="code-string">"example.txt"</span>, <span class="code-string">"r"</span>) <span class="code-keyword">as</span> file:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;content = file.read()
                        </div>
                        <p>أنواع فتح الملفات:</p>
                        <ul>
                            <li>"r": للقراءة فقط</li>
                            <li>"w": للكتابة (يمسح المحتوى القديم)</li>
                            <li>"a": للإضافة إلى نهاية الملف</li>
                            <li>"r+": للقراءة والكتابة</li>
                        </ul>
                        <p>كتابة إلى ملف:</p>
                        <div class="code-example">
                            <span class="code-keyword">with</span> <span class="code-function">open</span>(<span class="code-string">"output.txt"</span>, <span class="code-string">"w"</span>) <span class="code-keyword">as</span> file:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;file.write(<span class="code-string">"هذا نص مكتوب في الملف\n"</span>)<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;file.write(<span class="code-string">"سطر آخر"</span>)
                        </div>
                        <p>طرق قراءة الملف:</p>
                        <div class="code-example">
                            <span class="code-comment"># قراءة الملف كاملاً</span><br>
                            content = file.read()<br><br>
                            
                            <span class="code-comment"># قراءة سطر واحد</span><br>
                            line = file.readline()<br><br>
                            
                            <span class="code-comment"># قراءة جميع الأسطر في قائمة</span><br>
                            lines = file.readlines()
                        </div>
                    </div>
                </div>
            </div>
            <button class="play-btn">
                <i class="fas fa-play"></i>
            </button>
            <button class="info-btn">
                <i class="fas fa-info"></i>
            </button>
        </div>

        <!-- الدرس 14 -->
        <div class="lesson-card">
            <div class="lesson-number">14</div>
            <div class="lesson-info">
                <h3 class="lesson-title">معالجة الأخطاء</h3>
                <p class="lesson-desc">استخدام try-except للتعامل مع الأخطاء</p>
                
                <div class="lesson-explanation">
                    <h4 class="explanation-title"><i class="fas fa-info-circle"></i> شرح الدرس الرابع عشر</h4>
                    <div class="explanation-content">
                        <p>معالجة الأخطاء في بايثون:</p>
                        <ul>
                            <li>تمنع توقف البرنامج عند حدوث خطأ</li>
                            <li>تسمح باتخاذ إجراءات مناسبة عند حدوث الأخطاء</li>
                        </ul>
                        <p>بناء try-except:</p>
                        <div class="code-example">
                            <span class="code-keyword">try</span>:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-comment"># كود قد يسبب خطأ</span><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;result = 10 / 0<br>
                            <span class="code-keyword">except</span> ZeroDivisionError:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">"لا يمكن القسمة على صفر!"</span>)
                        </div>
                        <p>معالجة عدة أخطاء:</p>
                        <div class="code-example">
                            <span class="code-keyword">try</span>:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;num = <span class="code-function">int</span>(<span class="code-keyword">input</span>(<span class="code-string">"أدخل عدداً: "</span>))<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;result = 100 / num<br>
                            <span class="code-keyword">except</span> ValueError:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">"يجب إدخال عدد صحيح"</span>)<br>
                            <span class="code-keyword">except</span> ZeroDivisionError:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">"لا يمكن القسمة على صفر"</span>)
                        </div>
                        <p>else و finally:</p>
                        <div class="code-example">
                            <span class="code-keyword">try</span>:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">"محاولة تنفيذ الكود"</span>)<br>
                            <span class="code-keyword">except</span>:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">"حدث خطأ"</span>)<br>
                            <span class="code-keyword">else</span>:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">"تم التنفيذ بنجاح"</span>)<br>
                            <span class="code-keyword">finally</span>:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">"هذا الكود ينفذ دائماً"</span>)
                        </div>
                    </div>
                </div>
            </div>
            <button class="play-btn">
                <i class="fas fa-play"></i>
            </button>
            <button class="info-btn">
                <i class="fas fa-info"></i>
            </button>
        </div>

        <!-- الدرس 15 -->
        <div class="lesson-card">
            <div class="lesson-number">15</div>
            <div class="lesson-info">
                <h3 class="lesson-title">البرمجة الكائنية (OOP)</h3>
                <p class="lesson-desc">مقدمة إلى البرمجة الكائنية التوجه في بايثون</p>
                
                <div class="lesson-explanation">
                    <h4 class="explanation-title"><i class="fas fa-info-circle"></i> شرح الدرس الخامس عشر</h4>
                    <div class="explanation-content">
                        <p>مفاهيم البرمجة الكائنية:</p>
                        <ul>
                            <li>الفئة (Class): وصف للكائن (مثل مخطط)</li>
                            <li>الكائن (Object): نسخة من الفئة</li>
                            <li>الخصائص (Attributes): بيانات الكائن</li>
                            <li>الأساليب (Methods): دوال الكائن</li>
                        </ul>
                        <p>إنشاء فئة:</p>
                        <div class="code-example">
                            <span class="code-keyword">class</span> <span class="code-function">Person</span>:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">def</span> <span class="code-function">__init__</span>(<span class="code-keyword">self</span>, name, age):<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">self</span>.name = name<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">self</span>.age = age<br><br>
                            
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">def</span> <span class="code-function">greet</span>(<span class="code-keyword">self</span>):<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">f"مرحبا، اسمي {self.name} وعمري {self.age}"</span>)
                        </div>
                        <p>إنشاء كائن واستخدامه:</p>
                        <div class="code-example">
                            <span class="code-comment"># إنشاء كائن</span><br>
                            person1 = Person(<span class="code-string">"أحمد"</span>, 25)<br><br>
                            
                            <span class="code-comment"># الوصول إلى الخصائص</span><br>
                            <span class="code-keyword">print</span>(person1.name)  <span class="code-comment"># "أحمد"</span><br><br>
                            
                            <span class="code-comment"># استدعاء الأساليب</span><br>
                            person1.greet()  <span class="code-comment"># "مرحبا، اسمي أحمد وعمري 25"</span>
                        </div>
                        <p>مميزات البرمجة الكائنية:</p>
                        <ul>
                            <li>إعادة استخدام الكود</li>
                            <li>تنظيم الكود بشكل أفضل</li>
                            <li>إخفاء البيانات (Encapsulation)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <button class="play-btn">
                <i class="fas fa-play"></i>
            </button>
            <button class="info-btn">
                <i class="fas fa-info"></i>
            </button>
        </div>

        <!-- الدرس 16 -->
        <div class="lesson-card">
            <div class="lesson-number">16</div>
            <div class="lesson-info">
                <h3 class="lesson-title">الفئات والكائنات</h3>
                <p class="lesson-desc">كيفية تعريف الفئات وإنشاء الكائنات</p>
                
                <div class="lesson-explanation">
                    <h4 class="explanation-title"><i class="fas fa-info-circle"></i> شرح الدرس السادس عشر</h4>
                    <div class="explanation-content">
                        <p>البناء (Constructor):</p>
                        <div class="code-example">
                            <span class="code-keyword">class</span> <span class="code-function">Car</span>:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">def</span> <span class="code-function">__init__</span>(<span class="code-keyword">self</span>, brand, model, year):<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">self</span>.brand = brand<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">self</span>.model = model<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">self</span>.year = year<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">self</span>.mileage = 0  <span class="code-comment"># قيمة افتراضية</span><br><br>
                            
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">def</span> <span class="code-function">drive</span>(<span class="code-keyword">self</span>, distance):<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">self</span>.mileage += distance
                        </div>
                        <p>إنشاء واستخدام الكائنات:</p>
                        <div class="code-example">
                            <span class="code-comment"># إنشاء كائنات</span><br>
                            car1 = Car(<span class="code-string">"تويوتا"</span>, <span class="code-string">"كورولا"</span>, 2020)<br>
                            car2 = Car(<span class="code-string">"نيسان"</span>, <span class="code-string">"صني"</span>, 2018)<br><br>
                            
                            <span class="code-comment"># استخدام الكائنات</span><br>
                            car1.drive(150)<br>
                            <span class="code-keyword">print</span>(car1.mileage)  <span class="code-comment"># 150</span><br>
                            <span class="code-keyword">print</span>(car2.brand)    <span class="code-comment"># "نيسان"</span>
                        </div>
                        <p>تعديل الخصائص:</p>
                        <div class="code-example">
                            car1.year = 2021  <span class="code-comment"># تعديل خاصية مباشرة</span><br>
                            car1.color = <span class="code-string">"أحمر"</span>  <span class="code-comment"># إضافة خاصية جديدة</span>
                        </div>
                        <p>الأساليب الخاصة:</p>
                        <div class="code-example">
                            <span class="code-keyword">class</span> <span class="code-function">Car</span>:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-comment"># ... الكود السابق ...</span><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">def</span> <span class="code-function">__str__</span>(<span class="code-keyword">self</span>):<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">return</span> <span class="code-string">f"{self.brand} {self.model} {self.year}"</span><br><br>
                            
                            car = Car(<span class="code-string">"تويوتا"</span>, <span class="code-string">"كامري"</span>, 2022)<br>
                            <span class="code-keyword">print</span>(car)  <span class="code-comment"># "تويوتا كامري 2022"</span>
                        </div>
                    </div>
                </div>
            </div>
            <button class="play-btn">
                <i class="fas fa-play"></i>
            </button>
            <button class="info-btn">
                <i class="fas fa-info"></i>
            </button>
        </div>

        <!-- الدرس 17 -->
        <div class="lesson-card">
            <div class="lesson-number">17</div>
            <div class="lesson-info">
                <h3 class="lesson-title">الوراثة (Inheritance)</h3>
                <p class="lesson-desc">مفهوم الوراثة وتطبيقاته في بايثون</p>
                
                <div class="lesson-explanation">
                    <h4 class="explanation-title"><i class="fas fa-info-circle"></i> شرح الدرس السابع عشر</h4>
                    <div class="explanation-content">
                        <p>الوراثة في بايثون:</p>
                        <ul>
                            <li>تسمح بإنشاء فئة جديدة بناءً على فئة موجودة</li>
                            <li>الفئة الجديدة ترث خصائص وأساليب الفئة الأصلية</li>
                            <li>يمكن إضافة خصائص وأساليب جديدة أو تعديل الموروثة</li>
                        </ul>
                        <p>إنشاء فئة موروثة:</p>
                        <div class="code-example">
                            <span class="code-keyword">class</span> <span class="code-function">Animal</span>:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">def</span> <span class="code-function">__init__</span>(<span class="code-keyword">self</span>, name):<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">self</span>.name = name<br><br>
                            
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">def</span> <span class="code-function">speak</span>(<span class="code-keyword">self</span>):<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">"صوت الحيوان"</span>)<br><br>
                            
                            <span class="code-keyword">class</span> <span class="code-function">Dog</span>(Animal):<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">def</span> <span class="code-function">speak</span>(<span class="code-keyword">self</span>):<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">"هاو هاو"</span>)
                        </div>
                        <p>استخدام الفئات الموروثة:</p>
                        <div class="code-example">
                            animal = Animal(<span class="code-string">"حيوان"</span>)<br>
                            dog = Dog(<span class="code-string">"ريكس"</span>)<br><br>
                            
                            animal.speak()  <span class="code-comment"># "صوت الحيوان"</span><br>
                            dog.speak()     <span class="code-comment"># "هاو هاو"</span><br>
                            <span class="code-keyword">print</span>(dog.name)  <span class="code-comment"># "ريكس"</span>
                        </div>
                        <p>الوراثة المتعددة:</p>
                        <div class="code-example">
                            <span class="code-keyword">class</span> <span class="code-function">A</span>:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">def</span> <span class="code-function">method</span>(<span class="code-keyword">self</span>):<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">"A method"</span>)<br><br>
                            
                            <span class="code-keyword">class</span> <span class="code-function">B</span>:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">def</span> <span class="code-function">method</span>(<span class="code-keyword">self</span>):<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">"B method"</span>)<br><br>
                            
                            <span class="code-keyword">class</span> <span class="code-function">C</span>(A, B):<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">pass</span><br><br>
                            
                            c = C()<br>
                            c.method()  <span class="code-comment"># "A method" (حسب ترتيب الوراثة)</span>
                        </div>
                    </div>
                </div>
            </div>
            <button class="play-btn">
                <i class="fas fa-play"></i>
            </button>
            <button class="info-btn">
                <i class="fas fa-info"></i>
            </button>
        </div>

        <!-- الدرس 18 -->
        <div class="lesson-card">
            <div class="lesson-number">18</div>
            <div class="lesson-info">
                <h3 class="lesson-title">واجهات برمجة التطبيقات (API)</h3>
                <p class="lesson-desc">مقدمة إلى التعامل مع APIs في بايثون</p>
                
                <div class="lesson-explanation">
                    <h4 class="explanation-title"><i class="fas fa-info-circle"></i> شرح الدرس الثامن عشر</h4>
                    <div class="explanation-content">
                        <p>واجهات برمجة التطبيقات (APIs):</p>
                        <ul>
                            <li>طريقة للتواصل بين التطبيقات</li>
                            <li>تسمح بتبادل البيانات</li>
                            <li>غالباً تستخدم بروتوكول HTTP</li>
                        </ul>
                        <p>مكتبة requests:</p>
                        <div class="code-example">
                            <span class="code-keyword">import</span> requests<br><br>
                            
                            <span class="code-comment"># طلب GET</span><br>
                            response = requests.get(<span class="code-string">"https://api.example.com/data"</span>)<br>
                            data = response.json()  <span class="code-comment"># تحويل الرد إلى JSON</span><br>
                            <span class="code-keyword">print</span>(data)
                        </div>
                        <p>إرسال بيانات:</p>
                        <div class="code-example">
                            <span class="code-comment"># طلب POST مع بيانات</span><br>
                            payload = {<span class="code-string">"name"</span>: <span class="code-string">"أحمد"</span>, <span class="code-string">"age"</span>: 25}<br>
                            response = requests.post(<span class="code-string">"https://api.example.com/users"</span>, json=payload)<br>
                            <span class="code-keyword">print</span>(response.status_code)  <span class="code-comment"># 201 إذا نجح الإنشاء</span>
                        </div>
                        <p>معالجة الأخطاء:</p>
                        <div class="code-example">
                            <span class="code-keyword">try</span>:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;response = requests.get(<span class="code-string">"https://api.example.com/data"</span>, timeout=5)<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;response.raise_for_status()  <span class="code-comment"># يرفع استثناء إذا كان هناك خطأ</span><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;data = response.json()<br>
                            <span class="code-keyword">except</span> requests.exceptions.RequestException <span class="code-keyword">as</span> e:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">f"حدث خطأ: {e}"</span>)
                        </div>
                    </div>
                </div>
            </div>
            <button class="play-btn">
                <i class="fas fa-play"></i>
            </button>
            <button class="info-btn">
                <i class="fas fa-info"></i>
            </button>
        </div>

        <!-- الدرس 19 -->
        <div class="lesson-card">
            <div class="lesson-number">19</div>
            <div class="lesson-info">
                <h3 class="lesson-title">مكتبة requests</h3>
                <p class="lesson-desc">كيفية إرسال طلبات HTTP في بايثون</p>
                
                <div class="lesson-explanation">
                    <h4 class="explanation-title"><i class="fas fa-info-circle"></i> شرح الدرس التاسع عشر</h4>
                    <div class="explanation-content">
                        <p>مكتبة requests:</p>
                        <ul>
                            <li>واحدة من أشهر المكتبات للتعامل مع HTTP</li>
                            <li>واجهة بسيطة وسهلة الاستخدام</li>
                            <li>تدعم جميع أنواع الطلبات (GET, POST, PUT, DELETE, etc.)</li>
                        </ul>
                        <p>تثبيت المكتبة:</p>
                        <div class="code-example">
                            <span class="code-comment"># في الطرفية:</span><br>
                            pip install requests
                        </div>
                        <p>طلب GET مع معاملات:</p>
                        <div class="code-example">
                            <span class="code-keyword">import</span> requests<br><br>
                            
                            params = {<span class="code-string">"q"</span>: <span class="code-string">"python"</span>, <span class="code-string">"page"</span>: 1}<br>
                            response = requests.get(<span class="code-string">"https://api.example.com/search"</span>, params=params)<br>
                            results = response.json()<br>
                            <span class="code-keyword">print</span>(results)
                        </div>
                        <p>طلب POST مع رؤوس:</p>
                        <div class="code-example">
                            url = <span class="code-string">"https://api.example.com/login"</span><br>
                            headers = {<span class="code-string">"Content-Type"</span>: <span class="code-string">"application/json"</span>}<br>
                            data = {<span class="code-string">"username"</span>: <span class="code-string">"user1"</span>, <span class="code-string">"password"</span>: <span class="code-string">"pass123"</span>}<br><br>
                            
                            response = requests.post(url, json=data, headers=headers)<br>
                            <span class="code-keyword">print</span>(response.json())
                        </div>
                        <p>حفظ الملفات:</p>
                        <div class="code-example">
                            url = <span class="code-string">"https://example.com/image.jpg"</span><br>
                            response = requests.get(url)<br><br>
                            
                            <span class="code-keyword">with</span> <span class="code-function">open</span>(<span class="code-string">"image.jpg"</span>, <span class="code-string">"wb"</span>) <span class="code-keyword">as</span> f:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;f.write(response.content)
                        </div>
                    </div>
                </div>
            </div>
            <button class="play-btn">
                <i class="fas fa-play"></i>
            </button>
            <button class="info-btn">
                <i class="fas fa-info"></i>
            </button>
        </div>

        <!-- الدرس 20 -->
        <div class="lesson-card">
            <div class="lesson-number">20</div>
            <div class="lesson-info">
                <h3 class="lesson-title">مشروع نهائي</h3>
                <p class="lesson-desc">تطبيق كل ما تعلمته في مشروع متكامل</p>
                
                <div class="lesson-explanation">
                    <h4 class="explanation-title"><i class="fas fa-info-circle"></i> شرح الدرس العشرون</h4>
                    <div class="explanation-content">
                        <p>مشروع تطبيق الطقس:</p>
                        <p>سنبني تطبيقاً بسيطاً يعرض حالة الطقس باستخدام API عام.</p>
                        
                        <p>المتطلبات:</p>
                        <ul>
                            <li>مكتبة requests</li>
                            <li>حساب مجاني في موقع OpenWeatherMap</li>
                        </ul>
                        
                        <p>الكود الكامل:</p>
                        <div class="code-example">
                            <span class="code-keyword">import</span> requests<br><br>
                            
                            <span class="code-keyword">def</span> <span class="code-function">get_weather</span>(api_key, city):<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;url = <span class="code-string">f"https://api.openweathermap.org/data/2.5/weather?q={city}&appid={api_key}&units=metric"</span><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;response = requests.get(url)<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;data = response.json()<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">return</span> data<br><br>
                            
                            <span class="code-keyword">def</span> <span class="code-function">display_weather</span>(data):<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">if</span> data[<span class="code-string">"cod"</span>] != 200:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">"حدث خطأ:"</span>, data[<span class="code-string">"message"</span>])<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">return</span><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;city = data[<span class="code-string">"name"</span>]<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;temp = data[<span class="code-string">"main"</span>][<span class="code-string">"temp"</span>]<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;desc = data[<span class="code-string">"weather"</span>][0][<span class="code-string">"description"</span>]<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">f"حالة الطقس في {city}:"</span>)<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">f"درجة الحرارة: {temp}°C"</span>)<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">f"الحالة: {desc}"</span>)<br><br>
                            
                            <span class="code-keyword">if</span> __name__ == <span class="code-string">"__main__"</span>:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;api_key = <span class="code-string">"your_api_key_here"</span>  <span class="code-comment"># استبدل بمفتاحك</span><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;city = <span class="code-keyword">input</span>(<span class="code-string">"أدخل اسم المدينة: "</span>)<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;weather_data = get_weather(api_key, city)<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;display_weather(weather_data)
                        </div>
                        
                        <p>تحسينات مقترحة:</p>
                        <ul>
                            <li>إضافة واجهة رسومية باستخدام tkinter</li>
                            <li>حفظ سجل المدن المطلوبة</li>
                            <li>إضافة تنبؤات الطقس لعدة أيام</li>
                        </ul>
                    </div>
                </div>
            </div>
            <button class="play-btn">
                <i class="fas fa-play"></i>
            </button>
            <button class="info-btn">
                <i class="fas fa-info"></i>
            </button>
        </div>
    </main>

    <footer class="footer">
        جميع الحقوق محفوظة &copy; Genius AI 2025
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animate lesson cards on load
            const lessonCards = document.querySelectorAll('.lesson-card');
            lessonCards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'all 0.5s ease ' + (index * 0.1) + 's';
                
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 100);
            });

            // Play button click animation
            const playButtons = document.querySelectorAll('.play-btn');
            playButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Animation effect
                    this.style.transform = 'scale(0.9)';
                    setTimeout(() => {
                        this.style.transform = 'scale(1.1)';
                    }, 100);
                    setTimeout(() => {
                        this.style.transform = 'scale(1)';
                    }, 200);
                    
                    // Get lesson info
                    const lessonNumber = this.parentElement.querySelector('.lesson-number').textContent;
                    const lessonTitle = this.parentElement.querySelector('.lesson-title').textContent;
                    
                    // Show alert (replace with actual player in real implementation)
                    alert(`تشغيل الدرس ${lessonNumber}: ${lessonTitle}`);
                });
            });
            
            // Info button click to show/hide explanation
            const infoButtons = document.querySelectorAll('.info-btn');
            infoButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const explanation = this.parentElement.querySelector('.lesson-explanation');
                    explanation.classList.toggle('active');
                    
                    // Change icon
                    const icon = this.querySelector('i');
                    if (explanation.classList.contains('active')) {
                        icon.classList.remove('fa-info');
                        icon.classList.add('fa-times');
                    } else {
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-info');
                    }
                    
                    // Animation effect
                    this.style.transform = 'scale(0.9)';
                    setTimeout(() => {
                        this.style.transform = 'scale(1.1)';
                    }, 100);
                    setTimeout(() => {
                        this.style.transform = 'scale(1)';
                    }, 200);
                });
            });
        });
    </script>
</body>
</html>