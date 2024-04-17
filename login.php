<?php

include 'db_connection.php';
session_start();

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['user_type'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);

    $sql = "SELECT * FROM users WHERE email = '$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    $user_data = mysqli_fetch_assoc($result);

    if(is_array($user_data) && !empty($user_data)){
        $_SESSION['email'] = $user_data['email'];
        $_SESSION['name'] = $user_data['name'];
        echo "<script type='text/javascript'>alert('Logged in Successful!')</script>";
        echo "<script type='text/javascript'>window.location.href = 'html/admin-dashboard.php'</script>";
        exit();
    } else {
        echo "<script type='text/javascript'>alert('User Not Found')</script>";
    }
}
