<?php
$id = $_GET['id'];
$profile = $_GET['profile'];
$my_profile = $_GET['my_profile'];



echo '<script>



  const domain = "' . $_SESSION["domain"] . '";
  sessionStorage.setItem("domain", domain);

</script>';



require_once 'env/domain.php';
$sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
echo '<br><br><br><br><br><br>
<div id="schedule-div"></div>
<div id="schedule-div2"></div>
<script>
const apiUrl11 = "'.$sub_domain.'/lugmacore/apiUsers/v1/getByProfile/'.$profile.'";</script><div id="task-div" class="task-container"></div>';

echo '<script>
        // Función para obtener los datos del API
        async function getCharacters11() {
            fetch(apiUrl11)
            .then(response => response.json())
            .then(data => {
                const userData = data.users[0];
                sessionStorage.setItem("profile", userData.profile);
    
                // Mostrar los datos en la pantalla
                const scheduleDiv1 = document.querySelector("#schedule-div");
                scheduleDiv1.innerHTML = `
                `;
            })
            .catch(error => {
                console.error("Error:", error);
            });
        }
    
        // Llamar a la función para obtener los datos del API
        getCharacters11();
    </script>
';
?>


<?php
$id = $_GET['id'];
$profile = $_GET['profile'];
$my_profile = $_GET['my_profile'];

echo '
<script>
const apiUrl11g = "'.$sub_domain.'/lugmacore/apiUsers/v1/getMyProfileByProfile/'.$my_profile.'";</script>';

echo '<script>
        // Función para obtener los datos del API
        async function getCharacters11g() {
            fetch(apiUrl11g)
            .then(response => response.json())
            .then(data => {
                const userDatag = data.users[0];
                sessionStorage.setItem("my_profile", userDatag.profile);
    
                // Mostrar los datos en la pantalla
                const scheduleDiv1 = document.querySelector("#schedule-div");
                scheduleDiv1.innerHTML = `
                `;
            })
            .catch(error => {
                console.error("Error:", error);
            });
        }
    
        // Llamar a la función para obtener los datos del API
        getCharacters11g();
    </script>
';
?>
<?php
$id = $_GET['id'];
$profile = $_GET['profile'];

echo '
<script>
const apiUrl111 = "'.$sub_domain.'/lugmacore/apiTools/v1/getGroupInfo/'.$id.'";</script><div id="task-div" class="task-container"></div>';

echo '<script>
        // Función para obtener los datos del API
        async function getCharacters111() {
            fetch(apiUrl111)
            .then(response => response.json())
            .then(data => {
                const userData1 = data.group_constructor[0];
                sessionStorage.setItem("group_id", userData1.id);
                sessionStorage.setItem("group_name", userData1.name);
                sessionStorage.setItem("maker_id", userData1.profile);
                sessionStorage.setItem("status", userData1.status);
                sessionStorage.setItem("auto_join", userData1.auto_join);
                sessionStorage.setItem("public_add", userData1.public_add);
                sessionStorage.setItem("description", userData1.description);
                sessionStorage.setItem("members", userData1.members);
                
    
                // Mostrar los datos en la pantalla
                const scheduleDiv = document.querySelector("#schedule-div");
                scheduleDiv.innerHTML = `
                <h4 align="center">${userData1.id}</h4>
                <h5 align="center">Grupo: ${userData1.name}</h5>
                <h5 align="center">Desripción: ${userData1.description}</h5>
               
                <h5 align="center">Creador: ${userData1.username}</h5>
                <h5 align="center">Miembros: ${userData1.members}</h5>
                <h5 align="center">Auto añadir: ${userData1.auto_join}</h5>
                <h5 align="center">Auto publicar: ${userData1.public_add}</h5>
              
                   `;
            })
            .catch(error => {
                console.error("Error:", error);
            });
        }
    
        // Llamar a la función para obtener los datos del API
        getCharacters111();
    </script>
';
?>
<?php
$id = $_GET['id'];
$profile = $_GET['profile'];

echo '<br>
<div id="schedule-div"></div>
<script>
const apiUrl1111 = "'.$sub_domain.'/lugmacore/apiTools/v1/getGroupInfoUser/'.$id.'/'.$profile.'";</script><div id="task-div" class="task-container"></div>';

echo '<script>
        // Función para obtener los datos del API
        async function getCharacters1111() {
            fetch(apiUrl1111)
            .then(response => response.json())
            .then(data => {
                const userData3 = data.groups[0];
                sessionStorage.setItem("added_to_group", userData3.counter_group_user);
    
                // Mostrar los datos en la pantalla
                const scheduleDiv2 = document.querySelector("#schedule-div2");
                scheduleDiv2.innerHTML = `
                `;
            })
            .catch(error => {
                console.error("Error:", error);
            });
        }
    
        // Llamar a la función para obtener los datos del API
        getCharacters1111();
    </script>
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
.post-content {
    display: none;
  }
  .expanded {
    display: block;
  }
</style>


<ul class="navbar-nav">

<script>
					

          if (auto_add === "1" && lnameValue3 === "1" || lnameValue3 === "2") {

            const id_grupo = sessionStorage.getItem("group_id");// Valor del ID que deseas obtener
  const profile_id = sessionStorage.getItem("profile");
  const my_profile_id = sessionStorage.getItem("my_profile");
  const sub_domain=sessionStorage.getItem("domain");
  const apiUrn = `${sub_domain}/lugmacore/apiTools/v1/getDis/${id_grupo}`;

  // Función para obtener los datos del API
  async function getCharactersn() {
    try {
      const response = await fetch(apiUrn);
      const data = await response.json();
      const discs = data.discs;

      // Generar el código HTML para cada grupo
      let html = "";
      discs.forEach(disc => {
        html += `<div class="container">
          
        </div>
        <div class="container">
          <div class="forum-post">
            <h2>${disc.name}  <a class="btn btn-secondary" href="discussion.php?group_id=${disc.group_id}&profile=${profile_id}&dis_id=${disc.id}&my_profile=${my_profile_id}" target="_blank">Abrir</a></td>
       
         </h2>
            <p class="post-info">${disc.maker} - ${disc.public_date}</p>
            <p class="post-content">${disc.content}</p>
            <button class="expand-button" onclick="toggleContent(this)">Expandir</button>
          </div>
        </div>`;
      });

      // Insertar el código HTML en el documento
      const scheduleDiv = document.querySelector("#schedulez-div");
      scheduleDiv.innerHTML = html;
    } catch (error) {
      console.error("Error:", error);
    }
    
  }
 
  // Llamar a la función para obtener los datos del API
  getCharactersn();

  
            
       
    }


    if (auto_add === "0" && lnameValue3 === "1" || lnameValue3 === "2") {
      const id_grupo = sessionStorage.getItem("group_id");// Valor del ID que deseas obtener
  const profile_id = sessionStorage.getItem("profile");
  const my_profile_id = sessionStorage.getItem("my_profile");
  const apiUrn = `${sub_domain}/lugmacore/apiTools/v1/getDis/${id_grupo}`;

  // Función para obtener los datos del API
  async function getCharactersn() {
    try {
      const response = await fetch(apiUrn);
      const data = await response.json();
      const discs = data.discs;

      // Generar el código HTML para cada grupo
      let html = "";
      discs.forEach(disc => {
        html += `<div class="container">
          
        </div>
        <div class="container">
          <div class="forum-post">
            <h2>${disc.name}  <a class="btn btn-secondary" href="discussion.php?group_id=${disc.group_id}&profile=${profile_id}&dis_id=${disc.id}&my_profile=${my_profile_id}" target="_blank">Abrir</a></td>
       
         </h2>
            <p class="post-info">${disc.maker} - ${disc.public_date}</p>
            <p class="post-content">${disc.content}</p>
            <button class="expand-button" onclick="toggleContent(this)">Expandir</button>
          </div>
        </div>`;
      });

      // Insertar el código HTML en el documento
      const scheduleDiv = document.querySelector("#scheduley-div");
      scheduleDiv.innerHTML = html;
    } catch (error) {
      console.error("Error:", error);
    }
    
  }
 
  // Llamar a la función para obtener los datos del API
  getCharactersn();

  
            
       

    }
	
	
    function toggleContent(button) {
    var postContent = button.previousElementSibling;
    postContent.classList.toggle("expanded");
    if (button.innerHTML === "Expandir") {
      button.innerHTML = "Contraer";
    } else {
      button.innerHTML = "Expandir";
    }
  }
	
</script>




<div id="schedulez-div"></div>



  </ul>
    <!-- Agrega más posts aquí -->

  
    