<?php
//session_start();
session_start();
include('session.php');
if($login_session == "")
{
header('Location:http://10.3.10.196:86/index.php');
}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Running Program</title>
		<link rel="stylesheet" type="text/css" href="running_program_style.css">
		<link rel="stylesheet" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,700,300italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome/font-awesome.css" rel="stylesheet">
  <link href="css/base.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">	</head>
	<body>
		<center>
			<form action = "running_program_txt_convert.php" method = "post">
				<b><font size="6">Running Program</font></b>
				<div class = "outer_div">
					
					<div class = "inner_div2">
						<input type = "text" placeholder = "Program Type" name = "headline" style="width: 330px; height : 40px;" >
					</div>
					
					<div class = "inner_div3">
						<input type = "text" placeholder = "Program Name" name = "message" style="width: 330px; height : 40px;" >
						<!--<textarea rows="10" cols="40" placeholder = "Program Name" name = "message"  style="width: 330px; height : 160px;">
						</textarea>-->
					</div>
					<!--
					<a href = "json_convert2.php">upload</a>
					-->
					<a href = "news_graphics_menu.php">Home</a>
					<div class = "inner_div4">
						<input type = "submit" value = "ADD" >
					</div>
					<div class = "inner_div5">
						<a href = "running_program_clear.php">ClearText</a>
					</div>
				</div>
				
				
			</form>
			
		</center>
	</body>
</html>
