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
            session_start();
            if(!isset($_SESSION["registrado"])){
                include '../layout/login_header.php' ;
            }else{
              include '../layout/edicion_perfil_header.php' ;
            }
            include '../layout/header.php';

      ?>
      <div class="contacto_caja" style="clear:both;">
        <fieldset>
          <legend>Registrar Producto</legend>
          <form action="../administrador/agregar_articulo.php" method="post" enctype="multipart/form-data" id="formulario">
            <table>
              <tr>
                <td><label>Nombre</label></td>
                <td><input type="text" name="nombre" id="nombre" value="" required="required" /></td>
              </tr>
              <tr>
                <td><label>Descripci&oacute;n</label></td>
                <td><input type="text" name="descripcion" id="descripcion" value="" required="required" /></td>
              </tr>
              <tr>
                <td><label>Categor&iacute;a</label></td>
                <td><select name="categoria" id="categoria" value="" required="required">
                    <option value="balones">Balones</option>
                    <option value="beisbol">Beisbol</option>
                    <option value="box">Box</option>
                    <option value="ciclismo">Ciclismo</option>
                    <option value="gym">Gym</option>
                    <option value="running">Running</option>
                </select></td>
              </tr>
              <tr>
                <td><label>Precio</label></td>
                <td><input type="text" name="precio" id="precio" value="" required="required" /></td>
              </tr>
              <tr>
                <td><label>Proveedor</label></td>
                <td><input type="text" name="proveedor" id="proveedor" value="" required="required" /></td>
              </tr>
              <tr>
                <td>Imagen</td>
                <td><input type="file" name="archivo" id="archivo" required /></td>
              </tr>
              <tr>
                <td>  <input type="submit" name="boton" value="Registrar" /></td>
              </tr>
            </table>
          </form>
          <?php
          if (isset($_GET["mensaje"])) {
            echo "<center>" . $_GET["mensaje"] . "</center>";
          }
          ?>
        </fieldset>
      </div>
      <?php include '../layout/footer.php'; ?>
    </div>
    <?php include '../layout/login_flotante.php'; ?>
  </body>
</html>
