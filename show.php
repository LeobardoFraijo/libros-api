<?php
	
	$tipo = '';
	$url = "https://api.nytimes.com/svc/books/v3/lists/names.json?api-key=wx31BdWYoYtcVMDHsmBPpkqAr0FYzv7g";
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$tipo = $_REQUEST['tipo'];
	}
	
		
	$json = file_get_contents($url);
	$info = json_decode($json, true);
	$results = $info["results"];
	
	
	
?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Resultados</title>
	</head>
	<body>
		<h1>Resultados de la consulta:</h1>
		<?php
			foreach ($results as $result => $value) {
				if($tipo == "todos"){
					$nombre = $value["list_name"];
			 		$ultima_actualizacion = $value["newest_published_date"];
			 		$update = $value["updated"];
			 		echo "articulo: " . $nombre . "<br>";
			 		echo "Ultima actualización: " . $ultima_actualizacion. "<br>";
			 		echo "updated: ". $update. "<br>";
			 		echo "<br>";
				}elseif ($tipo == "fecha") {
					if($value["updated"] == "MONTHLY"){
						$nombre = $value["list_name"];
			 			$ultima_actualizacion = $value["newest_published_date"];
			 			$update = $value["updated"];
			 			echo "articulo: " . $nombre . "<br>";
			 			echo "Ultima actualización: " . $ultima_actualizacion. "<br>";
			 			echo "updated: ". $update. "<br>";
			 			echo "<br>";
					}
						
				}elseif ($tipo == "fecha2") {
					if($value["updated"] == "WEEKLY"){
						$nombre = $value["list_name"];
			 			$ultima_actualizacion = $value["newest_published_date"];
			 			$update = $value["updated"];
			 			echo "articulo: " . $nombre . "<br>";
			 			echo "Ultima actualización: " . $ultima_actualizacion. "<br>";
			 			echo "updated: ". $update. "<br>";
			 			echo "<br>";

					}
				}
			 	
			} 
		?>
	</body>
	</html>