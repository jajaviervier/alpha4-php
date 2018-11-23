<?php

Class ControllerAccesorios {

	public function listarAccesoriosCtr() {
		$tabla = "accesorios";
		$respuesta = ModeloAccesorios::listarAccesoriosMdl($tabla);

		return $respuesta;
  }
  public function listarbincardAccesoriosCtr() {
		$tabla = "accesorios";
		$respuesta = ModeloAccesorios::listarbincardAccesoriosMdl($tabla);

		return $respuesta;
	}

	static public function ctrCrearAccesorios($datos) {
		$tabla = "accesorios";
		$respuesta = ModeloAccesorios::mdlCrearAccesorios($tabla, $datos);
		return $respuesta;

	}

	static public function ctrEliminarAccesorios($id_Accesorios) {
		$tabla = "accesorios";
		$respuesta = ModeloAccesorios::mdlEliminarAccesorios($tabla, $id_Accesorios);
		return $respuesta;
	}

	static public function ctrEditarAccesorios($id_Accesorios) {

		$tabla = "accesorios";
		$respuesta = ModeloAccesorios::mdlEditarAccesorios($tabla, $id_Accesorios);


		return $respuesta;
	}

	static public function ctrActualizarAccesorios($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "accesorios";
		$respuesta = ModeloAccesorios::mdlActualizarAccesorios($tabla, $datos);

		return $respuesta;

	}
}

?>