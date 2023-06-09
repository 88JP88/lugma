<?php
session_start();
$dis=$_POST['dis'];
$con=$_POST['con'];
$profile=$_GET['profile'];
$my_profile=$_GET['my_profile'];
$group=$_GET['id'];

require_once '../env/domain.php';
$sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
// $ch = curl_init($url);
             // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
             // $response = curl_exec($ch);
             // curl_close($ch);*/ //echo $response;
              //var_dump ($response);
            ////  $ss = json_encode($response);
  //echo $ss;
              $url = ''.$sub_domain.'/lugmacore/apiTools/v1/postDis/';

              // Definir los datos a enviar en la solicitud POST
              $data = array(
                  'name' =>$dis,
                  'content' => $con,
                  'profile_id' => $my_profile,
                  'group_id' => $group
                  );
              //$payload = http_build_query($data);
              // codificar el array asociativo en JSON
//$json_data = json_encode($data);



// enviar la respuesta con el payload codificado en JSON
//echo $payload;
              // Inicializar la sesión cURL
              $curl = curl_init();
              
              // Configurar las opciones de la sesión cURL
              curl_setopt($curl, CURLOPT_URL, $url);
              curl_setopt($curl, CURLOPT_POST, true);
              curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
              curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
             // curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
              
              // Ejecutar la solicitud y obtener la respuesta
              $response1 = curl_exec($curl);
              //var_dump($data);
              // Cerrar la sesión cURL
              curl_close($curl);
echo $response1;
if($response1 == "true"){
  $_SESSION["respuesta"]="true";
  $_SESSION["mensaje"]="Discución Creada Correctamente";
  $_SESSION["error"]=$response1;

}
if($response1 != "true"){
  $_SESSION["respuesta"]="false";
  $_SESSION["mensaje"]="No se pudo Agregar la Discución o hubo un error";
  $_SESSION["error"]=$response1;

}


header ('Location: ../group.php?id='.$group.'&profile='.$profile.'&my_profile='.$my_profile);

?>