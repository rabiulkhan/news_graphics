<?php

$host = "127.0.0.1";
$port = 5250;
// No Timeout 
$message = "loadbg 1-10 amb auto\r\n";
set_time_limit(0);

$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
//$msgsock = socket_accept($socket);
socket_connect($socket, $host, $port) or die("Could not connect toserver\n");

socket_write($socket, $message, strlen ($message)) or die("Could not send data to server\n");
header("Location:news_graphics_control.php");
//socket_close($socket);
?>
