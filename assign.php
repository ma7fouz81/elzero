<?php
$conn = new mysqli("localhost", "root", "", "course_student");

$student_id =$_POST['student_id'] ;
$course_id = $_POST['course_id'];

$ins = $conn->prepare("INSERT INTO course_student (student_id, course_id) VALUES (?, ?)");
$ins->bind_param("ii", $student_id, $course_id);
$ins->execute();

echo 'Done';
