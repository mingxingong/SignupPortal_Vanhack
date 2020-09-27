<?php
session_start();

$service = $_POST['servicetype'];


switch ($service) {
    case "student":
        $_SESSION['servicetype'] = 'student';
        header("Location: studentSignIn.php");
        break;
    case "employee":
        $_SESSION['servicetype'] = 'employee';
        header("Location: employeeSignIn.php");
        break;
    default:
        echo "invalid service type <br>";
}
?>
<link rel="stylesheet" type="text/css" href="./css/service.css">
<!-- button to go back to home page if user did not select any service -->
<button id='invalidgoback' name='back' onClick="document.location.href='index.php'">Home</button>