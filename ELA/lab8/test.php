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
    $regno = $_POST['regno'];
    $password = $_POST['password'];
    $query = mysqli_query($con, "SELECT * FROM student WHERE UserId='$regno' and Password='$password'");
    $num = mysqli_fetch_array($query);
    if($num > 0){
        $_SESSION['login'] = $_POST['regno'];
        $_SESSION['sname'] = $num['SName'];
        header("location:success.php");
        exit;
    } else {
        $_SESSION['errmsg'] = "Invalid Reg no or Password";
        header("location:login.php");
        exit;
    }
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    $_SESSION["favcolor"] = "yellow";
    // remove all session variables
    session_unset();
    // destroy the session
    session_destroy();
?>

Task 1
---
Read email id and password from login.php page and validate the credentials in validate.php.
Create email id as session variable and retrieve the student details in details.php and display them and logout in logout.php from the session within 2 minutes.

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
        $_SESSION['login'] = $_POST['regno'];
        $_SESSION['sname'] = $num['SName'];
        header("location:success.php");
        exit;
    } else {
        $_SESSION['errmsg'] = "Invalid Reg no or Password";
        header("location:login.php");
        exit;
    }
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    $_SESSION["favcolor"] = "yellow";
    // remove all session variables
    session_unset();
    // destroy the session
    session_destroy();
?>
