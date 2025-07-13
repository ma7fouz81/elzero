 <?php

$conn = new mysqli("localhost","root","","university");
$stmt=$conn->prepare("delete from staff_info where staff_name=?");
$stmt->bind_param("s",$_POST["name"]);
$stmt->execute();
echo"1 row deleted"; 
?> 