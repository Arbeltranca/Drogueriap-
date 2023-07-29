<?php

require "interfaz1.php";
require "interfaz2.html";

if(empty($_POST["consultar_producto"])){
  if (empty($_POST["Productos"]) or empty($_POST["Nombre_producto"])) {
  } else {
    $producto=$_POST["Nombre_producto"];

  $sql=$conectar->query("select * from Productos where Nombre_Producto='$producto' ");

    if ($datos=$sql->fetch_object()) {
      header("location:BDProducto.php");
    } else {
      echo 'Producto No Encontrado';
    }
    
  }
  
}

?>
