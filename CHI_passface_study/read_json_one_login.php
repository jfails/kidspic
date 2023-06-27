<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "K1dzteam!", "PassFace");
echo "inside";
$data = $_POST["img"];
$data1 = $_POST["username"];
$sql1 = "SELECT MAX(id) from log_108_credentials where uname = '$data1'";
$rest = mysqli_query($link, $sql1);

$row = mysqli_fetch_array($rest);
echo $row[0];
date_default_timezone_set('America/Boise');
$timestamp = date('Y-m-d H:i:s');
$sql = "UPDATE log_108_credentials SET p2 = '$data', p2_time = '$timestamp' WHERE uname = '$data1' AND id = '$row[0]'";
if(mysqli_query($link, $sql)){
  echo "Records added successfully.";
mysqli_close($link);
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>
