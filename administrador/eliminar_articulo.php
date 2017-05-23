<?php
include '../administrador/conexion.php';
$query ="DELETE FROM articulos WHERE id_articulo = ". $_GET["id_articulo"];
$result = mysqli_query($conexion,$query);
header("Location:../administrador/listar_productos.php");
 ?>
