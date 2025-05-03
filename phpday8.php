<!-- Manipulate arrays using various array functions. -->
<!-- SORTING ARRAYS, ADD ARRAY ITEMS -->

<?php 
    //Using count() ------------------------------------------------------------------------
    $food = array("chicken", "fish", "hotdog");
    $len = count($food);
    echo "Number of items: " . $len;
    echo "<br>";
    echo "<br>";
    
    //SORTING ARRAYS ----------------------------------------------------------------------
    $num = array(2, 1, 5, 7, 8, 9);
    sort($num);  // sort arrays in ascending order
    echo "(2, 1, 5, 7, 8, 9)";
    echo "<br>";
    print_r($num);
    echo "<br>";

    //other function of sort()
    $num = array(10, 8, 1, 4, 5, 7);
    echo "(10, 8, 1, 4, 5, 7)";
    echo "<br>";
    rsort($num); // sort arrays in descending order
    print_r($num);
    echo "<br>";

    $num = array(4, 3, 6, 8, 9, 2,);
    echo "(4, 3, 6, 8, 9, 2,)";
    echo "<br>";
    asort($num); // sort associative arrays in ascending order, according to the value
    print_r($num);
    echo "<br>";

    $num = array(9, 8, 7, 4, 2, 3);
    echo "(9, 8, 7, 4, 2, 3)";
    echo "<br>";
    ksort($num); // sort associative arrays in ascending order, according to the key
    print_r($num);
    echo "<br>";
    
    $num = array(1, 5, 2, 6, 4, 9);
    echo "(1, 5, 2, 6, 4, 9)";
    echo "<br>";
    arsort($num); // sort associative arrays in descending order, according to the value
    print_r($num);
    echo "<br>";

    $num = array(0, 6, 4, 3, 2, 5);
    echo "(0, 6, 4, 3, 2, 5)";
    echo "<br>";
    krsort($num); // sort associative arrays in descending order, according to the key
    print_r($num);
    echo "<br>";
    echo "<br>";

    //ADD ARRAY ITEMS -----------------------------------------------------------------

    $food = array("chicken", "fish", "hotdog");
    $food[] = "tuna";
    echo "<br>";
    print_r($food);
    echo "<br>";

    $specs = array("brand" => "Iphone", "unit" => "16 pro max",);
    $specs["color"] = "black";
    print_r($specs);
    echo "<br>";

    $color = array("blue", "black", "white");
    array_push($color, "green", "pink", "yellow", "grey");
    print_r($color);
    echo "<br>";
    echo "<br>";

    //DELETE ARRAY ITEMS -------------------------------------------------------------

    $colors = array("yellow", "black", "white", "blue", "red");
    array_splice($colors, 2, 1); // With the array_splice() function you specify the index (where to start) and how many items you want to delete.
    print_r($colors);
    echo "<br>";

    $brand = array("xioami", "iphone", "realme", "techno");
    unset($brand[1]); // to remove specific item
    print_r($brand);
    echo "<br>";

    $num = array(1, 3, 4, 5, 6, 7,);
    array_splice($num, 1,1);
    print_r($num);
    echo "<br>";

    $brand = array("xioami", "iphone", "realme", "techno");
    unset($brand[0], $brand[2]); // to remove specific 2 item through index
    print_r($brand);
    echo "<br>";

    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    $newarray = array_diff($cars, ["Mustang", 1964]); // Create a new array, without "Mustang" and "1964"
    print_r($newarray);
    echo "<br>";

    $brands = array("xioami", "iphone", "realme", "techno");
    array_pop($brands); // to remove the last item
    print_r($brands);
    echo "<br>";

    $snacks = array("Bread", "Chips", "Fries", "Sweets");
    array_shift($snacks); // to remove the first item
    print_r($snacks);
?>