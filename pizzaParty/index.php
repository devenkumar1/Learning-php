<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza distribution</title>
</head>
<body>
    <h1>Pizza slice calculator</h1>
    <form action="" method="POST">
        <label for="pizza">
            Number of pizza
            <input type="number" name="pizza" id="pizza">
        </label>
        <label for="number">
            Number of people
            <input type="number" name="number" id="number">
        </label>
        <button type="submit">calculate</button>
    </form>
    <?php
    function leftOverSlices($pizzas, $friends){
        $slices = 8 * $pizzas;
        $slicesPerFriend = intval($slices / $friends);
        echo "total slices: ".$slices;
       echo "<br>";
        $slicesLeftOver = $slices - ($slicesPerFriend * $friends);
        echo "slice equally per friend: ". $slicesPerFriend;
        echo "<br>";
        return $slicesLeftOver;
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $pizzas = $_POST["pizza"];
        $friends = $_POST["number"];
        $result=leftOverSlices($pizzas,$friends);
        echo "<span> the pizzas left over after equally dividing: ".$result. "<span>";
    }
    ?>
</body>
</html>





