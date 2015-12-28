<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #scroller{
                position: absolute;
                
                bottom: 54px;
				//width :100%;
				left : 190px;
				height : 56px;
                
            }
            #NewsScrollerHead
            {
				position: absolute; 
                bottom: 0px;
				display:inline;
                left: 0px;
            }
            #NewsScrollerTimer
            {
			
                position: absolute;
                bottom: 50px;
                display:inline;
                right: 0px;
                
            }
			#NewsTickerHeadetText
			{
			    position : absolute;
				text-align : center;
				color : white;
				bottom : 0px;
				font-size : 30px;
				width : 250px;
				height : 56px;
			}
			#Timer
			{
			    position : absolute;
				text-align : center;
				right : 50px;
				color : yellow;
				bottom : 44px;
				font-size : 30px;
				width : 250px;
				height : 56px
			}
			#oScroll
			{
	            position : absolute;
	            bottom : 0px;
                width : 100%;
				
                //height : 100px;
                //overflow : hidden;
	           //background-color : lightblue;
            }
			#ScrollerText
			{
			    
				position : absolute;
                white-space : nowrap;
                top : 972px;
				//height : 56px;
				//width : 100%;
				color : white;
				font-size:46px;
	            text-align : center;
				margin-left: 190px;
				
	            
	            
				
			}
			.tab{
				margin-left: 190px;
			}
			.y{
				font-family: "KongshoMJ";
				}	
				
			.x{
				font-family: Arial;
			}
			body{
				overflow : hidden;
			}
			
			
		.scroll-left {
		 height: 50px;	
		 overflow: hidden;
		 position: relative;
		 float : right;
		 width: 90%;
		}
		.scroll-left p {
		 position: absolute;
		 width: 100%;
		 height: 100%;
		 margin : 0;
		 color : white;
		 line-height: 50px;
		 text-align: center;
		 /* Starting position */
		 -moz-transform:translateX(100%);
		 -webkit-transform:translateX(100%);	
		 transform:translateX(100%);
		 /* Apply animation to this element */	
		 -moz-animation: scroll-left 40s linear infinite;
		 -webkit-animation: scroll-left 40s linear infinite;
		 animation: scroll-left 40s linear infinite;
		}
		/* Move it (define the animation) */
		@-moz-keyframes scroll-left {
		 0%   { -moz-transform: translateX(100%); }
		 100% { -moz-transform: translateX(-100%); }
		}
		@-webkit-keyframes scroll-left {
		 0%   { -webkit-transform: translateX(100%); }
		 100% { -webkit-transform: translateX(-100%); }
		}
		@keyframes scroll-left {
		 0%   { 
		 -moz-transform: translateX(100%); /* Browser bug fix */
		 -webkit-transform: translateX(100%); /* Browser bug fix */
		 transform: translateX(100%); 		
		 }
		 100% { 
		 -moz-transform: translateX(-100%); /* Browser bug fix */
		 -webkit-transform: translateX(-100%); /* Browser bug fix */
		 transform: translateX(-100%); 
		 }
		}
        </style>
		
		<script type = "text/javascript">
			var myVar=setInterval(function(){myTimer()},1000);

		   function myTimer() {
			var d = new Date();
			document.getElementById("Timer").innerHTML = d.toLocaleTimeString();
			}
		</script>
    </head>
   
    <body>
	<p id ="test"></p>
		<?php
			$fileOpen = fopen("ticker.txt","r");
			
			$ticker = fgets($fileOpen);
		
		?>
         <ul id="ProfileList"></ul>
		 	
        <div id="scroller">
            <img src="Graphics\News-Ticker-Content-Band.png">
        </div>
		<div class = "">
		<div id="ScrollerText" class = "y scroll-left">
			<p><?php echo $ticker;?></p>
		</div>		 
		 </div>
         <div id="NewsScrollerTimer">
		     <img src="Graphics\News-Headline-Clock-Band.png">
		 </div>
		 <!--<div id="NewsScrollerHead">
		     <img src="Graphics\News-Ticker-Header-Band.png">	 
		 </div>-->
		 <div id="NewsTickerHeadetText"><span id = "headline"></span></div>	
         <div id="Timer" class = "x"></div>
		
    </body>
</html>
