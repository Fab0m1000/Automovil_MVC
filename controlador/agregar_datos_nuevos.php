<?php
  require "../config/DBConfig.php";

$id=$_POST["id"];
$matricula = $_POST["matricula"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$anio = $_POST["anio"];
$color = $_POST["color"];

/* echo $matricula;
echo $marca;
echo $modelo;
echo $anio;
echo $color;
 */

 $sql = "UPDATE vehiculo SET matricula=?, marca=?,modelo=?,anio=?,color=? WHERE vehiculo_id = ?";
 $sentencia = $pdo -> prepare($sql);

 $resultado = $sentencia->execute([$matricula, $marca, $modelo, $anio, $color,$id]);

 if($resultado === TRUE){
  echo "<script>alert('registro actualizado correctamente');</script>";
  header("refresh:3;../vista/tabla_Vehiculo.php");
 }else{
   echo "<script>alert(Algo ha salido mal);</script>";
 }
?>