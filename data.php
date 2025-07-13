<?php
// (3--الدرس الثالث شرح كيفيه الربط مع قاعده البيانات وعرض البيانات PHP & MYSQL)

//Display Data in table
// $connection = new mysqli("localhost","root","","School");
// $stmt= $connection->prepare("select * from student_info");
// $stmt->execute();

// $result=$stmt->get_result();
// echo "<table border='1'>";
// while($row = $result->fetch_assoc()){
//     echo "<tr><td>".$row['student_name']."</td><td>".$row['student_address']."</td><td>".$row['student_email']."</td></tr>";
// }
?>
<!-- ######################################### -->

<!-- Insert Data in table -->

<!-- <!DOCTYPE html>
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
</html> -->




<!-- ###- MY DATA -### -->
 

<?php

$connection= new mysqli("localhost","root","","university");
$statement= $connection->prepare("select * from staff_info");
$statement->execute();

$result= $statement->get_result();

echo "<table border='1'>";
while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row["staff_id"]."</td><td>".$row["staff_name"]."</td><td>".$row["staff_address"]."</td><td>".$row["staff_email"]."</td></tr>";
}

///////////////////////  AND , OR , NOT /////////////////////////

$connection= new mysqli("localhost","root","","university");
$statement= $connection->prepare("select * from staff_info where staff_name='ali' and staff_address='cairo'");
$statement->execute();

$result= $statement->get_result();

echo "<table border='1'>";
while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row["staff_id"]."</td><td>".$row["staff_name"]."</td><td>".$row["staff_address"]."</td><td>".$row["staff_email"]."</td></tr>";
}
///////////////////////////////////////////////////
$connection= new mysqli("localhost","root","","university");
$statement= $connection->prepare("select * from staff_info where not staff_name='ali' and not staff_address='cairo'");
$statement->execute();

$result= $statement->get_result();

echo "<table border='1'>";
while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row["staff_id"]."</td><td>".$row["staff_name"]."</td><td>".$row["staff_address"]."</td><td>".$row["staff_email"]."</td></tr>";
}
///////////////////////////////////////////////////
$connection= new mysqli("localhost","root","","university");
$statement= $connection->prepare("select * from staff_info where staff_name='ali' and (staff_address='cairo' or staff_address='benisuef')");
$statement->execute();

$result= $statement->get_result();

echo "<table border='1'>";
while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row["staff_id"]."</td><td>".$row["staff_name"]."</td><td>".$row["staff_address"]."</td><td>".$row["staff_email"]."</td></tr>";
}

?>

<!-- - ADD FORM - -->

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
        <input type="submit"><br/>
    </form>
    
</body>
</html>

<!-- DEL FORM -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="del.php">
        student name <input type="text" name="name"><br/>
        <input type="submit">
    </form>
</body>
</html>

<!-- update FORM -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php">
        student name <input type="text" name="name"><br/>
        <input type="submit">
    </form>
</body>
</html>

