<?php
session_start();
ob_start();
echo "<h2>Student Details</h2>";
echo "<p>University ID : ".$_SESSION['login']."</p>";
echo "<p>Name : ".$_SESSION['sname']."</p>";
echo "<p>CPGA : ".$_SESSION['cgpa']."</p>";
echo "<p>Date of Birth : ".$_SESSION['dob']."</p>";
echo "<p>Email : ".$_SESSION['email']."</p>";
ob_end_flush();
?>
<html>
    <body>
    <a href="./logout.php" type="submit">Exit</a>
    </body>
</html>
<?php
    exit;
?>
