<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple intrest calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        div {
            width: 50%;
            margin: 0 auto;
            text-align: center;
        }
        label {
            display: block;
            margin: 10px 0;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
        }
        .result {
            background-color: #f1f1f1;
            padding: 10px;
            margin: 10px 0;
            width: 100%;
        }
        .result span {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div>
    <h1>Simple intrest calculator</h1>
    <form method="post" >
        <label for="amount">Principal Amount</label>
        <input type="number" name="amount" id="amount">
        <label for="rate">Rate</label>
        <input type="number" name="rate" id="rate">
        <label for="time">Time</label>
        <input type="number" name="time" id="time">
        <button type="submit">calculate</button>
    </form>
</div>    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount=$_POST["amount"];
    $rate=$_POST["rate"];
    $time=$_POST["time"];
    $si=$amount*$rate*$time/100;
    echo "<div class='result'>";
    echo "Simple intrest is: ";
    echo "<span>$si</span>";
    echo "</div>";
}

?>
</body>
</html>
