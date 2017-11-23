<!DOCTYPE html>
<html lang=es>

	<head>
		<meta charset="UTF-8">
 	</head>


	<body>
		<div>
			<?php
				include("conex.inc");
				$id = $_GET["id"];
				$consulta = "UPDATE `pedido` SET `Estado`='Listo' WHERE N_Pedido='$id'";
				$respuesta = mysqli_query($db, $consulta);

				$consulta = "SELECT pe.N_Pedido, cli.Nombre, pe.Email, pe.FechaHora, pe.Estado
							 FROM pedido pe
							 INNER JOIN cliente cli
							 ON pe.Email=cli.Email";
				$respuesta = mysqli_query($db, $consulta);
				echo "<table><tr> <td><b>N° Pedido</b></td> <td><b>Nombre</b></td>  <td><b>Email</b></td> <td><b>FechaHora</b></td> <td><b>Estado</b></td> <td></td> <td></td></tr>";
				while($fila=mysqli_fetch_object($respuesta))
					echo "<tr><td>$fila->N_Pedido</td>
							  <td>$fila->Nombre</td>
						      <td>$fila->Email</td>
						      <td>$fila->FechaHora</td>
						      <td>$fila->Estado</td>
						      <td><img src='Fotos/trash.png' style='height:28px;width:28px;' onclick='EliminaPed($fila->N_Pedido)'> </td>
						      <td><button onclick='PedListo($fila->N_Pedido)'>LISTO</button></td></tr>";
				echo "</table>";
			?>
		</div>
	</body>

</html>