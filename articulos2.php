<!DOCTYPE html>
<html>

<head>
    <title>Productos</title>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen">
    <script type="text/javascript" src="js/ventanas.js"></script>
</head>

<body>
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

                  #Conectamos con MySQL
                  $link=mysqli_connect("localhost","root","","caballo_hierro");
                  if (!$link) {

                      die("Error al conectar: ".mysql_error());
                  }

                  # Buscamos la imagen a mostrar
                  $query = "SELECT * FROM `articulos` WHERE categoria='balones'";
                  $result = mysqli_query($link,$query);
                  mysqli_close($link);
                  $articulos = mysqli_fetch_all($result,MYSQLI_ASSOC);
                  foreach($articulos as $articulo){
                    $id_celda="articulo".$articulo['id_articulo'];
                    $id_figure="articulo".$articulo['id_articulo'];
                    $id_="articulo".$articulo['id_articulo'];
                    echo "<td id=".$id_celda."><figure name='imagen'>";
                    echo "<img src=images/".$articulo['nombre_imagen']." width='100' heigth='80' >";
                    echo "</figure><figcaption>";
                    echo "precio:$". $articulo['precio']."<br>";
                    echo "<input type='button' id=".$articulo['id_articulo']." name='vermas' value='Ver más'>";
                    echo "<input type='hidden' name='proveedor' value=".$articulo['proveedor']." >";
                    echo "<input type='hidden' name='descripcion' value=".$articulo['descripcion']." >";
                    echo "<input type='hidden' name='categoria' value=".$articulo['categoria']." >";
                    echo "</figcaption></td>";
                  }

                  ?>

                </tbody>
            </table>
        </section>
    </div>
    <div id="articulo" class="container">
      <article id="informacion" class="contenido-articulo">
        <figure id="imagen_articulo"></figure>
        <figcaption id="detalles_articulo">
            <input type="button" id="compra" name="compra" value="Comprar">
            <input type="button" id="cancelar" name="cancelar" value="Cancelar">
        </figcaption>
      </article>
    </div>
</body>
</html>
