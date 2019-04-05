<?php
	
	$userName = $_GET['userName'];
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
	FROM PERSONAS.USUARIO ";
	if( strlen($userName)>0 && strlen($userId)>0){
		$sql = $sql." WHERE NOMBRE_COMPLETO LIKE '%".$userName."%' AND IDENTIFICACION = '".$userId."'";
	} else if( strlen($userName)>0){
		$sql = $sql." WHERE NOMBRE_COMPLETO LIKE '%".$userName."%'";
	} else if( strlen($userId)>0){
		$sql = $sql." WHERE IDENTIFICACION = '".$userId."'";
	}
						
						
	//Se ejecuta el Query
	$resultado = mysqli_query($conexion, $sql);
	
	//Se devuelve la información obtenida
	While($fila = mysqli_fetch_object($resultado)){
		
		$indice = $indice+1;
		
		echo "<tr>";
		echo "<td width=\"5%\">".$indice."</td>";
		echo "<td width=\"16%\">".$fila->IDENTIFICACION."</td>";
		echo "<td width=\"14%\">".$fila->NOMBRE_COMPLETO."</td>";
		echo "<td width=\"14%\">".$fila->FECHA_NACIMIENTO."</td>";
		echo "<td width=\"14%\">".$fila->NACIONALIDAD."</td>";
		echo "<td width=\"14%\">".$fila->TELEFONO."</td>";
		echo "<td width=\"14%\"><a href=\"mailto:".$fila->CORREO_ELECTRONICO."\">".$fila->CORREO_ELECTRONICO."</a></td>";
		echo "<td width=\"9%\">
		<br><input type=\"button\" value=\"Borrar\" onclick=\"deleteRow('".$fila->IDENTIFICADOR."','".$fila->IDENTIFICACION."');\" />
		<input type=\"button\" value=\"Modificar\" onclick=\"window.location.href='modificar_persona.html?userId=".$fila->IDENTIFICACION."&id=".$fila->IDENTIFICADOR."'\" />
		</td>";
		echo "</tr>";
	}
	
	
	mysqli_free_result($resultado);
	mysqli_close($conexion);
					
				
			
?>