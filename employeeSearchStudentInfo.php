<?php
session_start();
include 'dbh.php';
$employeeID = $_SESSION["employeeID"];
$studentID = $_POST["studentID"];

$sql = "SELECT ManageStudent.sid, student.FirstName, student.LastName, student.Phone
                FROM ManageStudent, student
                WHERE ManageStudent.sid = '$studentID' AND ManageStudent.sid = student.sid;";
$result = mysqli_query($conn, $sql);

$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<br>';
        echo 'sid: ' . $row['sid'] . "; " . 'FirstName: ' . $row['FirstName'] . "; " . 'LastName: ' . $row['LastName'] . "; " . 'Phone: ' . $row['Phone'];
    }
} else {
	echo 'Student do not exist';
}


?>
<link href="./css/search.css" type="text/css" rel="stylesheet">
<br>
<input type="button" value="Back" class="button" id="backbtnemployee" onClick="document.location.href='EmployeeIn.php'">