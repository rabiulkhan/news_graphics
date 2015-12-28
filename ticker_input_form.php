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
		<title>Ticker </title>
		<link rel="stylesheet" type="text/css" href="ticker_style.css">
		<link rel="stylesheet" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,700,300italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome/font-awesome.css" rel="stylesheet">
  <link href="css/base.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">	</head>
	<body>
		<center>
			<form action = "ticker_txt_convert.php" method = "post">
				<b><font size="6">Ticker</font></b>
				<div class = "outer_div">
					
					<!--<div class = "inner_div2">
						<input type = "number" placeholder = "Speed" name = "speed" style="width: 330px; height : 40px;" >
					</div>-->
					
					<div class = "inner_div3">
						<!--<textarea rows="40" cols="8" placeholder = "Message" name = "message"  style="width: 330px; height : 160px;">
						 
						</textarea>-->
						<textarea cols=12 rows=180  name = "message"  style="width: 330px; height : 160px;" onkeyup="zxcMaxLines(this);" ></textarea>
					</div>
					<!--
					<a href = "json_convert2.php">upload</a>
					-->
					<a href = "news_graphics_menu.php">Home</a>
					<div class = "inner_div4">
						<input type = "submit" name = "submit" value = "ADD" >
					</div>
					<div class = "inner_div5">
						<a href = "ticker_clear.php">ClearText</a>
					</div>
				</div>
				
				
			</form>
			
		</center>
		
		<script>
			// Limit Lines (10-11-2005)
			// by Vic Phillips http://www.vicsjavascripts.org.uk

			// Customise
			var MaxCharactorsForLine=50;
			//var MaxLines=80;

			// Functional Code
			var MaxTxt='^^~£^'; // any strange string

			function zxcMaxLines(zxcobj){
			 if (zxcobj.value.indexOf(MaxTxt)==0){
			  zxcobj.value=MaxTxt;
			 return
			 }
			 zxcsplit=zxcobj.value.split('\\r\
			');
			 zxccnt=zxcsplit.length-1;
			 for (zxc0=0;zxc0<zxcsplit.length;zxc0++){
			  zxccnt+=Math.floor(zxcsplit[zxc0].length/MaxCharactorsForLine);
			 }
			 if (zxccnt>=MaxLines) { alert('Max'); MaxTxt=zxcobj.value; }
			}
</script>

	</body>
</html>
