<?php
include 'dbh.php';
session_start();
$studentID = $_SESSION['studentID'];
?>

<link href="./css/studentIn.css" type="text/css" rel="stylesheet">

<h1>You can search or modify your personal information here</h1>

<div class="scrollmenu">
    <div class="card">
        <h2>Search for all of your informations</h2>
        <form class="search" action="studentInfo.php" method="POST">
            <button type="submit" name="searchbutton">Search</button>
        </form>
    </div>

    <div class="card">
        <h2>Your current program is</h2>
        <?php
        $sql = "SELECT program.pid, program.faculty
                FROM student, program, enroll
                WHERE student.sid = '$studentID' AND enroll.sid = student.sid AND enroll.pid = program.pid;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            echo "<br>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<br>';
                echo 'Program Faculty: ' . $row['faculty'];
            }
        } else {
            echo 'You are not registered into any program yet';
        }
        ?>
        <h2>Register to program here: Chem(0), Bio(1), Physics(2), Earth Science(3)</h2>
        <form class="change" action="studentRegisterProgram.php" method="POST">

            <input type="text" placeholder="Program To Register" name="programToRegister"><br>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</div>


<input type="button" value="Logout" class="button" id="backbtnmain" onClick="document.location.href='index.php'">