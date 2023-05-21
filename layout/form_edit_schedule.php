<?php
$id = $_GET['id'];
$day = $_GET['day'];
echo '
<br><br><br>
<form method="post" action="controller/controller_editar_horario.php?id=' . $id . '&day=' . $day . '">
<h3>Recuerde que los datos se reescribiran</h3>
  <label for="valor">Valor</label>
  <input type="text" id="valor" name="valor" placeholder="Ingresa tu usuario">
  <input type="submit" value="Ingresar">
</form>';
?>
