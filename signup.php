<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $phoneNumber = $_POST['phoneNumber'];
    $dob = $_POST['dob'];
    $guardianName = $_POST['guardianName'];
    $guardianPhoneNumber = $_POST['guardianPhoneNumber'];
    $guardianPassport = $_POST['guardianPassport'];
    $guardianType = $_POST['userType'];
    $foodCategory = $_POST['foodCategory'];
    $status = "Pending";

    $checkSQL = "SELECT * FROM users WHERE email='$email'";
  
    $checkQuery = mysqli_query($conn, $checkSQL);
    
    $result = mysqli_fetch_assoc($checkQuery);

    if($password != $confirmPassword){
        header("Location: ./index.php?signup=unmatched");
        exit;
    }
  
  if($result) {
    header("Location: ./index.php?signup=duplicate");
    exit;
  } else{

    $sql = "INSERT INTO users (name, email, gender,password, phone_number, dob, guardian_name, guardian_phone_number, guardian_citizen, guardian_type, food_category, status)
    VALUES ('$name', '$email', '$gender','$password', '$phoneNumber', '$dob', '$guardianName', '$guardianPhoneNumber', '$guardianPassport', '$guardianType', '$foodCategory' ,'$status')";

    if( mysqli_query($conn, $sql)){
        header("Location: ./index.php?signup=true");
    } else{
        header("Location: ./index.php?signup=false");
    };
}
}

?>