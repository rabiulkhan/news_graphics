<?php  
 $fname = "newfile.txt"; 
 $lines = file($fname); 
 foreach($lines as $line) if(!strstr($line, "~")) $out .= $line;  
 $f = fopen($fname, "w");  
 fwrite($f, $out);  
 fclose($f);  
?>