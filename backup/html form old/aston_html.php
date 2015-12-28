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
                left : 0px;
                bottom: 55px;
                
            }
			
			#ScrollerText3
			{
			    
				position : absolute;
                bottom : 30%;
				height : 56px;
				color : Black;
	            font-size : 30px;
	            text-align : center;
	            
				
			}
			#ScrollerText2
			{
			    
				position : absolute;
                bottom : 3%;
				height : 56px;
				color : Black;
	            font-size : 30px;
	            text-align : center;
	            
				
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
			$myfile = fopen("aston.txt", "r") or die("Unable to open file!");
			$header = fgets($myfile);
			$msg = fgets($myfile);
		?>
		<div id="scroller" class= "y">
            <img src="Graphics\News-Headline-Band.png">
			<div id="ScrollerText3"><?php echo $header;?></div>
			<div id="ScrollerText2"><?php echo $msg;?></div>
			
        </div> 
		<?php
			fclose($myfile);
		?>
    </body>
</html>
