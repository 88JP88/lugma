

  <table id="schedule-table" class="table table-striped">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
      <th>Time</th>
      <th>Mon</th>
      <th>Tue</th>
      <th>Wed</th>
      <th>Thu</th>
      <th>Fri</th>
      <th>Sat</th>
      <th>Sun</th>
    </tr>
  </thead>
  

            <tbody>
             
	<?php echo '<script>
  const userId = sessionStorage.getItem("user_id");
  const apiUrl = `http://localhost/lugmacore/apiTools/v1/getSchedule/${userId}`;
</script>';?>
	
	
	
	<?php
	echo '
	<script>
		


 // Función para obtener los datos del API
 async function getCharacters() {
	
	fetch(apiUrl)
  .then(response => response.json())
  .then(data => {
    const scheduleTableBody = document.querySelector("#schedule-table tbody");
    // Borramos los datos antiguos
    scheduleTableBody.innerHTML = "";
    data.sches.forEach(schedule => {
      const row = document.createElement("tr");
      row.innerHTML = `
        <td>${schedule.time}</td>
        <td>${schedule.mon}<br><a class="btn btn-secondary" href="editar_horario.php?id=${schedule.id}&day=mon">Editar</a></td>
        <td>${schedule.tus}<br><a class="btn btn-secondary" href="editar_horario.php?id=${schedule.id}&day=tus">Editar</a></td>
        <td>${schedule.wen}<br><a class="btn btn-secondary" href="editar_horario.php?id=${schedule.id}&day=wen">Editar</a></td>
        <td>${schedule.thu}<br><a class="btn btn-secondary" href="editar_horario.php?id=${schedule.id}&day=thu">Editar</a></td>
        <td>${schedule.fri}<br><a class="btn btn-secondary" href="editar_horario.php?id=${schedule.id}&day=fri">Editar</a></td>
        <td>${schedule.sat}<br><a class="btn btn-secondary" href="editar_horario.php?id=${schedule.id}&day=sat">Editar</a></td>
        <td>${schedule.sun}<br><a class="btn btn-secondary" href="editar_horario.php?id=${schedule.id}&day=sun">Editar</a></td>
      `;
      scheduleTableBody.appendChild(row);
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
       