
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
$Name = htmlspecialchars($_POST["Name"]);
$department = htmlspecialchars($_POST["department"]);
$subject = htmlspecialchars($_POST["subject"]);
$Enroll = htmlspecialchars($_POST["Enroll"]);

// prepare and bind
$stmt = $conn->prepare("INSERT INTO classroom (name, department, subject, Enroll) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $Name, $department, $subject, $Enroll);
$stmt->execute();
$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id FROM classroom ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$id=$row["id"];
$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$typee = "Moderator";
$stmt = $conn->prepare("INSERT INTO classmember (typee,id, classid) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $typee,$_SESSION["userid"], $id);
$stmt->execute();
$conn->close();

header("Location: ../index.php");

?>