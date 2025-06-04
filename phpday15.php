<?php
    include ("database.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password);
        

    if ($stmt->execute()) {
        echo "Signup successful. <a href='login.php'>Login here</a>.";
    } else {
        echo "Error: Username may already exist.";
    }

    
}    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <form action="phpday15.php" method="POST">
        <label for="">Username: <input type="text" name="username"></label>
        <label for="">Password: <input type="password" name="password"></label>
        <button type="submit" class="btn btn-primary">Sign up</button>
    </form>
    
</body>
</html>