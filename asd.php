<?php
session_start();
include("PHP/conex.inc");

$user = $_POST["user"];
$passw = $_POST["pass"];

$consulta = "SELECT email,pass,tipo FROM login WHERE email='$user' AND pass='$passw'";
$respuesta = mysqli_query($db, $consulta);
$res=mysqli_fetch_object($respuesta);
if(isset($res->email)){
	if ($res->tipo == "admin"){
		echo "admin";
		$_SESSION['estado'] = "admin";
		header("Location: AdminMaqueta.php");
	}else{
		$_SESSION['estado'] = "user";
		header("Location: index.php");
	}
}else{
	header("Location: index.php?error=Usuario+o+contraseña+inválida");
}
?>