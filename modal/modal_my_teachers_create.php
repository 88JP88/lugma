

<!-- Modal -->
<div class="modal fade" id="myteacherscreatemodal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Crear Profesor</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Contenido del modal -->
        <div class="login" style="max-height: 90vh; overflow: auto;">
        <?php   
require_once 'layout/form_my_teachers_create.php';?>    
     <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
     </div>
        </div>
      </div>
      </div>
      
    </div>
  </div>
</div>



