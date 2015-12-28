<?php
   $arr = array();
   
   for($i = 0;$i<5;$i++)
   {
   $arr[$i] = '{'.$i .','. $i.'}';
   }
   
   echo json_encode($arr);
?>