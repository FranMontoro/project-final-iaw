<?php
  include("config.php");
//Consultamos a la BBDD

  $consul = mysqli_query($mysqli, "SELECT * FROM producto");
  $cuenta = mysqli_num_rows($consul);
  
 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="FranciscoMoreno">

    <title>Index</title>

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
      </nav> 
<!-- BARRA DE BUSQUEDA -->
      <form method="get" class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
      </form>

<!-- LINKEAMOS EL BOTON CON EL login.php -->      
      <a class="btn btn-outline-primary" href="login.php">Login</a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">INFORMATICA MONTORO</h1>
      <p class="lead">Esto es un site Web, con soporte PHP, Html y CSS a modo de Proyecto para IAW, ASIR</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">

    <?php

      $cuenta = mysqli_num_rows($consul);
//EMPEZAMOS EN 1 PARA QUE NO CREE UNA TABLA VACÍA
      for($cod = 1; $cod <= $cuenta; $cod++) {

        $query = mysqli_query($mysqli, "SELECT * FROM producto WHERE codigo = $cod");
        echo "<div class=\"card mb-4 box-shadow\">";
//CAPA PARA NOMBRE/TITULO DEL PRODUCTO        
        echo  "<div class=\"card-header\">";
        
        while ($res = mysqli_fetch_array($query)){
//CODIGO PARA CREAR EL NOMBRE DEL PRODUCTO          
          echo  "<h4 class=\"my-0 font-weight-normal\">".$res['nombre']."</h4>";
          //<h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
        echo "</div>";  
          echo "<div class=\"card-body\">";
            
            echo "<ul class=\"list-unstyled mt-3 mb-4\">";
              echo "<li><img src=\"../../".$res['imagen']."\" width=\"200\" height=\"150\"/></li>";
              echo "<br />";
              echo "<li>".$res['descripcion']."</li>";
            echo "</ul>";
            echo "<button type=\"button\" class=\"btn btn-lg btn-block btn-outline-primary\" onclick=\"location.href='detail.php?codigo=".$res['codigo']."'\">Detalles</button>";
          echo "</div>";
        }    
          
        echo "</div>";
      } 
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
            <h5>Sobre Nosotros</h5>
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


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
