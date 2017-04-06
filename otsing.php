<?php include 'mysql.php';
include 'menuu.php';
?>

<!doctype html>
<head> <meta charset="utf-8">

</head>
<html>
<body>
    
<h2>POST meetod</h2>
<form action='' method='post'>
    <ul>
    <li><?php show_button($conn); ?></li>
    </ul>
    </form>
    
        

    
    
    
    <h2>GET MEETOD</h2>
<form action='' method='get'>
    <ul>
    <li>
        <lable for="PARAM">Veerg</lable>
        <input type="text" name="PARAM">
        </li>
           <li>
        <lable for="ID">Väärtus</lable>
        <input type="text" name="ID">
        </li>
    <li><?php search_by_button($conn); ?></li>
    
    </ul>
    </form>
    
</body>

</html>