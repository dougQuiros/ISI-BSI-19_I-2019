<?php
				
	if(isset($_POST['title']) && isset($_POST['writer']) 
	&& isset($_POST['editorial']) && isset($_POST['price'])){
		
		$id = $_POST['idCode'];		
		$title = $_POST['title'];
		$writer = $_POST['writer'];
		$editorial = $_POST['editorial'];
		$price = $_POST['price'];
					
					
		//Consultas a la base de datos
		$conexion = mysqli_connect("localhost", "root", "", "LIBRERIA");
			
		//Comprobar la conexión
		if (!$conexion) {
			die("Error al establecer conexión la conexión: %s\n" . mysqli_connect_error());
			printf("Error al establecer conexión la conexión: %s\n", mysqli_connect_error());
			exit();
		}
					
		//Se define el Query
		$sql = "UPDATE LIBRERIA.LIBROS SET TITULO='".$title."',AUTOR='".$writer."',EDITORIAL='".$editorial."',PRECIO=".$price." 
		WHERE ID = ".$id;
					
		stripslashes($sql);

							
		//Se ejecuta el Query
		if (mysqli_query($conexion, $sql)) {
			echo "La información del libro fue modificado de forma correcta.";
			echo "<script>alert('La información del libro fue modificado de forma correcta.')</script>";
			echo "<br><br><form action=\"../index.html\">
					<input type=\"submit\" value=\"Consultar\" >
				</form>";
						
		} else {
			echo "Error: <br>" . mysqli_error($conexion);
		}

		mysqli_close($conexion);
					
		}else{
			exit('Error: no se han recibido todas las variables necesarias');
		}
				
?>