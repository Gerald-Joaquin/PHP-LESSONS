<!-- VARIABLE -->

<?php
// STRING
    $name = "Gerald";
    $color = "Navy blue";
    $food = "Chicken";
    $email = "Geraldsantosjoaquin1@gmail.com";

// INTEGER
    $age = 18;
    $price = 4.99;
    $quantity = 5;
    $discountAmount = 50;
    

// BOOLEAN
    $discount = True;
    $online = False;

    echo "Hello <strong>{$name}!<br></strong>";
    echo "Your email is: <strong>{$email}<br></strong>";
    echo "Your favorite color is: <strong>{$color}<br></strong>";
    echo "You ordered <strong>{$food}<br></strong>";

    echo "<br>Your age is: <strong>{$age}<br></strong>";
    echo "The price you ordered is: <strong>{$price}<br></strong>";
    echo "You bought <strong>{$quantity}pcs</strong> of <strong>{$food}<br></strong>";

    echo "<br>Discount Coupon/s: {$discount}<br>";
    echo "Online users: {$online}<br>";

    echo "<br>Your order summary is <strong>{$quantity}pcs</strong> of <strong>{$food}<br></strong>";
    $total = $price * $quantity;
    echo "The total order is: <strong>{$total}</strong><br>";
    echo "You have {$discountAmount}% OFF for you order!<br>";
    $totalDiscount = ($discountAmount/100)*$total;
    echo "Total amount is {$totalDiscount}";
?>

