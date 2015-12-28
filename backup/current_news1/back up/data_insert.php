<?php
	//Set your variables
	$host = "localhost";
	$username = "root";
	$password = "password";
	$database = "graphics_control";
	$table = "user";

	//Make your connection to database
	$con = mysql_connect($host,$username,$password);

	//Check your connection
	if (!$con) {
		die("Could not connect: " . mysql_error());
	}

	//Select your database
	$db_selected = mysql_select_db($database, $con);

	//Check to make sure the database is there
	if (!$db_selected) {
		die ('Can\'t use the db : ' . mysql_error());
	}
	$date_time = date('Y/m/d H:i:s');
	//Run query
	$result = mysql_query("INSERT INTO $table(headline,message) VALUES('$_POST[headline]','$_POST[message]')");

	//Check Query
	if (!$result) {
		die("lid query: " . mysql_error());
	}
	echo "Data inserted";

	mysql_close($con);
?>