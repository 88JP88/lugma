<?php
session_start();
$task=$_POST['task'];
$sdate=$_POST['sdate'];
$fdate=$_POST['fdate'];
$prior=$_POST['prior'];
$id=$_SESSION['profile_id'];
$task_id=$_GET['id'];

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
              $url = $sub_domain.'/lugmacore/apiTools/v1/putTask/';

              // Definir los datos a enviar en la solicitud POST
              $data1 = array(
                'task' =>$task, 
                'sdata' => $sdate,
                'fdata' => $fdate,
                'priority' => $prior,
                'profile' => $id,
                'task_id' => $task_id
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
              curl_setopt($curl, CURLOPT_POSTFIELDS, $data1);
              curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
             // curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
          
              // Ejecutar la solicitud y obtener la respuesta
              $response1 = curl_exec($curl);
              //var_dump($data);
              // Cerrar la sesión cURL
              curl_close($curl);

            
if($response1 == "true"){
  $_SESSION["respuesta"]="true";
  $_SESSION["mensaje"]="Tarea Editada Correctamente";
  $_SESSION["error"]=$response1;

}
if($response1 != "true"){
  $_SESSION["respuesta"]="false";
  $_SESSION["mensaje"]="No se pudo Editar la tarea o hubo un error";
  $_SESSION["error"]=$response1;

}



header ('Location: ../tarea.php?id='.$task_id.'&profile='.$id);

?>