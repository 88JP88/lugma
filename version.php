
<table id="alert-table" class="table table-striped">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
    
      <th>LugmaCore</th>
      <th></th>
      <th>ApiCom</th>
      <th></th>
      <th>ApiRepos</th>
      <th></th>
      <th>ApiTools</th>
      <th></th>
      <th>ApiUsers</th>
      <th></th>
      <th>ApiResources</th>
      <th></th>
      <th>ApiLugmacore</th>
    </tr>
  </thead>
  

            <tbody>
             
            <?php 
            require_once 'env/domain.php';
            $sub_domaincon=new model_dom;
            $sub_domain=$sub_domaincon->dom();
            
            echo '<script>
  const profileId = sessionStorage.getItem("profile");
  const apiUrla = `'.$sub_domain.'/lugmacore/apiLugmacore/v1/getInfo`;
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
    data.lugmacore_versions.forEach(alert => {
      const row = document.createElement("tr");
      row.innerHTML = `
        
    
        
        <td>${alert.lugmacore}</td>
        <td></td>
        <td>${alert.apiCom}</td>
        <td></td>
        <td>${alert.apiRepos}</td>
        <td></td>
        <td>${alert.apiTools}</td>
        <td></td>
        <td>${alert.apiUsers}</td>
        <td></td>
        <td>${alert.apiResources}</td>
        <td></td>
        <td>${alert.apiLugmacore}</td>
        
       

        
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
       
