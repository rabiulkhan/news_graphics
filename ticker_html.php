<?php
//session_start();
/*
session_start();
include('session.php');
if($login_session == "")
{
header('Location:http://10.3.10.196:86/index.php');
}*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ticker</title>
    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
	<style>
		#ScrollerText
			{
			    
				position : absolute;
                white-space : nowrap;
				color : black;
				top : 971px;
				//height : 56px;
				margin-left : 218px;
				font-size : 46px;
	            
				
			}
		#nt-title-container {
			position : absolute;
			//height : 56px;
			//width : 100%;
			text-align : center;
			top : 970px;
			margin-left : 87px;
		}
		#NewsScrollerTimer
            {
			
                position: absolute;
                //bottom: 50px;
                display:inline;
                right: 0px;
				top : 970px;
                
            }
		#Timer
		{
			position : absolute;
			text-align : center;
			right : 105px;
			color : yellow;
			//bottom : 44px;
			top : 980px;
			font-size : 30px;
			width : 250px;
			height : 56px
		}
		.y{
			font-family: "KongshoMJ";
			}	
			
		.x{
			font-family: Arial;
		}
	</style>
  </head>
  <body>
    
	    			
	    			<div id="nt-title-container">
						<!--<img src="Graphics\News-Ticker-Content-Band.png">-->
						
						<img src="Graphics\News-Ticker-White-Band.png">
					</div>
					<?php 
						$file = fopen("ticker.txt", "r");
						$i = 0;
						while (!feof($file)) {
							$posts[] = fgets($file);
						}	
						?>
					
					<div id="ScrollerText">
					
	    				<ul id="SCROLL" class = "y">
						<?php 
						for($i = 0; $i < sizeof($posts); $i++){
							?>
		    				<li>
		    					 <?php echo $posts[$i];?>
		    				</li>
						<?php 
						}
						?>
	    				</ul>
						
	    			</div>
					<div id="NewsScrollerTimer">
						 <img src="Graphics\News-Headline-Clock-Band.png">
					 </div>
					<div id="Timer" class = "x"></div>
					
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.min.js"></script>
    <script src="jquery.newsTicker.js"></script>
    <script>
    		$('a[href*=#]').click(function(e) {
			    var href = $.attr(this, 'href');
			    if (href != "#") {
				    $('html, body').animate({
				        scrollTop: $(href).offset().top - 81
				    }, 500);
				}
				else {
					$('html, body').animate({
				        scrollTop: 0
				    }, 500);
				}
			    return false;
			});

    		$(window).load(function(){
	            $('code.language-javascript').mCustomScrollbar();
	        });
            var nt_title = $('#SCROLL').newsTicker({
                row_height: 50,
                max_rows: 1,
                duration: 6000,
                pauseOnHover: 0
            });
        </script>
	<script type = "text/javascript">
			var myVar=setInterval(function(){myTimer()},1000);

		   function myTimer() {
			var d = new Date();
			document.getElementById("Timer").innerHTML = d.toLocaleTimeString();
			}
		
			</script>
       
  </body>
</html>
