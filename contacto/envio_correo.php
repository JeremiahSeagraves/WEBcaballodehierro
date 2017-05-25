<?php
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

$para = "noecutz03@gmail.com";
$asunto = $nombre." Comentarios de la tienda de deportes el caballo de hierro";
$cabecera = "From: $correo" . "\r\n" .
            "CC: j.m.s.p.jerry@gmail.com" . "\r\n".
            "BCC: noe_cutz@outlook.com";
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Jerry <jeremiah.seagraves@outlook.com>, Noe <noecutz01@gmail.com>' . "\r\n";
$headers .= 'From: El caballo de hierro <noecutz03@gmail.com>' . "\r\n";
$headers .= 'Cc: mdoming@correos.uady.com.mx' . "\r\n";
$headers .= 'Bcc: j.m.s.p.jerry@gmail.com' . "\r\n";

mail($para,$asunto,$mensaje,$headers);

?>