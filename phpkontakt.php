<?php
		define('CHARSET', 'UTF-8');
		$ime = "";
        $prezime = "";
		$email = "";
		$mjesto = "";
		$postanskibroj = "";
		$poruka = "";
		$err1p = $err2p = $err3p = $err4p = "";
        $displayCheck = 'none';
		function editInputData($data) 
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data, ENT_SUBSTITUTE, CHARSET);
			return $data;
		}
		function validateName($name)
		{
			$upperName = strtoupper($name);
			if ($upperName == "")
				return false;
			for ($i = 0; $i < strlen($upperName); $i++)
			if (((int)$upperName[$i] < 65 || (int)$upperName[$i] > 90) && (int)$upperName[$i] != ' ')
				return false;
			return true;
		}
		$valid = true;
		if(isset($_POST["send"]))
		{
			$ime = editInputData($_POST["ime"]);
            $prezime = editInputData($_POST["prezime"]);
			$email = editInputData($_POST["email"]);
			$mjesto = editInputData($_POST["mjesto"]);
            $postanskibroj = editInputData($_POST["postanskibroj"]);
			$poruka = editInputData($_POST["message"]);
			$err1p = $err2p = $err3p = $err4p = "";
            $displayCheck = 'none';
			if(!validateName($ime))
			{
				$valid = false;
				$err1p = '<img src="img/upozorenje.jpg" class="error1" style="display: inline;" title="Polje ne smije biti prazno ili su unešeni nedozvoljeni znakovi">';
			}
            if(!validateName($prezime))
			{
                
				$valid = false;
				$err2p = '<img src="img/upozorenje.jpg" class="error1" style="display: inline;" title="Polje ne smije biti prazno ili su unešeni nedozvoljeni znakovi">';
			}
			if(!preg_match("/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]/i", $email))
			{
				$valid = false;
				$err3p = '<img src="img/upozorenje.jpg" class="error1" style="display: inline;" title="Polje ne smije biti prazno ili nije unesen pravilan format maila">';
			}
			
			if($poruka == "")
			{
				$valid = false;
				$err4p = '<img src="img/upozorenje.jpg" class="error1" style="display: inline;" title="Polje ne smije biti prazno">';
			}
			if($valid)
			{
				$displayCheck = 'block';
				$header = "Ako ste pogrešno popunili formu, možete ispod prepraviti unesene podatke";
			}
		}
		if(isset($_POST["siguran"]))
		{
			$header = "Ako ste pogrešno popunili formu, možete ispod prepraviti unesene podatke";
            $to = "ddzafo1@etf.unsa.ba";
            $subject = "Poruka poslana sa kontakt forme";
			$txt = $ime = $_POST["imeH"];
            $txt = $prezime = $_POST["prezimeH"];
			$txt = $email = $_POST["emailH"];
			$txt = $mjesto = $_POST["mjestoH"];
            $txt = $postanskibroj = $_POST["postanskibrojH"];
			$txt = $poruka = $_POST["porukaH"];
            $displayCheck = $_POST["displayCheckH"];
            $headers = "From: webmaster@example.com" . "\r\n" .
                        'Reply-To: '.$_POST["emailH"] . "'" . "\r\n" .
                        "CC: vljubovic@etf.unsa.ba";

                    mail($to,$subject,$txt,$headers);
			echo '<script>alert("Zahvaljujemo se što ste nas kontaktirali")</script>';
		}
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
						<input type="hidden" name="mjestoH" value="<?php echo $mjesto; ?>">
                        <input type="hidden" name="postanskibrojH" value="<?php echo $postanskibroj; ?>">
						<input type="hidden" name="porukaH" value="<?php echo $poruka; ?>">
                        <input type="hidden" name="displayCheckH" value="<?php echo $displayCheck; ?>">
						<h4>Da li ste ispravno unjeli podatke?</h4>
						<p>
						<?php 
							echo "Ime: ".$ime."<br>";
                            echo "Prezime: ".$prezime."<br>";
							echo "Email: ".$email."<br>";
							echo "Mjesto: ".$mjesto."<br>";
                            echo "Postanski broj: ".$postanskibroj."<br>";
							echo "Poruka: ".$poruka."<br>";
						?>
						</p>
						<h4>Da li ste sigurni da želite poslati ove podatke?</h4>
						<button name="siguran" type="submit" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Siguran&nbsp;sam</button>
					</form>
				</div>
				<p>(*) - Obavezna polja </p>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<p>
					Ime : *<br>
					<input type="text" name="ime" value="<?php echo $ime; ?>"><?php echo $err1p; ?>
					<br>
					<br>
					Prezime: *<br>
					<input type="text" name="prezime" value="<?php echo $prezime; ?>"><?php echo $err2p; ?>
					<br>
					<br>
					Email: *<br>
					<input type="text" name="email" value="<?php echo $email; ?>"><?php echo $err3p; ?>
					<br>
					<br>
					Mjesto:<br>
					<input type="text" name="mjesto" value="<?php echo $mjesto; ?>">
					<br>
					<br>
                    Poštanski broj:<br>
					<input type="text" name="postanskibroj" value="<?php echo $postanskibroj; ?>">
					<br>
					<br>

					Poruka: *<br>
					<textarea rows="10" cols="80" name="message"><?php echo $poruka; ?></textarea><?php echo $err4p; ?><br>
					<br>
					<button name="send" type="submit">Pošalji</button>
					<button name="reset" type="submit">Resetuj</button>
					</p>
				</form>
				<br>
				<br>
			</div>
        </div>
    </body>