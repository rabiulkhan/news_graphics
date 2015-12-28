<?php
   
   
   $news = array(
    array(
	    $myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
		// Output one line until end-of-file
		while(!feof($myfile)) {
		   $headline =  fgets($myfile);
		   $message =  fgets($myfile);
		   
		"headline" => "$headline",
        "message" =>"$message"
		   
		}
        
    )
);
		fclose($myfile);
file_put_contents('news.json', json_encode($news));

   
?>