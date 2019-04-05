<?php 

$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];


if(isset($_POST['suma'])){
	echo $num1+$num2;
}

if(isset($_POST['resta'])){
	echo $num1-$num2;
}

if(isset($_POST['multiplica'])){
	echo $num1*$num2;
}

if(isset($_POST['divide'])){
	echo $num1/$num2;
}

?>