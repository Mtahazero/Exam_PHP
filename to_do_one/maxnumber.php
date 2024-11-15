<?php
   $array =[10,30,20];
   $maxmum = 0 ;
   foreach($array as $arr){
    if($maxmum < $arr) $maxmum =$arr;
   }
   echo $maxmum;
?>