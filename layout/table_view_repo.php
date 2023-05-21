
<table id="schedule1-table" class="table table-striped">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
    <th>ID</th>
      <th>repID</th>
      <th>TITULO</th>
      <th>INFO</th>
      <th>USER</th>
      <th>TYPE</th>
    </tr>
  </thead>
  

            <tbody>
             
	<?php echo '<script>const apiUrl1 = "http://localhost/lugmacore/apiRepos/v1/get/'.$_SESSION['id'].'";</script>';?>
	
	
	
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
        <td>${schedule.id}<a class="dropdown-item" href="#">Tareas</a></td>
        <td>${schedule.repository}</td>
        <td>${schedule.tittle}</td>
        <td>${schedule.info}</td>
        <td>${schedule.user}</td>
        <td>${schedule.type}</td>
        <td>${schedule.user_id}</td>
        <td>${schedule.username}</td>
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
       
