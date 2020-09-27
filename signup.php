<?php
include 'dbh.php';

$correctInfo = isset($_POST["sid"]) && !empty($_POST["sid"]) && isset($_POST["FirstName"]) && !empty($_POST["FirstName"])
    && isset($_POST["LastName"]) && !empty($_POST["LastName"]) && isset($_POST["Phone"]) && !empty($_POST["Phone"]);

if ($correctInfo) {
    $sid = mysqli_real_escape_string($conn, $_POST["sid"]);
    $FirstName = mysqli_real_escape_string($conn, $_POST["FirstName "]);
    $LastName = mysqli_real_escape_string($conn, $_POST["LastName"]);
    $Phone = mysqli_real_escape_string($conn, $_POST["Phone"]);


    $sql = "INSERT INTO Student VALUES ('$sid', '$FirstName ', '$LastName', '$Phone');";

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