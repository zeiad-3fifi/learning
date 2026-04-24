<?php
session_start();
include('db_connect.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'بطل المستقبل';

// قمت بتعديل الرقم الإجمالي للدروس ليكون 7 بدلاً من 6 بعد إضافة الدرس الجديد
$total_lessons = 7; 

$query = "SELECT COUNT(*) as completed FROM user_scores 
          WHERE user_id = '$user_id' 
          AND ((quiz_id <= 6 AND score >= 7) OR (quiz_id = 7 AND score >= 15))";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$completed = $row['completed'];

$progressPercent = round(($completed / $total_lessons) * 100);
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الحقيبة التعليمية | الرئيسية</title>
    
    <link rel="stylesheet" href="style.css?v=1.2">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .grid-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            padding: 20px;
        }

        .device-card {
            background: var(--bg-card);
            border-radius: 24px;
            padding: 30px;
            text-align: center;
            text-decoration: none;
            color: var(--text-main);
            border: 1px solid rgba(128, 128, 128, 0.1);
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .device-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(17, 186, 240, 0.2);
            border-color: var(--accent);
        }

        /* تنسيق خاص لكارت الجهاز العصبي ليبرز باللون البنفسجي عند التمرير */
        .card-nervous:hover {
            box-shadow: 0 15px 30px rgba(123, 31, 162, 0.3);
            border-color: #7b1fa2;
        }

        .device-card .icon {
            font-size: 3.5rem;
            margin-bottom: 15px;
            display: block;
            transition: transform 0.3s ease;
        }

        .device-card:hover .icon {
            transform: scale(1.2) rotate(5deg);
        }

        .hero {
            background: linear-gradient(135deg, var(--accent), #2c82bf) !important;
            border-radius: 0 0 50px 50px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body> 
    <?php include 'header.php'; ?>
    
    <header class="hero" data-aos="fade-down">
        <section class="container student-dashboard">
            <div class="dashboard-card" data-aos="zoom-in">
                <div class="user-info">
                   <h2>أهلاً بك يا <span id="userNameDisplay"><?php echo $user_name; ?></span>! 👋</h2>
                   <p>لقد أنجزت حتى الآن <strong><?php echo $completed; ?></strong> من <?php echo $total_lessons; ?> دروس.</p>
                </div>
                <div class="user-stats">
                    <div class="stat-item">
                        <div class="progress-wrapper" style="background: rgba(255,255,255,0.2); border-radius: 50px; height: 12px; width: 100%; margin-top: 15px; overflow: hidden;">
                            <div class="progress-bar-fill" style="width: <?php echo $progressPercent; ?>%; background: #2ecc71; height: 100%; transition: width 1.5s ease-in-out;"></div>
                        </div>
                        <p style="margin-top: 8px; font-size: 0.9rem; font-weight: bold;"><?php echo $progressPercent; ?>% من الرحلة اكتمل</p>
                    </div>
                </div>
            </div>
        </section>
        <h1 data-aos="fade-up" style="margin-top: 40px;">رحلة داخل جسم الإنسان</h1>
        <p data-aos="fade-up">اكتشف روعة التصميم الإلهي في أجهزتك الحيوية</p>
        <a href="#units" class="btn-main" data-aos="fade-up" style="border-radius: 50px; padding: 12px 40px;">ابدأ الآن 🚀</a>
    </header>

    <div class="container" id="units">
        <section class="unit-section" data-aos="fade-up">
            <h2 class="section-title">📦 الوحدة الأولى: النقل والإمداد</h2>
            <div class="grid-cards">
                <a href="lesson-detail.php" class="device-card">
                    <div class="icon">🫁</div>
                    <h3>الجهاز التنفسي</h3>
                    <p style="font-size: 0.9rem; opacity: 0.7;">تعرف على كيفية عمل الرئتين وتبادل الغازات.</p>
                </a>
                <a href="circulatory-detail.php" class="device-card">
                    <div class="icon">❤️</div>
                    <h3>الجهاز الدوري</h3>
                    <p style="font-size: 0.9rem; opacity: 0.7;">رحلة الدم من القلب إلى كل خلية في جسمك.</p>
                </a>
                <a href="blood-detail.php" class="device-card">
                    <div class="icon">🩸</div>
                    <h3>الدم ومكوناته</h3>
                    <p style="font-size: 0.9rem; opacity: 0.7;">تعرف على أنواع خلايا الدم ووظائفها المذهلة.</p>
                </a>
            </div>
        </section>

        <section class="unit-section" style="margin-top: 50px;" data-aos="fade-up">
            <h2 class="section-title">⚡ الوحدة الثانية: الطاقة والتحكم</h2>
            <div class="grid-cards">
                <a href="digestive-detail.php" class="device-card">
                    <div class="icon">🍔</div>
                    <h3>الجهاز الهضمي</h3>
                    <p style="font-size: 0.9rem; opacity: 0.7;">تعرف على كيفية عمل الجهاز الهضمي وعملية الهضم.</p>
                </a>
                <a href="healthy-food-detail.php" class="device-card">
                    <div class="icon">🥗</div>
                    <h3>الغذاء الصحي</h3>
                    <p style="font-size: 0.9rem; opacity: 0.7;">تعرف على أهمية الغذاء الصحي وفوائده.</p>
                </a>
                <a href="nervous-system.php" class="device-card card-nervous">
                    <div class="icon">🧠</div>
                    <h3>الجهاز العصبي</h3>
                    <p style="font-size: 0.9rem; opacity: 0.7;">اكتشف كيف يسيطر المخ على كامل وظائف جسمك.</p>
                </a>
            </div>
        </section>
    </div>

    <script src="script.js?v=1.2"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({ duration: 800, once: true });
    </script>
</body>
</html>