var valIme = false;
var valPrezime = false;
var valEmail1 = false;
var valPoruka = false;
var valPostanskiBroj = false;
var valServis = false;
function brisanje() {
    "use strict";
    var ime = document.getElementById("ime");
    var prezime = document.getElementById("prezime");
    var eMail1 = document.getElementById("eMail1");
    var mjesto = document.getElementById("mjesto");
    var postanskiBroj = document.getElementById("postanskiBroj");
    var poruka = document.getElementById("poruka");
    
    ime.value = "";
    prezime.value = "";
    eMail1.value = "";
    mjesto.value = "";
    postanskiBroj.value = "";
    poruka.value = "";
    
    document.getElementById("greskaIme").innerHTML = "";
    document.getElementById("greskaPrezime").innerHTML = "";
    document.getElementById("greskaEmail1").innerHTML = "";
    document.getElementById("greskaMjesto").innerHTML = "";
    document.getElementById("greskaPostanskiBroj").innerHTML = "";
    document.getElementById("greskaPoruka").innerHTML = "";
    
    document.getElementById("upozorenje1").style.visibility = "hidden";
    document.getElementById("upozorenje2").style.visibility = "hidden";
    document.getElementById("upozorenje3").style.visibility = "hidden";
    document.getElementById("upozorenje4").style.visibility = "hidden";
    document.getElementById("upozorenje5").style.visibility = "hidden";
    document.getElementById("upozorenje6").style.visibility = "hidden";
}

	


function obrada(){

    var ime = document.getElementById("ime");
	if (ime.value.length<1) 
	{
        document.getElementById("greskaIme").innerHTML = "Polje ne smije biti prazno";
		document.getElementById("upozorenje1").style.visibility = "visible";
		valIme = false;
    }
	else if (!ime.value.match(/^[a-zA-Z ÄŒÄÄ†Ä‡Å½Å¾Å Å¡ÄÄ‘]+$/)) 
	{
		document.getElementById("greskaIme").innerHTML = "Ime smije sadržavati samo slova";
		document.getElementById("upozorenje1").style.visibility = "visible";
		valIme = false;
	}
	else
	{
		document.getElementById("greskaIme").innerHTML = "";
		document.getElementById("upozorenje1").style.visibility = "hidden";	
		valIme = true;
	}
    
    var prezime = document.getElementById("prezime");
	if (prezime.value.length<1) 
	{
        document.getElementById("greskaPrezime").innerHTML = "Polje ne smije biti prazno";
		document.getElementById("upozorenje2").style.visibility = "visible";
		valIme=false;
    }
	else if (!prezime.value.match(/^[a-zA-Z ÄŒÄÄ†Ä‡Å½Å¾Å Å¡ÄÄ‘]+$/)) 
	{
		document.getElementById("greskaPrezime").innerHTML="Prezime smije sadržavati samo slova";
		document.getElementById("upozorenje2").style.visibility="visible";
		valPrezime = false;
	}
	else
	{
		document.getElementById("greskaPrezime").innerHTML = "";
		document.getElementById("upozorenje2").style.visibility = "hidden";	
		valIme = true;
	}
    
    var eMail1 = document.getElementById("eMail1");
	if (eMail1.value.length<1) 
	{
		document.getElementById("greskaEmail1").innerHTML = "Polje ne smije biti prazno";
		document.getElementById("upozorenje3").style.visibility = "visible";
		valEmail = false;
    }
	else if (!eMail1.value.match(/^[a-z0-9_]+@[a-z]+\.[a-z][a-z]+$/))
	{
		document.getElementById("greskaEmail1").innerHTML = "Email mora biti unesen u tačnom formatu mail@nesto.nesto";
		document.getElementById("upozorenje3").style.visibility = "visible";
		valEmail = false;
	}
	else
	{
		document.getElementById("greskaEmail1").innerHTML = "";
		document.getElementById("upozorenje3").style.visibility = "hidden";	
		valEmail = true;
	}
    
    var poruka = document.getElementById("poruka");
	if (poruka.value.length<1) 
	{
        document.getElementById("greskaPoruka").innerHTML = "Polje ne smije biti prazno";
		document.getElementById("upozorenje6").style.visibility = "visible";
        valPoruka = false;
    }
	else
	{
		document.getElementById("greskaPoruka").innerHTML = "";
		document.getElementById("upozorenje6").style.visibility = "hidden";
		valPoruka = true;
	}
    
    var pbroj = document.getElementById("postanskiBroj").value;
	var mjesto = document.getElementById("mjesto").value;
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange=function(){
		if(ajax.readyState == 4 && ajax.status == 200) {
			var pars = JSON.parse(ajax.responseText);
			if(Object.keys(pars)[0] === "greska") {
				valServis = false;
				alert("Greška, nepostojece mjesto");
				if(pars.hasOwnProperty("greska") && pars.greska == "Nepostojeće mjesto")
				{
					document.getElementById("greskaMjesto").innerHTML = "Nepostojeće mjesto";
					document.getElementById("upozorenje4").style.visibility = "visible";
					document.getElementById("greskaMjesto").style.visibility = "visible"; 
                }
				else if(pars.hasOwnProperty("greska") && pars.greska == "Nepostojeći poštanski broj")
				{
					document.getElementById("greskaPostanskiBroj").innerHTML = "Nepostojeći poštanski broj";
					document.getElementById("upozorenje5").style.visibility = "visible";
					document.getElementById("greskaPostanskiBroj").style.visibility = "visible";
				}
				else
                {
                    document.getElementById("greskaPostanskiBroj").innerHTML = "Poštanski broj ne odgovara mjestu";
					document.getElementById("upozorenje5").style.visibility = "visible";
					document.getElementById("greskaPostanskiBroj").style.visibility = "visible";
				}
				return false;
		    }
			else if(Object.keys(pars)[0] == "ok")
			{
				document.getElementById("greskaMjesto").innerHTML = "";	
				document.getElementById("greskaPostanskiBroj").innerHTML = "";
				document.getElementById("upozorenje4").style.visibility = "hidden";
				document.getElementById("upozorenje5").style.visibility = "hidden";
		   		valServis = true;			
		   }
		}
		else if (ajax.readyState === 4 && ajax.status === 404)
			alert("Greska!"); 	
	}
    ajax.open("GET", "http://zamger.etf.unsa.ba/wt/postanskiBroj.php?mjesto=" + mjesto + "&postanskiBroj=" + pbroj, true);
	ajax.send();

}