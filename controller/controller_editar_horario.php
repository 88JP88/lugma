
<?php

session_start();
$id=$_GET['id'];
$day=$_GET['day'];
$value=$_POST['valor'];

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
              $url = ''.$sub_domain.'/lugmacore/apiTools/v1/putSchedule/';

              // Definir los datos a enviar en la solicitud POST
              $data = array(
                  'id' =>$id, 
                  'day' => $day,
                  'value' => $value,
                  'user_id' => $_SESSION['user_id']
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
              
// Establecer el encabezado con el API key

              // Ejecutar la solicitud y obtener la respuesta
              $response1 = curl_exec($curl);
              //var_dump($data);
              // Cerrar la sesión cURL
              curl_close($curl);
//echo $id.$day;
if($response1 == "true"){
  $_SESSION["respuesta"]="true";
  $_SESSION["mensaje"]="Horario Editado Correctamente";
  $_SESSION["error"]=$response1;

}
if($response1 != "true"){
  $_SESSION["respuesta"]="false";
  $_SESSION["mensaje"]="No se pudo Editar el Horario o hubo un error de edición";
  $_SESSION["error"]=$response1;

}
echo $url;
echo $response1;
echo $_SESSION['user_id']." ".$value;
header ('Location: controller_post_validate2.php');
?>