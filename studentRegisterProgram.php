<?php
session_start();
include 'dbh.php';
$studentID = $_SESSION["studentID"];
$programToRegister = "";
if ($_POST['programToRegister'] == 0) {
    $programToRegister = "Chemistry";
} else if ($_POST['programToRegister'] == 1) {
    $programToRegister = "Biology";
} else if ($_POST['programToRegister'] == 2) {
    $programToRegister = "Physics";
} else if ($_POST['programToRegister'] == 3) {
    $programToRegister = "Earth Science";
}


$sql = "SELECT program.pid, program.faculty FROM program WHERE program.faculty = '$programToRegister'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$pid = $row['pid'];

$sql = "INSERT INTO enroll VALUES ('$studentID', '$pid');";
$result = mysqli_query($conn, $sql);


?>
<link href="./css/register.css" type="text/css" rel="stylesheet">
<br>
<input type="button" value="Back" class="button" id="backbtnstudent" onClick="document.location.href='studentIn.php'">