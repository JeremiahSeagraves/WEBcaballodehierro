<?php
include '../conexionBD/conexionBD';
$query ="DELETE FROM usuarios WHERE id_usuario = ". $_GET["id_usuario"];
mysqli_query($conexion,$query);

 ?>
