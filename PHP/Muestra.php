<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
	include("conex.inc");
	$cate = $_GET["tipo"];

	$consulta = "SELECT Id_Producto, Nombre, Precio, Foto, Descripcion FROM producto WHERE Id_Categoria=$cate";
	$respuesta = mysqli_query($db, $consulta);

	echo "<table class='table'>";
	while($fila=mysqli_fetch_object($respuesta))
		echo "<tr><td rowspan='3' class='fotopro'><img src='Fotos/$fila->Foto'></td><td>$fila->Nombre</td><td>$ $fila->Precio</td></tr>
			    <tr><td colspan='2'><p>$fila->Descripcion</p></td></tr>
			    <tr><td><input type='number' id='$fila->Id_Producto' size='1' min='1' max='10' value='1'></td>
			    <td><button type='submit' onClick='addProduct($fila->Id_Producto)' value='$fila->Nombre' class='btn btn-default'>Agregar</button></td></tr>";
	echo "</table>";
?>
</body>
</html>
