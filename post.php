<?php
$conn = new mysqli("localhost", "root", "", "posts");

$title   = $_POST["title"] ;
$content = $_POST["content"] ;
$user_id = $_POST["user_id"] ;

$stmt = $conn->prepare("INSERT INTO posts (title, content, user_id) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $title, $content, $user_id);
$stmt->execute();
echo 'Done';