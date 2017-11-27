<?php
include("PHP/conex.inc");

$nom = $_POST["nom"];
$ape = $_POST["ape"];
$tel = $_POST["tel"];
$dir = $_POST["dir"];
$ema = $_POST["ema"];
$pass = md5($_POST["pass"]);

$consulta = "INSERT INTO `usuario`(`Email`, `Password`, `Tipo`) VALUES ('$ema','$pass','user')";
$respuesta = mysqli_query($db, $consulta);

$consulta = "SELECT Id_Usuario FROM usuario WHERE Email='$ema'";
$respuesta = mysqli_query($db, $consulta);
$res=mysqli_fetch_object($respuesta);
if(isset($res->Id_Usuario)){
	$id=$res->Id_Usuario;
}

$consulta3 = "INSERT INTO cliente(Nombre, Apellido, Telefono, Direccion, Id_Usuario) VALUES ('$nom','$ape','$tel','$dir','$id')";
$respuesta3 = mysqli_query($db, $consulta3);
header("Location: index.php?msj=Registro+Completo");
?>