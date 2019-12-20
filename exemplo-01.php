<?php 

	$conn = new PDO("mysql:host=localhost;dbname=udemy", "root", "");


	$stmt = $conn->prepare("SELECT * FROM hcode_php_tb_usuarios ORDER BY deslogin");
	
	$stmt->execute();
	
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	foreach ($results as $row) {

		foreach ($row as $key => $value) {

			// $Key é o nome da coluna no BD e $value é o dado que tem armazenado
			
			echo "<strong>" . $key . ":</strong> " . $value . "<br>";
		}

		echo "-----------------------------------------------------------<br>";
		
	}

	//var_dump($results);

?>