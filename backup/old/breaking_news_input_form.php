<html>
	<head>
		<meta charset="UTF-8">
		<title>ব্রেকিং </title>
		<link rel="stylesheet" type="text/css" href="breaking_news_style.css">
		<link rel="stylesheet" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,700,300italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome/font-awesome.css" rel="stylesheet">
  <link href="css/base.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">	</head>
	<body>
		<center>
			<form action = "breaking_news_txt_convert.php" method = "post">
				<b><font size="6">ব্রেকিং </font></b>
				<div class = "outer_div">
					<!--
					<div class = "inner_div2">
						<input type = "text" placeholder = "headline" name = "headline" style="width: 330px; height : 40px;" >
					</div>
					-->
					<div class = "inner_div3">
						<textarea rows="10" cols="40" placeholder = "Message" name = "message"  style="width: 330px; height : 160px;">
						 
						</textarea>
					</div>
					<!--
					<a href = "json_convert2.php">upload</a>
					-->
					<a href = "news_graphics_menu.php">Home</a>
					<div class = "inner_div4">
						<input type = "submit" value = "Upload" >
					</div>
				</div>
				
				
			</form>
			
		</center>
	</body>
</html>