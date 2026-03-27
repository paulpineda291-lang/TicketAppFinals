<?php
$conn = new mysqli(
    "shortline.proxy.rlwy.net",
    "root",
    "VlejsxjILyBwbVaauIgPHMTfGofgtTqg",
    "railway",
    39879
);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>