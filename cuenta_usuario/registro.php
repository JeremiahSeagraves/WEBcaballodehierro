<?php
require_once('../conexionBD/conexionBD.php');
require_once('../conexionBD/funciones.php');

$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$tipo_usuario = $_POST['tipo_usuario'];

$consulta = "INSERT INTO usuarios (id_usuario , usuario , nombre , email , contrasena)
VALUES ( NULL ,'" . $usuario . "','" . $nombre . "','" . $email . "','". $contrasena . "')";

consultar($consulta,$conexion);

$valido = true;
$consulta2 = "SELECT * FROM usuarios where usuario = '$usuario' AND contrasena='$contrasena'";
$result = mysqli_query($conexion,$consulta2) or die(mysqli_error($conexion));
$filasn = mysqli_num_rows($result);
if ($filasn <= 0 || isset($_GET['nologin'])) {
    $valido = false;
} else {
    $rowsresult = mysqli_fetch_assoc($result);
    $_SESSION['id_usuario'] = $rowsresult['id_usuario'];
    //guardamos en sesion el carnet del usuario ya que ese es el identificados en la base de datos
    $_SESSION["registrado"] = true;
    $_SESSION["usuario"] = $usuario;

    $_SESSION["nombre"] = $rowsresult['nombre'];
    $_SESSION["email"] = $rowsresult['email'];
    echo '<script type=\"text/javascript\">alert(\"Gracias Por Registrarse\");</script>';
    if ($rowsresult['tipo_Usuario'] == 'Administrador') {
        header('Location: ../index.php?admin=true');
    } else {
        header('Location: ../index.php?admin=false');
    }
}
 ?>
