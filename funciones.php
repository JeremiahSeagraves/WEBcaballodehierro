<?php

function consultarBaseDatos($query,$conexion){
  $result = mysqli_query($conexion,"SELECT * FROM articulos WHERE categoria = 'balones'");

  $row=mysqli_fetch_all($result , MYSQLI_ASSOC);
  mysqli_close($conexion);
  return $row;
}
 ?>
