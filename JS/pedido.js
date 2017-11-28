$(document).ready(Principal);
var msj="";
function Principal(){
	$("#btn_pedido").click(Obtener);
}

function Enviar_P(id,to){
	$.ajax({
	url:"PHP/ingresapedido.php?id="+id+"&to="+to,
	success: function(datos){
		x=1;
        }
    })
}

function Enviar_D(id,z,x,c,v){
	$.ajax({
	url:"PHP/ingresadetalle.php?id="+id+"&nom="+z+"&pre="+x+"&cant="+c+"&sub="+v,
	success: function(datos){
		x=1;
        }
    })
}

function correo(id,msj){
	$.ajax({
	url:"PHP/email.php?id="+id+"&msj="+msj,
	success: function(datos){
		x=1;
        }
    })
}

function Obtener(){
	var x = $("#lista_ped > tr").length;
	var id_cl = $("#id_cl").val();
	var total = $("#total_ped").text();
	Enviar_P(id_cl,total);
	for (var i=1; i<=x; i++){
		var nombre = $("#lista_ped > tr:nth-child("+i+") >.nombre").text();
		var precio = $("#lista_ped > tr:nth-child("+i+") >.precio").text();
		var cantidad = $("#lista_ped > tr:nth-child("+i+") >.cantidad").text();
		var subtotal = $("#lista_ped > tr:nth-child("+i+") >.subtotal").text();
		msj+=nombre+" x"+cantidad+" precio: "+precio+" SubTotal: "+subtotal+" - ";
		Enviar_D(id_cl,nombre,precio,cantidad,subtotal);
		}
	correo(id_cl,msj);
	alert("Pedido Realizado =)");
}


	
	