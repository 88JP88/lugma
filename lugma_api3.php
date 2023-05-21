<?php

$servername = "sql307.epizy.com ";
$username = "epiz_34145373";
$password = "3lZV5ZJjqPjT";
$dbname = "lugmacore";




$hostname = "sql307.epizy.com "; // o dirección IP del servidor de la base de datos remota
$usuariodb = "epiz_34145373"; // reemplazar con el usuario de la base de datos
$passworddb = "3lZV5ZJjqPjT "; // reemplazar con la contraseña de la base de datos
$dbname = "epiz_34145373_lugmacore"; // reemplazar con el nombre de la base de datos

// Conectando a la base de datos
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificando la conexión
if (!$conn) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}else{



  
    $sql = "INSERT INTO repo_one (repo_id,tittle,value,keywords,type,user_id,public) VALUES ('666','1','2','3','4','5','6')";
  
    if (mysqli_query($conn, $sql)) {
        echo "Registro creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  
  
}





?>