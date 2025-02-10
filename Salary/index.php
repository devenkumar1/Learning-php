<?php
$salary= $_POST["salary"];

$tax=$salary*10/100;
echo "your tax amount is: ".$tax;
echo "<br>";

$prominent_fund=$salary*12/100;
echo "your prominent fund is: ".$prominent_fund;
echo "<br>";

$health_insurance= 500;
echo "your health insurance is: ".$health_insurance;
echo "<br>";

$final_salary=$salary-$prominent_fund-$tax-$health_insurance;
echo "your final salary after deduction is: ".$final_salary;
echo "<br>";

?>