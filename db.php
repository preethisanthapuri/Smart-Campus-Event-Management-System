<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "campus_db";   // your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

// Optional (for testing)
echo ""; // keep empty to avoid unwanted output
?>