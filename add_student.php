<?php
$conn = new mysqli("localhost", "root", "", "university");

$name = $_POST["name"];
$address = $_POST["address"];
$email = $_POST["email"];
$department_id = $_POST["department_id"];

$stmt = $conn->prepare("INSERT INTO students (student_name, student_address, student_email, department_id) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssi", $name, $address, $email, $department_id);
$stmt->execute();

echo "Student added successfully.";
?>
