<html>
<head>
  
</head>
 <body>
     
<?php
header('Content-Type: text/html; charset=utf-8');
include ('mysql_connect2.php');

if (isset($_GET['id'])) {

$id = $_GET['id'];

} else {

echo 'Odaberite vijest na koju želite ostaviti komentar.';

exit();

}
$brojac=$id;

$query = "SELECT * FROM comments WHERE nid = $id";

$result = @mysql_query($query);
if(is_resource($result))
    {
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
            if (empty($row['email'])) {
                echo '
                <b>Datum ostavljanja komentara : <b/>'.$row['date']. '<br />
                <b>Autor : </b>'.$row['autor'].'<br />
                <b>Adresa autora : </b>'.$row['adresa'].'<br />
                <b>Komentar : </b>'.$row['komentar'].'<br />
                <hr width="80%" />';
            }
            else{
                echo '
                <b>Datum ostavljanja komentara : <b/>'.$row['date']. '<br />
                <b>Autor : <a href="mailto:'.$row['email'].'"></b>'.$row['autor'].'<br /></a>
                
                <b>Email : </b>'.$row['email'].'</a><br />
                <b>Adresa autora : </b>'.$row['adresa'].'<br />
                <b>Komentar : </b>'.$row['komentar'].'<br />
                <hr width="80%" />';
            }
        }
    }


if (isset($_POST['submitted'])) {

$errors = array();

if (empty($_POST['autor'])) {

$errors[] = '<font color="red">Molimo unesite vase ime</font>';

} else {

$autor = htmlspecialchars($_REQUEST['autor'], ENT_QUOTES, 'UTF-8');

}
    if (empty($_POST['email'])) {

        $email = htmlspecialchars($_REQUEST['email'], ENT_QUOTES, 'UTF-8');

} 
    else {       
        $validno = true;
        $email = htmlspecialchars($_REQUEST['email'], ENT_QUOTES, 'UTF-8');
        if(!preg_match("/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]/i",$email))
			{    
                $validno = false;
			}
        if(!$validno){
            $errors[] = '<font color="red">Molimo unesite ispravan format emaila</font>';
        }
}
    if (empty($_POST['adresa'])) {

$errors[] = '<font color="red">Molimo unesite vašu adresu</font>';

} else {

$adresa = htmlspecialchars($_REQUEST['adresa'], ENT_QUOTES, 'UTF-8');


}

if (empty($_POST['komentar'])) {

$errors[] = '<font color="red">Molimo unesite vaš komentar</font>';

} else {

$komentar = htmlspecialchars($_REQUEST['komentar'], ENT_QUOTES, 'UTF-8');

}

if (empty($errors)) {

$query = "INSERT INTO comments (nid, autor, email, adresa, komentar, date) VALUES ($id, '$autor', '$email', '$adresa', '$komentar', NOW())";
$result = @mysql_query($query);

if ($result) {
echo '<font color="blue">Vaš je komentar dodan</font>';
echo '<div align="center"><a href="comments.php?id='.$brojac.'">Dodajte još komentara</a></div>';
} else {

echo '<font color="red">Dogodila se neka greška, molimo pokušajte kasnije</font>';

}

} else {

echo '<b>Postoji nekoliko grešaka -</b><br />';

foreach ($errors as $msg) {

echo " - $msg<br />\n";

}

}

} else {

?>
<div ng-app>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" />


<p>Vaše ime : <input ng-model type="text" name="autor" length="25" maxlength="50" value="<?php if(isset($_POST['autor'])) echo $_POST['autor'];?>" /></p>

<p>Email : <input ng-model type="text" name="email" length="25" maxlength="50" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>" /></p>

<p>Adresa : <input ng-model type="text" name="adresa" length="25" maxlength="50" value="<?php if(isset($_POST['adresa'])) echo $_POST['adresa'];?>" /></p>

<p>Komentar : <textarea ng-model columns="6" rows="6" name="komentar"><?php if(isset($_POST['komentar'])) echo $_POST['komentar'];?></textarea></p>

<p><div align="center"><input type="submit" name="submit" value="Ostavite komentar"/></div></p>

<input type="hidden" name="submitted" value="TRUE" />

</form>
</div>
<?php

}

?>
<div align="center"><a href="javascript:window.close()">Zatvorite ovaj prozor</a></div>
</body>

</html>