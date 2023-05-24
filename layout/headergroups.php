<?php session_start();?>
<head>
	<title>Inicio - Mi sitio web</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/estilos.css">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<!-- Importación de Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="group.php">LUGMA</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">

					

					<script>
						const lnameValue1 = sessionStorage.getItem("group_id");
						const lnameValue2 = sessionStorage.getItem("profile");
    const lnameValue = sessionStorage.getItem("auto_join");
	const lnameValue3 = sessionStorage.getItem("added_to_group");
	const auto_add = sessionStorage.getItem("public_add");

	if (lnameValue == 0 && lnameValue3 === "0") {
        document.write(`
		<li class="nav-item active">
						<a class="nav-link" href="session.php">Enviar solicitud<span class="sr-only">(current)</span></a>
					</li>

					
					

					
        `);
    }
	if (lnameValue == 1 && lnameValue3 === "0") {
        document.write(`
		<li class="nav-item active">
						<a class="nav-link" href="session.php">Añadir a grupo<span class="sr-only">(current)</span></a>
					</li>

					
					

					
        `);
    }
	if (lnameValue3 === "1" ) {
        document.write(`
		<li class="nav-item active">
						<a class="nav-link" href="session.php">Salir del grupo<span class="sr-only">(current)</span></a>
					</li>

					
					

					
        `);
    }
	if (auto_add === "1" ) {
        document.write(`
	
					
<li class="nav-item active">
						<a class="nav-link" href="session.php" data-toggle="modal" data-target="#disModal">Crear Discusión<span class="sr-only">(current)</span></a>
					</li>
					
        `);
    }
    
	
</script>

					


				
					
					
					
					
				</ul>


				
				<!-- Logo en la parte derecha del navbar -->
				<a class="navbar-brand ml-auto" href="#">
					<img src="logo.png" width="30" height="30" alt="Logo">
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