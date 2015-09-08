<?php
    $vijest = array();
	$broj_vijesti = 0;
	$vijesti = array();
	
   $files = glob('novosti/*.txt', GLOB_BRACE);
    $niz = array();
    foreach($files as $file) {
        $sadrzaj = file($file);
        array_push($niz, $sadrzaj);
    }
    
    for($i = 0; $i < count($niz); $i++) {
        for($j = 0; $j < count($niz); $j++) {
            if(strtotime($niz[$i][0]) > strtotime($niz[$j][0])) {
                $tren = $niz[$i];
                $niz[$i] = $niz[$j];
                $niz[$j] = $tren;
            }
        }
    }


    foreach ($niz as $clan) {
        $datum = $clan[0];
        $autor = $clan[1];
        $naslov = $clan[2];
        $slika = '<img class = "article-pic" src="'.$clan[3].'" alt="neka slika">';
        $tekst = "";
        $detaljno = "";
        $imaDetaljno = false;
        $index  = 4;
        $sadrzaj="";
        while($index < count($clan)){
        if(trim($clan[$index]) === "--") {
               $imaDetaljno = true;
               $index = $index + 1;
               break;
           }
            $tekst = $tekst . $clan[$index];
            $index = $index + 1;
        }
        
       while($imaDetaljno && $index <  count($clan))
        {
            $detaljno = $detaljno." ".$clan[$i];
            $index = $index + 1;
        }

        if($imaDetaljno) 
            $linkDetaljno = '<a class="read-more" href="?add='.$broj_vijesti.'">Detaljnije...</a>';
       
        else $linkDetaljno = '';
        
        $broj_vijesti = $broj_vijesti + 1;

        $saDetaljima = '<div class="article"><h1>'.ucfirst(strtolower($naslov)).'</h1>
                  				   <h2><strong>autor : </strong>'.$autor.', <strong>Objavljeno : </strong>'.$datum.'</h2>
                  				   '.$slika.'<p>'.$tekst.'<br>'.$detaljno.'</p><br></div>';
        array_push($vijesti, $saDetaljima);

			$bezDetalja= '<div class="article"><h1>'.ucfirst(strtolower($naslov)).'</h1>
                  			<h2><strong>autor : </strong>'.$autor.', <strong>Objavljeno : </strong>'.$datum.'</h2>
                  		   '.$slika.'<p>'.$tekst.'</p>'.$linkDetaljno.'<br></div>';

            array_push($vijest, $bezDetalja);
        
        if(isset($_GET['add'])) 
			{
				if($_GET['add'] <= ($broj_vijesti - 1))
				{
					$vijest = array();
    				array_push($vijest, $vijesti[$_GET['add']]);
				}	
			}

    }
    
?>