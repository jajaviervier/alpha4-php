<?php 

require_once "conexion.php";

Class ModeloitemArmas {

	static public function listaritemArmasMdl($tabla) {

		


		$sql = Conexion::conectar()->prepare("
		SELECT  $tabla.id,$tabla.serie,$tabla.estado,$tabla.id_funcionario,$tabla.rutaImg,$tabla.tipoarma,$tabla.observacion,$tabla.fecha,armas.marca,armas.modelo, funcionario.rut,funcionario.nombre,funcionario.apellido
		FROM $tabla
		INNER JOIN armas ON $tabla.id_arma = armas.id
        LEFT JOIN funcionario USING (id_funcionario)
		");
		$sql -> execute();
		return $sql -> fetchAll();
	}

	static public function subselectMdl($llave) {
		$tabla="armas"; //selecciono la tabla foranea para llamar los datos, en este caso armas 

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_categoria = :id");
		$sql->bindParam(":id", $llave, PDO::PARAM_INT);
		$sql -> execute();
		return json_encode($sql -> fetchAll());

	}
	static public function mdlActualizarFuncionario($tabla, $datos) {
	
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET  id_funcionario  = :id_funcionario WHERE id = :id");
		$sql->bindParam(":id_funcionario", $datos["id_funcionario"], PDO::PARAM_INT);
		$sql->bindParam(":id", $datos["id_itemArmas"], PDO::PARAM_INT);
		
		

		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
		
	}
	
	





	
	static public function mdlCrearitemArmas($tabla, $datos,$rutaImagen) {
		//validacion registro existente
		$row_cnt=1;
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE serie = :cat");
		$sql->bindParam(":cat", $datos["serie"], PDO::PARAM_STR);
		$sql -> execute();		
        //cuenta la cantidad de registros encotrados con el mismo nombre
		if(count($sql -> fetchAll())>0){
			return "2";
		}else{

			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :serie, :estado, :imagen, :tipoarma, :observacion, NOW(), :idArmasForanea,'')");
			$sql->bindParam(":serie", $datos["serie"], PDO::PARAM_STR);
			$sql->bindParam(":tipoarma", $datos["tipoarma"], PDO::PARAM_STR);
			$sql->bindParam(":observacion", $datos["observacion"], PDO::PARAM_STR);
			$sql->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
			$sql->bindParam(":idArmasForanea", $datos["idArmasForanea"], PDO::PARAM_STR);
			$sql->bindParam(":imagen", $rutaImagen, PDO::PARAM_STR);
	
			if( $sql -> execute() ) {
				return "1";
			} else {
				return "error";
			}
		}
	}


	static public function mdlEliminaritemArmas($tabla, $id_itemArmas) {

		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$sql->bindParam(":id", $id_itemArmas, PDO::PARAM_INT);

		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}
	static public function mdlEditarfuncionario($tabla, $id_itemArmas) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");
		$sql->bindParam(":id", $id_itemArmas, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}

	static public function mdlEditaritemArmas($tabla, $id_itemArmas) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");
		$sql->bindParam(":id", $id_itemArmas, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}
     
	static public function mdlActualizaritemArmas($tabla, $datos, $rutaImagen) {

		if( is_null($rutaImagen)) {
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET serie = :serie, tipoarma = :tipoarma,observacion = :observacion, estado = :estado, id_arma = :marca, id_funcionario = :armafun, fecha = NOW() WHERE id = :id");

			$sql->bindParam(":serie", $datos["serie"], PDO::PARAM_STR);
			$sql->bindParam(":tipoarma", $datos["tipoarma"], PDO::PARAM_STR);
			$sql->bindParam(":observacion", $datos["observacion"], PDO::PARAM_STR);
			$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
			$sql->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
			$sql->bindParam(":armafun", $datos["armafun"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_itemArmas"], PDO::PARAM_INT);

		} else {
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET serie = :serie, observacion = :observacion, estado = :estado, tipoarma = :tipoarma, id_arma = :marca, id_funcionario = :armafun, rutaImg = :rutaNueva, fecha = NOW() WHERE id = :id");

			$sql->bindParam(":serie", $datos["serie"], PDO::PARAM_STR);
			$sql->bindParam(":tipoarma", $datos["tipoarma"], PDO::PARAM_STR);
			$sql->bindParam(":observacion", $datos["observacion"], PDO::PARAM_STR);
			$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
			$sql->bindParam(":rutaNueva", $rutaImagen, PDO::PARAM_STR);
			$sql->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
			$sql->bindParam(":armafun", $datos["armafun"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_itemArmas"], PDO::PARAM_INT);



		} 

		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

}


?>