<?php
$myfile = fopen("headline.txt", "w") or die("Unable to open file!");

$msg = trim($_POST['headline'])."\n";


fwrite($myfile, $msg);
fclose($myfile);

header("Location:headline_input_form.php");
   
?>