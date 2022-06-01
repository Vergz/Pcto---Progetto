



function btndeposito()
{
	document.getElementById("tdp").style.color="#009EE0";
	var classe=document.getElementById("tdp").getAttribute("class");
	if(classe=="tdp1")
	{
		document.getElementById("tdp").setAttribute("class", "titolodeposito");
	}
	else if(classe=="titolodeposito")
	{
		document.getElementById("tdp").setAttribute("class", "tdp1");
	}
}
