<?php

include('mysql_connect.php');

$query = "SELECT id, naslov FROM news_posts";

$result = @mysql_query($query);

if ($result) {

    
echo '<div align="center">

<p><a href="addnews.php">Dodaj vijest</a></td></p>
<table border="0">

<tr>


<td><b>ID</b></td>

<td><b>Naslov</b></td>

<td><b>Obriši</b></td>

<td><b>Promjeni</b></td>

<td><b>Obriši komentar</b></td>


</tr>';

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

echo '<tr>

<td>'.$row['id'].'</td>

<td>'.$row['naslov'].'</td>

<td><a href="delete_news.php?id='.$row['id'].'">Obriši</a></td>

<td><a href="edit_news.php?id='.$row['id'].'">Promjeni

<td><a href="delete_comments.php?id='.$row['id'].'">Obriši komentar(ne radi)

</tr>';

}

} else {
echo 'Izvinite, ali ne postoji nijedna nova vijest';

}

?>
