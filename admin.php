<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="center">

<h2>🛠 Admin Dashboard</h2>

<a href="add_event.php"><button>Add Event</button></a>
<a href="logout.php"><button>Logout</button></a>

<br><br>

<div class="events-container">

<?php
$result = $conn->query("SELECT * FROM events");

while($row = $result->fetch_assoc()){
?>
    <div class="card">
        <h3><?php echo $row['name']; ?></h3>
        <p><?php echo $row['department']; ?></p>
        <p><?php echo $row['type']; ?></p>
        <p><?php echo $row['date']; ?></p>

        <a href="delete_event.php?id=<?php echo $row['id']; ?>">
            <button>Delete</button>
        </a>
    </div>
<?php } ?>

</div>

</div>

</body>
</html>