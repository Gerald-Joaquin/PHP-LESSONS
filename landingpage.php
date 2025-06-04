<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: phpday15.php");
        exit();
    }

    echo "Welcome, " . $_SESSION['username'] . "!<br>";
    echo "<a href='logout.php'>Logout</a>";
?>