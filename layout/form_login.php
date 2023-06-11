<!DOCTYPE html>

<head>

	<title>Iniciar Sesión</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

	<div class="login">
		<h1>Iniciar Sesión</h1>

		<form method="post" action="controller/controller_post_validate.php">
	<label for="usuario">Usuario</label>
	<input type="text" id="usuario" name="usuario" placeholder="Ingresa tu usuario">

	<label for="password">Contraseña</label>
	<input type="password" id="password" name="password" placeholder="Ingresa tu contraseña">



	<input type="submit" value="Ingresar" class="btn btn-primary">
  <!-- Botón para abrir el primer modal -->
  <br>
<button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-secondary">
 Crear cuenta
</button>

    
</form>
<footer>
		<p>Derechos reservados &copy; <?php 
    $ano_actual = date('Y');
    require_once 'version/version.php';
$version_view=new model_ver;
$version=$version_view->versioning();
    echo $ano_actual." <br>version ".$version;
    $_SESSION['current_version']=$version;
?>


</p>
	</footer>

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

<label for="sub">Suscripción</label>

<?php
require_once 'env/domain.php';
$sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
echo '<script>const apiUrl2 = "'.$sub_domain.'/lugmacore/apiUsers/v1/getSubs";</script>';
?>

<select id="repos-select" class="btn btn-secondary" name="sub"></select>

<?php
echo '
	<script>

 // Función para obtener los datos del API
 async function getCharacters2() {

  const reposSelect = document.getElementById("repos-select");

	fetch(apiUrl2)
  .then(response => response.json())
  .then(data => {
    data.subs.forEach(sub => {
      const option = document.createElement("option");
      option.value = sub.sub_id;
      option.text = "$"+sub.total+" "+sub.info+" tipo->"+sub.type;
      reposSelect.add(option);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });

 }

 // Llamar a la función para obtener los datos del API
 getCharacters2();

	</script>
';

echo '<script>sessionStorage.removeItem("contact");</script>';
echo '<script>sessionStorage.removeItem("days");</script>';
echo '<script>sessionStorage.removeItem("image");</script>';
echo '<script>sessionStorage.removeItem("last_name");</script>';
echo '<script>sessionStorage.removeItem("name");</script>';
echo '<script>sessionStorage.removeItem("profile");</script>';
echo '<script>sessionStorage.removeItem("rol");</script>';
echo '<script>sessionStorage.removeItem("user_id");</script>';
echo '<script>sessionStorage.removeItem("username");</script>';
?>

<label for="subcode">Código de suscripción/código de promoción</label>
	<input type="text" id="subcode" name="subcode" placeholder="Código de suscripción/código de promoción">

  <label for="secword">Palabra secreta</label>
	<input type="text" id="secword" name="secword" placeholder="Ingresa tu Palabra secreta">
	<input type="submit" value="Crear" class="btn btn-primary">
    
  <!-- Botón para abrir el primer modal -->


    
</form>

      </body>
      
</html>


