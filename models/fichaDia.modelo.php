<?php

require_once "conexion.php";

Class ModeloFichaDia {

	static public function listarFichaDiaMdl($tabla) {

		$sql = Conexion::conectar()->prepare("
		SELECT *,chalecos.marca AS marca_chaleco,chalecos.modelo AS modelo_chaleco,itemchalecos.serie AS serie_chaleco,item_armas.serie AS serie_arma , cascos.modelo_item AS modelo_casco,cascos.marca_item AS casco_marca , radio.serie AS serie_radio
		FROM funcionario
		LEFT JOIN itemchalecos ON chaleco_funcionario = id_funcionario
		LEFT JOIN chalecos USING (id_chalecos)
		LEFT JOIN item_armas USING (id_funcionario)
		LEFT JOIN armas ON armas.id=id_arma
		LEFT JOIN itemcasco ON casco_funcionario = id_funcionario
		LEFT JOIN cascos ON id_casco = id_cascoitem
		LEFT JOIN radio ON id_radio_funcionario = id_funcionario
		
		");
		$sql -> execute();
		return $sql -> fetchAll();

	}

	static public function mdlCrearFichaDia($tabla, $datos) {
		//validacion registro existente
		$row_cnt=1;
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE patente = :patenteFichaDia");
		$sql->bindParam(":patenteFichaDia", $datos["patenteFichaDia"], PDO::PARAM_STR);
		$sql -> execute();

//cuenta la cantidad de registros encotrados con el mismo nombre
		if(count($sql -> fetchAll())>0){
			return "2";
		}else{
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :patenteFichaDia,:kmSalidaFichaDia, :kmLlegadaFichaDia, :kmRecorridosVehiculo, :idFuncionarioForaneo, NOW())");
		$sql->bindParam(":patenteFichaDia", $datos["patenteFichaDia"], PDO::PARAM_STR);
		$sql->bindParam(":kmSalidaFichaDia", $datos["kmSalidaFichaDia"], PDO::PARAM_STR);
		$sql->bindParam(":kmLlegadaFichaDia", $datos["kmLlegadaFichaDia"], PDO::PARAM_STR);
        $sql->bindParam(":kmRecorridosVehiculo", $datos["kmRecorridosVehiculo"], PDO::PARAM_STR);
        $sql->bindParam(":idFuncionarioForaneo", $datos["idFuncionarioForaneo"], PDO::PARAM_STR);

		if( $sql -> execute() ) {
			return "1";
		} else {
			return "error";
		}
		}
	}



	static public function mdlEliminarFichaDia($tabla, $id_FichaDia) {

		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$sql->bindParam(":id", $id_FichaDia, PDO::PARAM_INT);

		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

	static public function mdlEditarFichaDia($tabla, $id_FichaDia) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");
		$sql->bindParam(":id", $id_FichaDia, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}

	static public function mdlActualizarFichaDia($tabla, $datos) {


			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET patente = :patenteFichaDia, Kmsalida = :kmSalidaFichaDia, kmllegada = :kmLlegadaFichaDia, kmrecorridos = :kmRecorridosVehiculo, id_funcionario = :idFuncionarioForaneo WHERE id = :id");

			$sql->bindParam(":patenteFichaDia", $datos["patenteFichaDia"], PDO::PARAM_STR);
			$sql->bindParam(":kmSalidaFichaDia", $datos["kmSalidaFichaDia"], PDO::PARAM_STR);
			$sql->bindParam(":kmLlegadaFichaDia", $datos["kmLlegadaFichaDia"], PDO::PARAM_STR);

            $sql->bindParam(":kmRecorridosVehiculo", $datos["kmRecorridosVehiculo"], PDO::PARAM_STR);
            $sql->bindParam(":idFuncionarioForaneo", $datos["idFuncionarioForaneo"], PDO::PARAM_STR);

			$sql->bindParam(":id", $datos["id_FichaDia"], PDO::PARAM_INT);





			if($sql->execute()) {
			return "ok";
		   } else {
			return "error";
		  }

	}

}


?>