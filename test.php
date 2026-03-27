<?php
include 'db.php';


$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo "<h2>Users List</h2>";

while($row = $result->fetch_assoc()){
    echo "ID: " . $row['id'] . " | ";
    echo "Email: " . $row['email'] . "<br>";
}
?>