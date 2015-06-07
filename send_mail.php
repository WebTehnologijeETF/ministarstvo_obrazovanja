
<?php

header('Content-Type: text/html; charset=utf-8');

include ('mysql_connect2.php');
if (isset($_GET['id'])) {

$id = $_GET['id'];

}
$mail="";
$query = "SELECT * FROM comments WHERE id = $id";

$result = @mysql_query($query);
if(is_resource($result))
    {
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
            	$mail=$row['email'];
echo '

<b>Datum ostavljanja komentara : <b/>'.$row['date']. '<br />
<b>Autor : </b>'.$row['autor'].'<br />
<b>Email : </b>'.$row['email'].'<br />
<b>Adresa autora : </b>'.$row['adresa'].'<br />
<b>Komentar : </b>'.$row['komentar'].'<br />
<hr width="80%" />';
}
    }
    if(isset($_POST["siguran"]))
		{
			$header = "Poruka poslana sa stranice http://ministarstvoobrazovanja-celjigovici.rhcloud.com";
            $to = $mail;
            $subject = "Odgovor na komentar";
			$txt = $poruka = $_POST["poruka"];
            $headers = "From: webmaster@example.com" . "\r\n" .
                        'Reply-To: '.$mail . "'" . "\r\n" .
                        "CC: vljubovic@etf.unsa.ba";
                    mail($to,$subject,$txt,$headers);
			echo ' <a href="comments.php"> Poruka uspješno poslana</a>';
		}

?>
        <body>
    
    
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <p>
                    Poruka:<br>
					<textarea rows="10" cols="80" name="poruka"></textarea><br>
					<br>
                    <button name="siguran" type="submit" onclick="window.opener=null; window.close(); return false;">Pošalji</button>
					</p>
				</form>
</body>
