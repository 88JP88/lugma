
<!DOCTYPE html>
<html>
<head>

	<title>Iniciar Sesión</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>





      
<body>

	<div class="login">
		<h1>Iniciar Sesión</h1>
		<form method="post" action="controller/controller_post_sub.php">
	<label for="correo">Correo</label>
	<input type="text" id="correo" name="correo" placeholder="Ingresa tu correo">

	<label for="secword">Palabra secreta</label>
	<input type="password" id="secword" name="secword" placeholder="Ingresa tu palabra secreta">

  <label for="sub">Suscripción</label>
<select id="sub" name="sub" class="btn btn-secondary">
<?php

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost/lugmacore/apiUsers/v1/getSubs",
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

curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $data = json_decode($response);
  foreach ($data->subs as $character) {
    echo "<option value=". $character->sub_id .">"."$" . $character->total ." ". $character->info . " tipo->" . $character->type . "</option>";
   
  }
}
?>
 

</select>

	<input type="submit" value="Generar Codigo" class="btn btn-primary">
  <!-- Botón para abrir el primer modal -->
  <br>
<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-secondary">
 Verificar Suscripciones
</button>

    
</form>


<!-- Modal 1 -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Crear Usuario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <div class="login">
		<form method="post" action="controller/controller_post_users.php">
	<label for="usuario">Usuario</label>
	<input type="text" id="usuario" name="usuario" placeholder="Ingresa tu usuario">
  
  <label for="nombre">Nombre</label>
	<input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre">

  <label for="apellido">Apellido</label>
	<input type="text" id="apellido" name="apellido" placeholder="Ingresa tu apellido">

  <label for="contacto">Contacto</label>
	<input type="text" id="contacto" name="contacto" placeholder="Ingresa tu contacto">

	<label for="password">Contraseña</label>
	<input type="password" id="password" name="password" placeholder="Ingresa tu contraseña">

  <label for="password1">Verificar Contraseña</label>
	<input type="password" id="password1" name="password1" placeholder="Ingresa tu contraseña">

    <label for="rol">Rol</label>
<select id="rol" name="rol" class="btn btn-secondary">
  <option value="student">Estudiante</option>
  <option value="teacher">Profesor</option>
  <option value="coordinate">Coordinación</option>
  <option value="api_user">Usuario Api</option>
</select>

<label for="rol">Suscripción</label>
<select id="rol" name="rol" class="btn btn-secondary">
<?php

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost/lugmacore/apiUsers/v1/getSubs",
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

curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $data = json_decode($response);
  foreach ($data->subs as $character) {
    echo "<option value=". $character->sub_id .">"."$" . $character->total ." ". $character->info . " tipo->" . $character->type . "</option>";
   
  }
}
?>
 

</select>

<label for="subcode">Código de suscripción/código de promoción</label>
	<input type="text" id="subcode" name="subcode" placeholder="Código de suscripción/código de promoción">

  <label for="secword">Palabra secreta</label>
	<input type="text" id="secword" name="secword" placeholder="Ingresa tu Palabra secreta">
	<input type="submit" value="Crear" class="btn btn-primary">
    
  <!-- Botón para abrir el primer modal -->


    
</form>

      </body>
</html>
