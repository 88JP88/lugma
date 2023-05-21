<?php
session_start();

$_SESSION['id']=$_POST['usuario'];
// Configurar los datos de la respuesta

  
header ('Location: ../api_lugma.php');


?>