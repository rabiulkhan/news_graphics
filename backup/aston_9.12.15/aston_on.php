<?php

$host = "10.3.10.195";
$port = 5250;
// No Timeout 
$message = "loadbg 1-16 [html] http://10.3.10.196/news_graphics/aston_html.php auto";


require("CasparServerConnector.php"); // require the file containing the class on every page that needs it

$connector = new CasparServerConnector($host, $port); // all communication to the server will now be done through this object

$response = FALSE;


$response = $connector->makeRequest($message);
	
$connector->closeSocket();
header("Location:news_graphics_control.php");
?>
