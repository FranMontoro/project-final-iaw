<?php
    include("config.php");
//CREAMOS UNA VARIABLE QUE ALMACENE
    $search = $_GET['search'];
//CREAMOS UNA CONSULTA EN LA QUE USA EL CAMPO QUE INTRUDUCIMOS EN $search Y LO BUSCA EN LA BBDD
    $consulta = mysqli_query($mysqli, "SELECT * FROM producto WHERE (nombre like '%$search%')");


    while ($res = mysqli_fetch_array($consulta)){
        //echo "<td>".$res['codigo']."</td>";
        echo "<td>".$res['nombre']."</td>";
        //echo "<td>".$res['precio']."</td>";
        echo "<td><img src=\"../../".$res['imagen']."\" width=\"150\" height=\"100\"/></td>";
        //echo "<td>".$res['descripcion']."</td>";
        
    }

?>