<?php 

Class ControllerItemChalecos {
	
	public function listarItemChalecosCtr() {
		$tabla = "itemchalecos";
		$respuesta = ModeloItemChalecos::listarItemChalecosMdl($tabla);
		/*Consultamos al archivo modelo para obtener los datos de los Chalecos */

		return $respuesta;
	}

	static public function ctrCrearItemChalecos($datos) {
		$tabla = "itemchalecos";
		$respuesta = ModeloItemChalecos::mdlCrearItemChalecos($tabla, $datos);
		return $respuesta;
	}

	static public function ctrEliminarItemChalecos($id_Chalecos) {
		$tabla = "itemchalecos";
		$respuesta = ModeloItemChalecos::mdlEliminarItemChalecos($tabla, $id_Chalecos);			
		return $respuesta;
		/*Segun su id obtenida elimininamos el dato seleccionado */

	}

	static public function ctrEditarItemChalecos($id_itemChalecos) {

		$tabla = "itemchalecos";
		$respuesta = ModeloItemChalecos::mdlEditarItemChalecos($tabla, $id_itemChalecos);
/*Obtenemos la id del datos que tendremos que editar */


		return $respuesta;
	}

	static public function ctrActualizarItemChalecos($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "itemchalecos";

		/*Consultamos a la tabla Chalecos y a traves de los datos obtenidos actualizamos */
	
		$respuesta = ModeloItemChalecos::mdlActualizarItemChalecos($tabla, $datos);

		return $respuesta;

	}
///------------------------------EDITAR CHALECO PARA ASIGNAR A UN FUNCIONARIO---------------------------
	static public function ctrEditarFun($id_itemChalecos) {

		$tabla = "itemchalecos";
		$respuesta = ModeloItemChalecos::mdlEditarFun($tabla, $id_itemChalecos);
		return $respuesta;
	}

	static public function ctrActualizarFun($datos) {
		
		$tabla = "itemchalecos";
		$respuesta = ModeloItemChalecos::mdlActualizarFun($tabla, $datos);

		return $respuesta;

	}
}

?>