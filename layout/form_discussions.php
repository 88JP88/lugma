<?php
$id = $_GET['group_id'];
$profile = $_GET['profile'];
$dis_id = $_GET['dis_id'];

echo '<br><br><br><br><br><br>
<div id="schedule-div"></div>

<script>
const apiUrv = "http://localhost/lugmacore/apiUsers/v1/getByProfile/'.$profile.'";</script><div id="task-div" class="task-container"></div>';

echo '<script>
        // Función para obtener los datos del API
        async function getCharactersv() {
            fetch(apiUrv)
            .then(response => response.json())
            .then(data => {
                const userData = data.users[0];
                sessionStorage.setItem("name", userData.name);
                sessionStorage.setItem("last_name", userData.last_name);
                sessionStorage.setItem("username", userData.username);
                sessionStorage.setItem("contact", userData.contact);
                sessionStorage.setItem("rol", userData.rol);
                sessionStorage.setItem("user_id", userData.user_id);
                sessionStorage.setItem("profile", userData.profile);
                sessionStorage.setItem("days", userData.days);
                sessionStorage.setItem("image", userData.image);
    
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
        getCharactersv();
    </script>
';
?>
<?php
$id = $_GET['group_id'];
$profile = $_GET['profile'];
$dis_id = $_GET['dis_id'];

echo '
<script>
const apiUrl111 = "http://localhost/lugmacore/apiTools/v1/getGroupInfo/'.$id.'";</script><div id="task-div" class="task-container"></div>';

echo '<script>
        // Función para obtener los datos del API
        async function getCharacters111() {
            fetch(apiUrl111)
            .then(response => response.json())
            .then(data => {
                const userData1 = data.groups[0];
                sessionStorage.setItem("group_id", userData1.id);
                sessionStorage.setItem("group_name", userData1.name);
                sessionStorage.setItem("maker_id", userData1.profile);
                sessionStorage.setItem("status", userData1.status);
                sessionStorage.setItem("auto_join", userData1.auto_join);
                sessionStorage.setItem("public_add", userData1.public_add);
                sessionStorage.setItem("description", userData1.description);
                sessionStorage.setItem("members", userData1.members);
                sessionStorage.setItem("maker", userData1.maker);
    
                // Mostrar los datos en la pantalla
                const scheduleDiv = document.querySelector("#schedule-div");
                scheduleDiv.innerHTML = `
                <div class="comment" data-comment-id="userData1.id">
               
                <h5 align="center">Grupo: ${userData1.name}</h5>
                <h5 align="center">Desripción: ${userData1.description}</h5>
               
             
              </div>
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
$id = $_GET['group_id'];
$profile = $_GET['profile'];
$dis_id = $_GET['dis_id'];

echo '
<div id="scheduleb-div"></div>
<script>
const apiUrl111v = "http://localhost/lugmacore/apiTools/v1/getDisById/'.$dis_id.'";</script><div id="task-div" class="task-container"></div>';

echo '<script>
        // Función para obtener los datos del API
        async function getCharacters111v() {
            fetch(apiUrl111v)
            .then(response => response.json())
            .then(data => {
                const disc = data.discs[0];
               
    
                // Mostrar los datos en la pantalla
                const scheduleDiv = document.querySelector("#scheduleb-div");
                scheduleDiv.innerHTML = `
               
       
            <h2>${disc.name}</td>
       
         </h2>
            <p class="post-info">${disc.maker} - ${disc.public_date}</p>
            <p class="post-content">${disc.content}</p>
            <button class="expand-button" onclick="toggleContent(this)">Expandir</button>
          
        
                   `;
            })
            .catch(error => {
                console.error("Error:", error);
            });
        }
    
        // Llamar a la función para obtener los datos del API
        getCharacters111v();
    </script>
';
?>


<?php
$id = $_GET['group_id'];
$profile = $_GET['profile'];
$dis_id = $_GET['dis_id'];

echo '
<div id="schedule-div"></div>
<script>
const apiUrl1111 = "http://localhost/lugmacore/apiTools/v1/getGroupInfoUser/'.$id.'/'.$profile.'";</script><div id="task-div" class="task-container"></div>';

echo '<script>
        // Función para obtener los datos del API
        async function getCharacters1111() {
            fetch(apiUrl1111)
            .then(response => response.json())
            .then(data => {
                const userData3 = data.groups[0];
                sessionStorage.setItem("added_to_group", userData3.counter_group_user);
    
                // Mostrar los datos en la pantalla
                const scheduleDiv1 = document.querySelector("#schedule-div");
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
					

     
    if (auto_add === "0" && lnameValue3 === "1") {
        document.write(`
        <div class="container">
  <div class="forum-post">
  <a href="login.php" class="dropdown-item" data-toggle="modal" data-target="#groupsModal">Grupos</a>
      
  </div>
</div>
<div class="container">
  <div class="forum-post">
    <h2>Título del tema</h2>
    <p class="post-info">Autor - Fecha de publicación</p>
    <p class="post-content">Contenido del mensaje del foro.</p>
    <button class="expand-button" onclick="toggleContent(this)">Expandir</button>
  </div>
</div>
        `);
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

<script>

var group_id = <?php echo json_encode($id); ?>;
  var profile = <?php echo json_encode($profile); ?>;
  var dis_id = <?php echo json_encode($dis_id); ?>;

  // Usar las variables en JavaScript
 
  const id_grupo = sessionStorage.getItem("group_id");// Valor del ID que deseas obtener
  const profile_id = sessionStorage.getItem("profile");
 const apiUrn = `http://localhost/lugmacore/apiTools/v1/getComments/${dis_id}`;

  // Función para obtener los datos del API
  async function getCharactersn() {
    try {
      const response = await fetch(apiUrn);
      const data = await response.json();
      const comms = data.comms;

      // Generar el código HTML para cada grupo
      let html = "";
      comms.forEach(comm => {
        html += `

        <div id="schedulez-div"></div>
        <div class="container">
          <div class="forum-post">
          <p class="post-info">${comm.maker} - ${comm.public_date}</p>
         
            <h4>${comm.comment}</td>
       
         </h4>
         
              
            <p class="post-content">${comm.content}
            
            <button class="reaction-button" onclick="reactToComment(${comm.id}, 'like')">LIKE</button>
      <button class="reaction-button" onclick="reactToComment(${comm.id}, 'heart')">CORAZÓN</button>
      <button class="reaction-button" onclick="reactToComment(${comm.id}, 'laugh')">RISA</button>
  
            </p>

            <button class="expand-button" onclick="toggleContent(this)">Expandir</button>
          </div>
        </div>
        `;
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
</script>




  </ul>
    <!-- Agrega más posts aquí -->

  
    <!DOCTYPE html>
<html>
<head>
  <title>Comentarios</title>
  <style>
    .comment {
      margin-bottom: 20px;
      padding-left: 20px;
      border-left: 2px solid #ccc;
    }

    .comment-content {
      margin-bottom: 10px;
    }

    .reactions {
      margin-top: 10px;
    }

    .reaction {
      display: inline-block;
      margin-right: 10px;
      cursor: pointer;
    }
  </style>
</head>
<body>
 

  <div class="add-comment">
     <?php
$id = $_GET['group_id'];
$profile = $_GET['profile'];
$dis_id = $_GET['dis_id'];
$my_profile = $_GET['my_profile'];
echo'
<form method="post" action="controller/controller_post_comment.php?group_id='.$id.'&profile='.$profile.'&dis_id='.$dis_id.'&my_profile='.$my_profile.'">

<input type="text" id="comment" name="comment" placeholder="Agregar comentario">
<input type="submit" value="Ingresar" class="btn btn-primary">
</form>
';
?>
  </div>

  <script>
    // Datos de ejemplo
    const comments = [
      {
        id: 1,
        content: "Primer comentario",
        reactions: {
          like: 0,
          love: 0,
          laugh: 0
        }
      },
      {
        id: 2,
        content: "Segundo comentario",
        reactions: {
          like: 0,
          love: 0,
          laugh: 0
        }
      }
    ];

    // Función para generar el HTML de un comentario
    

    // Función para agregar un nuevo comentario
    function addComment() {
      const input = document.querySelector("#new-comment-input");
      const content = input.value.trim();

      if (content !== "") {
        const newComment = {
          id: comments.length + 1,
          content: content,
          reactions: {
            like: 0,
            love: 0,
            laugh: 0
          }
        };

        comments.push(newComment);
        const newCommentHTML = generateCommentHTML(newComment);

        const commentsContainer = document.querySelector("#comments-container");
        commentsContainer.innerHTML += newCommentHTML;

        input.value = "";
      }
    }

    // Función para reaccionar a un comentario
    function reactToComment(commentId, reaction) {
      const comment = findCommentById(commentId);
      if (comment) {
        comment.reactions[reaction] += 1;

        const commentElement = document.querySelector(`.comment[data-comment-id="${commentId}"]`);
        const reactionElement = commentElement.querySelector(`.reaction[data-reaction="${reaction}"]`);
        reactionElement.textContent = `${getReactionEmoji(reaction)} (${comment.reactions[reaction]})`;
      }
    }

    // Función para encontrar un comentario por su ID
    function findCommentById(commentId) {
      for (let i = 0; i < comments.length; i++) {
        const comment = comments[i];
        if (comment.id === commentId) {
          return comment;
        }
      }
      return null;
    }

    // Función para obtener el emoji de una reacción
    function getReactionEmoji(reaction) {
      switch (reaction) {
        case 'like':
          return '👍';
        case 'love':
          return '❤️';
        case 'laugh':
          return '😄';
        default:
          return '';
      }
    }

    // Generar el HTML del hilo de comentarios
    let commentsHTML = "";
    comments.forEach(comment => {
      commentsHTML += generateCommentHTML(comment);
    });

    // Insertar el HTML en el contenedor
    const commentsContainer = document.querySelector("#comments-container");
    commentsContainer.innerHTML = commentsHTML;
  </script>
</body>
</html>
