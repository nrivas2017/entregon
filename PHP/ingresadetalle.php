<?php
	include("conex.inc");
	$id = $_GET["id"];
	$nom = $_GET["nom"];
	$pre = $_GET["pre"];
	$cant = $_GET["cant"];
	$sub = $_GET["sub"];
	

	$consulta = "SELECT Id_Pedido FROM pedido WHERE Id_Cliente='$id' AND Id_Estado='2'";
	$respuesta = mysqli_query($db, $consulta);
	$res=mysqli_fetch_object($respuesta);
	if(isset($res->Id_Pedido)){
		$Id_Ped=$res->Id_Pedido;
	}
	$consulta = "SELECT Id_Producto FROM producto WHERE Nombre='$nom'";
	$respuesta = mysqli_query($db, $consulta);
	$res=mysqli_fetch_object($respuesta);
	if(isset($res->Id_Producto)){
		$Id_Prod=$res->Id_Producto;
	}

	$consulta = "INSERT INTO `detalle`(`Id_Pedido`, `Id_Producto`, `Cantidad`, `Precio`, `SubTotal`) VALUES ('$Id_Ped','$Id_Prod','$cant','$pre','$sub')";
	$respuesta = mysqli_query($db, $consulta);

?>