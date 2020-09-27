<!DOCTYPE html>
<html>

<head>
    <title>Welcome back Employee!!!</title>
    <link href="./css/employeeSignIn.css" type="text/css" rel="stylesheet">
</head>
<div class='login'>
    <h1>Please enter your employee number</h1>
    <form action="employeeSignInValidation.php" method="POST">
        <input type="text" name="employeeID" placeholder="Employee ID">
        <br>
        <input type="text" name="employeeName" placeholder="Employee Name">
        <br>
        <button type="submit" name="loginButton">Log In</button>
    </form>
</div>

<input type="button" value="Back" class="button" id="backbtnmain" onClick="document.location.href='index.php'">

</html>