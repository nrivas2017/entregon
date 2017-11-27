<?php
session_start();
include("PHP/conex.inc");

$ema = $_POST["ema"];
$passw = md5($_POST["pass"]);

$consulta = "SELECT cli.Id_Cliente,cli.nombre,us.email,us.password,us.tipo FROM cliente as cli INNER JOIN usuario as us ON cli.Id_Usuario=us.Id_Usuario WHERE us.email='$ema' AND us.password='$passw'";
$respuesta = mysqli_query($db, $consulta);
$res=mysqli_fetch_object($respuesta);
if(isset($res->email)){
	if ($res->tipo == "admin"){
		echo "admin";
		$_SESSION['estado'] = "admin";
		header("Location: AdminMaqueta.php");
	}else{
		$nombre=$res->nombre;
		$Id_Cliente=$res->Id_Cliente;
		$_SESSION['estado'] = "user";
		$_SESSION['nombre'] = "$nombre";
		$_SESSION['id_cli'] = "$Id_Cliente";
		header("Location: index.php");
	}
}else{
	header("Location: index.php?msj=Usuario+o+contraseña+inválida");
}
?>