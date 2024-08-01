<?php
session_start();
echo "hii";

$con = mysqli_connect('localhost', 'root', '', '18--db');

// Check if the connection is successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successful!";
}

// The rest of your code goes here...

// Close the database connection when you're done
mysqli_close($con);

if (isset($_POST['submit'])) {
    
    $imageFileName = $_FILES['profile_image']['name'];
    $imageTempName = $_FILES['profile_image']['tmp_name'];
    $imageFolder = 'userimage/'; // Folder where images will be stored (create this folder in your project directory)

    $imageFolder = $_SERVER['DOCUMENT_ROOT'] . '/Lost and Found System/userimage/';

// ...

// Move the uploaded image to the specified folder
$targetPath_ = $imageFolder . $imageFileName;

if (move_uploaded_file($imageTempName, $targetPath_)) {
    echo "File successfully uploaded and moved.";
} else {
    echo "Error uploading/moving the file.";
}

    // Move the uploaded image to the specified folder
    $targetPath = $imageFileName; 


    move_uploaded_file($imageTempName, $targetPath_);

    // Insert data including image path into the database
    $query = "INSERT INTO usersimages (Userimage)
              VALUES (?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "s", $targetPath);

    if (mysqli_stmt_execute($stmt)) {
        if (mysqli_stmt_affected_rows($stmt) > 0) {
 //           echo "Data inserted successfully.";
 header("Location: http://localhost/Lost%20and%20Found%20System/admin/lostandfoundusers.php");
     
        } else {
            echo "Error inserting data.";
        }
    } else {
        echo "Error executing the SQL query.";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($con);
?>
