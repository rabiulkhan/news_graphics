<?php
$myfile = fopen("breaking.txt", "w") or die("Unable to open file!");

$msg = trim($_POST['message'])."\n";


fwrite($myfile, $msg);
fclose($myfile);

header("Location:breaking_news_input_form.php");
   
?>