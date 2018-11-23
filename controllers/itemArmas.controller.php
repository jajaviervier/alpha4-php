<?php 

Class ControlleritemArmas {
	
	public function listaritemArmasCtr() {
		$tabla = "item_armas";
		$respuesta = ModeloitemArmas::listaritemArmasMdl($tabla);

		return $respuesta;
	}
	public function ctrCargarSubcat($llave) {

		$respuesta = ModeloitemArmas::subselectMdl($llave);
	
		return $respuesta;
	
	}
	static public function ctrActualizarFuncionario($id_itemArmas) {

		$tabla = "item_armas";
		$respuesta = ModeloitemArmas::mdlActualizarFuncionario($tabla, $id_itemArmas);


		return $respuesta;
	}
	static public function ctrEditarfuncionario($id_itemArmas) {

		$tabla = "item_armas";
		$respuesta = ModeloitemArmas::mdlEditarfuncionario($tabla, $id_itemArmas);


		return $respuesta;
	}
	

	static public function ctrCrearitemArmas($datos) {
		$tabla = "item_armas";

		list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);	

		$nuevoAncho = 1024;
		$nuevoAlto = 768;

		$directorio = "../views/dist/img/itemArmas";

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


		$respuesta = ModeloitemArmas::mdlCrearitemArmas($tabla, $datos, $rutaImagen);

		return $respuesta;

	}

	static public function ctrEliminaritemArmas($id_itemArmas, $ruta) {

		$tabla = "item_armas";

		if ( unlink($ruta) ) {
		
			$respuesta = ModeloitemArmas::mdlEliminaritemArmas($tabla, $id_itemArmas);	
		
		}
		
		return $respuesta;

	}

	static public function ctrEditaritemArmas($id_itemArmas) {

		$tabla = "item_armas";
		$respuesta = ModeloitemArmas::mdlEditaritemArmas($tabla, $id_itemArmas);


		return $respuesta;
	}

	static public function ctrActualizaritemArmas($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "item_armas";

		if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;

		} 
		// LA ACTUALIZACIÓN VIENE CON IMAGEN
		else {

			unlink("../".$datos["rutaActual"]);
			
			list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);	

			$nuevoAncho = 1024;
			$nuevoAlto = 768;

			$directorio = "../views/dist/img/itemArmas";

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

		$respuesta = ModeloitemArmas::mdlActualizaritemArmas($tabla, $datos, $rutaImagen);

		return $respuesta;

	}
}

?>