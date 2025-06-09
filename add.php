<?php

$name=$_POST["name"];
$address=$_POST["address"];
$email=$_POST["email"];
$conn=new mysqli("localhost","root","","School");
$stmt=$conn->prepare("insert into student_info(student_name,student_address,student_email) values(?,?,?)");
$stmt->bind_param("sss",$name,$address,$email);
$stmt->execute();
echo "Done";