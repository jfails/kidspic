<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "K1dzteam!", "PassFace");

$image = $_POST["img"];
$uname = $_POST["username"];
//$LastName = mysql_real_escape_string($_POST["name"]);
//$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
//$sql2 = "SELECT firstname FROM reg_108_credentials where uname = '$uname'";
//$fname = mysqli_query($link, $sql2);
date_default_timezone_set('America/Boise');
$timestamp = date('Y-m-d H:i:s');
$log_time_stamp = $_POST["p1_log_start_time"];
$pre_login_time_stamp = $_POST["pre_log"];
//$sql2 = "select firstname from reg_108_credentials where uname = '$uname'";
//$first_name = mysqli_query($link, $sql2);
//echo $first_name;
$sql = "INSERT INTO log_108_credentials (uname, p1, p1_pre_time, pre_log_time, p1_time) VALUES ('$uname','$image', '$log_time_stamp', '$pre_login_time_stamp', '$timestamp')";

if (mysqli_query($link, $sql)) {
  echo "Records added successfully.";
mysqli_close($link);
} else {
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
//mysqli_close($link);
