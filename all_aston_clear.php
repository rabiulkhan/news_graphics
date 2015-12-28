 <?php
 $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   $date = date("Y-m-d");
   $sql = "Truncate table aston_title";
   $sql1 = "Truncate table aston_add";
   mysql_select_db('news_graphics');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   $retval = mysql_query( $sql1, $conn );
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   
   
   
   header("Location:aston_title_input_form.php");
   ?>