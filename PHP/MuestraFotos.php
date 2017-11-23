<?php
	include("conex.inc");
	$tipo = $_GET["tipo"];

	$consulta = "SELECT Fotos FROM producto WHERE Tipo='$tipo'";
	$respuesta = mysqli_query($db, $consulta);


	while($fila=mysqli_fetch_object($respuesta))
		echo "<tr><td> <img src='Fotos/$fila->Fotos'></td></tr>";
?>
