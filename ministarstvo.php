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
            <li><a href="#" onclick="ucitaj('index.php')">Naslovna</a></li>
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
    <ul class="klasaministarstvo">
         <li>        
    Na čelu ministarstva nalazi se Džipalo Junuz. Osoba iz nauke, poznat po tome što je postavio osnovne postulate trečeg zakona hepekiranja. Također izmislio i hepek. U slobodno vrijeme igra hrkljuša.
         </li>
         <li>Zamjenik ministra je Đuro, ličnost labilnog karaktera, podložna uticajima sa strane i brzim promjenama raspoloženje. U ministarstvu samo zato što je amidžić predsjednika stranke. </li> 
            <li>Prvi savjetnik je dr. Karajlić, brilijantan um ministarstva, još kao dijete zadivio naučnike svojim epohalnim izumom transmisionog RCA ražnja za jagnjad, mada su neki zli jezici govorili da je prepisao doktorat od jarana. Bez njega bi ovo ministarstvo bilo osuđeno na propast.
         </li>
</ul>
    <footer class="glavnifooter">
        <p>Copyright &copy;<a href="#" title="DenisDzafo"> Denis Džafo </a></p>
    </footer>
 <SCRIPT src="javaScript/skripta.js"></SCRIPT>
<SCRIPT src="javaScript/skriptaAjax.js"></SCRIPT>
</body>
</html>