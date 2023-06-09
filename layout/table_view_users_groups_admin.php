

  <table id="personaltt-table" class="table table-striped">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
      <th>Nombre</th>
      <th>Usuario</th>
      <th>Estado</th>
      <th>Tipo</th>
      <th>Acciones</th>
    </tr>
  </thead>
  

            <tbody>
             
	<?php
  require_once 'env/domain.php';
  $sub_domaincon=new model_dom;
  $sub_domain=$sub_domaincon->dom();
  
  echo '<script>
  const prof = sessionStorage.getItem("profile");
  const apiUrl2 = `'.$sub_domain.'/lugmacore/apiTools/v1/getUserGroups/'.$_GET['id'].'`;
</script>';?>
	
	
	
	<?php
	echo '
	<script>
		


 // Función para obtener los datos del API
 async function getCharacters() {
	
	fetch(apiUrl2)
  .then(response => response.json())
  .then(data => {
    const personaltTableBody = document.querySelector("#personaltt-table tbody");
    // Borramos los datos antiguos
    personaltTableBody.innerHTML = "";
    data.group_constructor.forEach(group => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td>${group.name} ${group.last_name}</td>
        <td>${group.username}</td>
        <td>${group.status}</td>
        <td>${group.member_type}</td>
        <td><a class="btn btn-secondary" href="controller/controller_del_user_group_admin.php?group_id=${group.id}&profile=${group.profile}&value=block&profile_id='.$_GET['profile'].'">Bloquear</a>
        <a class="btn btn-secondary" href="controller/controller_del_user_group_admin.php?group_id=${group.id}&profile=${group.profile}&value=unblock&profile_id='.$_GET['profile'].'">Desbloquear</a>
        <a class="btn btn-secondary" href="controller/controller_del_user_group_admin.php?group_id=${group.id}&profile=${group.profile}&value=del&profile_id='.$_GET['profile'].'">Eliminar</a></td>
        `;
      personaltTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 getCharacters();
 


	</script>

';?>    </tbody>
          </table>
       