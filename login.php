<?php

require_once 'view/view_login.php';
require_once 'env/domain.php';


   $sub_domaincon = new model_dom();
   $sub_domain = $sub_domaincon->dom();
   $_SESSION['domain']=$sub_domain;
?>
<footer>
		<p>Derechos reservados &copy; <?php 
    
    require_once 'version/version.php';
$version_view=new model_ver;
$version=$version_view->versioning();
    echo $ano_actual." <br>version ".$version;
    $_SESSION['current_version']=$version;
?></p>
	</footer>