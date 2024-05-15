<?php

session_start();
include '../../db_connection.php';

if (isset($_GET["id"])) {

  $room_id = $_GET["id"];

  $sql = "DELETE FROM rooms WHERE room_id='$room_id'";

  $result = mysqli_query($conn, $sql);

} 

header("Location: ./rooms.php?delete=success");