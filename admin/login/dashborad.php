<?php
session_start();

if($_SESSION['canAccess'] == false) {
    header('Location: login.php');
    exit;
}
echo  "estas dentro";

?>