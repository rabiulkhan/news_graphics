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
                
                bottom: 0px;
				width :100%;
                
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
			
			.x{
				font-family: "Times New Roman";
				}
			.y{
				font-family: "KongshoMJ";
				}	
			body{
				overflow : hidden;
			}
        </style>
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
		</script>
		<script type="text/javascript" src="js/xml_parse.js"></script>
    </head>
   
    <body>
		<?php
			$fileOpen = fopen("ticker.txt","r");
			
			$ticker = fgets($fileOpen);
		
		?>
         <ul id="ProfileList"></ul>
        <div id="scroller">
            <img src="Graphics\News-Ticker-Content-Band.png">
        </div>
		<div id="oScroll">
		<div id="ScrollerText" class = "y">
			<?php echo $ticker;?>
		</div>		 
		 </div><!--
         <div id="NewsScrollerTimer">
		     <img src="Graphics\News-Headline-Clock-Band.png">
		 </div>
		 <div id="NewsScrollerHead">
		     <img src="Graphics\News-Ticker-Header-Band.png">	 
		 </div>-->
		 <div id="NewsTickerHeadetText"><span id = "headline"></span></div>	
         <!--<div id="Timer"></div>	-->
		 
		
		
		
		<script type="text/javascript">
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.open("GET","2015_10_28_09_04_12_text.xml",false);
			xmlhttp.send();
			xmlDoc=xmlhttp.responseXML;
			 
			document.getElementById("headline").innerHTML=
			xmlDoc.getElementsByTagName("headline")[0].childNodes[0].nodeValue;
			document.getElementById("message").innerHTML=
			xmlDoc.getElementsByTagName("message")[0].childNodes[0].nodeValue;
		</script>
         
        
    </body>
</html>
