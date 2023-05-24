
<table id="createdgroups-table" class="table table-striped">
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
		
  const profileId11111 = sessionStorage.getItem("profile");
  const apiUrlqqqq = `http://localhost/lugmacore/apiTools/v1/getCreatedGroups/${profileId11111}`;


 // Función para obtener los datos del API
 async function getCharactersqqqq() {
	
	fetch(apiUrlqqqq)
  .then(response => response.json())
  .then(data => {
    const createdgroupsTableBody = document.querySelector("#createdgroups-table tbody");
    // Borramos los datos antiguos
    createdgroupsTableBody.innerHTML = "";
    data.groups.forEach(group => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><a class="btn btn-primary" href="maker_groups.php?id=${group.id}&profile=${group.profile}" target="_blank">Administrar</a>
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
      createdgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 getCharactersqqqq();
 


	</script>

';?>  

<?php
echo '
<script>
  const profilex = sessionStorage.getItem("profile");
  const apiUrlx = `http://localhost/lugmacore/apiTools/v1/getGroupsMakerCounter/${profilex}`;

  // Función para obtener los datos del API
  async function getCharactersqqqqq() {
    fetch(apiUrlx)
      .then(response => response.json())
      .then(data => {
        const container = document.getElementById("createdgroups-container");
        // Borramos los datos antiguos
        container.innerHTML = "";
        data.groups.forEach(group => {
          const groupDiv = document.createElement("div");
          groupDiv.classList.add("group-item");
          groupDiv.innerHTML = `
            <div class="group-property">  ${group.counter} Grpos creados<br></div>
            
          `;
          container.appendChild(groupDiv);
        });
      })
      .catch(error => {
        console.error("Error:", error);
      });
  }
 
  // Llamar a la función para obtener los datos del API
  getCharactersqqqqq();
</script>
';
?>
<div id="createdgroups-container"></div>




</tbody>
          </table>
       
