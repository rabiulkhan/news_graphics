<?php
$head = $_POST['title'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news_graphics";
   
   $conn = new mysqli($servername, $username, $password, $dbname);
   mysql_select_db('news_graphics');
  /* $id = 0;
   $sql = "SELECT aston_id FROM aston order by time desc limit 1";
   
   if($query_run=  mysqli_query($conn,$sql)){
	   while($query_row=  mysqli_fetch_assoc($query_run)){
  
  $aston_id = $query_row['aston_id'];
   $id = $aston_id + 1;
	   }
   }
*/
   
$query = "UPDATE
  aston_title t1 INNER JOIN aston_title t2
  ON (t1.aston_title_id, t2.aston_title_id) IN (($head,$head-1),($head-1,$head))
SET
  t1.create_date = t2.create_date,
  t1.title = t2.title,
  t1.time = t2.time;";



if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location:aston_title_list.php");

?>
