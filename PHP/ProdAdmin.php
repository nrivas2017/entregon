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
			echo "<table><tr> <td><b>Nombre</b></td>  <td><b>Precio</b></td> <td></td> <td></td></tr>";
			while($fila=mysqli_fetch_object($respuesta))
				echo "<tr><td>$fila->Nombre</td>
					      <td>$fila->Precio</td>
					      <td><img src='Fotos/trash.png' style='height:28px;width:28px;' onclick='AjaxElimina($fila->ID_Producto)'> </td>
					      <td><img src='Fotos/edit.png' style='height:28px;width:28px;' onclick='AjaxEdita($fila->ID_Producto)'> </td></tr>";
			echo "</table>";
		?>
		</div>
	</body>

</html>