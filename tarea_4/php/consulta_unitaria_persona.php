<?php
	
	$id = $_GET['id'];
	$userId = $_GET['userId'];
	$indice = 0;
					
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
	$sql = "SELECT `IDENTIFICADOR`, `NOMBRE_COMPLETO`, `IDENTIFICACION`, `NACIONALIDAD`, `PROVINCIA`, `CANTON`, `DISTRITO`
	, `DIRECCION`, `TELEFONO`, `CELULAR`, `CORREO_ELECTRONICO`, `GRADO_ACADEMICO`, `FECHA_NACIMIENTO` 
	FROM PERSONAS.USUARIO WHERE IDENTIFICADOR = ".$id." AND IDENTIFICACION = '".$userId."'";
						
						
	//Se ejecuta el Query
	$resultado = mysqli_query($conexion, $sql);
	
	//Se devuelve la información obtenida
	While($fila = mysqli_fetch_object($resultado)){
		
		echo $fila->NOMBRE_COMPLETO."{0}";
		echo $fila->IDENTIFICACION."{0}";
		echo $fila->NACIONALIDAD."{0}";
		echo $fila->PROVINCIA."{0}";
		echo $fila->CANTON."{0}";
		echo $fila->DISTRITO."{0}";
		echo $fila->DIRECCION."{0}";
		echo $fila->TELEFONO."{0}";
		echo $fila->CELULAR."{0}";
		echo $fila->CORREO_ELECTRONICO."{0}";
		echo $fila->GRADO_ACADEMICO."{0}";
		echo $fila->FECHA_NACIMIENTO."{0}";
	}
	
	
	mysqli_free_result($resultado);
	mysqli_close($conexion);
					
				
			
?>