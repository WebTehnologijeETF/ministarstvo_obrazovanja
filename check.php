<?php
$name=$_POST['name'];
$pass=$_POST['pass'];

if($name==("admin") & $pass==("123")){
    $_SESSION['ame']="name";
    $_SESSION['pass']="pass";
    header("location:admin.php");
}
else{ 
    echo '<script>alert("Niste unjeli validne podatke")</script>';
    header("location:index.php");
    }
?>