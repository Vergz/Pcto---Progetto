



function btndeposito(i)
{
	var classe=document.getElementById("tdp"+i).getAttribute("class");
	if(classe=="tdp")
	{
		document.getElementById("tdp"+i).setAttribute("class", "titolodeposito");
		document.getElementById("boxd"+i).style.display = "block"; 
	}
	else
	{
		document.getElementById("tdp"+i).setAttribute("class", "tdp");	
		document.getElementById("boxd"+i).style.display = "none"; 
	}
}
