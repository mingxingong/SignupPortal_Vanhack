<?php
include 'dbh.php';
session_start();
if (isset($_POST["studentFirstName"]) && isset($_POST["studentID"]) && !empty($_POST["studentFirstName"]) && !empty($_POST["studentID"])) {
    $studentFirstName = $_POST["studentFirstName"];
    $studentID = $_POST["studentID"];
    $_SESSION["studentFirstName"] = $studentFirstName;
    $_SESSION["studentID"] = $studentID;
    $sql = "SELECT FirstName FROM student WHERE sid = '$studentID';";
    $result = mysqli_query($conn, $sql);
    $correctFirstName = mysqli_fetch_assoc($result); // get result as an array
    $correctFirstName = implode("", $correctFirstName); // turn array into string

    if ($correctFirstName != $studentFirstName) {
        echo '<br>';
        echo 'Wrong information' . '<br>';
    } else {
        // succesfully loged in
        $_SESSION["login"] = 1;
        header("Location: studentIn.php");
    }
} else {
    echo '<br>';
    echo "Invalid input, please try again";
}
?>
<link href="./css/student_validation.css" type="text/css" rel="stylesheet">
<br>
<input type="button" value="Back" class="button" id="backbtnstudent" onClick="document.location.href='studentSignIn.php'">