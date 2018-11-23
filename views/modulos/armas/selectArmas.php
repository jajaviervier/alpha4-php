<?php 

require_once "../conexion.php";

		$sql = ConexionDos::conectar()->prepare("SELECT hora,fechaLog,usuario,accion,modulo, lo.idObjeto, descripcion,arma.serie ,arma.id_itemarmas , user.usuariosNombre FROM itemarmas arma , usuarios user , log lo LEFT JOIN itemarmas ON id_itemarmas=lo.idObjeto where modulo ='chaleco'  AND fechaLog between '".$_POST["desde"]."' AND '".$_POST["hasta"]."' GROUP BY lo.id ");
		$sql -> execute();
        $results = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($results);

    ?>