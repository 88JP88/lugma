<?php
session_start();
$group=$_POST['group'];
$desp=$_POST['desp'];
$qty=$_POST['qty'];
$sta=$_POST['sta'];
$public=$_POST['public'];
$a_join=$_POST['a_join'];
$a_public=$_POST['a_public'];
$group_id=$_GET['id'];

$id=$_GET['profile'];


// $ch = curl_init($url);
             // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
             // $response = curl_exec($ch);
             // curl_close($ch);*/ //echo $response;
              //var_dump ($response);
            ////  $ss = json_encode($response);
  //echo $ss;
              $url = 'http://localhost/lugmacore/apiTools/v1/putMakerGroups/';

              // Definir los datos a enviar en la solicitud POST
              $data = array(
                  'group' =>$group,
                  'description' => $desp,
                  'qty' => $qty,
                  'status' => $sta,
                  'public' => $public,
                  'auto_join' => $a_join,
                  'auto_add' => $a_public,
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
  $_SESSION["mensaje"]="Grupo Editado Correctamente";
  $_SESSION["error"]=$response1;

}
if($response1 != "true"){
  $_SESSION["respuesta"]="false";
  $_SESSION["mensaje"]="No se pudo Editar el grupo o hubo un error";
  $_SESSION["error"]=$response1;

}



header ('Location: ../maker_groups.php?id='.$group_id.'&profile='.$id);

?>