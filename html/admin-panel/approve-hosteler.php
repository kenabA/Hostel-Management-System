<?php

session_start();
include '../../db_connection.php';

if (isset($_GET["id"]) || isset($_GET["btn"])) {

  $btn = $_GET["btn"];
  $id = $_GET["id"];

  if ($btn == "selected") {
    
  $sql = "UPDATE users SET approved = 'Yes' WHERE id = {$id};";

  $result = mysqli_query($conn, $sql);

  if($result){
    header("Location: ./approval.php?approved=accepted");
  }
    
  
} else {

  $sql = "UPDATE users SET approved = 'Rejected' WHERE id = {$id};";

  $result = mysqli_query($conn, $sql);

  if($result){
    header("Location: ./approval.php?approved=rejected");
  }
    
  }
  
  }

  


  // echo $food_id;





// header("Location: ./catering.php?delete=success");