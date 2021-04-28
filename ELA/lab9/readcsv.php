<?php
readfile($_POST["fileupload"]);
$file=fopen($_POST["fileupload"], "a+");
$txt = "MobileNo.\n";
fwrite($file, $txt);
?>