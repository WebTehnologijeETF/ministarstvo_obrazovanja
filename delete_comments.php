<?php



include('mysql_connect2.php');

$query = "SELECT id, naslov FROM news_posts";

$result = @mysql_query($query);


if (isset($_GET['id'])) {


if (is_numeric($_GET['id'])) {

$id = $_GET['id'];

$query = "DELETE FROM comments WHERE id = $id";

$result = mysql_query($query);

if ($result) {

echo '<h3>Uspješno!</h3><br />

Vijesti su uspješno obrisane.<br /><br />';

}
}
}

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" />

<p>Naslov komentara : <input type="text" name="naslov" maxlength="70" value="<?php if(isset($_POST['naslov'])) echo $_POST['autor'];?>" /></p>

<p>Vaše ime : <input type="text" name="autor" length="25" maxlength="50" value="<?php if(isset($_POST['autor'])) echo $_POST['autor'];?>" /></p>

<p>Komentar : <textarea columns="6" rows="6" name="komentar"><?php if(isset($_POST['komentar'])) echo $_POST['komentar'];?></textarea></p>

<p><div align="center"><input type="submit" name="submit" value="Ostavite komentar" /></div></p>

<input type="hidden" name="submitted" value="TRUE" />

</form>

?>