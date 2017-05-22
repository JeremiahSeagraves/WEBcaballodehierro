<?php
require_once('../conexionBD/conexionBD.php');

//Esto por si el usuario no mete contraseña XD
error_reporting(E_ALL ^ E_NOTICE);

$id_usuario = $_SESSION["id_usuario"];
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

if($contrasena==""){
    $contrasena = $_SESSION["contrasena"];
    $sql="UPDATE usuarios SET usuario = '".$usuario."', email = '".$email."', nombre = '".$nombre."' WHERE id_usuario ='".$id_usuario."'";
}else{
  $sql="UPDATE usuarios SET usuario = '".$usuario."', email = '".$email."', nombre = '".$nombre."', contrasena = '".$contrasena."' WHERE id_usuario ='".$id_usuario."'";
}



$resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
      $query = "SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'";
      $resultado = mysqli_query($conexion, $query);
      $row = mysqli_fetch_assoc($resultado);

      if (mysqli_num_rows($resultado)>0){
          $_SESSION["usuario"] = $row['usuario'];
          $_SESSION["nombre"] = $row['nombre'];
          $_SESSION["email"] = $row['email'];
          $_SESSION["contrasena"] = $row['contrasena'];
        }
        header('Location: editar_perfil.php?actualizado=exitoso');
    } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }

?>
