
<?php


$user=$_POST['usuario'];
$name=$_POST['nombre'];
$last_name=$_POST['apellido'];
$contact=$_POST['contacto'];
$pass=$_POST['password'];
$pass1=$_POST['password1'];
$rol=$_POST['rol'];
$sub=$_POST['sub'];
$subcode=$_POST['subcode'];
$secword=$_POST['secword'];

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
              $url = ''.$sub_domain.'/lugmacore/apiUsers/v1/post/';

              // Definir los datos a enviar en la solicitud POST
              $data = array(
                  'user' =>$user, 
                  'name' => $name,
                  'last_name' => $last_name,
                  'contact' => $contact,
                  'pass' => $pass,
                  'pass1' => $pass1,
                  'rol' => $rol,
                  'subscription' => $sub,
                  'code' => $subcode,
                  'word' => $secword
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

if($response1=="true"){
  header ('Location: ../login.php');
}
if($response1!="true"){
  echo $response1;
  header ('Location: ../login.php');

}



?>