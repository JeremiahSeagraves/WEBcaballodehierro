<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro Usuario</title>
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen">
  </head>
  <body>
    <?php include 'header.php' ?>
    <div >
      <fieldset>
        <legend>Registro</legend>
        <form class="" action="registro.php" method="post">
          <table>
            <tr>
              <td><label for="usuario">Usuario: </label></td>
              <td><input type="text" name="usuario" required></td>
            </tr>
            <tr>
              <td><label >Nombre: </label></td>
              <td><input type="text" name="nombre"  required></td>
            </tr>
            <tr>
              <td><label >Contrase&ntilde;a </label></td>
              <td><input type="password" name="usuario"  required></td>
            </tr>
            <tr>
              <td><label>Vuelva a introducir la contrase&ntilde;a</label></td>
              <td><input type="password" name="contrasena_valid" required></td>
            </tr>
          </table>
        </form>
      </fieldset>
    </div>
  </body>
</html>
