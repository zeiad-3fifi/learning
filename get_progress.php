<?php
session_start();
include('db_connect.php');

header('Content-Type: application/json');

// التأكد إن المستخدم مسجل دخول
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['completed_count' => 0]);
    exit();
}

$user_id = $_SESSION['user_id'];

// الطريقة الأصح: حساب عدد الاختبارات المميزة التي اجتازها الطالب بدرجة نجاح
// شرط النجاح: 7 للاختبارات العادية (1-5) و 15 للاختبار النهائي (6)
$query = "SELECT COUNT(DISTINCT quiz_id) as completed FROM user_scores 
          WHERE user_id = '$user_id' 
          AND (
              (quiz_id <= 5 AND score >= 7) 
              OR 
              (quiz_id = 6 AND score >= 15)
          )";

$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $count = (int)$row['completed'];
} else {
    $count = 0;
}

echo json_encode(['completed_count' => $count]);
?>
