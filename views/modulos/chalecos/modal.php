<?php 

require_once "../conexion.php";
		$sql = ConexionDos::conectar()->prepare("SELECT * FROM itemchalecos where id_itemchalecos ='".$_POST['chaleco']." ' ");
		$sql -> execute();
        $results = $sql->fetch(PDO::FETCH_ASSOC);
        echo json_encode($results);
    ?>