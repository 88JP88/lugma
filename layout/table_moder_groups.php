
<table id="modergroups-table" class="table table-striped">
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
	echo '
	<script>
		
  const profileId111 = sessionStorage.getItem("profile");
  const apiUrlqq = `http://localhost/lugmacore/apiTools/v1/getSubResponsibleGroups/${profileId111}`;


 // Función para obtener los datos del API
 async function getCharactersqq() {
	
	fetch(apiUrlqq)
  .then(response => response.json())
  .then(data => {
    const modergroupsTableBody = document.querySelector("#modergroups-table tbody");
    // Borramos los datos antiguos
    modergroupsTableBody.innerHTML = "";
    data.groups.forEach(group => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><a class="btn btn-primary" href="moder_groups.php?id=${group.id}&profile=${group.profile}" target="_blank">Administrar</a>
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
      modergroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 getCharactersqq();
 


	</script>

';?>  




<?php
echo '
<script>
  const profilexxx = sessionStorage.getItem("profile");
  const apiUrlxxx = `http://localhost/lugmacore/apiTools/v1/getGroupsLowCounter/${profilexxx}`;

  // Función para obtener los datos del API
  async function getCharactersxx() {
    fetch(apiUrlxxx)
      .then(response => response.json())
      .then(data => {
        const container11 = document.getElementById("modergroups-container");
        // Borramos los datos antiguos
        container11.innerHTML = "";
        data.groups.forEach(group => {
          const groupDiv = document.createElement("div");
          groupDiv.classList.add("group-item");
          groupDiv.innerHTML = `
            <div class="group-property">  ${group.counter} Grupos Moderados<br></div>
            
          `;
          container11.appendChild(groupDiv);
        });
      })
      .catch(error => {
        console.error("Error:", error);
      });
  }
 
  // Llamar a la función para obtener los datos del API
  getCharactersxx();
</script>
';
?>
<div id="modergroups-container"></div>





</tbody>
          </table>
       
