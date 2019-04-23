<?php
				
				if(isset($_POST['title']) && isset($_POST['writer']) 
					&& isset($_POST['editorial']) && isset($_POST['price'])){
					
					$title = $_POST['title'];
					$writer = $_POST['writer'];
					$editorial = $_POST['editorial'];
					$price = $_POST['price'];
					
					//Consultas a la base de datos
					$conexion = mysqli_connect("localhost", "root", "", "LIBRERIA");
					
					//Comprobar la conexión
					if (!$conexion) {
						die("Error al establecer la conexión: %s\n" . mysqli_connect_error());
						printf("Error al establecer la conexión: %s\n", mysqli_connect_error());
						exit();
					}
					
					//Se define el Query
					$sql = "INSERT INTO LIBRERIA.LIBROS (TITULO, AUTOR, EDITORIAL, PRECIO)
					VALUES ('".$title."', '".$writer."','".$editorial."',".$price.")";
					
					stripslashes($sql);
							
					//Se ejecuta el Query
					if (mysqli_query($conexion, $sql)) {
						echo "Los datos del libro fueron almacenados.";
						echo "<script>alert('Los datos del libro fueron almacenados.')</script>";
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