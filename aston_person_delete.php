<?php
$head = $_POST['time'];
$dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   mysql_select_db('news_graphics');
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   $date = date("Y-m-d");
   $sql = "DELETE FROM aston_add where time like '$head%' LIMIT 1";
   
   $retval = mysql_query( $sql, $conn );
   
   //$sql = "update aston_add set aston_title_id = (aston_title_id - 1) where aston_title_id > $head";
   
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   

header("Location:all_aston_list.php");
?>
