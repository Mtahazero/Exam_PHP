<?php
$number = [1,2,3,4,5,6,7,8,9,10];

for($i = 0;$i<count($number);$i++){
    if($number[$i]%2==0){
    //  unset($number[$i]);
        array_splice($number,$i,1);
    }
   
}
echo "<pre>";
print_r($number);
echo "</pre>";

?>