<?php
session_start();

include 'db-connectivity.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection code
// $con = mysqli_connect('localhost', 'root', '', '18--db');
// if (!$con) {
//     die("Connection failed: " . mysqli_connect_error());
// }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the u
    $queryUsers = "SELECT username, password FROM users WHERE username = ?";
    $stmtUsers = mysqli_prepare($con, $queryUsers);
    mysqli_stmt_bind_param($stmtUsers, "s", $username);
    mysqli_stmt_execute($stmtUsers);
    mysqli_stmt_store_result($stmtUsers);

    // Check if the username exists in the 'admins' table
    $queryAdmins = "SELECT username, password FROM admins WHERE username = ?";
    $stmtAdmins = mysqli_prepare($con, $queryAdmins);
    mysqli_stmt_bind_param($stmtAdmins, "s", $username);
    mysqli_stmt_execute($stmtAdmins);
    mysqli_stmt_store_result($stmtAdmins);

    if (mysqli_stmt_num_rows($stmtUsers) > 0 || mysqli_stmt_num_rows($stmtAdmins) > 0) {
        $dbUsername = "";
        $dbPassword = "";

        if (mysqli_stmt_num_rows($stmtUsers) > 0) {
            mysqli_stmt_bind_result($stmtUsers, $dbUsername, $dbPassword);
            mysqli_stmt_fetch($stmtUsers);
            $userRole = "user"; // Set the user role to 'user'
        } elseif (mysqli_stmt_num_rows($stmtAdmins) > 0) {
            mysqli_stmt_bind_result($stmtAdmins, $dbUsername, $dbPassword);
            mysqli_stmt_fetch($stmtAdmins);
            $userRole = "admin"; // Set the user role to 'admin'
        }

        // Verify the hashed password
        if (password_verify($password, $dbPassword)) {
            $_SESSION["username"] = $dbUsername; // Store the username in the session

            // Redirect users to different links based on their role
            if ($userRole === "admin") {
               // header("Location: /admin/dashboard.php");
                header("Location: http://localhost/Lost%20and%20Found%20System/admin/dashboard.php");

            } else {
                header("Location: http://localhost/Lost%20and%20Found%20System/admin/lostandfoundusers.php");
            }
            
            exit();
        } else {
            echo "Incorrect password";
        }
    } else {
        // Redirect to the login page if the username doesn't exist in either table
        header("Location: http://localhost/Lost%20and%20Found%20System/login.php");
        exit();
    }

    mysqli_stmt_close($stmtUsers);
    mysqli_stmt_close($stmtAdmins);
}
mysqli_close($con);
?>
