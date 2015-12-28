 <?php 
 $fp = fopen("current_news.txt", "r+"); 
 ftruncate($fp, 0);
 fclose($fp);
header("Location:current_news_input_form.php"); 
 ?>