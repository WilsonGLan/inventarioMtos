<?php 

session_start();
  session_destroy();
  unset($_SESSION['usuario']);
  unset($_SESSION['clave']);
  unset($_SESSION['usuario_validado']);
  unset($_GET['accion']);
  session_unset();
  header("Location: index.php");
  //require('index.php');
 exit;



 ?>