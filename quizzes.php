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
            background: var(--bg-card);
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
            width: 0%; 
            transition: width 0.6s ease;
        }

        /* نظام القفل */
        .quiz-card.locked {
            opacity: 0.5;
            filter: grayscale(1);
            pointer-events: none;
            position: relative;
        }
        .quiz-card.locked::after {
            content: "🔒 مغلق";
            position: absolute;
            top: 10px;
            left: 10px;
            background: #555;
            color: white;
            padding: 4px 10px;
            border-radius: 5px;
            font-size: 0.8rem;
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
    </style>
</head>
<body> 
    <?php include 'header.php'; ?>

    <main class="container" data-aos="fade-up">
        <div class="progress-section">
            <h3>📊 مستوى إنجازك في الاختبارات</h3>
            <div class="progress-container">
                <div class="progress-bar" id="mainProgress"></div>
            </div>
            <p style="margin-top: 10px; font-size: 0.9rem; color: #666;">أكمل 6 اختبارات لفتح التحدي النهائي</p>
        </div>

        <div class="downloads-grid">
            
            <div class="download-card quiz-card" id="q1">
                <span class="unit-tag u1-tag">الوحدة الأولى</span>
                <div class="file-icon">🫁</div>
                <div class="file-info">
                    <h3>الجهاز التنفسي</h3>
                    <p>اختبر معلوماتك في الدرس الأول</p>
                </div>
                <a href="quiz1.php" class="download-btn">ابدأ الاختبار</a>
            </div>

            <div class="download-card quiz-card locked" id="q2">
                <span class="unit-tag u1-tag">الوحدة الأولى</span>
                <div class="file-icon">❤️</div>
                <div class="file-info">
                    <h3>الجهاز الدوري</h3>
                    <p>يفتح بعد إنهاء الدرس الأول</p>
                </div>
                <a href="quiz2.php" class="download-btn">ابدأ الاختبار</a>
            </div>

            <div class="download-card quiz-card locked" id="q3">
                <span class="unit-tag u1-tag">الوحدة الأولى</span>
                <div class="file-icon">🩸</div>
                <div class="file-info">
                    <h3>الدم ومكوناته</h3>
                    <p>يفتح بعد إنهاء الدرس الثاني</p>
                </div>
                <a href="quiz3.php" class="download-btn">ابدأ الاختبار</a>
            </div>

            <div class="download-card quiz-card locked" id="q4">
                <span class="unit-tag u2-tag">الوحدة الثانية</span>
                <div class="file-icon">🍔</div>
                <div class="file-info">
                    <h3>الجهاز الهضمي</h3>
                    <p>يفتح بعد إنهاء الوحدة الأولى</p>
                </div>
                <a href="quiz4.php" class="download-btn">ابدأ الاختبار</a>
            </div>

            <div class="download-card quiz-card locked" id="q5">
                <span class="unit-tag u2-tag">الوحدة الثانية</span>
                <div class="file-icon">🥗</div>
                <div class="file-info">
                    <h3>الغذاء الصحي</h3>
                    <p>يفتح بعد إنهاء درس الهضم</p>
                </div>
                <a href="quiz5.php" class="download-btn">ابدأ الاختبار</a>
            </div>

            <div class="download-card quiz-card locked" id="q6">
                <span class="unit-tag u2-tag">الوحدة الثانية</span>
                <div class="file-icon">🧠</div>
                <div class="file-info">
                    <h3>الجهاز العصبي</h3>
                    <p>يفتح بعد إنهاء درس الغذاء الصحي</p>
                </div>
                <a href="quiz6.php" class="download-btn">ابدأ الاختبار</a>
            </div>

            <div class="download-card quiz-card locked final-challenge" id="qFinal">
                <div class="file-icon">🏆</div>
                <div class="file-info">
                    <h3>الاختبار الشامل (المنهج كاملاً)</h3>
                    <p>تحدي الوحش النهائي لجميع دروس المنهج</p>
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
            let completed = parseInt(data.completed_count);
            // الآن الإجمالي 7 (6 دروس + 1 نهائي) لكننا نحسب النسبة على الدروس الـ 6 الأساسية لفتح النهائي
            let progress = (completed / 6) * 100;
            
            if(document.getElementById('mainProgress')) {
                document.getElementById('mainProgress').style.width = Math.min(progress, 100) + '%';
            }

            // فتح الاختبارات المتتالية (من 2 إلى 6)
            for (let i = 2; i <= 6; i++) {
                let qBox = document.getElementById('q' + i);
                if (qBox && completed >= i - 1) {
                    qBox.classList.remove('locked');
                    // تحديث النص إذا فتح
                    const p = qBox.querySelector('p');
                    if(p.innerText.includes("يفتح بعد")) p.innerText = "الاختبار متاح الآن!";
                }
            }
            
            // فتح التحدي النهائي إذا أكمل 6 اختبارات بنجاح
            if (completed >= 6) {
                let qFinal = document.getElementById('qFinal');
                if(qFinal) qFinal.classList.remove('locked');
            }
        });
    }

    window.onload = checkProgress;
</script>
<script src="script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 800, once: true });
</script>
</body>
</html>