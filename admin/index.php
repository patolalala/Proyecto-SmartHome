<?php 
// Controllers
require_once "controllers/enrutamiento.controller.php";
require_once "controllers/template.controller.php";

// Models




error_reporting(0);
$template = new ControllerTemplate();
$template -> template();
?>