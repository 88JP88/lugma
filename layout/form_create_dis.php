<?php
$id = $_GET['id'];
$profile = $_GET['profile'];
$my_profile = $_GET['my_profile'];

echo '<br><br><br><br><br><br>

<form method="post" action="controller/controller_post_dis.php?id='.$id.'&profile='.$profile.'&my_profile='.$my_profile.'">';
?>            

            <label for="dis">Título</label>
            <input type="text" id="dis" name="dis" placeholder="Nombre del grupo">
            
            <label for="con">Contenido:</label>
<textarea id="con" name="con" rows="4" cols="40"></textarea>

            
            


            <input type="submit" value="Agregar">
          </form>

          