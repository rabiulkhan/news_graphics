<?php

$host = "127.0.0.1";
$port = 5250;
// No Timeout 
$message = "clear 1-16";


require("CasparServerConnector.php"); // require the file containing the class on every page that needs it

$connector = new CasparServerConnector($host, $port); // all communication to the server will now be done through this object

$response = FALSE;


$response = $connector->makeRequest($message);
	
$connector->closeSocket();
header("Location:all_aston_list.php");
?>