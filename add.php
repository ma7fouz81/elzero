<?php

$name=$_POST["name"];
$address=$_POST["address"];
$email=$_POST["email"];
$conn= new mysqli("localhost","root","","university");
$stmt=$conn->prepare("insert into staff_info (staff_name,staff_address,staff_email) values(?,?,?)");
$stmt->bind_param("sss",$name,$address,$email);
$stmt->execute();
echo "Done";