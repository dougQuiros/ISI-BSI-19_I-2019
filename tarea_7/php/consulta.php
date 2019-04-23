<?php
	
	$id = $_GET['id'];
					
	//Consultas a la base de datos
	$conexion = mysqli_connect("localhost", "root", "", "LIBRERIA");
					
	//Comprobar la conexión, de ser correcta avanza
	if (!$conexion) {
		die("Falló la conexión: %s\n" . mysqli_connect_error());
		printf("Falló la conexión: %s\n", mysqli_connect_error());
		exit();
	}
					
	//Se define el Query
	$sql = "SELECT TITULO, AUTOR, EDITORIAL, PRECIO 
	FROM LIBRERIA.LIBROS WHERE ID = ".$id;
					
	stripslashes($sql);
									
	//Se ejecuta el Query
	$resultado = mysqli_query($conexion, $sql);
	
	//Se devuelve la información obtenida
	While($fila = mysqli_fetch_object($resultado)){
		
		echo $fila->TITULO."{0}";
		echo $fila->AUTOR."{0}";
		echo $fila->EDITORIAL."{0}";
		echo $fila->PRECIO;
	}
	
	mysqli_free_result($resultado);
	mysqli_close($conexion);
						
?>