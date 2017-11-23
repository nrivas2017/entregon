<?php
	include("conex.inc");
	$nom = $_GET["nom"];
	$ntel = $_GET["fon"];
	$ema = $_GET["ema"];
	$dir = $_GET["calle"];
	$ref = $_GET["area"];

	$consulta = "INSERT INTO `cliente`(`Nombre`,`N_Telefono`, `Email`, `Direccion`, `Referencia`) VALUES ('$nom','$ntel','$ema','$dir','$ref')";
	$respuesta = mysqli_query($db, $consulta);


	$consulta = "SELECT Nombre, N_Telefono, Email, Direccion, Referencia FROM cliente";
	$respuesta = mysqli_query($db, $consulta);
	echo "<table><tr> <td>ID</td><td><b>Nombre</b></td> <td><b>N° Telefono</b></td> <td><b>Email</b></td> <td><b>Direccion</b></td> <td><b>Referencia</b></td></tr>";
	while($fila=mysqli_fetch_object($respuesta))
		echo "<tr><td>$fila->Nombre</td>
			      <td>$fila->N_Telefono</td>
			      <td>$fila->Email</td>
			      <td>$fila->Direccion</td>
			      <td>$fila->Referencia</td></tr>";
	echo "</table>";
	echo "<a href='../FormularioMaqueta.html'>Ingresar Otro</a>";
?>