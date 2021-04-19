<?php
session_start();
echo "<p>Thank you for logging in ".$_SESSION['login']."</p>";
session_unset();
session_destroy();
?>
