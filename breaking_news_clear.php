 <?php 
 $fp = fopen("breaking.txt", "r+"); 
 ftruncate($fp, 0);
 fclose($fp);
header("Location:breaking_news_input_form.php"); 
 ?>