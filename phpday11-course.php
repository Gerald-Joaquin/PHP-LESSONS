<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Student Info</title>
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
      background-color: #f5f6fa;
    }

    .menu {
    width: 200px;
    background-color: #fff;
    border-right: 1px solid #ddd;
    padding-right: 20px;
    height: 100vh; /* ensures full vertical height */
    }

    .text {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      text-align: center;
      background-color: #f0f1f6;
    }

    .text h1 {
      font-size: 2rem;
      margin-bottom: 10px;
    }

    .text p {
      font-size: 1rem;
    }
  </style>
</head>
<body>
    <?php include 'phpday11-navbar.php'; ?>
    
  <div class="text">
    <h1>Welcome to course available in our university</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt adipisci odio incidunt eveniet quae laboriosam tempore, culpa distinctio illo autem corrupti non eligendi dolores obcaecati recusandae nihil suscipit dignissimos nemo.</p>

  </div>

</body>
</html>
