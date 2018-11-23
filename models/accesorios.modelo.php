<?php

require_once "conexion.php";

Class ModeloAccesorios {

	static public function listarAccesoriosMdl($tabla) {

		$sql = Conexion::conectar()->prepare("SELECT  SUM(cantidad) AS stock,serie,cantidad,accesorios.id,nombreCodigo,descripcionCodigo
    FROM $tabla
    LEFT JOIN crearacc ON codigo=serie
    GROUP BY serie");
		$sql -> execute();
		return $sql -> fetchAll();

  }
  static public function listarbincardAccesoriosMdl($tabla) {

		$sql = Conexion::conectar()->prepare("
		SELECT serie,accesorios.cantidad,accesorios.id,accesorios.fecha,nombreCodigo,descripcionCodigo,descripcion
		FROM $tabla
		LEFT JOIN crearacc ON codigo=serie
		ORDER BY accesorios.id DESC
	");
		$sql -> execute();
		return $sql -> fetchAll();

  }



	static public function mdlCrearAccesorios($tabla, $datos) {
		//validacion registro existente

	$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :serieAccesorios,  :cantidadAccesorios,0, :desAccesorios,0, NOW())");
	$sql->bindParam(":serieAccesorios", $datos["serieAccesorios"], PDO::PARAM_STR);
    $sql->bindParam(":desAccesorios", $datos["desAccesorios"], PDO::PARAM_STR);
	$sql->bindParam(":cantidadAccesorios", $datos["cantidadAccesorios"], PDO::PARAM_STR);



		if( $sql -> execute() ) {
			return "1";
		} else {
			return "error";
		}

	}



	static public function mdlEliminarAccesorios($tabla, $id_Accesorios) {

		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$sql->bindParam(":id", $id_Accesorios, PDO::PARAM_INT);

		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

	static public function mdlEditarAccesorios($tabla, $id_Accesorios) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");
		$sql->bindParam(":id", $id_Accesorios, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}

	static public function mdlActualizarAccesorios($tabla, $datos) {


			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET serie = :serie, descripcion = :descripcion, cantidad = :cantidad, observacion = :observacion, estado = :estado WHERE id = :id");

			$sql->bindParam(":serie", $datos["serieAccesorios"], PDO::PARAM_STR);
			$sql->bindParam(":descripcion", $datos["desAccesorios"], PDO::PARAM_STR);
			$sql->bindParam(":cantidad", $datos["cantidadAccesorios"], PDO::PARAM_STR);

      $sql->bindParam(":observacion", $datos["obserAccesorios"], PDO::PARAM_STR);
      $sql->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);

			$sql->bindParam(":id", $datos["id_Accesorios"], PDO::PARAM_INT);





			if($sql->execute()) {
			return "ok";
		   } else {
			return "error";
		  }

	}

}


?>