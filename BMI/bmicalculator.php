<?php
$weight= $_POST["weight"];
$height= $_POST["height"];

$bmi= ($weight)/($height *$height);

echo "Your calculated BMI is: ".$bmi;
echo"<br>";

if($bmi<18.5){
    echo "you bmi suggest  you are underweight";
}
elseif($bmi>18.5 and $bmi<24.9){
    echo "your bmi suggest you are  normal";
}
elseif($bmi>24.9 and $bmi<29.5){
    echo  "your bmi suggest you are  overweight";
}
else{
 echo "your bmi is normal ";
}

?>

