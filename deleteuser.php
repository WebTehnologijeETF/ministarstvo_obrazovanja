
<?php
header('Content-Type: text/html; charset=utf-8');

if (isset($_GET['id'])) {

include('mysql_connect3.php');

if (is_numeric($_GET['id'])) {

$id = $_GET['id'];

$query = "DELETE FROM korisnici WHERE id = $id && id!='2'";

$result = mysql_query($query);

if ($result) {

echo '<h3>Uspješno!</h3><br />

Korisnik je uspješno obrisan.<br /><br />';

} else {

echo 'Korisnik koji ste obrisali nije moguće brisati, molimo pokušajte kasnije';

}

} else {

echo 'Odabrali ste pogrešnog korisnika, molimo odaberite pravog.';

}

} else {

echo 'Prije nego posjetite ovu stranicu odaberite korisnika kojeg želite obrisati!';

}

?>


<div align="center"><a href="admin.php?id">Zatvorite ovaj prozor</a></div>
