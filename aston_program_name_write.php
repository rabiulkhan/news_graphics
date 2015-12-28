<?php
$myfile = fopen("aston_program.txt", "w") or die("Unable to open file!");
$program_name = $_POST['program_name'];
$head = $_POST['no'];
fwrite($myfile, $program_name);
fwrite($myfile, $head);
fclose($myfile);
header("Location:aston_title_up.php");
?>