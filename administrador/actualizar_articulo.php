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

            include '../administrador/conexion.php';


            if(isset($_GET["id_articulo"])){
              $id_articulo=$_GET["id_articulo"];
              $query = "SELECT * FROM articulos WHERE id_articulo= $id_articulo";
              $result = mysqli_query($conexion, $query);
              $row = mysqli_fetch_assoc($result);

          			$nombre=$row["nombre"];
                $descripcion=$row["descripcion"];
                $categoria=$row["categoria"];
          			$precio=$row["precio"];
                $proveedor=$row["proveedor"];
          			$imagen=$row["nombre_imagen"];
              }


      ?>
      <fieldset>
        <legend>Editar Articulo</legend>
        <form action="../administrador/modificar_articulo.php" method="post" id="formulario">
          <table>
            <tr>
              <td><label>ID articulo</label></td>
              <td><input type="text" name="id_articulo" id="id_articulo" value="<?php echo $id_articulo?>"  required="required" readonly="readonly"/></td>
            </tr>
            <tr>
              <td><label>Nombre</label></td>
              <td><input type="text" name="nombre" id="nombre" value="<?php echo $nombre?>" required="required" /></td>
            </tr>
            <tr>
              <td><label>Descripci&oacute;n</label></td>
              <td><input type="text" name="descripcion" id="descripcion" value="<?php echo $descripcion?>"  required="required" /></td>
            </tr>
            <tr>
              <td><label>Categor&iacute;a</label></td>
              <td><input type="text" name="categoria" id="categoria" value="<?php echo $categoria?>"  required="required"></td>
            </tr>
            <tr>
              <td><label>Precio</label></td>
              <td><input type="text" name="precio" id="precio" value="<?php echo $precio?>"  required="required" /></td>
            </tr>
            <tr>
              <td><label>Proveedor</label></td>
              <td><input type="text" name="proveedor" id="proveedor" value="<?php echo $proveedor?>"  required="required" /></td>
            </tr>
            <tr>
              <td>Imagen</td>
              <td>
                <?php echo "<img width='100' height='120' src='../images/productos/".$imagen."'/>"; ?>
              </td>
            </tr>
            <tr>
              <td><input type="submit" name="boton" value="Actualizar" /></td>
            </tr>
          </table>
        </form>
        <?php
        if (isset($_GET["mensaje"])) {
          echo "<center>" . $_GET["mensaje"] . "</center>";
        }
        ?>
      </fieldset>
  <div id="resultado" align="center"></div>
</form>
      <?php include '../layout/footer.php'; ?>
    </div>
    <?php include '../layout/login_flotante.php'; ?>
  </body>
</html>
