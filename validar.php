<?php
session_start();

$user = $_POST["user"];
$passw = $_POST["pass"];

//supongamos que consultamos estos datos en la BD

if($user=="admin" && $passw=="1234") {
	$_SESSION['estado'] = "logeado";
	header("Location: AdminMaqueta.php");      //redirecciona al script Admin.php
	}
else {
	header("Location: sesion.php?error=Usuario+o+contraseña+inválida");  //redirecciona al inicio enviando un msj de error como parámetro
	}
?>