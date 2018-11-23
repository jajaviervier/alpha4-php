<?php 

require_once "../controllers/Quimicos.controller.php";
require_once "../models/Quimicos.modelo.php";


Class ajaxQuimicos {

	public $id_Quimicos;
	public $serieQuimicos;
	public $descripQuimicos;
	
    public $cantidadQuimicos;
   
	public function crearQuimicos(){
		$datos = array(
		"serieQuimicos"=>$this->serieQuimicos,
		"descripQuimicos"=>$this->descripQuimicos,
      
        "cantidadQuimicos"=>$this->cantidadQuimicos,
   
		);
		$respuesta = ControllerQuimicos::ctrCrearQuimicos($datos);
		echo $respuesta;
	}
	public function editarQuimicos(){
		$id_Quimicos = $this->id_Quimicos;

		$respuesta = ControllerQuimicos::ctrEditarQuimicos($id_Quimicos);

		$datos = array('id_Quimicos'=>$respuesta['id'],
						'serieQuimicos'=>$respuesta['serie'],
						'descripQuimicos'=>$respuesta['descripcion'],
					
                        'cantidadQuimicos'=>$respuesta['cantidad']
                     
					);
		echo json_encode($datos);

	}
	public function actualizarQuimicos(){
		$datos = array( "id_Quimicos"=>$this->id_Quimicos,
						"serieQuimicos"=>$this->serieQuimicos,
						"descripQuimicos"=>$this->descripQuimicos,
						
                        "cantidadQuimicos"=>$this->cantidadQuimicos
                 
						);

		$respuesta = ControllerQuimicos::ctrActualizarQuimicos($datos);

		echo $respuesta;
	}
	public function eliminarQuimicos(){
		$id_Quimicos = $this->id_Quimicos;
		

		$respuesta = ControllerQuimicos::ctrEliminarQuimicos($id_Quimicos);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarQuimicos") {
    $crearNuevoQuimicos = new ajaxQuimicos();
	$crearNuevoQuimicos -> serieQuimicos = $_POST["serieQuimicos"];
	$crearNuevoQuimicos -> descripQuimicos =  $_POST["descripQuimicos"];
	
    $crearNuevoQuimicos -> cantidadQuimicos =  $_POST["cantidadQuimicos"];
    
	$crearNuevoQuimicos ->crearQuimicos();
}

if ($tipoOperacion == "editarQuimicos") {
	$editarQuimicos = new ajaxQuimicos();
	$editarQuimicos -> id_Quimicos = $_POST["id_Quimicos"];
	$editarQuimicos -> editarQuimicos();
}
if ($tipoOperacion == "actualizarQuimicos") {
	$actualizarQuimicos = new ajaxQuimicos();
	$actualizarQuimicos -> id_Quimicos = $_POST["id_Quimicos"];
	$actualizarQuimicos -> serieQuimicos = $_POST["serieQuimicos"];
	$actualizarQuimicos -> descripQuimicos =  $_POST["descripQuimicos"];
    
    $actualizarQuimicos -> cantidadQuimicos =  $_POST["cantidadQuimicos"];
  
	$actualizarQuimicos -> actualizarQuimicos();
}
if ($tipoOperacion == "eliminarQuimicos") {
	$eliminarQuimicos = new ajaxQuimicos();
	$eliminarQuimicos -> id_Quimicos = $_POST["id_Quimicos"];
	
	$eliminarQuimicos -> eliminarQuimicos();
}

?>