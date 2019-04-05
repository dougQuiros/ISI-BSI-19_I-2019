<?php
	
	$id = $_GET['id'];
	$userId = $_GET['userId'];
					
	//Consultas a la base de datos
	$conexion = mysqli_connect("localhost", "root", "", "personas");
					
	//Comprobar la conexión
	if (!$conexion) {
		//echo "Connection failed: " . mysqli_connect_error();
		die("Connection failed: " . mysqli_connect_error());
		printf("Falló la conexión: %s\n", mysqli_connect_error());
		exit();
	}
					
	//Se define el Query
	$sql = "DELETE FROM PERSONAS.USUARIO WHERE IDENTIFICADOR = ".$id." AND IDENTIFICACION = '".$userId."'";
						
						
	//Se ejecuta el Query
	if (mysqli_query($conexion, $sql)) {
		echo "La linea fue eliminada con exito.";	
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
	}
	
	mysqli_close($conexion);
					
				
			
?>