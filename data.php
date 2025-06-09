<?php
// (3--الدرس الثالث شرح كيفيه الربط مع قاعده البيانات وعرض البيانات PHP & MYSQL)

//Display Data in table
$connection = new mysqli("localhost","root","","School");
$stmt= $connection->prepare("select * from student_info");
$stmt->execute();

$result=$stmt->get_result();
echo "<table border='1'>";
while($row = $result->fetch_assoc()){
    echo "<tr><td>".$row['student_name']."</td><td>".$row['student_address']."</td><td>".$row['student_email']."</td></tr>";
}
?>
<!-- ######################################### -->

<!-- Insert Data in table -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add.php" method="post">
        student name <input type="text" name="name"><br/>
        student address <input type="text" name="address"><br/>
        student email <input type="text" name="email"><br/>
        <input type="submit">

    </form>
</body>
</html>

<!-- ######################################### -->

