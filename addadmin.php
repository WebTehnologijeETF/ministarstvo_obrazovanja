<?php
include('mysql_connect3.php');
$query = "SELECT * FROM korisnici where name='korisnik' ";
$result = @mysql_query($query);
if(is_resource($result)){
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

echo '
                <b>ID korisnika : <b/>'.$row['id']. '<br />
                <b>Tip korisnika : </b>
                <a href="changeuser.php?id='.$row['id'].'">
                '.$row['name'].'<br /></a>
                <b>Email : </b>'.$row['email'].'<br />
                <b>Ime: </b>'.$row['ime'].'<br />
                <hr width="80%" />';


}
}
?>
<div align="center"><a href="index.php">Zatvorite ovaj prozor</a></div>