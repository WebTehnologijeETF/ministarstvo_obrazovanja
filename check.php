<?php
header('Content-Type: text/html; charset=utf-8');
include ('mysql_connect3.php');
$name=$_POST['name'];
$pass=$_POST['pass'];
$query = "SELECT * FROM korisnici";
$provjera=false;
$result = @mysql_query($query);

if(is_resource($result))
    {
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
if($name==$row['name'] && $pass==$row['pass']){
   $_SESSION['name']="name";
    $_SESSION['pass']="pass";
    $provjera=true;
    echo'<a href="admin.php?id='.$row['id'].'">Uspješno ste se logovali kao administrator, nastavite dalje</a>';
}
        }
}
if(!$provjera){
    echo '<script>alert("Niste unjeli validne podatke")</script>';
    header("location:index.php");
    }
?>