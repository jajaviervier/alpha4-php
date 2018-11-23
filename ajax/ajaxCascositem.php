<?php 

require_once "../controllers/cascositem.controller.php";
require_once "../models/cascositem.modelo.php";

Class ajaxCascositem {

	public $id_cascos_item;
	public $marca_item;
	public $modelo_item;
	
	public function crearCascositem(){
		$datos = array(
		"marca_item"=>$this->marca_item,
		"modelo_item"=>$this->modelo_item,
		);
		$respuesta = ControllerCascositem::ctrCrearCascositem($datos);
		echo $respuesta;
	}
	public function editarCascositem(){
		$id_cascos_item = $this->id_cascos_item;

		$respuesta = ControllerCascositem::ctrEditarCascositem($id_cascos_item);

		$datos = array("id_cascos_item"=>$respuesta["id_cascoItem"],
			"marca_item"=>$respuesta["marca_item"],
			"modelo_item"=>$respuesta["modelo_item"]
			
			);
	echo json_encode($datos);
	}
	public function actualizarCascositem(){
		$datos = array( 
					"id_cascos_item"=>$this->id_cascos_item,
					"marca_item"=>$this->marca_item,
					"modelo_item"=>$this->modelo_item
					);

		$respuesta = ControllerCascositem::ctrActualizarCascositem($datos);

		echo $respuesta;
	}
	
	public function eliminarCascositem(){
		$id_cascos_item = $this->id_cascos_item;
		$respuesta = ControllerCascositem::ctrEliminarCascositem($id_cascos_item);
		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if ($tipoOperacion == "eliminarCascositem") {
	$eliminarCascositem = new ajaxCascositem();
	$eliminarCascositem -> id_cascos_item = $_POST["id_cascos_item"];
	$eliminarCascositem -> eliminarCascositem();
}

if($tipoOperacion == "insertarCascosItem") {
    $crearNuevoCascos = new ajaxCascositem();
	$crearNuevoCascos -> marca_item = $_POST["marca_item"];
	$crearNuevoCascos -> modelo_item =  $_POST["modelo_item"];
	$crearNuevoCascos ->crearCascositem();
}

if ($tipoOperacion == "editarCascositem") {
	$editarCascositem = new ajaxCascositem();
	$editarCascositem -> id_cascos_item = $_POST["id_cascos_item"];
	$editarCascositem -> editarCascositem();
}
if ($tipoOperacion == "actualizarCascositem") {
	$actualizarCascositem = new ajaxCascositem();
	$actualizarCascositem -> id_cascos_item = $_POST["id_cascos_item"];
	$actualizarCascositem -> marca_item = $_POST["marca_item"];
	$actualizarCascositem -> modelo_item =  $_POST["modelo_item"];
	$actualizarCascositem -> actualizarCascositem();
}


?>
