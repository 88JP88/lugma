
<?php


$user=$_POST['user'];
$pass=$_POST['pass'];
$tittle=$_POST['tittle'];
$keywords=$_POST['keywords'];
$type=$_POST['type'];
$public=$_POST['public'];
$value=$_POST['value'];

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
              $url = ''.$sub_domain.'/lugmacore/apiRepos/v1/post/';

              // Definir los datos a enviar en la solicitud POST
              $data = array(
                  'user' =>$user, 
                  'pass' => $pass,
                  'tittle' => $tittle,
                  'keywords' => $keywords,
                  'type' => $type,
                  'public' => $public,
                  'value' => $value
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



echo "
  ";

header ('Location: ../lugma_api.php');

?>