<!-- accedemos a la base de datos y usamos la clase estatica FETCH_OBJ para mapear cada columna -->
<?php
     require "../config/DBConfig.php";
     $sentencia = $pdo->query("SELECT * FROM vehiculo");
     $lista_vehiculos = $sentencia->fetchAll(PDO::FETCH_OBJ);

                  
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../archivos_css/tabla_vehiculo.css">
  <title>Vehiculos</title>
</head>
<body>

  <div class="contenedor-titulo contenedor-principal">
      <h1 class="titulo">Lista de vehículos</h1>
  </div>

  <div class="contenedor-tabla contenedor-principal">
      <table>
          <thead>
              <tr>
                <td>ID</td>
                <td>Matricula</td>
                <td>Marca</td>
                <td>Modelo</td>
                <td>Año</td>
                <td>Color</td>
                <td colspan="2">Acciones</td>
              </tr>
          </thead>
          <tbody>
            <?php foreach($lista_vehiculos as $registro){?>
              <tr>
                  <td><?php echo $registro->vehiculo_id?></td>
                  <td><?php echo $registro->matricula?></td>
                  <td><?php echo $registro->marca?></td>
                  <td><?php echo $registro->modelo?></td>
                  <td><?php echo $registro->anio?></td>
                  <td><?php echo $registro->color?></td>
                  <td>
                    <a  class="btn-actualizar" href="<?php echo "../vista/actualizar_auto.php?vehiculo_id=".$registro->vehiculo_id?>">Actualizar</a>
                  </td>
                  <td>
                    <a class="btn-eliminar" href="<?php echo "../controlador/eliminar_auto.php?vehiculo_id=".$registro->vehiculo_id?>">Eliminar</a>
                  </td>
              </tr>
              <?php }?>
              
          </tbody>
        </table>

        <div class="contenedor-agregar">
          <a href="../vista/pagina_principal.php" class="btn-aniadir">
            Agregar nuevo vehiculo <span>&#43;</span>
          </a>
        </div>

  </div>
  
</body>
</html>