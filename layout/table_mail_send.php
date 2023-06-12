
<table id="mailsend-table" class="table table-striped">
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
  const profileId11111 = sessionStorage.getItem("profile");
  const apiUrlqqqq = `'.$sub_domain.'/lugmacore/apiCom/v1/getSendMail/${profileId11111}`;
 // Función para obtener los datos del API
 async function getCharactersqqqq() {
	
	fetch(apiUrlqqqq)
  .then(response => response.json())
  .then(data => {
    const membergroupsTableBody = document.querySelector("#mailsend-table tbody");
    // Borramos los datos antiguos
    membergroupsTableBody.innerHTML = "";
    data.mail_constructor.forEach(mail => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td>
      <a class="btn btn-primary" href="mail_edition.php?mail_id=${mail.mail_id}&profile=${mail.sender_id}&my_profile=${profileId1111}" target="_blank">Spam</a><br>
      <a class="btn btn-primary" href="mail_edition.php?mail_id=${mail.mail_id}&profile=${mail.sender_id}&my_profile=${profileId1111}" target="_blank">Visto</a><br>
      <a class="btn btn-primary" href="mail_edition.php?mail_id=${mail.mail_id}&profile=${mail.sender_id}&my_profile=${profileId1111}" target="_blank">Importantes</a>
     
      </td>
        <td>${mail.receiver_id}</td>
        <td>${mail.name}</td>
        
        <td>${mail.copy}</td>
        <td>${mail.content}</td>
        <td>${mail.category_id}</td>
        

        <td>
        <a class="btn btn-primary" href="mail_edition.php?mail_id=${mail.mail_id}&profile=${mail.sender_id}&my_profile=${profileId1111}" target="_blank">Reciclar</a>
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
 getCharactersqqqq();
 


	</script>

';?>  






</tbody>
          </table>
       
