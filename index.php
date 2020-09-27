<?php
include 'dbh.php';
?>

<!DOCTYPE html>
<html>
<div class='image'>
</div>

<head>
    <title>Welcome</title>
    <link href="./css/style.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class='container'>
        <h1>Welcome to Connect Portal</h1>
        <h2>Please tell us about yourself</h2>

        <form action="service_selection.php" method="POST">

            <label for="servicetype">Who are you?</label>

            <select name="servicetype">
                <option value="0">Select service:</option>
                <option value="student">Student</option>
                <option value="employee">Employee</option>
            </select>

            <br><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>