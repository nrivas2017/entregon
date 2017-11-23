$(document).ready(Principal);

function Principal(){
	$.ajax({
	url:"php/muestra.php?tipo=ComidaCasera" ,
	success: function(datos){
		$('#lista').html(datos)
		}
	})

}