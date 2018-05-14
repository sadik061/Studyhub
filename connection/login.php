<?php
session_start();
?>

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
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);

setcookie("useremail",$email,strtotime("+1 day"),"/","",true,true);

// prepare and bind
$stmt = $conn->prepare("SELECT id,name from user where email=? AND password=?");
$stmt->bind_param("ss",$email,$password);
$stmt->execute();
$stmt->bind_result($id,$name);
$stmt->fetch();
echo $id.$password;
if($id==null){
    echo '<script>alert("Wrong password")</script>';
    header("Location: ../index.php");
}
else {
    $_SESSION["login"]="true";
    $_SESSION["userid"]=$id;
    $_SESSION["name"]=$name;
    header("Location: ../index.php");
    $stmt->close();
}
?>