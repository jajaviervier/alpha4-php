<?php 

Class ControllerChalecos {
	
	public function listarChalecosCtr() {
		$tabla = "chalecos";
		$respuesta = ModeloChalecos::listarChalecosMdl($tabla);

		return $respuesta;
				/*Consultamos al archivo modelo para obtener los datos de los Chalecos */

	}

	static public function ctrCrearChalecos($datos) {
		$tabla = "chalecos";

		$respuesta = ModeloChalecos::mdlCrearChalecos($tabla, $datos);

		return $respuesta;
		/*Enviamos los datos al modelo para crear una nueva marca y modelo */

	}

	static public function ctrEliminarChalecos($id_Chalecos) {

		$tabla = "chalecos";
		$respuesta = ModeloChalecos::mdlEliminarChalecos($tabla, $id_Chalecos);			
		return $respuesta;
		/*Segun su id obtenida elimininamos el dato seleccionado */

	}

	static public function ctrEditarChalecos($id_Chalecos) {

		$tabla = "chalecos";
		$respuesta = ModeloChalecos::mdlEditarChalecos($tabla, $id_Chalecos);
/*Obtenemos la id del datos que tendremos que editar */


		return $respuesta;
	}

	static public function ctrActualizarChalecos($datos) {
		
		$tabla = "chalecos";

		$respuesta = ModeloChalecos::mdlActualizarChalecos($tabla, $datos);

		return $respuesta;
		/*Consultamos a la tabla Chalecos y a traves de los datos obtenidos actualizamos */

	}
}

?>