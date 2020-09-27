<!DOCTYPE html>
<html>

<head>
    <title>Hello Student!!!</title>
    <link href="./css/studentSignIn.css" type="text/css" rel="stylesheet">
</head>
<div class='login'>
    <h1>If you have an account, please Log In here</h1>
    <form action="studentSignInValidation.php" method="POST">
        <input type="text" name="studentFirstName" placeholder="First Name">
        <br>
        <input type="text" name="studentID" placeholder="Student ID">
        <br>
        <button type="submit" name="loginButton">Log In</button>
    </form>
</div>

</hrml>
<br>
<br>
<br>
<div class='signup'>
    <h1>If you are new, please sign up here</h1>
    <form action="studentSignUp.php" method="POST">
        <input type="text" name="studentFirstName" placeholder="First Name">
        <br>
        <input type="text" name="studentLastName" placeholder="Last Name">
        <br>
        <input type="text" name="studentID" placeholder="Student ID">
        <br>
        <input type="text" name="phone" placeholder="Phone Number">
        <br>
        <button type="submit" name="signupbutton">Sign up</button>
    </form>
</div>
<input type="button" value="Back" class="button" id="backbtnmain" onClick="document.location.href='index.php'">
</hrml>