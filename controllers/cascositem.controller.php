<?php 

Class ControllerCascositem {
	
	public function listarCascositemCtr() {
		$tabla = "cascos";
		$respuesta = ModeloCascositem::listarCascositemMdl($tabla);

		return $respuesta;
	}
	
	static public function ctrEliminarCascositem($id_cascos_item) {

		$tabla = "cascos";
	
		$respuesta = ModeloCascositem::mdlEliminarCascositem($tabla, $id_cascos_item);	
			
		return $respuesta;

	}

	static public function ctrCrearCascositem($datos) {
		$tabla = "cascos";
	
		$respuesta = ModeloCascositem::mdlCrearCascositem($tabla, $datos);

		return $respuesta;

	}

	

	static public function ctrEditarCascositem($id_cascos_item) {

		$tabla = "cascos";
		$respuesta = ModeloCascositem::mdlEditarCascositem($tabla, $id_cascos_item);
/*Obtenemos la id del datos que tendremos que editar */

		return $respuesta;
	}

	static public function ctrActualizarCascositem($datos) {
	
		$tabla = "cascos";
/*Consultamos a la tabla cascos y a traves de los datos obtenidos actualizamos */
		$respuesta = ModeloCascositem::mdlActualizarCascositem($tabla, $datos);

		return $respuesta;

	}
}

?>
