<?php

require_once "../controllers/FichaDia.controller.php";
require_once "../models/FichaDia.modelo.php";


Class ajaxFichaDia {

	public $id_FichaDia;
	public $patenteFichaDia;
	public $kmSalidaFichaDia;
	public $kmLlegadaFichaDia;

    public $kmRecorridosVehiculo;
    public $idFuncionarioForaneo;

	public function crearFichaDia(){
		$datos = array(
		"patenteFichaDia"=>$this->patenteFichaDia,
		"kmSalidaFichaDia"=>$this->kmSalidaFichaDia,
        "kmLlegadaFichaDia"=>$this->kmLlegadaFichaDia,
        "kmRecorridosVehiculo"=>$this->kmRecorridosVehiculo,
        "idFuncionarioForaneo"=>$this->idFuncionarioForaneo,

		);
		$respuesta = ControllerFichaDia::ctrCrearFichaDia($datos);
		echo $respuesta;
	}
	public function editarFichaDia(){
		$id_FichaDia = $this->id_FichaDia;

		$respuesta = ControllerFichaDia::ctrEditarFichaDia($id_FichaDia);

		$datos = array('id_FichaDia'=>$respuesta['id'],
						'patenteFichaDia'=>$respuesta['patente'],
						'kmsalidaFichaDia'=>$respuesta['descripcion'],
						'kmllegadaFichaDia'=>$respuesta['marca'],

                        'kmrecorridoFichaDia'=>$respuesta['modelo'],
                        'idFuncionarioForaneo'=>$respuesta['idFuncionarioForaneo']

					);
		echo json_encode($datos);

	}
	public function actualizarFichaDia(){
		$datos = array( "id_FichaDia"=>$this->id_FichaDia,
						"patenteFichaDia"=>$this->patenteFichaDia,
						"kmSalidaFichaDia"=>$this->kmSalidaFichaDia,
						"kmLlegadaFichaDia"=>$this->kmLlegadaFichaDia,

                        "kmRecorridosVehiculo"=>$this->kmRecorridosVehiculo,
                        "idFuncionarioForaneo"=>$this->idFuncionarioForaneo

						);

		$respuesta = ControllerFichaDia::ctrActualizarFichaDia($datos);

		echo $respuesta;
	}
	public function eliminarFichaDia(){
		$id_FichaDia = $this->id_FichaDia;


		$respuesta = ControllerFichaDia::ctrEliminarFichaDia($id_FichaDia);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarFichaDia") {
    $crearNuevoFichaDia = new ajaxFichaDia();
	$crearNuevoFichaDia -> patenteFichaDia = $_POST["patenteFichaDia"];
	$crearNuevoFichaDia -> kmSalidaFichaDia =  $_POST["kmsalidaFichaDia"];
	$crearNuevoFichaDia -> kmLlegadaFichaDia =  $_POST["kmllegadaFichaDia"];

    $crearNuevoFichaDia -> kmRecorridosVehiculo =  $_POST["kmrecorridoVehiculo"];
    $crearNuevoFichaDia -> idFuncionarioForaneo =  $_POST["idFuncionarioForaneo"];

	$crearNuevoFichaDia ->crearFichaDia();
}

if ($tipoOperacion == "editarFichaDia") {
	$editarFichaDia = new ajaxFichaDia();
	$editarFichaDia -> id_FichaDia = $_POST["id_FichaDia"];
	$editarFichaDia -> editarFichaDia();
}
if ($tipoOperacion == "actualizarFichaDia") {
	$actualizarFichaDia = new ajaxFichaDia();
	$actualizarFichaDia -> id_FichaDia = $_POST["id_FichaDia"];
	$actualizarFichaDia -> patenteFichaDia = $_POST["patenteFichaDia"];
	$actualizarFichaDia -> kmSalidaFichaDia =  $_POST["kmsalidaFichaDia"];
    $actualizarFichaDia -> kmLlegadaFichaDia =  $_POST["kmllegadaFichaDia"];
    $actualizarFichaDia -> kmRecorridosVehiculo =  $_POST["kmrecorridoVehiculo"];
    $actualizarFichaDia -> idFuncionarioForaneo =  $_POST["idFuncionarioForaneo"];

	$actualizarFichaDia -> actualizarFichaDia();
}
if ($tipoOperacion == "eliminarFichaDia") {
	$eliminarFichaDia = new ajaxFichaDia();
	$eliminarFichaDia -> id_FichaDia = $_POST["id_FichaDia"];

	$eliminarFichaDia -> eliminarFichaDia();
}

?>