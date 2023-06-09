<?php
session_start();

$group_id=$_GET['group_id'];
$id=$_GET['profile'];
$id1=$_GET['profile_id'];
$value=$_GET['value'];
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
              $url = ''.$sub_domain.'/lugmacore/apiTools/v1/putHideUsersGroups/';

              // Definir los datos a enviar en la solicitud POST
              $data = array(
                'value' => $value,
                  'profile_id' => $id,
                  'group_id' => $group_id
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
  $_SESSION["mensaje"]="Usuario Eliminado/Oculto/Desoculto Correctamente";
  $_SESSION["error"]=$response1;

}
if($response1 != "true"){
  $_SESSION["respuesta"]="false";
  $_SESSION["mensaje"]="No se pudo Elimian/Ocultar/Desocultar el Usuario o hubo un error";
  $_SESSION["error"]=$response1;

}


header ('Location: ../admin_groups.php?id='.$group_id.'&profile='.$id1);

?>