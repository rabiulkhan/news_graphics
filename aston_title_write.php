<?php
$myfile = fopen("aston_list.txt", "w") or die("Unable to open file!");
$head = $_POST['aston_title'];
fwrite($myfile, $head);
fclose($myfile);
header("Location:all_aston_list.php");
?>