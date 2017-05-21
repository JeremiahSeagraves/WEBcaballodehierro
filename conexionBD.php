<?php
$servidor= "localhost";
$basedatos= "equipo6_caballo_hierro";
$usuario= "root";
$contrasena = "";
$conexion = mysqli_connect($servidor, $usuario, $contrasena,$basedatos);
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();
?>
