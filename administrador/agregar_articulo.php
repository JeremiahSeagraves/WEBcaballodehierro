<?php

$directorio = "../images/products/";
if(isset($_POST["nombre"]) && isset($_POST["descripcion"]) && isset($_POST["precio"]) && isset($_POST["proveedor"]) && isset($_POST["categoria"])){

            if ((($_FILES["archivo"]["type"] == "image/gif") ||
                ($_FILES["archivo"]["type"] == "image/jpg") ||
                ($_FILES["archivo"]["type"] == "image/jpeg") ||
                ($_FILES["archivo"]["type"] == "image/pjpeg"))) {
        //Si es que hubo un error en la subida, mostrarlo, de la variable $_FILES podemos extraer el valor de [error], que almacena un valor booleano (1 o 0).
                if ($_FILES["archivo"]["error"] > 0) {
                    echo $_FILES["archivo"]["error"] . "<br />";
                } else {
                  copy($_FILES["archivo"]["tmp_name"], $directorio . $_FILES["archivo"]["name"]);
                  move_uploaded_file($_FILES["archivo"]["tmp_name"], $directorio.$_FILES["archivo"]["name"]);
                  $nombre_imagen = $_FILES["archivo"]["name"];
                  include '../conexionBD/conexionBD';
                  $query ="INSERT INTO articulos (id_articulo , nombre ,descripcion , categoria , precio, proveedor,nombre_imagen)
                  VALUES ( NULL ,'" . $_POST["nombre"]. "','" . $_POST["descrpcion"] . "','" . $_POST["categoria"] . "','". $_POST["precio"] ."','". $_POST["proveedor"] . "','". $nombre_imagen . "')";
                  mysqli_query($conexion,$query);

                }
              }else {
                # code...
              }
            }
 ?>
