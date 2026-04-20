<?php
session_start();
include 'db.php';

$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $res = $conn->query("SELECT * FROM admin WHERE username='$user'");
    $data = $res->fetch_assoc();

    if($data && $pass == $data['password']){
        $_SESSION['admin'] = $user;
        header("Location: admin.php");
    } else {
        $error = "❌ Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="center full-center">
<div class="form-box">

<h2>🔐 Admin Login</h2>

<?php if($error) echo "<p>$error</p>"; ?>

<form method="post">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button>Login</button>
</form>

</div>
</div>

</body>
</html>