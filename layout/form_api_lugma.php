
<head>

	<title>Iniciar Sesión</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>


</head>

<body>
<?php 


//session_start();





  
  // Imprimir los datos en el cuerpo de la respuesta
  //echo $json_data;
?>
	

<br><br><br>





<!-- Botón que abre el modal -->

<div class="login">
		<form method="post" action="../lugma/controller/variabl_loged.php">
        
	<label for="usuario">Palabra Clave </label>
    <label for="usuario">(<?php echo $_SESSION['id'];?>)<br></label>
	<input type="text" id="usuario" name="usuario" placeholder="Título, usuario, repositorio, tipo">
    

    <div class="text-center">
  <button type="submit" class="btn btn-primary" data-toggle="modal">
  Cargar Palabra Clave
  </button>
</div>
    <br>
    <div class="text-center">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal1">
    VER REPOSITORIO
  </button>
</div>
<br>
<div class="text-center">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
    INSERTAR REPOSITORIO
  </button>
</div>
</form>

	</div>





</div>
