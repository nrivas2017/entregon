<?php
	include("conex.inc");
	//Recibir el nro del empleado a eliminar
	$id = $_GET["id"];
	$consulta = "DELETE FROM producto WHERE Id_Producto=$id";
	$respuesta = mysqli_query($db, $consulta);
	

	$consulta = "SELECT Id_Producto, Nombre, Precio,Descripcion FROM producto";
	$respuesta = mysqli_query($db, $consulta);
	echo "<table class='table'><tr> <td><b>Nombre</b></td>  <td><b>Precio</b></td> <td><b>Descripcion</b></td> <td></td> <td></td></tr>";
	while($fila=mysqli_fetch_object($respuesta))
		echo "<tr><td>$fila->Nombre</td>
					      <td>$fila->Precio</td>
					      <td>$fila->Descripcion</td>
					      <td><a href='#' onclick='AjaxElimina($fila->Id_Producto)'><span class='glyphicon glyphicon-trash'></span></a></td>
					      <td><a href='#' onclick='AjaxEdita($fila->Id_Producto)'><span class='glyphicon glyphicon-pencil'></span></a></td></tr>";
	echo "</table>";
?>
