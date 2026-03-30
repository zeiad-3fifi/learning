<?php
// إظهار الأخطاء عشان لو فيه مشكلة نعرفها فوراً
ini_set('display_errors', 1);
error_reporting(E_ALL);

$host     = "mysql.railway.internal"; 
$user     = "root"; 
$password = "eYYIndWAJhMURsYXryfazufimnWZYFzL";
$db_name  = "railway";
$port     = "3306"; 

$conn = mysqli_connect($host, $user, $password, $db_name, $port);

if (!$conn) {
    die("فشل الاتصال بقاعدة البيانات: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
?>
