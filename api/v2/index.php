<?php

require 'flight/Flight.php';

Flight::route('GET /', function () {
    
    $uri = $_SERVER['REQUEST_URI'];



    
    echo 'hello world!';
    echo $uri; // muestra "/mi-pagina.php?id=123"


});

Flight::start();
