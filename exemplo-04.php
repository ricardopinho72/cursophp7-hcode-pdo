<?php 

	$conn = new PDO("mysql:host=localhost;dbname=udemy", "root", "");


	$stmt = $conn->prepare("UPDATE hcode_php_tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

	$login = "joao";
	$password = "qwerty";
	$id = 9;

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);
	$stmt->bindParam(":ID", $id);
	
	$stmt->execute();
	
	echo "Alteraddo com sucesso";

?>