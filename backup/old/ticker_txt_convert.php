<?php
$myfile = fopen("ticker.txt", "w") or die("Unable to open file!");


$msg = trim($_POST['message'])."\n";


fwrite($myfile, $msg);
fclose($myfile);

header("Location:ticker_input_form.php");
   
?>