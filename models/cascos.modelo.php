<?php 

require_once "conexion.php";

Class ModeloCascos {

	static public function listarCascosMdl($tabla) {

		$sql = Conexion::conectar()->prepare("SELECT * 
		FROM $tabla
		LEFT JOIN cascos ON id_cascoItem	= id_casco
		LEFT JOIN funcionario ON casco_funcionario = id_funcionario

		");
		$sql -> execute();
		return $sql -> fetchAll();

	}

	static public function mdlCrearCascos($tabla, $datos ) {
		//validacion registro existente
		$row_cnt=1;
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE serie = :serie");
		$sql->bindParam(":serie", $datos["serie"], PDO::PARAM_STR);
		$sql -> execute();		
				
//cuenta la cantidad de registros encotrados con el mismo nombre
		if(count($sql -> fetchAll())>0){
			return "2";
		}else{
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (null, :serie, :marca_modelo, :observacion, 0, '', now())");
		$sql->bindParam(":marca_modelo", $datos["marca_modelo"], PDO::PARAM_INT);
		$sql->bindParam(":observacion", $datos["observacion"], PDO::PARAM_STR);
		$sql->bindParam(":serie", $datos["serie"], PDO::PARAM_STR);

		if( $sql -> execute() ) {
			return "1";
		} else {
			return "error";
		}
		}
	}



	static public function mdlEliminarCascos($tabla, $id_cascos) {

		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_cascos = :id");

		$sql->bindParam(":id", $id_cascos, PDO::PARAM_INT);

		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

	static public function mdlEditarCascos($tabla, $id_cascos) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_cascos = :id");
		$sql->bindParam(":id", $id_cascos, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}

	static public function mdlActualizarCascos($tabla, $datos) {

	        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET id_casco = :marca_modelo, serie = :serie ,observacion = :observacion, estado_casco = :estado_casco, casco_funcionario = :casco_funcionario   WHERE id_cascos = :id");

			$sql->bindParam(":marca_modelo", $datos["marca_modelo"], PDO::PARAM_STR);
			$sql->bindParam(":serie", $datos["serie"], PDO::PARAM_STR);
			$sql->bindParam(":observacion", $datos["observacion"], PDO::PARAM_STR);
			$sql->bindParam(":estado_casco", $datos["estado_casco"], PDO::PARAM_STR);
			$sql->bindParam(":casco_funcionario", $datos["casco_funcionario"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_cascos"], PDO::PARAM_INT);


		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

}


?>
