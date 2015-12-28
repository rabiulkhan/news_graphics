<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news_graphics";

$des = $_POST['headline'];
$date = date("Y-m-d");
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO coming_up (create_date,`headline`,`time`)
VALUES ('$date','$des',Now())";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location:coming_up_input_form.php");
?>