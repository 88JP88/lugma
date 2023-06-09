
<table id="membergroups-table" class="table table-striped">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
    <th>Acciones</th>
      <th>Grupo</th>
      <th>Descripción</th>
      <th>Estado</th>
      <th>Miembros</th>
      <th>Cantidad Máxima</th>
      <th>Creador</th>
      <th>Publico</th>
      <th>Auto añadir</th>
      <th>Auto publicar</th>
      
    </tr>
  </thead>
  

            <tbody>
             
         
	
	<?php
  require_once 'env/domain.php';
  $sub_domaincon=new model_dom;
  $sub_domain=$sub_domaincon->dom();
	echo '
	<script>
		
  const profileId1111 = sessionStorage.getItem("profile");
  const apiUrlqqq = `'.$sub_domain.'/lugmacore/apiTools/v1/getParticipantGroups/${profileId1111}`;


 // Función para obtener los datos del API
 async function getCharactersqqq() {
	
	fetch(apiUrlqqq)
  .then(response => response.json())
  .then(data => {
    const membergroupsTableBody = document.querySelector("#membergroups-table tbody");
    // Borramos los datos antiguos
    membergroupsTableBody.innerHTML = "";
    data.group_constructor.forEach(group => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td>
      <a class="btn btn-primary" href="group.php?id=${group.id}&profile=${group.profile}&my_profile=${profileId1111q}" target="_blank">Ingresar</a>
      </td>
        <td>${group.name}</td>
        <td>${group.description}</td>
        <td>${group.status}</td>
        <td>${group.members}</td>
        <td>${group.qty}</td>
        <td>${group.maker}</td>
        <td>${group.public}</td>
        <td>${group.auto_join}</td>
        <td>${group.public_add}</td>
        

        
       
        
      `;
      membergroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 getCharactersqqq();
 


	</script>

';?>  




<?php
echo '
<script>
  const profilexxxx = sessionStorage.getItem("profile");
  const apiUrlxxxx = `'.$sub_domain.'/lugmacore/apiTools/v1/getGroupsMemberCounter/${profilexxxx}`;

  // Función para obtener los datos del API
  async function getCharactersxxx() {
    fetch(apiUrlxxxx)
      .then(response => response.json())
      .then(data => {
        const container111 = document.getElementById("membergroups-container");
        // Borramos los datos antiguos
        container111.innerHTML = "";
        data.groups.forEach(group => {
          const groupDiv = document.createElement("div");
          groupDiv.classList.add("group-item");
          groupDiv.innerHTML = `
            <div class="group-property">  ${group.counter} Grupos Que soy miembro<br></div>
            
          `;
          container111.appendChild(groupDiv);
        });
      })
      .catch(error => {
        console.error("Error:", error);
      });
  }
 
  // Llamar a la función para obtener los datos del API
  getCharactersxxx();
</script>
';
?>
<div id="membergroups-container"></div>







</tbody>
          </table>
       
