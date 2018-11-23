<?php 

Class ControllerCrearQuimicos {
	
	public function listarCrearQuimicosCtr() {
		$tabla = "crearqumicos";
		$respuesta = ModeloCrearQuimicos::listarCrearQuimicosMdl($tabla);

		return $respuesta;
	}

	static public function ctrCrearCrearQuimicos($datos) {
		$tabla = "crearqumicos";
		$respuesta = ModeloCrearQuimicos::mdlCrearCrearQuimicos($tabla, $datos);
		return $respuesta;

	}

	static public function ctrEliminarCrearQuimicos($id_CrearQuimicos) {
		$tabla = "crearqumicos";
		$respuesta = ModeloCrearQuimicos::mdlEliminarCrearQuimicos($tabla, $id_CrearQuimicos);		
		return $respuesta;
	}

	static public function ctrEditarCrearQuimicos($id_CrearQuimicos) {

		$tabla = "crearqumicos";
		$respuesta = ModeloCrearQuimicos::mdlEditarCrearQuimicos($tabla, $id_CrearQuimicos);


		return $respuesta;
	}

	static public function ctrActualizarCrearQuimicos($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "crearqumicos";
		$respuesta = ModeloCrearQuimicos::mdlActualizarCrearQuimicos($tabla, $datos);

		return $respuesta;

	}
}
