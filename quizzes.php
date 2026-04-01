<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مركز الاختبارات | الحقيبة التعليمية</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        /* تنسيق شريط التقدم */
        .progress-section {
            background: #fff;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            text-align: center;
        }
        .progress-container {
            background: #e0e0e0;
            border-radius: 20px;
            height: 20px;
            width: 100%;
            margin-top: 10px;
            overflow: hidden;
        }
        .progress-bar {
            background: linear-gradient(90deg, #27ae60, #2ecc71);
            height: 100%;
            width: 0%; /* البداية من صفر ويتم تحديثها بالجافاسكريبت */
            transition: width 1s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* نظام القفل */
        .quiz-card.locked {
            opacity: 0.6;
            filter: grayscale(0.8);
            position: relative;
        }
        
        .quiz-card.locked .download-btn {
            background: #95a5a6 !important;
            pointer-events: none; /* يمنع الضغط على الزرار وهو مقفول */
            cursor: not-allowed;
        }

        .quiz-card.locked::after {
            content: "🔒 يجب إكمال الاختبار السابق";
            position: absolute;
            top: 15px;
            left: 15px;
            background: rgba(0,0,0,0.7);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            z-index: 2;
        }

        .unit-tag {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .u1-tag { background: #e3f2fd; color: #1a73e8; }
        .u2-tag { background: #e8f5e9; color: #27ae60; }

        .final-challenge {
            background: #2c3e50 !important;
            color: white !important;
            grid-column: 1 / -1;
            margin-top: 30px;
            border: 2px solid #f1c40f;
        }
        
        /* تحسينات للشاشات الصغيرة */
        @media (max-width: 768px) {
            .final-challenge { grid-column: auto; }
        }
    </style>
</head>
<body> 
    <?php include 'header.php'; ?>

    <main class="container" data-aos="fade-up">
        <div class="progress-section">
            <h3>📊 مستوى إنجازك في المنهج</h3>
            <div class="progress-container">
                <div class="progress-bar" id="mainProgress"></div>
            </div>
            <p id="progressText" style="margin-top: 10px; font-size: 0.9rem; color: #666;">أكمل الاختبارات لفتح التحدي النهائي</p>
        </div>

        <div class="downloads-grid">
            
            <div class="download-card quiz-card" id="q1">
                <span class="unit-tag u1-tag">الوحدة الأولى</span>
                <div class="file-icon">🫁</div>
                <div class="file-info">
                    <h3>اختبار: الجهاز التنفسي</h3>
                    <p>ابدأ رحلتك التعليمية من هنا</p>
                </div>
                <a href="quiz1.php" class="download-btn">ابدأ الاختبار</a>
            </div>

            <div class="download-card quiz-card locked" id="q2">
                <span class="unit-tag u1-tag">الوحدة الأولى</span>
                <div class="file-icon">❤️</div>
                <div class="file-info">
                    <h3>اختبار: الجهاز الدوري</h3>
                    <p>يفتح بعد النجاح في اختبار التنفس</p>
                </div>
                <a href="quiz2.php" class="download-btn">ابدأ الاختبار</a>
            </div>

            <div class="download-card quiz-card locked" id="q3">
                <span class="unit-tag u1-tag">الوحدة الأولى</span>
                <div class="file-icon">🩸</div>
                <div class="file-info">
                    <h3>اختبار: الدم ومكوناته</h3>
                    <p>يفتح بعد النجاح في اختبار الدوري</p>
                </div>
                <a href="quiz3.php" class="download-btn">ابدأ الاختبار</a>
            </div>

            <div class="download-card quiz-card locked" id="q4">
                <span class="unit-tag u2-tag">الوحدة الثانية</span>
                <div class="file-icon">🍔</div>
                <div class="file-info">
                    <h3>اختبار: الجهاز الهضمي</h3>
                    <p>يفتح بعد إنهاء دروس الوحدة الأولى</p>
                </div>
                <a href="quiz4.php" class="download-btn">ابدأ الاختبار</a>
            </div>

            <div class="download-card quiz-card locked" id="q5">
                <span class="unit-tag u2-tag">الوحدة الثانية</span>
                <div class="file-icon">🥗</div>
                <div class="file-info">
                    <h3>اختبار: الغذاء الصحي</h3>
                    <p>يفتح بعد النجاح في اختبار الهضم</p>
                </div>
                <a href="quiz5.php" class="download-btn">ابدأ الاختبار</a>
            </div>

            <div class="download-card quiz-card locked final-challenge" id="q6">
                <div class="file-icon">🏆</div>
                <div class="file-info">
                    <h3>الاختبار الشامل (المنهج كاملاً)</h3>
                    <p>تحدي الوحش النهائي لجميع الدروس</p>
                </div>
                <a href="quiz-final.php" class="download-btn" style="background:#f1c40f; color:#000;">بدء التحدي الكبير</a>
            </div>

        </div>
    </main>

<script>
function checkProgress() {
    fetch('get_progress.php')
    .then(response => response.json())
    .then(data => {
        // نأخذ عدد الاختبارات المكتملة من السيرفر
        let completedCount = parseInt(data.completed_count) || 0;
        
        // 1. تحديث شريط التقدم (بفرض أن هناك 6 اختبارات إجمالاً)
        const totalQuizzes = 6;
        let progressPercent = (completedCount / totalQuizzes) * 100;
        document.getElementById('mainProgress').style.width = progressPercent + '%';
        
        if(completedCount === totalQuizzes) {
            document.getElementById('progressText').innerHTML = "✨ تهانينا يا بطل! لقد أتممت جميع الاختبارات بنجاح.";
        }

        // 2. فتح الاختبارات التالية
        // القاعدة: إذا نجح في (1) يفتح (2)، نجح في (2) يفتح (3)... وهكذا
        for (let i = 2; i <= totalQuizzes; i++) {
            let qBox = document.getElementById('q' + i);
            if (qBox && completedCount >= (i - 1)) {
                qBox.classList.remove('locked');
                // تغيير نص الوصف عند الفتح (اختياري)
                let pTag = qBox.querySelector('.file-info p');
                if(pTag) pTag.innerText = "هذا الاختبار متاح الآن، بالتوفيق!";
            }
        }
    })
    .catch(err => console.error('خطأ في جلب البيانات:', err));
}

// تشغيل الفحص فور تحميل الصفحة
document.addEventListener('DOMContentLoaded', checkProgress);

// تشغيل AOS للأنيميشن
if (typeof AOS !== 'undefined') {
    AOS.init({
        duration: 800,
        once: true
    });
}
</script>

<script src="script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>
</html>
