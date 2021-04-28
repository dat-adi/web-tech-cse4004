<?php
$file = fopen("Student.txt", "w");
$txt = "Sname\n";
fwrite($file, $txt);
$txt = "Sno\n";
fwrite($file, $txt);
$txt = "Dob\n";
fwrite($file, $txt);
fclose($file);

echo "File Created";
?>