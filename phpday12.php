<!-- Display current date and time in different formats. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DATE AND TIME</h1>
    <div>
        <p> automatically update the copyright year</p>
        <p>© <?php echo date("Y");?> Student Information System. All rights reserved.</p> 
    </div>
</body>

<?php
    echo "date in different format";
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l") . "<br>";

    date_default_timezone_set("Singapore"); // the philippine timezone is more likely in singapore
    echo "Time: " . date("h:i:sa") . "<br>";

    $time = mktime(04,25,28, 5,05,2025);
    echo "Create date is " . date("Y-m-d h:i:sa", $time) . "<br>";

    $d=strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("next Friday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("+7 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $startdate = strtotime("Saturday");
    $enddate = strtotime("+6 weeks", $startdate);

    while ($startdate < $enddate) {
        echo date("M d", $startdate) . "<br>";
        $startdate = strtotime("+1 week", $startdate);
    }

    $d1=strtotime("July 04");
    $d2=ceil(($d1-time())/60/60/24);
    echo "There are " . $d2 ." days until 4th of July.";

    // $file = fopen("log.txt", "a");
    // $log = "User logged in at " . date("Y-m-d H:i:s") . "\n";
    // echo fwrite($file, $log);
    // echofclose($file);
    echo "<br>";

    $expiry = mktime(0, 0, 0, date("m") + 1, date("d"), date("Y"));  
    echo "Subscription expires on: " . date("Y-m-d", $expiry);
    echo "<br>";

    $dateString = "2025-05-15";
    $timestamp = strtotime($dateString);
    echo date("l, F j, Y", $timestamp);  // Outputs: Thursday, May 15, 2025
    echo "<br>";
    echo "<br>";


    $currentdate = date("Y-m-d");

    $expirationdate = date("Y-m-d", strtotime("+15 days"));

    echo "Subcription date: " . $currentdate;
    echo "<br>";
    echo "Expiration date: " . $expirationdate;
    echo "<br>";
    echo "Subcription status: ";

    if (strtotime($currentdate) > strtotime($expirationdate)) {
        echo "subcription ended";
    } else {
        echo "subcription not ended yet!";
    }
    echo "<br>";

    $startDate = mktime(0, 0, 0, 5, 7, 2025);  // Start from today
    $futureDate = mktime(0, 0, 0, 5, 7 + 100, 2025);  // Add 100 days

    echo "Date after 100 days: " . date("Y-m-d", $futureDate);

?>
</html>