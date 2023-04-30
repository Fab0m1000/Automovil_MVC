<?php
  $pdo_drivers = PDO::getAvailableDrivers();

  echo '<pre>';

  print_r($pdo_drivers);

?>