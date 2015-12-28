<?php
//session_start();
session_start();
include('session.php');
if($login_session == "")
{
header('Location:http://10.3.10.196:86/index.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>News Description version 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #scroller{
                position: absolute;
                bottom: 112px;
				height : 81px;
				left : 190px;
                
            }
			
			#ScrollerText3
			{
			    
				position : absolute;
				top : 60px;
				right : 250px;
				color : white;
				font-size : 34px;
	            
				
			}
			#ScrollerText2
			{
			    
				position : absolute;
				top : 95px;
				right : 250px;
				color : yellow;
				font-size : 36px;
	            
				
			}
			#ScrollerText1
			{
			    
				position : absolute;
                bottom : 0%;
				height : 56px;
				color : Black;
	            font-size : 20px;
	            text-align : center;
	            
				
			}
			.y{
				font-family: "KongshoMJ";
				}	
			body{
				overflow : hidden;
			}
        </style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script> 
			function toRight(){
				setTimeout(function () {
				$("#ScrollerText").animate({
					width: 'hide'
				});
				}, 2000);
				}
				
			/*function toLeft(){
					$('#ScrollerText').animate({'opacity': 0}, 1000, function () {
					$(this).text('new text');
					}).animate({'opacity': 1}, 1000);
				}*/
				
			function toLeft(){
				setTimeout(function () {
				$("#ScrollerText").animate({
					width: 'show'
				});
				}, 4000);
				}	
				
			toRight();
			toLeft();
			
		</script>
    </head>
   
    <body>
		<?php
			$myfile = fopen("running_program.txt", "r") or die("Unable to open file!");
			$header = fgets($myfile);
			$msg = fgets($myfile);
		?>
		
			<div id="ScrollerText3" class = "y"><?php echo $header;?></div>
			<div id="ScrollerText2" class = "y"><?php echo $msg;?></div>
			
        
		<?php
			fclose($myfile);
		?>
    </body>
</html>
