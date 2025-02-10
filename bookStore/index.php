<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
</head>
<body>
    <h1>Discount Calculator</h1>
    <div>
    <form action="" Method="POST">
        <label for="userType">
            <select name="userType" id="userType">
                <option value="regular">Regular</option>
                <option value="premium">Premium</option>
            </select>
            <br>
        </label>
        <label for="price">
            Enter the amount
            <input type="number" name="price" id="price">
        </label>
      <button type="submit">Calculate</button>

    </form>
    </div>
</body>
</html>

<?php
function calculateDiscount($amount, $type) {
    $discount = 0;
    
    if ($amount >= 500) {
        $discount = 10;
        if ($type == "premium") {
            $discount += 5;
        }
    }
    
    $discountedPrice = ($amount * $discount) / 100;
    $totalPrice = $amount - $discountedPrice;
    return $totalPrice;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $price = $_POST["price"];
    $userType = $_POST["userType"];
    $newPrice = calculateDiscount($price, $userType);
    echo "<span>" . $newPrice . "<span>";
}
?>

