<?php

session_start();
include '../../db_connection.php';

if (isset($_GET["id"])) {

  $food_id = $_GET["id"];

  $sql = "DELETE FROM catering WHERE food_id='$food_id'";

  $result = mysqli_query($conn, $sql);

} 

header("Location: ./catering.php?delete=success");