
<?php
$conn = new mysqli("localhost", "root", "", "university");

$result = $conn->query("SELECT * FROM departments");

$departments = [];
while ($row = $result->fetch_assoc()) {
    $departments[] = $row;
}

?>

<form action="add_student.php" method="post">
    <label for="name">Student Name:</label>
    <input id="name" type="text" name="name" required><br/>

    <label for="address">Student Address:</label>
    <input id="address" type="text" name="address" required><br/>

    <label for="email">Student Email:</label>
    <input id="email" type="email" name="email" required><br/>

    <label>Choose Department:</label>
    <select name="department_id" required>
        <option value="">-- Select Department --</option>
        <?php for ($i = 0; $i < count($departments); $i++): ?>
            <option value="<?= $departments[$i]['id'] ?>"><?= $departments[$i]['name'] ?></option>
        <?php endfor; ?>
    </select>
    <br/><br/>

    <input type="submit" value="Add Student">
</form>
