<?php
session_start();
include('db_connect.php');

if (!isset($_SESSION['user_id'])) { die("Unauthorized"); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $quiz_id = (int)$_POST['quiz_id'];
    $score = (int)$_POST['score'];
    $total = isset($_POST['total']) ? (int)$_POST['total'] : 10;

    // 1. تسجيل الدرجة في جدول user_scores
    $check_query = "SELECT id, score FROM user_scores WHERE user_id = '$user_id' AND quiz_id = '$quiz_id'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        $row = mysqli_fetch_assoc($check_result);
        if ($score > $row['score']) {
            $query = "UPDATE user_scores SET score = '$score' WHERE user_id = '$user_id' AND quiz_id = '$quiz_id'";
            mysqli_query($conn, $query);
        }
    } else {
        $query = "INSERT INTO user_scores (user_id, quiz_id, score, total_questions) VALUES ('$user_id', '$quiz_id', '$score', '$total')";
        mysqli_query($conn, $query);
    }

    // 2. تحديث تقدم المستخدم لفتح الاختبار التالي
    // لو جاب 7 من 10 (أو 15 من 20 في النهائي) بنحدث الـ completed_lessons
    $pass_score = ($quiz_id == 6) ? 15 : 7;
    
    if ($score >= $pass_score) {
        // بنخلي الرقم يساوي رقم الكويز اللي خلص، بشرط ميكونش مستواه الفعلي أعلى
        $update_user = "UPDATE users SET completed_lessons = GREATEST(completed_lessons, $quiz_id) WHERE id = '$user_id'";
        mysqli_query($conn, $update_user);
    }
    
    echo "Success";
}
?>
