<?php
$id = $_GET['id'];
$profile = $_GET['profile'];

echo '<br><br><br><br><br><br>

<form method="post" action="controller/controller_put_maker_groups.php?id='.$id.'&profile='.$profile.'">
<div class="login"><script>
const apiUrl4 = `http://localhost/lugmacore/apiTools/v1/getGroupById/' . $id . '/' . $profile . '`;
</script><div id="task-div" class="task-container"></div>';
echo '
  <script>

    // Función para obtener los datos del API
    async function getTasks() {
      fetch(apiUrl4)
        .then(response => response.json())
        .then(data => {
          // Generamos el HTML ordenado con los datos
          const tasksHTML = data.groups.map(group => `
          
            <div class="group-card">
            
              <h3>${group.id}</h3>
              <p><strong>Id Creador:</strong> ${group.profile}</p>
              <p><strong>Creador:</strong> ${group.maker}</p>
              <p><strong>Miembros:</strong> ${group.members}</p>
              <p><strong>Administrador:</strong> ${group.responsible_id}</p>
              <p><strong>Moderador:</strong> ${group.responsible_id2}</p>
              <p><strong>Grupo:</strong><input type="text" id="group" name="group" placeholder="Ingresa tu contraseña" value="${group.name}"></p>
              <p><strong>Descripción:</strong><input type="text" id="desp" name="desp" placeholder="Ingresa tu contraseña" value="${group.description}"></p>
              
              
              <p><strong>Estado:</strong><input type="text" id="sta" name="sta" placeholder="Ingresa tu contraseña" value="${group.status}"></p>
 
              <p><strong>Cantidad Max de Miembros:</strong><input type="text" id="qty" name="qty" placeholder="Ingresa tu contraseña" value="${group.qty}"></p>
              <p><strong>Público:</strong><input type="text" id="public" name="public" placeholder="Ingresa tu contraseña" value="${group.public}"></p>
              <p><strong>Auto unirse:</strong><input type="text" id="a_join" name="a_join" placeholder="Ingresa tu contraseña" value="${group.auto_join}"></p>
              
              <p><strong>Publicar libre:</strong><input type="text" id="a_public" name="a_public" placeholder="Ingresa tu contraseña" value="${group.public_add}"></p>
             
              <input type="submit" class="btn btn-primary" name="submit" value="Editar">
              <br>
 <a href="login.php" class="btn btn-secondary" data-toggle="modal" data-target="#groupsPublicUserModal">Administrador/Moderador</a><br>
 <a href="login.php" class="btn btn-secondary" data-toggle="modal" data-target="#groupsUserGroupModal">Usuarios</a><br>

 <a href="controller/controller_del_maker_groups.php?id='.$id.'&profile='.$profile.'" class="btn btn-secondary">Eliminar</a>

 
           
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

<style>
  .login {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .task-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
  }

  .task-card {
    margin: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 2px 2px 5px #ccc;
    width: 300px;
  }

  .task-card h3 {
    margin-top: 0;
  }

  .task-card p {
    margin: 0;
    font-size: 14px;
  }

  .task-card a {
    display: block;
    margin-top: 10px;
  }

  .btn {
    background-color: #007bff;
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
  }

  .btn:hover {
    background-color: #0069d9;
    color: #fff;
  }

  body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
}

.container {
  margin: 20px;
}

.forum-post {
  background-color: #f5f5f5;
  border: 1px solid #ddd;
  border-radius: 5px;
  margin-bottom: 20px;
  padding: 10px;
}

.forum-post h2 {
  margin-top: 0;
}

.post-info {
  color: #666;
  font-size: 14px;
}

.post-content {
  margin-top: 10px;
}

</style>


<!DOCTYPE html>
<html>
<head>
  <title>Foro</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <header>
    <h1>Foro de Discusión</h1>
  </header>

  <div class="container">
    <div class="forum-post">
      <h2>Título del tema</h2>
      <p class="post-info">Autor - Fecha de publicación</p>
      <p class="post-content">Contenido del mensaje del foro.</p>
    </div>

    <div class="forum-post">
      <h2>Título del tema</h2>
      <p class="post-info">Autor - Fecha de publicación</p>
      <p class="post-content">Contenido del mensaje del foro.</p>
    </div>

    <!-- Agrega más posts aquí -->

    <div class="forum-post">
      <h2>Título del tema</h2>
      <p class="post-info">Autor - Fecha de publicación</p>
      <p class="post-content">Contenido del mensaje del foro.</p>
    </div>
  </div>
</body>
</html>
