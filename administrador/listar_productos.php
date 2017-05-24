<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Usuarios</title>
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
                <legend>Editar Informaci&oacute;n</legend>
                  <form action="" method="post" id="formulario">
                    <input type="text" name="boxBuscar" id="boxBuscar" autofocus="autofocus" value="" placeholder="Ingrese un dato." required/>
                    <input type="submit" name="botonBuscar" value="Buscar" id="botonBuscar" style="width:55px"/>
                    <input type="submit" name="botonListar" value="Listar Todos" id="botonListar" style="width:80px"/>
                    <br/><br/><br/>
                    <br/>
                    <?php

                    include '../administrador/conexion.php';
                    if (isset($_POST["botonBuscar"]) && $_POST["boxBuscar"] != "") {
                      $dato = $_POST["boxBuscar"];
                      $sql="select *
                      from articulos
                      where id_articulo like '%".$dato."%' OR nombre like '%".$dato."%' OR descripcion like '%".$dato."%' OR categoria like '%".$dato."%' OR proveedor like '%".$dato."%'";

                    } else {
                        $sql = "SELECT * FROM articulos";
                    }

                  $result = mysqli_query($conexion, $sql);
                  echo "<table id='table_articulos'>";
                  if (mysqli_num_rows($result) > 0) {
                      echo "<thead>";
                              echo "<th>Id del articulo</th>";
                              echo "<th>nombre</th>";
                              echo "<th>descripci&oacute;n</th>";
                              echo "<th>precio</th>";
                              echo "<th>categor&iacute;a</th>";
                              echo "<th>proveedor</th>";
                              echo "<th>imagen</th>";
                              echo "</thead><tbody>";
                          while ($row = mysqli_fetch_assoc($result)) {
                                  echo "<tr>";
                                  echo "<td>" . $row["id_articulo"]. "</td><td>"
                                          . $row["nombre"]. "</td><td> "
                                          . $row["descripcion"]. "</td><td> "
                                          . $row["precio"]. "</td><td> "
                                          . $row["categoria"]. "</td><td> "
                                          . $row["proveedor"]. "</td><td> "
                                          . $row["nombre_imagen"]. "</td>";
                                  echo "<td><a href='../administrador/actualizar_articulo.php?id_articulo=".$row["id_articulo"]."'>Editar</a></td>";
                                  echo "<td><a href='../administrador/eliminar_articulo.php?id_articulo=".$row["id_articulo"]."' >Eliminar</a></td>";
                                  echo "</tr></tbody>";
                          }
                  } else {
                          echo "<tr><td>No se encontraron resultados<td></tr>";
                  }
                  echo "</table>";
                  mysqli_close($conexion);

                    ?>
                    <br />
                    <br />
                  </form>
                </fieldset>
              </div>

            <?php include '../layout/footer.php'; ?>
    </div>
    <?php include '../layout/login_flotante.php'; ?>
  </body>
</html>
