<?php
$id = $_GET['id'];
$profile = $_GET['profile'];
require_once 'env/domain.php';
$sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
echo '<br><br><br><br><br><br>

<form method="post" action="controller/controller_put_admin_groups.php?id='.$id.'&profile='.$profile.'">
<div class="login"><script>
const apiUrl4 = `'.$sub_domain.'/lugmacore/apiTools/v1/getModerGroupById/' . $id . '/' . $profile . '`;
</script><div id="task-div" class="task-container"></div>';
echo '
  <script>

    // Función para obtener los datos del API
    async function getTasks() {
      fetch(apiUrl4)
        .then(response => response.json())
        .then(data => {
          // Generamos el HTML ordenado con los datos
          const tasksHTML = data.group_constructor.map(group => `
          
            <div class="group-card">
            
              <h3>${group.id}</h3>
              <p><strong>Id Creador:</strong> ${group.profile}</p>
              <p><strong>Creador:</strong> ${group.profile}</p>
              <p><strong>Miembros:</strong> ${group.members}</p>
              <p><strong>Administrador:</strong> ${group.responsible_id}</p>
              <p><strong>Moderador:</strong> ${group.responsible_id2}</p>
              <p><strong>Grupo:</strong> ${group.name}</p>
              <p><strong>Descripción: ${group.description}</p>
              
              
              <p><strong>Estado:</strong> ${group.status}</p>
 
              <p><strong>Cantidad Max de Miembros:</strong> ${group.qty}</p>
              <p><strong>Público:</strong> ${group.public}</p>
              <p><strong>Auto unirse:</strong> ${group.auto_join}</p>
              
              <p><strong>Publicar libre:</strong> ${group.public_add}</p>
             
               <br>
  <a href="login.php" class="btn btn-secondary" data-toggle="modal" data-target="#groupsUserGroupModal">Usuarios</a><br>

 
 
           
              </div>
              
          `).join("");

          // Mostramos el HTML ordenado en la página
          const personalTasks = document.querySelector("#task-div");
          personalTasks.innerHTML = tasksHTML;
        })
        .catch(error => {
          console.error("Error:", error);
        });
    }

    // Llamamos a la función para obtener los datos del API
    getTasks();

  </script></div></form>
';
?>
