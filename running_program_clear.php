 <?php 
 $fp = fopen("running_program.txt", "r+"); 
 ftruncate($fp, 0);
 fclose($fp);
header("Location:running_program_input_form.php"); 
 ?>