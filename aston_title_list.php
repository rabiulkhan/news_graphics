 <?php/*
 $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   $date = date("Y-m-d");
   $sql = "SELECT title,time FROM aston_title where create_date = '$date'";
   $sql1 = "SELECT distinct program_name FROM aston_title where create_date = '$date'";
   mysql_select_db('news_graphics');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   $retval1 = mysql_query( $sql1, $conn );
   
   if(! $retval1 )
   {
      die('Could not get data: ' . mysql_error());
   }
   
   */
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
		<form action = "" method = "post">
						<!--<input type = "text" placeholder = "Headline" name = "headline" style="width: 330px; height : 40px;" >-->
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
						   $sql1 = "SELECT distinct program_name FROM aston_title where create_date = '$date'";
						   mysql_select_db('news_graphics');
						   $retval1 = mysql_query( $sql1, $conn );
							if(! $retval1 )
						   {
							  die('Could not get data: ' . mysql_error());
						   }
						?>
						<select name = "program_name" onchange="this.form.submit()">
						<option><?if(isset($_POST['program_name']))echo $_POST['program_name'];?></option>
						<?php 
							while($row = mysql_fetch_array($retval1, MYSQL_ASSOC))
								{
						?>
						
							<option value="<?php echo $row['program_name'];?>"><?php echo $row['program_name'];?></option>
							
					<?php
								}
						?>
						</select>
						<?php 
							$myfile = fopen("program_name.txt","w");
							$program_name = echo $row['program_name'];
						?>
						
					</form>
		<form action="aston_title_jump.php" method="POST">
			
		
			<input type='number' name='from' value="" placeholder ="FROM">
			<input type='number' name='to' value="" placeholder = "TO">
			<!--<input type='hidden' name='from' value="<?php echo $_POST['from1'];?>" placeholder ="FROM">
			<input type='hidden' name='to' value="<?php echo $_POST['to1'];?>" placeholder = "TO">
			-->
			<input type="submit" name="aston_on" value="JUMP">
		</form>
		<!--<center><button onclick="aston_off()" style = "height : 50px;width:100px; background : red"><b>Clear</b></button></center>-->
		<table style="border:1px solid black">
		
			<thead>
				<td>ID</td>
				<td>Title</td>
				<td>Action</td>
			</thead>
			<?php 
					$program_name = $_POST['program_name'];
					$dbhost = 'localhost';
				   $dbuser = 'root';
				   $dbpass = '';
				   
				   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
				   
				   if(! $conn )
				   {
					  die('Could not connect: ' . mysql_error());
					  
				   }
				   $date = date("Y-m-d");
				   mysql_select_db('news_graphics');
				if(isset($_POST['program_name'])){
					
					$sql1 = "SELECT title,time,program_name FROM aston_title where program_name = '$program_name'";
				   
				   $retval = mysql_query( $sql1, $conn );
					if(! $retval )
				   {
					  die('Could not get data: ' . mysql_error());
				   }
				}
				
				$i = 0;
				while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
					{
						
			?>
			<tr>
				<td><?php echo ++$i;?></td>
				<td><?php echo $row['title'];?></td>
				<td>
						
                     <form action="aston_title_write.php" method="POST">
                        <input type="submit" formtarget="_blank" name="aston_on" value="ASTON LIST">
                        <input type='hidden' name='aston_title' value='<?php echo $row['title']; ?>'>
                    </form>
				</td>
				<td>
					<form action="aston_title_up.php" method="POST">
                        <input type="submit" name="aston_up" value="UP">
                        <!--<input type='hidden' name='title' value='<?php //echo $row['time']; ?>'>-->
						<input type='hidden' name='no' value='<?php echo $i; ?>'>
						
                    </form>
				</td>
				<td>
					<form action="aston_title_down.php" method="POST">
                        <input type="submit" name="aston_down" value="DOWN">
                        <input type='hidden' name='title' value='<?php echo $i; ?>'>
                    </form>
				</td>
				<td>
					
					<form action="aston_title_delete.php" method="POST">
                        <input type="submit" name="aston_delete" value="DELETE">
                        <input type='text' name='program_name' value='<?php echo $row['program_name']; ?>'>
						<input type='text' name='time' value='<?php echo $row['time']; ?>'>
						<input type='text' name='aston_title_id' value='<?php echo $row['aston_title_id']; ?>'>
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
