<?php

function consultarBaseDatos($query,$conexion){
  /*$link = mysqli_connect("localhost","root","","equipo6_caballo_hierro");
  if (!$link) {
      die("Error al conectar: ".mysqli_connect_error());
  }*/
  $result = mysqli_query($conexion, $query);
  mysqli_close($conexion);
  $row=mysqli_fetch_all($result , MYSQLI_ASSOC);
  return $row;
}
 ?>
