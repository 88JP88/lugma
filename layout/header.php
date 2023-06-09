<?php session_start();


echo '<script>

const user_rol = "' . $_SESSION["user_rol"] . '";
  sessionStorage.setItem("rol", user_rol);

  const user_id = "' . $_SESSION["user_id"] . '";
  sessionStorage.setItem("user_id", user_id);

  const profile_id = "' . $_SESSION["profile_id"] . '";
  sessionStorage.setItem("profile", profile_id);

  const domain = "' . $_SESSION["domain"] . '";
  sessionStorage.setItem("domain", domain);

</script>';


?>
<head>
	<title>Inicio - Mi sitio web</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/estilos.css">
    <link rel="icon" type="image/x-icon" href="public/images/LUGMA(5).png">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<!-- Importación de Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="session.php"><img src="public/images/LUGMA(5).png" width="30" height="30" alt="Logo">
				</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">

					

					<script>
    const lnameValue = sessionStorage.getItem("rol");
	const my_profile = sessionStorage.getItem("profile");

	if (lnameValue === "teacher" || lnameValue === "student" || lnameValue === "coordinate" || lnameValue === "api_user") {
        document.write(`
		<li class="nav-item active">
						<a class="nav-link" href="session.php">Inicio<span class="sr-only">(current)</span></a>
					</li>

					<li class="nav-item active">
						<a class="nav-link" href="api_lugma.php">API<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Herramientas</a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a href="login.php" class="dropdown-item" data-toggle="modal" data-target="#scheduleModal">Horario</a>
    
      <a class="dropdown-item dropdown-toggle" href="#" role="button" id="dropdownTareas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tareas</a>
      <div class="dropdown-menu" aria-labelledby="dropdownTareas">
	  <a href="login.php" class="dropdown-item" data-toggle="modal" data-target="#ptaskModal">Tareas Personales</a>
        <a class="dropdown-item" href="#">Tareas por Materia</a>
      </div>
    
	  <a href="login.php" class="dropdown-item" data-toggle="modal" data-target="#modalAddAlert">Alertas</a>
      <a href="login.php" class="dropdown-item" data-toggle="modal" data-target="#groupsModal">Grupos</a>
      
    <a class="dropdown-item" href="mail.php?my_profile=${my_profile}">Correo</a>
  </div>
</li>

					<li class="nav-item">
						<a class="nav-link" href="#">Contacto</a>
					</li>
        `);
    }
    if (lnameValue === "teacher" ||lnameValue === "coordinate" ) {
        document.write(`
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Carreras</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Ingeniería de software</a>
                    <a class="dropdown-item" href="#">Ingeniería civil</a>
                    <a class="dropdown-item" href="#">Ingeniería mecánica</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Estudiantes</a>
            </li>
        `);
    }
	if (lnameValue === "teacher" || lnameValue === "student" || lnameValue === "coordinate") {
        document.write(`
		<li class="nav-item">
						<a class="nav-link" href="#">Notas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Grupos</a>
					</li>
        `);
    }
</script>

					


				
					
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Perfil</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a href="login.php" class="dropdown-item" data-toggle="modal" data-target="#modalProfile">Ver</a>
							<a class="dropdown-item" href="controller/controller_post_validate_out.php">Cerrar sesión</a>
							<a class="dropdown-item" href="#">Soporte</a>
						</div>
					</li>
					
					
				</ul>


				<?php
				echo '<a class="navbar-brand ml-auto"  data-toggle="modal" data-target="#alertModal">'.$_SESSION['profile_id'].' Alertas</a>
				';?>
				<a class="navbar-brand ml-auto" href="controller/controller_post_validate_out.php">#-Notificaciones</a>
				<!-- Logo en la parte derecha del navbar -->
				<a class="navbar-brand ml-auto" href="#">
				<img src="public/images/LUGMA(5).png" width="30" height="30" alt="Logo">
					</a>
						
			
			</div>
		</nav>
	</header>
	<style>
		.alert {
			position: fixed;
			top: -100px;
			width: 100%;
			background-color: #2d572c;
			color: white;
			text-align: center;
			padding: 3px;
			transition: top 0.6s ease;
			z-index: 1;
		}

		.alertno {
			position: fixed;
			top: -100px;
			width: 100%;
			background-color: #cb3234;
			color: white;
			text-align: center;
			padding: 3px;
			transition: top 0.6s ease;
			z-index: 1;
		}
	</style>
	<div id="alert" class="alert"></div>
	<div id="alertno" class="alertno"></div>
	<?php
echo '<script>
  const respuesta = "' . $_SESSION["respuesta"] . '";
  sessionStorage.setItem("respuesta", respuesta);
  const mensaje = "' . $_SESSION["mensaje"] . '";
  sessionStorage.setItem("mensaje", mensaje);
  const error = "' . $_SESSION["error"] . '";
  sessionStorage.setItem("error", error);




  const alerta = sessionStorage.getItem("respuesta");
  if(alerta=="true"){
	const mensaje = sessionStorage.getItem("mensaje");
	  showAlert(mensaje);
  }
  if(alerta=="false"){
	const mensaje = sessionStorage.getItem("mensaje");
	  showAlertno(mensaje);
  }

		function showAlert(alertas) {
    // Mostrar la alerta
    var alert = document.getElementById("alert");
    alert.innerHTML = alertas;
    alert.style.top = "0";

    // Ocultar la alerta después de 5 segundos
    setTimeout(function(){
        alert.style.top = "-100px";
    }, 5000);
	
	//sessionStorage.removeItem("respuesta");
	//sessionStorage.removeItem("mensaje");
}

function showAlertno(alertas) {
    // Mostrar la alerta
    var alertno = document.getElementById("alertno");
    alertno.innerHTML = alertas;
    alertno.style.top = "0";

    // Ocultar la alerta después de 5 segundos
    setTimeout(function(){
        alertno.style.top = "-100px";
    }, 5000);
	

}

  
</script>';
$_SESSION['respuesta']="";
$_SESSION['mensaje']="";
$_SESSION['error']="";

?>