<?php 

Class ControllerVehiculos {
	
	public function listarVehiculosCtr() {
		$tabla = "quimico_vehiculos";
		$respuesta = ModeloVehiculos::listarVehiculosMdl($tabla);

		return $respuesta;
	}

	static public function ctrCrearVehiculos($datos) {
		$tabla = "quimico_vehiculos";
		$respuesta = ModeloVehiculos::mdlCrearVehiculos($tabla, $datos);
		return $respuesta;

	}
	

	static public function ctrEliminarVehiculos($id_Vehiculos) {
		$tabla = "quimico_vehiculos";
		$respuesta = ModeloVehiculos::mdlEliminarVehiculos($tabla, $id_Vehiculos);		
		return $respuesta;
	}

	static public function ctrEditarVehiculos($id_Vehiculos) {

		$tabla = "quimico_vehiculos";
		$respuesta = ModeloVehiculos::mdlEditarVehiculos($tabla, $id_Vehiculos);


		return $respuesta;
	}

	static public function ctrActualizarVehiculos($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "quimico_vehiculos";
		$respuesta = ModeloVehiculos::mdlActualizarVehiculos($tabla, $datos);

		return $respuesta;

	}
}

?>