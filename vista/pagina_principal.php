<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../archivos_css/pagina_principal.css">
  <link rel="stylesheet" href="../archivos_css/utilities.css">
  <title>Registrar</title>
</head>
<body>

  <div class="contenedor-titulo contenedor-principal">
        <h1 class="titulo">Bienvenido al CRUD con PHP y PDO</h1>
  </div>

        <div class="contenedor-crud contenedor-principal">
                <div class="contenedor-imagen-auto">
                        <figure>
                                <img src="../imagenes/van.jpg" alt="auto" class="img-auto">
                        </figure>
                </div>

                <div class="contenedor-formulario">
                        <div class="titulo-formulario">
                                <h2 class>Por favor rellena el siguiente formulario para 
                                        agregar un nuevo vehículo</h2>
                        </div>
                        <form action="../controlador/agregar_auto.php" method="POST">
                        <input type="text" 
                                name="matricula" 
                                id="txt-matricula"
                                placeholder=" Matricula">
                        <input type="text" 
                                name="marca" 
                                id="txt-marca"
                                placeholder=" Marca">
                        <input type="text" 
                                name="modelo" 
                                id="txt-modelo"
                                placeholder=" Modelo">
                        <input type="text" 
                                name="anio" 
                                id="txt-anio"
                                placeholder=" Año ">
                        <input type="text" 
                                name="color" 
                                id="txt-color"
                                placeholder="Color">
                                <input type="submit" value="Agregar auto" class="btn-agregar">
                        </form>

                </div>

                <div class="contenedor-siguiente-pagina contenedor-principal">
                        <a href="../vista/tabla_Vehiculo.php" class="sig-pagina"> ver vehículos</a>
                </div>
        </div>
        
</body>
</html>