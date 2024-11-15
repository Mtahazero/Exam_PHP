 
<?php  
  $star = 5 ;
  for($i = 0;$i<$star;$i++){
    for($j = 0;$j<$star*2;$j++){
      if($j>=$star-$i-1 && $j<=$star+$i-1 ){
        if($i%2==0 && $j %2 ==0 ||$i%2==1 && $j %2 ==1){
          echo "*";
        }
        else{
          echo "&nbsp; ";
        }
        
      }
      else{
        echo "&nbsp; ";
      }
    }
    echo "<br>";
  }  
  for($i = $star-2;$i >= 0;$i--){
    for($j = 0;$j<$star*2;$j++){
      if($j>=$star-$i-1 && $j<=$star+$i-1){
        if($i%2==0 && $j %2 ==0 ||$i%2==1 && $j %2 ==1){
          echo "*";
        }
        else{
          echo "&nbsp; ";
        }
        
      }
      else{
        echo "&nbsp; ";
      }
    }
    echo "<br>";
  }  
?>  
