<?php 

require_once "../controllers/perfil.controller.php";
require_once "../models/editarperfil.modelo.php";


Class ajaxPerfil {

	public $id_usuario;


	public $nombre;
	public $correo;
	public $contraseña;
	public $imagen;
	public $rutaActual;



	public function editarPerfil(){
		$id_usuario = $this->id_usuarios;
		$respuesta = ControllerPerfil::ctrEditarPerfil($id_usuario);
		
		$datos = array("id_usuario"=>$respuesta["idusuarios"],
						"nombre"=>$respuesta["usuariosNombre"],
						"correo"=>$respuesta["usuariosCorreo"],
						"contraseña"=>$respuesta["usuariosPass"],
						"imagen"=>substr($respuesta ["usuariosAvatar"],3)
						);
						echo json_encode($datos);
	}
	public function actualizarPerfil(){
		$datos = array( "id_usuario"=>$this->id_usuario,
						"nombre"=>$this->nombre,
						"correo"=>$this->correo,
						"contraseña"=>$this->contraseña,
						"imagen"=>$this->imagen,
						"rutaActual"=>$this->rutaActual
						);
					

		$respuesta = ControllerPerfil::ctrActualizarPerfil($datos);

		echo $respuesta;
	}


}

$tipoOperacion = $_POST["tipoOperacion"];



if ($tipoOperacion == "editarPerfil") {
	$editarPerfil = new ajaxPerfil();
	$editarPerfil -> id_usuarios = $_POST["id_usuario"];
	$editarPerfil -> editarPerfil();
}
if ($tipoOperacion == "actualizarPerfil") {
	$actualizarPerfil = new ajaxPerfil();
	$actualizarPerfil -> id_usuario = $_POST["id_usuario"];
	$actualizarPerfil -> nombre = $_POST["nombre"];
	$actualizarPerfil -> correo = $_POST["correo"];
	$actualizarPerfil -> contraseña = $_POST["contraseña"];
	$actualizarPerfil -> imagen = $_FILES["imagenPerfil"];
	$actualizarPerfil -> rutaActual = $_POST["rutaActual"];
	$actualizarPerfil -> actualizarPerfil();
}


?>