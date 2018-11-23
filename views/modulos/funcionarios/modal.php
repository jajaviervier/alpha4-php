<?php 

require_once "../conexion.php";

		$sql = ConexionDos::conectar()->prepare("SELECT * FROM funcionario where id_funcionario ='".$_POST['funcionario']." ' ");
		$sql -> execute();

        $results = $sql->fetch(PDO::FETCH_ASSOC);
        echo json_encode($results);

    ?>