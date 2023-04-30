
<!-- esta clase sirve para crear la conexion a la base de datos usando PDO y mariaDB -->
<?php

$host = "localhost";
$db_name = "crud_auto";
$username = "root";
$passoword = "";
$dsn = "mysql:host=". $host .";dbname=". $db_name;

$options = [
              PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
              PDO::ATTR_EMULATE_PREPARES   => false,
];

try{

    $pdo = new PDO($dsn,$username,$passoword);

}catch(PDOException $e){
  exit("ERROR : ".$e -> getMessage());
}
?>