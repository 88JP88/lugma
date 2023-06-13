
<table id="mail-table" class="table table-striped">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
    <th>Acciones</th>
      <th>Remitente</th>
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
  const profileId1111 = sessionStorage.getItem("username");
  const id_profile = sessionStorage.getItem("my_profile");
  const apiUrlqqq = `'.$sub_domain.'/lugmacore/apiCom/v1/getInboxMail/${profileId1111}`;
 // Función para obtener los datos del API
 async function getCharactersqqq() {
	
	fetch(apiUrlqqq)
  .then(response => response.json())
  .then(data => {
    const membergroupsTableBody = document.querySelector("#mail-table tbody");
    // Borramos los datos antiguos
    membergroupsTableBody.innerHTML = "";
    data.mail_constructor.forEach(mail => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td>
      <a class="btn btn-primary" href="controller/controller_put_category_mail.php?mail_id=${mail.general_id}&username=${profileId1111}&value=spam&profile_id=${id_profile}">Spam</a><br>
      <a class="btn btn-primary" href="controller/controller_put_category_mail.php?mail_id=${mail.general_id}&username=${profileId1111}&value=viewed&profile_id=${id_profile}">Leidos</a><br> 
           <a class="btn btn-primary" href="controller/controller_put_category_mail.php?mail_id=${mail.general_id}&username=${profileId1111}&value=important&profile_id=${id_profile}">Importantes</a><br>
     </td>
        <td>${mail.sender_id}</td>
        <td>${mail.name}</td>
        
        <td>${mail.copy}</td>
        <td>${mail.content}</td>
        <td>${mail.category_id}</td>
        

        <td>
        <a class="btn btn-primary" href="controller/controller_put_category_mail.php?mail_id=${mail.general_id}&username=${profileId1111}&value=rec&profile_id=${id_profile}">Reciclar</a><br>
    </td>
       
        
      `;
      membergroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 getCharactersqqq();
 


	</script>

';?>  






</tbody>
          </table>
       
