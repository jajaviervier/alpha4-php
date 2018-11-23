<?php 

require_once "conexion.php";

Class ModeloRadios {

	static public function listarRadiosMdl($tabla) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();

	}

	static public function mdlCrearRadios($tabla, $datos) {
		//validacion registro existente
		$row_cnt=1;
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE serie = :serieRadios");
		$sql->bindParam(":serieRadios", $datos["serieRadios"], PDO::PARAM_STR);
		$sql -> execute();		
				
//cuenta la cantidad de registros encotrados con el mismo nombre
		if(count($sql -> fetchAll())>0){
			return "2";
		}else{
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :serieRadios, :modeloRadios, :tipoRadios, :serieGPSRadios, :obserRadios, :estado, '',  NOW())");
		$sql->bindParam(":serieRadios", $datos["serieRadios"], PDO::PARAM_STR);
		$sql->bindParam(":modeloRadios", $datos["modeloRadios"], PDO::PARAM_STR);
		$sql->bindParam(":tipoRadios", $datos["tipoRadios"], PDO::PARAM_STR);
		$sql->bindParam(":serieGPSRadios", $datos["serieGPS_Radios"], PDO::PARAM_STR);
        $sql->bindParam(":obserRadios", $datos["obserRadios"], PDO::PARAM_STR);
        $sql->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
       
		if( $sql -> execute() ) {
			return "1";
		} else {
			return "error";
		}
		}
	}



	static public function mdlEliminarRadios($tabla, $id_Radios) {

		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$sql->bindParam(":id", $id_Radios, PDO::PARAM_INT);

		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

	static public function mdlEditarRadios($tabla, $id_Radios) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");
		$sql->bindParam(":id", $id_Radios, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}

	static public function mdlActualizarRadios($tabla, $datos) {

	
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET serie = :serie, modelo = :modelo, tipo_equipo = :tipo_equipo, serie_GPS = :serie_GPS, observacion = :observacion, estado = :estado, id_radio_funcionario = :cargo WHERE id = :id");

			$sql->bindParam(":serie", $datos["serieRadios"], PDO::PARAM_STR);
			$sql->bindParam(":modelo", $datos["modeloRadios"], PDO::PARAM_STR);
			$sql->bindParam(":tipo_equipo", $datos["tipoRadios"], PDO::PARAM_STR);
            $sql->bindParam(":serie_GPS", $datos["serieGPS_Radios"], PDO::PARAM_STR);
            $sql->bindParam(":observacion", $datos["obserRadios"], PDO::PARAM_STR);   
            $sql->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
            $sql->bindParam(":cargo", $datos["cargoRadios"], PDO::PARAM_INT);     
			$sql->bindParam(":id", $datos["id_Radios"], PDO::PARAM_INT);
			
			
		
		
		
			if($sql->execute()) {
			return "ok";
		   } else {
			return "error";
		  }

	}

}


?>