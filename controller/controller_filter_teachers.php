
<?php

session_start();
$word=$_POST['word'];
$type=$_POST['type'];

//$_SESSION['filter_student']=$word;


header ('Location: ../filtro_profesores.php?filter='.$word.'&type='.$type);

?>