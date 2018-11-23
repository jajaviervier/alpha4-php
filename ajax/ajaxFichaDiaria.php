<?php

require_once "../controllers/fichaDiaria.controller.php";
require_once "../models/fichaDiaria.modelo.php";


Class ajaxfichaDiaria {

	public $id_fichaDiaria;
	public $serieEnAcc;
	public $cantidadEnAcc;
	public $idFuncionario;
	public $descripEnAcc;
	public $estadoAcc;
   
 

	public function crearfichaDiaria(){
		$datos = array(
	     "serieAccesorios"=>$this->serieEnAcc,
	     "cantidadAccesorios"=>$this->cantidadEnAcc,
        "idFuncionarioForaneo"=>$this->idFuncionario,
        "desAccesorios"=>$this->descripEnAcc,
        

		);
		$respuesta = ControllerfichaDiaria::ctrCrearfichaDiaria($datos);
		echo $respuesta;
	}
	public function editarfichaDiaria(){
		$id_fichaDiaria = $this->id_fichaDiaria;

		$respuesta = ControllerfichaDiaria::ctrEditarfichaDiaria($id_fichaDiaria);

		$datos = array('id_fichaDiaria'=>$respuesta['id'],
						'idFuncionarioForaneo'=>$respuesta['id_funcionario'],
						'serieAccesorios'=>$respuesta['serie'],
						'cantidadAccesorios'=>$respuesta['cantidad'],

               			'desAccesorios'=>$respuesta['descripcion'],
           				 'estadoAccesorios'=>$respuesta['estado'],
            

					);
		echo json_encode($datos);

	}
	public function actualizarfichaDiaria(){
		$datos = array( "id_fichaDiaria"=>$this->id_fichaDiaria,
						"serieAccesorios"=>$this->serieEnAcc,
						"cantidadAccesorios"=>$this->cantidadEnAcc,
						"idFuncionarioForaneo"=>$this->idFuncionario,

            "desAccesorios"=>$this->descripEnAcc,
			"estadoAccesorios"=>$this->estadoAcc,

						);

		$respuesta = ControllerfichaDiaria::ctrActualizarfichaDiaria($datos);

		echo $respuesta;
	}
	public function eliminarfichaDiaria(){
		$id_fichaDiaria = $this->id_fichaDiaria;


		$respuesta = ControllerfichaDiaria::ctrEliminarfichaDiaria($id_fichaDiaria);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarfichaDiaria") {
    $crearNuevofichaDiaria = new ajaxfichaDiaria();
	$crearNuevofichaDiaria -> serieEnAcc = $_POST["serieAccesorios"];
	$crearNuevofichaDiaria -> cantidadEnAcc =  $_POST["cantidadAccesorios"];
	$crearNuevofichaDiaria -> idFuncionario =  $_POST["idFuncionarioForaneo"];

    $crearNuevofichaDiaria -> descripEnAcc =  $_POST["desAccesorios"];
  

	$crearNuevofichaDiaria ->crearfichaDiaria();
}

if ($tipoOperacion == "editarfichaDiaria") {
	$editarfichaDiaria = new ajaxfichaDiaria();
	$editarfichaDiaria -> id_fichaDiaria = $_POST["id_fichaDiaria"];
	$editarfichaDiaria -> editarfichaDiaria();
}
if ($tipoOperacion == "actualizarfichaDiaria") {
	$actualizarfichaDiaria = new ajaxfichaDiaria();
	$actualizarfichaDiaria -> id_fichaDiaria = $_POST["id_fichaDiaria"];
	$actualizarfichaDiaria -> serieEnAcc = $_POST["serieAccesorios"];
	$actualizarfichaDiaria -> cantidadEnAcc =  $_POST["cantidadAccesorios"];
    $actualizarfichaDiaria -> idFuncionario =  $_POST["idFuncionarioForaneo"];
    $actualizarfichaDiaria -> descripEnAcc =  $_POST["desAccesorios"];
	$actualizarfichaDiaria -> estadoAcc =  $_POST["estadoAccesorios"];

	$actualizarfichaDiaria -> actualizarfichaDiaria();
}
if ($tipoOperacion == "eliminarfichaDiaria") {
	$eliminarfichaDiaria = new ajaxfichaDiaria();
	$eliminarfichaDiaria -> id_fichaDiaria = $_POST["id_fichaDiaria"];

	$eliminarfichaDiaria -> eliminarfichaDiaria();
}

?>