<?php
session_start();
include("PHP/conex.inc");

$ema = $_POST["ema"];
$passw = $_POST["pass"];

$consulta = "SELECT nombre,email,pass,tipo FROM login WHERE email='$ema' AND pass='$passw'";
$respuesta = mysqli_query($db, $consulta);
$res=mysqli_fetch_object($respuesta);
if(isset($res->email)){
	if ($res->tipo == "admin"){
		echo "admin";
		$_SESSION['estado'] = "admin";
		header("Location: AdminMaqueta.php");
	}else{
		$nombre=$res->nombre;
		$_SESSION['estado'] = "user";
		$_SESSION['nombre'] = "$nombre";
		header("Location: index.php");
	}
}else{
	header("Location: index.php?error=Usuario+o+contraseña+inválida");
}
?>