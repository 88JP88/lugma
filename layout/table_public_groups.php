
<table id="publicgroups-table" class="table table-striped">
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
		
  const profileId1111q = sessionStorage.getItem("profile");
  const apiUrlqqqz = `http://localhost/lugmacore/apiTools/v1/getPublicGroups/${profileId1111q}`;


 // Función para obtener los datos del API
 async function getCharactersqqqz() {
	
	fetch(apiUrlqqqz)
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#publicgroups-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.groups.forEach(group => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td>
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
      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 getCharactersqqqz();
 


	</script>

';?>  



<?php
echo '
<script>
  const profilexxxw = sessionStorage.getItem("profile");
  const apiUrlxxxw = `http://localhost/lugmacore/apiTools/v1/getGroupsPublicCounter/${profilexxxw}`;

  // Función para obtener los datos del API
  async function getCharactersxxw() {
    fetch(apiUrlxxxw)
      .then(response => response.json())
      .then(data => {
        const container11w = document.getElementById("publicgroups-container");
        // Borramos los datos antiguos
        container11w.innerHTML = "";
        data.groups.forEach(group => {
          const groupDiv = document.createElement("div");
          groupDiv.classList.add("group-item");
          groupDiv.innerHTML = `
            <div class="group-property">  ${group.counter} Grupos Públicos<br></div>
            
          `;
          container11w.appendChild(groupDiv);
        });
      })
      .catch(error => {
        console.error("Error:", error);
      });
  }
 
  // Llamar a la función para obtener los datos del API
  getCharactersxxw();
</script>
';
?>
<div id="publicgroups-container"></div>








</tbody>
          </table>
       
