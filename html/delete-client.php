<?php

session_start();
include '../db_connection.php';

if (isset($_GET["id"])) {

  $id = $_GET["id"];

  $sql = "DELETE FROM users WHERE id='$id'";

  $result = mysqli_query($conn, $sql);

} 

header("Location: ./client.php?delete=success");