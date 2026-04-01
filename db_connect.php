<?php
// Railway بتبعت بيانات القاعدة تلقائياً في المتغيرات دي
$host = getenv('MYSQLHOST') ?: "127.0.0.1";
$user = getenv('MYSQLUSER') ?: "root";
$pass = getenv('MYSQLPASSWORD') ?: ""; 
$db_name = getenv('MYSQLDATABASE') ?: "haqiba_db";
$port = getenv('MYSQLPORT') ?: "3307";

// الاتصال باستخدام البيانات المتوفرة
$conn = mysqli_connect($host, $user, $pass, $db_name, $port);

if (!$conn) {
    die("خطأ في الاتصال: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
?>
