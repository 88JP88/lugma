<?php
session_start();
$_SESSION['current_version']="0.1.0-alpha";
require_once 'view/view_index.php';
require_once 'env/domain.php';


   $sub_domaincon = new model_dom();
   $sub_domain = $sub_domaincon->dom();
   $_SESSION['domain']=$sub_domain;
?>


<?php
// Crear el primer array con 5 campos
$array1 = array(
    "campo1" => "valor1",
    "campo2" => "valor2",
    "campo3" => "valor3",
    "campo4" => "valor4",
    "campo5" => "valor5"
);

// Crear el segundo array con 7 campos
$array2 = array(
    "campo6" => "valor6",
    "campo7" => "valor7",
    "campo8" => "valor8",
    "campo9" => "valor9",
    "campo10" => "valor10",
    "campo11" => "valor11",
    "campo12" => "valor12"
);

// Unir los dos arrays en uno solo
$mergedArray = array_merge($array1, $array2);

echo json_encode($mergedArray)."<br>";
// Mostrar el resultado como un comentario
echo print_r($mergedArray, true);
?>