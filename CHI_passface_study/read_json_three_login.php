<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "K1dzteam!", "PassFace");

$data = $_POST["img"];
$data1 = $_POST["username"];
  //$data will contain the_id
//do some processing
 
// Check connection
//if($link === false){
  //  die("ERROR: Could not connect. " . mysqli_connect_error());
//}
// Attempt insert query executio
$sql1 = "SELECT MAX(id) from log_108_credentials where uname = '$data1'";
$rest = mysqli_query($link, $sql1);
$row = mysqli_fetch_array($rest);
date_default_timezone_set('America/Boise');
$timestamp = date('Y-m-d H:i:s');
$sql = "UPDATE log_108_credentials SET p4 = '$data', p4_time='$timestamp' WHERE uname = '$data1' AND id = '$row[0]'";
//$sql = "UPDATE credentials SET credentials.p2='$data' WHERE uname= '$data1'";
//$sql = "INSERT INTO credentials (uname, p1) VALUES ('$data1', '$data')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
mysqli_close($link);
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>
