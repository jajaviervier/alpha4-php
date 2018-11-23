<?php

require_once "conexion.php";

Class ModelocrearAcc {

	static public function listarcrearAccMdl($tabla) {

		$sql = Conexion::conectar()->prepare("SELECT  * FROM $tabla ORDER BY id");
		$sql -> execute();
		return $sql -> fetchAll();

  }




	static public function mdlCrearcrearAcc($tabla, $datos) {
		//validacion registro existente

			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :codigoAcc,  :nombreAcc, :desAcc,   NOW())");
		$sql->bindParam(":codigoAcc", $datos["codigoAcc"], PDO::PARAM_STR);
    $sql->bindParam(":nombreAcc", $datos["nombreAcc"], PDO::PARAM_STR);
		$sql->bindParam(":desAcc", $datos["desAcc"], PDO::PARAM_STR);



		if( $sql -> execute() ) {
			return "1";
		} else {
			return "error";
		}

	}



	static public function mdlEliminarcrearAcc($tabla, $id_crearAcc) {

		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$sql->bindParam(":id", $id_crearAcc, PDO::PARAM_INT);

		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

	static public function mdlEditarcrearAcc($tabla, $id_crearAcc) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");
		$sql->bindParam(":id", $id_crearAcc, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}

	static public function mdlActualizarcrearAcc($tabla, $datos) {


			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET codigo = :codigoCrearAcc, nombreCodigo  = :nombreCrearAcc, descripcionCodigo = :descripcionCrearAcc WHERE id = :id");

			$sql->bindParam(":codigoCrearAcc", $datos["codigoCrearAcc"], PDO::PARAM_STR);
			$sql->bindParam(":nombreCrearAcc", $datos["nombreCrearAcc"], PDO::PARAM_STR);
			$sql->bindParam(":descripcionCrearAcc", $datos["descripcionCrearAcc"], PDO::PARAM_STR);

      

			$sql->bindParam(":id", $datos["id_crearAcc"], PDO::PARAM_INT);





			if($sql->execute()) {
			return "ok";
		   } else {
			return "error";
		  }

	}

}


?>