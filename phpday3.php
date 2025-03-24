<!-- GET AND POST -->

<!-- $_POST = data is packaged inside the body of the HTTP request / MORE SECURE / NO DATA LIMIT/ BETTER FOR SUBMITTING CREDENTIALS/ CANNOT BOOKMARK -->
<!-- $_GET = data is appended to the url / NOT SECURE / CHAR LIMIT / BETTER FOR A SEACH PAGE/ BOOKMARK IS POSSIBLE W/ VALUES  -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="phpday3.php" method="post">
    <!-- <form action="phpday3.php" method="get"> -->
        <h4>Chicken - $1.00</h4>
        <label>Quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    $food = "Chicken";
    $price = 1.50;
    $quantity = $_POST["quantity"];
    // $quantity = $_GET["quantity"];
    // $total = null;
    $total = $quantity * $price;

    echo "<br>You have ordered {$quantity}x of {$food} <br>";
    echo "Your total is: \${$total}";
    echo "<br>Thank you for your order!"


?>