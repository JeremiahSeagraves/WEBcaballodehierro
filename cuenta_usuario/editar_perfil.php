<<?php session_start(); ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="../css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/styles.css" type="text/css" media="screen">
    <script type="text/javascript" src="../js/efectos_contrasena.js">
    </script>
  </head>
  <body>
    <div class="container">
      <?php
            if(!isset($_SESSION["registrado"])){
                include '../layout/login_header.php' ;
                 echo "<script src='js/efectos.js'></script>";
            }else{
              include '../layout/edicion_perfil_header.php' ;
            }
            include '../layout/header.php';

      ?>
      <div id="registro">
        <?php
        if (isset($_GET['actualizado'])) {
          echo "<div class='info'>Los cambios se guardaron exitosamente</div>";
        }
        ?>
        <fieldset>
          <legend>Perfil</legend>
          <form class="" action="editar_usuario.php" method="post">
            <table>
              <tr>
                <td><label for="usuario">Usuario: </label></td>
                <td><input type="text" name="usuario" value="<?php echo $_SESSION["usuario"];?>" readonly="readonly"></td>
              </tr>
              <tr>
                <td><label >Email: </label></td>
                <td><input type="email" name="email" value="<?php echo $_SESSION['email'];?>" required></td>
              </tr>
              <tr>
                <td><label >Nombre: </label></td>
                <td><input type="text" name="nombre" value="<?php echo $_SESSION['nombre'];?>"  required></td>
              </tr>
              <tr>
                <td><label>¿Desea cambiar la contraseña?</label><td>
                <td><input id="cambiar_contrasena" type="button" value="si"></td>
              </tr>
              <tr id="mostrar_contrasena">

              </tr>
              <tr id="mostrar_contrasena_vali">

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
