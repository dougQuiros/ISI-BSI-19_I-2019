<!-- 
/**
Ejercicio 10
Escriba el código necesario para mostrar en una página web un formulario con al menos los siguientes tipos de campos: 
»Un campo de texto plano 
»Un área de texto de 3 líneas 
»Un campo de selección 
»Un campo de tipo check 
»Un grupo de campos radiales 
»Un botón 
»Un campo de tipo rango 
Adicionalmente, el action del formulario debe llevar a una página PHP que reciba los datos por post y muestre en pantalla los pared Campo = Valor. 
*/
 -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Ejercicio 10</title> 
	</head>
	<body>
		<h2>Información ingresada</h1>
		
		<h4 style="color: blue">Nombre:</h3> 
		<?php echo $_POST["txt_1"]; ?>
		
		<h4 style="color: blue">Genero:</h3> 
		<?php echo $_POST["genero"]; ?>
		
		<h4 style="color: blue">Edad:</h3>
		<?php echo $_POST["rango"]; ?>
		
		<h4 style="color: blue">Estado civil:</h3>
		<?php echo $_POST["stat_civil"]; ?>
		
		<h4 style="color: blue">Satisfaccion (0 insatisfecho - 100 muy satisfecho)</h3>
		<?php echo $_POST["satisfaccion"]; ?>%
		
		<br><br><br>
		<img src="imagenes/flecha_atras.png" alt="Retroceder" width="20" height="20"><a href="index.html"><em><b>Regresar</b></em></a>
	</body>
</html>