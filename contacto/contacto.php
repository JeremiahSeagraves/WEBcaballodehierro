
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
                        <form name="formulario" id="formulario" method="post" action="envio_correo.php">
                            <div>
                                <label for="nombre">Nombre: </label>
                                <input type="text" name="nombre" id="nombre" size="60" required />
                            </div>
                            <div>
                                <label for="correo">Correo:</label>
                                <input type="email" name="correo" id="correo" size="60" required />
                            </div>
                            <div>
                                <label for="mensaje">Mensaje: </label>
                                <textarea name="mensaje" id="mensaje" rows="10" cols="56" required></textarea>
                                <span id="validar-mensaje"></span>
                            </div>
                            <p id="envio">
                                <input type="submit" name="enviar" id="enviar" value="Enviar" />
                            </p>
                        </form>
                    </fieldset>

                </div>
            </div>

      <?php include '../layout/footer.php'; ?>
    </div>
    <?php include '../layout/login_flotante.php'; ?>
  </body>
</html>
