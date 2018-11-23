<?php 

class ControllerEnrutamiento {

	public function enrutamiento() {

		$ruta = $_GET["ruta"];

		if ($ruta == "home" ||
			//------ARMAS----------------
			$ruta == "armas" ||
			$ruta == "itemArmas" ||
			//----------------------------
			//-------CASCOS-------------
			$ruta == "cascos" ||
			$ruta == "cascositem" ||
			//---------------------------------------
			//-------Radios y Accesorios de Radio----
            $ruta == "radios" ||
			$ruta == "accEquipoRadio"||
			//------------------------------------

			//-------Accesorios----------------
			$ruta == "accesorios" ||
			$ruta == "bincardAcc" ||
			$ruta == "crearAcc" ||
			//---------------------------------
			
			//---------Chalecos-----------------------
			$ruta == "chalecos" ||
			$ruta == "itemChalecos" ||
			//------------------------------------------
			//--------------VEHICULOS------------------
			$ruta == "vehiculos" ||
			$ruta == "cargaQuimicoVehi" ||
			//--------------------------------------
			//----------Quimicos-------------------
			$ruta == "quimicos" ||
			$ruta == "bincardQuim" ||
			$ruta == "crearQuimicos" ||
			//------------------------------------
			//--------------Perfil-----------------
			$ruta == "perfil" ||
			$ruta == "editarperfil" ||

			//------------FUNCIONARIOS---------------
			//--------Entrega de Accesorios---------------
			$ruta == "funcionarioo" ||
			$ruta == "fichaDiaria"||
			$ruta == "fichaDia" ||
			//-------------------------------------------

			$ruta == "salir") {

			include "views/modulos/".$ruta.".php";
		
		} else {
			include "views/modulos/error404.php";
		}


	}
}

?>