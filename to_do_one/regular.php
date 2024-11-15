<?php
   $str ="you need to be string in this life ";
   $word = "/kids/i";
   if(preg_match($word, $str)==1){
    echo "String contains another string";
   }else{
    echo "String Not contains another string";
   }
   
?>