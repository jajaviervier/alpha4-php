<?php 

require_once "../controllers/radios.controller.php";
require_once "../models/radios.modelo.php";


Class ajaxRadios {

	public $id_radios;
	public $serieRadios;
	public $modeloRadios;
	public $tipo_equipo;
	public $serie_GPS;
    public $observacion;
    public $estado;
	public $cargo;
	public function crearRadios(){
		$datos = array(
		"serieRadios"=>$this->serieRadios,
		"modeloRadios"=>$this->modeloRadios,
        "tipoRadios"=>$this->tipo_equipo,
        "serieGPS_Radios"=>$this->serie_GPS,
        "obserRadios"=>$this->observacion,
        "estado"=>$this->estado,
        "cargoRadios"=>$this->cargo,
		);
		$respuesta = ControllerRadios::ctrCrearRadios($datos);
		echo $respuesta;
	}
	public function editarRadios(){
		$id_radios = $this->id_radios;

		$respuesta = ControllerRadios::ctrEditarRadios($id_radios);

		$datos = array('id_Radios'=>$respuesta['id'],//id_radio estaba con minuscula erea id_Radio
						'serieRadios'=>$respuesta['serie'],
						'modeloRadios'=>$respuesta['modelo'],
						'tipoRadios'=>$respuesta['tipo_equipo'],
                        'serieGPS_Radios'=>$respuesta['serie_GPS'],
                        'obserRadios'=>$respuesta['observacion'],
                        'estado'=>$respuesta['estado'],
                        'cargoRadios'=>$respuesta['id_radio_funcionario']
					);
		echo json_encode($datos);

	}
	public function actualizarRadios(){
		$datos = array( "id_Radios"=>$this->id_radios,//id_radio estaba con minuscula erea id_Radio
						"serieRadios"=>$this->serieRadios,
						"modeloRadios"=>$this->modeloRadios,
						"tipoRadios"=>$this->tipo_equipo,
                        "serieGPS_Radios"=>$this->serie_GPS,
                        "obserRadios"=>$this->observacion,
                        "estado"=>$this->estado,
						"cargoRadios"=>$this->cargo
						);

		$respuesta = ControllerRadios::ctrActualizarRadios($datos);

		echo $respuesta;
	}
	public function eliminarRadios(){
		$id_radios = $this->id_radios;
		

		$respuesta = ControllerRadios::ctrEliminarRadios($id_radios);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarRadios") {
    $crearNuevoRadios = new ajaxRadios();
	$crearNuevoRadios -> serieRadios = $_POST["serieRadios"];
	$crearNuevoRadios -> modeloRadios =  $_POST["modeloRadios"];
	$crearNuevoRadios -> tipo_equipo =  $_POST["tipoRadios"];
    $crearNuevoRadios -> serie_GPS =  $_POST["serieGPS_Radios"];
    $crearNuevoRadios -> observacion =  $_POST["obserRadios"];
    $crearNuevoRadios -> estado =  $_POST["estado"];
   
	$crearNuevoRadios ->crearRadios();
}

if ($tipoOperacion == "editarRadios") {
	$editarRadios = new ajaxRadios();
	$editarRadios -> id_radios = $_POST["id_Radios"];
	$editarRadios -> editarRadios();
}
if ($tipoOperacion == "actualizarRadios") {
	$actualizarRadios = new ajaxRadios();
	$actualizarRadios -> id_radios = $_POST["id_Radios"];
	$actualizarRadios -> serieRadios = $_POST["serieRadios"];
	$actualizarRadios -> modeloRadios =  $_POST["modeloRadios"];
	$actualizarRadios -> tipo_equipo =  $_POST["tipoRadios"];
    $actualizarRadios -> serie_GPS =  $_POST["serieGPS_Radios"];
    $actualizarRadios -> observacion =  $_POST["obserRadios"];
    $actualizarRadios -> estado =  $_POST["estado"];
    $actualizarRadios -> cargo =  $_POST["id_funcionario"];
	$actualizarRadios -> actualizarRadios();
}
if ($tipoOperacion == "eliminarRadios") {
	$eliminarRadios = new ajaxRadios();
	$eliminarRadios -> id_radios = $_POST["id_Radios"];
	
	$eliminarRadios -> eliminarRadios();
}

?>