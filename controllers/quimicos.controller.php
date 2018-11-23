<?php 

Class ControllerQuimicos {
	
	public function listarQuimicosCtr() {
		$tabla = "quimico_vehiculos";
		$respuesta = ModeloQuimicos::listarQuimicosMdl($tabla);

		return $respuesta;
	}
	public function listarbincardQuimicosCtr() {
		$tabla = "quimico_vehiculos";
		$respuesta = ModeloQuimicos::listarbincardQuimicosMdl($tabla);

		return $respuesta;
	}

	static public function ctrCrearQuimicos($datos) {
		$tabla = "quimico_vehiculos";
		$respuesta = ModeloQuimicos::mdlCrearQuimicos($tabla, $datos);
		return $respuesta;

	}

	static public function ctrEliminarQuimicos($id_Quimicos) {
		$tabla = "quimico_vehiculos";
		$respuesta = ModeloQuimicos::mdlEliminarQuimicos($tabla, $id_Quimicos);		
		return $respuesta;
	}

	static public function ctrEditarQuimicos($id_Quimicos) {

		$tabla = "quimico_vehiculos";
		$respuesta = ModeloQuimicos::mdlEditarQuimicos($tabla, $id_Quimicos);


		return $respuesta;
	}

	static public function ctrActualizarQuimicos($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "quimico_vehiculos";
		$respuesta = ModeloQuimicos::mdlActualizarQuimicos($tabla, $datos);

		return $respuesta;

	}
}
