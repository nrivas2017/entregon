<?php

$destino="viconsmite2@gmail.com";
$name="Nicolas";
$correo="nrivas2017@alu.uct.cl";
$fon="+56949820144";
$msj="Esto es un mensaje";
$contenido="Nombre: ".$name."\nCorreo: ".$correo."\nTelefono: ".$fon."\nMensaje: ".$msj;

mail($destino, "Contacto", $contenido);
echo "Enviado";
?>