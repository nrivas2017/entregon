<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script>
  		$(document).ready(Principal);

  		function Principal(){
          $("button[type='submit']").click(Agrega);
        }

        function Agrega(){
          $("#lista_carrito").append("<li>x"+$("input[type='number']").val()+" "+this.value+"</li>");
        }
  	</script>
</head>
<body>
<?php
	include("conex.inc");
	$tipo = $_GET["tipo"];

	$consulta = "SELECT Nombre, Precio, Fotos, Descripcion FROM producto WHERE Tipo='$tipo'";
	$respuesta = mysqli_query($db, $consulta);

	echo "<table class='table'>";
	while($fila=mysqli_fetch_object($respuesta))
		echo "<tr>
				<td rowspan='2' class='fotopro'><img src='Fotos/$fila->Fotos'></td><td>$fila->Nombre</td>
			    <td>$ $fila->Precio</td></tr>
			    <td colspan='2'><div class='input-group'><p>$fila->Descripcion</p><input type='number' size='1' min='1' max='10' value='1'><button type='submit' value='$fila->Nombre' class='btn btn-default'>Agregar</button></div></td>";
	echo "</table>";
?>
</body>
</html>
