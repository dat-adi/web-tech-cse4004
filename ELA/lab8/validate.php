<?php
session_start();
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'studentdatabase');
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$eid = $_POST['eid'];
$passwd = $_POST['passwd'];
$query = mysqli_query($con, "SELECT * FROM student WHERE UserId='$eid' and Password='$passwd'");
$num = mysqli_fetch_array($query);
if($num > 0){
    $_SESSION['login'] = $num['UniversityId'];
    $_SESSION['sname'] = $num['UserId'];
    $_SESSION['cgpa'] = $num['CGPA'];
    $_SESSION['dob'] = $num['DOB'];
    $_SESSION['email'] = $num['Email'];
    header("location:details.php");
    exit;
} else {
    $_SESSION['errmsg'] = "Invalid Reg no or Password";
    header("location:login.php");
    exit;
}
?>
