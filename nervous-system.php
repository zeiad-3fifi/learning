<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درس الجهاز العصبي | الحقيبة التعليمية</title>
    
    <link rel="stylesheet" href="style.css?v=1.2">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* التنسيقات المخصصة التي أرسلتها */
        .lesson-header {
            background: linear-gradient(135deg, #4a148c, #7b1fa2) !important; /* لون بنفسجي يناسب الجهاز العصبي */
            padding: 60px 0;
            text-align: center;
            color: white;
            border-radius: 0 0 50px 50px;
            margin-bottom: 40px;
        }

        .internal-tabs {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 30px;
            background: var(--bg-card);
            padding: 10px;
            border-radius: 50px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        .tab-btn {
            border: none;
            padding: 12px 25px;
            border-radius: 50px;
            background: transparent;
            color: var(--text-main);
            font-family: 'Tajawal', sans-serif;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .tab-btn.active {
            background: #7b1fa2;
            color: white;
        }

        .tab-pane { display: none; }
        .tab-pane.active { display: block; animation: fadeIn 0.5s ease; }

        .lesson-card {
            background: var(--bg-card);
            color: var(--text-main);
            padding: 30px;
            border-radius: 24px;
            margin-bottom: 25px;
            border: 1px solid rgba(128, 128, 128, 0.1);
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }

        .equation-box {
            background: rgba(123, 31, 162, 0.05);
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            margin: 20px 0;
            border-right: 5px solid #7b1fa2;
        }

        .anatomy-list {
            list-style: none;
            padding: 0;
        }

        .anatomy-list li {
            padding: 15px;
            background: rgba(128, 128, 128, 0.03);
            margin-bottom: 10px;
            border-radius: 12px;
            border-right: 4px solid #7b1fa2;
        }

        .table-wrapper { overflow-x: auto; margin-top: 20px; }
        .nervous-table { width: 100%; border-collapse: collapse; min-width: 500px; }
        .nervous-table th { background: #7b1fa2; color: white; padding: 15px; }
        .nervous-table td { padding: 15px; border-bottom: 1px solid rgba(128, 128, 128, 0.1); text-align: center; }

        .image-slider { position: relative; border-radius: 20px; overflow: hidden; background: #000; margin-top: 20px; }
        .slide { display: none; text-align: center; }
        .slide.active { display: block; }
        .slide img { width: 100%; max-height: 450px; object-fit: contain; }
        .caption { background: rgba(0,0,0,0.7); color: white; padding: 10px; position: absolute; bottom: 0; width: 100%; }
        
        .prev, .next {
            position: absolute; top: 50%; transform: translateY(-50%);
            background: rgba(255,255,255,0.3); color: white; border: none;
            padding: 15px; cursor: pointer; border-radius: 50%; transition: 0.3s;
        }
        .prev:hover, .next:hover { background: #7b1fa2; }
        .prev { right: 10px; } .next { left: 10px; }

        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body> 
    <?php include 'header.php'; ?>

    <header class="lesson-header" data-aos="fade-down">
        <div class="container">
            <h1>🧠 الجهاز العصبي في الإنسان</h1>
            <p>الوحدة الثانية: التحكم والتنسيق</p>
        </div>
    </header>

    <main class="container">
        <div class="internal-tabs" data-aos="fade-up">
            <button class="tab-btn active" onclick="switchTab(event, 'theory')">📖 المحتوى العلمي</button>
            <button class="tab-btn" onclick="switchTab(event, 'media')">🎬 الوسائط</button>
            <button class="tab-btn" onclick="switchTab(event, 'activity')">🧩 نشاط تفاعلي</button>
        </div>

        <div id="theory" class="tab-pane active">
            <div class="lesson-card" data-aos="fade-up">
                <h3>1. الخلية العصبية (وحدة البناء)</h3>
                <p>الجهاز العصبي يتكون من مليارات الخلايا المتخصصة التي تنقل الرسائل الكهربائية:</p>
                <div class="equation-box" style="direction: rtl;">
                    مكونات الخلية: (جسم الخلية + المحور) + التفرعات الشجيرية ⚡
                </div>
            </div>

            <div class="lesson-card" data-aos="fade-up">
                <h3>2. أقسام الجهاز العصبي</h3>
                <ul class="anatomy-list">
                    <li><strong>الجهاز العصبي المركزي:</strong> يشمل المخ والحبل الشوكي (مركز القيادة).</li>
                    <li><strong>الجهاز العصبي الطرفي:</strong> الأعصاب التي تخرج من المركز لتصل لكل إنش في جسمك.</li>
                    <li><strong>المخ:</strong> يتكون من النصفين الكرويين، المخيخ، ونخاع المستطيل.</li>
                </ul>
            </div>

            <div class="lesson-card" data-aos="fade-up">
                <h3>3. رد الفعل المنعكس (Reflex Arc)</h3>
                <div class="table-wrapper">
                    <table class="nervous-table">
                        <thead>
                            <tr>
                                <th>نوع الاستجابة</th>
                                <th>الإرادية (Voluntary)</th>
                                <th>المنعكسة (Reflex)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>المتحكم الأساسي</td>
                                <td>القشرة المخية</td>
                                <td>الحبل الشوكي</td>
                            </tr>
                            <tr>
                                <td>السرعة</td>
                                <td>معتدلة (تحتاج تفكير)</td>
                                <td>فائقة السرعة (تلقائية)</td>
                            </tr>
                            <tr>
                                <td>مثال</td>
                                <td>المشي أو القراءة</td>
                                <td>سحب اليد عند لمس جسم ساخن</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="lesson-card" data-aos="fade-up">
                <h3>4. كيف تحمي جهازك العصبي؟ 🛡️</h3>
                <p>صحة أعصابك هي سر جودة حياتك:</p>
                <ul class="anatomy-list">
                    <li>تقليل تناول المنبهات (القهوة والشاي) لتجنب الأرق.</li>
                    <li>الابتعاد عن مصادر التوتر والضوضاء المستمرة.</li>
                    <li>إعطاء الجسم قسطاً كافياً من النوم (7-8 ساعات).</li>
                    <li>تجنب الجلوس الطويل أمام الشاشات لحماية الحواس.</li>
                </ul>
            </div>
        </div>

        <div id="media" class="tab-pane">
            <div class="lesson-card">
                <h3>🎥 فيديو توضيحي</h3>
                <div style="aspect-ratio: 16/9; margin-top: 20px;">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/4cWBTJbDiT4?si=PTo7eI7YtbVk9VVm" frameborder="0" allowfullscreen style="border-radius: 15px;"></iframe>
                </div>
            </div>

            <div class="lesson-card">
                <h3>🖼️ معرض الصور التعليمية</h3>
                <div class="image-slider" data-aos="zoom-in">
                    <div class="slides">
                        <div class="slide active">
                            <img src="images/unit2/lesson3/الجهاز العصبى.jpg" alt="الجهاز العصبى">
                            <div class="caption">الجهاز العصبى</div>
                        </div>
                        <div class="slide">
                            <img src="images/unit2/lesson3/الاحساس عن طريق الجهاز العصبى.jpg" alt="الاحساس عن طريق الجهاز العصبى">
                            <div class="caption">الاحساس عن طريق الجهاز العصبى</div>
                        </div>
                        <div class="slide">
                            <img src="images/unit2/lesson3/العوامل المؤثرة على الجهاز العصبى.jpg" alt="العوامل المؤثرة على الجهاز العصبى">
                            <div class="caption">العوامل المؤثرة على الجهاز العصبى</div>
                        </div>
                        <div class="slide">
                            <img src="images/unit2/lesson3/الحفاظ على الجهاز العصبى.jpg" alt="الحفاظ على الجهاز العصبى">
                            <div class="caption">الحفاظ على الجهاز العصبى</div>
                        </div>
                    </div>
                    <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
                    <button class="next" onclick="changeSlide(1)">&#10095;</button>
                </div>
            </div>
        </div>

        <div id="activity" class="tab-pane">
            <div class="lesson-card" style="text-align: center;">
                <h3>اختبر معلوماتك ⚡</h3>
                <p>ما هو الجزء المسؤول عن حفظ توازن الجسم أثناء الحركة؟</p>
                <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 20px;">
                    <button class="tab-btn" style="border: 1px solid #7b1fa2;" onclick="checkAnswer(this, false)">النخاع المستطيل</button>
                    <button class="tab-btn" style="border: 1px solid #7b1fa2;" onclick="checkAnswer(this, true)">المخيخ</button>
                    <button class="tab-btn" style="border: 1px solid #7b1fa2;" onclick="checkAnswer(this, false)">النصفان الكرويان</button>
                </div>
                <div id="quiz-result" style="margin-top: 20px; font-weight: bold;"></div>
            </div>
        </div>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });

        function switchTab(evt, tabId) {
            document.querySelectorAll('.tab-pane').forEach(p => p.classList.remove('active'));
            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
            document.getElementById(tabId).classList.add('active');
            evt.currentTarget.classList.add('active');
        }

        let currentSlide = 0;
        function changeSlide(direction) {
            const slides = document.querySelectorAll('.slide');
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + direction + slides.length) % slides.length;
            slides[currentSlide].classList.add('active');
        }

        function checkAnswer(btn, isCorrect) {
            const result = document.getElementById('quiz-result');
            if(isCorrect) {
                btn.style.background = "#2ecc71";
                btn.style.color = "white";
                result.innerHTML = "✅ إجابة دقيقة! المخيخ هو ضابط التوازن.";
                result.style.color = "#2ecc71";
            } else {
                btn.style.background = "#e74c3c";
                btn.style.color = "white";
                result.innerHTML = "❌ حاول مرة أخرى، فكر في الجزء الموجود خلف الرأس.";
                result.style.color = "#e74c3c";
            }
        }
    </script>
    <script src="script.js?v=1.2"></script>
</body>
</html>