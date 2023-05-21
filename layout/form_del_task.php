
<?php 
$id = $_GET['id'];


echo '<form method="post" action="controller/controller_put_task_del.php?id='.$id.'">

';

?>

                     
            <label for="val">Eliminar/Ocultar/Bloquear</label>
<select id="val" name="val">
  <option value="hide">Ocultar</option>
  <option value="del">Eliminar</option>
  <option value="blc">Bloquear</option>
  <option value="uhide">Mostrar</option>
  <option value="ublc">Desbloquear</option>
</select>

            <input type="submit" value="Enviar">
          </form>

          