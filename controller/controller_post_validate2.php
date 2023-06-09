
<?php
session_start();

require_once '../env/domain.php';
$sub_domaincon = new model_dom();
$sub_domain = $sub_domaincon->dom();
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "".$sub_domain."/lugmacore/apiUsers/v1/get/".$_SESSION['usuario'],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "accept: application/json"
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);

$_SESSION['userinfo']=$response;
curl_close($curl);

$data = json_decode($_SESSION['userinfo']);
  foreach ($data->users as $character) {
    
    //echo "<h3 align='center'>Bienveni@:</h3><h4 align='center'>" . $character->name." ";
    $_SESSION['user_rol'] =$character->rol;
    $_SESSION['user_id'] =$character->user_id;
    $_SESSION['profile_id'] =$character->profile;
    $_SESSION['username'] =$character->username;
    
    
  }



  $curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "".$sub_domain."/lugmacore/apiTools/v1/getAlertCounter/".$_SESSION['profile_id'],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "accept: application/json"
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);

$_SESSION['userinfo']=$response;
curl_close($curl);

$data = json_decode($_SESSION['userinfo']);
  foreach ($data->alerts as $character) {
    
    //echo "<h3 align='center'>Bienveni@:</h3><h4 align='center'>" . $character->name." ";
    $_SESSION['alert_counter'] =$character->counter;
    
    
  }
  

header ('Location: ../session.php');

?>

