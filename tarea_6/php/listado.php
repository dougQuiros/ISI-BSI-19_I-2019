<?php
	
	$title = $_GET['title'];
	$indice = 0;
					
	//Consultas a la base de datos
	$conexion = mysqli_connect("localhost", "root", "", "LIBRERIA");
					
	//Comprobar la conexión, de ser correcta avanza
	if (!$conexion) {
		die("Error al establecer conexión la conexión: %s\n" . mysqli_connect_error());
		printf("Error al establecer conexión la conexión: %s\n", mysqli_connect_error());
		exit();
	}
					
	//Se define el Query
	$sql = "SELECT ID, TITULO, AUTOR, EDITORIAL, PRECIO
		FROM LIBRERIA.LIBROS";
	if( strlen($title)>0){
		$sql = $sql." WHERE TITULO LIKE '%".$title."%'";
	}
					
	stripslashes($sql);
	
	//se carga los encabezados de la tabla
	echo "<tr>";
	echo "<th width=\"16%\" style=\"text-align: center;\">No.</th>";
	echo "<th width=\"17%\">TITULO</th>";
	echo "<th width=\"17%\">AUTOR</th>";
	echo "<th width=\"17%\">EDITORIAL</th>";
	echo "<th width=\"16%\">PRECIO</th>";
	echo "<th width=\"17%\"></th>";
	echo "</tr>";
						
	//Se ejecuta el Query
	$resultado = mysqli_query($conexion, $sql);
	
	//Se devuelve la información obtenida
	While($fila = mysqli_fetch_object($resultado)){
		$indice = $indice+1;
		
		echo "<tr>";
		echo "<td width=\"10%\">".$fila->ID."</td>";
		echo "<td width=\"10%\">".$fila->TITULO."</td>";
		echo "<td width=\"11%\">".$fila->AUTOR."</td>";
		echo "<td width=\"11%\">".$fila->EDITORIAL."</td>";
		echo "<td width=\"15%\">".$fila->PRECIO."</td>";
		echo "<td width=\"11%\">
		<br><input type=\"button\" value=\"Borrar\" onclick=\"deleteRow('".$fila->ID."','".$fila->TITULO."');\" />
		<input type=\"button\" value=\"Modificar\" onclick=\"window.location.href='funciones_html/modificacion.html?id=".$fila->ID."'\" />
		</td>";
		echo "</tr>";
		
		echo "<tr><th colspan=\"9\" class=\"thl\"></th></tr>";
	}
	
	mysqli_free_result($resultado);
	mysqli_close($conexion);			
			
?>