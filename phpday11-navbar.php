<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        }

        body {
        display: flex;
        height: 100vh;
        background: #f5f6fa;
        }

        .sidebar {
        width: 220px;
        background: #fff;
        padding: 20px;
        border-right: 1px solid #ddd;
        background: #1a1a1a;
        
        }

        .sidebar h2 {
        font-size: 20px;
        margin-bottom: 20px;
        color: #f5f6fa;
        }

        .sidebar a {
        display: block;
        margin: 10px 0;
        color: #f5f6fa;
        text-decoration: none;
        padding: 10px;
        border-radius: 5px;
        }

        .sidebar a:hover,
        .sidebar a:active {
        background: #e0e0e0;
        color: #1a1a1a;
        transition: background 0.5s, color 0.5s;
        
        }

    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Student Info</h2>
        <a href="phpday11-db.php" class="active">Dashboard</a>
        <a href="phpday11-profile.php">Student Profiles</a>
        <a href="phpday11-course.php">Courses</a>
        <a href="#">Grades</a>
        <a href="#">Attendance</a>
        <a href="#">Settings</a>
    </div>
</body>
</html>