<?php 

$num1 = $_GET['numero1'];
$num2 = $_GET['numero2'];


if(isset($_GET['suma'])){
	echo $num1+$num2;
}

if(isset($_GET['resta'])){
	echo $num1-$num2;
}

if(isset($_GET['multiplica'])){
	echo $num1*$num2;
}

if(isset($_GET['divide'])){
	echo $num1/$num2;
}

?>
