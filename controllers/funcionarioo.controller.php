<?php 

Class ControllerFuncionarioo {
	
	public function listarFuncionariooCtr() {
		$tabla = "funcionario";
		$respuesta = ModeloFuncionarioo::listarFuncionariooMdl($tabla);

		return $respuesta;
	}
	public function listarFuncionarioConductorCtr() {
		$tabla = "funcionario";
		$respuesta = ModeloFuncionarioo::listarFuncionarioConductorMdl($tabla);

		return $respuesta;
	}
	public function ctrCargarSubcat($llave) {

		$respuesta = ModeloFuncionarioo::subselectMdl($llave);
	
		return $respuesta;
	
	}

	static public function ctrCrearFuncionarioo($datos) {
		$tabla = "funcionario";

		list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);	

		$nuevoAncho = 1024;
		$nuevoAlto = 768;

		$directorio = "../views/dist/img/Funcionarioo";

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


		$respuesta = ModeloFuncionarioo::mdlCrearFuncionarioo($tabla, $datos, $rutaImagen);

		return $respuesta;

	}

	static public function ctrEliminarFuncionarioo($id_Funcionarioo, $ruta) {

		$tabla = "funcionario";

		if ( unlink($ruta) ) {
		
			$respuesta = ModeloFuncionarioo::mdlEliminarFuncionarioo($tabla, $id_Funcionarioo);	
		
		}
		
		return $respuesta;

	}

	static public function ctrEditarFuncionarioo($id_Funcionarioo) {

		$tabla = "funcionario";
		$respuesta = ModeloFuncionarioo::mdlEditarFuncionarioo($tabla, $id_Funcionarioo);


		return $respuesta;
	}

	static public function ctrActualizarFuncionarioo($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "funcionario";

		if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;

		} 
		// LA ACTUALIZACIÓN VIENE CON IMAGEN
		else {

			unlink("../".$datos["rutaActual"]);
			
			list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);	

			$nuevoAncho = 1024;
			$nuevoAlto = 768;

			$directorio = "../views/dist/img/Funcionarioo";

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

		$respuesta = ModeloFuncionarioo::mdlActualizarFuncionarioo($tabla, $datos, $rutaImagen);

		return $respuesta;

	}
}

?>