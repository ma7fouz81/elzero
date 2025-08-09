<?php
$conn = new mysqli("localhost", "root", "", "user_db");

if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

$user_id = $_POST['user_id'];
$category_id = $_POST['category_id'];

// تأكد إن اليوزر مختارش قبل كده (اختياري)
$check = $conn->query("SELECT * FROM user_category WHERE user_id = $user_id");

if ($check->num_rows > 0) {
    // تم الاختيار قبل كده - تحديث
    $sql = "UPDATE user_category SET category_id = $category_id WHERE user_id = $user_id";
} else {
    // أول مرة يختار
    $sql = "INSERT INTO user_category (user_id, category_id) VALUES ($user_id, $category_id)";
}

if ($conn->query($sql) === TRUE) {
    echo "تم الحفظ بنجاح ✅";
} else {
    echo "خطأ: " . $conn->error;
}

$conn->close();
?>