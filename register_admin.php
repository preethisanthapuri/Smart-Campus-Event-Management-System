<?php
include 'db.php';

$result = $conn->query("SELECT * FROM admin");

if($result->num_rows > 0){
    die("❌ Admin already registered!");
}

if($_POST){
    $user = $_POST['username'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $conn->query("INSERT INTO admin(username,password) VALUES('$user','$pass')");
    echo "✅ Admin Registered! <a href='login.php'>Login</a>";
}
?>

<h2>Register Admin (One Time)</h2>
<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button>Register</button>
</form>