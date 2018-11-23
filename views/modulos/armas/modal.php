<?php 

require_once "../conexion.php";
		$sql = ConexionDos::conectar()->prepare("SELECT * FROM item_armas where id_itemarmas='".$_POST['arma']." ' ");
		$sql -> execute();
        $results = $sql->fetch(PDO::FETCH_ASSOC);
        echo json_encode($results);
    ?>