<?php
$myfile = fopen("oldfile.txt", "a") or die("Unable to open file!");
//$head = trim($_POST['headline']);
//fwrite($myfile, $head);
$msg = trim($_POST['message'])."\n";
//$line = $head."/".$msg;

fwrite($myfile, $msg);
fclose($myfile);

//=====================

header("Location:current_news_input_form.php");
   
?>