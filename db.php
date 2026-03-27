<?php
// Railway environment variables
$host = getenv("MYSQLHOST");
$user = getenv("MYSQLUSER");
$password = getenv("MYSQLPASSWORD");
$database = getenv("MYSQLDATABASE");
$port = getenv("MYSQLPORT");

// If running locally (XAMPP)
if (!$host) {
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "hau_db";
    $port = 3306;
}

// Connect
$conn = new mysqli($host, $user, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
