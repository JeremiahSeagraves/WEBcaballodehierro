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
            include '../administrador/modelo/conexion.php';
        $sql = "SELECT * FROM usuarios";
        $result = mysqli_query($conexion, $sql);
        echo "<table id='table_usuarios'>";
        if (mysqli_num_rows($result) > 0) {
            echo "<tr>";
                    echo "<th>Id del usuario</th>";
                    echo "<th>Usuario</th>";
                    echo "<th>Nombre de usuario</th>";
                    echo "<th>Email</th>";
                    echo "<th>Tipo de Usuario</th>";
                    echo "</tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["id_usuario"]. "</td><td>"
                                . $row["usuario"]. "</td><td> "
                                . $row["nombre"]. "</td><td> "
                                . $row["email"]. "</td><td> "
                                . $row["tipo_usuario"]. "</td>";
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
