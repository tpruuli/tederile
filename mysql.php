<?php
require '/function.php';

//deffineerime ühenduse muutujad
home();
$server = "localhost";
$user ="root";
$pass ="";
$conn = new mysqli($server,$user,$pass);



//FUNCTION CONNECTION
//loome ühenduse
function connect($conn) {
//kontrollime ühenduse loetelu
if (!$conn){
    die("Ühendust ei leia pimedas üles" . mysqli_connect_error());
} echo "Kontakt on loodud, yey vana!<br>";}

//FUNCTION PÄRING
//pärime andmebaasist andmeid (kõik korraga)
function my_query($conn) {
$sql = "SELECT ID, nimi, perenimi, sunniaasta, sisestamisaeg FROM grupp16.kaaslased";
$result = $conn->query($sql);
        if ($result->num_rows > 0){
           while ($row = $result->fetch_assoc()){ 
            echo    "ID: ".$row ["ID"].
                    " Nimi: ".$row["nimi"].
                    " Perenimi: ".$row["perenimi"].
                    " sunniaasta ".$row["sunniaasta"].
                   // " pilt".$row["pilt"].
                    " sisestamisaeg ".$row["sisestamisaeg"].
                    "<br>"; 
        }} else {echo "Sul on tühi baas tee midagi!";}}

//BUTTON NÄITA
function show_button($conn){
    echo "<input type='submit' name='show' value='Näita kõik'><br>";
    if(isset($_POST['show'])){
        my_query($conn);                          
    }}

//FUNCTION PARAMEETRI OTSING
// parameetri otsing
function search_by($conn){
    $sql = "SELECT * FROM grupp16.kaaslased WHERE "
        .$_GET['PARAM']."='"
        .$_GET['ID']."'";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0){
           while ($row = $result->fetch_assoc()){ 
            echo    "ID: ".$row ["ID"].
                    " Nimi: ".$row["nimi"].
                    " Perenimi: ".$row["perenimi"].
                    " sunniaasta ".$row["sunniaasta"].
                    //" pilt".$row["pilt"].
                    " sisestamisaeg ".$row["sisestamisaeg"].
                    "<br>";
        }}  else {echo "Sul on tühi lahter!";}}

//BUTTON PARAMEETRI OTSING
//parameetri järgi otsmimise nupp
    function search_by_button($conn){
    echo "<input type='submit' name='search' value='Otsi parameetrite järgi'>";
    if(isset($_GET['search'])){
        if ($_GET['ID']==null){
            echo "Lahter ei tohi olla tühi";
        }    else {search_by($conn);}
    }}
function add_button ($conn){
    echo "<input type='submit' name='add' value='Lisa kirjele'>";
    if(isset($_POST['add'])){
        my_insert($conn);
   }}
//INSERT
function my_insert($conn){
    //sisestuse kontroll, mõistlikum oleks teha nupu vajutuse järel

    if ($_POST['nimi']==null OR $_POST['perenimi']==null){
        
    echo "Nimi ja Perenimi on kohustuslikud";} else {
    $sql = "INSERT INTO grupp16.kaaslased (nimi, perenimi, sunniaasta, sisestamisaeg) VALUES ('"
        .$_POST ['nimi']."','"
        .$_POST ['perenimi']."','"
        .$_POST ['sunniaasta']."','"
       // .$_POST ['pilt']."','"
        .$_POST ['sisestamisaeg']."')";

            $result = $conn->query($sql);}}
//BUTTON LISAMINE
//kirjele lisamise nupp
/*function add_button ($conn){
    echo "<input type='submit' name='add' value='Lisa kirjele'>";
    if(isset($_POST['add'])){
        my_insert($conn);
   }}
*/
function my_delete($conn){
    $sql = "DELETE FROM grupp16.kaaslased WHERE "
        .$_POST['PARAM']."='"
        .$_POST['ID']."'";
    $result = $conn->query($sql);}

//BUTTON KUSTUTAMINE
//kustutamise nupp
function delete_button ($conn){
    echo "<input type='submit' name='delete' value='Kustuta kirjest'>";
    if(isset($_POST['delete'])){
        my_delete($conn);
    }}


function my_close($conn){
$conn->close();}

?>