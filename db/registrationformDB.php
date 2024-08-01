 <?php
session_start();

include 'db-connectivity.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enrollmentNumber = $_POST['enrollment_number'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullName = $_POST['fullname'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];

    // Check if the enrollment number exists in the 'enrollment_numbers' table
    $queryEnrollment = "SELECT id FROM valid_enrollment_numbers WHERE enrollment_number = ?";
    $stmtEnrollment = mysqli_prepare($con, $queryEnrollment);
    mysqli_stmt_bind_param($stmtEnrollment, "s", $enrollmentNumber);
    mysqli_stmt_execute($stmtEnrollment);
    mysqli_stmt_store_result($stmtEnrollment);

    if (mysqli_stmt_num_rows($stmtEnrollment) == 1) {
        // Enrollment number exists, register the user in the 'users' table
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $queryRegister = "INSERT INTO users (enrollment_number, username, password, fullname, address, contact, email) 
                          VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmtRegister = mysqli_prepare($con, $queryRegister);
        mysqli_stmt_bind_param($stmtRegister, "sssssss", $enrollmentNumber, $username, $hashedPassword, $fullName, $address, $contact, $email);
        mysqli_stmt_execute($stmtRegister);
        // Set a success message in a session variable
           $_SESSION["registration_success"] = true;
           if (isset($_SESSION["registration_success"]) && $_SESSION["registration_success"]) {
            echo "Registration was successful! You can now log in.";
            unset($_SESSION["registration_success"]); // Unset the session variable to prevent showing the message again
        }  
           header("Location: http://localhost/Lost%20and%20Found%20System/index.php");
        exit();
    } else {
        echo "Enrollment number not found";
    }
    
    mysqli_stmt_close($stmtEnrollment);
}

mysqli_close($con);
?>
