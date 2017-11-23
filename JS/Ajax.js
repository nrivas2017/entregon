
if (window.XMLHttpRequest) objAjax = new XMLHttpRequest() //para Mozilla
else 
	if (window.ActiveXObject) objAjax = new ActiveXObject("Microsoft.XMLHTTP") //Para IExplorer
			


function AjaxMuestra(tipo){
	url = "PHP/Muestra.php?tipo="+tipo;
	objAjax.open("GET",url)
	objAjax.send(null)
//PASO03: Recibir la respuesta del servidor
	objAjax.onreadystatechange = Muestra;
}

function Muestra(){
	if(objAjax.readyState==4)
		document.getElementById("lista").innerHTML = objAjax.responseText;
		}
