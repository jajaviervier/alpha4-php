<?php 

require_once "../conexion.php";

		$sql = ConexionDos::conectar()->prepare("SELECT hora,fechaLog,usuario,accion,modulo, lo.idObjeto, descripcion,chac.serie ,chac.id_itemchalecos , user.usuariosNombre FROM itemchalecos chac , usuarios user , log lo LEFT JOIN itemchalecos ON id_itemchalecos=lo.idObjeto where modulo ='chaleco'  AND fechaLog between '".$_POST["desde"]."' AND '".$_POST["hasta"]."' GROUP BY lo.id ");
		$sql -> execute();
        $results = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($results);

    ?>