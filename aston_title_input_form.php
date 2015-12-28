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
			<form action = "aston_title_add.php" method = "post">
				<b><font size="6">Aston</font></b>
				<div class = "outer_div">
					<div class = "inner_div2">
						<!--<input type = "text" placeholder = "Programmer Name" name = "program_name" style="width: 330px; height : 40px;" >-->
						<select name = "program_name">
							<option value="5 PM">5 PM</option>
							<option value="11 PM">11 PM</option>
							<option value="TALK SHOW">TALK SHOW</option>
					
						</select>
					</div>
					<div class = "inner_div3">
						<input type = "text" placeholder = "Title" name = "title" style="width: 330px; height : 40px;" >
					</div>
					
					<a href = "news_graphics_menu.php">Home</a>
					<div class = "inner_div6">
						<input type = "submit" value = "Add" >
					</div>
					<div class = "inner_div5">
						<a href = "aston_add_input_form.php" target = "_blank" >AddAston</a>
					</div>
					<div class = "inner_div7">
						<a href = "all_aston_clear.php">AllClear</a>
					</div>
				</div>
				
			</form>
			
		</center>
	</body>
</html>