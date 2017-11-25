<?php
session_start();
if($_SESSION['estado'] != "logeado")
  header("Location: index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Entregon</title>
	<meta charset="utf-8">
  <link rel="shortcut icon" href="Fotos/entregon.ico" ><!--logo-->
  <link rel="icon" type="image/gif" href="Fotos/entregonani.gif" ><!--Animado-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  	<link rel="stylesheet" type="text/css" href="AdminMaqueta.css">
 	<script src="JS/Admin.js"></script>
</head>

	<body>
		<header>
		<nav>
			<h2>
				<a href="#" onclick="AdminIngre()">Nuevo Producto</a> |
				<a href="#" onclick="AdminMuestra('Prod')">Productos</a> |  
				<a href="#" onclick="AdminMuestra('Ped')">Pedidos</a> |
				<a href="cerrarSesion.php"> Cerrar Sesión </a>
			</h2>
		</nav>
		</header>

		<div id="grande">
			<div id="capa">Bienvenido Sr. Administrador</div>
		</div>	
		
		
	</body>

</html>