
if (window.XMLHttpRequest) objAjax = new XMLHttpRequest() //para Mozilla
else 
	if (window.ActiveXObject) objAjax = new ActiveXObject("Microsoft.XMLHTTP") //Para IExplorer
			
function MuestraFoto(tipo){
	url = "PHP/MuestraFotos.php?tipo="+tipo;
	objAjax.open("GET",url)
	objAjax.send(null)
//PASO03: Recibir la respuesta del servidor
	objAjax.onreadystatechange = MuestraF;
}

function MuestraF(){
	if(objAjax.readyState==4)
		document.getElementById("fto").innerHTML = objAjax.responseText;
		}