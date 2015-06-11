
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
        <h2 class="naslov"> Ministarstvo obrazovanja Čeljigovići 
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
           
    <div class="glavnisadrzaj">
        <div class="sadrzaj">
            <?php include 'news.php';?>
        </div>    
    </div>
     <aside class="vrh-sidebar">
        <article>
            <h2>Srodne Stranice</h2>             
            <ul>
				<li>
					<a href="http://www.mod.gov.ba/">Ministarstvo odbrane</a>
				</li>
				<li>
					<a href="http://www.mkt.gov.ba/">Ministarstvo komunikacija i prometa</a>
				</li>
				<li>
					<a href="http://www.mcp.gov.ba/">Ministarstvo civilnih poslova</a>
				</li>
				<li>
					<a href="http://www.msb.gov.ba/">Ministarstvo sigurnosti</a>
				</li>
				</ul>
        </article>
    </aside>
    <aside class="sredina-sidebar">
        <article>
            <h2>Admin panel</h2>             
            <form action="check.php" method="post">
     
    <tr> 
          <td>
            Username(admin):
        </td>
        <td>
            <input type="text" name="name" /><br>
        </td>
          </tr>
          <tr>
          <td>
            Password(123):
          </td>
            <td>
            <input type="password" name="pass" /><br>
          </td>
          </tr>
          <tr>
              <td></td>

                <td>
                    <input type="submit" value="LOGUJ SE" />
              </td>
              
          </tr>

    </table>
        </form>
        </article>
    </aside>
    <aside class="dno-sidebar">
        <article>
            <h2>Niste naš korisnik, registruj te se</h2>             
            <a href="registracija.php">Registracija</a></li>
        </article>
    </aside>
    
    <footer class="glavnifooter">
        <p>Copyright &copy;<a href="#" title="DenisDzafo"> Denis Džafo </a></p>
    </footer>
    
    
<SCRIPT src="javaScript/skripta.js"></SCRIPT>
<SCRIPT src="javaScript/skriptaAjax.js"></SCRIPT>
</body>
    
    
    
    
</html>
