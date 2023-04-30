<?php


require "../config/DBConfig.php";
//si tal campo es vacio, salimos

if(!isset($_GET["vehiculo_id"])) exit();

$id = $_GET["vehiculo_id"];

/* echo $id; */


$sentencia = $pdo->prepare("SELECT * FROM vehiculo WHERE vehiculo_id = ?");
$sentencia->execute([$id]);

$vehiculo = $sentencia->fetch(PDO::FETCH_OBJ);

if($vehiculo === FALSE){
  echo "<script>alert('No existe ningun vehiculo registrado con dicho id');</script>";
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../archivos_css/actualizar_formulario.css">
  <title>Actualizar</title>
</head>
<body>

    <div class="contenedor-todo contenedor-principal">
    <div class="contenedor-titulo">
       <h1 class="titulo">Actualizar datos</h1>
    </div>
  
    <div class="contenedor-formulario-actualizar">
        <form action="../controlador/agregar_datos_nuevos.php" method="post">
          <input type="hidden" name="id" value="<?php echo $vehiculo->vehiculo_id?>">
          <label for="">Matricula</label>
          <input type="text" name="matricula" id="" value="<?php echo $vehiculo->matricula ?>">
          <label for="">Marca</label>
          <input type="text" name="marca" id="" value="<?php echo $vehiculo->marca ?>">
          <label for="">Modelo</label>
          <input type="text" name="modelo" id="" value="<?php echo $vehiculo->modelo ?>">
          <label for="">Anio</label>
          <input type="text" name="anio" id="" value="<?php echo $vehiculo->anio ?>">
          <label for="">Color</label>
          <input type="text" name="color" id="" value="<?php echo $vehiculo->color ?>">

          <input type="submit" value="Actualizar" class="btn-actualizar">
        </form>
    </div>
    </div>
</body>
</html>