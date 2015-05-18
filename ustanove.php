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
    <ul class="listaustanova">
         <li>        
    Lista ustanova
         </li>
    </ul>
   <aside class="tabela">
        <article>
            <table class="tabela1">
                <tr>
                    <th>Naziv ustanove</th>
                    <th>Adresa</th>
                    <th>Kontakt telefon</th>
                    <th>Web stranica</th>
                </tr>
                <tr>
                    <td>Predškolska ustanova "Složna braća"</td>
                    <td>Kralja Tomislava 1 Sarajevo</td>
                    <td>033 725 956</td>
                    <td>www.sloznabraca.edu.celj</td>
                </tr>
                <tr>
                    <td>Osnovna usmjerena škola "Stipe Šuvar"</td>
                    <td>Fuada Demidžića 12</td>
                    <td>033 461 584</td>
                    <td>www.stipesuvar.edu.celj</td>
                </tr>
                <tr>
                    <td>Institut za jezik, književnost, maloprivredu i telekomunikacije</td>
                    <td>Međika Džonsona 3 Čajniće</td>
                    <td>033 524 123</td>
                    <td>www.institutcajnice.edu.celj</td>
                </tr>
                <tr>
                    <td>Elektrotehniči fakultet</td>
                    <td>Rasela Vestbroka 12 Celjgovici</td>
                    <td>033 123 456</td>
                    <td>www.etf.edu.celj</td>
                </tr>
                <tr>
                    <td>Srednja medicinska škola "Dr Arslanagić"</td>
                    <td>Nenada Oluje 12 Dablin</td>
                    <td>033 987 654</td>
                    <td>www.drarslanagic.edu.celj</td>
                </tr>
            </table>
        </article>
    </aside>
    <footer class="glavnifooter">
        <p>Copyright &copy;<a href="#" title="DenisDzafo"> Denis Džafo </a></p>
    </footer>
   <SCRIPT src="javaScript/skripta.js"></SCRIPT>
<SCRIPT src="javaScript/skriptaAjax.js"></SCRIPT>
</body>
</html>
