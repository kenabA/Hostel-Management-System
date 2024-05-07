<?php

session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include '../../db_connection.php';

if (isset($_GET["id"]) || isset($_GET["action"])) {

  $id = $_GET["id"];
  $action = $_GET["action"];

  if ($action == "on") {
    
  $sql = "UPDATE users SET status = 'Active' WHERE id = {$id};";

  $result = mysqli_query($conn, $sql);

  if($result){
    header("Location: ./student-dashboard.php?status=turnedOn");
  }
} else {
  $sql = "UPDATE users SET status = 'Inactive' WHERE id = {$id};";

  $result = mysqli_query($conn, $sql);

  if($result){
    header("Location: ./student-dashboard.php?status=turnedOff");
  }
}
}
    
  