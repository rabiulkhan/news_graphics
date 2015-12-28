<?php
	
	$oldfile = fopen("oldfile.txt", "r") or die("Unable to open file!");
	//$newfile = fopen("newfile.txt", "w") or die("Unable to open file!");
	
	$header =  fgets($oldfile);
	//echo fgets($oldfile);
	$length = trim(strlen($header)-2);
	//$header1 =  fgets($oldfile);
	$string = "";
	$fullLength = trim(strlen($oldfile)-5);		
	while(!feof($oldfile)){
		
		
		$string = $string.fgets($oldfile);
	}
	echo $string;
	//echo $fullLength;
	//echo substr($oldfile,$length);
	//$newfile = fopen("newfile.txt", "w") or die("Unable to open file!");
	$oldfile = fopen("oldfile.txt", "w") or die("Unable to open file!");
	fwrite($oldfile, $string);
	fclose(oldfile);
	fclose(newfile);
	
	echo "Successfully uploaded";
	
?>