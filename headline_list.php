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
   $sql = "SELECT * FROM headline where create_date = '$date'";
   mysql_select_db('news_graphics');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   
   
   ?>
<html>
	<head>
	<style>
		table, th, tr{
		border: 1px solid black;
		left : 20px;
		top : 40px;
		width : 100%;
		}
	</style>
	</head>
	<body>
		
		
		<center><button onclick="headline_off()" style = "height : 50px;width:100px; background : red"><b>Clear</b></button></center>
		<table style="border:1px solid black">
		
			<thead>
				<td>Date</td>
				<td>Time</td>
				<td>HeadLine</td>
				<td>Action</td>
			</thead>
			<?php 
				while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
					{
			?>
			<tr>
				<td><?php echo $row['create_date'];?></td>
				<td><?php echo $row['time'];?></td>
				<td><?php echo $row['headline'];?></td>
				<td>
						
                     <form action="headline_on.php" method="POST">
                        <input type="submit" name="headline_on" value="SEND">
                        <input type='hidden' name='headline_name' value='<?php echo $row['headline']; ?>'>
                    </form>
				</td>
				<td>
					<form action="headline_delete.php" method="POST">
                        <input type="submit" name="headline_delete" value="DELETE">
                        <input type='hidden' name='headline_id' value='<?php echo $row['headline_id']; ?>'>
                    </form>
				</td>
				
				
				
			</tr>
			<?php 
			}
			?>
		<table>
		
		
		<script>
			function headline_on() {
	
					window.location.assign("headline_on.php")
				   
			}
			function headline_off() {
	
					window.location.assign("headline_off.php")
				   
			}
		</script>
	</body>
</body>	