<?php
// Include the database connection file
include 'db_connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phoneNumber = $_POST['phoneNumber'];
    $dob = $_POST['dob'];
    $guardianName = $_POST['guardianName'];
    $guardianPhoneNumber = $_POST['guardianPhoneNumber'];
    $guardianPassport = $_POST['guardianPassport'];
    $userType = $_POST['userType'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO users (name, email, password, phone_number, dob, guardian_name, guardian_phone_number, guardian_passport, user_type)
            VALUES ('$name', '$email', '$password', '$phoneNumber', '$dob', '$guardianName', '$guardianPhoneNumber', '$guardianPassport', '$userType')";

    if (mysqli_query($conn, $sql)) {
        // Echo success message
        echo "New record created successfully";
    } else {
        // Echo error message
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
