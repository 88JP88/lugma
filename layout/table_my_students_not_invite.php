
<table id="mystudentsnotinvite-table" class="table table-striped">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
    <th>Acciones</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Propietario</th>
      <th>Invitación</th>
      <th>Tipo</th>
      
      <th>Estado</th>
      <th>Activo</th>
     
    </tr>
  </thead>
  

            <tbody>
             
         
	
	<?php

require_once 'env/domain.php';
$sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
	echo '
	<script>
		
  //const my_profyle = sessionStorage.getItem("profile");
  const subdominio4 = `'.$sub_domain.'/lugmacore/apiResources/v1/allMyStudentsInviteNotResponse/${my_profyle}`;


 // Función para obtener los datos del API
 async function getStudentsNotInvite() {
	
	fetch(subdominio4)
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#mystudentsnotinvite-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.students.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td>
      <a class="btn btn-primary" href="group.php?student_id=${student.student_id}&my_profile=${student.profile_id}&owner_id=${student.owner_id}">Reenviar Invitación</a>
      <a class="btn btn-primary" href="group.php?student_id=${student.student_id}&my_profile=${student.profile_id}&owner_id=${student.owner_id}">Abrir</a>
        </td>
        <td>${student.name}</td>
        <td>${student.last_name}</td>
        <td>${student.owner_id}</td>
        <td>${student.invite}</td>
        <td>${student.type}</td>
        <td>${student.status}</td>
        <td>${student.is_active}</td>
       

        
       
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 getStudentsNotInvite();
 


	</script>

';?>  



<div id="publicgroups-container"></div>








</tbody>
          </table>
       
