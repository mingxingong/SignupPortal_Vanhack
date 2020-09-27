<?php
session_start();
include 'dbh.php';
$employeeID = $_SESSION["employeeID"];
$studentID = $_POST["studentID"];


$sql = "SELECT program.pid, program.faculty
                FROM student, program, enroll
                WHERE student.sid = '$studentID' AND enroll.sid = student.sid AND enroll.pid = program.pid;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    echo "<br>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<br>';
        echo 'Program Faculty: ' . $row['faculty'];
    }
} else {
    echo 'Student are not registered into any program yet';
}


?>
<link href="./css/search.css" type="text/css" rel="stylesheet">
<br>
<input type="button" value="Back" class="button" id="backbtnemployee" onClick="document.location.href='EmployeeIn.php'">