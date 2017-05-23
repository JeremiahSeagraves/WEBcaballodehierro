}<?php
include '../administrador/modelo/conexion.php';

if(isset($_POST["nombre"]) && isset($_POST["descripcion"]) && isset($_POST["precio"]) && isset($_POST["proveedor"]) && isset($_POST["categoria"])){
  $queryUpdate = "update articulos set nombre = '".$_POST["nombre"]."', descripcion = '".$_POST["descripcion"]."', categoria = '".$_POST["categoria"]."', precio = '".$_POST["precio"]."' where id_articulo = ".$_GET["id_articulo"];
  $update =mysqli_query($conexion, $queryUpdate);
  if($update){
    echo "Actualizacion Exitosa";
  }else{
    echo "Error Al Actualizar";
  }

}

 ?>
