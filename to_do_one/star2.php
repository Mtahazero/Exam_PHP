<?php
 $star = 5 ;
 
 for($i = 0;$i < $star*2;$i++ ){
    for($j = 0;$j<=$i && $i <$star  ;$j++){
        echo "* ";
    }
    for($j = 0;$j <$star*2-$i&& $i >= $star  ;$j++){
        echo "* ";
    }
    echo "<br>";
 }
?>