<!-- Day 17: File Uploads
  - Topics: $_FILES, move_uploaded_file(), file validation
  - Task: Create a file upload form with validation.
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="phpday13.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">Upload</button>
    </form>
</body>
</html>

<?php
    if (isset($_POST['submit'])){
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0){
                if ($fileSize < 1000000){
                    $fileNameNew = uniqid('', true). "." . $fileActualExt;
                    
                    $fileDestination = 'uploads/' . $fileNameNew;
                    
                    if (move_uploaded_file($fileTmpName, $fileDestination)) {
                        echo "File uploaded succesfully!";
                    } else {
                        echo "failed uploading, try again!";
                    }
                } else {
                    echo "failed uploading, too big! ";
                }
            } else {
                echo "failed uploading...";
            }
        } else {
            echo "failed";
        }
    }
?>