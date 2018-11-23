<?php

Class ControllerfichaDiaria {

	public function listarfichaDiariaCtr() {
		$tabla = "accesorios";
		$respuesta = ModelofichaDiaria::listarfichaDiariaMdl($tabla);

		return $respuesta;
	}

	static public function ctrCrearfichaDiaria($datos) {
		$tabla = "accesorios";
		$respuesta = ModelofichaDiaria::mdlCrearfichaDiaria($tabla, $datos);
		return $respuesta;

	}

	static public function ctrEliminarfichaDiaria($id_fichaDiaria) {
		$tabla = "accesorios";
		$respuesta = ModelofichaDiaria::mdlEliminarfichaDiaria($tabla, $id_fichaDiaria);
		return $respuesta;
	}

	static public function ctrEditarfichaDiaria($id_fichaDiaria) {

		$tabla = "accesorios";
		$respuesta = ModelofichaDiaria::mdlEditarfichaDiaria($tabla, $id_fichaDiaria);


		return $respuesta;
	}

	static public function ctrActualizarfichaDiaria($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "accesorios";
		$respuesta = ModelofichaDiaria::mdlActualizarfichaDiaria($tabla, $datos);

		return $respuesta;

	}
}

?>