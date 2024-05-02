<?php

session_start();
include '../../db_connection.php';

if (isset($_POST['food_msg']) && isset($_POST['food_type'])) {

    $food_msg = $_POST['food_msg'];
    $food_type = $_POST['food_type'];

    $sql = "INSERT INTO announcements (message, message_type)
            VALUES ('$food_msg','$food_type')";

    $result = mysqli_query($conn, $sql);

    if($result){
      header("Location: ./catering.php?post=true"); 
    } else {
      header("Location: ./catering.php?post=false"); 
};

    exit();
      
} 