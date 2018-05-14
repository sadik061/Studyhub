<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "study";

error_reporting(1);


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$Name = htmlspecialchars($_POST["Name"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);
$Contact = htmlspecialchars($_POST["Contact"]);

// prepare and bind
$stmt = $conn->prepare("INSERT INTO user (name, email, password, contact) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $Name, $email, $password, $Contact);
$stmt->execute();
$conn->close();

header("Location: ../index.php");

?>