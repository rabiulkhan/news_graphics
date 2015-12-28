<!DOCTYPE html>

<html class="no-js" lang="en">
<head>
  <!-- title and meta -->
  <meta charset="utf-8">
  <meta content="width=device-width,initial-scale=1.0" name="viewport">
  <meta content="" name="Here are some CSS toggle switch examples. We'll be using pure CSS to create some toggle switches, adding a neat user experience to checkbox functionality.">

  <title>CSS Toggle Switch Examples Using Radio Buttons</title>

  <!-- css -->
  <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,700,300italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome/font-awesome.css" rel="stylesheet">
  <link href="css/base.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <!-- js -->
  <!--[if lt IE 9]><script src="js/html5shiv.min.js"></script><![endif]-->
</head>

<body>

<div id="wrapper">
  
  <div class="info-bar">
    <div class="container">
      <a class="icon fa fa-home" data-title="Back To Tutorial" href="http://www.callmenick.com/?p=594"></a>
      <a class="icon fa fa-arrow-left" data-title="Pevious Demo - Simple CSS3 Transitions, Transforms, &amp; Animations Compilation" href="http://www.callmenick.com/tutorial-demos/css3-transitions-compilation/"></a>
      <!-- <a class="icon fa fa-arrow-right" data-title="Next Demo - " href="http://www.callmenick.com/tutorial-demos/..."></a> -->
      <a class="icon fa fa-download" data-title="Download Source" href="http://www.callmenick.com/tutorial-demos/css-toggle-switch/css-toggle-switch-source.zip"></a>
      <a class="icon fa fa-folder-open" data-title="Tutorial Archives" href="http://www.callmenick.com/category/tutorials/"></a>
    </div>
  </div><!-- /.info-bar -->

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
        <h3>News Graphics Control</h3>
		<a href = "news_graphics_menu.php"><h3>Home</h3></a>
      </div>
    </div><!-- /.site-title -->

  </header>

  <div id="main">
    <div class="container">

      <div class="settings">
	  
	  
		<!-- /row -->
		<div class="row">
          <div class="question">
            Ticker
          </div>
          <div class="switch">
            <!--<input id="cmn-toggle-6" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
            <label for="cmn-toggle-6" data-on="ON AIR" data-off="OFF"></label>-->
          <button class = "button_size" id = "ticker_on" onclick="ticker_on()"><font size = "4">ON AIR</font></button>
          </div>
		  <div class="switch">
			<button class = "button_size" onclick="ticker_off()" ><font size = "4">OFF</font></button>
		  </div>
        </div>
		
        <div class="row">
          <div class="question">
            Headline
          </div>
          <div class="switch">
            <!--<input id="cmn-toggle-2" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
            <label for="cmn-toggle-2" data-on="ON AIR" data-off="OFF"></label>-->
			<button class = "button_size" onclick="headline_on()"><font size = "4">ON AIR</font></button>
          </div>
		  <div class="switch">
			<button class = "button_size" onclick="headline_off()"><font size = "4">OFF</font></button>
		  </div>
		  <!--<div class="switch">
			<button class = "button_size" ><font size = "4">NEXT</font></button>
		  </div>-->
        </div><!-- /row -->
		
		<div class="row">
          <div class="question">
           Aston
          </div>
          <div class="switch">
            <!--<input id="cmn-toggle-5" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
            <label for="cmn-toggle-5" data-on="ON AIR" data-off="OFF"></label>-->
          <button class = "button_size" onclick="aston_on()"><font size = "4">ON AIR</font></button>
          </div>
		  <div class="switch">
			<button class = "button_size" onclick="aston_off()"><font size = "4">OFF</font></button>
		  </div>
        </div>
		<div class="row">
          <div class="question">
           Coming Up
          </div>
          <div class="switch">
            <!--<input id="cmn-toggle-5" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
            <label for="cmn-toggle-5" data-on="ON AIR" data-off="OFF"></label>-->
          <button class = "button_size" onclick="coming_up_on()"><font size = "4">ON AIR</font></button>
          </div>
		  <div class="switch">
			<button class = "button_size" onclick="coming_up_off()"><font size = "4">OFF</font></button>
		  </div>
        </div>
		
		
		
		
        <div class="row">
          <div class="question">
            Current News
          </div>
          <div class="switch">
            <!--<input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
            <label for="cmn-toggle-3" data-on="ON AIR" data-off="OFF"></label>-->
			<button class = "button_size" onclick="current_news_on()"><font size = "4">ON AIR</font></button>
          </div>
		  <div class="switch">
			<button class = "button_size" onclick="current_news_off()"><font size = "4">OFF</font></button>
		  </div>
		  <!--<div class="switch">
			<button class = "button_size" ><font size = "4">NEXT</font></button>
		  </div>-->
        </div><!-- /row -->

        <div class="row">
          <div class="question">
            Breaking News
          </div>
          <div class="switch">
            <!--<input id="cmn-toggle-4" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
            <label for="cmn-toggle-4" data-on="ON AIR" data-off="OFF"></label>-->
          <button class = "button_size" onclick="breaking_news_on()"><font size = "4">ON AIR</font></button>
          </div>
		  <div class="switch">
			<button class = "button_size" onclick="breaking_news_off()"><font size = "4">OFF</font></button>
		  </div>
        </div><!-- /row -->
		

        <div class="row">
          <div class="question">
            Live
          </div>
          <div class="switch">
            <!--<input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
            <label for="cmn-toggle-1" data-on="ON AIR" data-off="OFF" onClick="live_controll(var a)"></label>-->
			<button class = "button_size" onclick="live_on()"><font size = "4">ON AIR</font></button>
          </div>
		  <div class="switch">
			<button class = "button_size" onclick="live_off()"><font size = "4">OFF</font></button>
		  </div>
        </div>

		<div class="row">
          <div class="question">
            Logo
          </div>
          <div class="switch">
            <!--<input id="cmn-toggle-7" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
            <label for="cmn-toggle-7" data-on="ON AIR" data-off="OFF"></label>-->
			<button class = "button_size" onclick="logo_on()" id = "logo_on" ><font size = "4">ON AIR</font></button>
          </div>
		  <div class="switch">
			<button class = "button_size" onclick="logo_off()" id = "logo_off"><font size = "4">OFF</font></button>
		  </div>
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
  </footer><!-- /footer -->
  
</div><!-- /#wrapper -->

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-34160351-1']);
_gaq.push(['_trackPageview']);
(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>



<script>
function logo_off() {
	
		window.location.assign("logo_off.php")
		
		
	   
}
function logo_on(){
	window.location.assign("logo_on.php") 
}
function live_off() {
	
		window.location.assign("live_off.php")
	   
}
function live_on(){
	window.location.assign("live_on.php")
}
function headline_on() {
	
		window.location.assign("headline_on.php")
	   
}
function headline_off(){
	window.location.assign("headline_off.php")
}
function ticker_on() {
	
		window.location.assign("ticker_on.php")
	   
}
function ticker_off(){
	window.location.assign("ticker_off.php")
}

function current_news_on() {
	
		window.location.assign("current_news_on.php")
	   
}
function current_news_off(){
	window.location.assign("current_news_off.php")
}
function breaking_news_on() {
	
		window.location.assign("breaking_news_on.php")
	   
}
function breaking_news_off(){
	window.location.assign("breaking_news_off.php")
}

function aston_on() {
	
		window.location.assign("aston_on.php")
	   
}
function aston_off(){
	window.location.assign("aston_off.php")
}
function coming_up_on() {
	
		window.location.assign("coming_up_on.php")
	   
}
function coming_up_off(){
	window.location.assign("coming_up_off.php")
}

</script>

</body>
</html></span>
      </div>
    </div>
  </footer><!-- /footer -->
  
</div><!-- /#wrapper -->

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-34160351-1']);
_gaq.push(['_trackPageview']);
(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

</body>
</html>