<?php 

require_once "../controllers/crearQuimicos.controller.php";
require_once "../models/crearQuimicos.modelo.php";


Class ajaxCrearQuimicos {

	public $id_CrearQuimicos;
	public $serieCrearQuimicos;
	public $tipoCrearQuimicos;
	public $calibreCrearQuimicos;
	public $marcaCrearQuimicos;
    public $modeloCrearQuimicos;
    public $cantidadCrearQuimicos;
    public $consumoCrearQuimicos;
    public $stockCrearQuimicos;
	public function crearCrearQuimicos(){
		$datos = array(
		"serieCrearQuimicos"=>$this->serieCrearQuimicos,
		"tipoCrearQuimicos"=>$this->tipoCrearQuimicos,
        "calibreCrearQuimicos"=>$this->calibreCrearQuimicos,
        "marcaCrearQuimicos"=>$this->marcaCrearQuimicos,
        "modeloCrearQuimicos"=>$this->modeloCrearQuimicos,
       
		);
		$respuesta = ControllerCrearQuimicos::ctrCrearCrearQuimicos($datos);
		echo $respuesta;
	}
	public function editarCrearQuimicos(){
		$id_CrearQuimicos = $this->id_CrearQuimicos;

		$respuesta = ControllerCrearQuimicos::ctrEditarCrearQuimicos($id_CrearQuimicos);

		$datos = array('id_CrearQuimicos'=>$respuesta['id'],
						'serieCrearQuimicos'=>$respuesta['codigo'],
						'tipoCrearQuimicos'=>$respuesta['tipo'],
						'calibreCrearQuimicos'=>$respuesta['calibre'],
                        'marcaCrearQuimicos'=>$respuesta['marca'],
                        'modeloCrearQuimicos'=>$respuesta['modelo']
                      
					);
		echo json_encode($datos);

	}
	public function actualizarCrearQuimicos(){
		$datos = array( "id_CrearQuimicos"=>$this->id_CrearQuimicos,
						"serieCrearQuimicos"=>$this->serieCrearQuimicos,
						"tipoCrearQuimicos"=>$this->tipoCrearQuimicos,
						"calibreCrearQuimicos"=>$this->calibreCrearQuimicos,
                        "marcaCrearQuimicos"=>$this->marcaCrearQuimicos,
                        "modeloCrearQuimicos"=>$this->modeloCrearQuimicos
                      
						);

		$respuesta = ControllerCrearQuimicos::ctrActualizarCrearQuimicos($datos);

		echo $respuesta;
	}
	public function eliminarCrearQuimicos(){
		$id_CrearQuimicos = $this->id_CrearQuimicos;
		

		$respuesta = ControllerCrearQuimicos::ctrEliminarCrearQuimicos($id_CrearQuimicos);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarCrearQuimicos") {
    $crearNuevoCrearQuimicos = new ajaxCrearQuimicos();
	$crearNuevoCrearQuimicos -> serieCrearQuimicos = $_POST["serieCrearQuimicos"];
	$crearNuevoCrearQuimicos -> tipoCrearQuimicos =  $_POST["tipoCrearQuimicos"];
	$crearNuevoCrearQuimicos -> calibreCrearQuimicos =  $_POST["calibreCrearQuimicos"];
    $crearNuevoCrearQuimicos -> marcaCrearQuimicos =  $_POST["marcaCrearQuimicos"];
    $crearNuevoCrearQuimicos -> modeloCrearQuimicos =  $_POST["modeloCrearQuimicos"];
 
	$crearNuevoCrearQuimicos ->crearCrearQuimicos();
}

if ($tipoOperacion == "editarCrearQuimicos") {
	$editarCrearQuimicos = new ajaxCrearQuimicos();
	$editarCrearQuimicos -> id_CrearQuimicos = $_POST["id_CrearQuimicos"];
	$editarCrearQuimicos -> editarCrearQuimicos();
}
if ($tipoOperacion == "actualizarCrearQuimicos") {
	$actualizarCrearQuimicos = new ajaxCrearQuimicos();
	$actualizarCrearQuimicos -> id_CrearQuimicos = $_POST["id_CrearQuimicos"];
	$actualizarCrearQuimicos -> serieCrearQuimicos = $_POST["serieCrearQuimicos"];
	$actualizarCrearQuimicos -> tipoCrearQuimicos =  $_POST["tipoCrearQuimicos"];
	$actualizarCrearQuimicos -> calibreCrearQuimicos =  $_POST["calibreCrearQuimicos"];
    $actualizarCrearQuimicos -> marcaCrearQuimicos =  $_POST["marcaCrearQuimicos"];
    $actualizarCrearQuimicos -> modeloCrearQuimicos =  $_POST["modeloCrearQuimicos"];
 
	$actualizarCrearQuimicos -> actualizarCrearQuimicos();
}
if ($tipoOperacion == "eliminarCrearQuimicos") {
	$eliminarCrearQuimicos = new ajaxCrearQuimicos();
	$eliminarCrearQuimicos -> id_CrearQuimicos = $_POST["id_CrearQuimicos"];
	
	$eliminarCrearQuimicos -> eliminarCrearQuimicos();
}

?>