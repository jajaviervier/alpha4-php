<?php 

require_once "../conexion.php";

		$sql = ConexionDos::conectar()->prepare("SELECT hora,fechaLog,usuario,accion,modulo, lo.idObjeto, descripcion,casc.serie ,casc.id_itemcascos , user.usuariosNombre FROM itemcascos casc , usuarios user , log lo LEFT JOIN itemcascos ON id_itemcascos=lo.idObjeto where modulo ='chaleco'  AND fechaLog between '".$_POST["desde"]."' AND '".$_POST["hasta"]."' GROUP BY lo.id ");
		$sql -> execute();
        $results = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($results);

    ?>