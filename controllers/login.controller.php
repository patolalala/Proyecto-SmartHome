<?php 
Class ctrLogin {
	public function ctrIniciarSesion($datos){
		$tabla = "usuario";
		$respuesta = (new mdlLogin)->mdlIniciarSesion($datos, $tabla);
		return $respuesta;
	}
}

?>