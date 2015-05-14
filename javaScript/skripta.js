function prikaziSakrij()
{	

	
	var a=document.getElementById("obrazovanjeMeni");
	var r=document.getElementById("Obrazovanje");
	console.log(a.style.visibility);
	if(a.classList.contains("hidden"))
	{
		a.style.visibility="visible";
		a.className="";
		
		r.innerHTML="▲ Obrazovanje";
		

	}
	else{
		a.className="hidden";
	r.innerHTML="▼ Obrazovanje";
	a.style.visibility="hidden";
	}
}

function validateForm() {
    var ime = document.kontaktforma.ime;
    var prezime = document.kontaktforma.prezime;
    var email = document.kontaktforma.email;
    var opcina = document.kontaktforma.opcina;
    var mjesto = mjesto.kontaktforma.mjesto;
    var poruka = document.kontaktforma.poruka;
    var pattern = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/i;
    if (ime.value == null || ime.value == "") {

        document.getElementById('imeUpozorenje').style.visibility = 'visible';
        return false;

    } else {
        document.getElementById('imeUpozorenje').style.visibility = 'hidden';

    }
    if(opcina.value==null || opcina.value==""){
        document.getElementById('opcinaUpozorenje').style.visibility= 'visiable';
        return false;
    }
    else{
        document.getElementById('opcinaUpozorenje').style.visibility= 'hidden';
    }

    
    if (prezime.value == null || prezime.value == "") {

        document.getElementById('prezimeUpozorenje').style.visibility = 'visible';
        return false;


    }
    else {
        document.getElementById('prezimeUpozorenje').style.visibility = 'hidden';
    }

    if (!pattern.test(email.value) || email.value == "") {

        document.getElementById('emailUpozorenje').style.visibility = 'visible';
        return false;
        

    }
    else {
        document.getElementById('emailUpozorenje').style.visibility = 'hidden';
    }
    
    
    if (poruka.value == "") {

        document.getElementById('porukaUpozorenje').style.visibility = 'visible';
        return false;
       
    }
    else {
        document.getElementById('porukaUpozorenje').style.visibility = 'hidden';
    }


}

function dajNovost(novostJSON) {
	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.status === 200 & xmlhttp.readyState === 4) {

			document.getElementById("content").innerHTML = xmlhttp.responseText;
			postaviMeni();
		}
	}
	xmlhttp.open("GET","detaljno.php?datum=" + novostJSON.datum + "&autor=" + novostJSON.autor + "&naslov=" + novostJSON.naslov + "&slika=" + novostJSON.slika + "&tekst=" + novostJSON.tekst + "&detaljno=" + novostJSON.detaljno, true);
	xmlhttp.send();
}
