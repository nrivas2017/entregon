<?php
include("conex.inc");

$tamano=$_FILES["archivo"]['size'];
$tipoar=$_FILES["archivo"]['type'];
$archivo=$_FILES["archivo"]['name'];
$nomTemporal=$_FILES["archivo"]['tmp_name'];

if ( $archivo != "" ) {
$prefijo  =  substr(md5(uniqid(rand())),0,6);  //Para que el sistema le asigne un nombre al archivo, asi evitamos duplicados
$NuevoNombre = $prefijo."_".$archivo;
      $destino = "../Fotos/".$NuevoNombre;
      if ( copy ($nomTemporal, $destino) ) {
                  $msj = "Archivo subido: $NuevoNombre <br>
                              Tamaño: $tamano bytes <br>
                                Tipo: $tipoar <br>"; 
  								}
  else  $msj = "<b>Error: puede que la carpeta esté sin permiso</b>";
}
else $msj = "<b>No se cargó nigún archivo</b>";

echo $msj;


$nom = $_POST["nom"];
$pre = $_POST["pre"];
$tipo = $_POST["tipo"];
$desc = $_POST["desc"];

if ($tipo=="Pizza"){
  $tipo="1";
}
if ($tipo=="Promocion"){
  $tipo="2";
}
if ($tipo=="ComidaCasera"){
  $tipo="3";
}
if ($tipo=="Salchipapa"){
  $tipo="4";
}
if ($tipo=="ParaBeber"){
  $tipo="5";
}
if ($tipo=="Sandwichs"){
  $tipo="6";
}

$consulta = "INSERT INTO `producto`(`Nombre`,`Precio`, `Descripcion`, `Foto`, `Id_Categoria`) VALUES ('$nom','$pre','$desc','$NuevoNombre','$tipo')";
	$respuesta = mysqli_query($db, $consulta);

	if($respuesta){
		echo "Producto ingresado";
	}else{
		echo "error";
	}
?>