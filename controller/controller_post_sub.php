
<?php

session_start();
$mail=$_POST['correo'];
$word=$_POST['secword'];
$sub=$_POST['sub'];

require_once '../env/domain.php';


$sub_domaincon = new model_dom();
$sub_domain = $sub_domaincon->dom();
// $ch = curl_init($url);
             // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
             // $response = curl_exec($ch);
             // curl_close($ch);*/ //echo $response;
              //var_dump ($response);
            ////  $ss = json_encode($response);
  //echo $ss;

  $conff='78989876';
              $url = ''.$sub_domain.'/lugmacore/apiUsers/v1/postSub/';

              // Definir los datos a enviar en la solicitud POST
              $data = array(
                  'mail' =>$mail, 
                  'word' => $word,
                  'type' => $sub
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




if($response1!="false"){
  $_SESSION['sub_code']=$response1;
  header ('Location: ../sub_code.php');
}
else{
  echo $response1;
}


?>