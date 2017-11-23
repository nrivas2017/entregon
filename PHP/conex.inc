<?php
	$host = "localhost";
	$db = mysqli_connect($host,"root","","proyecto");
	if(!$db)  echo "Error en la conexión";
?>