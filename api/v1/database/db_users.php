<?php

function conn(){

$hostname="localhost";
$usuariodb="root";
$passworddb="";
$dbname="lugma_core";


$conectar = mysqli_connect($hostname,$usuariodb,$passworddb,$dbname);
return $conectar;

}

?>