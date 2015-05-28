<?php
if (isset($_POST['submitted'])) {
include ('mysql_connect.php');
$naslovbool=false;
$autorbool=false;
$tekstbool=false;
if (empty($_POST['naslov'])) {
echo '<p><font color="red">Zaboravili ste unjeti naslov</font></p>';
} else {
$naslov = $_POST['naslov'];
    $naslovbool=true; 
}
    
if (empty($_POST['autor'])) {
echo '<p><font color="red">Zaboravili ste unjeti autora</font></p>';
} else {
$autor = $_POST['autor'];
    $autorbool=true;
}
if (empty($_POST['tekst'])) {
echo '<p><font color="red">Zaboravili ste unjeti tekst.</font></p>';
} else {
$tekst = $_POST['tekst'];
    $tekstbool=true;
}
    
if ($naslovbool && $autorbool && $tekstbool) {
$query = "INSERT INTO news_posts (naslov, autor, tekst, datum) VALUES ('$naslov', '$autor', '$tekst', NOW())";
$result = @mysql_query($query);
if ($result) {
echo '<p><font color="red">Vijesti su dodane!</font></p>';
} else {
echo '<font color="red"><p>Vijesti nisu dodane! Molimo pokušajte kasnije.</p></font>';
}
} else {
echo '<p><font color="red">Molimo unesite informacije</font></p>';
}
}
?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<p><b>Naslov vijesti :</b><br />
<input type="input" name="naslov" size="25" maxlength="60" value="<?php if(isset($_POST['naslov'])) echo $_POST['naslov']; ?>" /></p>
<p><b>Autor :</b><br />
<input type="input" name="autor" size="15" maxlength="35" value="<?php if(isset($_POST['autor'])) echo $_POST['autor']; ?>" /></p>
<p><b>Message :</b><br />
<textarea rows="7" cols="55" name="tekst"><?php if(isset($_POST['tekst'])) echo $_POST['tekst']; ?></textarea></p>
<p><input type="submit" name="submit" value="Dodaj vijesti" /></p>
<input type="hidden" name="submitted" value="TRUE" /></p>
</form>

<div align="center"><a href="admin.php">Zatvorite ovaj prozor</a></div>