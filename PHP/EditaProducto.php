<!DOCTYPE>
<html>

	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="CSS/FormEdita.css">

	</head>


	<body id="act">

		<div id="container">
		<form  action="PHP/ActualizaProducto.php" method="GET" id="miFormulario">
<!-- action="PHP/ActualizaProducto.php" method="get" -->
		<div id="miCapa">
			<?php
				include("conex.inc");

				$id = $_GET["id"];
				$consulta = "SELECT Nombre, Precio FROM producto WHERE ID_Producto='$id'";
				$respuesta = mysqli_query($db, $consulta);
				echo "<table class='table'><tr> <td><b>Nombre</b></td> <td></td><td></td> <td><b>Precio</b></td> </tr>";
				while($fila=mysqli_fetch_object($respuesta))
					echo "<tr><td>$fila->Nombre</td>
						  	  <td></td><td></td>
			    		  <td>$ $fila->Precio</td></tr>";
				echo "</table>";
			?>
			<br>
		</div>

		

				<input type="hidden" name="id" value="<?php echo $id ?>">

				<input type="text" name="nom" id="itNombre" class="campo" placeholder="Nuevo Nombre"><br>
				<div id="mensaje1" class="errores">Ingrese Nombre</div>

				<input type="num" name="pre" id="itPrecio" class="campo" placeholder="Nuevo precio"><br>
				<div id="mensaje2" class="errores">Ingrese Precio</div>

				<input type="submit" id="bEnviar" class="boton btn btn-success" name="enviar">

		</form>
	</body>
</html>