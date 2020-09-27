<?php
include 'dbh.php';
session_start();
if (isset($_POST["employeeID"]) && isset($_POST["employeeName"])&& !empty($_POST["employeeID"]) && !empty($_POST["employeeName"])) {
    $employeeID = $_POST["employeeID"];
    $employeeName = $_POST["employeeName"];
    $_SESSION["employeeID"] = $employeeID;
    $_SESSION["employeeName"] = $employeeName;
    $sql = "SELECT FirstName FROM employee WHERE eid = '$employeeID';";
    $result = mysqli_query($conn, $sql);
    $correctFirstName = mysqli_fetch_assoc($result); // get result as an array
    $correctFirstName = implode("", $correctFirstName); // turn array into string

    if ($correctFirstName != $employeeName) {
        echo '<br>';
        echo 'Wrong information' . '<br>';
    } else {
        // succesfully loged in
        $_SESSION["login"] = 1;
        header("Location: EmployeeIn.php");
    }
} else {
    echo '<br>';
    echo "Invalid input, please try again";
}
?>
<link href="./css/employee_validation.css" type="text/css" rel="stylesheet">
<br>
<input type="button" value="Back" class="button" id="backbtnemployee" onClick="document.location.href='EmployeeSignIn.php'">