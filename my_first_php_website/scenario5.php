<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
//constant
  define("PI",3.14);

function checkLoanEligiblity($age, $monthlyIncome){

    if($age>21 && $monthlyIncome>25000){
        echo "the person is eligible for loan";
    }
    else{
        echo "the person is not eligible for the loan";
    }

}

$age=25;
$monthlyIncome=120000;

echo "the salary of the person is $monthlyIncome and age is $age";
echo "<br>";

checkLoanEligiblity($age,$monthlyIncome);

//data types of variables
echo "the data types of the following \n";
$str1="this is a string\n";
echo $str1;
echo "<br>";
echo var_dump($str1);
echo "<br>";

$number1=12;
echo $number1;
echo "<br>";
echo var_dump($number1);
echo "<br>";

$number2=12.4;
echo $number2;
echo "<br>";
echo var_dump($number2);
echo "<br>";
$boolt=true;
echo $boolt;
echo "<br>";
echo var_dump($boolt);
echo "<br>";
echo "hello i am constant PI and my value is : ";
echo "<br>";
echo PI;


?>

    
</body>
</html>