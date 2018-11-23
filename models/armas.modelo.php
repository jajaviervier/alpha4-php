<?php 

require_once "conexion.php";

Class ModeloArmas {

	static public function listarArmasMdl($tabla) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();

	}

	static public function mdlCrearArmas($tabla, $datos) {
		//validacion registro existente
		$row_cnt=1;
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE marca = :marcaArmas");
		$sql->bindParam(":marcaArmas", $datos["marcaArmas"], PDO::PARAM_STR);
		$sql -> execute();		
				
//cuenta la cantidad de registros encotrados con el mismo nombre
		if(count($sql -> fetchAll())>0){
			return "2";
		}else{
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :marcaArmas, :modeloArmas, :calibreArmas, NOW())");
		$sql->bindParam(":marcaArmas", $datos["marcaArmas"], PDO::PARAM_STR);
		$sql->bindParam(":modeloArmas", $datos["modeloArmas"], PDO::PARAM_STR);
		$sql->bindParam(":calibreArmas", $datos["calibreArmas"], PDO::PARAM_STR);
		

		if( $sql -> execute() ) {
			return "1";
		} else {
			return "error";
		}
		}
	}



	static public function mdlEliminarArmas($tabla, $id_armas) {

		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$sql->bindParam(":id", $id_armas, PDO::PARAM_INT);

		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

	static public function mdlEditarArmas($tabla, $id_armas) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");
		$sql->bindParam(":id", $id_armas, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}

	static public function mdlActualizarArmas($tabla, $datos) {

	
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET marca = :marca, modelo = :modelo, calibre = :calibre WHERE id = :id");

			$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
			$sql->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
			$sql->bindParam(":calibre", $datos["calibre"], PDO::PARAM_STR);
		
			$sql->bindParam(":id", $datos["id_Armas"], PDO::PARAM_INT);
			
			
		
		
		
			if($sql->execute()) {
			return "ok";
		   } else {
			return "error";
		  }

	}

}


?>