<?php 

require_once "../controllers/chalecos.controller.php";
require_once "../models/chalecos.modelo.php";
/* Requerimos los archivos controlador y modelo */
//chalecos 
Class ajaxChalecos {

	public $id_Chalecos;
	public $escudoMarca;
	public $escudoModelo;
	public $escudoFuncionario;
	public $imagen_Chalecos;
		/*Creamos variables tipo public */

	public function crearChalecos(){
		$datos = array(
		"escudoMarca"=>$this->escudoMarca,
		"escudoModelo"=> $this ->escudoModelo);
		$respuesta = ControllerChalecos::ctrCrearChalecos($datos);
		echo $respuesta;
				/*Enviamos los datos obtenidos */

	}
	public function editarChalecos(){
	/*Obtenemos los datos de la marca y modelo segun su id */
	$id_Chalecos = $this->id_Chalecos;

		$respuesta = ControllerChalecos::ctrEditarChalecos($id_Chalecos);

		$datos = array("id_Chalecos"=>$respuesta["id_chalecos"],
						"escudoMarca"=>$respuesta["marca"],
						"escudoModelo"=>$respuesta["modelo"]);

		echo json_encode($datos);

	}
	/*Enviamos los datos que se actualizaran al controlador */
	/*Se soluciona la funcionalidad de actualizar categoria 03/10/2018 */

	public function actualizarChalecos(){
		$datos = array( "id_Chalecos"=>$this->id_Chalecos,
						"escudoMarca"=>$this->escudoMarca,
						"escudoModelo"=>$this->escudoModelo);
					
		$respuesta = ControllerChalecos::ctrActualizarChalecos($datos);

		echo $respuesta;
	

	}

	/*enviamos la id del escudo que eliminaremos al controlador */
	public function eliminarChalecos(){
		$id_Chalecos = $this->id_Chalecos;
	

		$respuesta = ControllerChalecos::ctrEliminarChalecos($id_Chalecos);

		echo $respuesta;

	}

}
 

/*Obtenemos los datos del formulario segun su name */
$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarChalecos") {
    $crearNuevoChalecos = new ajaxChalecos();
	$crearNuevoChalecos -> escudoMarca = $_POST["escudoMarca"];
	$crearNuevoChalecos -> escudoModelo = $_POST["escudoModelo"];


	$crearNuevoChalecos ->crearChalecos();
}

if ($tipoOperacion == "editarChalecos") {
	$editarChalecos = new ajaxChalecos();
	$editarChalecos -> id_Chalecos = $_POST["id_Chalecos"];
	$editarChalecos -> editarChalecos();
}
if ($tipoOperacion == "actualizarChalecos") {
	$actualizarChalecos = new ajaxChalecos();
	$actualizarChalecos -> id_Chalecos = $_POST["id_Chalecos"];

	$actualizarChalecos -> escudoMarca = $_POST["escudoMarca"];
	$actualizarChalecos -> escudoModelo =  $_POST["escudoModelo"];

	$actualizarChalecos -> actualizarChalecos();
}
if ($tipoOperacion == "eliminarChalecos") {
	$eliminarChalecos = new ajaxChalecos();
	$eliminarChalecos -> id_Chalecos = $_POST["id_Chalecos"];
	$eliminarChalecos -> eliminarChalecos();
}

?>