<?php

Class ControllerFichaDia {

	public function listarFichaDiaCtr() {
		$tabla = "FichaDia";
		$respuesta = ModeloFichaDia::listarFichaDiaMdl($tabla);

		return $respuesta;
	}

	static public function ctrCrearFichaDia($datos) {
		$tabla = "FichaDia";
		$respuesta = ModeloFichaDia::mdlCrearFichaDia($tabla, $datos);
		return $respuesta;

	}

	static public function ctrEliminarFichaDia($id_FichaDia) {
		$tabla = "FichaDia";
		$respuesta = ModeloFichaDia::mdlEliminarFichaDia($tabla, $id_FichaDia);
		return $respuesta;
	}

	static public function ctrEditarFichaDia($id_FichaDia) {

		$tabla = "FichaDia";
		$respuesta = ModeloFichaDia::mdlEditarFichaDia($tabla, $id_FichaDia);


		return $respuesta;
	}

	static public function ctrActualizarFichaDia($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "FichaDia";
		$respuesta = ModeloFichaDia::mdlActualizarFichaDia($tabla, $datos);

		return $respuesta;

	}
}

?>