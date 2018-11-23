<?php 

require_once "conexion.php";

Class ModeloVehiculos {

	static public function listarVehiculosMdl($tabla) {

		$sql = Conexion::conectar()->prepare("SELECT *,(km_salida - km_llegada) AS km_recorrido 
		FROM $tabla
		LEFT JOIN funcionario ON id_funcionario=id_conductor
		WHERE id_conductor <> 0
		");
		$sql -> execute();
		return $sql -> fetchAll();

	}

	static public function mdlCrearVehiculos($tabla, $datos) {
		//validacion registro existente
		$row_cnt=1;
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE patente = '0' ");
		$sql->bindParam(":patenteVehiculos", $datos["patenteVehiculos"], PDO::PARAM_STR);
		$sql -> execute();		
				
//cuenta la cantidad de registros encotrados con el mismo nombre
		if(count($sql -> fetchAll())>0){
			return "2";			
			
		}
		else{
				$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :serievehiculoQ,-:cantidadVQ, :descripVQ, :patenteVehiculos,:kmSalidaVehiculos, :kmLlegadaVehiculos,  :idFuncionarioForaneo, NOW())");
				$sql->bindParam(":serievehiculoQ", $datos["serievehiculoQ"], PDO::PARAM_STR);
				$sql->bindParam(":cantidadVQ", $datos["cantidadVQ"], PDO::PARAM_STR);
				$sql->bindParam(":descripVQ", $datos["descripVQ"], PDO::PARAM_STR);
				$sql->bindParam(":patenteVehiculos", $datos["patenteVehiculos"], PDO::PARAM_STR);
				$sql->bindParam(":kmSalidaVehiculos", $datos["kmSalidaVehiculos"], PDO::PARAM_STR);
				$sql->bindParam(":kmLlegadaVehiculos", $datos["kmLlegadaVehiculos"], PDO::PARAM_STR);
				
				$sql->bindParam(":idFuncionarioForaneo", $datos["idFuncionarioForaneo"], PDO::PARAM_STR);
			  
				if( $sql -> execute() ) {
					return "1";
				} else {
					return "error";
				}
			}	
		}
	



	static public function mdlEliminarVehiculos($tabla, $id_Vehiculos) {

		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$sql->bindParam(":id", $id_Vehiculos, PDO::PARAM_INT);

		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

	static public function mdlEditarVehiculos($tabla, $id_Vehiculos) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");
		$sql->bindParam(":id", $id_Vehiculos, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}

	static public function mdlActualizarVehiculos($tabla, $datos) {

	
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET patente = :patenteVehiculos, Kmsalida = :kmSalidaVehiculos, kmllegada = :kmLlegadaVehiculos, kmrecorridos = :kmRecorridosVehiculo, id_funcionario = :idFuncionarioForaneo WHERE id = :id");

			$sql->bindParam(":patenteVehiculos", $datos["patenteVehiculos"], PDO::PARAM_STR);
			$sql->bindParam(":kmSalidaVehiculos", $datos["kmSalidaVehiculos"], PDO::PARAM_STR);
			$sql->bindParam(":kmLlegadaVehiculos", $datos["kmLlegadaVehiculos"], PDO::PARAM_STR);
          
            $sql->bindParam(":kmRecorridosVehiculo", $datos["kmRecorridosVehiculo"], PDO::PARAM_STR);   
            $sql->bindParam(":idFuncionarioForaneo", $datos["idFuncionarioForaneo"], PDO::PARAM_STR);
             
			$sql->bindParam(":id", $datos["id_Vehiculos"], PDO::PARAM_INT);
			
			
		
		
		
			if($sql->execute()) {
			return "ok";
		   } else {
			return "error";
		  }

	}

}


?>