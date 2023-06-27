<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "K1dzteam!", "PassFace");

$image = $_POST["img"];
$uname = $_POST["username"];
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$p1_loc = $_POST["p1location"];
$reg_time_stamp = $_POST["p1_reg_start_time"];
$reg_start_time_stamp = $_POST["reg_start_time"];
//if (empty($data['img'])) {
  //echo "please selct an image";
//}
date_default_timezone_set('America/Boise');
$timestamp = date('Y-m-d H:i:s');

//$sql ="UPDATE reg_108_credentials SET p1 = '$image', p1_location = '$p1_loc', p1_time = '$timestamp' WHERE uname = '$uname'";
$sql = "INSERT INTO reg_108_credentials (uname, firstname, lastname, p1, p1_location, p1_time, p1_pre_time, reg_start_time) VALUES ('$uname', '$fname' , '$lname' , '$image', '$p1_loc', '$timestamp', '$reg_time_stamp', '$reg_start_time_stamp')";

if (mysqli_query($link, $sql)) {
  echo "Records added successfully.";
mysqli_close($link);
} else {
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
//mysqli_close($link);
