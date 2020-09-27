<?php
include 'dbh.php';
session_start();
$employeeID = $_SESSION['employeeID'];
?>

<link href="./css/employeeIn.css" type="text/css" rel="stylesheet">

<h1>You can search or modify your personal information here</h1>

<div class="scrollmenu">
    <div class="card">
        <h2>Search for student informations here</h2>
        <form class="search-order" action="employeeSearchStudentInfo.php" method="POST">
            <input type="text" placeholder="Student ID" name="studentID"><br>
            <button type="submit" name="searchbutton">Search</button>
        </form>
    </div>

    <div class="card">
        <h2>Search for student's program</h2>
        <form class="search-order" action="employeeSearchStudentProgram.php" method="POST">
            <input type="text" placeholder="Student ID" name="studentID"><br>
            <button type="submit" name="searchbutton">Search</button>
        </form>
    </div>

    <div class="card">
        <h2>Search for student's Manager</h2>
        <form class="search-order" action="employeeSearchStudentManager.php" method="POST">
            <input type="text" placeholder="Student ID" name="studentID"><br>
            <button type="submit" name="searchbutton">Search</button>
        </form>
    </div>
</div>


<input type="button" value="Logout" class="button" id="backbtnmain" onClick="document.location.href='index.php'">