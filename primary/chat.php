<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الشات لايف</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/chat.css">

</head>
<body>
    <div class="app-container">
        <!-- شريط العنوان -->
        <div class="header">
            <div class="header-title">الشات لايف</div>
            <div class="header-actions">
                <i class="fas fa-search"></i>
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>

        <!-- منطقة المحادثة الرئيسية -->
        <div class="chat-container">
            <!-- قائمة المحادثات -->
            <div class="chat-list-container">
                <div class="chat-search">
                    <input type="text" placeholder="بحث أو محادثة جديدة">
                </div>
                <div class="chat-list">
                    <!-- محادثة 1 -->
                    <div class="chat-item active" data-chat="tech-support">
                        <img src="https://via.placeholder.com/50" alt="صورة المستخدم" class="chat-item-avatar">
                        <div class="chat-item-info">
                            <div class="chat-item-name">الدعم الفني</div>
                            <div class="chat-item-last-message">الاختبار سيكون يوم 20 يونيو...</div>
                        </div>
                        <div class="chat-item-time">10:33 ص</div>
                        <div class="chat-item-unread">3</div>
                    </div>
                    
                    <!-- محادثة 2 -->
                    <div class="chat-item" data-chat="teacher">
                        <img src="https://via.placeholder.com/50" alt="صورة المستخدم" class="chat-item-avatar">
                        <div class="chat-item-info">
                            <div class="chat-item-name">الأستاذ محمد</div>
                            <div class="chat-item-last-message">لا تنسى حل الواجب...</div>
                        </div>
                        <div class="chat-item-time">أمس</div>
                    </div>
                    
                    <!-- محادثة 3 -->
                    <div class="chat-item" data-chat="group">
                        <img src="https://via.placeholder.com/50" alt="صورة المستخدم" class="chat-item-avatar">
                        <div class="chat-item-info">
                            <div class="chat-item-name">المجموعة العامة</div>
                            <div class="chat-item-last-message">علي: مرحباً بالجميع...</div>
                        </div>
                        <div class="chat-item-time">22/06/2023</div>
                    </div>
                    
                    <!-- محادثة 4 -->
                    <div class="chat-item" data-chat="classmates">
                        <img src="https://via.placeholder.com/50" alt="صورة المستخدم" class="chat-item-avatar">
                        <div class="chat-item-info">
                            <div class="chat-item-name">زملاء الدراسة</div>
                            <div class="chat-item-last-message">سارة: من يعرف حل المسألة...</div>
                        </div>
                        <div class="chat-item-time">20/06/2023</div>
                    </div>
                    
                    <!-- محادثة 5 -->
                    <div class="chat-item" data-chat="admin">
                        <img src="https://via.placeholder.com/50" alt="صورة المستخدم" class="chat-item-avatar">
                        <div class="chat-item-info">
                            <div class="chat-item-name">إدارة المدرسة</div>
                            <div class="chat-item-last-message">إعلان هام بخصوص الاختبارات...</div>
                        </div>
                        <div class="chat-item-time">18/06/2023</div>
                    </div>
                </div>
            </div>

            <!-- منطقة الرسائل -->
            <div class="chat-messages-container" id="messagesContainer">
                <!-- شريط معلومات المحادثة -->
                <div class="chat-info-bar">
                    <i class="fas fa-arrow-left back-to-chats"></i>
                    <img src="https://via.placeholder.com/40" alt="صورة المستخدم" class="chat-info-avatar">
                    <div class="chat-info-name">الدعم الفني</div>
                    <div class="chat-info-actions">
                        <i class="fas fa-search"></i>
                        <i class="fas fa-ellipsis-v"></i>
                    </div>
                </div>

                <!-- منطقة عرض الرسائل -->
                <div class="messages-container" id="messagesList">
                    <div style="text-align: center; margin-bottom: 20px; color: var(--gray-color);">
                        <small>اليوم، 10:30 ص</small>
                    </div>
                    
                    <!-- رسالة واردة -->
                    <div class="message received">
                        <div class="message-content">
                            <img src="https://via.placeholder.com/32" alt="صورة المرسل" class="message-avatar">
                            <div class="message-bubble">
                                <p>مرحباً أحمد، كيف يمكنني مساعدتك اليوم؟</p>
                            </div>
                        </div>
                        <div class="message-time">10:30 ص</div>
                    </div>
                    
                    <!-- رسالة صادرة -->
                    <div class="message sent">
                        <div class="message-content">
                            <div class="message-bubble">
                                <p>أريد الاستفسار عن موعد الاختبار القادم</p>
                            </div>
                        </div>
                        <div class="message-time">10:31 ص</div>
                    </div>
                    
                    <!-- رسالة واردة -->
                    <div class="message received">
                        <div class="message-content">
                            <img src="https://via.placeholder.com/32" alt="صورة المرسل" class="message-avatar">
                            <div class="message-bubble">
                                <p>الاختبار سيكون يوم 20 يونيو الساعة 10 صباحاً في القاعة الرئيسية</p>
                            </div>
                        </div>
                        <div class="message-time">10:32 ص</div>
                    </div>

                    <!-- رسالة صادرة -->
                    <div class="message sent">
                        <div class="message-content">
                            <div class="message-bubble">
                                <p>شكراً لك على المعلومة!</p>
                            </div>
                        </div>
                        <div class="message-time">10:32 ص</div>
                    </div>

                    <!-- رسالة واردة -->
                    <div class="message received">
                        <div class="message-content">
                            <img src="https://via.placeholder.com/32" alt="صورة المرسل" class="message-avatar">
                            <div class="message-bubble">
                                <p>هل لديك أي استفسارات أخرى؟</p>
                            </div>
                        </div>
                        <div class="message-time">10:33 ص</div>
                    </div>
                </div>

                <!-- شريط إدخال الرسائل -->
                <div class="message-input-container">
                    <div class="message-input-actions">
                        <i class="fas fa-smile"></i>
                        <i class="fas fa-paperclip"></i>
                    </div>
                    <input type="text" class="message-input" placeholder="اكتب رسالة..." id="messageInput">
                    <div class="message-send-btn" id="sendMessageBtn">
                        <i class="fas fa-paper-plane"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // عند تحميل الصفحة، جعل الرسائل قابلة للتمرير لآخر رسالة
        window.addEventListener('load', function() {
            const messagesList = document.getElementById('messagesList');
            messagesList.scrollTop = messagesList.scrollHeight;
        });

        // إرسال رسالة جديدة
        document.getElementById('sendMessageBtn').addEventListener('click', sendMessage);
        document.getElementById('messageInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });

        // إضافة دعم لإدخال الإيموجي
        document.querySelector('.fa-smile').addEventListener('click', function() {
            const input = document.getElementById('messageInput');
            input.value += '😊'; // يمكنك استبدال الإيموجي بأي رمز آخر
            input.focus();
        });

        // إضافة دعم لرفع الملفات
        document.querySelector('.fa-paperclip').addEventListener('click', function() {
            const fileInput = document.createElement('input');
            fileInput.type = 'file';
            fileInput.accept = 'image/*';
            fileInput.addEventListener('change', function() {
                const file = fileInput.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const messagesList = document.getElementById('messagesList');
                        const messageDiv = document.createElement('div');
                        messageDiv.className = 'message sent';
                        messageDiv.innerHTML = `
                            <div class="message-content">
                                <div class="message-bubble">
                                    <img src="${e.target.result}" alt="Uploaded Image" style="max-width: 100%; border-radius: var(--border-radius);">
                                </div>
                            </div>
                            <div class="message-time">${getCurrentTime()}</div>
                        `;
                        messagesList.appendChild(messageDiv);
                        messagesList.scrollTop = messagesList.scrollHeight;
                    };
                    reader.readAsDataURL(file);
                }
            });
            fileInput.click();
        });

        // جعل شريط البحث يعمل
        document.querySelector('.chat-search input').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            document.querySelectorAll('.chat-item').forEach(item => {
                const chatName = item.querySelector('.chat-item-name').textContent.toLowerCase();
                if (chatName.includes(searchTerm)) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        });

        function sendMessage() {
            const input = document.getElementById('messageInput');
            const messageText = input.value.trim();

            if (messageText) {
                const messagesList = document.getElementById('messagesList');

                // إنشاء عنصر الرسالة المرسلة
                const messageDiv = document.createElement('div');
                messageDiv.className = 'message sent';
                messageDiv.innerHTML = `
                    <div class="message-content">
                        <div class="message-bubble">
                            <p>${messageText}</p>
                        </div>
                    </div>
                    <div class="message-time">${getCurrentTime()}</div>
                `;

                messagesList.appendChild(messageDiv);
                input.value = '';

                // التمرير لأسفل لعرض الرسالة الجديدة
                messagesList.scrollTop = messagesList.scrollHeight;

                // محاكاة الرد التلقائي بعد ثانية واحدة
                setTimeout(() => {
                    const replies = [
                        "نعم، كيف يمكنني مساعدتك؟",
                        "هل لديك أي استفسارات أخرى؟",
                        "شكراً لك على رسالتك!",
                        "سأحاول الرد عليك في أقرب وقت ممكن.",
                        "هل تريد أي معلومات إضافية؟"
                    ];

                    const randomReply = replies[Math.floor(Math.random() * replies.length)];

                    const replyDiv = document.createElement('div');
                    replyDiv.className = 'message received';
                    replyDiv.innerHTML = `
                        <div class="message-content">
                            <img src="https://via.placeholder.com/32" alt="صورة المرسل" class="message-avatar">
                            <div class="message-bubble">
                                <p>${randomReply}</p>
                            </div>
                        </div>
                        <div class="message-time">${getCurrentTime()}</div>
                    `;

                    messagesList.appendChild(replyDiv);
                    messagesList.scrollTop = messagesList.scrollHeight;
                }, 1000);
            }
        }

        // الحصول على الوقت الحالي بتنسيق ساعة:دقيقة ص/م
        function getCurrentTime() {
            const now = new Date();
            let hours = now.getHours();
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const ampm = hours >= 12 ? 'م' : 'ص';
            hours = hours % 12;
            hours = hours ? hours : 12; // الساعة 0 تصبح 12
            return `${hours}:${minutes} ${ampm}`;
        }

        // تبديل المحادثات عند النقر على جهة اتصال
        document.querySelectorAll('.chat-item').forEach(item => {
            item.addEventListener('click', function() {
                // تحديث العنصر النشط في القائمة
                document.querySelectorAll('.chat-item').forEach(i => {
                    i.classList.remove('active');
                });
                this.classList.add('active');
                
                // تحديث شريط معلومات المحادثة
                const chatName = this.querySelector('.chat-item-name').textContent;
                document.querySelector('.chat-info-name').textContent = chatName;
                
                // تحديث صورة المحادثة
                const chatAvatar = this.querySelector('.chat-item-avatar').src;
                document.querySelector('.chat-info-avatar').src = chatAvatar;
                
                // عرض منطقة الرسائل (للعرض على الجوال)
                document.getElementById('messagesContainer').classList.add('active');
            });
        });

        // زر العودة للقائمة (للعرض على الجوال)
        document.querySelector('.back-to-chats').addEventListener('click', function() {
            document.getElementById('messagesContainer').classList.remove('active');
        });
    </script>
</body>
</html>