
<?php

session_start();
$word=$_POST['word'];
$type=$_POST['type'];

//$_SESSION['filter_student']=$word;


header ('Location: ../filtro_coordinadores.php?filter='.$word.'&type='.$type);

?>