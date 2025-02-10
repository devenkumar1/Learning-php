<?php

$num1= $_POST["num1"];
$operation= $_POST["operation"];
$num2= $_POST["num2"];

$result=0;

switch($operation){
    case "+":
        $result= $num1+$num2;
        break;
    case "-":
        $result= $num1-$num2;
        break;
    case "*":
        $result= $num1*$num2;
        break;
    case "/":
        $result= $num1/$num2;
        break;
    
}


echo $result;
?>