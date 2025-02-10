<?php
function conversion($celsius){
$Farenhite_Value=($celsius*9/5)+32;
return $Farenhite_Value;
}

$result=conversion(37.8);
echo "the temprature conversion in farenhite is: " .$result." f";

?>