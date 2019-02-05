<?php 

 $num1 = $_POST["num1"];
 $num2 = $_POST["num2"];
 $oper = $_POST["oper"];
 $result=0;
 if($oper === "+"){
	$result = $num1+$num2;
 }else if($oper === "-"){
 	$result = $num1-$num2;
 }else if($oper === "*"){
 	$result = $num1*$num2;
 }else  if ($oper === "/")) {
 	$result = $num1/$num2; 
 } 
 echo $result;
 
?>