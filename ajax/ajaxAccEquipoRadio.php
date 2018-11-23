<?php 

require_once "../controllers/accEquipoRadio.controller.php";
require_once "../models/accEquipoRadio.modelo.php";


Class ajaxAccEquipoRadio {

	public $id_AccEquipoRadio;
	public $nombreAccEquipoRadio;
	public $apellidoAccEquipoRadio;
	public $rutAccEquipoRadio;
	public $armaFuncionario;
	public $cascoFuncionario;
	public $escudoFuncionario;
	public $imagen_AccEquipoRadio;
	public function crearAccEquipoRadio(){
		$datos = array(
		"marcaAccEquipoRadio"=>$this->nombreAccEquipoRadio,
		"modeloAccEquipoRadio"=>$this->apellidoAccEquipoRadio,
		"calibreAccEquipoRadio"=>$this->rutAccEquipoRadio,
		);
		$respuesta = ControllerAccEquipoRadio::ctrCrearAccEquipoRadio($datos);
		echo $respuesta;
	}
	public function editarAccEquipoRadio(){
		$id_AccEquipoRadio = $this->id_AccEquipoRadio;

		$respuesta = ControllerAccEquipoRadio::ctrEditarAccEquipoRadio($id_AccEquipoRadio);

		$datos = array('id_AccEquipoRadio'=>$respuesta['id'],
						'marca'=>$respuesta['serie'],
						'modelo'=>$respuesta['cantidad'],
						'calibre'=>$respuesta['descripcion']
						
					);
		echo json_encode($datos);

	}
	public function actualizarAccEquipoRadio(){
		$datos = array( "id_AccEquipoRadio"=>$this->id_AccEquipoRadio,
						"marca"=>$this->nombreAccEquipoRadio,
						"modelo"=>$this->apellidoAccEquipoRadio,
						"calibre"=>$this->rutAccEquipoRadio
						
						);

		$respuesta = ControllerAccEquipoRadio::ctrActualizarAccEquipoRadio($datos);

		echo $respuesta;
	}
	public function eliminarAccEquipoRadio(){
		$id_AccEquipoRadio = $this->id_AccEquipoRadio;
		

		$respuesta = ControllerAccEquipoRadio::ctrEliminarAccEquipoRadio($id_AccEquipoRadio);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarAccEquipoRadio") {
    $crearNuevoAccEquipoRadio = new ajaxAccEquipoRadio();
	$crearNuevoAccEquipoRadio -> nombreAccEquipoRadio = $_POST["marcaAccEquipoRadio"];
	$crearNuevoAccEquipoRadio -> apellidoAccEquipoRadio =  $_POST["modeloAccEquipoRadio"];
	$crearNuevoAccEquipoRadio -> rutAccEquipoRadio =  $_POST["calibreAccEquipoRadio"];
	
	$crearNuevoAccEquipoRadio ->crearAccEquipoRadio();
}

if ($tipoOperacion == "editarAccEquipoRadio") {
	$editarAccEquipoRadio = new ajaxAccEquipoRadio();
	$editarAccEquipoRadio -> id_AccEquipoRadio = $_POST["id_AccEquipoRadio"];
	$editarAccEquipoRadio -> editarAccEquipoRadio();
}
if ($tipoOperacion == "actualizarAccEquipoRadio") {
	$actualizarAccEquipoRadio = new ajaxAccEquipoRadio();
	$actualizarAccEquipoRadio -> id_AccEquipoRadio = $_POST["id_AccEquipoRadio"];
	$actualizarAccEquipoRadio -> nombreAccEquipoRadio = $_POST["marcaAccEquipoRadio"];
	$actualizarAccEquipoRadio -> apellidoAccEquipoRadio =  $_POST["modeloAccEquipoRadio"];
	$actualizarAccEquipoRadio -> rutAccEquipoRadio =  $_POST["calibreAccEquipoRadio"];
	
	$actualizarAccEquipoRadio -> actualizarAccEquipoRadio();
}
if ($tipoOperacion == "eliminarAccEquipoRadio") {
	$eliminarAccEquipoRadio = new ajaxAccEquipoRadio();
	$eliminarAccEquipoRadio -> id_AccEquipoRadio = $_POST["id_AccEquipoRadio"];
	
	$eliminarAccEquipoRadio -> eliminarAccEquipoRadio();
}

?>