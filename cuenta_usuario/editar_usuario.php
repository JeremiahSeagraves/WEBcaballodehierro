<?php
require_once('../conexionBD/conexionBD.php');

//Esto por si el usuario no mete contraseña XD
error_reporting(E_ALL ^ E_NOTICE);

$id_usuario = $_SESSION["id_usuario"];
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$contrasena = $_POST['contrasena'];

if($contrasena==""){
    $contrasena = $_SESSION["contrasena"];
    $sql="UPDATE usuarios SET usuario = '".$usuario."', nombre = '".$nombre."' WHERE id_usuario ='".$id_usuario."' AND usuario = '".$usuario."'";
}else{
  $sql="UPDATE usuarios SET usuario = '".$usuario."', nombre = '".$nombre."', contrasena = '".$contrasena."' WHERE id_usuario ='".$id_usuario."' AND usuario = '".$usuario."'";
}

$resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        header('Location: editar_perfil.php?actualizado=exitoso');
    } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }

?>
