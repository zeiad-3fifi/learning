<?php
session_start();
include('db_connect.php');
header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['completed_count' => 0]);
    exit();
}

$user_id = $_SESSION['user_id'];
$query = "SELECT completed_lessons FROM users WHERE id = '$user_id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$count = isset($row['completed_lessons']) ? (int)$row['completed_lessons'] : 0;

echo json_encode(['completed_count' => $count]);
?>
