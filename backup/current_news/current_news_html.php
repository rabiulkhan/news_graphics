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
                bottom: 81px;
                
            }
			
			#ScrollerText
			{
			    
				position : absolute;
                bottom : 7%;
				height : 56px;
				color : white;
	            font-size : 30px;
	            text-align : center;
	            
				
			}
			#ScrollerText1
			{
			    
				position : absolute;
                bottom : 0%;
				height : 56px;
				color : white;
	            font-size : 20px;
	            text-align : center;
	            
				
			}
			#header_content
			{
				position: absolute;
                
                bottom: 0px;
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
			$oldfile = fopen("oldfile.txt", "r") or die("Unable to open file!");
			//ob_start();
			
			$header = fgets($oldfile);
			?>

		<div id="scroller">
            <img src="image\News-Ticker-Content-Band.png">
			<div id="ScrollerText"><?php echo $header;?></div>
			
        </div> 
		<?php 
			/*ob_flush();
			  flush();
			 // $header = "";
			  sleep(3);*/
			  
			 //$oldfile = fopen("oldfile.txt", "r") or die("Unable to open file!");
			//$newfile = fopen("newfile.txt", "w") or die("Unable to open file!");
			$string = "";
			$fullLength = trim(strlen($oldfile)-5);		
			while(!feof($oldfile)){
				
				
				$string = $string.fgets($oldfile);
			}
			//echo $string;
			//echo $fullLength;
			//echo substr($oldfile,$length);
			//$newfile = fopen("newfile.txt", "w") or die("Unable to open file!");
			$oldfile = fopen("oldfile.txt", "w") or die("Unable to open file!");
			fwrite($oldfile, $string);
						//fclose($myfile);
				
			?>
    </body>
</html>
