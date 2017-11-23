<?php
	include("conex.inc");
	$id = $_GET["id"];
	$nom = $_GET["nom"];
	$pre = $_GET["pre"];
	$consulta = "UPDATE `producto` SET `Nombre`='$nom',`Precio`='$pre' WHERE ID_Producto='$id'";
	$respuesta = mysqli_query($db, $consulta);


	
	if($respuesta)
		echo "<h1>El producto se ha actualizado</h1>";
	echo "<a href='../Admin.html'>Volver</a>";
?>