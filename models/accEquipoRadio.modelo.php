<?php 

require_once "conexion.php";

Class ModeloAccEquipoRadio {

	static public function listarAccEquipoRadioMdl($tabla) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();

	}

	static public function mdlCrearAccEquipoRadio($tabla, $datos) {
		//validacion registro existente
		$row_cnt=1;
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE serie = :marcaAccEquipoRadio");
		$sql->bindParam(":marcaAccEquipoRadio", $datos["marcaAccEquipoRadio"], PDO::PARAM_STR);
		$sql -> execute();		
				
//cuenta la cantidad de registros encotrados con el mismo nombre
		if(count($sql -> fetchAll())>0){
			return "2";
		}else{
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :marcaAccEquipoRadio, :modeloAccEquipoRadio, :calibreAccEquipoRadio, NOW())");
		$sql->bindParam(":marcaAccEquipoRadio", $datos["marcaAccEquipoRadio"], PDO::PARAM_STR);
		$sql->bindParam(":modeloAccEquipoRadio", $datos["modeloAccEquipoRadio"], PDO::PARAM_STR);
		$sql->bindParam(":calibreAccEquipoRadio", $datos["calibreAccEquipoRadio"], PDO::PARAM_STR);
		

		if( $sql -> execute() ) {
			return "1";
		} else {
			return "error";
		}
		}
	}



	static public function mdlEliminarAccEquipoRadio($tabla, $id_AccEquipoRadio) {

		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$sql->bindParam(":id", $id_AccEquipoRadio, PDO::PARAM_INT);

		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

	static public function mdlEditarAccEquipoRadio($tabla, $id_AccEquipoRadio) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");
		$sql->bindParam(":id", $id_AccEquipoRadio, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}

	static public function mdlActualizarAccEquipoRadio($tabla, $datos) {

	
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET serie = :marca, cantidad = :modelo, descripcion = :calibre WHERE id = :id");

			$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
			$sql->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
			$sql->bindParam(":calibre", $datos["calibre"], PDO::PARAM_STR);
		
			$sql->bindParam(":id", $datos["id_AccEquipoRadio"], PDO::PARAM_INT);
			
			
		
		
		
			if($sql->execute()) {
			return "ok";
		   } else {
			return "error";
		  }

	}

}


?>