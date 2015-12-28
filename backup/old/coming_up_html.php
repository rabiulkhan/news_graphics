<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>বিরতির পর ......</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #scroller{
                position: absolute;
                
                bottom: 57px;
				height : 81px;
				left : 190px;
                
            }
			#scroller_super_headerContent{
                position: absolute;
                left : 0px;
                bottom: 55px;
                
            }
			#scroller_super_headLine{
                position: absolute;
                left: 0px;
                bottom: 75px;
				width : 100%;
                
            }
			
			#ScrollerText_super
			{
			position : absolute;
                white-space : nowrap;
                bottom : 13px;
				height : 56px;
				color : black;
	            font-size : 42px;
	            text-align : center;
				LEFT : 35px;
			}
			
			#ScrollerSubHeader
			{
			    
				position : absolute;
               // white-space : nowrap;
                bottom : 15px;
				left : 35px;
				font-size : 28px;
				height : 40px;
				color : yellow;
	            font-size : 42px;
				width : 100%;
	            //text-align : center;
	           	
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
                bottom: 0px;
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
				height : 56px
			}
			#Timer
			{
			    position : absolute;
				text-align : center;
				right : 50px;
				color : yellow;
				bottom : 0px;
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
                bottom : 0%;
				height : 56px;
				color : white;
	            font-size : 30px;
	            text-align : center;
	            
	            
				
			}
			
			#ScrollerText_super_headLine
			{
			    
				position : absolute;
                //white-space : nowrap;
                bottom : 0%;
				height : 56px;
				//width : 249px;
				color : yellow;
	            font-size : 40px;
	            text-align : center;
	           	
			}
			
			#topBox{
	            position : absolute;
	            bottom : 81px;
				bottom : 131px;
				//width : 100%;
				left : 190px;
				
			}
			
			#headLine_content{
				width : 100%;
			}
			
			#commercial
			{
			    position : absolute;
				
				right : 0px;
				bottom : 54px;
				
			}
			#logo
			{
				position : absolute;
				top : 10px;
				right : 120px;
				
				
			}
			
			#live_text
			{
				position : absolute;
				top : 10px;
				left : 10px;
				
				
			}
			
			#live_logo_text
			{
				position : absolute;
				top : 6px;
				left : 0px;
				
				
			}
			.y{
				font-family: "KongshoMJ";
				}	
			body{
				overflow : hidden;
			}
        </style>
		<script src="jquery.min.js"></script>
		<script>
		
		var myVar=setInterval(function(){myTimer()},1000);

			   function myTimer() {
				var d = new Date();
				document.getElementById("Timer").innerHTML = d.toLocaleTimeString();
				}
				function scroll(oid,iid){
					  this.oCont=document.getElementById(oid)
					  this.ele=document.getElementById(iid)
					  this.width=this.ele.clientWidth;
					  this.n=this.oCont.clientWidth;
					  this.move=function(){
						 this.ele.style.left=this.n+"px"
						 this.n--
						 if(this.n<(-this.width)){this.n=this.oCont.clientWidth}
										  }
										 }
				 var vScroll
				 function setup(){
					 vScroll=new scroll("oScroll","ScrollerText");
					 //vSuper=new scroll("oScroll","super");
					 setInterval("vScroll.move()",8)
					 //setInterval("vSuper.move()",5)
								 }
			  onload=function(){setup()}
			  
			  
			  $(document).ready(function(){
			function tick() {
			//$("#scroller").slideUp();
			$("#scroller_super_headLine").slideUp();
			$("#scroller_super_headLine").slideDown();
			 $("#scroller_super_headLine").hide().delay(3000);
			 }
			 function tick2(){
				$("#scroller_super_headerContent").slideUp();
				$("#scroller_super_headerContent").slideDown();
				$("#scroller_super_headerContent").hide().delay(6000);
					   
				
				}
				
				//$("#scroller").slideDown();
				//$("#scroller").ticker({ effect: "slideUp", interval: 4000});
				//$("#scroller").ticker({ effect: "slideDown", interval: 4000});
				//setInterval(tick, 6000);
				//setInterval(tick2, 3500);
				function call(){
				tick();
				tick2();
				}
				//setInterval(call, 6000)
				 
				 
			});
	
		</script>
    </head>
   
    <body>
		 <!--<div id ="scroller_super_headLine">
            <img style = "width : 100%" src="Graphics\News-Aston-Designation-Band.png" />
			<div id="ScrollerText_super_headLine">শিরোনাম</div>
         </div>-->
            
		
		
		<div id="scroller_super_headerContent">
			<div id="topBox">
				<img src="Graphics\Sub-Header-Band.png"> 
				<div id="ScrollerSubHeader" class = "y"><b>বিরতির পর‌্</b></div>
			</div>
			<?php
			$oldfile = fopen("coming_up.txt", "r") or die("Unable to open file!");
			//ob_start();
			
			$header = fgets($oldfile);
			?>
			<div id="scroller" class = "y">
				<img  src="Graphics\News-Headline-Band.png">  
				<div id="ScrollerText_super"><b><?php echo $header;?></b></div>
			</div>
			<?php 
			$string = "";		
			while(!feof($oldfile)){
				
				
				$string = $string.fgets($oldfile);
			}
			$oldfile = fopen("coming_up.txt", "w") or die("Unable to open file!");
			fwrite($oldfile, $string);
				
			?>
		</div>    
    </body>
</html>
