<?php
$myfile = fopen("running_program.txt", "w") or die("Unable to open file!");
$head = trim($_POST['headline'])."\n";
fwrite($myfile, $head);
$msg = trim($_POST['message'])."\n";
//$line = $head."/".$msg;

fwrite($myfile, $msg);
fclose($myfile);

header("Location:running_program_input_form.php");
   
?>