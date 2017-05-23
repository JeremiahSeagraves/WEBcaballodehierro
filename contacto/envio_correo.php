<?php
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

$para = "noecutz03@gmail.com";
$asunto = $nombre." Comentarios de la tienda de deportes el caballo de hierro";
$cabecera = "From: $correo" . "\r\n" .
            "CC: j.m.s.p.jerry@gmail.com" . "\r\n".
            "BCC: noe_cutz@outlook.com";

mail($para,$asunto,$mensaje,$cabecera);

?>