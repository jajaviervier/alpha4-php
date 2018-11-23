<?php 

require_once "conexion.php";

Class ModeloPerfil {

	static public function listarPerfilMdl($tabla,$id_usuario) {

		


		$sql = Conexion::conectar()->prepare("SELECT * 
		FROM $tabla 
		ORDER BY idusuarios DESC
		 ");
		$sql->bindParam(":id", $id_usuario, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetchAll();
	}



}


?>