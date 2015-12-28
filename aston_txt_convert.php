<?php
$myfile = fopen("aston.txt", "a") or die("Unable to open file!");
$head = trim($_POST['headline'])."\n";
fwrite($myfile, $head);
$msg = trim($_POST['message'])."\n";
//$line = $head."/".$msg;

fwrite($myfile, $msg);
fclose($myfile);

header("Location:aston_input_form.php");
   
?>