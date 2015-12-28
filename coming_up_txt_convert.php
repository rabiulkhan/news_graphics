<?php
$myfile = fopen("coming_up.txt", "w") or die("Unable to open file!");

$msg = trim($_POST['message'])."\n";


fwrite($myfile, $msg);
fclose($myfile);

header("Location:coming_up_input_form.php");
   
?>