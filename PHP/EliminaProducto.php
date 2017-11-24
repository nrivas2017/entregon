<?php
	include("conex.inc");
	//Recibir el nro del empleado a eliminar
	$id = $_GET["id"];
	$consulta = "DELETE FROM producto WHERE ID_Producto=$id";
	$respuesta = mysqli_query($db, $consulta);
	

	$consulta = "SELECT ID_Producto, Nombre, Precio FROM producto";
	$respuesta = mysqli_query($db, $consulta);
	echo "<table><tr> <td><b>id</b></td> <td><b>Nombre</b></td>  <td><b>Precio</b></td> <td></td> <td></td></tr>";
	while($fila=mysqli_fetch_object($respuesta))
		echo "<tr><td>$fila->ID_Producto</td>
				  <td>$fila->Nombre</td>
			      <td>$fila->Precio</td>
			      <td<a href='#' onclick='EliminaPed($fila->N_Pedido)'><span class='glyphicon glyphicon-trash'></span></a></td>
			      <td><button class='btn btn-success' onclick='PedListo($fila->N_Pedido)'>LISTO</button></td></td></tr>";
	echo "</table>";
?>
