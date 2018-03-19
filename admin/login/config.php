<?php

#vamos a vincular con la BBDD
define('DB_HOST','localhost');
define('DB_NAME','tienda');
define('DB_USER','tienda_user');
define('DB_PASSWORD','tienda_password');

#Importante seguir este orden!
$mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//ACEPTA MAS CARACTERES, ENTRE ELLOS LAS TILDES
mysqli_set_charset($mysqli, "utf8mb4");
?>