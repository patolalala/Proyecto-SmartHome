<?php
Class ControllerEnrutamiento {
  public function enrutamiento(){
    $ruta = $_GET["ruta"];
    if ($ruta == "inicio" ||
        $ruta == "login" ||
        $ruta == "home" ||
        
        // Mantenedores
        $ruta == "oxyview" ||
        $ruta == "modulo" ||
        $ruta == "grupo" ||
        $ruta == "tipoSensor" ||
        $ruta == "tipoAlarma" ||
        $ruta == "paramCriticos" ||
        $ruta == "region" ||
        $ruta == "ciudad" ||
        $ruta == "usuario" ) {
      include "views/modulos/".$ruta.".php";
    } else {
      include "views/modulos/error404.php";
    }
  }
}
?>