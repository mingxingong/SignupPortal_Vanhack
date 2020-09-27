<?php
session_start();
include 'dbh.php';
$studentID = $_SESSION["studentID"];

$sql = "SELECT student.FirstName, program.faculty
            FROM student, enroll, program
            WHERE student.sid = $studentID && student.sid = enroll.sid && enroll.pid = program.pid;";
$result = mysqli_query($conn, $sql);

$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<br>';
        echo 'FirstName: ' . $row['FirstName'] . "; " . 'Program: ' . $row['faculty'] ;
    }
}


?>
<link href="./css/info.css" type="text/css" rel="stylesheet">
<br>
<input type="button" value="Back" class="button" id="backbtnstudent" onClick="document.location.href='studentIn.php'">