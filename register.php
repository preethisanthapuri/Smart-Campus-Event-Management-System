<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<div class="form-box">
<h2>📝 Register</h2>

<?php
$id = $_GET['id'];

if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $conn->query("INSERT INTO registrations(student_name,email,event_id)
                  VALUES('$name','$email','$id')");

    echo "<p>✅ Registered Successfully!</p>";
}
?>

<form method="post">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <button>Register</button>
</form>

</div>

</div>

</body>
</html>