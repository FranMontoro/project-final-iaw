<?php
session_start();
include('config.php');

$email = $_POST['email'];
$password = md5($_POST['password']);
//$email = "usuario@usuario.es";
//$password = md5("usuario");

$query = "SELECT * FROM usuario WHERE email='$email' AND password='$password'";
$result = mysqli_query($mysqli, $query);
$count = mysqli_num_rows($result);

   if($count >=1){
       $_SESSION['canAccess'] = true;
       header('Location: dashboard.php');
       exit;
   } else {
    $_SESSION['canAccess'] = false;
       echo "Error";
   }

 mysqli_close($mysqli);

?>