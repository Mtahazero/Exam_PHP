<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>  
<body  <?php
   if($_COOKIE) echo   "style = background:$_COOKIE[color]";
?>>
    <form method ='get' style = "margin:40px;">
        <select name="color" id="" style ="width:150px;font-size:30px;">
            <option value="white">white</option>
            <option value="Green">green</option>
            <option value="red" >red</option>
            <option value="Blue">blue</option>
            <option value="Black">black</option>
            <option value="Gold">gold</option>
            <option value="Yellow">yellow</option>
        </select>   
        <br><br>
        <input type ="submit" name ='submit' value ="submit" style= "width:100px;height:40px;"/>
    </form>
</body>
</html>
<?php
  if(isset($_GET["submit"])){
    setcookie('color',$_GET["color"],time()+(60+60));
    
  }
?>