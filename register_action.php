<?php
include('db_connect.php');

if (isset($_POST['signup'])) {
    // تنظيف البيانات لمنع المشاكل
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']); // نص واضح بدون تشفير

    // إدخال البيانات في الجدول
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('يا بطل، تم إنشاء حسابك بنجاح!'); window.location.href='login.php';</script>";
    } else {
        echo "فيه مشكلة حصلت: " . mysqli_error($conn);
    }
}
?>