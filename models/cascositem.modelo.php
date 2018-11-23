<?php 

require_once "conexion.php";

Class ModeloCascositem {

	static public function listarCascositemMdl($tabla) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();

	}

	static public function mdlCrearCascositem($tabla, $datos) {
		//validacion registro existente
		$row_cnt=1;
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE modelo_item = :modelo_item AND marca_item = :marca_item ");
		$sql->bindParam(":modelo_item", $datos["modelo_item"], PDO::PARAM_STR);
		$sql->bindParam(":marca_item", $datos["marca_item"], PDO::PARAM_STR);
		$sql -> execute();		
				
//cuenta la cantidad de registros encotrados con el mismo nombre
		if(count($sql -> fetchAll())>0){
			return "2";
		}else{
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (DEFAULT, :marca_item, :modelo_item)");
		$sql->bindParam(":marca_item", $datos["marca_item"], PDO::PARAM_STR);
		$sql->bindParam(":modelo_item", $datos["modelo_item"], PDO::PARAM_STR);

		if( $sql -> execute() ) {
			return "1";
		} else {
			return "error";
		}
		}
	}



	static public function mdlEliminarCascositem($tabla, $id_cascos_item) {

		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_cascoItem = :id");

		$sql->bindParam(":id", $id_cascos_item, PDO::PARAM_INT);

		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

	static public function mdlEditarCascositem($tabla, $id_cascos_item) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_cascoItem = :id");
		$sql->bindParam(":id", $id_cascos_item, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}
	
	static public function mdlActualizarCascositem($tabla, $datos) {

	
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET marca_item = :marca_item, modelo_item = :modelo_item WHERE id_cascoItem = :id");

			$sql->bindParam(":marca_item", $datos["marca_item"], PDO::PARAM_STR);
			$sql->bindParam(":modelo_item", $datos["modelo_item"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_cascos_item"], PDO::PARAM_INT);


		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}


}
}


?>
