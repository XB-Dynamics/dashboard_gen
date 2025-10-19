<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الملف الشخصي</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
</head>
<body>
    <div class="profile-container">
        <h1 class="page-title"><i class="fas fa-user-circle"></i> الملف الشخصي</h1>
        
        <!-- بطاقة الملف الشخصي -->
        <div class="profile-card">
            <div class="profile-img-container">
                <img src="https://via.placeholder.com/120" alt="صورة المستخدم" class="profile-img" id="profileImage">
                <button class="edit-img-btn" id="editImageBtn">
                    <i class="fas fa-pen"></i>
                </button>
                <input type="file" id="imageUpload" accept="image/*" style="display: none;">
            </div>
            <div class="profile-info">
                <h2 id="fullNameDisplay">أحمد محمد</h2>
                <p id="academicLevelDisplay">طالب - الصف الثالث الثانوي</p>
                <p><i class="fas fa-envelope" style="margin-left: 5px;"></i> <span id="emailDisplay">ahmed@example.com</span></p>
                <span class="badge">عضو منذ يونيو 2022</span>
            </div>
        </div>

        <!-- قسم المعلومات الشخصية -->
        <div class="content-section">
            <div class="section-header">
                <h3><i class="fas fa-info-circle"></i> المعلومات الشخصية</h3>
            </div>
            
            <div class="form-group">
                <label>الاسم الكامل</label>
                <input type="text" class="form-control" id="fullNameInput" value="أحمد محمد" readonly>
                <button class="edit-field-btn" data-field="fullNameInput">
                    <i class="fas fa-pen"></i>
                </button>
            </div>
            
            <div class="form-group">
                <label>تاريخ الميلاد</label>
                <input type="date" class="form-control" id="birthDateInput" value="2005-03-15" readonly>
                <button class="edit-field-btn" data-field="birthDateInput">
                    <i class="fas fa-pen"></i>
                </button>
            </div>
            
            <div class="form-group">
                <label>الجنس</label>
                <select class="form-control" id="genderInput" disabled>
                    <option value="male" selected>ذكر</option>
                    <option value="female">أنثى</option>
                </select>
                <button class="edit-field-btn" data-field="genderInput">
                    <i class="fas fa-pen"></i>
                </button>
            </div>
            
            <div class="form-group">
                <label>المدينة</label>
                <input type="text" class="form-control" id="cityInput" value="القاهرة" readonly>
                <button class="edit-field-btn" data-field="cityInput">
                    <i class="fas fa-pen"></i>
                </button>
            </div>
            
            <div class="save-btn-container" id="personalSaveContainer" style="display: none;">
                <button class="btn btn-primary" id="savePersonalInfoBtn">
                    <i class="fas fa-save"></i> حفظ التغييرات
                </button>
            </div>
        </div>

        <!-- قسم معلومات ولي الأمر -->
        <div class="content-section">
            <div class="section-header">
                <h3><i class="fas fa-user-shield"></i> معلومات ولي الأمر</h3>
            </div>

            <div class="warning-message">
                <i class="fas fa-exclamation-triangle"></i>
                <span>الرجاء التأكد من صحة معلومات ولي الأمر لأنها ستستخدم في حالات الطوارئ</span>
            </div>
            
            <div class="form-group">
                <label>اسم ولي الأمر</label>
                <input type="text" class="form-control" id="guardianNameInput" value="محمد أحمد" readonly>
                <button class="edit-field-btn" data-field="guardianNameInput">
                    <i class="fas fa-pen"></i>
                </button>
            </div>
            
            <div class="form-group">
                <label>رقم هاتف ولي الأمر</label>
                <input type="tel" class="form-control" id="guardianPhoneInput" value="+20123456780" readonly>
                <button class="edit-field-btn" data-field="guardianPhoneInput">
                    <i class="fas fa-pen"></i>
                </button>
            </div>
            
            <div class="save-btn-container" id="guardianSaveContainer" style="display: none;">
                <button class="btn btn-primary" id="saveGuardianInfoBtn">
                    <i class="fas fa-save"></i> حفظ التغييرات
                </button>
            </div>
        </div>

        <!-- قسم المعلومات الأكاديمية -->
        <div class="content-section">
            <div class="section-header">
                <h3><i class="fas fa-graduation-cap"></i> المعلومات الأكاديمية</h3>
            </div>
            
            <div class="form-group">
                <label>المستوى الأكاديمي</label>
                <select class="form-control" id="academicLevelInput" disabled>
                    <option value="grade1">الصف الأول الثانوي</option>
                    <option value="grade2">الصف الثاني الثانوي</option>
                    <option value="grade3" selected>الصف الثالث الثانوي</option>
                </select>
                <button class="edit-field-btn" data-field="academicLevelInput">
                    <i class="fas fa-pen"></i>
                </button>
            </div>
            
            <div class="form-group">
                <label>المدرسة</label>
                <input type="text" class="form-control" id="schoolInput" value="مدرسة النخبة الثانوية" readonly>
                <button class="edit-field-btn" data-field="schoolInput">
                    <i class="fas fa-pen"></i>
                </button>
            </div>
            
            <div class="form-group">
                <label>التخصص</label>
                <select class="form-control" id="specializationInput" disabled>
                    <option value="scientific">علمي علوم</option>
                    <option value="math" selected>علمي رياضة</option>
                    <option value="literary">أدبي</option>
                </select>
                <button class="edit-field-btn" data-field="specializationInput">
                    <i class="fas fa-pen"></i>
                </button>
            </div>
            
            <div class="save-btn-container" id="academicSaveContainer" style="display: none;">
                <button class="btn btn-primary" id="saveAcademicInfoBtn">
                    <i class="fas fa-save"></i> حفظ التغييرات
                </button>
            </div>
        </div>

        <!-- قسم معلومات الاتصال -->
        <div class="content-section">
            <div class="section-header">
                <h3><i class="fas fa-phone-alt"></i> معلومات الاتصال</h3>
            </div>
            
            <div class="form-group">
                <label>البريد الإلكتروني</label>
                <input type="email" class="form-control" id="emailInput" value="ahmed@example.com" readonly>
                <button class="edit-field-btn" data-field="emailInput">
                    <i class="fas fa-pen"></i>
                </button>
            </div>
            
            <div class="form-group">
                <label>رقم الهاتف</label>
                <input type="tel" class="form-control" id="phoneInput" value="+20123456789" readonly>
                <button class="edit-field-btn" data-field="phoneInput">
                    <i class="fas fa-pen"></i>
                </button>
            </div>
            
            <div class="save-btn-container" id="contactSaveContainer" style="display: none;">
                <button class="btn btn-primary" id="saveContactInfoBtn">
                    <i class="fas fa-save"></i> حفظ التغييرات
                </button>
            </div>
        </div>

        <!-- قسم تغيير كلمة المرور -->
        <div class="content-section">
            <div class="section-header">
                <h3><i class="fas fa-lock"></i> تغيير كلمة المرور</h3>
            </div>
            
            <div class="form-group">
                <label>كلمة المرور الحالية</label>
                <input type="password" class="form-control" id="currentPassword" placeholder="أدخل كلمة المرور الحالية">
            </div>
            
            <div class="form-group">
                <label>كلمة المرور الجديدة</label>
                <input type="password" class="form-control" id="newPassword" placeholder="أدخل كلمة المرور الجديدة">
            </div>
            
            <div class="form-group">
                <label>تأكيد كلمة المرور الجديدة</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="أعد إدخال كلمة المرور الجديدة">
            </div>
            
            <div class="save-btn-container">
                <button class="btn btn-success" id="changePasswordBtn">
                    <i class="fas fa-save"></i> تغيير كلمة المرور
                </button>
            </div>
        </div>
    </div>

    <script>
        // تفعيل حقول التعديل عند النقر على أيقونة القلم
        document.querySelectorAll('.edit-field-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const fieldId = this.getAttribute('data-field');
                const inputField = document.getElementById(fieldId);
                
                // تحديد القسم الذي ينتمي إليه الحقل
                let sectionContainer;
                if (fieldId.includes('fullName') || fieldId.includes('birthDate') || 
                    fieldId.includes('gender') || fieldId.includes('city')) {
                    sectionContainer = document.getElementById('personalSaveContainer');
                } else if (fieldId.includes('academicLevel') || fieldId.includes('school') || 
                           fieldId.includes('specialization')) {
                    sectionContainer = document.getElementById('academicSaveContainer');
                } else if (fieldId.includes('email') || fieldId.includes('phone')) {
                    sectionContainer = document.getElementById('contactSaveContainer');
                } else if (fieldId.includes('guardian')) {
                    sectionContainer = document.getElementById('guardianSaveContainer');
                }
                
                if (inputField.readOnly || inputField.disabled) {
                    // تفعيل الحقل للتحرير
                    inputField.readOnly = false;
                    inputField.disabled = false;
                    inputField.focus();
                    inputField.style.backgroundColor = 'white';
                    
                    // إظهار زر الحفظ للقسم
                    if (sectionContainer) sectionContainer.style.display = 'flex';
                    
                    // تغيير شكل أيقونة القلم
                    this.innerHTML = '<i class="fas fa-check"></i>';
                    this.style.backgroundColor = 'var(--primary-color)';
                    this.style.color = 'white';
                } else {
                    // تعطيل الحقل بعد التحرير
                    inputField.readOnly = true;
                    inputField.disabled = inputField.tagName === 'SELECT';
                    inputField.style.backgroundColor = '#f8fafc';
                    
                    // إخفاء زر الحفظ إذا لم يكن هناك حقول قابلة للتحرير في القسم
                    if (sectionContainer) {
                        const hasActiveFields = Array.from(document.querySelectorAll(`#${sectionContainer.id.replace('SaveContainer', '')} input, #${sectionContainer.id.replace('SaveContainer', '')} select`))
                            .some(field => !field.readOnly && !field.disabled);
                        if (!hasActiveFields) sectionContainer.style.display = 'none';
                    }
                    
                    // إعادة أيقونة القلم
                    this.innerHTML = '<i class="fas fa-pen"></i>';
                    this.style.backgroundColor = 'transparent';
                    this.style.color = 'var(--gray-color)';
                    
                    // تحديث العرض إذا كان حقل الاسم أو المستوى الأكاديمي
                    if (fieldId === 'fullNameInput') {
                        document.getElementById('fullNameDisplay').textContent = inputField.value;
                    } else if (fieldId === 'academicLevelInput') {
                        const levelText = inputField.options[inputField.selectedIndex].text;
                        document.getElementById('academicLevelDisplay').textContent = `طالب - ${levelText}`;
                    } else if (fieldId === 'emailInput') {
                        document.getElementById('emailDisplay').textContent = inputField.value;
                    }
                }
            });
        });

        // زر حفظ المعلومات الشخصية
        document.getElementById('savePersonalInfoBtn').addEventListener('click', function() {
            // هنا يمكنك إضافة كود لحفظ البيانات في قاعدة البيانات
            alert('تم حفظ المعلومات الشخصية بنجاح');
            
            // تعطيل جميع الحقول وإخفاء زر الحفظ
            document.querySelectorAll('#fullNameInput, #birthDateInput, #genderInput, #cityInput').forEach(field => {
                field.readOnly = true;
                if (field.tagName === 'SELECT') field.disabled = true;
                field.style.backgroundColor = '#f8fafc';
            });
            
            document.querySelectorAll('[data-field="fullNameInput"], [data-field="birthDateInput"], [data-field="genderInput"], [data-field="cityInput"]').forEach(btn => {
                btn.innerHTML = '<i class="fas fa-pen"></i>';
                btn.style.backgroundColor = 'transparent';
                btn.style.color = 'var(--gray-color)';
            });
            
            document.getElementById('personalSaveContainer').style.display = 'none';
            
            // تحديث الاسم المعروض
            document.getElementById('fullNameDisplay').textContent = document.getElementById('fullNameInput').value;
        });

        // زر حفظ معلومات ولي الأمر
        document.getElementById('saveGuardianInfoBtn').addEventListener('click', function() {
            // هنا يمكنك إضافة كود لحفظ البيانات في قاعدة البيانات
            alert('تم حفظ معلومات ولي الأمر بنجاح');
            
            // تعطيل جميع الحقول وإخفاء زر الحفظ
            document.querySelectorAll('#guardianNameInput, #guardianPhoneInput').forEach(field => {
                field.readOnly = true;
                field.style.backgroundColor = '#f8fafc';
            });
            
            document.querySelectorAll('[data-field="guardianNameInput"], [data-field="guardianPhoneInput"]').forEach(btn => {
                btn.innerHTML = '<i class="fas fa-pen"></i>';
                btn.style.backgroundColor = 'transparent';
                btn.style.color = 'var(--gray-color)';
            });
            
            document.getElementById('guardianSaveContainer').style.display = 'none';
        });

        // زر حفظ المعلومات الأكاديمية
        document.getElementById('saveAcademicInfoBtn').addEventListener('click', function() {
            // هنا يمكنك إضافة كود لحفظ البيانات في قاعدة البيانات
            alert('تم حفظ المعلومات الأكاديمية بنجاح');
            
            // تعطيل جميع الحقول وإخفاء زر الحفظ
            document.querySelectorAll('#academicLevelInput, #schoolInput, #specializationInput').forEach(field => {
                field.readOnly = true;
                if (field.tagName === 'SELECT') field.disabled = true;
                field.style.backgroundColor = '#f8fafc';
            });
            
            document.querySelectorAll('[data-field="academicLevelInput"], [data-field="schoolInput"], [data-field="specializationInput"]').forEach(btn => {
                btn.innerHTML = '<i class="fas fa-pen"></i>';
                btn.style.backgroundColor = 'transparent';
                btn.style.color = 'var(--gray-color)';
            });
            
            document.getElementById('academicSaveContainer').style.display = 'none';
            
            // تحديث المستوى الأكاديمي المعروض
            const levelText = document.getElementById('academicLevelInput').options[document.getElementById('academicLevelInput').selectedIndex].text;
            document.getElementById('academicLevelDisplay').textContent = `طالب - ${levelText}`;
        });

        // زر حفظ معلومات الاتصال
        document.getElementById('saveContactInfoBtn').addEventListener('click', function() {
            // هنا يمكنك إضافة كود لحفظ البيانات في قاعدة البيانات
            alert('تم حفظ معلومات الاتصال بنجاح');
            
            // تعطيل جميع الحقول وإخفاء زر الحفظ
            document.querySelectorAll('#emailInput, #phoneInput').forEach(field => {
                field.readOnly = true;
                field.style.backgroundColor = '#f8fafc';
            });
            
            document.querySelectorAll('[data-field="emailInput"], [data-field="phoneInput"]').forEach(btn => {
                btn.innerHTML = '<i class="fas fa-pen"></i>';
                btn.style.backgroundColor = 'transparent';
                btn.style.color = 'var(--gray-color)';
            });
            
            document.getElementById('contactSaveContainer').style.display = 'none';
            
            // تحديث البريد الإلكتروني المعروض
            document.getElementById('emailDisplay').textContent = document.getElementById('emailInput').value;
        });

        // تغيير صورة الملف الشخصي
        document.getElementById('editImageBtn').addEventListener('click', function() {
            document.getElementById('imageUpload').click();
        });

        document.getElementById('imageUpload').addEventListener('change', function(e) {
            if (e.target.files && e.target.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(event) {
                    document.getElementById('profileImage').src = event.target.result;
                    // هنا يمكنك إضافة كود لحفظ الصورة في قاعدة البيانات
                    alert('تم تغيير صورة الملف الشخصي بنجاح');
                };
                
                reader.readAsDataURL(e.target.files[0]);
            }
        });

        // تغيير كلمة المرور
        document.getElementById('changePasswordBtn').addEventListener('click', function() {
            const currentPass = document.getElementById('currentPassword').value;
            const newPass = document.getElementById('newPassword').value;
            const confirmPass = document.getElementById('confirmPassword').value;
            
            if (!currentPass || !newPass || !confirmPass) {
                alert('الرجاء ملء جميع الحقول');
                return;
            }
            
            if (newPass !== confirmPass) {
                alert('كلمة المرور الجديدة غير متطابقة');
                return;
            }
            
            // هنا يمكنك إضافة كود لتغيير كلمة المرور في قاعدة البيانات
            alert('تم تغيير كلمة المرور بنجاح');
            
            // مسح الحقول
            document.getElementById('currentPassword').value = '';
            document.getElementById('newPassword').value = '';
            document.getElementById('confirmPassword').value = '';
        });
    </script>
</body>
</html>