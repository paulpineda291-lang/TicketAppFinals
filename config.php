<?php
// Get Railway environment variables
$host = getenv("MYSQLHOST");
$user = getenv("MYSQLUSER");
$password = getenv("MYSQLPASSWORD");
$database = getenv("MYSQLDATABASE");
$port = getenv("MYSQLPORT");

// If NOT on Railway → use XAMPP (LOCAL)
if (!$host || $host == "") {
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "hau_db"; // your local DB name
    $port = 3306;
}

// Create connection
$conn = new mysqli($host, $user, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>