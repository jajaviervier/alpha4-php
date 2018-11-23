<?php 

require_once "../controllers/armas.controller.php";
require_once "../models/armas.modelo.php";


Class ajaxArmas {

	public $id_armas;
	public $nombreArmas;
	public $apellidoArmas;
	public $rutArmas;
	public $armaFuncionario;
	public $cascoFuncionario;
	public $escudoFuncionario;
	public $imagen_Armas;
	public function crearArmas(){
		$datos = array(
		"marcaArmas"=>$this->nombreArmas,
		"modeloArmas"=>$this->apellidoArmas,
		"calibreArmas"=>$this->rutArmas,
		);
		$respuesta = ControllerArmas::ctrCrearArmas($datos);
		echo $respuesta;
	}
	public function editarArmas(){
		$id_armas = $this->id_armas;

		$respuesta = ControllerArmas::ctrEditarArmas($id_armas);

		$datos = array('id_Armas'=>$respuesta['id'],
						'marca'=>$respuesta['marca'],
						'modelo'=>$respuesta['modelo'],
						'calibre'=>$respuesta['calibre']
						
					);
		echo json_encode($datos);

	}
	public function actualizarArmas(){
		$datos = array( "id_Armas"=>$this->id_armas,
						"marca"=>$this->nombreArmas,
						"modelo"=>$this->apellidoArmas,
						"calibre"=>$this->rutArmas
						
						);

		$respuesta = ControllerArmas::ctrActualizarArmas($datos);

		echo $respuesta;
	}
	public function eliminarArmas(){
		$id_armas = $this->id_armas;
		

		$respuesta = ControllerArmas::ctrEliminarArmas($id_armas);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarArmas") {
    $crearNuevoArmas = new ajaxArmas();
	$crearNuevoArmas -> nombreArmas = $_POST["marcaArmas"];
	$crearNuevoArmas -> apellidoArmas =  $_POST["modeloArmas"];
	$crearNuevoArmas -> rutArmas =  $_POST["calibreArmas"];
	
	$crearNuevoArmas ->crearArmas();
}

if ($tipoOperacion == "editarArmas") {
	$editarArmas = new ajaxArmas();
	$editarArmas -> id_armas = $_POST["id_Armas"];
	$editarArmas -> editarArmas();
}
if ($tipoOperacion == "actualizarArmas") {
	$actualizarArmas = new ajaxArmas();
	$actualizarArmas -> id_armas = $_POST["id_Armas"];
	$actualizarArmas -> nombreArmas = $_POST["marcaArmas"];
	$actualizarArmas -> apellidoArmas =  $_POST["modeloArmas"];
	$actualizarArmas -> rutArmas =  $_POST["calibreArmas"];
	
	$actualizarArmas -> actualizarArmas();
}
if ($tipoOperacion == "eliminarArmas") {
	$eliminarArmas = new ajaxArmas();
	$eliminarArmas -> id_armas = $_POST["id_armas"];
	
	$eliminarArmas -> eliminarArmas();
}

?>