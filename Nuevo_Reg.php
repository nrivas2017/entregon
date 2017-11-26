<?php
include("PHP/conex.inc");

$ema = $_POST["ema"];
$passw = $_POST["pass"];

$consulta = "SELECT nombre,email,pass,tipo FROM login WHERE email='$ema' AND pass='$passw'";
$respuesta = mysqli_query($db, $consulta);
?>