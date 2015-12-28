<?php
function char_at($str,$pos)
{
	return $str{$pos};
}
$myfile = fopen("ticker.txt", "w") or die("Unable to open file!");

//$message =  $_POST['message'];
/*$msg = trim(preg_replace('/\s+/', ' ', $_POST['message']));
//$msg = trim($_POST['message'])."\n";

echo $sub;
fwrite($myfile, $msg);
fclose($myfile);*/

$message =  trim(preg_replace('/\s+/', ' ', $_POST['message']));
$totalMsgArray = explode(" ",$message);

$totalLength = sizeof($totalMsgArray);
//echo $totalLength;
$stringCount = 0;

$len = strlen($message)/3;

//word count

while($totalLength > 0){
	$a = "";
	for($count = 0; $count < 10; $count++){
		$a = $a." ".$totalMsgArray[$stringCount];
		$stringCount++;
	}
	
	if(sizeof($a)!= null){
		$a = $a."..."."\n";
	}
	
	fwrite($myfile,$a);
	//$count = 0;
	$totalLength = $totalLength - 10;
}
/*
$count = 0;
$total = 0;
while($len > 0){
	$a = "";
	
	for($count = $total; $count < $total+130; $count++){
		$a = $a.char_at($message,$count);
		
	}
	
	if(sizeof($a)!= null){
		$a = $a."..."."\n";
	}
	
	fwrite($myfile,$a);
	//$count = 0;
	$len = $len - 130;
	$total = $count;
}*/

header("Location:ticker_input_form.php");
   
?>
