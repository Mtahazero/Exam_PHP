<?php
  $numbers =[2,4,3,1,6,7,5,8,0,9];
  $minmum = 0;
  $temp = 0;
  for($i = 0;$i<count($numbers)-1;$i++){
    $minmum = $i ;
    for($j = $i+1;$j<count($numbers);$j++){
        if($numbers[$minmum] > $numbers[$j]){
            $minmum = $j ;
        }
    }
    $temp = $numbers[$minmum];
    $numbers[$minmum] = $numbers[$i];
    $numbers[$i]=$temp;
  }
  echo "<pre>";
  print_r($numbers);
  echo "</pre>";

  for($i = 0;$i<count($numbers)-1;$i++){
    $minmum = $i ;
    for($j = $i+1;$j<count($numbers);$j++){
        if($numbers[$minmum] < $numbers[$j]){
            $minmum = $j ;
        }
    }
    $temp = $numbers[$minmum];
    $numbers[$minmum] = $numbers[$i];
    $numbers[$i]=$temp;
  }
  echo "<pre>";
  print_r($numbers);
  echo "</pre>";
?>
