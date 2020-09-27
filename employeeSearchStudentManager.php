<?php
session_start();
include 'dbh.php';
$employeeID = $_SESSION["employeeID"];
$studentID = $_POST["studentID"];


$sql = "SELECT ManageStudent.eid, employee.FirstName
                FROM ManageStudent, employee
                WHERE ManageStudent.sid = '$studentID' AND ManageStudent.eid = employee.eid;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    echo "<br>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<br>';
        echo 'Student Managed by employee: ' . $row['FirstName'];
    }
} else {
    echo 'Student do not have an assigned manager';
}


?>
<link href="./css/search.css" type="text/css" rel="stylesheet">
<br>
<input type="button" value="Back" class="button" id="backbtnemployee" onClick="document.location.href='EmployeeIn.php'">