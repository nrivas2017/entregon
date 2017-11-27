<?php
	include("conex.inc");
	$id = $_GET["id"];

	$consulta = "SELECT pro.Nombre,de.Cantidad
				FROM detalle as de
				INNER JOIN producto as pro
				ON de.Id_Producto=pro.Id_Producto
				WHERE de.Id_Pedido='$id'";
	$respuesta = mysqli_query($db, $consulta);
	echo "<table class='table' style='color:black;'><tr> <td><b>Nombre</b></td> <td><b>Cantidad</b></td></tr>";
	while($fila=mysqli_fetch_object($respuesta))
		echo "<tr><td>$fila->Nombre</td>
			   		<td>$fila->Cantidad</td></tr>";
	echo "</table>";
	$consulta = "SELECT cli.Direccion,pe.Total,pe.FechaHora
				FROM pedido as pe
				INNER JOIN cliente as cli
				ON pe.Id_Cliente=cli.Id_Cliente
				WHERE Id_Pedido='$id'";
	$respuesta = mysqli_query($db, $consulta);
	echo "<table class='table' style='color:black;'><tr> <td><b>Direccion</b></td> <td><b>FechaHora</b></td> <td><b>Total</b></td></tr>";
	while($fila=mysqli_fetch_object($respuesta))
		echo "<tr><td>$fila->Direccion</td>
					<td>$fila->FechaHora</td>
			   		<td>$fila->Total</td></tr>";
	echo "</table>";

	
?>