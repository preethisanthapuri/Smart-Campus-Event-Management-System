<?php include 'db.php'; ?>

<h2>Add Event</h2>

<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Department: <input type="text" name="dept" required><br><br>
    Type: <input type="text" name="type" required><br><br>
    Date: <input type="date" name="date" required><br><br>
    <button type="submit">Add Event</button>
</form>

<?php
if($_POST) {
    $sql = "INSERT INTO events(name,department,type,date)
            VALUES('{$_POST['name']}','{$_POST['dept']}',
                   '{$_POST['type']}','{$_POST['date']}')";

    if($conn->query($sql)) {
        echo "✅ Event Added Successfully!";
    }
}
?>