
<table id="mailimportant-table" class="table table-striped">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
    <th>Acciones</th>
      <th>Destinatario</th>
      <th>Asunto</th>
      <th>Copia</th>
      <th>Contenido</th>
      <th>Categoría</th>
      
    </tr>
  </thead>
              <tbody>
             
	<?php
  require_once 'env/domain.php';
  $sub_domaincon=new model_dom;
  $sub_domain=$sub_domaincon->dom();
	echo '
	<script>
  const profileId11111x = sessionStorage.getItem("my_profile");
  const apiUrlqqqqx = `'.$sub_domain.'/lugmacore/apiCom/v1/getImportantMail/${profileId11111x}`;
 // Función para obtener los datos del API
 async function getCharactersqqqqx() {
	
	fetch(apiUrlqqqqx)
  .then(response => response.json())
  .then(data => {
    const membergroupsTableBody = document.querySelector("#mailimportant-table tbody");
    // Borramos los datos antiguos
    membergroupsTableBody.innerHTML = "";
    data.mail_constructor.forEach(mail => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td>
      <a class="btn btn-primary" href="controller/controller_put_category_mail.php?mail_id=${mail.general_id}&username=${profileId1111}&value=spam&profile_id=${id_profile}">Spam</a><br>
      <a class="btn btn-primary" href="controller/controller_put_category_mail.php?mail_id=${mail.general_id}&username=${profileId1111}&value=viewed&profile_id=${id_profile}">Leidos</a><br> 
           <a class="btn btn-primary" href="controller/controller_put_category_mail.php?mail_id=${mail.general_id}&username=${profileId1111}&value=inbox&profile_id=${id_profile}">Inbox</a><br>
     </td>
        <td>${mail.receiver_id}</td>
        <td>${mail.name}</td>
        
        <td>${mail.copy}</td>
        <td>${mail.content}</td>
        <td>${mail.category_id}</td>
        

        <td>
        <a class="btn btn-primary" href="controller/controller_put_category_mail.php?mail_id=${mail.general_id}&username=${profileId1111}&value=rec&profile_id=${id_profile}">Reciclar</a>  </td>
       
        
      `;
      membergroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 getCharactersqqqqx();
 


	</script>

';?>  






</tbody>
          </table>
       
