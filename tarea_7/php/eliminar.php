<?php
	
	$id = $_GET['id'];
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
	$sql = "DELETE FROM LIBRERIA.LIBROS WHERE ID = ".$id;
					
	stripslashes($sql);
										
	//Se ejecuta el Query
	if (mysqli_query($conexion, $sql)) {
		echo "El libro \"".$nombre."\" fue eliminado correctamente.";	
	} else {
		echo "No fue posible eliminar el libro \"".$nombre."\", intentelo nuevamente. <br>". mysqli_error($conexion);
	}
	
	mysqli_close($conexion);			
			
?>