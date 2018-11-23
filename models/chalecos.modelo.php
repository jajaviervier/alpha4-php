<?php 

require_once "conexion.php";

Class ModeloChalecos {

	static public function listarChalecosMdl($tabla) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();

	}

	static public function mdlCrearChalecos($tabla, $datos) {
		//validacion registro existente
		$row_cnt=1;
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE marca = :escudoMarca");
		$sql->bindParam(":escudoMarca", $datos["escudoMarca"], PDO::PARAM_STR);
		$sql -> execute();		
				
//cuenta la cantidad de registros encotrados con el mismo nombre
		if(count($sql -> fetchAll())>0){
			return "2";
		}else{
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :marca, :modelo)");
		$sql->bindParam(":marca", $datos["escudoMarca"], PDO::PARAM_STR);
		$sql->bindParam(":modelo", $datos ["escudoModelo"], PDO::PARAM_STR);
		if( $sql -> execute() ) {
			return "1";
		} else {
			return "error";
		}
		}
	}

/* Con el id obtenido validamos con la id_Chalecos y elminamos el escudo */


	static public function mdlEliminarChalecos($tabla, $id_Chalecos) {

		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_Chalecos = :id");

		$sql->bindParam(":id", $id_Chalecos, PDO::PARAM_INT);

		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}
/* Con el id obtenido validamos con la id_Chalecos y editamos el escudo */

	static public function mdlEditarChalecos($tabla, $id_Chalecos) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_Chalecos = :id");
		$sql->bindParam(":id", $id_Chalecos, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}
/* Con el id obtenido validamos con la id_Chalecos y actualizamos el escudo */

	static public function mdlActualizarChalecos($tabla, $datos) {

		
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET marca = :escudoMarca, modelo = :escudoModelo WHERE id_Chalecos = :id");

			$sql->bindParam(":escudoMarca", $datos["escudoMarca"], PDO::PARAM_STR);
			$sql->bindParam(":escudoModelo", $datos["escudoModelo"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_Chalecos"], PDO::PARAM_INT);

			
		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

}


?>