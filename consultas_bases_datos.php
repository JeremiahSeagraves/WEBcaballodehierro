<?php

function obtener_imagen($categoria){
  # Conectamos con MySQL
  $link=mysqli_connect("localhost","root","","caballo_hierro");
  echo "string";
  if (!$link) {
      die("Error al conectar: ".mysql_error());
  }

  # Buscamos la imagen a mostrar
  $query = "SELECT * FROM `imagenes` WHERE categoria=".$categoria;
  $result=mysqli_query($link,$query);
  mysqli_close($link);
  $row=mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $row;
}
/*
Mostramos la imagen
header("Content-type:".$row["tipo"]);
echo $row["imagen"];
*/


?>
