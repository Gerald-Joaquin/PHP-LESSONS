<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Validation Result</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }

      body {
        background-color: #d0ebff;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
      }

      .result-container {
        background-color: #74c0fc;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        padding: 30px;
        max-width: 300px;
        text-align: center;
      }

      .result-container h2 {
        color: #1864ab;
        padding-bottom: 15px;
        font-size: 20px;
      }

      .message {
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 5px;
      }

      .valid {
        background-color: #40c057;
        color: white;
        font-size: 15px;
      }

      .invalid {
        background-color: #fa5252;
        color: white;
        font-size: 15px;
      }

      .back-btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #1971c2;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-size: 15px;
      }

      .back-btn:hover {
        background-color: #1864ab;
      }
    </style>
</head>
<body>
    <div class="result-container">
        <?php
        
        $valid_email = "markgeraldsjoaquin@iskolarngbayan.pup.edu.ph";
        $valid_password = "password";

        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email === $valid_email && $password === $valid_password) {
            echo '<h2>Validation Successful!</h2>';
            echo '<div class="message valid">VALID CREDENTIALS</div>';
        } else {
            echo '<h2>Validation Failed</h2>';
            echo '<div class="message invalid">INVALID CREDENTIALS Please try again</div>';
        }
        ?>
        <a href="act2.html" class="back-btn">Try Again</a>
    </div>
</body>
</html>


