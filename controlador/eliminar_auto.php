<?php

require "../config/DBConfig.php";
$id = $_GET["vehiculo_id"];

/* echo $id; */

$sql = "DELETE FROM vehiculo WHERE vehiculo_id=?";
$sentencia = $pdo->prepare($sql);

$resultado = $sentencia->execute([$id]);

if($resultado === TRUE){
  echo "<script>alert('registro eliminado correctamente');</script>";
  header("refresh:3;../vista/tabla_Vehiculo.php");
}else{
  echo "<script>alert('algo ha salido mal');</script>";
  
}

?>