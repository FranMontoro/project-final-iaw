<?php
session_start();
include('config.php');

$email = $_POST['email'];
$password = md5($_POST['password']);

$query = mysqli_query($mysqli,"SELECT email, password FROM usuario WHERE (email='$email') AND (password='$password')");
$count = mysqli_num_rows($query);

   if($count >=1){
       $_SESSION['canAccess'] = true;
       header('Location: dashboard.php');
       exit;
   } else {
    $_SESSION['canAccess'] = false;
    }

 mysqli_close($mysqli);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Francisco Moreno">
    

    <title>Login</title>

    <!-- Bootstrap core CSS, es un css comprimido -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
      

    <form class="form-signin" method="post">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
<!-- BOTON DE REGRESO AL INDEX -->      
      <button type="button" class="btn btn-lg btn-primary btn-block" onclick="location.href='index.php'">Inicio</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
