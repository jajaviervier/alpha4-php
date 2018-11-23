<?php

require_once "../controllers/accesorios.controller.php";
require_once "../models/accesorios.modelo.php";


Class ajaxAccesorios {

	public $id_Accesorios;
	public $serieAccesorios;

	public $cantidadAccesorios;

  public $desAccesorios;
  public $estado;

	public function crearAccesorios(){
		$datos = array(
		"serieAccesorios"=>$this->serieAccesorios,

         "cantidadAccesorios"=>$this->cantidadAccesorios,

         "desAccesorios"=>$this->desAccesorios,


		);
		$respuesta = ControllerAccesorios::ctrCrearAccesorios($datos);
		echo $respuesta;
	}
	public function editarAccesorios(){
		$id_Accesorios = $this->id_Accesorios;

		$respuesta = ControllerAccesorios::ctrEditarAccesorios($id_Accesorios);

		$datos = array('id_Accesorios'=>$respuesta['id'],
						'serieAccesorios'=>$respuesta['serie'],

						'cantidadAccesorios'=>$respuesta['cantidad'],

                        'desAccesorios'=>$respuesta['descripcion'],
                        'estado'=>$respuesta['estado']

					);
		echo json_encode($datos);

	}
	public function actualizarAccesorios(){
		$datos = array( "id_Accesorios"=>$this->id_Accesorios,
						"serieAccesorios"=>$this->serieAccesorios,
						"desAccesorios"=>$this->desAccesorios,
						"cantidadAccesorios"=>$this->cantidadAccesorios,

                        "obserAccesorios"=>$this->obserAccesorios,
                        "estado"=>$this->estado

						);

		$respuesta = ControllerAccesorios::ctrActualizarAccesorios($datos);

		echo $respuesta;
	}
	public function eliminarAccesorios(){
		$id_Accesorios = $this->id_Accesorios;


		$respuesta = ControllerAccesorios::ctrEliminarAccesorios($id_Accesorios);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarAccesorios") {
    $crearNuevoAccesorios = new ajaxAccesorios();
	$crearNuevoAccesorios -> serieAccesorios = $_POST["serieAccesorios"];

	$crearNuevoAccesorios -> cantidadAccesorios =  $_POST["cantidadAccesorios"];

	$crearNuevoAccesorios -> desAccesorios =  $_POST["desAccesorios"];



	$crearNuevoAccesorios ->crearAccesorios();
}

if ($tipoOperacion == "editarAccesorios") {
	$editarAccesorios = new ajaxAccesorios();
	$editarAccesorios -> id_Accesorios = $_POST["id_Accesorios"];
	$editarAccesorios -> editarAccesorios();
}
if ($tipoOperacion == "actualizarAccesorios") {
	$actualizarAccesorios = new ajaxAccesorios();
	$actualizarAccesorios -> id_Accesorios = $_POST["id_Accesorios"];
	$actualizarAccesorios -> serieAccesorios = $_POST["serieAccesorios"];
	$actualizarAccesorios -> desAccesorios =  $_POST["desAccesorios"];
    $actualizarAccesorios -> cantidadAccesorios =  $_POST["cantidadAccesorios"];
    $actualizarAccesorios -> obserAccesorios =  $_POST["obserAccesorios"];
    $actualizarAccesorios -> estado =  $_POST["estado"];

	$actualizarAccesorios -> actualizarAccesorios();
}
if ($tipoOperacion == "eliminarAccesorios") {
	$eliminarAccesorios = new ajaxAccesorios();
	$eliminarAccesorios -> id_Accesorios = $_POST["id_Accesorios"];

	$eliminarAccesorios -> eliminarAccesorios();
}

?>