<?php

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

echo '<b>'.$row['naslov'].'</b>

<b>Autor : </b>'.$row['autor'].'<br />

<b>Komentar : </b>'.$row['komentar'].'<br />

<hr width="80%" />';

}
    }


if (isset($_POST['submitted'])) {

$errors = array();

if (empty($_POST['naslov'])) {

$errors[] = '<font color="red">Molimo unesite naslov</font>';

} else {

$naslov = $_POST['naslov'];

}

if (empty($_POST['autor'])) {

$errors[] = '<font color="red">Molimo unesite vase ime</font>';

} else {

$autor = $_POST['autor'];

}

if (empty($_POST['komentar'])) {

$errors[] = '<font color="red">Molimo unesite vaš komentar</font>';

} else {

$komentar = $_POST['komentar'];

}

if (empty($errors)) {

$query = "INSERT INTO comments (nid, naslov, autor, komentar, date) VALUES ($id, '$naslov', '$autor', '$komentar', NOW())";
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

<p>Naslov komentara : <input type="text" name="naslov" maxlength="70" value="<?php if(isset($_POST['naslov'])) echo $_POST['autor'];?>" /></p>

<p>Vaše ime : <input type="text" name="autor" length="25" maxlength="50" value="<?php if(isset($_POST['autor'])) echo $_POST['autor'];?>" /></p>

<p>Komentar : <textarea columns="6" rows="6" name="komentar"><?php if(isset($_POST['komentar'])) echo $_POST['komentar'];?></textarea></p>

<p><div align="center"><input type="submit" name="submit" value="Ostavite komentar" /></div></p>

<input type="hidden" name="submitted" value="TRUE" />

</form>

<?php

}

?>
<div align="center"><a href="javascript:window.close()">Zatvorite ovaj prozor</a></div>