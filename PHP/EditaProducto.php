<!DOCTYPE>
<html>

	<head>
		<meta charset="UTF-8">
		<style>
			input,textarea{
				color: black;
			}
			#camp_form{
				text-align: left;
				padding-left: 30px;
			}

			input[type=submit]{
				margin-left: 100px;
			}
			label{
				width: 100px;
			}
		</style>
	</head>


	<body id="act">

		<div id="container">
		<form  action="PHP/ActualizaProducto.php" method="GET" id="formprod">
<!-- action="PHP/ActualizaProducto.php" method="get" -->
		<div id="miCapa">
			<?php
				include("conex.inc");

				$id = $_GET["id"];
				$consulta = "SELECT Nombre, Precio,Descripcion FROM producto WHERE Id_Producto='$id'";
				$respuesta = mysqli_query($db, $consulta);
				echo "<table class='table'><tr> <td><b>Nombre</b></td> <td><b>Descripcion</b></td> <td><b>Precio</b></td> </tr>";
				while($fila=mysqli_fetch_object($respuesta))
					echo "<tr><td>$fila->Nombre</td>
						  	  <td>$fila->Descripcion</td>
			    		  <td>$ $fila->Precio</td></tr>";
				echo "</table>";
			?>
			<br>
		</div>

				<div id="camp_form">
				<input type="hidden" name="id" value="<?php echo $id ?>">

				<label>Nombre: </label>
				<input type="text" name="nom" placeholder="Nuevo Nombre" required><br>

				<label>Precio: </label>
				<input type="number" name="pre" placeholder="Nuevo precio" required><br>

				<label>Descripcion: </label>
				<textarea form="formprod" name="desc" rows="4" cols="30" required placeholder="Nueva descripción del Producto..."></textarea><br>

				<input type="submit" class="boton btn btn-success" value="Actualizar">
				</div>
		</form>
	</body>
</html>