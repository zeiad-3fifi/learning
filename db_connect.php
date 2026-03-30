<?php
// تأكد إن السطور دي موجودة عشان لو فيه خطأ تاني يظهر
ini_set('display_errors', 1);
error_reporting(E_ALL);

$host     = "mysql.railway.internal"; 
$user     = "root"; 
$password = "eYYIndWAJhMURsYXryfazufimnWZYFzL";
$db_name  = "railway";
$port     = "3306"; 

// الاتصال
$conn = mysqli_connect($host, $user, $password, $db_name, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
?>
