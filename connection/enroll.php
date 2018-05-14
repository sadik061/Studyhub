<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "study";

error_reporting(1);
session_start();


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$typee = "Student";
$id= $_GET["classroomid"];
$stmt = $conn->prepare("INSERT INTO classmember (typee,id, classid) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $typee,$_SESSION["userid"], $id);
$stmt->execute();
$conn->close();

header("Location: ../dashboard.php");

?>