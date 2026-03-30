<?php
session_start();

// لو الطالب مش مسجل دخول (يعني مفيش اسم متخزن)
if (!isset($_SESSION['user_name'])) {
    // اطرده بره ووديه لصفحة الـ login
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الحقيبة التعليمية | الرئيسية</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body> <?php include 'header.php'; ?>
    
    <header class="hero" data-aos="fade-down" style="background: linear-gradient(135deg, var(--main-blue), var(--accent-color));">
        <section class="container student-dashboard">
    <div class="dashboard-card" data-aos="fade-up">
        <div class="user-info">
           <h2>أهلاً بك يا <span id="userNameDisplay"><?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'بطل المستقبل'; ?></span>! 👋</h2>
           <a href="logout.php" style="color: #ff4d4d; font-weight: bold; text-decoration: none;">
   <i class="fas fa-sign-out-alt"></i> تسجيل الخروج
</a>
           <p>سعيد برؤيتك اليوم، استكمل رحلتك التعليمية.</p>
        </div>
        <div class="user-stats">
            <div class="stat-item">
                <span class="stat-label">إجمالي التقدم</span>
                <div class="progress-wrapper">
                    <div class="progress-bar-fill" id="overallProgress">0%</div>
                </div>
            </div>
        </div>
    </div>
</section>
        <h1 data-aos="fade-up">رحلة داخل جسم الإنسان</h1>
        <p data-aos="fade-up">استكشف أسرار الحياة وأجهزة جسمك المذهلة</p>
        <a href="lessons.php" class="btn-main" data-aos="fade-up">ابدأ الرحلة الآن</a>
    </header>
    <section class="quick-access-container1">
        <h2 class="section-title">الوحده الأولى</h2>
        <div class="grid-cards">
            <a href="lesson-detail.php" class="device-card">
                <div class="icon">🫁</div>
                <h3>الوحده الأولى - الدرس الأول: الجهاز التنفسي</h3>
            </a>
            <a href="circulatory-detail.php" class="device-card">
    <div class="icon">❤️</div>
    <h3>الوحده الأولى - الدرس الثانى: الجهاز الدوري</h3>
</a>
            <div class="device-card disabled">
                <div class="icon">🩸</div>
                <h3>الوحده الأولى - الدرس الثالث: الدم ومكوناته ووظائفه</h3>
                <span>(قريباً)</span>
            </div>
        </div>
    </section>
    <section class="quick-access-container2">
        <h2 class="section-title">الوحده الثانية</h2>
        <div class="grid-cards">
            <div class="device-card disabled">
                <div class="icon">🍔</div>
                <h3>الوحده الثانيه - الدرس الأول: الجهاز الهضمي</h3>
                <span>(قريباً)</span>
            </div>
            <div class="device-card disabled">
                <div class="icon">🥗</div>
                <h3>الوحده الثانية - الدرس الثاني: أهمية الغذاء الصحي</h3>
                <span>(قريباً)</span>
            </div>
        </div>
    </section>
<script src="script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000, // مدة الحركة ثانية واحدة
    once: true      // الحركة تحصل مرة واحدة بس وأنت نازل
  });
</script>
</body>
</html>