
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="phpexercise.php" method="post">
        <h4>ORDER SUMMARY SECTION</h4>
        <h5>HOTDOG: $1.45</h5>
        <label>Product: </label>
        <label>Quantity: </label>
        <input type="text" name="quantity">
        <input type="submit" value="total">

    </form>
</body>
</html>
<?php
    $food = "hotdog";
    $price = 1.45;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $price * $quantity;

    echo "<br>Thank you for your order!<br><br>";
    echo "Order Summary<br>";
    echo "Product: <strong>$food</strong> <br>";
    echo "Total amount: <strong>\$$total</strong>";
    


?>