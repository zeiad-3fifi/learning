<?php
// Railway بتمرر البيانات دي أوتوماتيك للموقع
$host     = getenv('MYSQLHOST'); 
$user     = getenv('MYSQLUSER');
$password = getenv('MYSQLPASSWORD');
$db_name  = getenv('MYSQLDATABASE');
$port     = getenv('MYSQLPORT');

// إنشاء الاتصال باستخدام البيانات الجديدة
$conn = mysqli_connect($host, $user, $password, $db_name, $port);

if (!$conn) {
    die("خطأ في الاتصال: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
?>
