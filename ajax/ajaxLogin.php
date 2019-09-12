<?php
require_once "../controllers/login.controller.php";
require_once "../models/login.model.php";
Class ajaxLogin {
	// Propiedades
	public $_nomUsr;
	public $_passUsr;

	// Metodos
	public function ajaxIniciarSesion() {
		$datos = array(	"nomUsr"=>$this->_nomUsr,
						"passUsr"=>$this->_passUsr);
		$respuesta = (new ctrLogin)->ctrIniciarSesion($datos);
		if (count($respuesta) > 0 ) {
			foreach ($respuesta as $key => $value) {
				$_SESSION["idUser"] = $value["id_usuario"];
		        $_SESSION["mail"] = $value["correo_usuario"];
		        $_SESSION["nombre"] = $value["nom_usuario"];
		        $_SESSION["rol"] = $value["rol_usuario"];
		        $_SESSION["activo"] = "ok";
			}
			$respuesta = array("ok", $_SESSION["rol"]);
			echo json_encode($respuesta);

		} else {
			$respuesta = array("error");
			echo json_encode($respuesta);
		}
	}
}
$tipoOperacion = $_POST["tipoOperacion"];
if ($tipoOperacion == "iniciarSesion") {
	$iniciarSesion = (new ajaxLogin);
	$iniciarSesion -> _nomUsr = $_POST["nomUsr"];
	$iniciarSesion -> _passUsr = $_POST["passUsr"];
	$iniciarSesion -> ajaxIniciarSesion();
}


?>