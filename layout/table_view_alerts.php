
<table id="alert-table" class="table table-striped">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
    
      <th>ALERTA</th>
      <th>ESTADO</th>
      <th>FECHA DE ALERTA</th>
      <th>CREACION</th>
      <th>ACCIONES</th>
    </tr>
  </thead>
  

            <tbody>
             
            <?php 
            require_once 'env/domain.php';
            $sub_domaincon=new model_dom;
            $sub_domain=$sub_domaincon->dom();
            
            echo '<script>
  const profileId = sessionStorage.getItem("profile");
  const apiUrla = `'.$sub_domain.'/lugmacore/apiTools/v1/getAlert/${profileId}`;
</script>';?>
	
	<?php
	echo '
	<script>
		


 // Función para obtener los datos del API
 async function getCharacters1() {
	
	fetch(apiUrla)
  .then(response => response.json())
  .then(data => {
    const alertTableBody = document.querySelector("#alert-table tbody");
    // Borramos los datos antiguos
    alertTableBody.innerHTML = "";
    data.alerts.forEach(alert => {
      const row = document.createElement("tr");
      row.innerHTML = `
        
        <td>${alert.value}</td>
        
        <td>${alert.status}</td>
        <td>${alert.sdate}</td>
        <td>${alert.created}</td>
        
        <td><a class="btn btn-primary" href="controller/controller_put_alert.php?id=${alert.id}">Posponer</a>
        <a class="btn btn-secondary" href="controller/controller_del_alert.php?id=${alert.id}">Eliminar</a>
        <a class="btn btn-secondary" href="controller/controller_start_alert.php?id=${alert.id}">Reiniciar</a>
        </td>

        
      `;
      alertTableBody.appendChild(row);
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
       
