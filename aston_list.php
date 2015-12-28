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
   $sql = "SELECT * FROM aston where create_date = '$date'";
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
		
		<form action="aston_on.php" method="POST">
			<input type='number' name='from' value="" placeholder ="FROM">
			<input type='number' name='to' value="" placeholder = "TO">
			<input type="submit" name="aston_on" value="SEND">
		</form>
		<center><button onclick="aston_off()" style = "height : 50px;width:100px; background : red"><b>Clear</b></button></center>
		<table style="border:1px solid black">
		
			<thead>
				<td>Headline</td>
				<td>Date</td>
				<td>Time</td>
				<td>Name</td>
				<td>Designation</td>
				<td>Action</td>
			</thead>
			<?php 
				while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
					{
			?>
			<tr><td rowspan = "4"><?php echo $row['headline'];?></td>
				<td><?php echo $row['create_date'];?></td>
				<td><?php echo $row['time'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['designation'];?></td>
				<td>
						
                     <form action="aston_on.php" method="POST">
                        <input type="submit" name="aston_on" value="SEND">
                        <input type='hidden' name='aston_name' value='<?php echo $row['name']; ?>'>
						<input type='hidden' name='des' value='<?php echo $row['designation']; ?>'>
                    </form>
				</td>
				<td>
					<form action="aston_delete.php" method="POST">
                        <input type="submit" name="aston_delete" value="DELETE">
                        <input type='hidden' name='aston_id' value='<?php echo $row['aston_id']; ?>'>
                    </form>
				</td>
				<td>
					<form action="aston_up.php" method="POST">
                        <input type="submit" name="aston_up" value="UP">
                        <input type='hidden' name='aston_id' value='<?php echo $row['aston_id']; ?>'>
                    </form>
				</td>
				<td>
					<form action="aston_down.php" method="POST">
                        <input type="submit" name="aston_down" value="DOWN">
                        <input type='hidden' name='aston_id' value='<?php echo $row['aston_id']; ?>'>
                    </form>
				</td>
				
				
				
			</tr>
			<?php 
			}
			?>
		<table>
		
		
		<script>
			function aston_on() {
	
					window.location.assign("headline_on.php")
				   
			}
			function aston_off() {
	
					window.location.assign("aston_off.php")
				   
			}
		</script>
	</body>
</body>	