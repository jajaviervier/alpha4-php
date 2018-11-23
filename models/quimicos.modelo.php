<?php 

require_once "conexion.php";

Class ModeloQuimicos {

	static public function listarQuimicosMdl($tabla) {
       ///Stock
		$sql = Conexion::conectar()->prepare("SELECT SUM(cantidad) AS stock,descripcion,quimico_vehiculos.fecha,
		tipo,quimico_vehiculos.id 
		FROM $tabla
		LEFT JOIN crearqumicos ON codigo=serie
		GROUP BY serie
		");
		$sql -> execute();
		return $sql -> fetchAll();

	}
	static public function listarbincardQuimicosMdl($tabla) {
//vista del bincard 
		$sql = Conexion::conectar()->prepare("SELECT serie,quimico_vehiculos.cantidad,quimico_vehiculos.id,quimico_vehiculos.fecha,tipo,calibre,marca,descripcion
    FROM $tabla
    LEFT JOIN crearqumicos ON codigo=serie
	GROUP BY serie,cantidad
	ORDER BY quimico_vehiculos.id DESC");
		$sql -> execute();
		return $sql -> fetchAll();

  }

	static public function mdlCrearQuimicos($tabla, $datos) {
		//validacion registro existente
		$row_cnt=1;
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id < 0 ");
		$sql->bindParam(":serieQuimicos", $datos["serieQuimicos"], PDO::PARAM_STR);
		$sql -> execute();		
				
//cuenta la cantidad de registros encotrados con el mismo nombre
		if(count($sql -> fetchAll())>0){
			return "2";
		}else{
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :serieQuimicos, :cantidadQuimicos, :descripQuimicos, '',0,0,0, NOW())");
		$sql->bindParam(":serieQuimicos", $datos["serieQuimicos"], PDO::PARAM_STR);
		$sql->bindParam(":descripQuimicos", $datos["descripQuimicos"], PDO::PARAM_STR);
		
        $sql->bindParam(":cantidadQuimicos", $datos["cantidadQuimicos"], PDO::PARAM_STR);
       
		if( $sql -> execute() ) {
			return "1";
		} else {
			return "error";
		}
		}
	}



	static public function mdlEliminarQuimicos($tabla, $id_Quimicos) {

		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$sql->bindParam(":id", $id_Quimicos, PDO::PARAM_INT);

		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

	static public function mdlEditarQuimicos($tabla, $id_Quimicos) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");
		$sql->bindParam(":id", $id_Quimicos, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}

	static public function mdlActualizarQuimicos($tabla, $datos) {

	
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET 
                serie = :serieQuimicos,
                 tipo = :descripQuimicos, 
                 calibre = :calibreQuimicos,
                    marca = :marcaQuimicos, 
                 modelo = :modeloQuimicos, 
                    cantidad = :cantidadQuimicos,
                    consumo = :consumoQuimicos,
                    stock = :stockQuimicos
                  WHERE id = :id");

			$sql->bindParam(":serieQuimicos", $datos["serieQuimicos"], PDO::PARAM_STR);
			$sql->bindParam(":descripQuimicos", $datos["descripQuimicos"], PDO::PARAM_STR);
			$sql->bindParam(":calibreQuimicos", $datos["calibreQuimicos"], PDO::PARAM_STR);
            $sql->bindParam(":marcaQuimicos", $datos["marcaQuimicos"], PDO::PARAM_STR);
            $sql->bindParam(":modeloQuimicos", $datos["modeloQuimicos"], PDO::PARAM_STR);   
            $sql->bindParam(":cantidadQuimicos", $datos["cantidadQuimicos"], PDO::PARAM_STR);
            $sql->bindParam(":consumoQuimicos", $datos["consumoQuimicos"], PDO::PARAM_STR);
            $sql->bindParam(":stockQuimicos", $datos["stockQuimicos"], PDO::PARAM_STR);          
			$sql->bindParam(":id", $datos["id_Quimicos"], PDO::PARAM_INT);
			
			
		
		
		
			if($sql->execute()) {
			return "ok";
		   } else {
			return "error";
		  }

	}

}


?>