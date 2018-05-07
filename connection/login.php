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
$email = $_POST["email"];
$password = $_POST["password"];


// prepare and bind
$stmt = $conn->prepare("SELECT id from user where email=? AND password=?");
$stmt->bind_param("ss",$email,$password);
$stmt->execute();
$stmt->bind_result($id);
$stmt->fetch();
echo "New records created successfully". $id;
$stmt->close();
$conn->close();
?>