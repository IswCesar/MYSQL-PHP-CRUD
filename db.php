<?php

  // Iniciar una sesión en la app

  session_start();

  // Host donde esta el servidor
  // Usuario de la BD
  // Contraseña de la BD
  // Nombre de la BD
  $connection = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_crud'
  )

?>