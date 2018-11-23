2<?php 

require_once "../conexion.php";
		$sql = ConexionDos::conectar()->prepare("SELECT * FROM itemcasco where id_itemcasco='".$_POST['casco']." ' ");
		$sql -> execute();
        $results = $sql->fetch(PDO::FETCH_ASSOC);
        echo json_encode($results);
    ?>