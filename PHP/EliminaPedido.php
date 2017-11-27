<?php
	include("conex.inc");
	//Recibir el nro del empleado a eliminar
	$id = $_GET["id"];
	$consulta1 = "DELETE FROM detalle WHERE Id_Pedido=$id";
	$respuesta1 = mysqli_query($db, $consulta1);

	$consulta2 = "DELETE FROM pedido WHERE Id_Pedido=$id";
	$respuesta2 = mysqli_query($db, $consulta2);
	

	$consulta3 = "SELECT pe.Id_Pedido, cli.direccion, pe.FechaHora, e.N_Estado
				FROM pedido pe
				INNER JOIN cliente cli
				ON pe.Id_Cliente=cli.Id_Cliente
				INNER JOIN estado e
				ON pe.Id_Estado=e.Id_Estado";
	$respuesta3 = mysqli_query($db, $consulta3);
	echo "<table><tr> <td><b>N° Pedido</b></td> <td><b>Direccion</b></td>  <td><b>FechaHora</b></td> <td><b>Estado</b></td> <td></td> <td></td></tr>";
	while($fila=mysqli_fetch_object($respuesta3))
		echo "<tr><td>$fila->Id_Pedido</td>
			      <td>$fila->Direccion</td>
			      <td>$fila->FechaHora</td>
			      <td>$fila->Estado</td>
			      <td><a href='#' onclick='EliminaPed($fila->Id_Pedido)'><span class='glyphicon glyphicon-trash'></span></a></td>
			      <td><button onclick='PedListo($fila->Id_Pedido)'>LISTO</button></td></tr>";
	echo "</table>";
?>
