	<html>

<head>

<script type="text/javascript">

function openComments(url)

{

comments = window.open(url, "Comment", "menubar=0,resizable=0,width=380,height=480")

comments.focus()

}

</script>

</head>

<body>

<?php

include ('mysql_connect.php');

$query = "SELECT id, naslov, autor, tekst, DATE_FORMAT(datum, '%M %d, %Y'), slika, detaljnije as sd FROM news_posts";

$result = @mysql_query($query);

if ($result) {

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
$url = 'comments.php?id='.$row['id'];
     print "<img src='".htmlentities($row['slika'],ENT_QUOTES)."' alt='Slika'>";
echo '<p>
<b>'.$row['naslov'].'</b><br />
'.$row['sd'].'<br />
Objavio : <b>'.$row['autor'].'</b><br />
'.$row['tekst'].'<br />


<a href="javascript:openComments(\''.$url.'\')">Dodaj novi komentar ili pogledaj ostale komentare</a></p>';
}
} else {
echo 'Ne postoje nove vijesti';
}
?>
</body>
</html>

