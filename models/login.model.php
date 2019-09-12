<?php 
require_once "conexion.php";
Class mdlLogin {
	public function mdlIniciarSesion($datos, $tabla){
		$sql = (new Conexion)->conectar()->prepare("SELECT id_usuario, nom_usuario, correo_usuario, rol_usuario FROM $tabla WHERE correo_usuario = :correoUsr AND pass_usuario = :passUsr");
		$sql -> bindParam(":correoUsr", $datos["nomUsr"], PDO::PARAM_STR);
		$sql -> bindParam(":passUsr", $datos["passUsr"], PDO::PARAM_STR);
		$sql -> execute();
		return $sql -> fetchAll();
	}
}

?>