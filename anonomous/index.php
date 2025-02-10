<?php

$c=20;

$anonymousFn=function(){
echo "hello world i'm an anonoymous function";
};


$anonymousFn();
echo'<br>';


$sum=function($a,$b){

return $a+$b;
};

echo $sum(2,3);
echo "<br>";

$pr= function() use ($c){
    echo $c;
};

$pr();
echo'<br>';


$sumOfTwo=function($x) use ($c){
return $c+$x;
};

echo $sumOfTwo(10);
echo'<br>';




?>
