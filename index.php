<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
    <link rel="stylesheet" href="style.css">
</head>

    
 <header><p>Grupikaaslased</p></header>
<body>
  
<?php
 
   require('menuu.php');
    
    echo "<div>Tere tulemast meie grupi lehele, oled AVALEHEL</div>";
    echo "<br>";
    menuu($menuu_begin,$menuu_arr,$menuu_end);
    echo "<br>";
 
  
?>
</body>
    <footer><p>autor: Tuuli Pruuli, MS16, 2017</p></footer>
</html> 