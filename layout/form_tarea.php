<?php
$id = $_GET['id'];
$profile = $_GET['profile'];

echo '<div class="login"><script>
const apiUrl4 = `http://localhost/lugmacore/apiTools/v1/getPTasksById/' . $id . '/' . $profile . '`;
</script><div id="task-div" class="task-container"></div>';
echo '
  <script>

    // Función para obtener los datos del API
    async function getTasks() {
      fetch(apiUrl4)
        .then(response => response.json())
        .then(data => {
          // Generamos el HTML ordenado con los datos
          const tasksHTML = data.tasks.map(task => `
          
            <div class="task-card">
              <h3>${task.task}</h3>
              <p><strong>Inicio:</strong> ${task.start}</p>
              <p><strong>Fin:</strong> ${task.finish}</p>
              <p><strong>Creada:</strong> ${task.created}</p>
              <p><strong>Prioridad:</strong> ${task.priority}</p>
              <p><strong>Estado:</strong> ${task.status}</p>
              <a href="login.php" class="btn btn-secondary" data-toggle="modal" data-target="#modalEdtiTask">Editar</a>
              <a href="login.php" class="btn btn-secondary" data-toggle="modal" data-target="#modalStatusTask">Cambiar Estado</a>
              <a href="login.php" class="btn btn-secondary" data-toggle="modal" data-target="#modalDelTask">Eliminar/Ocultar Estado</a>
      
           
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

  </script></div>
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
</style>
