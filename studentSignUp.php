<?php
include 'dbh.php';

$correctInfo = isset($_POST["studentID"]) && !empty($_POST["studentID"]) && isset($_POST["studentFirstName"]) && !empty($_POST["studentFirstName"])
    && isset($_POST["phone"]) && !empty($_POST["phone"]) && isset($_POST["studentLastName"]) && !empty($_POST["studentLastName"]);

if ($correctInfo) {
    $studentFirstName = mysqli_real_escape_string($conn, $_POST["studentFirstName"]); // index refer to the name
    $studentLastName = mysqli_real_escape_string($conn, $_POST["studentLastName"]);
    $studentID = mysqli_real_escape_string($conn, $_POST["studentID"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);


    $sql = "INSERT INTO student VALUES ('$studentID', '$studentFirstName', '$studentLastName', '$phone');";

    mysqli_query($conn, $sql);
    echo "<br>";
    echo "sign up success, please go back an log in with your new account";
} else {
    echo "<br>";
    echo "invalid information";
}
?>
<link href="./css/signup.css" type="text/css" rel="stylesheet">
<br>
<input type="button" value="Back" class="button" id="backbtnstudent" onClick="document.location.href='studentSignIn.php'">