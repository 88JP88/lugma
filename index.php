<?php
session_start();
$_SESSION['current_version']="0.1.0-alpha";
require_once 'view/view_index.php';
require_once 'env/domain.php';


   $sub_domaincon = new model_dom();
   $sub_domain = $sub_domaincon->dom();
   $_SESSION['domain']=$sub_domain;
?>



<footer>
		<p>Derechos reservados &copy; <?php 
    $ano_actual = date('Y');
    require_once 'version/version.php';
$version_view=new model_ver;
$version=$version_view->versioning();
    echo $ano_actual." <br>version ".$version;
    $_SESSION['current_version']=$version;
?></p>
	</footer>