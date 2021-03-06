<?php
//Enlazamos con el archivo    
    include ('detailvar.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Francisco Moreno">
    
    <?php
    echo "<title>Info ".$desc."</title>"
    ?>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/pricing.css" rel="stylesheet">
    <!-- ESTILO DE BARRA DE BUSQUEDA -->
    <link href="../../css/sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Project Francisco</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="index.php">Inicio</a>
      </nav>

      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      </form>

      <a class="btn btn-outline-primary" href="login.php">Login</a>
    </div>

    <?php

    echo "<div class=\"pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center\">";
//GENERAMOS EL NOMBRE DEL PRODUCTO    
      echo "<h1 class=\"display-4\">".$nom."</h1>";
//GENERAMOS LA DESCRIPCION DEL PRODUCTO      
      echo "<p class=\"lead\">".$desc."</p>";
    echo "</div>";
  
    echo "<div class=\"container\">";
      echo "<div class=\"card-deck mb-3 text-center\">";
        echo "<div class=\"card mb-4 box-shadow\">";
          echo "<div class=\"card-header\">";
//AÑADIMOS EL PRECIO  
            echo   "<h4 class=\"my-0 font-weight-normal\">".$precio." €</h4>";  
          echo "</div>";
          echo "<div class=\"card-body\">";
//INSERTAMOS LA IMAGEN
            echo "<div>".$foto."</div>";
            echo "<button type=\"button\" class=\"btn btn-lg btn-block btn-outline-primary\">Añadir al Carrito</button>";
          echo "</div>";
        echo "</div>";
      echo "</div>";

  ?>
      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
              <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>
