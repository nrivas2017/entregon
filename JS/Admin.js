if (window.XMLHttpRequest) objAjax = new XMLHttpRequest() //para Mozilla
else 
	if (window.ActiveXObject) objAjax = new ActiveXObject("Microsoft.XMLHTTP") //Para IExplorer

function AdminMuestra(cap){
	url = "PHP/"+cap+"Admin.php";
	objAjax.open("GET",url)
	objAjax.send(null)
//PASO03: Recibir la respuesta del servidor
	objAjax.onreadystatechange = VerRespuesta;
}

function VerRespuesta(){
	if(objAjax.readyState==4)
		document.getElementById("capa").innerHTML = objAjax.responseText;
		}


function AjaxElimina(id){
	if (!confirm("¿Desea eliminar el producto "+id+"?"))//OK=True Cancel=False
		return;
	url = "PHP/EliminaProducto.php?id="+id;
	objAjax.open("GET",url)
	objAjax.send(null)
//PASO03: Recibir la respuesta del servidor
	objAjax.onreadystatechange = VerRespuesta;
	}

function VerRespuesta(){
	if(objAjax.readyState==4)
		document.getElementById("capa").innerHTML = objAjax.responseText;
		}

function AjaxEdita(id){
	url = "PHP/EditaProducto.php?id="+id;
	objAjax.open("GET",url)
	objAjax.send(null)
//PASO03: Recibir la respuesta del servidor
	objAjax.onreadystatechange = VerRespuestaEditar;
	}

function VerRespuestaEditar(){
	if(objAjax.readyState==4)
		document.getElementById("capa").innerHTML = objAjax.responseText;
		}

function EliminaPed(id){
	if (!confirm("¿Desea eliminar el pedido "+id+"?"))//OK=True Cancel=False
		return;
	url = "PHP/EliminaPedido.php?id="+id;
	objAjax.open("GET",url)
	objAjax.send(null)
//PASO03: Recibir la respuesta del servidor
	objAjax.onreadystatechange = VerPed;
	}

function VerPed(){
	if(objAjax.readyState==4)
		document.getElementById("capa").innerHTML = objAjax.responseText;
		}

function PedListo(id){
	if (!confirm("¿Esta listo el pedido "+id+"?"))//OK=True Cancel=False
		return;
	url = "PHP/PedListo.php?id="+id;
	objAjax.open("GET",url)
	objAjax.send(null)
//PASO03: Recibir la respuesta del servidor
	objAjax.onreadystatechange = VerListo;
	}

function VerListo(){
	if(objAjax.readyState==4)
		document.getElementById("capa").innerHTML = objAjax.responseText;
		}

function EliminaCli(nom){
	if (!confirm("¿Desea eliminar al cliente "+nom+"?"))//OK=True Cancel=False
		return;
	url = "PHP/EliminaPedido.php?id="+id;
	objAjax.open("GET",url)
	objAjax.send(null)
//PASO03: Recibir la respuesta del servidor
	objAjax.onreadystatechange = VerPed;
	}

function VerPed(){
	if(objAjax.readyState==4)
		document.getElementById("capa").innerHTML = objAjax.responseText;
		}

function AdminIngre(){
	url = "PHP/FormProd.php";
	objAjax.open("GET",url)
	objAjax.send(null)
//PASO03: Recibir la respuesta del servidor
	objAjax.onreadystatechange = VerForm;
}

function VerForm(){
	if(objAjax.readyState==4)
		document.getElementById("capa").innerHTML = objAjax.responseText;
		}