<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Events</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h2 style="text-align:center;">📅 Available Events</h2>

<div class="events-container">

<?php
$result = $conn->query("SELECT * FROM events");

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
?>
    <div class="card">
        <h3><?php echo $row['name']; ?></h3>
        <p><?php echo $row['department']; ?></p>
        <p><?php echo $row['type']; ?></p>
        <p><?php echo $row['date']; ?></p>

        <a href="register.php?id=<?php echo $row['id']; ?>">
            <button>Register</button>
        </a>
    </div>
<?php
    }
} else {
    echo "<p>No events found</p>";
}
?>

</div>

</body>
</html>