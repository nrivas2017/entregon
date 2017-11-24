<!DOCTYPE html>
<html lang=es>

	<head>
		<meta charset="UTF-8">
 	</head>


	<body>
		<div>
			<?php
				include("conex.inc");

				$consulta = "SELECT pe.N_Pedido, cli.Nombre, pe.Email, pe.FechaHora, pe.Estado
							 FROM pedido pe
							 INNER JOIN cliente cli
							 ON pe.Email=cli.Email";
				$respuesta = mysqli_query($db, $consulta);
				echo "<table class='table'><tr> <td><b>N° Pedido</b></td> <td><b>Nombre</b></td>  <td><b>Email</b></td> <td><b>FechaHora</b></td> <td><b>Estado</b></td> <td></td> <td></td></tr>";
				while($fila=mysqli_fetch_object($respuesta))
					echo "<tr><td>$fila->N_Pedido</td>
							  <td>$fila->Nombre</td>
						      <td>$fila->Email</td>
						      <td>$fila->FechaHora</td>
						      <td>$fila->Estado</td>
						      <td><a href='#' onclick='EliminaPed($fila->N_Pedido)'><span class='glyphicon glyphicon-trash'></span></a></td>
						      <td><button class='btn btn-success' onclick='PedListo($fila->N_Pedido)'>LISTO</button></td></tr>";
				echo "</table>";
			?>
		</div>
	</body>

</html>