<?php
include '../administrador/conexion.php';
$query ="DELETE FROM usuarios WHERE id_usuario = ". $_GET["id_usuario"];
$result=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
header("Location:../administrador/listar_usuarios.php");
 ?>
