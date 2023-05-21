
<?php
session_start();
$data = json_decode($_SESSION['userinfo']);
  foreach ($data->users as $character) {
    
   
  }
$user=$character->user_id;
$pass=$_POST['pass'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];


// $ch = curl_init($url);
             // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
             // $response = curl_exec($ch);
             // curl_close($ch);*/ //echo $response;
              //var_dump ($response);
            ////  $ss = json_encode($response);
  //echo $ss;
              $url = 'http://localhost/lugmacore/apiUsers/v1/putPass/';

              // Definir los datos a enviar en la solicitud POST
              $data = array(
                  'user_id' =>$user, 
                  'pass' => $pass,
                  'npass' => $pass1,
                  'npass2' => $pass2
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

header ('Location: controller_post_validate2.php');

?>