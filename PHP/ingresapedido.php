<?php
	include("conex.inc");
	$id = $_GET["id"];
	$to = $_GET["to"];

	$consulta1 = "SELECT Id_Pedido, Total FROM pedido WHERE Id_Cliente='$id' AND Id_Estado='2'";
	$respuesta1 = mysqli_query($db, $consulta1);
	$res=mysqli_fetch_object($respuesta1);
	if(isset($res->Id_Pedido)){
		$Id_Ped=$res->Id_Pedido;
		$tot=$res->Total;
	}
	if($Id_Ped==""){
		$consulta2 = "INSERT INTO `pedido`(`Id_Cliente`, `Id_Estado`, `Total`) VALUES ('$id','2','$to')";
		$respuesta2 = mysqli_query($db, $consulta2);
	}else{
		$tot+=0;
		$to+=$tot;
		$consulta3 = "UPDATE `pedido` SET `Total`='$to'";
		$respuesta3 = mysqli_query($db, $consulta3);
	}
?>