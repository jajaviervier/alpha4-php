<?php

Class ControllercrearAcc {

	public function listarcrearAccCtr() {
		$tabla = "crearAcc";
		$respuesta = ModelocrearAcc::listarcrearAccMdl($tabla);

		return $respuesta;
  }


	static public function ctrCrearcrearAcc($datos) {
		$tabla = "crearAcc";
		$respuesta = ModelocrearAcc::mdlCrearcrearAcc($tabla, $datos);
		return $respuesta;

	}

	static public function ctrEliminarcrearAcc($id_crearAcc) {
		$tabla = "crearAcc";
		$respuesta = ModelocrearAcc::mdlEliminarcrearAcc($tabla, $id_crearAcc);
		return $respuesta;
	}

	static public function ctrEditarcrearAcc($id_crearAcc) {

		$tabla = "crearAcc";
		$respuesta = ModelocrearAcc::mdlEditarcrearAcc($tabla, $id_crearAcc);


		return $respuesta;
	}

	static public function ctrActualizarcrearAcc($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "crearAcc";
		$respuesta = ModelocrearAcc::mdlActualizarcrearAcc($tabla, $datos);

		return $respuesta;

	}
}

?>