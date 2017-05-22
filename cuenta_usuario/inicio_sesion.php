<?php
include '../conexionBD/conexionBD.php';
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

if(isset($_POST['enviar'])){
    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $resultado = mysqli_query($conexion, $query);
    $row = mysqli_fetch_assoc($resultado);

    if (mysqli_num_rows($resultado)>0){
      if($row['contrasena'] == $contrasena){
        $_SESSION["registrado"] = true;
        $_SESSION["id_usuario"] = $row['id_usuario'];
        $_SESSION["usuario"] = $row['usuario'];
        $_SESSION["nombre"] = $row['nombre'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["contrasena"] = $row['contrasena'];
        if($row['tipo_usuario'] == "Administrador"){

            $_SESSION["admin"] = true;
            header('Location: ../index.php');
        }else{
            $_SESSION["admin"] = false;
          header('Location: ../index.php');
        }

      }else{
        header('Location: nuevo_usuario.php?status=2');
      }

    }else{
        header('Location: nuevo_usuario.php?status=1');
    }
}
exit();
?>
