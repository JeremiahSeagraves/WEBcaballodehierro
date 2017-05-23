<?php
session_start();

if (isset($_SESSION['carrito']) || isset($_POST['nombre'])) {
//    Si ya hay algo en el carrito
    if (isset($_SESSION['carrito'])) {
        $compras = $_SESSION['carrito'];
        if (isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];
            $duplicado = -1;
            for ($i = 0; $i <= count($compras) - 1; $i++) {
                if ($nombre == $compras[$i]['nombre']) {
                    $duplicado = $i;
                }
            }

            if ($duplicado != -1) {
                $cantidad_nueva = $compras[$duplicado]['cantidad'] + $cantidad;
                $compras[$duplicado] = array("nombre" => $nombre, "precio" => $precio, "cantidad" => $cantidad_nueva);
            } else {
                $compras[] = array("nombre" => $nombre, "precio" => $precio, "cantidad" => $cantidad);
            }
        }
    } else {
        //Si no hay nada en el carrito
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $compras[] = array("nombre" => $nombre, "precio" => $precio, "cantidad" => $cantidad);
    }
    //Para actualizar la cantidad
    if (isset($_POST['cantidadactualizada'])) {
        $id = $_POST['id'];
        $contador_cant = $_POST['cantidadactualizada'];
        if ($contador_cant < 1) {
            $compras[$id] = NULL;
        } else {
            $compras[$id]['cantidad'] = $contador_cant;
        }
    }
    if (isset($_POST['id2'])) {
        $id = $_POST['id2'];
        $compras[$id] = NULL;
    }
    $_SESSION['carrito'] = $compras;
}
?>
