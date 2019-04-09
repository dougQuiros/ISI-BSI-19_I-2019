<?php 

$url = "http://www.dneonline.com/calculator.asmx?WSDL";
$cliente = new SoapClient($url);

$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];


if(isset($_POST['suma'])){
	$resultado = $cliente->Add(array("intA" => $num1, "intB" => $num2));
	$resultado = ($resultado->AddResult);
	echo $resultado;
}

if(isset($_POST['resta'])){
	$resultado = $cliente->Subtract(array("intA" => $num1, "intB" => $num2));
	$resultado = ($resultado->SubtractResult);
	echo $resultado;
}

if(isset($_POST['multiplica'])){
	$resultado = $cliente->Multiply(array("intA" => $num1, "intB" => $num2));
	$resultado = ($resultado->MultiplyResult);
	echo $resultado;
}

if(isset($_POST['divide'])){
	$resultado = $cliente->Divide(array("intA" => $num1, "intB" => $num2));
	$resultado = ($resultado->DivideResult);
	echo $resultado;
}

?>