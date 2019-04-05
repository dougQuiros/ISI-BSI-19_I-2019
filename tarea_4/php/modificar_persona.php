<?php
				
				if( isset($_POST['userName']) && isset($_POST['userId']) && isset($_POST['nacionalidad']) && isset($_POST['provincia'])
				&& isset($_POST['canton']) && isset($_POST['distrito']) && isset($_POST['direccion']) && isset($_POST['telefono'])
				&& isset($_POST['celular']) && isset($_POST['userEmail']) && isset($_POST['grade']) && isset($_POST['fechaNacimiento'])){
					
					$userName = $_POST['userName'];
					$userId = $_POST['userId'];
					$nacionalidad = $_POST['nacionalidad'];
					$provincia = $_POST['provincia'];
					$canton = $_POST['canton'];
					$distrito = $_POST['distrito'];
					$direccion = $_POST['direccion'];
					$telefono = $_POST['telefono'];
					$celular = $_POST['celular'];
					$userEmail = $_POST['userEmail'];
					$grade = $_POST['grade'];
					$fechaNacimiento = $_POST['fechaNacimiento'];
					$idCode = $_POST['idCode'];
					
					
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
					$sql = "UPDATE PERSONAS.USUARIO SET NACIONALIDAD='".$nacionalidad."',PROVINCIA='".$provincia."',CANTON='".$canton."'
					,DISTRITO='".$distrito."',DIRECCION='".$direccion."',TELEFONO=".$telefono.",CELULAR=".$celular."
					,CORREO_ELECTRONICO='".$userEmail."',GRADO_ACADEMICO=".$grade.",FECHA_NACIMIENTO='".$fechaNacimiento."' 
					WHERE IDENTIFICADOR = ".$idCode." AND IDENTIFICACION = '".$userId."'";

							
					//Se ejecuta el Query
					if (mysqli_query($conexion, $sql)) {
						echo "El registro fue actualizado de manera exitosa.";
						echo "<script>alert('El registro fue actualizado de manera exitosa.')</script>";
						echo "<br><br><form action=\"../consulta_persona.html\">
								<input type=\"submit\" value=\"Consultar\" >
							</form>";
						
						/*sleep(5);
						header('Location: ../consulta_persona.html');*/
						
					} else {
						echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
					}

					mysqli_close($conexion);
					
				}else{
					exit('Error: no se han recibido todas las variables necesarias');
				}
				
?>