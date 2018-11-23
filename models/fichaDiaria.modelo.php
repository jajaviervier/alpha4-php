<?php

require_once "conexion.php";

Class ModelofichaDiaria {

	static public function listarfichaDiariaMdl($tabla) {

		$sql = Conexion::conectar()->prepare("SELECT *,accesorios.id 
	 FROM $tabla
	 LEFT JOIN funcionario USING (id_funcionario)
	 LEFT JOIN crearacc ON serie=codigo
	 WHERE estado=1
	");
		$sql -> execute();
		return $sql -> fetchAll();

	}

	static public function mdlCrearfichaDiaria($tabla, $datos) {
		//validacion registro existente
		$row_cnt=1;
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE serie = :numerofichaDiaria");
		$sql->bindParam(":numerofichaDiaria", $datos["numerofichaDiaria"], PDO::PARAM_STR);
		$sql -> execute();

//cuenta la cantidad de registros encotrados con el mismo nombre
		if(count($sql -> fetchAll())>0){
			return "2";
		}else{
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :serieAccesorios,
      -:cantidadAccesorios,
      :idFuncionarioForaneo,
      :desAccesorios,1,
       NOW())");
		$sql->bindParam(":serieAccesorios", $datos["serieAccesorios"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadAccesorios", $datos["cantidadAccesorios"], PDO::PARAM_STR);
		$sql->bindParam(":idFuncionarioForaneo", $datos["idFuncionarioForaneo"], PDO::PARAM_STR);
        $sql->bindParam(":desAccesorios", $datos["desAccesorios"], PDO::PARAM_STR);
     


		if( $sql -> execute() ) {
			return "1";
		} else {
			return "error";
		}
		}
	}



	static public function mdlEliminarfichaDiaria($tabla, $id_fichaDiaria) {

		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$sql->bindParam(":id", $id_fichaDiaria, PDO::PARAM_INT);

		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

	static public function mdlEditarfichaDiaria($tabla, $id_fichaDiaria) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");
		$sql->bindParam(":id", $id_fichaDiaria, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}

	static public function mdlActualizarfichaDiaria($tabla, $datos) {


			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET serie = :serieAccesorios,
       cantidad = :cantidadAccesorios,
       id_funcionario  = :idFuncionarioForaneo,
       descripcion = :desAccesorios
	   
       WHERE id = :id");

			$sql->bindParam(":idFuncionarioForaneo", $datos["idFuncionarioForaneo"], PDO::PARAM_STR);
			$sql->bindParam(":serieAccesorios", $datos["serieAccesorios"], PDO::PARAM_STR);
			$sql->bindParam(":cantidadAccesorios", $datos["cantidadAccesorios"], PDO::PARAM_STR);$sql->bindParam(":desAccesorios", $datos["desAccesorios"], PDO::PARAM_STR);
			
			$sql->bindParam(":id", $datos["id_fichaDiaria"], PDO::PARAM_INT);





			if($sql->execute()) {
			return "ok";
		   } else {
			return "error";
		  }

	}

}


?>