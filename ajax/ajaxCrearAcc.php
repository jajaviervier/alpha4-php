<?php

require_once "../controllers/crearAcc.controller.php";
require_once "../models/crearAcc.modelo.php";


Class ajaxcrearAcc {

	public $id_crearAcc;
	public $codigocrearAcc;
	public $nombrecrearAcc;
	public $descripcioncrearAcc;

    public $obsercrearAcc;
    public $estado;

	public function crearcrearAcc(){
		$datos = array(
    "codigoAcc"=>$this->codigocrearAcc,
    "nombreAcc"=>$this->nombrecrearAcc,

    "desAcc"=>$this->descripcioncrearAcc,



		);
		$respuesta = ControllercrearAcc::ctrCrearcrearAcc($datos);
		echo $respuesta;
	}
	public function editarcrearAcc(){
		$id_crearAcc = $this->id_crearAcc;

		$respuesta = ControllercrearAcc::ctrEditarcrearAcc($id_crearAcc);

		$datos = array('id_crearAcc'=>$respuesta['id'],
						'codigoCrearAcc'=>$respuesta['codigo'],
						'nombreCrearAcc'=>$respuesta['nombreCodigo'],
						'descripcionCrearAcc'=>$respuesta['descripcionCodigo'],

                        
					);
		echo json_encode($datos);

	}
	public function actualizarcrearAcc(){
		$datos = array( "id_crearAcc"=>$this->id_crearAcc,
						"codigoCrearAcc"=>$this->codigocrearAcc,
						"nombreCrearAcc"=>$this->nombrecrearAcc,
						"descripcionCrearAcc"=>$this->descripcioncrearAcc,

            "obsercrearAcc"=>$this->obsercrearAcc,
            "estado"=>$this->estado

						);

		$respuesta = ControllercrearAcc::ctrActualizarcrearAcc($datos);

		echo $respuesta;
	}
	public function eliminarcrearAcc(){
		$id_crearAcc = $this->id_crearAcc;


		$respuesta = ControllercrearAcc::ctrEliminarcrearAcc($id_crearAcc);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarcrearAcc") {
  $crearNuevocrearAcc = new ajaxcrearAcc();
	$crearNuevocrearAcc -> codigocrearAcc = $_POST["codigoCrearAcc"];
	$crearNuevocrearAcc -> nombrecrearAcc = $_POST["nombreCrearAcc"];
	$crearNuevocrearAcc -> descripcioncrearAcc =  $_POST["descripcionCrearAcc"];




	$crearNuevocrearAcc ->crearcrearAcc();
}

if ($tipoOperacion == "editarcrearAcc") {
	$editarcrearAcc = new ajaxcrearAcc();
	$editarcrearAcc -> id_crearAcc = $_POST["id_crearAcc"];
	$editarcrearAcc -> editarcrearAcc();
}
if ($tipoOperacion == "actualizarcrearAcc") {
	$actualizarcrearAcc = new ajaxcrearAcc();
	$actualizarcrearAcc -> id_crearAcc = $_POST["id_crearAcc"];
	$actualizarcrearAcc -> codigocrearAcc = $_POST["codigoCrearAcc"];
	$actualizarcrearAcc -> nombrecrearAcc =  $_POST["nombreCrearAcc"];
    $actualizarcrearAcc -> descripcioncrearAcc =  $_POST["descripcionCrearAcc"];
   

	$actualizarcrearAcc -> actualizarcrearAcc();
}
if ($tipoOperacion == "eliminarcrearAcc") {
	$eliminarcrearAcc = new ajaxcrearAcc();
	$eliminarcrearAcc -> id_crearAcc = $_POST["id_crearAcc"];

	$eliminarcrearAcc -> eliminarcrearAcc();
}

?>