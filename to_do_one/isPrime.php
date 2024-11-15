<?php
function prime($num){
    if($num<2)return false;
    for($i = 2;$i<=sqrt($num);$i++){
        if($num % $i ==0){
            return false;
        }
    }
    return true;
}

$num =  1;

echo ((prime($num))?"Number Is Prime ":"Number Is Not Prime");

?>