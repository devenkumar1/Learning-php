<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping cart</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>shopping cart</h1>
  <div class="container"> 
  
  <table class="tb">
    <form action="index.php" method="POST">
        <tr class="tableHeader">
      <th>Product</th>
      <th>Price</th>
      <th>Quantity</th>           
    </tr>
    <tr>
    <td>Product A</td>
    <td>100</td>
    <td>
        <input type="number" placeholder="enter quantity" name="quantityA" value=0 min=0>
    </td>
    </tr>
    <tr>
    <td>Product B</td>
    <td>200</td>
    <td>
        <input type="number" placeholder="enter quantity" name="quantityB" value=0 min=0>
    </td>
    </tr>
    <tr>
    <td>Product C</td>
    <td>300</td>
    <td>
        <input type="number" placeholder="enter quantity" name="quantityC" value=0 min=0>
    </td>
    </tr>
    
    </table>
    <button class="btn" type="submit">Calculate Total</button>
    </form>

  </div>
  <?php 
  $product_A_Price=100;
  $product_B_Price=200;
  $product_C_Price=300;
  if($_SERVER["REQUEST_METHOD"]=="POST"){
 $quantityA=$_POST["quantityA"]; 
 $quantityB=$_POST["quantityB"]; 
 $quantityC=$_POST["quantityC"];

 $totalprice = $product_A_Price * $quantityA + $product_B_Price * $quantityB + $product_C_Price * $quantityC;
echo "<table class='tb'>";
echo "<tr><th>Product</th><th>Quantity</th><th>Total Price</th></tr>";
echo "<tr><td>Product A</td><td>" . $quantityA . "</td><td>₹" . $product_A_Price * $quantityA . "</td></tr>";
echo "<tr><td>Product B</td><td>" . $quantityB . "</td><td>₹" . $product_B_Price * $quantityB . "</td></tr>";
echo "<tr><td>Product C</td><td>" . $quantityC . "</td><td>₹" . $product_C_Price * $quantityC . "</td></tr>";
echo "</table>";
echo "<div class='price'>Total Price: ₹" . $totalprice . "</div>";
  }
  ?>
</body>
</html>
