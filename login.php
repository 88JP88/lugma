<?php

require_once 'view/view_login.php';
require_once 'env/domain.php';


   $sub_domaincon = new model_dom();
   $sub_domain = $sub_domaincon->dom();
   $_SESSION['domain']=$sub_domain;
?>
?>