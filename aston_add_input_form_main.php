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
   $sql = "SELECT * FROM aston_title where create_date = '$date'";
   mysql_select_db('news_graphics');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   
   
   ?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Aston</title>
		<link rel="stylesheet" type="text/css" href="aston_style.css">
		<link rel="stylesheet" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,700,300italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome/font-awesome.css" rel="stylesheet">
  <link href="css/base.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">	</head>
	<body>
		<center>
			<form action = "aston_add.php" method = "post">
				<b><font size="6">Aston</font></b>
				<div class = "outer_div">
					
					<div class = "inner_div2">
						<!--<input type = "text" placeholder = "Headline" name = "headline" style="width: 330px; height : 40px;" >-->
						
						<select name = "title">
						<?php 
							while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
								{
						?>
							<option value="<?php echo $row['title'];?>"><?php echo $row['title'];?></option>
					<?php
								}
						?>
						</select>
						
					</div>
					<div class = "inner_div3">
						<input type = "text" placeholder = "Name" name = "name" style="width: 330px; height : 40px;" >
					</div>
					
					<div class = "inner_div4">
						<!--<textarea rows="10" cols="40" placeholder = "Message" name = "message"  style="width: 330px; height : 160px;">
						 
						</textarea>-->
						<input type = "text" placeholder = "Designation" name = "designation" style="width: 330px; height : 40px;" >
					</div>
					<!--
					<a href = "json_convert2.php">upload</a>
					-->
					<a href = "news_graphics_menu.php">Home</a>
					<div class = "inner_div6">
						<input type = "submit" value = "Add" >
					</div>
					<div class = "inner_div5">
						<!--<a href = "aston_clear.php">ClearText</a>-->
					</div>
					<div class = "inner_div7">
						<a href = "aston_title_list.php" target = "_blank">AstonList</a>
					</div>
				</div>
				
			</form>
			
		</center>
	</body>
</html>