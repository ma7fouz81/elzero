<?php
$conn = new mysqli("localhost", "root", "", "course_student");

$students = $conn->query("SELECT * FROM students ");
$courses  = $conn->query("SELECT * FROM courses ");
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Assign Courses to Student</title></head>
<body>
  <form action="assign.php" method="post">
    <label>Choose student</label>
    <select name="student_id" required>
      <option value="">-- select student --</option>
      <?php while($row = $students->fetch_assoc()): ?>
        <option value="<?=$row['id'] ?>"><?=$row['name']?></option>
      <?php endwhile; ?>
    </select>
    <br><br>

    <label>Choose courses </label>
    <select name="course_id" required>
    <option value="">-- select course --</option>
      <?php while($row = $courses->fetch_assoc()): ?>
        <option value="<?=$row['id'] ?>"><?=$row['name'] ?></option>
      <?php endwhile; ?>
    </select>

    <br><br>
    <input type="submit" value="Add">
  </form>
</body>
</html>
