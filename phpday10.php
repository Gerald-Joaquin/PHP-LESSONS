<!-- Build a form that collects user data and validates input. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    form {
        max-width: 500px;
        margin: 40px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #f9f9f9;
        font-family: Arial, sans-serif;
    }

    label {
        display: block;
        margin-top: 15px;
        font-weight: bold;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    textarea {
        resize: vertical;
    }

    input[type="radio"] {
        margin-top: 10px;
        margin-right: 5px;
    }

    input[type="submit"] {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #4CAF50;
        border: none;
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    span{
        color: red;
    }
</style>

</head>
<body>
    
<?php
        $nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = ""; // set the variable into blank
        $name = $email = $gender = $comment = $website = "";

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") { //If the form was submitted using the POST method, this condition will evaluate to true and the code inside the if block will run.
            if (empty($_POST['name'])) { // CHECK IF THE INPUT FIELD IS EMPTY
                $nameErr = "name is required";
            } else {
                $name = validate($_POST["name"]); // IT WILL VALIDATE THE INPUTED DATA THE FORMAT IS CORRECT
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                        $nameErr = "Only letters and white space allowed";
                    }  
                }
            }

            if (empty($_POST['email'])) { // CHECK IF THE INPUT FIELD IS EMPTY
                $emailErr = "email is required";
            } else {
                $email = validate($_POST["email"]); // IT WILL VALIDATE THE INPUTED DATA THE FORMAT IS CORRECT
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Invalid email format";
                }
            }

            if (empty($_POST['website'])) { // CHECK IF THE INPUT FIELD IS EMPTY
                $websiteErr = "website is required";
            } else {
                $website = validate($_POST["website"]); // IT WILL VALIDATE THE INPUTED DATA THE FORMAT IS CORRECT
                    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                        $websiteErr = "Invalid URL";
                }
            }

            if (empty($_POST['comment'])) { // CHECK IF THE INPUT FIELD IS EMPTY
                $commentErr = "comment is required";
            } else {
                $comment = validate($_POST["comment"]);
            }

            if (empty($_POST['gender'])) { // CHECK IF THE INPUT FIELD IS EMPTY
                $genderErr = "gender is required";
            } else {
                $gender = validate($_POST["gender"]);
            }
    ?>

    <form action="phpday10.php" method="POST">
        <label for="name">Names <span class="error">* <?php echo $nameErr;?></span></label>
        <input type="text" name="name" id="name"><br>

        <label for="email">Email <span class="error">* <?php echo $emailErr;?></span></label>
        <input type="text" name="email" id="email"><br>

        <label for="website">Website <span class="error">* <?php echo $websiteErr;?></span></label>
        <input type="text" name="website" id="website">
    
        <label for="comment">comment <span class="error">* <?php echo $commentErr;?></span></label>
        <textarea name="comment" rows="5" cols="40" ></textarea>

       <label for="gender">Gender <span class="error">* <?php echo $genderErr;?></span></label>
        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="female") echo "checked";?>
        value="female">Female
        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="male") echo "checked";?>
        value="male">Male
        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="other") echo "checked";?>
        value="other">Other
        <input type="submit">
    
    </form>

    <?php
    // this will check first if forms has no errors or the error variables are empty
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $nameErr == "" && $emailErr == "" && $websiteErr == "" && $commentErr == "" && $genderErr == "") { //If the form was submitted using the POST method, this condition will evaluate to true and the code inside the if block will run.
    echo "<h2>Your Input:</h2>";
    echo "<strong>Name:</strong> " . $name . "<br>";
    echo "<strong>Email:</strong> " . $email . "<br>";
    echo "<strong>Website:</strong> " . $website . "<br>";
    echo "<strong>Comment:</strong> " . $comment . "<br>";
    echo "<strong>Gender:</strong> " . $gender . "<br>";
}
?>

</body>
</html>

