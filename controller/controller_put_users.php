
<?php
session_start();
$data = json_decode($_SESSION['userinfo']);
  foreach ($data->users as $character) {
    
   
  }
$user=$character->user_id;
$name=$_POST['name'];
$last_name=$_POST['lname'];
$contact=$_POST['cont'];
$public=$_POST['public'];

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
              $url = ''.$sub_domain.'/lugmacore/apiUsers/v1/putUser/';

              // Definir los datos a enviar en la solicitud POST
              $data = array(
                  'user_id' =>$_SESSION['user_id'], 
                  'name' => $name,
                  'last_name' => $last_name,
                  'contact' => $contact,
                  'public' => $public
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

header ('Location: ../session.php');

?>