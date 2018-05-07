<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "study";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("SELECT id from user where email=? AND password=?");
$stmt->bind_param("ss",$email,$password);
$stmt->execute();
echo "New records created successfully";
$stmt->close();
$conn->close();
?>