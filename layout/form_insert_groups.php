<form method="post" action="controller/controller_post_groups.php?">
            

            <label for="group">Grupo</label>
            <input type="text" id="group" name="group" placeholder="Nombre del grupo">
            
            <label for="desp">Descripción</label>
            <input type="text" id="desp" name="desp" placeholder="Descripción del grupo">
            
            <label for="qty">Cantidad maxima de integrantes</label>
            <input type="text" id="qty" name="qty" placeholder="Cantidad máxima">
            <label for="res1">Administrador</label>
            
<?php
echo '<script>const apiUrl2q = "http://localhost/lugmacore/apiUsers/v1/getPublicUsers";</script>';
?>

<select id="reposq-select" class="btn btn-secondary" name="res1"></select>
<option value=""></option>
<?php
echo '
	<script>

 // Función para obtener los datos del API
 async function getCharacters2q() {

  const reposSelect = document.getElementById("reposq-select");

	fetch(apiUrl2q)
  .then(response => response.json())
  .then(data => {
    data.users.forEach(user => {
      const option = document.createElement("option");
      option.value = user.user_id;
      option.text = ""+user.username+" - "+user.name+" "+user.last_name;
      reposSelect.add(option);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });

 }

 // Llamar a la función para obtener los datos del API
 getCharacters2q();

	</script>
';
?>


            <label for="res2">Moderador</label>
            

<select id="reposqq-select" class="btn btn-secondary" name="res2"></select>

<?php
echo '
	<script>

 // Función para obtener los datos del API
 async function getCharacters2q() {

  const reposSelect = document.getElementById("reposqq-select");

	fetch(apiUrl2q)
  .then(response => response.json())
  .then(data => {
    data.users.forEach(user => {
      const option = document.createElement("option");
      option.value = user.username;
      option.text = ""+user.username+" - "+user.name+" "+user.last_name;
      reposSelect.add(option);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });

 }

 // Llamar a la función para obtener los datos del API
 getCharacters2q();

	</script>
';
?>


            <input type="submit" value="Agregar">
          </form>

          