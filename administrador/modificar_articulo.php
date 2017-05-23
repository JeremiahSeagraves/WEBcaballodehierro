}<?php
include '../administrador/conexion.php';
$mensajeExito="Actualizacion Exitosa";
$mensajeError="Actualizacion Erronea";
if(isset($_POST["nombre"]) && isset($_POST["descripcion"]) && isset($_POST["precio"]) && isset($_POST["proveedor"]) && isset($_POST["categoria"])){
  $queryUpdate = "update articulos set nombre = '".$_POST["nombre"]."', descripcion = '".$_POST["descripcion"]."', categoria = '".$_POST["categoria"]."', precio = '".$_POST["precio"]."', proveedor = '".$_POST["proveedor"]."' where id_articulo = ".$_POST["id_articulo"];
  $update =mysqli_query($conexion, $queryUpdate);
  if($update){
      header("Location:../administrador/actualizar_articulo.php?mensaje=".$mensajeExito."&id_articulo=".$_POST["id_articulo"]);
  }else{
    header("Location:../administrador/actualizar_articulo.php?mensaje=".$mensajeError."&id_articulo=".$_POST["id_articulo"]);
  }

}
 ?>
