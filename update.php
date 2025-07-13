<?php
$conn = new mysqli("localhost","root","","university");
$stmt=$conn->prepare("update staff_info set staff_email='new@gmail.com' where staff_name='emad'");
$stmt->execute();
echo"updated Done"; 