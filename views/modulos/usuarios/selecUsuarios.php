<?php 

require_once "../conexion.php";

		$sql = ConexionDos::conectar()->prepare("SELECT hora,fechaLog,usuario,accion,modulo, lo.idObjeto, descripcion,func.nombre,func.apellido, func.rut,func.estado_civil,func.rutaImg, user.usuariosNombre FROM funcionario func , usuarios user , log lo LEFT JOIN funcionario ON id_funcionario=lo.idObjeto where modulo ='funcionario'  AND fechaLog between '".$_POST["desde"]."' AND '".$_POST["hasta"]."' GROUP BY lo.id ");
		$sql -> execute();




        $results = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($results);

    ?>