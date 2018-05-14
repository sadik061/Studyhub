<?php
session_start();
?>
<?php
$id= $_SESSION["classroomid"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "study";



$topic = $_POST["topic"];
$date = $_POST["date"];
echo $id;
echo $topic;
echo $date;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO class (classroomid, topic, datee) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $id, $topic, $date);


$stmt->execute();
$conn->close();
header("Location: ../class.php");
?>