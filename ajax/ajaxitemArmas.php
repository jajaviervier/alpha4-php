<?php 

require_once "../controllers/itemArmas.controller.php";
require_once "../models/itemArmas.modelo.php";

Class ajaxitemArmas {

	public $id_itemArmas;
	public $serie_itemArmas;
	public $tipoarma_itemArmas;
	public $observacion_itemArmas;
	public $imagen_itemArmas;
	public $estado_itemArmas;
	public $llave_subcat;
	public $idArmasForanea;
	public $id_armafun;
	public $id_funcionario;
	public function crearitemArmas(){
		$datos = array("serie"=>$this->serie_itemArmas,
						"observacion"=>$this->observacion_itemArmas,
						"tipoarma"=>$this->tipoarma_itemArmas,
						"imagen"=>$this->imagen_itemArmas,
						"estado"=>$this->estado_itemArmas,
                        "idArmasForanea"=>$this->idArmasForanea);
		$respuesta = ControlleritemArmas::ctrCrearitemArmas($datos);
		echo $respuesta;
	}

	public function actualizarFuncionario(){
		$datos = array("id_funcionario"=>$this->id_funcionario,
		"id_itemArmas"=>$this->id_itemArmas
						);
		$respuesta = ControlleritemArmas::ctrActualizarFuncionario($datos);
		echo $respuesta;
	}

	public function cargarSubcategorias(){
		$respuesta = ControllerProductos::ctrCargarSubcat($this->llave_subcat);
		echo $respuesta;
	}
	public function editarfuncionario(){
		$id_itemArmas = $this->id_itemArmas;
		$respuesta = ControlleritemArmas::ctrEditarfuncionario($id_itemArmas);
		$datos = array("id_itemArmas"=>$respuesta["id"],
						
						
						);
						echo json_encode($datos);
	}

	public function editaritemArmas(){
		$id_itemArmas = $this->id_itemArmas;
		$respuesta = ControlleritemArmas::ctrEditaritemArmas($id_itemArmas);
		$datos = array("id_itemArmas"=>$respuesta["id"],
						"serieitemArmas"=>$respuesta["serie"],
						"tipoitemArmas"=>$respuesta["tipoarma"],
						"observacion"=>$respuesta["observacion"],
						"estado"=>$respuesta["estado"],
						"idArmasForanea"=>$respuesta["id_arma"],
						"id_funcionario"=>$respuesta["id_funcionario"],
						"imagen"=>substr($respuesta["rutaImg"], 3)
						);
						echo json_encode($datos);
	}

	public function actualizaritemArmas(){
		$datos = array( "id_itemArmas"=>$this->id_itemArmas,
						"serie"=>$this->serie_itemArmas,
						"tipoarma"=>$this->tipoarma_itemArmas,
						"observacion"=>$this->observacion_itemArmas,
						"estado"=>$this->estado_itemArmas,
						"marca"=>$this->idArmasForanea,
						"armafun"=>$this->id_armafun,
						"imagen"=>$this->imagen_itemArmas,
						"rutaActual"=>$this->rutaActual
						);
		$respuesta = ControlleritemArmas::ctrActualizaritemArmas($datos);
		echo $respuesta;
	}
	public function eliminaritemArmas(){
		$id_itemArmas = $this->id_itemArmas;
		$ruta = $this->imagen_itemArmas;

		$respuesta = ControlleritemArmas::ctrEliminaritemArmas($id_itemArmas, $ruta);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertaritemArmas") {
	$crearNuevoitemArmas = new ajaxitemArmas();
	$crearNuevoitemArmas -> serie_itemArmas = $_POST["serieitemArmas"];
	$crearNuevoitemArmas -> tipoarma_itemArmas = $_POST["tipoitemArmas"];
	$crearNuevoitemArmas -> observacion_itemArmas = $_POST["observacionArma"];
	$crearNuevoitemArmas -> estado_itemArmas = $_POST["estado"];
    $crearNuevoitemArmas -> imagen_itemArmas = $_FILES["imagenitemArmas"];
    $crearNuevoitemArmas -> idArmasForanea = $_POST["idArmasForanea"];
	$crearNuevoitemArmas ->crearitemArmas();
}
if($tipoOperacion == "actualizarFunci") {
	$actualizaritemArmas = new ajaxitemArmas();
	$actualizaritemArmas -> id_funcionario = $_POST["id_funcionario"];
	$actualizaritemArmas -> id_itemArmas = $_POST["id_itemArmas"];
	$actualizaritemArmas -> actualizarFuncionario();
}
if ($tipoOperacion == "actualizarFuncionario") {
	$editaritemArmas = new ajaxitemArmas();
	$editaritemArmas -> id_itemArmas = $_POST["id_itemArmas"];
	$editaritemArmas -> editarfuncionario();
}
if($tipoOperacion == "seleccionarSubcategorias") {
	$selectSub = new ajaxProductos();
	$selectSub -> llave_subcat = $_POST["llave"];
	$selectSub ->cargarSubcategorias();
}
if ($tipoOperacion == "editaritemArmas") {
	$editaritemArmas = new ajaxitemArmas();
	$editaritemArmas -> id_itemArmas = $_POST["id_itemArmas"];
	$editaritemArmas -> editaritemArmas();
}
if ($tipoOperacion == "actualizaritemArmas") {
	$actualizaritemArmas = new ajaxitemArmas();
	$actualizaritemArmas -> id_itemArmas = $_POST["id_itemArmas"];
	$actualizaritemArmas -> serie_itemArmas = $_POST["serieitemArmas"];
	$actualizaritemArmas -> tipoarma_itemArmas = $_POST["tipoitemArmas"];
	$actualizaritemArmas -> idArmasForanea = $_POST["idArmasForanea"];
	$actualizaritemArmas -> estado_itemArmas = $_POST["estado"];
	$actualizaritemArmas -> id_armafun = $_POST["id_funcionario"];
	$actualizaritemArmas -> observacion_itemArmas = $_POST["observacionitemArma"];
	$actualizaritemArmas -> imagen_itemArmas = $_FILES["imagenitemArmas"];
	$actualizaritemArmas -> rutaActual = $_POST["rutaActual"];
	$actualizaritemArmas -> actualizaritemArmas();
}
if ($tipoOperacion == "eliminaritemArmas") {
	$eliminaritemArmas = new ajaxitemArmas();
	$eliminaritemArmas -> id_itemArmas = $_POST["id_itemArmas"];
	$eliminaritemArmas -> imagen_itemArmas = $_POST["rutaImagen"];
	$eliminaritemArmas -> eliminaritemArmas();
}

?>