<?php 

Class ControllerRadios {
	
	public function listarRadiosCtr() {
		$tabla = "radio";
		$respuesta = ModeloRadios::listarRadiosMdl($tabla);

		return $respuesta;
	}

	static public function ctrCrearRadios($datos) {
		$tabla = "radio";
		$respuesta = ModeloRadios::mdlCrearRadios($tabla, $datos);
		return $respuesta;

	}

	static public function ctrEliminarRadios($id_Radios) {
		$tabla = "radio";
		$respuesta = ModeloRadios::mdlEliminarRadios($tabla, $id_Radios);		
		return $respuesta;
	}

	static public function ctrEditarRadios($id_Radios) {

		$tabla = "radio";
		$respuesta = ModeloRadios::mdlEditarRadios($tabla, $id_Radios);


		return $respuesta;
	}

	static public function ctrActualizarRadios($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "radio";
		$respuesta = ModeloRadios::mdlActualizarRadios($tabla, $datos);

		return $respuesta;

	}
}

?>