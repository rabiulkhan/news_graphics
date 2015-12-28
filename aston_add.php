<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news_graphics";

$name 			= $_POST['name'];
$des 			= $_POST['designation'];
$title 			= $_POST['title'];
$program_name 	= $_POST['program_name'];
$date = date("Y-m-d");
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



/*$id = 0;

$sql = "SELECT aston_id FROM aston order by time desc limit 1";
           if($query_run=  mysqli_query($conn,$sql)){
               while($query_row=  mysqli_fetch_assoc($query_run)){
          
          $aston_id = $query_row['aston_id'];
           $id = $aston_id + 1;
			   }
		   }
*/

$sql = "INSERT INTO aston_add (create_date,`program_name`,`name`,`designation`,`title`,`time`)
VALUES ('$date','$program_name','$name','$des','$title',Now())";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location:aston_add_input_form.php");
?>