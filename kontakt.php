<!DOCTYPE html>
<html lang="ba">
    <head>
    <title> Ministarstvo obrazovanja Čeljigovići</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="stil.css" type="text/css"/>
    </head>
<body class="body">
    <header class="glavniheader">
        <img src="img/logo.png" alt="logo">
        <h2 class="naslov"> Ministarstvo obrazovanja Čeljgovići 
        </h2>
       <nav>
            <ul>
            <li><a href="#" onclick="ucitaj('naslovna.php')">Naslovna</a></li>
            <li><a href="#" onclick="ucitaj('ministarstvo.php')">Ministarstvo</a></li>
            <li><a href="#" onclick="ucitaj('ustanove.php')">Ustanove</a></li>
            <li><a href="#" onclick="ucitaj('kontakt.php')">Kontakt</a></li>
             <li>
					<a href="#" id="Obrazovanje" onclick="prikaziSakrij()"  >▼ Obrazovanje</a>
					<div id="obrazovanjeMeni" class="hidden" >
							<a href="#">Stipendije</a>
							<a href="#">Takmičenja</a>
							<a href="#">Stručno usavršavanje</a>
					</div>
				</li>
            </ul>
         </nav>
     </header>
    <h2>Unos podataka</h2>
	<b>(*) - Obavezna polja</b>
    <br>
    <form name="forma" id="forma" method="get" action="#">
        
    <div>Ime(*):</div>
    <input type="text" id="ime" name="ime" required="required" oninvalid="this.setCustomValidity('Unesite ime')" onchange="try{setCustomValidity('')}catch(e){}"/>
    <img id="upozorenje1" src="img/upozorenje.jpg" alt="upozorenje">
	<div id="greskaIme"></div>
        
    <div>Prezime(*):</div>
    <input type="text" id="prezime" name="prezime" required="required" oninvalid="this.setCustomValidity('Unesite prezime')" onchange="try{setCustomValidity('')}catch(e){}"/>
    <img id="upozorenje2" src="img/upozorenje.jpg" alt="upozorenje">
	<div id="greskaPrezime"></div>
        
    <div>Email adresa(*):</div>
	<input type="email" id="eMail1" name="eMail" required="required" oninvalid="this.setCustomValidity('Unesite Email')" onchange="try{setCustomValidity('')}catch(e){}"/>
    <img id="upozorenje3" src="img/upozorenje.jpg" alt="upozorenje">
	<div id="greskaEmail1"></div>
        
    
    <br>
	<div>Spol(*):</div>
	<input type="radio" class="spol" name="spol" value="muski" checked="true"/>muški
	<input type="radio" class="spol" name="spol" value="zenski"/>ženski
	<br>
        
    
    <div>Mjesto:</div>
    <input type="text" id="mjesto" name="mjesto"/>
    <img id="upozorenje4" src="img/upozorenje.jpg" alt="upozorenje">
	<div id="greskaMjesto"></div>
    
    <div>Poštanski broj:</div>
	<input type="text" id="postanskiBroj" name="postanskiBroj"/>
	<img id="upozorenje5" src="img/upozorenje.jpg" alt="upozorenje">
	<div id="greskaPostanskiBroj"></div>
	
        
    <div>Poruka(*):</div>
	<textarea id="poruka" name="poruka" rows="1" cols="1" required="required" oninvalid="this.setCustomValidity('Unesite poruku')" onchange="try{setCustomValidity('')}catch(e){}"></textarea>
	<img id="upozorenje6" src="img/upozorenje.jpg" alt="upozorenje">
	<div id="greskaPoruka"></div>
    
    
    <div><button id="potvrdi" type="submit" onclick="obrada(); return false;">Potvrdi</button></div>
	<div><button type="reset" onclick="brisanje()">Poništi</button></div>
	</form>
    
    
    
    
    
    
    <footer class="glavnifooter">
        <p>Copyright &copy;<a href="#" title="DenisDzafo"> Denis Džafo </a></p>
    </footer>
    <SCRIPT src="javaScript/skripta1.js"></SCRIPT>
    <SCRIPT src="javaScript/skriptaAjax.js"></SCRIPT>
    </body>
</html>
