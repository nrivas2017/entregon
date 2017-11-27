<?php
	include("conex.inc");
	$id = $_GET["id"];
	$nom = $_GET["nom"];
	$pre = $_GET["pre"];
	$desc = $_GET["desc"];
	$consulta = "UPDATE `producto` SET `Nombre`='$nom',`Precio`='$pre',`Descripcion`='$desc' WHERE Id_Producto='$id'";
	$respuesta = mysqli_query($db, $consulta);


	
	if($respuesta){?>

<!DOCTYPE html>
<html>
<head>
	<title>Actualiza</title>
</head>
<body>


<h1>El producto se ha actualizado</h1>
<a href='../AdminMaqueta.php'>Volver</a>
</body>
</html>

<?php 
}else{
	echo "Error";
}
?>