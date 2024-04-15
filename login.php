<?php

include 'db_connection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];

    $sql = "SELECT * FROM users WHERE email = '$email' limit 1";
    $result = mysqli_query($conn, $sql);

    if($result) {

        if ($result && mysqli_num_rows($result) > 0 ){

        $user_data = mysqli_fetch_assoc($result);
        
        if($user_data['password'] == $password) {
            header('Location: /Applications/XAMPP/xamppfiles/htdocs/HMS/html/admin-dashboard.html');
            die;
        } else {
            $error = "Invalid email or password";
        }
    } else {
        $error = "No records found";
    }
}
}

