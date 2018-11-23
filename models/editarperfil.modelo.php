<?php 

require_once "conexion.php";

Class ModeloUsuario {


		static public function mdlEditarPerfil($tabla, $id_usuario) {
		

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idusuarios = :id");
		$sql->bindParam(":id", $id_usuario, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}
     
	static public function mdlActualizarPerfil($tabla, $datos, $rutaImagen) {

		if( is_null($rutaImagen)) {
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET usuariosCorreo = :correo,usuariosNombre = :nombre,usuariosPass = :contrasena WHERE idusuarios = :id");

			$sql->bindParam(":contrasena", $datos["contraseña"], PDO::PARAM_STR);
			$sql->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
			$sql->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_usuario"], PDO::PARAM_INT);

		} else {
				$sql = Conexion::conectar()->prepare("UPDATE $tabla SET usuariosPass = MD5(:contrasena), usuariosCorreo = :correo,usuariosNombre = :nombre,usuariosAvatar = :rutaNueva WHERE idusuarios = :id");

			$sql->bindParam(":contrasena", $datos["contraseña"], PDO::PARAM_STR);
			$sql->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
			$sql->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_usuario"], PDO::PARAM_INT);
			$sql->bindParam(":rutaNueva", $rutaImagen, PDO::PARAM_STR);
		


		} 

		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}
}


?>