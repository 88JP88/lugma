<?php
session_start();
$_SESSION['current_version']="0.1.0-alpha";
require_once 'view/view_index.php';
?>