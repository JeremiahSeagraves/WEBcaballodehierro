
<?php
session_start();
if (!isset($_SESSION["usuario"])) {

} else {
    $_SESSION["usuario"];
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro Usuario</title>
    <link rel="stylesheet" href="../css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/styles.css" type="text/css" media="screen">
    <script type="text/javascript" src="../js/efectos.js"></script>
  </head>
  <body>
    <div class="container">
      <?php

            if(!isset($_SESSION["registrado"])){
                include '../layout/login_header.php' ;
            }else{
              include '../layout/edicion_perfil_header.php' ;
            }
            include '../layout/header.php';

      ?>

      <div>
        <?php
        if(isset($_GET["status"])){
          if($_GET["status"]==1){
            echo    "<div class='info_red'>".
            "<p>Usuario Invalido</p>".
              "</div>";
            }elseif ($_GET["status"]==2) {
              echo    "<div class='info_red'>".
              "<p>Conrase&ntilde;a Invalida</p>".
                "</div>";
              }
          }
          ?>
        <fieldset>
          <legend>Registro</legend>
          <form class="" action="registro.php" method="post">
            <table>
              <tr>
                <td><label for="usuario">Usuario: </label></td>
                <td><input type="text" name="usuario" required></td>
              </tr>
              <tr>
                <td><label >Email: </label></td>
                <td><input type="email" name="email"  required></td>
              </tr>
              <tr>
                <td><label >Nombre: </label></td>
                <td><input type="text" name="nombre"  required></td>
              </tr>
              <tr>
                <td><label >Contrase&ntilde;a </label></td>
                <td><input type="password" name="contrasena"  required></td>
              </tr>
              <tr>
                <td><label>Vuelva a introducir la contrase&ntilde;a</label></td>
                <td><input type="password" name="contrasena_valid" required></td>
              </tr>
              <tr>
                <td><label>Tipo de Usuario</label></td>
                <td><select name="tipo_usuario" id="tipo_usuario">
                  <option name="tipo_usuario" value="Administrador">Administrador</option>
                  <option name="tipo_usuario" value="normal">Normal</option>
                </select></td>
              </tr>
              <tr>
                <td colspan="2">
                  <input type="submit" name="enviar" id="enviar" value="Enviar" />
                </td>

              </tr>
            </table>
          </form>
        </fieldset>
      </div>
      <?php include '../layout/footer.php'; ?>
    </div>
    <?php include '../layout/login_flotante.php'; ?>
  </body>
</html>
