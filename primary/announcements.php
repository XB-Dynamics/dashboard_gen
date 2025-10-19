<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظام الإدارة الأكاديمية - الإعلانات</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/main.css">

</head>
<body>
    <div class="top-navbar">
        <!-- يمكن إضافة عناصر الشريط العلوي هنا -->
    </div>

    <div class="page-content">
        <h1 class="page-title"><i class="fas fa-bullhorn"></i> الإعلانات</h1>
        
        <div class="content-section">
            <div class="section-header">
                <h3>الإعلانات المهمة</h3>
                <div class="search-filter">
                    <div class="search-box">
                        <input type="text" placeholder="ابحث عن إعلان...">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="filter-select">
                        <select>
                            <option value="">جميع الفئات</option>
                            <option value="important">مهم</option>
                            <option value="event">فعالية</option>
                            <option value="general">عام</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="announcement-card" style="background: #fff8e1; border-right-color: var(--warning-color);" onclick="showAnnouncement(
                'بدء الاختبارات النهائية', 
                '15 يونيو 2023', 
                'مهم', 
                'سيبدأ موسم الاختبارات النهائية يوم 20 يونيو 2023، يرجى من جميع الطلاب مراجعة جدول الاختبارات والاستعداد الجيد.<br><br>سيتم عقد الاختبارات في القاعة الرئيسية بالمبنى التعليمي، مع الالتزام بالمواعيد المحددة لكل مادة. يرجى إحضار الأدوات اللازمة لكل اختبار.<br><br>ملاحظة: لن يسمح بدخول أي طالب بعد مرور 15 دقيقة من بدء الاختبار.',
                [
                    {name: 'جدول الاختبارات.pdf', type: 'pdf'},
                    {name: 'تعليمات الاختبارات.docx', type: 'doc'},
                    {name: 'خريطة القاعات.jpg', type: 'img'}
                ],
                true
            )">
                <div class="announcement-priority"></div>
                <div class="announcement-header">
                    <h4 class="announcement-title">بدء الاختبارات النهائية</h4>
                    <span class="announcement-date"><i class="far fa-calendar-alt"></i> 15 يونيو 2023</span>
                </div>
                <p class="announcement-content">سيبدأ موسم الاختبارات النهائية يوم 20 يونيو 2023، يرجى من جميع الطلاب مراجعة جدول الاختبارات والاستعداد الجيد.</p>
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <button class="btn btn-primary">عرض التفاصيل <i class="fas fa-arrow-left"></i></button>
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <span><i class="far fa-comment"></i> 24</span>
                        <span><i class="far fa-heart"></i> 156</span>
                    </div>
                </div>
            </div>
            
            <div class="announcement-card" style="background: #e8f5e9; border-right-color: var(--success-color);" onclick="showAnnouncement(
                'ورشة عمل في الرياضيات', 
                '10 يونيو 2023', 
                'فعالية', 
                'يسرنا دعوتكم لحضور ورشة عمل في حل المسائل الرياضية المعقدة يوم 18 يونيو 2023 الساعة 10 صباحاً.<br><br>سيتناول ورشة العمل المواضيع التالية:<br>- حل المسائل المتقدمة في الجبر<br>- طرق حل مسائل التفاضل والتكامل<br>- استراتيجيات حل المسائل الهندسية المعقدة<br><br>سيقوم بالتدريب في الورشة الأستاذ الدكتور محمد عبد الرحمن، أستاذ الرياضيات بكلية العلوم.',
                [
                    {name: 'برنامج الورشة.pdf', type: 'pdf'},
                    {name: 'نماذج المسائل.docx', type: 'doc'}
                ],
                false
            )">
                <div class="announcement-header">
                    <h4 class="announcement-title">ورشة عمل في الرياضيات</h4>
                    <span class="announcement-date"><i class="far fa-calendar-alt"></i> 10 يونيو 2023</span>
                </div>
                <p class="announcement-content">يسرنا دعوتكم لحضور ورشة عمل في حل المسائل الرياضية المعقدة يوم 18 يونيو 2023 الساعة 10 صباحاً.</p>
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <button class="btn btn-primary">عرض التفاصيل <i class="fas fa-arrow-left"></i></button>
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <span><i class="far fa-comment"></i> 12</span>
                        <span><i class="far fa-heart"></i> 87</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <div class="section-header">
                <h3>جميع الإعلانات</h3>
                <div class="search-filter">
                    <div class="search-box">
                        <input type="text" placeholder="ابحث عن إعلان..." id="searchInput" onkeyup="filterAnnouncements()">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="filter-select">
                        <select id="categoryFilter" onchange="filterAnnouncements()">
                            <option value="">جميع الفئات</option>
                            <option value="important">مهم</option>
                            <option value="event">فعالية</option>
                            <option value="general">عام</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <table class="data-table" id="announcementsTable">
                <thead>
                    <tr>
                        <th>عنوان الإعلان</th>
                        <th>التاريخ</th>
                        <th>النوع</th>
                        <th>التفاعل</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-category="important" data-search="بدء الاختبارات النهائية اختبارات نهائية جدول اختبارات">
                        <td>بدء الاختبارات النهائية</td>
                        <td><i class="far fa-calendar-alt"></i> 15/06/2023</td>
                        <td><span class="badge" style="background: rgba(248, 150, 30, 0.1); color: var(--warning-color);">مهم</span></td>
                        <td>
                            <span><i class="far fa-comment"></i> 24</span> | 
                            <span><i class="far fa-heart"></i> 156</span>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm" onclick="showAnnouncementInTable(this)">عرض <i class="fas fa-eye"></i></button>
                        </td>
                    </tr>
                    <tr data-category="event" data-search="ورشة عمل الرياضيات حل مسائل رياضية">
                        <td>ورشة عمل في الرياضيات</td>
                        <td><i class="far fa-calendar-alt"></i> 10/06/2023</td>
                        <td><span class="badge" style="background: rgba(76, 201, 240, 0.1); color: var(--success-color);">فعالية</span></td>
                        <td>
                            <span><i class="far fa-comment"></i> 12</span> | 
                            <span><i class="far fa-heart"></i> 87</span>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm" onclick="showAnnouncementInTable(this)">عرض <i class="fas fa-eye"></i></button>
                        </td>
                    </tr>
                    <tr data-category="general" data-search="تحديثات النظام تحسينات واجهة مستخدم">
                        <td>تحديثات النظام</td>
                        <td><i class="far fa-calendar-alt"></i> 05/06/2023</td>
                        <td><span class="badge" style="background: rgba(67, 97, 238, 0.1); color: var(--primary-color);">عام</span></td>
                        <td>
                            <span><i class="far fa-comment"></i> 8</span> | 
                            <span><i class="far fa-heart"></i> 42</span>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm" onclick="showAnnouncementInTable(this)">عرض <i class="fas fa-eye"></i></button>
                        </td>
                    </tr>
                    <tr data-category="general" data-search="إجازة عيد الفطر عطلة رسمية">
                        <td>إجازة عيد الفطر</td>
                        <td><i class="far fa-calendar-alt"></i> 01/06/2023</td>
                        <td><span class="badge" style="background: rgba(67, 97, 238, 0.1); color: var(--primary-color);">عام</span></td>
                        <td>
                            <span><i class="far fa-comment"></i> 15</span> | 
                            <span><i class="far fa-heart"></i> 93</span>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm" onclick="showAnnouncementInTable(this)">عرض <i class="fas fa-eye"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <div class="pagination">
                <button disabled><i class="fas fa-chevron-right"></i></button>
                <button class="active">1</button>
                <button>2</button>
                <button>3</button>
                <button><i class="fas fa-chevron-left"></i></button>
            </div>
        </div>
    </div>

    <!-- نافذة عرض الإعلان -->
    <div class="modal-overlay" id="announcementModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modalAnnouncementTitle"></h3>
                <button class="modal-close" onclick="closeModal()">&times;</button>
            </div>
            
            <div class="announcement-details">
                <div class="announcement-priority" id="modalPriorityBar"></div>
                <div class="announcement-meta">
                    <div>
                        <span><i class="fas fa-calendar" style="margin-left: 5px;"></i> <span id="modalAnnouncementDate"></span></span>
                        <span style="margin-right: 15px;"><i class="fas fa-user" style="margin-left: 5px;"></i> <span id="modalAnnouncementAuthor">إدارة النظام</span></span>
                    </div>
                    <div>
                        <span class="badge" id="modalAnnouncementType"></span>
                    </div>
                </div>
                
                <div class="announcement-full-content" id="modalAnnouncementContent"></div>
                
                <div class="attachments" id="attachmentsSection">
                    <h4><i class="fas fa-paperclip"></i> المرفقات</h4>
                    <div class="attachment-list" id="attachmentList"></div>
                </div>
            </div>
            
            <div class="stats">
                <p><i class="fas fa-eye" style="margin-left: 5px;"></i> تمت المشاهدة <span id="modalViews">0</span> مرة</p>
                <p><i class="fas fa-share-alt" style="margin-left: 5px;"></i> تمت المشاركة <span id="modalShares">0</span> مرة</p>
                <p><i class="fas fa-download" style="margin-left: 5px;"></i> تم التحميل <span id="modalDownloads">0</span> مرة</p>
            </div>
            
            <div class="interaction-buttons">
                <button class="like-btn" id="likeButton" onclick="toggleLike()">
                    <i class="far fa-heart"></i> أعجبني (<span id="likeCount">0</span>)
                </button>
            </div>
            
            <div class="comments-section">
                <h4><i class="far fa-comments"></i> التعليقات (<span id="commentsCount">0</span>)</h4>
                
                <div class="comment-list" id="commentList">
                    <!-- سيتم إضافة التعليقات هنا ديناميكيًا -->
                </div>
                
                <form class="comment-form" onsubmit="addComment(event)">
                    <input type="text" class="comment-input" placeholder="أضف تعليقًا..." required>
                    <button type="submit" class="comment-submit">نشر</button>
                </form>
            </div>
            
            <div style="display: flex; gap: 10px; margin-top: 20px;">
                <button class="btn btn-primary" style="flex: 1;" onclick="closeModal()">
                    <i class="fas fa-check" style="margin-left: 8px;"></i> تمت القراءة
                </button>
                <button class="btn" style="flex: 1; background: #f8f9fa; color: var(--dark-color);" onclick="shareAnnouncement()">
                    <i class="fas fa-share" style="margin-left: 8px;"></i> مشاركة
                </button>
            </div>
        </div>
    </div>

    <script>
        // بيانات الإعلانات
        const announcements = [
            {
                id: 1,
                title: 'بدء الاختبارات النهائية',
                date: '15 يونيو 2023',
                type: 'مهم',
                author: 'إدارة النظام',
                content: 'سيبدأ موسم الاختبارات النهائية يوم 20 يونيو 2023، يرجى من جميع الطلاب مراجعة جدول الاختبارات والاستعداد الجيد.<br><br>سيتم عقد الاختبارات في القاعة الرئيسية بالمبنى التعليمي، مع الالتزام بالمواعيد المحددة لكل مادة. يرجى إحضار الأدوات اللازمة لكل اختبار.<br><br>ملاحظة: لن يسمح بدخول أي طالب بعد مرور 15 دقيقة من بدء الاختبار.',
                attachments: [
                    {name: 'جدول الاختبارات.pdf', type: 'pdf'},
                    {name: 'تعليمات الاختبارات.docx', type: 'doc'},
                    {name: 'خريطة القاعات.jpg', type: 'img'}
                ],
                views: 1245,
                shares: 34,
                downloads: 87,
                likes: 156,
                comments: 24,
                isLiked: false,
                commentsList: [
                    {
                        id: 1,
                        author: 'أحمد محمد',
                        avatar: 'أح',
                        date: 'منذ ساعتين',
                        text: 'شكرًا على المعلومات، هل يمكن الحصول على جدول الاختبارات قبل الموعد المحدد؟'
                    },
                    {
                        id: 2,
                        author: 'إدارة النظام',
                        avatar: 'إد',
                        date: 'منذ ساعة',
                        text: 'نعم سيتم نشر الجدول النهائي قبل أسبوع من بدء الاختبارات'
                    }
                ]
            },
            {
                id: 2,
                title: 'ورشة عمل في الرياضيات',
                date: '10 يونيو 2023',
                type: 'فعالية',
                author: 'قسم الرياضيات',
                content: 'يسرنا دعوتكم لحضور ورشة عمل في حل المسائل الرياضية المعقدة يوم 18 يونيو 2023 الساعة 10 صباحاً.<br><br>سيتناول ورشة العمل المواضيع التالية:<br>- حل المسائل المتقدمة في الجبر<br>- طرق حل مسائل التفاضل والتكامل<br>- استراتيجيات حل المسائل الهندسية المعقدة<br><br>سيقوم بالتدريب في الورشة الأستاذ الدكتور محمد عبد الرحمن، أستاذ الرياضيات بكلية العلوم.',
                attachments: [
                    {name: 'برنامج الورشة.pdf', type: 'pdf'},
                    {name: 'نماذج المسائل.docx', type: 'doc'}
                ],
                views: 876,
                shares: 21,
                downloads: 45,
                likes: 87,
                comments: 12,
                isLiked: false,
                commentsList: [
                    {
                        id: 1,
                        author: 'سارة عبد الله',
                        avatar: 'سا',
                        date: 'منذ 3 أيام',
                        text: 'هل الورشة متاحة لجميع المستويات الدراسية؟'
                    }
                ]
            },
            {
                id: 3,
                title: 'تحديثات النظام',
                date: '05 يونيو 2023',
                type: 'عام',
                author: 'فريق التطوير',
                content: 'تم تحديث النظام بإضافة الميزات التالية:<br><br>- إمكانية تحميل الواجبات مباشرة من النظام<br>- إضافة تقويم للاختبارات والمواعيد المهمة<br>- تحسين واجهة المستخدم لتكون أكثر سهولة<br><br>يرجى تحديث التطبيق لأحدث نسخة من متجر التطبيقات للاستفادة من هذه الميزات.',
                attachments: [
                    {name: 'دليل المستخدم الجديد.pdf', type: 'pdf'}
                ],
                views: 1532,
                shares: 56,
                downloads: 234,
                likes: 42,
                comments: 8,
                isLiked: false,
                commentsList: []
            },
            {
                id: 4,
                title: 'إجازة عيد الفطر',
                date: '01 يونيو 2023',
                type: 'عام',
                author: 'إدارة النظام',
                content: 'ستكون هناك إجازة رسمية بمناسبة عيد الفطر المبارك من 20 إلى 25 يونيو 2023.<br><br>سيتم تعليق جميع الأنشطة التعليمية خلال هذه الفترة، وسيتم استئناف الدراسة يوم الأحد الموافق 26 يونيو 2023.<br><br>كل عام وأنتم بخير، تقبل الله منا ومنكم صالح الأعمال.',
                attachments: [],
                views: 987,
                shares: 42,
                downloads: 12,
                likes: 93,
                comments: 15,
                isLiked: false,
                commentsList: [
                    {
                        id: 1,
                        author: 'خالد أحمد',
                        avatar: 'خا',
                        date: 'منذ 5 أيام',
                        text: 'كل عام وأنتم بخير، هل ستكون هناك فعاليات خاصة بالعيد؟'
                    },
                    {
                        id: 2,
                        author: 'نورا محمد',
                        avatar: 'نو',
                        date: 'منذ 4 أيام',
                        text: 'شكرًا على الإعلان، نتمنى لكم عيدًا سعيدًا'
                    }
                ]
            }
        ];

        // متغيرات حالة التطبيق
        let currentAnnouncementId = null;
        let currentUser = {
            name: 'محمد علي',
            avatar: 'مح'
        };

        // عرض نافذة الإعلان
        function showAnnouncement(title, date, type, content, attachments, isImportant = false) {
            const announcement = announcements.find(ann => ann.title === title);
            currentAnnouncementId = announcement ? announcement.id : null;
            
            document.getElementById('modalAnnouncementTitle').textContent = title;
            document.getElementById('modalAnnouncementDate').textContent = date;
            document.getElementById('modalAnnouncementContent').innerHTML = content;
            document.getElementById('modalAnnouncementAuthor').textContent = announcement?.author || 'إدارة النظام';
            
            // تحديث العداد
            if (announcement) {
                announcement.views++;
                document.getElementById('modalViews').textContent = announcement.views.toLocaleString();
                document.getElementById('modalShares').textContent = announcement.shares.toLocaleString();
                document.getElementById('modalDownloads').textContent = announcement.downloads.toLocaleString();
                document.getElementById('likeCount').textContent = announcement.likes.toLocaleString();
                document.getElementById('commentsCount').textContent = announcement.comments.toLocaleString();
                
                // تحديث حالة الإعجاب
                const likeButton = document.getElementById('likeButton');
                if (announcement.isLiked) {
                    likeButton.classList.add('liked');
                    likeButton.innerHTML = '<i class="fas fa-heart"></i> أعجبني (<span id="likeCount">' + announcement.likes + '</span>)';
                } else {
                    likeButton.classList.remove('liked');
                    likeButton.innerHTML = '<i class="far fa-heart"></i> أعجبني (<span id="likeCount">' + announcement.likes + '</span>)';
                }
                
                // عرض التعليقات
                renderComments(announcement.commentsList);
            }
            
            // تحديد لون البادج حسب النوع
            const typeBadge = document.getElementById('modalAnnouncementType');
            typeBadge.textContent = type;
            const priorityBar = document.getElementById('modalPriorityBar');
            
            if (type === 'مهم') {
                typeBadge.style.background = 'rgba(248, 150, 30, 0.1)';
                typeBadge.style.color = 'var(--warning-color)';
                priorityBar.style.background = 'var(--warning-color)';
            } else if (type === 'فعالية') {
                typeBadge.style.background = 'rgba(76, 201, 240, 0.1)';
                typeBadge.style.color = 'var(--success-color)';
                priorityBar.style.background = 'var(--success-color)';
            } else {
                typeBadge.style.background = 'rgba(67, 97, 238, 0.1)';
                typeBadge.style.color = 'var(--primary-color)';
                priorityBar.style.background = 'var(--primary-color)';
            }
            
            // عرض المرفقات إن وجدت
            const attachmentList = document.getElementById('attachmentList');
            attachmentList.innerHTML = '';
            
            if (attachments && attachments.length > 0) {
                attachments.forEach(attachment => {
                    const attachmentItem = document.createElement('div');
                    attachmentItem.className = `attachment-item ${attachment.type}`;
                    attachmentItem.innerHTML = `
                        <i class="fas fa-file-${attachment.type === 'img' ? 'image' : attachment.type}"></i>
                        <span>${attachment.name}</span>
                    `;
                    attachmentItem.onclick = function(e) {
                        e.stopPropagation();
                        alert(`سيتم تحميل الملف: ${attachment.name}`);
                        // هنا يمكن زيادة عداد التحميلات
                        if (announcement) {
                            announcement.downloads++;
                            document.getElementById('modalDownloads').textContent = announcement.downloads.toLocaleString();
                        }
                    };
                    attachmentList.appendChild(attachmentItem);
                });
                document.getElementById('attachmentsSection').style.display = 'block';
            } else {
                document.getElementById('attachmentsSection').style.display = 'none';
            }
            
            document.getElementById('announcementModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }
        
        // عرض التعليقات
        function renderComments(comments) {
            const commentList = document.getElementById('commentList');
            commentList.innerHTML = '';
            
            if (comments.length === 0) {
                commentList.innerHTML = '<p style="color: var(--gray-color); text-align: center;">لا توجد تعليقات بعد</p>';
                return;
            }
            
            comments.forEach(comment => {
                const commentItem = document.createElement('div');
                commentItem.className = 'comment-item';
                commentItem.innerHTML = `
                    <div class="comment-avatar">${comment.avatar}</div>
                    <div class="comment-content">
                        <div class="comment-header">
                            <span class="comment-author">${comment.author}</span>
                            <span class="comment-date">${comment.date}</span>
                        </div>
                        <p class="comment-text">${comment.text}</p>
                    </div>
                `;
                commentList.appendChild(commentItem);
            });
        }
        
        // إضافة تعليق جديد
        function addComment(event) {
            event.preventDefault();
            const input = event.target.querySelector('.comment-input');
            const commentText = input.value.trim();
            
            if (!commentText || !currentAnnouncementId) return;
            
            const announcement = announcements.find(ann => ann.id === currentAnnouncementId);
            if (!announcement) return;
            
            const newComment = {
                id: announcement.commentsList.length + 1,
                author: currentUser.name,
                avatar: currentUser.avatar,
                date: 'الآن',
                text: commentText
            };
            
            announcement.commentsList.unshift(newComment);
            announcement.comments++;
            
            // تحديث العرض
            renderComments(announcement.commentsList);
            document.getElementById('commentsCount').textContent = announcement.comments.toLocaleString();
            
            // إفراغ حقل الإدخال
            input.value = '';
            
            // يمكن هنا إضافة كود لإرسال التعليق إلى الخادم
        }
        
        // تبديل حالة الإعجاب
        function toggleLike() {
            if (!currentAnnouncementId) return;
            
            const announcement = announcements.find(ann => ann.id === currentAnnouncementId);
            if (!announcement) return;
            
            const likeButton = document.getElementById('likeButton');
            
            if (announcement.isLiked) {
                announcement.likes--;
                announcement.isLiked = false;
                likeButton.classList.remove('liked');
                likeButton.innerHTML = '<i class="far fa-heart"></i> أعجبني (<span id="likeCount">' + announcement.likes + '</span>)';
            } else {
                announcement.likes++;
                announcement.isLiked = true;
                likeButton.classList.add('liked');
                likeButton.innerHTML = '<i class="fas fa-heart"></i> أعجبني (<span id="likeCount">' + announcement.likes + '</span>)';
            }
            
            // يمكن هنا إضافة كود لتحديث الإعجاب في الخادم
        }
        
        // عرض الإعلان من الجدول
        function showAnnouncementInTable(button) {
            const row = button.closest('tr');
            const title = row.cells[0].textContent;
            const announcement = announcements.find(ann => ann.title === title);
            
            if (announcement) {
                showAnnouncement(
                    announcement.title,
                    announcement.date,
                    announcement.type,
                    announcement.content,
                    announcement.attachments,
                    announcement.type === 'مهم'
                );
            }
        }
        
        // تصفية الإعلانات حسب البحث والفئة
        function filterAnnouncements() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const filter = document.getElementById('categoryFilter').value;
            const table = document.getElementById('announcementsTable');
            const tr = table.getElementsByTagName('tr');
            
            for (let i = 1; i < tr.length; i++) {
                const td = tr[i].cells[0];
                const category = tr[i].getAttribute('data-category');
                const searchText = tr[i].getAttribute('data-search');
                
                if (td) {
                    const txtValue = searchText || td.textContent || td.innerText;
                    const shouldShow = 
                        (txtValue.toLowerCase().includes(input)) && 
                        (filter === '' || category === filter);
                    
                    tr[i].style.display = shouldShow ? '' : 'none';
                }
            }
        }
        
        // مشاركة الإعلان
        function shareAnnouncement() {
            const title = document.getElementById('modalAnnouncementTitle').textContent;
            const announcement = announcements.find(ann => ann.id === currentAnnouncementId);
            
            if (announcement) {
                announcement.shares++;
                document.getElementById('modalShares').textContent = announcement.shares.toLocaleString();
            }
            
            alert(`سيتم مشاركة الإعلان: "${title}"\n\nهنا يمكن إضافة خيارات المشاركة عبر المنصات المختلفة`);
            // يمكن استبدال هذا بكواد مشاركة فعلية
        }
        
        // إغلاق النافذة
        function closeModal() {
            document.getElementById('announcementModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }
        
        // إغلاق النافذة عند النقر خارجها
        document.addEventListener('click', function(e) {
            if (e.target === document.getElementById('announcementModal')) {
                closeModal();
            }
        });
    </script>
</body>
</html>