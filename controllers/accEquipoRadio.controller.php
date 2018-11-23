<?php 

Class ControllerAccEquipoRadio {
	
	public function listarAccEquipoRadioCtr() {
		$tabla = "acc_equipo_radio";
		$respuesta = ModeloAccEquipoRadio::listarAccEquipoRadioMdl($tabla);

		return $respuesta;
	}

	static public function ctrCrearAccEquipoRadio($datos) {
		$tabla = "acc_equipo_radio";
		$respuesta = ModeloAccEquipoRadio::mdlCrearAccEquipoRadio($tabla, $datos);
		return $respuesta;

	}

	static public function ctrEliminarAccEquipoRadio($id_AccEquipoRadio) {
		$tabla = "acc_equipo_radio";
		$respuesta = ModeloAccEquipoRadio::mdlEliminarAccEquipoRadio($tabla, $id_AccEquipoRadio);		
		return $respuesta;
	}

	static public function ctrEditarAccEquipoRadio($id_AccEquipoRadio) {

		$tabla = "acc_equipo_radio";
		$respuesta = ModeloAccEquipoRadio::mdlEditarAccEquipoRadio($tabla, $id_AccEquipoRadio);


		return $respuesta;
	}

	static public function ctrActualizarAccEquipoRadio($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "acc_equipo_radio";
		$respuesta = ModeloAccEquipoRadio::mdlActualizarAccEquipoRadio($tabla, $datos);

		return $respuesta;

	}
}

?>