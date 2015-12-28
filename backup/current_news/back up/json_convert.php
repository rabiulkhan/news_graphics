<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$head = trim($_POST['headline'])."\n";
fwrite($myfile, $head);
$msg = trim($_POST['message'])."\n";
fwrite($myfile, $msg);
fclose($myfile);

header("Location:headline_v2.php");
   
?>