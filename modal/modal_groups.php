

<!-- Modal -->
<div class="modal fade" id="groupsModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Grupos</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Contenido del modal -->
        <div class="login" style="max-height: 90vh; overflow: auto;">
        



        <?php
        require_once 'env/domain.php';


        $sub_domaincon = new model_dom();
        $sub_domain = $sub_domaincon->dom();
echo '
<script>
  const profilexxxxx = sessionStorage.getItem("profile");
  const apiUrlxxxxx = `'.$sub_domain.'/lugmacore/apiTools/v1/getGroupsTotalCounter/${profilexxxxx}`;

  // Función para obtener los datos del API
  async function getCharactersxxxx() {
    fetch(apiUrlxxxxx)
      .then(response => response.json())
      .then(data => {
        const container1111 = document.getElementById("totalgroups-container");
        // Borramos los datos antiguos
        container1111.innerHTML = "";
        data.groups.forEach(group => {
          const groupDiv = document.createElement("div");
          groupDiv.classList.add("group-item");
          groupDiv.innerHTML = `
            <div class="group-property"> ${group.counter} Grupos En total<br></div><br>
            
          `;
          container1111.appendChild(groupDiv);
        });
      })
      .catch(error => {
        console.error("Error:", error);
      });
  }
 
  // Llamar a la función para obtener los datos del API
  getCharactersxxxx();
</script>
';
?>
<div id="totalgroups-container"></div>






        
      <a href="login.php" class="dropdown-item" data-toggle="modal" data-target="#groupsInsertModal">Crear Grupo</a>
      
      <a href="login.php" class="dropdown-item" data-toggle="modal" data-target="#groupsAdminModal">Grupos que Administro</a>
      
      <a href="login.php" class="dropdown-item" data-toggle="modal" data-target="#groupsModerModal">Grupos que Modero</a>

      <a href="login.php" class="dropdown-item" data-toggle="modal" data-target="#groupsMemberModal">Grupos que soy Miembro</a>
      
      <a href="login.php" class="dropdown-item" data-toggle="modal" data-target="#groupsCreatedModal">Grupos que he Creado</a>
      
      <a href="login.php" class="dropdown-item" data-toggle="modal" data-target="#groupspublicModal">Grupos Públicos</a>
      








<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
     </div>
        </div>
      </div>
      </div>
      
    </div>
  </div>
</div>



