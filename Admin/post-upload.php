<?php

$con = mysqli_connect('localhost', 'root', '', '18--db');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
    $post_category = $_POST['post_category'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $location = $_POST['location'];
    $postType = $_POST['postType'];
    $member = $_POST['member'];
    $status = $_POST['status'];

    $imageFileName = $_FILES['image']['name'];
    $imageTempName = $_FILES['image']['tmp_name'];
    $imageFolder = 'images/'; // Folder where images will be stored (create this folder in your project directory)

    $imageFolder = $_SERVER['DOCUMENT_ROOT'] . '/Lost and Found System/images/';

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
    $query = "INSERT INTO posts (post_category, title, description, post_date, post_time, location, post_type, member, status, image)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "ssssssssss", $post_category, $title, $description, $date, $time, $location, $postType, $member, $status, $targetPath);

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
