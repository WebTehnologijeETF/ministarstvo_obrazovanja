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
    <br>
     <div class="glavnisadrzaj">
        <div class="sadrzaj">
            <h2>Dobro došao Administratoru! Odaberite šta želite raditi:</h2> 
             <?php include 'news_manage.php';?>
        </div>    
    </div>   
    

    
    
<SCRIPT src="javaScript/skripta.js"></SCRIPT>
<SCRIPT src="javaScript/skriptaAjax.js"></SCRIPT>
</body>
    
    
    
    
</html>
