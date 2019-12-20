<?php 

	$conn = new PDO("mysql:host=localhost;dbname=udemy", "root", "");


	$stmt = $conn->prepare("DELETE FROM hcode_php_tb_usuarios WHERE idusuario = :ID");

	$id = 1;

	$stmt->bindParam(":ID", $id);
	
	$stmt->execute();
	
	echo "Deletaddo com sucesso";

?>