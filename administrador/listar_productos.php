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
            include '../conexionBD/conexionBD.php';
        $sql = "SELECT * FROM articulos";
        $result = mysqli_query($conexion, $sql);
        echo "<table id='table_articulos'>";
        if (mysqli_num_rows($result) > 0) {
            echo "<tr>";
                    echo "<th>Id del articulo</th>";
                    echo "<th>nombre</th>";
                    echo "<th>descripci&oacute;n</th>";
                    echo "<th>precio</th>";
                    echo "<th>categor&iacute;a</th>";
                    echo "<th>proveedor</th>";
                    echo "<th>imagen</th>";
                    echo "</tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["id_articulo"]. "</td><td>"
                                . $row["nombre"]. "</td><td> "
                                . $row["descripcion"]. "</td><td> "
                                . $row["precio"]. "</td><td> "
                                . $row["categoria"]. "</td><td> "
                                . $row["proveedor"]. "</td><td> "
                                . $row["nombre_imagen"]. "</td>";
                        echo "</tr>";
                }
        } else {
                echo "<tr><td>No se encontraron resultados<td></tr>";
        }
        echo "</table>";
        mysqli_close($conexion);
       include '../layout/footer.php'; ?>
    </div>
    <?php include '../layout/login_flotante.php'; ?>
  </body>
</html>
