<?php

include 'db_connection.php';
session_start();

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['user_type'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);

    // FOR STUDENT
    if($user_type == 'Student'){

    $sql = "SELECT * FROM users WHERE email = '$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    $user_data = mysqli_fetch_assoc($result);

    if(is_array($user_data) && !empty($user_data)){
        $_SESSION['id'] = $user_data['id'];
        $_SESSION['email'] = $user_data['email'];
        $_SESSION['name'] = $user_data['name'];

        header("Location: ./html/student-panel/student-dashboard.php?login=true");
        exit();
    } else {
        header("Location: ./index.php?login=false");
    }
} 
// FOR ADMIN
else {
    $sql = "SELECT * FROM admin WHERE email = '$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    $user_data = mysqli_fetch_assoc($result);

    if(is_array($user_data) && !empty($user_data)){
        $_SESSION['id'] = $user_data['id'];
        $_SESSION['email'] = $user_data['email'];
        $_SESSION['name'] = $user_data['name'];
        
        header("Location: ./html/admin-panel/admin-dashboard.php?login=true");

        exit();
    } else {
        header("Location: ./index.php?login=false");
    }

}
}