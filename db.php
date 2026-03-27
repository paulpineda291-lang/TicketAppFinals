<?php
$host = "shortline.proxy.rlwy.net";
$port = 39879;
$user = "root";
$password = "VlejsxjILyBwbVaauIgPHMTfGofgtTqg";
$database = "railway";

$conn = new mysqli($host, $user, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>