<?php 

require_once "../controllers/cascos.controller.php";
require_once "../models/cascos.modelo.php";

Class ajaxcascos {

	public $id_cascos;
	public $marca_modelo;
	public $serie;
	public $observacion;
	public $estado_casco;
	public $casco_funcionario;

	public function crearCascos(){
		$datos = array(
		"marca_modelo"=>$this->marca_modelo,
		"observacion"=>$this->observacion,
		"serie"=>$this->serie
		);
		$respuesta = ControllerCascos::ctrCrearCascos($datos);
		echo $respuesta;
	}
	public function editarCascos(){
		$id_cascos = $this->id_cascos;

		$respuesta = ControllerCascos::ctrEditarCascos($id_cascos);

		$datos = array(
		"id_cascos"=>$respuesta["id_cascos"],
		"marca_modelo"=>$respuesta["id_casco"],//error al llamr esta dato //se arregla el problema 
		"observacion"=>$respuesta["observacion"],
		"serie"=>$respuesta["serie"],
		"estado_casco"=>$respuesta["estado_casco"],
		"casco_funcionario"=>$respuesta["casco_funcionario"]
			);
		echo json_encode($datos);
	}
	public function actualizarCascos(){
		$datos = array( 
					"id_cascos"=>$this->id_cascos,
					"marca_modelo"=>$this->marca_modelo,
					"observacion"=>$this->observacion,
					"serie"=>$this->serie,
					"estado_casco"=>$this->estado_casco,
					"casco_funcionario"=>$this->casco_funcionario
					);

		$respuesta = ControllerCascos::ctrActualizarCascos($datos);

		echo $respuesta;
	}
	public function eliminarCascos(){
		$id_cascos = $this->id_cascos;
		$respuesta = ControllerCascos::ctrEliminarCascos($id_cascos);
		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarCascos") {
    $crearNuevoCascos = new ajaxCascos();
	$crearNuevoCascos -> marca_modelo = $_POST["marca_modelo"];
	$crearNuevoCascos -> observacion =  $_POST["observacion"];
	$crearNuevoCascos -> serie =  $_POST["serie"];
	$crearNuevoCascos ->crearCascos();
}

if ($tipoOperacion == "editarCascos") {
	$editarCascos = new ajaxCascos();
	$editarCascos -> id_cascos = $_POST["id_cascos"];
	$editarCascos -> editarCascos();
}
if ($tipoOperacion == "actualizarCascos") {
	$actualizarCascos = new ajaxCascos();
	$actualizarCascos -> id_cascos = $_POST["id_cascos"];
	$actualizarCascos -> marca_modelo = $_POST["marca_modelo"];
	$actualizarCascos -> observacion =  $_POST["observacion"];
	$actualizarCascos -> serie =  $_POST["serie"];
	$actualizarCascos -> estado_casco =  $_POST["estado_casco"];
	$actualizarCascos -> casco_funcionario =  $_POST["id_funcionario"];
	$actualizarCascos -> actualizarCascos();
}
if ($tipoOperacion == "eliminarCascos") {
	$eliminarCascos = new ajaxCascos();
	$eliminarCascos -> id_cascos = $_POST["id_cascos"];
	$eliminarCascos -> eliminarCascos();
}

?>
