
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


session_start();


echo "<br><br>".$_SESSION['sub_code'];




//header ('Location: controller_post_validate2.php');

  
  // Imprimir los datos en el cuerpo de la respuesta
  //echo $json_data;
?>
	
  <main>
    <br>
    <br>
    <br>
    <br>
    
		<h1>Tu código de subscri´pción es:</h1>
			<?php   echo "<h3>".$_SESSION['sub_code']."</h3>";?>
      

<?php

$ano_actual = date('Y');


?>
    </main>
