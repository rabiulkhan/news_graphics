 <?php 
 $fp = fopen("ticker.txt", "r+"); 
 ftruncate($fp, 0);
 fclose($fp);
header("Location:ticker_input_form.php"); 
 ?>