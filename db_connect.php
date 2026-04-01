<?php
// جلب البيانات من متغيرات البيئة (Railway) أو استخدام القيم الافتراضية للجهاز المحلي
$host = getenv('MYSQLHOST') ?: "127.0.0.1";
$port = getenv('MYSQLPORT') ?: "3307";
$user = getenv('MYSQLUSER') ?: "root";
$pass = getenv('MYSQLPASSWORD') ?: "";
$db_name = getenv('MYSQLDATABASE') ?: "haqiba_db";

// دمج المضيف مع المنفذ للاتصال
$full_host = "$host:$port";

$conn = mysqli_connect($full_host, $user, $pass, $db_name);

if (!$conn) {
    // في بيئة الإنتاج يفضل عدم إظهار تفاصيل الخطأ للمستخدم، لكن للتجربة الآن:
    die("خطأ في الاتصال: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
?>
