
<table id="admingroups-table" class="table table-striped">
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
		
  const profileId11 = sessionStorage.getItem("profile");
  const apiUrlq = `http://localhost/lugmacore/apiTools/v1/getResponsibleGroups/${profileId11}`;


 // Función para obtener los datos del API
 async function getCharactersq() {
	
	fetch(apiUrlq)
  .then(response => response.json())
  .then(data => {
    const admingroupsTableBody = document.querySelector("#admingroups-table tbody");
    // Borramos los datos antiguos
    admingroupsTableBody.innerHTML = "";
    data.groups.forEach(group => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><a class="btn btn-primary" href="controller/controller_put_alert.php?id=${alert.id}">Administrar</a>
      <a class="btn btn-secondary" href="controller/controller_del_alert.php?id=${alert.id}">Ingresar</a>
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
      admingroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 getCharactersq();
 


	</script>

';?> 



<?php
echo '
<script>
  const profilexx = sessionStorage.getItem("profile");
  const apiUrlxx = `http://localhost/lugmacore/apiTools/v1/getGroupsHighCounter/${profilexx}`;

  // Función para obtener los datos del API
  async function getCharactersx() {
    fetch(apiUrlxx)
      .then(response => response.json())
      .then(data => {
        const container1 = document.getElementById("admingroups-container");
        // Borramos los datos antiguos
        container1.innerHTML = "";
        data.groups.forEach(group => {
          const groupDiv = document.createElement("div");
          groupDiv.classList.add("group-item");
          groupDiv.innerHTML = `
            <div class="group-property">  ${group.counter} Grpos Administrados<br></div>
            
          `;
          container1.appendChild(groupDiv);
        });
      })
      .catch(error => {
        console.error("Error:", error);
      });
  }
 
  // Llamar a la función para obtener los datos del API
  getCharactersx();
</script>
';
?>
<div id="admingroups-container"></div>


</tbody>
          </table>
       
