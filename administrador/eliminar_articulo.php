<?php
include '../conexionBD/conexionBD';
$query ="DELETE FROM articulos WHERE id_articulo = ". $_GET["id_articulo"];
mysqli_query($conexion,$query);

 ?>
