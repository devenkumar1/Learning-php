<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $age=19;
    $citizenship=true;
    
    echo "Age:";
    echo $age;
    echo "<br>";
 if($age>18 and $citizenship){
    echo " candidate eligible for voting";
 }
 elseif($age>18 and !$citizenship){
    echo "candidate must be a citizenship";
 }
 else{
    echo "candidate not eligible for voting";
 }

    ?>    

</body>
</html>