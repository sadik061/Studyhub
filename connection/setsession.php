<?php
session_start();
$_SESSION["classroomid"]=$_GET["classroomid"];
print_r($_SESSION);
header('Location: ../dashboard.php');
?>
