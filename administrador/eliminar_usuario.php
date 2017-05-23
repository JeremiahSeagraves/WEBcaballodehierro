<?php
include '../administrador/conexion.php';
$query ="DELETE FROM usuarios WHERE id_usuario = ". $_GET["id_usuario"];
mysqli_query($conexion,$query);

 ?>
