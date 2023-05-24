<?php
session_start();
$comment=$_POST['comment'];
$profile_id=$_GET['profile'];
$my_profile_id=$_GET['my_profile'];
$group_id=$_GET['group_id'];
$dis=$_GET['dis_id'];


// $ch = curl_init($url);
             // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
             // $response = curl_exec($ch);
             // curl_close($ch);*/ //echo $response;
              //var_dump ($response);
            ////  $ss = json_encode($response);
  //echo $ss;
              $url = 'http://localhost/lugmacore/apiTools/v1/postComment/';

              // Definir los datos a enviar en la solicitud POST
              $data = array(
                  'dis_id' =>$dis,
                  'profile_id' => $my_profile_id,
                  'group_id' => $group_id,
                  'comment' => $comment
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


header ('Location: ../discussion.php?group_id='.$group_id.'&profile='.$profile_id.'&dis_id='.$dis.'&my_profile='.$my_profile_id);

?>