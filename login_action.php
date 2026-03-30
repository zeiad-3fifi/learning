<?php
session_start();
include('db_connect.php');

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // البحث عن الإيميل والباسورد مع بعض
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        
        // تخزين البيانات في الجلسة (Session)
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['username'];

        // حوله للداشبورد فوراً
        header("Location: index.php");
        exit();
    } else {
        // لو ملقاش تطابق
        echo "<script>alert('الإيميل أو الباسورد غلط يا بطل.. جرب تاني!'); window.location.href='login.php';</script>";
    }
}
?>