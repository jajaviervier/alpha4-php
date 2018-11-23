<?php 

require_once "../controllers/itemChalecos.controller.php";
require_once "../models/itemChalecos.modelo.php";

Class ajaxitemChalecos {
	public $SerieItemChalecos;
	public $imagen_escudo;
	public $imagenItemChalecos;
	public $vinculo_item;
	public $urlItemChalecos;
	public $id_itemChalecos;
	public $marca;
	public $estado;
	public $chaleco_funcionari;

	public function crearItemChalecos(){
		$datos = array(
		"SerieItemChalecos"=>$this->SerieItemChalecos,
	    "marca"=> $this ->marca,
		"estado"=> $this ->estado,
	);
		$respuesta = ControllerItemChalecos::ctrCrearItemChalecos($datos);
		echo $respuesta;
	}
	public function editarItemChalecos(){
	$id_itemChalecos = $this->id_itemChalecos;
		$respuesta = ControllerItemChalecos::ctrEditarItemChalecos($id_itemChalecos);
		$datos = array("id_itemChalecos"=>$respuesta["id_itemchalecos"],
				 "serie"=>$respuesta["serie"],
				 "marca"=>$respuesta["marca"],
		         "modelo"=>$respuesta["modelo"],
		         "estado"=>$respuesta["estado"],
		         "id_chalecos"=>$respuesta["id_chalecos"]


				 
				 
				);

		echo json_encode($datos);
	


	}
	//--------------------------EDITAR TABLA CHALECO PARA ASIGNAR A UN FUNCIONARIO -------------------

	public function editarFun(){
		$id_itemChalecos = $this->id_itemChalecos;
			$respuesta = ControllerItemChalecos::ctrEditarFun($id_itemChalecos);
			$datos = array("id_itemChalecos"=>$respuesta["id_itemchalecos"],
					 "serie"=>$respuesta["serie"],
					
					 "id_chalecos"=>$respuesta["id_chalecos"]
	
	
					 
					 
					);
	
			echo json_encode($datos);
		
	
	
		}

		//----------------------ACTUALIZAR TABLA CHALECO PARA ASIGNAR A UN FUNCIONARIO-----------------
		public function actualizarFun(){
			$datos = array("id_itemChalecos"=>$this->id_itemChalecos,
							"chaleco_fun"=>$this->chaleco_funcionario
							);
	
			$respuesta = ControllerItemChalecos::ctrActualizarFun($datos);
	
			echo $respuesta;
			
	
		}
		///__-----------------------------------------------------------------------------------------

	
	
	
		public function actualizarItemChalecos(){
		$datos = array("id_itemChalecos"=>$this->id_itemChalecos,
						"SerieItemChalecos"=>$this->SerieItemChalecos,
						"marca"=>$this->marca,
						"estado"=>$this->estado,
						"chaleco_funcionario"=>$this->chaleco_funcionari,

				

					
					);

		$respuesta = ControllerItemChalecos::ctrActualizarItemChalecos($datos);

		echo $respuesta;
		

	}
	public function eliminarItemChalecos(){
		$id_Chalecos = $this->id_Chalecos;
	

		$respuesta = ControllerItemChalecos::ctrEliminarItemChalecos($id_Chalecos);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarItemChalecos") {
    $crearNuevoChalecos = new ajaxItemChalecos();
	$crearNuevoChalecos -> SerieItemChalecos = $_POST["SerieItemChalecos"];
	$crearNuevoChalecos -> marca = $_POST["marcaYmodelo"];
	$crearNuevoChalecos -> estado = $_POST["estado"];
	$crearNuevoChalecos ->crearItemChalecos();
}

if ($tipoOperacion == "editarItemChalecos") {
	$editarChalecos = new ajaxItemChalecos();
	$editarChalecos -> id_itemChalecos = $_POST["idItemChalecos"];
	$editarChalecos -> editarItemChalecos();
}
if ($tipoOperacion == "actualizarItemChalecos") {
	$actualizarChalecos = new ajaxItemChalecos();
	$actualizarChalecos -> id_itemChalecos = $_POST["id_itemChalecos"];
	$actualizarChalecos -> SerieItemChalecos = $_POST["SerieItemChalecos"];
	$actualizarChalecos -> marca = $_POST["marca"];
	$actualizarChalecos -> estado = $_POST["estado"];
	$actualizarChalecos -> chaleco_funcionari = $_POST["id_funcionario"];
	$actualizarChalecos -> actualizarItemChalecos();
}
//-----------------------EDITAR TABLA CHALECO PARA ASIGNAR A UN FUNCIONARIO ----------------------
if ($tipoOperacion == "editarFun") {
	$editarChalecos = new ajaxItemChalecos();
	$editarChalecos -> id_itemChalecos = $_POST["idchaleco_funcionario"];
	$editarChalecos -> editarFun();
}
//------------------------ACTUALIZAR LA TABLA CHALECO APRA ASIGNAR A UN FUNCIONARIO----------------
if ($tipoOperacion == "actualizarFun") {
	$actualizarChalecos = new ajaxItemChalecos();

	$actualizarChalecos -> chaleco_funcionario = $_POST["id_funcionario"];

	$actualizarChalecos -> actualizarFun();
}

if ($tipoOperacion == "eliminarItemChalecos") {
	$eliminarChalecos = new ajaxItemChalecos();
	$eliminarChalecos -> id_Chalecos = $_POST["id_itemChalecos"];
	$eliminarChalecos -> eliminarItemChalecos();
}

?>