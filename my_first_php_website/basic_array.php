<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array basics</title>
</head>
<body>

<?php 

//declaring an array

$languages = array("Hindi","English","Bengali","Sanskrit");

//count of elements in array
echo "the count of elements in the array: ";
echo count($languages);
echo "<br>";
echo "<br>";
echo "foreach loop execution: ";
//for each loop
 foreach($languages as $x){
    echo $x ;
    echo"<br>";
}

echo "<br> while loop executions: ";
//while loop:
 $count=0;
    while($count<count($languages)){
        echo "<br>the value of the language " . ($count + 1) . " is: ";
        echo $languages[$count];
        
        $count+=1;
    }


    //for loop execution:
        echo"<br>";
        echo"<br>";
        echo "for loop execution: ";

        for($a=0;$a<count($languages);$a++){
            echo "<br>the value of the language " . ($a + 1) . " is: ";
        echo $languages[$a];
        }
        echo"<br>";


?>
    
</body>
</html>