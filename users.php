<?php
$conn = new mysqli("localhost", "root", "", "posts");

$result = $conn->query("SELECT * FROM users");

$users = [];
while($row = $result->fetch_assoc()){
    $users[] = $row;
}

?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Add Post</title></head>
<body>
    <form action="post.php" method="post">
        <label for="title">post tilte</label>
        <input id ="title" type="text" name="title">
        <br>
        <label for="content">post content</label>
        <textarea name="content" id="content" rows="10" cols="30"></textarea>
        <br>
        <label>choose user</label>
        <select name="user_id">
            <option value="">--select user </option>
            <?php for ($i = 0; $i < count($users); $i++): ?>
            <option value="<?= $users[$i]['id'] ?>"><?= $users[$i]['name'] ?></option>
            </option>
            <?php endfor; ?>
        </select>
        <br>
        <input type="submit" value="Add">
    </form>
</body>
</html>
