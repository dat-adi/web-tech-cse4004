<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $word= $_POST["regNo"];
    if(empty($word)){
      echo "Register number should be filled";
      exit;
    }

$pattern = "/^(17|18|19|20)[A-Z]{3}[0-9]{4}$/";
if (preg_match($pattern, $word)) {
        echo "$word matches the pattern\n";
        echo "<br>";
    } else {
        echo "$word does not match the pattern\n";
        echo "<br>";
    }
}
?>