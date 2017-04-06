<?php include 'mysql.php';
include 'menuu.php';
?>

<!doctype html>
<html>
<body>
    
<form>
    <ul>
    <li><?php add_button($conn); ?></li>
        <li>
        <lable for="nimi">Nimi</lable>
            <input type="text" Name="nimi" required>
            
        <lable for="perenimi">Perenimi</lable>
              <input type="text" Name="perenimi">
        <lable for="sunniaasta">sünniaasta</lable>
              <input type="text" Name="sunniaasta" required>
        </li>
        
        </ul>
    </form>
    <form>
        
        
    <li><?php delete_button($conn); ?></li> 
        <ul>
        <li>
        <lable for="PARAM">Veerg</lable>
            <input type="text" name="PARAM">
        <label for="ID">Sisesta  väärtus</label>
            <input type="text" name="ID">
        </li>
    </ul>
    </form>
    
    
    
  
    
</body>

</html>