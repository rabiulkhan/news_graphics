<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$head = trim($_POST['headline']);
//fwrite($myfile, $head);
$msg = trim($_POST['message'])."\n";
$line = $head."/".$msg;

fwrite($myfile, $line);
fclose($myfile);

header("Location:headline_v2.php");
   
?>