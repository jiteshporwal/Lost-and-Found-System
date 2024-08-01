<?php
// Database connection code
include 'db-connectivity.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password before storing it in the database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if the username already exists in the 'admins' table
    $checkQuery = "SELECT username FROM admins WHERE username = ?";
    $stmtCheck = mysqli_prepare($con, $checkQuery);
    mysqli_stmt_bind_param($stmtCheck, "s", $username);
    mysqli_stmt_execute($stmtCheck);
    mysqli_stmt_store_result($stmtCheck);

    if (mysqli_stmt_num_rows($stmtCheck) > 0) {
        echo "Username already exists. Please choose a different username.";
    } else {
        // Insert the new admin user into the 'admins' table
        $insertQuery = "INSERT INTO admins (Username, Password) VALUES (?, ?)";
        $stmtInsert = mysqli_prepare($con, $insertQuery);
        mysqli_stmt_bind_param($stmtInsert, "ss", $username, $hashedPassword);
        mysqli_stmt_execute($stmtInsert);

        if (mysqli_stmt_affected_rows($stmtInsert) > 0) {
            echo "Registration successful. You can now log in as an admin.";
        } else {
            echo "Error registering admin. Please try again.";
        }
    }

    mysqli_stmt_close($stmtCheck);
    mysqli_stmt_close($stmtInsert);
}

mysqli_close($con);
?>
