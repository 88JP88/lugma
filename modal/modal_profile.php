<?php



    echo '
    <div class="modal fade" id="modalprofile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h2 class="modal-title" id="myModalLabel">Información de Perfil</h2>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <p>';
   // echo ''.$_SESSION['userinfo'].'</p>'
   ; 
    
    echo '<div id="schedule-div"></div><script>const apiUrl11 = "http://localhost/lugmacore/apiUsers/v1/get/'.$_SESSION['usuario'].'";</script>';
    echo '<script>
        // Función para obtener los datos del API
        async function getCharacters11() {
            fetch(apiUrl11)
            .then(response => response.json())
            .then(data => {
                const userData = data.users[0];
                sessionStorage.setItem("name", userData.name);
                sessionStorage.setItem("last_name", userData.last_name);
                sessionStorage.setItem("username", userData.username);
                sessionStorage.setItem("contact", userData.contact);
                sessionStorage.setItem("rol", userData.rol);
                sessionStorage.setItem("user_id", userData.user_id);
                sessionStorage.setItem("profile", userData.profile);
                sessionStorage.setItem("days", userData.days);
                sessionStorage.setItem("image", userData.image);
    
                // Mostrar los datos en la pantalla
                const scheduleDiv = document.querySelector("#schedule-div");
                scheduleDiv.innerHTML = `
                <h3 align="center">Bienveni@:</h3>
                <h4 align="center">${userData.name} ${userData.last_name}</h4>
                <h5 align="center">Usuario: ${userData.username}</h5>
                <h5 align="center">Contacto: ${userData.contact}</h5>
                <h5 align="center">Rol: ${userData.rol}</h5>
                <h5 align="center">Id de usuario: ${userData.user_id}</h5>
                <h5 align="center">Id de Perfil: ${userData.profile}</h5>
                <h5 align="center">Días restantes de subscripción: ${userData.days}</h5>
                <img src="${userData.image}" alt="profile_image" class="img-fluid mx-auto d-block rounded" style="max-height: 200px;">
                `;
            })
            .catch(error => {
                console.error("Error:", error);
            });
        }
    
        // Llamar a la función para obtener los datos del API
        getCharacters11();
    </script>';
    
    

  echo '
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaleditProfile">Editar</button>
    
  </div>
</div>
</div>
</div>
';

