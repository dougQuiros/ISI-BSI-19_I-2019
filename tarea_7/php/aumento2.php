<?php
	
	$nombre = $_GET['nombre'];
					
	//Consultas a la base de datos
	$conexion = mysqli_connect("localhost", "root", "", "LIBRERIA");
					
	//Comprobar la conexión, de ser correcta avanza
	if (!$conexion) {
		die("Falló la conexión: %s\n" . mysqli_connect_error());
		printf("Falló la conexión: %s\n", mysqli_connect_error());
		exit();
	}
					
	//Se define el Query
	//$sql = "DELETE FROM LIBRERIA.LIBROS WHERE ID = ".$id;
	$sql = "CALL UPDATE_PRECIO_TEN('".$nombre."', 10)";
					
	stripslashes($sql);
										
	//Se ejecuta el Query
	if (mysqli_query($conexion, $sql)) {
		echo "Todos los precios de la editorial \"".$nombre."\" , fueron aumentados en 10 colones.";	
	} else {
		echo "No fue posible realizar el aumento solicitado a los libros de la editorial \"".$nombre."\", intentelo nuevamente. <br>". mysqli_error($conexion);
	}
	
	mysqli_close($conexion);			
			
?>