<?php
include("conex.inc");
$msj=$_GET["msj"];
$id=$_GET["id"];

$consulta1 = "SELECT Id_Pedido, Total, FechaHora FROM pedido WHERE Id_Cliente='$id' AND Id_Estado='2'";
$respuesta1 = mysqli_query($db, $consulta1);
$res=mysqli_fetch_object($respuesta1);
if(isset($res->Id_Pedido)){
	$Id_Ped=$res->Id_Pedido;
	$to=$res->Total;
	$FechaHora=$res->FechaHora;
}

$consulta2 = "SELECT cli.Nombre, cli.Apellido, cli.Direccion, us.Email FROM usuario as us   INNER JOIN cliente as cli ON cli.Id_Usuario=us.Id_Usuario WHERE cli.Id_Cliente='$id'";
$respuesta2 = mysqli_query($db, $consulta2);
$res2=mysqli_fetch_object($respuesta2);
if(isset($res2->Nombre)){
	$ema=$res2->Email;
	$nom=$res2->Nombre;
	$ape=$res2->Apellido;
	$dir=$res2->Direccion;
}
$titulo="Pedido $Id_Ped";
$contenido1="Estimado $nom $ape\n";
$contenido2="$contenido1 Se le comunica que ha realizado el pedido nro: $Id_Ped El cual consta de:\n\n";
$contenido3="$contenido2 $msj\n\n";
$contenido4="$contenido3 Con fecha y hora: $FechaHora a la dirección: $dir";
mail($ema, $titulo, $contenido4);
?>