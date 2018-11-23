<?php 

Class ControllerCascos {
	
	static public function listarCascosCtr() {
		$tabla = "itemcasco";
		$respuesta = ModeloCascos::listarCascosMdl($tabla);

		return $respuesta;
	}

	static public function ctrCrearCascos($datos) {
		$tabla = "itemcasco";
		
		$respuesta = ModeloCascos::mdlCrearCascos($tabla, $datos);

		return $respuesta;

	}

	static public function ctrEliminarCascos($id_cascos) {

		$tabla = "itemcasco";

			$respuesta = ModeloCascos::mdlEliminarCascos($tabla, $id_cascos);	

		
		return $respuesta;

	}

	static public function ctrEditarCascos($id_cascos) {

		$tabla = "itemcasco";
		$respuesta = ModeloCascos::mdlEditarCascos($tabla, $id_cascos);


		return $respuesta;
	}

	static public function ctrActualizarCascos($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "itemcasco";

		$respuesta = ModeloCascos::mdlActualizarCascos($tabla, $datos);

		return $respuesta;

	}
}

?>
