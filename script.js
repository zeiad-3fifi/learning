const toggleBtn = document.getElementById('darkModeToggle');
const body = document.body;

// 1. عند تحميل الصفحة: تحقق فوراً من الحالة المحفوظة وتطبيقها
const savedTheme = localStorage.getItem('theme');
if (savedTheme === 'dark') {
    body.classList.add('dark-mode');
    if (toggleBtn) {
        // إذا كان زرار عادي غير الأيقونة لشمس، وإذا كان Checkbox اجعله Checked
        if (toggleBtn.type === 'checkbox') {
            toggleBtn.checked = true;
        } else {
            toggleBtn.innerText = '☀️';
        }
    }
}

// 2. وظيفة الزرار: التغيير + الحفظ
if (toggleBtn) {
    toggleBtn.addEventListener('click', () => {
        body.classList.toggle('dark-mode');
        
        // التحقق بعد التغيير: هل الجسم يحتوي الآن على dark-mode؟
        if (body.classList.contains('dark-mode')) {
            localStorage.setItem('theme', 'dark'); // حفظ الحالة
            if (toggleBtn.type !== 'checkbox') toggleBtn.innerText = '☀️';
        } else {
            localStorage.setItem('theme', 'light'); // حفظ الحالة
            if (toggleBtn.type !== 'checkbox') toggleBtn.innerText = '🌙';
        }
    });
}

// 3. تحديث البيانات عند تحميل الصفحة (الاسم والتقدم)
window.addEventListener('load', () => {
    // تحديث نسبة التقدم
    const completed = parseInt(localStorage.getItem('quizCompleted') || 0);
    const progressPercent = Math.round((completed / 6) * 100);
    
    const progressFill = document.getElementById('overallProgress');
    if(progressFill) {
        progressFill.style.width = progressPercent + '%';
        progressFill.innerText = progressPercent + '%';
    }

    // عرض اسم الطالب
    const nameDisplay = document.getElementById('userNameDisplay');
    const savedName = localStorage.getItem('studentName');
    if(savedName && nameDisplay) {
        nameDisplay.innerText = savedName;
    }
});
