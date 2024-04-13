<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'db_connection.php';

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];

    // Validate user input

    // Query to fetch user from database
    $sql = "SELECT * FROM users1 WHERE email = '$email' AND user_type = '$user_type'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Verify password
        if(password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_type'] = $row['user_type'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['success_message'] = "You have successfully logged in."; // Set success message
            //header('Location: dashboard.php'); // Redirect to dashboard after successful login
            exit();
        } else {
            $error = "Invalid email or password";
        }
    } else {
        $error = "Invalid email or password";
    }
}

// Display error message if set
if(isset($error)) {
    echo $error;
}
?>

