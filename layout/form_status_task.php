
<?php 
$id = $_GET['id'];


echo '<form method="post" action="controller/controller_put_task_status.php?id='.$id.'">

';

?>

                     
            <label for="prior">Estado</label>
<select id="prior" name="prior">
  <option value="created">Creado</option>
  <option value="in_progress">En progreso</option>
  <option value="bloqued">Bloqueado</option>
  <option value="pause">Pausa</option>
  <option value="finished">Finalizado</option>
  <option value="closed">Cerrado</option>
</select>

            <input type="submit" value="Cambiar Estado">
          </form>

          