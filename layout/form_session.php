<!DOCTYPE html>
<html>
<script src="alertas.js"></script>
<body>
	<?php
  session_start();?>

    
	<main>
    <br>
    <br>
    <br>
    <br>
    
		<h1>Bienvenido a mi sitio web</h1>
		<p>En esta página encontrarás información acerca de nuestras carreras, notas, grupos y más.</p>
	
	
<?php

$ano_actual = date('Y');


?>
<?php
$images = array(
	'https://png.pngtree.com/png-clipart/20190903/original/pngtree-website-link-icon-png-image_4438304.jpg',
    'https://png.pngtree.com/png-clipart/20191120/original/pngtree-chain-link-icon---red-watercolor-circle-splash-png-image_5059909.jpg',
    'https://png.pngtree.com/png-clipart/20230426/original/pngtree-facebook-logo-facebook-icon-picture-image_3654755.png',
    'https://via.placeholder.com/300x150?text=Imagen+4'
);
?>
<div id="banner-container">
   

<div id="banner">
    <?php foreach ($images as $image): ?>
        <img src="<?php echo $image ?>" alt="Banner Image">
    <?php endforeach; ?>
	<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Banner con botones de adelantar y atrasar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    
    
    

	
<img src="<?php echo $images[0]; ?>">
<button id="prev" onclick="prevImage()">&#8249;</button>
    <button id="next" onclick="nextImage()">&#8250;</button>
  </body>
</html>

</div>
</div>
<script>
var images = <?php echo json_encode($images); ?>;
var currentIndex = 0;
var imgElement = document.querySelector('#banner img');

function prevImage() {
  currentIndex--;
  if (currentIndex < 0) {
    currentIndex = images.length - 1;
  }
  imgElement.src = images[currentIndex];
}

function nextImage() {
  currentIndex++;
  if (currentIndex >= images.length) {
    currentIndex = 0;
  }
  imgElement.src = images[currentIndex];
}

setInterval(nextImage, 5000); // para que el banner se mueva automáticamente cada 5 segundos



$(document).ready(function() {
    var bannerWidth = $('#banner').width();
    var containerWidth = $('#banner-container').width();
    var position = 0;
    setInterval(function() {
        position -= 5;
        if (position < -bannerWidth) {
            position = containerWidth;
        }
        $('#banner').css('left', position);
    }, 20);
});






</script>


<!DOCTYPE html>
<html>
<head>

	<title>Alerta deslizante</title>
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
</head>
<body>
	<button onclick="ejecutarFunciones()">Mostrar alerta</button>
	
	
	
	
	<?php
	
	echo '
	<script>

	
function funcion1() {
	console.log("Función 1 ejecutada");
  }
  
  function funcion2() {
	console.log("Función 2 ejecutada");
	//sessionStorage.removeItem("userData");


	 

//console.log(valor);


	
  }
function ejecutarFunciones() {
	funcion1();
	funcion2();
	//showAlertno();
  }
	</script>

';






?>
</html>
<!-- formulario en HTML -->


<form action="layout/guardar_archivo.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="file">
  <input type="submit" name="submit" value="Subir archivo">
</form>








    </main>







    
	<footer>
		<p>Derechos reservados &copy; <?php echo $ano_actual;
?></p>
	</footer>
</body>
</html>
