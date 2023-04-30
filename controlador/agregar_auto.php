<?php

require "../config/DBConfig.php";

/* salir si algunos de los campos estan vacios */
if(!isset($_POST["matricula"]) || !isset($_POST["marca"]) || 
      !isset($_POST["modelo"]) || !isset($_POST["anio"]) || 
      !isset($_POST["color"])) exit();

/* si los campos estan bien, pasamos a esta parte */

$matricula_auto = $_POST["matricula"];
$marca_auto = $_POST["marca"];
$modelo_auto = $_POST["modelo"];
$anio_auto = $_POST["anio"];
$color_auto = $_POST["color"];


/* imprimimos los valores para saber si estan llegando al controlador */

/* echo $matricula_auto;
echo '<br>';
echo $marca_auto;
echo '<br>';
echo $modelo_auto;
echo '<br>';
echo $anio_auto;
echo '<br>';
echo $color_auto; */

$sql = "INSERT INTO vehiculo (matricula,marca,modelo,anio,color) VALUES (?,?,?,?,?)";

$sentencia = $pdo -> prepare($sql);

$resultado = $sentencia->execute([$matricula_auto,$marca_auto,$modelo_auto,$anio_auto,$color_auto]);

if($resultado === TRUE){
  echo "<script>alert('registro agregado correctamente');</script>";
  header("refresh:3;../vista/pagina_principal.php");
}else{
  echo "<script>alert('Algo salió mal');</script>";
}

?>