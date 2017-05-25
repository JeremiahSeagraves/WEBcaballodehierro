<?php
$servidor= "localhost";
$basedatos= "equipo6_caballo_hierro";
$usuario= "equipo6";
$contrasena = "equipo6";
$conexion = mysqli_connect($servidor, $usuario, $contrasena,$basedatos);
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();
?>
