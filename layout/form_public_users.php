<?php
$id = $_GET['id'];
$profile = $_GET['profile'];
echo '



<form method="post" action="controller/controller_put_maker_groups_admin_moderator.php?id='.$id.'&profile='.$profile.'">
     
';

?>



 <label for="res1">Administrador/Moderador</label>
            
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
      option.value = user.profile;
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


           
<button type="submit" name="button1" value="value1">Admin</button>
  <button type="submit" name="button2" value="value2">Moder</button>
  
  <button type="submit" name="button3" value="value3">Miembro</button>
 </form>


          <div></div>
         

          