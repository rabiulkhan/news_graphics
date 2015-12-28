<?php
//session_start();
session_start();
include('session.php');
if($login_session == "")
{
header('Location:http://10.3.10.196:86/index.php');
}
?>
<?php
include('../session.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<script src="jquery.min.js"></script>
<script type="text/javascript" src="lib/jquery.ntm/js/jquery.ntm.js"></script>
<link rel="stylesheet" href="css/style.css" />
<link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="lib/jquery.ntm/themes/default/css/theme.css" />
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,700,300italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome/font-awesome.css" rel="stylesheet">
  <link href="css/base.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
<script type="text/javascript">
            $(document).ready(function() {
                $('.demo').ntm();
            });
</script>
<link rel="stylesheet" type="text/css" href="style.css">

<script src="jquery-1.11.0.min.js"></script>
<script>

	jQuery(document).ready(function ($) {

	  $('#checkbox').ready(function(){
	    setInterval(function () {
		moveRight();
	    }, 3000);
	  });
  
	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;

	$('#slider').css({ width: slideWidth, height: slideHeight });

	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});    


</script>

<title>News Graphics</title>

</head>
<?php
if($login_session != "") {
?>
<body>
<header>

    <div class="branding">
      <div class="container clearfix">
        <div class="logo">
          <!--<a href="http://www.callmenick.com"><img src="img/deepto.png" style = "height : 80px; width : 80px;"></a>-->
        </div>
      </div>
    </div><!-- /.branding -->

    <div class="site-title">
      <div class="container">
        <center><h3><font size = "6">News Graphics</font></h3></center>
	<div style="height:55px;width:100px;border:0px solid red;margin-left:47%;"><a href = "../logout.php"><br><img src="../imgs/logout.png" alt=""  height=60% width=80% style="margin-top:-8px"></img></a></div>
      </div>
    </div><!-- /.site-title -->

  </header>
			<div class="tree-menu demo" id="tree-menu" style="border:0px solid red;">
			    
				<!--<center><font size = "5">News Graphics</font></center>-->
				
			</div>
			
			
			
			
			<div id="main">
    <div class="container">

      <div class="settings">
	  
		<div class="row">
          <font size = "5">Data Entry</font>
				<ul>
				       
				          <!--<li><a href="#">News Ticker</a></li>-->
						<li class="selected"><a href="ticker_input_form.php">Ticker</a></li>
						<li><a href="headline_input_form.php">Headline</a></li>
					  <li><a href="aston_input_form.php">Aston</a></li>
					  <li><a href="coming_up_input_form.php">Coming Up</a></li>
					<li><a href="running_program_input_form.php">Running Program</a></li>					  
					  <li><a href="current_news_input_form.php">Current News</a></li>
					  <li><a href="breaking_news_input_form.php">Breaking News</a></li>
				</ul>
			    </ul>
				<li><a href = "news_graphics_control.php">Control</a>
				
				</li>
        </div>

        

      </div>

    </div>
  </div><!-- #main -->

			
 <footer>
    <div class="container">
      <div class="clearfix">
        <center class="logo">
          <a href="http://www.callmenick.com/"><img src="img/deepto.png"></a>
        </center>
      </div>
      <div class="copyright">
        <span>&copy; 2015, Deepto TV<br>
        <a href="#">Web Link</a></span>
      </div>
    </div>
  </footer			
			
</body><?php } header("Location: ../index.php"); ?>
</html>			
