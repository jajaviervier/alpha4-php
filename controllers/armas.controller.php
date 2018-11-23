<?php 

Class ControllerArmas {
	
	public function listarArmasCtr() {
		$tabla = "armas";
		$respuesta = ModeloArmas::listarArmasMdl($tabla);

		return $respuesta;
	}

	static public function ctrCrearArmas($datos) {
		$tabla = "armas";
		$respuesta = ModeloArmas::mdlCrearArmas($tabla, $datos);
		return $respuesta;

	}

	static public function ctrEliminarArmas($id_armas) {
		$tabla = "armas";
		$respuesta = ModeloArmas::mdlEliminarArmas($tabla, $id_armas);		
		return $respuesta;
	}

	static public function ctrEditarArmas($id_armas) {

		$tabla = "armas";
		$respuesta = ModeloArmas::mdlEditarArmas($tabla, $id_armas);


		return $respuesta;
	}

	static public function ctrActualizarArmas($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "armas";
		$respuesta = ModeloArmas::mdlActualizarArmas($tabla, $datos);

		return $respuesta;

	}
}

?>