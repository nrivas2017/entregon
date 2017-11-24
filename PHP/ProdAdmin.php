<!DOCTYPE html>
<html lang=es>

	<head>
		<meta charset="UTF-8">
 	</head>


	<body>
		<div>
		<?php
			include("conex.inc");

			$consulta = "SELECT ID_Producto, Nombre, Precio FROM producto";
			$respuesta = mysqli_query($db, $consulta);
			echo "<table class='table'><tr> <td><b>Nombre</b></td>  <td><b>Precio</b></td> <td></td> <td></td></tr>";
			while($fila=mysqli_fetch_object($respuesta))
				echo "<tr><td>$fila->Nombre</td>
					      <td>$fila->Precio</td>
					      <td><a href='#' onclick='EliminaPed($fila->N_Pedido)'><span class='glyphicon glyphicon-trash'></span></a></td>
					      <td><button class='btn btn-success' onclick='PedListo($fila->N_Pedido)'>LISTO</button></td></tr>";
			echo "</table>";
		?>
		</div>
	</body>

</html>