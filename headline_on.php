<?php
$myfile = fopen("headline.txt", "w") or die("Unable to open file!");
$head = trim($_POST['headline_name'])."\n";
fwrite($myfile, $head);

fclose($myfile);
//$host = "10.3.10.195";
$host = "127.0.0.1";
$port = 5250;
// No Timeout 
//$message = "loadbg 1-13 [html] http://10.3.10.196/news_graphics/headline_html.php auto";
$message = "loadbg 1-13 [html] http://localhost/news_graphics/headline_html.php auto";

require("CasparServerConnector.php"); // require the file containing the class on every page that needs it

$connector = new CasparServerConnector($host, $port); // all communication to the server will now be done through this object

$response = FALSE;


$response = $connector->makeRequest($message);
	
$connector->closeSocket();
header("Location:headline_list.php");
?>
