<?php
header('Content-Type: text/html; charset=utf-8');
include ('mysql_connect2.php');

if (isset($_GET['id'])) {

$id = $_GET['id'];

} else {

echo 'Odaberite vijest na koju želite ostaviti komentar.';

exit();

}

$query = "SELECT * FROM comments WHERE nid = $id";

$result = @mysql_query($query);
if(is_resource($result))
    {
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

echo '
<b>Datum ostavljanja komentara : <b/>'.$row['date']. '<br />
<b>Autor : </b>'.$row['autor'].'<br />
<b>Email : </b>'.$row['email'].'<br />
<b>Adresa autora : </b>'.$row['adresa'].'<br />
<b>Komentar : </b>'.$row['komentar'].'<br />

<hr width="80%" />';
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

} else {

$email = htmlspecialchars($_REQUEST['email'], ENT_QUOTES, 'UTF-8');

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

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" />


<p>Vaše ime : <input type="text" name="autor" length="25" maxlength="50" value="<?php if(isset($_POST['autor'])) echo $_POST['autor'];?>" /></p>

<p>Email : <input type="text" name="email" length="25" maxlength="50" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>" /></p>

<p>Adresa : <input type="text" name="adresa" length="25" maxlength="50" value="<?php if(isset($_POST['adresa'])) echo $_POST['adresa'];?>" /></p>

<p>Komentar : <textarea columns="6" rows="6" name="komentar"><?php if(isset($_POST['komentar'])) echo $_POST['komentar'];?></textarea></p>

<p><div align="center"><input type="submit" name="submit" value="Ostavite komentar" /></div></p>

<input type="hidden" name="submitted" value="TRUE" />

</form>

<?php

}

?>
<div align="center"><a href="javascript:window.close()">Zatvorite ovaj prozor</a></div>