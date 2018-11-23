<?php 

require_once "controllers/emede5.controller.php";
// ------ Rutas ------

require_once "controllers/template.controller.php";
// ------ Rutas ------
require_once "controllers/enrutamiento.controller.php";

// ------ Funcionarios ------
//----Ficha Dia ------
require_once "controllers/fichaDia.controller.php";
require_once "models/fichaDia.modelo.php";

//--------Ficha Diaria Funcionarios------
require_once "models/fichaDiaria.modelo.php";
require_once "controllers/fichaDiaria.controller.php";

// ------ Cascos ------
require_once "controllers/cascos.controller.php";
require_once "models/cascos.modelo.php";

//-------Funcionario-------
require_once "controllers/funcionarioo.controller.php";
require_once "models/funcionarioo.modelo.php";

// ------ Item Cascos ------
require_once "controllers/cascositem.controller.php";
require_once "models/cascositem.modelo.php";

// ------ Tipos de Armas ------
require_once "controllers/armas.controller.php";
require_once "models/armas.modelo.php";
// ------ Bodega de Armas ------
require_once "controllers/itemArmas.controller.php";
require_once "models/itemArmas.modelo.php";


//-------Quimicos----------------
require_once "controllers/quimicos.controller.php";
require_once "models/quimicos.modelo.php";
//------Crear Quimicos----------------------------
require_once "controllers/crearQuimicos.controller.php";
require_once "models/crearQuimicos.modelo.php";

// ------ Bodega de chalecos ------
require_once "controllers/itemChalecos.controller.php";
require_once "models/itemchalecos.modelo.php";

// ------ Tipos de chalecos------
require_once "controllers/chalecos.controller.php";
require_once "models/chalecos.modelo.php";



// ------ Radios ------

require_once "models/radios.modelo.php";
require_once "controllers/radios.controller.php";


// ------ Accesorios ------

require_once "models/accesorios.modelo.php";
require_once "controllers/accesorios.controller.php";

require_once "controllers/crearAcc.controller.php";
require_once "models/crearAcc.modelo.php";

// ------ Equipo radio ------

require_once "models/accEquipoRadio.modelo.php";
require_once "controllers/accEquipoRadio.controller.php";

// ------ Perfil ------

require_once "models/perfil.modelo.php";
require_once "models/editarperfil.modelo.php";

require_once "controllers/perfil.controller.php";

//--------VEHICULOS POLICIALES----------------------
require_once "models/vehiculos.modelo.php";
require_once "controllers/vehiculos.controller.php";
//-----------Carga de Quimicos-----------------------
require_once "models/cargaQuimicoVehi.modelo.php";
require_once "controllers/cargaQuimicoVehi.controller.php";



// ------ Sesion ------
require_once "models/sesion.modelo.php";
require_once "controllers/sesion.controller.php";

$template = new ControllerTemplate();
$template -> template();


?>