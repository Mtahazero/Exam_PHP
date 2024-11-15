<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border =1>
        <?php
         for($i = 1;$i<=8;$i++){
            echo "<tr>";
            for($j = 1;$j<=8;$j++){
               if($i %2 == 0 && $j%2 ==0 || $i%2==1 &&$j%2==1){
                echo "<td style = 'background-color: black;width:70px;height:70px;'></td>";
               }else{
                echo "<td style = 'background-color: white;width:70px;height:70px;'></td>";
               }
                
            }
            echo "</tr>";
            
          
         }
        ?>
    </table>
</body>
</html>