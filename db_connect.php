<?php
// 1. جلب البيانات تلقائياً من بيئة Railway
// إذا لم يجدها (كما في جهازك الشخصي)، سيستخدم القيم الافتراضية بعد علامة ?:
$host = getenv('MYSQLHOST')     ?: "127.0.0.1";
$port = getenv('MYSQLPORT')     ?: "3307"; // المنفذ الخاص بجهازك
$user = getenv('MYSQLUSER')     ?: "root";
$pass = getenv('MYSQLPASSWORD') ?: "";
$db   = getenv('MYSQLDATABASE') ?: "haqiba_db";

// 2. تنفيذ الاتصال
// ندمج الـ Host مع الـ Port لضمان عمل الاتصال في الجهتين
$conn = mysqli_connect($host, $user, $pass, $db, $port);

// 3. فحص الاتصال
if (!$conn) {
    // في حالة الخطأ، سيخبرك بالسبب بدقة
    die("خطأ في الاتصال بقاعدة البيانات: " . mysqli_connect_error());
}

// 4. ضبط الترميز لدعم اللغة العربية
mysqli_set_charset($conn, "utf8");

// ملاحظة: لا تضع وسم إغلاق PHP في نهاية ملفات الاتصال لتجنب أخطاء الـ Headers
