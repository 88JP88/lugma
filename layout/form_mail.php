

<?php

$my_profile = $_GET['my_profile'];
require_once 'env/domain.php';
$sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
echo '
<script>
const apiUrl11g = "'.$sub_domain.'/lugmacore/apiUsers/v1/getMyProfileByProfile/'.$my_profile.'";</script>';

echo '<script>
        // Función para obtener los datos del API
        async function getCharacters11g() {
            fetch(apiUrl11g)
            .then(response => response.json())
            .then(data => {
                const userData = data.users[0];
                sessionStorage.setItem("name", userData.name);
                sessionStorage.setItem("last_name", userData.last_name);
                sessionStorage.setItem("username", userData.username);
                sessionStorage.setItem("contact", userData.contact);
                sessionStorage.setItem("rol", userData.rol);
                sessionStorage.setItem("my_profile", userData.profile);
                sessionStorage.setItem("image", userData.image);
                // Mostrar los datos en la pantalla
                const scheduleDiv1 = document.querySelector("#schedule-div");
                scheduleDiv1.innerHTML = `
                `;
            })
            .catch(error => {
                console.error("Error:", error);
            });
        }
    
        // Llamar a la función para obtener los datos del API
        getCharacters11g();
    </script>
';
?>



<!DOCTYPE html>
<html>
<head>
  <title>Correo Electrónico</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #f5f5f5;
      padding: 20px;
      text-align: center;
    }

    nav {
      background-color: #fff;
      padding: 10px;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
    }

    nav li {
      margin-right: 10px;
    }

    nav a {
      color: #333;
      text-decoration: none;
      padding: 10px;
    }

    nav a:hover {
      background-color: #f5f5f5;
    }

    main {
      padding: 20px;
    }

    .email-section {
      display: none;
    }

    .active {
      font-weight: bold;
    }

    .form-section {
      display: none;
    }

    .show-form {
      display: block;
    }

    .form-input {
      margin-bottom: 10px;
    }

    .form-textarea {
      height: 100px;
      resize: vertical;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Correo Electrónico</h1>
  </header>

  <nav>
    <ul>
      <li><a href="#" onclick="changeSection('inbox'); getCharactersqqq()">Inbox</a></li>
      <li><a href="#" onclick="changeSection('copias'); getCharactersqqqr()">Copia</a></li>
      
      <li><a href="#" onclick="changeSection('enviados'); getCharactersqqqq()">Enviados</a></li>
      <li><a href="#" onclick="changeSection('spam'); getCharactersqqqqc()">Spam</a></li>
      <li><a href="#" onclick="changeSection('importantes'); getCharactersqqqqx()">Importantes</a></li>
      <li><a href="#" onclick="changeSection('leidos');getCharactersqqqqcz()">Leídos</a></li>
      <li><a href="#" onclick="changeSection('papelera');getCharactersqqqqcw()">Eliminados</a></li>
     
      <li><a href="#" onclick="showForm()">Más</a></li>
    </ul>
  </nav>
  <div id="form" class="form-section" style="text-align: center;">
    <h2>Enviar Mensaje</h2>
    <form method="post" action="../lugma/controller/controller_post_mail.php">
      <div class="form-input">
        <label for="destinatario">Destinatario:</label>
        <input type="text" id="destinatario" name="destinatario" required placeholder="solo un destinatario">
      </div>
      <div class="form-input">
        <label for="asunto">Asunto:</label>
        <input type="text" id="asunto" name="asunto" required placeholder="asunto">
      </div>
      <div class="form-input">
        <label for="copia">Con Copia:</label>
        <input type="text" id="copia" name="copia" placeholder="separado por espacio">
      </div>
      <div class="form-input">
        <label for="contenido">Contenido:</label>
        <textarea required id="contenido" class="form-textarea" name="contenido"  placeholder="escribe tu menssaje"></textarea>
      </div>
      <button type="submit">Enviar</button>
    </form>
  </div>
  <main style="display: flex; justify-content: center; align-items: center;">
  
  <div id="inbox" class="email-section" style="text-align: center;">
    <h2>Inbox</h2>
    <?php require_once 'layout/table_mail_inbox.php'; ?>
    <p>Contenido del inbox...</p>
  </div>
  <div id="copias" class="email-section" style="text-align: center;">
    <h2>Copia</h2>
    <?php require_once 'layout/table_mail_copy.php'; ?>
    <p>Contenido del Copia...</p>
  </div>

  <div id="enviados" class="email-section" style="text-align: center;">
    <h2>Enviados</h2>
    <?php require_once 'layout/table_mail_send.php'; ?>
    <p>Contenido de los correos enviados...</p>
  </div>

  <div id="spam" class="email-section" style="text-align: center;">
    <h2>Spam</h2>
    <?php require_once 'layout/table_mail_spam.php'; ?>
    <p>Contenido de los correos spam...</p>
  </div>

  <div id="importantes" class="email-section" style="text-align: center;">
    <h2>Importantes</h2>
    <?php require_once 'layout/table_mail_important.php'; ?>
    <p>Contenido de los correos importantes...</p>
  </div>
  <div id="leidos" class="email-section" style="text-align: center;">
    <h2>Leídos</h2>
    <?php require_once 'layout/table_mail_read.php'; ?>
    <p>Contenido de los correos leídos...</p>
  </div>
  <div id="papelera" class="email-section" style="text-align: center;">
    <h2>Eliminados</h2>
    <?php require_once 'layout/table_mail_recicler.php'; ?>
    <p>Contenido de los correos eliminados...</p>
  </div>
</main>


  <script>
    // Función para cambiar la sección activa
    function changeSection(section) {
      // Ocultar todas las secciones
      const sections = document.getElementsByClassName('email-section');
      for (let i = 0; i < sections.length; i++) {
        sections[i].style.display = 'none';
      }

      // Mostrar la sección seleccionada
      const selectedSection = document.getElementById(section);
      selectedSection.style.display = 'block';

      // Agregar clase "active" al enlace seleccionado
      const links = document.getElementsByTagName('a');
      for (let i = 0; i < links.length; i++) {
        links[i].classList.remove('active');
      }
      event.target.classList.add('active');
    }

    // Función para mostrar el formulario de enviar mensaje
    function showForm() {
      const formSection = document.getElementById('form');
      formSection.classList.toggle('show-form');
    }

    
  </script>
</body>
</html>
