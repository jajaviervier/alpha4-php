<?php 

require_once "conexion.php";

Class ModeloCrearQuimicos {

	static public function listarCrearQuimicosMdl($tabla) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();

	}

	static public function mdlCrearCrearQuimicos($tabla, $datos) {
		//validacion registro existente
		$row_cnt=1;
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE codigo = :serieCrearQuimicos");
		$sql->bindParam(":serieCrearQuimicos", $datos["serieCrearQuimicos"], PDO::PARAM_STR);
		$sql -> execute();		
				
//cuenta la cantidad de registros encotrados con el mismo nombre
		if(count($sql -> fetchAll())>0){
			return "2";
		}else{
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :serieCrearQuimicos, :tipoCrearQuimicos, :calibreCrearQuimicos, :marcaCrearQuimicos, :modeloCrearQuimicos, NOW())");
		$sql->bindParam(":serieCrearQuimicos", $datos["serieCrearQuimicos"], PDO::PARAM_STR);
		$sql->bindParam(":tipoCrearQuimicos", $datos["tipoCrearQuimicos"], PDO::PARAM_STR);
		$sql->bindParam(":calibreCrearQuimicos", $datos["calibreCrearQuimicos"], PDO::PARAM_STR);
        $sql->bindParam(":marcaCrearQuimicos", $datos["marcaCrearQuimicos"], PDO::PARAM_STR);
        $sql->bindParam(":modeloCrearQuimicos", $datos["modeloCrearQuimicos"], PDO::PARAM_STR);
       
		if( $sql -> execute() ) {
			return "1";
		} else {
			return "error";
		}
		}
	}



	static public function mdlEliminarCrearQuimicos($tabla, $id_CrearQuimicos) {

		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$sql->bindParam(":id", $id_CrearQuimicos, PDO::PARAM_INT);

		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

	static public function mdlEditarCrearQuimicos($tabla, $id_CrearQuimicos) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");
		$sql->bindParam(":id", $id_CrearQuimicos, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}

	static public function mdlActualizarCrearQuimicos($tabla, $datos) {

	
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET 
                codigo = :serieCrearQuimicos,
                 tipo = :tipoCrearQuimicos, 
                 calibre = :calibreCrearQuimicos,
                    marca = :marcaCrearQuimicos, 
                 modelo = :modeloCrearQuimicos
                   
                  WHERE id = :id");

			$sql->bindParam(":serieCrearQuimicos", $datos["serieCrearQuimicos"], PDO::PARAM_STR);
			$sql->bindParam(":tipoCrearQuimicos", $datos["tipoCrearQuimicos"], PDO::PARAM_STR);
			$sql->bindParam(":calibreCrearQuimicos", $datos["calibreCrearQuimicos"], PDO::PARAM_STR);
            $sql->bindParam(":marcaCrearQuimicos", $datos["marcaCrearQuimicos"], PDO::PARAM_STR);
            $sql->bindParam(":modeloCrearQuimicos", $datos["modeloCrearQuimicos"], PDO::PARAM_STR);   
                 
			$sql->bindParam(":id", $datos["id_CrearQuimicos"], PDO::PARAM_INT);
			
			
		
		
		
			if($sql->execute()) {
			return "ok";
		   } else {
			return "error";
		  }

	}

}


?>