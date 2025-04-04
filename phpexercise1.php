<!-- CONDITION STATMENTS EXERCISE -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRADE EVALUATION</title>
</head>
<body>
    <h2>GRADE EVALUATION</h2>
    <form action="" method="post">
        <label>Enter Grades (comma-separated): </label>
        <input type="text" name="grades" placeholder="e.g. 1.25, 1.50, 2.00" required>
        <br><br>
        <label>Enter Corresponding Units (comma-separated): </label>
        <input type="text" name="units" placeholder="e.g. 3, 4, 2" required>
        <br><br>
        <input type="submit" value="Calculate GWA">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user inputs
        $gradesInput = $_POST["grades"];
        $unitsInput = $_POST["units"];

        // Convert inputs into arrays
        $grades = explode(",", str_replace(" ", "", $gradesInput)); // Remove spaces and split by comma
        $units = explode(",", str_replace(" ", "", $unitsInput));

        // Check if both arrays have the same number of elements
        if (count($grades) != count($units)) {
            echo "<p style='color:red;'>Error: The number of grades and units must match.</p>";
        } else {
            $totalWeightedGrades = 0;
            $totalUnits = 0;
            $valid = true;

            // Loop through the inputs to calculate weighted grades
            for ($i = 0; $i < count($grades); $i++) {
                $grade = floatval($grades[$i]);
                $unit = floatval($units[$i]);

                if ($grade <= 0 || $unit <= 0) {
                    $valid = false;
                    break;
                }

                $totalWeightedGrades += $grade * $unit;
                $totalUnits += $unit;
            }

            if (!$valid) {
                echo "<p style='color:red;'>Error: Please enter valid positive numbers.</p>";
            } elseif ($totalUnits == 0) {
                echo "<p style='color:red;'>Error: Total units cannot be zero.</p>";
            } else {
                // Calculate the General Weighted Average (GWA)
                $gwa = $totalWeightedGrades / $totalUnits;
                echo "<h3>Your GWA: " . number_format($gwa, 2) . "</h3>";

                // GWA Evaluation
                if ($gwa == 1.00) {
                    echo "<p style='color:green; font-weight:bold;'>EXCELLENT!</p>";
                } elseif ($gwa <= 1.50) {
                    echo "<p style='color:blue; font-weight:bold;'>VERY GOOD!</p>";
                } elseif ($gwa <= 2.00) {
                    echo "<p style='color:purple; font-weight:bold;'>GOOD!</p>";
                } elseif ($gwa <= 2.50) {
                    echo "<p style='color:orange; font-weight:bold;'>IT'S ALRIGHT!</p>";
                } elseif ($gwa <= 3.00) {
                    echo "<p style='color:red; font-weight:bold;'>DAMNNNNNN!</p>";
                } else {
                    echo "<p style='color:black; font-weight:bold;'>MISS U!</p>";
                }
            }
        }
    }
    ?>
</body>
</html>

