<?php
header('Content-Type: text/html; charset=utf-8');
function greske($error) {
 
 
        echo "Žao nam je ali postoje neke greške u vašoj formi. ";
 
        echo "Ovo su greške:<br /><br />";
 
        echo $error."<br /><br />";
 
        echo '<a href="kontakt.php">Molimo vratite se i popravite greške<br /><br />';
        
        die();
        

    }
		$ime = "";
        $prezime = "";
		$email = "";
		$telefon = "";
		$error_message = "";
		$poruka = "";
		
        $displayCheck = 'none';
		
		if(isset($_POST["send"]))
		{
			 $ime = $_POST['ime']; 
    $prezime = $_POST['prezime']; 
 
    $email = $_POST['email']; 
 
    $telefon = $_POST['telefon']; 
 
    $poruka = $_POST['poruka'];
            $displayCheck = 'none';
			$string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$ime)) {
 
    $error_message .= 'Ime koje ste unjeli nije validno.<br />';
 
  }
            if(!preg_match($string_exp,$prezime)) {
 
    $error_message .= 'Prezime koje ste unjeli nije validno.<br />';
 
  }
			
            $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email)) {
 
      $error_message .= 'Email koji ste unjeli nije validan.<br />';
 
  }
			
			if(strlen($poruka) < 2) {
 
    $error_message .= 'Poruka koju ste unjeli nije validna.<br />';
 
  }
				$displayCheck = 'block';
			
		}
		if(isset($_POST["siguran"]))
		{
			$header = "Ako ste pogrešno popunili formu, možete ispod prepraviti unesene podatke";
            $to = "ddzafo1@etf.unsa.ba";
            $subject = "Poruka poslana sa kontakt forme";
			$txt = $ime = $_POST["imeH"];
            $txt = $prezime = $_POST["prezimeH"];
			$txt = $email = $_POST["emailH"];
			$txt = $telefon = $_POST["telefonH"];
            
			$txt = $poruka = $_POST["porukaH"];
            $displayCheck = $_POST["displayCheckH"];
            $headers = "From: webmaster@example.com" . "\r\n" .
                        'Reply-To: '.$_POST["emailH"] . "'" . "\r\n" .
                        "CC: vljubovic@etf.unsa.ba";

                    mail($to,$subject,$txt,$headers);
			echo '<script>alert("Zahvaljujemo se što ste nas kontaktirali")</script>';
		}
$email_message = "Detalji forme ispod.\n\n";
function ocisti_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
  if(strlen($error_message) > 0) {
 
    greske($error_message);
 
  }

 $email_message .= "Ime: ".ocisti_string($ime)."\n";
 
    $email_message .= "Prezime: ".ocisti_string($prezime)."\n";
 
    $email_message .= "Email: ".ocisti_string($email)."\n";
 
    $email_message .= "Telefon: ".ocisti_string($telefon)."\n";
 
    $email_message .= "Poruka: ".ocisti_string($poruka)."\n";
 
	?>
   
    <body>
		
		<div id="glavni">
			<h1>Kontakt</h1>
			<div id="kontakt">
				<div id="provjera" style="display: <?php echo $displayCheck; ?>">
					<form method="post">
						<input type="hidden" name="imeH" value="<?php echo $ime; ?>">
                        <input type="hidden" name="prezimeH" value="<?php echo $prezime; ?>">
						<input type="hidden" name="emailH" value="<?php echo $email; ?>">
						<input type="hidden" name="telefonH" value="<?php echo $telefon; ?>">
                        
						<input type="hidden" name="porukaH" value="<?php echo $poruka; ?>">
                        <input type="hidden" name="displayCheckH" value="<?php echo $displayCheck; ?>">
						<h4>Da li ste ispravno unjeli podatke?</h4>
						<p>
						<?php 
							echo "Ime: ".$ime."<br>";
                            echo "Prezime: ".$prezime."<br>";
							echo "Email: ".$email."<br>";
							echo "Telefon: ".$telefon."<br>";
                            
							echo "Poruka: ".$poruka."<br>";
						?>
						</p>
						<h4>Da li ste sigurni da želite poslati ove podatke?</h4>
						<button name="siguran" type="submit" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Siguran&nbsp;sam</button>
					</form>
				</div>
				<p>(*) - Obavezna polja </p>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<table width="450px">
					<tr>
 
 <td valign="top">
 
  <label for="ime">Ime *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="ime" maxlength="50" size="30">
 
 </td>
 
</tr>
					<tr>
 
 <td valign="top"">
 
  <label for="prezime">Prezime *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="prezime" maxlength="50" size="30">
 
 </td>
 
</tr>
					<tr>
 
 <td valign="top">
 
  <label for="email">Email adresa *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80" size="30">
 
 </td>
 
</tr>
					<tr>
 
 <td valign="top">
 
  <label for="telefon">Broj telefona</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="telefon" maxlength="30" size="30">
 
 </td>
 
</tr>
                    

					<tr>
 
 <td valign="top">
 
  <label for="poruka">Poruka *</label>
 
 </td>
 
 <td valign="top">
 
  <textarea  name="poruka" maxlength="1000" cols="25" rows="6"></textarea>
 
 </td>
 
</tr>
<tr>
    <td colspan="2" style="text-align:center">
					<button name="send" type="submit">Pošalji</button>
					<button name="reset" type="submit">Resetuj</button>
                                                      </td>
                                                      </tr>
					</table>
				</form>
				<br>
				<br>
			</div>
        </div>
    </body>