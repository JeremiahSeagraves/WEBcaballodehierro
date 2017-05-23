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
            if(!isset($_SESSION["registrado"])){
                include '../layout/login_header.php' ;
            }else{
              include '../layout/edicion_perfil_header.php' ;
            }
            include '../layout/header.php';
      ?>


<table width="90%"  height="90%"border="1" align="center" id="tablacarrito">
                        <tr align="center" style="background-color:#008fbe; color:#fff">
                            <td width="27%">PRODUCTO</td>
                            <td width="18%">PRECIO</td>
                            <td width="37%">CANTIDAD</td>
                            <td width="18%">TOTAL</td>
                        </tr>
        <?php
            if (isset($_SESSION['carrito'])) {
                $total = 0;
                for ($i = 0; $i <= count($compras) - 1; $i++) {
                    if ($compras[$i] != NULL) {
        ?>
                        <tr align="center">
                            <td required>
                                <?php echo $compras[$i]['nombre']; ?>
                            </td>
                            <td>
                                <?php echo $compras[$i]['precio']; ?>
                            </td>
                            <td>
                                <form name="form1" method="post" action="">
                                    <input type="hidden" name="id" id="id" value="<?php echo $i; ?>" />
                                    <input type="text" name="cantidadactualizada" value="<?php echo $compras[$i]['cantidad']; ?>"  size="2" required/>
                                    <span id="toolTipBox" width="200"></span>
                                    <input type="image" name="actualizar" class="iconCarrito" src="../imagenes/actualizar.gif" onmouseover="toolTip('Presione para actualizar su pedido', this)"/>
                                </form>
                            </td>
                            <td>
                                <form method="post" action=""><?php echo $compras[$i]['cantidad'] * $compras[$i]['precio']; ?>
                                    <span id="toolTipBox" width="200"></span>
                                    <input name="id2" type="hidden" id="id2" value="<?php echo $i; ?>">
                                        <input type="image" name="imageField" class="iconCarrito" src="../imagenes/eliminar.gif" onmouseover="toolTip('Presione para eliminar su pedido', this)" onclick="return confirm('¿Estas seguro?');"/>
                                </form>
                            </td>
                        </tr>
    <?php
                        $total = $total + ($compras[$i]['cantidad'] * $compras[$i]['precio']);
                    }
            }
        } else {
            if(isset($_GET['compra'])){
                echo "<div class='success'>Compra realizada exitosamente</div>";
            }else{
            echo "<div class='error'>No hay productos en el carrito</div>";
            }
        }
    ?>
                        <tr align="center">
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td align="right">
                                <p>&nbsp;</p>
                                <p>TOTAL A PAGAR::</p>
                            </td>
                            <td>
                                <p>&nbsp;</p>
                                <p>
                                    <?php
                                        if (isset($_SESSION['carrito'])) {
                                            echo "$ " . $total . " Dolares ";
                                        }
                                    ?>
                                </p>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td align="right">&nbsp;</td>
                            <td>
                                <form name="form2" method="post" action="resumenc_compra.php">
                                    <?php
                                    if(isset ($_SESSION["carrito"])){
                                        echo "<input type='submit' name = 'button' id = 'button' value = 'Enviar pedido' />";
                                    }
                                    ?>
                                </form>
                            </td>
                        </tr>
                    </table>

      <?php include '../layout/footer.php'; ?>
    </div>
    <?php include '../layout/login_flotante.php'; ?>
  </body>
</html>