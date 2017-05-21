<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen">
    <script type="text/javascript" src="js/ventanas.js" ></script>
</head>
<body>
  <?php include 'encabezados/header.php'?>
    <div class="container">
        <section>
            <table id="mostrador">
                <thead>
                    <tr>
                        <td class="titulo" colspan="3">Balones</td>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  require_once ('conexionBD.php');
                  require_once ('funciones.php');
                  # Buscamos la imagen a mostrar
                  $query = "SELECT * FROM 'articulos' WHERE categoria = 'balones'";
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
                    echo "<img src=images/productos/".$articulo['nombre_imagen']." width='100' heigth='80' >";
                    echo "</figure><figcaption>";
                    echo "<p id =".$id_nombre.">".$articulo['nombre']."</p>";
                    echo "<p id =".$id_precio.">$".$articulo['precio']."</p>";
                    echo "<input type='button' id=".$id_articulo." name='vermas' value='Ver más'>";
                    echo "<input type='hidden' id=".$id_proveedor." name='proveedor' value=".$articulo['proveedor']." >";
                    echo "<input type='hidden' id=".$id_descripcion." name='descripcion' value=".$articulo['descripcion']." >";
                    echo "</figcaption></td>";
                  }
                  ?>

                </tbody>
            </table>
        </section>
    </div>
    <div id="articulo" class="container">
      <div id="informacion" class="contenido-articulo">

            
      </div>
    </div>
    <?php include 'encabezados/footer.php'; ?>
</body>
</html>
