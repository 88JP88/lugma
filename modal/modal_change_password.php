<?php



    echo '
    
<!-- Modal -->
<div class="modal fade" id="modalchangepassword" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Editar Contraseña para el usuario:<br>';
        
    
        
        echo $character->username."</h5>";
          
       
        echo '
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Contenido del modal -->
        <div class="login">
          <form method="post" action="controller/controller_put_pass.php">
           

            <label for="pass">Contraseña Actual</label>
            <input type="password" id="pass" name="pass" placeholder="Ingresa tu contraseña">

            <label for="pass1">Nueva Contraseña</label>
            <input type="password" id="pass1" name="pass1" placeholder="Ingresa tu contraseña">

            <label for="pass2">Confirme Nueva Contraseña Actual</label>
            <input type="password" id="pass2" name="pass2" placeholder="Ingresa tu contraseña">


            

            <input class="btn btn-primary" type="submit" value="Editar">
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

';

