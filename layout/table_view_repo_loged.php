
<table id="schedule1-table" class="table table-striped">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
    
      <th>repID</th>
      <th>TITULO</th>
      <th>INFO</th>
      <th>USER</th>
      <th>TYPE</th>
      <th>Acciones</th>
    </tr>
  </thead>
  

            <tbody>
             
	<?php
  
  require_once 'env/domain.php';
  $sub_domaincon=new model_dom;
  $sub_domain=$sub_domaincon->dom();
  echo '<script>const apiUrl1 = "'.$sub_domain.'/lugmacore/apiRepos/v1/get/'.$_SESSION['id'].'";</script>';?>
	
	
	
	<?php
	echo '
	<script>
		


 // Función para obtener los datos del API
 async function getCharacters1() {
	
	fetch(apiUrl1)
  .then(response => response.json())
  .then(data => {
    const scheduleTableBody = document.querySelector("#schedule1-table tbody");
    // Borramos los datos antiguos
    scheduleTableBody.innerHTML = "";
    data.repos.forEach(schedule => {
      const row = document.createElement("tr");
      row.innerHTML = `
        
        <td>${schedule.repository}</td>
        <td>${schedule.tittle}</td>
        <td><a class="styled-link" href="https://${schedule.info}" target="_blank">${schedule.info}</a></td>

        <td>${schedule.user}</td>
        <td>${schedule.type}</td>
        <td><a class="btn btn-primary" href="editar_repo.php?id=${schedule.repository}" target="_blank">Editar</a><a class="btn btn-secondary" href="controller/controller_del_repo.php?id=${schedule.repository}">Eliminar</a></td>

        
      `;
      scheduleTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 getCharacters1();
 


	</script>

';?>    </tbody>
          </table>
       
