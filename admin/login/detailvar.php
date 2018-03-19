<?php

include ('config.php');

//Recoge la informacion de la BBDD, codigo
    $codigo = $_GET['codigo'];

    $consul = mysqli_query($mysqli, "SELECT * FROM producto where codigo=$codigo");
    
    while ($res = mysqli_fetch_array($consul)){
        $cod = $res['codigo'];
        $nom = $res['nombre'];
        $desc = $res['descripcion'];
        $foto = "<img src='../../images".$res['imagen']."' alt=\"\">";
        $precio = $res['precio'];
    }

?>