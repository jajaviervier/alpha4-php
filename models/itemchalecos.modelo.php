<?php 

require_once "conexion.php";

Class ModeloItemChalecos {

	static public function listarItemChalecosMdl($tabla) {

		$sql = Conexion::conectar()->prepare("
		SELECT *,chalecos.marca,chalecos.modelo,$tabla.id_itemchalecos,$tabla.serie, estado, chaleco_funcionario 
		FROM $tabla 
		INNER JOIN chalecos ON $tabla.id_chalecos = chalecos.id_chalecos
		LEFT JOIN funcionario ON id_funcionario = chaleco_funcionario
		");
		$sql -> execute();
		return $sql -> fetchAll();

	}


	static public function mdlCrearItemChalecos($tabla, $datos) {
		//validacion registro existente
		$row_cnt=1;
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE serie = :SerieItemChalecos");
		$sql->bindParam(":SerieItemChalecos", $datos["SerieItemChalecos"], PDO::PARAM_STR);
		$sql -> execute();		
				
//cuenta la cantidad de registros encotrados con el mismo nombre
		if(count($sql -> fetchAll())>0){
			return "2";
		}else{
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL,:id_escudo, :serie,:estado,'')");

		$sql->bindParam(":id_escudo", $datos["marca"], PDO::PARAM_STR);
		$sql->bindParam(":serie", $datos["SerieItemChalecos"], PDO::PARAM_STR);
		$sql->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);

		
	


		if( $sql -> execute() ) {
			return "1";
		} else {
			return "error";
		}
		}
	}


/*Eliminamos el dato segun su id */
	static public function mdlEliminarItemChalecos($tabla, $id_Chalecos) {

		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_itemChalecos = :id");

		$sql->bindParam(":id", $id_Chalecos, PDO::PARAM_INT);

		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

	static public function mdlEditarItemChalecos($tabla, $id_itemChalecos) {

		$sql = Conexion::conectar()->prepare("SELECT chalecos.marca,chalecos.modelo,$tabla.id_itemchalecos,$tabla.serie,$tabla.id_chalecos,$tabla.estado FROM $tabla INNER JOIN chalecos ON $tabla.id_chalecos = chalecos.id_chalecos WHERE id_itemchalecos = :id");
		$sql->bindParam(":id", $id_itemChalecos, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}

	static public function mdlActualizarItemChalecos($tabla, $datos) {


		
				$sql = Conexion::conectar()->prepare("UPDATE $tabla SET serie = :SerieItemChalecos, id_chalecos = :marca,estado = :estado , chaleco_funcionario = :chaleco_funcionario WHERE id_itemchalecos = :id");
	            

	            $sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
				$sql->bindParam(":SerieItemChalecos", $datos["SerieItemChalecos"], PDO::PARAM_STR);
				$sql->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
				$sql->bindParam(":chaleco_funcionario", $datos["chaleco_funcionario"], PDO::PARAM_STR);
		        $sql->bindParam(":id",$datos["id_itemChalecos"],  PDO::PARAM_INT);
	


		
		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

	//-------------------------EDITAR TABLA CHALECO PARA SIGNAAR UN CHALECO A UN FUNCIONARIO-------------
	static public function mdlEditarFun($tabla, $id_itemChalecos) {

		$sql = Conexion::conectar()->prepare("SELECT chalecos.marca,chalecos.modelo,$tabla.id_itemchalecos,$tabla.serie,$tabla.id_chalecos,$tabla.estado FROM $tabla INNER JOIN chalecos ON $tabla.id_chalecos = chalecos.id_chalecos WHERE id_itemchalecos = :id");
		$sql->bindParam(":id", $id_itemChalecos, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}

	static public function mdlActualizarFun($tabla, $datos) {


		
				$sql = Conexion::conectar()->prepare("UPDATE $tabla SET chaleco_funcionario = :chaleco_fun WHERE id_itemchalecos = :id");
	            $sql->bindParam(":chaleco_fun", $datos["chaleco_fun"], PDO::PARAM_STR);
		        $sql->bindParam(":id",$datos["id_itemChalecos"],  PDO::PARAM_INT);
	


		
		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}


}


?>