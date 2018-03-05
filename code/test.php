<?php
 include('config.php');

 $result = mysqli_querry($mysqli, "SELECT * FROM usuario");

 while($res = mysqli_fetch_array($result)) {

    echo "<h2>ID:".$res['i']."</h2>";
    echo "<h2>Email:".$res['email']."</h2>";
    echo "<h2>Password:".$res['password']."</h2>";
    echo "<h2>Nombre:".$res['nombre']."</h2>";
 }

 mysqli_close($mysqli);

?>