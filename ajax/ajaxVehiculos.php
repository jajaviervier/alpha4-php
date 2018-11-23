<?php 

require_once "../controllers/vehiculos.controller.php";
require_once "../models/vehiculos.modelo.php";


Class ajaxVehiculos {

	public $id_Vehiculos;
	public $patenteVehiculos;
	public $kmSalidaVehiculos;
	public $kmLlegadaVehiculos;
	public $serieQuimicos;
	public $cantidadVQ;
	public $descripVQ;
    public $idFuncionarioForaneo;
	
	public function crearVehiculos(){
		$datos = array(
		"patenteVehiculos"=>$this->patenteVehiculos,
		"kmSalidaVehiculos"=>$this->kmSalidaVehiculos,
        "kmLlegadaVehiculos"=>$this->kmLlegadaVehiculos,
		"serievehiculoQ"=>$this->serieQuimicos,
		"cantidadVQ"=>$this->cantidadVQ,
		"descripVQ"=>$this->descripVQ,
        "idFuncionarioForaneo"=>$this->idFuncionarioForaneo,
        
		);
		$respuesta = ControllerVehiculos::ctrCrearVehiculos($datos);
		echo $respuesta;
	}
	public function editarVehiculos(){
		$id_Vehiculos = $this->id_Vehiculos;

		$respuesta = ControllerVehiculos::ctrEditarVehiculos($id_Vehiculos);

		$datos = array('id_Vehiculos'=>$respuesta['id'],
						'patenteVehiculos'=>$respuesta['patente'],
						'kmsalidaVehiculos'=>$respuesta['descripcion'],
						'kmllegadaVehiculos'=>$respuesta['marca'],
						'serievehiculoQ'=>$respuesta['marca'],
						'cantidadVQ'=>$respuesta['marca'],
						'descripVQ'=>$respuesta['marca'],
						'idFuncionarioForaneo'=>$respuesta['idFuncionarioForaneo']
                        
					);
		echo json_encode($datos);

	}
	public function actualizarVehiculos(){
		$datos = array( "id_Vehiculos"=>$this->id_Vehiculos,
						"patenteVehiculos"=>$this->patenteVehiculos,
						"kmSalidaVehiculos"=>$this->kmSalidaVehiculos,
						"kmLlegadaVehiculos"=>$this->kmLlegadaVehiculos,
                       
                        "kmRecorridosVehiculo"=>$this->kmRecorridosVehiculo,
                        "idFuncionarioForaneo"=>$this->idFuncionarioForaneo
                        
						);

		$respuesta = ControllerVehiculos::ctrActualizarVehiculos($datos);

		echo $respuesta;
	}
	public function eliminarVehiculos(){
		$id_Vehiculos = $this->id_Vehiculos;
		

		$respuesta = ControllerVehiculos::ctrEliminarVehiculos($id_Vehiculos);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarVehiculos") {
    $crearNuevoVehiculos = new ajaxVehiculos();
	$crearNuevoVehiculos -> patenteVehiculos = $_POST["patenteVehiculos"];
	$crearNuevoVehiculos -> kmSalidaVehiculos =  $_POST["kmsalidaVehiculos"];
	$crearNuevoVehiculos -> kmLlegadaVehiculos =  $_POST["kmllegadaVehiculos"];
	$crearNuevoVehiculos -> cantidadVQ =  $_POST["cantidadQuimicos"];
	
	$crearNuevoVehiculos -> descripVQ =  $_POST["descripVQ"];
	$crearNuevoVehiculos -> serieQuimicos =  $_POST["serieQuimicos"];
    $crearNuevoVehiculos -> idFuncionarioForaneo =  $_POST["idFuncionarioForaneo"];
   
	$crearNuevoVehiculos ->crearVehiculos();
}

if ($tipoOperacion == "editarVehiculos") {
	$editarVehiculos = new ajaxVehiculos();
	$editarVehiculos -> id_Vehiculos = $_POST["id_Vehiculos"];
	$editarVehiculos -> editarVehiculos();
}
if ($tipoOperacion == "actualizarVehiculos") {
	$actualizarVehiculos = new ajaxVehiculos();
	$actualizarVehiculos -> id_Vehiculos = $_POST["id_Vehiculos"];
	$actualizarVehiculos -> patenteVehiculos = $_POST["patenteVehiculos"];
	$actualizarVehiculos -> kmSalidaVehiculos =  $_POST["kmsalidaVehiculos"];
    $actualizarVehiculos -> kmLlegadaVehiculos =  $_POST["kmllegadaVehiculos"];
    $actualizarVehiculos -> kmRecorridosVehiculo =  $_POST["kmrecorridoVehiculo"];
    $actualizarVehiculos -> idFuncionarioForaneo =  $_POST["idFuncionarioForaneo"];
    
	$actualizarVehiculos -> actualizarVehiculos();
}
if ($tipoOperacion == "eliminarVehiculos") {
	$eliminarVehiculos = new ajaxVehiculos();
	$eliminarVehiculos -> id_Vehiculos = $_POST["id_Vehiculos"];
	
	$eliminarVehiculos -> eliminarVehiculos();
}

?>