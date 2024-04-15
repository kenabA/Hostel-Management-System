<?php
session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phoneNumber = $_POST['phoneNumber'];
    $dob = $_POST['dob'];
    $guardianName = $_POST['guardianName'];
    $guardianPhoneNumber = $_POST['guardianPhoneNumber'];
    $guardianPassport = $_POST['guardianPassport'];
    $userType = $_POST['userType'];

    
    $sql = "INSERT INTO users (name, email, password, phone_number, dob, guardian_name, guardian_phone_number, guardian_passport, user_type)
            VALUES ('$name', '$email', '$password', '$phoneNumber', '$dob', '$guardianName', '$guardianPhoneNumber', '$guardianPassport', '$userType')";

    if( mysqli_query($conn, $sql)){
        echo "<script type='text/javascript'>alert('Successfully signed up!');</script>";
    } else{
        echo "<script type='text/javascript'>alert('Could not add data.')</script>";
    };

}

?>