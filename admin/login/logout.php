<?php
session_start();
$_SESSION['canAccess'] = false;
header('Location: index.php');
exit;
?>