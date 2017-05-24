<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="../css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/styles.css" type="text/css" media="screen">
    <script type="text/javascript" src="../js/ventanas.js" ></script>
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

          <section id="submenu"><!-- Defining the sub menu -->
                <ul>
                    <li><a href="cat_balones.php">Balones</a></li>
                    <li><a href="cat_running.php">Running</a></li>
                    <li><a href="cat_box.php">Box</a></li>
                    <li><a href="cat_ciclismo.php">Ciclismo</a></li>
                    <li><a href="cat_beisbol.php">Beisbol</a></li>
                    <li><a href="cat_gym.php">Gym</a></li>
                </ul>
            </section>

        <section>
            <table id="mostrador">
                <thead>
                    <tr>
                        <td class="titulo" colspan="3">Box</td>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  require_once ('../administrador/conexion.php');
                  require_once ('../conexionBD/funciones.php');
                  # Buscamos la imagen a mostrar
                  $query = "SELECT * FROM articulos WHERE categoria = 'Box'";
                  $articulos = consultarBaseDatos($query,$conexion);
                  foreach($articulos as $articulo){
                    $id_articulo = $articulo['id_articulo'];
                    $id_celda="articulo".$id_articulo;
                    $id_nombre="nombre".$id_articulo;
                    $id_figure="figura".$id_articulo;
                    $id_precio="precio".$id_articulo;
                    $id_proveedor="proveedor".$id_articulo;
                    $id_descripcion="descripcion".$id_articulo;
                    echo "<td id=".$id_celda."><figure id=".$id_figure." name='imagen' >";
                    echo "<img src=../images/productos/".$articulo['nombre_imagen']." width='100' heigth='80' >";
                    echo "</figure><figcaption>";
                    echo "<p id =".$id_nombre.">".$articulo['nombre']."</p>";
                    echo "<p id =".$id_precio.">$".$articulo['precio']."</p>";
                    echo "<input type='button' id=".$id_articulo." name='vermas' value='Ver más'>";

                    echo "<div id='oculto' style='visibility:hidden'>";

                    echo "<p id =".$id_proveedor.">".$articulo['proveedor']."</p>";
                    echo "<p id =".$id_descripcion.">".$articulo['descripcion']."</p>";

                    echo "<input type='text' id='espaciado' name='blanco' >";

                    echo "</div>";
                    echo "</figcaption></td>";
                  }
                  ?>

                </tbody>
            </table>
        </section>
          <?php include '../layout/footer.php'; ?>
    </div>
    <div id="caja_flotante" class="container">
      <div id="informacion" class="modal">


      </div>
    </div>
  <?php include '../layout/login_flotante.php'; ?>
</body>
</html>
