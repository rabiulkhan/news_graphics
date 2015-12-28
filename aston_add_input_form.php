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
   $sql = "SELECT distinct program_name FROM aston_title where create_date = '$date'";
   mysql_select_db('news_graphics');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   $retval1 = mysql_query( $sql, $conn );
   
   if(! $retval1 )
   {
      die('Could not get data: ' . mysql_error());
   }
   
   
   ?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Aston</title>
		<link rel="stylesheet" type="text/css" href="aston_style1.css">
		<link rel="stylesheet" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,700,300italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome/font-awesome.css" rel="stylesheet">
  <link href="css/base.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">	</head>
	<body>
		<center>
			<form action = "" method = "post">
				<b><font size="6">Aston</font></b>
					<div class = "inner_div2">
						<!--<input type = "text" placeholder = "Headline" name = "headline" style="width: 330px; height : 40px;" >-->
						
						<select name = "program_name" onchange="this.form.submit()">
						<option><?if(isset($_POST['program_name']))echo $_POST['program_name'];?></option>
						<?php 
							while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
								{
						?>
						
							<option value="<?php echo $row['program_name'];?>"><?php echo $row['program_name'];?></option>
							
					<?php
								}
						?>
						</select>
						
					</div>
					</form>
					<form action = "aston_add.php" method = "post">
					<input type = "hidden" name = "program_name" value = "<?php echo $_POST['program_name'];?>">
					<div class = "outer_div">
					<div class = "inner_div3">
						<!--<input type = "text" placeholder = "Headline" name = "headline" style="width: 330px; height : 40px;" >-->
						
						<select name = "title">
						<option><?if(isset($_POST['title']))echo $_POST['title'];?></option>  
						<?php 
						  
							if(isset($_POST['program_name'])){
								
							$program_name=$_POST['program_name'];
							
							$dbhost = 'localhost';
                            $dbuser = 'root';
                            $dbpass = '';
   
                            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
							mysql_select_db('news_graphics');
							$sql = "SELECT title FROM aston_title where program_name = '$program_name'";
                            $retval = mysql_query( $sql, $conn );
							
							while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
								{
								  $title_name=$row['title'];
								  echo $title_name;
								  //$program_name1=$query_row['program_name'];
						?>
							<option value="<?php echo $title_name;?>"><?php echo $title_name;?></option>
					<?php
								}
							}
							
						?>
						</select>
						
					</div>
					<div class = "inner_div4">
						<input type = "text" placeholder = "Name" name = "name" style="width: 330px; height : 40px;" >
					</div>
					
					<div class = "inner_div5">
						<!--<textarea rows="10" cols="40" placeholder = "Message" name = "message"  style="width: 330px; height : 160px;">
						 
						</textarea>-->
						<input type = "text" placeholder = "Designation" name = "designation" style="width: 330px; height : 40px;" >
					</div>
					<!--
					<a href = "json_convert2.php">upload</a>
					-->
					<a href = "news_graphics_menu.php">Home</a>
					<div class = "inner_div7">
						<input type = "submit" name = "submit" value = "Add" >
					</div>
					<div class = "inner_div6">
						<!--<a href = "aston_clear.php">ClearText</a>-->
					</div>
					<div class = "inner_div8">
						<a href = "aston_title_list.php" target = "_blank">AstonList</a>
					</div>
				</div>
				
			</form>
			
		</center>
	</body>
</html>