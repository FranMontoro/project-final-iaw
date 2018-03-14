<?php

include("config.php");

//Consultamos a la BBDD
$consul = mysqli_query($mysqli, "SELECT * FROM producto");


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Francisco Moreno">
    

    <title>Productos</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Project Francisco Moreno</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
<!-- Linkeamos con el Login php -->          
          <a class="nav-link" href="logout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
<!-- VINCULAMOS AL dasboard.PHP -->                
                <a class="nav-link active" href="dashboard.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <canvas class="my-4" id="myChart" width="900" height="0"></canvas>

          <h2>PRODUCTOS</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Imagen</th>
                  <th>Descripcion</th>
                </tr>
              </thead>

              <?php
                $cuenta = mysqli_num_rows($consul);
                for($cod = 0; $cod <= $cuenta; $cod++) {

                  echo "<tdbody>";
                    echo "<tr>";
                    $query = mysqli_query($mysqli, "SELECT * FROM producto WHERE codigo = $cod");
                    $fabris = "SELECT fabricante.nombre from fabricante, producto WHERE fabricante.codigo=codigo_fabricante";
                    $i=0;
//ESTABLECEMOS LAS CONDICIONES PARA QUE MUESTE LOS DATOS EN CONSULTA A LA BBDD
                    while ($res = mysqli_fetch_array($query)){
                        echo "<td>".$res['codigo']."</td>";
                        echo "<td>".$res['nombre']."</td>";
                        echo "<td>".$res['precio']."</td>";
                        echo "<td><img src=\"../../".$res['imagen']."\" width=\"150\" height=\"100\"/></td>";
                        echo "<td>".$res['descripcion']."</td>";
                        $i++; 
                    }
                    echo "</tr>";
                  echo "</tdbody>";
                }

              ?>
        
        </main>
      </div>
    </div>

  
  </body>
</html>
