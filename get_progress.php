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

/**
 * التعديل المنطقي الجديد:
 * الدروس من 1 إلى 6 (جهاز تنفسي، دوري، دم، هضمي، غذاء، عصبي) -> النجاح من 7
 * الاختبار النهائي (رقم 7) -> النجاح من 15
 */
$query = "SELECT COUNT(DISTINCT quiz_id) as completed FROM user_scores 
          WHERE user_id = '$user_id' 
          AND (
              (quiz_id <= 6 AND score >= 7) 
              OR 
              (quiz_id >= 7 AND score >= 15)
          )";

$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    // نرسل العدد الفعلي للاختبارات التي اجتازها الطالب
    $count = (int)$row['completed'];
} else {
    $count = 0;
}

echo json_encode(['completed_count' => $count]);
?>