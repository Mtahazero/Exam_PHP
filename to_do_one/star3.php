<?php
 $star = 5;
 for($i = 0;$i<$star;$i++){
    for($j =0 ;$j <=$i;$j++){
        echo "* ";
    }
    echo "<br>";
 }
 for($i = 0 ;$i < $star;$i++){
    for($j = $star-$i-1 ;$j >0;$j--){
        echo "* ";
    }
    echo "<br>";
 }
?>