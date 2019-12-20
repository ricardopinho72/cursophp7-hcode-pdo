<?php 

	$conn = new PDO("mysql:host=localhost;dbname=udemy", "root", "");


	$stmt = $conn->prepare("INSERT INTO hcode_php_tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

	$login = "maria";
	$password = "123456";

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);
	
	$stmt->execute();
	
	echo "Inserido com sucesso";

?>