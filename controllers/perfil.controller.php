<?php 

Class ControllerPerfil {
	
	public function listarPerfilCtr($id_usuario) {
		$tabla = "usuarios";
		$respuesta = ModeloPerfil::listarPerfilMdl($tabla,$id_usuario);

		return $respuesta;
	}


	static public function ctrEditarPerfil($id_usuario) {

		$tabla = "usuarios";
		$respuesta = ModeloUsuario::mdlEditarPerfil($tabla, $id_usuario);


		return $respuesta;
	}

	static public function ctrActualizarPerfil($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "usuarios";

		if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;

		} 
		// LA ACTUALIZACIÓN VIENE CON IMAGEN
		else {

			unlink("../".$datos["rutaActual"]);
			
			list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);	

			$nuevoAncho = 1024;
			$nuevoAlto = 768;

			$directorio = "../views/dist/img/perfil";

			if($datos["imagen"]["type"] == "image/jpeg"){

				$rutaImagen = $directorio."/".md5($datos["imagen"]["tmp_name"]).".jpeg";

				$origen = imagecreatefromjpeg($datos["imagen"]["tmp_name"]);						
				$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

				imagejpeg($destino, $rutaImagen);

			}

			if($datos["imagen"]["type"] == "image/png"){

				$rutaImagen = $directorio."/".md5($datos["imagen"]["name"]).".png";

				$origen = imagecreatefrompng($datos["imagen"]["tmp_name"]);						

				$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

				imagealphablending($destino, FALSE);
		
				imagesavealpha($destino, TRUE);

				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

				imagepng($destino, $rutaImagen);

			}


			
			
		}

		$respuesta = ModeloUsuario::mdlActualizarPerfil($tabla, $datos, $rutaImagen);

		return $respuesta;

	}
}

?>