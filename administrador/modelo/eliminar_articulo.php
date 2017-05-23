<?php
include '../administrador/modelo/conexion.php';
$query ="DELETE FROM articulos WHERE id_articulo = ". $_GET["id_articulo"];
mysqli_query($conexion,$query);

 ?>
