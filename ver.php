<?php
echo 'Current PHP version: ' . phpversion();
echo "<br>";

echo filemtime("ver.php");
echo "<br>";
echo "Last modified: ".date("F d Y H:i:s.",filemtime("ver.php"));
?>


?>