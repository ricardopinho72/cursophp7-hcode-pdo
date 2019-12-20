<?php 

	$conn = new PDO("mysql:host=localhost;dbname=udemy", "root", "");

	$conn->beginTransaction();


	$stmt = $conn->prepare("DELETE FROM hcode_php_tb_usuarios WHERE idusuario = ?");

	$id = 2;

	//$stmt->bindParam(":ID", $id);
	
	$stmt->execute(array($id));


	// cancelar a exclusão
	// $conn->rollback();
	

	// confirmar a exclusão
	$conn->commit();

	echo "Deletaddo com sucesso";

?>