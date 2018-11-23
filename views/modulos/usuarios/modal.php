<?php 

require_once "../conexion.php";

		$sql = ConexionDos::conectar()->prepare("SELECT * FROM usuarios where idusuarios ='".$_POST['usuario']." ' ");
		$sql -> execute();

        $results = $sql->fetch(PDO::FETCH_ASSOC);
        echo json_encode($results);

    ?>