<!-- WHILE LOOPS -->

<!--  Display numbers 1 to 10 numbers using different loops. -->

<?php
    $x = 1;

    //USING WHILE LOOP -------------------------------
    while ($x <= 10){
        echo "number: " . $x . "<br>";
        $x++;
    }
    echo "<br>";

    //USING DO WHILE LOOP----------------------------

    $y = 1;

    do {
        echo "Number: " . $y . "<br>" ;
        $y++;
    } while ($y <= 10);
    echo "<br>";

    // USING FOR LOOP ------------------------------

    for ($i = 1; $i <= 10; $i++) {
        echo "Number: " . $i . "<br>";
    }
    

    //USING FOREACH LOOP --------------------------

    $num = [1,2,3,4,5,6,7,8,9,10];

    echo "<br>";
    foreach ($num as $numbers) {
        echo "Numbers: " . $numbers ."<br>";
    }
    

    //USING BREAK IN FOR LOOP --------------------

    echo "<br>";
    for ($i = 1; $i <= 20; $i++) {
        if ($i === 10) {
            break;
        }
        echo "Number: " . $i . "<br>";
    }

    echo "<br>";

    //USING CONTINUE IN WHILE LOOP ---------------

    echo "<br>";

    $a = 0;
    while($a <= 10) {
        if ($a == 0) {
            $a++; 
            continue;
        }
        echo "Number: $a <br>";
        $a++;
    }

?>