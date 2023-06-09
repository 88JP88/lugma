

  <table id="personalt-table" class="table table-striped">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
      <th>Tarea</th>
      <th>Inicio</th>
      <th>Final</th>
      <th>Creación</th>
      <th>Prioridad</th>
      <th>Estado</th>
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
  const apiUrl2 = `'.$sub_domain.'/lugmacore/apiTools/v1/getPTasks/${prof}`;
</script>';?>
	
	
	
	<?php
	echo '
	<script>
		


 // Función para obtener los datos del API
 async function getCharacters() {
	
	fetch(apiUrl2)
  .then(response => response.json())
  .then(data => {
    const personaltTableBody = document.querySelector("#personalt-table tbody");
    // Borramos los datos antiguos
    personaltTableBody.innerHTML = "";
    data.tasks.forEach(task => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td>${task.task}</td>
        <td>${task.start}</td>
        <td>${task.finish}</td>
        <td>${task.created}</td>
        <td>${task.priority}</td>
        <td>${task.status}</td>
        <td><a class="btn btn-secondary" href="tarea.php?id=${task.id}&profile=${task.profile}" target="_blank">Abrir</a></td>
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
       