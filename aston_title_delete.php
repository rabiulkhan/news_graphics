<?php
$program_name = $_POST['program_name'];
$time = $_POST['time'];
$aston_title_id = $_POST['aston_title_id'];
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
   $sql = "DELETE FROM aston_title where program_name like '$program_name%' and time like '$time%' LIMIT 1";
   
   $retval = mysql_query( $sql, $conn );
   
   $sql = "update aston_title set aston_title_id = (aston_title_id - 1) where aston_title_id > $aston_title_id";
   
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   

header("Location:aston_title_list.php");
?>
