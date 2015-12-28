<?php
$head = $_POST['aston_id'];
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
   $sql = "DELETE FROM aston where aston_id = '$head' LIMIT 1";
   
   $retval = mysql_query( $sql, $conn );
   
   $sql = "update aston set aston_id = (aston_id - 1) where aston_id > $head";
   
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   

header("Location:aston_list.php");
?>
