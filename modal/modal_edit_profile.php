<?php



    echo '
    <div class="modal fade" id="modaleditprofile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h2 class="modal-title" id="myModalLabel">Editar Perfil</h2>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  ';


  echo '
        
      
      <div class="modal-body">
        <!-- Contenido del modal -->
        <div class="login">
          <form method="post" action="controller/controller_put_users.php">';
           

            echo '
            <label for="name">Nombres</label>
            <input type="text" id="name" name="name" placeholder="Ingresa tu Nombre">
            <label for="lname">Apellidos</label>
            <input type="text" id="lname" name="lname" placeholder="Ingresa tu Apellido">
            <label for="cont">Contacto</label>
            <input type="text" id="cont" name="cont" placeholder="Ingresa tu Contacto">

            <!--JavaScript-->
            <script>
              //Obtenemos el elemento de entrada
              const inputName = document.getElementById("name");
              //Obtenemos el valor del sessionStorage
              const nameValue = sessionStorage.getItem("name");
              //Establecemos el valor en el elemento de entrada
              inputName.value = nameValue;


              const inputlName = document.getElementById("lname");
              //Obtenemos el valor del sessionStorage
              const lnameValue = sessionStorage.getItem("last_name");
              //Establecemos el valor en el elemento de entrada
              inputlName.value = lnameValue;


              const inputCont = document.getElementById("cont");
              //Obtenemos el valor del sessionStorage
              const contValue = sessionStorage.getItem("contact");
              //Establecemos el valor en el elemento de entrada
              inputCont.value = contValue;
            </script>
            
             
            
            

            

            <input type="button" class="btn btn-primary" onclick="mostrarPopup()" value="Editar">
            <div id="mi-popup" class="popup">
<div class="popup-contenido">
  <h2>¡Correcto!</h2>
  <p>Usuario editado Correctamente.</p>
  <button onclick="window.location.href ="controller/controller_put_users.php">Aceptar</button>
  
</div>
</div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalchangepassword">Cambiar Contraseña</button>
  
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>

            
    </div>
  </div>
</div>

<script>
  function mostrarPopup() {
    document.getElementById("mi-popup").style.display = "flex";
  }

  function ocultarPopup() {
    document.getElementById("mi-popup").style.display = "none";
  }
</script>

';


  

