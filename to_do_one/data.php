<?php
  $data = strtotime("2012-12-21");
  $Newdata = strtotime("+1 months",$data);
  echo date("Y-m-d",$Newdata);
   
?>