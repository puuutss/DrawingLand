<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "DrawingLand_DB";
$Nickname = $_POST['Nickname'];
$UserKey = $_POST['UserKey'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO User (Nickname, UserKey)
        VALUES ($Nickname,$UserKey)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>